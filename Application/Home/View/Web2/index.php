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
            <ul style="padding-left:0px;">
              <volist name="articles" id="vo">
                <li style="border-top:2px solid red;padding:0 0 20px 55px;;list-style:none;line-height:45px;font-size:16px;border-bottom:1px solid #e1e1e1;">
                    <div class="row" style="border-bottom:2px solid #e1e1e1;">
                      <div style="display:inline;font-size:18px;">
                        {$vo.type}
                      </div>
                      <span class="more"><a href="__CONTROLLER__/column/type/{$vo.type}">>>More</a></span>
                    </div>
                    <div class="row" style="border-bottom:2px solid #e1e1e1;">
                      <div style="display:inline;">
                        <a href="__CONTROLLER__/columnindex/id/{$vo.id}">{$vo.title}</a>
                      </div>
                      <span style="float:right;"><?php echo date("m-d ",$vo['time']);?></span>
                    </div>
                </li>
              </volist>
            </ul>
            <span style="float:right">{$page}</span>
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
