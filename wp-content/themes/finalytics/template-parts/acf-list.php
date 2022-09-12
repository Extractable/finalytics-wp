<?php
/**
 * Template part for displaying List section (ACF Flexible content)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finalytics
 */

?>

<?php $list_custom_id = get_sub_field("list_custom_id"); ?>
<section <?php if (!empty($list_custom_id)): ?>id="<?php echo $list_custom_id; ?>"<?php endif; ?>
         class="list <?php if (get_sub_field('list_color_scheme') == 'dark_blue'): ?>scheme_dark-blue<?php
         elseif (get_sub_field('list_color_scheme') == 'light_blue'): ?>scheme_light-blue<?php endif; ?>">
  <div class="container-xl">
    <div class="list-holder">
      <div class="list_heading">
        <?php if (!empty(get_sub_field("list_eyebrow"))): ?>
          <span class="list_eyebrow"><?php echo get_sub_field("list_eyebrow"); ?></span>
        <?php endif; ?>
        <h1 class="h3 list_title"><?php if (get_sub_field("list_title")) echo get_sub_field("list_title"); ?></h1>
        <?php if (!empty(get_sub_field("list_subtitle"))): ?>
          <h5 class="h5 list_subtitle"><?php echo get_sub_field("list_subtitle"); ?></h5>
        <?php endif; ?>
      </div>
      <ul class="list_links <?php if (get_sub_field('list_columns') == "one"): ?>list_one-col<?php
      elseif (get_sub_field('list_columns') == "two"): ?>list_two-col<?php
      elseif (get_sub_field('list_columns') == "three"): ?>list_three-col<?php
      elseif (get_sub_field('list_columns') == "four"): ?>list_four-col<?php endif; ?>">

        <?php if (have_rows('list_links')): ?>
          <?php while (have_rows('list_links')): the_row(); ?>
            <li class="list_link-item">
              <?php
              $list_link = get_sub_field('list_link');
              if ($list_link):
                $link_url = $list_link['url'];
                $link_title = $list_link['title'];
                ?>
                <a class="list_link"
                   href="<?php echo esc_url($link_url); ?>"
                   title="<?php echo esc_html($link_title); ?>"><?php echo esc_html($link_title); ?></a>
              <?php endif; ?>
            </li>
          <?php endwhile; ?>
        <?php endif; ?>

      </ul>
    </div>
  </div>
</section>