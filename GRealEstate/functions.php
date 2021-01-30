<?php
// let's some support
function grealestate_theme_support(){
    add_theme_support('menus');
    add_theme_support('widgets');
    add_theme_support('post-thumbnails');
    add_theme_support('post-format',array('aside','gallery','video'));
    add_theme_support('custom-header');
    add_theme_support('custom-background');

}
add_action('after_setup_theme','grealestate_theme_support');

// link css and script

function grealesatte_link_css_script(){
    wp_enqueue_style( 'zerogrid', get_template_directory_uri().'/css/zerogrid.css');
    wp_enqueue_style( 'style', get_template_directory_uri().'/css/style.css');
    wp_enqueue_style( 'responsive', get_template_directory_uri().'/css/responsiveslides.css');
    wp_enqueue_style( 'fa', get_template_directory_uri().'/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style( 'stylesheet', get_stylesheet_uri());

    wp_enqueue_script( 'jquery', get_template_directory_uri().'/js/jquery-latest.min.js',true,true);
    wp_enqueue_script( 'script', get_template_directory_uri().'/js/script.js',true,true);
    wp_enqueue_script( 'jquery183', get_template_directory_uri().'/js/jquery183.min.js',true,true);
    wp_enqueue_script( 'responsive', get_template_directory_uri().'/js/responsiveslides.min.js',true,true);
    wp_enqueue_script( 'custom', get_template_directory_uri().'/js/custom.js',true,true);
}
add_action('wp_enqueue_scripts','grealesatte_link_css_script');


// custom post type

function grealestate_cus_posttype() {
    $labels = array(
      'name' => _x('projects', 'post type general name'),
      'singular_name' => _x('project', 'post type singular name'),
      'add_new' => _x('Add New', 'project'),
      'add_new_item' => __('Add New project'),
      'edit_item' => __('Edit project'),
      'new_item' => __('New project'),
      'all_items' => __('All projects'),
      'view_item' => __('View project'),
      'search_items' => __('Search projects'),
      'not_found' =>  __('No projects found'),
      'not_found_in_trash' => __('No projects found in Trash'), 
      'parent_item_colon' => '',
      'menu_name' => __('projects'),
      'menu_icon'   =>  'dashicons-welcome-widgets-menus'
  
    );
    $args = array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true, 
      'show_in_menu' => true, 
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'has_archive' => true, 
      'hierarchical' => false,
      'menu_position' => 5,
      'menu_icon'   =>  'dashicons-welcome-widgets-menus',
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments','custom-fields' )
    ); 
    register_post_type('project',$args);
  }
  add_action( 'init', 'grealestate_cus_posttype' );  

























?>