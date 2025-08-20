<style>
  body{
     height: 100%;
    margin: 0;
     background-image: linear-gradient(rgba(0, 0, 0, 0.11), rgba(0, 0, 0, 0.2)), url('IMG/text.jpg');
  }
  .navbar .nav-link:hover,
  .navbar button:hover {
    color: rgba(255, 255, 255, 0.75);
    background-color: rgba(0, 0, 0, 0.2);
    border-radius: 0.25rem;
    transition: background-color 0.3s ease, color 0.3s ease;
    cursor: pointer;
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
    z-index: 2;
    background: linear-gradient(90deg, #2B3A67, #638BBE);
     padding: 10px 20px;
     box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);

     
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

  