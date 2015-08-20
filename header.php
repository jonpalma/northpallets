<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>North Pallets</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">		
		<link rel="stylesheet" href="css/lightbox.css">
		
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body <?php echo ($p=='index')? 'data-spy="scroll" data-target=".navbar-nav"':'' ?>>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-66559303-1', 'auto');
		  ga('send', 'pageview');

		</script>
		
		<!-- BEGIN NAVBAR -->
		<nav class="navbar navbar-pallets">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsible-nav" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand smoothScroll" href="#inicio"><img src="img/logo-name.png" alt="North Pallets"></a>
				</div>
				<div id="collapsible-nav" class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo ($p=='index')? '#inicio':'index.php' ?>" class="smoothScroll">Inicio</a></li>
						<li <?php echo ($p=='empresa')? 'class="active"':'' ?>><a href="#empresa" class="smoothScroll" id="empresa-link">Empresa</a></li>
						<li <?php echo ($p=='productos')? 'class="active"':'' ?>><a href="#productos" class="smoothScroll" id="productos-link">Productos</a></li>
						<li <?php echo ($p=='servicios')? 'class="active"':'' ?>><a href="#servicios" class="smoothScroll" id="servicios-link">Servicios</a></li>
						<li><a href="<?php echo ($p=='index')? '':'index.php' ?>#contacto" class="smoothScroll">Contáctanos</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->