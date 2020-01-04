<?php
/**
 * Created by PhpStorm.
 * User: 51534
 * Date: 2019/10/7
 * Time: 15:54
 */
namespace app\index\controller;

use app\admin\model\Cate;
use app\index\Model\Ads;
use app\index\Model\Category;
use think\Controller;
use think\Db;


class Type extends Controller{
    public function index()
    {
        //栏目 esc升序 desc倒叙
        $column=Db::table('column')->order('sort desc')->select();
        // dump($column);

        //网站信息
        $info=Db::table('info')->where('id',1)->find();
        // dump($info);
        //轮播查询
     //   $slider=Db::table('slider')->order('sort esc')->select();
        //  dump($slider);
        //实例化
        $data=Db::table('cate')->select();
        $Cate=new Cate();
        $cate=$Cate->checkdata($data);

        //解决楼层数组
         //接收数据
       $id=request()->param('id');
      // dump($id);
    //   $pid=request()->param('pid');
       //dump($pid);
       $type=Db::table('cate')->where('id',$id)->find();
      // dump($type);
       $arr=explode(',',$type['path']);
       $size=count($arr)-1;
     //  dump($size);

       switch ($size)
       {
           case"2":
               $goods=Db::table('goods')->where('cate_id',$id)->select();
               break;
           case "1":
               $goodsarr=Db::table('cate')->where('pid',$id)->select();
              foreach ($goodsarr as $k=>$v)
              {
                  $new[]=$v['id'];
              }
              $goods=Db::table('goods')->whereIn('cate_id',$new)->select();

               break;
       }



      //  $goods=Db::table('goods')->where('cate_id',$id)->select();
       // dump($goods);



        //  halt($cate);








        //    dump($two);
        //分配数据
        /* $this->assign('goods',$goods);
      $this->assign('category',$lou);*/
        $this->assign('goods',$goods);
        $this->assign('cate',$cate);
        //    $this->assign('two',$two);
        $this->assign('column',$column);
        $this->assign('info',$info);
     //   $this->assign('slider',$slider);
        return view('index');

    }
}