<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 *
 * 
 *
 * @package WordPress
 * @subpackage First Mennonite
 * @since First Mennonite 1.0
 */
?>
<?php get_header(); ?>
  <body >
   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">First Mennonite Church</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            	<?php build_fmc_menu('interior-menu', 'nav navbar-nav'); ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->	
	<section id="welcome_section">
		<div class="welcome_section">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="row">	
						<!-- About text start -->
							<div class="section-title">
								<h1><?php _e( 'Sorry, the page you are looking for does not exist', 'First Mennonite'); ?></h1>
							</div>
						<!-- About text end -->	
						</div>
						<!-- About service part start--> 
						<div class="row">

								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="welcome_part wow fadeInLeft">
									<h2><?php _e("It looks like nothing was found at this location.", 'First Mennonite'); ?></h2>
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

  <?php get_footer(); ?>