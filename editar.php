
<html>
    <head>
        <meta charset="UTF-8">
 <title> Editar</title>
 <link rel="stylesheet" type="text/css" href="Cacalcss/Edit.css">
        
        <?php
        $id = filter_input(INPUT_GET, "id");
        $nome= filter_input(INPUT_GET, "nome");
        $email = filter_input(INPUT_GET, "email");
        $senha = filter_input(INPUT_GET, "senha");
                
        ?>
    </head>
    <h1 style="color:black;">Informação de computação</h1>
    <br>
    <br>
    <body background="http://infoteam.com.br/wp-content/uploads/2017/08/Montagem-e-Manuten%C3%A7%C3%A3o-de-Computadores.jpg">
        <center>
        <table  align="center"> 
        <tr>
            <td>
        
        <div id="conteudo">
            <center><h2>Alterar contato</h2></center>
            <p>
            <form action="edi.php">
                <input type="hidden" name="id" value="<?php echo $id ?>" />
                Nome: <input type="text" name="nome" value="<?php echo $nome ?>"/><br>
                <br>
                E-mail: <input type="text" name="email" value="<?php echo $email ?>"/><br>
                <br>
                Senha: <input type="text" name="senha" value="<?php echo $senha ?>"/><br>
                <br>
                
                <center>  <input type="submit" value="Alterar" align="center"></center>
                
            </form>
        </p>
        </div>
        
            </td>
        </tr>
        </table> 
        </center>
    </body>
</html>