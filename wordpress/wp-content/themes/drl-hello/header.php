<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar scroll</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php wp_nav_menu([
              "menu" => "Top Bar",
              "depth" => 2,
              "container" => "div",
              "container_class" => "collapse navbar-collapse",
              "container_id" => "navbarScroll",
              "menu_class" =>
                "navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll",
              "fallback_cb" => "WP_Bootstrap_Navwalker::fallback",
            ]); ?>
            </div>
        </nav>