<?php
/**
 * Template part for displaying Heading
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finalytics
 */

?>

<?php $heading_custom_id = get_field("heading_custom_id"); ?>
<section <?php if (!empty($heading_custom_id)): ?>id="<?php echo $heading_custom_id; ?>"<?php endif; ?>
         class="heading-section">
  <div class="container">
    <div class="heading-wrap">
      <?php if (get_field("heading_title")): ?>
        <?php if (get_field('heading_title_tag') == 'h1'): ?>
          <h1 class="h1 heading_title"><?php echo get_field("heading_title"); ?></h1>
        <?php elseif (get_field('heading_title_tag') == 'h2'): ?>
          <h2 class="h2 heading_title"><?php echo get_field("heading_title"); ?></h2>
        <?php elseif (get_field('heading_title_tag') == 'h3'): ?>
          <h3 class="h3 heading_title"><?php echo get_field("heading_title"); ?></h3>
        <?php elseif (get_field('heading_title_tag') == 'h4'): ?>
          <h4 class="h4 heading_title"><?php echo get_field("heading_title"); ?></h4>
        <?php elseif (get_field('heading_title_tag') == 'h5'): ?>
          <h5 class="h5 heading_title"><?php echo get_field("heading_title"); ?></h5>
        <?php endif; ?>
      <?php endif; ?>
      <?php if (get_field("heading_subtext")): ?><p class="page_text"><?php echo get_field("heading_subtext"); ?></p><?php endif; ?>
    </div>
  </div>
</section>