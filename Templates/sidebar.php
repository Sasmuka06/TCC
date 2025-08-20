<style>
  .sidebar {
    width: 240px;
    height: 100vh;
    display: flex;
    flex-direction: column;
    padding: 1rem;
    background-color: #638BBE;
    color: #E0E6ED;
    overflow-y: auto;
    top: 0;
    position: fixed;
    transition: left 0.3s ease;
    border-radius: 0.7px;
    background: linear-gradient(180deg, #2B3A67, #638BBE);
      backdrop-filter: blur(10px);
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
  }

  .sidebar a,
  .sidebar button.btn-toggle {
    color: white;
    text-decoration: none;
  }

  .sidebar a:hover {
    color: rgba(255, 255, 255, 0.75);
    text-decoration: underline;
     background-color: rgba(255, 255, 255, 0.1);
  }

  .sidebar-menu {
    flex-grow: 1;
    overflow-y: auto;
  }

  .sidebar-footer {
    margin-top: auto;
  }

  .btn-toggle {
    width: 100%;
    text-align: left;
    padding-right: 1rem;
    font-weight: 600;
  }

  .btn-toggle:focus {
    outline: none;
    box-shadow: none;
  }

  .btn-toggle .toggle-icon {
    transition: transform 0.3s ease;
    transform-origin: center;
  }

  .btn-toggle[aria-expanded="true"] .toggle-icon {
    transform: rotate(180deg);
  }

  .sidebar button.btn-toggle:hover,
  .sidebar a:hover {
    background-color: rgba(0, 0, 0, 0.2);
    color: white;
    text-decoration: none;
    border-radius: 0.375rem;
    transition: background-color 0.3s ease;
  }

  .content {
    margin-left: 240px;
     z-index: 10;
  }

  .contentmain {
    margin-left: 195px;
  }
</style>

<div class="sidebar fixed">
  <ul class="list-unstyled ps-0 sidebar-menu">
    <li class="mb-1">
      <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
        <i class="fa-solid fa-house fa-lg me-2" style="color: white" ;></i></a>Inicio
        <svg class="bi ms-auto toggle-icon" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
        </svg>
      </button>
      <div class="collapse show" id="home-collapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <br>
          <li><a href="#" class="link-white rounded">Minha Unidade</a></li>
          <br>
          <li><a href="#" class="link-white rounded">Acesso a Comunidade</a></li>
          <br>
          <li><a href="#" class="link-white rounded">Entregas e Portaria</a></li>
        </ul>
      </div>
    </li>
    <ul class="list-unstyled ps-0 sidebar-footer border-top pt-3 mt-3"></ul>
    <li class="mb-1">
      <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
        <a><i class="fa-solid fa-book fa-lg me-2" style="color: white;"></i></a><span style="font-size: 1.0rem;">Documentação</span>
        <svg class="bi ms-auto toggle-icon" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
        </svg>
      </button>
      <div class="collapse" id="dashboard-collapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <br>
          <li><a href="#" class="link-light rounded">Solicitações</a></li>
          <br>
          <li><a href="#" class="link-light rounded">Ocorrencias</a></li>
          <br>
          <li><a href="#" class="link-light rounded">Contatar Admin</a></li>
          <br>
          <li><a href="#" class="link-light rounded">Documentos</a></li>
        </ul>
      </div>
    </li>
    <ul class="list-unstyled ps-0 sidebar-footer border-top pt-3 mt-3"></ul>
    <li class="mb-1">
      <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
        <a><i class="fa-solid fa-comment-dollar fa-lg me-2" style="color: white" ;></i></a>
        Financeiro
        <svg class="bi ms-auto toggle-icon" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
        </svg>
      </button>
      <div class="collapse" id="orders-collapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <br>
          <li><a href="#" class="link-white rounded">Documentos</a></li>
          <br>
          <li><a href="#" class="link-white rounded">Verificar Boletos</a></li>
          <br>
          <li><a href="#" class="link-white rounded">Consulta de Entregas</a></li>
        </ul>
      </div>
    </li>
  </ul>

  <ul class="list-unstyled ps-0 sidebar-footer border-top pt-3 mt-3">
    <li class="mb-1">
      <a>
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
          <i class="fa-solid fa-circle-info fa-lg me-2" style="color: white" ;></i></a>
      Sobre
      <svg class="bi ms-auto toggle-icon" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
      </svg>
      </button>
      <div class="collapse" id="account-collapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <br>
          <li><a href="#" class="link-white rounded">Configurações</a></li>
          <br>
          <li><a href="#" class="link-white rounded">Perfil</a></li>
          <br>
          <li><a href="login.php" class="link-white rounded">Sair</a></li>
        </ul>
      </div>
    </li>
  </ul>
</div>