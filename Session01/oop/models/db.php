<?php

class db
{

    public $table;

    public static $prefix ;

    const HOST = '128.0.0.1' ;

    public function all()
    {

        return "SELECT * FROM {$this->table}";      /*this be objecti ke alan dare bahash kar mishe eshare mikone*/
    }

    public function find($id, $columns = null)
    {
        /*'a,b,c,d'*/
        $columns = !is_null($columns) ? implode(",", $columns) : '*';
        return "SELECT {$columns} FROM {$this->table} WHERE id = {$id}";
    }


    public function delete($id)
    {
        return "DELETE FROM {$this->table} WHERE id = {$id}";
    }


    private function sort()
    {
        static::HOST ;
    }

    public static function export()
    {

    }
}

$connection = new db();
$connection->table = "user";
$connection->find(56, array('id','name'));

db::export();