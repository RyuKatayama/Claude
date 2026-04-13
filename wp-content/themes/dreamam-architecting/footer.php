<?php
/**
 * The footer.
 *
 * @package Dreamam_Architecting
 */
?>
</main><!-- #content -->

<?php if ( ! is_page( array( 'contact' ) ) ) : ?>
	<?php dreamam_render_cta(); ?>
<?php endif; ?>

<footer class="site-footer" role="contentinfo">
	<div class="container">
		<div class="footer-grid">
			<div class="footer-about">
				<h4>夢・アーキテクティング工房</h4>
				<p>人・チーム・組織が、夢の実現にむけて、自立的にしくみ（アーキテクチャ）をデザインし、実行することを支援します。</p>
				<p class="mt-3">
					<a href="https://researchmap.jp/ryu.katayama/" target="_blank" rel="noopener noreferrer">researchmap</a>　／
					<a href="https://www.facebook.com/ryu.katayama.12" target="_blank" rel="noopener noreferrer">Facebook</a>
				</p>
			</div>

			<div class="footer-links">
				<h4>サイトマップ</h4>
				<?php
				if ( has_nav_menu( 'footer' ) ) {
					wp_nav_menu( array(
						'theme_location' => 'footer',
						'container'      => false,
						'menu_class'     => '',
						'depth'          => 1,
					) );
				} else {
					?>
					<ul>
						<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">代表・事業について</a></li>
						<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">提供サービス</a></li>
						<li><a href="<?php echo esc_url( home_url( '/process/' ) ); ?>">支援プロセス</a></li>
						<li><a href="<?php echo esc_url( home_url( '/achievements/' ) ); ?>">支援実績</a></li>
						<li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">ブログ</a></li>
						<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">お問い合わせ</a></li>
						<li><a href="<?php echo esc_url( home_url( '/company/' ) ); ?>">事業者情報</a></li>
						<li><a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>">プライバシーポリシー</a></li>
					</ul>
					<?php
				}
				?>
			</div>

			<div class="footer-contact">
				<h4>お問い合わせ</h4>
				<p>
					<span class="label">事業者名</span>
					夢・アーキテクティング工房
				</p>
				<p>
					<span class="label">代表</span>
					片山 立（工学博士）
				</p>
				<p>
					<span class="label">所在地</span>
					〒530-0042<br>大阪市北区天満橋3-4-11
				</p>
				<p>
					<span class="label">Email</span>
					<a href="mailto:<?php echo esc_attr( dreamam_obfuscate_email( 'ryuk@dreamam.net' ) ); ?>"><?php echo esc_html( dreamam_obfuscate_email( 'ryuk@dreamam.net' ) ); ?></a>
				</p>
				<p>
					<span class="label">受付時間</span>
					平日 10:00 〜 20:00
				</p>
			</div>
		</div>

		<div class="footer-bottom">
			<p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> 夢・アーキテクティング工房. All rights reserved.</p>
			<p><a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>">プライバシーポリシー</a></p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
