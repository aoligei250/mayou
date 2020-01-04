<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"C:\phpStudy\PHPTutorial\WWW\work\public/../application/admin\view\cate\edit.html";i:1571877418;}*/ ?>
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
          <input type="hidden" value="<?php echo $olddata['id']; ?>" name="id">
            </div>

            <div class="form-group">
                <div class="label">
                    <label>分类标题：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="cate_name" value="<?php echo $olddata['cate_name']; ?>" />
                    <div class="tips"></div>
                </div>
            </div>



            <div class="form-group">
                <div class="label">
                    <label>是否为楼层</label>
                </div>
                <div class="field">
                    <?php if($olddata['is_lou']==1): ?>
                    <input type="radio" name="is_lou"  value="1"  checked  >是
                    <input type="radio" name="is_lou"  value="0"   >否
                    <?php else: ?>
                    <input type="radio" name="is_lou"  value="1"   >是
                    <input type="radio" name="is_lou"  value="0"  checked  >否
                    <?php endif; ?>

                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label></label>
                </div>
                <div class="field">
                    <button  onclick="update()" class="button bg-main icon-check-square-o" type="button"> 提交</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
<script>
   function update() {
       var data=$('.form-x').serialize();
     //  alert(data);
     $.ajax({
         "url":"<?php echo url('admin/cate/update'); ?>",
         "type":"post",
         "data":data,
         success:function (data) {
           if(data==1)
           {
               layer.msg("修改成功",{icon:6});
               window.location.href="<?php echo url('admin/cate/index'); ?>";

           }
           else
           {
               layer.msg(data,{icon:6});
            //   window.location.reload();
           }
         }
     });
   }
</script>