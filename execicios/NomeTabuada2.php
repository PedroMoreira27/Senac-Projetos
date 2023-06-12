<html>
        <h1>Insira um numero</h1>
        <hr />
        <form action="NomeTabuada3.php">
        <label>Numero</label>
        <input type="text" name="txtNumero"/>
        <input type="submit" name="Enviar" />

        </form>


</html> 
<?php
    $nome = $_GET['txtNome'];
    session_start();
    $_SESSION['nome'] = $nome;
?>
