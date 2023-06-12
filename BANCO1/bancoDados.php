<?php
    //conexão com banco de dados    
    //criar o objeto de conexão
    $SERVIDOR  = 'localhost';
    $USUARIO   = 'admin';
    $SENHA     = '@Luno123';
    $BANCO     = 'TI41';

    $nome = $_GET['txtNome'];
    $telefone = $_GET['txtFone'];

    $con = new mysqli ($SERVIDOR,$USUARIO,$SENHA,$BANCO);   

    //testar conexão com banco de dados
    if ($con -> connect_error){
        //aqui faz o código necessário em caso de erro durante a conexão com o banco de dados   
        echo "Erro ao conectar com a base de dados";
    }else {
        //aqui a codificação em caso de sucesso na conexão com o banco
        echo "<h3>A conexão com o banco de dados foi realizada</h3>";

        $sql="insert into TI41.clientes (nome,telefone) values ('Joao','37225665')";
        $ret = $con->query($sql);
        if ($ret == true){
            echo "Registro inserido";
        }

        $con->Close();
    }
    
?>    