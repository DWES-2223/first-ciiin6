<?php
include_once ('functions.php');
echo esParell(80)? "Sí" : "No";
echo " és parell";
$arrayAleatori = arrayAleatori(10,50,75);
var_dump($arrayAleatori);

echo "L'array conté " . countParells($arrayAleatori) . " números parells <br>";
echo "El número major és: " . major(4,8,45,0,-9) . "<br>";
echo concatenar("hola","que", "tal","?") . "<br>";
echo "El número 4587152 té " . digits(4587152) . " digits <br>";
echo digitsN(4587152,5) . "<br>";
echo llevaDarrere(4587152,2) . "<br>";
echo llevaDavant(4587152,2);