/**
 * Lógica interactiva de la página de aterrizaje Colagenorex
 *
 * Desarrollado con Javascript nativo (Vanilla JS) para asegurar un rendimiento de carga óptimo.
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // ==========================================
    // 1. CONTROL DE LA CABECERA EN SCROLL
    // ==========================================
    const header = document.getElementById('site-header');
    
    function checkScroll() {
        if (window.scrollY > 20) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }
    
    // Escuchar el scroll del navegador de forma eficiente
    window.addEventListener('scroll', checkScroll);
    checkScroll(); // Ejecutar al inicio por si el usuario recarga a mitad de página

    // ==========================================
    // 2. MENÚ MÓVIL (Hamburguesa)
    // ==========================================
    const menuToggle = document.getElementById('menu-toggle');
    const mainNavigation = document.getElementById('main-navigation');
    const navLinks = mainNavigation.querySelectorAll('.nav-menu a');

    if (menuToggle && mainNavigation) {
        menuToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            menuToggle.classList.toggle('active');
            mainNavigation.classList.toggle('active');
        });

        // Cerrar el menú móvil al hacer clic en cualquier enlace de navegación (anclas)
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                menuToggle.classList.remove('active');
                mainNavigation.classList.remove('active');
            });
        });

        // Cerrar el menú si el usuario hace clic fuera de la navegación activa
        document.addEventListener('click', function(e) {
            if (!mainNavigation.contains(e.target) && !menuToggle.contains(e.target)) {
                menuToggle.classList.remove('active');
                mainNavigation.classList.remove('active');
            }
        });
    }

    // ==========================================
    // 3. NAVEGACIÓN SUAVE (Smooth Scroll)
    // ==========================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#') return; // Evitar el botón de modal vacío

            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                e.preventDefault();
                
                // Calcular compensación por la cabecera fija (80px)
                const headerHeight = 80;
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerHeight;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // ==========================================
    // 4. CONTROL DEL MODAL DE LEAD / CONTACTO
    // ==========================================
    const modal = document.getElementById('cta-modal');
    const modalClose = document.getElementById('modal-close');
    const ctaButtons = document.querySelectorAll('.btn-cta-trigger');

    // Función para abrir el modal
    function openModal(e) {
        if (e) e.preventDefault();
        modal.classList.add('active');
        modal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden'; // Evitar scroll de fondo
    }

    // Función para cerrar el modal
    function closeModal() {
        modal.classList.remove('active');
        modal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = ''; // Restaurar scroll de fondo
    }

    // Vincular evento a todos los botones con la clase CTA
    ctaButtons.forEach(btn => {
        btn.addEventListener('click', openModal);
    });

    if (modalClose) {
        modalClose.addEventListener('click', closeModal);
    }

    // Cerrar el modal al hacer clic en la superposición (fondo oscuro)
    if (modal) {
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                closeModal();
            }
        });

        // Cerrar modal presionando la tecla Escape
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && modal.classList.contains('active')) {
                closeModal();
            }
        });
    }

    // ==========================================
    // 5. ENVÍO DE FORMULARIO A WHATSAPP
    // ==========================================
    const contactForm = document.getElementById('contact-form');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Capturar los valores ingresados por el usuario
            const name = document.getElementById('form-name').value.trim();
            const phone = document.getElementById('form-phone').value.trim();
            const email = document.getElementById('form-email').value.trim() || 'No indicado';
            const selectConsult = document.getElementById('form-consult');
            const consultText = selectConsult.options[selectConsult.selectedIndex].text;

            // Número de WhatsApp comercial al que se enviará (configurable)
            // Usaremos un formato internacional limpio sin símbolos
            const whatsappNumber = '56930000000'; // Reemplazar con el número real de destino

            // Redactar mensaje profesional y ordenado
            const message = `Hola COLAGENOREX,\n\n` +
                            `Me gustaría recibir más información.\n\n` +
                            `*Nombre:* ${name}\n` +
                            `*Teléfono:* ${phone}\n` +
                            `*Correo:* ${email}\n` +
                            `*Motivo de consulta:* ${consultText}`;

            // Codificar el texto para la URL
            const encodedMessage = encodeURIComponent(message);
            
            // Construir enlace universal directo a WhatsApp (sin usar APIs ni cuentas de desarrollo)
            const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodedMessage}`;
 
            // Cerrar el modal antes de redirigir
            closeModal();
 
            // Abrir WhatsApp en una nueva pestaña
            window.open(whatsappUrl, '_blank');
        });
    }

    // ==========================================
    // 6. INTERACTIVIDAD EN TARJETAS DE BENEFICIOS
    // ==========================================
    const benefitCards = document.querySelectorAll('.benefit-card-image, .benefit-card-clean');

    benefitCards.forEach(card => {
        card.addEventListener('click', function(e) {
            const closeBtn = e.target.closest('.btn-close-overlay');
            
            if (closeBtn) {
                e.stopPropagation();
                card.classList.remove('expanded');
                card.setAttribute('aria-expanded', 'false');
                return;
            }

            if (e.target.closest('a')) return;

            const isExpanded = card.classList.contains('expanded');
            
            benefitCards.forEach(otherCard => {
                otherCard.classList.remove('expanded');
                otherCard.setAttribute('aria-expanded', 'false');
            });

            if (!isExpanded) {
                card.classList.add('expanded');
                card.setAttribute('aria-expanded', 'true');
            }
        });
    });
});
