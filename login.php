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
    background:
      linear-gradient(120deg, #f0f0f0 10%, transparent 10%, transparent 30%, #f0f0f0 30%, #f0f0f0 50%, transparent 50%, transparent 70%, #f0f0f0 70%, #f0f0f0 90%, transparent 90%),
      linear-gradient(120deg, rgba(0, 0, 0, 0.19) 0%, rgba(0, 0, 0, 0.03) 100%);
    background-color: #ffffff;
    background-size: cover;
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


  .carousel-caption h5 {
    font-size: 1.5rem;
    font-weight: 700;
  }

  .carousel-caption p {
    font-size: 1rem;
    opacity: 0.9;
  }

  h2 {
    font-size: 3rem;
    font-family: 'Poppins', sans-serif;
    font-weight: 700;

  }

  @keyframes gradientShift {

    0%,
    100% {
      background-position: 0% 50%;
    }

    50% {
      background-position: 100% 50%;
    }
  }

  @keyframes float {

    0%,
    100% {
      transform: translateY(0px);
    }

    50% {
      transform: translateY(-10px);
    }

  }



  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

  .wrapper {
    width: 520px;
    height: auto;
    border: 2px solid rgba(255, 255, 255, 0.1);
    background: transparent;
    color: #cccccc;
    border-radius: 60px;
    padding: 30px 40px;
    backdrop-filter: blur(10px);

  }

  .wrapper a {
    color: #638BBE;
    transition: 0.3s;

  }

  .wrapper a:hover {
    text-decoration: underline;
    color: #2B3A67;
  }

  .wrapper h1 {
    font-size: 52px;
    font-weight: 700;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(45deg, #2B3A67, #638BBE, #4ecdc4, #45b7d1, #96ceb4);
    background-size: 300% 300%;
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: gradientShift 8s ease-in-out infinite;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 1rem;
    align-items: center;

  }

  .input-box {
    width: 100%;
    height: 50px;
    margin: 30px 0;
    margin-bottom: 20px;

  }

  .input-box input {
    width: 100%;

    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(49, 48, 48, 0.41);
    border-radius: 40px;
    font-size: 16px;
    color: black;
    margin-bottom: 20px;
  }

  .input-box input::placeholder {
    color: black;
  }

  .wrapper .remember-forgot {
    display: flex;
    justify-content: space-between;
    font-size: 14.5px;
    margin: -15px 0 15px;
    color: #638BBE;

  }

  .remember-forgot a :hover {
    text-decoration: underline;
  }

  .wrapper .btn-login {
    width: 100%;
    height: 60px;
    border: none;
    outline: none;
    background: #638BBE;
    border-radius: 45px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color: white;
    font-weight: 600;
  }

  .wrapper label {
    color: black;
  }

  a:hover {
    text-decoration: underline;
  }
</style>


<div class="split left">

  <div class="wrapper">
    <form class="p-4 p-md-5  w-100 ">
      <h1 class="mb-4 text-center"> LOGIN </h1>
      <div class="mb-3 input-box">
        <label for="email" class="form-label ">E-mail</label>
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
      <div class="mb-4 input-box">
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
      <br>
      <div class="d-flex justify-content-between mb-4 remember-forgot">
        <a href="/TCC/TCC/restorepassword.php" class="text-decoration-none">Forgot Password?</a>
      </div>
      <button type="submit" class="btn btn-primary w-100 btn-login">Login</button>
    </form>
  </div>
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