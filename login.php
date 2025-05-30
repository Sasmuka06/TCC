<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <!-- uma div que se baseia unicamente em receber nome e senha do usuario para logar-->
    <div class="login-container">
        <h2>Login</h2>
        <form action='verifica_login.php' method="POST">
            <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>

        <input type="submit" value="Entrar">
</fomr>
    </div>
    <h2>Olá<h2>
</body>
</html>