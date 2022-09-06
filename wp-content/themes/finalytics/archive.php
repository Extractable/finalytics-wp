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


      <?php if (have_posts()) : ?>

        <header class="archive_heading">
          <?php
          the_archive_title('<h2 class="post-preview-title">', '</h2>');
          the_archive_description('<div class="archive-description">', '</div>');
          ?>
        </header>
      <div class="post-preview-list">
        <?php
        /* Start the Loop */
        while (have_posts()) :
          the_post();

          /*
           * Include the Post-Type-specific template for the content.
           * If you want to override this in a child theme, then include a file
           * called content-___.php (where ___ is the Post Type name) and that will be used instead.
           */
          get_template_part('template-parts/content', 'archive', get_post_type());
          // get_template_part('template-parts/content', 'none');

        endwhile;

        the_posts_navigation();

      else :

        get_template_part('template-parts/content', 'none');

      endif;
      ?>
      </div>
    </div>
  </div>
  </div>

<?php
get_footer();
