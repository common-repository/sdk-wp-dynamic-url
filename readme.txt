=== SDK WP DYNAMIC URL ===
Contributors: sdkwebmasters
Tags: sdk wp dynamic url,URL,dynamic url, site_url shortcode, shortcode, base_url(),site_url(), function.
Donate link:
Requires at least: 3.0
Tested up to: 5.0.1
Stable tag: 1.0.6
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Standard Development Kit WP Dynamic URL, Plugin allow you to add dynamic url instead of static site_url() function.

== Description ==

SDK WP DYNAMIC URL can help you to customzise the url without the hurdle of adding the static url. It automatically fetches the site_url() and create the URL based on parameters or without parameters.

It adds a settings page to "Dashboard"->"Settings"->"SDK WP DYNAMIC URL" where you can customize the settings but currently under development. It will be in future versions.

= Usage =

1. Download and extract `sdk-wp-dynamic-url.zip` to `wp-content/plugins/`
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Paste the shortcode in your posts or pages.

If you want only the site_url() in your posts, then use:-

<code>[sdk-site-url]</code>

You can leave the 'path' parameter as blank if you want only site_url().

For terminating URL's You can use it like. 

<code>[sdk-site-url path="PATH_OF_IMAGE"]</code>

Example Usage:-

<code>[sdk-site-url path="/assets/images/sdk.jpg"]</code>

The above shortcode will output.

<code>http://your_domain_name.com/assets/images/sdk.jpg</code>

For php files you can use this like.

<code><?php do_shortcode('[SHORTCODE_HERE]'); ?></code>

== Installation ==

1. Download and extract `sdk-wp-dynamic-url.zip` to `wp-content/plugins/`
2. Activate the plugin through the 'Plugins' menu in WordPress.




