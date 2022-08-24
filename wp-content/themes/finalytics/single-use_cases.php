<?php
/**
 * The template for displaying custom post type - Use cases single post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Finalytics
 */

get_header();
?>

	<main id="primary" class="site-main">

    <?php
    $args = array( 'post_type' => 'use_cases', 'posts_per_page' => 10 );
    $the_query = new WP_Query( $args );
    ?>
    <?php if ( $the_query->have_posts() ) : ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      <?php endwhile;
      wp_reset_postdata(); ?>
    <?php else:  ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>


  </main><!-- #main -->

<?php
get_footer();
