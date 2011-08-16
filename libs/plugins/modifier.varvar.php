<?php
/**
 *    VarVar - a Smarty modifier plugin to use variable variables
 *    Copyright (C) 2008 Rob la Lau
 *
 *    This program is free software: you can redistribute it and/or modify
 *    it under the terms of version 3 of the GNU General Public License
 *    as published by the Free Software Foundation.
 *
 *    This program is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    The GNU General Public License can be found at <http://www.gnu.org/licenses/>.
 */

/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */

/**
 * Smarty {varvar} modifier plugin
 *
 * Type:     modifier
 * Name:     varvar
 * Date:     2008-02-06
 * Purpose:  Use variable variables
 *
 * Input:
 *           - string (required)
 *
 * Returns:  string
 *
 * Assigns:  nothing
 *
 * Examples:
 *           {"cat_$nr"|varvar}
 *           {"tip.url_`$smarty.section.links.index`"|varvar}
 *
 * ChangeLog:
 *           - 20080206
 *             initial version (0.1)
 *
 * TODO:
 *           - array indexes in square brackets are untested ( $foo[2] )
 *           - object properties are untested                ( $foo->bar )
 *           - object methods are untested                   ( $foo->bar() )
 *           - config file variables are untested            ( #foo# )
 *
 * Credits:
 *           - U.Tews [http://www.phpinsider.com/smarty-forum/profile.php?mode=viewprofile&u=8456]
 *             suggested I'd make this a modifier instead of a function
 *
 * Feedback:
 *           is welcomed at rob@nerdstock.org
 *
 * @link http://nerdstock.org/smarty_varvar
 * @author Rob la Lau <rob@nerdstock.org>
 * @version 0.1
 *
 * @param array
 * @param Smarty
 * @return string
 */

function smarty_modifier_varvar($string) {
	global $smarty;
	if (empty($string)) {
		return;
	}
	$array = explode(".", $string);
	$var = array_shift($array);
	$val = $smarty->tpl_vars[$var];
	if (count($array) == 0) {
		return $val;
	}
	else {
		$idx = "['" . join("']['", $array) . "']";
		eval("\$return = \$val$idx;");
		return $return;
	}
}
?>