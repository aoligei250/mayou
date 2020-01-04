<?php
/**
 * Created by PhpStorm.
 * User: 51534
 * Date: 2019/10/25
 * Time: 9:03
 */
namespace app\admin\controller;

use think\Controller;
use think\Db;

class Comment extends Controller
{
    public function index()
    {
        $message=Db::table('comment')
            ->field('comment.*,user.user_name,goods.goods_name')
            ->join('user','user.id=comment.u_id')
            ->join('goods','goods.id=comment.g_id')
            ->select();
    // dump($message);
        $this->assign('message',$message);
        return view('index');
    }

    public function status()
    {
       $data=input('get.');
      // halt($data);
     //  exit;
        $res=Db::table('comment')
            ->where('id',$data['id'])
            ->update(['message_status'=>$data['status']]);
        // dump($res);
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
    public function del()
    {
        $id=input('get.id');
       // dump($id);
        $res=Db::table('comment')->delete($id);
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