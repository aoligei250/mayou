<?php
/**
 * Created by PhpStorm.
 * User: 51534
 * Date: 2019/9/20
 * Time: 11:46
 */
namespace app\admin\controller;
use think\Controller;
use think\Db;

class Info extends Lock
{
    public function index()
    {
        $info=Db::table('info')->find(1);
        //   dump($info);
        $this->assign('info',$info);

        return view('index');
    }

    public function upload()
    {
        $file=request()->file('Filedata');
        if($file)
        {
            $info=$file->move(ROOT_PATH.'public/upload/info');
            if($info)
            {
                return $info->getSaveName();
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }



    public function save()
    {
        if(request()->isPost())
        {
           $data=input("post.");
          //dump($data);
            //获取就数据
            $olddata=Db::table('info')->where('id',1)->find();
           // dump($olddata);
            //判断是否修改图片
            if($data['web_image'])
            {
                $res=Db::table('info')->where('id',1)->update($data);
                if($res)
                {
                    unlink('./upload/info/'.$olddata['web_image']);
                    return 1;
                }
                else
                {
                    return "修改失败";
                }

            }
            else
            {
               // dump($olddata['web_image']);
                 $data['web_image']= $olddata['web_image'];

                $res=Db::table('info')->where('id',1)->update($data);
                 if($res)
                {
                    return 1;
                }
                else
                {
                    return "您未休改任何信息";
                }
              }


            }
          //  dump($data);
           // exit;





    }


}