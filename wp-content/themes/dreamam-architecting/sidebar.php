<?php
/**
 * Sidebar (blog).
 *
 * @package Dreamam_Architecting
 */

if ( ! is_active_sidebar( 'blog-sidebar' ) ) :
	// Default fallback widgets.
	?>
	<section class="widget">
		<h3 class="widget-title">検索</h3>
		<?php get_search_form(); ?>
	</section>

	<section class="widget">
		<h3 class="widget-title">カテゴリー</h3>
		<ul>
			<?php wp_list_categories( array(
				'title_li' => '',
				'show_count' => true,
			) ); ?>
		</ul>
	</section>

	<section class="widget">
		<h3 class="widget-title">最新の記事</h3>
		<ul>
			<?php
			$recent = new WP_Query( array(
				'posts_per_page'      => 5,
				'ignore_sticky_posts' => true,
			) );
			while ( $recent->have_posts() ) : $recent->the_post();
				?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; wp_reset_postdata(); ?>
		</ul>
	</section>

	<section class="widget">
		<h3 class="widget-title">アーカイブ</h3>
		<ul>
			<?php wp_get_archives( array(
				'type'            => 'monthly',
				'show_post_count' => true,
			) ); ?>
		</ul>
	</section>

	<section class="widget" style="background: var(--color-primary-navy); color:#fff; text-align:center;">
		<h3 class="widget-title" style="color:#fff; border-color:var(--color-accent);">ご相談はこちらから</h3>
		<p style="color: rgba(255,255,255,0.85); font-size:0.9rem; margin-bottom:16px;">初回相談は無料です。お気軽にお問い合わせください。</p>
		<a class="btn btn--accent btn--block" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">無料で相談する</a>
	</section>
	<?php
else :
	dynamic_sidebar( 'blog-sidebar' );
endif;
