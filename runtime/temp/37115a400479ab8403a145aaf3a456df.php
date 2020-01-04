<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:79:"C:\phpStudy\PHPTutorial\WWW\work\public/../application/admin\view\ads\edit.html";i:1571825013;s:74:"C:\phpStudy\PHPTutorial\WWW\work\application\admin\view\public\static.html";i:1568445051;}*/ ?>
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
<div class="panel admin-panel margin-top">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" id="form-x" action="">

            <div class="form-group">
                <div class="label">
                    <label>广告名称：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="ads_name" value="<?php echo $olddata['ads_name']; ?>" />
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>广告所属分类：</label>
                </div>
                <div class="field">
                    <select name="c_id" class="input">

                        <option >所属分类</option>
                        <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;if($val['id']==$olddata['c_id']): ?>

                        <option selected value="<?php echo $val['id']; ?>"><?php echo $val['cate_name']; ?></option>

                        <?php else: if($val['level']==1): ?>
                        <option  value="<?php echo $val['id']; ?>"><?php echo $val['cate_name']; ?></option>
                        <?php else: ?>
                        <option disabled value="<?php echo $val['id']; ?>"><?php echo $val['cate_name']; ?></option>
                        <?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group" style="margin-left:50px;">
                <label for="" class="col-sm-2 control-label" style="float: left;">广告图片</label>

                <div class="fileds" style="float: left">
                    <input type="hidden" name="ads_image" id="imgHidden">
                    <input type="file" name=""  id="img">
                    <br>
                    <div id="main"></div>
                    <img src="/upload/ads/<?php echo $olddata['ads_image']; ?>" width="200px;">
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>广告描述：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="ads_description" value="<?php echo $olddata['ads_description']; ?>" />
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>广告跳转</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="ads_url" value="<?php echo $olddata['ads_url']; ?>" data-validate="required:请输入跳转地址" />
                    <div class="tips"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label>广告排序：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="ads_sort" value="<?php echo $olddata['ads_sort']; ?>"  data-validate="required:,number:排序必须为数字" />
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>广告是否显示：</label>
                </div>
                <div class="field" >
                    <?php if($olddata['is_lou']==1): ?>
                    <input type="radio"  checked name="is_lou" value="1" />是
                    <input type="radio"  name="is_lou" value="0" />否
                    <?php else: ?>
                    <input type="radio"   name="is_lou" value="1" />是
                    <input type="radio"  checked name="is_lou" value="0" />否
                    <?php endif; ?>


                </div>


                <div class="tips"></div>
            </div>
    </div>
    <div class="form-group">
        <div class="label">
            <label></label>
        </div>
        <div class="field">
            <input type="hidden" name="id" value="<?php echo $olddata['id']; ?>" >
            <a class="button bg-main icon-check-square-o"   onclick="update()"> 提交</a>
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
        'uploadScript'     : "<?php echo url('admin/ads/upload'); ?>",
        // 文件上传框文字
        "buttonText":"上传图片",
        // 监听图片上传成功
        'onUploadComplete' : function(file, data) {
            // $("#main").find(".uploadifive-queue-item").remove();
            // $("#main").append(`<img width='200px' src='/upload/tmp/${data}'>`);
            $("#main").html("<img width='200px' src='/upload/ads/"+data+"'>");
            //      alert(data);
            $("#imgHidden").val(data);
        }
    });

    function update() {
    //  alert(id);
        var  data=$('.form-x').serialize();
       // alert(data);
        $.ajax({
            "url":"<?php echo url('admin/ads/update'); ?>",
            "type":"post",
            "data":data,
            success:function (data) {
             //   alert(data);
                if(data==1)
                {
                    layer.msg('修改成功',{icon:6});
                    window.location.href="<?php echo url('admin/ads/index'); ?>";
                }
                else
                {
                    layer.msg(data,{icon:5});

                }
            }
        });
    }
</script>
