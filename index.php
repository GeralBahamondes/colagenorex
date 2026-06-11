<?php
/**
 * Plantilla Principal del Tema (Página de Aterrizaje)
 *
 * @package Colagenorex
 */

// Cargar la cabecera del tema.
get_header();
?>

<main id="primary" class="site-main">

    <!-- ==========================================
         1. SECCIÓN HERO
         ========================================== -->
    <section class="hero-section">
        <div class="container hero-grid">
            
            <!-- Contenido del Hero (Lado Izquierdo) -->
            <div class="hero-content">
                <span class="label-sm" style="color: var(--color-secondary);">Suplemento Científico Premium</span>
                <h1 class="display-lg hero-title">
                    Recupera tu movilidad y fortalece tus articulaciones desde el interior
                </h1>
                <p class="body-lg hero-description">
                    Suplemento alimentario con Colágeno Hidrolizado Tipo I y II, Magnesio, Zinc, Vitamina C, Vitamina D y Coenzima Q10.
                </p>
                
                <!-- Lista de Beneficios con Iconos Check SVG -->
                <ul class="hero-benefits-list">
                    <li>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Salud articular
                    </li>
                    <li>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Flexibilidad y movilidad
                    </li>
                    <li>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Recuperación muscular
                    </li>
                    <li>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Piel más firme
                    </li>
                </ul>

                <!-- Botones de Acción -->
                <div class="hero-actions">
                    <a href="#" class="btn btn-primary btn-cta-trigger">Obtener más información</a>
                    <a href="#beneficios" class="btn btn-ghost">Conocer Beneficios</a>
                </div>
            </div>

            <!-- Vista Estática del Empaque (Temporal para v0/Preview) -->
            <div class="hero-image-container">
                <div class="product-static-preview">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/sinfondo.png' ); ?>" alt="Colagenorex Empaque" class="hero-static-image">
                </div>
            </div>

            <!-- RESPALDO: Modelo 3D del Empaque Auto-Rotativo (Desactivado temporalmente para v0)
            <div class="hero-image-container" style="display: none;">
                <div class="product-3d-scene" data-texture="<?php echo esc_url( get_template_directory_uri() . '/images/caja.jpg' ); ?>">
                    <div class="product-3d-box has-texture" style="--bg-texture: url('<?php echo esc_url( get_template_directory_uri() . '/images/caja.jpg' ); ?>');">
                        <div class="face face-front">
                            <div class="brand-stripe">PREMIUM QUALITY</div>
                            <div class="logo-title">COLAGENOREX</div>
                            <div class="product-sub">Fórmula Articular</div>
                            <div class="benefits-capsules">
                                <span class="benefit-pill">✓ Colágeno I & II</span>
                                <span class="benefit-pill">✓ Magnesio + Potasio</span>
                                <span class="benefit-pill">✓ Coenzima Q10</span>
                            </div>
                            <div class="bottom-count">90 CÁPSULAS</div>
                        </div>
                        <div class="face face-back">
                            <h4>INFORMACIÓN NUTRICIONAL</h4>
                            <table class="nutri-table">
                                <thead>
                                    <tr>
                                        <th>Componente</th>
                                        <th>Porción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Colágeno Tipo I</td>
                                        <td>600 mg</td>
                                    </tr>
                                    <tr>
                                        <td>Colágeno Tipo II</td>
                                        <td>500 mg</td>
                                    </tr>
                                    <tr>
                                        <td>Magnesio</td>
                                        <td>200 mg</td>
                                    </tr>
                                    <tr>
                                        <td>Coenzima Q10</td>
                                        <td>50 mg</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="dosage-info">
                                <strong>Dosis:</strong> 3 cápsulas diarias con abundante agua.
                            </div>
                        </div>
                        <div class="face face-left">
                            <div>
                                <h5>INGREDIENTES</h5>
                                <p>Colágeno hidrolizado bovino, citrato de magnesio, gluconato de potasio, coenzima Q10, vitamina C, vitamina D3, zinc quelado.</p>
                            </div>
                            <div class="barcode"></div>
                        </div>
                        <div class="face face-right">
                            <div>
                                <h5>CERTIFICADO</h5>
                                <p>Elaborado bajo estrictas normas de buenas prácticas de manufactura (GMP).</p>
                            </div>
                            <div class="seremi-badge">RES. SEREMI N°96854</div>
                        </div>
                        <div class="face face-top">
                            <div class="cap-seal"></div>
                        </div>
                        <div class="face face-bottom"></div>
                    </div>
                </div>
            </div>
            -->

        </div>
    </section>

    <!-- ==========================================
         2. SECCIÓN: ¿POR QUÉ ELEGIR COLAGENOREX?
         ========================================== -->
    <section class="why-section section-padding">
        <div class="container">
            <h2 class="headline-lg">¿Por qué elegir COLAGENOREX?</h2>
            
            <div class="why-grid">
                
                <!-- Tarjeta 1: Colágeno Tipo I -->
                <div class="card why-card">
                    <div class="why-icon">
                        <!-- Icono de Microscopio/Biología -->
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 18h8M3 22h18M12 22a7 7 0 0 0 7-7h-1a6 6 0 0 1-6 6h-1m2-15V4M12 2a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM12 8a4 4 0 0 0-4 4v2h8v-2a4 4 0 0 0-4-4z"></path></svg>
                    </div>
                    <h3>Colágeno Tipo I</h3>
                    <p class="body-md">Fundamental para la elasticidad de tendones, ligamentos y firmeza cutánea.</p>
                </div>

                <!-- Tarjeta 2: Colágeno Tipo II -->
                <div class="card why-card">
                    <div class="why-icon">
                        <!-- Icono de Expansión/Movimiento articular -->
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 3 21 3 21 9"></polyline><polyline points="9 21 3 21 3 15"></polyline><line x1="21" y1="3" x2="14" y2="10"></line><line x1="3" y1="21" x2="10" y2="14"></line></svg>
                    </div>
                    <h3>Colágeno Tipo II</h3>
                    <p class="body-md">Específico para el cartílago articular, reduce la fricción y el desgaste.</p>
                </div>

                <!-- Tarjeta 3: Magnesio + Potasio -->
                <div class="card why-card">
                    <div class="why-icon">
                        <!-- Icono de Energía/Rayo -->
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                    </div>
                    <h3>Magnesio + Potasio</h3>
                    <p class="body-md">Sinergia vital para la función muscular y prevención de calambres.</p>
                </div>

                <!-- Tarjeta 4: Coenzima Q10 -->
                <div class="card why-card">
                    <div class="why-icon">
                        <!-- Icono de Célula/Escudo Biológico -->
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                    </div>
                    <h3>Coenzima Q10</h3>
                    <p class="body-md">Poderoso antioxidante que protege las células del estrés oxidativo.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- ==========================================
         3. SECCIÓN: BENEFICIOS PRINCIPALES
         ========================================== -->
    <section id="beneficios" class="benefits-section section-padding">
        <div class="container">
            <h2 class="headline-lg">Beneficios Principales</h2>
            
            <div class="benefits-grid">
                
                <!-- Tarjeta 1: Movilidad y Flexibilidad (Imagen de Fondo) -->
                <div class="benefit-card-image bg-mobility card-1">
                    <h3>Movilidad y Flexibilidad</h3>
                    <p>Mejora el rango de movimiento y lubrica tus articulaciones para una vida sin límites.</p>
                </div>

                <!-- Tarjeta 2: Recuperación Post Ejercicio (Imagen de Fondo) -->
                <div class="benefit-card-image bg-recovery card-2">
                    <h3>Recuperación Post Ejercicio</h3>
                    <p>Acelera la reparación de tejidos después de sesiones intensas de entrenamiento.</p>
                </div>

                <!-- Tarjeta 3: Protección Antioxidante (Blanca, Texto) -->
                <div class="benefit-card-clean card-3">
                    <div class="benefit-icon">
                        <!-- Icono de Reloj/Protección -->
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    </div>
                    <h3 class="headline-md" style="color: var(--color-primary);">Protección Antioxidante</h3>
                    <p class="body-md">Combate los radicales libres gracias a la Vitamina C y Coenzima Q10.</p>
                </div>

                <!-- Tarjeta 4: Salud de la Piel (Imagen de Fondo) -->
                <div class="benefit-card-image bg-skin card-4">
                    <h3>Salud de la Piel</h3>
                    <p>Promueve la producción endógena de colágeno para una piel más tersa, hidratada y firme.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- ==========================================
         4. SECCIÓN: FÓRMULA COMPLETA
         ========================================== -->
    <section id="formula" class="formula-section section-padding">
        <div class="container">
            <h2 class="headline-lg">Fórmula Completa</h2>
            <p class="body-lg formula-subtitle">Ciencia aplicada a tu nutrición diaria con ingredientes de alta biodisponibilidad.</p>
            
            <div class="formula-grid">
                
                <!-- Ingrediente 01 -->
                <div class="formula-card">
                    <div class="number">01</div>
                    <h3>Colágeno Tipo I y II</h3>
                    <p class="body-md">Mezcla optimizada para soporte estructural integral.</p>
                </div>

                <!-- Ingrediente 02 -->
                <div class="formula-card">
                    <div class="number">02</div>
                    <h3>Magnesio & Potasio</h3>
                    <p class="body-md">Minerales esenciales para la conducción nerviosa y muscular.</p>
                </div>

                <!-- Ingrediente 03 -->
                <div class="formula-card">
                    <div class="number">03</div>
                    <h3>Vitamina C</h3>
                    <p class="body-md">Cofactor indispensable para la síntesis de colágeno natural.</p>
                </div>

                <!-- Ingrediente 04 -->
                <div class="formula-card">
                    <div class="number">04</div>
                    <h3>Vitamina D</h3>
                    <p class="body-md">Clave para la absorción de calcio y salud ósea.</p>
                </div>

                <!-- Ingrediente 05 -->
                <div class="formula-card">
                    <div class="number">05</div>
                    <h3>Zinc</h3>
                    <p class="body-md">Refuerza el sistema inmunológico y la reparación celular.</p>
                </div>

                <!-- Ingrediente 06 -->
                <div class="formula-card">
                    <div class="number">06</div>
                    <h3>Coenzima Q10</h3>
                    <p class="body-md">Vitalidad celular y protección contra el envejecimiento prematuro.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- ==========================================
         5. SECCIÓN: COMPARATIVA DE MERCADO
         ========================================== -->
    <section id="comparativa" class="comparison-section section-padding">
        <div class="container">
            <h2 class="headline-lg">Comparativa de Mercado</h2>
            
            <div class="table-responsive">
                <table class="comparison-table">
                    <thead>
                        <tr>
                            <th>Características</th>
                            <th>COLAGENOREX</th>
                            <th>Colágeno Genérico</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Fila 1 -->
                        <tr>
                            <td>Colágeno Tipo I & II</td>
                            <td>
                                <!-- Icono Check Verde -->
                                <svg class="check-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </td>
                            <td>
                                <!-- Icono Cruz Roja -->
                                <svg class="cross-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                            </td>
                        </tr>
                        <!-- Fila 2 -->
                        <tr>
                            <td>Magnesio + Potasio</td>
                            <td>
                                <svg class="check-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </td>
                            <td>
                                <svg class="cross-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                            </td>
                        </tr>
                        <!-- Fila 3 -->
                        <tr>
                            <td>Coenzima Q10</td>
                            <td>
                                <svg class="check-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </td>
                            <td>
                                <svg class="cross-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                            </td>
                        </tr>
                        <!-- Fila 4 -->
                        <tr>
                            <td>Vitamina D</td>
                            <td>
                                <svg class="check-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </td>
                            <td>
                                <svg class="cross-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                            </td>
                        </tr>
                        <!-- Fila 5 -->
                        <tr>
                            <td>Bajo en Sodio / Sin Azúcar</td>
                            <td>
                                <svg class="check-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </td>
                            <td style="font-weight: 500;">Variable</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>

    <!-- ==========================================
         6. SECCIÓN: MODO DE USO
         ========================================== -->
    <section class="usage-section section-padding">
        <div class="container">
            <h2 class="headline-lg">Modo de Uso</h2>
            
            <div class="usage-grid">
                
                <!-- Dosis Diaria -->
                <div class="usage-card">
                    <div class="usage-icon">
                        <!-- Icono de Cápsula/Píldora -->
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a5 5 0 0 0-5 5v10a5 5 0 0 0 10 0V7a5 5 0 0 0-5-5z"></path><path d="M7 12h10"></path></svg>
                    </div>
                    <h3>3 cápsulas al día</h3>
                    <p class="body-md">Dosis diaria recomendada para máxima eficacia biológica.</p>
                </div>

                <!-- Concentración -->
                <div class="usage-card">
                    <div class="usage-icon">
                        <!-- Icono de Onda Vital/Corazón -->
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                    </div>
                    <h3>1.100 mg por porción</h3>
                    <p class="body-md">Concentración óptima de colágeno hidrolizado puro.</p>
                </div>

                <!-- Contenido -->
                <div class="usage-card">
                    <div class="usage-icon">
                        <!-- Icono de Calendario -->
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                    </div>
                    <h3>90 Cápsulas</h3>
                    <p class="body-md">Suministro garantizado para 30 días de bienestar continuo.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- ==========================================
         7. BARRA DE CONFIANZA / CERTIFICACIONES
         ========================================== -->
    <div class="trust-bar">
        <div class="container trust-container">
            <div class="trust-badge">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                BPA FREE
            </div>
            <div class="trust-badge">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.67-5.67"></path></svg>
                PET RECICLABLE
            </div>
            <div class="trust-badge">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                SIN AZÚCAR
            </div>
            <div class="trust-badge">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 3-1.912 5.886H3.886L8.93 12.54 7.018 18.42 12 14.772l4.982 3.648-1.912-5.88H20.11l-5.043-3.654L12 3Z"></path></svg>
                BAJO EN SODIO
            </div>
            <div class="trust-badge" style="font-size: 11px;">
                RES. SEREMI N°96854
            </div>
        </div>
    </div>

    <!-- ==========================================
         8. LLAMADO A LA ACCIÓN FINAL (CTA)
         ========================================== -->
    <section class="cta-section section-padding">
        <div class="container cta-container">
            <h2 class="cta-title">
                Dale a tus articulaciones el soporte que necesitan. Comienza hoy tu rutina de bienestar con COLAGENOREX.
            </h2>
            
            <!-- Botón Secundario (Verde según mockup) -->
            <a href="#" class="btn btn-secondary btn-cta-trigger" style="padding: 16px 40px; font-size: 18px;">
                Obtener más información
            </a>
            
            <span class="cta-subtitle">PAGO SEGURO Y GARANTIZADO</span>
        </div>
    </section>

</main>

<?php
// Cargar el pie de página del tema.
get_footer();
?>
