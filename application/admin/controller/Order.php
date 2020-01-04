<?php
/**
 * Created by PhpStorm.
 * User: 51534
 * Date: 2019/10/24
 * Time: 9:35
 */
namespace app\admin\controller;
use PHPMailer\PHPMailer;
use think\Controller;
use think\Db;

class Order extends Controller
{
    //主页
    public function index()
    {
        $order=Db::table('order')
            ->join('user','user.id=order.u_id')
            ->join('goods','order.g_id=goods.id')
            ->join('addres','order.a_id=addres.id')
            ->join('status','status.id=order_status')
            ->field('order.*,user.user_name,goods.*,addres.*,status.*')
            ->select();
        $status=Db::table('status')->select();
    //   dump($order);
        $this->assign('status',$status);
        $this->assign('order',$order);
        return view('index');
    }
    //订单详情
    public function info()
    {
        $order_id=input('order_id');
       // dump($order_id);
        $order=Db::table('order')
           ->field('order.*,goods.*')
            ->join('goods','goods.id=order.g_id')
           ->where('order_id',$order_id)
            ->select();
      //  dump($order);
        $this->assign('order',$order);
        return view('info');
    }
    //订单状态修改页面
    public function status()
    {
        $order_id=input('id');
        $status=input('status');
        $status_info=Db::table('status')->select();

      //  dump($status);
       // dump($order_id);
        $this->assign('status_info',$status_info);
        $this->assign('order_id',$order_id);
        $this->assign('status',$status);
        return view('status');
    }
    //修改状态数据处理
    public function ajax_status()
    {
        $data=input('post.');
      //  dump($data);
        $res=Db::table('order')->where('order_id',$data['order_id'])->update(['order_status'=>$data['status']]);
      if($res)
      {
          return redirect('index');
      }
      else
      {
          return "<script>alert('修改状态失败');window.location.reload();</script>";
      }
    }
}