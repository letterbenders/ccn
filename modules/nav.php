<section class="main-nav no-padding">
	<div class="container">
		<div class="row">
				<nav class="navbar navbar-default" role="navigation">
				  <div class="container">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="nav-button collapsed" data-toggle="collapse" data-target="#main-nav">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				     
				      	<a href="<?php echo get_option('home'); ?>/" class="navbar-brand"><img src="<?php bloginfo('template_directory')?>/assets/img/CCN_logo.png" alt=""></a>
				     
				    </div>

				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="main-nav">

				        	<?php wp_nav_menu(array('menu' => 'main_nav', 'menu_class' => 'nav navbar-nav',)); ?>
				      				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
		</div><!-- /row -->
	</div><!-- /container -->
</section> <!-- nav -->  	