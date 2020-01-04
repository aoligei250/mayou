<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:82:"C:\phpStudy\PHPTutorial\WWW\work\public/../application/admin\view\admin\index.html";i:1572317171;s:74:"C:\phpStudy\PHPTutorial\WWW\work\application\admin\view\public\static.html";i:1568445051;}*/ ?>
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
    <div class="padding border-bottom">
        <a class="button border-yellow" href=""><span class="icon-plus-square-o"></span> 添加内容</a>
    </div>
    <table class="table table-hover text-center">
        <tr>
            <th width="5%">ID</th>
            <th>管理员名称</th>

            <th>管理员注册时间</th>
            <th width="250">操作</th>
        </tr>
        <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
        <tr>
            <td><?php echo $val['id']; ?></td>
            <td><?php echo $val['admin_name']; ?></td>

            <td><?php echo date("y-m-d h-i-s ",$val['time']); ?></td>

            <td>
                <div class="button-group">

                    <a class="button border-red"  href="<?php echo url('admin/admin/delete',['id'=>$val['id']]); ?>"><span class="icon-trash-o"></span> 删除</a>
                </div>
            </td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>





    </table>
</div>
<script>

</script>
<div class="panel admin-panel margin-top">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" id="form-x" action="">
            <div class="form-group">
                <div class="label">
                    <label>管理员所属组</label>
                </div>
                <div class="field">
                    <select name="group_id" >
                        <option>请选择管理员所属组</option>
                        <?php if(is_array($admingroup) || $admingroup instanceof \think\Collection || $admingroup instanceof \think\Paginator): $i = 0; $__LIST__ = $admingroup;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $val['id']; ?>"><?php echo $val['title']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label>管理员名称</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="admin_name" value=""  />
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>管理员密码</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="password" value=""  />
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>确认管理员密码</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="repassword" value=""  />
                    <div class="tips"></div>
                </div>
            </div>


            <div class="form-group">
                <div class="label">
                    <label></label>
                </div>
                <div class="field">
                    <button class="button bg-main icon-check-square-o" type="submit" onclick="save()"> 提交</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body></html>
<script>
    function save() {
        var data=$("#form-x").serialize();
     //   alert(data);
        $.ajax({
            'url':"<?php echo url('admin/admin/save'); ?>",
            'type':'post',
            'data':data,
            success:function (data) {
                if(data==1)
                {
                    layer.msg('添加成功',{icon:6});
                    window.location.reload();
                }
                else
                {
                    layer.msg(data,{icon:5});
                }

            }
        });
    }


</script>