<?php
	$err=@$_GET['err'];
	$errdesc="";
	switch($err){
		case "404": $errdesc="couldn't find the requested file or location!"; break;
		case "403": $errdesc="you don't have appropriate permission for the requested file or location!";break;
		case "500": $errdesc="internal server error.";break;
		case "502": $errdesc="bad gateway";break;
		case "503": $errdesc="service temporarily unavailable!";break;
		case "504": $errdesc="timeout!";break;
		case "505": $errdesc="unsupported HTTP version!";break;
		case "507": $errdesc="not enough storage!";break;
		default: $errdesc="unknown error!";break;
	}
?>
<html lang="hu">
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>WebWinUI - Error</title>
		<meta charset="utf8">
	</head>
	<body>
		<span class="title">WebWinUI</span>
		<p>Egy váratlan hiba történt!</p>
		<p>The following error happened: <?php echo $errdesc; ?></p>
		<ul class="try">
			<li>Try visiting the file or location again.</li>
			<li>idk, change this string or whatever else you want</li>
		</ul>
		<a href="http://yourdomain.tld" class="pressanykey">Click here to get back to the homepage</a>
	</body> 
</html>