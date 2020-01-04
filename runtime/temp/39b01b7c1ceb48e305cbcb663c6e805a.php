<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"D:\phpstudy_pro\WWW\work\public/../application/index\view\pay\index.html";i:1571819579;s:66:"D:\phpstudy_pro\WWW\work\application\index\view\public\header.html";i:1571927092;}*/ ?>
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
    <form action="<?php echo url('index/pay/order'); ?>" method="post">
    <div class="panel panel-head panel-primary">
        <h4>请填写并核对一下信息</h4>
        <div class="panel panel-default panel-body">
            <form>
                <div class="form-group">
                    <?php if(is_array($addr) || $addr instanceof \think\Collection || $addr instanceof \think\Paginator): $i = 0; $__LIST__ = $addr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>

                    <input type="radio"  checked name="a_id" value="<?php echo $val['id']; ?>"><span><?php echo $val['user_name']; ?></span>
                    <span>收货地址：</span>
                    <span><?php echo $val['addrinfo']; ?></span>
                    <span>收件人电话</span>
                    <span><?php echo $val['phone']; ?></span>
                    <br/>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <br/>
                    <a class="addr btn btn-primary" onclick="addr(this)"  style="margin-top: 20px;">添加收货地址</a>
                    <div id="addr" style="display: none;position: absolute;width: auto;height: auto;margin-left: 20%;">
                        <div class="modal-dialog" style="margin-top: 10%;">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <h4 class="modal-title text-center" id="myModalLabel">添加收货地址</h4>
                                </div>
                                <form class="form-x"  >
                                    <div class="modal-body" id = "model-body">
                                        <div class="form-group">

                                            <input type="text" class="form-control" name="addrinfo" placeholder="收件人地址" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                          <input type="hidden" value="1" name="qwe">
                                            <input type="password" class="form-control" name="phone" placeholder="收件人电话" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="form-group">
                                            <a type="button" onclick="addaddr()" class="btn btn-primary form-control">添加</a>
                                        </div>
                                        <div class="form-group">

                                        </div>

                                    </div>
                                </form>
                            </div><!-- /.modal-content -->
                        </div>
                    </div>
                </div>
                <script>
                       function addr(obj) {
                           $("#addr").toggle();
                       }
                       function addaddr() {
                       //    alert(1);
                        var phone= $("input[name=phone]").val();
                        var addrinfo=$("input[name=addrinfo]").val();
                        //   alert(phone);
                         $.post("<?php echo url('index/login/addaddr'); ?>",{phone:phone,addrinfo:addrinfo},function(data){
                          //   alert(data);
                             if (data==1)
                             {
                                 layer.msg("添加成功",{icon:6});
                                 window.reload();
                             }
                             else
                             {
                                 layer.msg("添加失败");
                             }
                         });
                       }


                </script>
                <div class="form-group">
                    <p>支付方式:</p>
                    <p style="margin-left: 30px;">在线支付</p>
                </div>
                <div>
                    <p>发票信息:</p>
                    <p><span>发票抬头：个人</span><span>发票类型：电子发票</span></p>
                </div>
            </form>
        </div>
        <div class="panel-body panel">
            <h4>确认商品</h4>
         <div class="panel-body panel panel-info">
            <table class="table table-bordered">
               <th>商品图片</th>
                <th>商品名称</th>
                <th>商品单价</th>
                <th>商品数量</th>
                <th>商品金额</th>
                <?php $money=0; if(is_array($goods) || $goods instanceof \think\Collection || $goods instanceof \think\Paginator): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                    <tr>
                        <input type="hidden" name="goods[]" value="<?php echo $val['id']; ?>">
                        <td>
                            <img src="/upload/good/<?php echo $val['goodsinfo']['image']; ?>" width="200px;" height="200px;">
                        </td>
                        <td>
                            <?php echo $val['goodsinfo']['goods_name']; ?>
                        </td>
                        <td>
                            <?php echo $val['goodsinfo']['goods_price']; ?>
                        </td>
                        <td>
                            <input type="hidden" name="nums[]" value="<?php echo $val['num']; ?>">
                            <?php echo $val['num']; ?>
                        </td>
                        <?php
                          $tot=$val['goodsinfo']['goods_price']*$val['num'];
                          $money+=$tot;
                           ?>
                        <td>

                            <?php echo $tot; ?>
                            <input type="hidden" name="prices[]" value="<?php echo $tot; ?>">
                        </td>
                    </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>

            </table>
         </div>
            <div class="panel panel-footer ">
                <div style="float: right;">

                <span>总金额：</span><span><?php echo $money; ?></span>
                <input class="btn btn-danger" type="submit" value="生成订单">
                </div>
            </div>
        </div>
    </div>
    </form>
</div>

</body>
</html>