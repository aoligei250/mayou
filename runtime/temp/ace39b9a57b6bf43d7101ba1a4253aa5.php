<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:81:"C:\phpStudy\PHPTutorial\WWW\work\public/../application/index\view\good\index.html";i:1571988855;s:74:"C:\phpStudy\PHPTutorial\WWW\work\application\index\view\public\header.html";i:1571927092;}*/ ?>
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
                    美食之家  <span class="glyphicon glyphicon-cutlery"></span>
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

    <!-- 商品详情 -->
    <div class="row panel panel-heading panel-default">
        <div class="col-md-6">
            <div class="row" style="height: 400px;text-align: center;" >
                <img src="/upload/good/<?php echo $goods['image']; ?>" width="80%" height="400px;s">
            </div>
            <div class="row" style="height: 200px; text-align: center;">
                <?php if(is_array($images) || $images instanceof \think\Collection || $images instanceof \think\Paginator): $i = 0; $__LIST__ = $images;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                <div class="col-md-4">
                    <img src="/upload/good/<?php echo $val['images']; ?>" width="180px" height="180px">
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>

            </div>
        </div>
        <div class="col-md-6" style="text-align: center;">
            <div class="row" style="margin-top: 40px;">
                <span><?php echo $goods['goods_name']; ?></span>
            </div>
            <div class="row" style="margin-top: 40px;">
                <span><?php echo $goods['goods_description']; ?></span>
            </div>
            <div class="row" style="margin-top: 40px;">
                <span>商品配置</span>
            </div>
            <div class="row" style="margin-top: 40px;">
                <span><?php echo $goods['goods_price']; ?></span>
            </div>
            <div class="row" style="margin-top: 40px;">
                <button class="btn plus">+</button><input id="g_num"  value="1"  style="width: 30px;"><button class="btn minus">-</button>
               <h6>库存：<span id="goods_num"><?php echo $goods['goods_num']; ?></span></h6>
            </div>
            <div class="row" style="margin-top: 150px;">
                <button class="btn btn-danger">立即购买</button>
                <a class="btn btn-info" onclick="addcar()" >加入购物车</a>
                <input type="hidden" id="g_id" value="<?php echo $goods['id']; ?>" >

            </div>
        </div>
    </div>


    <div class="row">
        <div class="panel panel-head panel-primary">
            <h4>商品评论</h4>
            <?php if(is_array($comment) || $comment instanceof \think\Collection || $comment instanceof \think\Paginator): $i = 0; $__LIST__ = $comment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;if($val['message_status']==1): ?>
            <div class="panel panel-body panel-default">
                <p>
                 <h5>用户：<?php echo $val['user_name']; ?></h5>
                <h5>留言:<?php echo $val['message']; ?></h5>
                <h6>时间:<?php echo date('Y-m-d H-i-s',$val['time']); ?></h6>
                </p>
            </div>
            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            <div class="panel-body panel">
                <form>
                    <div class="form-group">
                        <input type="text" id="message" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="button" onclick="add(<?php echo $goods['id']; ?>)" class="btn btn-success" value="添加留言">
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>


</body>
</html>
<script type="text/javascript">
        $('.plus').on("click",function () {
        //  alert(1);
           var num=Number($("#g_num").val());
            var nnum=num+1;
            $("#g_num").val(nnum);
            goods_num();
        });
        $('.minus').on("click",function () {
            //  alert(1);
            var num=Number($("#g_num").val());

            if(num<=1)
            {
                alert("不能再减了");
            }
            else
            {
                var nnum=num-1;
                $("#g_num").val(nnum);
                goods_minus();
            }
        });
        function goods_num() {
            var num=Number($("#goods_num").html());
            var nnum=num-1;
            $("#goods_num").html(nnum);
            if(num<1)
            {
                alert("没有库存了哦！");
            }
         //   alert(num);
        }
        function goods_minus() {
            var num=Number($("#goods_num").html());
            var nnum=num+1;
            $("#goods_num").html(nnum);

        };
        //添加商品之购物车
    function addcar() {
       var g_num=$("#g_num").val();
      var g_id=$('#g_id').val();
     // alert(g_num);
     // alert(g_id);
        $.get("<?php echo url('index/car/addcar'); ?>",{id:g_id,num:g_num},function(data){
            window.location.href="<?php echo url('index/car/index'); ?>";
        });
    }

    //添加留言
     function add(id) {
//alert(id);
         var message=$('#message').val();
         $.post("<?php echo url('index/good/comment'); ?>",{id:id,message:message},function (data) {

      //  alert(data);
            if (data==1)
            {
                layer.msg("评论成功,审核通过后可查看",{icon:6},function () {
                    window.location.reload();
                });
              //
            }
            else
            {
                layer.msg(data,{icon:5});
            }
         });
        }

</script>