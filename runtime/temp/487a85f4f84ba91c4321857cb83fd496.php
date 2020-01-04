<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:81:"C:\phpStudy\PHPTutorial\WWW\work\public/../application/admin\view\info\index.html";i:1571821992;s:74:"C:\phpStudy\PHPTutorial\WWW\work\application\admin\view\public\static.html";i:1568445051;}*/ ?>

<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title></title>
    <link rel="stylesheet" href="/static/admin/css/pintuer.css">
    <link rel="stylesheet" href="/static/admin/css/admin.css">
    <script src="/static/admin/js/jquery.js"></script>
    <script src="/static/admin/js/pintuer.js"></script>
    <!--layer-->
    <script src="/static/admin/layer/layer.js"></script>
    <!-- 引入无刷新上传图片 -->
    <!-- 引入无刷新上传图片 -->
    <script src="/static/admin/up/jquery.uploadifive.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="/static/admin/up/uploadifive.css">

    <!-- 引入百度编辑器 -->
    <script type="text/javascript" charset="utf-8" src="/static/admin/baidu/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/static/admin/baidu/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/static/admin/baidu/lang/zh-cn/zh-cn.js"></script>
</head>
<body>
<div class="panel admin-panel">
    <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 网站信息</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="<?php echo url('admin/info/save'); ?>">
            <div class="form-group">
                <div class="label">
                    <label>网站标题：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" name="web_title" value="<?php echo $info['web_title']; ?>" />
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group" style="margin-left:50px;">
                <label for="" class="col-sm-2 control-label" style="float: left;">网站LOGO</label>
                
                <div class="fileds" style="float: left">
                    <input type="hidden" name="web_image" id="imgHidden">
                    <input type="file" name=""  id="img">
                    <br>
                    <div id="main"></div>
                    <div>
                    <img src="/upload/info/<?php echo $info['web_image']; ?>" width="200px;">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>网站域名：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" name="web_domain" value="<?php echo $info['web_domain']; ?>" />
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label>网站关键字：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" name="web_keywords" value="<?php echo $info['web_keywords']; ?>" />
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>网站描述：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" name="web_description" value="<?php echo $info['web_description']; ?>" />
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>联系人：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" name="web_man" value="<?php echo $info['web_man']; ?>" />
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>手机：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" name="web_phone" value="<?php echo $info['web_phone']; ?>" />
                    <div class="tips"></div>
                </div>
            </div>



            <div class="form-group">
                <div class="label">
                    <label>QQ：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" name="web_qq" value="<?php echo $info['web_qq']; ?>" />
                    <div class="tips"></div>
                </div>
            </div>




            <div class="form-group">
                <div class="label">
                    <label>底部信息：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" name="web_info" value="<?php echo $info['web_info']; ?>" />
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label></label>
                </div>
                <div class="field">
                    <a class="button bg-main icon-check-square-o" onclick="save()"> 提交</a>
                </div>
           </div>
        </form>
    </div>
</div>
</body></html>

<script>
    //    var ue = UE.getEditor('editor');


    $('#img').uploadifive({
        // 是否自动上传
        'auto'             : true,
        // 显示上传动画DIV
        'queueID'          : 'main',
        // 处理文件上传的地址
        'uploadScript'     : "<?php echo url('admin/info/upload'); ?>",
        // 文件上传框文字
        "buttonText":"上传图片",
        // 监听图片上传成功
        'onUploadComplete' : function(file, data) {
            // $("#main").find(".uploadifive-queue-item").remove();
            // $("#main").append(`<img width='200px' src='/upload/tmp/${data}'>`);
            $("#main").html("<img width='200px' src='/upload/info/"+data+"'>");
            //      alert(data);
            $("#imgHidden").val(data);
        }
    });

    function save()
    {
       // alert(1);
        var data=$(".form-x").serialize();
      //  alert(data);
        $.ajax({
            "url":"<?php echo url('admin/info/save'); ?>",
            "type":"post",
            "data":data,
            success:function (data) {
             //   alert(data);
                if(data==1)
                {
                    layer.msg("提交成功",{icon:6});
                    window.reload();
                }
                else
                {
                    layer.msg(data,{icon:5});
                }
            }
        });
    }
</script>
