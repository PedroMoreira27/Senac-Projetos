<?php

    //phpinfo();
    echo "<h1>Hello World!!</h1>";
    echo "<h3>Aula de PHP</h3>";
    echo "<hr />";
    //Declarar variavel
    $numero=0; $numeroDecimal=0.0;
    $nome="";

    $numero = 100;
    $numeroDecimal = 10.5;
    $nome = "fulano";
    //concatenar usa o .
    echo "O $nome mora na casa de numero $numero e ganha 
    $numeroDecimal por hora de trabalho";

    //Operações matemáticas basicas
    echo "Operações matemáticas basicas";
    $num1=10; $num2=2;
    echo "<br>Soma: $num1 + $num2 =" . ($num1 + $num2);
    echo "<br>Subtração: $num1 - $num2 =" . ($num1 - $num2);
    echo "<br>Divisão: $num1 / $num2 =" . ($num1 / $num2);
    echo "<br>Multiplicacao: $num1 * $num2 =" . ($num1 * $num2);

    //Estrutura de condicional
    echo "<hr />";
    echo "Estrutura condicional ";
    $idade=10;
    if ($idade > 18){
        echo "Maior que 18 anos";
    }else if ($idade < 18){
        echo "Menor que 18 anos";
    }else{
        echo "Exatos 18 anos";
    }
    echo "<br>";
    //Estrutura de repetição
    $i=0;
    for ( $i=1; $i <11; $i++){
        echo " $i";
    }
    echo "<br>";
    $i=1;
    while ( $i < 11 ){
        echo " $i";
        $i++;
    }
    echo "<br>";
    //Vetores
    $vetor = array("chave1" => "Valor chave 1", "chave" => "Valor chave 2");

    echo "acessando o valor da primeira chave do vetor: " . $vetor['chave1'];

    echo "<br>";
    foreach ($vetor as $v){
        echo "<br> $v";
    }

    echo "<br>";

    //Exercicio 
    //Escreva os numeros pares e impares de 1 ate 100

    
    $i='1';
    while ( $i < 101 ){
        echo " $i";
        $i++;
    }
    echo "<h1>Par</h1>";

    $i='1';
    $c=20;
    while ( $i < 101 ){
        if($i%2 == 0){
        echo " $i";
        }
        if($i == $c){
           echo "<br>";
           $c=($c+20);
        }
        $i++;
    }
    echo "<h1>Impar</h1>";

    $i='1';
    $c=19;
    while ( $i < 101 ){
        if($i%2 != 0){
            echo " $i";
        }
        if($i == $c){
            echo "<br>";
            $c=($c+20);
         }
        $i++;
    }





?>