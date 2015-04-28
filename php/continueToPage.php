<?php
session_destroy();
//echo "Session has been destroyed<br/><br/>";
//if (session_status() == PHP_SESSION_NONE) {
//	echo "session is none <br/>";
//}
//if (session_status() == PHP_SESSION_ACTIVE) {
//	echo "session is active <br/>";
//}

ob_start();
session_start();

session_regenerate_id();

$_SESSION['sess_isEighteen'] = 0;
$isAllowed;
if (isset($_POST['isAllowed'])) {
	$isAllowed = $_POST['isAllowed'];
	echo "isAllowed " . $isAllowed . "<br/>";
	if ($isAllowed == 1) {
		echo "is allowed";
		$_SESSION['sess_isEighteen'] = 1;
	} else {
		echo "is not allowed";
		$_SESSION['sess_isEighteen'] = 0;
	}
} else {
	echo "your in the dot";
}

echo "<br/>Session: " . $_SESSION['sess_isEighteen'];

ob_flush();
//header("Location: ../drinker.php?link=home");
?>
<html>
	<head>
		<link rel="stylesheet" href="../css/bootstrap.min.css">

		<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="../css/main.css">

	</head>
	<body>
		<br/>
		<a class="btn btn-warning" href="../drinker.php?link=home">Go to home >></a>
	</body>
</html>
