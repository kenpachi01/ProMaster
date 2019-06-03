<?php
include'Conexao.php';


$email = $_POST['email'];
$Senha = $_POST['senha'];



$achar = "SELECT * FROM tabela1 WHERE email='$email' AND senha='$Senha'";
$resultado = $conn->query($achar);

if($resultado->num_rows>0){
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    header('location:Pagina1.php');
}else{
    session_unset();
    session_destroy();
    echo "<script> 
        alert('Login ou senha incorreto');
        window.location.href = 'login.php';
        </script>";
}
?>