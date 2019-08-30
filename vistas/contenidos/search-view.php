<div class="container-fluid">
	<div class="page-header">
	  <h1 class="text-titles"><i class="zmdi zmdi-search zmdi-hc-fw"></i> BUSCAR LIBRO</h1>
	</div>
	<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora voluptatum eius porro ipsa quae voluptates officiis sapiente sunt dolorem, velit quos a qui nobis sed, dignissimos possimus!</p>
</div>

<div class="container-fluid">
	<form class="well">
		<div class="row">
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<div class="form-group label-floating">
					<span class="control-label">¿Qué libro estas buscando?</span>
					<input class="form-control" type="text" name="search_book_init" required="">
				</div>
			</div>
			<div class="col-xs-12">
				<p class="text-center">
					<button type="submit" class="btn btn-primary btn-raised btn-sm"><i class="zmdi zmdi-search"></i> &nbsp; Buscar</button>
				</p>
			</div>
		</div>
	</form>
</div>

<div class="container-fluid">
	<form class="well">
		<p class="lead text-center">Su última búsqueda  fue <strong>“Busqueda”</strong></p>
		<div class="row">
			<input class="form-control" type="hidden" name="search_book_destroy">
			<div class="col-xs-12">
				<p class="text-center">
					<button type="submit" class="btn btn-danger btn-raised btn-sm"><i class="zmdi zmdi-delete"></i> &nbsp; Eliminar búsqueda</button>
				</p>
			</div>
		</div>
	</form>
</div>

<div class="container-fluid">
	<h2 class="text-titles text-center">Categoría seleccionada</h2>
	<div class="row">
		<div class="col-xs-12">
			<div class="list-group">
				<div class="list-group-item">
					<div class="row-picture">
						<img class="circle" src="assets/book/book-default.png" alt="icon">
					</div>
					<div class="row-content">
						<h4 class="list-group-item-heading">1 - Título completo del libro</h4>
						<p class="list-group-item-text">
							<strong>Autor: </strong>Nombre Autor del libro <br>
							<a href="book-info.html" class="btn btn-primary" title="Más información"><i class="zmdi zmdi-info"></i></a>
							<a href="#!" class="btn btn-primary" title="Ver PDF"><i class="zmdi zmdi-file"></i></a>
							<a href="#!" class="btn btn-primary" title="Descargar PDF"><i class="zmdi zmdi-cloud-download"></i></a>
							<a href="book-config.html" class="btn btn-primary" title="Gestionar libro"><i class="zmdi zmdi-wrench"></i></a>
						</p>
					</div>
				</div>
				<div class="list-group-separator"></div>
				<div class="list-group-item">
					<div class="row-picture">
						<img src="assets/book/book-cover.jpg" alt="icon">
					</div>
					<div class="row-content">
						<h4 class="list-group-item-heading">2 - Título completo del libro</h4>
						<p class="list-group-item-text">
							<strong>Autor: </strong>Nombre Autor del libro <br>
							<a href="book-info.html" class="btn btn-primary" title="Más información"><i class="zmdi zmdi-info"></i></a>
							<a href="#!" class="btn btn-primary" title="Ver PDF"><i class="zmdi zmdi-file"></i></a>
							<a href="#!" class="btn btn-primary" title="Descargar PDF"><i class="zmdi zmdi-cloud-download"></i></a>
							<a href="book-config.html" class="btn btn-primary" title="Gestionar libro"><i class="zmdi zmdi-wrench"></i></a>
						</p>
					</div>
				</div>
				<div class="list-group-separator"></div>
			</div>
			<nav class="text-center">
				<ul class="pagination pagination-sm">
					<li class="disabled"><a href="javascript:void(0)">«</a></li>
					<li class="active"><a href="javascript:void(0)">1</a></li>
					<li><a href="javascript:void(0)">2</a></li>
					<li><a href="javascript:void(0)">3</a></li>
					<li><a href="javascript:void(0)">4</a></li>
					<li><a href="javascript:void(0)">5</a></li>
					<li><a href="javascript:void(0)">»</a></li>
				</ul>
			</nav>
		</div>
	</div>
</div>