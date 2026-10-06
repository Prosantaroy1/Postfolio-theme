=== Postfolio Blocks ===
Contributors: bplugins, prosanta10
Requires at least: 6.9
Tested up to: 7.1
Requires PHP: 7.4
Version: 1.1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Tags: blog, news, portfolio, one-column, two-columns, three-columns, four-columns, right-sidebar, grid-layout, custom-colors, custom-logo, custom-menu, editor-style, featured-images, full-site-editing, full-width-template, block-patterns, block-styles, style-variations, template-editing, theme-options, threaded-comments, rtl-language-support, translation-ready, wide-blocks

A bold, contemporary block theme for blogs, online magazines and portfolios — with 57 patterns, 22 templates, one-click starter sites, dark mode and a full set of blog tools built from core blocks.

== Description ==

Postfolio Blocks is a full-site-editing (FSE) block theme for independent blogs, online magazines, news sites and creative portfolios that want a modern, editorial look without installing a page builder. Everything is built from core WordPress blocks, so your content keeps working with any block theme.

= Layouts =

* **Three homepage layouts**: Home 1 (Statement), Home 2 (Spotlight) and Home 3 (Editorial List).
* **22 templates**: blog index, front page, three homepages, four single-post layouts (default, with sidebar, cover hero, wide), five page layouts (default, no title, full width, with sidebar, landing page with transparent header), blank canvas, category, tag, date, author, archive, search and 404.
* **15 template parts**: 7 headers (including sticky and transparent), 5 footers, sidebar, post meta and comments — swap them in the Site Editor.
* **57 block patterns**: post grids and lists, heroes, calls to action, services, pricing, team, testimonials, FAQ, portfolio grid, case study, logo cloud, stats, timeline, gallery, events, careers, process steps and features.
* **Page starters**: when you create a new page, pick a ready-made Landing, Services, Portfolio, About, Contact, Blog or Portfolio landing layout.

= Styles =

* 7 complete style variations (Midnight, Cyberpunk, Forest, Lavender, Nordic, Retro, Sunset) that change colors, fonts and button shapes.
* 8 extra color palettes and 6 font pairings that can be mixed with any style.
* 5 section styles (Dark, Accent, Muted, Gradient, Bordered) for Group, Columns and Column blocks, plus Card, Rounded, Dot and Pill block styles.
* Shadow presets, custom aspect ratios and a fluid type scale.
* Six self-hosted fonts (Poppins, Montserrat, Manrope, Lora, Playfair Display) — no requests to third-party font services.
* Every palette meets WCAG AA contrast for text, muted text and links.

= Blog tools =

* Reading time, author box, category pills and previous/next links on every post.
* Related posts (same categories), popular posts (most commented), share buttons for the current post and an automatic table of contents.
* A sidebar with search, about card, popular posts, categories, tags and a newsletter box.

= Modules (Appearance → Postfolio Blocks → Modules) =

All modules are off by default. Turn on only what you need — each module loads its small script and stylesheet only when enabled:

* Dark mode toggle (the dark palette is generated from your current colors)
* Back to top button
* Reading progress bar
* Smart sticky header
* Scroll animations (respects reduced-motion settings)
* Footer reveal effect
* Floating call / email / WhatsApp buttons

= One-click starter sites =

Personal Blog, Online Magazine, Editorial News, Creative Portfolio and Business & Agency. Each creates its pages from the theme patterns, sets the homepage and can optionally apply a matching style. Importing again updates the same pages instead of duplicating them.

== Installation ==

1. Go to Appearance → Themes → Add New.
2. Search for "Postfolio Blocks", click Install, then Activate.
3. Open Appearance → Postfolio Blocks to import a starter site or turn on modules.

== Frequently Asked Questions ==

= Does this theme require any plugin? =

No. Every template and pattern is built from WordPress core blocks only.

= How do I switch between Home 1, Home 2 and Home 3? =

Create or edit a page, choose "Home 2 (Spotlight)" or "Home 3 (Editorial List)" in the page's Template setting (leave the default for Home 1), then set that page as your homepage under Settings → Reading. A starter site does this for you.

= How do I add related posts, share buttons or a table of contents? =

They are already part of the single post templates. To add them anywhere else, insert the "Related posts", "Share buttons" or "Table of contents" pattern from the Postfolio — Blog Extras category.

= How do I put a dark mode switch in my header? =

Turn on the Dark mode module, then add a Button block to your header and choose the "Dark mode toggle" style for it. A floating switch is also shown by default.

= Can I change the colors and fonts? =

Yes. Open Appearance → Editor → Styles to pick a style variation, a color palette or a font pairing, or adjust everything by hand.

= Will the theme load fonts from Google? =

No. All fonts are bundled with the theme and served from your own site.

== Changelog ==

= 1.1.0 =
* Accessibility: Every button and link has a real destination (no "#" placeholders), so all of them can be reached and used with the keyboard.
* Accessibility: Navigation keeps parent menu items as links; submenus open with their own toggle button, by keyboard or pointer.
* Accessibility: Search fields always have an accessible label; newsletter areas no longer use a search box as a fake sign-up form.
* i18n: All text in template parts and templates moved into PHP patterns and wrapped in translation functions; the copyright year is now dynamic.
* Change: All modules are off by default, and every feature is free — the dashboard lists them under "All Features".
* Fix: Every pattern, template and template part now passes the block editor's validation on WordPress 6.9, 7.0 and 7.1 — no more "Block contains unexpected or invalid content" messages.
* Fix: Badge paragraphs no longer turn into nested paragraphs when edited.
* Fix: Template part "Header 05" showed empty button labels because PHP does not run inside .html files.
* Fix: Header and footer parts no longer nest a second header/footer landmark.
* Fix: Fonts are bundled locally; removed all requests to Google Fonts.
* Fix: Font and title CSS overrides were removed so Global Styles, style variations and font presets work again.
* Fix: Columns respect the "Stack on mobile" setting; tablet layouts for rows of four columns.
* Fix: The dashboard's module switches and starter-site import now actually work, and all counts are accurate.
* Feature: 24 new patterns (57 in total), including blog extras, portfolio, case study, logo cloud, stats, timeline, gallery, events, careers, process, features, pricing and page starters.
* Feature: 11 new templates — four post layouts, five page layouts (including landing page and blank canvas), category, tag and date archives.
* Feature: 6 new template parts — sticky and transparent headers, minimal footer, sidebar, post meta and comments.
* Feature: Style variations now change typography and button shapes; added 8 color palettes, 6 font pairings, 5 section styles and a Pill style for categories and tags.
* Feature: Shadow presets and custom aspect ratios.
* Feature: Reading time, related posts, popular posts, share buttons and automatic table of contents.
* Feature: Modules — dark mode, back to top, reading progress, smart sticky header, scroll animations, footer reveal and floating contact buttons.
* Feature: Five one-click starter sites.
* Enhancement: Original SVG artwork replaces the screenshot used as placeholder images.
* Enhancement: Accessible color contrast in every palette; PHP code follows the WordPress Coding Standards.

= 1.0.3 =
* Feature: Added dedicated Postfolio Blocks Admin Dashboard page under Appearance with Welcome tab, Quick Action links, and Module controls.
* Feature: Added Starter Sites tab with Coming Soon status for upcoming pre-built landing page releases.
* Enhancement: Added 2 new landing page patterns (Starter Site — Portfolio Landing Page and Starter Site — Blog Landing Page).
* Fix: Fully audited all pattern PHP files for 100% i18n translation readiness with esc_html__() wrappers.
* Fix: Cleaned up theme layout boundaries for full-width responsive dashboard display.

= 1.0.2 =
* Fix: Added explicit copyright notice in style.css and readme.txt for GPL compliance.

= 1.0.1 =
* Fix: Removed invalid theme URI header from style.css.
* Fix: Updated 'Tested up to' header to the latest WordPress version.
* Fix: Made all user-facing text strings in pattern PHP files translation-ready.

= 1.0.0 =
* Initial release.

== Copyright ==

Postfolio Blocks WordPress Theme, Copyright (C) 2026 bPlugins.
Postfolio Blocks is distributed under the terms of the GNU GPL v2 (or later).

Postfolio Blocks bundles the following third-party resources:

* Manrope, Copyright 2019 The Manrope Project Authors (https://github.com/sharanda/manrope).
  License: SIL Open Font License, 1.1. License text: assets/fonts/manrope-OFL-1.1.txt.
* Poppins, Copyright 2020 The Poppins Project Authors (https://github.com/itfoundry/Poppins).
  License: SIL Open Font License, 1.1. License text: assets/fonts/poppins-OFL-1.1.txt.
* Montserrat, Copyright 2011 The Montserrat Project Authors (https://github.com/JulietaUla/Montserrat).
  License: SIL Open Font License, 1.1. License text: assets/fonts/montserrat-OFL-1.1.txt.
* Lora, Copyright 2011 The Lora Project Authors (https://github.com/cyrealtype/Lora-Cyrillic).
  License: SIL Open Font License, 1.1. License text: assets/fonts/lora-OFL-1.1.txt.
* Playfair Display, Copyright 2017 The Playfair Display Project Authors (https://github.com/clauseggers/Playfair-Display).
  License: SIL Open Font License, 1.1. License text: assets/fonts/playfair-display-OFL-1.1.txt.

All other code, markup, patterns, templates and images in this theme — including the illustrations in assets/images and the screenshot — are original work created for Postfolio Blocks and are licensed under the GPLv2 (or later), the same as WordPress.

This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
