<?php
/**
 * Template part for displaying Hero banner
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finalytics
 */

?>

<section class="hero <?php if( get_field('hero_color_scheme') == 'light' ): ?>scheme-light<?php else: ?>scheme-dark<?php endif; ?> <?php if (get_field("hero_display_promo")): ?>show-promo<?php endif; ?>">
  <div class="container">
    <div class="hero-wrap">
      <h1 class="h1 hero-title"><?php if (get_field("hero_title")) echo get_field("hero_title"); ?></h1>
      <p class="hero-text"><?php if (get_field("hero_text")) echo get_field("hero_text"); ?></p>
      <?php $hero_button_name = get_field("hero_button_name");
      if (!empty($hero_button_name)): ?>
        <a href="<?php if (get_field("hero_button_link")) echo get_field("hero_button_link"); ?>"
           class="btn btn-primary <?php if( get_field('hero_color_scheme') == 'light' ): ?>btn-primary__blue<?php endif; ?>" title="<?php echo $hero_button_name; ?>"><?php echo $hero_button_name; ?></a>
      <?php endif; ?>
    </div>
    <?php if (get_field("hero_display_promo")): ?>
      <div class="hero_promo">
        <h4 class="hero_promo__title"><?php if (get_field("hero_promo_title")) echo get_field("hero_promo_title"); ?></h4>
        <div class="hero_promo__image">
          <?php $hero_promo_logo = get_field('hero_promo_logo');
          if (!empty($hero_promo_logo)): ?>
            <img src="<?php echo $hero_promo_logo['url']; ?>"
                 alt="<?php echo $hero_promo_logo['alt']; ?>"/>
          <?php endif; ?>
        </div>
        <div class="hero_promo__info">
          <div class="hero_promo__info-top">
            <div class="hero_promo__date"><?php if (get_field("hero_promo_date")) echo get_field("hero_promo_date"); ?></div>
            <div class="hero_promo__location"><?php if (get_field("hero_promo_location")) echo get_field("hero_promo_location"); ?></div>
          </div>
          <div class="hero_promo__text"><?php if (get_field("hero_promo_text")) echo get_field("hero_promo_text"); ?></div>
        </div>
      </div>
    <?php endif; ?>
  </div>
  <div class="decor-element"></div>
</section>