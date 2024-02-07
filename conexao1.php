<?php

    $servidor="localhost:3306";
    $usuario="root";
    $senha="Has.2024";
    $dbname="CADASTRO";

    $conexao=mysqli_connect($servidor, $usuario, $senha, $dbname);

    if(!$conexao){
        die("Houve um erro: ".mysqli_connect_error());
    } 
  
   ?>;