<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"D:\phpstudy_pro\WWW\work\public/../application/index\view\car\index.html";i:1571817067;s:66:"D:\phpstudy_pro\WWW\work\application\index\view\public\header.html";i:1574172708;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $info['web_title']; ?></title>
    <link rel="stylesheet" type="text/css" href="/static/index/bs/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/static/index/bs/static/dao.css">
    <script type="text/javascript" src="/static/index/bs/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/static/index/bs/js/bootstrap.min.js"></script>
    <!--layer-->
    <script src="/static/admin/layer/layer.js"></script>
    <meta name="description"
          content="<?php echo $info['web_description']; ?>"/>
    <meta name="description"
          content="<?php echo $info['web_keywords']; ?>"/>

</head>
<body>
<div  class="container">

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-
                        toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <?php echo $info['web_title']; ?>  <span class="glyphicon glyphicon-cutlery"></span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <?php if(is_array($column) || $column instanceof \think\Collection || $column instanceof \think\Paginator): $i = 0; $__LIST__ = $column;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                    <li><a href="<?php echo $val['url']; ?>"><?php echo $val['column_name']; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                </ul>

                <div style="float:right;margin-right:100px;">
                    <form class="navbar-form navbar-left" method="post" action="<?php echo url('index/index/type'); ?>" role="search">
                        <div class="form-group">
                            <input type="text" name="search" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">搜索</button>
                    </form>
                </div>
    </nav>



    <!-- 登录 购物车 logo-->
    <div class="row">
        <div class="col-md-3">
            <img src="/upload/info/<?php echo $info['web_image']; ?>" width="200px;" height="100px;">
        </div>
        <div class="col-md-3">

        </div>
        <div class="col-md-3">

        </div>
        <div class="col-md-3" style="text-align: center;">
            <div style="width: 300px;height: 100px;margin-top: 60px;">
                <?php if(session('user_name')): ?>
                <a><?php echo \think\Request::instance()->session('user_name'); ?></a>
                <a href="<?php echo url('index/login/loginout'); ?>">退出登录</a>
                <?php else: ?>
                <a href="<?php echo url('index/login/index'); ?>">登录</a>
                <a href="<?php echo url('index/login/register'); ?>">注册</a>
                <?php endif; ?>
                <a  href="<?php echo url('index/car/index'); ?>">购物车</a>
            </div>

        </div>

    </div>



<body>
<div class="container">
    <div class="panel panel-primary">
        <form action="<?php echo url('index/pay/index'); ?>" method="post">
        <h3>购物车页面</h3>
            <?php if(!session('shop')): else: ?>

            <div class="panel panel-body panel-default">
                <table class="table table-border" >
                    <th><input type="checkbox" name="" class="checkall" >全选  </th>
                    <th>商品信息  </th>
                    <th style="width: 300px;">商品信息</th>
                    <th>单价</th>
                    <th>数量</th>
                    <th>金额</th>
                    <th>操作</th>
                    <?php  $tot=0;  if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;
                 $money=0;

                ?>

                    <tr style=" ">
                        <td><input type="checkbox" name="goods[]" value="<?php echo $val['id']; ?>" class="check"></td>
                        <td><a href="<?php echo url('index/good/index',['id'=>$val['id']]); ?>"><img src="/upload/good/<?php echo $val['goodsinfo']['image']; ?>" width="100px" height="100px" /></a></td>
                        <td style="width: 300px;"><?php echo $val['goodsinfo']['goods_description']; ?></td>
                        <td><span><?php echo $val['goodsinfo']['goods_price']; ?></span></td>
                        <td>

                            <a class="btn btn-default plus" ads="<?php echo $val['goodsinfo']['id']; ?>">+</a>
                            <span><?php echo $val['num']; ?></span>
                            <a class="btn btn-default minus" ads="<?php echo $val['goodsinfo']['id']; ?>">-</a>
                        </td>
                        <td>
                            <?php $money= $val['goodsinfo']['goods_price']*$val['num'];
                              $tot+=$money;
                           ?>
                            <span class="numprice" ><?php echo $money; ?></span>
                        </td>
                        <td>
                          <a class="btn btn-default" onclick="del(this,<?php echo $val['id']; ?>)">移除购物车</a>

                        </td>

                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>


                    <tr>
                        <td><input type="checkbox" name="" class="checkall" >全选</td>
                        <td>
                            <a>删除</a>
                        </td>
                        <td></td>
                        <td></td>
                        <td>总计<span class="nummoney"><?php echo $tot; ?></span> </td>
                        <td>
                            <input type="submit" value="结算" class="btn btn-danger">
                        </td>
                    </tr>
                </table>
        </form>

        </div>
        <?php endif; ?>


        </div>
        <div class="panel panel-footer">
            <table>


            </table>
        </div>
    </div>
</div>
</body>
</html>

<script type="text/javascript">
    //全选
    $(".checkall").on("click",function(){
        if(this.checked==true)
        {

            $(".check").prop("checked",true);
            $(".checkall").prop("checked",true);
        }
        else
        {
            $(".check").prop("checked",false);
            $(".checkall").prop("checked",false);
        }

    });
    //单选
    $(".check").click(function(){
        var check=$(".check").length;
        //alert(check);
        var checked=$(".check:checked").length;
        if(check==checked)
        {
            $(".checkall").prop("checked",true);

        }
        else
        {
            $(".checkall").prop("checked",false);
        }
    });

    //购物车加
    //  var tot=0;
    var totnum=0;
    $(".plus").on("click",function(){
        //  ;

        var id=$(this).attr("ads");

     //  alert(id);
        obj=$(this);
        $.post("<?php echo url('index/car/addnum'); ?>",{id:id},function (data) {
         //  alert(data);
            if(data==1)
            {
                var num=Number( obj.next().html());
                num++;
                obj.next().html(num);
                //金额
                var price=Number(obj.parent().prev().children().html());
                //
                var pricenum=Number(num)*Number(price);
                obj.parent().next().children().html(pricenum);
                checknum();

            }

        });








        //alert(num);

        //alert(1);
    });
    //购物车减
    $(".minus").on("click",function(){

        var id=$(this).attr('ads');
     //   alert(id);
        obj=$(this);
         // alert(id);
        //发送ajax请求
        $.get("<?php echo url('index/car/numjian'); ?>",{id:id},function(data){
              if(data==1)
              {
                  var num=Number(obj.prev().html());
                  if(num>1)
                  {
                      num--;
                      obj.prev().html(num);
                      var price=Number(obj.parent().prev().children().html());
                      var pricenum=Number(num)*Number(price);
                      obj.parent().next().children().html(pricenum);
                  }
                  else
                  {
                      alert("不能再减下去了");
                  }

                  checknum();

              }
              else
              {
                  alert("不能再减了");
              }
        });

    });
    //金额
    function checknum()
    {
        var zong=0;
        $(".numprice").each(function(){
            var num=Number($(this).html());
            zong+=num;
        });
        $(".nummoney").html(zong);
    }





    /*   $(".check").prop("checked",true);
       if($(this).checked==true)
        {
         $(".check").prop("checked",true);
        }
        else
        {
        	$(".check").prop("checked",false);
        }
        alert(1);*/

    function del(obj,id)
    {
      //alert(id);
        // alert(g_id);
       // alert(id);
        $.get("<?php echo url('index/car/del'); ?>",{id:id},function (data) {
            if(data==1)
            {
                $(obj).parent().parent().remove();
                checknum();
            }

        });


    }


</script>