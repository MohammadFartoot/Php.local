<?php
include "functions 00.php" ;
$users = get_users();
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
<?php for($i=0; $i<10; $i++): ?>
    <p><?php echo $i; ?></p>
<?php endfor; ?>

<table style="border: 1px solid #ddd ;">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>actions</th>
    </tr>
    <?php if ($users && count($users) > 0) : ?> <!--     in line code ro balatar ham mishe zad ( age nakhaym heading dashte bashim)
--><?php foreach ($users as $user):?>
    <tr>
        <td><?php echo $user['id']?></td>
        <td><?php echo $user['name']?></td>
        <td><?php echo $user['email']?></td>
        <td>
            <a href=" ">Delete</a>
            <a href=" ">Edit</a>
            <a href=" ">Approve</a>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="4">
                <span>هیچ محصولی یافت نشد.</span>
            </td>
        </tr>
    <?php endif; ?>
</table>
</body>
</html>
