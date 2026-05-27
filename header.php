<?php
/**
 * Site header — Redefine & Co.
 *
 * @package ReDefineCo
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:ital,wght@0,400;0,600;0,700;0,800;1,400;1,700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="site-shell">

	<!-- ══ HEADER ══ -->
	<header class="site-header" id="site-header">

		<!-- Top strip: ticker -->
		<div class="header-ticker" aria-label="<?php esc_attr_e( 'Latest topics', 'redefine-co' ); ?>">
			<div class="ticker-track" aria-hidden="true">
				<span>Training</span><span class="ticker-dot"></span>
				<span>Nutrition</span><span class="ticker-dot"></span>
				<span>Recovery</span><span class="ticker-dot"></span>
				<span>Mindset</span><span class="ticker-dot"></span>
				<span>Gear</span><span class="ticker-dot"></span>
				<span>Zone 2 Cardio</span><span class="ticker-dot"></span>
				<span>Training</span><span class="ticker-dot"></span>
				<span>Nutrition</span><span class="ticker-dot"></span>
				<span>Recovery</span><span class="ticker-dot"></span>
				<span>Mindset</span><span class="ticker-dot"></span>
				<span>Gear</span><span class="ticker-dot"></span>
				<span>Zone 2 Cardio</span><span class="ticker-dot"></span>
			</div>
		</div>

		<!-- Main nav row -->
		<div class="header-main">
			<div class="container header-inner">

				<!-- Logo -->
				<a class="brand-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-label="<?php esc_attr_e( 'Redefine & Co — home', 'redefine-co' ); ?>">
					<span class="logo-re">Re</span><span class="logo-define">define</span><span class="logo-amp">&amp;</span><span class="logo-co">Co</span>
				</a>

				<!-- Desktop nav -->
				<nav id="primary-menu-panel" class="site-navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'redefine-co' ); ?>">
					<?php
					if ( has_nav_menu( 'primary' ) ) {
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class'     => 'primary-menu',
							'container'      => false,
							'depth'          => 1,
						) );
					} else {
						redefine_co_default_menu();
					}
					?>
				</nav>

				<!-- Right slot: search icon + hamburger -->
				<div class="header-actions">
					<!-- Search toggle -->
					<button class="search-toggle" aria-label="<?php esc_attr_e( 'Search', 'redefine-co' ); ?>" aria-expanded="false">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true">
							<circle cx="8.5" cy="8.5" r="5.5" stroke="currentColor" stroke-width="1.6"/>
							<path d="M13 13l4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
						</svg>
					</button>

					<!-- Hamburger -->
					<button class="menu-toggle" type="button" aria-controls="primary-menu-panel" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle menu', 'redefine-co' ); ?>">
						<span class="hb-box" aria-hidden="true">
							<span class="hb-bar hb-top"></span>
							<span class="hb-bar hb-mid"></span>
							<span class="hb-bar hb-bot"></span>
						</span>
					</button>
				</div>

			</div>
		</div>

		<!-- Search bar (hidden by default) -->
		<div class="header-search" id="header-search" aria-hidden="true">
			<div class="container">
				<?php get_search_form(); ?>
			</div>
		</div>

		<!-- Mobile overlay -->
		<div class="mobile-overlay" aria-hidden="true"></div>

	</header><!-- .site-header -->

	<!-- ── Category ribbon ── -->
	<nav class="category-ribbon" aria-label="<?php esc_attr_e( 'Browse by topic', 'redefine-co' ); ?>">
		<div class="container ribbon-inner">
			<ul class="ribbon-list">
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ribbon-link is-active"><?php esc_html_e( 'Home', 'redefine-co' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="ribbon-link"><?php esc_html_e( 'Blog', 'redefine-co' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/category/wellness/' ) ); ?>" class="ribbon-link"><?php esc_html_e( 'Wellness', 'redefine-co' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/category/fitness/' ) ); ?>" class="ribbon-link"><?php esc_html_e( 'Fitness', 'redefine-co' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/category/lifestyle/' ) ); ?>" class="ribbon-link"><?php esc_html_e( 'Lifestyle', 'redefine-co' ); ?></a></li>
			</ul>
		</div>
	</nav>

	<main id="primary" class="site-main">
