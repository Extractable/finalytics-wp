<?php
/**
 * Template part for displaying Archive posts previews
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finalytics
 */

?>
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
