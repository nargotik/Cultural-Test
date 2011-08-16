<?
/**
 * validate_criteria.isUnique.php
 *
 * @author Yi Tang
 * @package SmartyValidate plugins
 * @copyright 2005
 * @version 1.0
 */
/**
 * test if a value is unique in for a column in specific table
 *
 * @param string $value the value being tested
 * @param boolean $empty if field can be empty
 * @param array params validate parameter values
 * @param array formvars form var values
 */
function smarty_validate_criteria_isUnique($value, $empty, &$params, &$formvars) {
    if( strlen($value) != 0 )
    {
       //clean up $params
       $value = addslashes( ereg_replace("[^a-zA-Z0-9*_.-\']", '', $value) );
       $params['field2'] = addslashes( ereg_replace("[^a-zA-Z0-9*_.-\']", '', $params['field2']) );
       $params['field3'] = addslashes( ereg_replace("[^a-zA-Z0-9*_.-\']", '', $params['field3']) );
       $params['field4'] = addslashes( ereg_replace("[^a-zA-Z0-9*_.-\']", '', $params['field4']) );
       $params['field5'] = addslashes( ereg_replace("[^a-zA-Z0-9*_.-\']", '', $params['field5']) );
       //check on required $params
       if( !empty( $params['field2'] ) && !empty( $params['field3'] ) )
       {
          $sql = 'SELECT '.$params['field3'].' FROM '.$params['field2']
                .' WHERE '.$params['field3'].' = \''.$value.'\'';
         //check if a primary key column and value are supplied for self-exclusive checking
         if( !empty( $params['field4'] ) && !empty( $params['field5'] ) )
         {
            $sql .= ' AND '.$params['field4'].' != \''.$params['field5'].'\'';
         }
         //run the query
          if( false != ( $result = mysql_query($sql) ) )
         {
         return !mysql_num_rows($result);
         }
         else
         {
         return false;
         }
       }
       else
       {
          trigger_error('Missing table and field');
       return false;
       }
    }
    else
    {
    return $empty;
    }
}
?>