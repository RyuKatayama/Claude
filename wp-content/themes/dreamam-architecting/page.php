<?php
/**
 * Default page template.
 *
 * @package Dreamam_Architecting
 */

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>
	<section class="page-hero">
		<div class="container">
			<h1><?php the_title(); ?></h1>
			<?php if ( has_excerpt() ) : ?>
				<p class="lead"><?php echo esc_html( get_the_excerpt() ); ?></p>
			<?php endif; ?>
		</div>
	</section>

	<?php dreamam_breadcrumbs(); ?>

	<section class="section">
		<div class="container container--narrow">
			<article class="entry-content">
				<?php the_content(); ?>
			</article>
		</div>
	</section>
<?php endwhile; ?>

<?php get_footer();
