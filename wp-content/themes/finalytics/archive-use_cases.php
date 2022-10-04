<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finalytics
 */

get_header();
?>

  <div id="primary" class="archive">
    <div class="container">
      <div class="archive_wrap">
        <div class="archive_heading">
          <?php the_archive_title('<h2 class="post-preview-title">', '</h2>');
          the_archive_description('<div class="archive-description">', '</div>'); ?>
        </div>
        <div class="post-preview-list">
          <?php
          if (have_posts()) :
            while (have_posts()) :
              the_post();
              ?>
                <?php get_template_part('template-parts/content', 'archive', get_post_type()); ?>

            <?php endwhile;

            the_posts_navigation(); ?>
            <?php wp_reset_postdata(); ?>

          <?php else: ?>
            <p class="no-content"><?php get_template_part('template-parts/content', 'none'); ?></p>

          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

<?php
get_footer();
