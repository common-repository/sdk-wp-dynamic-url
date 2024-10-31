<?php
if ( ! defined( 'ABSPATH' ) ) exit('We know what you are trying.'); // Exit

class SDK_WP_CORE
{
    /**
     * Temp. Data holder.
     */
	 
	private $sdkOptions = [];
	
    /**
     * Base core naming.
     */
	 
     protected $pluginName = 'sdk_plugins_core_options';
	 
     /**
      * Kit Core Version
      */
	  
      private $sdkCoreVersion = '0.0.3';
	  
    /**
     * 
	 * Add option core_wp_hook.
	 *
     * @param array
     * @return int|bool
     * 
     */
	 
    public function sdkAddOption($sdkOptions = [])
    {
       return add_option($this->pluginName.'_options',$sdkOptions);
    }
	
    /**
     * Delete option core_wp_hook.
	 * 
	 * @param None.
     * @return int|bool
     */
	 
    public function sdkDeleteOption()
    {
       return delete_option($this->pluginName.'_options');
    }
	
    /**
     * 
     * Get option core_wp_hook.
	 * 
	 * @access protected
     * @return data if_exist.
     * 
     */
	 
    protected function sdkGetOptions()
    {
        return get_option($this->pluginName.'_options');
    }
	
    /**
     * Unused method
     * 
     */
	 
     public function sdkSetupVars()
     {
         
     }
	 
     /**
      * Add filter to the core_wp_hook.
	  *
	  * @access public|default
	  * @param 1 string $filterName name of the filter eg: plugin_action_links
      * @param 2 array must be a valid callback function.
      * @param 3 int must be between 1-10 valid priority.
      * @param 4 int no of arguments.
      * @return int|bool 
      * 
      */
	  
      public function sdkAddFilter($filterName = '',$functionToCall = [],$priority = 10,$args = 1)
      {
          return add_filter($filterName,$functionToCall,$priority,$args);
      }
	  
     /**
      * Add filter to the core_wp_hook.
	  *
	  * @access public|default
	  * @param 1 string $actionName name of the filter eg: init, admin_menu, etc.
      * @param 2 array must be a valid callback function.
      * @param 3 int must be between 1-10 valid priority.
      * @param 4 int no of arguments.
      * @return int|bool 
      * 
      */
	  
      public function sdkAddAction($actionName = '',$functionToCall = [],$priority = 10,$args = 1)
      {
          return add_action($actionName,$functionToCall,$priority,$args);
      }
	  
      /**
       * Activate the plugin.
       * @param 1 string path of the activator.
       * @param 2 array must be a valid callback function.
	   * @return int|bool
       */
	   
       public function sdkActivate($path = '',$activator = [])
       {
          return register_activation_hook($path,$activator);
       }
	   
      /**
       * Deactivate the plugin
       * @param 1 string path to deactivator.
	   * @param 2 array must be a valid callback function.
       * return int|bool 
       */
	   
       public function sdkDeactivate($path = '',$activator = [])
       {
          return register_deactivation_hook($path,$activator);
       }
}

