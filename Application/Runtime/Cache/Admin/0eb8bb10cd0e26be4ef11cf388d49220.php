<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>文华学院教务网登录</title>
    <script src="/Public/style/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="/Public/style/bootstrap.css">
    <script src="/Public/style/bootstrap.js"></script>
    <link rel="stylesheet" href="/Public/style/admin.css">
  </head>
  <body>
      <div class="main-box" style="position:absolute;top:50%;left:50%;height:380px;width:640px;padding:20px 25px;background-color:#e72929">
        <header style="width:590px;height:84px;">
          <img src="/Public/img/logo.png">
          <h4 style="display:inline-block;margin-left:25px;color:white;font-weight:bold;">教务处管理系统</h4>
        </header>
        <form action="" method="post" style="margin-top:40px;margin-left:150px;">
          <div class="form-group">
            <span style="color:white;">用户名:</span>
            <input type="text" name="name" placeholder="请输入账号..." style="width:260px;">
          </div>
          <div class="form-group">
            <span style="color:white;margin-right:14px;">密码:</span>
            <input type="password" name="password" placeholder="请输入密码..." style="width:260px;">
          </div>

          <button class="btn btn-danger" type="submit" style="margin-left:110px;margin-top:25px;width:100px;">登录</button>
        </form>
      </div>
  </body>
</html>