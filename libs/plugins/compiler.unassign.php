<?php
/**
 * Smarty {unassign} compiler function plugin
 *
 * File:     compiler.unassign.php<br>
 * Type:     compiler function<br>
 * Name:     unassign<br>
 * Purpose:  unassign a template variable or an item of an array.
 *
 * @link http://www.dav-muz.net/
 * @version 2.0
 * @copyright Copyright 2005-2006 by Muzzarelli Davide
 * @author Davide Muzzarelli <info@dav-muz.net>
 *
 * @param string containing var-attribute
 * @param Smarty_Compiler object
 * @return void|string
 */
function smarty_compiler_unassign($params, &$smarty) {
    $params = $smarty->_parse_attrs($params);

    if (!isSet($params['var'])) {
        $smarty->_syntax_error("unassign: missing 'var' parameter", E_USER_WARNING);
        return;
    }

    return "unset({$params['var']});";
}

?>