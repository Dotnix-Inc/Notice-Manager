=== WP Notice Manager ===
Contributors: yourname
Tags: admin, notices, notifications, dashboard, admin-bar
Requires at least: 5.0
Tested up to: 6.4
Requires PHP: 7.2
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Manage and organize WordPress admin notices by moving them from the cluttered dashboard into a centralized notice management system.

== Description ==

**WP Notice Manager** solves the problem of admin notice clutter in WordPress dashboards.

= The Problem =

WordPress dashboards are often flooded with admin notices from:

* WordPress core updates
* Plugin notifications
* Theme alerts
* System warnings

This causes:

* Important notices being ignored
* Dashboard clutter
* Poor admin experience
* Missed critical updates

= The Solution =

WP Notice Manager captures all admin notices and displays them in a clean, centralized popup interface accessible from the WordPress admin toolbar.

= Features =

**Notice Capture**

* Captures all WordPress admin notices
* Classifies notices by type (success, error, warning, info)
* Stores notices for later viewing
* Removes clutter from dashboard

**Admin Toolbar Integration**

* Shows notice count in admin bar
* One-click access to all notices
* Real-time counter updates
* Non-intrusive design

**Popup Interface**

Choose from 3 popup styles:

1. Slide from Right - Smooth slide-in panel
2. Modal Popup - Centered overlay
3. Slide Background Panel - Full-height sidebar

**Granular Control**

Configure behavior for each notice type:

* Success notices - Show in popup, hide completely, or do nothing
* Error notices - Show in popup, hide completely, or do nothing
* Warning notices - Show in popup, hide completely, or do nothing
* Info notices - Show in popup, hide completely, or do nothing
* Non-standard notices - Show in popup, hide completely, or do nothing
* WordPress system notices - Show in popup or do nothing

**User Visibility Control**

Control who sees notices:

* Hide from all users
* Hide from selected users only
* Hide from all except selected users

**Notice Management**

* Mark notices as read/unread
* Auto-expire old notices (30 days default)
* Dismiss individual notices
* Clear all notices

= Use Cases =

* **WordPress Agencies** - Keep client dashboards clean
* **Freelancers** - Manage multiple sites efficiently
* **Enterprise Teams** - Control notice visibility by role
* **Bloggers** - Reduce dashboard clutter
* **WooCommerce Stores** - Organize store notifications

= Technical Features =

* Clean, object-oriented architecture
* PSR-4 autoloading
* SOLID principles
* WordPress coding standards
* Secure by design
* Performance optimized
* Translation ready

== Installation ==

= Automatic Installation =

1. Log in to your WordPress admin panel
2. Navigate to **Plugins → Add New**
3. Search for "WP Notice Manager"
4. Click **Install Now**
5. Activate the plugin

= Manual Installation =

1. Download the plugin ZIP file
2. Log in to your WordPress admin panel
3. Navigate to **Plugins → Add New → Upload Plugin**
4. Choose the ZIP file and click **Install Now**
5. Activate the plugin

= FTP Installation =

1. Download and extract the plugin ZIP file
2. Upload the `wp-notice-manager` folder to `/wp-content/plugins/`
3. Activate the plugin through the WordPress admin panel

== Frequently Asked Questions ==

= Does this plugin hide all admin notices? =

No, you have full control. You can configure each notice type separately to either show in the popup, hide completely, or leave in the dashboard.

= Will I miss important notices? =

No! Notices are captured and stored in the popup. You'll see a counter in the admin toolbar showing how many unread notices you have.

= Can I control who sees the notice manager? =

Yes! You can configure visibility settings to show/hide the notice manager for specific users or user roles.

= Does this work with multisite? =

Yes, WP Notice Manager is fully compatible with WordPress multisite installations.

= Will this slow down my site? =

No! The plugin uses lazy loading, transient caching, and minimal database queries. It has zero impact on frontend performance.

= Can I customize the popup appearance? =

Yes! You can choose from 3 popup styles: Slide from Right, Modal Popup, or Slide Background Panel.

= How long are notices stored? =

By default, notices are automatically deleted after 30 days. You can customize this in the settings.

= Is this plugin translation ready? =

Yes! WP Notice Manager is fully translation ready with a .pot file included.

== Screenshots ==

1. Admin toolbar with notice counter
2. Popup interface showing notices
3. Settings page - Notice type configuration
4. Settings page - User visibility controls
5. Clean dashboard with notices hidden

== Changelog ==

= 1.0.0 (2026-03-05) =
* Initial release
* Notice capture system
* Admin toolbar integration
* Popup interface with 3 styles
* Settings page
* User visibility controls
* Auto-expire functionality
* Translation ready

== Upgrade Notice ==

= 1.0.0 =
Initial release of WP Notice Manager.

== Privacy Policy ==

WP Notice Manager does not:

* Collect any user data
* Send data to external servers
* Use cookies or tracking
* Store personal information

All notices are stored locally in your WordPress database and are automatically deleted after the configured expiration period.

== Support ==

For support, please visit:

* [Plugin Documentation](https://example.com/docs)
* [Support Forum](https://wordpress.org/support/plugin/wp-notice-manager)
* [GitHub Repository](https://github.com/yourname/wp-notice-manager)

== Credits ==

Developed by [Your Name](https://example.com)

