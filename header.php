<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Cabecera Principal del Sitio (Sticky Header) -->
<header id="site-header" class="site-header">
    <div class="container header-container">
        
        <!-- Logotipo de la Marca -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/logo1.jpeg' ); ?>" alt="Colagenorex Logo" class="header-logo-img">
        </a>

        <!-- Botón del Menú Hamburguesa (Solo Visible en Móvil) -->
        <button id="menu-toggle" class="menu-toggle" aria-label="Abrir Menú de Navegación">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <!-- Navegación Principal -->
        <nav id="main-navigation" class="main-navigation">
            <ul class="nav-menu">
                <li><a href="#beneficios">Beneficios</a></li>
                <li><a href="#formula">Fórmula</a></li>
                <li><a href="#comparativa">Comparativa</a></li>
                <li><a href="#nutricion">Información Nutricional</a></li>
            </ul>
        </nav>

    </div>
</header>
