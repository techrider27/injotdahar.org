<?php
include "connection.php";
date_default_timezone_set('Asia/Kolkata');

function test_input($data)
{
	$data = trim($data);
	$data = htmlspecialchars($data);
	return $data;
}

if (isset($_POST['name'])) {
	$name = test_input($_POST['name']);
	$email = test_input($_POST['email']);
	$mobile = test_input($_POST['mobile']);
	$message = test_input($_POST['message']);

	// if (preg_match("/^[6-9][0-9]{9}$/", $mobile) <= 0) {
	// 	$_SESSION["error"] = "Enter only 10 digit Number";
	// 	echo ("<script>window.alert('Invalid Mobile Number'); history.back();</script>");
	// 	exit();
	// }

	$sqlChk = "SELECT * FROM `contact_form` where mobile = ?";
	$stmt = $con->prepare($sqlChk);
	$stmt->bindParam(1, $mobile);
	$stmt->execute();
	$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
	foreach ($res as $value) {
		$date = explode(" ", $value['createAt']);
		$temp = $date[0] . " " . $date[1] . " " . $date[2];
	}
	$temp_date = date('d M Y');
	if ($temp == $temp_date) {
		header("Location:../success.php?msg=already");
		exit();
	}

	$i = 1;
	$createAt = date('d M Y h:i A');
	$sql = "INSERT INTO `contact_form`(`name`, `email`, `mobile`, `message`, `createAt`) VALUES (?,?,?,?,?)";
	$stmt = $con->prepare($sql);
	$stmt->bindParam($i++, $name);
	$stmt->bindParam($i++, $email);
	$stmt->bindParam($i++, $mobile);
	$stmt->bindParam($i++, $message);
	$stmt->bindParam($i++, $createAt);

	if ($stmt->execute()) {
		header("Location:../thank-you.php");
		exit();
	} else {
		echo ("<script>window.alert('Try again'); history.back();</script>");
		exit();
	}
} else {
	header("Location:../index.php");
	exit();
}
