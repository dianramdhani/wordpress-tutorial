

<?php if (have_posts()):
  while (have_posts()):
    the_post(); ?>
    <?php
    $first_name = get_the_author_meta("first_name");
    $last_name = get_the_author_meta("last_name");
    ?>
    <p><?php echo $first_name; ?> <?php echo $last_name; ?> | <?php echo get_the_date(); ?></p>
    <?php the_content(); ?>
    <?php
    $tags = get_the_tags();
    foreach ($tags as $tag): ?>
      <a 
        class="badge bg-primary" 
        href="<?php echo get_tag_link($tag->term_id); ?>"
      >
        <?php echo $tag->name; ?>
      </a>
    <?php endforeach;
    ?>
<?php
  endwhile;
endif; ?>
