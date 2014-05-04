<?php
/**
 * @author Greedi
 * @copyright 2012
 * @author Subcreative
 * @copyright 2014
 */

include ('core/daily.php');
?>
<div class="span4"> <!-- This is the servsidebar, don't forget -_- -->

<?php
echo '
            <div style="margin-right: 20px;">
            <h3><center>Cannacoin statistics</center></h3>
            <table class=\'zebra-striped\'>
            <tr><td>Block count: </td><td>' . number_format($derp['blocks']) .
    '</td></tr>
            <tr><td>Difficulty: </td><td>' . $derp['difficulty'] . '</td></tr>
            </table>';
            ?>
            </div>
            <?php
echo '
            <div style="margin-right: 10px;">
            <h3><center>Faucet statistics</center></h3>
            <table class=\'zebra-striped\'>
                        <tr><td>Submitted This Round: </td><td>' . $rows2 . '</td></tr>
<tr><td>Current Payout: </td><td>' . $roundltc . ' CCN</td></tr> 
<tr><td>Current Round: </td><td>' . $round . ' CCN</td></tr>
            <tr><td>Total Payout: </td><td>' . $dailytotal . ' CCN</td></tr>
            <tr><td>Total Submitted: </td><td>' . $subrows . '</td></tr>
</table>';

?>
          </div>