<?php
/**
 * Created by PhpStorm.
 * User: ZhaoH
 * Date: 2019/2/27
 * Time: 16:43
 */
//入口文件
//定义常量
//加载函数库
//类自动加载
//启动框架
define('ROOT',realpath('./'));
define('CORE',__DIR__.'/core');//核心框架目录常量
define('APP',__DIR__.'/app');//应用目录
define('DEBUG',true);//调试模式常量
if(DEBUG){
   ini_set('display_errors','On');
}else
    ini_set('display_errors','Off');
require_once   ROOT.'/common/commfunction.php';//引入公共函数库
require_once   ROOT.'/core/keepon.php';//加载框架核心类库
spl_autoload_register('\core\keepon::load');
//$a=new \core\keepon\ok();
\core\keepon::run();
