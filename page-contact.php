<?php
/**
 * Template Name: Contact Us Page
 *
 * @package ReDefineCo
 */

get_header();
?>

<section class="page-hero">
	<div class="container">
		<p class="eyebrow"><?php esc_html_e( 'Contact us', 'redefine-co' ); ?></p>
		<h1><?php esc_html_e( 'Send a pitch, question, or partnership idea.', 'redefine-co' ); ?></h1>
		<p><?php esc_html_e( 'Reach out about product reviews, brand partnerships, training resources, or stories shaping fitness and wellness.', 'redefine-co' ); ?></p>
	</div>
</section>

<section class="section">
	<div class="container contact-layout">
		<aside class="contact-card">
			<h2><?php esc_html_e( 'Work with ReDefine & Co.', 'redefine-co' ); ?></h2>
			<p><?php esc_html_e( 'Use the form to start a conversation. For fastest replies, include a clear subject, timeline, and any relevant links.', 'redefine-co' ); ?></p>
			<div class="contact-details">
				<div class="contact-detail">
					<strong><?php esc_html_e( 'Editorial', 'redefine-co' ); ?></strong>
					<a href="mailto:editor@example.com">editor@example.com</a>
				</div>
				<div class="contact-detail">
					<strong><?php esc_html_e( 'Partnerships', 'redefine-co' ); ?></strong>
					<a href="mailto:partners@example.com">partners@example.com</a>
				</div>
				<div class="contact-detail">
					<strong><?php esc_html_e( 'Location', 'redefine-co' ); ?></strong>
					<span><?php esc_html_e( 'Remote-first fitness media studio', 'redefine-co' ); ?></span>
				</div>
			</div>
		</aside>

		<form class="contact-card" action="#" method="post">
			<label for="contact-name"><?php esc_html_e( 'Name', 'redefine-co' ); ?></label>
			<input id="contact-name" type="text" name="name" autocomplete="name">

			<label for="contact-email"><?php esc_html_e( 'Email', 'redefine-co' ); ?></label>
			<input id="contact-email" type="email" name="email" autocomplete="email">

			<label for="contact-topic"><?php esc_html_e( 'Topic', 'redefine-co' ); ?></label>
			<input id="contact-topic" type="text" name="topic">

			<label for="contact-message"><?php esc_html_e( 'Message', 'redefine-co' ); ?></label>
			<textarea id="contact-message" name="message"></textarea>

			<button type="submit"><?php esc_html_e( 'Send message', 'redefine-co' ); ?></button>
		</form>
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
