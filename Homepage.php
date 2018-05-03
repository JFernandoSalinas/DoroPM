<?php /**
*Template Name: Homepage
*
*This is the Custom Homepage Template.
*/
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php if ( is_active_sidebar( 'home_widget' ) ) : ?>
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'home_widget' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
