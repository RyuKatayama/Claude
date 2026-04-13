<?php
/**
 * Template Name: Contact Template
 *
 * @package Dreamam_Architecting
 */

get_header();
?>

<section class="page-hero">
	<div class="container">
		<h1>お問い合わせ</h1>
		<p class="lead">初回相談は無料です。お気軽にご連絡ください。</p>
	</div>
</section>

<?php dreamam_breadcrumbs(); ?>

<section class="section">
	<div class="container container--narrow">

		<div class="contact-notice">
			<p><strong>✓ 初回相談は無料です。</strong><br>
			頂いたご相談内容は、<strong>平日 10:00〜20:00</strong> に順次拝見し、メールにて折り返しご連絡いたします。お急ぎの場合は、メール件名に「至急」とご記入ください。</p>
		</div>

		<article class="entry-content">
			<h2>お問い合わせ方法</h2>

			<p>以下のいずれかの方法でご連絡ください。<strong>相談フォームからのご連絡を推奨</strong>しております（内容を整理してご返信しやすいため）。</p>

			<h3>1. 相談フォーム（推奨）</h3>
			<p>以下のフォームに必要事項をご記入の上、送信してください。</p>

			<div class="contact-form-wrap">
				<?php
				the_content();
				/*
				 * Contact Form 7 をインストールの上、フォームを作成し、
				 * 固定ページ本文に以下のようなショートコードを貼り付けてください。
				 *
				 * [contact-form-7 id="XX" title="お問い合わせ"]
				 *
				 * 入力項目の推奨:
				 * - お名前（必須）
				 * - 会社名・ご所属（任意）
				 * - メールアドレス（必須）
				 * - ご相談内容（必須）
				 * - プライバシーポリシー同意チェック
				 */
				?>
			</div>

			<h3>2. メールで直接</h3>
			<p>直接メールでご連絡いただくことも可能です。</p>
			<p><strong>Email:</strong> <a href="mailto:<?php echo esc_attr( dreamam_obfuscate_email( 'ryuk@dreamam.net' ) ); ?>"><?php echo esc_html( dreamam_obfuscate_email( 'ryuk@dreamam.net' ) ); ?></a></p>

			<h2>ご相談の流れ</h2>
			<ol>
				<li><strong>お問い合わせ</strong> — フォームまたはメールでご連絡ください。</li>
				<li><strong>初回ヒアリング（無料）</strong> — オンライン（ZOOM）で30〜60分、現状の課題をお伺いします。</li>
				<li><strong>ご提案・お見積り</strong> — ご相談内容に基づき、最適な支援内容をご提案いたします。</li>
				<li><strong>契約・支援開始</strong> — 内容にご同意いただけましたら、契約を経て支援を開始します。</li>
			</ol>

			<h2>よくあるご質問</h2>
			<h3>Q. 相談だけでも可能ですか？</h3>
			<p>A. はい、初回相談は無料です。技術的課題の壁打ち、方針の相談、研修企画の相談など、お気軽にご利用ください。</p>

			<h3>Q. どの地域まで対応していますか？</h3>
			<p>A. 所在地は大阪市ですが、オンライン（ZOOM）での支援が中心のため、全国・海外含めて対応可能です。ご要望に応じて対面でのご訪問も調整いたします。</p>

			<h3>Q. 顧問契約・スポット相談・研修の違いは？</h3>
			<p>A. ご支援の形態は柔軟にお選びいただけます：</p>
			<ul>
				<li><strong>顧問契約</strong> — 月額定額で継続的にご支援</li>
				<li><strong>スポット相談</strong> — 単発の課題について時間単位でご支援</li>
				<li><strong>研修・ワークショップ</strong> — 人材育成のための講義／ワークショップ（日数単位）</li>
				<li><strong>プロジェクト型</strong> — 一定期間の案件単位でご支援</li>
			</ul>
			<p>費用は内容・期間・規模に応じて個別にお見積りいたします。詳細は<strong>お問い合わせ時</strong>にご相談ください。</p>
		</article>
	</div>
</section>

<?php get_footer();
