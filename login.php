<?php

require_once('database.php');
require_once('global.php');
require_once('browser.php');
if(!IsAlreadyEstablished($mysqli)) {
	header('Location: setup.php');
	exit();
}


session_start();
$info = "";
if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username']; $password = $_POST['password'];
	if (correctCredentials($username, $password)) {
		$_SESSION['username'] = $username;
		$_SESSION['logintype'] = $username;
		header('Location: index.php');
	} else {
		$info = "Invalid username or password.";
	}
} elseif (isset($_GET['logout']) || isset($_POST['logout'])) {
	session_unset();
	session_destroy();
	$info = "Successfully logged out.";
}

if (isset($_POST['newpassword'])) {
	$newpassword = "";
	if ($_POST['newpassword'] != "")
		$newpassword = password_hash($_POST['newpassword'], PASSWORD_DEFAULT);
	$username = $_POST['username'];
	$valid = true;
	require_once('database.php');
	if ($username == 1)
		$sql = "UPDATE setting SET value = ? WHERE identifier = 'password_user'";
	elseif ($username == 2)
		$sql = "UPDATE setting SET value = ? WHERE identifier = 'password_remoteplayer'";
	elseif ($username == 3)
		$sql = "UPDATE setting SET value = ? WHERE identifier = 'password_voter'";
	else
		$valid = false;
	$statement = $mysqli->prepare($sql);
	$statement->bind_param('s', $newpassword);
	$statement->execute();
	$info = "Password changed.";
}

function correctCredentials($username, $password) {
	require('database.php');
	if ($username == 1)
		$sql = "SELECT * FROM setting WHERE identifier = 'password_user' LIMIT 1";
	elseif ($username == 2)
		$sql = "SELECT * FROM setting WHERE identifier = 'password_remoteplayer' LIMIT 1";
	elseif ($username == 3)
		$sql = "SELECT * FROM setting WHERE identifier = 'password_voter' LIMIT 1";
	else
		return false;
	$statement = $mysqli->prepare($sql);
	$statement->execute();
	$result = $statement->get_result();
	while($row = $result->fetch_object()) {
		if($row->value == "" && $password == "")
			return true;
		elseif(password_verify($password, $row->value))
			return true;
	}
	return false;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Audio Server :: Public mp3Player - Login</title>
	<meta charset="utf-8"/>
	<script type="text/javascript" src="js/global.js"></script>
	<link href="css/global.css" rel="stylesheet">
	<link href="css/login.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat+Subrayada|Open+Sans+Condensed:300" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimal-ui">
	<link rel="icon" type="image/png" href="img/mp3player.png"><!-- tab & bookmarks icon -->
	<link rel="apple-touch-icon" href="img/mp3player.png"><!-- home shortcut icon apple -->
	<link rel="shortcut icon" href="img/mp3player.png"><!-- home shortcut icon android -->
	<link rel="apple-touch-startup-image" href="img/mp3player.png"><!-- splash screen -->
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-title" content="Audio Server - Public mp3Player"><!-- home shortcut title apple -->
</head>
<body>
	<section class="masthead">
		<video class="masthead-video" autoplay loop muted poster="assets/images/poster.jpg">
		<!--	<source src="assets/videos/dreamscapes.mp4" type="video/mp4"> -->
		<source src="assets/videos/gramofon.mp4" type="video/mp4">
			<source src="assets/videos/dreamscapes.webm" type="video/webm">
		</video>
		<div class="masthead-overlay"></div>
		
	<div id="loginlogocontainer">
		<img id="loginlogo" src="img/saw.svg"></img>
	</div>
	<div id="logincontainer">
		<?php if(!isset($_SESSION['username'])) { ?>
		<form method="POST" action="login.php">
			<h1>mp3Player</h1>
			<h2>audio server</h2>
			<div><?php echo $info; ?></div>

			<?php if(getBrowser1() != "InternetExplorer") { ?>
			<div id="username" class="inputwithimg">
				<select name="username" autofocus="true" title="select login role">
					<optgroup label="log in as...">
						<option value='1'>Local Player</option>
						<option value='2'>Remote Player</option>
						<option value='3'>PSParty XMode</option>
					</optgroup>
				</select>
				<img src="img/username.svg">
			</div>
			<div id="password" class="inputwithimg">
				<input type="password" name="password" title="enter password"><img src="img/password.svg">
			</div>
			<span id="by">Audio Server &copy; Piramide Studio</span>
			<input type="submit" value="Login">
			<?php } else { ?>
				<div>IE is not supportet<br>and we're not sorry 'bout that.</div>
			<?php } ?>
		</form>
		<?php } else { ?>
		<form method="POST" action="login.php">
			<h1>mp3Player</h1>
			<h2>audio server</h2>
			<div><?php echo $info; ?></div>

			<?php if(isset($_GET['changepassword']) && $_GET['changepassword'] == 1) { ?>
			<div id="username" class="inputwithimg">
				<select name="username" autofocus="true" title="select login role">
					<optgroup label="log in as...">
						<option value='1'>Local Player</option>
						<option value='2'>Remote Player</option>
						<option value='3'>PSParty XMode</option>
					</optgroup>
				</select>
				<img src="img/username.svg">
			</div>
			<div id="password" class="inputwithimg">
				<input type="password" name="newpassword" title="enter a new password"><img src="img/password.svg">
			</div>
			<span id="by">Audio Server &copy; Piramide Studio</span>
			<input type="submit" value="Change password">
			<?php } else { ?>
			<input type="hidden" name="logout" value="1"></input>
			<span id="by">Audio Server &copy; Piramide Studio</span>
			<input type="submit" value="Logout">
			<?php } ?>
		</form>
		<?php } ?>
	</div>

</section>
	<script src="assets/scripts/jquery.min.js"></script>
	<script src="assets/scripts/covervid.js"></script>
	<script src="assets/scripts/scripts.js"></script>

	<script type="text/javascript">
		// If using jQuery
			// $('.masthead-video').coverVid(1920, 1080);
		// If not using jQuery (Native Javascript)
			coverVid(document.querySelector('.masthead-video'), 640, 360);
	</script>
	
</body>
</html>
