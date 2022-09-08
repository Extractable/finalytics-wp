<?php
/**
 * Template part for displaying User Cases Archive posts previews
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finalytics
 */

?>

<section class="post-preview">
  <a href="<?php echo the_permalink(); ?>" rel="bookmark" title="<?php echo the_title(); ?>" class="post-preview_link"></a>
    <figure class="post-preview_thumb"><?php finalytics_post_thumbnail(); ?></figure>
    <div class="post-preview_content">
      <header class="post-preview_header">
        <?php the_title('<h3 class="h3-secondary">', '</h3>'); ?>
      </header>
      <div class="post-preview_excerpt">
        <?php the_excerpt(); ?>
      </div>
    </div>
</section>
