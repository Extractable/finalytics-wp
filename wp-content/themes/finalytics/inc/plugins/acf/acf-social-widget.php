<?php

/**
 * A custom ACF widget.
 */
class ACF_Social_Widget extends WP_Widget {

  /**
   * Register widget with WordPress.
   */
  function __construct() {
    parent::__construct(
      'acf_social_widget', // Base ID
      __('ACF Social Widget', 'text_domain'), // Name
      array( 'description' => __( 'ACF Social Widget', 'acf_social_domain' ), 'classname' => 'acf-social-widget' ) // Args
    );
  }

  /**
   * Front-end display of widget.
   *
   * @see WP_Widget::widget()
   *
   * @param array $args     Widget arguments.
   * @param array $instance Saved values from database.
   */
  public function widget( $args, $instance ) {
    echo $args['before_widget'];
    if ( !empty($instance['title']) ) {
      echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
    }

    //echo get_field('title', 'widget_' . $args['widget_id']);
    ?>
      <ul class="acf-social-list <?php if(get_field('social_color_scheme', 'widget_' . $args['widget_id']) == "light"): ?>scheme-light<?php else: ?>scheme-dark<?php endif; ?>">
        <li class="acf-social-item">
          <a href="<?php echo get_field('social_fb_url', 'widget_' . $args['widget_id']); ?>" class="acf-social-link acf-social-fb" target="_blank" title="facebook">
            <span>facebook</span>
          </a>
        </li>
        <li class="acf-social-item">
          <a href="<?php echo get_field('social_tw_url', 'widget_' . $args['widget_id']); ?>" class="acf-social-link acf-social-tw" target="_blank" title="facebook">
            <span>twitter</span>
          </a>
        </li>
        <li class="acf-social-item">
          <a href="<?php echo get_field('social_lk_url', 'widget_' . $args['widget_id']); ?>" class="acf-social-link acf-social-lk" target="_blank" title="facebook">
            <span>linkedin</span>
          </a>
        </li>
        <li class="acf-social-item">
          <a href="mailto:<?php echo get_field('social_email_address', 'widget_' . $args['widget_id']); ?>" class="acf-social-link acf-social-ml" target="_blank" title="email">
            <span>mail</span>
          </a>
        </li>
      </ul>
    <?php
    echo $args['after_widget'];
  }

  /**
   * Back-end widget form.
   *
   * @see WP_Widget::form()
   *
   * @param array $instance Previously saved values from database.
   */
  public function form( $instance ) {
    if ( isset($instance['title']) ) {
      $title = $instance['title'];
    }
    ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
    </p>
    <?php
  }

  /**
   * Sanitize widget form values as they are saved.
   *
   * @see WP_Widget::update()
   *
   * @param array $new_instance Values just sent to be saved.
   * @param array $old_instance Previously saved values from database.
   *
   * @return array Updated safe values to be saved.
   */
  public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

    return $instance;
  }

} // class ACF_Social_Widget

// register ACF_Social_Widget widget
add_action( 'widgets_init', function(){
  register_widget( 'ACF_Social_Widget' );
});