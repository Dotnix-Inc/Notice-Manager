<?php
/**
 * Settings Page Template
 *
 * @package WP_Notice_Manager
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="wrap wpnm-settings-wrap">
	<h1>
		<span class="dashicons dashicons-bell"></span>
		<?php echo esc_html( get_admin_page_title() ); ?>
	</h1>

	<p class="wpnm-description">
		<?php esc_html_e( 'Manage and organize WordPress admin notices by moving them from the cluttered dashboard into a centralized notice management system.', 'wp-notice-manager' ); ?>
	</p>

	<?php settings_errors(); ?>

	<form method="post" action="options.php">
		<?php
		settings_fields( \WP_Notice_Manager\Admin\Settings_Page::OPTION_GROUP );
		do_settings_sections( \WP_Notice_Manager\Admin\Settings_Page::PAGE_SLUG );
		submit_button();
		?>
	</form>

	<div class="wpnm-info-box">
		<h3><?php esc_html_e( 'How It Works', 'wp-notice-manager' ); ?></h3>
		<ol>
			<li><?php esc_html_e( 'Configure how each notice type should be handled above', 'wp-notice-manager' ); ?></li>
			<li><?php esc_html_e( 'Notices will be captured and stored based on your settings', 'wp-notice-manager' ); ?></li>
			<li><?php esc_html_e( 'Click "Notices" in the admin toolbar to view all captured notices', 'wp-notice-manager' ); ?></li>
			<li><?php esc_html_e( 'Mark notices as read or dismiss them from the popup', 'wp-notice-manager' ); ?></li>
		</ol>
	</div>

	<div class="wpnm-stats-box">
		<h3><?php esc_html_e( 'Statistics', 'wp-notice-manager' ); ?></h3>
		<?php
		$total_notices  = count( \WP_Notice_Manager\Notices\Notice_Storage::get_all() );
		$unread_notices = \WP_Notice_Manager\Notices\Notice_Storage::get_unread_count();
		?>
		<p>
			<strong><?php esc_html_e( 'Total Notices:', 'wp-notice-manager' ); ?></strong>
			<?php echo esc_html( $total_notices ); ?>
		</p>
		<p>
			<strong><?php esc_html_e( 'Unread Notices:', 'wp-notice-manager' ); ?></strong>
			<?php echo esc_html( $unread_notices ); ?>
		</p>
	</div>
</div>

