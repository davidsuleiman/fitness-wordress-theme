<?php
/**
 * Site footer — Redefine & Co.
 *
 * @package ReDefineCo
 */
?>
	</main><!-- #primary -->

	<!-- ══════════════════════════════════════
	     FOOTER
	══════════════════════════════════════ -->
	<footer class="site-footer" role="contentinfo">

		<!-- ── Divider marquee ── -->
		<div class="footer-marquee" aria-hidden="true">
			<div class="footer-marquee-track">
				<span>Train Hard</span><span class="mq-sep">✦</span>
				<span>Eat Smart</span><span class="mq-sep">✦</span>
				<span>Rest Well</span><span class="mq-sep">✦</span>
				<span>Think Deep</span><span class="mq-sep">✦</span>
				<span>Move Daily</span><span class="mq-sep">✦</span>
				<span>Redefine Limits</span><span class="mq-sep">✦</span>
				<span>Train Hard</span><span class="mq-sep">✦</span>
				<span>Eat Smart</span><span class="mq-sep">✦</span>
				<span>Rest Well</span><span class="mq-sep">✦</span>
				<span>Think Deep</span><span class="mq-sep">✦</span>
				<span>Move Daily</span><span class="mq-sep">✦</span>
				<span>Redefine Limits</span><span class="mq-sep">✦</span>
			</div>
		</div>

		<!-- ── Footer body ── -->
		<div class="footer-body">
			<div class="container footer-grid">

				<!-- Col 1: Brand block -->
				<div class="footer-col footer-col--brand">
					<a class="brand-logo footer-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-label="<?php esc_attr_e( 'Redefine & Co — home', 'redefine-co' ); ?>">
						<span class="logo-re">Re</span><span class="logo-define">define</span><span class="logo-amp">&amp;</span><span class="logo-co">Co</span>
					</a>
					<p class="footer-tagline"><?php esc_html_e( 'Science-backed fitness content for people who take their health seriously.', 'redefine-co' ); ?></p>

					<!-- Social row -->
					<ul class="footer-socials" aria-label="<?php esc_attr_e( 'Social media', 'redefine-co' ); ?>">
						<li>
							<a href="#" class="social-icon" aria-label="Instagram">
								<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
							</a>
						</li>
						<li>
							<a href="#" class="social-icon" aria-label="X / Twitter">
								<svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
							</a>
						</li>
						<li>
							<a href="#" class="social-icon" aria-label="YouTube">
								<svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 0 0-1.95 1.96A29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58A2.78 2.78 0 0 0 3.41 19.54C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 0 0 1.95-1.96A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" fill="currentColor" stroke="none"/></svg>
							</a>
						</li>
						<li>
							<a href="#" class="social-icon" aria-label="TikTok">
								<svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-2.88 2.5 2.89 2.89 0 0 1-2.89-2.89 2.89 2.89 0 0 1 2.89-2.89c.28 0 .54.04.79.1V9.01a6.33 6.33 0 0 0-.79-.05 6.34 6.34 0 0 0-6.34 6.34 6.34 6.34 0 0 0 6.34 6.34 6.34 6.34 0 0 0 6.33-6.34l-.01-8.36a8.17 8.17 0 0 0 4.77 1.52V5.01a4.85 4.85 0 0 1-1-.32z"/></svg>
							</a>
						</li>
					</ul>
				</div>

				<!-- Col 2: Explore -->
				<div class="footer-col">
					<h3 class="footer-col-title"><?php esc_html_e( 'Explore', 'redefine-co' ); ?></h3>
					<?php
					if ( has_nav_menu( 'footer' ) ) {
						wp_nav_menu( array(
							'theme_location' => 'footer',
							'menu_class'     => 'footer-nav-list',
							'container'      => false,
							'depth'          => 1,
						) );
					} else { ?>
					<ul class="footer-nav-list">
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Articles', 'redefine-co' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/products/' ) ); ?>"><?php esc_html_e( 'Products', 'redefine-co' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact Us', 'redefine-co' ); ?></a></li>
					</ul>
					<?php } ?>
				</div>

				<!-- Col 3: Topics -->
				<div class="footer-col">
					<h3 class="footer-col-title"><?php esc_html_e( 'Topics', 'redefine-co' ); ?></h3>
					<ul class="footer-nav-list">
						<li><a href="#"><?php esc_html_e( 'Training', 'redefine-co' ); ?></a></li>
						<li><a href="#"><?php esc_html_e( 'Nutrition', 'redefine-co' ); ?></a></li>
						<li><a href="#"><?php esc_html_e( 'Recovery', 'redefine-co' ); ?></a></li>
						<li><a href="#"><?php esc_html_e( 'Mindset', 'redefine-co' ); ?></a></li>
						<li><a href="#"><?php esc_html_e( 'Gear', 'redefine-co' ); ?></a></li>
					</ul>
				</div>

				<!-- Col 4: Company -->
				<div class="footer-col">
					<h3 class="footer-col-title"><?php esc_html_e( 'Company', 'redefine-co' ); ?></h3>
					<ul class="footer-nav-list">
						<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Sponsor Us', 'redefine-co' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Write for Us', 'redefine-co' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Feedback', 'redefine-co' ); ?></a></li>
						<li><a href="#"><?php esc_html_e( 'Privacy Policy', 'redefine-co' ); ?></a></li>
					</ul>
				</div>

			</div><!-- .footer-grid -->
		</div><!-- .footer-body -->

		<!-- ── Footer base ── -->
		<div class="footer-base">
			<div class="container footer-base-inner">
				<p class="footer-copy">
					<?php printf(
						esc_html__( '© %s Redefine &amp; Co. All rights reserved.', 'redefine-co' ),
						esc_html( date_i18n( 'Y' ) )
					); ?>
				</p>
				<p class="footer-made"><?php esc_html_e( 'Built for the committed.', 'redefine-co' ); ?></p>
			</div>
		</div>

	</footer><!-- .site-footer -->

</div><!-- .site-shell -->
<?php wp_footer(); ?>
</body>
</html>
