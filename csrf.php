<?php 
session_start();

function csrf($post, $input) {
	if (isset($_POST[$post])) {
		if (!isset($_POST[$input]) || $_SESSION["csrftoken"] != $_POST[$input]) {
			return 0;
		} else {
			$_SESSION["csrftoken"] = md5(uniqid(rand(00000, 99999)));
			return 1;
		}
	}
}

if (!isset($_SESSION["csrftoken"])) {
	$_SESSION["csrftoken"] = md5(uniqid(rand(00000, 99999)));
}

?>