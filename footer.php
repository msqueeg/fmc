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
									<div id="show_contact_msg"></div>
								<!-- Contact Form Start -->
									<form method="post" id="contact_form" action="contact.php">
										<input type="text" id="contact_name" name="name" class="form-control contact_input_box wow fadeInUp" placeholder="Name" required/>
										<input type="email" id="contact_email" name="email" class="form-control contact_input_box wow fadeInUp" placeholder="E-mail" required/>
										<textarea id="contact_text" name="message" rows="5" cols="30" class="form-control contact_input_box wow fadeInUp" placeholder="Message" required></textarea>
										<button type="submit" class="btn btn-primary contact_button wow fadeInUp"> <i class="fa fa-send-o"></i>  Send message</button>
									</form>
								<!-- Contact Form End -->
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
	<script>
	/* ==============================================
	Ajax Submiting For Email Contact Form.
	=====================================================================*/	
	$("#contact_form").submit(function(e)
	{
	$('#show_contact_msg').html('<div class=gen>Submiting..</div>');
	var username = $('#contact_name').val();
	var useremail = $('#contact_email').val();
	var commenttext = $('#contact_text').val();
		var formURL = $(this).attr("action");
		var data = {
					username:username,
					useremail:useremail,
					commenttext:commenttext,
				   }
		$.ajax(
		{
			url : formURL,
			type: "POST",
			data : data,
			
		 success: function (res) {
								 if(res=='1'){
									$('#show_contact_msg').html('<div class=gen>Thank you very much, We will notify you when we lunch</div>');
								 }
					
								 if(res=='5'){
								 $('#show_contact_msg').html('<div class=err>Please enter a valid email address</div>');
								 }
							}
		});
		e.preventDefault();	//STOP default action
	});
	</script>
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
  </body>
</html>