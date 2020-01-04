<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"C:\phpStudy\PHPTutorial\WWW\work\public/../application/admin\view\order\status.html";i:1571970451;}*/ ?>
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
</head>
<body>
<div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 订单状态列表</strong></div>
    <div class="padding border-bottom">

    </div>
    <table class="table table-hover text-center">
        <form method="post" action="<?php echo url('admin/order/ajax_status'); ?>">
        <th>
            <input type="hidden" name="order_id" value="<?php echo $order_id; ?>" >
            <td>订单号：<?php echo $order_id; ?></td>
        <td>
            <select name="status"  id="TestSelect" style="width: 100%;"  >

                <?php if(is_array($status_info) || $status_info instanceof \think\Collection || $status_info instanceof \think\Paginator): $i = 0; $__LIST__ = $status_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;if($val['id']==$status): ?>
                <option value="<?php echo $val['id']; ?>" selected><?php echo $val['status_name']; ?></option>
                <?php else: ?>
                <option value="<?php echo $val['id']; ?>" ><?php echo $val['status_name']; ?></option>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </select  >
        </td>
        <td>
            <input type="submit" class="btn "  value="提交">
        </td>
        </th>
   </form>






    </table>
</div>
</body>
</html>
<script>
    function ajax_status(id) {
        alert(id);
        //   var status=$("#TestSelect option:selected").val();
        //  alert(status);
        /* $.get("<?php echo url('admin/order/status'); ?>",{id:id,status:status},function (data) {
             alert(data);
         })*/
    }
</script>
