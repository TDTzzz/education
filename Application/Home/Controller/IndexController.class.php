<?php
  namespace Home\Controller;
  use Think\Controller;
  class IndexController extends Controller{
    public function index(){
      $article1=D('article1')->where(array('type'=>'教务通知'))->order('id desc')->limit(7)->select();
      $article2=D('article1')->where(array('type'=>'专业特色'))->order('id desc')->limit(10)->select();
      $article3=D('article1')->where(array('type'=>'质量工程'))->order('id desc')->limit(5)->select();
      $article4=D('article1')->where(array('type'=>'教务要闻'))->order('id desc')->limit(5)->select();

      $this->assign('article1',$article1);
      $this->assign('article2',$article2);
      $this->assign('article3',$article3);
      $this->assign('article4',$article4);
      $this->display();
    }
    public function column(){

      $article=D('article1');
      $count      = $article->where(array('type'=>I('type')))->count();// 查询满足要求的总记录数
      $Page       = new \Think\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数
      $Page->setConfig('prev','上一页');
      $Page->setConfig('next','下一页');
      //$Page->setConfig('first','首页');
      //$Page->setConfig('last','共%TOTAL_PAGE%页');
      $show       = $Page->show();// 分页显示输出
      $articles = $article->where(array('type'=>I('type')))->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
      $this->assign('articles',$articles);// 赋值数据集
      $this->assign('page',$show);// 赋值分页输出
      $this->assign('type',I('type'));
      $this->display(); // 输出模板
    }
    public function columnindex(){
      $article=D('article1')->find(I('id'));
      $this->assign('article',$article);
      $this->assign('type',I('type'));
      $this->display();
    }
    public function alldepartment(){
      $articles=D('article1')->where(array('type'=>'专业特色'))->select();

      $this->assign('articles',$articles);
      $this->display();
    }
    public function department(){
      $articles=D('article1')->where(array('department'=>I('department')))->select();
      $this->assign('department',I('department'));
      $this->assign('articles',$articles);
      $this->display();
    }
    public function departmentindex(){
      $article=D('article1')->find(I('id'));
      $this->assign('article',$article);
      $this->display();
    }
  }
