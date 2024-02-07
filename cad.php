<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estiloP.css">
</head>
<body>
    <?php include("nav.php")?>
    <?php
    include("conexao1.php");

    $nome=$_POST["nome"];
    $idade=$_POST["idade"];

    $sql="INSERT INTO Pessoa (nome, idade) VALUES ('$nome', '$idade')";

    if(mysqli_query($conexao, $sql)){
        echo("<h1> Cadastro realizado com Sucesso!<br></h1>");
       
    }
    else{
        echo("Error:".$sql."<br>".mysqli_error($conexao));
    }

?>;

</body>
</html>

