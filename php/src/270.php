<?php
include_once 'atletes.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Taula atletes</title>
</head>
<body>
<?php
if (!empty($records)) { ?>
    <table>
        <!-- Capçalera de la taula -->
        <tr><th>Prova</th>
            <th>Marca</th>
            <th>Atleta</th>
            <th>Natalici</th>
            <th>Club</th>
            <th>Data</th>
            <th>Lloc</th>
        </tr>
        <!-- Cos de la taula -->
        <?php foreach ($records as $prova => $record) {
            include '270a.php';
        }
        ?>
    </table>
    <?php
} else {
    ?>
    <p>No hi ha dades per a mostrar</p>
    <?php
}
?>
</body>
</html>