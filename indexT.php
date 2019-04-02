<?php
session_id("session1");
session_start();
echo session_id();
$_SESSION["name"] = "1";

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: loginT.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

</head>
<body>

<h1> Logged successfully </h1>
<h2> Go to your terminal to encrypt your bank card No. if you wish</h2>
</body>
</html>