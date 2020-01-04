<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"E:\wamp64\www\uekblog\public/../application/index\view\index\article.html";i:1538292899;s:61:"E:\wamp64\www\uekblog\application\index\view\public\head.html";i:1538286663;s:63:"E:\wamp64\www\uekblog\application\index\view\public\footer.html";i:1538275063;}*/ ?>
<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $data['title']; ?>-<?php echo config('webConfig.TITLE'); ?></title>
<meta name="keywords" content="<?php echo $data['keywords']; ?>">
<meta name="description" content="<?php echo $data['description']; ?>">
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

<body class="user-select single">
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
      <header class="article-header">
        <h1 class="article-title"><a href="article.html"><?php echo $data['title']; ?></a></h1>
        <div class="article-meta"> 
          <span class="item article-meta-time">
            <time class="time" data-toggle="tooltip" data-placement="bottom" title="时间：<?php echo date('Y-m-d H:i:s',$data['time']); ?>"><i class="glyphicon glyphicon-time"></i> <?php echo date('Y-m-d H:i:s',$data['time']); ?></time>
          </span>
          <span class="item article-meta-source" data-toggle="tooltip" data-placement="bottom" title="来源：<?php echo $data['author']; ?>"><i class="glyphicon glyphicon-globe"></i> <?php echo $data['author']; ?></span>

          <span class="item article-meta-category" data-toggle="tooltip" data-placement="bottom" title="栏目：<?php echo $data['name']; ?>"><i class="glyphicon glyphicon-list"></i> <a href="program" title=""><?php echo $data['name']; ?></a></span> 

          <span class="item article-meta-views" data-toggle="tooltip" data-placement="bottom" title="查看：<?php echo $data['num']; ?>"><i class="glyphicon glyphicon-eye-open"></i> 共<?php echo $data['num']; ?>人围观</span> 

          <span class="item article-meta-comment" data-toggle="tooltip" data-placement="bottom" title="评论：0"><i class="glyphicon glyphicon-comment"></i> 0个不明物体</span> </div>
      </header>
      <article class="article-content">

        <?php echo $data['text']; ?>
        
      </article>
      <div class="article-tags">标签：<a href="" rel="tag">PHP</a></div>
      <div class="relates">
        <div class="title">
          <h3>相关推荐</h3>
        </div>
        <ul>
          <?php if(is_array($tuijian) || $tuijian instanceof \think\Collection || $tuijian instanceof \think\Paginator): $i = 0; $__LIST__ = $tuijian;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tui): $mod = ($i % 2 );++$i;?>
            <li><a href="<?php echo url('Index/article',['id'=>$tui['id']]); ?>"><?php echo $tui['title']; ?></a></li>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
      <div class="title" id="comment">
        <h3>评论 <small>抢沙发</small></h3>
      </div>
      <!--<div id="respond">
        <div class="comment-signarea">
          <h3 class="text-muted">评论前必须登录！</h3>
          <p> <a href="javascript:;" class="btn btn-primary login" rel="nofollow">立即登录</a> &nbsp; <a href="javascript:;" class="btn btn-default register" rel="nofollow">注册</a> </p>
          <h3 class="text-muted">当前文章禁止评论</h3>
        </div>
      </div>-->
      <div id="respond">
        <form action="" method="post" id="comment-form">
          <div class="comment">
            <div class="comment-title"><img class="avatar" src="/static/home/images/icon/icon.png" alt="" /></div>
            <div class="comment-box">
              <textarea placeholder="您的评论可以一针见血" name="comment" id="comment-textarea" cols="100%" rows="3" tabindex="1" ></textarea>
              <div class="comment-ctrl"> <span class="emotion"><img src="/static/home/images/face/5.png" width="20" height="20" alt="" />表情</span>
                <div class="comment-prompt"> <i class="fa fa-spin fa-circle-o-notch"></i> <span class="comment-prompt-text"></span> </div>
                <input type="hidden" value="1" class="articleid" />
                <button type="submit" name="comment-submit" id="comment-submit" tabindex="5" articleid="1">评论</button>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div id="postcomments">
        <ol class="commentlist">
          <?php if(is_array($comment) || $comment instanceof \think\Collection || $comment instanceof \think\Paginator): $i = 0; $__LIST__ = $comment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
          <li class="comment-content" style="position:relative">
            <span class="comment-f">#<?php echo $i; ?></span>
            <div class="comment-avatar">
              <img class="avatar" src="/upload/user/<?php echo (isset($val['img']) && ($val['img'] !== '')?$val['img']:'head.jpg'); ?>" alt="" />
            </div>
            <div class="comment-main">
              <p><?php echo $val['username']; ?><span class="time">(<?php echo date("Y-m-d",$val['time']); ?>)</span><br />
                <?php echo $val['text']; ?></p>
            </div>
          </li>

          <?php endforeach; endif; else: echo "" ;endif; ?>
        </ol>
        
        <div class="quotes"><span class="disabled">首页</span><span class="disabled">上一页</span><a class="current">1</a><a href="">2</a><span class="disabled">下一页</span><span class="disabled">尾页</span></div>
      </div>
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
      <!-- <div class="widget widget_search">
        <form class="navbar-form" action="/Search" method="post">
          <div class="input-group">
            <input type="text" name="keyword" class="form-control" size="35" placeholder="请输入关键字" maxlength="15" autocomplete="off">
            <span class="input-group-btn">
            <button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
            </span> </div>
        </form>
      </div> -->
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
            <a href="<?php echo url('Index/article',['id'=>$val['id']]); ?>">
              <span class="thumbnail">
                <img class="thumb" data-original="/upload/news/<?php echo $val['img']; ?>" src="/upload/news/<?php echo $val['img']; ?>" alt="">
              </span>
              <span class="text"><?php echo $val['title']; ?></span>
              <span class="muted"><i class="glyphicon glyphicon-time"></i> <?php echo date("Y-m-d",$val['time']); ?> </span><span class="muted"><i class="glyphicon glyphicon-eye-open"></i> <?php echo $val['num']; ?></span></a></li>

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
<div id="rightClickMenu">
  <ul class="list-group rightClickMenuList">
    <li class="list-group-item disabled">欢迎访问异清轩博客</li>
    <li class="list-group-item"><span>IP：</span>172.16.10.129</li>
    <li class="list-group-item"><span>地址：</span>河南省郑州市</li>
    <li class="list-group-item"><span>系统：</span>Windows10</li>
    <li class="list-group-item"><span>浏览器：</span>Chrome47</li>
  </ul>
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
<script src="/static/home/js/jquery.qqFace.js"></script> 
<script type="text/javascript">
$(function(){
	$('.emotion').qqFace({
		id : 'facebox', 
		assign:'comment-textarea', 
		path:'/static/home/images/arclist/'	//表情存放的路径
	});
 });   
</script>
</body>
</html>