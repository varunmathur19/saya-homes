<?php
include_once "config.php";
include_once 'functions.php';
error_reporting(0);
date_default_timezone_set('Asia/Calcutta');
$date = date("Y-m-d H:i:s"); // time in India


if (isset($_POST["addusers"]) == "active") {

    $name = get_safe_value($link, $_POST["name"]);
    $userid = get_safe_value($link, $_POST["userid"]);
    $password = get_safe_value($link, $_POST["password"]);
    $cpassword = get_safe_value($link, $_POST["cpassword"]);
    $user_type = get_safe_value($link, $_POST["user_type"]);
    $projects = get_safe_value($link, $_POST["projects"]);
    $uids = get_safe_value($link, $_POST["uids"]);

    $mob = "/^[7-9][0-9]{9}$/";
    $nam = "/^[a-zA-Z ]*$/";

    if (empty($name)) {
        echo $errors = "Please Enter Name";
        echo "<script>$('#name').focus(); $('#name').addClass('is-invalid'); </script>";
    } else if (!preg_match($nam, $name)) {
        echo $errors = "Please Provide Valid Name";
        echo "<script>$('#name').focus(); $('#name').addClass('focus-red is-invalid'); </script>";
    } else if (empty($userid)) {
        echo $error = 'Please Enter Your Email';
        echo "<script>$('#userid').focus(); $('#userid').addClass('focus-red is-invalid');</script>";
    } else if (!filter_var($userid, FILTER_VALIDATE_EMAIL)) {
        echo $error = 'Please Enter Valid Email Id';
        echo "<script>$('#userid').focus(); $('#userid').addClass('focus-red is-invalid');</script>";
    } else if (empty($password)) {
        echo $errors = "Please Enter Password";
        echo "<script>$('#password').focus(); $('#password').addClass('is-invalid'); </script>";
    } else if (strlen($password) < 6) {
        echo $errors = "Please Enter Password At Least 6 Characters ";
        echo "<script>$('#password').focus(); $('#password').addClass('is-invalid'); </script>";
    } else if (empty($cpassword)) {
        echo $errors = "Please Enter Confirm Password";
        echo "<script>$('#cpassword').focus(); $('#cpassword').addClass('is-invalid'); </script>";
    } else if ($cpassword != $password) {
        echo $errors = "Password And Confirm Password Does Not Match";
        echo "<script>$('#cpassword').focus(); $('#cpassword').addClass('is-invalid'); </script>";
    } else if (empty($user_type)) {
        echo $errors = "Please Select User Type";
        echo "<script>$('#user_type').focus(); $('#user_type').addClass('is-invalid'); </script>";
    } else if (empty($projects)) {
        echo $errors = "Please Select Projects";
        echo "<script>$('#projects').focus(); $('#projects').addClass('is-invalid'); </script>";
    } else {
        $password = md5($password);
        if (!empty($uids)) {
            $query = mysqli_query($link, "UPDATE `admin_login` SET `name`='$name',`userid`='$userid',`password`='$password',`project`='$projects',`user_type`='$user_type' WHERE `id`='$uids' ") or die('Unable to run query');
            if ($query) {
                echo "<script>alert('User Update Successfully');</script>";
                echo "<script>window.location.href='manage-users.php';</script>";
            } else {
                echo '<script> alert("Sorry Oops Problem is occured. While Adding Users");</script>';
            }
        } else {
            $query = mysqli_query($link, "INSERT INTO `admin_login`(`name`, `userid`, `password`, `project`, `user_type`) VALUES ('$name','$userid','$password','$projects','$user_type')") or die("INSERT INTO `admin_login`(`name`, `userid`, `password`, `project`, `user_type`) VALUES ('$name','$userid','$password','$projects','$user_type')");
            if ($query) {
                echo "<script>alert('User Add Successfully');</script>";
                echo "<script>window.location.href='manage-users.php';</script>";
            } else {
                echo '<script> alert("Sorry Oops Problem is occured. While Adding Users");</script>';
            }
        }
    }
}

if (isset($_POST["addmessage"]) == "active") {

    $vstatus = get_safe_value($link, $_POST["vstatus"]);
    $remarks = get_safe_value($link, $_POST["remarks"]);
    $queryid = get_safe_value($link, $_POST["queryid"]);
    $query_mobile = get_safe_value($link, $_POST["query_mobile"]);
    $query_project = get_safe_value($link, $_POST["query_project"]);
    $query_employee = get_safe_value($link, $_POST["query_employee"]);

    $mob = "/^[7-9][0-9]{9}$/";
    $nam = "/^[a-zA-Z ]*$/";


    if (empty($vstatus)) {
        echo $errors = "Please Select Booking Status";
        echo "<script>$('#vstatus').focus(); $('#vstatus').addClass('is-invalid'); </script>";
    } else if (empty($remarks)) {
        echo $errors = "Please Enter Remarks";
        echo "<script>$('#remarks').focus(); $('#remarks').addClass('is-invalid'); </script>";
    } else if (empty($queryid)) {
        echo $error = 'Please Select Enter Id';
        echo "<script>$('#queryid').focus(); $('#queryid').addClass('focus-red is-invalid');</script>";
    } else {
        
        if ($vstatus == 'Accepted') {
            $vstatus =1;
        }else if ($vstatus == 'Pending') {
            $vstatus =2;
        }else if ($vstatus == 'Rejected') {
            $vstatus =0;
        }

        // API Credentials
        $username = 'SAYAHM';
        $apikey = 'dohztFLTRUTR';
        $senderid = 'SAYAHM';
        $tid = '1007996113639487695';
        $peid = '1101424170000043085';

        // Message content
        $message = "Dear Customer, Thank you for visiting $query_project. It was indeed a pleasure meeting you at our site. We look forward to hearing from you soon. Warm Regards $query_employee. -Saya Homes";

        // URL Encode the message
        $encoded_message = urlencode($message);

        // API URL
        $api_url = "http://13.234.156.238/api.php?username=$username&apikey=$apikey&senderid=$senderid&route=TRANS&mobile=$query_mobile&text=$encoded_message&TID=$tid&PEID=$peid";

        // Initialize cURL
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Execute cURL request
        $response = curl_exec($ch);

        // Check for errors
        if (curl_errno($ch)) {
            echo 'Curl error: ' . curl_error($ch);
        } else {
            echo 'SMS sent successfully. Response: ' . $response;
        }

        // Close cURL
        curl_close($ch);

        if (!empty($queryid)) {
            $query = mysqli_query($link, "UPDATE `r_desk` SET `description`='$remarks',`status`='$vstatus' WHERE `id`='$queryid' ") or die('Unable to run query');
            if ($query) {
                echo "<script>alert('Status Updated Successfully');</script>";
                echo "<script>window.location.href='registration-desk-queries.php';</script>";
            } else {
                echo '<script> alert("Error occured.");</script>';
            }
        }
    }
}
