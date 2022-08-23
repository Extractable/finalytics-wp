<?php
/**
 * Template part for displaying Image with text section (ACF Flexible content)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finalytics
 */

?>

<?php $img_w_t_custom_id = get_sub_field("img_w_t_custom_id"); ?>
<section <?php if (!empty($img_w_t_custom_id)): ?>id="<?php echo $img_w_t_custom_id; ?>"<?php endif; ?>
    class="image-with-text <?php if (get_sub_field('img_w_t_color_scheme') == 'white'): ?>scheme_white<?php
                                      elseif (get_sub_field('img_w_t_color_scheme') == 'dark_blue'): ?>scheme_dark-blue<?php
                                      elseif (get_sub_field('img_w_t_color_scheme') == 'light_gray'): ?>scheme_light-gray<?php
                                      elseif (get_sub_field('img_w_t_color_scheme') == 'light_blue'): ?>scheme_light_blue<?php
                                      endif; ?> <?php if (get_sub_field('img_w_t_image_position') == 'right'): ?>image-right<?php else: ?>image-left<?php endif; ?>">
  <div class="container iwt-wrapper">
    <div class="row">
      <div class="col-md-6 col-lg-7">
        <div class="iwt__image">
          <span class="h4 iwt__image-title"><?php if (get_sub_field("img_w_t_image_description_title")) echo get_sub_field("img_w_t_image_description_title"); ?></span>
          <p class="iwt__image-text"><?php if (get_sub_field("img_w_t_image_description_text")) echo get_sub_field("img_w_t_image_description_text"); ?></p>
          <div class="iwt__image-media">
            <?php if (get_sub_field('img_w_t_image_or_video') == 'video'): ?>
              <div class="embed-container">
                <?php if (get_sub_field("img_w_t_video")) echo get_sub_field("img_w_t_video"); ?>
              </div>
            <?php else:
              $img_w_t_image = get_sub_field('img_w_t_image');
              if (!empty($img_w_t_image)): ?>
                <img src="<?php echo $img_w_t_image['url']; ?>"
                     alt="<?php echo $img_w_t_image['alt']; ?>"/>
              <?php endif;
            endif; ?>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-5">
        <div class="iwt__text">
          <?php $img_w_t_eyebrow = get_sub_field("img_w_t_eyebrow");
          if (!empty($img_w_t_eyebrow)): ?>
            <a class="iwt__text-eyebrow" title="<?php echo $img_w_t_eyebrow; ?>"
               href="<?php if (get_sub_field("img_w_t_eyebrow_url")) echo get_sub_field("img_w_t_eyebrow_url"); ?>"><?php echo $img_w_t_eyebrow; ?></a>
          <?php endif; ?>
          <h2 class="h3 iwt__text-title">
            <a href="<?php if (get_sub_field("img_w_t_title")) echo get_sub_field("img_w_t_title"); ?>"
               title="<?php if (get_sub_field("img_w_t_title")) echo get_sub_field("img_w_t_title"); ?>">
              <?php if (get_sub_field("img_w_t_title")) echo get_sub_field("img_w_t_title"); ?>
            </a>
          </h2>
          <p class="iwt__text-text"><?php if (get_sub_field("img_w_t_text")) echo get_sub_field("img_w_t_text"); ?></p>
          <div class="iwt__text-cta">
            <?php $img_w_t_button_name = get_sub_field("img_w_t_button_name");
            if (!empty($img_w_t_button_name)): ?>
              <a href="<?php if (get_sub_field("img_w_t_button_url")) echo get_sub_field("img_w_t_button_url"); ?>"
                 class="btn btn-primary" title="<?php echo $img_w_t_button_name; ?>"><?php echo $img_w_t_button_name; ?></a>
            <?php endif; ?>
            <?php $img_w_t_second_button_name = get_sub_field("img_w_t_second_button_name");
            if (!empty($img_w_t_second_button_name)): ?>
              <a href="<?php if (get_sub_field("img_w_t_second_button_url")) echo get_sub_field("img_w_t_second_button_url"); ?>"
                 class="btn btn-primary"
                 title="<?php echo $img_w_t_second_button_name; ?>"><?php echo $img_w_t_second_button_name; ?></a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="decor-element"></div>
</section>