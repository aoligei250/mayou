<?php
/**
 * Created by PhpStorm.
 * User: 51534
 * Date: 2019/9/27
 * Time: 15:41
 */
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Session;

class Login extends Controller
{
    public function index()
    {
        echo("<script language='javascript'>window.top.location.href='login/'</script>");
    }
    public function login()
    {
        return view('index');
    }

    public function checklogin()
    {
       if(request()->isPost())
       {
           $admin_name=input('admin_name');
           $password=input('password');
           $code=input('code');
        /*   dump($admin_name);
           dump($password);
           dump($code);*/
          $res=Db::table('admin')->where('admin_name',$admin_name)->find();
          if($res)
          {
              $p=Db::table('admin')->where('admin_name',$admin_name)->where('password',$password)->find();
              if($p)
              {
                  if(!captcha_check($code)){
                       return $data=[
                           'code'=>400,
                           'info'=>"验证码错误",
                       ];
                   }
                  else{
                      Session::set('admin_id',$res['id']);
                      Session::set('admin_name',$admin_name);
                    //  $this->redirect('/');
                      return $data=[
                          'code'=>200,
                          'info'=>"登录成功",
                      ];

                  }


              }
              else
              {
                  return $data=[
                      'code'=>400,
                      'info'=>'管理员密码错误',
                  ];
              }
          }
          else
          {
              return $data=[
                  'code'=>400,
                  'info'=>"管理员不存在",
              ];
          }
       }
    }


    //退出登录
    public  function loginout()
    {
       // echo 111;
        session('admin_name',null);
        $this->redirect('login');
    }
}
