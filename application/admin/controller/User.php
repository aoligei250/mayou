<?php
/**
 * Created by PhpStorm.
 * User: 51534
 * Date: 2019/10/24
 * Time: 22:45
 */
namespace app\admin\controller;
use think\Controller;
use think\Db;

class User extends Controller
{
    public function index()
    {
        $data=Db::table('user')->select();
        $this->assign('data',$data);
        return view('index');

    }
}