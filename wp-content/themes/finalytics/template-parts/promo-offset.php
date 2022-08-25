<?php
/**
 * Template part for displaying Promo offset section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finalytics
 */

?>

<?php $promo_offset_custom_id = get_field("promo_offset_custom_id"); ?>
<section <?php if (!empty($promo_offset_custom_id)): ?>id="<?php echo $promo_offset_custom_id; ?>"<?php endif; ?>
         class="promo-offset <?php if (get_field('promo_offset_color_scheme') == 'white'): ?>scheme_white<?php
         elseif (get_field('promo_offset_color_scheme') == 'dark_blue'): ?>scheme_dark-blue<?php
         elseif (get_field('promo_offset_color_scheme') == 'light_gray'): ?>scheme_light-gray<?php
         elseif (get_field('promo_offset_color_scheme') == 'light_blue'): ?>scheme_light_blue<?php
         endif; ?>">
  <div class="promo-offset_holder">
    <div class="container">
      <div class="promo-offset_wrapper">
        <div class="promo-offset_content">
          <h3 class="h3-secondary promo-offset_title">
            <?php if (get_field("promo_offset_title")) echo get_field("promo_offset_title"); ?>
          </h3>
          <p class="promo-offset_text"><?php if (get_field("promo_offset_text")) echo get_field("promo_offset_text"); ?></p>
          <?php
          $promo_offset_link = get_field('promo_offset_link');
          if ($promo_offset_link):
            $link_url = $promo_offset_link['url'];
            $link_title = $promo_offset_link['title'];
            ?>
            <a class="btn btn-link <?php
            if (get_field('promo_offset_color_scheme') == 'light_blue'): ?>btn-link__blue<?php
            elseif (get_field('promo_offset_color_scheme') == 'white'): ?>btn-link__blue<?php
            elseif (get_field('promo_offset_color_scheme') == 'light_gray'): ?>btn-link__blue
              <?php endif; ?>"
               href="<?php echo esc_url($link_url); ?>"
               title="<?php echo esc_html($link_title); ?>"><span
                  class="btn-link_text"><?php echo esc_html($link_title); ?></span></a>
          <?php endif; ?>
        </div>
        <div class="promo-offset_image">
          <?php
          $promo_offset_image = get_field('promo_offset_image');
          if (!empty($promo_offset_image)): ?>
            <img src="<?php echo $promo_offset_image['url']; ?>"
                 alt="<?php echo $promo_offset_image['alt']; ?>"/>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>