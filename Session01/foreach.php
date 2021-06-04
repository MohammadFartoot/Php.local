<?php
$users = ["A" => "b", "C" => "d", "E" => "f"] ;
echo "<table>" ;
echo "<tr><th>Capital</th><th>Small</th></tr>" ;
foreach ($users as $name => $user){
    echo "<tr><td>$name</td><td>$user</td></tr>" ;


}
echo "</table>" ;