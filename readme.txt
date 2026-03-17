=== 200 Bytes ===
Contributors: Marc Armengou
Tags: blog, one-column, full-width-template
Requires at least: 5.6
Tested up to: 6.9
Requires PHP: 5.6
Stable tag: 1.1.1
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A minimalist WordPress theme based on 200 bytes of CSS. The sequel to 100 Bytes.

== Description ==
This is a minimalist WordPress theme that uses just 200 bytes of CSS for its design.

== Installation ==
1. In your admin panel, go to Appearance -> Themes and click the 'Add New' button.
2. Click on the 'Upload Theme' button and upload the .zip file of this theme.
3. Click on the 'Activate' button to use your new theme right away.

== Copyright ==
200 Bytes, Copyright 2023-2026 Marc Armengou
200 Bytes is distributed under the terms of the GNU GPL

== Changelog ==

= 1.1.1 =
* 2026-03-17
* Security: Full implementation of "Late Escaping". All dynamic data is escaped at the exact point of rendering.
* Accessibility: Added mandatory "Skip to content" link for keyboard navigation.
* Accessibility: Implemented ARIA labels for post navigation and pagination.
* Semantics: Migrated structure from generic divs to HTML5 semantic elements (<main>, <article>, <nav>).
* Performance: Implemented filemtime() cache-busting for stylesheet enqueuing.
* Architecture: Refactored functions.php with strict typing (PHP 8.2+) and modern array syntax.
* Cleanup: Removed obsolete XFN profile link and modernized header logic.

= 1.1.0 =
* 2024-13-01
* Compatibility: WordPress 5.6 - WordPress 6.4.2
* Compatibility: PHP 5.6 - PHP 8.3

= 1.0.9 =
* 2023-11-09
* Compatibility: WordPress 5.6 - WordPress 6.3.1
* Compatibility: PHP 5.6 - PHP 8.2
* Improved code security and readability

= 1.0.8 =
* Reorganized code in index.php
* Added 404.php

= 1.0.6 =
* Fix name prefixing, theme_enqueue_styles().
* Some corrections

= 1.0 =
* Initial release
