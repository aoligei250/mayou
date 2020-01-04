<?php
/**
 * Created by PhpStorm.
 * User: 51534
 * Date: 2019/10/21
 * Time: 7:36
 */
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Session;

class Car extends Controller
{
    //购物车首页
    public function index()
    {
        //栏目
        $column=Db::table('column')->select();
        //网页信息
        $info=Db::table('info')->find(1);

        //读取session信息
        $data=session('shop');
     //  dump($data);

         $this->assign('data',$data);
      //  $this->assign('goods',$goods['0']);
        $this->assign('column',$column);
        $this->assign('info',$info);
        return view('index');
    }
    //购物车添加
    public function addcar()
    {
        //商品id;
       $id=input('get.id');
       // dump($id);
        //商品数量
        $num=input('get.num');
        //dump($num);
        //使用session存储数据
        //$data=array();
        //当购物车有多种商品时
        $data=session("shop")?session("shop"):array();

        //判断是否商品重复
        $a=0;
        if($data)
        {
            foreach ($data as &$value)
            {
                if($value['id']==$id)
                {
                    $value['num']=$value['num']+$num;
                    $a=1;
                }
                //  dd($num);
                // dd($value['num']);
                // dd($data);
            }
        }



        if(!$a)
        {
            $data[]=array(
                'id'=>$id,
                'num'=>$num,
                'goodsinfo'=>Db::table('goods')->where('id',$id)->find(),
            );
        }



       // dump($data);
        Session::set('shop',$data);
        //halt($data);
    //  dump(Session::get('shop'));

       // return view('index');
    }
    //数量添加
    public function addnum()
    {
        if(request()->isPost())
        {
            $id=input('post.id');
         //   dump($id);
            $shop=session('shop');
           // dump($shop);
            foreach ($shop as $key=>$value) {
                if($value['id']==$id) {
                    $shop[$key]['num'] = ++$shop[$key]['num'];
                }

            }

           Session::set('shop',$shop);
       //     dump($shop);
           // halt($shop);
            return 1;

        }
    }

    //数量减少
    public function numjian()
    {
        $id=input('get.id');
       // dump($id);
        $shop=session('shop');
        foreach ($shop as $key=>$value) {
            if($value['id']==$id) {
                if($value['num']>1)
                {
                    $shop[$key]['num'] = --$shop[$key]['num'];
                }

            }

        }
           Session::set('shop',$shop);
           return 1;
    }

    //购物车删除
    public function del()
    {
        $id=input('get.id');
    //   halt($id);
        $shop=session("shop");
        foreach ($shop as $key=>$value )
        {
            if($value['id']==$id)
            {
                unset($shop[$key]);
            }
        }
        Session::set('shop',$shop);

        return 1;
    }
}