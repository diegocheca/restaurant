<!doctype html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Lista de productos</title>
		<!-- CSRF Stuff -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		<!-- Styles -->

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   </head>
<body>
	<div class="container" id='app'>




	</div>		

<div class="container">
	<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
	  <li class="nav-item">
		<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Sin hacer</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Ya hechos</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Cancelados</a>
	  </li>
	</ul>
	<div class="tab-content" id="pills-tabContent">
		<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
			<div class="row">
				<div class="col-sm">
					<div class="card bg-dark text-white">
						<img class="card-img" src="https://www.laespanolaaceites.com/wp-content/uploads/2019/06/empanadas-arabes-1080x671.jpg" alt="Card image">
						<div class="card-img-overlay">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<p class="card-text">Last updated 3 mins ago</p>
						</div>
					</div>
				</div>
				<div class="col-sm">
					<div class="card bg-dark text-white">
						<img class="card-img" src="https://www.laespanolaaceites.com/wp-content/uploads/2019/06/empanadas-arabes-1080x671.jpg" alt="Card image">
						<div class="card-img-overlay">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<p class="card-text">Last updated 3 mins ago</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
			<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
				<div class="row">
					<div class="col-sm">
						<div class="card bg-dark text-white">
							<img class="card-img" src="https://infonegocios.info/uploads/apertura-lomo-lomo-general-paz-1-cba.jpg" alt="Card image">
							<div class="card-img-overlay">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								<p class="card-text">Last updated 3 mins ago</p>
							</div>
						</div>
					</div>
					<div class="col-sm">
						<div class="card bg-dark text-white">
							<img class="card-img" src="https://infonegocios.info/uploads/apertura-lomo-lomo-general-paz-1-cba.jpg" alt="Card image">
							<div class="card-img-overlay">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								<p class="card-text">Last updated 3 mins ago</p>
							</div>
						</div>
					</div>
					<div class="col-sm">
						<div class="card bg-dark text-white">
							<img class="card-img" src="https://infonegocios.info/uploads/apertura-lomo-lomo-general-paz-1-cba.jpg" alt="Card image">
							<div class="card-img-overlay">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								<p class="card-text">Last updated 3 mins ago</p>
							</div>
						</div>
					</div>
					<div class="col-sm">
						<div class="card bg-dark text-white">
							<img class="card-img" src="https://infonegocios.info/uploads/apertura-lomo-lomo-general-paz-1-cba.jpg" alt="Card image">
							<div class="card-img-overlay">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								<p class="card-text">Last updated 3 mins ago</p>
							</div>
						</div>
					</div>
					<div class="col-sm">
						<div class="card bg-dark text-white">
							<img class="card-img" src="https://infonegocios.info/uploads/apertura-lomo-lomo-general-paz-1-cba.jpg" alt="Card image">
							<div class="card-img-overlay">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								<p class="card-text">Last updated 3 mins ago</p>
							</div>
						</div>
					</div>
					<button class="btn btn-primary">Ver más</button>
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
			<div class="row">
				<div class="col-sm">
					<div class="card bg-dark text-white">
						<img class="card-img" src="https://www.lasirena.es/35273-product_ficha/lomo-de-merluza-austral.jpg" alt="Card image">
						<div class="card-img-overlay">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<p class="card-text">Last updated 3 mins ago</p>
						</div>
					</div>
				</div>
				<div class="col-sm">
					<div class="card bg-dark text-white">
						<img class="card-img" src="https://www.lasirena.es/35273-product_ficha/lomo-de-merluza-austral.jpg" alt="Card image">
						<div class="card-img-overlay">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<p class="card-text">Last updated 3 mins ago</p>
						</div>
					</div>
				</div>
				<div class="col-sm">
					<div class="card bg-dark text-white">
						<img class="card-img" src="https://www.lasirena.es/35273-product_ficha/lomo-de-merluza-austral.jpg" alt="Card image">
						<div class="card-img-overlay">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<p class="card-text">Last updated 3 mins ago</p>
						</div>
					</div>
				</div>
				<button class="btn btn-primary">Ver más</button>
			</div>
		</div>
	</div>

	
</div>		
<!--<div class="card mb-3">
  <img class="card-img-top" src="https://www.laespanolaaceites.com/wp-content/uploads/2019/06/empanadas-arabes-1080x671.jpg" alt="Card image cap">
  <div class="card-body">
	<h5 class="card-title">Card title</h5>
	<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
	<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>-->
<!--<div class="card bg-dark text-white">
  <img class="card-img" src="https://www.laespanolaaceites.com/wp-content/uploads/2019/06/empanadas-arabes-1080x671.jpg" alt="Card image">
  <div class="card-img-overlay">
	<h5 class="card-title">Card title</h5>
	<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
	<p class="card-text">Last updated 3 mins ago</p>
  </div>
</div>
-->
 <script src="{{ asset('js/app.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
