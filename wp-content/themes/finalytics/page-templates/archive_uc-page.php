<?php
/**
 *Template Name: Archive Use Case
 */
get_header(); ?>

<div id="primary" class="archive">
  <?php get_template_part('template-parts/hero-small'); ?>
  <div class="container">
    <div class="archive_wrap">
      <div class="archive_heading">
        <?php the_title('<h2 class="post-preview-title">', '</h2>');
        the_content(); ?>
      </div>
      <div class="post-preview-list">
        <?php
        $number_posts = get_field("archive_uc_posts_per_page");
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array('post_type' => 'use_cases', 'posts_per_page' => $number_posts, 'paged' => $paged,);
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <?php get_template_part('template-parts/content', 'archive', get_post_type()); ?>
          <?php endwhile; ?>
          <div class="pagination">
          <?php $total_pages = $the_query->max_num_pages;
          if ($total_pages > 1){

            $current_page = max(1, get_query_var('paged'));

            echo paginate_links(array(
              'base' => get_pagenum_link(1) . '%_%',
              'format' => '/page/%#%',
              'current' => $current_page,
              'total' => $total_pages,
              'prev_text'    => __('«'),
              'next_text'    => __('»'),
            ));
          }
          ?>
          </div>
          <?php wp_reset_postdata(); ?>

        <?php else: ?>
          <p class="no-content"><?php get_template_part('template-parts/content', 'none'); ?></p>

        <?php endif; ?>
      </div>
    </div>
  </div>
  <?php get_template_part('template-parts/blog-preview');
        get_template_part('template-parts/request-form'); ?>
</div>
<?php
get_footer(); ?>
