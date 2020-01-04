<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:79:"C:\phpStudy\PHPTutorial\WWW\work\public/../application/admin\view\good\add.html";i:1571542945;s:74:"C:\phpStudy\PHPTutorial\WWW\work\application\admin\view\public\static.html";i:1568445051;}*/ ?>
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
<body>
<div class="panel admin-panel">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="<?php echo url('admin/good/save'); ?>">
            <div class="form-group">
                <div class="label">
                    <label>商品名称：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" value="" name="goods_name" data-validate="required:请输入标题" />
                    <div class="tips"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label>商品库存：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" value="" name="goods_num" data-validate="required:请输入标题" />
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>商品价格：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" value="" name="goods_price" data-validate="required:请输入标题" />
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>商品所属分类：</label>
                </div>
                <div class="field">
                    <select name="cate_id" class="input w50">
                        <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;if($val['level']==1): ?>
                        <option value="<?php echo $val['id']; ?>" disabled="disabled" >
                            <?php echo str_repeat("|---",$val['level']) ?>
                            <?php echo $val['cate_name']; ?></option>
                        <?php else: ?>
                        <option value="<?php echo $val['id']; ?>" >
                            <?php echo str_repeat("|---",$val['level']) ?>
                            <?php echo $val['cate_name']; ?></option>
                        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">

                    <label for="">商品图片</label>
                    <input type="file"  id="file_upload" >
                    <input type="hidden" class="image"  name="image">

                    <div id="main"></div>


            </div>
            <div class="form-group">
                <label for="">商品多图片</label>
                <input type="file"  id="file_uploads" >
                <input type="hidden" class="images"  name="images">

                <div id="mains"></div>

            </div>
            <div class="form-group">
                <div class="label">
                    <label>商品简介</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="goods_description" value="0"   />
                    <div class="tips"></div>
                </div>
            </div>



            <div class="form-group">
                <div class="label">
                    <label>排序：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="goods_sort" value="0"  data-validate="number:排序必须为数字" />
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>商品配置：</label>
                </div>
                <div class="field">

                    <script id="editor" name="goods_peizhi" type="text/plain" style="width:100%;height:500px;"></script>

                    <div class="tips"></div>
                        </div>
                        </div>

            <div class="form-group">
                <div class="label">
                    <label></label>
                </div>
                <div class="field">
                    <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
                </div>
            </div>
        </form>
    </div>
</div>

</body></html>
<script type="text/javascript">


                    var ue = UE.getEditor('editor');
    //使用插件
    $(function() {
        var img="";
        $('#file_upload').uploadifive({
            //上传文件按钮的button
            'buttonText'       :"文件上传",
            //设置文件传输数据

            'auto'             : true,
            //设置上传动画
            'swf'               :'',
            //文件上传地址
            'uploadScript'          :"<?php echo url('admin/good/upload'); ?>",
            // 文件上传成功返回的数据
            'onUploadComplete' : function(file, data) {
            //   alert(data);

                $("#main").html("<img width='200px' src='/upload/good/"+data+"'>");
                $('.image').val(data);




            }
        });

        var img="";
        var arr=[];
        $('#file_uploads').uploadifive({
            //上传文件按钮的button
            'buttonText'       :"文件上传",
            //设置文件传输数据

            'auto'             : true,
            //设置上传动画
            'swf'               :'',
            //文件上传地址
            'uploadScript'          :"<?php echo url('admin/good/upload'); ?>",
            // 文件上传成功返回的数据
            'onUploadComplete' : function(file, data) {
                img+="<img width='200px' src='/upload/good/"+data+"'>";
                arr.push(data);
                $('#mains').html(img);
                $('.images').val(arr.join(','));



            }
        });
    });

</script>