<?php

function custom_post_type()
	{
$support  = array(
			'title',
			'editor',
		'excerpt',
		'revisions',
			'page-attributes',
			'post-formats',
			'tag',
			'category'
		);
$supports  = array(
			'title',
			'editor',
		'excerpt',
		'revisions',
			'page-attributes',
			'post-formats',
			'tag',
			'category',
			'thumbnail'
		);
get_arguments('Gallery','Galleries','Gallery','Galleries','Gallery','dashicons-format-gallery','gallery',array('gallery_type'),$supports);
get_arguments('Advertisement','Advertisements','Advertisement','Advertisements','Advertisement','dashicons-networking','advertisement',array('location'),$supports);

}
function get_arguments($singular,$plural,$singular_name,$menu_name,$name,$menu_icon,$slug,$cat,$support ){
		$labels = array(
		'name' => _x($name, 'Post Type General Name', 'text_domain') ,
		'singular_name' => _x($singular_name, 'Post Type Singular Name', 'text_domain') ,
		'menu_name' => __($menu_name, 'text_domain') ,
		'parent_item_colon' => __('Parent '.$singular_name.':', 'text_domain') ,
		'all_items' => __('All '.$menu_name, 'text_domain') ,
		'view_item' => __('View '.$singular_name, 'text_domain') ,
		'add_new_item' => __('Add New '.$singular_name, 'text_domain') ,
		'add_new' => __('New '.$singular_name, 'text_domain') ,
		'edit_item' => __('Edit '.$singular_name, 'text_domain') ,
		'update_item' => __('Update '.$singular_name, 'text_domain') ,
		'search_items' => __('Search '.$singular_name, 'text_domain') ,
		'not_found' => __('Not found', 'text_domain') ,
		'not_found_in_trash' => __('Not found in Trash', 'text_domain') ,
	);
	$args = apply_filters($singular.'_post_type_args',array(
		'label' => __($name, 'text_domain') ,
		'description' => __('Product information pages', 'text_domain') ,
		'labels' => $labels,
		'supports' => $support ,
'taxonomies'          => $cat,
'hierarchical' => true,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_in_admin_bar' => true,
		'menu_position' => 5,
		'menu_icon' => $menu_icon,
		'can_export' => true,
		'has_archive' => true,
		'exclude_from_search' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
		
		'query_var' => true
	));
	register_post_type($slug, $args);
	flush_rewrite_rules();
}
	add_action('init', 'custom_post_type',0);






