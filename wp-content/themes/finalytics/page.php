<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finalytics
 */

get_header();
?>

<div id="primary" class="content-area">

	<main class="main-content">
		<!-- Section Repeater -->
		<?php if ( have_rows('section_repeater') ) : ?>
			<?php while( have_rows('section_repeater') ): the_row(); ?>
				<!-- Modules Repeater -->
				<?php if( have_rows('flexible_modules') ):
					while ( have_rows('flexible_modules') ) : the_row();
						
						if( get_row_layout() == 'section_hero' ):
							get_template_part( 'template-parts/acf-hero' );

						elseif( get_row_layout() == 'section_img_text' ):
							get_template_part( 'template-parts/acf-img-with-text' );

						elseif( get_row_layout() == 'section_stats' ):
							get_template_part( 'template-parts/acf-stats' );

						elseif( get_row_layout() == 'section_video' ):
							get_template_part( 'template-parts/acf-video' );
						
						elseif( get_row_layout() == 'section_carousel' ):
							get_template_part( 'template-parts/acf-carousel' );

						elseif( get_row_layout() == 'section_image_grid' ):
							get_template_part( 'template-parts/acf-image-grid' );

						elseif( get_row_layout() == 'section_media' ):
							get_template_part( 'template-parts/acf-media' );

						elseif( get_row_layout() == 'section_blog_preview' ):
							get_template_part( 'template-parts/acf-blog-preview' );

						endif;

					endwhile;
				endif; ?>

			<?php endwhile; ?>
		<?php endif; ?>

	</main><!-- #main -->

</div>

<?php
get_footer(); ?>

