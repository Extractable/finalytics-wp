<?php
/**
 * Template part for displaying Hero banner with media
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finalytics
 */

?>
<?php $hero_media_custom_id = get_field("hero_media_custom_id"); ?>
<section <?php if (!empty($hero_media_custom_id)): ?>id="<?php echo $hero_media_custom_id; ?>"<?php endif; ?>
         class="hero-media <?php if( get_field('hero_media_color_scheme') == 'light' ): ?>scheme-light<?php else: ?>scheme-dark<?php endif; ?> <?php
         if (get_field("hero_media_hide_overflow")): ?>overflow-hidden<?php endif; ?> <?php
         if (get_field('hero_media_background_image') == 'waves'): ?>bg-waves<?php
         else: ?>bg-dotted<?php endif; ?>">
  <div class="container-xl">
    <div class="hero-media_holder">
      <div class="row">
        <div class="col-lg-6 col-xl-7">
          <div class="hero-media_content">
            <span class="hero-media_eyebrow"><?php if (get_field("hero_media_eyebrow")) echo get_field("hero_media_eyebrow"); ?></span>
            <h1 class="h1-small hero-media_title"><?php if (get_field("hero_media_title")) echo get_field("hero_media_title"); ?></h1>
            <p class="hero-media_text"><?php if (get_field("hero_media_text")) echo get_field("hero_media_text"); ?></p>
            <div class="hero-media_cta">
              <?php
              $hero_media_button_1 = get_field('hero_media_button_1');
              if( $hero_media_button_1 ):
                $link_url = $hero_media_button_1['url'];
                $link_title = $hero_media_button_1['title'];
                ?>
                <?php if (get_field('hero_media_button_1_style') == 'primary'): ?>
                  <a class="btn btn-primary"
                     href="<?php echo esc_url( $link_url ); ?>" title="<?php echo esc_html( $link_title ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php else: ?>
                  <a class="btn btn-link <?php if (get_field('hero_media_color_scheme') == 'light'): ?>btn-link__blue<?php endif; ?>"
                     href="<?php echo esc_url( $link_url ); ?>"
                     title="<?php echo esc_html( $link_title ); ?>"><span
                        class="btn-link_text"><?php echo esc_html( $link_title ); ?></span></a>
                <?php endif; ?>
              <?php endif; ?>

              <?php
              $hero_media_button_2 = get_field('hero_media_button_2');
              if( $hero_media_button_2 ):
                $link_url = $hero_media_button_2['url'];
                $link_title = $hero_media_button_2['title'];
                ?>
                <?php if (get_field('hero_media_button_2_style') == 'primary'): ?>
                  <a class="btn btn-primary"
                     href="<?php echo esc_url( $link_url ); ?>" title="<?php echo esc_html( $link_title ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php else: ?>
                  <a class="btn btn-link <?php if (get_field('hero_media_color_scheme') == 'light'): ?>btn-link__blue<?php endif; ?>"
                     href="<?php echo esc_url( $link_url ); ?>"
                     title="<?php echo esc_html( $link_title ); ?>"><span
                        class="btn-link_text"><?php echo esc_html( $link_title ); ?></span></a>
                <?php endif; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-xl-5">
          <div class="hero-media_media">
            <?php if (get_field('hero_media_image_or_video') == 'video'): ?>
              <div class="embed-container">
                <?php if (get_field("hero_media_video")) echo get_field("hero_media_video"); ?>
              </div>
            <?php else:
              $hero_media_image = get_field('hero_media_image');
              if (!empty($hero_media_image)): ?>
                <img src="<?php echo $hero_media_image['url']; ?>"
                     alt="<?php echo $hero_media_image['alt']; ?>"/>
              <?php endif;
            endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="decor-element"></div>
</section>