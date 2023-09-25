<!DOCTYPE html>
<html lang="en">
<?php
    $persones = [['nom' => 'Pepito' , 'altura' => 152 , 'email' => 'pepito@gmail.com'],
        ['nom' => 'Jordi' , 'altura' => 187 , 'email' => 'jordi@gmail.com'],
        ['nom' => 'Sandra' , 'altura' => 175 , 'email' => 'sandra@gmail.com'],
        ['nom' => 'Héctor' , 'altura' => 198 , 'email' => 'hector@gmail.com'],
        ['nom' => 'Talia' , 'altura' => 168 , 'email' => 'talia@gmail.com']];
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
        <td>Email</td>
    </tr>

    <?php
    foreach ($persones as $persona) {?>
        <tr>

            <td><?=$persona['nom']?></td>
            <td><?=$persona['altura']/100?></td>
            <td><?=$persona['email']?></td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>