<?php

function bloggerx_setup()
{

	add_theme_support('widgets');
	add_theme_support('post-thumbnails');
	add_theme_support('automatic-feed-links');
	add_theme_support('custom-header');
	add_theme_support('the-post-thumbnails');
	add_theme_support('custom-background');
	add_theme_support('title-tag');
	add_editor_style();
	add_theme_support('custom-logo', array(
		'height'		=> 250,
		'width'			=> 250,
		'flex-width'	=> true,
		'flex-height'	=> true,
	));


	if (!isset($content_width)) $content_width = 1349;

	add_image_size('company_image', 700, 467, true);
	add_image_size('company_cat_image', 1920, 480, true);


	register_nav_menus(
		array(
			'top-menu'		=> __('Top menu', 'bloggerx')

		)
	);
}

add_action('after_setup_theme', 'bloggerx_setup');





function bloggerx_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Right sidebar', 'bloggerx'),
			'id'            => 'right_sidebar',
			'description'   => esc_html__('Add right sidebar widgets here.', 'bloggerx'),
			'before_widget' => '<div class="widget" style="margin:20px 0;">',
			'after_widget'  => '</div>',
			'before_title'  => '  <h3 class="sidebar-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action('widgets_init', 'bloggerx_widgets_init');


/**
 * Enqueue scripts and styles.
 */
function bloggerx_scripts()
{
	wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', null, true, 'all');
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', null, true, 'all');
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/main-style.css', null, true, 'all');
	wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', null, true, 'all');
	wp_enqueue_style('colors', get_template_directory_uri() . '/assets/css/colors.css', null, true, 'all');
	wp_enqueue_style('tech', get_template_directory_uri() . '/assets/css/version/tech.css', null, true, 'all');
	wp_enqueue_style('main', get_stylesheet_uri());


	wp_enqueue_script('tether', get_template_directory_uri() . '/assets/js/tether.min.js', array('jquery'), true, true);
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), true, true);
	wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), true, true);


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'bloggerx_scripts');


function bloggerx_pagination()
{
	global $wp_query;
	$pagination = paginate_links(array(
		'current'		=> max(1, get_query_var('paged')),
		'prev_text'		=> 'previous',
		'next_text'		=> 'Next',
		'total'			=> $wp_query->max_num_pages,
		'type'			=> 'list'
	));

	$pagination = str_replace('page-numbers', 'pagination justify-content-start', $pagination);
	$pagination = str_replace('span', 'a', $pagination);
	echo wp_kses_post($pagination);
}


/**
 * Implement the nav-walker file.
 */
require_once get_template_directory() . '/bloggerx-nav-walker.php';
