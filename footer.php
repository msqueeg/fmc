<!-- Contact Section Start -->  
	<section id="contact_section">
		<div class="contact_section">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="row">
						<?php if(is_active_sidebar('footer_contact_1')): ?>
						<?php dynamic_sidebar('footer_contact_1'); ?>
						<?php else: ?>
						<!-- Default Greeking -->
							<div class="section-title">
								<h2>Lorem Ipsum</h2>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							</div>
						<?php endif; ?>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<div class="address_part">
								<?php if(is_active_sidebar('footer_address')): ?>
								<?php dynamic_sidebar('footer_address'); ?>
								<?php else: ?>
								<!-- Default Greeking -->
									<div class="address">
										<i class="fa fa-map-marker"></i> Someplace <br/> 1234 5th St Southeast <br/> Somewhere, OH 44707
									</div>
								<?php endif; ?>
								<?php if(is_active_sidebar('footer_phone')): ?>
								<?php dynamic_sidebar('footer_phone'); ?>
								<?php else: ?>
								<!-- Default Greeking -->
									<div class="phone">
										<i class="fa fa-phone"></i> (000) 000 - 0000
									</div>
								<?php endif; ?>
								<?php if(is_active_sidebar('footer_email')): ?>
								<?php dynamic_sidebar('footer_email'); ?>
								<?php else: ?>
								<!-- Default Greeking -->
									<div class="email">
										<i class="fa fa-envelope-o"></i> user@example.com
									</div>
								<?php endif; ?>
							</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								
								<div class="contact_form">
									<?php echo do_shortcode('[contact-form-7 id="26" title="Contact form 1" html_id="contact_form"]'); ?>
								</div>
							</div>
					</div>
				</div>
			</div>
			</div>	
		</div>	
	</section>
  <!-- Contact Section End -->	
   <!--Core js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.smooth-scroll.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/wow.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.nicescroll.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.countdown.min.js"></script>
	<!--common script init for all pages-->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
<?php if(is_front_page()): ?>
	<script type="text/javascript">
	//Google maps
	var map;
	var marker;
	var fmcLatLong = {lat: 40.792818 , lng: -81.353184 };
	function initMap() {
		map = new google.maps.Map(document.getElementById('map'), {
			center: fmcLatLong,
			zoom: 18,
			zoomControl: true,
		    zoomControlOptions: {
		      style: google.maps.ZoomControlStyle.SMALL
		    }
		});

		marker = new google.maps.Marker({
			position: fmcLatLong,
			title: 'First Mennonite Church',
			map: map
		});
	}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
        async defer></script>
<?php endif; ?>
  </body>
</html>