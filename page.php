<?php
/**
 * Default page template.
 *
 * @package ReDefineCo
 */

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>
	<section class="page-hero">
		<div class="container">
			<p class="eyebrow"><?php esc_html_e( 'Page', 'redefine-co' ); ?></p>
			<h1><?php the_title(); ?></h1>
			<?php if ( has_excerpt() ) : ?>
				<p><?php echo esc_html( get_the_excerpt() ); ?></p>
			<?php endif; ?>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<?php the_content(); ?>
		</div>
	</section>
<?php endwhile; ?>

<?php
get_footer();
