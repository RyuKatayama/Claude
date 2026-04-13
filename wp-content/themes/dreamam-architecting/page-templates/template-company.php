<?php
/**
 * Template Name: Company Info Template
 *
 * @package Dreamam_Architecting
 */

get_header();
?>

<section class="page-hero">
	<div class="container">
		<h1>事業者情報</h1>
		<p class="lead">夢・アーキテクティング工房の事業者情報です。</p>
	</div>
</section>

<?php dreamam_breadcrumbs(); ?>

<section class="section">
	<div class="container container--narrow">
		<article class="entry-content">
			<table style="width:100%; border-collapse:collapse; margin: 2rem 0;">
				<tbody>
					<tr style="border-bottom:1px solid var(--color-border);">
						<th style="text-align:left; padding: 16px; background:var(--color-bg-subtle); width:30%;">事業者名</th>
						<td style="padding:16px;">夢・アーキテクティング工房</td>
					</tr>
					<tr style="border-bottom:1px solid var(--color-border);">
						<th style="text-align:left; padding: 16px; background:var(--color-bg-subtle);">代表者</th>
						<td style="padding:16px;">片山 立（かたやま りゅう）工学博士</td>
					</tr>
					<tr style="border-bottom:1px solid var(--color-border);">
						<th style="text-align:left; padding: 16px; background:var(--color-bg-subtle);">所在地</th>
						<td style="padding:16px;">〒530-0042<br>大阪市北区天満橋3-4-11</td>
					</tr>
					<tr style="border-bottom:1px solid var(--color-border);">
						<th style="text-align:left; padding: 16px; background:var(--color-bg-subtle);">設立</th>
						<td style="padding:16px;">2017年4月</td>
					</tr>
					<tr style="border-bottom:1px solid var(--color-border);">
						<th style="text-align:left; padding: 16px; background:var(--color-bg-subtle);">事業内容</th>
						<td style="padding:16px;">
							技術コンサルティング（車載・組込みシステム・機能安全・ソフトウェアプロセス改善・システムズエンジニアリング）<br>
							教育・人材育成（研修・ワークショップ）<br>
							組織開発支援（ティール組織・発達指向型組織など）<br>
							ライフデザイン・メンタリング・コーチング
						</td>
					</tr>
					<tr style="border-bottom:1px solid var(--color-border);">
						<th style="text-align:left; padding: 16px; background:var(--color-bg-subtle);">お問い合わせ</th>
						<td style="padding:16px;">
							Email: <a href="mailto:<?php echo esc_attr( dreamam_obfuscate_email( 'ryuk@dreamam.net' ) ); ?>"><?php echo esc_html( dreamam_obfuscate_email( 'ryuk@dreamam.net' ) ); ?></a><br>
							<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">お問い合わせフォーム</a>
						</td>
					</tr>
					<tr style="border-bottom:1px solid var(--color-border);">
						<th style="text-align:left; padding: 16px; background:var(--color-bg-subtle);">受付時間</th>
						<td style="padding:16px;">平日 10:00 〜 20:00</td>
					</tr>
					<tr style="border-bottom:1px solid var(--color-border);">
						<th style="text-align:left; padding: 16px; background:var(--color-bg-subtle);">関連リンク</th>
						<td style="padding:16px;">
							<a href="https://researchmap.jp/ryu.katayama/" target="_blank" rel="noopener noreferrer">researchmap</a><br>
							<a href="https://www.facebook.com/ryu.katayama.12" target="_blank" rel="noopener noreferrer">Facebook</a>
						</td>
					</tr>
				</tbody>
			</table>
		</article>
	</div>
</section>

<?php get_footer();
