<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../templates/bootstrap_5/css/bootstrap.css">
</head>
<body>

	<header>
		<!-- ZONA DE MENU -->
		<?php include "include/menup.html"; ?>
		
          Hola que cuentas gas                                              

	</header>

	<!-- ZONA DE CONTENIDO -->

    <!-- SLIDER1-->


	<div class="container">
    
	<div class="row">

		<div class="col-md-12">


			<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
			  <div class="carousel-inner">
			    	<div class="carousel-item active">
			      		<img src="../imgs/1.jpg" class="d-block w-100" alt="..." width="200" height="500">
			    	</div>
			    	<div class="carousel-item">
			      		<img src="../imgs/2.jpg" class="d-block w-100" alt="..." width="200" height="500">
			    	</div>
			    	<div class="carousel-item">
			      		<img src="../imgs/3.jpg" class="d-block w-100" alt="..." width="200" height="500">
			    	</div>
			 	</div>
			  	<button class="carousel-control-prev" type="button" data-bs-target="				#carouselExampleControls" data-bs-slide="prev">
			    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    	<span class="visually-hidden">Previous</span>
			  	</button>
			  	<button class="carousel-control-next" type="button" data-bs-target="				#carouselExampleControls" data-bs-slide="next">
			    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
			    	<span class="visually-hidden">Next</span>
			  	</button>
			</div>
		</div>	
	</div>
</div><br> <br>
    <!-- Accede a +benedicios-->
    <div class="container">
		<div class="row">
			<div align="center" class="col-md-12">
			
			Accede a +Beneficios <br>

			Inicia Sección y recibe más beneficios, consulta tu perfil <br>
			 y acumula puntos que podras redimir en tus compras.
		</div>
       <div class="col-md-4">
            <button type="button" class="btn btn-danger">Registrate</button>
        </div>
		<div  class="col-md-4">
            <button type="button" class="btn btn-danger">Perfil</button>
        </div>
		<div class="col-md-4" >
            <button type="button" class="btn btn-danger">Iniciar Sección</button>
        </div>
			</div>
		</div>
	</div>

    <!-- Productos y servicios--> 
    <div class="container">
		<br><H1 align="center">Productos y servicios</h1>
		<div class="row">
			<div class="col-md-6">
				<img src="../imgs/asesoria online.png" alt="" width="" height="">
				<br> <h2>Soporte Técnico Online</H2><br>
				<a class="btn btn-primary" href="#" role="button">Detalles</a>
			</div>
			<div class="col-md-6">
			<img src="../imgs/revisión tecnica.jpg" alt="" width="" height="">
				<br> <h2>Revisión técnica</H2><br>
				<a class="btn btn-primary" href="#" role="button">Detalles</a>
			</div>		
		</div>
		<div class="row">
			<div class="col-md-6">
			<img src="../imgs/polizas.jpg" alt="" width="" height="">
				<br> <h2>Polizas</H2><br>
				<a class="btn btn-primary" href="#" role="button">Detalles</a>
			</div>
            <div class="col-md-6">
			<br><img src="../imgs/accesorios.jpg" alt="" width="450" height="450">
				<br> <h2>Accesorios</H2><br>
				<a class="btn btn-primary" href="#" role="button">Detalles</a>
			</div>		
		</div>
	</div>

	<!-- Bienvenido al Blog--> 
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<br><img src="../imgs/blog.jpg" alt="" width="800" height="800">
			<br><h1>Bienvenido al Blog</h1>
			<br><h2>Conoce experiencias, tips y técnicas para mejorar tu relación con la tecnología.</H2>
			</div>
		</div>
	</div>


    <!-- SLIDER2--> 
    <div class="container">
		<div class="row">
			<div class="col-md-12">
			</div>
		</div>
	</div>

    <!-- CONOCENOS--> 
    <div class="container">
		<div class="row">
			<div class="col-md-3"></div>
            <div class="col-md-3"></div>
			<div class="col-md-3"></div>
            <div class="col-md-3"></div>
			</div>
		</div>
	</div>

    <!-- PIE DE PAGINA-->

    <?php include "include/pie.html"; ?>



		

	

	<script type="text/javascript" src="../templates/bootstrap_5/js/bootstrap.js"></script>
</body>
</html>

