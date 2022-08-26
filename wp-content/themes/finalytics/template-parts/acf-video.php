<?php
/**
 * Template part for displaying Video section (ACF Flexible content)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finalytics
 */

?>
<?php $video_custom_id = get_sub_field("video_custom_id"); ?>
<section <?php if (!empty($video_custom_id)): ?>id="<?php echo $video_custom_id; ?>"<?php endif; ?>
    class="video <?php if (get_sub_field('video_color_scheme') == 'dark_blue'): ?>scheme_dark-blue<?php
    elseif (get_sub_field('video_color_scheme') == 'white'): ?>scheme_white<?php
    elseif (get_sub_field('video_color_scheme') == 'light_gray'): ?>scheme_light-gray<?php endif; ?>">
  <div class="container-fluid">
    <div class="video-inner">
      <div class="video-info">
        <div class="row">
          <div class="col-sm-6">
            <h2 class="h3-secondary video-title"><?php if (get_sub_field("video_title")) echo get_sub_field("video_title"); ?></h2>
          </div>
          <div class="col-sm-6">
            <p class="video-text"><?php if (get_sub_field("video_text")) echo get_sub_field("video_text"); ?></p>
            <?php $video_link_name = get_sub_field("video_link_name");
            if (!empty($video_link_name)): ?>
              <a href="<?php if (get_sub_field("video_link_url")) echo get_sub_field("video_link_url"); ?>"
                 class="btn btn-link <?php if (get_sub_field('video_color_scheme') == 'white'): ?>btn-link__blue<?php
                 elseif (get_sub_field('video_color_scheme') == 'light_gray'): ?>btn-link__blue<?php endif; ?>"
                 title="<?php echo $video_link_name; ?>">
                <span class="btn-link_text"><?php echo $video_link_name; ?></span></a>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="embed-container">
        <?php if (get_sub_field("video_embed")) echo get_sub_field("video_embed"); ?>
      </div>
    </div>
    <div class="decor-element"></div>
  </div>
</section>