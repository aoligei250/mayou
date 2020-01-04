<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"E:\wamp64\www\uekblog\public/../application/index\view\index\category.html";i:1538292901;s:61:"E:\wamp64\www\uekblog\application\index\view\public\head.html";i:1538286663;s:63:"E:\wamp64\www\uekblog\application\index\view\public\footer.html";i:1538275063;}*/ ?>
<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>异清轩博客栏目页面</title>
<link rel="stylesheet" type="text/css" href="/static/home/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/static/home/css/nprogress.css">
<link rel="stylesheet" type="text/css" href="/static/home/css/style.css">
<link rel="stylesheet" type="text/css" href="/static/home/css/font-awesome.min.css">
<link rel="apple-touch-icon-precomposed" href="/static/home/images/icon/icon.png">
<link rel="shortcut icon" href="/static/home/images/icon/favicon.ico">
<script src="/static/home/js/jquery-2.1.4.min.js"></script>
<script src="/static/home/js/nprogress.js"></script>
<script src="/static/home/js/jquery.lazyload.min.js"></script>
<!--[if gte IE 9]>
  <script src="/static/home/js/jquery-1.11.1.min.js" type="text/javascript"></script>
  <script src="/static/home/js/html5shiv.min.js" type="text/javascript"></script>
  <script src="/static/home/js/respond.min.js" type="text/javascript"></script>
  <script src="/static/home/js/selectivizr-min.js" type="text/javascript"></script>
<![endif]-->
<!--[if lt IE 9]>
  <script>window.location.href='upgrade-browser.html';</script>
<![endif]-->
</head>

<body class="user-select">
  <header class="header">
  <nav class="navbar navbar-default" id="navbar">
    <div class="container">
      <div class="header-topbar hidden-xs link-border">
       <!--  <ul class="site-nav topmenu">
          <li><a href="tags.html">标签云</a></li>
          <li><a href="readers.html" rel="nofollow">读者墙</a></li>
          <li><a href="links.html" rel="nofollow">友情链接</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" rel="nofollow">关注本站 <span class="caret"></span></a>
            <ul class="dropdown-menu header-topbar-dropdown-menu">
              <li><a data-toggle="modal" data-target="#WeChat" rel="nofollow"><i class="fa fa-weixin"></i> 微信</a></li>
              <li><a href="#" rel="nofollow"><i class="fa fa-weibo"></i> 微博</a></li>
              <li><a data-toggle="modal" data-target="#areDeveloping" rel="nofollow"><i class="fa fa-rss"></i> RSS</a></li>
            </ul>
          </li>
        </ul> -->
        <!-- <a href="javascript:;" class="login" rel="nofollow">Hi,请登录</a>&nbsp;&nbsp;<a href="javascript:;" class="register" rel="nofollow">我要注册</a>&nbsp;&nbsp;<a href="" rel="nofollow">找回密码</a> </div> -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar" aria-expanded="false"> <span class="sr-only"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <h1 class="logo hvr-bounce-in">
          <a href="/" title=""><img src="/upload/<?php echo config('webConfig.LOGO'); ?>" alt=""></a>
        </h1>
      </div>
      <div class="collapse navbar-collapse" id="header-navbar">
        <ul class="nav navbar-nav navbar-left">
          <?php if(is_array($column) || $column instanceof \think\Collection || $column instanceof \think\Paginator): $i = 0; $__LIST__ = $column;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;if($current == $val['name']): ?>
              <li class="hidden-index active"><a href="<?php echo $val['url']; ?>" title="<?php echo $val['name']; ?>"><?php echo $val['name']; ?></a></li>

            <?php else: ?>
              <li><a href="<?php echo $val['url']; ?>" title="<?php echo $val['name']; ?>"><?php echo $val['name']; ?></a></li>
            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
         
        </ul>
        <form class="navbar-form navbar-right" action="/Search" method="post">
          <div class="input-group">
            <input type="text" name="keyword" class="form-control" placeholder="请输入关键字" maxlength="20" autocomplete="off">
            <span class="input-group-btn">
            <button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
            </span> </div>
        </form>
      </div>
    </div>
  </nav>
</header>
<section class="container">
  <div class="content-wrap">
    <div class="content">
      <div class="title">
        <h3><?php echo $type['name']; ?></h3>
      </div>
      <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
      <article class="excerpt excerpt-1">
        <a class="focus" href="<?php echo url('Index/article',['id'=>$val['id']]); ?>" title="">
          <img class="thumb" data-original="/upload/news/<?php echo $val['img']; ?>" src="/upload/news/<?php echo $val['img']; ?>" alt=""></a>
        <header><a class="cat" href="program"><?php echo $type['name']; ?><i></i></a>
          <h2><a href="article.html" title=""><?php echo $val['title']; ?></a></h2>
        </header>
        <p class="meta">
          <time class="time"><i class="glyphicon glyphicon-time"></i> <?php echo date("Y-m-d H:i:s",$val['time']); ?></time>
          <span class="views"><i class="glyphicon glyphicon-eye-open"></i> 共<?php echo $val['num']; ?>人围观</span> <a class="comment" href="article.html#comment"><i class="glyphicon glyphicon-comment"></i> 0个不明物体</a></p>
        <p class="note"><?php echo $val['description']; ?> </p>
      </article>

      <?php endforeach; endif; else: echo "" ;endif; ?>
      
      <nav class="pagination" style="display: none;">
        <ul>
          <li class="prev-page"></li>
          <li class="active"><span>1</span></li>
          <li><a href="?page=2">2</a></li>
          <li class="next-page"><a href="?page=2">下一页</a></li>
          <li><span>共 2 页</span></li>
        </ul>
      </nav>
    </div>
  </div>
  <aside class="sidebar">
    <div class="fixed">
      <div class="widget widget-tabs">
        <ul class="nav nav-tabs" role="tablist">
          <!-- <li role="presentation" class="active"><a href="#notice" aria-controls="notice" role="tab" data-toggle="tab">网站公告</a></li> -->
          <li role="presentation" class="active"><a href="#centre" aria-controls="centre" role="tab" data-toggle="tab">会员中心</a></li>
          <!-- <li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">联系站长</a></li> -->
        </ul>
        <div class="tab-content">
         <!--  <div role="tabpanel" class="tab-pane notice active" id="notice">
            <ul>
              <li>
                <time datetime="2016-01-04">01-04</time>
                <a href="" target="_blank">欢迎访问异清轩博客</a></li>
              <li>
                <time datetime="2016-01-04">01-04</time>
                <a target="_blank" href="">在这里可以看到前端技术，后端程序，网站内容管理系统等文章，还有我的程序人生！</a></li>
              <li>
                <time datetime="2016-01-04">01-04</time>
                <a target="_blank" href="">在这个小工具中最多可以调用五条</a></li>
            </ul>
          </div> -->
          <div role="tabpanel" class="tab-pane centre active" id="centre">
            <h4>需要登录才能进入会员中心</h4>
            <p> <a href="javascript:;"  data-toggle="modal" data-target="#loginModal" class="btn btn-primary">立即登录</a> <a href="javascript:;" class="btn btn-default">现在注册</a> </p>
          </div>
         <!--  <div role="tabpanel" class="tab-pane contact" id="contact">
            <h2>Email:<br />
              <a href="mailto:admin@ylsat.com" data-toggle="tooltip" data-placement="bottom" title="admin@ylsat.com">admin@ylsat.com</a></h2>
          </div> -->
        </div>
      </div>
     <!--  <div class="widget widget_search">
        <form class="navbar-form" action="/Search" method="post">
          <div class="input-group">
            <input type="text" name="keyword" class="form-control" size="35" placeholder="请输入关键字" maxlength="15" autocomplete="off">
            <span class="input-group-btn">
            <button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
            </span> </div>
        </form>
      </div> -->
      <div class="widget widget_sentence">
        <h3>每日一句</h3>
        <div class="widget-sentence-content">
          <h4>2016年01月05日星期二</h4>
          <p>Do not let what you cannot do interfere with what you can do.<br />
            别让你不能做的事妨碍到你能做的事。（John Wooden）</p>
        </div>
      </div>
    </div>
    <div class="widget widget_hot">
      <h3>热门文章</h3>
      <ul>
        <?php if(is_array($hot) || $hot instanceof \think\Collection || $hot instanceof \think\Paginator): $i = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
        <li>
          <a href="">
            <span class="thumbnail">
              <img class="thumb" data-original="/upload/news/<?php echo $val['img']; ?>" src="/upload/news/<?php echo $val['img']; ?>" alt=""></span>
            <span class="text"><?php echo $val['title']; ?></span>
            <span class="muted"><i class="glyphicon glyphicon-time"></i> <?php echo date("Y-m-d",$val['time']); ?></span>
            <span class="muted"><i class="glyphicon glyphicon-eye-open"></i> <?php echo $val['num']; ?></span>
          </a>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        
      </ul>
    </div>
  </aside>
</section>
<footer class="footer">
  <div class="container">
    <p>
    	&copy; <?php echo config('webConfig.BANQUAN'); ?>
    	&nbsp; <a href="#" target="_blank" rel="nofollow"><?php echo config('webConfig.BEIAN'); ?></a> &nbsp; &nbsp; 
    </p>
  </div>
  <div id="gotop"><a class="gotop"></a></div>
</footer>

<!--微信二维码模态框-->
<div class="modal fade user-select" id="WeChat" tabindex="-1" role="dialog" aria-labelledby="WeChatModalLabel">
  <div class="modal-dialog" role="document" style="margin-top:120px;width:280px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="WeChatModalLabel" style="cursor:default;">微信扫一扫</h4>
      </div>
      <div class="modal-body" style="text-align:center"> <img src="/static/home/images/weixin.jpg" alt="" style="cursor:pointer"/> </div>
    </div>
  </div>
</div>
<!--该功能正在日以继夜的开发中-->
<div class="modal fade user-select" id="areDeveloping" tabindex="-1" role="dialog" aria-labelledby="areDevelopingModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="areDevelopingModalLabel" style="cursor:default;">该功能正在日以继夜的开发中…</h4>
      </div>
      <div class="modal-body"> <img src="/static/home/images/baoman/baoman_01.gif" alt="深思熟虑" />
        <p style="padding:15px 15px 15px 100px; position:absolute; top:15px; cursor:default;">很抱歉，程序猿正在日以继夜的开发此功能，本程序将会在以后的版本中持续完善！</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">朕已阅</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade user-select" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="/Admin/Index/login" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="loginModalLabel">登录</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="loginModalUserNmae">用户名</label>
            <input type="text" class="form-control" id="loginModalUserNmae" placeholder="请输入用户名" autofocus maxlength="15" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="loginModalUserPwd">密码</label>
            <input type="password" class="form-control" id="loginModalUserPwd" placeholder="请输入密码" maxlength="18" autocomplete="off" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
          <button type="submit" class="btn btn-primary">登录</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="/static/home/js/bootstrap.min.js"></script> 
<script src="/static/home/js/jquery.ias.js"></script> 
<script src="/static/home/js/scripts.js"></script>
</body>
</html>