<?php
/**
 * Created by PhpStorm.
 * User: ZhaoH
 * Date: 2019/3/2
 * Time: 16:41
 */
namespace app\ctrl;
class index extends \core\keepon
{
 public function index(){
     $ttt='nihao';
    $this->assign('data',$ttt);
    $this->dispaly('/index/index.html');
 }
 public function test(){
     echo 'this is test';
 }
}