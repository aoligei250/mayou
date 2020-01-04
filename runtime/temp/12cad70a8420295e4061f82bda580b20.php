<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\phpstudy_pro\WWW\work\public/../application/index\view\login\index.html";i:1571551307;}*/ ?>
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

            <h4 class="modal-title text-center" id="myModalLabel">登录</h4>
        </div>
        <form class="form-x"  >
        <div class="modal-body" id = "model-body">
            <div class="form-group">

                <input type="text" class="form-control" name="user_name" placeholder="用户名" autocomplete="off">
            </div>
            <div class="form-group">

                <input type="password" class="form-control" name="password" placeholder="密码" autocomplete="off">
            </div>
        </div>
        <div class="modal-footer">
            <div class="form-group">
                <button type="button" onclick="login()" class="btn btn-primary form-control">登录</button>
            </div>
            <div class="form-group">

            <a href="<?php echo url('index/login/register'); ?>" class="btn btn-default form-control">注册</a>
            </div>

        </div>
        </form>
    </div><!-- /.modal-content -->
</div><!-- /.modal -->

</body>

</html>
<script>
    function login() {
         var data=$('.form-x').serializeArray();
         $.ajax({
             'url':"<?php echo url('index/login/checklogin'); ?>",
             'type':'post',
             'data':data,
             success:function (data) {
                if(data==1)
                {
                    layer.msg("登陆成功",{icon:6});
                    window.location.href="<?php echo url('index/index/index'); ?>";
                }
                else
                {
                    layer.msg(data,{icon:5});
                }
             }
         });
    }
</script>