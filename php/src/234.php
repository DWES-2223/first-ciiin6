<!DOCTYPE html>
<html lang="en">
<?php
$persones = ['Pepito' => 152 ,'Jordi' => 187 ,'Sandra' => 175 , 'Héctor' => 198 ,'Talia' => 168 ];
?>
<head>
    <meta charset="UTF-8">
    <title>Persones</title>
</head>
<body>
<table border="2">
    <tr>
        <td>Nom</td>
        <td>Alçada (m)</td>
    </tr>

    <?php
    foreach ($persones as $nom => $alt){?>
    <tr>

            <td><?=$nom?></td>
            <td><?=$alt/100?></td>
    </tr>
    <?php
    }
    ?>

    <tr>
        <td>Mitjana alçada</td>
        <td><?=(array_sum($persones)/100)/count($persones) ?></td>
    </tr>
</table>
</body>
</html>