<?php
/**
 * Created by PhpStorm.
 * User: 51534
 * Date: 2019/9/7
 * Time: 23:19
 */
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Validate;
class Slider extends Controller
{
    public function index()
    {
       //查询数据
        $data=Db::table('slider')->select();
        $this->assign('data',$data);

        return view('index');
    }
    //图片处理方法
    public function upload()
    {
        $file=request()->file('Filedata');
      //  dump($file);
        if($file)
        {
            $info=$file->move(ROOT_PATH.'/public/upload/slider');
          //  dump($info);
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

    //添加数据处理方法
    public function insert()
    {
        $data=input('post.');
     //   dump($data['slider_name']);

       //独立验证
       // dump($data[0]['slider_name']);

        $validate = new Validate([
              'slider_name|轮播图名称'  => 'require',
              'slider_url|轮播图链接' => 'require',
              'img|轮播图图片'=>'require',
              'sort|轮播图排序'=>'require|number',
        ]);

       if (!$validate->check($data)) {
        //   return 1;
           return   $validate->getError();
       }
       else
       {
           $res=Db::table('slider')->insert($data);
           if($res)
           {
               return  1;
           }
           else
           {
               return 0;
           }

       }







    }
    //轮播图修改页面
    public function edit()
    {
        $id=input('id');
       // dump($id);
        $olddata=Db::table('slider')->find($id);
        $this->assign('olddata',$olddata);


        return view('edit');
    }
   //轮播图修改方法
    public function update()
    {
       // echo 111;
        $data=input('post.');
     //   dump($data);
        $olddata=Db::table('slider')->find($data['id']);
        $res=Db::table('slider')->where('id',$data['id'])->update($data);
     if($res)
     {

         unlink('./upload/slider/'.$olddata['img']);
         return 1;

     }
     else
     {
        return 0;
     }
    //    dump($data['id']);
    }
    //轮播图删除
    public function del()
    {
        $id=input('get.');
       // dump($id);
        $data=Db::table('slider')->find($id);
        $image=$data['img'];
        $res=Db::table('slider')->delete($id);
        if($res)
        {
            unlink('./upload/slider/'.$image);
            return 1;
        }
        else
        {
               return 0;
        }
    }
}