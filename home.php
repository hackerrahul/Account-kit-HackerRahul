<html>
	<head>
		<title>Account kit By Facebook - HackerRahul</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	<style>
    #verify{
        color:green;
        display:inline;
    }
</style>
	<body>
	<div class="w3-container w3-blue">
		<h1 class="w3-center">Account kit By Facebook</h1>
	</div><br>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- right sidebar hackerrahul.com -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3641343196914554"
     data-ad-slot="5783482020"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script><br>
<?php
    $code =  $_GET['access_token'];
    $verify_url = "https://graph.accountkit.com/v1.2/me/?access_token=".$code."";
	$verify = json_decode(file_get_contents($verify_url),true);
    $id = "".$verify['id']."";
    $country_code = "+".$verify['phone']['country_prefix']."";
    $no =  "".$verify['phone']['national_number']."<p id='verify'> verified</p>";
?>
    <div class="w3-content ">
        <h4>Id - <?= $id ?></h4>
        <h4>Country code - <?= $country_code ?></h4>
        <h4>Phone Number - <?= $no ?></h4>
        <br><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- right sidebar hackerrahul.com -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3641343196914554"
     data-ad-slot="5783482020"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></br>
        <h6><b>
            <?php
                echo "<pre>";
                print_r($verify);
                echo "</pre>";
            ?>
            </b>
        </h6>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- right sidebar hackerrahul.com -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3641343196914554"
     data-ad-slot="5783482020"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
        <h3>Go back <a href="index.php">Home</a></h3>
    </div>
    
</body>

</html>