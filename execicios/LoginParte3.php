<?php   
    session_start();

    if($_SESSION['token'] =! "ABCDEF"){
        header("Location:Login.php");
    }
    $user = $_SESSION['user'];
    echo "
          <h1>Pagina do sistema</h1>
          <hr />
          <h3>Voce esta conectado como: $user";
?>
