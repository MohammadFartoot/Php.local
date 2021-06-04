<?php
$products = ["Coffee" => "Rubosta" ,
    "Shoes" => "Ecco" ,
    "Perfume" => "pacco rabbane" ,
    "PKD" => "1029684"
] ;
echo "<table>" ;
echo "<tr><th>P</th><th>PN</th></tr>" ;
foreach ($products as $name => $product){
    echo "<tr><td>$name</td><td>$product</td></tr>" ;
}
echo "</table>" ;