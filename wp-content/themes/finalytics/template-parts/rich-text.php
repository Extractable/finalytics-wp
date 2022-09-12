<?php
/**
 * Template part for displaying Rich text
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finalytics
 */

?>

<?php $rich_text_custom_id = get_field("rich_text_custom_id"); ?>
<section <?php if (!empty($rich_text_custom_id)): ?>id="<?php echo $rich_text_custom_id; ?>"<?php endif; ?>
         class="rich-text <?php if (get_field('rich_text_color_scheme') == 'light_gray'): ?>scheme_light-gray<?php
         elseif (get_field('rich_text_color_scheme') == 'white'): ?>scheme_white<?php endif; ?>">
  <div class="container-fluid">
    <div class="rich-text_content">
      <?php if (get_field("rich_text_content_block")) echo get_field("rich_text_content_block"); ?>
    </div>
  </div>
</section>