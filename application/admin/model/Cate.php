<?php
/**
 * Created by PhpStorm.
 * User: 51534
 * Date: 2019/9/30
 * Time: 23:55
 */
namespace app\admin\model;
use think\Model;
class Cate extends Model
{
    public function checkdata($data,$pid=0,$level=1)
    {
        static $new=array();
        foreach ($data as $key=>$value)
        {
            if($value['pid']==$pid)
            {
                $value['level']=$level;
                $new[]=$value;

                $this->checkdata($data,$value['id'],$level+1);
            }
        }
       return $new;

    }
}