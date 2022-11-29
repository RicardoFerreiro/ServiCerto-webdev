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
$contador = 0;




$number = $info['telefone'];

if (preg_match('/^\+\d(\d{3})(\d{3})(\d{4})$/', $number,  $matches)) {
  $result = $matches[1] . '-' . $matches[2] . '-' . $matches[3];
  echo $result;
}
?>
<div class="container">

  <div class="row col-12">
    <div class="col-8">
      <div class=" col-sm-10 mt-4">
        <h1><?php echo $info['titulo']; ?></h1>
        <hr>
        <h4><span> <?php echo utf8_encode($info['categoria']); ?></span></h4>
        <p><?php echo $info['descricao']; ?></p>
        <br />
      </div>
    </div>


    <div class="col ">
      <div class="col-sm-12 mt-4">
        <h1>Contato</h1>
        <hr>
        <p>A Partir de : R$ <?= number_format($info['valor'], 2); ?></p>
        <p>Whatsapp</p>
        <h4 id="telefone"><?= $info['telefone']; ?></h4>
        <div></div>
        <a href="" id="btnEnviar"><img src="./assets/images/contato-whatsapp.png" alt="" style="height:100px;"></a>
      </div>
    </div>


  </div>



  <div class="col-sm-4">
    <div id="carouselExampleFade" class="carousel  slide carousel-fade" data-bs-ride="carousel">
    <h1>Fotos</h1>
    <hr>
      <div class="carousel-inner active">
        <?php $i = 0;

        foreach ($info['fotos'] as $foto) :
          if ($i == 0) : ?>



            <div class="carousel-item active">
            <?php else : ?>
              <div class="carousel-item">
              <?php endif; ?>
              <img src="assets/images/anuncios/<?= $foto['url']; ?>" class="w-100" style="width: 200px; height: 300px;">

              </div>

              <?php $i++; ?>
            <?php endforeach; ?>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
            </div>

      </div>





    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <script>
    jQuery(document).ready(function() {
      // pegas as informações do input
      var telefone = jQuery('#telefone').text();
      var url = window.location.href;
      // texto generico CORPO da mensagem
      var texto = encodeURIComponent(`*Nova Solicitação*
Olá, gostaria de marcar um horário para:

*Telefone:* ${telefone}

    
 *Link:* ${url}
`);

      //constroi o link whatsapp + mensagem
      var link = 'https://wa.me/55' + telefone + '?text=' + texto;
      //troca a informação do botão *PROP
      jQuery('#btnEnviar').prop('href', link);


    });
  </script>

  <?php require 'pages/footer.php'; ?>