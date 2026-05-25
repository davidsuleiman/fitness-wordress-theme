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
			<div class="footer-brand">
				<a class="brand-logo footer-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-label="<?php esc_attr_e( 'ReDefine & Co. home', 'redefine-co' ); ?>">
					<span>ReDefine</span><span class="brand-slash">/</span><span>Co</span>
				</a>
				<p><?php esc_html_e( 'Subscribe to get the most important developments in fitness and wellness.', 'redefine-co' ); ?></p>
				<form class="footer-subscribe" action="#" method="post">
					<label class="screen-reader-text" for="footer-email"><?php esc_html_e( 'Email address', 'redefine-co' ); ?></label>
					<input id="footer-email" type="email" name="email" placeholder="<?php esc_attr_e( 'Enter your email address to subscribe...', 'redefine-co' ); ?>">
					<button type="submit" aria-label="<?php esc_attr_e( 'Subscribe', 'redefine-co' ); ?>"><span aria-hidden="true"></span></button>
				</form>
				<p class="copyright">
					<?php
					printf(
						esc_html__( 'Copyright (c) %1$s ReDefine & Co. All rights reserved. Privacy Policy.', 'redefine-co' ),
						esc_html( date_i18n( 'Y' ) )
					);
					?>
				</p>
			</div>

			<div class="footer-link-groups">
				<nav aria-label="<?php esc_attr_e( 'Footer menu', 'redefine-co' ); ?>">
					<?php
					if ( has_nav_menu( 'footer' ) ) {
						wp_nav_menu(
							array(
								'theme_location' => 'footer',
								'menu_class'     => 'footer-menu footer-menu-main',
								'container'      => false,
								'depth'          => 1,
							)
						);
					} else {
						?>
						<ul class="footer-menu footer-menu-main">
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Articles', 'redefine-co' ); ?></a></li>
							<li><a href="<?php echo esc_url( home_url( '/products/' ) ); ?>"><?php esc_html_e( 'Products', 'redefine-co' ); ?></a></li>
							<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact Us', 'redefine-co' ); ?></a></li>
						</ul>
						<?php
					}
					?>
				</nav>

				<nav aria-label="<?php esc_attr_e( 'Secondary footer menu', 'redefine-co' ); ?>">
					<ul class="footer-menu">
						<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Sponsor', 'redefine-co' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Feedback', 'redefine-co' ); ?></a></li>
					</ul>
				</nav>
			</div>
		</div>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
