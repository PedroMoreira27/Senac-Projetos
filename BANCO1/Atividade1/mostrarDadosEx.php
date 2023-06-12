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
    }else {
        //aqui a codificação em caso de sucesso na conexão com o banco
        echo "<h3>A conexão com o banco de dados foi realizada2</h3>";

        $sql = "select *, (valor_unit * quantidade) as total from produtos";
            $total = 0;
            $ret = $con->query($sql);
            $m ="<table>";
            $m .= "<tr>
                    <th>Codigo</th><th>produto</th><th>quantidade</th><th>valor_unit</th><th>total</th>
                   </tr>";
            while ($registro = $ret->fetch_assoc()){
                $m .= "<tr> 
                            <td>" . $registro['codigo'] . "</td>
                            <td>" . $registro['produto'] . "</td>
                            <td>" . $registro['quantidade'] . "</td>
                            <td>" . $registro['valor_unit'] . "</td>
                            <td>" . $registro['total'] . "</td>
                       </tr>";     
                //Exibe os registros retornados pelo comando SQL executado
                /*echo "Nome: ". $registro['produto'];
                echo " , Quantidade: " . $registro['quantidade'];
                echo " , Valor: " . $registro['valor_unit'];
                echo "<br>";*/
                $total += $registro['total'];
            }
            $m .= "</table>";
            echo $m;
            echo "<h7>Total: $total </h7>";

        $con->Close();
    }
    
?>    