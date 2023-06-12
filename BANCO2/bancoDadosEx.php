<?php
    //conexão com banco de dados    
    //criar o objeto de conexão
    $SERVIDOR  = 'localhost';
    $USUARIO   = 'admin';
    $SENHA     = '@Luno123';
    $BANCO     = 'TI41';

    $user = $_GET['txtUser'];
    $senha = $_GET['txtSenha'];
    $voltar = true;

    $con = new mysqli ($SERVIDOR,$USUARIO,$SENHA,$BANCO);   
        
    $sql = "select * from TI41.cadastro";
    $ret = $con->query($sql);

    while ($registro = $ret -> fetch_assoc()){

    if($senha == $registro['senha'] && $user == $registro['usuario']) {
        $Nome = $_GET['txtNome'];
        session_start();
        $_SESSION['user'] = $user;
        $_SESSION['token'] = "ABCDEF";
        $_SESSION['Nome'] = $Nome;
        header("Location: cadastro.php?");
        $voltar = false;

    }
    else{
        
    }

    }if($voltar == true){
    header("Location: entradaDadosEx.php?erro=0");

    }
    
?>    