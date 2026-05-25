<?php
/**
 * Single post template.
 *
 * @package ReDefineCo
 */

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class(); ?>>
		<section class="page-hero">
			<div class="container">
				<p class="eyebrow"><?php echo esc_html( get_the_date() ); ?></p>
				<h1><?php the_title(); ?></h1>
				<p><?php echo esc_html( redefine_co_excerpt( 34 ) ); ?></p>
			</div>
		</section>

		<section class="section">
			<div class="container">
				<?php the_content(); ?>
			</div>
		</section>
	</article>
<?php endwhile; ?>

<?php
get_footer();
