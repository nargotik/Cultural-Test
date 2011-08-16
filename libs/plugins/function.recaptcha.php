<?php

/**
 * Build reCaptcha output HTML
 *
 * @param array $params
 * @param object $smarty
 * @return string
 */
function smarty_function_recaptcha($params, & $smarty)
{
   //Load reCaptcha library
   require_once (dirname(__FILE__).'/../recaptcha/recaptchalib.php');

   //Get any error message(s)
   $error = (!empty ($params['error']) ? $params['error'] : null);

   //Build and return reCaptcha HTML
   return recaptcha_get_html(RECAPTCHA_PUBLIC_KEY, $error);
}

?>