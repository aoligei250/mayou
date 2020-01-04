<?php
namespace app\index\controller;

use app\index\model\Mail;
use think\Controller;
use think\Db;
use think\Validate;
/**
*
*/
class Login extends Controller
{
	// 登陆页面
	public function index()
	{
		return view('index');
	}
	public function checklogin()
    {
        if (request()->isPost())
        {
            $data=input('post.');
          //  dump($data);
            $validate=new Validate([
                'user_name|用户名'=>'require',
                'password|密码'=>'require',
            ]);

            if(!$validate->check($data))
            {
                return $validate->getError();
            }
            $res=Db::table('user')->where('user_name',$data['user_name'])->find();
         //   halt($res);
            if($res)
            {
                $re=Db::table('user')->where('user_name',$data['user_name'])->where('password',  $data['password'])->find();

                if($re)
                {
                    session('user_name',$data['user_name']);
                    session('user_id',$res['id']);
                    return 1;
                }
                else
                {
                    return "用户密码错误,请重试！";
                }
            }
            else
            {
                return "用户不存在";
            }

        }
    }
   //注册页面
	public function register()
    {
        return view('register');
    }
    //注册数据处理
    public function checkregister()
    {
        if(request()->isPost())
        {
            $data=input('post.');
           // dump($data);
            $validate = new Validate([
                'user_name|用户名'  => 'require',
                'password|用户密码' => 'require',
                 'email|邮箱'=>'email|unique:user',
            ]);

            if (!$validate->check($data)) {
                //   return 1;
                return   $validate->getError();
            }
            else
            {
              $mail=new Mail();
              $mail->email($data['email'],"注册成功");
              $res=Db::table('user')->insert($data);
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

    //退出登录
    public function loginout()
    {
        session(null);
        $this->redirect('index');
    }

    //添加地址
    public function addaddr()
    {
        $data=input('post.');
      //  dump($data);
        $data['u_id']=session('user_id');
       // $data['']
        $res=Db::table('addres')->insert($data);
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



?>