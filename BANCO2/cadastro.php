<?php
    if(isset($_GET['erro'])){
    } 
    echo "<html>
    <h1>Pagina para entrada de dados</h1>
    <hr />
    <!-- Para entrada de dados podemos utilizar um formulário -->
    <form action='inserirUsuario.php'>
        <label>Usuario</label>
        <input type='text' name='txtUser' />
        <br>
        <label>Senha</label>
        <input type='text' name='txtSenha' />
        <br>
        <label>Nome</label>
        <input type='text' name='txtNome' />
        <br>
        <input type='submit' value='Enviar' />
        
    </form>
</html>";

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
        $sql = "select * from cadastro";
            $ret = $con->query($sql);
            while ($registro = $ret->fetch_assoc()){
                //Exibe os registros retornados pelo comando SQL executado
                echo "Codigo: ". $registro['codigo'];
                echo " , Nome: ". $registro['Nome'];
                echo " , Usuario: " . $registro['usuario'];
                echo " , Senha: ". $registro['senha'];
                echo "<br>";
            }

        $con->Close();
    }

?>