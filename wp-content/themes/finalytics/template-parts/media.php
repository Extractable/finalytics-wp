<?php
/**
 * Template part for displaying Media section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finalytics
 */

?>

<?php $media_custom_id = get_field("media_custom_id"); ?>
<section <?php if (!empty($media_custom_id)): ?>id="<?php echo $media_custom_id; ?>"<?php endif; ?> class="media <?php if (get_field('media_color_scheme') == 'white'): ?>scheme_white<?php
                            elseif (get_field('media_color_scheme') == 'dark_blue'): ?>scheme_dark-blue<?php endif; ?> <?php
if (get_field("media_hide_overflow")): ?>overflow-hidden<?php endif; ?>">

  <div class="container">
    <div class="media_content">
      <h2 class="h2 media_image-title"><?php if (get_field("media_title")) echo get_field("media_title"); ?></h2>
      <p class="media_image-text"><?php if (get_field("media_text")) echo get_field("media_text"); ?></p>
      <?php
      $media_link = get_field('media_link');
      if( $media_link ):
        $link_url = $media_link['url'];
        $link_title = $media_link['title'];
        ?>

        <a class="btn btn-link <?php if (get_field('media_color_scheme') == 'white'): ?>btn-link__blue<?php endif; ?>"
           href="<?php echo esc_url( $link_url ); ?>"
           title="<?php echo esc_html( $link_title ); ?>"><span
              class="btn-link_text"><?php echo esc_html( $link_title ); ?></span></a>
      <?php endif; ?>
    </div>
    <div class="media_holder">
      <?php if (get_field('media_image_or_video') == 'video'): ?>
        <div class="embed-container">
          <?php if (get_field("media_video")) echo get_field("media_video"); ?>
        </div>
      <?php else:
        $media_image = get_field('media_image');
        if (!empty($media_image)): ?>
          <img src="<?php echo $media_image['url']; ?>"
               alt="<?php echo $media_image['alt']; ?>"/>
        <?php endif;
      endif; ?>
    </div>
  </div>
  <div class="decor-element"></div>
</section>