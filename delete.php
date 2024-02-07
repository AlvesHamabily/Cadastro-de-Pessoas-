<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE</title>
    <link rel="stylesheet" href="estiloP.css">
</head>
<body>
<?php include("nav.php")?>
    <?php include("conexao1.php");

    if (isset($_POST["id"])) {
        $id = $_POST["id"];

        // Consulta para excluir o carro com base no código
        $sql = "DELETE FROM Pessoa WHERE id= '$id'";

        if (mysqli_query($conexao, $sql)) {
            echo "<h2>Dado excluído com sucesso!</h2>";
        } else {
            echo "Error: ".$sql.mysqli_error($conexao);
        }
    }

    mysqli_close($conexao);

    ?>;


</body>
</html>
