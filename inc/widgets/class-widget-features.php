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
		 		'description' => 'Creates a featured items consisting of a title, image and description.'
		 );
 	 		parent::__construct( 'DoroPM_Features', 'Features Widget', $widget_details );
			add_action( 'admin_enqueue_scripts', array( $this, 'features_images' ) );
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
      <div id='features-widget' class='home-widget widget-col'>
        <div class='text-center'>
        	<h2 class='features-main-title'><span><?php echo  $instance['main_title']; ?></span></h2>
          <p class='features-main-description description'><?php echo wpautop( esc_html( $instance['main_description'] ) ) ?></p>
        </div>
    			<div class="row">
    					<div class='feature-area-1 col-md-4 col-xs-12'>
    						<div class='feature-1-title'>
    							<h5><?php echo wpautop( esc_html( $instance['title_1'] ) ) ?></h5>
    						</div>
    						<div class='feature-images' id='feature-1-image'>
    							<p>
    									<img src='<?php echo $instance['image_1'] ?>'>
    							</p>
    						</div>
    						<div class='feature-1-description'>
    							<?php echo wpautop( esc_html( $instance['description_1'] ) ) ?>
    						</div>
    					</div>
    					<div class='feature-area-2 col-md-4 col-xs-12'>
    						<div class='feature-2-title'>
    							<h5><?php echo wpautop( esc_html( $instance['title_2'] ) ) ?>	</h5>
    						</div>
    						<div class='feature-images' id='feature-2-image'>
    							<p>
    									<img src='<?php echo $instance['image_2'] ?>'>
    							</p>
    						</div>
    						<div class='feature-2-description'>
    							<?php echo wpautop( esc_html( $instance['description_2'] ) ) ?>
    						</div>
    					</div>
    					<div class='feature-area-3 col-md-4 col-xs-12'>
    						<div class='feature-3-title'>
    								<h5><?php echo wpautop( esc_html( $instance['title_3'] ) ) ?>	</h5>
    						</div>
    						<div class='feature-images' id='feature-3-image'>
    							<p>
    									<img src='<?php echo $instance['image_3'] ?>'>
    							</p>
    						</div>
    						<div class='feature-3-description'>
    							<?php echo wpautop( esc_html( $instance['description_3'] ) ) ?>
    						</div>
    					</div>
    			</div>

			<?php
			echo $args['after_widget'];

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
					if( !empty( $instance['description_1'] ) ) {
							$description_1 = $instance['description_1'];
					}

					$image_1 = '';
					if(isset($instance['image_1']))
					{
					    $image_1 = $instance['image_1'];
					}

					?>
					<fieldset class="field_set">
							<legend><strong>Feature 1</strong></legend>
							<div class="expand-area">
 							 	<p class='expand'>+</p>
 							</div>
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
									    <label for="<?php echo $this->get_field_name( 'image_1' ); ?>"><?php _e( 'Image:' ); ?></label>
									    <input name="<?php echo $this->get_field_name( 'image_1' ); ?>" id="<?php echo $this->get_field_id( 'image_1' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $image_1 ); ?>" />
									    <input class="upload_image_button" type="button" value="Upload Image" />
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

					$image_2 = '';
					if(isset($instance['image_2']))
					{
					    $image_2 = $instance['image_2'];
					}

					?>
					<fieldset class="field_set">
						<legend><strong>Feature 2</strong></legend>
						<div class="expand-area">
							 <p class='expand'>+</p>
						</div>
						<div class="feature_content">
								<p>
										<label for="<?php echo $this->get_field_name( 'title_2' ); ?>"><?php _e( 'Title:' ); ?></label>
										<input class="widefat" id="<?php echo $this->get_field_id( 'title_2' ); ?>" name="<?php echo $this->get_field_name( 'title_2' ); ?>" type="text" value="<?php echo esc_attr( $title_2 ); ?>" />
								</p>

								<p>
										<label for="<?php echo $this->get_field_name( 'description_2' ); ?>"><?php _e( 'Description:' ); ?></label>
										<textarea class="widefat" id="<?php echo $this->get_field_id( 'description_2' ); ?>" name="<?php echo $this->get_field_name( 'description_2' ); ?>" type="text" ><?php echo esc_attr( $description_2 ); ?></textarea>
								</p>

								<p>
								    <label for="<?php echo $this->get_field_name( 'image_2' ); ?>"><?php _e( 'Image:' ); ?></label>
								    <input name="<?php echo $this->get_field_name( 'image_2' ); ?>" id="<?php echo $this->get_field_id( 'image_2' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $image_2 ); ?>" />
								    <input class="upload_image_button" type="button" value="Upload Image" />
	             </p>
							</div>
						</fieldset>
					<?php
					$title_3 = '';
					if( !empty( $instance['title_3'] ) ) {
							$title_3 = $instance['title_3'];
					}

					$description_3 = '';
					if( !empty( $instance['description_3'] ) ) {
							$description_3 = $instance['description_3'];
					}


					$image_3 = '';
					if(isset($instance['image_3']))
					{
					    $image_3 = $instance['image_3'];
					}
					?>
					<fieldset class="field_set">
						<legend><strong>Feature 3</strong></legend>
						 <div class="expand-area">
							 	<p class='expand'>+</p>
							</div>
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
							    <label for="<?php echo $this->get_field_name( 'image_3' ); ?>"><?php _e( 'Image:' ); ?></label>
							    <input name="<?php echo $this->get_field_name( 'image_3' ); ?>" id="<?php echo $this->get_field_id( 'image_3' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $image_3 ); ?>" />
							    <input class="upload_image_button" type="button" value="Upload Image" />
             </p>
						</div>
					</fieldset>

				</fieldset>

			</div>
			<script>

			jQuery(document).ready(function($){
			  $( ".feature_content" ).hide();
			});

			$(".expand-area").click(function(){
				if($(this).next().is(":hidden")){
					$(this).next().slideDown('slow');
					$(this).children(".expand").text('-');
				}else {
					$(this).next().slideUp('slow');
					$(this).children(".expand").text('+');
				}
			});

			</script>

			<style>p.expand { margin: 0; padding-right: 20px; font-weight: 500; font-size: 2em; line-height: 20px; margin-bottom: 10px; text-align: right; }.field_set{border: 1px solid #ddd;margin-top: 10px;}.feature_content{padding: 10px;}.feature_content{padding: 10px;padding-top: 0; margin-top: 0px;}</style>
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
public function features_images()
{
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
    wp_enqueue_script('features-media-upload', get_template_directory_uri()  . '/js/features-media-uploads.js', array( 'jquery' )) ;
    wp_enqueue_style('thickbox');

}
}
