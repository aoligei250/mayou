<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"C:\phpStudy\PHPTutorial\WWW\work\public/../application/admin\view\order\info.html";i:1571903349;}*/ ?>
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
    <div class="panel-head"><strong class="icon-reorder"> 订单内容列表</strong></div>
    <div class="padding border-bottom">

    </div>
    <table class="table table-hover text-center">
        <tr>
            <th width="10%">订单号</th>
            <th width="20%">商品图片</th>
            <th width="15%">商品名称</th>

            <th width="10%">商品数量</th>
            <th width="10%">商品总价</th>

        </tr>
        <?php if(is_array($order) || $order instanceof \think\Collection || $order instanceof \think\Paginator): $i = 0; $__LIST__ = $order;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
        <tr>
           <td><?php echo $val['order_id']; ?></td>
          <td>
              <img src="/upload/good/<?php echo $val['image']; ?>" width="200px;">
              </td>
            <td>
                <?php echo $val['goods_name']; ?>
            </td>
            <td>
                <?php echo $val['num']; ?>
            </td>
            <td>
                <?php echo $val['price']; ?>
            </td>

        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>




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
