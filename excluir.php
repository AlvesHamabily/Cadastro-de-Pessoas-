<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão</title>
    <link rel="stylesheet" href="estiloP.css">
</head>
<body>
    
<?php include("nav.php")?>
<!--deletando dadods -->

<br><fieldset><br>

    <form action="delete.php" method="post">
        <label for="">Informe o código Identificador da pessoa que deseja excluir: </label><br><br>
        <input type="number" id="id" name="id" required><br><br>

        <input type="submit" value="Excluir">

    </form>

</fieldset><br><br>


</body>
</html>