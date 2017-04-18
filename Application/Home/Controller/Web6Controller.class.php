<?php
  namespace Home\Controller;
  use Think\Controller;
  class Web6Controller extends Controller{
    public function index(){
      $article=D('article6');
      $count      = $article->count();// 查询满足要求的总记录数
      $Page       = new \Think\Page($count,7);// 实例化分页类 传入总记录数和每页显示的记录数
      $Page->setConfig('prev','上一页');
      $Page->setConfig('next','下一页');
      $show       = $Page->show();// 分页显示输出
      $articles = $article->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
      $this->assign('articles',$articles);// 赋值数据集
      $this->assign('page',$show);// 赋值分页输出
      $this->display(); // 输出模板
    }
    public function column(){
      $article=D('article6')->find(I('id'));

      $this->assign('article',$article);
      $this->display();
    }
  }
