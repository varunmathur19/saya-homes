<?php
ob_start();
header('Content-Type: application/json');

error_reporting(0);
ini_set('display_errors', 0);

require_once 'db_connect.php';
require_once 'functions.php';

$response = [
    'status'  => 'error',
    'message' => 'Something went wrong.'
];

function sendResponse($response)
{
    echo json_encode($response);
    exit;
}

// Common validation patterns
$mobPattern  = "/^[6-9][0-9]{9}$/";
$namePattern = "/^[a-zA-Z ]*$/";

// ---------------------------------------------------------------------
// MODAL ENQUIRY
// ---------------------------------------------------------------------
if (isset($_POST['query_nature']) && $_POST['query_nature'] === "modal") {

    // Sanitize inputs
    $mname     = get_safe_value($_POST['mname'] ?? '');
    $memail    = get_safe_value($_POST['memail'] ?? '');
    $mmobile   = get_safe_value($_POST['mmobile'] ?? '');
    $mquery    = get_safe_value($_POST['mquery'] ?? '');
    $mpagename = get_safe_value($_POST['mpagename'] ?? '');
    $msource   = get_safe_value($_POST['msource'] ?? '');

    // Validate name
    if (empty($mname)) {
        $response['message'] = "Please enter your name.";
        $response['field']   = "mname";
        sendResponse($response);
    } elseif (!preg_match($namePattern, $mname)) {
        $response['message'] = "Please provide a valid name.";
        $response['field']   = "mname";
        sendResponse($response);
    }

    // Validate email
    if (empty($memail)) {
        $response['message'] = "Please enter your email.";
        $response['field']   = "memail";
        sendResponse($response);
    } elseif (!filter_var($memail, FILTER_VALIDATE_EMAIL)) {
        $response['message'] = "Please enter a valid email address.";
        $response['field']   = "memail";
        sendResponse($response);
    }

    // Validate mobile
    if (empty($mmobile)) {
        $response['message'] = "Please enter your mobile number.";
        $response['field']   = "mmobile";
        sendResponse($response);
    } elseif (!preg_match($mobPattern, $mmobile)) {
        $response['message'] = "Please enter a valid mobile number.";
        $response['field']   = "mmobile";
        sendResponse($response);
    }

    try {
        // -----------------------------------------------------------------
        // Flixo API Call
        // -----------------------------------------------------------------
        $flixoUrl  = "https://saya.flixo.games/api/v1/integrate/web";
        $flixoData = [
            'api_key'        => "xUZ3d5NooX6nynQs",
            'builder'        => "Saya Homes",
            'project'        => $mpagename ?: "Saya General",                 // or set manually if needed
            'customer_name'  => $mname,
            'contact_no'     => $mmobile,
            'email'          => $memail,
            'campaign'       => "Summer Sale",
            'source'         => "Saya Website",
            'message'        => $mquery ?: "Website enquiry",
            'property_stage' => ".",
            'apt_type'       => "."
        ];

        $flixoCh = curl_init($flixoUrl);
        curl_setopt($flixoCh, CURLOPT_POST, true);
        curl_setopt($flixoCh, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($flixoCh, CURLOPT_HTTPHEADER, [
            "Content-Type: application/json"
        ]);
        curl_setopt($flixoCh, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($flixoCh, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($flixoCh, CURLOPT_TIMEOUT, 80);
        curl_setopt($flixoCh, CURLOPT_POSTFIELDS, json_encode($flixoData));

        $flixoResult = curl_exec($flixoCh);
        $flixoError  = curl_error($flixoCh);
        curl_close($flixoCh);

        // Optional: you could log $flixoResult / $flixoError if needed
        if ($flixoError) {
            // Do not block user success just because CRM call failed – just log in real use.
            // $response['message'] = 'Flixo API Error: ' . $flixoError;
        }

        // -----------------------------------------------------------------
        // 4QT API Call
        // -----------------------------------------------------------------
        $ch   = curl_init();
        $pass = 'wn9mxO76f34=';
        $url  = "https://saya06.4erealty.com/WebCreate.aspx";
        $uid  = mt_rand(10, 10000);

        $dataArray = [
            'UID'        => 'fourqt',
            'PWD'        => $pass,
            'Channel'    => 'MS',
            'Src'        => 'Website',
            'ISD'        => 91,
            'Mob'        => $mmobile,
            'Email'      => $memail,
            'name'       => $mname,
            'City'       => '',
            'Location'   => '',
            'Project'    => $mpagename,
            'Utm_Source' => '',
            'Utm_Medium' => '',
            'Utm_Camp'   => '',
            'url'        => '',
            'UniqueId'   => $uid,
        ];

        $data   = http_build_query($dataArray);
        $getUrl = $url . "?" . $data;

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $getUrl);
        curl_setopt($ch, CURLOPT_TIMEOUT, 80);

        $curlResult = curl_exec($ch);
        $curlError  = curl_error($ch);
        curl_close($ch);

        if ($curlError) {
            // Again, you may want to log this instead of showing it to the user
            // $response['message'] = '4QT API Error: ' . $curlError;
        }

        // -----------------------------------------------------------------
        // Insert into DB
        // -----------------------------------------------------------------
        $stmt = $pdo->prepare(
            "INSERT INTO `common_enquiry` (`name`, `email`, `mobile`, `pagename`, `source`, `query`) 
             VALUES (?, ?, ?, ?, ?, ?)"
        );
        $success = $stmt->execute([$mname, $memail, $mmobile, $mpagename, $msource, $mquery]);

        if ($success) {
            $response['status']  = 'success';
            $response['message'] = 'Your enquiry has been submitted successfully.';
        } else {
            $response['message'] = 'Failed to submit your enquiry. Please try again.';
        }

    } catch (PDOException $e) {
        $response['message'] = 'Database error: ' . $e->getMessage();
    }

    sendResponse($response);
}

// ---------------------------------------------------------------------
// PROJECT ENQUIRY
// ---------------------------------------------------------------------
if (isset($_POST['query_nature']) && $_POST['query_nature'] === "project") {

    // Sanitize inputs
    $pe_name        = get_safe_value($_POST['pe_name'] ?? '');
    $pe_mobile      = get_safe_value($_POST['pe_mobile'] ?? '');
    $pe_email       = get_safe_value($_POST['pe_email'] ?? '');
    $pe_projectname = get_safe_value($_POST['projectname'] ?? '');

    // Validate name
    if (empty($pe_name)) {
        $response['message'] = "Please enter your name.";
        $response['field']   = "pe_name";
        sendResponse($response);
    } elseif (!preg_match($namePattern, $pe_name)) {
        $response['message'] = "Please provide a valid name.";
        $response['field']   = "pe_name";
        sendResponse($response);
    }

    // Validate mobile
    if (empty($pe_mobile)) {
        $response['message'] = "Please enter your mobile number.";
        $response['field']   = "pe_mobile";
        sendResponse($response);
    } elseif (!preg_match($mobPattern, $pe_mobile)) {
        $response['message'] = "Please enter a valid mobile number.";
        $response['field']   = "pe_mobile";
        sendResponse($response);
    }

    // Validate email
    if (empty($pe_email)) {
        $response['message'] = "Please enter your email.";
        $response['field']   = "pe_email";
        sendResponse($response);
    } elseif (!filter_var($pe_email, FILTER_VALIDATE_EMAIL)) {
        $response['message'] = "Please enter a valid email address.";
        $response['field']   = "pe_email";
        sendResponse($response);
    }

    try {

        
        // -----------------------------------------------------------------
        // Flixo API Call
        // -----------------------------------------------------------------
        $flixoUrl  = "https://saya.flixo.games/api/v1/integrate/web";
        $flixoData = [
            'api_key'        => "xUZ3d5NooX6nynQs",
            'builder'        => "Saya Homes",
            'project'        => $pe_projectname ?: "Saya General",                 // or set manually if needed
            'customer_name'  => $pe_name,
            'contact_no'     => $pe_mobile,
            'email'          => $pe_email,
            'campaign'       => "",
            'source'         => $pe_source ?: "Website",
            'message'        => $pe_query ?: "Website enquiry",
            'property_stage' => "",
            'apt_type'       => ""
        ];

        $flixoCh = curl_init($flixoUrl);
        curl_setopt($flixoCh, CURLOPT_POST, true);
        curl_setopt($flixoCh, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($flixoCh, CURLOPT_HTTPHEADER, [
            "Content-Type: application/json"
        ]);
        curl_setopt($flixoCh, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($flixoCh, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($flixoCh, CURLOPT_TIMEOUT, 80);
        curl_setopt($flixoCh, CURLOPT_POSTFIELDS, json_encode($flixoData));

        $flixoResult = curl_exec($flixoCh);
        $flixoError  = curl_error($flixoCh);
        curl_close($flixoCh);

        // Optional: you could log $flixoResult / $flixoError if needed
        if ($flixoError) {
            // Do not block user success just because CRM call failed – just log in real use.
            // $response['message'] = 'Flixo API Error: ' . $flixoError;
        }

        // -----------------------------------------------------------------
        // 4QT API Call
        // -----------------------------------------------------------------
        $ch   = curl_init();
        $pass = 'wn9mxO76f34=';
        $url  = "https://saya06.4erealty.com/WebCreate.aspx";
        $uid  = mt_rand(10, 10000);

        $dataArray = [
            'UID'      => 'fourqt',
            'PWD'      => $pass,
            'Channel'  => 'MS',
            'Src'      => 'Website',
            'ISD'      => 91,
            'Mob'      => $pe_mobile,
            'Email'    => $pe_email,
            'name'     => $pe_name,
            'Project'  => $pe_projectname,
            'UniqueId' => $uid,
        ];

        $data   = http_build_query($dataArray);
        $getUrl = $url . "?" . $data;

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $getUrl);
        curl_setopt($ch, CURLOPT_TIMEOUT, 80);

        $curlResult = curl_exec($ch);
        $curlError  = curl_error($ch);
        curl_close($ch);

        if ($curlError) {
            // Optionally log $curlError
        }

        // -----------------------------------------------------------------
        // Insert into DB
        // -----------------------------------------------------------------
        $stmt = $pdo->prepare(
            "INSERT INTO `projct_enquires` (`name`, `email`, `mobile`, `projects`) 
             VALUES (?, ?, ?, ?)"
        );
        $success = $stmt->execute([$pe_name, $pe_email, $pe_mobile, $pe_projectname]);

        if ($success) {
            $response['status']  = 'success';
            $response['message'] = 'Your enquiry has been submitted successfully.';
        } else {
            $response['message'] = 'Failed to submit your enquiry. Please try again.';
        }

    } catch (PDOException $e) {
        $response['message'] = 'Database error: ' . $e->getMessage();
    }

    sendResponse($response);
}

// Fallback response if no valid query_nature
sendResponse($response);
