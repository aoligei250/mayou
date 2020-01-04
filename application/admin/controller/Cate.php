<?php
/**
 * Created by PhpStorm.
 * User: 51534
 * Date: 2019/9/10
 * Time: 10:30
 */
namespace app\admin\controller;
use PHPMailer\PHPMailer;
use think\Controller;
use think\Db;
use think\Validate;



class Cate extends Controller
{

    public function index()
    {
         $data=Db::table('cate')->select();
         //dump($data);
        // $arr=Loader::model('cate')->checkdata($data);
        $cate=new \app\admin\model\Cate();
        $arr=$cate->checkdata($data);
        // $arr=$this->checkdata($data,$pid=0);
        //  var_dump($arr);
       //  $data=Db::query('select *, from cate ');
      //  dump($arr);
     // dump($arr);

         $this->assign('data',$arr);
        return view('index');
    }
    //分类添加页面
    public function add()
    {
       $pid=request()->param('pid');
     //  dump($pid);
       $path=request()->param('path');
       //dump($path);



        $data=Db::table('cate')->select();
        $cate=new \app\admin\model\Cate();
        $arr=$cate->checkdata($data);
        $this->assign('cate',$arr);
     return view('create');
    }
    //添加亚眠数据处理
    function save()
    {
        $data=input('post.');
      // dump($data);
        //验证
        $validate = new Validate([
           'cate_name|分类名称'=>'require',
           'is_lou|是否为楼层'=>'require',
        ]);

        if (!$validate->check($data)) {
            //   return 1;
            return   $validate->getError();
        }
        $res=Db::table('cate')->insert($data);
        if($res)
        {
           return 1;
        }
        else
        {
           return 0;
        }
    }
    //删除
    public function checkdel($data,$id)
    {
       static $arr=array();
       foreach ($data as $key=>$value)
       {
           if($value['pid']==$id)
           {
               $arr[]=$value['id'];
             ///  $this->checkdel($data,$value['pid']);
               $this->checkdel($data,$value['id']);

           }
       }
    //    dump($arr);
        return $arr;
    }
    //修改页面
    public function edit()
    {
        $id=input('id');
      //  dump($id);
        //查询旧数据
        $olddata=Db::table('cate')->where('id',$id)->find();
     //   dump($data);
        $this->assign('olddata',$olddata);
        return view('edit');
    }
    //修改数据处理
    public function update()
    {
           if (request()->isPost())
           {
               $data=input('post.');
             //  dump($data);
               $res=Db::table('cate')->where('id',$data['id'])->update($data);
              // dump($res);
               if($res)
               {
                   return 1;
               }
               else
               {
                   return "您未修改任何信息";
               }
           }
    }



    public function del()
    {
        $id=input('get.id');
     //   dump($id);
        $data=Db::table('cate')->select();
       $arr=$this->checkdel($data,$id);
       $res=Db::table('cate')->delete($id);
       if($res)
       {
           $ress=Db::table('cate')->delete($arr);

         return 1;
       }
       else
       {
           return 0;
       }
    }


}