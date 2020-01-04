<?php
namespace app\index\controller;

use app\admin\model\Cate;
use app\index\Model\Ads;
use app\index\Model\Category;
use think\Controller;
use think\Db;


class Index extends Controller
{
    public function cd($data,$pid=0)
    {
        static $new=[];
        foreach ($data as &$value) {
          # code...
          if($value['pid']==$pid)
          {
            $new[]=$value;
            $new[]['zi']=$this->cd($data,$value['id']);
          }
        }
     //   dump($new);
        return $new;
    }

    public function index()
    {
       //栏目 esc升序 desc倒叙
        $column=Db::table('column')->order('sort esc')->select();
       // dump($column);

        //网站信息
        $info=Db::table('info')->where('id',1)->find();
       // dump($info);
        //轮播查询
        $slider=Db::table('slider')->order('sort esc')->select();
      //  dump($slider);
        //实例化
        $data=Db::table('cate')->select();
        $Cate=new Cate();
        $cate=$Cate->checkdata($data);
      //  $cate=$this->cd($data);

      //  halt($cate);
        //解决楼层数组
        $one=Db::table('cate')->where('pid',0)->select();

        static $ads=array();
      

        foreach ($cate as $key=>$value)
        {
            //广告
         //   dump($value['id']);
           $cate[$key]['goods']=[];
            $cate[$key]['goods']=Db::table('goods')->where('cate_id',$cate[$key]['id'])->select();

           
            $data[$key]['ads']=[];

            $data[$key]['ads']=Db::table('ads')->where('c_id',$data[$key]['id'])->select();
            //商品

            $data[$key]['goods']=[];
            $data[$key]['goods']=Db::table('goods')->where('cate_id',$data[$key]['id'])->select();
          //  var_dump($data[$key]['path']);
            
       }
     //  dump($cate);
       

    //   dump($data);
        
      
     
        // dump($goods);
      // $this->assign('goods',$goods);
     //   $this->assign('type',$type);
        $this->assign('data',$data);
        $this->assign('cate',$cate);
   //    $this->assign('two',$two);
        $this->assign('column',$column);
        $this->assign('info',$info);
        $this->assign('slider',$slider);
       return view('index');
    }


    //查找
    public function type()
    {
            //接收数据
        $search=input('search');
       // dump($search);
        //模糊查询
        $goods=Db::table('goods')->where('goods_name','like',"%".$search."%")->select();
       // dump($goods);
        //分配数据
        $data=Db::table('cate')->select();
        $Cate=new Cate();
        $cate=$Cate->checkdata($data);

        //栏目 esc升序 desc倒叙
        $column=Db::table('column')->order('sort esc')->select();
        // dump($column);

        //网站信息
        $info=Db::table('info')->where('id',1)->find();
        // dump($info);
        //轮播查询
   //     $slider=Db::table('slider')->order('sort esc')->select();


        $this->assign('column',$column);
        $this->assign('info',$info);
        $this->assign('cate',$cate);
        $this->assign('goods',$goods);
        return view('list');
    }


}
