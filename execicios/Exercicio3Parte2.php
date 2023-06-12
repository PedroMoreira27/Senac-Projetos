<?php
    $numero1 = $_GET['txtNumero1'];
    $numero2 = $_GET['txtNumero2'];
    echo "<html>
            <h1>Exercicio3Parte2</h1>
            <hr>
            <h5>O numeros entre: $numero1 </h5
            <h5>e: $numero2 </h5>
            <h5>São:</h5>
            
    "; 
    $numero2--;
    while ( $numero1 < $numero2){
        $numero1++;
        echo "<html>$numero1<br>";
    }       
?>