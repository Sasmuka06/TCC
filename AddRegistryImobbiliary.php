<?php
include "Templates/header.php"; ?>

<?php
include "Templates/navbar.php"; ?>

<?php
include "Templates/sidebar.php"; ?>

<BR>
<form class="p-4 p-md-5 bg-light shadow mx-auto text-center formadd" style="max-width: 430px;">
    <h2 class="mb-4 text-center">
        Login <img src="IMG/cat.gif" alt="Nyan Cat" style="width: 80px; vertical-align: middle;  filter: brightness(100%);" class="nyancat"></h2>
    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input
            type="email"
            class="form-control"
            id="email"
            name="email"
            placeholder="Ex: youremail@gmail.com"
            required
            pattern="[a-z0-9._%+-]+@gmail\.com$"
            title="Por favor, insira um e-mail Gmail válido" />
    </div>

    <div class="mb-4">
        <label for="password" class="form-label">Password</label>
        <input
            type="password"
            class="form-control"
            id="password"
            name="password"
            placeholder="Password"
            required
            minlength="6" />
    </div>
    <div class="d-flex justify-content-between mb-4">
        <a href="/TCC/TCC/restorepassword.php" class="text-decoration-none">Forgot Password?</a>
    </div>
    <button type="submit" class="btn  w-100 formbutton">Log In!</button>
</form>


<?php
include "Templates/footer.php"; ?>