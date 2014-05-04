<?php
/*
Plugin Name: Enable Contributors Upload File
Plugin URI: https://github.com/ShinichiNishikawa/
Description: This plugin enables Contributors role to upload files.
Author: Shinichi Nishikawa
Version: 0.0
Author URI: http://nskw-style.com
*/

// add Capability on activation
register_activation_hook( __FILE__, 'ecuf_activate' );
function ecuf_activate() {

	$role = get_role( 'contributor' );
	$role->add_cap( 'upload_files' );
	
}

// remove Capability on deactivation
register_deactivation_hook( __FILE__, 'ecuf_deactivate' );
function ecuf_deactivate() {

	$role = get_role( 'contributor' );
	$role->remove_cap( 'upload_files' );

}
