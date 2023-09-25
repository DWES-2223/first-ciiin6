<!DOCTYPE html>
<html lang="es">
<?php
$bitllets = [500 => 0, 200 => 0, 100 => 0, 50 => 0, 20 => 0, 10 => 0, 5 => 0, 2 => 0, 1 => 0];

if(!empty ($_GET['quantitat'])){
    $diners = $_GET['quantitat'];
}


?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diners</title>
</head>
<body>
<?php
if(isset ($diners)){
    foreach($bitllets as $bitllet => $quantitat){
        if($diners >= $bitllet){
            $quantitat = intdiv($diners,$bitllet);
            $diners -= $quantitat * $bitllet;
        } else {
            $quantitat = 0;

        }

        $missatge = $quantitat;
        if($bitllet > 2){
            $missatge .= " bitllet de ";
        } else {
            $missatge .= " moneda de ";
        }
        $missatge .= $bitllet;
        echo "<p>$missatge</p>";
    }
} else {
    echo "<p>Posa la quantitat a la variable quantitat pel QueryString</p>";
}

?>
</body>
</html>
