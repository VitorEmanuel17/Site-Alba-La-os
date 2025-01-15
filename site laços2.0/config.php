<?php

function conectar(){

    $servidor = "localhost"; 
    $usuario = "root";
    $senha = "1234";
    $banco = "lacos2";

    $conn = new mysqli($servidor, $usuario, $senha, $banco);

    return $conn;
}

function desconectar($conn){
    $conn->close();

}

?>