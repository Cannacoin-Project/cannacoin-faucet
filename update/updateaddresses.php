<?php
/**
 * @author Greedi
 * @copyright 2012
 * @author Subcreative
 * @copyright 2014
 */
include('../core/wallet.php');

$dailytotal = $_POST['delete'];

    mysql_query("DELETE FROM dailyltc") 
    or die(mysql_error());
    
    header( 'Location: ../server.php' ) ;  
?>


