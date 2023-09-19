<!DOCTYPE html>
<html lang="es">
    <?php
    $bitllets = [500,200,100,50,20,10,5,2,1];

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
        foreach($bitllets as $bitllet){
            if($diners >= $bitllet){
                $quantitatBitllets = intdiv($diners,$bitllet);
                $diners -= $quantitatBitllets * $bitllet;
            } else {
                $quantitatBitllets = 0;
                
            }
    
            $missatge = $quantitatBitllets; 
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