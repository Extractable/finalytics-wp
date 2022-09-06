<?php
/*
* Template Name: Custom Post
 * Template Post Type: post
*/

get_header(); ?>

  <main id="primary" class="custom-single site-main <?php if (get_field('blog_post_color_scheme') == 'light_gray'): ?>scheme_light-gray<?php
  elseif (get_field('blog_post_color_scheme') == 'white'): ?>scheme_white<?php endif; ?>">
    <!-- section hero banner required -->
    <?php
    get_template_part('template-parts/hero-small'); ?>
    <div class="custom-single_wrap">
      <div class="container-fluid">
        <div class="custom-single_meta">
          <?php if (get_field('blog_post_display_topics')): ?>
            <div class="entry-meta">
              <?php finalytics_entry_footer(); ?>
            </div><!-- .entry-meta -->
          <?php endif; ?>
          <?php if (get_field('blog_post_display_sidebar')): ?>
            <div class="widget-right">
              <?php dynamic_sidebar('sidebar-9'); ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <!-- Section Repeater -->
    <?php if (have_rows('flex_post_repeater')) : ?>
      <?php while (have_rows('flex_post_repeater')): the_row(); ?>
        <!-- Modules Repeater -->
        <?php if (have_rows('flex_post_modules')):
          while (have_rows('flex_post_modules')) : the_row();

            if (get_row_layout() == 'section_post_hero_small'):
              get_template_part('template-parts/acf-hero-small');
            elseif (get_row_layout() == 'section_post_blog_preview'):
              get_template_part('template-parts/acf-blog-preview');
            elseif (get_row_layout() == 'section_post_rich_text'):
              get_template_part('template-parts/acf-rich-text');

            endif;

          endwhile;
        endif; ?>

      <?php endwhile; ?>
    <?php endif; ?>
  </main><!-- #main -->

<?php
get_footer();
