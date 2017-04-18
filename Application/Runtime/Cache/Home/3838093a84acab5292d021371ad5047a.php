<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>文华学院教务网</title>
    <link rel="stylesheet" type="text/css" href="/Public/style/bootstrap.css">

    <link rel="stylesheet" href="/Public/style/index.css">
  </head>
  <body>
    ﻿<div class="container-fluid" style="margin-top:-21px;">
    <div class="row" style="background:#9a0102;height:180px;">
        <div class="col-md-offset-1" style="margin-top:40px;" >
            <img src="/Public/img/tree2.png">

        </div>
    </div>
</div>
<div class="container" style="background-color:white;box-shadow: 0px 7px 7px #D3D3D3;border-left:4px solid #b70c0c;border-right:4px solid #b70c0c;">
  <div class="row" style="background-color:;">
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



      <div class="carousel-inner" role="listbox">
        <ol class="carousel-indicators">
          <li style="border-radius:0;width:12px;height:12px;margin:0;border:0px;background-color:white;" data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li style="border-radius:0;width:12px;height:12px;margin:0;border:0px;background-color:white;" data-target="#carousel-example-generic" data-slide-to="1"></li>

        </ol>
        <div class="item active">
          <img src="/Public/img/home1.png">
          <div class="photoaround">
            <div class="aroundtitle">
            文华学院
            </div>
            <div class="content">

                       文华学院始终坚持“育人为本、质量第一”的办学宗旨，奉行“以学生为中心”的办学理念。

            </div>
          </div>
        </div>
        <div class="item">
          <img src="/Public/img/home2.png">
          <div class="photoaround">
            <div class="aroundtitle">
            教务处
            </div>
            <div class="content">
              教务处是学院教学工作的职能部门

            </div>
          </div>
        </div>
      </div>


    </div>
    </div>
  </div>

      <div class="row" style="margin-top:40px;">
        <div class="col-md-3">
          <ul id="commonleft">
            <li class="commonleft-top">机构设置</li>
            <li><img src="/Public/img/common.png"><a href="<?php echo U('Web2/column?type=教学管理与信息办公室');?>">教学管理与信息办公室</a></li>
            <li><img src="/Public/img/common.png"><a href="<?php echo U('Web2/column?type=教改与质量办公室');?>">教改与质量办公事</a></li>
            <li><img src="/Public/img/common.png"><a href="<?php echo U('Web2/column?type=学籍管理办公室');?>">学籍管理办公室</a></li>
            <li><img src="/Public/img/common.png"><a href="<?php echo U('Web2/column?type=实践教学办公室');?>">实践教学办公室</a></li>
          </ul>
        </div>
        <div class="col-md-9">
          <div class="row" style="margin-right:50px;">
            <div style="padding:5px 5px 5px 15px;font-size:18px;border-bottom:4px solid #ff6068;">
              <?php echo ($article["title"]); ?>
              <div class="more" style="float:right;">
                <a href="/index.php/Home/Web2/column">首页</a>
                <a href="/index.php/Home/Web2/column/type/<?php echo ($article["type"]); ?>"><?php echo ($article["type"]); ?></a>
              </div>
            </div>
          </div>
          <div class="row">
            <div style="text-align:center;padding-top:6px;padding-bottom:6px;border-bottom:1px solid #e1e1e1;font-size:15px;color:#368a44;">
              来源  :  <?php echo ($article["resource"]); ?>  作者  :  <?php echo ($article["author"]); ?>  发布时间  :  <?php echo date("Y-m-d",$article['time']);?>
            </div>
          </div>
          <div style="font-size:18px;padding:10px 10px;" class="row">
            <?php echo html_entity_decode($article['content']);?>
          </div>

        </div>
      </div>
    </div>
    <div class="container-fluid">
  <div class="row" style="color:white;border-top:3px solid #b70c0c;margin-top:50px;background:#8C1413 url(/Public/img/footerBg.jpg);">
    <div style="margin-left:180px;margin-right:180px;margin-bottom:50px;margin-top:50px;">
      <h4>联系方式</h4>
      <h4>电话:  027-87583391 027-87583392 027-87583392</h4>
      <h4>邮编：430074<span style="float:right;">文华学院教务处版权所有</span></h4>
      <h4>地址：湖北武汉市东湖高新技术开发区文华园路8号<span style="float:right">Copyright文华学院All Right Reserved 鄂ICP备09023313号</span></h4>
    </div>
  </div>
</div>

    <script src="/Public/style/jquery_002.js"></script>
    <script src="/Public/style/bootstrap.js"></script>
    <script src="/Public/style/jquery.js"></script>
  </body>
</html>