<?php
/**
 * Template part for displaying Recommended section (ACF Flexible content)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finalytics
 */

?>

<?php $recommended_custom_id = get_sub_field("recommended_custom_id"); ?>

<section <?php if (!empty($recommended_custom_id)): ?>id="<?php echo $recommended_custom_id; ?>"<?php endif; ?>
         class="recommended">
  <div class="container-xl">
    <div class="recommended-holder">
      <?php if (!empty(get_sub_field("recommended_title"))): ?>
        <h2 class="h2 recommended-title"><?php echo get_sub_field("recommended_title"); ?></h2>
      <?php endif; ?>
      <div class="recommended-posts">
        <div class="recommended-posts_main">
          <?php $recommended_main_post = get_sub_field('recommended_main_post');
          if ($recommended_main_post): ?>
            <?php
            $post = $recommended_main_post;
            // Setup this post for WP functions (variable must be named $post).
            setup_postdata($post); ?>
            <div class="recommended-main_item">
              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="recommended-main_link">
                <div class="recommended-main_thumb"><?php
                  $blog_post_recommended_main_thumbnail = get_field('blog_post_recommended_main_thumbnail');
                  if (!empty($blog_post_recommended_main_thumbnail)): ?>
                    <img src="<?php echo $blog_post_recommended_main_thumbnail['url']; ?>"
                         alt="<?php echo $blog_post_recommended_main_thumbnail['alt']; ?>" />
                  <?php endif; ?></div>
              </a>
              <div class="recommended-main_content">
          <span
              class="recommended-main_eyebrow"><?php if (get_field("blog_post_eyebrow")) echo get_field("blog_post_eyebrow"); ?></span>
                <h4 class="h4 recommended-main_title"><?php $title = the_title('', '', FALSE);
                  echo substr($title, 0, 27); ?></h4>
                <div class="recommended-main_excerpt"><?php the_excerpt(); ?></div>
                <a class="btn btn-link btn-link__blue" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <span class="btn-link_text"><?php
                  printf(esc_html__('Read the Article', 'finalytics'), 'finalytics'); ?></span></a>
              </div>
            </div>
            <?php
            // Reset the global post object so that the rest of the page works correctly.
            wp_reset_postdata(); ?>
          <?php endif; ?>
        </div>
        <div class="recommended-posts_secondary-list">
          <?php $recommended_secondary_posts = get_sub_field('recommended_secondary_posts');
          if ($recommended_secondary_posts): ?>
            <?php foreach ($recommended_secondary_posts as $post):
              // Setup this post for WP functions (variable must be named $post).
              setup_postdata($post); ?>
              <div class="recommended-secondary_item">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="blog-preview_item-link"></a>
                <div class="recommended-secondary_thumb"><?php the_post_thumbnail(); ?></div>
                <h4 class="h4 recommended-secondary_title"><?php $title = the_title('', '', FALSE);
                  echo substr($title, 0, 27); ?></h4>
              </div>
            <?php endforeach; ?>
            <?php
            // Reset the global post object so that the rest of the page works correctly.
            wp_reset_postdata(); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>