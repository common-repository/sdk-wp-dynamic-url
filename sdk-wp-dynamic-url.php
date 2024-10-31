<?php
if ( ! defined( 'ABSPATH' ) ) exit('We know what you are trying.'); // Exit

/**
 * 
 * Plugin Name: SDK WP Dynamic URL
 * Plugin URI: https://wordpress.org/plugins/sdk-wp-dynamic-url/
 * Description: Dynamic URL, Plugin allow you to add dynamic URL instead of static <code>site_url()</code> function.
 * Author: Shiv Kumar Sharma
 * Version: 1.0.6
 * Author URI: https://profiles.wordpress.org/sdkwebmasters
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * 
 */
 
 /**
  * Dependency on Core Class
  */
 
require_once __DIR__ .'/sdk-wp-core.php';

/**
 * Main Plugin class library.
 */
 
class SDK_WP_DYNAMIC_URL extends SDK_WP_CORE
{
    public function __construct()
    {
        $this->sdkInit();
    }
    /**
     * Main Plugin name
     */
    public $pluginName = "sdk_wp_dynamic_url";
    
    /**
     * 
     */
     private $shortcode = 'sdk-site-url';
    
    /**
     * Plugin Initialize
     */
    public function sdkInit()
    {
        $this->sdkActivate(__FILE__,[$this,$this->pluginName.'_activate']);
        $this->sdkDeactivate(__FILE__,[$this,$this->pluginName.'_deactivate']);
        $this->sdkOptions = $this->sdkGetOptions();
        $this->sdkAddAction('init',[$this,$this->pluginName.'_shortcode']);
        $this->sdkAddAction('admin_menu',[$this,$this->pluginName.'_admin']);
      //  $this->sdkAddFilter('plugin_action_links',[$this,$this->pluginName.'_settings_links'],10,2);
    }
     
     /**
      * Basic function for dynamic URL
      */
      
      function sdk_wp_dynamic_url_generate_url($attrs = '')
      {
          $a = shortcode_atts([
              'path'=>'',
              ],$attrs);
           $u = get_site_url();
        return $u.$a['path'];
      }
      
    /**
     * Activate the plugin 
     * Nothing to do here...
     */
     
     public function sdk_wp_dynamic_url_activate()
     {
         /**
         * add func
         */
        $sdkOptions = [];
        $this->sdkAddOption($sdkOptions);
         /**
         * add func end
         */
     }
     
     /**
      * Add shortcode to wp. 
      */
     
    function sdk_wp_dynamic_url_shortcode(){
        add_shortcode($this->shortcode, [$this,$this->pluginName.'_generate_url']);
    }
    
    /**
     * Deactivate the plugin.
     * Delete option from DB for same.
     */
     
     public function sdk_wp_dynamic_url_deactivate()
     {
         $this->sdkDeleteOption();
     }
    
    /**
     * Add admin Menu page here.
     **/
     
    public function sdk_wp_dynamic_url_admin()
    {
       add_options_page('SDK WP Dynamic URL Options', 'SDK URL OPTIONS','manage_options', __FILE__, array( $this, $this->pluginName.'_page')); 
    }
    
    /**
     * Add page here from plugin_directory
     */
     
    public function sdk_wp_dynamic_url_page()
    {
        require_once __DIR__ .DIRECTORY_SEPARATOR.$this->pluginName.'_admin.php';
    }
        
}
new SDK_WP_DYNAMIC_URL();