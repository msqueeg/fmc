<?php
/**
*
* Register sidebar and widget areas
*
*
**/
function fmc_widgets_init() {
	register_sidebar(array(
		'name'	=> 'Home Join Us Text',
		'id'	=> 'home_join_1',
		'before_widget'	=> '<div class="section-title">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h2>',
		'after_title' => '</h2>'
		));

	register_sidebar(array(
		'name'	=> 'Footer Contact Us Text',
		'id'	=> 'footer_contact_1',
		'before_widget'	=> '<div class="section-title">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h2>',
		'after_title' => '</h2>'
		));

	register_sidebar(array(
		'name'	=> 'Footer Address Text',
		'id'	=> 'footer_address',
		'before_widget'	=> '<div class="address">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<i class="fa fa-map-marker"></i> ',
		'after_title' => ''
		));
	register_sidebar(array(
		'name'	=> 'Footer Phone Text',
		'id'	=> 'footer_phone',
		'before_widget'	=> '<div class="phone">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<i class="fa fa-phone"></i> ',
		'after_title' => ''
		));
	register_sidebar(array(
		'name'	=> 'Footer Email Text',
		'id'	=> 'footer_email',
		'before_widget'	=> '<div class="email">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<i class="fa fa-envelope-o"></i> ',
		'after_title' => ''
		));
}

add_action( 'widgets_init', 'fmc_widgets_init');

?>