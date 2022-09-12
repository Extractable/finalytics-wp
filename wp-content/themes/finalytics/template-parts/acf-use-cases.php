<?php
/**
 * Template part for displaying Use cases section (ACF Flexible content)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finalytics
 */

?>

<?php $use_cases_custom_id = get_sub_field("use_cases_custom_id"); ?>
<section <?php if (!empty($use_cases_custom_id)): ?>id="<?php echo $use_cases_custom_id; ?>"<?php endif; ?>
         class="use-cases <?php if (get_sub_field('use_cases_color_scheme') == 'light_blue'): ?>scheme_light-blue<?php
                            elseif (get_sub_field('use_cases_color_scheme') == 'white'): ?>scheme_white<?php
                            elseif (get_sub_field('use_cases_color_scheme') == 'light_gray'): ?>scheme_light-gray<?php endif; ?>">

  <div class="container">
    <h2 class="h2 use-cases_title"><?php if (get_sub_field("use_cases_title")) echo get_sub_field("use_cases_title"); ?></h2>
    <p class="use-cases_text"><?php if (get_sub_field("use_cases_text")) echo get_sub_field("use_cases_text"); ?></p>
    <div class="use-cases_grid">
      <div class="row">
        <?php
        $number_posts = get_sub_field("use_cases_number_posts");
        // args
        $args = array(
          'posts_per_page'	=> $number_posts,
          'post_type'		=> 'use_cases',
        );
        // query
        $the_query = new WP_Query( $args );
        ?>
        <?php if( $the_query->have_posts() ): ?>
          <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <?php if ($number_posts % 4 == 0): ?>
            <div class="col-md-3">
          <?php elseif ($number_posts % 3 == 0): ?>
            <div class="col-md-4">
            <?php endif; ?>
            <a class="use-cases_item-link" href="<?php the_permalink(); ?>">
              <div class="use-cases_item-thumb"><?php $use_case_post_icon = get_field('use_case_post_icon');
              if (!empty($use_case_post_icon)): ?>
                <img src="<?php echo $use_case_post_icon['url']; ?>"
                     alt="<?php echo $use_case_post_icon['alt']; ?>"/>
              <?php endif; ?></div>
              <h4 class="h4 use-cases_item-title"><?php the_title(); ?></h4>
              <div class="use-cases_item-excerpt"><?php the_excerpt(); ?></div>
            </a>
          </div>
          <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
      </div>
    </div>
  </div>
</section>