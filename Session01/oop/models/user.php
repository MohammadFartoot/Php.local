<?php
/*define('aaa',12) ;
echo aaa ;*/
/*echo __LINE__ ;*/
require_once "db.php" ;
class User extends db                /*tamame chizaii ke public hastan ro mishe extend kard*/
{
/*const AAA = 1 ;*/
public $table ;

public function __construct ()
{
    $this->table = 'users' ;
}

}
$user1 = new user();
    var_dump($user1);
/*$user1->find(2);*/