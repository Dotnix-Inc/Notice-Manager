/**
 * WP Notice Manager - Admin JavaScript
 *
 * @package WP_Notice_Manager
 */

(function($) {
	'use strict';

	/**
	 * Settings Page Handler
	 */
	const SettingsPage = {
		/**
		 * Initialize
		 */
		init: function() {
			this.bindEvents();
			this.toggleVisibilityUsers();
		},

		/**
		 * Bind events
		 */
		bindEvents: function() {
			// Toggle visibility users field based on mode
			$(document).on('change', '#wpnm-visibility-mode', function() {
				SettingsPage.toggleVisibilityUsers();
			});
		},

		/**
		 * Toggle visibility users field
		 */
		toggleVisibilityUsers: function() {
			const mode = $('#wpnm-visibility-mode').val();
			const $usersField = $('#wpnm-visibility-users').closest('tr');

			if (mode === 'hide-selected' || mode === 'show-selected') {
				$usersField.show();
			} else {
				$usersField.hide();
			}
		}
	};

	// Initialize on document ready
	$(document).ready(function() {
		SettingsPage.init();
	});

})(jQuery);

