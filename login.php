<?php
include "Templates/header.php"; ?>

<?php
include "Templates/navbar.php"; ?>

<div class="login-container">
    <div class="base-container">
        <h2>Login</h2>
        <form action='verifica_login.php' method="POST">
            <input type="text" placeholder="Usuario:" id="usuario" name="usuario" required>
            <input type="password"  placeholder="senha:" id="senha" name="senha" required>
            <div>
                <a href="senha.html">Esqueceu a Senha?</a>
            </div>
            <br>
            <input type="submit" value="Entrar">
        </form>
    </div>
    </div>

    <?php
include "Templates/footer.php"; ?>