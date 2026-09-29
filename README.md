# wordpress-utils
WordPress website tools and scripts

## Auto-Update Admin Notifications

[`mu-plugins/notify-admin.php`](mu-plugins/notify-admin.php) enables WordPress's
built-in debug emails for background automatic update results, including on
stable releases. It uses the
[`automatic_updates_send_debug_email`](https://developer.wordpress.org/reference/hooks/automatic_updates_send_debug_email/)
filter. WordPress determines the recipients and message; no site-specific
configuration or credentials are included.

### Installation

1. Create `wp-content/mu-plugins/` if it does not exist.
2. Copy `notify-admin.php` directly into that directory.
3. Check **Plugins → Must-Use** in the WordPress dashboard. No activation is needed.

Remove the file to disable it.

### Behavior and limitations

The plugin enables debug reporting; it does not enable or schedule automatic
updates. WordPress sends this report when its background updater has recorded
update results and reaches the notification step. It does not guarantee a message
for every aborted run, fatal error, or check with no updates. Manual updates do
not trigger this report, and delivery depends on the site's mail configuration.
Other code can override the filter or change notification recipients.

## License

GPL-3.0-or-later. See [LICENSE](LICENSE).
