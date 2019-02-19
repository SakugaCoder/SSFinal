<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="icon" type="icon/ico" href="../img/logo.ico">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/searchStyle.css">
	<link rel="stylesheet" href="../css/main.css">
	<style>
		body{
			padding-top:50px;
		}
	</style>
	<title>Buscar</title>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarMenu">
					<span class="sr-only">Navegacion toggle</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="../index.html" class="navbar-brand"><img src="../img/logo.png" alt="Logo" width="35px" height="50px"></a>
			</div>
			<div class="collapse navbar-collapse" id="navbarMenu">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="btn n-btn dropdown-toggle" data-toggle="dropdown">Temas de ciencia <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li class="dropdown-header">Ciencias Experimentales</li>
							<li class="divider"></li>
							<li role="presentation"><a href="../resurces/Articulos/Astronomia/main.html">Astronom&iacute;a</a></li>
							<li role="presentation"><a href="../resurces/Articulos/Biologia/main.html">Biolog&iacute;a</a><li>
							<li role="presentation"><a href="../resurces/Articulos/Ecologia/main.html">Ecolog&iacute;a</a></li>
							<li role="presentation"><a href="../resurces/Articulos/Fisica/main.html">F&iacute;sica</a></li>
							<li role="presentation"><a href="../resurces/Articulos/Quimica/main.html">Qu&iacute;mica</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="../resurces/Muy Interesante/index.html" class="btn n-btn" type="button">Muy Interesante <img src="../img/muyInteresanteLogoS.png" class="mi-logo" alt="Muy Interesante Logo"></a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="resurces/Patrulla Ecologica/index.html" class="btn" target="_blank" type="button"><span class="label label-success mi-button">Patrulla Ecolog&iacute;ca</span></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
	<h3>
	<?php
	$busqueda = $_GET['search'];
	echo "Busqueda <strong>".$busqueda."</strong>:";
	$conectar = mysqli_connect("localhost","root","","ciencias_experimentales");
	$consulta_sql = "SELECT * FROM articulos WHERE title LIKE '%".$busqueda."%' OR description LIKE '%".$busqueda."%'";
	$consulta = mysqli_query($conectar,$consulta_sql);
	$number_articles = mysqli_num_rows($consulta);
	if($number_articles > 0 ){
		while($dato = mysqli_fetch_assoc($consulta)){ ?>
			<div class="searchResult">
				<a href="<?php echo $dato['url']; ?>"><h4><?php echo $dato['title'];?></h4></a><p class="text-success"><?php echo $dato['url-main'] ?></p>
				<p><?php echo $dato['description']; ?></p><hr>
			</div>
	<?php }
	}
	 ?>
	</h3>
	</div>
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.js"></script>
</body>
</html>