<?php 

// adding the CSS and JS Files

function just_setup() {
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Montserrat');
  wp_enqueue_style('font-awesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style( 'reset', get_stylesheet_directory_uri() . '/reset.css' );
  wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), 'all');
  wp_enqueue_script("main", get_theme_file_uri('js/main.js'), NULL, microtime(), true);
}
add_action('wp_enqueue_scripts', 'just_setup');
// JQuery
function enqueue_jquery_from_cdn() {
  wp_deregister_script( 'jquery' );
  wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', '', '1.12.4' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_jquery_from_cdn' );

// Adding theme Support
function just_init() {
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support('html5',
    array('comment-list', 'comment-form', 'search-form')
  );
}

add_action('after_setup_theme', 'just_init');

// Projects Post Type

function just_custom_post_type() {
  register_post_type('project',
    array(
      'rewrite' => array('slug' => 'projects'),
      'labels' => array(
        'name' => 'Projects',
        'singular_name' => 'Project',
        'add_new_item' => 'Add New Project',
        'edit_item' => 'Edit Project'
      ),
      'menu-icon' => 'dashicons-clipboard',
      'public' => true,
      'has_archive' => true,
      'supports' => array(
        'title', 'thumbnail', 'editor', 'excerpt', 'comments'
      )
    )
  );
}

add_action('init', 'just_custom_post_type');