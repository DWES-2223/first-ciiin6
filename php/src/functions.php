<?php
 function esParell(int $a) : bool {
     return $a%2 === 0;
 }

 function arrayAleatori(int $tam, int $min, int $max) : array {

     $arrayAleatori = [];
     for ($i = 0; $i < $tam; $i++){
         $num = rand($min,$max);
         $arrayAleatori[] = $num;
     }
     return $arrayAleatori;
 }

 function countParells(array &$conjunt): int {
     $totalParells = 0;
     foreach ($conjunt as $element){
         if($element%2 == 0){
             $totalParells++;
         }
     }
     return $totalParells;
 }

function major(): int {
    if (func_num_args() == 0) {
        return 0;
    } else {
        $num = 0;
        for ($i = 0; $i < func_num_args(); $i++) {
            if(func_get_arg($i) > $num){
                $num = func_get_arg($i);
            }
        }
        return $num;
    }
}

function concatenar(...$paraules) : string {
     $cadena = "";
     foreach ($paraules as $paraula){
         $cadena .= $paraula . " ";
     }
     return  trim($cadena);
     //return implode(' ', $paraules);
}

function digits(int $num): int {
     $digit = strlen((string)$num);
     return ($num > 0)? $digit : $digit-1 ;
}

function digitsN(int $num, int $post): int {
    return (int)substr((string) $num,$post-1,1);
}

function llevaDarrere(int $num, int $cant): int {
     $posicio = digits($num) - $cant;
    return (int)substr((string) $num,0,$posicio);
}

function llevaDavant(int $num, int $cant): int {
    $posicio = digits($num) - $cant;
    return (int)substr((string) $num,-$posicio,$posicio);
}

function peseta2euros(int $num,$cot = 166.3860): float {
    return $num / $cot;
}

function euro2pesetes(int $num,$cot = 166.3860): float {
    return $num * $cot;
}

