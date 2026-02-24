<?php
ob_start();
header('Content-Type: application/json');
error_reporting(0);
ini_set('display_errors', 0);
require_once("db_connect.php");
include_once 'functions.php';

$projectname = 'Saya Gold Avenue Penthouse';
$response = ['status' => 'error', 'message' => 'Something went wrong.'];

// Check if the POST query_nature is set and equal to 'modal'
if (isset($_POST['query_nature']) && $_POST['query_nature'] === "modal") {

    // Sanitize inputs
    $mname = get_safe_value($_POST['mname']);
    $memail = get_safe_value($_POST['memail']);
    $mmobile = get_safe_value($_POST['mmobile']);

    // Validation patterns
    $mobPattern = "/^[6-9][0-9]{9}$/";
    $namePattern = "/^[a-zA-Z ]*$/";

    // Validate name
    if (empty($mname)) {
        $response['message'] = "Please enter your name.";
        $response['field'] = "mname";
        echo json_encode($response); exit;
    } elseif (!preg_match($namePattern, $mname)) {
        $response['message'] = "Please provide a valid name.";
        $response['field'] = "mname";
        echo json_encode($response); exit;
    }

    // Validate email
    if (empty($memail)) {
        $response['message'] = "Please enter your email.";
        $response['field'] = "memail";
        echo json_encode($response); exit;
    } elseif (!filter_var($memail, FILTER_VALIDATE_EMAIL)) {
        $response['message'] = "Please enter a valid email address.";
        $response['field'] = "memail";
        echo json_encode($response); exit;
    }

    // Validate mobile
    if (empty($mmobile)) {
        $response['message'] = "Please enter your mobile number.";
        $response['field'] = "mmobile";
        echo json_encode($response); exit;
    } elseif (!preg_match($mobPattern, $mmobile)) {
        $response['message'] = "Please enter a valid mobile number.";
        $response['field'] = "mmobile";
        echo json_encode($response); exit;
    }

    // All validations passed — insert into DB
    try {
        $stmt = $pdo->prepare("INSERT INTO `form_leads` (`name`, `email`, `mobile`, `projectname`) VALUES (?, ?, ?, ?)");
        $success = $stmt->execute([$mname, $memail, $mmobile, $projectname]);

        if ($success) {
            $response['status'] = 'success';
            $response['message'] = 'Your enquiry has been submitted successfully.';
        } else {
            $response['message'] = 'Failed to submit your enquiry. Please try again.';
        }
    } catch (PDOException $e) {
        $response['message'] = 'Database error: ' . $e->getMessage();
    }

    echo json_encode($response);
    exit;


    /* ------- CRM APIs -------- */

    // // start 4QT
    // $ch = curl_init();
    // $pass = strval('wn9mxO76f34=');
    // $url = "https://gaursons.realeasy.in/WebCreate.aspx";
    // $uid = mt_rand(10, 10000);
    // $dataArray = [
    // 	'UID' => 'fourqt',
    // 	'PWD' => 'wn9mxO76f34=',
    // 	'Channel' => 'MS',
    // 	'Src' => 'Website',
    // 	'ISD' => 91,
    // 	'Mob' => $mmobile,
    // 	'Email' => $memail,
    // 	'name' => $mname,
    // 	'City' => '',
    // 	'Location' => '',
    // 	'Project' => '',
    // 	'Remark' => '',
    // 	// 'Utm_Source' => $utm_source,
    // 	// 'Remark' => $utm_medium.' '.$utm_campaign,
    // 	'url' => '',
    // 	'UniqueId' => $uid,
    // ];
    // $data = http_build_query($dataArray);
    // $getUrl = $url . "?" . $data;
    // $getUrl;
    // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    // curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    // curl_setopt($ch, CURLOPT_URL, $getUrl);
    // curl_setopt($ch, CURLOPT_TIMEOUT, 80);
    // $response = curl_exec($ch);
    // if (curl_error($ch)) {
    // 	echo 'Request Error:' . curl_error($ch);
    // } else {
    // 	$response;
    // }
    // curl_close($ch);
    // // End 4QT


    // $data = array("name" => "$name", "mobile" => "$mobile", "email" => "$email", "utm_source" => "$property_type", "utm_medium" => "$utm_medium", "utm_campaign" => "$enquiry", "projectname" => "$project","configuration" => "$configuration");
    // $string = http_build_query($data);
    // $ch = curl_init("https://www.chemistrealestate.in/gaur-mulberry-mansions.php");
    // curl_setopt($ch, CURLOPT_POST, true);
    // curl_setopt($ch, CURLOPT_POSTFIELDS, $string);
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // $ecresponse = curl_exec($ch);
    // curl_close($ch);

    // // End E API



    // if ($ecresponse == 'Successfully') {
    // 	echo "<script>window.location.href='thank-you.php';</script>";
    // }
}

// Check if the POST operation is set and equal to 'modal'
if (isset($_POST['query_nature']) && $_POST['query_nature'] === "slider") {

    // Sanitize inputs
    $name = get_safe_value($_POST['name']);
    $mobile = get_safe_value($_POST['mobile']);
    $email = get_safe_value($_POST['email']);

    // Validation patterns
    $mobPattern = "/^[6-9][0-9]{9}$/";
    $namePattern = "/^[a-zA-Z ]*$/";

    // Validate name
    if (empty($name)) {
        $response['message'] = "Please enter your name.";
        $response['field'] = "name";
        echo json_encode($response); exit;
    } elseif (!preg_match($namePattern, $name)) {
        $response['message'] = "Please provide a valid name.";
        $response['field'] = "name";
        echo json_encode($response); exit;
    }

    // Validate mobile
    if (empty($mobile)) {
        $response['message'] = "Please enter your mobile number.";
        $response['field'] = "mobile";
        echo json_encode($response); exit;
    } elseif (!preg_match($mobPattern, $mobile)) {
        $response['message'] = "Please enter a valid mobile number.";
        $response['field'] = "mobile";
        echo json_encode($response); exit;
    }

    // Validate email
    if (empty($email)) {
        $response['message'] = "Please enter your email.";
        $response['field'] = "email";
        echo json_encode($response); exit;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['message'] = "Please enter a valid email address.";
        $response['field'] = "email";
        echo json_encode($response); exit;
    }

    // All validations passed — insert into DB
    try {
        $stmt = $pdo->prepare("INSERT INTO `form_leads` (`name`, `email`, `mobile`, `projectname`) VALUES (?, ?, ?, ?)");
        $success = $stmt->execute([$name, $email, $mobile, $projectname]);

        if ($success) {
            $response['status'] = 'success';
            $response['message'] = 'Your enquiry has been submitted successfully.';
        } else {
            $response['message'] = 'Failed to submit your enquiry. Please try again.';
        }
    } catch (PDOException $e) {
        $response['message'] = 'Database error: ' . $e->getMessage();
    }

    echo json_encode($response);
    exit;
}


