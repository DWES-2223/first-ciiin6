<!DOCTYPE html>
<html lang="es">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    if(!isset($_GET['edat']) || $_GET['edat'] == null){

        echo '<p>Posa la teu edat actual a la variable edat pel QueryString</p>';

    } else {

        $edat=$_GET['edat'];
        $anyActual = date("Y");

        echo "<p>La teua edat és " . $edat . " anys</p>";
        echo "<p>En l'any " . $anyActual + 10 . " tindràs " . $edat + 10 . " anys</p>";
        echo "<p>En l'any " . $anyActual - 10 . " tenies " . $edat - 10 . " anys</p>";
        
        $tempsJubilacio = 67 - $edat;
        $anyJubilacio = $anyActual + $tempsJubilacio;

        echo "<p>El teu any de jubilació és " . $anyJubilacio . "</p>";
    }
    ?>
</body>
</html>