<?php

function wp_delete_post_link($link = 'Delete This', $before = '', $after = '')
{
global $post;
if ( $post->post_type == 'page' ) {
if ( !current_user_can( 'edit_page', $post->ID ) )
return;
} else {
if ( !current_user_can( 'edit_post', $post->ID ) )
return;
}
$link = "<a href='" . wp_nonce_url( get_bloginfo('url') . "/wp-admin/post.php?action=delete&amp;post=" . $post->ID, 'delete-post_' . $post->ID) . "'>".$link."</a>";
echo $before . $link . $after;
}

function learningWP_resources(){
wp_enqueue_style('styles', get_stylesheet_uri());
wp_enqueue_script('scripts', get_template_directory_uri() . '/js/script.js' , NULL, 1.0, true);
wp_localize_script('scripts', 'magicalData', array(
		'nonce' => wp_create_nonce('wp_rest'),
		'siteURL' => get_site_url()
	));

}
add_action('wp_enqueue_scripts' , 'learningWP_resources');
register_nav_menus(array(
'primary' => __('Primary Menu'),
'footer' => __('Footer Menu'),
));

function get_top_ancestor_id(){
global $post;
if($post->post_parent){
	$ancestors=array_reverse(get_post_ancestors($post->ID));
	return $ancestors[0];
}
return $post->ID;
}
?>