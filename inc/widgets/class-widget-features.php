<?php
/**
 * Home: Features
 *
 * @since doropm 1.0.0
 *
 * Description: Allows you to add an arbitrary featured item to the widget area. Includes a title, image, description and a link.
 * Author: Fernando Salinas
 * Author URI: http://fersatos.com/
 */
 class DoroPM_Features extends WP_Widget {

	 public function __construct() {
		 	$widget_details = array(
		 		'classname' => 'DoroPM_Features',
		 		'description' => 'Creates a featured item consisting of a title, image, description and link.'
		 );
 	 		parent::__construct( 'DoroPM_Features', 'Featured Item Widget', $widget_details );
}
/**
 * Outputs the content of the widget
 *
 * @param array $args
 * @param array $instance
 */
public function widget( $args, $instance ) {
	// outputs the content of the widget
}

/**
 * Outputs the options form on admin
 *
 * @param array $instance The widget options
 */
public function form( $instance ) {
	// outputs the options form on admin

			$main_title = '';
			if(!empty($instance['main_title'])){
				$main_title = $instance['main_title'];
			}
			$main_description = '';
			if (!empty($instance['main_description'])) {
				$main_description = $instance['main_description'];
			}
			?>
			<p>
				<label for="<?php echo $this->get_field_name( 'main_title' ); ?>"><?php _e( 'Widget Title:' ); ?></label>
			  <input class="widefat" id="<?php echo $this->get_field_id( 'main_title' ); ?>" name="<?php echo $this->get_field_name( 'main_title' ); ?>" type="text" value="<?php echo esc_attr( $main_title ); ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_name( 'main_description' ); ?>"><?php _e( 'Widget Description:' ); ?></label>
			  <input class="widefat" id="<?php echo $this->get_field_id( 'main_description' ); ?>" name="<?php echo $this->get_field_name( 'main_description' ); ?>" type="text" value="<?php echo esc_attr( $main_description ); ?>" />
			</p>

	    <div class="features-append">
				<fieldset>
					<h4>Features Infortmation:</h4>
					<?php
					$title_1 = '';
					if( !empty( $instance['title_1'] ) ) {
							$title_1 = $instance['title_1'];
					}

					$description_1 = '';
					if( !empty( $instance['description1'] ) ) {
							$description_1 = $instance['description1'];
					}

					$link_url_1 = '';
					if( !empty( $instance['link_url_1'] ) ) {
							$link_url_1 = $instance['link_url_1'];
					}

					$link_title_1 = '';
					if( !empty( $instance['link_title_1'] ) ) {
							$link_title_1 = $instance['link_title_1'];
					}

					?>
					<fieldset class="field_set">
							<legend><strong>Feature 1</strong></legend>
								<div class="feature_content">

									<p>
											<label for="<?php echo $this->get_field_name( 'title_1' ); ?>"><?php _e( 'Title:' ); ?></label>
											<input class="widefat" id="<?php echo $this->get_field_id( 'title_1' ); ?>" name="<?php echo $this->get_field_name( 'title_1' ); ?>" type="text" value="<?php echo esc_attr( $title_1 ); ?>" />
									</p>

									<p>
											<label for="<?php echo $this->get_field_name( 'description_1' ); ?>"><?php _e( 'Description:' ); ?></label>
											<textarea class="widefat" id="<?php echo $this->get_field_id( 'description_1' ); ?>" name="<?php echo $this->get_field_name( 'description_1' ); ?>" type="text" ><?php echo esc_attr( $description_1 ); ?></textarea>
									</p>

									<p>
											<label for="<?php echo $this->get_field_name( 'link_url_1' ); ?>"><?php _e( 'Link URL:' ); ?></label>
											<input class="widefat" id="<?php echo $this->get_field_id( 'link_url_1' ); ?>" name="<?php echo $this->get_field_name( 'link_url_1' ); ?>" type="text" value="<?php echo esc_attr( $link_url_1 ); ?>" />
									</p>

									<p>
											<label for="<?php echo $this->get_field_name( 'link_title_1' ); ?>"><?php _e( 'Link Title:' ); ?></label>
											<input class="widefat" id="<?php echo $this->get_field_id( 'link_title_1' ); ?>" name="<?php echo $this->get_field_name( 'link_title_1' ); ?>" type="text" value="<?php echo esc_attr( $link_title_1 ); ?>" />
									</p>
								</div>
							</fieldset>
					<?php
					$title_2 = '';
					if( !empty( $instance['title_2'] ) ) {
							$title_2 = $instance['title_2'];
					}

					$description_2 = '';
					if( !empty( $instance['description_2'] ) ) {
							$description_2 = $instance['description_2'];
					}

					$link_url_2 = '';
					if( !empty( $instance['link_url_2'] ) ) {
							$link_url_2 = $instance['link_url_2'];
					}

					$link_title_2 = '';
					if( !empty( $instance['link_title_2'] ) ) {
							$link_title_2 = $instance['link_title_2'];
					}

					?>
					<fieldset class="field_set">
						<legend><strong>Feature 2</strong></legend>
						<div class="feature_content">
								<p>
										<label for="<?php echo $this->get_field_name( 'title_2' ); ?>"><?php _e( 'Title:' ); ?></label>
										<input class="widefat" id="<?php echo $this->get_field_id( 'title_2' ); ?>" name="<?php echo $this->get_field_name( 'title_2' ); ?>" type="text" value="<?php echo esc_attr( $title_2_2 ); ?>" />
								</p>

								<p>
										<label for="<?php echo $this->get_field_name( 'description_2' ); ?>"><?php _e( 'Description:' ); ?></label>
										<textarea class="widefat" id="<?php echo $this->get_field_id( 'description_2' ); ?>" name="<?php echo $this->get_field_name( 'description_2' ); ?>" type="text" ><?php echo esc_attr( $description_2 ); ?></textarea>
								</p>

								<p>
										<label for="<?php echo $this->get_field_name( 'link_url_2' ); ?>"><?php _e( 'Link URL:' ); ?></label>
										<input class="widefat" id="<?php echo $this->get_field_id( 'link_url_2' ); ?>" name="<?php echo $this->get_field_name( 'link_url_2' ); ?>" type="text" value="<?php echo esc_attr( $link_url_2 ); ?>" />
								</p>

								<p>
										<label for="<?php echo $this->get_field_name( 'link_title_2' ); ?>"><?php _e( 'Link Title:' ); ?></label>
										<input class="widefat" id="<?php echo $this->get_field_id( 'link_title_2' ); ?>" name="<?php echo $this->get_field_name( 'link_title_2' ); ?>" type="text" value="<?php echo esc_attr( $link_title_2 ); ?>" />
								</p>
							</div>
						</fieldset>
					<?php
					$title_3 = '';
					if( !empty( $instance['title_3'] ) ) {
							$title = $instance['title_3'];
					}

					$description_3 = '';
					if( !empty( $instance['description_3'] ) ) {
							$description_3 = $instance['description_3'];
					}

					$link_url_3 = '';
					if( !empty( $instance['link_url_3'] ) ) {
							$link_url_3 = $instance['link_url_3'];
					}

					$link_title_3 = '';
					if( !empty( $instance['link_title_3'] ) ) {
							$link_title_3 = $instance['link_title_3'];
					}

					?>
					<fieldset class="field_set">
						<legend><strong>Feature 3</strong></legend>
						  <div class="feature_content">

							<p>
									<label for="<?php echo $this->get_field_name( 'title_3' ); ?>"><?php _e( 'Title:' ); ?></label>
									<input class="widefat" id="<?php echo $this->get_field_id( 'title_3' ); ?>" name="<?php echo $this->get_field_name( 'title_3' ); ?>" type="text" value="<?php echo esc_attr( $title_3 ); ?>" />
							</p>

							<p>
									<label for="<?php echo $this->get_field_name( 'description_3' ); ?>"><?php _e( 'Description:' ); ?></label>
									<textarea class="widefat" id="<?php echo $this->get_field_id( 'description_3' ); ?>" name="<?php echo $this->get_field_name( 'description_3' ); ?>" type="text" ><?php echo esc_attr( $description_3 ); ?></textarea>
							</p>

							<p>
									<label for="<?php echo $this->get_field_name( 'link_url_3' ); ?>"><?php _e( 'Link URL:' ); ?></label>
									<input class="widefat" id="<?php echo $this->get_field_id( 'link_url_3' ); ?>" name="<?php echo $this->get_field_name( 'link_url_3' ); ?>" type="text" value="<?php echo esc_attr( $link_url_3 ); ?>" />
							</p>

							<p>
									<label for="<?php echo $this->get_field_name( 'link_title_3' ); ?>"><?php _e( 'Link Title:' ); ?></label>
									<input class="widefat" id="<?php echo $this->get_field_id( 'link_title_3' ); ?>" name="<?php echo $this->get_field_name( 'link_title_3' ); ?>" type="text" value="<?php echo esc_attr( $link_title_3 ); ?>" />
							</p>
						</div>
					</fieldset>

				</fieldset>

			</div>
			<style>.field_set{border: 1px solid #ddd;margin-top: 5px;}.feature_content{padding: 10px;}</style>
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
}

}
