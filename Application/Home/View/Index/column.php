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
            <li class="commonleft-top">{$type}</li>
            <li><img src="__PUBLIC__/img/common.png"><a href="__MODULE__/Web2/index">机构设置</a></li>
            <li><img src="__PUBLIC__/img/common.png"><a href="__MODULE__/Web3/index">办事指南</a></li>
            <li><img src="__PUBLIC__/img/common.png"><a href="__MODULE__/Web4/index">规章制度</a></li>
            <li><img src="__PUBLIC__/img/common.png"><a href="__MODULE__/Web5/index">教务简报</a></li>
            <li><img src="__PUBLIC__/img/common.png"><a href="__MODULE__/Web6/index">专升本</a></li>
            <li><img src="__PUBLIC__/img/common.png"><a href="__MODULE__/Web7/index">下载中心</a></li>
            <li><img src="__PUBLIC__/img/common.png"><a href="__MODULE__/Web8/index">联系我们</a></li>
          </ul>
        </div>
        <div class="col-md-9">
          <div class="row" style="margin-right:50px;border-top:4px solid #b70c0c;">
            <ul style="padding-left:0px;">
              <volist name="articles" id="vo">
                <li style="padding:10px 0 10px 35px;;list-style:none;line-height:45px;font-size:16px;">

                    <div class="row" style="border-bottom:2px solid #e1e1e1;">
                      <div style="display:inline;">
                        <a href="__CONTROLLER__/columnindex/id/{$vo.id}"><img style="width:25px;height:25px;margin-right:20px;" src="__PUBLIC__/img/bookmark">{$vo.title}</a>
                      </div>
                      <span style="float:right;"><?php echo date("y-m-d ",$vo['time']);?></span>
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
