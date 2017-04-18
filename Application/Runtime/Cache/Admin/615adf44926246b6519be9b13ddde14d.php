<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>文华教务网管理员界面</title>
    <!--Basic Styles-->
    <link href="/Public/style/bootstrap.css" rel="stylesheet">
    <link href="/Public/style/font-awesome.css" rel="stylesheet">
    <link href="/Public/style/weather-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="/Public/style/admin.css">
    <!--Beyond styles-->
    <link id="beyond-link" href="/Public/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="/Public/style/demo.css" rel="stylesheet">
    <link href="/Public/style/typicons.css" rel="stylesheet">
    <link href="/Public/style/animate.css" rel="stylesheet">
  </head>
  <body>
    <div class="navbar">
<div class="navbar-inner">
    <div class="navbar-container">
        <!-- Navbar Barnd -->
        <div class="navbar-header pull-left">
            <a href="#" class="navbar-brand">
                <small>
                        文华教务网
                    </small>
            </a>
        </div>
        <!-- /Navbar Barnd -->
        <!-- Sidebar Collapse -->
        <div class="sidebar-collapse" id="sidebar-collapse">
            <i class="collapse-icon fa fa-bars"></i>
        </div>

        <div class="navbar-header pull-right">
            <div class="navbar-account">
                <ul class="account-area">
                    <li>
                        <a class="login-area dropdown-toggle" data-toggle="dropdown">
                            <div class="avatar" title="View your public profile">
                                管理员
                            </div>
                            <section>
                                <h2><span class="profile"><span><?php echo session('username');?></span></span></h2>
                            </section>
                        </a>
                        <!--Login Area Dropdown-->
                        <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">

                            <li class="dropdown-footer">
                                <a href="/index.php/Admin/Admin/logout">
                                        退出登录
                                    </a>
                            </li>
                            <li class="dropdown-footer">
                                <a href="/index.php/Admin/Admin/edit">
                                        修改密码
                                    </a>
                            </li>
                        </ul>

                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
</div>

    <div class="main-container container-fluid">
      <div class="page-container">
        <div class="page-sidebar" id="sidebar">
        <ul class="nav sidebar-menu">

            <li>
                <a href="#" class="menu-dropdown">
                    <i class="menu-icon fa fa-gear"></i>
                    <span class="menu-text">管理员管理</span>
                    <i class="menu-expand"></i>
                </a>
                 <ul class="submenu">
                    <li>
                        <a href="<?php echo U("/Admin/Admin/index");?>">
                            <span class="menu-text">管理员列表</span>
                            <i class="menu-expand"></i>
                        </a>
                     </li>
                </ul>
            </li>
            <li>
                <a href="#" class="menu-dropdown">
                    <i class="menu-icon fa fa-gear"></i>
                    <span class="menu-text">网站首页</span>
                    <i class="menu-expand"></i>
                </a>
                 <ul class="submenu">
                    <li>
                        <a href="<?php echo U("/Admin/Webhome/index");?>">
                            <span class="menu-text">教务通知</span>
                            <i class="menu-expand"></i>
                        </a>
                        <a href="<?php echo U("/Admin/Webhome/column1");?>">
                            <span class="menu-text">专业特色</span>
                            <i class="menu-expand"></i>
                        </a>
                        <a href="<?php echo U("/Admin/Webhome/column2");?>">
                            <span class="menu-text">质量工程</span>
                            <i class="menu-expand"></i>
                        </a>
                        <a href="<?php echo U("/Admin/Webhome/column3");?>">
                            <span class="menu-text">教务要闻</span>
                            <i class="menu-expand"></i>
                        </a>
                     </li>
                </ul>
            </li>
            <li>
                <a href="#" class="menu-dropdown">
                    <i class="menu-icon fa fa-gear"></i>
                    <span class="menu-text">机构设置</span>
                    <i class="menu-expand"></i>
                </a>
                 <ul class="submenu">
                    <li>
                        <a href="<?php echo U("/Admin/Web2/index?type=教学管理与信息办公室");?>">
                            <span class="menu-text">教学管理与信息办公室</span>
                            <i class="menu-expand"></i>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo U("/Admin/Web2/index?type=教改与质量办公室");?>">
                            <span class="menu-text">教改与质量办公室</span>
                            <i class="menu-expand"></i>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo U("/Admin/Web2/index?type=学籍管理办公室");?>">
                            <span class="menu-text">学籍管理办公室</span>
                            <i class="menu-expand"></i>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo U("/Admin/Web2/index?type=实践教学办公室");?>">
                            <span class="menu-text">实践教学办公室</span>
                            <i class="menu-expand"></i>
                        </a>
                     </li>
                </ul>
            </li>
            <li>
                <a href="#" class="menu-dropdown">
                    <i class="menu-icon fa fa-gear"></i>
                    <span class="menu-text">办事指南</span>
                    <i class="menu-expand"></i>
                </a>
                 <ul class="submenu">
                    <li>
                        <a href="">
                            <span class="menu-text"></span>
                            <i class="menu-expand">教改与质量办公室</i>
                        </a>
                     </li>
                     <li>
                         <a href="">
                             <span class="menu-text">教学管理与信息办公室</span>
                             <i class="menu-expand"></i>
                         </a>
                      </li>
                      <li>
                          <a href="">
                              <span class="menu-text">学籍管理办公室</span>
                              <i class="menu-expand"></i>
                          </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="menu-text">实践教学办公室</span>
                               <i class="menu-expand"></i>
                           </a>
                        </li>
                </ul>
            </li>
            <li>
                <a href="#" class="menu-dropdown">
                    <i class="menu-icon fa fa-gear"></i>
                    <span class="menu-text">规章制度</span>
                    <i class="menu-expand"></i>
                </a>
                 <ul class="submenu">
                    <li>
                        <a href="">
                            <span class="menu-text"></span>
                            <i class="menu-expand">教学运行与管理</i>
                        </a>
                     </li>
                     <li>
                         <a href="">
                             <span class="menu-text">教学质量与监控</span>
                             <i class="menu-expand"></i>
                         </a>
                      </li>
                      <li>
                          <a href="">
                              <span class="menu-text">教学改革与研究</span>
                              <i class="menu-expand"></i>
                          </a>
                       </li>
                       <li>
                           <a href="">
                               <span class="menu-text">学籍管理</span>
                               <i class="menu-expand"></i>
                           </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="menu-text">实践教学</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                </ul>
            </li>
            <li>
                <a href="#" class="menu-dropdown">
                    <i class="menu-icon fa fa-gear"></i>
                    <span class="menu-text">教务简报</span>
                    <i class="menu-expand"></i>
                </a>
                 <ul class="submenu">
                    <li>
                        <a href="">
                            <span class="menu-text"></span>
                            <i class="menu-expand"></i>
                        </a>
                     </li>

                </ul>
            </li>
            <li>
                <a href="#" class="menu-dropdown">
                    <i class="menu-icon fa fa-gear"></i>
                    <span class="menu-text">专升本</span>
                    <i class="menu-expand"></i>
                </a>
                 <ul class="submenu">
                    <li>
                        <a href="">
                            <span class="menu-text"></span>
                            <i class="menu-expand"></i>
                        </a>
                     </li>

                </ul>
            </li>
            <li>
                <a href="#" class="menu-dropdown">
                    <i class="menu-icon fa fa-gear"></i>
                    <span class="menu-text">下载中心</span>
                    <i class="menu-expand"></i>
                </a>
                 <ul class="submenu">
                    <li>
                        <a href="">
                            <span class="menu-text"></span>
                            <i class="menu-expand"></i>
                        </a>
                     </li>

                </ul>
            </li>
            <li>
                <a href="#" class="menu-dropdown">
                    <i class="menu-icon fa fa-gear"></i>
                    <span class="menu-text">联系我们</span>
                    <i class="menu-expand"></i>
                </a>
                 <ul class="submenu">
                    <li>
                        <a href="">
                            <span class="menu-text"></span>
                            <i class="menu-expand"></i>
                        </a>
                     </li>

                </ul>
            </li>
        </ul>
        <!-- /Sidebar Menu -->
    </div>

          <div class="page-content">
            <div class="pagebreadcrumbs">
              <ul class="breadcrumb">
                <li><a href="/index.php/Admin/Index/index">系统</a></li>
                <li>网站首页</li>
                <li class="active">机构设置</li>
              </ul>
            </div>
            <div class="page-body">


                <button type="button" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo U("/Admin/Web2/column2add");?>'">
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
                              <?php if(is_array($articles)): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i;?><tr>
                                <td align="center"><?php echo mb_substr($article['title'],0,5);?></td>
                                <td align="center"><?php echo ($article["author"]); ?></td>
                                <td align="center"><?php echo ($article["resource"]); ?></td>
                                <td align="center"><?php echo date("Y-m-d H:i:s",$article['time']);?></td>
                                <td align="center">
                                  <a href="/index.php/Admin/Web2/column2edit/id/<?php echo ($article["id"]); ?>" class="btn btn-primary btn-sm shiny">
                                      <i class="fa fa-edit"></i> 编辑
                                  </a>
                                  <a href="#" onClick="warning('确实要删除吗', '/index.php/Admin/Web2/column2del/id/<?php echo ($article["id"]); ?>')" class="btn btn-danger btn-sm shiny">
                                      <i class="fa fa-trash-o"></i> 删除
                                  </a>
                                </td>
                              </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                          </table>
                          <?php echo ($page); ?>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>


            </div>
          </div>
      </div>
    </div>
    <script src="/Public/style/jquery_002.js"></script>
    <script src="/Public/style/bootstrap.js"></script>
    <script src="/Public/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="/Public/style/beyond.js"></script>
  </body>
</html>