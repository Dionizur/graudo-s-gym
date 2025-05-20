<?php
// Receber os dados do formulário
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

// Acessar o IF quando o usuário clicar no botão acessar do formulário
if (!empty($dados['SendLogin'])) {
    // Exemplo de debug, você pode processar os dados para autenticação
    var_dump($dados);
}
//criptografia//
echo password_hash(123456, password_default);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graudo's Gym - Login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Cabeçalho da página -->
    <header>
        <div class="header-container">
            <img src="logo.png" alt="Graudo's Gym" class="logo">
            <h1>Graudo's Gym</h1>
            <p>Fortaleça seu corpo, sua mente e sua confiança!</p>
        </div>
    </header>

    <!-- Seção sobre a academia -->
    <section class="about-academy">
        <div class="section-container">
            <h2>Sobre o Graudo's Gym</h2>
            <p>O Graudo's Gym é um centro de treinamento especializado para você que quer desafiar seus limites. Com instalações de ponta e uma equipe altamente qualificada, estamos prontos para ajudar você a alcançar seus objetivos de forma eficiente e segura.</p>
        </div>
        <div class="classes-info">
            <div class="class">
                <h3>Aulas de Muay Thai</h3>
                <p>O Muay Thai é uma arte marcial que trabalha resistência física e habilidades de autodefesa. Ideal para quem quer melhorar sua condição física e aprender técnicas de combate.</p>
            </div>
            <div class="class">
                <h3>Aulas de Jiu Jitsu</h3>
                <p>Foque no controle de solo e em técnicas de submissão com o Jiu Jitsu. Aulas ideais para quem deseja aprimorar o condicionamento físico e aprender técnicas de autodefesa.</p>
            </div>
        </div>
    </section>

    <!-- Formulário de login -->
    <div class="container">
        <div class="login-box">
            <h2>Login</h2>
            <form method="POST" action="">
      <label> Usuaário: </label>
        <input type="text" name="usuario" placeholder="Digite o usuario"><br><br>
        
        <label>Senha: </label>
        <input type="password" name="senha_usuario" placeholder="Digite a senha"><br><br>
        
        <input type="submit" name="SendLogin" value="Acessar"><br><br>

    </form><br>
        </div>
    </div>
</body>
</html>
