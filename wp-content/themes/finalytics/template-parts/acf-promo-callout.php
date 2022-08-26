<?php
/**
 * Template part for displaying Promo callout section (ACF Flexible content)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finalytics
 */

?>

<?php $promo_callout_custom_id = get_sub_field("promo_callout_custom_id"); ?>
<section <?php if (!empty($promo_callout_custom_id)): ?>id="<?php echo $promo_callout_custom_id; ?>"<?php endif; ?>
         class="promo-callout <?php if (get_sub_field('promo_callout_color_scheme') == 'white'): ?>scheme_white<?php
         elseif (get_sub_field('promo_callout_color_scheme') == 'dark_blue'): ?>scheme_dark-blue<?php
         elseif (get_sub_field('promo_callout_color_scheme') == 'light_gray'): ?>scheme_light-gray<?php
         elseif (get_sub_field('promo_callout_color_scheme') == 'light_blue'): ?>scheme_light_blue<?php
         endif; ?> <?php if (get_sub_field('promo_callout_image_position') == 'right'): ?>image-right<?php else: ?>image-left<?php endif; ?>">
  <div class="promo-callout_wrapper">
    <div class="container">
      <?php if (get_field("promo_callout_heading")): ?><h2 class="h2 promo-callout_heading"><?php echo get_field("promo_callout_heading"); ?></h2><?php endif; ?>
      <div class="row">
        <div class="col-md-6 col-lg-8">
          <div class="promo-callout_image">
            <?php
            $promo_callout_image = get_sub_field('promo_callout_image');
            if (!empty($promo_callout_image)): ?>
              <img src="<?php echo $promo_callout_image['url']; ?>"
                   alt="<?php echo $promo_callout_image['alt']; ?>" />
            <?php endif; ?>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="promo-callout_content-wrapper">
            <div class="promo-callout_content">
              <h3 class="h3-secondary promo-callout_title">
                <?php if (get_sub_field("promo_callout_title")) echo get_sub_field("promo_callout_title"); ?>
              </h3>
              <p class="promo-callout_text"><?php if (get_sub_field("promo_callout_text")) echo get_sub_field("promo_callout_text"); ?></p>
              <div class="promo-callout_cta">
                <?php
                $promo_callout_button_1 = get_sub_field('promo_callout_button_1');
                if( $promo_callout_button_1 ):
                  $link_url = $promo_callout_button_1['url'];
                  $link_title = $promo_callout_button_1['title'];
                  ?>

                  <a class="btn btn-link <?php
                  if (get_sub_field('promo_callout_color_scheme') == 'light_blue'): ?>btn-link__blue<?php
                  elseif (get_sub_field('promo_callout_color_scheme') == 'white'): ?>btn-link__blue<?php
                  elseif (get_sub_field('promo_callout_color_scheme') == 'light_gray'): ?>btn-link__blue
                    <?php endif; ?>"
                     href="<?php echo esc_url( $link_url ); ?>"
                     title="<?php echo esc_html( $link_title ); ?>"><span
                        class="btn-link_text"><?php echo esc_html( $link_title ); ?></span></a>

                <?php endif; ?>
                <?php
                $promo_callout_button_2 = get_sub_field('promo_callout_button_2');
                if( $promo_callout_button_2 ):
                  $link_url = $promo_callout_button_2['url'];
                  $link_title = $promo_callout_button_2['title'];
                  ?>

                  <a class="btn btn-link <?php
                  if (get_sub_field('promo_callout_color_scheme') == 'light_blue'): ?>btn-link__blue<?php
                  elseif (get_sub_field('promo_callout_color_scheme') == 'white'): ?>btn-link__blue<?php
                  elseif (get_sub_field('promo_callout_color_scheme') == 'light_gray'): ?>btn-link__blue
                    <?php endif; ?>"
                     href="<?php echo esc_url( $link_url ); ?>"
                     title="<?php echo esc_html( $link_title ); ?>"><span
                        class="btn-link_text"><?php echo esc_html( $link_title ); ?></span></a>

                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="decor-element"></div>
</section>