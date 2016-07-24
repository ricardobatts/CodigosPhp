<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function somaArray($array){
    $soma = 0;
    for ($i=0; $i < sizeof($array); $i++){
        $soma = $soma + $array[$i];
    }
    return $soma;
}

$numeros = array(1,1,1,1,1,1,1,1,1,1);

$soma = somaArray($numeros);

echo $soma;