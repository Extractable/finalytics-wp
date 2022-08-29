<?php
/**
 * Template part for displaying Form Two column section (ACF Flexible content)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Finalytics
 */

?>

<?php $request_form_custom_id = get_sub_field("request_form_custom_id"); ?>
<section <?php if (!empty($request_form_custom_id)): ?>id="<?php echo $request_form_custom_id; ?>"<?php endif; ?>
         class="request-form <?php if (get_sub_field('request_form_color_scheme') == 'dark_blue'): ?>scheme_dark-blue<?php
         elseif (get_sub_field('request_form_color_scheme') == 'white'): ?>scheme_white<?php endif; ?>">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="request-form_content-holder">
        <div class="request-form_content">
          <h2 class="h1 request-form_title"><?php if (get_sub_field("request_form_title")) echo get_sub_field("request_form_title"); ?></h2>
          <p class="request-form_text"><?php if (get_sub_field("request_form_text")) echo get_sub_field("request_form_text"); ?></p>
          <div class="request-form_cta">
            <a class="request-form_email" title="send us email"
               href="mailto:<?php if (get_sub_field("request_form_email")) echo get_sub_field("request_form_email"); ?>">
              <?php
              printf( esc_html__( 'Email Us', 'finalytics' ), 'finalytics' );
              ?>
            </a>
            <?php
            $request_form_link = get_sub_field('request_form_link');
            if ($request_form_link):
              $link_url = $request_form_link['url'];
              $link_title = $request_form_link['title'];
              ?>

              <a class="btn btn-link <?php
              if (get_sub_field('request_form_color_scheme') == 'white'): ?>btn-link__blue<?php
              endif; ?>"
                 href="<?php echo esc_url($link_url); ?>"
                 title="<?php echo esc_html($link_title); ?>"><span
                    class="btn-link_text"><?php echo esc_html($link_title); ?></span></a>

            <?php endif; ?>
          </div>
        </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="request-form_form">
          <?php $posts = get_sub_field('request_form_shortcode');
          if( $posts ):
            foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT)
              $cf7_id= $p->ID;
              echo do_shortcode( '[contact-form-7 id="'.$cf7_id.'" ]' );
            endforeach;
          endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>