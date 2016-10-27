<?php
/**
 * Plugin Name: Developer-Plugin
 * Plugin URI: http://it.skilltouch.net
 * Description: This plugin for custom functional work for this project. Don't Deactivate or Delete this plugin. It may break website or some pages.
 * Version: 1.0.0
 * Author: Mahammad Jan-E-Alam
 * Author URI: http://www.janealam.com
 * License: GPL2
 */

 function remove_footer_admin () {

 echo 'Design and Developed by <a href="http://skilltouch.net" target="_blank"><b>Skill Touch</b></a> | Developer	<a href="http://www.janealam.com" target="_blank"><b>Mahammad Jan-E-Alam</b></a>';
}

add_filter('admin_footer_text', 'remove_footer_admin');
