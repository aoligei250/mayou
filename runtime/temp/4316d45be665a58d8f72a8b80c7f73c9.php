<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"C:\phpStudy\PHPTutorial\WWW\work\public/../application/admin\view\cate\create.html";i:1571323559;}*/ ?>
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
</head>
<div class="panel admin-panel margin-top">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>添加内容</strong></div>
    <div class="body-content">
        <form method="post" id="form-x" class="form-x" action="">
            <div class="form-group">
                <input type="hidden" name="pid" value="<?php echo isset($_GET['pid'])?$_GET['pid']:0;?>"  >
                <input type="hidden" name="path" value="<?php echo isset($_GET['path'])?$_GET['path']:'0,';?>" >
            </div>

            <div class="form-group">
                <div class="label">
                    <label>分类标题：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="cate_name" />
                    <div class="tips"></div>
                </div>
            </div>



            <div class="form-group">
                <div class="label">
                    <label>是否为楼层</label>
                </div>
                <div class="field">
                   <input type="radio" name="is_lou"  value="1"   >是
                    <input type="radio" name="is_lou"  value="0"   >否
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label></label>
                </div>
                <div class="field">
                    <button  onclick="save()" class="button bg-main icon-check-square-o" type="button"> 提交</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
<script>
    function  save() {
        var data=$('#form-x').serializeArray();
     //   alert(data);
        $.ajax({
            'type':'post',
            'url':"<?php echo url('admin/cate/save'); ?>",
            'data':data,
            success:function (data) {

                   if(data==1)
                   {
                       layer.msg('添加成功',{icon:6});
                       window.location.href="<?php echo url('admin/cate/index'); ?>";
                   }
                   else
                   {
                       layer.msg(data,{icon:5});
                   }
            }
        });
    }
</script>