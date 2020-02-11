<?php
/*
* Register nav menu
*/
if (function_exists('register_nav_menus')) {
    $menu_arr = array(
        'top_menu' => 'Топ Меню',
        'footer_menu' => 'Футер Меню',
    );
    register_nav_menus($menu_arr);
}


/*
* Add Feature Imagee
**/
add_theme_support('post-thumbnails');
//add_image_size('cert-img', 260, 366, false);
add_image_size('partners-img', 225, '', false);
add_image_size('awards-img', 250, 350, true);
add_image_size('review-img', 210, 60, false);
add_image_size('portfolio-img', 400, 400, true);
add_image_size('service-home-img', 368, 389, true);


/**
 * Enqueue scripts
 */
function th_scripts()
{
    wp_enqueue_style('bootstrap.min', get_theme_file_uri('/assets/css/bootstrap.min.css'), array(), '');
    // Theme stylesheet.
    wp_enqueue_style('th-style', get_stylesheet_uri(), array(), '1');
    wp_enqueue_style('main-style', get_theme_file_uri('/assets/css/style.css'), array(), '1');
//
    wp_enqueue_script('lazy', get_theme_file_uri('/assets/js/jquery.lazy.min.js'), array(), '', true);
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_theme_file_uri('/assets/js/jquery-3.2.1.min.js'), array(), '');
//    wp_enqueue_script('jquery-migrate.min', get_theme_file_uri('/assets/js/jquery.matchHeight.js'), array(), '', true);
    wp_enqueue_script('slick.min', get_theme_file_uri('/assets/js/slick.min.js'), array(), '', true);
//
    wp_enqueue_script('jquery.inputmask', get_theme_file_uri('/assets/js/jquery.inputmask.js'), array(), '', true);
////
    wp_enqueue_script('lightbox.min.js', get_theme_file_uri('/assets/js/lightbox.js'), array(), '', true);
//
//
    if (is_page_template('page-contacts.php') || is_front_page()) {
        wp_enqueue_script('yandex-maps', 'https://api-maps.yandex.ru/2.1/?lang=ru_RU', array(), '1');
    }

    wp_enqueue_script('default', get_theme_file_uri('/assets/js/default.js'), array(), '1', true);
}

add_action('wp_enqueue_scripts', 'th_scripts');

function prefix_add_footer_styles()
{
//    wp_enqueue_style('aos', get_theme_file_uri('/assets/css/aos.css'), array(), '');
    wp_enqueue_style('normalize', get_theme_file_uri('/assets/css/normalize.css'), array(), '');
    wp_enqueue_style('lightbox.min.css', get_theme_file_uri('/assets/css/lightbox.min.css'), array(), '');
    wp_enqueue_style('slick', get_theme_file_uri('/assets/css/slick.css'), array(), '');
    wp_enqueue_style('slick-theme', get_theme_file_uri('/assets/css/slick-theme.css'), array(), '');

//    wp_enqueue_style('montserrat', get_theme_file_uri('/assets/fonts/montserrat.css'), array(), '1');
//    wp_enqueue_style('main-style2', get_theme_file_uri('/assets/css/critical.css'), array(), '1');

}

;
add_action('get_footer', 'prefix_add_footer_styles');


/*
*  Register Post Type  Home slider
*/
add_action('init', 'post_type_partners');

function post_type_partners()
{
    $labels = array(
        'name' => 'Партнеры',
        'singular_name' => 'Партнеры',
        'all_items' => 'Партнеры',
        'menu_name' => 'Партнеры' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => "partners",
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );
    register_post_type('partners', $args);
}


/*
*  Register Post Type  Awards
*/
add_action('init', 'post_type_awards');

function post_type_awards()
{
    $labels = array(
        'name' => 'Награды',
        'singular_name' => 'Награды',
        'all_items' => 'Награды',
        'menu_name' => 'Награды' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => "awards",
        'supports' => array(
            'title',
            'thumbnail'
        )
    );
    register_post_type('awards', $args);
}


/*
*  Register Post Type  Review
*/
add_action('init', 'post_type_review');

function post_type_review()
{
    $labels = array(
        'name' => 'Отзывы',
        'singular_name' => 'Отзывы',
        'all_items' => 'Отзывы',
        'menu_name' => 'Отзывы' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => "review",
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );
    register_post_type('review', $args);
}

/*
*  Register Post Type  Portfolio
*/
add_action('init', 'post_type_portfolio');

function post_type_portfolio()
{
    $labels = array(
        'name' => 'Наши работы',
        'singular_name' => 'Наши работы',
        'all_items' => 'Наши работы',
        'menu_name' => 'Наши работы' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => "portfolio",
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );
    register_post_type('portfolio', $args);
}

/*
*  Register Post Type  Services
*/
add_action('init', 'post_type_services');

function post_type_services()
{
    $labels = array(
        'name' => 'Услуги',
        'singular_name' => 'Услуги',
        'all_items' => 'Услуги',
        'menu_name' => 'Услуги' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'query_var' => "services",
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );
    register_post_type('services', $args);
}


/*
*  Register Post Type Settings
*/
if (function_exists('acf_add_options_page')) {

    // Let's add our Options Page
    acf_add_options_page(array(
        'page_title' => 'Настройки Темы',
        'menu_title' => 'Настройки Темы',
        'menu_slug' => 'theme-options',
        'capability' => 'edit_posts'
    ));


}

