<?php
function views_count_meta_box() {

    add_meta_box(
        'views_count',
        __( 'Views', 'bigomag' ),
        'views_count_meta_box_callback'
    );

}
add_action('add_meta_boxes','views_count_meta_box');

function views_count_meta_box_callback($post){

	wp_nonce_field('views_count_nonce','views_count_nonce');
	$value = get_post_meta($post->ID,'views_count',true);
	echo '<input type="text" name="views_count" id="views_count" value="'.esc_attr($value).'">';
}
add_action('save_post','save_views_count_meta_box_data');
function save_views_count_meta_box_data(){
     
	if(! isset ($_POST['views_count_nonce'])){
		return;
	}

	if(! wp_verify_nonce($_POST['views_count_nonce'],'views_count_nonce')){
		return;
	}

		if(!isset ($_POST['views_count'])){
		return;
	}
	  $my_data = sanitize_text_field( $_POST['views_count'] );

   
      update_post_meta( $_POST['post_ID'], 'views_count', $my_data );
}

function nsn_author_meta_box() {

    add_meta_box(
        'nsn_author',
        __( 'Reported By', 'bigomag' ),
        'nsn_author_meta_box_callback'
    );

}
add_action('add_meta_boxes','views_count_meta_box');
function nsn_author_meta_box_callback($post){

	wp_nonce_field('nsn_author_nonce','nsn_author_nonce');
	$value = get_post_meta($post->ID,'nsn_author',true);
	echo '<input type="text" name="nsn_author" id="nsn_author" value="'.esc_attr($value).'">';
}

add_action('save_post','save_nsn_author_meta_box_data');
function save_nsn_author_meta_box_data(){
     
	if(! isset ($_POST['nsn_author_nonce'])){
		return;
	}

	if(! wp_verify_nonce($_POST['nsn_author_nonce'],'nsn_author_nonce')){
		return;
	}

		if(!isset ($_POST['nsn_author'])){
		return;
	}
	  $my_data = sanitize_text_field( $_POST['nsn_author'] );

   
      update_post_meta( $_POST['post_ID'], 'nsn_author', $my_data );
}