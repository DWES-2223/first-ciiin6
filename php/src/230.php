<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array aleatori</title>
</head>
<body>
<?php
$array = [];
for ($i = 0; $i < 50; $i++){
    $num = rand(0, 99);
    $array[] = $num;
}
?>
<ul>
    <?php
    foreach ($array as $numero){?>
        <li><?=$numero?></li>
    <?php }
    ?>
</ul>
</body>
</html>