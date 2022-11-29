<?php require 'pages/header.php'; ?>
<?php
require 'classes/categorias.class.php';
require 'classes/anuncios.class.php';
require 'classes/usuarios.class.php';

$a = new Anuncios();
$u = new Usuarios();
$c = new Categorias();


$filtros = array('categoria' => '', 'preco' => '', 'estado' => '');
if (isset($_GET['filtros']) && !empty($_GET['filtros'])) {
	$filtros = $_GET['filtros'];
}

$total_anuncios = $a->getTotalAnuncios($filtros);
$total_usuarios = $u->getTotalUsuarios();

$p = 1;
if (isset($_GET['p']) && !empty($_GET['p'])) {
	$p = addslashes($_GET['p']);
}
$por_pagina = 10;
$total_paginas = ceil($total_anuncios / $por_pagina);

$anuncios = $a->getUltimosAnuncios($p, $por_pagina, $filtros);

$categorias = $c->getLista();
?>
<div class="container-fluid">
	<div class="page-header min-vh-50" style="background-image: url(assets/images/prestadores.png); object-fit: cover; object-position: 100% 0;">
		<span class="mask bg-secondary opacity-8"></span>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mx-auto text-white text-center">
					<h2 class="text-white">Nós temos hoje <?php echo $total_anuncios; ?> Serviços.</h2>
					<p class="lead">Encontre entre mais de <?php echo $total_usuarios; ?> de prestadores, enquanto novos são cadastrados diariamente</p>
					<button type="submit" class="btn bg-gradient-success mt-3 mb-0">Ver Mais</button>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<form method="GET">
			<div class="row bg-white shadow mt-n5 border-radius-lg pb-4 p-3 mx-sm-0 mx-1 position-relative">
				<div class="col-lg-3 mt-2">
					<div class="input-group">
						<input class="form-control" placeholder="Procurar por" aria-label="Search for" type="text">
					</div>
				</div>
				<div class="col-lg-3 mt-2">
					<div class="input-group">
						<select id="preco" name="filtros[preco]" class="form-select">
							<option>Preço</option>
							<option value="0-50" <?php echo $filtros['preco'] == '0-50' ? 'selected="selected"' : ''; ?>>R$ 0 - 50</option>
							<option value="51-100" <?php echo $filtros['preco'] == '51-100' ? 'selected="selected"' : ''; ?>>R$ 51 - 100</option>
							<option value="101-200" <?php echo $filtros['preco'] == '101-200' ? 'selected="selected"' : ''; ?>>R$ 101 - 200</option>
							<option value="201-500" <?php echo $filtros['preco'] == '201-500' ? 'selected="selected"' : ''; ?>>R$ 201 - 500</option>
						</select>
					</div>
				</div>
				<div class="col-lg-3 mt-2">
					<div class="input-group">
						<select id="categoria" name="filtros[categoria]" class="form-select" aria-label="Category" placeholder="Category">
							<option selected>Categorias</option>
							<?php foreach ($categorias as $categoria) : ?>
								<option value="<?php echo $categoria['id'] ?>" <?php echo ($categoria['id'] == $filtros['categoria']) ? 'selected="selected"' : ''; ?>><?php echo utf8_encode($categoria['nome']); ?></option>
							<?php endforeach; ?>
						</select>
						
					</div>
				</div>
				<div class="col-lg-3 mt-2">
			<button type="submit"  value="p" class="btn bg-gradient-success w-100 mb-0">Procurar</button>
		</div>
		</form>
		
		<!-- <div class="col-md-12 text-center">
			<div class="btn btn-dark mt-4 mb-0">
				Pintor
			</div>
			<div class="btn shadow-none mt-4 mb-0">
				Diárista
			</div>
			<div class="btn shadow-none mt-4 mb-0">
				Marceneiro
			</div>

		</div> -->
	</div>
</div>
<?php include_once './pages/prestadores.php' ?>

<?php require 'pages/footer.php'; ?>