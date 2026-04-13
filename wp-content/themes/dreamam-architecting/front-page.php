<?php
/**
 * Front page template.
 *
 * @package Dreamam_Architecting
 */

get_header();
?>

<section class="hero">
	<div class="container hero__inner">
		<span class="hero__eyebrow">Dreamam Architecting Atelier</span>
		<h1 class="hero__title">
			夢を描き、<em>変容</em>し、<br>
			実現のしくみを <em>デザイン</em> する。
		</h1>
		<p class="hero__lead">
			人・チーム・組織が、夢の実現にむけて、自立的にしくみ（アーキテクチャ）をデザインし、実行することを支援します。40年超の技術経験と、U理論・イノベーティブ思考を融合させた、技術コンサルティング／組織開発／人材育成のワンストップパートナー。
		</p>
		<div class="hero__ctas">
			<a class="btn btn--accent btn--large" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">無料相談のお申し込み</a>
			<a class="btn btn--outline btn--large" style="color:#fff;border-color:rgba(255,255,255,0.5);" href="<?php echo esc_url( home_url( '/services/' ) ); ?>">提供サービスを見る</a>
		</div>
		<p class="hero__meta">初回相談は無料 ／ 平日 10:00〜20:00 対応</p>
	</div>
</section>

<!-- 2-Axis Business Model -->
<section class="section">
	<div class="container">
		<div class="section-header">
			<span class="eyebrow">Our Value Proposition</span>
			<h2>技術の堅実さ × 人間性の温かさ</h2>
			<p class="lead">高度専門技術コンサルティングと、人・組織変容支援 — 両輪で企業と個人の「夢の実現」を支えます。</p>
		</div>

		<div class="two-axis">
			<div class="two-axis__block">
				<h3>技術コンサルティング</h3>
				<p>車載システム・ADAS・機能安全・システムズエンジニアリング・ソフトウェアプロセス改善。40年超の実務経験と論文実績に裏付けられた、技術の核心に迫る支援。</p>
			</div>
			<div class="two-axis__x" aria-hidden="true">×</div>
			<div class="two-axis__block two-axis__block--purple">
				<h3>人・組織の変容支援</h3>
				<p>U理論・VIA・エフェクチュエーション・クリーンランゲージ。個人のライフデザインから、ティール・発達指向型組織の構築まで、変容のプロセスを伴走。</p>
			</div>
		</div>
	</div>
</section>

<!-- Services Grid -->
<section class="section section--subtle">
	<div class="container">
		<div class="section-header">
			<span class="eyebrow">Services</span>
			<h2>提供サービス</h2>
			<p class="lead">技術系と人・組織系、計8つのサービスを通じて、貴社・貴方の夢の実現を支援します。</p>
		</div>

		<div class="grid grid--4">
			<?php
			$services = array(
				array(
					'icon'  => 'lightbulb',
					'title' => 'イノベーティブ思考・新規事業創出',
					'body'  => 'デザイン思考とシステム思考を融合したイノベーティブ思考法、エフェクチュエーションを活用した新規事業・新製品・新サービスの企画・創出支援、ワークショップ。',
				),
				array(
					'icon'  => 'cog',
					'title' => 'システムズエンジニアリング応用',
					'body'  => 'システムズエンジニアリングを応用したシステム、組込みシステム、組込みソフトウェア、製品やサービスの開発支援・コンサルティング。',
				),
				array(
					'icon'  => 'arrow',
					'title' => 'ソフトウェアプロセス改善',
					'body'  => '開発プロセスの診断・改善支援、コンサルティング。現場の実情に寄り添った、持続可能な改善活動の伴走。',
				),
				array(
					'icon'  => 'car',
					'title' => '車載・AI・IoT 開発支援',
					'body'  => '車載システム（ADAS・自動運転・機能安全・セキュリティ）、AI、IoT に関する技術・製品・サービスの開発支援。ISO26262／ISO/SAE 21434 対応。',
				),
				array(
					'icon'  => 'graduation',
					'title' => '教育・人材育成',
					'body'  => 'システムズエンジニアリング、ソフトウェア開発（要求分析〜テスト、プロセス改善）などの分野における研修・教育・人材育成。',
				),
				array(
					'icon'  => 'users',
					'title' => 'セミナー・対話会・ファシリテーション',
					'body'  => 'ZOOM を活用したセミナー講師育成、自己組織化的コミュニティ・対話会の形成、ファシリテーション支援。',
				),
				array(
					'icon'  => 'compass',
					'title' => '組織開発・自己組織型組織の構築',
					'body'  => '活き活きとした働き甲斐のある組織風土構築、対話の風土、組織開発支援。ティール組織・グリーン組織・発達指向型組織の構築支援。',
				),
				array(
					'icon'  => 'heart',
					'title' => 'ライフデザイン・メンタリング',
					'body'  => '夢の実現と変容の理論を応用したキャリアプラン研修、第2の人生の生きがい探求、ライフデザインコーチ、メンタリング、ドリームファシリテータ。',
				),
			);

			foreach ( $services as $svc ) : ?>
				<article class="card">
					<div class="card__icon" aria-hidden="true"><?php echo dreamam_icon( $svc['icon'] ); // phpcs:ignore ?></div>
					<h3 class="card__title"><?php echo esc_html( $svc['title'] ); ?></h3>
					<p class="card__body"><?php echo esc_html( $svc['body'] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>

		<p class="text-center mt-5">
			<a class="btn btn--primary" href="<?php echo esc_url( home_url( '/services/' ) ); ?>">サービス詳細を見る</a>
		</p>
	</div>
</section>

<!-- Process -->
<section class="section">
	<div class="container">
		<div class="section-header">
			<span class="eyebrow">Process</span>
			<h2>典型的な支援のプロセス</h2>
			<p class="lead">顧客の「あるべき姿」を起点に、6つのステップで変革をデザインし、実行まで伴走します。</p>
		</div>

		<div class="process-steps">
			<article class="process-step">
				<span class="process-step__num">1</span>
				<h3 class="process-step__title">問題定義</h3>
				<p class="process-step__body">顧客のあるべき姿（実現したい夢、解決したい課題）を明らかにします。</p>
			</article>
			<article class="process-step">
				<span class="process-step__num">2</span>
				<h3 class="process-step__title">価値のデザイン</h3>
				<p class="process-step__body">あるべき姿が実現できた時の価値をデザインします。</p>
			</article>
			<article class="process-step">
				<span class="process-step__num">3</span>
				<h3 class="process-step__title">ソリューションのデザイン</h3>
				<p class="process-step__body">あるべき姿を実現する手段をデザインします。</p>
			</article>
			<article class="process-step">
				<span class="process-step__num">4</span>
				<h3 class="process-step__title">変容・変革のデザイン</h3>
				<p class="process-step__body">人や組織の変容、技術や仕組みの変革をどう実施するかの方法をデザインします。</p>
			</article>
			<article class="process-step">
				<span class="process-step__num">5</span>
				<h3 class="process-step__title">変革の実施</h3>
				<p class="process-step__body">デザインに基づき、実行段階で並走・サポートします。</p>
			</article>
			<article class="process-step">
				<span class="process-step__num">6</span>
				<h3 class="process-step__title">内省（振返り）</h3>
				<p class="process-step__body">実施した活動を振り返り、今後の活動に反映させます。</p>
			</article>
		</div>

		<p class="text-center mt-5">
			<a class="btn btn--outline" href="<?php echo esc_url( home_url( '/process/' ) ); ?>">プロセスの詳細を見る</a>
		</p>
	</div>
</section>

<!-- Achievements preview -->
<section class="section section--subtle">
	<div class="container">
		<div class="section-header">
			<span class="eyebrow">Achievements</span>
			<h2>支援実績</h2>
			<p class="lead">欧州自動車メーカ、大手Tier1・Tier2、大手二輪車メーカ、大手電装・空調・計算機器メーカをはじめ、多数のクライアントをご支援してきました。</p>
		</div>

		<ul class="achievement-list">
			<li><span class="industry">欧州自動車メーカ</span><p class="detail">自動駐車支援システムの開発PJ参画</p></li>
			<li><span class="industry">欧州自動車メーカ</span><p class="detail">EV向けバッテリマネジメントシステムの機能安全(ISO26262)対応支援</p></li>
			<li><span class="industry">大手Tier1</span><p class="detail">車載ネットワークアーキテクチャの中長期ロードマップ策定</p></li>
			<li><span class="industry">大手Tier2</span><p class="detail">車載セキュリティプロセス・エンジニアリング導入支援</p></li>
			<li><span class="industry">大手二輪車メーカ</span><p class="detail">プロダクトライン開発の導入支援</p></li>
			<li><span class="industry">大手電装機器メーカ</span><p class="detail">ブレーキシステムの機能安全開発プロセス導入支援</p></li>
		</ul>

		<p class="text-center mt-5">
			<a class="btn btn--primary" href="<?php echo esc_url( home_url( '/achievements/' ) ); ?>">すべての実績を見る</a>
		</p>
	</div>
</section>

<!-- Why choose us -->
<section class="section">
	<div class="container">
		<div class="section-header">
			<span class="eyebrow">Why us</span>
			<h2>選ばれる理由</h2>
		</div>

		<div class="grid grid--3">
			<div class="card">
				<div class="card__icon"><?php echo dreamam_icon( 'graduation' ); // phpcs:ignore ?></div>
				<h3 class="card__title">40年超の実務経験と工学博士</h3>
				<p class="card__body">三洋電機・パナソニックR&D本部・オートモーティブ社技術本部での豊富な実務経験。ファジィ・ニューラルネットワークで工学博士号取得（慶應義塾大学）。</p>
			</div>
			<div class="card">
				<div class="card__icon"><?php echo dreamam_icon( 'cog' ); // phpcs:ignore ?></div>
				<h3 class="card__title">技術と人・組織の両軸</h3>
				<p class="card__body">車載・組込み技術の専門性と、U理論・コーチング・組織開発の深い実践知を、独自に統合。技術だけでは解けない課題に、人と組織の変容から迫ります。</p>
			</div>
			<div class="card">
				<div class="card__icon"><?php echo dreamam_icon( 'sparkle' ); // phpcs:ignore ?></div>
				<h3 class="card__title">20+ のコミュニティでの活動</h3>
				<p class="card__body">公共貨幣フォーラム理事、全脳アーキテクチャイニシャティブ運営委員、AUTOSAR Regional WP Japan委員 ほか、多彩なコミュニティで活動する思想的リーダー。</p>
			</div>
		</div>
	</div>
</section>

<!-- Latest Blog -->
<?php
$latest_posts = new WP_Query( array(
	'posts_per_page'      => 3,
	'ignore_sticky_posts' => true,
) );
if ( $latest_posts->have_posts() ) : ?>
<section class="section section--subtle">
	<div class="container">
		<div class="section-header">
			<span class="eyebrow">Blog</span>
			<h2>最新の記事</h2>
		</div>

		<div class="grid grid--3">
			<?php while ( $latest_posts->have_posts() ) : $latest_posts->the_post(); ?>
				<article class="card">
					<?php if ( has_post_thumbnail() ) : ?>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium_large', array( 'style' => 'border-radius:8px;margin-bottom:12px;' ) ); ?></a>
					<?php endif; ?>
					<p class="text-muted" style="font-size:0.85rem;margin-bottom:6px;"><?php echo esc_html( get_the_date() ); ?></p>
					<h3 class="card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<p class="card__body"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 50 ) ); ?></p>
					<a class="card__link" href="<?php the_permalink(); ?>">続きを読む</a>
				</article>
			<?php endwhile; wp_reset_postdata(); ?>
		</div>

		<p class="text-center mt-5">
			<a class="btn btn--outline" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">すべての記事を見る</a>
		</p>
	</div>
</section>
<?php endif; ?>

<?php get_footer();
