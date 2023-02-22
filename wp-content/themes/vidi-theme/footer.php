</main>

<footer class="footer">

  <div class="container">
    <div class="footer__inner">

      <div class="footer__logo-inner">
        <a href="/" class="footer__logo logo">
        
  <?php
  $footer_logo = get_theme_mod('footer_logo');
  $img = wp_get_attachment_image_src($footer_logo, 'full');
  if ($img) :
    ?>
    <img src="<?php echo $img[0]; ?>" alt="">
  <?php endif; ?>
</a>
    
      </div>

      <div class="footer__menu-inner">

      <?php 
                if( has_nav_menu( 'foot_menu' )) {
                    wp_nav_menu( array(
                        'theme_location' => 'foot_menu',
                        'container' => 'nav',
                        'container_class' => 'footer__menu',
                        'items_wrap' => '<ul class="footer__menu-list">%3$s</ul>',
                        //'depth' => 2,
                        //'walker' => new Site_Nav()
                    ));
                }
            ?>   
      </div>

      <div class="footer__contact-inner">
      <?php 
if( $contacts = carbon_get_theme_option('footer_contacts' ) ) {
    ?>
    <ul class="footer__social social">
        <?php
	foreach( $contacts as $contact ) {
    ?>
     <li class="social__item">
    <a href="<?php echo $contact[ 'footer_contact_link']; ?>" class="social__link">
  <?php
    $thumb_contact = wp_get_attachment_image_url( $contact['footer_contact_image'], 'full' );
?>
<img class="social__img" width="25" height="25" src="<?php echo $thumb_contact; ?>" alt="<?php echo $contact[ 'footer_contact_name']; ?>">
  </a>
    </li>
<?php
	}
    ?>
    </ul>
    <?php
}
?>
 <a class="footer__tel" href="<?php echo carbon_get_theme_option('footer_tel_contact_link' ) ?>">
 <?php echo carbon_get_theme_option('footer_tel_contact' ) ?>
        </a>
      </div> 
    </div>
    <div class="footer__copyright">
    <?php bloginfo( 'name' ); ?> — <?php the_date('Y'); ?>© ALL RIGHTS RESERVED
    </div>
  </div>

</footer>
<div style="display: none;" class="pop-up" id="pop-up">
  <div class="pop-up__inner">
    <div class="pop-up__title">
      <?php echo carbon_get_theme_option('contactform_head');?>
    </div>
    <?php
    $contact_short = carbon_get_theme_option('contactform_shortcode');
    echo do_shortcode( $contact_short ); ?>
  </div>
</div>
<?php wp_footer(); ?>

</body>

</html>


