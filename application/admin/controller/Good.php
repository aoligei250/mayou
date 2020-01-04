<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;

class Good extends Controller
{
    public function index()
    {
        $data=Db::table('goods')
            ->join('cate','cate.id=goods.cate_id')
            ->field('goods.*,cate.cate_name')
            ->select();
        foreach ($data as $key=>$value)
        {
          $data[$key]['images']=Db::table('images')->where('gid',$data[$key]['id'])->select();
        }
     //   dump($data);


        $this->assign('data',$data);
        return view('index');
    }

    public function add()
    {

        $cate=Db::table('cate')->select();
      //  dump($cate)
        $Cate=new \app\admin\model\Cate();
        $cate=$Cate->checkdata($cate);
      //  dump($cate);
        $this->assign('cate',$cate);

        return view('add');
    }

    public function upload()
    {
        $file=request()->file('Filedata');
     //   dump($file);
        if($file)
        {
            $info=$file->move(ROOT_PATH.'/public/upload/good');
           // dump($info);
            if($info)
            {
                return $info->getSaveName();

            }
            else
            {
            return false;
            }
        }
    }

    public function save()
    {
        $data=input('post.');
      //  dump($data);
        $images=explode(",",$data['images']);
      //  dump($images);
         if($id=Db::table('goods')->strict(false)->insertGetId($data))
         {
                 foreach ($images as $value)
                 {
                     $arr=array();
                     $arr['images']=$value;
                     $arr['gid']=$id;
                     Db::table('images')->insert($arr);
                 }
             $this->redirect('index');
         }
         else
         {
             return $this->error('添加失败','add');
         }

    }

    public function del()
    {
        $id=input('get.id');
       // dump($id);
        $data=Db::table('goods')->find($id);
        $images=Db::table('images')->where('gid',$id)->select();
      //  dump($images);
        $res=Db::table('goods')->delete($id);
        if($res)
        {
            unlink('./upload/good/'.$data['image']);
            foreach ($images as $value)
            {
                Db::table('images')->where('gid',$id)->delete();
                unlink('./upload/good/'.$value['images']);
            }
            return 1;
        }
        else
        {
            return 0;
            }
    }

    public function sort()
    {
        $id=input('id');
        //dump($id);

        $sort=input('sort');
      //  dump($sort);
        $res=Db::table('goods')->where('id',$id)->update(['goods_sort'=>$sort]);
       // dump($res);
        if($res)
        {
            return 1;
        }
        else{
            return "修改失败";
        }
    }

    //批量删除
    public function delall()
    {
       //接收数据


    }


}