<?php
include "functions 00.php" ;
$users = get_users()
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
        table,tr,td,th{
            border: 1px solid #dddddd;
        }
    </style>
</head>
<body>
<!--<style>
    table,tr,td,th{
        border: 1px solid #dddddd;
    }
</style>-->
<?php for ($i=0; $i<10; $i++): ?>
    <p><?php echo $i ;?></p>
<?php endfor; ?>
<!--<style>
    table,tr,td,th{
        border: 1px solid #dddddd;
    }
</style>-->
<table style="border: 1px solid #dddddd ; ">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
<?php  foreach ($users as $user): ?>
        <tr>
           <td><?php echo $user['id'] ;?></td>
           <td><?php echo $user['name'] ;?></td>
           <td><?php echo $user['email'] ;?></td>
           <td>
<a href="">Delete</a>
<a href="">Edit</a>
<a href="">Approve</a>
           </td>
        </tr>
<?php endforeach; ?>
</table>
</body>
</html>
