<?php
add_theme_support( 'post-thumbnails' );

register_nav_menus( 
   array(
    'top-menu' => 'Menu Top',
    'side-menu' => 'Menu Side',
) );

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
   require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

/**
 * Custom post type - properties
 */
function properties_post_type(){
   $args = array(
      'labels' => array(
                  'name' => 'Недвижими имоти', 
                  'singular_name' => 'Недвижим имот'
      ),
      'hierarchical' => false,
      'public' => true, 
      'has_archive' => true,
      'menu_icon' => 'dashicons-admin-multisite',
      'supports' => array( 'title', 'editor', /*'author',*/ 'thumbnail', /*'comments', 'revisions', 'custom-fields'*/),
      //'rewrite' => array('slug' => 'properties'),
   );

   register_post_type('properties', $args);
}

add_action('init', 'properties_post_type');

function properties_taxonomy(){
   $args = array(
      'labels' => array(
                  'name' => 'Видове имоти', 
                  'singular_name' => 'Вид имот'
      ),
      'hierarchical' => true,
      'public' => true,      
   );

   register_taxonomy('property-types', array('properties'), $args);
}

add_action('init', 'properties_taxonomy');

/**
 * Custom post type - blog
 */
function blog_post_type(){
   $args = array(
      'labels' => array(
                  'name' => 'Блог', 
                  'singular_name' => 'Блог'
      ),
      'hierarchical' => false,
      'public' => true, 
      'has_archive' => true,
      'menu_icon' => 'dashicons-welcome-write-blog',
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', /*'comments', 'revisions', 'custom-fields'*/),
   );

   register_post_type('blog', $args);
}

add_action('init', 'blog_post_type');

function blog_post_taxonomy(){
   $args = array(
      'labels' => array(
                  'name' => 'Видове постове', 
                  'singular_name' => 'Вид пост'
      ),
      'hierarchical' => true,
      'public' => true,      
   );

   register_taxonomy('blog-post-types', array('blog'), $args);
}

add_action('init', 'blog_post_taxonomy');


/**
 * Add automatic image sizes
 */
if ( function_exists( 'add_image_size' ) ) { 
   add_image_size( 'location-thumb-img', 700, 700, true ); //(cropped)
   //set image size
   add_image_size( 'prop-grid-size', 750, 500, true );
}

/**
 * Post Gallery Counter
 */
function post_gallery_count($postId){
   $counter = 0;

   foreach ( get_gallery($postId) as $attachment ) {
      $counter++;
   }

   return $counter;
}

register_sidebar(array(
   'name' => __( 'Right Sidebar' ),
   'id' => 'right-sidebar',
   'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
   'before_widget' => '<div class="sidebar">',
   'after_widget'  => '</div>',
   'before_title'  => '<div class="header"><h6><span class="widget-title">',
   'after_title'   => '</span></h6></div>'
));

