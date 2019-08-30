<div class="container-fluid">
	<div class="page-header">
	  <h1 class="text-titles"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Administración <small>NUEVO LIBRO</small></h1>
	</div>
	<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora voluptatum eius porro ipsa quae voluptates officiis sapiente sunt dolorem, velit quos a qui nobis sed, dignissimos possimus!</p>
</div>

<!-- Panel nuevo libro -->
<div class="container-fluid">
	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title"><i class="zmdi zmdi-plus"></i> &nbsp; NUEVO LIBRO</h3>
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
								  	<input pattern="[a-zA-Z0-9-]{1,30}" class="form-control" type="text" name="codigo-reg" required="" maxlength="30">
								</div>
		    				</div>
							<div class="col-xs-12 col-sm-6">
						    	<div class="form-group label-floating">
								  	<label class="control-label">Título *</label>
								  	<input pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="text" name="titulo-reg" required="" maxlength="30">
								</div>
		    				</div>
		    				<div class="col-xs-12 col-sm-6">
						    	<div class="form-group label-floating">
								  	<label class="control-label">Autor *</label>
								  	<input pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="text" name="autor-reg" required="" maxlength="30">
								</div>
		    				</div>
		    				<div class="col-xs-12 col-sm-6">
						    	<div class="form-group label-floating">
								  	<label class="control-label">País</label>
								  	<input pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="text" name="pais-reg" maxlength="30">
								</div>
		    				</div>
		    				<div class="col-xs-12 col-sm-6">
						    	<div class="form-group label-floating">
								  	<label class="control-label">Año</label>
								  	<input pattern="[0-9]{1,4}" class="form-control" type="text" name="year-reg" maxlength="4">
								</div>
		    				</div>
		    				<div class="col-xs-12 col-sm-6">
						    	<div class="form-group label-floating">
								  	<label class="control-label">Editorial</label>
								  	<input pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="text" name="editorial-reg" maxlength="30">
								</div>
		    				</div>
		    				<div class="col-xs-12 col-sm-6">
						    	<div class="form-group label-floating">
								  	<label class="control-label">Edición</label>
								  	<input pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="text" name="edicion-reg" maxlength="30">
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
								  	<select name="categoria-reg" class="form-control">
							          	<option value="empresa1">Empresa 1</option>
							          	<option value="empresa2">Empresa 2</option>
							        </select>
								</div>
		    				</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group label-floating">
								  	<label class="control-label">Categoría</label>
								  	<select name="categoria-reg" class="form-control">
							          	<option value="categoria1">Categoría 1</option>
							          	<option value="categoria2">Categoría 2</option>
							        </select>
								</div>
		    				</div>
		    				<div class="col-xs-12 col-sm-6">
								<div class="form-group label-floating">
								  	<label class="control-label">Proveedor</label>
								  	<select name="proveedor-reg" class="form-control">
							          	<option value="proveedor">Proveedor 1</option>
							          	<option value="proveedor">Proveedor 2</option>
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
								  	<input pattern="[0-9.]{1,7}" class="form-control" type="text" name="precio-reg" maxlength="7">
								</div>
		    				</div>
		    				<div class="col-xs-12 col-sm-6">
						    	<div class="form-group label-floating">
								  	<label class="control-label">Ejemplares</label>
								  	<input pattern="[0-9]{1,3}" class="form-control" type="text" name="ejemplares-reg" maxlength="3">
								</div>
		    				</div>
		    				<div class="col-xs-12">
						    	<div class="form-group label-floating">
								  	<label class="control-label">Ubicación</label>
								  	<input pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="text" name="ubicacion-reg" maxlength="30">
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
								  	<textarea name="resumen-reg" class="form-control" rows="3"></textarea>
								</div>
		    				</div>
						</div>
					</div>
				</fieldset>
				<br>
				<fieldset>
					<legend><i class="zmdi zmdi-attachment-alt"></i> &nbsp; Imágen y archivo PDF</legend>
					<div class="col-xs-12">
    					<div class="form-group">
    						<span class="control-label">Imágen</span>
							<input type="file" name="imagen-reg" accept=".jpg, .png, .jpeg">
							<div class="input-group">
								<input type="text" readonly="" class="form-control" placeholder="Elija la imágen...">
								<span class="input-group-btn input-group-sm">
									<button type="button" class="btn btn-fab btn-fab-mini">
										<i class="zmdi zmdi-attachment-alt"></i>
									</button>
								</span>
							</div>
							<span><small>Tamaño máximo de los archivos adjuntos 5MB. Tipos de archivos permitidos imágenes: PNG, JPEG y JPG</small></span>
						</div>
    				</div>
    				<div class="col-xs-12">
    					<div class="form-group">
    						<span class="control-label">PDF</span>
							<input type="file" name="pdf-reg" accept=".pdf">
							<div class="input-group">
								<input type="text" readonly="" class="form-control" placeholder="Elija el PDF...">
								<span class="input-group-btn input-group-sm">
									<button type="button" class="btn btn-fab btn-fab-mini">
										<i class="zmdi zmdi-attachment-alt"></i>
									</button>
								</span>
							</div>
							<span><small>Tamaño máximo de los archivos adjuntos 5MB. Tipos de archivos permitidos: documentos PDF</small></span>
						</div>
    				</div>
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
			    	<button type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
			    </p>
			</form>
		</div>
	</div>
</div>