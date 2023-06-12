<html>
    <h1>1-Apenas resultado</h1>
    <h1>2-Tabuada completa</h1>
    <hr />
    <form action="NomeTabuada4.php">
    <label>1 Ou 2</label>
    <input type="text" name="txtOpc"/>
    <input type="submit" name="Enviar" />

</html> 
<?php 
    $numero = $_GET['txtNumero'];
    session_start();
    $_SESSION['numero'] = $numero;
?>
