<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array aleatori</title>
</head>
<body>
<ul>
    <?php
    $array = [];
    $total = 0;
    for ($i = 0; $i < 33; $i++){
        $num = rand(0, 100);
        $total += $num;
        $array[] = $num;
    }
    sort($array);
    foreach ($array as $numero){?>
        <li><?=$numero?></li>
    <?php }
    ?>
    <p>El número menor de l'array és: <?=$array[0]?></p>
    <p>El número major de l'array és: <?=$array[count($array) - 1]?></p>
    <p>La mitjana de l'array és: <?=round($total/count($array),2)?></p>
</ul>
</body>
</html>