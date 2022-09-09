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

            elseif( get_row_layout() == 'section_hero_media' ):
                get_template_part( 'template-parts/acf-hero-media' );

            elseif( get_row_layout() == 'section_hero_small' ):
              get_template_part( 'template-parts/acf-hero-small' );

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

            elseif( get_row_layout() == 'section_anchor_bar' ):
              get_template_part( 'template-parts/acf-anchor-bar' );

            elseif( get_row_layout() == 'section_use_cases' ):
              get_template_part( 'template-parts/acf-use-cases' );

            elseif( get_row_layout() == 'section_promo_callout' ):
              get_template_part( 'template-parts/acf-promo-callout' );

            elseif( get_row_layout() == 'section_promo_offset' ):
              get_template_part( 'template-parts/acf-promo-offset' );

            elseif( get_row_layout() == 'section_quote' ):
              get_template_part( 'template-parts/acf-quote' );

            elseif( get_row_layout() == 'section_beaf_slider' ):
              get_template_part( 'template-parts/acf-beaf-slider' );

            elseif( get_row_layout() == 'section_request_form' ):
              get_template_part( 'template-parts/acf-request-form' );

            elseif( get_row_layout() == 'section_request_form' ):
              get_template_part( 'template-parts/acf-request-form' );

            elseif( get_row_layout() == 'section_recommended' ):
              get_template_part( 'template-parts/acf-recommended' );

            elseif( get_row_layout() == 'section_rich_text' ):
              get_template_part( 'template-parts/acf-rich-text' );

            elseif( get_row_layout() == 'section_query_posts' ):
              get_template_part( 'template-parts/acf-query-posts' );

            elseif( get_row_layout() == 'section_list' ):
              get_template_part( 'template-parts/acf-list' );

						endif;

					endwhile;
				endif; ?>

			<?php endwhile; ?>
		<?php endif; ?>

	</main><!-- #main -->

</div>

<?php
get_footer(); ?>

