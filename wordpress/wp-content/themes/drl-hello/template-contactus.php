<?php
/**
 * Template Name: Contact Us
 */
?>

<?php get_header("secondary"); ?>
<div class="container">
    <h1><?php the_title(); ?></h1>
    
    <div class="row">
        <div class="col">
            jadi ceritanya ini teh ada teksnya
        </div>
        <div class="col">
            <?php get_template_part("includes/section", "content"); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
