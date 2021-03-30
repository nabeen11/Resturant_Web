<?php

/**
 * Sumi_Restaurant functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sumi_Restaurant
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('sumi_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function sumi_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Sumi_Restaurant, use a find and replace
		 * to change 'sumi' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('sumi', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'sumi'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'sumi_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'sumi_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sumi_content_width()
{
	$GLOBALS['content_width'] = apply_filters('sumi_content_width', 640);
}
add_action('after_setup_theme', 'sumi_content_width', 0);

//////////////////////////////////////Menu///////////////////////////////////////////////////////////////////////////

function prefix_testimonial_add()
{
	$labels = array(
		'name'  			 => __('Testimonials', 'sumi'),
		'singular_name' 	 => __('Testimonial', 'sumi'),
		'add_new'			 => _x('Add Testimonial', 'sumi'),
		'add_new_item'		 => __('Add New Testimonial', 'sumi'),
		'edit_item'			 => __('Edit Testimonial', 'sumi'),
		'new_item'			 => __('New Testimonial', 'sumi'),
		'view_item'			 => __('View Testimonial', 'sumi'),
		'search_items'		 => __('Search Testimonials', 'sumi'),
		'not_found'			 => __('No Testimonials found', 'sumi'),
		'not_found_in_trash' => __('No Testimonials found in Trash', 'sumi'),
		'parent_item_colon'  => __('Parent Testimonial', 'sumi'),
		'menu_name'			 => __('Testimonials', 'sumi'),
	);
	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-testimonial',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			'author',
			'thumbnail',
			'excerpt',
			// 'custom-fields',
			'trackbacks',
			'comments',
			'revisions',
			'page-attributes',
			'post-formats',
		),
	);

	register_post_type('sumi_testimonial', $args);
}
add_action('init', 'prefix_testimonial_add');

//////////////////////////////////////Menu///////////////////////////////////////////////////////////////////////////

function prefix_menu_add()
{
	$labels = array(
		'name'  			 => __('Menus', 'sumi'),
		'singular_name' 	 => __('Menu', 'sumi'),
		'add_new'			 => _x('Add Menu', 'sumi'),
		'add_new_item'		 => __('Add New Menu', 'sumi'),
		'edit_item'			 => __('Edit Menu', 'sumi'),
		'new_item'			 => __('New Menu', 'sumi'),
		'view_item'			 => __('View Menu', 'sumi'),
		'search_items'		 => __('Search Menus', 'sumi'),
		'not_found'			 => __('No Menus found', 'sumi'),
		'not_found_in_trash' => __('No Menus found in Trash', 'sumi'),
		'parent_item_colon'  => __('Parent Menu', 'sumi'),
		'menu_name'			 => __('Menus', 'sumi'),
	);
	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-welcome-widgets-menus',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			// 'author',
			'thumbnail',
			'excerpt',
			// 'custom-fields',
			// 'trackbacks',
			// 'comments',
			// 'revisions',
			'page-attributes',
			'post-formats',
		),
	);

	register_post_type('sumi_menu', $args);
}
add_action('init', 'prefix_menu_add');

/**
 * Create a taxonomy
 *
 * @uses  Inserts new taxonomy object into the list
 * @uses  Adds query vars
 *
 * @param string  Name of taxonomy object
 * @param array|string  Name of the object type for the taxonomy object.
 * @param array|string  Taxonomy arguments
 * @return null|WP_Error WP_Error if errors, otherwise null.
 */

function menucategory()
{
	$labels = array(
		'name'                  => _x('Categories', 'Categories', 'sumi'),
		'singular_name'         => _x('Category', 'Category', 'sumi'),
		'search_items'          => __('Search Categories', 'sumi'),
		'popular_items'         => __('Popular Categories', 'sumi'),
		'all_items'             => __('All Categories', 'sumi'),
		'parent_item'           => __('Parent Category', 'sumi'),
		'parent_item_colon'     => __('Parent Category', 'sumi'),
		'edit_item'             => __('Edit Category', 'sumi'),
		'update_item'           => __('Update Category', 'sumi'),
		'add_new_item'          => __('Add New Category', 'sumi'),
		'new_item_name'         => __('New Category Name', 'sumi'),
		'add_or_remove_items'   => __('Add or remove Categories', 'sumi'),
		'choose_from_most_used' => __('Choose from most used Categories', 'sumi'),
		'menu_name'             => __('Category', 'sumi'),
	);
	$args = array(
		'labels'            => $labels,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_admin_column' => false,
		'hierarchical'      => true,
		'show_tagcloud'     => true,
		'show_ui'           => true,
		'query_var'         => true,
		'rewrite'           => true,
		'query_var'         => true,
		'capabilities'      => array(),
	);
	register_taxonomy('menucategory', array('sumi_menu'), $args);
}
add_action('init', 'menucategory');

/**
 * Create a taxonomy
 *
 * @uses  Inserts new taxonomy object into the list
 * @uses  Adds query vars
 *
 * @param string  Name of taxonomy object
 * @param array|string  Name of the object type for the taxonomy object.
 * @param array|string  Taxonomy arguments
 * @return null|WP_Error WP_Error if errors, otherwise null.
 */

function menuingredent()
{
	$labels = array(
		'name'                  => _x('Ingredents', 'Ingredents', 'sumi'),
		'singular_name'         => _x('Ingredent', 'Ingredent', 'sumi'),
		'search_items'          => __('Search Ingredents', 'sumi'),
		'popular_items'         => __('Popular Ingredents', 'sumi'),
		'all_items'             => __('All Ingredents', 'sumi'),
		'parent_item'           => __('Parent Ingredent', 'sumi'),
		'parent_item_colon'     => __('Parent Ingredent', 'sumi'),
		'edit_item'             => __('Edit Ingredent', 'sumi'),
		'update_item'           => __('Update Ingredent', 'sumi'),
		'add_new_item'          => __('Add New Ingredent', 'sumi'),
		'new_item_name'         => __('New Ingredent Name', 'sumi'),
		'add_or_remove_items'   => __('Add or remove Ingredents', 'sumi'),
		'choose_from_most_used' => __('Choose from most used Ingredents', 'sumi'),
		'menu_name'             => __('Ingredent', 'sumi'),
	);
	$args = array(
		'labels'            => $labels,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_admin_column' => false,
		'hierarchical'      => false,
		'show_tagcloud'     => true,
		'show_ui'           => true,
		'query_var'         => true,
		'rewrite'           => true,
		'query_var'         => true,
		'capabilities'      => array(),
	);
	register_taxonomy('menuingredent', array('sumi_menu'), $args);
}
add_action('init', 'menuingredent');

add_action('add_meta_boxes', 'textbox_callback_function');
function textbox_callback_function()
{
	add_meta_box('textbox_id', 'Food Price', 'textbox_callback', 'sumi_menu', 'advanced', 'high');
}

function textbox_callback($post)
{
	wp_nonce_field('textbox_meta_save_funct', 'wp_meta_info_nonce');
	$foodvalue = get_post_meta($post->ID, '_foodvalue', true);
?>
	<label for="foodprice">Price</label>
	<input type="text" name="foodvalue" id="foodvalue" value="<?php echo $foodvalue ?>">

<?php
}

function textbox_meta_save_funct($post_id)
{
	if (!isset($_POST['wp_meta_info_nonce'])) {
		return $post_id;
	}
	if (!wp_verify_nonce($_POST['wp_meta_info_nonce'], 'textbox_meta_save_funct')) {
		return $post_id;
	}
	if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
		return $post_id;
	}

	//Check User Permission

	if('sumi_menu' == $_POST['post_type']){
		if(!current_user_can('edit_page', $post_id)){
			return $post_id;
		}
	}else{
		if(!current_user_can('edit_post',$post_id)){
			return $post_id;
		}
	}
	$foodvalue = esc_sql(sanitize_text_field($_POST['_foodvalue']));
	$foodvalue = $_POST['foodvalue'];

	update_post_meta($post_id, '_foodvalue',$foodvalue);
}
add_action('save_post','textbox_meta_save_funct');

//////////////////////////////////////Shop///////////////////////////////////////////////////////////////////////////

function prefix_shop_add()
{
	$labels = array(
		'name'  			 => __('Shops', 'sumi'),
		'singular_name' 	 => __('Shop', 'sumi'),
		'add_new'			 => _x('Add Shop', 'sumi'),
		'add_new_item'		 => __('Add New Shop', 'sumi'),
		'edit_item'			 => __('Edit Shop', 'sumi'),
		'new_item'			 => __('New Shop', 'sumi'),
		'view_item'			 => __('View Shop', 'sumi'),
		'search_items'		 => __('Search Shops', 'sumi'),
		'not_found'			 => __('No Shops found', 'sumi'),
		'not_found_in_trash' => __('No Shops found in Trash', 'sumi'),
		'parent_item_colon'  => __('Parent Shop', 'sumi'),
		'menu_name'			 => __('Shops', 'sumi'),
	);
	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-cart',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			'author',
			'thumbnail',
			'excerpt',
			// 'custom-fields',
			'trackbacks',
			'comments',
			'revisions',
			'page-attributes',
			'post-formats',
		),
	);

	register_post_type('sumi_shop', $args);
}
add_action('init', 'prefix_shop_add');

//////////////////////////////////////Blog///////////////////////////////////////////////////////////////////////////

function prefix_blog_add()
{
	$labels = array(
		'name'  			 => __('Blogs', 'sumi'),
		'singular_name' 	 => __('Blog', 'sumi'),
		'add_new'			 => _x('Add Blog', 'sumi'),
		'add_new_item'		 => __('Add New Blog', 'sumi'),
		'edit_item'			 => __('Edit Blog', 'sumi'),
		'new_item'			 => __('New Blog', 'sumi'),
		'view_item'			 => __('View Blog', 'sumi'),
		'search_items'		 => __('Search Blogs', 'sumi'),
		'not_found'			 => __('No Blogs found', 'sumi'),
		'not_found_in_trash' => __('No Blogs found in Trash', 'sumi'),
		'parent_item_colon'  => __('Parent Blog', 'sumi'),
		'menu_name'			 => __('Blogs', 'sumi'),
	);
	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-welcome-write-blog',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			'author',
			'thumbnail',
			'excerpt',
			// 'custom-fields',
			'trackbacks',
			'comments',
			'revisions',
			'page-attributes',
			'post-formats',
		),
	);

	register_post_type('sumi_blog', $args);
}
add_action('init', 'prefix_blog_add');

/**
 * Create a taxonomy
 *
 * @uses  Inserts new taxonomy object into the list
 * @uses  Adds query vars
 *
 * @param string  Name of taxonomy object
 * @param array|string  Name of the object type for the taxonomy object.
 * @param array|string  Taxonomy arguments
 * @return null|WP_Error WP_Error if errors, otherwise null.
 */

function blogcategory()
{
	$labels = array(
		'name'                  => _x('Categories', 'Categories', 'sumi'),
		'singular_name'         => _x('Category', 'Category', 'sumi'),
		'search_items'          => __('Search Categories', 'sumi'),
		'popular_items'         => __('Popular Categories', 'sumi'),
		'all_items'             => __('All Categories', 'sumi'),
		'parent_item'           => __('Parent Category', 'sumi'),
		'parent_item_colon'     => __('Parent Category', 'sumi'),
		'edit_item'             => __('Edit Category', 'sumi'),
		'update_item'           => __('Update Category', 'sumi'),
		'add_new_item'          => __('Add New Category', 'sumi'),
		'new_item_name'         => __('New Category Name', 'sumi'),
		'add_or_remove_items'   => __('Add or remove Categories', 'sumi'),
		'choose_from_most_used' => __('Choose from most used Categories', 'sumi'),
		'menu_name'             => __('Category', 'sumi'),
	);
	$args = array(
		'labels'            => $labels,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_admin_column' => false,
		'hierarchical'      => true,
		'show_tagcloud'     => true,
		'show_ui'           => true,
		'query_var'         => true,
		'rewrite'           => true,
		'query_var'         => true,
		'capabilities'      => array(),
	);
	register_taxonomy('blogcategory', array('sumi_blog'), $args);
}
add_action('init', 'blogcategory');

/**
 * Create a taxonomy
 *
 * @uses  Inserts new taxonomy object into the list
 * @uses  Adds query vars
 *
 * @param string  Name of taxonomy object
 * @param array|string  Name of the object type for the taxonomy object.
 * @param array|string  Taxonomy arguments
 * @return null|WP_Error WP_Error if errors, otherwise null.
 */

function blogtag()
{
	$labels = array(
		'name'                  => _x('Tags', 'Tags', 'sumi'),
		'singular_name'         => _x('Tag', 'Tag', 'sumi'),
		'search_items'          => __('Search Tags', 'sumi'),
		'popular_items'         => __('Popular Tags', 'sumi'),
		'all_items'             => __('All Tags', 'sumi'),
		'parent_item'           => __('Parent Tag', 'sumi'),
		'parent_item_colon'     => __('Parent Tag', 'sumi'),
		'edit_item'             => __('Edit Tag', 'sumi'),
		'update_item'           => __('Update Tag', 'sumi'),
		'add_new_item'          => __('Add New Tag', 'sumi'),
		'new_item_name'         => __('New Tag Name', 'sumi'),
		'add_or_remove_items'   => __('Add or remove Tags', 'sumi'),
		'choose_from_most_used' => __('Choose from most used Tags', 'sumi'),
		'menu_name'             => __('Tag', 'sumi'),
	);
	$args = array(
		'labels'            => $labels,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_admin_column' => false,
		'hierarchical'      => false,
		'show_tagcloud'     => true,
		'show_ui'           => true,
		'query_var'         => true,
		'rewrite'           => true,
		'query_var'         => true,
		'capabilities'      => array(),
	);
	register_taxonomy('blogtag', array('sumi_blog'), $args);
}
add_action('init', 'blogtag');


//////////////////////////////////////Gallery///////////////////////////////////////////////////////////////////////////////////////////////////////

function prefix_gallery_add()
{
	$labels = array(
		'name'  			 => __('Galleries', 'sumi'),
		'singular_name' 	 => __('Gallery', 'sumi'),
		'add_new'			 => _x('Add Gallery', 'sumi'),
		'add_new_item'		 => __('Add New Gallery', 'sumi'),
		'edit_item'			 => __('Edit Gallery', 'sumi'),
		'new_item'			 => __('New Gallery', 'sumi'),
		'view_item'			 => __('View Gallery', 'sumi'),
		'search_items'		 => __('Search Galleries', 'sumi'),
		'not_found'			 => __('No Galleries found', 'sumi'),
		'not_found_in_trash' => __('No Galleries found in Trash', 'sumi'),
		'parent_item_colon'  => __('Parent Gallery', 'sumi'),
		'menu_name'			 => __('Galleries', 'sumi'),
	);
	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-format-image',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			// 'editor',
			// 'author',
			'thumbnail',
			// 'excerpt',
			// 'custom-fields',
			// 'trackbacks',
			// 'comments',
			// 'revisions',
			// 'page-attributes',
			'post-formats',
		),
	);

	register_post_type('sumi_gallery', $args);
}
add_action('init', 'prefix_gallery_add');

/**
 * Create a taxonomy
 *
 * @uses  Inserts new taxonomy object into the list
 * @uses  Adds query vars
 *
 * @param string  Name of taxonomy object
 * @param array|string  Name of the object type for the taxonomy object.
 * @param array|string  Taxonomy arguments
 * @return null|WP_Error WP_Error if errors, otherwise null.
 */

function category()
{
	$labels = array(
		'name'                  => _x('Categories', 'Categories', 'sumi'),
		'singular_name'         => _x('Category', 'Category', 'sumi'),
		'search_items'          => __('Search Categories', 'sumi'),
		'popular_items'         => __('Popular Categories', 'sumi'),
		'all_items'             => __('All Categories', 'sumi'),
		'parent_item'           => __('Parent Category', 'sumi'),
		'parent_item_colon'     => __('Parent Category', 'sumi'),
		'edit_item'             => __('Edit Category', 'sumi'),
		'update_item'           => __('Update Category', 'sumi'),
		'add_new_item'          => __('Add New Category', 'sumi'),
		'new_item_name'         => __('New Category Name', 'sumi'),
		'add_or_remove_items'   => __('Add or remove Categories', 'sumi'),
		'choose_from_most_used' => __('Choose from most used Categories', 'sumi'),
		'menu_name'             => __('Category', 'sumi'),
	);
	$args = array(
		'labels'            => $labels,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_admin_column' => false,
		'hierarchical'      => true,
		'show_tagcloud'     => true,
		'show_ui'           => true,
		'query_var'         => true,
		'rewrite'           => true,
		'query_var'         => true,
		'capabilities'      => array(),
	);
	register_taxonomy('Categories', array('sumi_gallery'), $args);
}
add_action('init', 'Category');


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sumi_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'sumi'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'sumi'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'sumi_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function sumi_scripts()
{
	wp_enqueue_style('sumi-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('sumi-style', 'rtl', 'replace');

	wp_enqueue_script('sumi-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'sumi_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}
