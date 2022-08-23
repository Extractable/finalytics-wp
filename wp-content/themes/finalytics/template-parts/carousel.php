<?php
/**
 * Template part for displaying Carousel two-columns section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finalytics
 */

?>

<?php $carousel_custom_id = get_field("carousel_custom_id"); ?>
<section <?php if (!empty($carousel_custom_id)): ?>id="<?php echo $carousel_custom_id; ?>"<?php endif; ?>
    class="carousel-two-col <?php if (get_field('carousel_color_scheme') == 'white'): ?>scheme_white<?php
                                      elseif (get_field('carousel_color_scheme') == 'dark_blue'): ?>scheme_dark-blue<?php
                                      elseif (get_field('carousel_color_scheme') == 'light_gray'): ?>scheme_light-gray<?php
                                      elseif (get_field('carousel_color_scheme') == 'light_blue'): ?>scheme_light_blue<?php endif; ?>">
  <div class="container">
    <h2 class="h2 carousel-two-col__title"><?php if (get_field("carousel_title")) echo get_field("carousel_title"); ?></h2>
    <div class="carousel-two-col__wrap">
    <?php if( have_rows('carousel_items') ): ?>
      <ul class="carousel-two-col__slides">
        <?php while( have_rows('carousel_items') ): the_row(); ?>
          <li class="carousel-two-col__slide <?php if (get_sub_field('carousel_item_image_position') == 'right'): ?>image-right<?php else: ?>image-left<?php endif; ?>">
            <div class="row no-gutters">
              <div class="col-12 col-md-6">
                <div class="carousel-two-col__slide-media">
                  <?php if (get_sub_field('carousel_item_image_or_video') == 'video'): ?>
                    <div class="embed-container">
                      <?php if (get_sub_field("carousel_item_video")) echo get_sub_field("carousel_item_video"); ?>
                    </div>
                  <?php else:
                   $carousel_item_image = get_sub_field('carousel_item_image');
                    if (!empty($carousel_item_image)): ?>
                      <img src="<?php echo $carousel_item_image['url']; ?>"
                           alt="<?php echo $carousel_item_image['alt']; ?>"/>
                    <?php endif;
                  endif; ?>
                </div>

              </div>
              <div class="col-12 col-md-6">
                <div class="carousel-two-col__slide-content">
                  <a href="<?php if (get_sub_field("carousel_item_eyebrow_url")) echo get_sub_field("carousel_item_eyebrow_url"); ?>"
                     class="carousel-two-col__slide-eyebrow" title="<?php if (get_sub_field("carousel_item_eyebrow")) echo get_sub_field("carousel_item_eyebrow"); ?>">
                    <?php if (get_sub_field("carousel_item_eyebrow")) echo get_sub_field("carousel_item_eyebrow"); ?>
                  </a>
                  <h3 class="h3 h3-secondary carousel-two-col__slide-title">
                    <a href="<?php if (get_sub_field("carousel_item_title_url")) echo get_sub_field("carousel_item_title_url"); ?>"
                       title="<?php if (get_sub_field("carousel_item_title")) echo get_sub_field("carousel_item_title"); ?>">
                      <?php if (get_sub_field("carousel_item_title")) echo get_sub_field("carousel_item_title"); ?>
                    </a>
                  </h3>
                  <p class="carousel-two-col__slide-text"><?php if (get_sub_field("carousel_item_text")) echo get_sub_field("carousel_item_text"); ?></p>

                  <div class="carousel-two-col__slide-cta">
                    <?php $carousel_item_button_name = get_sub_field("carousel_item_button_name");
                    if (!empty($carousel_item_button_name)): ?>
                      <a href="<?php if (get_sub_field("carousel_item_button_url")) echo get_sub_field("carousel_item_button_url"); ?>"
                         class="btn btn-primary" title="<?php echo $carousel_item_button_name; ?>"><?php echo $carousel_item_button_name; ?></a>
                    <?php endif; ?>
                    <?php $carousel_item_secondary_button_name = get_sub_field("carousel_item_secondary_button_name");
                    if (!empty($carousel_item_secondary_button_name)): ?>
                      <a href="<?php if (get_sub_field("carousel_item_secondary_button_url")) echo get_sub_field("carousel_item_secondary_button_url"); ?>"
                         class="btn btn-primary"
                         title="<?php echo $carousel_item_secondary_button_name; ?>"><?php echo $carousel_item_secondary_button_name; ?></a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php endif; ?>
    </div>
    <div class="decor-element"></div>
  </div>
</section>