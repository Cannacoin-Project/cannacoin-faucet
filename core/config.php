<?php
/**
 * @author Greedi
 * @copyright 2012
 * @author Subcreative
 * @copyright 2014
 */

// Cannacoind address label used for faucet donations
$don_faucet = "FaucetDonations";

// RPC Settings
$btclogin = array("username" => "user", 
				  "password" => "pass", 
				  "host" => "localhost", 
				  "port" => "7142");

// DB Settings enter dbname, username and password.
$sqlogin = array("host" => "localhost", 
				 "dbname" => "enterdbname", 
				 "username" => "user", 
				 "password" => "pass");

// sending settings ..
$minleft = 0.01; // minimum left on account
$minsend = 0.5; // minimum allowed to send at a time

// NOT IMPLEMENTED YET ...
$minfee = 0.1; // min. hard fee on all transactions
$feeperc = 0.5; // fee for outgoing transactions in percentage
$fee_account = "CSdaN6ajMpRaZvRqNdgrNBpHy17WuRKJUW"; // set to your own receiving address to recieve fees (This feature is not implemented yet so for now you don't need to change this)

// ADSCaptch Settings (Used from original Greedi branch, no need to change.)
$adscaptchaID = 3170;
$adspubkey = "d655966c-541e-44c8-9a7d-a4f48a3d51a3";
$adsprivkey = "484fa3ac-8fcb-470f-8ee4-a3a91568071c";

?>