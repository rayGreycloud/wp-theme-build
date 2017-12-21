<?php

function r_activate_plugin() {
  // Check WP version
  if (version_compare(get_bloginfo('version'), '4.5', '<')) {
    wp_die(__('You must update WordPress to use this plugin', 'recipe'));
  }
  
  global $wpdb;
  
  $createSQL = "
    CREATE TABLE `" . $wpdb->prefix . "recipe_ratings` (
    	`ID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    	`recipe_id` BIGINT(20) UNSIGNED NOT NULL,
    	`rating` FLOAT(3,2) UNSIGNED NOT NULL,
    	`user_ip` VARCHAR(32) NOT NULL,
	     PRIMARY KEY (`ID`)
    )
    ENGINE=InnoDB " . $wpdb->get_charset_collate() . " AUTO_INCREMENT=1;";

    require_once( ABSPATH . '/wp-admin/includes/upgrade.php');
    dbDelta( $createSQL );
}
 ?>
