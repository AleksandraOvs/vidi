<?php
/*
  Template name: Front page
*/
?>
<?php get_header() ?>
<section class="promo">

<div class="container">
  <div class="promo__inner">
    <div class="promo__content">
      <div class="promo__title">
        <?php echo carbon_get_post_meta(get_the_ID(), 'crb_main_header'); ?>
      </div>

      <?php 

      if ($promo_items = carbon_get_post_meta(get_the_ID(), 'crb_header_list') ){
        ?>
          <ul class="promo__list list-decor">
            <?php
              foreach ($promo_items as $promo_item){
                ?>
                <li class="list-decor__item">
                 <?php echo $promo_item['header_list_item']; ?>
                </li>
              <?php
              }
            ?>
          </ul>
        <?php
      }
      ?>

      <a class="promo__btn btn" data-fancybox href="#pop-up">
        Contact us
      </a>
    </div>

    <div class="promo__video-wrap">
      <?php 
      $gallery = carbon_get_post_meta(get_the_ID(), 'crb_hero_video' );
      ?>
      <video class="promo__video" pip="false" preload noaudio autoplay muted loop poster="images/video/poseter.jpg">
      <?php 
      foreach( $gallery  as $v => $video){
        $video_url =  wp_get_attachment_url( $video );
        $this_ext = end(explode(".", $video_url));
      echo '<source src="'.wp_get_attachment_url( $video ).'"' . 'type="video/' . $this_ext . ' " ' . '>'; 
      }
      ?>
      </video>
    </div>
  </div>
</div>
</section>

  <section class="about" id="about-us">
    <div class="container">
      <h2 class="about__title title">
        Video production studio
      </h2>
      <div class="about__inner">
        <?php 
          $icon_id = carbon_get_post_meta(get_the_ID(), 'crb_counts_icon');
          $count_num = carbon_get_post_meta(get_the_ID(), 'crb_counts_number');
          $count_desc = carbon_get_post_meta(get_the_ID(), 'crb_counts_description');
        ?>

        <?php if($num_counts = carbon_get_post_meta(get_the_ID(), 'counts') ){
          ?>
          <?php
          foreach ($num_counts as $num_count){
            ?>
           <?php  
              $icon_url = wp_get_attachment_image_url($num_count['crb_counts_icon'], 'full'); ?>
              <div class="about__item">
                <div class="about__img-wrap">
                    <img class="about__circle _1" src="<?php echo get_stylesheet_directory_uri() . '/images/decor/a-1.svg' ?>" alt="decor" width="130" height="130">
                    <img class="about__img" src="<?php echo $icon_url;?>" width="60" height="60" alt="about us"> 
                </div>

                <div class="about__numbers">
                    <span class="about__number js-anim-numbers">
                    <?php echo $num_count['crb_counts_number']; ?>
                    </span>
                    <span>+</span>
                </div>

                <div class="about__text">
                <?php echo $num_count['crb_counts_description']; ?>
                </div>
                </div>
            <?php
          }
        }
        ?>
      </div>
    </div>
  </section>

  <section class="portfolio section" id="work">
    <div class="container">
      <div class="portfolio__title title">
        Portfolio
      </div>
        <?php
          $args = array (
            'posts_per_page' => 9,
            'post_type' => 'portfolio',
            'orderby' => 'title',
	          'order'   => 'DESC'
          );
          $query = new WP_Query( $args ); ?>
          <div class="portfolio__inner js-slider-portfolio">
            <?php if ( $query->have_posts() ) : ?>
	                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
		              <?php get_template_part('entry', 'portfolio');?>
	                <?php endwhile; ?>
	                <?php wp_reset_postdata(); ?>
            <?php else : ?>
	            <p><?php esc_html_e( 'Unfortunately there are no entries.' ); ?></p>
            <?php endif; ?>
          </div> <!-- ./end of portfolio__inner -->
    </div>
  </section>



  <section class="text-move">
    <div class="container">
      <div class="text-move__title">
        You will receive a customized offer to fit your budget
      </div>
      <a class="text-move__btn btn" data-fancybox href="#pop-up">
        Contact us
      </a>
    </div>
  </section>

        <?php if($vtypes_items = carbon_get_post_meta(get_the_ID(), 'video_types' ) ) {?>
        <section class="types section _pb-0" id="types">
          <div class="container">  
            <div class="types__title title">VIDEO TYPES</div>
            <div class="types__inner js-types-slider">
                <?php foreach ($vtypes_items as $vtypes_item){ ?>
                  <div class="types__item-wrap">
                    <div class="types__item">
                      <div class="types__img-wrap">
                        <?php
                          $types_img_url = wp_get_attachment_image_url($vtypes_item['crb_vtypes_image'], 'full');
                          $types_gif_url = wp_get_attachment_image_url($vtypes_item['crb_vtypes_gif'], 'full');
                        ?>
                        <img class="types__img" src="<?php echo $types_img_url; ?>" alt="svg">
                        <img class="types__img types__img_gif" loading="lazy" src="<?php echo $types_gif_url; ?>" alt="gif">
                      </div>
                      <div class="types__subtitle">
                          <?php echo $vtypes_item['crb_vtypes_subtitle']; ?>
                      </div>
                      <div class="types__text">
                          <?php echo $vtypes_item['crb_vtypes_text']; ?>
                      </div>
                    </div>
                  </div><!-- ./end of types__item-wrap -->
        <?php } ?>
            </div><!-- ./end of types__inner -->
          </div><!-- ./end of container -->
        </section>
        <?php } ?>

        <?php if($wework_items = carbon_get_post_meta(get_the_ID(), 'we_work' ) ) {?>
        <section class="work section" id="how-work">
          <div class="container">
            <div class="work__title title">How we work</div>
              <div class="work__inner">
                <?php foreach ($wework_items as $wework_item){ ?>


                  <div class="work__item">
                    <div class="work__img-wrap">
                        <div class="work__img-inner">
                          <?php
                          $wework_img_url = wp_get_attachment_image_url($wework_item['crb_we_work_image'], 'full');
                          ?>
                           <img class="work__img" src="<?php echo $wework_img_url; ?>" width="102" height="102" alt="work">
                        </div>
                    </div>

                    <div class="work__content">
                      <div class="work__number"><?php echo $wework_item['crb_we_work_count'];?></div>
                      <div class="work__text">
                        <div class="work__subtitle"><?php echo $wework_item['crb_we_work_subtitle'];?></div>
                        <div class="work__text-text">
                        <?php echo $wework_item['crb_we_work_text'];?>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div><!-- ./end of work__inner -->
          </div><!-- ./end of container -->
        </section>
        <?php } ?>

        <section class="text-move">
          <div class="container">
            <div class="text-move__title">
                Video content will help you enhance the efficiency of your business
            </div>
          <a class="text-move__btn btn" data-fancybox href="#pop-up">
            Contact us
          </a>
          </div>
        </section>


        <?php if($cases_items = carbon_get_post_meta(get_the_ID(), 'cases' ) ) {?>
          <section class="section cases _pb-0">
            <div class="container">
              <div class="title cases__title">Video Content Use Cases</div>
                <div class="cases__inner">
                <?php foreach ($cases_items as $cases_item){ ?>
                  <div class="cases__item">
                    <div class="cases__img-wrap">
                          <?php
                          $cases_img_url = wp_get_attachment_image_url($cases_item['crb_cases_image'], 'full');
                          ?>
                      <img class="cases__img" src="<?php echo $cases_img_url; ?>" width="110" height="110" alt="cases">
                    </div>
                    <div class="cases__content">
                      <div class="cases__subtitle"><?php echo $cases_item['crb_cases_subtitle'];?></div>
                      <div class="cases__text">
                        <?php echo $cases_item['crb_cases_text'];?>
                      </div>
                    </div>
                  </div> <!-- ./end of cases__item -->  
                <?php } ?>
                </div><!-- ./end of cases__inner -->
            </div><!-- ./end of container -->
          </section>      
        <?php } ?>
  
  <section class="blog-slider section">
    <div class="container">
      <div class="blog-slider__title title">
        Blog
      </div>
      <a class="blog-slider__link" href="<?php the_permalink() . '/blog' ?>">
        View all
      </a>
      <div class="blog-slider__inner">
        <?php $args = array(
          'posts_per_page' => -1,
          'category_name' => 'blog'
          );
          
          $query = new WP_Query($args);
          
          ?>
          <?php if($query -> have_posts()) { ?>
            <div class="blog-slider__slider js-blog-slider">
           <?php while($query->have_posts() ) : $query->the_post(); ?>
            <div class="blog-slider__slide-wrap">
            <?php get_template_part('entry'); ?>
            </div>
            <?php    endwhile; ?>
             
            <?php } else {
            echo 'no publications'; ?>
               </div>
            <?php
            }
            ?>
        </div>
    </div>
  </section>
<?php get_footer() ?>