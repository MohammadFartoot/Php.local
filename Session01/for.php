<!--code haye marboot be "for" dar filee "for" va code haye marboot be "foreach" dar filee "foreach"-->
<?php include "functions 00.php" ;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
        }
        table,tr,td,th{
            border: 1px solid #dddddd;
        }
        td{
            padding: 5px 10px;
        }
    </style>
</head>
<body>
<table>
    <?php for ($i = 0; $i <= 10 - 1; $i++): ?>
        <tr>
            <?php for ($j = 0; $j<5; $j++): ?>
            <?php
                $r= mt_rand(0,255);
                $green= mt_rand(0,255);
                $blue= mt_rand(0,255);
                $bg_color= $r.','.$green.','.$blue ; /*dont repeat yourself*/
            ?>

                <td style="background: rgb(<?php echo $bg_color; ?>)" ><?php echo $bg_color;?></td>
            <?php endfor ; ?>
        </tr>
    <?php endfor; ?>
</table>
</body>
</html>