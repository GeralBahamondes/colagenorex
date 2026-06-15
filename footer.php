<?php
/**
 * Plantilla del Pie de Página (Footer)
 *
 * @package Colagenorex
 */

// Evitar el acceso directo al archivo por seguridad.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<!-- Pie de Página (Footer) -->
<footer class="site-footer">
    <div class="container">
        
        <!-- Grid de Columnas en Footer -->
        <div class="footer-grid">
            
            <!-- Columna 1: Información de la Marca y Redes -->
            <div class="footer-brand">
                <span class="footer-logo">COLAGENOREX</span>
                <p class="body-md" style="font-size: 14px;">
                    Líderes en suplementación nutricional de grado nutrición especializada en salud. Comprometidos con tu movilidad y salud integral.
                </p>
                <div class="footer-social-icons">
                    <!-- Icono Compartir -->
                    <a href="#" class="footer-social-btn" aria-label="Compartir enlace">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                    </a>
                    <!-- Icono Mensaje/Chat -->
                    <a href="#" class="footer-social-btn" aria-label="Enviar mensaje">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                    </a>
                </div>
            </div>

            <!-- Columna 2: Enlaces Rápidos -->
            <div class="footer-links-col">
                <h4>Enlaces Rápidos</h4>
                <ul>
                    <li><a href="#beneficios">Beneficios</a></li>
                    <li><a href="#formula">Fórmula</a></li>
                    <li><a href="#comparativa">Comparativa</a></li>
                    <li><a href="#" class="btn-cta-trigger">Obtener más información</a></li>
                </ul>
            </div>

            <!-- Columna 3: Información de Contacto / Registro -->
            <div class="footer-contact-col">
                <h4>Contacto</h4>
                <p class="body-md" style="font-size: 14px; margin-bottom: 8px;">
                    Tel / WhatsApp: <a href="https://wa.me/56985632681" style="color: #111111; text-decoration: underline;">+56 9 8563 2681</a>
                </p>
                <p class="body-md" style="font-size: 14px; margin-bottom: 8px;">
                    Email: <a href="mailto:farmaciaslasanimas@gmail.com" style="color: #111111; text-decoration: underline;">farmaciaslasanimas@gmail.com</a>
                </p>
                <p class="body-md" style="font-size: 14px; margin-bottom: 8px;">Res. Seremi N96854 del 21/10/13</p>
                <p class="body-md" style="font-size: 14px;">Para consultas directas o soporte, contáctenos vía correo o a través de nuestros canales autorizados.</p>
            </div>

        </div>

        <!-- Advertencia Legal (Clínica y obligatoria por Seremi) -->
        <div class="footer-legal-disclosure">
            <p>© <?php echo date('Y'); ?> COLAGENOREX. Suplemento Alimentario. El uso de este producto es responsabilidad de quien lo consume. Su uso no es recomendable para menores de 8 años, embarazadas y nodrizas, salvo indicación profesional competente y no reemplaza una alimentación balanceada.</p>
        </div>

    </div>
</footer>

<!-- ==========================================================================
     MODAL DE LEAD / FORMULARIO DE CONTACTO (Interactividad de "Saber Más")
     ========================================================================== -->
<div id="cta-modal" class="modal-overlay" aria-hidden="true" role="dialog">
    <div class="modal-container">
        <!-- Botón para cerrar modal -->
        <button id="modal-close" class="modal-close" aria-label="Cerrar ventana emergente">&times;</button>
        
        <h3 class="headline-md modal-title">Solicitar Información</h3>
        <p class="body-md modal-desc">Completa tus datos para recibir asesoría personalizada sobre COLAGENOREX o realizar tu pedido.</p>
        
        <!-- Formulario Clínico de Captación -->
        <form id="contact-form" class="modal-form" action="#" method="POST">
            <div class="form-group">
                <label for="form-name">Nombre Completo</label>
                <input type="text" id="form-name" class="form-control" placeholder="Escribe tu nombre" required>
            </div>
            
            <div class="form-group">
                <label for="form-phone">Teléfono / WhatsApp</label>
                <input type="tel" id="form-phone" class="form-control" placeholder="Ej: +56 9 1234 5678" required>
            </div>

            <div class="form-group">
                <label for="form-email">Correo Electrónico (Opcional)</label>
                <input type="email" id="form-email" class="form-control" placeholder="Escribe tu correo">
            </div>

            <div class="form-group">
                <label for="form-consult">Consulta Principal</label>
                <select id="form-consult" class="form-control">
                    <option value="quiero-comprar">Quiero realizar un pedido / comprar</option>
                    <option value="dudas-dosis">Tengo dudas sobre la dosis / ingredientes</option>
                    <option value="distribucion">Interés en distribución mayorista</option>
                </select>
            </div>

            <!-- Botón de Envío -->
            <button type="submit" class="btn btn-secondary" style="width: 100%; margin-top: 8px;">
                Enviar Consulta por WhatsApp
            </button>
        </form>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
