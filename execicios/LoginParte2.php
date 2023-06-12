<?php
    $user = $_GET['txtUser'];
    $senha = $_GET['txtSenha'];

    if($senha == "123456" && $user == "admin"){
        //echo "O login foi validado com sucesso!";
        session_start();
        $_SESSION['user'] = $user;
        $_SESSION['token'] = "ABCDEF";
        header("Location: LoginParte3.php?");

    }else {
        //echo "Usuario ou senhas invalidos";
        header("Location: Login.php?erro=0");
    }

?>