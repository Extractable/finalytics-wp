<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Finalytics
 */

?>

	<footer id="colophon" class="site-footer">
    <div class="container">

      <div class="row">
        <div class="col-lg-5">
          <div class="footer-brand">
          <?php dynamic_sidebar('sidebar-3'); ?>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="footer-info">
            <div class="row">
              <div class="col-6 col-md-3">
                <?php dynamic_sidebar('sidebar-4'); ?>
              </div>
              <div class="col-6 col-md-3">
                <?php dynamic_sidebar('sidebar-5'); ?>
              </div>
              <div class="col-6 col-md-3">
                <?php dynamic_sidebar('sidebar-6'); ?>
              </div>
              <div class="col-6 col-md-3">
                <?php dynamic_sidebar('sidebar-7'); ?>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <a href="<?php echo esc_url( __( 'https://finalytics.ai/', 'finalytics' ) ); ?>" class="site-info">
              <?php
              printf( esc_html__( '© Finalytics.ai, Inc. All Rights Reserved.', 'finalytics' ), 'finalytics' );
              ?>
            </a>
            <?php dynamic_sidebar('sidebar-8'); ?>
          </div>
        </div>
      </div>
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
