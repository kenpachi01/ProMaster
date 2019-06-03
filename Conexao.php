<?php

$nome_servidor="localhost";
$nome_usuario="root";
$Senha="";
$nome_banco="projetop";

$conn =new mysqli($nome_servidor,$nome_usuario,$Senha,$nome_banco);
if ($conn ->connect_error===TRUE){
    die("asdf".$conn->connect_error);
}

?>