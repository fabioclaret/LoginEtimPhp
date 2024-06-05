<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php

require 'Contato.class.php';
$c = new Contato();
$con = $c->conecta();

if($con){
    $existe = $c->checkUser("fabio@gmail.com"); 
    if(!empty($existe)){
        echo "<script>alert('Usuario já Cadastrado!')</script>";    
    }else{
        $c->cadastraUsuario("fabio", "fabio@gmail.com", "123");
    }
}else{
    echo "<script>alert('nao consegui')</script>";
}