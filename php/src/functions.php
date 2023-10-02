<?php

function vell($dates) {

    $dataAntiga = fecha_inglesa($dates[0]);
    $indexData = 0;
    foreach ($dates as $index => $dataString) {
        $data = fecha_inglesa($dataString);
        if ($dataAntiga > $data){
            $dataAntiga = $data;
            $indexData = $index;
        }
    }
    return $indexData;
}

function fecha_inglesa($data) {

    return date('Y/m/d', strtotime($data));
}

function laureado($llista) {

    $countElements= array_count_values($llista);
    arsort($countElements);
    return array_key_first($countElements);
}

function jove ($anysNaixement,$dataRecord) {
    $edatJove = 0;
    for ($i = 0; $i < count($anysNaixement); $i++) {
        $edat = any($dataRecord[$i]) - $anysNaixement[$i];
        if($i == 0 || $edat < $edatJove){
            $edatJove = any($dataRecord[$i]) - $anysNaixement[$i];
            $jove = [$i,$edatJove];
        }
    }
    return $jove;
}

function any($data){
    return date("Y",strtotime($data));
}


