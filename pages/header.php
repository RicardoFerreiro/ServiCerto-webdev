<?php require 'config.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ServiCerto</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <script src="./assets/js/42d5adcbca.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./assets/css/theme.css">
  <link rel="stylesheet" href="./assets/css/custom.css">
</head>

<body>


  <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
    <div class="container">
      <a class="navbar-brand font-weight-bold" href="index.php" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom">ServiCerto</a>
      <a href="javascript:;" class="btn btn-sm  bg-gradient-info  btn-round mb-0 ms-auto d-lg-none d-block">Procurar um Prestador</a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">

        <ul class="navbar-nav navbar-nav-hover mx-auto">
         
          <li class="nav-item mx-2">
            <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" href="index.php">Procurar um Prestador</a>

          </li>
          <li class="nav-item mx-2">
            <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" href="meus-anuncios.php">Sobre</a>




        </ul>

        <?php if (isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])) : ?>
          <ul class="navbar-nav d-lg-block d-none text-center">
            <li class="nav-item">
            <a class="me-3">Olá, <?php echo $_SESSION['cLogin']['nome'] ?></a>
            
            <a href="meus-anuncios.php" class="btn btn-sm btn-round mb-0 btn-primary">Meus anúncios</a>
            <a href="sair.php" class="btn btn-sm btn-round mb-0 ms-2 btn-danger">Sair</a>

            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">


            <?php else : ?>
              <a href="cadastra-se.php" class="btn btn-sm btn-round mb-0 me-1 btn-primary">Cadastra-se</a>
              <a href="login.php" class="btn btn-sm btn-round mb-0 me-1 btn-primary">Entrar</a>
            <?php endif; ?>


            </li>
          </ul>
      </div>
    </div>
  </nav>

  </nav>