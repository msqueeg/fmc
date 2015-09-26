<?php
/**
 * The homepage template file
 *
 * This is a static, responsive homepage for First Mennonite
 * 
 *
 * @package WordPress
 * @subpackage First Mennonite
 * @since First Mennonite 1.0
 */
?>
<?php get_header(); ?>
  <body >
  <!-- Header Section Start -->
	<header id="header_part">
		<div class="header_part" id="head">
			<div class="overlay">
				<div class="start_part">	
						<div class="container">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="row">
										<!-- Logo Start -->
										<div class="site_logo">
											<a href="#" title=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fmc_sig_white_trans.png" alt="" title=""/></a>
										</div>
										<!-- Logo End-->
										<!-- Site Title start-->	
										<div class="site_title">
											<h1>First Mennonite Church</h1>
											<p>We are a community centered in personal faith in Jesus Christ and <br> the daily practice of peace-making, reconciliation and Justice &#8596; Righteousness.</p><p>Join us <a href="#location">next Sunday at 9:30 am.</a></p>
										</div>
										<!-- Site Title end-->
										<!-- Countdown start -->
										<div class="countdown wow bounceInUp">
											<div class="defaultCountdown"></div>
										</div>
										<!-- Countdown end-->
									</div>
								</div>
							</div>
						</div>
				</div>	
				<!-- Menu Start -->
				<div class="menu_area" id="stick_menu">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">
										<div class="collapse navbar-collapse mainnavmenu" id="bs-example-navbar-collapse-1">
										<div id="menu-center">
										<?php build_fmc_menu('front-menu', 'nav navbar-nav navbar-right mainnav'); ?>
										</div>
										</div>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<!-- Menu End-->
			</div>
		</div>	
	</header>
  <!-- Header Section End -->		
  <!-- About Section Start -->		
	<section id="welcome_section">
		<div class="welcome_section">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="row">	
						<!-- About text start -->
							<div class="section-title">
								<?php $title_query = new WP_Query( array( 'pagename' => 'looking-for-a-new-church-home' ) ); 
								while($title_query->have_posts()){
									$title_query->the_post();
									echo '<h2>'.get_the_title().'</h2>';
									echo get_the_content();
								}
								wp_reset_postdata();
								?>
							</div>
						<!-- About text end -->	
						</div>
						<!-- About service part start--> 
						<div class="row">

								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="welcome_part wow fadeInLeft">
										<?php $welcome_query = new WP_Query( array( 'pagename' => 'our-identity-vision'));
										while($welcome_query->have_posts()){
											$welcome_query->the_post();
											echo '<h2>'.get_the_title().'</h2>';
											echo get_the_content();
										}
										wp_reset_postdata();
										?>
									</div>
								</div>
							
						</div>	
						<!-- About service part end--> 
					</div>
				</div>
			</div>
		</div>
	</section>
  <!-- About Section End -->		
  <!-- Subscriber Section Start --> 
	<section id="location">
		<div class="email_subscribe_section" >
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					
						<?php if(is_active_sidebar('home_join_1')): ?>
						<?php dynamic_sidebar('home_join_1'); ?>
						<?php else: ?>
						<!-- Default Greeking -->
							<div class="section-title">
								<h2>Lorem Ipsum</h2>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>	
	</section>
  <!-- Subscriber Section End -->
  <!-- Google Map -->
  <section>
  	<div id="map"></div>
  </section>
  <?php get_footer(); ?>