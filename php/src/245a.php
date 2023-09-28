<?php include_once '245encapçalat.php';
        if (isset($_GET['quantitat'])){ ?>
            <form method="post" action="245b.php">
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
include_once '245peu.php';
    ?>