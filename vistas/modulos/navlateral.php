<section class="full-box cover dashboard-sideBar">
	<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
	<div class="full-box dashboard-sideBar-ct">
		<!--SideBar Title -->
		<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
			<?php echo COMPANY; ?> <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
		</div>
		<!-- SideBar User info -->
		<div class="full-box dashboard-sideBar-UserInfo">
			<figure class="full-box">
				<img src="<?php echo SERVERURL; ?>vistas/assets/avatars/Male1Avatar.png" alt="UserIcon">
				<figcaption class="text-center text-titles">User name</figcaption>
			</figure>
			<ul class="full-box list-unstyled text-center">
				<li>
					<a href="<?php echo SERVERURL; ?>mydata//" title="Mis datos">
						<i class="zmdi zmdi-account-circle"></i>
					</a>
				</li>
				<li>
					<a href="<?php echo SERVERURL; ?>myaccount/" title="Mi cuenta">
						<i class="zmdi zmdi-settings"></i>
					</a>
				</li>
				<li>
					<a href="#" title="Salir del sistema" class="btn-exit-system">
						<i class="zmdi zmdi-power"></i>
					</a>
				</li>
			</ul>
		</div>
		<!-- SideBar Menu -->
		<ul class="list-unstyled full-box dashboard-sideBar-Menu">
			<li>
				<a href="<?php echo SERVERURL; ?>home/">
					<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Dashboard
				</a>
			</li>
			<li>
				<a href="#!" class="btn-sideBar-SubMenu">
					<i class="zmdi zmdi-case zmdi-hc-fw"></i> Administración <i class="zmdi zmdi-caret-down pull-right"></i>
				</a>
				<ul class="list-unstyled full-box">
					<li>
						<a href="<?php echo SERVERURL; ?>company/"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> Empresa</a>
					</li>
					<li>
						<a href="<?php echo SERVERURL; ?>category/"><i class="zmdi zmdi-labels zmdi-hc-fw"></i> Categorías</a>
					</li>
					<li>
						<a href="<?php echo SERVERURL; ?>provider/"><i class="zmdi zmdi-truck zmdi-hc-fw"></i> Proveedores</a>
					</li>
					<li>
						<a href="<?php echo SERVERURL; ?>book/"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Nuevo libro</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#!" class="btn-sideBar-SubMenu">
					<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Usuarios <i class="zmdi zmdi-caret-down pull-right"></i>
				</a>
				<ul class="list-unstyled full-box">
					<li>
						<a href="<?php echo SERVERURL; ?>admin/"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Administradores</a>
					</li>
					<li>
						<a href="<?php echo SERVERURL; ?>client/"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i> Clientes</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="<?php echo SERVERURL; ?>catalog/">
					<i class="zmdi zmdi-book-image zmdi-hc-fw"></i> Catalogo
				</a>
			</li>
		</ul>
	</div>
</section>