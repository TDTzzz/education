<?php
  namespace Admin\Model;
  use Think\Model;
  class AdminModel extends Model{
    protected $_validate=array(
      array('name','require','管理员名称不能为空',1),
      array('password','require','管理员密码不能为空',1),
      array('name','','管理员名称已经存在',1,'unique',1),
      array('name','','管理员名称已经存在',1,'unique',2),
    );
    public function _before_insert(&$data,$option){
      if($data['is_important']){
            $data['is_important']=1;
        }else{
            $data['is_important']=0;
        }
    }
    public function _before_update(&$data,$option){
      if($data['is_important']){
            $data['is_important']=1;
        }else{
            $data['is_important']=0;
        }
    }

  }
