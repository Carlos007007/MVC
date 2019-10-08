<div class="container-fluid">
	<div class="page-header">
	  <h1 class="text-titles"><i class="zmdi zmdi-wrench zmdi-hc-fw"></i> GESTIÓN DE LIBRO</small></h1>
	</div>
	<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora voluptatum eius porro ipsa quae voluptates officiis sapiente sunt dolorem, velit quos a qui nobis sed, dignissimos possimus!</p>
</div>

<!-- Panel actualizar libro -->
<div class="container-fluid">
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title"><i class="zmdi zmdi-refresh"></i> &nbsp; ACTUALIZAR LIBRO</h3>
		</div>
		<div class="panel-body">
			<form>
				<fieldset>
					<legend><i class="zmdi zmdi-library"></i> &nbsp; Información básica</legend>
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
						    	<div class="form-group label-floating">
								  	<label class="control-label">Código de libro *</label>
								  	<input pattern="[a-zA-Z0-9-]{1,30}" class="form-control" type="text" name="codigo-up" required="" maxlength="30">
								</div>
		    				</div>
							<div class="col-xs-12 col-sm-6">
						    	<div class="form-group label-floating">
								  	<label class="control-label">Título *</label>
								  	<input pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="text" name="titulo-up" required="" maxlength="30">
								</div>
		    				</div>
		    				<div class="col-xs-12 col-sm-6">
						    	<div class="form-group label-floating">
								  	<label class="control-label">Autor *</label>
								  	<input pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="text" name="autor-up" required="" maxlength="30">
								</div>
		    				</div>
		    				<div class="col-xs-12 col-sm-6">
						    	<div class="form-group label-floating">
								  	<label class="control-label">País</label>
								  	<input pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="text" name="pais-up" maxlength="30">
								</div>
		    				</div>
		    				<div class="col-xs-12 col-sm-6">
						    	<div class="form-group label-floating">
								  	<label class="control-label">Año</label>
								  	<input pattern="[0-9]{1,4}" class="form-control" type="text" name="year-up" maxlength="4">
								</div>
		    				</div>
		    				<div class="col-xs-12 col-sm-6">
						    	<div class="form-group label-floating">
								  	<label class="control-label">Editorial</label>
								  	<input pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="text" name="editorial-up" maxlength="30">
								</div>
		    				</div>
		    				<div class="col-xs-12 col-sm-6">
						    	<div class="form-group label-floating">
								  	<label class="control-label">Edición</label>
								  	<input pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="text" name="edicion-up" maxlength="30">
								</div>
		    				</div>
						</div>
					</div>
				</fieldset>
				<br>
				<fieldset>
					<legend><i class="zmdi zmdi-labels"></i> &nbsp; Empresa, Categoría y Proveedor</legend>
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group label-floating">
								  	<label class="control-label">Empresa</label>
								  	<select name="empresa-reg" class="form-control">
								  		<option value="">Opcion 1</option>
							        </select>
								</div>
		    				</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group label-floating">
								  	<label class="control-label">Categoría</label>
								  	<select name="categoria-reg" class="form-control">
							          	<option value="">Opcion 1</option>
							        </select>
								</div>
		    				</div>
		    				<div class="col-xs-12 col-sm-6">
								<div class="form-group label-floating">
								  	<label class="control-label">Proveedor</label>
								  	<select name="proveedor-reg" class="form-control">
							          	<option value="">Opcion 1</option>
							        </select>
								</div>
		    				</div>
						</div>
					</div>
				</fieldset>
				<br>
				<fieldset>
					<legend><i class="zmdi zmdi-money-box"></i> &nbsp; Precio, Ejemplares y Ubicación</legend>
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
						    	<div class="form-group label-floating">
								  	<label class="control-label">Precio</label>
								  	<input pattern="[0-9.]{1,7}" class="form-control" type="text" name="precio-up" maxlength="7">
								</div>
		    				</div>
		    				<div class="col-xs-12 col-sm-6">
						    	<div class="form-group label-floating">
								  	<label class="control-label">Ejemplares</label>
								  	<input pattern="[0-9]{1,3}" class="form-control" type="text" name="ejemplares-up" maxlength="3">
								</div>
		    				</div>
		    				<div class="col-xs-12">
						    	<div class="form-group label-floating">
								  	<label class="control-label">Ubicación</label>
								  	<input pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="text" name="ubicacion-up" maxlength="30">
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
								  	<label class="control-label">Resumen</label>
								  	<textarea name="resumen-up" class="form-control" rows="3"></textarea>
								</div>
		    				</div>
						</div>
					</div>
				</fieldset>
				<br>
				<fieldset>
    				<div class="col-xs-12 col-sm-6">
						<div class="form-group">
							<label class="control-label">¿El archivo PDF será descargable para los clientes?</label>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="optionsPDF" id="optionsRadios1" value="Si" checked="">
									<i class="zmdi zmdi-cloud-download"></i> &nbsp; Si, PDF descargable
								</label>
							</div>
							<div class="radio radio-primary">
								<label>
									<input type="radio" name="optionsPDF" id="optionsRadios2" value="No">
									<i class="zmdi zmdi-cloud-off"></i> &nbsp; No, PDF no descargable
								</label>
							</div>
						</div>
    				</div>
				</fieldset>
				<p class="text-center" style="margin-top: 20px;">
			    	<button type="submit" class="btn btn-success btn-raised btn-sm"><i class="zmdi zmdi-refresh"></i> &nbsp; Actualizar</button>
			    </p>
			</form>
		</div>
	</div>
</div>


<div class="container-fluid">
	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title"><i class="zmdi zmdi-attachment-alt"></i> &nbsp; AGREGAR O ACTUALIZAR ADJUNTOS</h3>
		</div>
		<div class="panel-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<form action="">
							<div class="form-group">
	    						<span class="control-label">Imágen</span>
								<input type="file" name="imagen" accept=".jpg, .png, .jpeg">
								<div class="input-group">
									<input type="text" readonly="" class="form-control" placeholder="Elija la imágen...">
									<span class="input-group-btn input-group-sm">
										<button type="button" class="btn btn-fab btn-fab-mini">
											<i class="zmdi zmdi-image-o"></i>
										</button>
									</span>
								</div>
								<span><small>Tamaño máximo de los archivos adjuntos 1MB. Tipos de archivos permitidos imágenes: PNG, JPEG y JPG</small></span>
							</div>
							<p class="text-center" style="margin-top: 20px;">
						    	<button type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-upload"></i> &nbsp; Cargar imagen</button>
						    </p>
						    <div class="RespuestaAjax"></div>
						</form>
					</div>
					<div class="col-xs-12 col-sm-6">
						<form action="">
							<div class="form-group">
	    						<span class="control-label">PDF</span>
								<input type="file" name="pdf" accept=".pdf">
								<div class="input-group">
									<input type="text" readonly="" class="form-control" placeholder="Elija el PDF...">
									<span class="input-group-btn input-group-sm">
										<button type="button" class="btn btn-fab btn-fab-mini">
											<i class="zmdi zmdi-file"></i>
										</button>
									</span>
								</div>
								<span><small>Tamaño máximo de los archivos adjuntos 10MB. Tipos de archivos permitidos: documentos PDF</small></span>
							</div>
							<p class="text-center" style="margin-top: 20px;">
						    	<button type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-upload"></i> &nbsp; Cargar PDF</button>
						    </p>
						    <div class="RespuestaAjax"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container-fluid">
	<div class="panel panel-warning">
		<div class="panel-heading">
			<h3 class="panel-title"><i class="zmdi zmdi-attachment-alt"></i> &nbsp; ELIMINAR ADJUNTOS</h3>
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th class="text-center">Nombre</th>
							<th class="text-center">Tipo</th>
							<th class="text-center">Eliminar</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-center">Nombre Archivo N/A</td>
							<td class="text-center">Imagen</td>
							<td>
								<form action="">
									<input type="hidden" name="adjunto-tipo" value="">
									<input type="hidden" name="adjunto-nombre" value="">
									<p class="text-center">
										<button class="btn btn-raised btn-danger btn-xs"><i class="zmdi zmdi-delete"></i></button>
									</p>
								</form>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="panel panel-danger">
		<div class="panel-heading">
			<h3 class="panel-title"><i class="zmdi zmdi-delete"></i> &nbsp; ELIMINAR LIBRO</h3>
		</div>
		<div class="panel-body">
			<p class="lead">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi voluptatem quas impedit, sint eos corrupti cupiditate.
			</p>
			<form>
				<input type="hidden" value="">
				<p class="text-center">
					<button class="btn btn-raised btn-danger">
						<i class="zmdi zmdi-delete"></i> &nbsp; ELIMINAR DEL SISTEMA
					</button>	
				</p>
			</form>
		</div>
	</div>
</div>