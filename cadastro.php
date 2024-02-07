<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="estiloP.css">
</head>
<body>
    <?php include("nav.php")?>
     <!--caixa de cadastro -->
     <br><br><fieldset style="border-radius: 5px"><br>
       <form action="cad.php" method="post">
            <label for="">Nome: </label>
            <input type="text" id="nome" name="nome" required><br><br>

            <label for="">Idade: </label>
            <input type="number" id="idade" name="idade" required><br><br>
           
            <input type="submit" value="Enviar">     
       </form> 
    </fieldset><br><br>

</body>
</html>