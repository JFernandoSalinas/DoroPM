<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DoroPM
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info row">
				<div class="col-xs-12 col-md-5">
						<p>	&copy;COPYRIGHT <?php echo date('Y'); ?> |
							<a href="<?php echo esc_url( __( 'https://doropm.com/', 'doropm' ) ); ?>"> DoroPM.com </a>
							| ALL RIGHTS RESERVED
						</p>
				</div>
				<div class="col-xs-12 col-md-5">
					<p>
						<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Designed and developed by %1$s.' ), '<a href="http://fersatos.com/">FERSATOS</a>' );
						?>
					</p>
			  </div>
				<div class="col-xs-12 col-md-2">
				  <p id="smoothup"><i class="icon ion-arrow-up-c"></i></p>
				</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
