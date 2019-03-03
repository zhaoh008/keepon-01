<?php
/**
 * Created by PhpStorm.
 * User: ZhaoH
 * Date: 2019/2/28
 * Time: 23:21
 */

namespace core\lib;


class route
{
    public $path=null;
    public $ctrl;
    public $action;
    public function __construct()
    {
        //1.隐藏index.php
        //2.获取url参数
        //3.返回对应控制器和方法
     $this->path=($_SERVER['REQUEST_URI']);
     if (isset($this->path)&&$this->path != '/'){
           $patharr=explode('/',trim($this->path,'/'));
           if (isset($patharr[0])){
               $this->ctrl=$patharr[0];
           }if (isset($patharr[1])){
               $this->action=$patharr[1];
           }else{
             $this->ctrl='index';
             $this->action='index';
         }
     }else
         {
            $this->ctrl='index';
            $this->action='index';
        }
    }
}