<?php
/**
 * Created by PhpStorm.
 * User: 51534
 * Date: 2019/9/24
 * Time: 11:13
 */
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Session;
use think\Validate;



class  Admin extends Controller
{
    public function index()
    {
       $data=Db::table('admin')->select();
      // var_dump($data);
       $this->assign('data',$data);
      return view('index');
    }
    public function save()
    {
      //接收数据
      $data=input('post.');
     // halt($data);
      $validate=new Validate([
           'admin_name|管理员名称'=>'require',
           'password|管理员密码'=>'require',
           'repassword|确认密码'=>'require|confirm:password',
      ]);

      if(!$validate->check($data))
      {
       return $validate->getError();
      }
      unset($data['repassword']);
      $res=Db::table('admin')->insert($data);
     // $res=Db::table('admin')->insert($data);
      if($res)
      {
           return 1;
      }

      else
       {
      return 0;
       }

        //修改密码页面
   }
    public function edit()
    {
        
    }

    public function update()
    {


    }

    public function delete()
    {
       //接收数据
      $id=request()->param('id');
      //dump($id);
        $res=Db::table('admin')->where('id',$id)->delete();
        //dump($res); 
           if($res)
           {
            return redirect('index');
           }
           else
           {
            return "<script>alert('删除失败');</script>";
           }
    }

}