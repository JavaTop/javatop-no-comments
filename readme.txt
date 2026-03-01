=== JavaTop No Comments ===
Contributors: javatopsystems
Donate link: https://javatop.com.au
Tags: comments, disable comments, remove comments, no comments, spam
Requires at least: 6.0
Tested up to: 6.7
Requires PHP: 8.0
Stable tag: 1.1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Disables comments site-wide with a single click. No configuration required.

== Description ==

JavaTop No Comments completely disables the WordPress comment system across your entire site. Activate and comments are gone — no configuration required.

**What it does:**

* Closes comment and ping threads on all posts and pages
* Removes comment support from all post types
* Removes the Comments menu from the admin sidebar
* Removes the Comments node from the admin toolbar
* Removes the Recent Comments dashboard widget
* Removes the Comments column from post and page list tables
* Redirects any direct access to the comments admin page

**What it does not do:**

* Delete existing comments — if you deactivate the plugin, existing comments reappear
* Affect comment data in the database

== Installation ==

1. Upload the `javatop-no-comments` folder to `/wp-content/plugins/`.
2. Activate the plugin via the Plugins menu in WordPress admin.
3. That's it — comments are disabled immediately, no settings required.

== Frequently Asked Questions ==

= Will this delete my existing comments? =
No. Existing comments remain in the database. If you deactivate the plugin, they will reappear.

= Does it work with custom post types? =
Yes. It removes comment support from all registered post types.

= Is there a settings page? =
No. The plugin is zero-configuration by design.

= How do I re-enable comments? =
Deactivate or delete the plugin from the Plugins menu.

== Screenshots ==

1. WordPress admin sidebar with JavaTop No Comments active — the Comments menu item is absent.

== Changelog ==

= 1.1.0 =
* Rebranded to JavaTop No Comments
* Added: remove comment support from all post types
* Added: remove Comments node from admin toolbar
* Added: remove Comments column from post and page list tables
* Fixed: admin redirect now correctly targets edit-comments.php page
* Updated: minimum WordPress version to 6.0
* Updated: minimum PHP version to 8.0
* Updated: function prefixes to javatop_no_comments_

= 1.0.1 =
* Initial release

== Upgrade Notice ==

= 1.1.0 =
Rebranded release with additional comment suppression coverage. Safe to upgrade — no settings or database changes.
