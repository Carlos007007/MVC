<div class="container-fluid">
	<div class="page-header">
	  <h1 class="text-titles"><i class="zmdi zmdi-book zmdi-hc-fw"></i> INFORMACIÓN LIBRO</small></h1>
	</div>
	<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora voluptatum eius porro ipsa quae voluptates officiis sapiente sunt dolorem, velit quos a qui nobis sed, dignissimos possimus!</p>
</div>

<!-- Panel info libro -->
<div class="container-fluid">
	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title"><i class="zmdi zmdi-info"></i> &nbsp; NOMBRE LIBRO</h3>
		</div>
		<div class="panel-body">
			<fieldset>
				<legend><i class="zmdi zmdi-library"></i> &nbsp; Información básica</legend>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
					    	<div class="form-group label-floating">
							  	<span>Título</span>
							  	<input class="form-control" readonly="">
							</div>
	    				</div>
	    				<div class="col-xs-12 col-sm-6">
					    	<img src="<?php echo SERVERURL; ?>vistas/assets/book/book-cover.jpg" alt="book" class="img-responsive">
	    				</div>
	    				<div class="col-xs-12 col-sm-6">
					    	<div class="container-fluid">
					    		<div class="row">
				    				<div class="col-xs-12">
								    	<div class="form-group label-floating">
										  	<span>Autor</span>
										  	<input class="form-control" readonly="">
										</div>
				    				</div>
				    				<div class="col-xs-12 col-sm-6">
								    	<div class="form-group label-floating">
										  	<span>País</span>
										  	<input class="form-control" readonly="">
										</div>
				    				</div>
				    				<div class="col-xs-12 col-sm-6">
								    	<div class="form-group label-floating">
										  	<span>Año</span>
										  	<input class="form-control" readonly="">
										</div>
				    				</div>
				    				<div class="col-xs-12 col-sm-6">
								    	<div class="form-group label-floating">
										  	<span>Editorial</span>
										  	<input class="form-control" readonly="">
										</div>
				    				</div>
				    				<div class="col-xs-12 col-sm-6">
								    	<div class="form-group label-floating">
										  	<span>Edición</span>
										  	<input class="form-control" readonly="">
										</div>
				    				</div>
					    		</div>
					    	</div>
	    				</div>
					</div>
				</div>
			</fieldset>
			<br>
			<fieldset>
				<legend><i class="zmdi zmdi-assignment-o"></i> &nbsp; Resumen del libro</legend>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<div class="form-group label-floating">
							  	<span>Resumen</span>
							  	<textarea readonly="" class="form-control" rows="3"></textarea>
							</div>
	    				</div>
					</div>
				</div>
			</fieldset>
			<br>
			<fieldset>
				<legend><i class="zmdi zmdi-download"></i> &nbsp; Descargar archivo PDF</legend>
				<p class="text-center">
					<a href="javascript:void(0)" class="btn btn-raised btn-primary">
					<i class="zmdi zmdi-cloud-download"></i> &nbsp; DESCARGAR PDF
					</a>
				</p>
			</fieldset>
		</div>
	</div>
</div>