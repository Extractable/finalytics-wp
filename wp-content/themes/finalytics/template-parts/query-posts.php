<?php
/**
 * Template part for displaying Query posts section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finalytics
 */

?>

<?php $query_posts_custom_id = get_field("query_posts_custom_id"); ?>

<section <?php if (!empty($query_posts_custom_id)): ?>id="<?php echo $query_posts_custom_id; ?>"<?php endif; ?> class="query-posts">
  <div class="container-xl">
    <section class="query-posts_wrap">
      <div class="query-posts_list <?php if (get_field('query_posts_posts_per_row') == 'one'): ?>one-col<?php
      elseif (get_field('query_posts_posts_per_row') == 'four'): ?>four-col<?php endif; ?>">

        <?php
        $number_posts = get_field("query_posts_posts_per_page");
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $cat_id = get_field("query_posts_category_id");
        $post_type = get_field("query_posts_post_type");
        If(empty($cat_id)):
          $args = array('posts_per_page' => $number_posts, 'paged' => $paged, 'post_type' => $post_type, );
        else:
          $args = array('posts_per_page' => $number_posts, 'paged' => $paged, 'cat' => $cat_id, );
        endif;
        $the_query = new WP_Query($args);
        ?>
        <?php if (get_field('query_posts_posts_per_row') == 'one'): ?>

          <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <?php get_template_part('template-parts/content', 'archive_uc', get_post_type()); ?>
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
                  'prev_text'    => __('Prev'),
                  'next_text'    => __('Next'),
                ));
              }
              ?>
            </div>
            <?php wp_reset_postdata(); ?>

          <?php else: ?>
            <p class="no-content"><?php get_template_part('template-parts/content', 'none'); ?></p>
          <?php endif; ?>

        <?php elseif (get_field('query_posts_posts_per_row') == 'four'): ?>
          <?php if ($the_query->have_posts()) : ?>
            <div class="row">
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="col-md-4">
                  <div class="post-preview">
                    <a href="<?php echo the_permalink(); ?>" rel="bookmark" title="<?php echo the_title(); ?>"
                       class="post-preview_link"></a>
                    <figure class="post-preview_thumb">
                      <?php if (has_post_thumbnail()) { // check if the post Thumbnail
                        finalytics_post_thumbnail();
                      } else {
                        echo '<img src="' . get_template_directory_uri() . '/static/img/placeholder.png" alt="post thumbnail">';
                      }
                      ?></figure>
                    <div class="post-preview_content">

                      <?php if (!empty(get_field("blog_post_eyebrow"))): ?>
                        <span
                            class="post-preview_eyebrow"><?php echo get_field("blog_post_eyebrow"); ?></span>
                      <?php endif; ?>
                      <h4 class="h4 post-preview_title"><?php $title = the_title('', '', FALSE);
                        echo substr($title, 0, 27); ?></h4>
                      <div class="post-preview_excerpt">
                        <?php the_excerpt(); ?>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
            </div>
            <div class="pagination">
              <?php $total_pages = $the_query->max_num_pages;
              if ($total_pages > 1) {

                $current_page = max(1, get_query_var('paged'));

                echo paginate_links(array(
                  'base' => get_pagenum_link(1) . '%_%',
                  'format' => '/page/%#%',
                  'current' => $current_page,
                  'total' => $total_pages,
                  'prev_text' => __('Prev'),
                  'next_text' => __('Next'),
                ));
              }
              ?>
            </div>
            <?php wp_reset_postdata(); ?>

          <?php else: ?>
            <p class="no-content"><?php get_template_part('template-parts/content', 'none'); ?></p>

          <?php endif; ?>
        <?php endif; ?>
      </div>
    </section>
  </div>
</section>