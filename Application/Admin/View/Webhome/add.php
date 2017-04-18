<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>文华教务网管理员界面</title>
    <!--Basic Styles-->
    <link href="__PUBLIC__/style/bootstrap.css" rel="stylesheet">
    <link href="__PUBLIC__/style/font-awesome.css" rel="stylesheet">
    <link href="__PUBLIC__/style/weather-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="__PUBLIC__/style/admin.css">
    <!--Beyond styles-->
    <link id="beyond-link" href="__PUBLIC__/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="__PUBLIC__/style/demo.css" rel="stylesheet">
    <link href="__PUBLIC__/style/typicons.css" rel="stylesheet">
    <link href="__PUBLIC__/style/animate.css" rel="stylesheet">
    <!--引入富文本编辑器-->
    <script src="__PUBLIC__/ueditor/ueditor.config.js"></script>
    <script src="__PUBLIC__/ueditor/ueditor.all.min.js"></script>
    <script src="__PUBLIC__/ueditor/lang/zh-cn/zh-cn.js"></script>
  </head>
  <body>
    <include file="Common/header" />
    <div class="main-container container-fluid">
      <div class="page-container">
        <include file="Common/left" />
          <div class="page-content">
            <div class="pagebreadcrumbs">
              <ul class="breadcrumb">
                <li><a href="__MODULE__/Index/index">系统</a></li>
                <li><a href="__CONTROLLER__/column1">网站首页</a></li>
                <li class="active">添加文章</li>
              </ul>
            </div>
            <div class="page-body">

                <div class="row">
                  <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="widget">
                      <div class="widget-header bordered-bottom bordered-blue">
                          <span class="widget-caption">添加文章</span>
                      </div>
                      <div class="widget-body">
                        <form class="form-horizontal" action="" method="post">
                          <input type="hidden" name="type" value="{$type}">
                          <input type="hidden" name="id">
                          <div class="form-group">
                            <label class="col-md-2 control-label no-padding-right">标题</label>
                            <div class="col-md-6">
                              <input name="title" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-2 control-label no-padding-right">作者</label>
                          <div class="col-md-6">
                            <input name="author" class="form-control">
                          </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-2 control-label no-padding-right">来源</label>
                        <div class="col-md-6">
                          <input name="resource" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 control-label no-padding-right">内容</label>
                      <div class="col-md-6">
                        <textarea name="content" id="content"></textarea>
                      </div>
                  </div>

                    <input type="submit" value="添加文章" style="width:200px;margin-top:20px;margin-left:160px;" class="btn btn-darkorange btn-block">
                  </form>

                      </div>
                    </div>
                  </div>
                </div>

            </div>
          </div>
      </div>
    </div>
    <script src="__PUBLIC__/style/jquery_002.js"></script>
    <script src="__PUBLIC__/style/bootstrap.js"></script>
    <script src="__PUBLIC__/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="__PUBLIC__/style/beyond.js"></script>
    <script type="text/javascript">
    UE.getEditor('content',{initialFrameWidth:800,initialFrameHeight:400,});
    </script>
  </body>
</html>
