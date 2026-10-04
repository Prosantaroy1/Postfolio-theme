=== Postfolio Blocks ===
Contributors: bplugins, prosanta10
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
Version: 1.0.3
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Tags: blog, entertainment, one-column, two-columns, grid-layout, custom-colors, custom-menu, editor-style, featured-images, full-site-editing, block-patterns, style-variations, rtl-language-support, translation-ready, wide-blocks, block-styles

A bold, contemporary full-site-editing block theme for modern blogs and online magazines, with three switchable homepage layouts and a card-grid pattern library built entirely from core WordPress blocks.

== Description ==

Postfolio Blocks is a full-site-editing (FSE) block theme built for independent blogs, online magazines and personal publications that want a modern, editorial look without installing a page builder.

The theme ships with three homepage layouts you can switch between at any time:

* **Home 1 — Statement**: a large headline hero followed by a three-column "latest stories" card grid.
* **Home 2 — Spotlight**: one large lead story with an image overlay next to a compact list of the next four posts.
* **Home 3 — Editorial list**: a quieter, list-first layout with a numbered reading list of recent posts.

Beyond the homepage, Postfolio Blocks includes a complete, purpose-built template for every part of a content-driven site: a blog index, single post ("blog details") pages with author bio and threaded comments, category/tag archives, a dedicated author profile page, search results, and a 404 page.

Every layout is composed from a library of block patterns — card grids, spotlight splits, editorial lists, author cards, contact info columns, an about-page layout and a call-to-action band — built entirely from core WordPress blocks (Query Loop, Group, Columns, Cover, Post Featured Image, and so on). The result deliberately echoes the punchy, image-forward post-grid layouts popularised by third-party "advanced post" grid plugins, but Postfolio Blocks never requires any plugin to look or work correctly: every pattern renders correctly on a stock WordPress install.

Deep color, typography and spacing controls are exposed through the Styles panel via theme.json, including a bundled variable web font (Manrope), a fluid type scale, a custom color palette, and two additional one-click style variations ("Midnight" and "Sunset") for re-skinning the whole site.

= Key features =

* Three switchable homepage layouts (Home 1, Home 2, Home 3) selectable per-page from Page Attributes → Template.
* Full template set: front page, blog index, single post, page, category/tag archive, author profile, search, and 404.
* A library of reusable block patterns for post grids, hero sections, author bios, contact info, about-page content and calls to action — all core-block based.
* Global Styles support via theme.json: custom palette, fluid font sizes, spacing scale, and a self-hosted variable font.
* Three style variations: the default "Bold Contemporary" look, plus "Midnight" (dark) and "Sunset" (warm) palettes.
* Full support for the Site Editor, template editing, and block-based widgets areas (header and footer are editable template parts).
* Threaded comments, post navigation, and a real author-biography section on every single post.
* Translation ready and right-to-left (RTL) friendly, with no hard-coded left/right assumptions in layout.
* Accessibility-conscious: visible focus states, a skip-to-content link, reduced-motion support, and sufficient color contrast in the default palette.

= A note on plugin compatibility =

Postfolio Blocks was designed with the visual language of popular post-grid and content-block plugins in mind — card grids, category badges, spotlight layouts — but every pattern in this theme is built from core WordPress blocks only, so the theme never depends on any third-party plugin to render correctly. If you do run a post-grid or content-block plugin, its blocks will simply sit alongside this theme's own patterns; nothing here conflicts with or hides plugin functionality.

== Installation ==

= From within WordPress =

1. Go to Appearance → Themes → Add New.
2. Search for "Postfolio Blocks".
3. Click Install, then click Activate.

= Uploading in WordPress =

1. Go to Appearance → Themes → Add New → Upload Theme.
2. Upload the postfolio-blocks.zip file.
3. Click Install Now, then click Activate.

= Choosing a homepage layout =

1. Create (or edit) a Page for your homepage.
2. In the Page panel, open Template under "Template" and choose "Home 2 (Spotlight)" or "Home 3 (Editorial List)" — leave the default template for the "Home 1 (Statement)" look.
3. Go to Settings → Reading and set that page as your "Homepage displays: A static page" front page.
4. Optionally create a second page (e.g. "Blog") and set it as the "Posts page" so your latest posts also have a dedicated URL.

== Frequently Asked Questions ==

= Does this theme require any plugin to work? =

No. Every template and pattern in Postfolio Blocks is built entirely from WordPress core blocks. The theme's visual style was inspired by popular post-grid/content-block plugins, but it does not require, bundle, or depend on any of them.

= How do I switch between Home 1, Home 2 and Home 3? =

Each style is a separate page template. Create or edit a page, choose the template you want from the Page panel's Template dropdown, and set that page as your site's static front page under Settings → Reading. See "Choosing a homepage layout" above.

= Can I change the colors and fonts? =

Yes. Open the Site Editor and go to Styles to adjust colors, typography and layout, or switch to one of the two bundled style variations ("Midnight" or "Sunset") for a one-click re-skin.

= Does Postfolio Blocks support the block-based widgets and full site editing? =

Yes. This is a full block theme: the header and footer are editable template parts, and every template (front page, single post, archive, author, search, 404, etc.) can be edited directly in the Site Editor.

= Where do I report bugs or request features? =

Please use the theme's support forum on WordPress.org.

== Changelog ==

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

* Manrope Variable Font, Copyright 2018 The Manrope Project Authors (https://github.com/sharanda/manrope).
  License: SIL Open Font License, 1.1. Included at assets/fonts/, license text included at assets/fonts/manrope-OFL-1.1.txt.
  Source: https://fontsource.org/fonts/manrope

All other code, markup, patterns and templates in this theme are original work created for Postfolio Blocks and are licensed under the GPLv2 (or later), the same as WordPress. The screenshot (screenshot.png) is original artwork created for this theme and is likewise released under the GPLv2 (or later).

This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
