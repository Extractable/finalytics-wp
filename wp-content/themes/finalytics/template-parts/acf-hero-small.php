<?php
/**
 * Template part for displaying Hero banner small (ACF Flexible content)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finalytics
 */

?>
<?php $hero_small_custom_id = get_sub_field("hero_small_custom_id"); ?>
<section <?php if (!empty($hero_small_custom_id)): ?>id="<?php echo $hero_small_custom_id; ?>"<?php endif; ?>
         class="hero-small <?php if( get_sub_field('hero_small_color_scheme') == 'light' ): ?>scheme-light<?php else: ?>scheme-dark<?php endif; ?> <?php
         if (get_sub_field("hero_small_hide_overflow")): ?>overflow-hidden<?php endif; ?>">
  <div class="container-xl">

    <div class="hero-small_content">
        <span
            class="hero-small_eyebrow"><?php if (get_sub_field("hero_small_eyebrow")) echo get_sub_field("hero_small_eyebrow"); ?></span>
      <h1 class="h1-small hero-small_title"><?php if (get_sub_field("hero_small_title")) echo get_sub_field("hero_small_title"); ?></h1>
      <p class="hero-small_text"><?php if (get_sub_field("hero_small_text")) echo get_sub_field("hero_small_text"); ?></p>
      <div class="hero-small_cta">
        <?php
        $hero_small_button_1 = get_sub_field('hero_small_button_1');
        if ($hero_small_button_1):
          $link_url = $hero_small_button_1['url'];
          $link_title = $hero_small_button_1['title'];
          ?>
          <?php if (get_sub_field('hero_small_button_1_style') == 'primary'): ?>
          <a class="btn btn-primary"
             href="<?php echo esc_url($link_url); ?>"
             title="<?php echo esc_html($link_title); ?>"><?php echo esc_html($link_title); ?></a>
        <?php else: ?>
          <a class="btn btn-link <?php if (get_sub_field('hero_small_color_scheme') == 'light'): ?>btn-link__blue<?php endif; ?>"
             href="<?php echo esc_url($link_url); ?>"
             title="<?php echo esc_html($link_title); ?>"><span
                class="btn-link_text"><?php echo esc_html($link_title); ?></span></a>
        <?php endif; ?>
        <?php endif; ?>

        <?php
        $hero_small_button_2 = get_sub_field('hero_small_button_2');
        if ($hero_small_button_2):
          $link_url = $hero_small_button_2['url'];
          $link_title = $hero_small_button_2['title'];
          ?>
          <?php if (get_sub_field('hero_small_button_2_style') == 'primary'): ?>
          <a class="btn btn-primary"
             href="<?php echo esc_url($link_url); ?>"
             title="<?php echo esc_html($link_title); ?>"><?php echo esc_html($link_title); ?></a>
        <?php else: ?>
          <a class="btn btn-link <?php if (get_sub_field('hero_small_color_scheme') == 'light'): ?>btn-link__blue<?php endif; ?>"
             href="<?php echo esc_url($link_url); ?>"
             title="<?php echo esc_html($link_title); ?>"><span
                class="btn-link_text"><?php echo esc_html($link_title); ?></span></a>
        <?php endif; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>


  <div class="decor-element"></div>
</section>