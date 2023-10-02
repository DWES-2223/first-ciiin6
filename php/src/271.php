<?php
include_once 'formRecord.html';
include_once 'atletes.php';
include_once 'functions.php';
if(isset($_POST['prova'])){
    $provaAModificar= $_POST['prova'];
    if(isset($records[$provaAModificar])) {
        $records[$provaAModificar] = array("marca" => $_POST['marca'] ,"atleta" => $_POST['atleta'] ,"natalici" => $_POST['natalici'] ,"club" => $_POST['club'] ,"data" => $_POST['data'] ,"lloc" => $_POST['lloc'] );
        include_once '270.php';
    } else {
        ?>
        <p>La prova <?=$provaAModificar?> no existeix en la llista de records oficials de la FEA</p>

    <?php }
}
?>
