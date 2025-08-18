<?php
include "Templates/header.php"; ?>

<style>
  html,
  body {
    height: 100%;
    margin: 0;
  }

  .split {
    height: 100vh;
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
    height: 100vh;
  }

  .carousel-side .carousel,
  .carousel-side .carousel-inner,
  .carousel-side .carousel-item {
    height: 100%;
  }

  .carousel-side .carousel-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .split.left {
    left: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('IMG/text.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    content: "";
    position: absolute;
    z-index: 1;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
  }

  .divider-line {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 50%;
    width: 2px;
    background-color: rgba(0, 0, 0, 0.2);
    z-index: 10;
  }

  .split.left form {
    width: 90%;
    max-width: 500px;
  }

  .btn-primary {
    background-color: #638BBE;
    border-color: #638BBE;
    font-size: 1.8rem;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
    font-weight: 500;
  }

  .btn-primary:hover {
    background-color: #4a6f9c;
    border-color: #4a6f9c;
    font-size: 1.8rem;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
    font-weight: 500;
  }

  .decorative-line {
    border: none;
    height: 3px;
    background: linear-gradient(to right, transparent, #638BBE, transparent);
    width: 80%;
    border-radius: 2px;
    margin-top: 40px;
  }

  img {
    filter: brightness(25%);
  }

  form {
    border-radius: 20px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
  }

  a {
    color: #638BBE;
  }

  a:hover {
    text-decoration: underline;
  }

  .carousel-caption h5 {
    font-size: 1.5rem;
    font-weight: 700;
  }

  .carousel-caption p {
    font-size: 1rem;
    opacity: 0.9;
  }

  h2 {
    font-size: 2.7rem;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
    text-align: center;
    text-transform: uppercase;
    color: red;
    animation: spectrumColors 8s infinite;
    text-shadow: 0 8px 20px rgba(0, 0, 0, 0.21);
  }

  @keyframes spectrumColors {
    0% {
      color: red;
    }

    14% {
      color: orange;
    }

    28% {
      color: yellow;
    }

    42% {
      color: green;
    }

    57% {
      color: blue;
    }

    71% {
      color: indigo;
    }

    85% {
      color: violet;
    }

    100% {
      color: red;
    }
  }

  
</style>

<div class="split left">

  <form class="p-4 p-md-5 bg-light shadow w-100 ">
    <h2 class="mb-4 ">
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

    <button type="submit" class="btn btn-primary w-100">Log In!</button>
  </form>
  <Br>


</div>
<div class="split right">
  <div class="carousel-side">
    <div id="carouselExampleCaptions" class="carousel slide h-100 active min-vh-100 d-flex align-items-center justify-content-center " data-bs-ride="carousel" data-bs-interval="3000" data-bs-wrap="true">
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
            <p>O seu Sistema ERP de gestão de condomínios</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="IMG/city.jpg" class="d-block w-100 h-100  " style="object-fit: cover;" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Organize tudo em um só lugar!</h5>
            <p>Controle entregas, acessos e solicitações com eficiência total</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="IMG/city2.jpg" class="d-block w-100 h-100" style="object-fit: cover;" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Comunicação e controle sem complicação!</h5>
            <p>Gestão inteligente para síndicos, moradores e equipes administrativas</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include "Templates/footer2.php"; ?>