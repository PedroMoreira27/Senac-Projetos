<?php
    //conexão com banco de dados    
    //criar o objeto de conexão
    $SERVIDOR  = 'localhost';
    $USUARIO   = 'admin';
    $SENHA     = '@Luno123';
    $BANCO     = 'TI41';

    session_start();

    $Nome = $_SESSION['Nome'];

    $con = new mysqli ($SERVIDOR,$USUARIO,$SENHA,$BANCO);   

    //testar conexão com banco de dados
    if ($con -> connect_error){
        //aqui faz o código necessário em caso de erro durante a conexão com o banco de dados   
        echo "Erro ao conectar com a base de dados";
    }else if($_SESSION['token'] =! "ABCDEF"){
        header("Location:cadastro.php");
    }
        echo "<h3>A conexão com o banco de dados foi realizada</h3>";
        
        $Nome = $_SESSION['Nome'];
        $user = $_SESSION['user'];
        echo "
          <h1>Pagina do sistema</h1>
          <hr />
          <h3>Voce esta conectado como: $Nome";

    $con->Close();
    
?>    