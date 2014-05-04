# Cannnacoin/Altcoin faucet
![To the moon!](images/cannacoin-coin.png)

INSTALL:
Download project & unzip to your web server root directory (ie. www) 

### Edit config.php 
	- don_faucet: CannaCoind address label used for donations/payouts.
	- btclogin:   RPC User/Pass settings
	- sqllogin:   Database user/pass settings

### Add remote IP to access admin/server panel 
 	- Edit header.php to include remote IP for Server/Admin panel access (Line 96)
	- Edit server.php to accept remote IP for Server/Admin panel access (Line 21)

### Database
Create SQL user matching config and grant full permissions to faucet database:
	- CREATE USER 'username'@'localhost' IDENTIFIED BY 'mypass';
	- GRANT ALL ON dbname.* TO 'user'@'localhost';

#### Import faucet.sql to your database:
Change to "core" directory
	- mysql -u user -p database < faucet.sql

### Notes:
Some will maybe have to create the faucet donation account within CannaCoind
(The account must use the label set in the config.php ie. FaucetDonations)

Donate: 
CCN: CWVUagZxizcmF7QcKvF3ynfW4hU4tdKUhp
BTC: 1PqmdGtUTdasS19KwBTL2R7xgYEyJrtdhd
