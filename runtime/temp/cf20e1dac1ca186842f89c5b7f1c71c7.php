<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:82:"C:\phpStudy\PHPTutorial\WWW\work\public/../application/admin\view\index\index.html";i:1567870800;s:74:"C:\phpStudy\PHPTutorial\WWW\work\application\admin\view\public\header.html";i:1571929021;s:72:"C:\phpStudy\PHPTutorial\WWW\work\application\admin\view\public\menu.html";i:1572076633;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>
    <link rel="stylesheet" href="/static/admin/css/pintuer.css">
    <link rel="stylesheet" href="/static/admin/css/admin.css">

    <script src="/static/admin/js/jquery.js"></script>
    <!--layer-->
    <script src="/static/admin/layer/layer.js"></script>
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
    <div class="logo margin-big-left fadein-top">
        <h1><img src="/static/admin/images/y.jpg" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
    </div>
    <div class="head-l"><a class="button button-little bg-green" href="<?php echo url('index/index/index'); ?>" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;<a href="##" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a> &nbsp;&nbsp;<a class="button button-little bg-red" href="<?php echo url('admin/login/loginout'); ?>" ><span class="icon-power-off"></span> 退出登录</a> </div>
</div>

<div class="leftnav">
    <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
    <h2><span class="icon-user"></span>基本设置</h2>
    <ul style="display:block">
        <li><a href="<?php echo url('admin/info/index'); ?>" target="right"><span class="icon-caret-right"></span>网站设置</a></li>
        <li><a href="<?php echo url('admin/admin/index'); ?>" target="right"><span class="icon-caret-right"></span>管理员管理</a></li>
        <li><a href="<?php echo url('admin/admingroup/index'); ?>" target="right"><span class="icon-caret-right"></span>管理员用户组管理</a></li>
        <li><a href="<?php echo url('admin/adminrule/index'); ?>" target="right"><span class="icon-caret-right"></span>管理员权限管理</a></li>
        <li><a href="<?php echo url('admin/user/index'); ?>" target="right"><span class="icon-caret-right"></span>用户管理</a></li>
        <li><a href="<?php echo url('admin/comment/index'); ?>" target="right"><span class="icon-caret-right"></span>用户评论管理</a></li>

        <li><a href="<?php echo url('admin/ads/index'); ?>" target="right"><span class="icon-caret-right"></span>广告管理</a></li>
        <li><a href="<?php echo url('admin/slider/index'); ?>" target="right"><span class="icon-caret-right"></span>首页轮播</a></li>
        <li><a href="book.html" target="right"><span class="icon-caret-right"></span>留言管理</a></li>
        <li><a href="<?php echo url('admin/column/index'); ?>" target="right"><span class="icon-caret-right"></span>栏目管理</a></li>
        <li><a href="list.html" target="right"><span class="icon-caret-right"></span>内容管理</a></li>
        <li><a href="add.html" target="right"><span class="icon-caret-right"></span>添加内容</a></li>
        <li><a href="<?php echo url('admin/cate/index'); ?>" target="right"><span class="icon-caret-right"></span>分类管理</a></li>
        <li><a href="<?php echo url('admin/good/index'); ?>" target="right"><span class="icon-caret-right"></span>商品管理</a></li>
        <li><a href="<?php echo url('admin/order/index'); ?>" target="right"><span class="icon-caret-right"></span>订单管理</a></li>
    </ul>
    <h2><span class="icon-pencil-square-o"></span>栏目管理</h2>
    <ul>

    </ul>
</div>
<script type="text/javascript">
    $(function(){
        $(".leftnav h2").click(function(){
            $(this).next().slideToggle(200);
            $(this).toggleClass("on");
        })
        $(".leftnav ul li a").click(function(){
            $("#a_leader_txt").text($(this).text());
            $(".leftnav ul li a").removeClass("on");
            $(this).addClass("on");
        })
    });
</script>
<ul class="bread">
    <li><a href="" target="right" class="icon-home"> 首页</a></li>
    <li><a href="##" id="a_leader_txt">网站信息</a></li>
    <li><b>当前语言：</b><span style="color:red;">中文</php></span>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;切换语言：<a href="##">中文</a> &nbsp;&nbsp;<a href="##">英文</a> </li>
</ul>
<div class="admin">
    <iframe scrolling="auto" rameborder="0" src="<?php echo url('admin/info/index'); ?>" name="right" width="100%" height="100%"></iframe>
</div>
<div style="text-align:center;">
    <p>来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
</div>
</body>
</html>