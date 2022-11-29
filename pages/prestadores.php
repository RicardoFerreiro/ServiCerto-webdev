<section class="pt-7 pb-0">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center mb-7">Prestadores de Serviços</h1>
      </div>
      <?php foreach ($anuncios as $anuncio) : ?>


        <div class="col-lg-4 col-md-6">
          <div class="card card-blog card-plain">
            <div class="position-relative">
              <a class="d-block blur-shadow-image">
                <?php if (!empty($anuncio['url'])) : ?>
                  <img src="assets/images/anuncios/<?= $anuncio['url']; ?>" alt="img-blur-shadow" class=" mx-auto d-block w-75 shadow img-thumbnail  border-radius-lg">
                <?php else : ?>
                  <img src="assets/images/default.jpg" style="border:0; height:10%;" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                <?php endif; ?>
              </a>
            </div>
            <div class="card-body text-center px-1 pt-2">
              <div class="bg-light p-2  position-relative z-index-2 border-radius-lg text-lg shadow">

                <h4> <?php echo $anuncio['titulo']; ?>
                  <p><?php echo utf8_encode($anuncio['categoria']); ?></p>
                </h4>
              </div>

              <div class="card-body">
                <p class="card-text text-start "> <?php echo $anuncio['descricao']; ?></p>
                <a class="btn btn-dark mt-4" href="produto.php?id=<?php echo $anuncio['id']; ?>">Saber Mais</a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>


      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <?php for ($q = 1; $q <= $total_paginas; $q++) : ?>
            <li class="page-item <?php echo ($p == $q) ? 'active' : ''; ?>"><a class="page-link" href="index.php?p=<?php echo $q; ?>"><?php echo $q; ?></a></li>
          <?php endfor; ?>
        </ul>
      </nav>


    </div>
  </div>
</section>