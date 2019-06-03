<?php
include 'conexao';

$id = filter_input(INPUT_GET, "id");
$nome = filter_input(INPUT_GET, "nome");
$email = filter_input(INPUT_GET, "email");
$senha = filter_input(INPUT_GET, "senha");


$link = mysqli_connect("localhost", "root", "", "projetop");

if($link){
   
   $query= mysqli_query($link, "UPDATE tabela1 SET nome='$nome', email='$email', senha='$senha' where id='$id';" ); 
   if($query){
       
       header("Location:Pagina1.php");
   }else{
       die("Erro:" .mysqli_error($link));
   }
   
}else{
    die("erro:".mysqli_error($link));

}

