<?php get_header() ?>
    <section>
        <div class="container">
        <?php 
        if( is_404() ){
           ?>
                <div class="e404-container">
                    <p class="e404">404</p>
                    <p class="e404-text">Sorry, this page does not exist :-(</p>
                    <a href="<?php echo get_home_url(); ?>" class="e404-text"> Go to Main page</a>
                </div>
           <?php
        }
        ?>
        <?php if(have_posts()) : 
          
              while(have_posts() ) : the_post();
                    get_template_part('entry');
            endwhile;
            
        endif;
            ?>
        </div>
    </section>
<?php get_footer() ?>