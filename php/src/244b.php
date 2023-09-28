<?php include_once ('functions.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $productes = $_POST?>
    <meta charset="UTF-8">
    <title>Pedido</title>
</head>
<body>
<h1>Pedido supermecat</h1>
<?php
if (!empty($productes)){ ?>
    <table border="1">
        <tr>
            <td>Nom Producte</td>
            <td>Preu euros</td>
            <td>Preu pesetes</td>
        </tr>
        <?php
        for($i = 1; $i <= count($productes) / 2; $i++){
            ?>
            <tr>
            <td><?=$productes['nomProducte'.$i]?></td>
            <td><?=$productes['preuProducte'.$i]?></td>
            <td><?=round(euro2pesetes((int)$productes['preuProducte'.$i]),2)?></td>
            </tr>
            <?php
        }
        ?>

    </table>
    <?php
}
?>
</body>
</html>

