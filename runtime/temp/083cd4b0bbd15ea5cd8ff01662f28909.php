<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"C:\phpStudy\PHPTutorial\WWW\work\public/../application/admin\view\login\index.html";i:1571324085;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>登录</title>
    <link rel="stylesheet" href="/static/admin/css/pintuer.css">
    <link rel="stylesheet" href="/static/admin/css/admin.css">
    <script src="/static/admin/js/jquery.js"></script>
    <script src="/static/admin/js/pintuer.js"></script>
    <!--layer-->
    <script src="/static/admin/layer/layer.js"></script>
</head>
<body>
<div class="bg"></div>
<div class="container">
    <div class="line bouncein">
        <div class="xs6 xm4 xs3-move xm4-move">
            <div style="height:150px;"></div>
            <div class="media media-y margin-big-bottom">
            </div>
            <form action="<?php echo url('admin/login/checklogin'); ?>" class="form-x" method="post">
                <div class="panel loginbox">
                    <div class="text-center margin-big padding-big-top"><h1>后台管理中心</h1></div>
                    <div class="panel-body" style="padding:30px; padding-bottom:10px; padding-top:10px;">
                        <div class="form-group">
                            <div class="field field-icon-right">
                                <input type="text" class="input input-big" name="admin_name" placeholder="登录账号" data-validate="required:请填写账号" />
                                <span class="icon icon-user margin-small"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="field field-icon-right">
                                <input type="password" class="input input-big" name="password" placeholder="登录密码" data-validate="required:请填写密码" />
                                <span class="icon icon-key margin-small"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="field">
                                <input type="text" class="input input-big" name="code" placeholder="填写右侧的验证码" data-validate="required:请填写右侧的验证码" />
                                <img src="<?php echo captcha_src(); ?>"  alt="" width="100" height="32" class="passcode" style="height:43px;cursor:pointer;" onclick="this.src=this.src+'?'">

                            </div>
                        </div>
                    </div>
                    <div style="padding:30px;"><input onclick="check()" type="button" class="button button-block bg-main text-big input-big"  value="登录"></div>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>

<script>
    function check()
    {
        var data=$('.form-x').serialize();
       // alert(data);
        $.ajax({
            'url':"<?php echo url('admin/login/checklogin'); ?>",
            'type':'post',
            'data':data,
            success:function (data) {
                    if(data.code==200)
                    {
                        layer.msg(data.info,{icon:6});
                      //  parent.location.href="<?php echo url('admin/info/index'); ?>";
                       window.location.href="<?php echo url('/admin'); ?>";
                    }
                    else
                    {
                        layer.msg(data.info,{icon:5});

                    }
            }
        });
    }
</script>
