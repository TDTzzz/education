<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>文华学院教务网</title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/style/bootstrap.css">

    <link rel="stylesheet" href="__PUBLIC__/style/index.css">
  </head>
  <body>
    <include file="Common/header" />
      <div class="row" style="margin-top:40px;">
        <div class="col-md-3">
          <ul id="commonleft">
            <li class="commonleft-top">机构设置</li>
            <li><img src="__PUBLIC__/img/common.png"><a href="<?php echo U('Web2/column?type=教学管理与信息办公室');?>">教学管理与信息办公室</a></li>
            <li><img src="__PUBLIC__/img/common.png"><a href="<?php echo U('Web2/column?type=教改与质量办公室');?>">教改与质量办公事</a></li>
            <li><img src="__PUBLIC__/img/common.png"><a href="<?php echo U('Web2/column?type=学籍管理办公室');?>">学籍管理办公室</a></li>
            <li><img src="__PUBLIC__/img/common.png"><a href="<?php echo U('Web2/column?type=实践教学办公室');?>">实践教学办公室</a></li>
          </ul>
        </div>
        <div class="col-md-9">
          <div class="row" style="margin-right:50px;">
            <div style="padding:5px 5px 5px 15px;font-size:18px;border-bottom:4px solid #ff6068;">
              {$article.title}
              <div class="more" style="float:right;">
                <a href="__CONTROLLER__/column">首页</a>
                <a href="__CONTROLLER__/column/type/{$article.type}">{$article.type}</a>
              </div>
            </div>
          </div>
          <div class="row">
            <div style="text-align:center;padding-top:6px;padding-bottom:6px;border-bottom:1px solid #e1e1e1;font-size:15px;color:#368a44;">
              来源  :  {$article.resource}  作者  :  {$article.author}  发布时间  :  <?php echo date("Y-m-d",$article['time']);?>
            </div>
          </div>
          <div style="font-size:18px;padding:10px 10px;" class="row">
            <?php echo html_entity_decode($article['content']);?>
          </div>

        </div>
      </div>
    </div>
    <include file="Common/footer" />
    <script src="__PUBLIC__/style/jquery_002.js"></script>
    <script src="__PUBLIC__/style/bootstrap.js"></script>
    <script src="__PUBLIC__/style/jquery.js"></script>
  </body>
</html>
