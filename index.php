<?php
include "Templates/header.php"; ?>

<?php
include "Templates/navbar.php"; ?>
<br><br>
<?php
include "Templates/sidebar.php"; ?>

<div id="carouselExampleCaptions" class="carousel slide content" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="IMG/night_city.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Bem vindo ao ApeAqui!</h5>
        <p>O seu Sistema ERP de gestão de condominios!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="IMG/city.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="IMG/city2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container contentmain d-flex justify-content-center align-items-center vh-100">
  <div class="row w-100" style="max-width: 900px;">

    <!-- 📝 Formulário (à esquerda) -->
    <div class="col-md-6 d-flex align-items-center">
      <form class="p-4 p-md-5 bg-light rounded shadow w-100">
        <h2 class="mb-4 text-center">Login</h2>

        <div class="mb-3">
          <label for="email" class="form-label">E-mail (Gmail)</label>
          <input
            type="email"
            class="form-control"
            id="email"
            name="email"
            placeholder="seuemail@gmail.com"
            required
            pattern="[a-z0-9._%+-]+@gmail\.com$"
            title="Por favor, insira um e-mail Gmail válido" />
        </div>

        <div class="mb-4">
          <label for="password" class="form-label">Senha</label>
          <input
            type="password"
            class="form-control"
            id="password"
            name="password"
            placeholder="Sua senha"
            required
            minlength="6" />
        </div>

        <button type="submit" class="btn btn-primary w-100">Entrar</button>
      </form>
    </div>

    <div class="col-md-6 mb-4 mb-md-0 d-flex align-items-center">
      <div class="alert alert-warning w-100 shadow" role="alert">
        <h4 class="alert-heading">Atenção!</h4>
        <p>Este sistema é exclusivo para usuários autorizados. Certifique-se de que seu e-mail seja um Gmail válido.</p>
        <hr>
        <p class="mb-0">Em caso de dúvidas, entre em contato com o administrador.</p>
      </div>
    </div>

  </div>
</div>

<?php
include "Templates/footer.php"; ?>