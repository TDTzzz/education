<?php
  namespace Admin\Model;
  use Think\Model;
  class Article1Model extends Model{
    protected $_validate=array(
      array('title','require','文章标题不能为空',1),
      array('author','require','文章作者不能为空',1),
      array('resource','require','文章来源不能为空',1),
      array('title','','文章标题已经存在',1,'unique',1),

    );

//     public function _before_delete($option){
//       var_dump($option);
//        $id=$option['where']['id'];
//        $content=$this->field('content')->find($id);
//        var_dump($content);//field可以获得地址
//        $pattern = "/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png|\.jpeg|\.bmp]))[\'|\"].*?[\/]?
 //        preg_match_all($pattern,$content,$match);
//           echo $match[0][0];
//
// preg_match_all ("|<[^>]+>(.*)</[^>]+>|U","<b>example: </b><div align=left>this is a test</div>",$out, PREG_PATTERN_ORDER);
//
// print $out[0][0].", ".$out[0][1]."\n";
// print $out[1][0].", ".$out[1][1]."\n";
//
//        die;
//        //处理
//        @unlink($this->original);
//
//
//    } -->

  }
