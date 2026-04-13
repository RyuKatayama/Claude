<?php
/**
 * Search results template.
 *
 * @package Dreamam_Architecting
 */

get_header();
?>

<section class="page-hero">
	<div class="container">
		<h1>検索結果: <?php echo esc_html( get_search_query() ); ?></h1>
		<p class="lead"><?php global $wp_query; printf( '%d件の結果が見つかりました。', (int) $wp_query->found_posts ); ?></p>
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
									<a href="<?php the_permalink(); ?>" class="post-item__thumb"><?php the_post_thumbnail( 'medium_large' ); ?></a>
								<?php else : ?>
									<a href="<?php the_permalink(); ?>" class="post-item__thumb" aria-hidden="true"></a>
								<?php endif; ?>
								<div class="post-item__body">
									<p class="post-item__meta"><?php echo esc_html( get_the_date() ); ?></p>
									<h2 class="post-item__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<p class="post-item__excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 80 ) ); ?></p>
								</div>
							</article>
						<?php endwhile; ?>
					</div>
					<?php dreamam_pagination(); ?>
				<?php else : ?>
					<p>お探しのキーワードに一致する記事は見つかりませんでした。別のキーワードでお試しください。</p>
					<?php get_search_form(); ?>
				<?php endif; ?>
			</div>
			<aside class="sidebar" role="complementary">
				<?php get_sidebar(); ?>
			</aside>
		</div>
	</div>
</section>

<?php get_footer();
