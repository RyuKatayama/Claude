<?php
/**
 * Dreamam Architecting theme functions.
 *
 * @package Dreamam_Architecting
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'DREAMAM_VERSION', '1.0.0' );
define( 'DREAMAM_THEME_DIR', get_template_directory() );
define( 'DREAMAM_THEME_URI', get_template_directory_uri() );

/**
 * Theme setup.
 */
function dreamam_setup() {
	load_theme_textdomain( 'dreamam', DREAMAM_THEME_DIR . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array(
		'height'      => 48,
		'width'       => 200,
		'flex-width'  => true,
		'flex-height' => true,
	) );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	) );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );

	register_nav_menus( array(
		'primary' => __( 'メインメニュー', 'dreamam' ),
		'footer'  => __( 'フッターメニュー', 'dreamam' ),
	) );
}
add_action( 'after_setup_theme', 'dreamam_setup' );

/**
 * Enqueue scripts and styles.
 */
function dreamam_enqueue_assets() {
	// Google Fonts.
	wp_enqueue_style(
		'dreamam-fonts',
		'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Inter:wght@400;500;700&display=swap',
		array(),
		null
	);

	// Main stylesheet (style.css - theme header).
	wp_enqueue_style(
		'dreamam-style',
		get_stylesheet_uri(),
		array(),
		DREAMAM_VERSION
	);

	// Main CSS.
	wp_enqueue_style(
		'dreamam-main',
		DREAMAM_THEME_URI . '/assets/css/main.css',
		array( 'dreamam-style' ),
		DREAMAM_VERSION
	);

	// Blog CSS (only on blog pages for efficiency).
	if ( is_home() || is_singular( 'post' ) || is_archive() || is_search() ) {
		wp_enqueue_style(
			'dreamam-blog',
			DREAMAM_THEME_URI . '/assets/css/blog.css',
			array( 'dreamam-main' ),
			DREAMAM_VERSION
		);
	}

	// Main JS.
	wp_enqueue_script(
		'dreamam-main',
		DREAMAM_THEME_URI . '/assets/js/main.js',
		array(),
		DREAMAM_VERSION,
		true
	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dreamam_enqueue_assets' );

/**
 * Register footer widget areas.
 */
function dreamam_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'ブログ サイドバー', 'dreamam' ),
		'id'            => 'blog-sidebar',
		'description'   => __( 'ブログページに表示されるサイドバー', 'dreamam' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'dreamam_widgets_init' );

/**
 * Add excerpt length filter.
 */
function dreamam_excerpt_length( $length ) {
	return 80;
}
add_filter( 'excerpt_length', 'dreamam_excerpt_length' );

function dreamam_excerpt_more( $more ) {
	return '…';
}
add_filter( 'excerpt_more', 'dreamam_excerpt_more' );

/**
 * Custom body classes.
 */
function dreamam_body_classes( $classes ) {
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}
	if ( is_front_page() ) {
		$classes[] = 'is-front-page';
	}
	return $classes;
}
add_filter( 'body_class', 'dreamam_body_classes' );

/**
 * Breadcrumb helper.
 */
function dreamam_breadcrumbs() {
	if ( is_front_page() ) {
		return;
	}
	echo '<nav class="breadcrumbs" aria-label="breadcrumb"><div class="container">';
	echo '<a href="' . esc_url( home_url( '/' ) ) . '">ホーム</a>';
	echo '<span class="separator">›</span>';

	if ( is_home() ) {
		echo '<span>ブログ</span>';
	} elseif ( is_singular( 'post' ) ) {
		echo '<a href="' . esc_url( get_post_type_archive_link( 'post' ) ? get_post_type_archive_link( 'post' ) : home_url( '/blog/' ) ) . '">ブログ</a>';
		echo '<span class="separator">›</span>';
		echo '<span>' . esc_html( get_the_title() ) . '</span>';
	} elseif ( is_page() ) {
		$ancestors = get_post_ancestors( get_the_ID() );
		if ( $ancestors ) {
			$ancestors = array_reverse( $ancestors );
			foreach ( $ancestors as $ancestor ) {
				echo '<a href="' . esc_url( get_permalink( $ancestor ) ) . '">' . esc_html( get_the_title( $ancestor ) ) . '</a>';
				echo '<span class="separator">›</span>';
			}
		}
		echo '<span>' . esc_html( get_the_title() ) . '</span>';
	} elseif ( is_category() ) {
		echo '<span>' . esc_html( single_cat_title( '', false ) ) . '</span>';
	} elseif ( is_search() ) {
		echo '<span>検索結果: ' . esc_html( get_search_query() ) . '</span>';
	} elseif ( is_archive() ) {
		echo '<span>' . esc_html( get_the_archive_title() ) . '</span>';
	}
	echo '</div></nav>';
}

/**
 * CTA section partial helper.
 */
function dreamam_render_cta( $args = array() ) {
	$defaults = array(
		'heading' => 'まずは無料相談から始めませんか',
		'lead'    => '技術コンサルティング・組織開発支援について、お気軽にご相談ください。40年超の実務経験を基に、貴社の課題に真摯に向き合います。',
		'btn_text'  => '無料で相談する',
		'btn_url'   => home_url( '/contact/' ),
	);
	$args = wp_parse_args( $args, $defaults );
	?>
	<section class="cta-section">
		<div class="container">
			<h2><?php echo esc_html( $args['heading'] ); ?></h2>
			<p><?php echo esc_html( $args['lead'] ); ?></p>
			<a class="btn btn--accent btn--large" href="<?php echo esc_url( $args['btn_url'] ); ?>">
				<?php echo esc_html( $args['btn_text'] ); ?>
			</a>
			<p class="cta-section__meta">初回相談は無料 ／ 平日 10:00〜20:00 対応</p>
		</div>
	</section>
	<?php
}

/**
 * Obfuscate email address for spam protection.
 */
function dreamam_obfuscate_email( $email ) {
	return antispambot( $email );
}

/**
 * Disable emojis for performance.
 */
function dreamam_disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
}
add_action( 'init', 'dreamam_disable_emojis' );

/**
 * Include additional files.
 */
require_once DREAMAM_THEME_DIR . '/inc/template-functions.php';
