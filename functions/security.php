<?php

session_start();

function securityPage()
{

    print <<< PAGE

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Security</title>
</head>

<body class = "m-3">
	<h3>Are you a bot from the future coming to exterminate the human race?<br>
	 And would you like a cool nickname?</h3>
	<form method="POST">
		<input type="radio" name="option" value="YES"> Yes
		<input type="radio" name="option" value="NO" > No
		<input type="submit" name="submit">
	</form>
</body>
</html>

PAGE;

}


?>