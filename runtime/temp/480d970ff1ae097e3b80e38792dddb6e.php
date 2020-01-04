<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"E:\wamp64\www\uekblog\public/../application/index\view\index\index.html";i:1538296951;s:61:"E:\wamp64\www\uekblog\application\index\view\public\head.html";i:1538286663;s:63:"E:\wamp64\www\uekblog\application\index\view\public\footer.html";i:1538275063;}*/ ?>
<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo config('webConfig.TITLE'); ?></title>
<meta name="keywords" content="<?php echo config('webConfig.KEYWORDS'); ?>">
<meta name="description" content="<?php echo config('webConfig.DESCRIPT'); ?>">
<link rel="stylesheet" type="text/css" href="/static/home/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/static/home/css/nprogress.css">
<link rel="stylesheet" type="text/css" href="/static/home/css/style.css">
<link rel="stylesheet" type="text/css" href="/static/home/css/font-awesome.min.css">
<link rel="apple-touch-icon-precomposed" href="/static/home/images/icon/icon.png">
<link rel="shortcut icon" href="/static/home/images/icon/favicon.ico">
<!-- jq插件 -->
<script src="/static/home/js/jquery-2.1.4.min.js"></script>
<!-- 进度条插件 -->
<script src="/static/home/js/nprogress.js"></script>
<!-- 懒加载插件 -->
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
      <div class="jumbotron">
        <h1>欢迎访问异清轩博客</h1>
        <p>在这里可以看到前端技术，后端程序，网站内容管理系统等文章，还有我的程序人生！</p>
      </div>
      <div id="focusslide" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <?php if(is_array($slider) || $slider instanceof \think\Collection || $slider instanceof \think\Paginator): $i = 0; $__LIST__ = $slider;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;if($key == 0): ?>
             <li data-target="#focusslide" data-slide-to="<?php echo $key; ?>" class="active"></li>

            <?php else: ?>
              <li data-target="#focusslide" data-slide-to="<?php echo $key; ?>" class=""></li>
            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
        </ol>
        <div class="carousel-inner" role="listbox">
          <?php if(is_array($slider) || $slider instanceof \think\Collection || $slider instanceof \think\Paginator): $i = 0; $__LIST__ = $slider;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;if($key == 0): ?>
              <div class="item active"> 

            <?php else: ?>
              <div class="item"> 
            <?php endif; ?>
            <a href="<?php echo $val['url']; ?>" title="<?php echo $val['name']; ?>" target="_blank">
              <img src="/upload/slider/<?php echo $val['img']; ?>" alt="" class="img-responsive" title="<?php echo $val['name']; ?>">
            </a> 
            <!--<div class="carousel-caption"> </div>--> 
          </div>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        
        </div>
        <a class="left carousel-control" href="#focusslide" role="button" data-slide="prev" rel="nofollow"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">上一个</span> </a> <a class="right carousel-control" href="#focusslide" role="button" data-slide="next" rel="nofollow"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">下一个</span> </a> </div>
      <article class="excerpt-minic excerpt-minic-index">
        <h2><span class="red">【今日推荐】</span><a href="" title=""><?php echo $article['title']; ?></a></h2>
        <p class="note"><?php echo $article['description']; ?></p>
      </article>
      <div class="title">
        <h3>最新发布</h3>
        <!-- <div class="more"><a href="">PHP</a><a href="">JavaScript</a><a href="">EmpireCMS</a><a href="">Apache</a><a href="">MySQL</a></div> -->
      </div>

      <?php if(is_array($new) || $new instanceof \think\Collection || $new instanceof \think\Paginator): $i = 0; $__LIST__ = $new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
      <article class="excerpt excerpt-1">
        <a class="focus" href="<?php echo url('Index/article',['id'=>$val['id']]); ?>" title="">
          <img class="thumb" data-original="/upload/news/<?php echo $val['img']; ?>" src="/upload/news/<?php echo $val['img']; ?>" alt=""></a>
        <header>
          <a class="cat" href="<?php echo url('Index/category',['id'=>$val['typeid']]); ?>"><?php echo $val['name']; ?><i></i></a>
          <h2><a href="article.html" title=""><?php echo $val['title']; ?></a></h2>
        </header>
        <p class="meta">
          <time class="time"><i class="glyphicon glyphicon-time"></i> <?php echo date("Y-m-d H:i:s",$val['time']); ?></time>
          <span class="views"><i class="glyphicon glyphicon-eye-open"></i> 共<?php echo $val['num']; ?>人围观</span> <a class="comment" href="article.html#comment"><i class="glyphicon glyphicon-comment"></i> <?php echo $val['shounum']; ?>个不明物体</a></p>
        <p class="note"><?php echo $val['description']; ?></p>
      </article>
      <?php endforeach; endif; else: echo "" ;endif; ?>
      
      <nav class="pagination" style="display: block;">
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
          <li role="presentation"><a href="#centre" aria-controls="centre" role="tab" data-toggle="tab">会员中心</a></li>
        </ul>
        <div class="tab-content">

          <div role="tabpanel" class="tab-pane centre active" id="centre">
            <h4>需要登录才能进入会员中心</h4>
            <p>
              <a data-toggle="modal" data-target="#loginModal" class="btn btn-primary">立即登录</a> 
              <a href="javascript:;" data-toggle="modal" data-target="#regModal" class="btn btn-default">现在注册</a></p>
          </div>
        </div>
      </div>
     
    </div>
    <div class="widget widget_sentence">
      <h3>每日一句</h3>
      <div class="widget-sentence-content">
        <h4>2016年01月05日星期二</h4>
        <p>Do not let what you cannot do interfere with what you can do.<br />
          别让你不能做的事妨碍到你能做的事。（John Wooden）</p>
      </div>
    </div>
    <div class="widget widget_hot">
      <h3>热门文章</h3>
      <ul>
        <?php if(is_array($hot) || $hot instanceof \think\Collection || $hot instanceof \think\Paginator): $i = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
        <li>
          <a href="">
            <span class="thumbnail">
              <img class="thumb" data-original="/upload/news/<?php echo $val['img']; ?>" src="/upload/news/<?php echo $val['img']; ?>" alt="">
            </span>
            <span class="text"><?php echo $val['title']; ?></span>
            <span class="muted">
              <i class="glyphicon glyphicon-time"></i> <?php echo date("Y-m-d",$val['time']); ?></span>
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
  <div class="modal-dialog" role="document" style="margin-top:120px;max-width:280px;">
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
<!--登录注册模态框-->
<div class="modal fade user-select" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="<?php echo url('Index/check'); ?>" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="loginModalLabel">登录</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="loginModalUserNmae">用户名</label>
            <input type="text" class="form-control" id="loginModalUserNmae" placeholder="请输入用户名" name="username" autofocus maxlength="15" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="loginModalUserPwd">密码</label>
            <input type="password" class="form-control" id="loginModalUserPwd" placeholder="请输入密码" name="password" maxlength="18" autocomplete="off" required>
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


<div class="modal fade user-select" id="regModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="<?php echo url('Index/reg'); ?>" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="loginModalLabel">注册</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="">手机号</label>
            <input type="text" class="form-control" id="" placeholder="请输入手机号" name="phone" autofocus maxlength="11" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="loginModalUserPwd">验证码</label>
            <br>
            <input type="text" class="form-control" style="display:inline-block;width:300px;" id="loginModalUserPwd" placeholder="请输入验证码" name="code" maxlength="18" autocomplete="off" required>
            <button onclick="send()" type="button" style="display:inline-block;"  class="btn btn-success">发送验证码</button>


          </div>
           <div class="form-group">
            <label for="loginModalUserPwd">密码</label>
            <input type="password" class="form-control" id="loginModalUserPwd" placeholder="请输入密码" maxlength="18" name='pass' autocomplete="off" required>
          </div>
           <div class="form-group">
            <label for="loginModalUserPwd">确认密码</label>
            <input type="password" class="form-control" id="loginModalUserPwd" placeholder="请输入密码" maxlength="18" name="repass" autocomplete="off" required>
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
<script>
  // 发送验证码

  function send(){
    // 获取手机号
    let val = $("input[name=phone]").val();
    // ajax

    $.get("<?php echo url('Index/ajax_send'); ?>",{phone:val},function(data){

        let json = eval("("+data+")");
        if (json.msg=="OK") {
          alert('发送验证码成功');
        };
    });
  }
</script>
</body>
</html>