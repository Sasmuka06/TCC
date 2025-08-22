<style>
  body{
     height: 100%;
    margin: 0;
     background-image: linear-gradient(rgba(0, 0, 0, 0.11), rgba(0, 0, 0, 0.2)), url('IMG/text.jpg');
      overflow: auto;
  }

  .area-scroll {
  height: 500px;
  overflow-y: scroll;
  padding-right: 10px; /* espaço para a barra de scroll */
}

/* Personalizar a barra de scroll (webkit) */
.area-scroll::-webkit-scrollbar {
  width: 8px;
}

.area-scroll::-webkit-scrollbar-track {
  background: #f1f1f1;
  border-radius: 10px;
}

.area-scroll::-webkit-scrollbar-thumb {
  background: #888;
  border-radius: 10px;
}

.area-scroll::-webkit-scrollbar-thumb:hover {
  background: #555;
}

  .navbar .nav-link:hover,
  .navbar button:hover {
    color: rgba(255, 255, 255, 0.75);
    background-color: rgba(0, 0, 0, 0.2);
    border-radius: 0.25rem;
    transition: background-color 0.3s ease, color 0.3s ease;
    cursor: pointer;
  }


.navbar,
.sidebar {
  background-color: #3f4b6e; /* Mesma cor exata */
  /* ou use uma variável CSS */
  background-color: var(--primary-bg);
}

  form.d-flex button.fa-solid:hover {
    background-color: rgba(0, 0, 0, 0.2);
    color: white;
    border-radius: 0.25rem;
    transition: background-color 0.3s ease, color 0.3s ease;
    cursor: pointer;
  }

  .icon-button {
    color: rgba(255, 255, 255, 0.75);
    background-color: rgba(0, 0, 0, 0.2);
    border-radius: 0.25rem;
    transition: background-color 0.3s ease, color 0.3s ease;
    cursor: pointer;
  }

  .icon-button:hover {
    background-color: rgba(0, 0, 0, 0.2);
    color: white;
    border-radius: 0.25rem;
    transition: background-color 0.3s ease, color 0.3s ease;
    cursor: pointer;
  }

  nav {
    position: relative;
    z-index: 12;
    background: linear-gradient(90deg, #2B3A67, #638BBE);
     padding: 10px 20px;
    box-shadow: 0 8px 8px rgba(0, 0, 0, 0.2); 
 border-bottom: none;
  border-right: none;
     
  }

  .navbar input[type="search"] {
  background-color: rgba(255, 255, 255, 0.53); 
  color: #000000ff;
  transition: 0.3s;
  border: none;
  outline: none;
}

.navbar input[type="search"]::placeholder {
  color: rgba(255, 255, 255, 1);

}

.navbar input[type="search"]:focus {
  background-color: rgba(255, 255, 255, 0.25);
   
}

.searchbutton{
  box-shadow: 0 0 5px rgba(10, 10, 10, 0.4);
  border-radius: 15px;
  
}




.navbar::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image:
    radial-gradient(1px 1px at 50px 50px, rgba(255, 255, 255, 0.4), transparent),
    radial-gradient(2px 2px at 100px 100px, rgba(255, 255, 255, 0.6), transparent),
    radial-gradient(1px 1px at 150px 50px, rgba(255, 255, 255, 0.8), transparent),
    radial-gradient(3px 3px at 200px 120px, rgba(255, 255, 255, 0.5), transparent),
    radial-gradient(1px 1px at 80px 180px, rgba(255, 255, 255, 0.7), transparent);
  background-repeat: repeat;
  background-size: 500px 120px;
  animation: particlesMoveHorizontal 30s linear infinite reverse;
  pointer-events: none;
}

@keyframes particlesMoveHorizontal {
  0% {
    transform: translateX(0px);
  }
  100% {
    transform: translateX(-400px);
  }
}

.navbar::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image:
    radial-gradient(2px 2px at 20px 30px, rgba(255, 255, 255, 0.8), transparent),
    radial-gradient(3px 3px at 40px 70px, rgba(255, 255, 255, 0.6), transparent),
    radial-gradient(1px 1px at 90px 40px, rgba(255, 255, 255, 0.9), transparent),
    radial-gradient(2px 2px at 130px 80px, rgba(255, 255, 255, 0.7), transparent);
  background-repeat: repeat;
  background-size: 300px 120px;
  animation: particlesMoveDiagonal 25s linear infinite;
  pointer-events: none;
}

@keyframes particlesMoveDiagonal {
  0% {
    transform: translate(0px, 0px);
  }
  100% {
    transform: translate(-200px, -50px);
  }
}
</style>

<nav class="navbar navbar-expand-lg navbar-dark w-100" style="background-color: #638BBE;">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a href="#" class="nav-link text-white">
            <i class="fa-solid fa-user fa-lg ma-2" style="color: white" ;></i></a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-white">
            <i class="fa-solid fa-gear fa-lg ma-4" style="color: white" ;></i></a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2 searchbutton" type="search" placeholder="Search" aria-label="Pesquisar">
        <button type="submit"
          style="color: white; background: transparent; border: none; cursor: pointer;  display: flex; align-items: center;
           gap: 4px; padding: 4px 8px;"
          onmouseover="this.style.backgroundColor='rgba(0,0,0,0.2)'"
          onmouseout="this.style.backgroundColor='transparent' ">
          <i class="fa-solid fa-plus fa-sm me-1"></i>
          <i class="fa-solid fa-magnifying-glass fa-lg"></i>
        </button>
      </form>
    </div>
  </div>
</nav>

  