<?php
/**
 * Site header.
 *
 * @package ReDefineCo
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="site-shell">
	<header class="site-header">
		<div class="container header-inner">
			<a class="site-branding brand-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-label="<?php esc_attr_e( 'ReDefine & Co. home', 'redefine-co' ); ?>">
				<span>ReDefine</span><span class="brand-amp">&amp;</span><span>Co</span>
			</a>

			<nav class="site-navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'redefine-co' ); ?>">
				<?php
				if ( has_nav_menu( 'primary' ) ) {
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_class'     => 'primary-menu',
							'container'      => false,
							'depth'          => 1,
						)
					);
				} else {
					redefine_co_default_menu();
				}
				?>
			</nav>
		</div>
	</header>

	<main id="primary" class="site-main">
