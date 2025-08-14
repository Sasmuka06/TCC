<?php
include "Templates/header.php"; ?>

<style>
html, body {
  height: 100%;
  margin: 0;
}

.split {
  height: 100vh; /* altura da viewport */
  width: 50%;
  position: fixed;
  top: 0;
}

.left {
  left: 0;
  background: #f0f0f0;
}

.right {
  right: 0;
  background: #cccccc;
  display: flex;
  align-items: center;
  justify-content: center;
}

.carousel-side {
  width: 100%;
  height: 100vh; /* altura total */
}

.carousel-side .carousel,
.carousel-side .carousel-inner,
.carousel-side .carousel-item {
  height: 100%; /* ocupam toda a altura do container */
}

.carousel-side .carousel-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

content {
  padding: -100px;
}
</style>

<div class="split left">
  <div class="centered">
    <div class="col-md-6 d-flex align-items-center justify-content-center">
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
            title="Por favor, insira um e-mail Gmail válido"
          />
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
            minlength="6"
          />
        </div>

        <button type="submit" class="btn btn-primary w-100">Entrar</button>
      </form>
    </div>
  </div>
</div>
<div class="split right">
  <div class="carousel-side">
    <div id="carouselExampleCaptions" class="carousel slide h-100 active min-vh-100 d-flex align-items-center justify-content-center " data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="IMG/night_city.jpg" class="d-block w-200 d-block h-150" style="object-fit: cover;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Bem vindo ao ApeAqui!</h5>
        <p>O seu Sistema ERP de gestão de condominios!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="IMG/city.jpg" class="d-block w-100 h-100  " style="object-fit: cover;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="IMG/city2.jpg" class="d-block w-100 h-100" style="object-fit: cover;" alt="...">
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
  </div>
</div>

<?php
include "Templates/footerlogin.php"; ?>