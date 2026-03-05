# WP Notice Manager

**Contributors:** Your Name  
**Tags:** admin, notices, notifications, dashboard, admin-bar  
**Requires at least:** 5.0  
**Tested up to:** 6.4  
**Requires PHP:** 7.2  
**Stable tag:** 1.0.0  
**License:** GPLv2 or later  
**License URI:** https://www.gnu.org/licenses/gpl-2.0.html

Manage and organize WordPress admin notices by moving them from the cluttered dashboard into a centralized notice management system.

---

## 📖 Description

**WP Notice Manager** solves the problem of admin notice clutter in WordPress dashboards.

### The Problem
WordPress dashboards are often flooded with admin notices from:
- WordPress core updates
- Plugin notifications
- Theme alerts
- System warnings

This causes:
- Important notices being ignored
- Dashboard clutter
- Poor admin experience
- Missed critical updates

### The Solution
WP Notice Manager captures all admin notices and displays them in a clean, centralized popup interface accessible from the WordPress admin toolbar.

---

## ✨ Features

### 🎯 Notice Capture
- Captures all WordPress admin notices
- Classifies notices by type (success, error, warning, info)
- Stores notices for later viewing
- Removes clutter from dashboard

### 🔔 Admin Toolbar Integration
- Shows notice count in admin bar
- One-click access to all notices
- Real-time counter updates
- Non-intrusive design

### 🎨 Popup Interface
Choose from 3 popup styles:
1. **Slide from Right** - Smooth slide-in panel
2. **Modal Popup** - Centered overlay
3. **Slide Background Panel** - Full-height sidebar

### ⚙️ Granular Control
Configure behavior for each notice type:
- **Success notices** - Show in popup, hide completely, or do nothing
- **Error notices** - Show in popup, hide completely, or do nothing
- **Warning notices** - Show in popup, hide completely, or do nothing
- **Info notices** - Show in popup, hide completely, or do nothing
- **Non-standard notices** - Show in popup, hide completely, or do nothing
- **WordPress system notices** - Show in popup or do nothing

### 👥 User Visibility Control
Control who sees notices:
- Hide from all users
- Hide from selected users only
- Hide from all except selected users

### 📊 Notice Management
- Mark notices as read/unread
- Auto-expire old notices (30 days)
- Dismiss individual notices
- Clear all notices

---

## 🚀 Installation

### Automatic Installation
1. Log in to your WordPress admin panel
2. Navigate to **Plugins → Add New**
3. Search for "WP Notice Manager"
4. Click **Install Now**
5. Activate the plugin

### Manual Installation
1. Download the plugin ZIP file
2. Log in to your WordPress admin panel
3. Navigate to **Plugins → Add New → Upload Plugin**
4. Choose the ZIP file and click **Install Now**
5. Activate the plugin

### FTP Installation
1. Download and extract the plugin ZIP file
2. Upload the `wp-notice-manager` folder to `/wp-content/plugins/`
3. Activate the plugin through the WordPress admin panel

---

## 🎮 Usage

### Basic Usage
1. After activation, notices will automatically be captured
2. Click **"Notices (X)"** in the admin toolbar to view notices
3. Click on a notice to mark it as read
4. Dismiss notices you don't need

### Configuration
1. Navigate to **Settings → Notice Manager**
2. Configure notice type behaviors
3. Set user visibility preferences
4. Choose your preferred popup style
5. Save settings

---

## ⚙️ Settings

### Notice Type Settings
For each notice type, choose:
- **Show in popup & hide from dashboard** (recommended)
- **Hide completely** (suppress all notices of this type)
- **Do nothing** (leave notices in dashboard)

### User Visibility
- **Hide from all users** - Only you see notices
- **Hide from selected users** - Choose specific users
- **Hide from all except selected** - Whitelist approach

### Popup Style
- **Slide from Right** - Default, smooth animation
- **Modal Popup** - Centered with overlay
- **Slide Background Panel** - Full-height sidebar

---

## 🔧 Technical Details

### System Requirements
- WordPress 5.0 or higher
- PHP 7.2 or higher
- MySQL 5.6 or higher

### Architecture
- Object-oriented design
- PSR-4 autoloading
- SOLID principles
- WordPress coding standards
- Secure by design

### Performance
- Minimal database queries
- Lazy loading
- Transient caching
- No frontend impact

### Security
- Nonce verification
- Capability checks
- Input sanitization
- Output escaping
- SQL injection prevention
- XSS prevention
- CSRF prevention

---

## 🤝 Contributing

Contributions are welcome! Please:
1. Fork the repository
2. Create a feature branch
3. Follow WordPress coding standards
4. Write clear commit messages
5. Submit a pull request

---

## 📝 Changelog

### 1.0.0 (2026-03-05)
- Initial release
- Notice capture system
- Admin toolbar integration
- Popup interface
- Settings page
- User visibility controls

---

## 🆘 Support

For support, please:
1. Check the [documentation](https://example.com/docs)
2. Search [existing issues](https://github.com/yourname/wp-notice-manager/issues)
3. Create a [new issue](https://github.com/yourname/wp-notice-manager/issues/new)

---

## 📄 License

This plugin is licensed under the GPLv2 or later.

---

## 👨‍💻 Author

Created by **Your Name**  
Website: [https://example.com](https://example.com)  
GitHub: [@yourname](https://github.com/yourname)

