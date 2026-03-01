# Changelog

All notable changes to JavaTop No Comments are documented here.

## [1.1.0] - 2026-03-01

### Added
- Remove comment support from all registered post types
- Remove Comments node from admin toolbar
- Remove Comments column from post and page list tables

### Fixed
- Admin redirect now correctly targets `edit-comments.php` via `$pagenow` (previous implementation using `$_GET['page']` never fired)

### Changed
- Rebranded from No Comment to JavaTop No Comments
- Plugin slug: `no-comment` → `javatop-no-comments`
- Main file: `no-comment.php` → `javatop-no-comments.php`
- All function prefixes: `no_comment_` → `javatop_no_comments_`
- Author: Brad Slater → JavaTop AI & Automation
- Minimum WordPress version: 5.0 → 6.0
- Minimum PHP version: 7.4 → 8.0

## [1.0.1] - Initial release

- Disable comments and pings site-wide
- Remove comments admin menu item
- Remove recent comments dashboard widget
- Redirect direct access to comments admin page
