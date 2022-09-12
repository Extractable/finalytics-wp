<?php
/**
 * Template part for displaying Image grid
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finalytics
 */

?>

<?php $image_grid_custom_id = get_field("image_grid_custom_id"); ?>
<section <?php if (!empty($image_grid_custom_id)): ?>id="<?php echo $image_grid_custom_id; ?>"<?php endif; ?>
         class="image-grid <?php if (get_field('image_grid_color_scheme') == 'white'): ?>scheme_white<?php
         elseif (get_field('image_grid_color_scheme') == 'dark_blue'): ?>scheme_dark-blue<?php endif; ?> <?php
         if (get_field("image_grid_hide_overflow")): ?>overflow-hidden<?php endif; ?> <?php
         if (get_field('image_grid_section_style') == 'minimal'): ?>style_minimal<?php
         elseif (get_field('image_grid_section_style') == 'fancy'): ?>style_fancy<?php endif; ?>">
  <div class="container">
    <div class="image-grid_info">
      <?php if (get_field('image_grid_section_style') == 'minimal'): ?>
        <div class="row">
          <div class="col-sm-6">
            <h2 class="h2 image-grid_title"><?php if (get_field("image_grid_title")) echo get_field("image_grid_title"); ?></h2>
            <p class="image-grid_text"><?php if (get_field("image_grid_text")) echo get_field("image_grid_text"); ?></p>
          </div>
          <div class="col-sm-6">
            <div class="image-grid_cta">
              <?php $image_grid_link_name = get_field("image_grid_link_name");
              if (!empty($image_grid_link_name)): ?>
              <a href="<?php if (get_field("image_grid_link_url")) echo get_field("image_grid_link_url"); ?>"
                 class="btn btn-link <?php if (get_field('image_grid_color_scheme') == 'white'): ?>btn-link__blue<?php endif; ?>"
                 title="<?php echo $image_grid_link_name; ?>"><span
                    class="btn-link_text"><?php echo $image_grid_link_name; ?></span>
              </a>
            </div>
            <?php endif; ?>
          </div>
        </div>
      <?php elseif (get_field('image_grid_section_style') == 'fancy'): ?>
        <h2 class="h2 image-grid_title"><?php if (get_field("image_grid_title")) echo get_field("image_grid_title"); ?></h2>
        <p class="image-grid_text"><?php if (get_field("image_grid_text")) echo get_field("image_grid_text"); ?></p>
      <?php endif; ?>
    </div>
    <div class="image-grid_items">
      <div class="row">
        <?php
        // Check rows exists.
        if (have_rows('image_grid_images')):

        // Loop through rows.
        while (have_rows('image_grid_images')) :
        the_row();

        // Load sub field value.
        $image_grid_images_item_img = get_sub_field('image_grid_images_item_img');
        $image_grid_images_item_url = get_sub_field('image_grid_images_item_url');
        $image_grid_images_item_description = get_sub_field('image_grid_images_item_description'); ?>

        <div class="col">
          <div class="image-grid_item">
            <?php if (!empty($image_grid_images_item_url)): ?>
            <a href="<?php echo $image_grid_images_item_url; ?>" class="image-grid_item-link"
               title="<?php echo $image_grid_images_item_img['alt']; ?>">
              <?php else : ?>
              <div class="image-grid_item-holder">
                <?php endif; ?>
                <?php
                if (!empty($image_grid_images_item_img)): ?>
                  <img src="<?php echo $image_grid_images_item_img['url']; ?>"
                       alt="<?php echo $image_grid_images_item_img['alt']; ?>"
                       class="image-grid_item-img"/>
                <?php endif; ?>
                <p class="image-grid_item-descr"><?php if (!empty($image_grid_images_item_description)) echo $image_grid_images_item_description; ?></p>
                <?php if (!empty($image_grid_images_item_url)): ?>
            </a>
            <?php else : ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <?php endwhile;
      endif; ?>
    </div>
  </div>
  <div class="decor-element"></div>
</section>