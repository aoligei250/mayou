<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\phpstudy_pro\WWW\work\public/../application/admin\view\cate\index.html";i:1571876410;}*/ ?>
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
<body>
<div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong></div>
    <div class="padding border-bottom">
        <a type="button" class="button border-yellow" href="<?php echo url('admin/cate/add'); ?>" ><span class="icon-plus-square-o"></span> 添加分类</a>
    </div>
    <table class="table table-hover text-center">
        <tr>
            <th width="5%">ID</th>
            <th width="15%">分类名称</th>
            <th width="10%">添加子分类</th>
            <th width="10%">排序</th>
            <th width="10%">操作</th>
        </tr>
        <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
        <tr>
            <td><?php echo $val['id']; ?></td>

            <td><?php echo str_repeat('|---',$val['level']) ?> <?php echo $val['cate_name']; ?></td>
            <td>
                <a type="button" class="button border-yellow" href="/admin/cate/add?pid=<?php echo $val['id']; ?>&path=<?php echo $val['path']; ?><?php echo $val['id']; ?>," ><span class="icon-plus-square-o"></span> 添加子分类</a>
            </td>
            <td><?php echo $val['is_lou']; ?></td>
            <td><div class="button-group"> <a class="button border-main" href="<?php echo url('admin/cate/edit',['id'=>$val['id']]); ?>"><span class="icon-edit"></span> 修改</a> <a class="button border-red" href="javascript:void(0)" onclick="del(this,<?php echo $val['id']; ?>)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>

    </table>
</div>
<script type="text/javascript">
    function del(obj,id){
    //   alert('id');
        layer.confirm("您确定要删除吗?",{icon: 3, title:'提示'},function(){
                  $.get("<?php echo url('admin/cate/del'); ?>",{id:id},function(data){
                        if(data==1)
                        {
                            layer.msg('删除成功',{icon:6,time:2000},function () {
                            //    $(obj).parent().parent().parent().remove();
                                window.location.reload();
                            })
                        }
                        else
                        {
                            layer.msg('删除失败',{icon:5});
                        }


                  });
        });
    }
</script>
