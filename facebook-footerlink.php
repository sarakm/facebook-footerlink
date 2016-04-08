<?php
/**
* Plugin Name: Facebook Footer Link
* Description: Asd a Facebook profile link to the end of posts
* Version: 1.0
* Author: Sara Kuntumalla
*
**/

// Edit if Accessed Directly
if(!defined('ABSPATH')){
		exit;
}

// Load Scripts
require_once(plugin_dir_path(__FILE__).'/includes/facebook-footerlink-scripts.php');

//Load Content
require_once(plugin_dir_path(__FILE__).'/includes/facebook-footerlink-content.php');

if(is_admin()){

//Load Settings
require_once(plugin_dir_path(__FILE__).'/includes/facebook-footerlink-settings.php');

}
