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
                <li class="active">管理员管理</li>
              </ul>
            </div>
            <div class="page-body">

                <button type="button" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo U("/Admin/Admin/add");?>'">
                  <i class="fa fa-plus"></i> Add
                </button>
                <div class="row">
                  <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="widget">
                      <div class="widget-body">
                        <div class="flip-scroll">
                          <table class="table table-bordered table-hover">
                            <thead class="">
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">管理员名称</th>
                                    <th class="text-center">操作</th>
                                </tr>
                            </thead>
                            <volist name="users" id="user">
                            <tbody>
                              <tr>
                                <td align="center">{$user.id}</td>
                                <td align="center">{$user.name}</td>
                                <td align="center">
                                  <a href="__CONTROLLER__/edit/id/{$user.id}" class="btn btn-primary btn-sm shiny">
                                      <i class="fa fa-edit"></i> 编辑
                                  </a>
                                  <a href="#" onClick="warning('确实要删除吗', '__CONTROLLER__/del/id/{$user.id}')" class="btn btn-danger btn-sm shiny">
                                      <i class="fa fa-trash-o"></i> 删除
                                  </a>
                                </td>
                              </tr>
                            </tbody>

                            </volist>
                          </table>
                          {$page}
                        </div>
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
