<?php
/**
 * Single post template.
 *
 * @package Dreamam_Architecting
 */

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

	<section class="page-hero">
		<div class="container container--narrow">
			<?php if ( has_category() ) : ?>
				<p style="margin-bottom:12px;"><?php echo get_the_category_list( ' ' ); // phpcs:ignore ?></p>
			<?php endif; ?>
			<h1><?php the_title(); ?></h1>
			<p class="lead">
				<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
			</p>
		</div>
	</section>

	<?php dreamam_breadcrumbs(); ?>

	<section class="section">
		<div class="container">
			<div class="layout-with-sidebar">
				<div class="main-column">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="entry-thumbnail" style="margin-bottom: 32px;"><?php the_post_thumbnail( 'large' ); ?></div>
						<?php endif; ?>

						<div class="entry-content">
							<?php the_content(); ?>
							<?php
							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dreamam' ),
								'after'  => '</div>',
							) );
							?>
						</div>

						<?php if ( has_tag() ) : ?>
							<p style="margin-top: 32px; color: var(--color-text-muted); font-size: 0.9rem;">
								タグ: <?php the_tags( '', ', ' ); ?>
							</p>
						<?php endif; ?>
					</article>

					<nav class="post-nav" style="display:flex;justify-content:space-between;gap:16px;margin:48px 0;flex-wrap:wrap;">
						<div style="flex:1;"><?php previous_post_link( '<span>« %link</span>' ); ?></div>
						<div style="flex:1; text-align:right;"><?php next_post_link( '<span>%link »</span>' ); ?></div>
					</nav>

					<?php if ( comments_open() || get_comments_number() ) : ?>
						<?php comments_template(); ?>
					<?php endif; ?>
				</div>

				<aside class="sidebar" role="complementary">
					<?php get_sidebar(); ?>
				</aside>
			</div>
		</div>
	</section>

<?php endwhile; ?>

<?php get_footer();
