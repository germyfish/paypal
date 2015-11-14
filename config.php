<?php
require __DIR__  . '/vendor/autoload.php';

$apiContext = new \PayPal\Rest\ApiContext(
	new \PayPal\Auth\OAuthTokenCredential(
		'ATtSzPolazbiZm0AvVz6B3ss2rUG3geZKZIypQwl_-8ARiADlb9T7Em8bEQKmxk5YDUwwH6nXn2ecpd6',
		'EEESYNr4GIlt-JT6cFvk6bfTmBfRuBtsGZ03DR-zpuiHTSLJrhLJ6nOd6Sm4bvu4BxTZLpufVZiDYJF_'
		//client followed by secret
	)
);
?>