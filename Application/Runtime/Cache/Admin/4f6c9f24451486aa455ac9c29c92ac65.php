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
    <!--引入富文本编辑器-->
    <script src="/Public/ueditor/ueditor.config.js"></script>
    <script src="/Public/ueditor/ueditor.all.min.js"></script>
    <script src="/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
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
                      <a href="/index.php/Admin/Admin/logout" style="text-decoration:none;font-size:20px;margin-right:20px;margin-left:20px;">
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
                <a href="/index.php/Admin/Web5/index" class="menu-dropdown">
                    <i class="menu-icon fa fa-gear"></i>
                    <span class="menu-text">教务简报</span>
                    <i class="menu-expand"></i>
                </a>

            </li>
            <li>
                <a href="/index.php/Admin/Web6/index" class="menu-dropdown">
                    <i class="menu-icon fa fa-gear"></i>
                    <span class="menu-text">专升本</span>
                    <i class="menu-expand"></i>
                </a>

            </li>
            <li>
                <a href="/index.php/Admin/Web7/index" class="menu-dropdown">
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
                <li><a href="/index.php/Admin/Index/index">系统</a></li>
                <li><a href="/index.php/Admin/Webhome/index">网站首页</a></li>
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
                          <input type="hidden" name="id" value="<?php echo ($oldarticle['id']); ?>">
                          <div class="form-group">
                            <label class="col-md-2 control-label no-padding-right">标题</label>
                            <div class="col-md-6">
                              <input name="title" value="<?php echo ($oldarticle['title']); ?>" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-2 control-label no-padding-right">作者</label>
                          <div class="col-md-6">
                            <input name="author" value="<?php echo ($oldarticle['author']); ?>" class="form-control">
                          </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-2 control-label no-padding-right">来源</label>
                        <div class="col-md-6">
                          <input name="resource" value="<?php echo ($oldarticle['resource']); ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-2 control-label no-padding-right">学部</label>
                      <div class="col-md-6">
                        <select name="department" >
                            <option <?php if($oldarticle['department'] == '外语学部'): ?>selected="selected"<?php endif; ?> value="外语学部">外语学部</option>
                            <option <?php if($oldarticle['department'] == '城市建设工程学部'): ?>selected="selected"<?php endif; ?> value="城市建设工程学部">城市建设工程学部</option>
                            <option <?php if($oldarticle['department'] == '经济管理学部'): ?>selected="selected"<?php endif; ?> value="经济管理学部">经济管理学部</option>
                            <option <?php if($oldarticle['department'] == '机械与电气工程学部'): ?>selected="selected"<?php endif; ?> value="机械与电气工程学部">机械与电气工程学部</option>
                            <option <?php if($oldarticle['department'] == '人文社会科学学部'): ?>selected="selected"<?php endif; ?> value="人文社会科学学部">人文社会科学学部</option>
                            <option <?php if($oldarticle['department'] == '信息科学与技术学部'): ?>selected="selected"<?php endif; ?> value="信息科学与技术学部">信息科学与技术学部</option>
                            <option <?php if($oldarticle['department'] == '基础学部'): ?>selected="selected"<?php endif; ?> value="基础学部">基础学部</option>
                            <option <?php if($oldarticle['department'] == '继续教育学部'): ?>selected="selected"<?php endif; ?> value="继续教育学部">继续教育学部</option>
                            <option <?php if($oldarticle['department'] == '计算机科学与技术'): ?>selected="selected"<?php endif; ?> value="计算机科学与技术">计算机科学与技术</option>
                            <option <?php if($oldarticle['department'] == '电气工程及其自动化'): ?>selected="selected"<?php endif; ?> value="电气工程及其自动化">电气工程及其自动化</option>
                       </select>
                      </div>
                  </div>
                    <div class="form-group">
                      <label class="col-md-2 control-label no-padding-right">内容</label>
                      <div class="col-md-6">
                        <textarea name="content" id="content"><?php echo ($oldarticle['content']); ?></textarea>
                      </div>
                  </div>

                    <input type="submit" value="修改文章" style="width:200px;margin-top:20px;margin-left:160px;" class="btn btn-darkorange btn-block">
                  </form>

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
    <script type="text/javascript">
    UE.getEditor('content',{initialFrameWidth:800,initialFrameHeight:400,});
    </script>
  </body>
</html>