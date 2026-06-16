<?php
/**
 * Colagenorex Theme Functions and Definitions
 *
 * @package Colagenorex
 */

// Evitar el acceso directo al archivo por seguridad.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Registrar y encolar estilos y scripts del tema.
 */
function colagenorex_enqueue_assets() {
    // 1. Encolar Fuentes de Google: Poppins para encabezados y Inter para texto del cuerpo.
    wp_enqueue_style(
        'colagenorex-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@600;700&display=swap',
        array(),
        null
    );

    // 2. Encolar la hoja de estilos principal (style.css).
    wp_enqueue_style(
        'colagenorex-main-style',
        get_stylesheet_uri(),
        array('colagenorex-google-fonts'),
        filemtime( get_template_directory() . '/style.css' )
    );

    // 3. Encolar el script interactivo principal del tema (app.js).
    wp_enqueue_script(
        'colagenorex-app-script',
        get_template_directory_uri() . '/assets/js/app.js',
        array(), // Sin dependencias externas como jQuery para mayor velocidad de carga.
        filemtime( get_template_directory() . '/assets/js/app.js' ),
        true     // Cargar en el footer para no bloquear el renderizado del HTML.
    );
}
add_action( 'wp_enqueue_scripts', 'colagenorex_enqueue_assets' );

/**
 * Configuración de soporte básico del tema.
 */
function colagenorex_theme_setup() {
    // Agregar soporte para etiquetas de título dinámicas en la cabecera (<title>).
    add_theme_support( 'title-tag' );

    // Agregar soporte para imágenes destacadas en entradas o páginas.
    add_theme_support( 'post-thumbnails' );

    // Registrar menú de navegación en caso de que decidan usarlo dinámicamente en el futuro.
    register_nav_menus( array(
        'header-menu' => __( 'Menú de Cabecera', 'colagenorex' ),
    ) );
}
add_action( 'after_setup_theme', 'colagenorex_theme_setup' );
