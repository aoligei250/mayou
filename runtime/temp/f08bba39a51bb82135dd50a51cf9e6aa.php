<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"C:\phpStudy\PHPTutorial\WWW\work\public/../application/index\view\login\register.html";i:1571543886;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="/static/index/bs/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/static/index/bs/static/dao.css">
    <script type="text/javascript" src="/static/index/bs/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/static/index/bs/js/bootstrap.min.js"></script>
    <!--layer-->
    <script src="/static/admin/layer/layer.js"></script>

</head>
<body style=" background: url(/static/index/images/1.jpg) no-repeat center center fixed; background-size: 100%;">


<div class="modal-dialog" style="margin-top: 10%;">
    <div class="modal-content">
        <div class="modal-header">

            <h4 class="modal-title text-center" id="myModalLabel">注册</h4>
        </div>
        <form class="form-x">
        <div class="modal-body" id = "model-body">
            <div class="form-group">

                <input type="text" name="user_name" class="form-control"placeholder="用户名" autocomplete="off">
            </div>
            <div class="form-group">

                <input type="text" name="email" class="form-control" placeholder="邮箱" autocomplete="off">
            </div>
            <div class="form-group">

                <input type="password" name="password" class="form-control" placeholder="密码" autocomplete="off">
            </div>
        </div>
        <div class="modal-footer">
            <div class="form-group">
                <button type="button" onclick="register()" class="btn  btn-primary  form-control">提交</button>

            </div>
            <div class="form-group">

                <a href="<?php echo url('index/login/index'); ?>" class="btn btn-default form-control">登录</a>
            </div>

        </div>
        </form>
    </div><!-- /.modal-content -->
</div><!-- /.modal -->

</body>
</html>
<script>
    function register() {
             var data=$('.form-x').serialize();
           //  alert(data);
        $.ajax({
            'type':'post',
            'url':"<?php echo url('index/login/checkregister'); ?>",
            'data':data,
            success:function (data) {
               // alert(data);
                if(data==1)
                {
                    layer.msg("注册成功,欢迎登陆",{icon:6});
                    window.location.href="<?php echo url('index/login/index'); ?>";
                }
                else
                {
                    layer.msg(data,{icon:5});
                   // window.location.reload();
                }
            }
        });
    }
</script>