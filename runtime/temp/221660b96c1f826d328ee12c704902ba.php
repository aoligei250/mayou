<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"C:\phpStudy\PHPTutorial\WWW\work\public/../application/admin\view\order\index.html";i:1571969430;}*/ ?>
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
            <th width="20%">订单地址</th>
            <th width="15%">用户名</th>

            <th width="10%">电话</th>
            <th width="10%">订单生成时间</th>
            <th width="15%">订单状态</th>
        </tr>
        <?php if(is_array($order) || $order instanceof \think\Collection || $order instanceof \think\Paginator): $i = 0; $__LIST__ = $order;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
        <tr>


            <td><a href="<?php echo url('admin/order/info',['order_id'=>$val['order_id']]); ?>"><?php echo $val['order_id']; ?></a></td>
            <td><?php echo $val['addrinfo']; ?></td>
            <td><?php echo $val['user_name']; ?></td>
            <td><?php echo $val['phone']; ?></td>
            <td><?php echo date("y-m-d h-i-s",$val['time']); ?></td>
            <td>
                <a href="<?php echo url('admin/order/status',['id'=>$val['order_id'],'status'=>$val['order_status']]); ?>"><?php echo $val['status_name']; ?></a>
            </td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>



    </table>
</div>
</body>
</html>
<script>
  /*  function ajax_status(id) {
      alert(id);
     //   var status=$("#TestSelect option:selected").val();
     //  alert(status);
       /!* $.get("<?php echo url('admin/order/status'); ?>",{id:id,status:status},function (data) {
            alert(data);
        })*!/
   /!* <select name="status"  id="TestSelect" style="padding:5px 15px; border:1px solid #ddd;" >
            <?php if(is_array($status) || $status instanceof \think\Collection || $status instanceof \think\Paginator): $i = 0; $__LIST__ = $status;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;if($value['id']==$val['order_status']): ?>
    <option value="<?php echo $value['id']; ?>" selected><?php echo $value['status_name']; ?></option>
        <?php else: ?>
        <option value="<?php echo $value['id']; ?>" ><?php echo $value['status_name']; ?></option>
            <?php endif; endforeach; endif; else: echo "" ;endif; ?>

                </select  >
    }*!/*/
</script>
