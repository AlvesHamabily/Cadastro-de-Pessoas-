<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link rel="stylesheet" href="estiloP.css">
</head>
<body>

<!--mostrado tabela de dados - select -->
<?php include("nav.php")?>
<?php include("conexao1.php");
    
    $sql ="SELECT  id, nome, idade FROM Pessoa";

    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado)){
        echo"<br><table class= 'table'><tr>
            <th>ID </th>
            <th>NOME </th>
            <th>IDADE </th></tr>";

        while($row = mysqli_fetch_assoc($resultado)){
            echo"<tr>
            <td>".$row["id"]."</td>
            <td>".$row['nome']."</td>
            <td>".$row['idade']."</td>
            </tr>";
        }
        echo"</table>";
        
    } 
    else{
        echo("Zero Resultados");
    }
    mysqli_close($conexao);

?>
    
</body>
</html>