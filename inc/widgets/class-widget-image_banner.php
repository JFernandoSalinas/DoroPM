<?php
/**
 * Home: Image Banner
 *
 * @since doropm 1.0.0
 *
 * Description: Allows you to add an Image banner to your widget area along with content.
 * Author: Fernando Salinas
 * Author URI: http://fersatos.com/
 */
 class DoroPM_Image_Banner extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		$widget_ops = array(
			'classname' => 'DoroPM_Image_Banner',
			'description' => 'Creates an image banner for the widget area along with text.',
		);
		parent::__construct( 'DoroPM_Image_Banner', 'Image Banner', $widget_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		// outputs the content of the widget
    ?>
    <div id='image-banner'class='home-widget'>
      <div class='image-cover'style="background-image:url(<?php echo  $instance['image']   ?>)">
          <container>
              <div class='row'>
                <div class='col-md-12 col-xs-12'>
                  <div class ="banner-content">
                    <h2 class="banner-title"><?php echo wpautop( esc_html( $instance['title'] ) ) ?></h2>
                    <div class="banner-content-area"><?php echo wpautop( esc_html( $instance['description'] ) ); ?> <span id='image-button'><p><a href ='http://doropm.com/contact-us/'class='button-link'>Get In Touch</a></p></div>
                  </div>
                </div>
              </div>
          </container>
      </div>
    </div>
    <?php
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		// outputs the options form on admin

    $title = '';
    if( !empty( $instance['title'] ) ) {
        $title = $instance['title'];
    }

    $description = '';
    if( !empty( $instance['description'] ) ) {
        $description = $instance['description'];
    }

    $image = '';
    if(isset($instance['image']))
    {
        $image = $instance['image'];
    }

    $text_position = '';
    if(isset($instance['text_position']))
    {
        $text_position = $instance['text_position'];
    }
    $shortcode = '';
    if(isset($instance['shortcode']))
    {
        $shortcode = $instance['shortcode'];
    }
    ?>
    <p>
        <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_name( 'shortcode' ); ?>"><?php _e( 'Add Contact Form Shortcode:' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'shortcode' ); ?>" name="<?php echo $this->get_field_name( 'shortcode' ); ?>" type="text" value="<?php echo esc_attr( $shortcode ); ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_name( 'description' ); ?>"><?php _e( 'Description:' ); ?></label>
        <textarea class="widefat" id="<?php echo $this->get_field_id( 'description' ); ?>" name="<?php echo $this->get_field_name( 'description' ); ?>" type="text" ><?php echo esc_attr( $description ); ?></textarea>
    </p>
    <p>
          <label for="<?php echo $this->get_field_name( 'text_position' ); ?>"><?php echo esc_attr( 'Text Position:' ); ?></label>
          <select class='widefat' value="<?php echo esc_attr( $text_position ); ?>" id="<?php echo $this->get_field_id('text_position'); ?>"name="<?php echo $this->get_field_name('text_position'); ?>" type="text">
          <option value='1'<?php if ( $text_position == 1 ) echo 'selected="selected"'; ?>>
            Center
          </option>
          <option value='2'<?php if ( $text_position == 2 ) echo 'selected="selected"'; ?>>
            Right
          </option>
          <option value='3'<?php if ( $text_position == 3 ) echo 'selected="selected"'; ?>>
            Left
          </option>
        </select>
    </p>
    <p>
        <label for="<?php echo $this->get_field_name( 'image' ); ?>"><?php _e( 'Image:' ); ?></label>
        <input name="<?php echo $this->get_field_name( 'image' ); ?>" id="<?php echo $this->get_field_id( 'image' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $image ); ?>" />
        <input class="upload_image_button" type="button" value="Upload Image" />
   </p>
   <?php
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 *
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved

    return $new_instance;
	}
}
