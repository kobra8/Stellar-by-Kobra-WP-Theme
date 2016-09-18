<?php


function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

add_theme_support('post-thumbnails');
add_theme_support('custom-logo', ['height' => 150, 'width' => 150]);

function register_my_widget(){
  register_sidebar(array(
      'name' => 'Widget w stopce',
      'id'  => 'footer_1',
      'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' =>'<h2>',
    'after_title' =>'</h2>'
  ));
  register_sidebar(array(
      'name' => 'Widget w stopce z prawej',
      'id'  => 'footer_2',
      'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' =>'<h2>',
    'after_title' =>'</h2>'
  ));
}

add_action('widgets_init','register_my_widget');