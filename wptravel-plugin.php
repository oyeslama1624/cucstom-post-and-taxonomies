<?php
/**
 * plugin Name: WP Travel Engine
 * Description: A plugin to experience travelling in a better way
 * Author:Oyesh Lama Tamang
 * <version:1 
 **/
add_action( 'init', 'add_custom_post_type_trips_travels' );
function add_custom_post_type_trips_travels ()
 {
    register_post_type( 'trips_travels', 
        array( 
            'labels' => array(
                'name'               => __( 'Trips & Travels ', 'textdomain' ),
                'singular_name'      => __( 'Trip & Travel Form', 'textdomain' ),
            ),
            'public' => true, 
            'has_archive' => true, 
            'rewrite' => array( 'slug' => 'trips_travels' ), 
            'supports' => array( 'title', 'editor', 'author', 'custom-fields' ) 
        )
    );
}
//add taxonomy to contact form
add_action( 'init', 'add_custom_taxonomy_trips_travels' );
function add_custom_taxonomy_trips_travels() {
    register_taxonomy( 'trips_travels-category', 'trips_travels', array(
        'labels' => array(
            'name' => __( 'Destinations', 'textdomain' ),
            'singular_name' => __( 'Destination', 'textdomain' ),
            
        ),

        
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'trips_travels-category' ),
    ) );


    

}





