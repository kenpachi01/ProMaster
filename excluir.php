<?php
session_start();

include 'conexao.php';

$id= filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "DELETE FROM tabela1 WHERE id = '$id'";
$resultado_usuario= mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
    echo"<script>
        alert('USUARIO EXCLUIDO COM SUCESSO!!');
        window.location.href='Pagina1.php';
        </script>";
}else{
    echo 'USUARIO NAO FOI EXCLUIDO !!';
    
}
?>