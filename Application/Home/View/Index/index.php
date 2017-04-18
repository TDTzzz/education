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
          <ul id="indexleft">
            <li style="border-top:4px solid #b70c0c;font-size:26px;padding-left:20px;color:#8c0808;">服务专区</li>
            <li><img src="__PUBLIC__/img/img1.png"><a href="__CONTROLLER__/columnindex?id=27&type=单页">处长信箱</a></li>
            <li><img src="__PUBLIC__/img/img2.png"><a href="__CONTROLLER__/columnindex?id=26&type=单页">校历</a></li>
            <li><img src="__PUBLIC__/img/img3.png"><a href="http://jw1.hustwenhua.net/(huqw3j450matr2yw4zuizo45)/default2.aspx">课表查询</a></li>
            <li><img src="__PUBLIC__/img/img4.png"><a href="http://wenhua.co.cnki.net/">毕业设计查询系统</a></li>
            <li><img src="__PUBLIC__/img/like.png"><a href="http://jw1.hustwenhua.net/(ufo3uc45tsyiuqq25nd4hrjf)/default2.aspx">考试安排信息查询</a></li>
            <li><img src="__PUBLIC__/img/img6.png"><a href="http://www.chsi.com.cn/">学历学位证书查询</a></li>
            <li><img src="__PUBLIC__/img/img7.png"><a href="http://jw1.hustwenhua.net/(ufo3uc45tsyiuqq25nd4hrjf)/default2.aspx">学生成绩查询</a></li>
            <li><img src="__PUBLIC__/img/img8.png"><a href="http://jw1.hustwenhua.net/(ufo3uc45tsyiuqq25nd4hrjf)/default2.aspx">学籍异动查询</a></li>
            <li><img src="__PUBLIC__/img/img9.png"><a href="#">教学信息简报</a></li>
            <li><img src="__PUBLIC__/img/img10.png"><a href="http://chaxun.neea.edu.cn/examcenter/main.jsp">四级成绩查询</a></li>
            <li><img src="__PUBLIC__/img/img11.png"><a href="http://zsb.hustwenhua.net/">专升本报名系统</a></li>
            <li><a href="http://jw1.hustwenhua.net/(avpyysuvo0kel4551ywkbs45)/default2.aspx" style="font-size:24px;padding-right:10px;color:black;">教务管理系统</a><img src="__PUBLIC__/img/img12.png"></li>
          </ul>
        </div>
        <div class="col-md-9">
          <div class="row" style="border-top: 5px solid #b70c0c;margin-right:50px;">
            <div style="padding:5px 5px 5px 15px;font-size:18px;color:#E53C3C;border-bottom:1px solid #e1e1e1;">
              教务通知
              <div class="more">
                <a href="__CONTROLLER__/column?type=教务通知">>>More</a>
              </div>
            </div>
            <ul id="indexright1" style="list-style:none;padding-left:20px;">
              <volist name="article1" id="vo">
                <li><img style="width:25px;height:25px;margin-right:20px;" src="__PUBLIC__/img/bookmark.png"><a id="index-a" href="__CONTROLLER__/columnindex/id/{$vo.id}">{$vo['title']}</a><span><?php echo date("m-d ",$vo['time']);?></span></li>
              </volist>
            </ul>
          </div>
          <div class="row" style="border-top: 5px solid #b70c0c;margin-right:50px;">
            <div style="padding:5px 5px 5px 15px;font-size:18px;color:#E53C3C;border-bottom:1px solid #e1e1e1;">
              专业特色
              <div class="more">
                <a href="__CONTROLLER__/alldepartment">>>More</a>
              </div>
            </div>
            <ul id="indexright2">
              <volist name="article2" id="vo">
                <li><span style="color:#0e7ab9;">[{$vo['department']}]</span>
                  <a id="index-a" href="__CONTROLLER__/departmentindex/id/{$vo.id}"><?php echo mb_substr(html_entity_decode($vo['title']),0,10,'utf-8');?></a>
                  <span style="float:right;"><?php echo date("m-d ",$vo['time']);?></span></li>
              </volist>
            </ul>
          </div>
          <div class="row">
            <div class="col-md-6" style="border-top: 5px solid #b70c0c;padding:5px 5px 5px 15px;font-size:18px;color:#E53C3C;">
              <div style="padding:5px 5px 5px 15px;font-size:18px;color:#E53C3C;border-bottom:1px solid #e1e1e1;">
                质量工程
                <div class="more">
                  <a href="__CONTROLLER__/column?type=质量工程">>>More</a>
                </div>
              </div>
              <ul id="indexright3">
                <volist name="article3" id="vo">
                  <li><a id="index-a" href="__CONTROLLER__/columnindex?id={$vo.id}&type=质量工程"><?php echo mb_substr(html_entity_decode($vo['title']),0,16,'utf-8');?>..</a><span style="float:right;"><?php echo date("m-d ",$vo['time']);?></span></li>
                </volist>
              </ul>
            </div>
            <div class="col-md-6 col-xs-12" style="border-top: 5px solid #b70c0c;padding:5px 5px 5px 15px;font-size:18px;color:#E53C3C;">
              <div style="padding:5px 5px 5px 15px;font-size:18px;color:#E53C3C;border-bottom:1px solid #e1e1e1;">
                教务要闻
                <div class="more">
                  <a href="__CONTROLLER__/column?type=教务要闻">>>More</a>
                </div>
              </div>
              <ul id="indexright3">
                <volist name="article4" id="vo">
                  <li><a id="index-a" href="__CONTROLLER__/columnindex?id={$vo.id}&type=教务要闻"><?php echo mb_substr(html_entity_decode($vo['title']),0,16,'utf-8');?>..<span style="float:right;"><?php echo date("m-d ",$vo['time']);?></span></li>
                </volist>
              </ul>
            </div>
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
