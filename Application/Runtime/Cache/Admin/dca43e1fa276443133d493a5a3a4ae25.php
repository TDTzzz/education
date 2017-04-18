<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>文华教务网管理员界面</title>
    <!--Basic Styles-->
    <link href="/education/Public/style/bootstrap.css" rel="stylesheet">
    <link href="/education/Public/style/font-awesome.css" rel="stylesheet">
    <link href="/education/Public/style/weather-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="/education/Public/style/admin.css">
    <!--Beyond styles-->
    <link id="beyond-link" href="/education/Public/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="/education/Public/style/demo.css" rel="stylesheet">
    <link href="/education/Public/style/typicons.css" rel="stylesheet">
    <link href="/education/Public/style/animate.css" rel="stylesheet">
  </head>
  <body>
    ﻿<div class="navbar" style="margin-top:-22px;">
<div class="navbar-inner">
    <div class="navbar-container">
        <!-- Navbar Barnd -->
        <div class="navbar-header pull-left">
            <a href="http://58.49.5.110/education/" class="navbar-brand">
                <small style="line-height:37px;font-size:25px;margin-left:20px;">
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
                  <h4 style="margin-top:10px;">
                  
                      管理员:  <span style="color:#fff;"><?php echo session('username');?></span>
                      <a href="/education/index.php/Admin/Admin/logout" style="text-decoration:none;font-size:20px;margin-right:20px;margin-left:20px;">
                          退出登录
                      </a>
                  </h4>
            </div>
        </div>

    </div>
</div>
</div>

    <div class="main-container container-fluid">
      <div class="page-container">
        ﻿<div class="page-sidebar" id="sidebar">
        <ul class="nav sidebar-menu">

            <li style="<?php if(session('is_important') == 0): ?>display:none<?php endif; ?>">

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
                        <a href="<?php echo U("/Admin/Webhome/index?type=教务通知");?>">
                            <span class="menu-text">教务通知</span>
                            <i class="menu-expand"></i>
                        </a>
                        <a href="<?php echo U("/Admin/Webhome/department?type=专业特色");?>">
                            <span class="menu-text">专业特色</span>
                            <i class="menu-expand"></i>
                        </a>

                        <a href="<?php echo U("/Admin/Webhome/index?type=质量工程");?>">
                            <span class="menu-text">质量工程</span>
                            <i class="menu-expand"></i>
                        </a>
                        <a href="<?php echo U("/Admin/Webhome/index?type=教务要闻");?>">
                            <span class="menu-text">教务要闻</span>
                            <i class="menu-expand"></i>
                        </a>
                        <a href="<?php echo U("/Admin/Webhome/index?type=单页");?>">
                            <span class="menu-text">单页</span>
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
                       <a href="<?php echo U("/Admin/Web3/index?type=教改与质量办公室");?>">
                           <span class="menu-text">教改与质量办公室</span>
                           <i class="menu-expand"></i>
                       </a>
                    </li>
                     <li>
                         <a href="<?php echo U("/Admin/Web3/index?type=教学管理与信息办公室");?>">
                             <span class="menu-text">教学管理与信息办公室</span>
                             <i class="menu-expand"></i>
                         </a>
                      </li>
                      <li>
                          <a href="<?php echo U("/Admin/Web3/index?type=学籍管理办公室");?>">
                              <span class="menu-text">学籍管理办公室</span>
                              <i class="menu-expand"></i>
                          </a>
                       </li>
                       <li>
                           <a href="<?php echo U("/Admin/Web3/index?type=实践教学办公室");?>">
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
                       <a href="<?php echo U("/Admin/Web4/index?type=教学运行与管理");?>">
                           <span class="menu-text">教学运行与管理</span>
                           <i class="menu-expand"></i>
                       </a>
                    </li>
                     <li>
                         <a href="<?php echo U("/Admin/Web4/index?type=教学质量与监控");?>">
                             <span class="menu-text">教学质量与监控</span>
                             <i class="menu-expand"></i>
                         </a>
                      </li>
                      <li>
                          <a href="<?php echo U("/Admin/Web4/index?type=教学改革与研究");?>">
                              <span class="menu-text">教学改革与研究</span>
                              <i class="menu-expand"></i>
                          </a>
                       </li>
                       <li>
                           <a href="<?php echo U("/Admin/Web4/index?type=学籍管理");?>">
                               <span class="menu-text">学籍管理</span>
                               <i class="menu-expand"></i>
                           </a>
                        </li>
                        <li>
                            <a href="<?php echo U("/Admin/Web4/index?type=实践教学");?>">
                                <span class="menu-text">实践教学</span>
                                <i class="menu-expand"></i>
                            </a>
                         </li>
                </ul>
            </li>
            <li>
                <a href="/education/index.php/Admin/Web5/index" class="menu-dropdown">
                    <i class="menu-icon fa fa-gear"></i>
                    <span class="menu-text">教务简报</span>
                    <i class="menu-expand"></i>
                </a>

            </li>
            <li>
                <a href="/education/index.php/Admin/Web6/index" class="menu-dropdown">
                    <i class="menu-icon fa fa-gear"></i>
                    <span class="menu-text">专升本</span>
                    <i class="menu-expand"></i>
                </a>

            </li>
            <li>
                <a href="/education/index.php/Admin/Web7/index" class="menu-dropdown">
                    <i class="menu-icon fa fa-gear"></i>
                    <span class="menu-text">下载中心</span>
                    <i class="menu-expand"></i>
                </a>
                <ul class="submenu">
                  <li>
                      <a href="<?php echo U("/Admin/Web7/index?type=教学管理与信息办公室");?>">
                          <span class="menu-text">教学管理与信息办公室</span>
                          <i class="menu-expand"></i>
                      </a>
                   </li>
                    <li>
                        <a href="<?php echo U("/Admin/Web7/index?type=学籍管理办公室");?>">
                            <span class="menu-text">学籍管理办公室</span>
                            <i class="menu-expand"></i>
                        </a>
                     </li>
                     <li>
                         <a href="<?php echo U("/Admin/Web7/index?type=教学改革与质量办公室");?>">
                             <span class="menu-text">教学改革与质量办公室</span>
                             <i class="menu-expand"></i>
                         </a>
                      </li>
                      <li>
                          <a href="<?php echo U("/Admin/Web7/index?type=实践教学办公室");?>">
                              <span class="menu-text">实践教学办公室</span>
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
                <li><a href="/education/index.php/Admin/Index/index">系统</a></li>
                <li>办事指南</li>
                <li class="active"><?php echo ($type); ?></li>
              </ul>
            </div>
            <div class="page-body">


                <button type="button" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo U("/Admin/Web3/add?type=$type");?>'">
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
                                <td align="center"><?php echo mb_substr(html_entity_decode($article['title']),0,6,'utf-8');?></td>
                                <td align="center"><?php echo ($article["author"]); ?></td>
                                <td align="center"><?php echo ($article["resource"]); ?></td>
                                <td align="center"><?php echo date("Y-m-d H:i:s",$article['time']);?></td>
                                <td align="center">
                                  <a href="/education/index.php/Admin/Web3/edit/id/<?php echo ($article["id"]); ?>" class="btn btn-primary btn-sm shiny">
                                      <i class="fa fa-edit"></i> 编辑
                                  </a>
                                  <a href="#" onClick="warning('确实要删除吗', '/education/index.php/Admin/Web3/del/id/<?php echo ($article["id"]); ?>')" class="btn btn-danger btn-sm shiny">
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
    <script src="/education/Public/style/jquery_002.js"></script>
    <script src="/education/Public/style/bootstrap.js"></script>
    <script src="/education/Public/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="/education/Public/style/beyond.js"></script>
  </body>
</html>