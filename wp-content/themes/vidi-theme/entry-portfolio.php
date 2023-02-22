<?php 
    $prt_link = carbon_get_post_meta(get_the_ID(), 'crb_portfolio_link');
    $plc_id = carbon_get_post_meta(get_the_ID(), 'crb_portfolio_placeholder');
    $plc_url = wp_get_attachment_image_url( $plc_id, 'full' );
?>

<a class="portfolio__link" data-fancybox href="<?php echo $prt_link; ?>">
          <div class="portfolio__img-wrap">
            <video class="portfolio__video" pip="false" noaudio autoplay muted loop>
                <?php
                    $gallery  = carbon_get_post_meta( get_the_ID(), 'crb_portfolio_sources' );

                    foreach( $gallery  as $i => $item ){
                    
                      echo '<source src="'.wp_get_attachment_url( $item ).'">';
                     
                    }
                ?>
            </video>
            <img class="portfolio__img" src="<?php echo $plc_url; ?>" alt="photo">
          </div>

          <div class="portfolio__content">
            <div class="portfolio__subtitle">
              <?php the_title(); ?>
            </div>
          </div>
          <div class="portfolio__play">
            <img class="portfolio__play-img" src="<?php echo get_stylesheet_directory_uri() . '/images/icon/play-video.svg' ?>" alt="play">
          </div>
        </a>