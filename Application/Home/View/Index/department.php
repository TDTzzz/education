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
            <li class="commonleft-top">专业特色</li>
            <li><img src="__PUBLIC__/img/common.png"><a href="<?php echo U('Index/department?department=外语学部');?>">外语学部</a></li>
            <li><img src="__PUBLIC__/img/common.png"><a href="<?php echo U('Index/department?department=城市建设工程学部');?>">城市建设工程学部</a></li>
            <li><img src="__PUBLIC__/img/common.png"><a href="<?php echo U('Index/department?department=经济管理学部');?>">经济管理学部</a></li>
            <li><img src="__PUBLIC__/img/common.png"><a href="<?php echo U('Index/department?department=机械与电气工程学部');?>">机械与电气工程学部</a></li>
            <li><img src="__PUBLIC__/img/common.png"><a href="<?php echo U('Index/department?department=人文社会科学学部');?>">人文社会科学学部</a></li>
            <li><img src="__PUBLIC__/img/common.png"><a href="<?php echo U('Index/department?department=信息科学与技术');?>">信息科学与技术</a></li>
            <li><img src="__PUBLIC__/img/common.png"><a href="<?php echo U('Index/department?department=基础学部');?>">基础学部</a></li>
            <li><img src="__PUBLIC__/img/common.png"><a href="<?php echo U('Index/department?department=继续教育学部');?>">继续教育学部</a></li>
            <li><img src="__PUBLIC__/img/common.png"><a href="<?php echo U('Index/department?department=计算机科学与技术学部');?>">计算机科学与技术学部</a></li>
            <li><img src="__PUBLIC__/img/common.png"><a href="<?php echo U('Index/department?department=电气工程及其自动化');?>">电气工程及其自动化</a></li>
          </ul>
        </div>
        <div class="col-md-9">
          <div class="row">
            <div style="margin:10px 25px 5px 15px;border-bottom:4px solid #ff000d;">
              <h4 style="margin-left:20px;">{$department}
                <span style="float:right;font-size:16px;"><a href="#">{$department}</a></span>
                <span style="float:right;font-size:16px;"><a href="__CONTROLLER__/alldepartment">专业特色/</a></span>
                <span style="float:right;font-size:16px;"><a href="__CONTROLLER__/index"></a>首页/</span>
              </h4>
            </div>
          </div>
          <div class="row" style="margin-right:50px;">
            <ul style="padding-left:0px;">
              <volist name="articles" id="vo">
                <li style="padding:10px 0 10px 35px;;list-style:none;line-height:45px;font-size:16px;">

                    <div class="row" style="border-bottom:2px solid #e1e1e1;">
                      <div style="display:inline;">
                        <a href="__CONTROLLER__/columnindex/id/{$vo.id}"><img style="width:25px;height:25px;margin-right:20px;" src="__PUBLIC__/img/bookmark.png">{$vo.title}</a>
                      </div>
                      <span style="float:right;"><?php echo date("y-m-d ",$vo['time']);?></span>
                    </div>
                </li>
              </volist>
            </ul>
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
