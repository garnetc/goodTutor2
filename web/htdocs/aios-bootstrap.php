<?php
/**	
 * @version 1.0.2
 * WARNING: Please do not delete this file.
 * 
 * This will cause PHP to throw a fatal error and render your site unusable.
 * 
 * To safely delete this file, please check both your .user.ini file and your php.ini file and ensure this file is not set in the auto_prepend_file directive.
 * 
 * Please ask your web hosting provider if you need guidance with executing the aforementioned steps.
 */
// Previously set auto_prepend_file
if (file_exists('/var/www/errors/override.php')) {
	include_once('/var/www/errors/override.php');
}
$GLOBALS['aiowps_firewall_rules_path'] = __DIR__.'/wp-content/uploads/aios/firewall-rules/';

$GLOBALS['aiowps_firewall_data'] = array(
	'ABSPATH' => '/home/vol3_6/infinityfree.com/if0_37824156/htdocs/',
);


