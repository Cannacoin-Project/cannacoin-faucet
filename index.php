<?php
/**
 * @author Greedi
 * @copyright 2012
 * @author Subcreative
 * @copyright 2014
 */
include ('core/banned.php');
include ('core/wallet.php');
include ('templates/header.php');

?>
<div class="row">
  <div class="span10">
    <?php
    echo '<center><img src=\'http://cannacoin.cc/images/coinfaucet.png\'><h4>Payout will happen when there are atleast <strong>*25*</strong> submitted!<br></h4>
    <i>You can only enter once per round, if we detect the same IP or a proxy, you\'ll not be paid.</i>';
    ?>
         
    <style>
    .tdr{text-align:right;}
    </style>
    <center><br>
    <form action="submitted.php" method="post">
    <td class="tdr"><font color="green"><h2>Enter CCN Address:</h2></font></td>
    <td><input placeholder='Please enter your Cannacoin address' type="text" name="BTC"></td><td colspan="3" align="center">&nbsp;<input type="submit" value="Submit"></td><br>
    <br>
    <?php
    echo GetCaptcha($adscaptchaID, $adspubkey);
    ?> 
    
    </center>
  </div>
<?php
include ("templates/sidebar.php");
include ('templates/footer.php');
?>

