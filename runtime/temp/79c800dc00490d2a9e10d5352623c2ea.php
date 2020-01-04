<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:82:"C:\phpStudy\PHPTutorial\WWW\work\public/../application/admin\view\column\edit.html";i:1568950871;s:74:"C:\phpStudy\PHPTutorial\WWW\work\application\admin\view\public\static.html";i:1568445051;}*/ ?>
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
        <form method="post" class="form-x" id="form-x" action="<?php echo url('admin/column/update'); ?>">

            <div class="form-group">
                <div class="label">
                    <label>栏目名称：</label>
                    <input type="hidden" value="<?php echo $olddata['id']; ?>" name="id" />
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="column_name" value="<?php echo $olddata['column_name']; ?>" data-validate="required:请输入标题" />

                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>栏目跳转</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="url" value="<?php echo $olddata['url']; ?>" data-validate="required:请输入跳转地址" />
                    <div class="tips"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label>排序：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="sort" value="<?php echo $olddata['sort']; ?>"  data-validate="required:,number:排序必须为数字" />
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label></label>
                </div>
                <div class="field">
                    <button class="button bg-main icon-check-square-o"
                            type="submit" > 提交</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body></html>

