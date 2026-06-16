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
```

---

## 📦 Instrucciones de Instalación

### Opción A: Como Tema Personalizado de WordPress

1. Descarga este repositorio en formato `.zip`.
2. Ve al escritorio de administración de tu WordPress: **Apariencia > Temas > Añadir nuevo > Subir tema**.
3. Selecciona el archivo `.zip` y haz clic en **Instalar ahora**.
4. Haz clic en **Activar**.
5. Ve a **Ajustes > Lectura** y asegúrate de que tu página de inicio esté configurada para mostrar tus "Últimas entradas" (debido a que `index.php` actúa como la página de aterrizaje completa, se mostrará de inmediato).

### Opción B: Desarrollo Local (Sitio Estático)

El proyecto incluye un entorno de servidor estático ligero para pruebas rápidas.

1. Asegúrate de tener instalado [Node.js](https://nodejs.org/).
2. Instala las dependencias de desarrollo ejecutando:
   ```bash
   npm install
   ```
3. Inicia el servidor de desarrollo local:
   ```bash
   npm run dev
   ```
4. Abre tu navegador en la dirección local indicada (típicamente `http://localhost:3000` o `http://localhost:5000`).

---

## 🌐 Despliegue en Producción (Sitio Estático)

Este repositorio está preconfigurado para ser desplegado instantáneamente en **Vercel** utilizando el archivo `vercel.json` incluido:

1. Crea o inicia sesión en tu cuenta de [Vercel](https://vercel.com).
2. Vincula este repositorio de GitHub a tu panel de control de Vercel.
3. Vercel detectará la configuración automáticamente y publicará el sitio web estático (`index.html`) con soporte para rutas limpias.

---

## 🛠️ Tecnologías Utilizadas

* **HTML5** semántico y estructurado.
* **CSS3** advanced (Variables CSS `:root`, flexbox, grid layouts y transformaciones 3D nativas).
* **JavaScript** nativo (Vanilla JS, sin jQuery ni dependencias pesadas para asegurar una puntuación óptima de Core Web Vitals).
* **PHP / WordPress Codex** estructurado bajo estándares y buenas prácticas de desarrollo.
