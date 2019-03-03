<?php
/**
 * Created by PhpStorm.
 * User: ZhaoH
 * Date: 2019/2/27
 * Time: 17:57
 */
function commp($var){
    if (is_bool($var))
    {
        var_dump($var);
    }
    else if (is_null($var)){
        var_dump(NULL);
    }else{
        echo print_r($var,true)."\n";
    }
}
