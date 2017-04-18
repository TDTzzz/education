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
                <li>网站首页</li>
                <li class="active">{$type}</li>
              </ul>
            </div>
            <div class="page-body">


                <button type="button" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo U("/Admin/Webhome/add?type=$type");?>'">
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
                                    <th class="text-center">标题</th>
                                    <th class="text-center">作者</th>
                                    <th class="text-center">来源</th>

                                    <th class="text-center">发布时间</th>
                                    <th class="text-center">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                              <volist name="articles" id="article">
                              <tr>
                                <td align="center"><?php echo mb_substr(html_entity_decode($article['title']),0,6,'utf-8');?></td>
                                <td align="center">{$article.author}</td>
                                <td align="center">{$article.resource}</td>
                                <td align="center"><?php echo date("Y-m-d H:i:s",$article['time']);?></td>
                                <td align="center">
                                  <a href="__CONTROLLER__/edit/id/{$article.id}" class="btn btn-primary btn-sm shiny">
                                      <i class="fa fa-edit"></i> 编辑
                                  </a>
                                  <a href="#" onClick="warning('确实要删除吗', '__CONTROLLER__/del/id/{$article.id}')" class="btn btn-danger btn-sm shiny">
                                      <i class="fa fa-trash-o"></i> 删除
                                  </a>
                                </td>
                              </tr>
                              </volist>
                            </tbody>
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
