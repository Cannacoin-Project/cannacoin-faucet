<?php
/**
 * @author Greedi
 * @copyright 2012
 * @author Subcreative
 * @copyright 2014
 */
include('../core/wallet.php');

$roundltc = $_POST['roundltc'];

    $result = mysql_query("UPDATE roundltc SET roundltc = $roundltc") 
    or die(mysql_error());
    
    header( 'Location: ../server.php' ) ;  
?>


