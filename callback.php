<?php
	$code = $_GET['code'];
	$url = "https://graph.accountkit.com/v1.2/access_token?grant_type=authorization_code&code=".$code."&access_token=AA|YOUR_FACEBOOK_APP_ID|ACCOUNT_KIT_APP_SECRET";

	$get = json_decode(file_get_contents($url),true);
		header('Location:home.php?access_token='.$get['access_token'].'');
	
	
	
	
	
?>