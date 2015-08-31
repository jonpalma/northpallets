<?php $p = "index"; ?>
<?php include('header.php'); ?>
		
		
<!-- BEGIN BANNER -->
<div id="inicio" class="banner">
	<div class="transform-center-vertical">
		<img src="img/logo-white.png" alt="North Pallets" class="img-responsive">
		<h2 class="white">TARIMAS Y EMBALAJES DE MADERA</h2>
	</div>
</div>
<!-- END BANNER -->

<!-- BEGIN EMPRESA -->
<div id="empresa" class="empresa">
	<div class="container padding">
		<h1>EMPRESA</h1>
		<br class="vert-margin-small">
		<div class="row">
			<div class="col-sm-6 sm-border">
				<img class="vert-margin center-block" src="img/content/embalajes.png" alt="Embalajes">
				<p><span class="green-text">NorthPallets</span> somos una empresa donde nos caracterizamos por ofrecer la mejor calidad, servicio e innovación en la industria del embalaje de madera.</p>
			</div>
			<div class="col-sm-6">
				<img class="vert-margin center-block" src="img/content/trunks.png" alt="Madera">
				<p>Utilizamos materia prima de alta calidad para contar con un producto resistente, que cumpla las características  proporcionadas por nuestro cliente.</p>
			</div>
		</div>
	</div>
</div>
<!-- END EMPRESA -->

<!-- BEGIN PRODUCTOS -->
<div id="productos">
	<div class="parallax-container">
		<div class="parallax">
			<img src="img/backgrounds/2.jpg" alt="parallax">
		</div>
		<div class="container padding">
			<h1>PRODUCTOS</h1>
			<div class="row vert-margin">
				<div class="col-sm-6">
					<h2>TARIMAS</h2>
					<a href="productos.php#tarimas"><img class="center-block" src="img/content/tarima.png" alt="Tarimas"></a>
				</div>
				<div class="col-sm-6">
					<h2>CAJAS</h2>
					<a href="productos.php#cajas"><img class="center-block" src="img/content/box.png" alt="Cajas"></a>
				</div>				
			</div>
		</div>
	</div>
</div>
<!-- END PRODUCTOS -->

<!-- BEGIN SERVICIOS -->
<div id="servicios" class="servicios">
	<div class="container padding">
		<h1>SERVICIOS</h1>
		<br class="vert-margin-small">
		<div class="row">
			<div class="col-sm-6 sm-border">
				<h2>TRATAMIENTO TÉRMICO PARA EXPORTACIÓN</h2>
				<a href="servicios.php#termico"><img class="vert-margin center-block" src="img/content/ippc.png" alt="Exportación"></a>						
			</div>
			<div class="col-sm-6">
				<h2>ENSAMBLAJE DE EMBALAJE EN SITIO</h2>
				<a href="servicios.php#embalaje"><img class="vert-margin center-block" src="img/content/embalaje.png" alt="embalaje"></a>
			</div>
		</div>
	</div>
	<div class="parallax-container">
		<div class="parallax">
			<img src="img/backgrounds/4.jpg" alt="parallax">
		</div>
		<div class="container padding center-text">
			<div class="servicios-item">
				<img src="img/content/servicios/1.png" alt="Calendario">
				<p>Se calendarizan las entregas de acuerdo a sus necesidades para garantizar la entrega a tiempo.</p>
			</div>
			<div class="servicios-item">
				<img src="img/content/servicios/2.png" alt="Envio">
				<p>Enviamos a toda la república con nuestra opción de "pre-ensamblado"</p>
			</div>
			<div class="servicios-item">
				<img src="img/content/servicios/3.png" alt="Costo">
				<p>Nos ajustamos a sus necesidades de costo y damos alternativas para lograrlo.</p>
			</div>
			<div class="servicios-item">
				<img src="img/content/servicios/4.png" alt="Garantia">
				<p>Garantizamos calidad en todos nuestros productos, de no ser así le cambiamos sin costo el embalaje.</p>
			</div>
			<div class="servicios-item">
				<img src="img/content/servicios/5.png" alt="Materiales de primera calidad">
				<p>Utilizamos solo material de primera calidad de origen nacional.</p>
			</div>
		</div>
	</div>
</div>
<!-- END SERVICIOS -->

<!-- BEGIN CONTACTO  -->
<div id="contacto">
	<div class="container padding">
		<h1>CONTÁCTANOS</h1>
		<br class="vert-margin-small">
		<div class="row">
			<div class="col-sm-6 sm-border">
				<p class="contact">
					Teléfono: (614) 424.2368
					<br>
					Correo: compras@northpallets.com.mx
				</p>
			</div>
			<div class="col-sm-6">
				<form method="post" action="mailer.php" id="contact-form">
					<label for="name">Nombre</label>
					<input type="text" id="name" name="name">
					<label for="phone">Teléfono</label>
					<input type="text" id="phone" name="phone">
					<label for="email">Correo</label>
					<input type="text" id="email" name="email">
					<label for="info">¿Cómo podemos ayudarte?</label>
					<textarea id="info" cols="30" rows="4" name="info"></textarea>
					<button class="submit" id="form-submit">Enviar</button>
				</form>
				<div id="form-output"></div>
			</div>
		</div>
	</div>
</div>
<!-- END CONTACTO -->
		
<?php include('footer.php'); ?>