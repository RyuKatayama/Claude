<?php
/**
 * Template Name: Services Template
 *
 * @package Dreamam_Architecting
 */

get_header();
?>

<section class="page-hero">
	<div class="container">
		<h1>提供サービス</h1>
		<p class="lead">技術コンサルティング × 人・組織変容支援 — 8つのサービスで「夢の実現」を支えます。</p>
	</div>
</section>

<?php dreamam_breadcrumbs(); ?>

<section class="section">
	<div class="container">
		<div class="section-header">
			<span class="eyebrow">Technology Side</span>
			<h2>技術コンサルティング・教育</h2>
			<p class="lead">40年超の実務経験をベースに、高度技術分野の開発・改善・人材育成を支援します。</p>
		</div>

		<div class="grid grid--2">
			<article class="card" id="service-innovation">
				<div class="card__icon"><?php echo dreamam_icon( 'lightbulb' ); // phpcs:ignore ?></div>
				<h3 class="card__title">(1) イノベーティブ思考・新規事業創出</h3>
				<p class="card__body">デザイン思考とシステム思考を融合したイノベーティブ思考法や、起業家の行動論理であるエフェクチュエーションを活用した、新規事業・新製品・新サービスの企画／創出支援／コンサルティング。イノベーティブ思考法を活用したアイデア創出のためのワークショップ実施とファシリテーション、ワークショップデザイン方法論の指導。</p>
			</article>

			<article class="card" id="service-systems">
				<div class="card__icon"><?php echo dreamam_icon( 'cog' ); // phpcs:ignore ?></div>
				<h3 class="card__title">(2) システムズエンジニアリング応用</h3>
				<p class="card__body">システムズエンジニアリングを応用した、システム／組込みシステム／組込みソフトウェア／製品／サービスの開発支援。要求分析から設計、テスト、妥当性と検証まで、V字プロセス全体を俯瞰した支援を提供。</p>
			</article>

			<article class="card" id="service-sepg">
				<div class="card__icon"><?php echo dreamam_icon( 'arrow' ); // phpcs:ignore ?></div>
				<h3 class="card__title">(3) ソフトウェアプロセス改善</h3>
				<p class="card__body">組織のソフトウェア開発プロセスの診断・改善支援、コンサルティング。現場の実情に寄り添い、持続可能な改善活動として定着させます。CMMI・ISO/IEC 33020 などのフレームワークにも対応。</p>
			</article>

			<article class="card" id="service-automotive">
				<div class="card__icon"><?php echo dreamam_icon( 'car' ); // phpcs:ignore ?></div>
				<h3 class="card__title">(4) 車載・AI・IoT 開発支援</h3>
				<p class="card__body">車載システム（ADAS：先進運転支援システム）や自動運転関連、自動車機能安全（ISO26262）、自動車セキュリティ（ISO/SAE 21434）、人工知能(AI)、IoT に関する技術／製品／サービスの開発支援、コンサルティング。</p>
			</article>

			<article class="card" id="service-education">
				<div class="card__icon"><?php echo dreamam_icon( 'graduation' ); // phpcs:ignore ?></div>
				<h3 class="card__title">(5) 教育・人材育成</h3>
				<p class="card__body">システムズエンジニアリング（システムアーキテクチャ設計など）、ソフトウェア開発（要求分析、アーキテクチャ設計、コンポーネント設計、実装、単体・結合・システムテスト、妥当性と検証、レビュー、プロセス改善）などの分野における教育と人材育成。</p>
			</article>
		</div>
	</div>
</section>

<section class="section section--subtle">
	<div class="container">
		<div class="section-header">
			<span class="eyebrow">Human & Organization Side</span>
			<h2>人・組織の変容支援</h2>
			<p class="lead">U理論・コーチング・組織開発・ライフデザインを通じて、持続的な変容を伴走します。</p>
		</div>

		<div class="grid grid--2">
			<article class="card" id="service-seminar">
				<div class="card__icon"><?php echo dreamam_icon( 'users' ); // phpcs:ignore ?></div>
				<h3 class="card__title">(6) セミナー・対話会・ファシリテーション</h3>
				<p class="card__body">オンラインツール ZOOM を活用したセミナー講師育成、自己組織化的なコミュニティ／対話会の形成、ファシリテーション支援。継続的な学びと気づきの場づくりをお手伝いします。</p>
			</article>

			<article class="card" id="service-org">
				<div class="card__icon"><?php echo dreamam_icon( 'compass' ); // phpcs:ignore ?></div>
				<h3 class="card__title">(7) 組織開発・自己組織型組織の構築</h3>
				<p class="card__body">活き活きとした働き甲斐のある組織風土構築のためのビジョン構築、対話の風土、組織開発支援。ティール組織、グリーン組織、発達指向型組織などの自己組織型組織の構築支援、対話のためのファシリテーション。ひふみプロフェッショナルコーチ。</p>
			</article>

			<article class="card" id="service-lifedesign">
				<div class="card__icon"><?php echo dreamam_icon( 'heart' ); // phpcs:ignore ?></div>
				<h3 class="card__title">(8) ライフデザイン・メンタリング</h3>
				<p class="card__body">夢の実現と変容の理論を応用したキャリアプラン研修、第2の人生の生きがいの探求、夢の実現を支援するライフデザインコーチ、メンタリング。青少年の夢を描くドリームファシリテータ。U理論、VIA(Vision Integration Approach)、関係コンディショナプラクティショナ、クリーンランゲージなどを活用した人材開発、組織開発支援。人生デザインコーチ®／人生デザイン講師®／Dr.ディマティーニ バリューファクター®公認ファシリテータ／B-BRAIN公認インストラクター。</p>
			</article>

			<article class="card" id="service-consult">
				<div class="card__icon"><?php echo dreamam_icon( 'sparkle' ); // phpcs:ignore ?></div>
				<h3 class="card__title">料金について</h3>
				<p class="card__body">ご支援内容、期間、規模に応じて個別にお見積りいたします。顧問契約、スポット相談、研修、コーチング単発など、柔軟にご対応可能です。<br><br><strong>詳細はお問い合わせください。初回相談は無料です。</strong></p>
				<a class="card__link" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">無料で相談する</a>
			</article>
		</div>
	</div>
</section>

<?php get_footer();
