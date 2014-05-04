<?php
/**
 * @author Greedi
 * @copyright 2012
 * @author Subcreative
 * @copyright 2014
 */
include('../core/wallet.php');

$round = $_POST['round'];

    $result = mysql_query("UPDATE round SET round = $round") 
    or die(mysql_error());
    
    header( 'Location: ../server.php' ) ;  
?>


