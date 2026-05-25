<?php
/**
 * Main blog index.
 *
 * @package ReDefineCo
 */

get_header();
?>

<section class="hero">
	<div class="container hero-grid">
		<div>
			<p class="eyebrow"><?php esc_html_e( 'Fitness briefing', 'redefine-co' ); ?></p>
			<h1><?php esc_html_e( 'Sharper signals for active lives.', 'redefine-co' ); ?></h1>
			<p class="hero-copy"><?php esc_html_e( 'Research-led stories on training, wellness, recovery, gear, and the business shaping modern fitness culture.', 'redefine-co' ); ?></p>
		</div>

		<aside class="insight-panel" aria-label="<?php esc_attr_e( 'Publication highlights', 'redefine-co' ); ?>">
			<h2><?php esc_html_e( 'This week', 'redefine-co' ); ?></h2>
			<div class="stat-row">
				<div class="stat"><strong>12</strong><span><?php esc_html_e( 'new reads', 'redefine-co' ); ?></span></div>
				<div class="stat"><strong>4</strong><span><?php esc_html_e( 'gear tests', 'redefine-co' ); ?></span></div>
				<div class="stat"><strong>2</strong><span><?php esc_html_e( 'reports', 'redefine-co' ); ?></span></div>
			</div>
		</aside>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="section-head">
			<h2 class="section-title"><?php esc_html_e( 'Latest Articles', 'redefine-co' ); ?></h2>
			<a class="view-link" href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ?: home_url( '/' ) ); ?>"><?php esc_html_e( 'View all', 'redefine-co' ); ?></a>
		</div>

		<div class="post-grid">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<article <?php post_class( 'post-card' ); ?>>
						<time class="post-date" datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
						<div>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p><?php echo esc_html( redefine_co_excerpt() ); ?></p>
						</div>
						<span class="post-category"><?php echo esc_html( get_the_category_list( ', ' ) ? wp_strip_all_tags( get_the_category_list( ', ' ) ) : __( 'Training', 'redefine-co' ) ); ?></span>
					</article>
				<?php endwhile; ?>
			<?php else : ?>
				<?php
				$sample_posts = array(
					array( 'date' => 'May 25, 2026', 'title' => 'The New Rules of Strength Training', 'summary' => 'How hybrid routines, recovery data, and better coaching are changing the weekly split.', 'cat' => 'Training' ),
					array( 'date' => 'May 24, 2026', 'title' => 'Recovery Tech Gets More Personal', 'summary' => 'Wearables are moving from passive dashboards into practical suggestions athletes can use.', 'cat' => 'Recovery' ),
					array( 'date' => 'May 23, 2026', 'title' => 'What Boutique Studios Are Learning From Clubs', 'summary' => 'Community, pricing, and programming shifts are redrawing the fitness membership map.', 'cat' => 'Business' ),
				);
				?>
				<?php foreach ( $sample_posts as $sample_post ) : ?>
					<article class="post-card">
						<time class="post-date"><?php echo esc_html( $sample_post['date'] ); ?></time>
						<div>
							<h3><?php echo esc_html( $sample_post['title'] ); ?></h3>
							<p><?php echo esc_html( $sample_post['summary'] ); ?></p>
						</div>
						<span class="post-category"><?php echo esc_html( $sample_post['cat'] ); ?></span>
					</article>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>

		<?php the_posts_pagination(); ?>
	</div>
</section>

<section class="section newsletter">
	<div class="container">
		<div>
			<p class="eyebrow"><?php esc_html_e( 'Never miss a move', 'redefine-co' ); ?></p>
			<h2><?php esc_html_e( 'Weekly fitness intelligence.', 'redefine-co' ); ?></h2>
			<p><?php esc_html_e( 'Get practical training ideas, wellness trends, and product finds in your inbox.', 'redefine-co' ); ?></p>
		</div>
		<form class="newsletter-form" action="#" method="post">
			<label class="screen-reader-text" for="newsletter-email"><?php esc_html_e( 'Email address', 'redefine-co' ); ?></label>
			<input id="newsletter-email" type="email" name="email" placeholder="<?php esc_attr_e( 'Email address', 'redefine-co' ); ?>">
			<button type="submit"><?php esc_html_e( 'Subscribe', 'redefine-co' ); ?></button>
		</form>
	</div>
</section>

<section class="section">
	<div class="container platform-band">
		<div>
			<p class="eyebrow"><?php esc_html_e( 'ReDefine platform', 'redefine-co' ); ?></p>
			<h2 class="section-title"><?php esc_html_e( 'Built for fitness operators and enthusiasts.', 'redefine-co' ); ?></h2>
		</div>
		<div class="platform-links">
			<a class="platform-link" href="<?php echo esc_url( home_url( '/products/' ) ); ?>"><?php esc_html_e( 'Training Plans', 'redefine-co' ); ?><span><?php esc_html_e( 'Programs for strength, endurance, and mobility.', 'redefine-co' ); ?></span></a>
			<a class="platform-link" href="<?php echo esc_url( home_url( '/products/' ) ); ?>"><?php esc_html_e( 'Gear Guides', 'redefine-co' ); ?><span><?php esc_html_e( 'Curated picks and product breakdowns.', 'redefine-co' ); ?></span></a>
			<a class="platform-link" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Partnerships', 'redefine-co' ); ?><span><?php esc_html_e( 'Collaborate on launches, reviews, and reports.', 'redefine-co' ); ?></span></a>
			<a class="platform-link" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Submit News', 'redefine-co' ); ?><span><?php esc_html_e( 'Share your fitness brand updates.', 'redefine-co' ); ?></span></a>
		</div>
	</div>
</section>

<?php
get_footer();
