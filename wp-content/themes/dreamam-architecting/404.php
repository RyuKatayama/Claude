<?php
/**
 * 404 template.
 *
 * @package Dreamam_Architecting
 */

get_header();
?>

<section class="page-hero">
	<div class="container">
		<h1>ページが見つかりません</h1>
		<p class="lead">申し訳ございません。お探しのページは移動または削除された可能性があります。</p>
	</div>
</section>

<section class="section">
	<div class="container container--narrow text-center">
		<p>以下のリンクから目的のページをお探しください。</p>
		<p style="margin: 32px 0;">
			<a class="btn btn--primary" href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページに戻る</a>
		</p>
		<p><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">提供サービス</a>　／　<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">ブログ</a>　／　<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">お問い合わせ</a></p>

		<div style="margin-top:48px;">
			<?php get_search_form(); ?>
		</div>
	</div>
</section>

<?php get_footer();
