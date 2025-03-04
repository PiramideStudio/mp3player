<?php

// ------------------------------
// flags
const MEDIAROOT = "music";
const ALLOW_DOWNLOADS = true;
const LOG_DOWNLOADS = true;
// ------------------------------

function is_sub_dir($path, $parent_folder) {
	#echo "$path | ".realpath($path)."<br>"; // debug
	#echo "$parent_folder | ".realpath($parent_folder)."<br>"; // debug
	$path = realpath($path);
	$parent_folder = realpath($parent_folder);
	return (startsWith($path, $parent_folder));
}

$CVERSION = trim(file_get_contents("CURRENTVERSION.txt"));
$NVERSION = "";
function isUpdateAvail() {
	global $CVERSION;
	global $NVERSION;
	$update = false;

	if((!isset($_SESSION['last_update_check']))
	|| (!isset($_SESSION['last_update_result']))
	|| (time() - $_SESSION['last_update_check'] > 3600)) {
		$NVERSION = trim(file_get_contents("https://github.com/BorisPerc/mp3player/blob/main/CURRENTVERSION.txt"));
		$update = version_compare($CVERSION, $NVERSION, "<");
		$_SESSION['last_update_check'] = time();
		$_SESSION['last_update_result'] = $update;
	} else {
		$update = $_SESSION['last_update_result'];
	}

	return $update;
}

function clearStoredResults($mysqli){
	do {
		if ($res = $mysqli->store_result()) {
			$res->free();
		}
	} while ($mysqli->more_results() && $mysqli->next_result());
}

function IsAlreadyEstablished($mysqli) {
	$statement = $mysqli->prepare("SHOW TABLES LIKE 'setting';");
	$statement->execute();
	$statement->store_result();
	return $statement->num_rows > 0;
}

function isAudioFile($filename) {
	$mime_types = array(
		'mp3' => 'audio/mpeg',
		'mp4' => 'audio/mp4',
		'm4a' => 'audio/mp4',
		'ogg' => 'audio/ogg',
		'm4v' => 'audio/mp4',
	);
	$tmp = explode('.', $filename);
	$ext = strtolower(end($tmp));
	if (array_key_exists($ext, $mime_types))
		return true;
	else
		return false;
}

function shortText($longtext) {
	$maxlength = 21;
	return strlen($longtext) > $maxlength ? substr($longtext,0,$maxlength)."..." : $longtext;
}

function startsWith($haystack, $needle) {
	$length = strlen($needle);
	return (substr($haystack, 0, $length) === $needle);
}

function endsWith($haystack, $needle) {
	$length = strlen($needle);
	return $length === 0 || (substr($haystack, -$length) === $needle);
}

?>
