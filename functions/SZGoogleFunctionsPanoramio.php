<?php

/**
 * Definition of the PHP functions that can be called directly 
 * by a theme or a plugin for customizations without use shortcode
 *
 * @package SZGoogle
 * @subpackage Functions
 * @author Massimo Della Rovere
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

if (!defined('SZ_PLUGIN_GOOGLE') or !SZ_PLUGIN_GOOGLE) die();

// Definition of the call wrapper functions for modules
// With these features, you can customize themes and other plugins

if (!function_exists('szgoogle_panoramio_get_code')) {
	function szgoogle_panoramio_get_code($options=array()) {
		if (!$object = new SZGoogleActionPanoramio()) return false;
			else return $object->getHTMLCode($options);
	}
}