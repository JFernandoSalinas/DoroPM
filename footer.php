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
					<div class=footer-contact>
						<p>Contact Us For a Free Quote <ion-icon name="mail-open"></ion-icon><a href='mailto:info@doropm.com'>Email: info@doropm.com</a><ion-icon name="call"></ion-icon><a href='tel:647-220-1267'>Call Us: 647-220-1267</a></p>
					</div>
			  </div>
				<div class="col-xs-12 col-md-2 text-center">
				  <p id="smoothup"><i class="icon ion-arrow-up-c"></i></p>
				</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
