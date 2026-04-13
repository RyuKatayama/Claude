<?php
/**
 * The header.
 *
 * @package Dreamam_Architecting
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo esc_attr( is_singular() ? wp_strip_all_tags( get_the_excerpt() ) : get_bloginfo( 'description' ) ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="visually-hidden" href="#content">メインコンテンツへスキップ</a>

<header class="site-header" role="banner">
	<div class="container site-header__inner">
		<div class="site-branding">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<span class="site-name">夢・アーキテクティング工房</span>
					<span class="site-tagline">Dreamam Architecting Atelier</span>
				</a>
			<?php endif; ?>
		</div>

		<button class="nav-toggle" aria-expanded="false" aria-controls="primary-menu" aria-label="メニューを開く">
			<span></span><span></span><span></span>
		</button>

		<nav id="primary-menu" class="main-nav" role="navigation" aria-label="primary">
			<?php
			if ( has_nav_menu( 'primary' ) ) {
				wp_nav_menu( array(
					'theme_location' => 'primary',
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
				</ul>
				<?php
			}
			?>
			<a class="btn btn--accent nav-cta" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">無料相談</a>
		</nav>
	</div>
	<div class="rainbow-divider" aria-hidden="true"></div>
</header>

<main id="content" class="site-main" role="main">
