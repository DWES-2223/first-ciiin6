<!DOCTYPE html>
<html lang="es">
<?php
$ample = 10;
$altura = 5;

define('FACTOR', 2);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Càlculs</title>
</head>

<body>
    <p>
        <?php
        $resultat = $ample * $altura * FACTOR;
        echo "àrea del rectangle és: " . $resultat;
        ?>
    </p>
</body>

</html>