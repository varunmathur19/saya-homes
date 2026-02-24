<?php
// include "classes/class.phpmailer.php";
date_default_timezone_set('Asia/Calcutta');
$date = date("Y-m-d H:i:s"); // time in India
$cdate = date("Y-m-d"); // time in India
$srdids = '';
$link = mysqli_connect('a2nlmysql19plsk.secureserver.net:3306', 'landing_pages', '~4Vh9t8s', 'landing_pages') or die("Database Not Connected To The Server");
$project = "Gold Avenue";
if (isset($_POST['enquiry']) == 'active') {
	$enq_name = $_POST['enq_name'];
	$enq_email = $_POST['enq_email'];
	$enq_mobile = $_POST['enq_mobile'];

	$utm_source = $_POST['utm_source'];
	$utm_medium = $_POST['utm_medium'];
	$utm_campaign = $_POST['utm_campaign'];
	if ($utm_source == 'Google') {
		$srdids = '655b31e758f1e7d537d7fc82';
	} else if ($utm_source == 'Facebook') {
		$srdids = '655b48832f31c6c19f51e725';
	} else if ($utm_source == 'Taboola') {
		$srdids = '655b48e19403684ef15a35ac';
	} else if ($utm_source == 'Email') {
		$srdids = '655b48a394036882059531ee';
	}else {
		$srdids = '655b48b8e1148729300f234b';
	}
	$nam = "/^[a-zA-Z ]*$/";
	$mob = "/^[6-9][0-9]{9}$/";
	if (empty($enq_name)) {
		echo $errors = "Please Enter Name";
		echo "<script>$('#enq_name').focus(); $('#enq_name').addClass('is-invalid text-dark border-danger'); </script>";
	} else if (!preg_match($nam, $enq_name)) {
		echo $error = "Please Provide Valid Name";
		echo "<script>$('#enq_name').focus(); $('#enq_name').addClass('is-invalid text-dark border-danger'); </script>";
	} else if (empty($enq_mobile)) {
		echo $errors = "Please Enter Your Phone Number";
		echo "<script>$('#enq_mobile').focus();$('#enq_mobile').addClass('is-invalid text-dark border-danger');</script>";
	} else if (!preg_match($mob, $enq_mobile)) {
		echo $error = 'Please Enter Valid Phone Number';
		echo "<script>$('#enq_mobile').focus();$('#enq_mobile').addClass('is-invalid text-dark border-danger');</script>";
	} else if (empty($enq_email)) {
		echo $error = 'Please Enter Email';
		echo "<script>$('#enq_email').focus(); $('#enq_email').addClass('is-invalid text-dark border-danger');</script>";
	} else if (!filter_var($enq_email, FILTER_VALIDATE_EMAIL)) {
		echo $error = 'Please Enter Valid Email Id';
		echo "<script>$('#enq_email').focus(); $('#enq_email').addClass('is-invalid text-dark border-danger');</script>";
	} else {
		$formid=mt_rand(1000,100000);
		$url = "https://app.sell.do//api/leads/create.json";
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$headers = array(
			"Content-Type: application/json",
			"cache-control: no-cache",
		);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		$data = <<<DATA
        {
        "form_id": "$formid",
        "sell_do" : {
        "campaign" : {
        "srd" : "$srdids",
        "campaign_id": ""
        },
        "form": {
          "lead": {
            "name": "$enq_name",
            "email": "$enq_email",
            "phone": "$enq_mobile",
            "project_id": "",
            "project_name": "$project",
            "campaign_id": "",
            "sales":"",
            "profile": {
              "company": ""
            }
          },
          "custom" : {
            "c_one" : ""
          },
          "note" : {
            "content" : ""
          }
        }
        },
        "api_key" : "6f99ade1614265aa5927ae2cfa2caa7f"
        }
DATA;
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		//for debug only!
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		$resp = curl_exec($curl);
		curl_close($curl);
		// var_dump($resp);
		$checkquery = mysqli_query($link, "SELECT * FROM `project_leads` WHERE `project`= '$project' AND `email`= '$enq_email' AND  `created` LIKE '%$cdate%'");
		if (mysqli_num_rows($checkquery) < 1) {
			mysqli_query($link, "INSERT INTO `project_leads`(`name`, `email`, `mobile`, `source`, `medium`, `campaign`, `project`, `created`) VALUES  ('$enq_name','$enq_email','$enq_mobile','$utm_source','$utm_medium','$utm_campaign','$project','$date')");
			$message = '
		  <table width="100%" border="0"  bordercolor="red" align="center" cellpadding="0" cellspacing="0" bgcolor="#EEEEEE" >
		  <caption>' . ucwords($enq_name) . ' has filled ' . $project . 'Enquiry Form & Details are given below:</caption>
		  <tr valign="middle" align="center"  bgcolor="#d3b458" class="text"> 
			<td valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:10pt; font-weight:bold; color: #ffffff; padding: 10px; border: 1px solid #414141;">Name</td>
			<td valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:10pt; font-weight:bold; color: #ffffff; padding: 10px; border: 1px solid #414141;">Email</td>
			<td valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:10pt; font-weight:bold; color: #ffffff; padding: 10px; border: 1px solid #414141;">Mobile No</td> 
			<td valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:10pt; font-weight:bold; color: #ffffff; padding: 10px; border: 1px solid #414141;">Source</td> 
			<td valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:10pt; font-weight:bold; color: #ffffff; padding: 10px; border: 1px solid #414141;">Medium</td> 
			<td valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:10pt; font-weight:bold; color: #ffffff; padding: 10px; border: 1px solid #414141;">Campaign</td> 
		  </tr>
		   <tr valign="middle" align="center" class="text"> 
			<td style="width:16.66%; padding:10px;  border:1px solid #999999;">' . ucwords($enq_name) . '</td>
			<td style="width:16.66%; padding:10px; border:1px solid #999999;">' . $enq_email . '</td>
			<td style="width:16.66%; padding:10px; border:1px solid #999999;">' . $enq_mobile . '</td>  
			<td style="width:16.66%; padding:10px; border:1px solid #999999;">' . $utm_source . '</td>  
			<td style="width:16.66%; padding:10px; border:1px solid #999999;">' . $utm_medium . '</td>  
			<td style="width:16.66%; padding:10px; border:1px solid #999999;">' . $utm_campaign . '</td>  
		  </tr>
		</table>';
			$to = implode(", ", [
				// "Sonika.Kumari@sayahomes.in",
				// "homessaya@gmail.com",
				// "realdigitalsaya@gmail.com",
				// "ecispl@gmail.com",
				"etestlead@gmail.com",
			]);
			$headers = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: ' . $enq_email . ' <noreply@sayagoldavenue.co.in> ' . "\n";
			$subject = "$project :: Enquiry";
			if (mail($to, $subject, $message, $headers)) {
				echo "<script>window.location.href='thank-you.php';</script>";
			}
		} else {
			echo "<script>window.location.href='index.php';</script>";
		}
	}
}
if (isset($_POST['modal_action']) == 'active') {
	$mname = $_POST['mname'];
	$memail = $_POST['memail'];
	$mmobile = $_POST['mmobile'];

	$utm_source = $_POST['utm_source'];
	$utm_medium = $_POST['utm_medium'];
	$utm_campaign = $_POST['utm_campaign'];

	if ($utm_source == 'Google') {
		$srdids = '655b31e758f1e7d537d7fc82';
	} else if ($utm_source == 'Facebook') {
		$srdids = '655b48832f31c6c19f51e725';
	} else if ($utm_source == 'Taboola') {
		$srdids = '655b48e19403684ef15a35ac';
	} else if ($utm_source == 'Email') {
		$srdids = '655b48a394036882059531ee';
	}else {
		$srdids = '655b48b8e1148729300f234b';
	}
	$nam = "/^[a-zA-Z ]*$/";
	$mob = "/^[6-9][0-9]{9}$/";
	if (empty($mname)) {
		echo $errors = "Please Enter Name";
		echo "<script>$('#mname').focus(); $('#mname').addClass('is-invalid text-dark border-danger'); </script>";
	} else if (!preg_match($nam, $mname)) {
		echo $error = "Please Provide Valid Name";
		echo "<script>$('#mname').focus(); $('#mname').addClass('is-invalid text-dark border-danger'); </script>";
	} else if (empty($mmobile)) {
		echo $errors = "Please Enter Your Phone Number";
		echo "<script>$('#mmobile').focus();$('#mmobile').addClass('is-invalid text-dark border-danger');</script>";
	} else if (!preg_match($mob, $mmobile)) {
		echo $error = 'Please Enter Valid Phone Number';
		echo "<script>$('#mmobile').focus();$('#mmobile').addClass('is-invalid text-dark border-danger');</script>";
	} else if (empty($memail)) {
		echo $error = 'Please Enter Email';
		echo "<script>$('#memail').focus(); $('#memail').addClass('is-invalid text-dark border-danger');</script>";
	} else if (!filter_var($memail, FILTER_VALIDATE_EMAIL)) {
		echo $error = 'Please Enter Valid Email Id';
		echo "<script>$('#memail').focus(); $('#memail').addClass('is-invalid text-dark border-danger');</script>";
	} else {
		$formid=mt_rand(1000,100000);
		$url = "https://app.sell.do//api/leads/create.json";
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$headers = array(
			"Content-Type: application/json",
			"cache-control: no-cache",
		);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		$data = <<<DATA
        {
        "form_id": "$formid",
        "sell_do" : {
        "campaign" : {
        "srd" : "$srdids",
        "campaign_id": ""
        },
        "form": {
          "lead": {
            "name": "$mname",
            "email": "$memail",
            "phone": "$mmobile",
            "project_id": "",
            "project_name": "$project",
            "campaign_id": "",
            "sales":"",
            "profile": {
              "company": ""
            }
          },
          "custom" : {
            "c_one" : ""
          },
          "note" : {
            "content" : ""
          }
        }
        },
        "api_key" : "6f99ade1614265aa5927ae2cfa2caa7f"
        }
DATA;
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		//for debug only!
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		$resp = curl_exec($curl);
		curl_close($curl);
		$checkquery = mysqli_query($link, "SELECT * FROM `project_leads` WHERE  `project`= '$project' AND`email`= '$memail' AND  `created` LIKE '%$cdate%'");
		if (mysqli_num_rows($checkquery) < 1) {
			// End Sell Do
			mysqli_query($link, "INSERT INTO `project_leads`(`name`, `email`, `mobile`, `source`, `medium`, `campaign`, `project`, `created`) VALUES  ('$mname','$memail','$mmobile','$utm_source','$utm_medium','$utm_campaign','$project','$date')");
			$message = '
		  <table width="100%" border="0"  bordercolor="red" align="center" cellpadding="0" cellspacing="0" bgcolor="#EEEEEE" >
		  <caption>' . ucwords($mname) . ' has filled ' . $project . ' Enquiry Form & Details are given below:</caption>
		  <tr valign="middle" align="center"  bgcolor="#d3b458" class="text"> 
			<td valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:10pt; font-weight:bold; color: #ffffff; padding: 10px; border: 1px solid #414141;">Name</td>
			<td valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:10pt; font-weight:bold; color: #ffffff; padding: 10px; border: 1px solid #414141;">Email</td>
			<td valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:10pt; font-weight:bold; color: #ffffff; padding: 10px; border: 1px solid #414141;">Mobile No</td>
			<td valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:10pt; font-weight:bold; color: #ffffff; padding: 10px; border: 1px solid #414141;">Source</td> 
			<td valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:10pt; font-weight:bold; color: #ffffff; padding: 10px; border: 1px solid #414141;">Medium</td> 
			<td valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:10pt; font-weight:bold; color: #ffffff; padding: 10px; border: 1px solid #414141;">Campaign</td>  
		  </tr>
		   <tr valign="middle" align="center" class="text"> 
			<td style="width:16.66%; padding:10px;  border:1px solid #999999;">' . ucwords($mname) . '</td>
			<td style="width:16.66%; padding:10px; border:1px solid #999999;">' . $memail . '</td>
			<td style="width:16.66%; padding:10px; border:1px solid #999999;">' . $mmobile . '</td>  
			<td style="width:16.66%; padding:10px; border:1px solid #999999;">' . $utm_source . '</td>  
			<td style="width:16.66%; padding:10px; border:1px solid #999999;">' . $utm_medium . '</td>  
			<td style="width:16.66%; padding:10px; border:1px solid #999999;">' . $utm_campaign . '</td>  
		  </tr>
		</table>';
			$to = implode(", ", [
				// "Sonika.Kumari@sayahomes.in",
				// "homessaya@gmail.com",
				// "realdigitalsaya@gmail.com",
				"etestlead@gmail.com",
				// "ecispl@gmail.com",
			]);
			$headers = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: ' . $memail . ' <noreply@sayagoldavenue.co.in> ' . "\n";
			$subject = "$project :: Enquiry";
			if (mail($to, $subject, $message, $headers)) {
				echo "<script>window.location.href='thank-you.php';</script>";
			}
		} else {
			echo "<script>window.location.href='index.php';</script>";
		}
	}
}
// Bottom FOmr
if (isset($_POST['cenquiry']) == 'active') {
	$firstname = $_POST['firstname'];
	$btemail = $_POST['btemail'];
	$btmobile = $_POST['btmobile'];
	$cmessage = $_POST['cmessage'];
	$utm_source = $_POST['utm_source'];
	$utm_medium = $_POST['utm_medium'];
	$utm_campaign = $_POST['utm_campaign'];

	if ($utm_source == 'Google') {
		$srdids = '655b31e758f1e7d537d7fc82';
	} else if ($utm_source == 'Facebook') {
		$srdids = '655b48832f31c6c19f51e725';
	} else if ($utm_source == 'Taboola') {
		$srdids = '655b48e19403684ef15a35ac';
	} else if ($utm_source == 'Email') {
		$srdids = '655b48a394036882059531ee';
	}else {
		$srdids = '655b48b8e1148729300f234b';
	}
	$nam = "/^[a-zA-Z ]*$/";
	$mob = "/^[6-9][0-9]{9}$/";
	$fullname = $firstname;
	if (empty($firstname)) {
		echo $errors = "Please Enter Last Name";
		echo "<script>$('#firstname').focus(); $('#firstname').addClass('is-invalid text-dark border-danger'); </script>";
	} else if (!preg_match($nam, $firstname)) {
		echo $error = "Please Provide Valid Last Name";
		echo "<script>$('#firstname').focus(); $('#firstname').addClass('is-invalid text-dark border-danger'); </script>";
	} else if (empty($btmobile)) {
		echo $errors = "Please Enter Your Phone Number";
		echo "<script>$('#btmobile').focus();$('#btmobile').addClass('is-invalid text-dark border-danger');</script>";
	} else if (!preg_match($mob, $btmobile)) {
		echo $error = 'Please Enter Valid Phone Number';
		echo "<script>$('#btmobile').focus();$('#btmobile').addClass('is-invalid text-dark border-danger');</script>";
	} else if (empty($btemail)) {
		echo $error = 'Please Enter Email';
		echo "<script>$('#btemail').focus(); $('#btemail').addClass('is-invalid text-dark border-danger');</script>";
	} else if (!filter_var($btemail, FILTER_VALIDATE_EMAIL)) {
		echo $error = 'Please Enter Valid Email Id';
		echo "<script>$('#btemail').focus(); $('#btemail').addClass('is-invalid text-dark border-danger');</script>";
	} else {
		$formid=mt_rand(1000,100000);
		$url = "https://app.sell.do//api/leads/create.json";
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$headers = array(
			"Content-Type: application/json",
			"cache-control: no-cache",
		);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		$data = <<<DATA
        {
        "form_id": "$formid",
        "sell_do" : {
        "campaign" : {
        "srd" : "$srdids",
        "campaign_id": ""
        },
        "form": {
          "lead": {
            "name": "$fullname",
            "email": "$btemail",
            "phone": "$btmobile",
            "project_id": "",
            "project_name": "$project",
            "campaign_id": "",
            "sales":"",
            "profile": {
              "company": ""
            }
          },
          "custom" : {
            "c_one" : ""
          },
          "note" : {
            "content" : ""
          }
        }
        },
        "api_key" : "6f99ade1614265aa5927ae2cfa2caa7f"
        }
DATA;
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		//for debug only!
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		$resp = curl_exec($curl);
		curl_close($curl);
		// var_dump($resp);
		$checkquery = mysqli_query($link, "SELECT * FROM `project_leads` WHERE  `project`= '$project' AND`email`= '$btemail' AND  `created` LIKE '%$cdate%'");
		if (mysqli_num_rows($checkquery) < 1) {
			mysqli_query($link, "INSERT INTO `project_leads`(`name`, `email`, `mobile`, `source`, `medium`, `campaign`, `project`, `created`) VALUES  ('$fullname','$btemail','$btmobile','$utm_source','$utm_medium','$utm_campaign','$project','$date')");
			$message = '
		  <table width="100%" border="0"  bordercolor="red" align="center" cellpadding="0" cellspacing="0" bgcolor="#EEEEEE" >
		  <caption>' . ucwords($fullname) . ' has filled ' . $project . ' Enquiry Form & Details are given below:</caption>
		  <tr valign="middle" align="center"  bgcolor="#d3b458" class="text"> 
			<td valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:10pt; font-weight:bold; color: #ffffff; padding: 10px; border: 1px solid #414141;">Name</td>
			<td valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:10pt; font-weight:bold; color: #ffffff; padding: 10px; border: 1px solid #414141;">Email</td>
			<td valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:10pt; font-weight:bold; color: #ffffff; padding: 10px; border: 1px solid #414141;">Mobile No</td>
			<td valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:10pt; font-weight:bold; color: #ffffff; padding: 10px; border: 1px solid #414141;">Message</td>
			<td valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:10pt; font-weight:bold; color: #ffffff; padding: 10px; border: 1px solid #414141;">Source</td> 
			<td valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:10pt; font-weight:bold; color: #ffffff; padding: 10px; border: 1px solid #414141;">Medium</td> 
			<td valign="middle" style="font-family:Arial, Helvetica, sans-serif; font-size:10pt; font-weight:bold; color: #ffffff; padding: 10px; border: 1px solid #414141;">Campaign</td>  
		  </tr>
		   <tr valign="middle" align="center" class="text"> 
			<td style="width:16.66%; padding:10px;  border:1px solid #999999;">' . ucwords($fullname) . '</td>
			<td style="width:16.66%; padding:10px; border:1px solid #999999;">' . $btemail . '</td>
			<td style="width:16.66%; padding:10px; border:1px solid #999999;">' . $btmobile . '</td>  
			<td style="width:16.66%; padding:10px; border:1px solid #999999;">' . $cmessage . '</td>  
			<td style="width:16.66%; padding:10px; border:1px solid #999999;">' . $utm_source . '</td>  
			<td style="width:16.66%; padding:10px; border:1px solid #999999;">' . $utm_medium . '</td>  
			<td style="width:16.66%; padding:10px; border:1px solid #999999;">' . $utm_campaign . '</td>  
		  </tr>
		</table>';
			$to = implode(", ", [
				// "Sonika.Kumari@sayahomes.in",
				// "homessaya@gmail.com",
				// "realdigitalsaya@gmail.com",
				"etestlead@gmail.com",
				// "ecispl@gmail.com",
			]);
			$headers = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: ' . $btemail . ' <noreply@sayagoldavenue.co.in> ' . "\n";
			$subject = "$project :: Enquiry";
			if (mail($to, $subject, $message, $headers)) {
				echo "<script>window.location.href='thank-you.php';</script>";
			}
		} else {
			echo "<script>window.location.href='index.php';</script>";
		}
	}
}
