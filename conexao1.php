<?php

    $servidor="localhost";
    $usuario="usuario";
    $senha="senhaUsuario";
    $dbname="CADASTRO";

    $conexao=mysqli_connect($servidor, $usuario, $senha, $dbname);

    if(!$conexao){
        die("Houve um erro: ".mysqli_connect_error());
    } 
  
   ?>;
