<?php
date_default_timezone_set('Asia/Calcutta');
$date = date("Y-m-d H:i:s"); // time in India
$cdate = date("Y-m-d"); // time in India
error_reporting(0);
session_start();
include_once "dbconnection.php";

if (isset($_POST['sayaregistration']) == "active") {
	$name = mysqli_real_escape_string($link, $_POST['name']);
	$mobile = mysqli_real_escape_string($link, $_POST['mobile']);
	$email = mysqli_real_escape_string($link, $_POST['email']);
	$projects = mysqli_real_escape_string($link, $_POST['projects']);


	$nam = "/^[a-zA-Z ]*$/";
	$mob = "/^[6-9][0-9]{9}$/";


	if (empty($name)) {
		echo $errors = "Please Enter Name";
		echo "<script>$('#name').focus(); $('#name').addClass('is-invalid'); </script>";
	} else if (!preg_match($nam, $name)) {
		echo $error = "Please Provide Valid Name";
		echo "<script>$('#name').focus(); $('#name').addClass('is-invalid'); </script>";
	} else if (empty($mobile)) {
		echo $errors = "Please Enter Your Phone Number";
		echo "<script>$('#name').addClass('is-valid'); </script>";
		echo "<script>$('#mobile').focus();$('#mobile').addClass('is-invalid');</script>";
	} else if (!preg_match($mob, $mobile)) {
		echo $error = 'Please Enter Valid Phone Number';
		echo "<script>$('#mobile').focus();$('#mobile').addClass('is-invalid');</script>";
	} else if (empty($email)) {
		echo $error = 'Please Enter Email';
		echo "<script>$('#mobile').addClass('is-valid'); </script>";
		echo "<script>$('#email').focus(); $('#email').addClass('is-invalid');</script>";
	} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo $error = 'Please Enter Valid Email Id';
		echo "<script>$('#email').focus(); $('#email').addClass('is-invalid');</script>";
	} else if (empty($projects)) {
		echo $error = 'Please Select Projct';
		echo "<script>$('#email').addClass('is-valid'); </script>";
		echo "<script>$('#projects').focus(); $('#projects').addClass('is-invalid text-dark');</script>";
	} else if (empty($_POST['source'])) {
		echo $error = 'Please Select Your Source';
		echo "<script>$('#source').addClass('is-valid'); </script>";
		echo "<script>$('#source').focus(); $('#source').addClass('is-invalid');</script>";
	} else if (!empty($_POST['source']) && empty($_POST['empname']) && $_POST['source'] == 'Direct') {
		echo $error = 'Please Enter Employee Name';
		echo "<script>$('#empname').addClass('is-valid'); </script>";
		echo "<script>$('#empname').focus(); $('#empname').addClass('is-invalid');</script>";
	} else if (!empty($_POST['source']) && empty($_POST['channame']) && $_POST['source'] == 'Channel Partner') {
		echo $error = 'Please Select Your Channel Partner';
		echo "<script>$('#empname').addClass('is-valid'); </script>";
		echo "<script>$('#channame').focus(); $('#channame').addClass('is-invalid text-dark');</script>";
	} else if (!empty($_POST['source']) && empty($_POST['exicutive']) && $_POST['source'] == 'Channel Partner') {
		echo $error = 'Please Enter Exicutive Name';
		echo "<script>$('#channame').addClass('is-valid'); </script>";
		echo "<script>$('#exicutive').focus(); $('#exicutive').addClass('is-invalid');</script>";
	} else if (!preg_match($nam, $_POST['exicutive']) && !empty($_POST['source']) && $_POST['source'] == 'Channel Partner') {
		echo $error = "Please Enter Valid Exicutive Name";
		echo "<script>$('#exicutive').focus(); $('#exicutive').addClass('is-invalid'); </script>";
	} else {
		$source = mysqli_real_escape_string($link, $_POST['source']);
		$empname = mysqli_real_escape_string($link, $_POST['empname']);
		$channame = mysqli_real_escape_string($link, $_POST['channame']);
		$exicutive = mysqli_real_escape_string($link, $_POST['exicutive']);

		$checkquery = mysqli_query($link, "SELECT * FROM `r_desk` WHERE `mobile`='$mobile' AND `projects`='$projects' AND `created` LIKE '%$cdate%'") or die('Something went wrong in server side. Please try again after some time');
		$checkrow = mysqli_num_rows($checkquery);
		if ($checkrow < 1) {

			$query = mysqli_query($link, "INSERT INTO `r_desk`(`name`, `email`, `mobile`, `projects`, `source`, `employee`, `partner`, `exicutive`, `created`) VALUES ('$name','$email','$mobile','$projects','$source','$empname','$channame','$exicutive','$date')") or die('Something went wrong in query');

			$message = '
				<table width="851" border="1" cellpadding="4" cellspacing="0" bordercolor="#DBDBDB">
					<tr>
						<td width="163" bgcolor="#2c3d2d" style="font-family:Trebuchet MS, Calibri, sans-serif; color:#FFF; font-size:14px">Subject</td>
						<td width="163" bgcolor="#2c3d2d"  style="font-family:Calibri, sans-serif; color:#FFF; font-size:14px">Saya Registration Desk</td>
					</tr>
					<tr  style="font-family:Trebuchet MS, Calibri, sans-serif; color:#000; font-size:14px">
						<td bgcolor="#2c3d2d" style="color:#FFF;">First Name</td>
						<td>' . $name . '</td>
					</tr>
					<tr  style="font-family:Trebuchet MS, Calibri, sans-serif; color:#000; font-size:14px">
						<td bgcolor="#2c3d2d" style="color:#FFF;">Mobile No.</td>
						<td>' . $mobile . '</td>
					</tr>
					<tr  style="font-family:Trebuchet MS, Calibri, sans-serif; color:#000; font-size:14px">
						<td bgcolor="#2c3d2d" style="color:#FFF;">Email</td>
						<td>' . $email . '</td>
					</tr>
					<tr  style="font-family:Trebuchet MS, Calibri, sans-serif; color:#000; font-size:14px">
						<td bgcolor="#2c3d2d" style="color:#FFF;">Budget</td>
						<td>' . $projects . '</td>
					</tr>
					<tr  style="font-family:Trebuchet MS, Calibri, sans-serif; color:#000; font-size:14px">
						<td bgcolor="#2c3d2d" style="color:#FFF;">Source</td>
						<td>' . $source . '</td>
					</tr>
					<tr  style="font-family:Trebuchet MS, Calibri, sans-serif; color:#000; font-size:14px">
						<td bgcolor="#2c3d2d" style="color:#FFF;">Employee Name</td>
						<td>' . $empname . '</td>
					</tr>
					<tr  style="font-family:Trebuchet MS, Calibri, sans-serif; color:#000; font-size:14px">
						<td bgcolor="#2c3d2d" style="color:#FFF;">Channel Partner</td>
						<td>' . $channame . '</td>
					</tr>
					<tr  style="font-family:Trebuchet MS, Calibri, sans-serif; color:#000; font-size:14px">
						<td bgcolor="#2c3d2d" style="color:#FFF;">Exicutive Name</td>
						<td>' . $exicutive . '</td>
					</tr>
				</table>';

			$to = implode(", ", [
				"RAJKAMAL@SAYAHOMES.IN",
			]);


			$subject = "Saya Home Registration Desk";
			$headers = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: ' . $email . ' <noreply@ecorp.co.in> ' . "\n";
			$sendmail = mail($to, $subject, $message, $headers);
			if ($sendmail == true) {
				echo "success";
			}
		}else{
			echo "You've already made a query. A project enquiry can be made in a single day.";
		}
	}
}
