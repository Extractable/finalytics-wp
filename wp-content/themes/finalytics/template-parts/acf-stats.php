<?php
/**
 * Template part for displaying Statistic section (ACF Flexible content)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finalytics
 */

?>

<?php
$stats_item_1_button_name = get_sub_field("stats_item_1_button_name");
$stats_item_2_button_name = get_sub_field("stats_item_2_button_name");
$stats_item_3_button_name = get_sub_field("stats_item_3_button_name");
$stats_item_4_button_name = get_sub_field("stats_item_4_button_name");
?>

<section class="stats <?php if (get_sub_field('stats_color_scheme') == 'dark_blue'): ?>scheme_dark-blue<?php
                            elseif (get_sub_field('stats_color_scheme') == 'white'): ?>scheme_white<?php
                            elseif (get_sub_field('stats_color_scheme') == 'light_gray'): ?>scheme_light-gray<?php endif; ?>">

  <div class="container">
    <h2 class="h2 stats-title"><?php if (get_sub_field("stats_section_title")) echo get_sub_field("stats_section_title"); ?></h2>
    <p class="stats-text"><?php if (get_sub_field("stats_section_text")) echo get_sub_field("stats_section_text"); ?></p>
    <div class="stats_items">
      <div class="row">
        <div class="col-6 col-lg-3">
          <div class="stats_item">
            <div class="stats_item-icon">
              <?php $stats_item_1_icon = get_sub_field('stats_item_1_icon');
              if (!empty($stats_item_1_icon)): ?>
                <img src="<?php echo $stats_item_1_icon['url']; ?>"
                     alt="<?php echo $stats_item_1_icon['alt']; ?>"/>
              <?php endif; ?>
            </div>
            <div class="stats_item-number <?php if( get_sub_field('add_a_percent_symbol_1') ): ?>display-percent<?php endif; ?>">
              <span class="stats_item-digits digits_animate"><?php if (get_sub_field("stats_item_1_number")) echo get_sub_field("stats_item_1_number"); ?></span>
            </div>
            <span class="stats_item-note">
          <?php if (get_sub_field("stats_item_1_note")) echo get_sub_field("stats_item_1_note"); ?>
        </span>
            <?php if (!empty($stats_item_1_button_name)): ?>
              <a href="<?php if (get_sub_field("stats_item_1_button_url")) echo get_sub_field("stats_item_1_button_url"); ?>"
                 class="btn btn-link <?php if (get_sub_field('stats_color_scheme') == 'white'): ?>btn-link__blue<?php
                 elseif (get_sub_field('stats_color_scheme') == 'light_gray'): ?>btn-link__blue<?php endif; ?>"
                 title="<?php echo $stats_item_1_button_name; ?>">
                <span class="btn-link_text"><?php echo $stats_item_1_button_name; ?></span>
              </a>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stats_item">
            <div class="stats_item-icon">
              <?php $stats_item_2_icon = get_sub_field('stats_item_2_icon');
              if (!empty($stats_item_2_icon)): ?>
                <img src="<?php echo $stats_item_2_icon['url']; ?>"
                     alt="<?php echo $stats_item_2_icon['alt']; ?>"/>
              <?php endif; ?>
            </div>
            <div class="stats_item-number <?php if( get_sub_field('add_a_percent_symbol_2') ): ?>display-percent<?php endif; ?>">
              <span class="stats_item-digits digits_animate"><?php if (get_sub_field("stats_item_2_number")) echo get_sub_field("stats_item_2_number"); ?></span>
            </div>
            <span class="stats_item-note"><?php if (get_sub_field("stats_item_2_note")) echo get_sub_field("stats_item_2_note"); ?></span>
            <?php if (!empty($stats_item_2_button_name)): ?>
              <a href="<?php if (get_sub_field("stats_item_2_button_url")) echo get_sub_field("stats_item_2_button_url"); ?>"
                 class="btn btn-link <?php if (get_sub_field('stats_color_scheme') == 'white'): ?>btn-link__blue<?php
                 elseif (get_sub_field('stats_color_scheme') == 'light_gray'): ?>btn-link__blue<?php endif; ?>"
                 title="<?php echo $stats_item_2_button_name; ?>">
                <span class="btn-link_text"><?php echo $stats_item_2_button_name; ?></span>
              </a>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stats_item">
            <div class="stats_item-icon">
              <?php $stats_item_3_icon = get_sub_field('stats_item_3_icon');
              if (!empty($stats_item_3_icon)): ?>
                <img src="<?php echo $stats_item_3_icon['url']; ?>"
                     alt="<?php echo $stats_item_3_icon['alt']; ?>"/>
              <?php endif; ?>
            </div>
            <div class="stats_item-number <?php if( get_sub_field('add_a_percent_symbol_3') ): ?>display-percent<?php endif; ?>">
              <span class="stats_item-digits digits_animate"><?php if (get_sub_field("stats_item_3_number")) echo get_sub_field("stats_item_3_number"); ?></span>
            </div>
            <span class="stats_item-note"><?php if (get_sub_field("stats_item_3_note")) echo get_sub_field("stats_item_3_note"); ?></span>
            <?php if (!empty($stats_item_3_button_name)): ?>
              <a href="<?php if (get_sub_field("stats_item_3_button_url")) echo get_sub_field("stats_item_3_button_url"); ?>"
                 class="btn btn-link <?php if (get_sub_field('stats_color_scheme') == 'white'): ?>btn-link__blue<?php
                 elseif (get_sub_field('stats_color_scheme') == 'light_gray'): ?>btn-link__blue<?php endif; ?>"
                 title="<?php echo $stats_item_3_button_name; ?>">
                <span class="btn-link_text"><?php echo $stats_item_3_button_name; ?></span>
              </a>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stats_item">
            <div class="stats_item-icon">
              <?php $stats_item_4_icon = get_sub_field('stats_item_4_icon');
              if (!empty($stats_item_4_icon)): ?>
                <img src="<?php echo $stats_item_4_icon['url']; ?>"
                     alt="<?php echo $stats_item_4_icon['alt']; ?>"/>
              <?php endif; ?>
            </div>
            <div class="stats_item-number <?php if( get_sub_field('add_a_percent_symbol_4') ): ?>display-percent<?php endif; ?>">
              <span class="stats_item-digits digits_animate"><?php if (get_sub_field("stats_item_4_number")) echo get_sub_field("stats_item_4_number"); ?></span>
            </div>
            <span class="stats_item-note"><?php if (get_sub_field("stats_item_4_note")) echo get_sub_field("stats_item_4_note"); ?></span>
            <?php if (!empty($stats_item_4_button_name)): ?>
              <a href="<?php if (get_sub_field("stats_item_4_button_url")) echo get_sub_field("stats_item_4_button_url"); ?>"
                 class="btn btn-link <?php if (get_sub_field('stats_color_scheme') == 'white'): ?>btn-link__blue<?php
                 elseif (get_sub_field('stats_color_scheme') == 'light_gray'): ?>btn-link__blue<?php endif; ?>"
                 title="<?php echo $stats_item_4_button_name; ?>">
                <span class="btn-link_text"><?php echo $stats_item_4_button_name; ?></span>
              </a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>