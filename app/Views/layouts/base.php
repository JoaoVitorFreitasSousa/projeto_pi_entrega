<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="/home">Freitas Livraria</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <!-- Menu Usuários -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
              Usuários
            </a>
            <ul class="dropdown-menu">
               <li><a class="dropdown-item" href="/home">Dashboard</a></li>
               <li><a class="dropdown-item" href="/usuarios/inserir">Cadastro de Usuarios</a></li>
               <li><a class="dropdown-item" href="/usuarios">Listar Usarios</a></li>
            </ul>
            
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
              Produtos
            </a>
            <ul class="dropdown-menu">
               <li><a class="dropdown-item" href="/home">Dashboard</a></li>
               <li><a class="dropdown-item" href="/produtos/inserir">Cadastrar produtos</a></li>
               <li><a class="dropdown-item" href="/produtos">Listar produtos</a></li>

          </li>
      </div>
    </div>
  </nav>


  <!-- Conteúdo principal -->
  <div class="container ">
    <?= $content ?>
  </div>

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
