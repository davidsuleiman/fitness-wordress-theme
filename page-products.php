<?php
/**
 * Template Name: Products Page
 *
 * @package ReDefineCo
 */

get_header();
?>

<section class="page-hero">
	<div class="container">
		<p class="eyebrow"><?php esc_html_e( 'Products', 'redefine-co' ); ?></p>
		<h1><?php esc_html_e( 'Fitness tools worth your time.', 'redefine-co' ); ?></h1>
		<p><?php esc_html_e( 'Curated plans, guides, and resources for building stronger bodies and more resilient wellness routines.', 'redefine-co' ); ?></p>
	</div>
</section>

<section class="section">
	<div class="container product-grid">
		<article class="product-card">
			<span class="product-meta"><?php esc_html_e( 'Training plan', 'redefine-co' ); ?></span>
			<h2><?php esc_html_e( 'Strength Reset', 'redefine-co' ); ?></h2>
			<p><?php esc_html_e( 'A 6-week plan built around progressive lifts, mobility primers, and simple recovery check-ins.', 'redefine-co' ); ?></p>
			<div class="product-price">$49</div>
			<ul class="feature-list">
				<li><?php esc_html_e( 'Four workouts per week', 'redefine-co' ); ?></li>
				<li><?php esc_html_e( 'Warm-up and mobility flow', 'redefine-co' ); ?></li>
				<li><?php esc_html_e( 'Progress tracker template', 'redefine-co' ); ?></li>
			</ul>
			<a class="button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Enquire now', 'redefine-co' ); ?></a>
		</article>

		<article class="product-card">
			<span class="product-meta"><?php esc_html_e( 'Guide', 'redefine-co' ); ?></span>
			<h2><?php esc_html_e( 'Recovery Stack', 'redefine-co' ); ?></h2>
			<p><?php esc_html_e( 'A practical guide to sleep, readiness, hydration, and low-friction habits that support harder training.', 'redefine-co' ); ?></p>
			<div class="product-price">$29</div>
			<ul class="feature-list">
				<li><?php esc_html_e( 'Daily recovery checklist', 'redefine-co' ); ?></li>
				<li><?php esc_html_e( 'Wearable metrics explained', 'redefine-co' ); ?></li>
				<li><?php esc_html_e( 'Supplement decision guide', 'redefine-co' ); ?></li>
			</ul>
			<a class="button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Enquire now', 'redefine-co' ); ?></a>
		</article>

		<article class="product-card">
			<span class="product-meta"><?php esc_html_e( 'Membership', 'redefine-co' ); ?></span>
			<h2><?php esc_html_e( 'Insider Club', 'redefine-co' ); ?></h2>
			<p><?php esc_html_e( 'Monthly briefings, product notes, and private Q&A sessions for ambitious fitness enthusiasts.', 'redefine-co' ); ?></p>
			<div class="product-price">$15/mo</div>
			<ul class="feature-list">
				<li><?php esc_html_e( 'Monthly trend report', 'redefine-co' ); ?></li>
				<li><?php esc_html_e( 'Member-only product notes', 'redefine-co' ); ?></li>
				<li><?php esc_html_e( 'Live coaching Q&A', 'redefine-co' ); ?></li>
			</ul>
			<a class="button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Enquire now', 'redefine-co' ); ?></a>
		</article>
	</div>
</section>

<?php
while ( have_posts() ) :
	the_post();
	if ( trim( get_the_content() ) ) :
		?>
		<section class="section">
			<div class="container">
				<?php the_content(); ?>
			</div>
		</section>
		<?php
	endif;
endwhile;

get_footer();
