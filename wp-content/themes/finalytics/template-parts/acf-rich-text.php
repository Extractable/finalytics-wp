<?php
/**
 * Template part for displaying Rich text (ACF Flexible content)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finalytics
 */

?>

<?php $rich_text_custom_id = get_sub_field("rich_text_custom_id"); ?>
<section <?php if (!empty($rich_text_custom_id)): ?>id="<?php echo $rich_text_custom_id; ?>"<?php endif; ?>
         class="rich-text">
  <div class="container-fluid">
    <div class="rich-text_content">
      <?php if (get_sub_field("rich_text_content_block")) echo get_sub_field("rich_text_content_block"); ?>
    </div>
  </div>
</section>
