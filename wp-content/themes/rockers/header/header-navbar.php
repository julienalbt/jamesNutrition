<?php 
$header_one_name = get_theme_mod('header_one_name','');
$header_one_text = get_theme_mod('header_one_text','');
if ( get_header_image() != '') {?>
<header class="custom-header">	
	
	<div class="wp-custom-header">
		<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
	</div>
	
	<div class="container header-content">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="">
					<?php if($header_one_name != '') { ?>
					<h1><?php echo $header_one_name;?></h1>
					<?php }  if($header_one_text != '') { ?>
					<h3><?php echo $header_one_text ;?></h3>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	
</header>
<?php } ?>

<!--Desktop Header Section-->
<header class="desktop-header">

	<!--Header Contact Widget-->
	<section class="header-widget-info sp-schemes">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-5 col-xs-12">
					<?php the_custom_logo(); ?>
					
					<?php  if ( display_header_text() ) : ?>
					<div class="site-branding-text">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
					</div>
					<?php endif; ?>
				</div>
				
				<div class="col-md-8 col-sm-7 col-xs-12">
					<div class="row">
						<?php if( is_active_sidebar('header_widget_area') ){
						dynamic_sidebar( 'header_widget_area' );
						}else{ ?>

						<div class="col-md-4 col-sm-6 col-xs-4">
							<aside id="rockers_header_topbar_info_classic_widget-2" class="widget rockers_header_topbar_info_classic_widget">
								<div class="contact-area">
									<div class="media">
										<div class="contact-icon"><i class="fa fa-map-marker"></i></div>
										<div class="media-body">
											<h4><?php _e('Chestnut Road,','rockers'); ?></h4>									
											<h5><?php _e('California - United States','rockers'); ?></h5>
										</div>
									</div>
								</div>
							</aside>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-4">
							<aside id="rockers_header_topbar_info_classic_widget-3" class="widget rockers_header_topbar_info_classic_widget">
								<div class="contact-area">
									<div class="media">
										<div class="contact-icon"><i class="fa fa-clock-o"></i></div>
											<div class="media-body">
											<h4><?php _e('08:00 - 16:30','rockers'); ?></h4>									
											<h5><?php _e('Monday - Saturday','rockers'); ?></h5>
										</div>
									</div>
								</div>
							</aside></div>
							<div class="col-md-4 col-sm-6 col-xs-4">
							<aside id="rockers_social_icon_widget-2" class="widget rockers_social_icon_widget">	
								<ul class="custom-social-icons">
									<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="googleplus" href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>

							</aside>
							</div>					
						<?php } ?>
						
					</div>				
				</div>	
				
			</div>	
		</div>
	</section>
	<!--/Header Contact Widget-->
	
	<!--Menu Section-->	
	<nav class="navbar-classic navbar navbar-default" role="navigation">
		<div class="container">		

			<div id="navbar" class="collapse navbar-collapse in">
					<?php wp_nav_menu( array(
								'theme_location' => 'primary',
								'container'  => 'nav-collapse collapse navbar-inverse-collapse',
								'menu_class' => 'nav navbar-nav navbar-right',
								'fallback_cb' => 'spicepress_fallback_page_menu',
								'walker' => new spicepress_nav_walker() 
							) ); 
					?>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>	
	<!--/Menu Section-->	

</header>

<!--Mobile Header Section-->
<header class="mobile-header">
	<!--Logo & Menu Section-->	
	<nav class="navbar-classic navbar navbar-default" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			<?php the_custom_logo(); ?>

			<?php  if ( display_header_text() ) : ?>
			<div class="site-branding-text">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; ?></p>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse">
				<span class="sr-only"><?php echo esc_attr_e('Toggle navigation','rockers'); ?></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			</div>		
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div id="navbar" class="collapse navbar-collapse in">
				<?php wp_nav_menu( array(
								'theme_location' => 'primary',
								'container'  => 'nav-collapse collapse navbar-inverse-collapse',
								'menu_class' => 'nav navbar-nav navbar-right',
								'fallback_cb' => 'spicepress_fallback_page_menu',
								'walker' => new spicepress_nav_walker() 
							) ); 
					?>

			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>	
	<!--/Logo & Menu Section-->	

	<!--Header Contact Widget-->
	<?php if( is_active_sidebar('header_widget_area') ){ ?>
	
	<section class="header-widget-info sp-schemes">
		<div class="container">
			<div class="row">
				
				<?php 
						dynamic_sidebar( 'header_widget_area' );
						
				?>
				
			</div>	
		</div>
	</section>
	<!--/Header Contact Widget-->
	
	<?php }else{?>
	
	<section class="header-widget-info sp-schemes">
		<div class="container">
		    
			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-4">
				<aside id="rockers_header_topbar_info_classic_widget-2" class="widget rockers_header_topbar_info_classic_widget">
					<div class="contact-area">
						<div class="media">
							<div class="contact-icon"><i class="fa fa-map-marker"></i></div>
							<div class="media-body">
								<h4><?php _e('Chestnut Road,','rockers'); ?></h4>		
								<h5><?php _e('California - United States','rockers'); ?></h5>
							</div>
						</div>
					</div>
				</aside>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-4">
				<aside id="rockers_header_topbar_info_classic_widget-3" class="widget rockers_header_topbar_info_classic_widget">
					<div class="contact-area">
						<div class="media">
							<div class="contact-icon"><i class="fa fa-clock-o"></i></div>
								<div class="media-body">
									<h4><?php _e('08:00 - 16:30','rockers'); ?></h4>		<h5><?php _e('Monday - Saturday','rockers'); ?></h5>
							</div>
						</div>
					</div>
				</aside></div>
				<div class="col-md-4 col-sm-6 col-xs-4">
				<aside id="rockers_social_icon_widget-2" class="widget rockers_social_icon_widget">	
					<ul class="custom-social-icons">
						<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a class="googleplus" href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
					</ul>

				</aside>
				</div>						
			</div>
					
		</div>
	</section>
	<?php } ?>

</header>
<!--/Mobile Header Section-->	
<!--/Desktop Header Section-->
<!--/Logo & Menu Section-->	

<div class="clearfix"></div>