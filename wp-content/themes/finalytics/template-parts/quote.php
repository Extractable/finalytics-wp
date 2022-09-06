<?php
/**
 * Template part for displaying Quote section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finalytics
 */

?>

<?php $quote_custom_id = get_field("quote_custom_id"); ?>
<section <?php if (!empty($quote_custom_id)): ?>id="<?php echo $quote_custom_id; ?>"<?php endif; ?>
         class="quote <?php if (get_field('quote_color_scheme') == 'white'): ?>scheme_white<?php
         elseif (get_field('quote_color_scheme') == 'dark_blue'): ?>scheme_dark-blue<?php endif; ?>
         <?php if (get_field("hide_overflow")): ?>overflow-hidden<?php endif; ?> <?php
         if (get_field("quote_hide_overflow")): ?>overflow-hidden<?php endif; ?>">
  <div class="container-fluid">
    <blockquote
        class="quote_text"><?php if (get_field("quote_text")) echo get_field("quote_text"); ?></blockquote>
    <cite class="quote_author">
      <div class="quote_photo">
        <?php
        $quote_author_photo = get_field('quote_author_photo');
        if (!empty($quote_author_photo)): ?>
          <img src="<?php echo $quote_author_photo['url']; ?>"
               alt="<?php echo $quote_author_photo['alt']; ?>"/>
        <?php endif; ?>
      </div>
      <div class="quote_author-info">
        <span
            class="quote_author-name"><?php if (get_field("quote_author_name")) echo get_field("quote_author_name"); ?></span>
        <span
            class="quote_author-position"><?php if (get_field("quote_author_position")) echo get_field("quote_author_position"); ?></span>
      </div>
    </cite>
  </div>
  <div class="decor-element"></div>
</section>