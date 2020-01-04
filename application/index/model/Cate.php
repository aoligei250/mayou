<?php
/**
 * Created by PhpStorm.
 * User: 51534
 * Date: 2019/10/18
 * Time: 13:12
 */
namespace app\index\model;
use think\Model;
class Cate extends Model
{
    protected $table="cate";
    public function checkdata($data,$pid=0,$level=0)
    {
          static $arr=array();
          foreach ($data as &$value)
          {
              if($value['pid']==$pid)
              {

                  $arr[]=$value;
                  $arr[]=$this->checkdata($data,$value['id']);
              }
          }
        dump($arr);  
    }
}