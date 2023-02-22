<?php get_header() ?>
<section class="blog-page">
    <div class="container">
      <div class="breadcrumbs">
        <ul class="breadcrumbs__list">
        <?php echo true_breadcrumbs(); ?>
        </ul>
      </div>
      <div class="blog-page__date">
        <?php the_time('j F Y')?>
      </div>
      <h2 class="blog-page__title title">
        <?php the_title() ?>
      </h2>
      <!-- <h3>
        <?php //the_excerpt() ?>
      </h3> -->
      <img src="<?php echo get_stylesheet_directory_uri() . '/images/blog/1.jpg' ?>" alt="">
      <?php the_content() ?>
    </div>
  </section>

<?php get_footer() ?>