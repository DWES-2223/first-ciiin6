<?php
include_once 'atletes.php';
include_once 'functions.php'
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estadístiques</title>
</head>
<body>
<?php
if (!empty($records)) { ?>
    <h2>Estadístiques:</h2>
    <p>Record més antic: <?=array_keys($records)[vell(array_column($records,'data'))];?></p>
    <p>Club amb més títols: <?=laureado(array_column($records,'club'));?></p>
    <p>Persona amb més records: <?=laureado(array_column($records,'atleta'));?></p>
    <p>Ciutat més propicia: <?=laureado(array_column($records,'lloc'));?></p>
    <p>Mes jove en aconseguir el record:
        <?php $jove = jove(array_column($records,'natalici'),array_column($records,'data'));
        echo array_column($records,'atleta')[$jove[0]] . " - " . $jove[1] . " anys"
        ?>
    </p>
    <h2>Taula récords:</h2>
    <?php
        include_once '270.php';
} else {
    ?>
    <p>No hi ha dades per a mostrar</p>
    <?php
}
?>

</body>
</html>
