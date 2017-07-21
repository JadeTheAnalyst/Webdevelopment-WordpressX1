<?php
function childtheme_enqueue_styles() {

    $parent_style = 'twentyseventeen-style'; // This is 'twentyseventeen-style' for the Twenty seventeen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'childtheme_enqueue_styles' );

/**
 * Get rid of the sidebar styling on the blog page
 * removes page-two-column class 
 * adds page-one-column class 
 * adds has-sidebar class (for some reason this is the name of the class that removes the float:right on the blog content)
 * to the array of body classes
 * Uses 11 priority to run after parent theme. Default is 10.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function childtheme_body_classes( $classes ) {

	if(in_array('page-two-column', $classes)){
		unset($classes[array_search('page_two_column',$classes)]);
	}
	if(in_array('page-one-column', $classes) == false){
		$classes[] = 'page-one-column';
	}

	if ( !is_front_page() && is_home() && in_array('blog', $classes)) {
		unset($classes[array_search('blog',$classes)]);
	}

	return $classes;
}
add_filter( 'body_class', 'childtheme_body_classes', 11 );

function query_featured_event(){
    $date_now = date('Y-m-d H:i:s');
    $args = array(
        'post_type' => 'post',
        'category_name' => 'events',
        'meta_query'    => array(
            array(
                'key'       => 'event_date',
                'value'     => $date_now,
                'compare'   => '>=',
                'type' => 'DATETIME',
            ),
            array(
                'key'       => 'featured',
                'value'     => true,
            ),
        ),
        'meta_key' => 'event_date',
        'meta_type' => 'DATETIME',
        'orderby' => 'meta_value',
        'order' => 'DESC',
    );
    $post_query = new WP_Query($args);
    return $post_query;
}

function query_promotable_events(){
	$date_now = date('Y-m-d H:i:s');
    $args = array(
        'post_type' => 'post',
        'category_name' => 'events',
        'meta_query'    => array(
            array(
                'key'       => 'event_date',
                'value'     => $date_now,
                'compare'   => '>=',
                'type' => 'DATETIME',
            ),
        ),
        'meta_key' => 'event_date',
        'meta_type' => 'DATETIME',
        'orderby' => 'meta_value',
        'order' => 'DESC',
    );
    $post_query = new WP_Query($args);
    return $post_query;
}

function query_front_page_events_panel(){
    $date_now = date('Y-m-d H:i:s');
    $args = array(
        'posts_per_page' => 3,
        'post_type' => 'post',
        'category_name' => 'events',
        'meta_query'    => array(
            array(
                'key'       => 'event_date',
                'value'     => $date_now,
                'compare'   => '>=',
                'type' => 'DATETIME',
            ),
        ),
        'meta_key' => 'event_date',
        'meta_type' => 'DATETIME',
        'orderby' => 'meta_value',
        'order' => 'DESC',
    );
    $post_query = new WP_Query($args);
    return $post_query;
}

?>