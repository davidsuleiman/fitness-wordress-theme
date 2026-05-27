<?php
/**
 * Category archive template.
 *
 * @package ReDefineCo
 */

get_header();

$category = get_queried_object();
$category_name = $category->name;
$category_desc = $category->description;
?>

<section class="hero">
	<div class="container hero-grid">
		<div>
			<p class="eyebrow"><?php echo esc_html( $category_name ); ?></p>
			<h1><?php printf( esc_html__( 'Exploring %s', 'redefine-co' ), esc_html( $category_name ) ); ?></h1>
			<?php if ( $category_desc ) : ?>
				<p class="hero-copy"><?php echo esc_html( $category_desc ); ?></p>
			<?php else : ?>
				<p class="hero-copy"><?php printf( esc_html__( 'Discover articles related to %s from our collection.', 'redefine-co' ), esc_html( $category_name ) ); ?></p>
			<?php endif; ?>
		</div>

		<aside class="insight-panel" aria-label="<?php esc_attr_e( 'Category highlights', 'redefine-co' ); ?>">
			<h2><?php esc_html_e( 'In this category', 'redefine-co' ); ?></h2>
			<div class="stat-row">
				<div class="stat"><strong><?php echo esc_html( $category->count ); ?></strong><span><?php esc_html_e( 'articles', 'redefine-co' ); ?></span></div>
			</div>
		</aside>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="section-head">
			<h2 class="section-title"><?php printf( esc_html__( '%s Articles', 'redefine-co' ), esc_html( $category_name ) ); ?></h2>
		</div>

		<div class="post-grid">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<article <?php post_class( 'post-card' ); ?>>
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="featured-image">
								<?php the_post_thumbnail( 'medium', array( 'alt' => get_the_title() ) ); ?>
							</div>
						<?php else : ?>
							<div class="featured-image" style="background: linear-gradient(135deg, #c8f03a 0%, #a8cb2a 100%); display: flex; align-items: center; justify-content: center; color: var(--ink); font-weight: 700; font-size: 2.5rem;">
								<?php echo esc_html( substr( get_the_title(), 0, 1 ) ); ?>
							</div>
						<?php endif; ?>
						<div>
							<time class="post-date" datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p><?php echo esc_html( redefine_co_excerpt() ); ?></p>
						</div>
						<span class="post-category"><?php echo esc_html( get_the_category_list( ', ' ) ? wp_strip_all_tags( get_the_category_list( ', ' ) ) : esc_html( $category_name ) ); ?></span>
					</article>
				<?php endwhile; ?>
			<?php else : ?>
				<div style="grid-column: 1 / -1; text-align: center; padding: 60px 20px;">
					<p style="color: var(--muted); font-size: 1.1rem;"><?php printf( esc_html__( 'No articles found in %s yet. Check back soon!', 'redefine-co' ), esc_html( $category_name ) ); ?></p>
				</div>
			<?php endif; ?>
		</div>

		<?php the_posts_pagination(); ?>
	</div>
</section>

<?php
get_footer();
