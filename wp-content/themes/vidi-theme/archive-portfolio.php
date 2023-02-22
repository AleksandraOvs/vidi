<?php get_header() ?>
<section class="blogs">
    <div class="container">
      <div class="blogs__title title">Portfolio</div>
      <?php if(have_posts()) { ?>
        <div class="blogs__inner">
           <?php while(have_posts() ) : the_post(); 

            get_template_part('entry', 'portfolio');
            
            endwhile; 
            } 
            ?></div><!-- ./ end of blogs__inner -->

<div class="pagination blogs__pagination">
   <?php echo custom_pagination(); ?>
</div>
    </div>
  </section>
<?php get_footer() ?>