<?php
    $numero = $_GET['txtNumero'];
    echo "<html>
            <h1>Exercicio2Parte2</h1>
            <hr>
            <h5>O nome informado foi: $numero </h5>
            <h5>Tabuada do: $numero </h5
    "; 
    $c='1';
    $r="1";
    while ( $c < 10 ){
        $r=($numero*$c);
        echo "<html><h5>$numero x $c = $r<h5>";
        $c++;
    }       
?>