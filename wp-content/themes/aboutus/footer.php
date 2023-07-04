<?php
/**
 * The template for displaying the footer
 *
 * @package aboutus
 */

?>
</main><!-- #main -->
	</div><!-- #primary -->
	</div><!-- #content -->
	<footer id="colophon" class="aboutus-site-footer">
		<div class="aboutus-footer-row">
		<div class="aboutus-footer-left">
			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav aria-label="<?php esc_attr_e( 'Secondary menu', 'twentytwentyone' ); ?>" class="footer-navigation">
					<ul class="footer-navigation-wrapper">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer',
								'items_wrap'     => '%3$s',
								'container'      => false,
								'depth'          => 1,
								'link_before'    => '<span>',
								'link_after'     => '</span>',
								'fallback_cb'    => false,
							)
						);
						?>
					</ul><!-- .footer-navigation-wrapper -->
				</nav><!-- .footer-navigation -->
			<?php endif; ?>
		</div>
		<div class="aboutus-footer-center">
			<h5><?php pll_e( 'Your trusted Digital Transformation Agency in China &amp; Asia', 'aboutus' ); ?></h5>
		</div>
		<div class="aboutus-footer-right">
			<a href="https://beian.miit.gov.cn/#/Integrated/index" target="_blank" rel="noreferrer"><p class="Footer_footer__icp__Tr5Uk"><?php esc_html_e( '沪ICP备12045089号-2', 'aboutus' ); ?></p></a>
		</div>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
