<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array aleatori</title>
</head>
<body>
<ul>
    <?php
    $arrayLletres = [];

    for ($i = 0; $i < 100; $i++){
        $num = rand(0, 1);
        $array[] = $num == 1 ? 'M' : 'F';
    }

    $quantitatLletres = array('M'=> 0, 'F' => 0);

    foreach ($array as $lletra){
        $lletra == 'M' ? $quantitatLletres['M']++ : $quantitatLletres['F']++;
        ?>
        <li><?=$lletra?></li>

    <?php }
    ?>
    <p>La quantitat de 'M' en l'array és: <?=$quantitatLletres['M']?></p>
    <p>La quantitat de 'F' en l'array és: <?=$quantitatLletres['F']?></p>
</ul>
</body>
</html>