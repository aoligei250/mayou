<?php
/**
 * Created by PhpStorm.
 * User: 51534
 * Date: 2019/9/24
 * Time: 16:55
 */
namespace app\admin\controller;
use think\Controller;
use think\Session;

class Lock extends Controller
{
    public function _initialize()
    {
       if(!Session::has('admin_name'))
       {
          //echo 111;
      //     return "<script>alert('请先登录');window.location.href='/admin/login/index'</script>";
           return $this->redirect("admin/login/index");
       //    $this->error("请先登录",'admin/login/index');
       }
    }


}