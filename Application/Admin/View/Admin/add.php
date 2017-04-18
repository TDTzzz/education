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
                <li><a href="__CONTROLLER__/index">管理员管理</a></li>
                <li class="active">添加管理员</li>
              </ul>
            </div>
            <div class="page-body">

                <div class="row">
                  <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="widget">
                      <div class="widget-header bordered-bottom bordered-blue">
                          <span class="widget-caption">新增管理员</span>
                      </div>
                      <div class="widget-body">
                        <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">管理员名称</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="name" type="text">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>

                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">密码</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="password" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="username" class="col-sm-2 control-label no-padding-right">管理员权限</label>
                          <div class="col-sm-3">
                            <div class="widget-buttons buttons-bordered">
                              <label>
                                <input type="checkbox" name="is_important" class="checkbox-slider colored-darkorange">
                                <span class="text"></span>
                              </label>
                            </div>

                          </div>
                          <p class="help-block col-sm-4 red">* 默认为非管理员</p>
                      </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">添加</button>
                            </div>
                        </div>
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
  </body>
</html>
