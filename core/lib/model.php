<?php
/**
 * Created by PhpStorm.
 * User: ZhaoH
 * Date: 2019/3/2
 * Time: 21:56
 */

namespace core\lib;


class model extends \PDO
{
    public function __construct()
    {
        $dsn='mysql:host=localhost;dbname=blog;';
        $username='root';
        $passwd='';
        try{
        parent::__construct($dsn, $username, $passwd);
    }
        catch (\PDOException $e){
            commp($e->getMessage());
        }
    }
}