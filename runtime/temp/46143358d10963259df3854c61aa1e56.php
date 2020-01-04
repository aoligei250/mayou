<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:84:"C:\phpStudy\PHPTutorial\WWW\work\public/../application/admin\view\comment\index.html";i:1571990085;s:74:"C:\phpStudy\PHPTutorial\WWW\work\application\admin\view\public\static.html";i:1568445051;}*/ ?>
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
<div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong></div>

    <table class="table table-hover text-center">
        <tr>

            <th>用户名</th>
            <th width="10%">评论商品名</th>
            <th>评论时间</th>
            <th>评论内容</th>
            <th width="250">评论状态</th>
        </tr>
        <?php if(is_array($message) || $message instanceof \think\Collection || $message instanceof \think\Paginator): $i = 0; $__LIST__ = $message;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
           <tr>
               <td><?php echo $val['user_name']; ?></td>
               <td><?php echo $val['goods_name']; ?></td>
               <td><?php echo date('Y-m-d h-i-s',$val['time']); ?></td>
               <td><?php echo $val['message']; ?></td>
            <td>
               <select name="status"  onchange="status(this,<?php echo $val['u_id']; ?>,<?php echo $val['g_id']; ?>)"  id="TestSelect" style="padding:5px 15px; border:1px solid #ddd;" >
                     <?php if($val['message_status']==0): ?>
                   <option value="0" selected>未审核</option>
                   <option value="1">审核通过</option>
                   <option value="2">审核未通过</option>
                   <?php elseif($val['message_status']==1): ?>
                   <option value="0" >未审核</option>
                   <option value="1" selected>审核通过</option>
                   <option value="2">审核未通过</option>
                   <?php elseif($val['message_status']==2): ?>
                   <option value="0" >未审核</option>
                   <option value="1" >审核通过</option>
                   <option value="2" selected>审核未通过</option>
                   <?php endif; ?>

               </select  >
            </td>
           </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>




    </table>
</div>
<script>
    function status(obj,u_id,g_id,status) {
     //   alert(u_id);
       // alert(g_id);
           var status=$("#TestSelect option:selected").val();
            alert(status);
        $.get("<?php echo url('admin/comment/status'); ?>",{g_id:g_id,u_id:u_id,status:status},function (data) {
               alert(data);
            if (data == 1)
            {
                layer.msg("修改成功",{icon:6});
            }
            else
            {
                layer.msg("修改失败",{icon:5});
            }

        })
    }
</script>
