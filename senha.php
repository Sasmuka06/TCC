<?php
include "Templates/header.php"; ?>

<?php
include "Templates/navbar.php"; ?>


  <div class="senha-container" >
        <div class="base-container">

            <h2>Esqueceu a senha?</h2>
            <h5>Por favor, digite seu E-mail para que possamos <br>
                enviar as instruções de recuperação de senha</h5>
                <input type="email" placeholder="E-mail" id="email" name="email" required> 
                <br><br>
                <input type="submit" value="Enviar">
                <br><br><br>
                <a href="login.html" class="return"><h3>Retornar ao login</h3></a>
            </form>
        </div>
    </div>

<?php
include "Templates/footer.php"; ?>