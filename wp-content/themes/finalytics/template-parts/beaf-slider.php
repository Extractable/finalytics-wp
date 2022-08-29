<?php
/**
 * Template part for displaying Before and After slider
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finalytics
 */

?>

<?php $beaf_custom_id = get_field("beaf_custom_id"); ?>
<section <?php if (!empty($beaf_custom_id)): ?>id="<?php echo $beaf_custom_id; ?>"<?php endif; ?> class="beaf-slider">
  <div class="container">
    <div class="beaf_content">
      <?php if (get_field("beaf_heading")): ?><h2
          class="h2 beaf_heading"><?php echo get_field("beaf_heading"); ?></h2><?php endif; ?>
      <div class="beaf_tabs">
        <ul class="nav nav-pills beaf_tabs-nav" id="pills-tab" role="tablist">
          <?php
          if (have_rows('beaf_tabs')):
            $count = 0;
            while (have_rows('beaf_tabs')) : the_row(); ?>
              <li class="nav-item beaf_nav-item" role="presentation">
                <button class="nav-link <?php if ($count == 0) { ?>active<?php } ?>"
                        id="pills-<?php if (get_field("beaf_tab_id")) echo get_field("beaf_tab_id"); ?>-tab"
                        data-toggle="pill"
                        data-target="#pills-<?php if (get_field("beaf_tab_id")) echo get_field("beaf_tab_id"); ?>"
                        type="button" role="tab"
                        aria-controls="pills-<?php if (get_field("beaf_tab_id")) echo get_field("beaf_tab_id"); ?>"
                        aria-selected="<?php if ($count == 0) { ?>true<?php } else { ?>false<?php } ?>">
                  <?php if (get_field("beaf_tab_title")) echo get_field("beaf_tab_title"); ?></button>
              </li>
              <?php $count++; ?>
            <?php
            endwhile;
          endif; ?>
        </ul>
        <div class="tab-content beaf_tab-content" id="pills-tabContent">
          <?php
          if (have_rows('beaf_tabs')):
            $count = 0;
            while (have_rows('beaf_tabs')) : the_row(); ?>
              <div class="tab-pane beaf_tab-pane fade <?php if ($count == 0) { ?>show active<?php } ?>"
                   id="pills-<?php if (get_field("beaf_tab_id")) echo get_field("beaf_tab_id"); ?>"
                   role="tabpanel"
                   aria-labelledby="pills-<?php if (get_field("beaf_tab_id")) echo get_field("beaf_tab_id"); ?>-tab">

                <p class="beaf_tab-text"><?php if (get_field("beaf_tab_text")) echo get_field("beaf_tab_text"); ?></p>

                <div class="beaf_slider-holder">
                  <div id="beer-slider" class="beer-slider beaf_tab-slider" data-beer-label="before">
                    <?php $beaf_tab_image_before = get_field('beaf_tab_image_before');
                    if (!empty($beaf_tab_image_before)): ?>
                      <img src="<?php echo $beaf_tab_image_before['url']; ?>"
                           alt="<?php echo $beaf_tab_image_before['alt']; ?>"/>
                    <?php endif; ?>
                    <div class="beer-reveal" data-beer-label="after">
                      <?php $beaf_tab_image_after = get_field('beaf_tab_image_after');
                      if (!empty($beaf_tab_image_after)): ?>
                        <img src="<?php echo $beaf_tab_image_after['url']; ?>"
                             alt="<?php echo $beaf_tab_image_after['alt']; ?>"/>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
              <?php $count++; ?>
            <?php
            endwhile;
          endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="decor-element"></div>
</section>