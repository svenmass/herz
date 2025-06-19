<?php
if (!function_exists('herz_apotheke_siegen_setup')) :

    function herz_apotheke_siegen_setup()
    {

        /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
        /* Load Text Domain Begin */
        load_theme_textdomain('herz_apotheke_siegen', get_template_directory() . '/languages');
        /* Load Text Domain End */

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
     * Let WordPress manage the document title.
     */
        add_theme_support('title-tag');

        /*
     * Enable support for Post Thumbnails on posts and pages.
     */

        if (function_exists('add_theme_support')) {
            add_theme_support('post-thumbnails');
            set_post_thumbnail_size(365, 370, true); // default Post Thumbnail dimensions (cropped)

            // additional image sizes
            // delete the next line if you do not need additional image sizes
            add_image_size('large', 500, 500, true); //300 pixels wide (and unlimited height)
        }

        /**
         * Filter the except length to 20 words.
         *
         * @param int $length Excerpt length.
         * @return int (Maybe) modified excerpt length.
         */
        function wpdocs_custom_excerpt_length($length)
        {
            return 20;
        }
        add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);


        // Add menus.
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'herz_apotheke_siegen'),
            'social'  => __('Social Links Menu', 'herz_apotheke_siegen'),
        ));

        /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
        add_theme_support('html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ));

        /*
     * Enable support for Post Formats.
     */
        add_theme_support('post-formats', array(
            'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
        ));
    }
endif; // herz_apotheke_siegen_setup

add_action('after_setup_theme', 'herz_apotheke_siegen_setup');


if (!function_exists('herz_apotheke_siegen_init')) :

    function herz_apotheke_siegen_init()
    {

        // Use categories and tags with attachments
        register_taxonomy_for_object_type('category', 'attachment');
        register_taxonomy_for_object_type('post_tag', 'attachment');

        /*
     * Register custom post types. You can also move this code to a plugin.
     */
        /* Custom Post Types Begin */

        /* Custom Post Types End */

        /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
        /* Taxonomies Begin */

        /* Taxonomies End */
    }
endif; // herz_apotheke_siegen_setup

add_action('init', 'herz_apotheke_siegen_init');


if (!function_exists('herz_apotheke_siegen_widgets_init')) :

    function herz_apotheke_siegen_widgets_init()
    {

        /*
     * Register widget areas.
     */
        /* Register Sidebars Begin */

        /* Register Sidebars End */
    }
    add_action('widgets_init', 'herz_apotheke_siegen_widgets_init');
endif; // herz_apotheke_siegen_widgets_init



if (!function_exists('herz_apotheke_siegen_customize_register')) :

    function herz_apotheke_siegen_customize_register($wp_customize)
    {
        // Do stuff with $wp_customize, the WP_Customize_Manager object.

        /* Customizer Controls Begin */

        /* Customizer Controls End */
    }
    add_action('customize_register', 'herz_apotheke_siegen_customize_register');
endif; // herz_apotheke_siegen_customize_register


if (!function_exists('herz_apotheke_siegen_enqueue_scripts')) :
    function herz_apotheke_siegen_enqueue_scripts()
    {

        /* Enqueue Scripts Begin */

//         wp_deregister_script('jquery');
//         wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', false, null, true);

        wp_deregister_script('popper');
        wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.js', false, null, true);

        wp_deregister_script('bootstrap');
        wp_enqueue_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', false, null, true);

        wp_deregister_script('has');
        wp_enqueue_script('has', get_template_directory_uri() . '/assets/js/has.js', array('jquery'), null, true);

        wp_deregister_script('moment');
        wp_enqueue_script('moment', get_template_directory_uri() . '/assets/js/moment.js', false, null, true);

        wp_deregister_script('calendar');
        wp_enqueue_script('tempusdominus', get_template_directory_uri() . '/assets/js/tempusdominus-bootstrap-4.min.js', false, null, true);

        /* Enqueue Scripts End */

        /* Enqueue Styles Begin */

        wp_deregister_style('bootstrap');
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css', false, null, 'all');

        wp_deregister_style('calendar style');
        wp_enqueue_style('tempusdominus', get_template_directory_uri() . '/assets/css/tempusdominus-bootstrap-4.min.css', false, null, 'all');

        wp_deregister_style('style');
        wp_enqueue_style('style', get_bloginfo('stylesheet_url'), false, null, 'all');

        wp_deregister_style('editor style');
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/editor_only_block.css', false, null, 'all');


        /* Enqueue Styles End */
    }
    add_action('wp_enqueue_scripts', 'herz_apotheke_siegen_enqueue_scripts');
endif;

add_action('wp_enqueue_scripts', 'enqueue_load_fa');
function enqueue_load_fa()
{
    wp_enqueue_style('load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
}



function load_google_fonts()
{
    wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Titillium+Web:300&display=swap');
    wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700,800&display=swap');
    wp_enqueue_style('googleFonts');
}
add_action('wp_print_styles', 'load_google_fonts');

function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_filter('wp_check_filetype_and_ext', 'my_svgs_disable_real_mime_check', 10, 4);
function my_svgs_disable_real_mime_check($data, $file, $filename, $mimes)
{
    $wp_filetype = wp_check_filetype($filename, $mimes);
    $ext = $wp_filetype['ext'];
    $type = $wp_filetype['type'];
    $proper_filename = $data['proper_filename'];
    return compact('ext', 'type', 'proper_filename');
}

function register_acf_block_types()
{

    // register block.
    acf_register_block_type(array(
        'name'              => 'head_box',
        'title'             => __('Head Box'),
        'description'       => __('Startseite 2 Boxen im Kopfbereich'),
        'render_template'   => 'template-parts/blocks/head-box/head-box.php',
        'category'          => 'formatting',
        'icon'              => 'admin-tools',
        'keywords'          => array('Herz – Homepage Header', 'Herzapotheke'),
        // 'enqueue_style'     => get_stylesheet_directory_uri() . '/template-parts/blocks/css/template_parts.css',
    ));

    // register block.
    acf_register_block_type(array(
        'name'              => 'start-service',
        'title'             => __('Ihr Serviceangebot'),
        'description'       => __('Startseite Servicebereich'),
        'render_template'   => 'template-parts/blocks/start-service/start-service.php',
        'category'          => 'formatting',
        'icon'              => 'admin-tools',
        'keywords'          => array('Start Service', 'Herzapotheke'),
        // 'enqueue_style'     => get_stylesheet_directory_uri() . '/template-parts/blocks/css/template_parts.css',
    ));

    // register block.
    acf_register_block_type(array(
        'name'              => 'teaserelement',
        'title'             => __('Teaserelement'),
        'description'       => __('Das ist ein Teaserelement'),
        'render_template'   => 'template-parts/blocks/teaserelement/teaserelement.php',
        'category'          => 'formatting',
        'icon'              => 'admin-tools',
        'keywords'          => array('Teaserelement', 'Herzapotheke'),
        // 'enqueue_style'     => get_stylesheet_directory_uri() . '/template-parts/blocks/css/template_parts.css',
    ));

    // register block.
    acf_register_block_type(array(
        'name'              => 'head_box_subsite',
        'title'             => __('Head Box Subsite'),
        'description'       => __('Unterseite 2 Boxen im Kopfbereich'),
        'render_template'   => 'template-parts/blocks/head_box_subsite/head_box_subsite.php',
        'category'          => 'formatting',
        'icon'              => 'admin-tools',
        'keywords'          => array('Head Box Subsite', 'Herzapotheke'),
        // 'enqueue_style'     => get_stylesheet_directory_uri() . '/template-parts/blocks/css/template_parts.css',
    ));

    // register block.
    acf_register_block_type(array(
        'name'              => 'head_box_subsite_2',
        'title'             => __('Head Box Subsite 2'),
        'description'       => __('Unterseite 2 Boxen im Kopfbereich'),
        'render_template'   => 'template-parts/blocks/head_box_subsite_2/head_box_subsite_2.php',
        'category'          => 'formatting',
        'icon'              => 'admin-tools',
        'keywords'          => array('Head Box Subsite', 'Herzapotheke', 'Head Box Subsite 2'),
        // 'enqueue_style'     => get_stylesheet_directory_uri() . '/template-parts/blocks/css/template_parts.css',
    ));

    // register block.
    acf_register_block_type(array(
        'name'              => 'vorteile',
        'title'             => __('Vorteile'),
        'description'       => __('Boxen Vorteile'),
        'render_template'   => 'template-parts/blocks/vorteile/vorteile.php',
        'category'          => 'formatting',
        'icon'              => 'admin-tools',
        'keywords'          => array('Vorteile', 'Herzapotheke'),
        // 'enqueue_style'     => get_stylesheet_directory_uri() . '/template-parts/blocks/css/template_parts.css',
    ));

    // register block.
    acf_register_block_type(array(
        'name'              => 'head_box_subsite_video',
        'title'             => __('Head Box Subsite Video'),
        'description'       => __('Unterseite 2 Boxen im Kopfbereich'),
        'render_template'   => 'template-parts/blocks/head_box_subsite_video/head_box_subsite_video.php',
        'category'          => 'formatting',
        'icon'              => 'admin-tools',
        'keywords'          => array('Head Box Subsite Video', 'Herzapotheke'),
        // 'enqueue_style'     => get_stylesheet_directory_uri() . '/template-parts/blocks/css/template_parts.css',
    ));

    // register block.
    acf_register_block_type(array(
        'name'              => 'teaserelement_2',
        'title'             => __('Teaserelement 2'),
        'description'       => __('Das ist ein Teaserelement 2'),
        'render_template'   => 'template-parts/blocks/teaserelement_2/teaserelement_2.php',
        'category'          => 'formatting',
        'icon'              => 'admin-tools',
        'keywords'          => array('Teaserelement', 'Herzapotheke'),
        // 'enqueue_style'     => get_stylesheet_directory_uri() . '/template-parts/blocks/css/template_parts.css',
    ));

    // register block.
    acf_register_block_type(array(
        'name'              => 'about_us',
        'title'             => __('Über uns'),
        'description'       => __('Über die Apotheke'),
        'render_template'   => 'template-parts/blocks/about_us/about_us.php',
        'category'          => 'formatting',
        'icon'              => 'admin-tools',
        'keywords'          => array('Über uns', 'About us', 'Herzapotheke'),
        // 'enqueue_style'     => get_stylesheet_directory_uri() . '/template-parts/blocks/css/template_parts.css',
    ));

    // register block.
    acf_register_block_type(array(
        'name'              => 'double_image',
        'title'             => __('Doppelbild'),
        'description'       => __('Zwei gleichgroße Bilder nebeneinander'),
        'render_template'   => 'template-parts/blocks/double_image/double_image.php',
        'category'          => 'formatting',
        'icon'              => 'admin-tools',
        'keywords'          => array('Doppel Bild', 'double image', 'Herzapotheke'),
        // 'enqueue_style'     => get_stylesheet_directory_uri() . '/template-parts/blocks/css/template_parts.css',
    ));

    // register block.
    acf_register_block_type(array(
        'name'              => 'accordion',
        'title'             => __('Akkordion'),
        'description'       => __('Hier können die Akkordion Elemente angelegt werden'),
        'render_template'   => 'template-parts/blocks/accordion/accordion.php',
        'category'          => 'formatting',
        'icon'              => 'admin-tools',
        'keywords'          => array('Akkordion', 'accordion', 'Herzapotheke'),
        // 'enqueue_style'     => get_stylesheet_directory_uri() . '/template-parts/blocks/css/template_parts.css',
    ));

    // register block.
    acf_register_block_type(array(
        'name'              => 'small_header',
        'title'             => __('Schmaler Header Unterseiten'),
        'description'       => __('Ein schmaler Header für die Unterseiten'),
        'render_template'   => 'template-parts/blocks/small_header/small_header.php',
        'category'          => 'formatting',
        'icon'              => 'admin-tools',
        'keywords'          => array('Schmaler Header', 'small header', 'Herzapotheke'),
        // 'enqueue_style'     => get_stylesheet_directory_uri() . '/template-parts/blocks/css/template_parts.css',
    ));

    // register block.
    acf_register_block_type(array(
        'name'              => 'teamelement',
        'title'             => __('Teamelement'),
        'description'       => __('Der Team Block'),
        'render_template'   => 'template-parts/blocks/teamelement/teamelement.php',
        'category'          => 'formatting',
        'icon'              => 'admin-users',
        'keywords'          => array('Teamelement', 'Herzapotheke'),
        // 'enqueue_style'     => get_stylesheet_directory_uri() . '/template-parts/blocks/css/template_parts.css',
    ));

    // register block.
    acf_register_block_type(array(
        'name'              => 'form',
        'title'             => __('Terminformular'),
        'description'       => __('Der Formular Block'),
        'render_template'   => 'template-parts/blocks/form/form.php',
        'category'          => 'formatting',
        'icon'              => 'admin-users',
        'keywords'          => array('form', 'Herzapotheke'),
        // 'enqueue_style'     => get_stylesheet_directory_uri() . '/template-parts/blocks/css/template_parts.css',
    ));

    // register block.
    acf_register_block_type(array(
        'name'              => 'trustleiste',
        'title'             => __('Trustleiste'),
        'description'       => __('Die Logoleiste einzeln'),
        'render_template'   => 'template-parts/blocks/trustleiste/trustleiste.php',
        'category'          => 'formatting',
        'icon'              => 'admin-users',
        'keywords'          => array('trustleiste', 'Herzapotheke'),
        // 'enqueue_style'     => get_stylesheet_directory_uri() . '/template-parts/blocks/css/template_parts.css',
    ));
}

// Check if function exists and hook into setup.
if (function_exists('acf_register_block_type')) {
    add_action('acf/init', 'register_acf_block_types');
}


// register ACF Options Page

function register_acf_options_pages()
{

    // Check function exists.
    if (!function_exists('acf_add_options_page'))
        return;

    // register options page.
    $option_page = acf_add_options_page(array(
        'page_title'    => __('Theme General Settings'),
        'menu_title'    => __('Theme Einstellungen'),
        'menu_slug'     => 'theme-general-settings',
        'icon_url'      => 'dashicons-heart',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    // register menue page
    acf_add_options_sub_page(array(
        'page_title'     => 'Theme Menu Settings',
        'menu_title'    => 'Menue',
        'parent_slug'    => 'theme-general-settings',
    ));

    // register footer page
    acf_add_options_sub_page(array(
        'page_title'     => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'    => 'theme-general-settings',
    ));

    // register 404 page
    acf_add_options_sub_page(array(
        'page_title'     => 'Theme 404 Settings',
        'menu_title'    => '404 Page',
        'parent_slug'    => 'theme-general-settings',
    ));
}

// Hook into acf initialization.
add_action('acf/init', 'register_acf_options_pages');

function pgwp_sanitize_placeholder($input)
{
    return $input;
}
/*
 * Resource files included
 */
/* Include Resources Begin */
/* Include Resources Begin */
require_once "inc/bootstrap/wp_bootstrap4_navwalker.php";

    /* Include Resources End */
