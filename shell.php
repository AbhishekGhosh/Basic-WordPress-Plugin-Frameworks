<?php

/**
 * Plugin Name: Shell
 * Plugin URI: https://thecustomizewindows.com/
 * Description: Shell plugin
 * Author: Abhishek Ghosh
 * Author URI: https://thecustomizewindows.com
 * Version: 2.0
 */
 
// add snippets here
// custom_plugin, custom plugin, custom are our special names

add_action('admin_menu', 'shell_plugin_setup_menu');
function shell_plugin_setup_menu(){
	add_menu_page( 'Shell Plugin Page', 'Shell Plugin', 'manage_options', 'shell-plugin', 'shell_init' );

}
function shell_init(){
	echo "<h1>Admin Function Plugin</h1>";

}


// php better not to close unless needed ?>
