<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>NodalBlock</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<?php wp_head(); ?>
		
    </head>
    <body <?php body_class(); ?>>
		<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		
		<!-- HEADER -->
		<header>
			
			<button class="hamburger hamburger--spin" type="button">
			  <span class="hamburger-box">
			    <span class="hamburger-inner"></span>
			  </span>
			</button>
			
			<div class="body-overlay"></div>
			
			<div class="mobile-navigation">
				<?php 
					wp_nav_menu( array( 
						'theme_location' => 'primary-menu',
						'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s ' . $menu . '</ul>', 
					) ); 
				?>
			</div>
			
			<div class="inner clearfix">
				<!-- LOGO -->
				<div class="logo">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/nodalblock-logo.svg" alt="NodalBlock" />
					</a>
				</div>
				<!-- / LOGO -->
				
				<!-- NAVIGATION -->
				<nav class="navigation">
					<?php 
						wp_nav_menu( array( 
							'theme_location' => 'primary-menu',
							'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s ' . $menu . '</ul>', 
						) ); 
					?>
				</nav>
				<!-- / NAVIGATION -->
			</div>
			
		</header>
		<!-- / HEADER -->