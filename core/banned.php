<?php
/**
 * @author Greedi
 * @copyright 2012
 * @author Subcreative
 * @copyright 2014
 */

$banlist = array("158.145.240.100");
$myip = $_SERVER['REMOTE_ADDR'];
if (in_array($myip, $banlist)) {
    exit("<center>Sorry, you have been banned!<br>
    #Cannacoin @ FreeNode</center>");
}
?>