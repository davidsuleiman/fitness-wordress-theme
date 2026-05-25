<?php
/**
 * ReDefine & Co. theme functions.
 *
 * @package ReDefineCo
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function redefine_co_setup() {
	load_theme_textdomain( 'redefine-co', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'redefine-co' ),
			'footer'  => __( 'Footer Menu', 'redefine-co' ),
		)
	);
}
add_action( 'after_setup_theme', 'redefine_co_setup' );

function redefine_co_scripts() {
	wp_enqueue_style( 'redefine-co-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'redefine_co_scripts' );

function redefine_co_excerpt( $limit = 22 ) {
	$excerpt = get_the_excerpt();

	if ( empty( $excerpt ) ) {
		$excerpt = wp_strip_all_tags( get_the_content() );
	}

	return wp_trim_words( $excerpt, $limit, '&hellip;' );
}

function redefine_co_default_menu() {
	?>
	<ul class="primary-menu">
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Blog', 'redefine-co' ); ?></a></li>
		<li><a href="<?php echo esc_url( home_url( '/products/' ) ); ?>"><?php esc_html_e( 'Products', 'redefine-co' ); ?></a></li>
		<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact', 'redefine-co' ); ?></a></li>
	</ul>
	<?php
}
