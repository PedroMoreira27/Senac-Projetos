<html>
    <h1>Pagina para entrada de dados</h1>
    <hr />
    <!-- Para entrada de dados podemos ultilizar um formulário -->
    <form action="LoginParte2.php">
        <label>User</label>
        <input type="text" name="txtUser" />
        <br>
        <label>Senha</label>
        <input type="text" name="txtSenha" />
        <input type="submit" name="Enviar" />


    </form>
</html>    
<?php
    if(isset($_GET['erro'])){
    echo "<h3>Usuario ou senha invalidos.</h3>";
    }
?>