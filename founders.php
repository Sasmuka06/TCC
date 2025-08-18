<style>
  .content {
    margin-left: 240px;
    gap: 100px;
  }

  img {
    width: 120px;
    height: 120px;
    object-fit: cover;
  }

  .classh2 {
    font-size: 2.7rem;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
    text-align: center;
    text-transform: uppercase;
    color: red;
    animation: spectrumColors 8s infinite;
    margin-bottom: 20px;
    text-shadow: 0px 8px 20px rgba(0, 0, 0, 0.5);
  }

  .metext {
    margin-left: -20px;
  }

  .classh5 {
    text-align: center;
    text-transform: uppercase;
    color: red;
    animation: spectrumColors 8s infinite;
    text-shadow: 0px 8px 20px rgba(0, 0, 0, 0.5);
  }

  .pclasssubtext {
    text-shadow: 0px 8px 20px rgba(0, 0, 0, 0.5);
    font-size: 1.5rem;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
    font-weight: 300;
  }

  .rounded-circle {
    width: 120px;
    height: 120px;
    object-fit: cover;
    border-radius: 50%;
    border: 4px solid rgba(223, 223, 223, 0.85);
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .rounded-circle:hover {
    transform: scale(1.1);
    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.5);
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

  .subtitle {
    font-size: 1.5rem;
  }
</style>



<h2 class="classh2 content ">Founders!</h2>
<p class="content text-center subtitle pclasssubtext">These are the people responsible for developing the project.</p>
<BR><BR>

<div class="d-flex justify-content-center content">
  <div class="text-center ">
    <img src="IMG/me.jpg" class="rounded-circle " alt="img1">
    <h5 class="mt-4 metext classh5">Pedro Lenhares</h5>
    <p class="metext subtitle pclasssubtext">Full Stack Developer</p>
  </div>
  <div class="text-center  ">
    <img src="IMG/Nicolas.png" class="rounded-circle" alt="img2">
    <h5 class="mt-4 classh5">Nicolas Augusto</h5>
    <p class="subtitle pclasssubtext">Back-End Developer</p>
  </div>
  <div class="text-center ">
    <img src="IMG/Matheus.png" class="rounded-circle" alt="img3">
    <h5 class="mt-4 classh5">Matheus Mendonca</h5>
    <p class="subtitle pclasssubtext">Text Proofreader</p>
  </div>
  <div class="text-center ">
    <img src="IMG/Samuel.png" class="rounded-circle" alt="img4">
    <h5 class="mt-4 classh5">Samuel Santos</h5>
    <p class="subtitle pclasssubtext">Front-End Developer</p>
  </div>
  <div class="text-center ">
    <img src="IMG/Manoela.png" class="rounded-circle" alt="img5">
    <h5 class="mt-4 classh5">Manuuuuuuu! :3</h5>
    <p class="subtitle pclasssubtext">Project designer</p>
  </div>
</div>
<Br>