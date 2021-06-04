<?php

require_once "oop/classes/htmlExport.php" ;
require_once "oop/classes/jasonExport.php" ;
require_once "oop/classes/xmlExport.php" ;

$Export = "xml" ;
$handler = $Export.'Export' ;
$handlerObject = new $handler ;
/*$handlerObject-> export() ;*/


class exporthandler
{
    public function DoExport($handler)
    {
        $handler-> export() ;
    }
}


$object = new exporthandler() ;
$object->DoExport($handlerObject);


/*be in raveshe code nevisi migan "strategy pattern"
masalan in ravesh baraye pardakht az dargah haye online estefade mishe bejaye if else
*/


