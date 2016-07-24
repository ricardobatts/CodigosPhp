<?php include("cabecalho.php"); ?>

    <?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$numero = $_GET["valor"];

    if($numero > 5){
        echo "Maior que 5!";
    }
    else{
        echo "Menor que 5";
    }
?>
    <?php include("rodape.php"); 
   