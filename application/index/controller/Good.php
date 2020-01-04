<?php
/**
 * Created by PhpStorm.
 * User: 51534
 * Date: 2019/10/15
 * Time: 10:54
 */
namespace  app\index\controller;
use think\Controller;
use think\Db;
use think\Validate;

class Good extends Controller
{
    public function index()
    {   //商品id
        $id=request()->param('id');
      //  dump($id);
        //查询对应商品信息
        $goods=Db::table('goods')->where('id',$id)->find();
      //  dump($goods);
          //查询小图
        $images=Db::table('images')->where('gid',$id)->select();
       // dump($images);
        $info=Db::table('info')->where('id',1)->find();
        //dump($info);
        //评论
        $column=Db::table('column')->select();



        //查找评论
        $comment=Db::table('comment')
            ->field('comment.*,user.user_name')
            ->join('user','user.id=comment.u_id')
            ->where('g_id',$id)->select();
      //  dump($comment);
        $this->assign('comment',$comment);
        $this->assign('images',$images);
        $this->assign('info',$info);
        $this->assign('column',$column);
        $this->assign('goods',$goods);
        return view('index');
    }


    public function comment()
    {
        if(!session('user_id'))
        {
            return "需要登陆才能进行评论";
        }
        else
        {
            $data=input('post.');
         //   halt($data);
            $comment['g_id']=$data['id'];
            $comment['u_id']=session('user_id');
            $comment['time']=time();
            $comment['message']=$data['message'];
            $res=Db::table('comment')->insert($comment);
            $validate=new Validate(
               [ 'message|评论内容'=>'require',]
            );

            if(!$validate->check($data))
            {
                return $validate->getError();
            }
            if($res)
            {
                return 1;
            }
            else
            {
                return "评论失败";
            }
         /*   $data['g_id']=$data['id'];
            $data['u_id']=session('user_id');
            $data['time']=time();
       //   dump($data);
            $res=Db::table('comment')->insert($data);
            if($res)
            {
                return 1;
            }
            else
            {
                return 0;
            }*/
        }
    }
}