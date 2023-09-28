<?php
include_once '245encapçalat.php';
include_once ('functions.php');
$productes = $_POST;
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
include_once '245peu.php';
?>
