<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulari</title>
</head>
<body>
    <h1>Formulari pedido supermecat</h1>
    <?php
        if (isset($_GET['quantitat'])){ ?>
            <form method="post" action="244b.php">
                <?php
                for($i = 1; $i <= $_GET['quantitat']; $i++){
                ?>
                    Nom Producte:
                    <input type="text" name="nomProducte<?=$i?>">
                    Preu:
                    <input type="number" name="preuProducte<?=$i?>"><br>
                <?php
                }
                ?>
                <br><button type="submit">Enviar</button>
            </form>
    <?php
        }
    ?>
</body>
</html>
