<?php
/**
 * Created by PhpStorm.
 * User: 51534
 * Date: 2019/9/16
 * Time: 21:26
 */
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Validate;

class Column extends Controller
{
    public function index()
    {
        $data = Db::table('column')->select();
        $this->assign('data', $data);
        return view('index');
    }

    public function save()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $validate = new Validate([
                'column_name|栏目名称' => 'require',
                'url|栏目链接' => 'require',

                'sort|轮播图排序' => 'require|number',
            ]);

            if (!$validate->check($data)) {
                //   return 1;
                return $validate->getError();
            } else {
                $res = Db::table('column')->insert($data);
                if ($res) {
                    return 1;
                } else {
                    return 0;
                }
            }
            // dump($data);

        }
    }


    public function del()
    {
        $id = input('get.id');
        //dump($id);
        $res = Db::table('column')->delete($id);
        if ($res) {
            return 1;
        } else {
            return 0;
        }
    }

    public function edit()
    {
        $id = input('id');
        //  dump($id);
        $olddata = Db::table('column')->where('id', $id)->find();
        //  dump($olddata);
        $this->assign('olddata', $olddata);
        return view('edit');
    }

    public function update()
    {
        //   $id=input('id');
        //dump($id);
        $data = input('post.');
        //  dump($data);
        $res = Db::table('column')->update($data);
        if ($res)
        {
            return redirect('index');
        }
        else
        {
            $this->error("修改失败");
        }



        }

}
