<?php
/**
 * marcapagina functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package marcapagina
 */

if ( ! function_exists( 'marcapagina_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function marcapagina_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on marcapagina, use a find and replace
	 * to change 'marcapagina' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'marcapagina', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'marcapagina' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'marcapagina_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'marcapagina_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function marcapagina_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'marcapagina_content_width', 640 );
}
add_action( 'after_setup_theme', 'marcapagina_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function marcapagina_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'marcapagina' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'marcapagina' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'marcapagina_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function marcapagina_scripts() {
	wp_enqueue_style( 'marcapagina-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');

  wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css');
  wp_enqueue_style( 'icomoon', get_template_directory_uri() . '/css/icomoon.css');
  wp_enqueue_style( 'simple-line-icons', get_template_directory_uri() . '/css/simple-line-icons.css');

  wp_enqueue_style( 'marcapagina', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick/slick.css');

	wp_enqueue_script( 'marcapagina-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'marcapagina-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	//<script src="https://use.fontawesome.com/ab84abda16.js"></script>
  wp_enqueue_script( 'bootratap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array('jquery'),'v3',true);
	wp_enqueue_script( 'fontawsome', 'https://use.fontawesome.com/ab84abda16.js', array('jquery'),'v3',true);
  wp_enqueue_script( 'jqueryeasing', get_template_directory_uri() .  '/js/jquery.easing.1.3.js', array('jquery'),'v3',true);
  wp_enqueue_script( 'jquery-waypoint', get_template_directory_uri() .  '/js/jquery.waypoints.min.js', array('jquery'),'v3',true);
	wp_enqueue_script( 'slick-js', get_template_directory_uri() .  '/js/slick.min.js', array('jquery'),'v3',true);
	wp_enqueue_script( 'nicescroll', get_template_directory_uri() .  '/js/nicescroll.js', array('jquery'),'v3',true);
	wp_enqueue_script( 'main', get_template_directory_uri() .  '/js/main.js', array('jquery'),'v3',true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	if (is_singular()) {
		//Cargar estilos y css solo en el single

		wp_enqueue_style( 'reading-progress', get_template_directory_uri() . '/css/reading-progress/style.css');
		wp_enqueue_script( 'reading-progress-js', get_template_directory_uri() .  '/js/reading-progress/main.js', array('jquery'),'v3',true);
		//wp_enqueue_script( 'author', get_template_directory_uri() .  '/js/author.js', array('jquery'),'v3',true);
	}
	if (is_page('numeros')) {
		wp_enqueue_style( 'circle', get_template_directory_uri() . '/css/circle.css');
	}

	wp_enqueue_style( 'marca-rewrite', get_template_directory_uri() . '/css/marca-rewrite.css');
}
add_action( 'wp_enqueue_scripts', 'marcapagina_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/* Nuestras */
add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

function add_favicon(){ ?>
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri();?>/images/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri();?>/images/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri();?>/images/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri();?>/images/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri();?>/images/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri();?>/images/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri();?>/images/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri();?>/images/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri();?>/images/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_stylesheet_directory_uri();?>/images/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri();?>/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri();?>/images/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri();?>/images/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_stylesheet_directory_uri();?>/images/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri();?>/images/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <?php }
add_action('wp_head','add_favicon');


/* Custom Sizes */
add_image_size( 'avatar', 90, 90, true );
add_image_size( 'slider-principal', 1500, 700, true );
add_image_size( 'galerianumeros', 800, 528, true );
add_image_size( 'imagenDestacada', 790, 530, true );

function imagenDestacada($postid, $size) {
	$image_url = wp_get_attachment_image_url(get_post_thumbnail_id($postid), $size);
	if(!$image_url) {
		$image_url = get_template_directory_uri()."/images/image_1.jpg";
	}
	return $image_url;
}

function cantidadPostPorTag($tagid) {
	$tag = get_category($tagid);
	return $tag->count;
}

function obtenerPorcentaje($articulosCreados, $totalArticulos) {
		return ceil(($articulosCreados * 100) / $totalArticulos);
}

function obtenerCategoriaPrincipal($postid) {
	/*
		Soporte para seleccion de categorias principales YOAS / SEO
	*/
	$category = get_the_category($postid);
	$useCatLink = true;
	// If post has a category assigned.
	if ($category){
		$category_display = '';
		$category_link = '';
		if ( class_exists('WPSEO_Primary_Term') )
		{
			// Show the post's 'Primary' category, if this Yoast feature is available, & one is set
			$wpseo_primary_term = new WPSEO_Primary_Term( 'category', get_the_id() );
			$wpseo_primary_term = $wpseo_primary_term->get_primary_term();
			$term = get_term( $wpseo_primary_term );
			if (is_wp_error($term)) {
				// Default to first category (not Yoast) if an error is returned
				$category_display = $category[0]->name;
				$category_link = get_category_link( $category[0]->term_id );
			} else {
				// Yoast Primary category
				$category_display = $term->name;
				$category_link = get_category_link( $term->term_id );
			}
		}
		else {
			// Default, display the first category in WP's list of assigned categories
			$category_display = $category[0]->name;
			$category_link = get_category_link( $category[0]->term_id );
		}
  }
	return array ('ID' => $category[0]->term_id, 'nombreCategoria' => $category_display, 'linkCategoria' => $category_link);
}
