<?php if (have_posts()):
  while (have_posts()):
    the_post(); ?>
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="card-title"><?php the_title(); ?></h2>
            <?php the_excerpt(); ?>
            <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read more...</a>
        </div>
    </div>
<?php
  endwhile;
endif; ?>
