<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"D:\phpstudy_pro\WWW\work\public/../application/index\view\index\list.html";i:1571927500;s:66:"D:\phpstudy_pro\WWW\work\application\index\view\public\header.html";i:1574172708;}*/ ?>
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




<!-- 导航轮播-->
<div  class="row" >
    <div id="dao" >
        <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;if($value['level']==1): ?>
        <div class="dao_one">
            <div class="one"><a href="<?php echo url('index/type/index',['id'=>$value['id']]); ?>" ><?php echo $value['cate_name']; ?></a></div>

            <div class="dao_two">
                <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$valu): $mod = ($i % 2 );++$i;if($valu['pid']==$value['id']): ?>
                <div class="two"><a href="<?php echo url('index/type/index',['id'=>$valu['id']]); ?>"><?php echo $valu['cate_name']; ?></a>
                    <div class="dao_three">
                        <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;if($val['pid']==$valu['id']): ?>
                        <div class="three"><?php echo $val['cate_name']; ?></div>
                        <?php endif; endforeach; endif; else: echo "" ;endif; ?>

                    </div>
                </div>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>

            </div>



        </div>
        <?php endif; endforeach; endif; else: echo "" ;endif; ?>



    </div>



    <div  class="row" style="margin-top: 150px;">
        <div class="panel panel-head">
            <h3>商品列表</h3>
            <div class="panel panel-default" >
                <?php if(is_array($goods) || $goods instanceof \think\Collection || $goods instanceof \think\Paginator): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?>
                <div class="col-md-3" style="text-align: center;">
                    <a href="<?php echo url('index/good/index',['id'=>$value['id']]); ?>" >
                        <img src="/upload/good/<?php echo $value['image']; ?>" height="220px;" width="220px;">
                        <h5><?php echo $value['goods_name']; ?></h5>
                        <h6><?php echo $value['goods_price']; ?></h6>
                    </a>
                </div>

                <?php endforeach; endif; else: echo "" ;endif; ?>


            </div>
        </div>


    </div>


</div>

<div style="width: 100%;height: 30px;background-color: #333333;margin-top: 30px;">
    1232
</div>

<script type="text/javascript">

    /* $('.one').mousemove(function(){
      $(this).next().show();

      $(this).next().mousemove(function(){
        $(this).show();
      });
     });

      $('.one').mouseout(function(){
      $(this).next().hide();
       $(this).next().mouseout(function(){
        $(this).hide();
       });
     });

      $('.two').mousemove(function(){
        $(this).children().show();


      });
      $('.two').mouseout(function(){
        $(this).children().hide();

      });

  */
    $('.one').mouseout(function () {
        $(this).next().css('display',"none");
        $(this).next().mousemove(function () {
            $(this).css('display','block');
        });
        //  alert(1);
    });
    $('.one').mousemove(function () {
        $(this).next().css('display','block');
        $(this).next().mouseout(function () {
            $(this).css('display','none');
        });
    });
    $('.two').mousemove(function(){
        $(this).find('div').show();
    });
    $('.two').mouseout(function(){
        $(this).find('div').hide();
    });

</script>


