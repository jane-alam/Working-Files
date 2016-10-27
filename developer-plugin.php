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

 echo 'Fueled by <a href="http://www.wordpress.org" target="_blank">WordPress</a> | Designed by <a href="http://www.uzzz.net" target="_blank">Uzzz Productions</a> | WordPress Tutorials: <a href="http://www.wpbeginner.com" target="_blank">WPBeginner</a></p>';

 }

 add_filter('admin_footer_text', 'remove_footer_admin');
