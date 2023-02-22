<div class="blog-slider__slide">
          <a class="blog-slider__img-wrap" href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('medium') ?>
          </a>
          <a class="blog-slider__item-title" href="<?php the_permalink(); ?>">
            <?php the_title() ?>
          </a>
          <div class="blog-slider__discr">
            <?php the_excerpt() ?>
          </div>
          <a class="blog-slider__btn btn" href="<?php the_permalink()  ?>">
            Read
          </a>
        </div>