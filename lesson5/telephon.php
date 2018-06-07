<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Домашнее задание к лекции 2.1</title>
    <meta charset="UTF-8">
    <style type="text/css">
    table {
    border-collapse: collapse; 
    border: 1px solid grey; 
    }  
    th, td {border: 1px solid grey;} 
   .table_head { 
    font-size: 140%; 
    color: Blue;
    text-align: center;
    }
   .table_item {
    color:green;
    text-align: center;
    }
  </style>
</head>

<body>

<?php
$str = file_get_contents('phone.json');
$data = json_decode($str, true);
?>

<table>
   <caption><h1>Записная книжка.</h1></caption>    
    <tr class=table_head>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
        <th>Phone Number</th>
        <th>E-mail</th>
        <th>Gender</th>
    </tr>
    <?php foreach ($data as $item) { ?>
 <tr class=table_item>
    <th><?php echo $item['firstName']; ?></th>
    <th><?php echo $item['lastName']; ?></th>
    <th><?php echo $item['address']; ?></th>
    <th><?php echo $item['phoneNumber']; ?></th>
    <th><?php echo $item['e-mail']; ?></th>
    <th><?php echo $item['gender']; ?></th>
</tr>
    <?php } ?>
</table>
</body>
</html>