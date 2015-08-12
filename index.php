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
				<p>Somos una empresa innovadora en el negocio de los embalajes ya que siempre estamos al tanto de las novedades del giro para poder dar un mayor servicio a nuestros clientes.</p>
			</div>
			<div class="col-sm-6">
				<img class="vert-margin center-block" src="img/content/trunks.png" alt="Madera">
				<p>Nuestra Madera es nueva de pino  o encino y es previamente seleccionada para contar con tarimas que resistan la presión del peso deseado y no se tenga ningún accidente al momento de transportarla.</p>
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
					<img class="center-block" src="img/content/tarima.png" alt="Tarimas">
				</div>
				<div class="col-sm-6">
					<h2>CAJAS</h2>
					<img class="center-block" src="img/content/box.png" alt="Cajas">
				</div>				
			</div>
			<p class="center-text">Contamos con un horno propio automatizado y certificado ante la SEMARNAT conforme a la Norma 144 para esterilización de la Madera y poder exportar su producto en ella sin ningún problema al cruzar otros países, ya que globalmente esa norma la piden todos los países para su ingreso.</p>
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
				<img class="vert-margin center-block" src="img/content/ippc.png" alt="Exportación">							
			</div>
			<div class="col-sm-6">
				<h2>ENSAMBLAJE DE EMBALAJE EN SITIO</h2>
				<img class="vert-margin center-block" src="img/content/embalaje.png" alt="embalaje">							
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
					Teléfono: (614) 430.2901
					<br>
					Correo: contacto@northpallets.com
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