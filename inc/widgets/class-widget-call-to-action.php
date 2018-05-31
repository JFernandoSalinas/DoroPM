<?php
/**
 * Home: Call to Action
 *
 * @since doropm 1.0.0
 *
 * Description: Adds Call to Action widget to Widget area
 * Author: Fernando Salinas
 * Author URI: http://fersatos.com/
 */
class DoroPM_Call_To_Action extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		$widget_ops = array(
			'classname' => 'DoroPM_Call_To_Action',
			'description' => 'Adds Call to Action to Widget Area',
		);
		parent::__construct( 'DoroPM_Call_To_Action', 'Call To Action', $widget_ops );
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
		<div id='call-to-action' class='home-widget'>
			<div class='call-to-action'>
				<div class='container'>
					<div class='row'>
						<div class='col-sm-12 col-md-8 col-lg-9'>
							<h2 class='cta-title'><?php echo wpautop( esc_html( $instance['title'] ) ) ?></h2>
							<p class='cta-description description'><?php echo wpautop( esc_html( $instance['description'] ) ) ?></p>
						</div>
						<div class='cta-button col-sm-12 col-md-4 col-lg-3'>
							<a class='button' href='#'>Get a Quote!</a>
						</div>
					</div>
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
		$title = '';
    if( !empty( $instance['title'] ) ) {
        $title = $instance['title'];
    }

    $description = '';
    if( !empty( $instance['description'] ) ) {
        $description = $instance['description'];
    }

    $image = '';
    if(isset($instance['button-url']))
    {
        $buttonUrl = $instance['button-url'];
    }



    ?>
    <p>
        <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>

    <p>
        <label for="<?php echo $this->get_field_name( 'description' ); ?>"><?php _e( 'Description:' ); ?></label>
        <textarea class="widefat" id="<?php echo $this->get_field_id( 'description' ); ?>" name="<?php echo $this->get_field_name( 'description' ); ?>" type="text" ><?php echo esc_attr( $description ); ?></textarea>
    </p>

		<p>
        <label for="<?php echo $this->get_field_name( 'button-url' ); ?>"><?php _e( 'Button URL:' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'button-url' ); ?>" name="<?php echo $this->get_field_name( 'button-url' ); ?>" type="text" ><?php echo esc_attr( $buttonUrl ); ?></input>
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
