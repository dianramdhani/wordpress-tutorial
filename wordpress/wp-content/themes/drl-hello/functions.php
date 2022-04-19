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

// Setup Navwalker
function register_navwalker()
{
  require_once get_template_directory() . "/class-wp-bootstrap-navwalker.php";
}
add_action("after_setup_theme", "register_navwalker");

function prefix_modify_nav_menu_args($args)
{
  return array_merge($args, [
    "walker" => new WP_Bootstrap_Navwalker(),
  ]);
}
add_filter("wp_nav_menu_args", "prefix_modify_nav_menu_args");

function prefix_bs5_dropdown_data_attribute($atts, $item, $args)
{
  if (is_a($args->walker, "WP_Bootstrap_Navwalker")) {
    if (array_key_exists("data-toggle", $atts)) {
      unset($atts["data-toggle"]);
      $atts["data-bs-toggle"] = "dropdown";
    }
  }
  return $atts;
}
add_filter(
  "nav_menu_link_attributes",
  "prefix_bs5_dropdown_data_attribute",
  20,
  3
);
