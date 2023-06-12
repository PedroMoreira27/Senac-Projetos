<?php
    //conexão com banco de dados    
    //criar o objeto de conexão
    $SERVIDOR  = 'localhost';
    $USUARIO   = 'admin';
    $SENHA     = '@Luno123';
    $BANCO     = 'TI41';


    $con = new mysqli ($SERVIDOR,$USUARIO,$SENHA,$BANCO);   

    //testar conexão com banco de dados
    if ($con -> connect_error){
        //aqui faz o código necessário em caso de erro durante a conexão com o banco de dados   
        echo "Erro ao conectar com a base de dados";
    }
    else {
        //aqui a codificação em caso de sucesso na conexão com o banco
        echo "<h3>A conexão com o banco de dados foi realizada</h3>";

        $sql = "select * from cadastro";
            $ret = $con->query($sql);
            while ($registro = $ret->fetch_assoc()){
                //Exibe os registros retornados pelo comando SQL executado
                echo "Nome: ". $registro['nome'];
                echo " , Telefone: " . $registro['telefone'];
                echo "<br>";
            }

        $con->Close();
    }
    
?>    