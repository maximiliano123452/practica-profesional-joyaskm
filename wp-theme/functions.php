<?php
// ============================================
// JOYAS KM - functions.php
// ============================================

// ---- THEME SUPPORTS ----
function joyaskm_theme_setup() {
    // Títulos dinámicos
    add_theme_support( 'title-tag' );
    // Logo personalizado
    add_theme_support( 'custom-logo', array(
        'height'      => 59,
        'width'       => 180,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    // Imágenes destacadas
    add_theme_support( 'post-thumbnails' );
    // HTML5
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ));
    // WooCommerce
    add_theme_support( 'woocommerce' );

    // ---- MENÚ ----
    register_nav_menus( array(
        'primary' => __( 'Menú Principal', 'joyaskm' ),
    ));
}
add_action( 'after_setup_theme', 'joyaskm_theme_setup' );

// ---- ENQUEUE ASSETS ----
function joyaskm_enqueue_assets() {
    $uri     = get_template_directory_uri();
    $version = '1.0.0';

    // CSS
    wp_enqueue_style(
        'joyaskm-reset',
        $uri . '/assets/css/reset.css',
        array(),
        $version
    );
    wp_enqueue_style(
        'joyaskm-style',
        $uri . '/assets/css/style.css',
        array( 'joyaskm-reset' ),
        $version
    );

    // CSS por página
    if ( is_page( 'carrito' ) || is_cart() ) {
        wp_enqueue_style(
            'joyaskm-carrito',
            $uri . '/assets/css/carrito.css',
            array( 'joyaskm-style' ),
            $version
        );
        wp_enqueue_script(
            'joyaskm-carrito-js',
            $uri . '/assets/js/carrito.js',
            array( 'joyaskm-main-js' ),
            $version,
            true
        );
    }

    if ( is_page( 'contacto' ) || is_page( 'contactanos' ) ) {
        wp_enqueue_style(
            'joyaskm-contacto',
            $uri . '/assets/css/contacto.css',
            array( 'joyaskm-style' ),
            $version
        );
        wp_enqueue_script(
            'joyaskm-contacto-js',
            $uri . '/assets/js/contacto.js',
            array( 'joyaskm-main-js' ),
            $version,
            true
        );
    }

    // JS principal
    wp_enqueue_script(
        'joyaskm-main-js',
        $uri . '/assets/js/main.js',
        array(),
        $version,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'joyaskm_enqueue_assets' );

// ---- TÍTULO SEO ----
function joyaskm_wp_title( $title ) {
    return $title . get_bloginfo( 'name' );
}

// ---- SEGURIDAD: ocultar versión WordPress ----
remove_action( 'wp_head', 'wp_generator' );

// ---- TAMAÑO CONTENIDO ----
function joyaskm_content_width() {
    $GLOBALS['content_width'] = 1200;
}
add_action( 'after_setup_theme', 'joyaskm_content_width', 0 );