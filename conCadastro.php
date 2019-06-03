<?php 
include'conexao.php';

$nomeD=$_POST['nome'];
$sobrenomeD=$_POST['sobrenome'];
$emailD =$_POST['email'];
$SenhaD =$_POST['senha'];

$inserir = "INSERT INTO tabela1 (nome, sobrenome, email, senha) VALUES ('$nomeD','$sobrenomeD','$emailD', '$SenhaD')";
$resultado = mysqli_query($conn, $inserir);

if(mysqli_affected_rows($conn)!= 0){
    echo "<script>
             alert('usuario cadastrado com sucesso.');
          </script>";
    header('location:Pagina1.php');
}else{
    echo "<script>
             alert('usuario nÃ£o foi cadastrado com sucesso.');
          </script>";
     header('location:Cadastro.php');
}
        ?>