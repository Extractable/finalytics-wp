<?php
/**
 *Template Name: Custom
 */
get_header(); ?>

<div id="primary" class="content-area">
    <main class="main-content">
    <?php
      get_template_part('template-parts/hero');
      get_template_part('template-parts/img-with-text');
      get_template_part('template-parts/carousel');
      get_template_part('template-parts/stats');
      get_template_part('template-parts/video');
      get_template_part('template-parts/image-grid');
      get_template_part('template-parts/media');
      get_template_part('template-parts/blog-preview'); ?>
    <?php
        //Homepage content
        while (have_posts()) : the_post(); ?>
        <section class="home-content">
            <div class="container">
                <?php the_content(); ?>
            </div>
        </section>
        <?php endwhile; // end of the loop.
        ?>
    </main>
</div>
<?php
get_footer(); ?>
