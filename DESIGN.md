---
name: Vitality Science System
colors:
  surface: '#f7f9fc'
  surface-dim: '#d8dadd'
  surface-bright: '#f7f9fc'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f2f4f7'
  surface-container: '#eceef1'
  surface-container-high: '#e6e8eb'
  surface-container-highest: '#e0e3e6'
  on-surface: '#191c1e'
  on-surface-variant: '#42474f'
  inverse-surface: '#2d3133'
  inverse-on-surface: '#eff1f4'
  outline: '#737780'
  outline-variant: '#c3c6d0'
  surface-tint: '#3a608d'
  primary: '#002546'
  on-primary: '#ffffff'
  primary-container: '#0d3b66'
  on-primary-container: '#81a6d7'
  inverse-primary: '#a4c9fc'
  secondary: '#006e2c'
  on-secondary: '#ffffff'
  secondary-container: '#8bfa9c'
  on-secondary-container: '#007430'
  tertiary: '#222425'
  on-tertiary: '#ffffff'
  tertiary-container: '#383a3a'
  on-tertiary-container: '#a3a4a4'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#d3e4ff'
  primary-fixed-dim: '#a4c9fc'
  on-primary-fixed: '#001c38'
  on-primary-fixed-variant: '#204874'
  secondary-fixed: '#8bfa9c'
  secondary-fixed-dim: '#6fdd83'
  on-secondary-fixed: '#002108'
  on-secondary-fixed-variant: '#005320'
  tertiary-fixed: '#e2e2e2'
  tertiary-fixed-dim: '#c6c6c7'
  on-tertiary-fixed: '#1a1c1c'
  on-tertiary-fixed-variant: '#454747'
  background: '#f7f9fc'
  on-background: '#191c1e'
  surface-variant: '#e0e3e6'
typography:
  display-lg:
    fontFamily: Montserrat
    fontSize: 48px
    fontWeight: '700'
    lineHeight: '1.2'
    letterSpacing: -0.02em
  headline-lg:
    fontFamily: Montserrat
    fontSize: 32px
    fontWeight: '700'
    lineHeight: '1.25'
  headline-lg-mobile:
    fontFamily: Montserrat
    fontSize: 24px
    fontWeight: '700'
    lineHeight: '1.3'
  headline-md:
    fontFamily: Montserrat
    fontSize: 24px
    fontWeight: '600'
    lineHeight: '1.4'
  body-lg:
    fontFamily: Inter
    fontSize: 18px
    fontWeight: '400'
    lineHeight: '1.6'
  body-md:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: '400'
    lineHeight: '1.5'
  label-sm:
    fontFamily: Inter
    fontSize: 12px
    fontWeight: '600'
    lineHeight: '1'
    letterSpacing: 0.05em
rounded:
  sm: 0.125rem
  DEFAULT: 0.25rem
  md: 0.375rem
  lg: 0.5rem
  xl: 0.75rem
  full: 9999px
spacing:
  base: 8px
  gutter: 24px
  margin-mobile: 16px
  margin-desktop: 64px
  container-max: 1200px
---

## Brand & Style

This design system is engineered to project clinical authority, precision, and pharmaceutical-grade reliability. The brand personality is rooted in the intersection of biological science and athletic performance—balancing the sterile, trustworthy nature of healthcare with the dynamic energy of physical recovery.

The visual style follows a **Corporate / Modern** aesthetic with a lean toward **Minimalism**. It prioritizes clarity through generous whitespace, structured information density, and a refined color palette. The UI should feel airy yet intentional, using crisp lines and purposeful alignment to evoke a sense of professional transparency and "premium clinical" quality.

## Colors

The palette is anchored by **Deep Pharmaceutical Blue**, chosen for its psychological association with stability and institutional trust. **Health Green** serves as the primary action and accent color, signifying vitality, growth, and natural wellness.

- **Primary (Blue):** Use for navigation, primary buttons, and structural headers to ground the interface.
- **Secondary (Green):** Use for success states, highlights, and health-related indicators.
- **Backgrounds:** Maintain a "Clean Room" feel using the pure White and Light Gray for subtle layering. 
- **Contrast:** Ensure all text-on-background combinations meet AAA accessibility standards to maintain a professional, inclusive reading experience.

## Typography

The typographic hierarchy utilizes a dual-font strategy. **Montserrat** provides a bold, geometric presence for headlines, mirroring the impactful branding found on physical pharmaceutical packaging. **Inter** is utilized for all functional and long-form text, chosen for its exceptional legibility and neutral, systematic character.

Use **Montserrat Bold** sparingly for high-level branding and section headers. **Inter** should handle all data-heavy sections, nutritional information tables, and instructional content to ensure the interface remains "medical-grade" in its readability.

## Layout & Spacing

The layout philosophy is based on a **Fixed Grid** system for desktop to maintain a premium, editorial feel, transitioning to a flexible fluid system for mobile devices.

- **Desktop:** 12-column grid with a 1200px max-width.
- **Tablet:** 8-column grid with 24px gutters.
- **Mobile:** 4-column grid with 16px margins.

Spacing follows an 8px base unit. In a premium pharmaceutical context, whitespace is a functional element; it prevents "visual clutter" which can lead to user anxiety. High-information areas (like nutritional tables) should use tighter spacing, while marketing and product landing sections should utilize generous vertical margins to let the product photography breathe.

## Elevation & Depth

To maintain a clean, clinical aesthetic, depth is communicated through **Tonal Layers** and **Low-Contrast Outlines** rather than heavy shadows.

- **Surfaces:** Use subtle Light Gray (#F5F7FA) backgrounds to distinguish card components from the main page background.
- **Borders:** Use thin, 1px solid borders in a slightly darker gray (#E1E4E8) for input fields and containers.
- **Shadows:** If used, they must be "Atmospheric Shadows"—extremely high blur (24px+), low opacity (4-6%), and slightly tinted with the Primary Blue to simulate a soft, natural light source in a clean environment.

## Shapes

The design system utilizes **Soft** roundedness. A 4px (0.25rem) radius is the standard for most components, providing a modern feel that isn't as "playful" as fully rounded UI or as "harsh" as sharp corners. This subtle rounding suggests safety and approachability while maintaining professional structure.

Large containers and cards may scale up to 8px or 12px for a softer appearance, but buttons and inputs should remain at the standard 4px for a precise, "tooled" look.

## Components

### Buttons
- **Primary:** Solid Dark Blue background with White Montserrat Bold text. 4px border-radius.
- **Secondary:** Solid Health Green background for conversion/success-oriented actions.
- **Ghost:** Thin Blue border with Blue text for secondary navigation.

### Input Fields & Controls
- **Text Inputs:** White background, 1px Gray border, Inter Regular text. Focus state uses a 2px Green border.
- **Checkboxes:** Square with a 2px radius. When active, fill with Green and use a white checkmark.

### Cards & Information Display
- **Product Cards:** White background, no shadow, 1px light gray border. Use for product listings and nutritional data.
- **Data Tables:** Horizontal borders only. Alternating light gray row highlights for complex nutritional info to ensure readability.

### Iconography
- Use **Medical and Scientific Iconography**: Monolinear, 2px stroke weight, utilizing the Primary Blue. Icons should represent biological structures, clinical flasks, and motion-based performance symbols.