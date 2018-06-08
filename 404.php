<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package DoroPM
 */

get_header();
?>
<style>#header-wrap{display:none;}</style>
	<div class='notfound-header'>
		<div class="cover-wrapper">
			<h1 class="notfound-page-title" style='width:100%;background:url("http://localhost/doropm/wp-content/uploads/2018/06/433471-unsplash-min.jpg");'><?php _e( 'Oops! That page can&rsquo;t be found.', 'listify' ); ?></h1>
		</div>
	</div>

	<div id="primary" class="container">
		<div class="row content-area">

			<main id="main" class="site-main col-md-12 col-xs-12" role="main">
				<div class='not-found'>
				<?php get_template_part( 'content', 'none' ); ?>
				<h5>You can always return to the <a href='<?php echo get_home_url();?>'>HOMEPAGE.</a></h3>
			</div>
			</main>

		</div>
	</div>

<?php get_footer(); ?>
