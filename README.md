# Colagenorex - Premium Landing Page & WordPress Theme

Este repositorio contiene la **Landing Page Premium y Tema de WordPress Personalizado** para **Colagenorex**, un suplemento alimentario premium diseñado para la salud articular y la recuperación muscular.

La página ha sido desarrollada siguiendo el sistema de diseño **"Vitality Science System"**, ofreciendo una interfaz de usuario extremadamente limpia, moderna y enfocada en la conversión clínica y farmacéutica.

---

## 🚀 Características Clave

* **Diseño Dual Híbrido**: Funciona tanto como una plantilla HTML estática (para hosting rápido en plataformas como Vercel o Netlify) como un **Tema de WordPress a la medida** completamente integrado.
* **Modelo 3D Interactivo**: Visualización rotativa en 3D puro del empaque del producto utilizando únicamente CSS 3D avanzado (sin necesidad de pesadas librerías de terceros como Three.js o WebGL), optimizada para pantallas táctiles y ratón.
* **Sistema de Diseño Clínico**: Paleta de colores armoniosa con azul farmacéutico profundo (`#002546`), verde de conversión de marca (`#008f39`), tipografía legible (`Poppins` e `Inter`) y sombras sutiles.
* **Menú Móvil Hamburguesa Responsivo**: Drawer colapsable optimizado para visualización en teléfonos con transiciones fluidas.
* **Compensación de Scroll Dinámica**: Script nativo en Vanilla JS que mide dinámicamente la altura del cabezal fijo (`95px` en desktop, `75px` en móvil) para alinear con precisión las secciones al hacer clic en los enlaces de navegación.
* **Captura de Leads Integrada**: Formulario modal que recopila información de contacto (Nombre, Teléfono, Correo e Interés de compra) y redirige automáticamente al usuario con el mensaje preformateado hacia el canal oficial de **WhatsApp**.

---

## 📁 Estructura del Proyecto

```bash
├── assets/
│   └── js/
│       └── app.js          # Lógica interactiva (scroll dinámico, modal, menú móvil y envío a WhatsApp)
├── images/
│   ├── logo1.jpeg          # Logotipo principal del header
│   ├── logo.png            # Logotipo alternativo en formato PNG transparente
│   ├── sinfondo.png        # Render del empaque del producto sin fondo
│   ├── caja.jpg            # Textura 3D del empaque
│   ├── rodilla.jfif        # Imagen del beneficio: Salud Articular
│   ├── corredores.jfif     # Imagen del beneficio: Recuperación Muscular
│   ├── piel.jpeg           # Imagen del beneficio: Salud de la Piel
│   └── capsulas.jpeg       # Imagen del beneficio: Protección Antioxidante
├── index.html              # Entrada de la landing page estática para hosting
├── preview.html            # Copia espejo de la landing page para pruebas locales
├── style.css               # Estilos del tema (incluye metadatos necesarios de WordPress)
├── functions.php           # Archivo de funciones y carga de assets para WordPress
├── header.php              # Cabecera dinámica de WordPress
├── index.php               # Plantilla de contenido principal de WordPress
├── footer.php              # Pie de página y estructura del modal para WordPress
├── vercel.json             # Configuración de hosting de URLs limpias para Vercel
├── package.json            # Scripts de ejecución local
└── DESIGN.md               # Especificaciones detalladas del sistema de diseño (Vitality Science)
