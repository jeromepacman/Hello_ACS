<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Values</title>
</head>

<body>

<?php
$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);


$query = $pdo->query("SELECT * FROM user");
$output = $query->fetchAll();


/*
while ($line = $query -> fetchAll()) {

    echo ($line[0]['user_name'].''.$line[1]['user_last_name'].''.$line[2]['email'].''.$line[3]['password'].''.$line[4]['gender']);
}
*/
?>
<table class="table">
<tr>
    <th class="cel">name</th>
    <th class="cel">last name</th>
    <th class="cel">email</th>
    <th class="cel">password</th>
    <th class="cel">gender</th>
</tr>

<?php foreach ($output as $item): ?>
 
  <tr>
    <td class="cel"><?php echo $item["user_name"] ?></td>
    <td class="cel"><?php echo $item["user_last_name"] ?></td>
    <td class="cel"><?php echo $item["email"] ?></td>
    <td class="cel"><?php echo $item["password"] ?></td>
    <td class="cel"><?php echo $item["gender"] ?></td>
 </tr>

<?php endforeach ?>
</table>

</body>
</html>