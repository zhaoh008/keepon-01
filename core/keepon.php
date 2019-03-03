<?php
/**
 * Created by PhpStorm.
 * User: ZhaoH
 * Date: 2019/2/27
 * Time: 18:20
 */

namespace core;


class keepon
{   public $assign;
    static private $clssMap=array();
    static public function run(){
        $route= new \core\lib\route();
        $ctrlClass=$route->ctrl;
        $action=$route->action;
        $fileClass=APP.'/ctrl/'.$ctrlClass.'.php';
        if(is_file($fileClass)){
            require_once $fileClass;
            $class='\app\ctrl\\'.$ctrlClass;
            $c=new $class();
            $c->$action();
        }else{
            throw new \ErrorException('找不到控制器'.$ctrlClass);
        }

    }
    static public  function load($class){
            if(isset($clssMap[$class])){
                return true;
            }else{
            $class=str_replace("\\",'/',$class);
            $file=ROOT."\\".$class.'.php';
            if (is_file($file)) {
                require_once $file;
                self::$clssMap[$class]=$class;
                return true;
            } else
                return false;
        }
}
public function assign($name,$value){
        $this->assign[$name]=$value;
}
public function dispaly($file){
        $file=APP.'/view/'.$file;
        if(is_file($file)){
            extract($this->assign);
            require_once $file;
        }else{
            throw new \ErrorException('找不到视图文件',$file);
        }
}
}
