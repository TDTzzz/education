<?php
  namespace Admin\Controller;
  use Think\Controller;
  class Web7Controller extends CommonController{
    public function index(){
      $article=D('article7');
      $count      = $article->where(array('type'=>I('type')))->count();// 查询满足要求的总记录数
      $Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数
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

    public function add(){

      $this->assign('type',I('type'));
      $article=D('article7');
      if(IS_POST){
        if($article->create()){
          $insert=array(
            'title'=>I('post.title'),
            'author'=>I('post.author'),
            'resource'=>I('post.resource'),
            'type'=>I('post.type'),
            'content'=>I('post.content'),

            'time'=>time(),
          );
          if($article->add($insert)){
            $this->success('添加文章成功',U('/Admin/Web7/index',array('type'=>I('post.type'))));
          }else{
            $this->error('添加文章失败');
          }
        }else{
          $this->error($article->getError());
        }
        return;
      }
      $this->display();
    }
    public function edit(){
      $article=D('article7');
      $oldarticle=$article->find(I('get.id'));
      $type=$oldarticle['type'];
      if(IS_POST){
        if($article->create()){

          if($article->save()){
            $this->success('修改文章成功',U('/Admin/Web7/index',array('type'=>$type)));
          }else{
            $this->error('修改文章失败');
          }
        }else{
          $this->error($article->getError());
        }
        return;
      }
      $this->assign('oldarticle',$oldarticle);
      $this->display();
    }
    public function del(){
      $article=D('article7');
      if($article->delete(I('id'))){
        $this->success('删除成功');
      }else{
        $this->error('删除失败');
      }
    }
  }
