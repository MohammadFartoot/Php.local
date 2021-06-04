<?php
require_once __DIR__.DIRECTORY_SEPARATOR. "../interfaces/canExport.php" ;
class jasonExport implements canExport
{

    public function export()
    {
        echo "data format : jason" ;
    }
}