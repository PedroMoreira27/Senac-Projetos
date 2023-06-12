<?php
    session_start();
    $opcao = $_GET['txtOpc'];
    $numero = $_SESSION['numero'];
    $nome = $_SESSION['nome'];
    if($opcao == 1){
        echo "<html>
            <h1>Apenas o resultado</h1>
            <hr>
            <h5>O nome informado foi: $nome </h5>
            <h5>Tabuada do: $numero </h5
        "; 
        $c='1';
        $r="1";
        while ( $c < 10 ){
        $r=($numero*$c);
        echo "<html><h5>$r<h5>";
        $c++;
    }   
    }else if($opcao == 2){ 
        echo "<html>
            <h1>Apenas o resultado</h1>
            <hr>
            <h5>O nome informado foi: $nome </h5>
            <h5>Tabuada do: $numero </h5
        "; 
        $c='1';
        $r="1";
        while ( $c < 10 ){
            $r=($numero*$c);
            echo "<html><h5>$numero x $c = $r<h5>";
            $c++;
        }  
    }else {
        echo "<html><h5>Insira uma opção valida!<h5>";
    }
?>
