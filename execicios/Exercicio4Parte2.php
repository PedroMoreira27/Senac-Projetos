<?php
    $nome = $_GET['txtNome'];
    $peso = $_GET['txtPeso'];
    $altura = $_GET['txtAltura'];
    echo "<html>
            <h1>Pagina para receber os dados informados</h1>
            <hr>
            <h5>O nome informado foi: $nome </h5>
            <h5>O peso informado foi: $peso </h5>
            <h5>A altura informada foi: $altura </h5>
    ";        
    $IMC=0;
    $IMC = $peso / ($altura * $altura);
    if ($IMC < 16){
    echo "<html><h5>Seu IMC é de $IMC  Magreza Grau III<h5>";
    }else if ($IMC < 16.9){
        echo "<html><h5>Seu IMC é de $IMC Magreza Grau II<h5>";
    }else if ($IMC < 18.4){
        echo "<html><h5>Seu IMC é de $IMC Magreza Grau I<h5>";
    }else if ($IMC < 24.9){
        echo "<html><h5>Seu IMC é de $IMC Adequado<h5>";
    }else if ($IMC < 29.9){
        echo "<html><h5>Seu IMC é de $IMC Pré-Obeso<h5>";
    }else if ($IMC < 34.9){
        echo "<html><h5>Seu IMC é de $IMC Obesidade Grau I<h5>";
    }else if ($IMC < 39.9){
        echo "<html><h5>Seu IMC é de $IMC Obesidade Grau II<h5>";
    }else if ($IMC >= 40){
        echo "<html><h5>Seu IMC é de $IMC Obesidade Grau III<h5>";
    }

?>