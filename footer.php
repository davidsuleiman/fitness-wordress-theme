<?php
/**
 * Site footer.
 *
 * @package ReDefineCo
 */
?>
	</main>

	<footer class="site-footer">
		<div class="container footer-inner">
			<div>
				<strong><?php bloginfo( 'name' ); ?></strong>
				<div><?php esc_html_e( 'Fitness intelligence for sharper training, smarter recovery, and better wellness decisions.', 'redefine-co' ); ?></div>
			</div>

			<nav aria-label="<?php esc_attr_e( 'Footer menu', 'redefine-co' ); ?>">
				<?php
				if ( has_nav_menu( 'footer' ) ) {
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_class'     => 'footer-menu',
							'container'      => false,
							'depth'          => 1,
						)
					);
				} else {
					?>
					<ul class="footer-menu">
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Blog', 'redefine-co' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/products/' ) ); ?>"><?php esc_html_e( 'Products', 'redefine-co' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact', 'redefine-co' ); ?></a></li>
					</ul>
					<?php
				}
				?>
			</nav>
		</div>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
