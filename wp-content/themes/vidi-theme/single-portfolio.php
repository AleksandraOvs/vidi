<?php get_header(); ?>
<section class="blog-page">
    <div class="container">
      <div class="breadcrumbs">
        <ul class="breadcrumbs__list">
        <?php echo true_breadcrumbs(); ?>
        </ul>
      </div>

    <div class="blog-page__header">
        <h2 class="blog-page__title title">
        <?php the_title() ?>
      </h2>
        <?php get_template_part('entry', 'portfolio'); ?>   
    </div>
      <?php the_content() ?>
    </div>
  </section>
<?php get_footer(); ?>