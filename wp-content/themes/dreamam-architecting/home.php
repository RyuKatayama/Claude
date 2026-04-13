<?php
/**
 * Blog index template (posts page).
 *
 * @package Dreamam_Architecting
 */

get_header();
?>

<section class="page-hero">
	<div class="container">
		<h1>ブログ</h1>
		<p class="lead">技術コンサルティング・組織開発・ライフデザインに関する考察や活動報告をお届けします。</p>
	</div>
</section>

<?php dreamam_breadcrumbs(); ?>

<section class="section">
	<div class="container">
		<div class="layout-with-sidebar">
			<div class="main-column">
				<?php if ( have_posts() ) : ?>
					<div class="post-list">
						<?php while ( have_posts() ) : the_post(); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-item' ); ?>>
								<?php if ( has_post_thumbnail() ) : ?>
									<a href="<?php the_permalink(); ?>" class="post-item__thumb">
										<?php the_post_thumbnail( 'medium_large' ); ?>
									</a>
								<?php else : ?>
									<a href="<?php the_permalink(); ?>" class="post-item__thumb" aria-hidden="true"></a>
								<?php endif; ?>

								<div class="post-item__body">
									<p class="post-item__meta">
										<?php echo esc_html( get_the_date() ); ?>
										<?php if ( has_category() ) : ?>
											<span class="post-item__cat"><?php echo esc_html( strip_tags( get_the_category_list( ', ' ) ) ); ?></span>
										<?php endif; ?>
									</p>
									<h2 class="post-item__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<p class="post-item__excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 80 ) ); ?></p>
								</div>
							</article>
						<?php endwhile; ?>
					</div>

					<?php dreamam_pagination(); ?>
				<?php else : ?>
					<p>まだ記事が投稿されていません。</p>
				<?php endif; ?>
			</div>

			<aside class="sidebar" role="complementary">
				<?php get_sidebar(); ?>
			</aside>
		</div>
	</div>
</section>

<?php get_footer();
