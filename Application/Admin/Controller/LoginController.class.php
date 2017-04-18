<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
      $admin=D('admin');
      if(IS_POST){

        $name=I('post.name');
        $password=I('post.password');
        $where=array(
          'name'=>$name,
          'password'=>$password,
        );
        $user=$admin->where($where)->find();

        if($user){
          session('id',$user['id']);
          session('username',$user['name']);
          session('is_important',$user['is_important']);
          
          return $this->success('登陆成功...',U('Index/index'));
        }
        return $this->error('登录失败');
      }
      $this->display();
    }

  }
