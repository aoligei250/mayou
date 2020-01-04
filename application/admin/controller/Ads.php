<?php
/**
 * Created by PhpStorm.
 * User: 51534
 * Date: 2019/9/27
 * Time: 12:00
 */
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Validate;

class Ads extends Controller
{
    public function index()
    {
        $ads=Db::table('ads')
            ->field('ads.*,cate.cate_name')
            ->join('cate','cate.id=ads.c_id')
            ->select();
     //  dump($ads);


       $cate=Db::table('cate')->where('pid',0)->select();
      // dump($cate);
        $this->assign('cate',$cate);
        $this->assign('ads',$ads);
        return view('index');
    }
    //图片
    public function  upload()
    {
        $file=request()->file('Filedata');
       // dump($file);
        if($file)
        {
            $info=$file->move(ROOT_PATH."/public/upload/ads");
            if($info)
            {
                return $info->getSaveName();
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }
    //添加操作
    public function save()
    {
        if(request()->isPost())
        {
            $data=input('post.');
         //   dump($data);
            $validate = new Validate([
                'ads_name|广告名称'  => 'require',
                'ads_description|广告描述'=>'require',
                'ads_url|广告链接' => 'require',
                'ads_image|广告图片'=>'require',
                'ads_sort|广告排序'=>'require|number',
                'is_lou|广告是否显示'=>'require',
                'c_id|广告所属分类'=>'require'
            ]);

            if (!$validate->check($data)) {
                //   return 1;
                return   $validate->getError();
            }
            else
            {
                $res=Db::table('ads')->insert($data);
                if($res)
                {
                    return 1;

                }
                else
                {
                    return 0;
                }
            }
        }
    }

    //删除
    public function del()
    {
        $id=input('get.id');
       // dump($id);
        $ads=Db::table('ads')->find($id);
        $image=$ads['ads_image'];
        $res=Db::table('ads')->delete($id);
        if($res)
        {
            if($image)
            {
                unlink('./upload/ads/'.$image);
            }

            return 1;
        }
        else
        {
            return 0;
        }
    }
    //修改页面
    public function edit()
    {
        $id=input('id');
     //   dump($id);
        //查询数据
        $data=Db::table('cate')->select();
        $Cate=new \app\admin\model\Cate();
        $cate=$Cate->checkdata($data);
        $olddata=Db::table('ads')->where('id',$id)->find();
      //  dump($olddata);
        $this->assign('olddata',$olddata);
        $this->assign('cate',$cate);
        return view('edit');
    }
    //修改数据处理
    public function update()
    {
        $data=input('post.');
      //  dump($data);
        $olddata=Db::table('ads')->where('id',$data['id'])->find();
        //获取旧图片
    //    dump($olddata);
        if($data['ads_image'])
        {
             $res=Db::table('ads')->where('id',$data['id'])->update($data);
             if($res)
             {
                 unlink("./upload/ads/".$olddata['ads_image']);
                 return 1;
             }
             else{

                 return "修改失败";
             }
        }
        else
        {
            //没有说明不修改图片，则把原图片赋给表单过来的值
            $data['ads_image']=$olddata['ads_image'];
            $res=Db::table('ads')->where('id',$data['id'])->update($data);
            if($res)
            {
                return 1;
            }
            else
            {
                return "您未修改任何信息";
            }

        }
        dump($olddata);

    }
}