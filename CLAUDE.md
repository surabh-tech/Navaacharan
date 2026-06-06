# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Running the site

This is a hand-written PHP site served via XAMPP. Start Apache from the XAMPP control panel and visit `http://localhost/Navaacharan/`. **There is no build step** — CSS and JS are authored by hand and edited directly.

## Design

Editorial / "Anthropic-style" look: warm ivory pages (`--ivory: #F7F4EE`) with a few dramatic near-black sections (`--black: #16130F`) for the hero, CTA bands and footer. One restrained warm **clay** accent (`--clay: #C05E3B`). Display headlines use **Fraunces** (serif), body copy uses **Inter** — both loaded from Google Fonts in [head.php](head.php). All design tokens live as CSS custom properties at the top of [css/main.css](css/main.css); change colours, fonts, spacing and radius there.

## Architecture

### PHP includes pattern
Every page is a thin PHP file that sets a few variables, then includes three shared partials:

```php
<?php
$page_title       = '…';   // <title> + OG title
$page_description = '…';   // meta + OG description
$page_slug        = 'home'; // marks the active nav link: home|about|services|industries|contact
include 'head.php';        // <!DOCTYPE>, <head> (meta/fonts/CSS), opening <body>
include 'header.php';      // fixed navbar + mobile panel
?>
<!-- page-specific sections here -->
<?php include 'footer.php'; ?>  // footer + <script> + closing </body></html>
```

- [head.php](head.php) — full document head. Reads `$page_title` / `$page_description` / `$page_slug`. `$base` (= `/Navaacharan`) is defined here and reused by header/footer for absolute links.
- [header.php](header.php) — nav links live in the `$nav` array; the wordmark is text ("Navaacharan."), not an image. Active link is set from `$page_slug`.
- [footer.php](footer.php) — dark footer, contact details, loads `js/main.js`, closes the document.

### Styles — `css/main.css`
The **only** stylesheet. Single hand-written file, organised top-to-bottom: tokens → reset → typography → layout → components (header, hero, cards, steps, pillars, timeline, tech stack, contact form, footer) → reveal animations → utilities. No SASS, no Gulp, no vendor CSS.

### JS — `js/main.js`
Vanilla, no dependencies. Handles: hero load reveal (`body.loaded`), sticky-header solid state on scroll, mobile nav toggle, `IntersectionObserver` scroll reveals for `[data-reveal]` elements, and the contact-form AJAX submit. All animation respects `prefers-reduced-motion`.

### Animations
- Add `data-reveal` (optionally `data-reveal-delay="1..4"`) to any element to fade-and-rise it into view on scroll.
- The hero headline uses `.reveal-line > span` for a staggered load reveal.
- Dark/light section rhythm is set with `.section--dark` / `.section--alt` classes.

### Pages
| File | Route | Nav slug |
|------|-------|----------|
| `index.php` | Home | `home` |
| `who-we-are.php` | About | `about` |
| `services.php` | Services (+ tech stack) | `services` |
| `industries.php` | Industries / sectors | `industries` |
| `contact.php` | Contact + form | `contact` |

### Contact form / email
The contact form (`data-contact` in [contact.php](contact.php)) posts fields `name, email, phone, subject, comment` to [email-templates/contact-form.php](email-templates/contact-form.php), which sends via PHP `mail()` to `info@navaacharan.com` and returns JSON `{alert, message}`. `js/main.js` submits via `fetch` and renders the response inline in `.form__status`. Actual delivery depends on the local `mail()`/SMTP configuration.

### Assets
- `images/favicon.ico`, `images/apple-touch-icon-*.png` — referenced in [head.php](head.php).
- `images/og.png` — 1200×630 social-share image referenced by the OG tags (add/replace as needed).
