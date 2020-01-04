<?php
/**
 * Created by PhpStorm.
 * User: 51534
 * Date: 2019/10/23
 * Time: 8:05
 */
namespace app\index\controller;
use think\Session;
use think\Controller;
use think\Db;

class Pay extends Controller
{
    //结算页面
    public function index()
    {
        if(session('user_id'))
        {
            //网页信息
            $info=Db::table('info')->where('id',1)->find();
            //栏目信息
            $column=Db::table('column')->select();




            $idarr=input('post.');
            //dump($idarr);
            if($idarr)
            {
            $new=array();
            foreach ($idarr as $key=>$value)
            {
                $new=$value;
            }
            // halt($new);
            $shop=session('shop');
            //dump($shop);
            $goods=array();
            foreach ($new as $key=>$value)
            {
                foreach ($shop as $k=>$v)
                {
                    if($value==$v['id'])
                    {
                        $goods[]=$v;
                    }
                }

            }
            //用户收货地址
            $addr=Db::table('addres')
                  ->join('user','user.id=addres.u_id')
                 ->where('u_id',session('user_id'))
                  ->select();
        //  dump($addr);
            //  dump($goods);
            $this->assign('addr',$addr);
            $this->assign('goods',$goods);

            }
            else
            {
                $this->error("您还没有选择商品",'index/car/index');
            }
            $this->assign('column',$column);
            $this->assign('info',$info);
            return view('index');
        }
        else
        {
            $this->error("需要登录才可购买商品",'index/login/index');
        }

    }

    //生成订单
    public function order()
    {
        //接收数据
        if(request()->isPost())
        {
           //订单号
            $order="D".time().rand();
            $ids=request()->param('goods/a');
      //   halt($ids[1]);
            $nums=request()->param('nums/a');
          // halt($nums);
            $prices=request()->param('prices/a');
             $u_id=session('user_id');
             $a_id=request()->param('a_id');
             $order_status=1;
             $time=time();
          //   dump($ids);
            $data=array();
             for($i=0;$i<count($ids);$i++)
             {
                $data['order_id']=$order;
                $data['u_id']=$u_id;
                $data['a_id']=$a_id;
                $data['g_id']=$ids[$i];
                $data['num']=$nums[$i];
                $data['price']=$prices[$i];
                $data['order_status']=$order_status;
                $data['time']=$time;
               $res=Db::table('order')->insert($data);
             }
             if($res)
             {
                 $shop=session("shop");
                 foreach ($ids as $key=>$value)
                 {
                     foreach ($shop  as $k=>$v)
                     {
                         if($value=$v['id'])
                         {
                             unset($shop[$k]);
                         }
                     }
                 }
                 Session::set('shop',$shop);

             return "<script>alert('生成订单成功',{icon:6}); window.location.href='/index/car/index'; </script>";
             }
            // dump($data);
        }
    }
}