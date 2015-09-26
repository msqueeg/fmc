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

function register_fmc_menus() {
	register_nav_menus(
		array(
			'front-menu' => __( 'Front Page Menu' ),
			'interior-menu' => __( 'Interior Page Menu' )
			));
}

function build_fmc_menu($menu_name, $menu_class) {
	if(( $locations = get_nav_menu_locations()) && isset($locations[ $menu_name ])) {
		$menu = wp_get_nav_menu_object( $locations[ $menu_name ]);

		$menu_items = wp_get_nav_menu_items($menu->term_id);
		$menu_list = '<ul id="menu-'.$menu_name.'" class="'.$menu_class.'">';

		foreach ( (array) $menu_items as $key => $menu_item) {
			$menu_list .= '<li><a href="'.$menu_item->url.'">'.$menu_item->title.'</a></li>';
		}
		$menu_list .= '</ul>';
	} else {
		$menu_list = '<ul class="nav navbar-nav navbar-right mainnav"><li>Menu "'.$menu_name.'" not defined.</li></ul>';
	}

	echo $menu_list;
}


add_action( 'widgets_init', 'fmc_widgets_init');
add_action('init', 'register_fmc_menus');
?>