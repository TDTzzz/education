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
          <ul id="indexleft">
            <li style="border-top:4px solid #b70c0c;font-size:26px;padding-left:20px;color:#8c0808;">服务专区</li>
            <li><img src="/Public/img/img1.png"><a href="/index.php/Home/Index/columnindex?id=27&type=单页">处长信箱</a></li>
            <li><img src="/Public/img/img2.png"><a href="/index.php/Home/Index/columnindex?id=26&type=单页">校历</a></li>
            <li><img src="/Public/img/img3.png"><a href="http://jw1.hustwenhua.net/(huqw3j450matr2yw4zuizo45)/default2.aspx">课表查询</a></li>
            <li><img src="/Public/img/img4.png"><a href="http://wenhua.co.cnki.net/">毕业设计查询系统</a></li>
            <li><img src="/Public/img/like.png"><a href="http://jw1.hustwenhua.net/(ufo3uc45tsyiuqq25nd4hrjf)/default2.aspx">考试安排信息查询</a></li>
            <li><img src="/Public/img/img6.png"><a href="http://www.chsi.com.cn/">学历学位证书查询</a></li>
            <li><img src="/Public/img/img7.png"><a href="http://jw1.hustwenhua.net/(ufo3uc45tsyiuqq25nd4hrjf)/default2.aspx">学生成绩查询</a></li>
            <li><img src="/Public/img/img8.png"><a href="http://jw1.hustwenhua.net/(ufo3uc45tsyiuqq25nd4hrjf)/default2.aspx">学籍异动查询</a></li>
            <li><img src="/Public/img/img9.png"><a href="#">教学信息简报</a></li>
            <li><img src="/Public/img/img10.png"><a href="http://chaxun.neea.edu.cn/examcenter/main.jsp">四级成绩查询</a></li>
            <li><img src="/Public/img/img11.png"><a href="http://zsb.hustwenhua.net/">专升本报名系统</a></li>
            <li><a href="http://jw1.hustwenhua.net/(avpyysuvo0kel4551ywkbs45)/default2.aspx" style="font-size:24px;padding-right:10px;color:black;">教务管理系统</a><img src="/Public/img/img12.png"></li>
          </ul>
        </div>
        <div class="col-md-9">
          <div class="row" style="border-top: 5px solid #b70c0c;margin-right:50px;">
            <div style="padding:5px 5px 5px 15px;font-size:18px;color:#E53C3C;border-bottom:1px solid #e1e1e1;">
              教务通知
              <div class="more">
                <a href="/index.php/Home/Index/column?type=教务通知">>>More</a>
              </div>
            </div>
            <ul id="indexright1" style="list-style:none;padding-left:20px;">
              <?php if(is_array($article1)): $i = 0; $__LIST__ = $article1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><img style="width:25px;height:25px;margin-right:20px;" src="/Public/img/bookmark.png"><a id="index-a" href="/index.php/Home/Index/columnindex/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo['title']); ?></a><span><?php echo date("m-d ",$vo['time']);?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
          </div>
          <div class="row" style="border-top: 5px solid #b70c0c;margin-right:50px;">
            <div style="padding:5px 5px 5px 15px;font-size:18px;color:#E53C3C;border-bottom:1px solid #e1e1e1;">
              专业特色
              <div class="more">
                <a href="/index.php/Home/Index/alldepartment">>>More</a>
              </div>
            </div>
            <ul id="indexright2">
              <?php if(is_array($article2)): $i = 0; $__LIST__ = $article2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><span style="color:#0e7ab9;">[<?php echo ($vo['department']); ?>]</span>
                  <a id="index-a" href="/index.php/Home/Index/departmentindex/id/<?php echo ($vo["id"]); ?>"><?php echo mb_substr(html_entity_decode($vo['title']),0,10,'utf-8');?></a>
                  <span style="float:right;"><?php echo date("m-d ",$vo['time']);?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
          </div>
          <div class="row">
            <div class="col-md-6" style="border-top: 5px solid #b70c0c;padding:5px 5px 5px 15px;font-size:18px;color:#E53C3C;">
              <div style="padding:5px 5px 5px 15px;font-size:18px;color:#E53C3C;border-bottom:1px solid #e1e1e1;">
                质量工程
                <div class="more">
                  <a href="/index.php/Home/Index/column?type=质量工程">>>More</a>
                </div>
              </div>
              <ul id="indexright3">
                <?php if(is_array($article3)): $i = 0; $__LIST__ = $article3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a id="index-a" href="/index.php/Home/Index/columnindex?id=<?php echo ($vo["id"]); ?>&type=质量工程"><?php echo mb_substr(html_entity_decode($vo['title']),0,16,'utf-8');?>..</a><span style="float:right;"><?php echo date("m-d ",$vo['time']);?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
              </ul>
            </div>
            <div class="col-md-6 col-xs-12" style="border-top: 5px solid #b70c0c;padding:5px 5px 5px 15px;font-size:18px;color:#E53C3C;">
              <div style="padding:5px 5px 5px 15px;font-size:18px;color:#E53C3C;border-bottom:1px solid #e1e1e1;">
                教务要闻
                <div class="more">
                  <a href="/index.php/Home/Index/column?type=教务要闻">>>More</a>
                </div>
              </div>
              <ul id="indexright3">
                <?php if(is_array($article4)): $i = 0; $__LIST__ = $article4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a id="index-a" href="/index.php/Home/Index/columnindex?id=<?php echo ($vo["id"]); ?>&type=教务要闻"><?php echo mb_substr(html_entity_decode($vo['title']),0,16,'utf-8');?>..<span style="float:right;"><?php echo date("m-d ",$vo['time']);?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
              </ul>
            </div>
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