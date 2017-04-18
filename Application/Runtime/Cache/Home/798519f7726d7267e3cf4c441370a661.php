<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>文华学院教务网</title>
    <script src="http://education.com/Public/js/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://education.com/Public/style/bootstrap.css">
    <script src="http://education.com/Public/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://education.com/Public/index.css">
  </head>
  <body>
    <div class="container-fluid">
    <div class="row" style="background-color:#9a0102;height:200px;">
        <div class="col-md-offset-1" style="margin-top:40px;" >
            <img src="http://education.com/Public/img/tree2.png">
        </div>
    </div>
</div>
<div class="container" style="border-left:4px solid #b70c0c;border-right:4px solid #b70c0c;">
  <div class="row" style="background-color:#e1e1e1;">
    <ul class="menu" style="list-style:none;padding:0px;  text-align: center;">
      <li><a href="/index.php/Home/Index/index" style="text-decoration:none;">网站首页</a></li>
      <li><a href="/index.php/Home/Web2/index" style="text-decoration:none;">机构设置</a></li>
      <li><a href="/index.php/Home/Web3/index" style="text-decoration:none;">办事指南</a></li>
      <li><a href="/index.php/Home/Web4/index" style="text-decoration:none;">规章制度</a></li>
      <li><a href="/index.php/Home/Web5/index" style="text-decoration:none;">教务简报</a></li>
      <li><a href="/index.php/Home/Web6/index" style="text-decoration:none;">专升本</a></li>
      <li><a href="/index.php/Home/Web7/index" style="text-decoration:none;">下载中心</a></li>
      <li><a href="/index.php/Home/Web8/index" style="text-decoration:none;">联系我们</a></li>
      <li class="move"></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12" style="padding:0;">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="http://education.com/Public/img/home1.png">
          <div class="carousel-caption"></div>
        </div>
        <div class="item">
          <img src="http://education.com/Public/img/home2.png">
          <div class="carousel-caption">
          </div>
        </div>
        图书馆
      </div>
<!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    </div>
  </div>

      <div class="row" style="margin-top:40px;">
        <div class="col-md-3">
          <ul id="indexleft">
            <li style="border-bottom:3px solid red;">机构设置</li>
            <li><a href="/index.php/Home/Web2/column1">教学管理与信息办公室</a></li>
            <li><a href="/index.php/Home/Web2/column2">教改与质量办公事</a></li>
            <li><a href="/index.php/Home/Web2/column3">学籍管理办公室</a></li>
            <li><a href="/index.php/Home/Web2/column4">实践教学办公室</a></li>
          </ul>
        </div>
        <div class="col-md-9">
          <div class="row" style="margin-right:50px;">
            <ul style="padding-left:0px;">
              <?php if(is_array($articles)): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style="border-top:2px solid red;padding:0 0 20px 55px;;list-style:none;line-height:45px;font-size:16px;border-bottom:1px solid #e1e1e1;">
                    <div class="row" style="border-bottom:2px solid #e1e1e1;">
                      <div style="display:inline;">
                        <?php echo ($vo["type"]); ?>
                      </div>

                    </div>
                    <div class="row" style="border-bottom:2px solid #e1e1e1;">
                      <div style="display:inline;">
                        <a href="/index.php/Home/Web2/column1index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a>
                      </div>
                      <span style="float:right;"><?php echo date("m-d ",$vo['time']);?></span>
                    </div>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
          </div>

        </div>
      </div>
    </div>
    <div class="container-fluid">
  <div class="row" style="border-top:3px solid #b70c0c;margin-top:50px;background-color:#e1e1e1;">
    <div style="margin-left:200px;margin-right:200px;">
      联系方式<br>
      电话<br>邮编<br>地址<br>制作人<br>
    </div>
  </div>
</div>

  </body>
</html>