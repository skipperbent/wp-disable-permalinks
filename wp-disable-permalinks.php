<?php
/*
Plugin name: Disables permalinks in Wordpress admin
Author: Simon Sessingø
Version: 1.0
Author URI: http://www.bonnierpublications.com
*/

add_action('admin_menu', 'removePermalinks', 999);

function removePermalinks() {
    remove_submenu_page( 'options-general.php', 'options-permalink.php' );
};