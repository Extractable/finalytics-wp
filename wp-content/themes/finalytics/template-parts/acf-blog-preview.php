<?php
/**
 * Template part for displaying Blog preview section (ACF Flexible content)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finalytics
 */

?>

<?php $blog_preview_custom_id = get_sub_field("blog_preview_custom_id"); ?>

<section <?php if (!empty($blog_preview_custom_id)): ?>id="<?php echo $blog_preview_custom_id; ?>"<?php endif; ?>
         class="blog-preview <?php if (get_sub_field('blog_preview_color_scheme') == 'dark_blue'): ?>scheme_dark-blue<?php
         elseif (get_sub_field('blog_preview_color_scheme') == 'white'): ?>scheme_white<?php
         elseif (get_sub_field('blog_preview_color_scheme') == 'light_blue'): ?>scheme_light-blue<?php
         elseif (get_sub_field('blog_preview_color_scheme') == 'light_gray'): ?>scheme_light-gray<?php endif; ?> <?php
         if (get_sub_field("blog_preview_overflow")): ?>overflow-hidden<?php endif; ?>">
  <div class="decor-element"></div>

  <div class="container">
    <div class="blog-preview_content">
      <h2 class="h2 blog-preview_title"><?php if (get_sub_field("blog_preview_title")) echo get_sub_field("blog_preview_title"); ?></h2>
      <p class="blog-preview_text"><?php if (get_sub_field("blog_preview_text")) echo get_sub_field("blog_preview_text"); ?></p>
      <div class="blog-preview_list">
        <?php $blog_preview_posts = get_sub_field('blog_preview_posts');
        if ($blog_preview_posts): ?>
          <div class="row">
            <?php foreach ($blog_preview_posts as $post):
              // Setup this post for WP functions (variable must be named $post).
              setup_postdata($post); ?>
              <div class="col-md-4">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="blog-preview_item-link">
                  <div class="blog-preview_item-thumb"><?php the_post_thumbnail(); ?></div>
                  <div class="blog-preview_item-content">
                      <span
                          class="blog-preview_item-eyebrow"><?php if (get_sub_field("blog_post_eyebrow")) echo get_sub_field("blog_post_eyebrow"); ?></span>
                    <h4 class="h4 blog-preview_item-title"><?php $title = the_title('', '', FALSE);
                      echo substr($title, 0, 27); ?></h4>
                    <div class="blog-preview_item-excerpt"><?php the_excerpt(); ?></div>
                  </div>
                </a>
              </div>
            <?php endforeach; ?>
          </div>
          <?php
          // Reset the global post object so that the rest of the page works correctly.
          wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
      <?php
      $blog_preview_link = get_sub_field('blog_preview_link');
      if ($blog_preview_link):
        $link_url = $blog_preview_link['url'];
        $link_title = $blog_preview_link['title'];
        $link_target = $blog_preview_link['target'] ? $blog_preview_link['target'] : '_self';
        ?>
        <div class="blog-preview_cta">
          <a class="btn btn-link <?php if (get_sub_field('blog_preview_color_scheme') == 'light_blue'): ?>btn-link__blue<?php
          elseif (get_sub_field('blog_preview_color_scheme') == 'white'): ?>btn-link__blue<?php endif; ?>"
             href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"
             title="<?php echo esc_html($link_title); ?>"><span
                class="btn-link_text"><?php echo esc_html($link_title); ?></span></a>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>