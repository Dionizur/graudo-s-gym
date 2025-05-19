
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    // Receber os dados do formulário
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    // Acessar o IF quando o usuário clicar no botão acessar do formulário
    if(lempty($dados['SendLogin'])){
        var_dump($dados);
    }
?>
    <!-- Inicio do formulário de login -->
<form method="POST" action="">  
    <label>Usuário: </label>  
    <input type="text" name="usuario" placeholder="Digite o usuário"><br><br>  

    <label>Senha: </label>  
    <input type="password" name="senha_usuario" placeholder="Digite a senha"><br><br>  

    <input type="submit" name="SendLogin" value="Acessar"><br><br>  


</body>
</html>