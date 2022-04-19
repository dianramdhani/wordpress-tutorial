<?php

// Load CSS
function load_css()
{
  wp_register_style(
    "bootstrap",
    get_template_directory_uri() . "/css/bootstrap.min.css",
    [],
    false,
    "all"
  );
  wp_enqueue_style("bootstrap");

  wp_register_style(
    "main",
    get_template_directory_uri() . "/css/main.css",
    [],
    false,
    "all"
  );
  wp_enqueue_style("main");
}
add_action("wp_enqueue_scripts", "load_css");

// Load Javascripts
function load_js()
{
  wp_register_script(
    "bootstrap",
    get_template_directory_uri() . "/js/bootstrap.min.js",
    [],
    false,
    true
  );
  wp_enqueue_script("bootstrap");
}
add_action("wp_enqueue_scripts", "load_js");

// Setup menus
add_theme_support("menus");
register_nav_menus([
  "top-menu" => "Top Menu Location",
  "mobile-menu" => "Mobile Menu Location",
]);

// Register Navwalker
function register_navwalker()
{
  require_once get_template_directory() . "/class-wp-bootstrap-navwalker.php";
}
add_action("after_setup_theme", "register_navwalker");
