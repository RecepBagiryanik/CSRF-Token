<?php 
include "csrf.php";
?>
<?php 
//Example
if (isset($_POST["send"])) {
	if (csrf("send","csrftoken") == 1) {
		echo "CSRF Token is correct";
	} else {
		echo "CSRF Token is incorrect";
	}
}
?>
<form action="" method="post">
	<input type="text" name="name">
	<input type="hidden" name="csrftoken" value="<?php echo $_SESSION["csrftoken"] ?>">
	<button name="send">Send</button>
</form>
