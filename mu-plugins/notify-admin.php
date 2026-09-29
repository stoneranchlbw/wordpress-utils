<?php
/**
 * Plugin Name: Auto-Update Admin Notifications
 * Description: Enables WordPress debug notification emails for background automatic update results.
 * Version: 1.0.0
 * License: GPL-3.0-or-later
 */

// Block direct file access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enable automatic update debug emails on stable WordPress releases as well
 * as development versions. WordPress handles the recipients and message.
 */
add_filter( 'automatic_updates_send_debug_email', '__return_true' );
