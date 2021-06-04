<?php include "functions 00.php" ;
$background_color= "#fff" ;
if (isset($_POST['submit'])){
/*var_dump($_POST) ;*/
$background_color= select_bg($_POST['background']);
}




?>
<!doctype html >
<html lang="eng" >
<head>
    <meta charset="UTF-8" >
    <meta name="viewport"
          content="width= device-width , user-scalable= no , initial-scale= 1,0"
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>document</title>
</head>
<body style="background: <?php echo $background_color; ?>">
<?php /*if (is_user_logged_in()) */?><!--
    <p>Welcome</p>
<?php /*else */?>
    <a href="#">Login</a>
<?php /*endif */?>

--><?php

/*$a = true ;
switch($a){
    case :
              echo 'TRUE' ;
       break;
    case false:
               echo 'FALSE' ;
           break;
    default:
        echo 'DEFAULT' ;
       break ;
}*/
$a = true ;
switch ($a){
    case true :
        echo 'TRUE' ;
        break ;
    case false:
        echo 'FALSE' ;
        break ;
        casedefault :
        echo 'DEFAULT' ;
        break ;
}
?>
<form action="" method="post">
    <input type="radio" name="background" value="BLUE"> Blue
    <input type="radio" name="background" value="red"> red
    <input type="radio" name="background" value="green"> green
    <p></p>
    <input type="submit" name="Send" value="send">
</body>
</html>

