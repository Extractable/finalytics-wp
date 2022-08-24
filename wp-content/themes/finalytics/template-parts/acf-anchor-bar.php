<?php
/**
 * Template part for displaying Anchor links bar section (ACF Flexible content)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finalytics
 */

?>

<?php $anchor_links_custom_id = get_sub_field("anchor_links_custom_id"); ?>

<section <?php if (!empty($anchor_links_custom_id)): ?>id="<?php echo $anchor_links_custom_id; ?>"<?php endif; ?> class="anchor-bar">
  <div class="container">
    <?php if( have_rows('anchor_links_list') ): ?>
      <ul class="anchor-bar_list">
        <?php while( have_rows('anchor_links_list') ): the_row(); ?>
          <li class="anchor-bar_item">
            <a href="<?php if (get_sub_field("anchor_link_id")) echo get_sub_field("anchor_link_id"); ?>" title="<?php if (get_sub_field("anchor_link_title")) echo get_sub_field("anchor_link_title"); ?>"
               class="anchor-bar_link"><?php if (get_sub_field("anchor_link_title")) echo get_sub_field("anchor_link_title"); ?></a>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php endif; ?>
  </div>
</section>