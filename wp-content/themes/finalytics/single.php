<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Finalytics
 */

get_header();
?>

  <main id="primary" class="site-main <?php if (get_field('blog_post_color_scheme') == 'light_gray'): ?>scheme_light-gray<?php
  elseif (get_field('blog_post_color_scheme') == 'white'): ?>scheme_white<?php endif; ?>">

    <!-- Hero -->
    <?php $hero_small_custom_id = get_field("hero_small_custom_id"); ?>
    <section <?php if (!empty($hero_small_custom_id)): ?>id="<?php echo $hero_small_custom_id; ?>"<?php endif; ?>
             class="hero-small <?php if( get_field('hero_small_color_scheme') == 'light' ): ?>scheme-light<?php else: ?>scheme-dark<?php endif; ?> <?php
             if (get_field("hero_small_hide_overflow")): ?>overflow-hidden<?php endif; ?> <?php if( get_field('hero_small_background_image') == 'waves' ): ?>bg-waves<?php
             else: ?>bg-dotted<?php endif; ?> <?php if (get_field('hero_small_banner_height') == 'medium'): ?>height-medium<?php
             elseif (get_field('hero_small_banner_height') == 'small'): ?>height-small<?php
             elseif (get_field('hero_small_banner_height') == 'tiny'): ?>height-tiny<?php endif; ?>">
      <div class="container-xl">
        <div class="hero-small_content">
          <?php if (!empty(get_field("hero_small_eyebrow"))): ?>
            <span class="hero-small_eyebrow"><?php echo get_field("hero_small_eyebrow"); ?></span>
          <?php endif; ?>
          <h1 class="h1-small hero-small_title"><?php if (get_field("hero_small_title")) echo get_field("hero_small_title"); ?></h1>
          <?php if (!empty(get_field("hero_small_text"))): ?>
            <p class="hero-small_text"><?php echo get_field("hero_small_text"); ?></p>
          <?php endif; ?>
          <div class="hero-small_cta">
            <?php
            $hero_small_button_1 = get_field('hero_small_button_1');
            if ($hero_small_button_1):
              $link_url = $hero_small_button_1['url'];
              $link_title = $hero_small_button_1['title'];
              ?>
              <?php if (get_field('hero_small_button_1_style') == 'primary'): ?>
              <a class="btn btn-primary"
                 href="<?php echo esc_url($link_url); ?>"
                 title="<?php echo esc_html($link_title); ?>"><?php echo esc_html($link_title); ?></a>
            <?php else: ?>
              <a class="btn btn-link <?php if (get_field('hero_small_color_scheme') == 'light'): ?>btn-link__blue<?php endif; ?>"
                 href="<?php echo esc_url($link_url); ?>"
                 title="<?php echo esc_html($link_title); ?>"><span
                    class="btn-link_text"><?php echo esc_html($link_title); ?></span></a>
            <?php endif; ?>
            <?php endif; ?>

            <?php
            $hero_small_button_2 = get_field('hero_small_button_2');
            if ($hero_small_button_2):
              $link_url = $hero_small_button_2['url'];
              $link_title = $hero_small_button_2['title'];
              ?>
              <?php if (get_field('hero_small_button_2_style') == 'primary'): ?>
              <a class="btn btn-primary"
                 href="<?php echo esc_url($link_url); ?>"
                 title="<?php echo esc_html($link_title); ?>"><?php echo esc_html($link_title); ?></a>
            <?php else: ?>
              <a class="btn btn-link <?php if (get_field('hero_small_color_scheme') == 'light'): ?>btn-link__blue<?php endif; ?>"
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
    <!-- /Hero -->

    <div class="custom-single_wrap">
      <div class="container-fluid">
        <div class="custom-single_meta">
          <div class="entry-meta">
            <?php finalytics_entry_footer(); ?>
          </div><!-- .entry-meta -->
          <div class="widget-right">
            <?php dynamic_sidebar('sidebar-9'); ?>
          </div>
        </div>
      </div>
    </div>

    <!-- Post Content -->
    <section class="rich-text">
      <div class="container-fluid">
        <div class="rich-text_content">
          <?php while ( have_posts() ) : the_post(); ?>


            <?php the_content(); ?>

          <?php endwhile; // End of the loop. ?>
        </div>
      </div>
    </section>
    <!-- /Post Content -->



  </main><!-- #main -->

<?php
get_footer();
