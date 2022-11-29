<?php require 'pages/header.php'; ?>
<?php
require 'classes/anuncios.class.php';
require 'classes/usuarios.class.php';


$a = new Anuncios();
$u = new Usuarios();

if (isset($_GET['id']) && !empty($_GET['id'])) {
  $id = addslashes($_GET['id']);
} else {
?>
  <script type="text/javascript">
    window.location.href = "index.php";
  </script>
<?php
}
$info = $a->getAnuncio($id);

$foto = $a->SecionarFoto($id);

print_r($foto);



$number = $info['telefone'];

if (preg_match('/^\+\d(\d{3})(\d{3})(\d{4})$/', $number,  $matches)) {
  $result = $matches[1] . '-' . $matches[2] . '-' . $matches[3];
  echo $result;
}
?>
<div class="container">

  <div class="row">
    <div class="col">
      <div class=" col-sm-6 mt-4 ">
        <h1><?php echo $info['titulo']; ?></h1>
        <hr>
        <h4><span> <?php echo utf8_encode($info['categoria']); ?></span></h4>
        <p><?php echo $info['descricao']; ?></p>
        <br />
      </div>
    </div>

    <div class="col-sm-4 mt-5 align-items-center">
      <div class="carousel slide " data-ride="carousel" id="meuCarousel">
        <div class="carousel-inner " role="listbox">
          <h2>Contato</h2>
          <hr>
          <p>R$ <?php echo number_format($info['valor'], 2); ?></p>
          <h4>Telefone: <?php echo $info['telefone']; ?></h4>
        </div>
      </div>
    </div>

  </div>

  <div class="col-sm-4">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <?php foreach ($info['fotos'] as $chave => $foto) : ?>
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label=""></button>
      </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <div class="item <?php echo ($chave == '0') ? 'active' : ''; ?>">
              <img src="assets/images/anuncios/<?php echo $foto['url']; ?>" class="d-block w-100">
            </div>
          </div>

        </div>
      <?php endforeach; ?>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  

  </div>
</div>
<?php require 'pages/footer.php'; ?>