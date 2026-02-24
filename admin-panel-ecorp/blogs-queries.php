<?php
include_once "config.php";
include_once 'functions.php';
error_reporting(0);
date_default_timezone_set('Asia/Calcutta');
$date = date("Y-m-d H:i:s"); // time in India

define('MAXSIZE', 7340032); // allow max 7 MB

function allowedfile($tempfile, $destpath) {
    global $ALLOWED_FILEEXT, $ALLOWED_MIME;
    $file_ext = pathinfo($destpath, PATHINFO_EXTENSION);
    $file_mime = mime_content_type($tempfile);
    $valid_extn = in_array($file_ext, $ALLOWED_FILEEXT);
    $valid_mime = in_array($file_mime, $ALLOWED_MIME);
    $allowed_file = $valid_extn && $valid_mime;
    return $allowed_file;
}



$ALLOWED_FILEEXT = array('jpg', 'png', 'jpeg', 'webp');
$ALLOWED_MIME = array(
    'image/gif',
    'image/png',
    'image/jpeg',
    'image/jpg',
    'image/webp',
);





if(isset($_POST["addblogs"]) == "yes") {

    $meta_title = get_safe_value($link, $_POST["meta_title"]);
    $meta_key = get_safe_value($link, $_POST["meta_key"]);
    $meta_desc = get_safe_value($link, $_POST["meta_desc"]);
    $blogs_name = get_safe_value($link, $_POST["blogs_name"]);
    $blogs_by = get_safe_value($link, $_POST["blogs_by"]);
    $blogs_content = get_safe_value($link, $_POST["blogcontent"]);
    $bl_link = get_safe_value($link, $_POST["bl_link"]);
    $blogstypes = get_safe_value($link, $_POST["blogstypes"]);
    $ddate = get_safe_value($link, $_POST["bgdata"]);
    $slugURL = clean($blogs_name);

    $nam = "/^[a-zA-Z ]*$/";
    $mob = "/^[6-9][0-9]{9}$/";

    $blogs_image = $_FILES['blogs_image']['name'];
    $allowedtypes = array('svg', 'jpg', 'jpeg', 'png', 'webp');

    if(!empty($blogs_image)) {
        list($txt, $ext) = explode(".", $blogs_image); // $txt=file name, $ext=extension
        $file = substr(str_replace(" ", "_", $txt), 0).time();
        $newfilename = $file.".".$ext;
        $size = $_FILES['blogs_image']['size'];
        $tmpfile = $_FILES['blogs_image']['tmp_name'];
        $type = $_FILES['blogs_image']['type'];
    } else {
        $newfilename = "";
    }



    if(empty($blogs_name)) {
        echo $errors = "Please Enter Blog Name";
        echo "<script>$('#blogs_name').focus(); $('#blogs_name').addClass('is-invalid'); </script>";
    } else if(empty($blogstypes)) {
        echo $errors = "Please Select Blogs Type";
        echo "<script>$('#blogstypes').focus(); $('#blogstypes').addClass('is-invalid'); </script>";
    } else if(empty($blogs_by)) {
        echo $errors = "Please Enter Blog By";
        echo "<script>$('#blogs_by').focus(); $('#blogs_by').addClass('is-invalid'); </script>";
    } elseif(empty($blogs_content)) {
        echo $errors = "Please Enter Blog Content";
        echo "<script>$('#blogcontent').focus(); $('#blogcontent').addClass('is-invalid'); </script>";
    } else {

        $query = '';

        if(empty($newfilename)) {
            echo $error = 'Please upload image';
        } else if($size > 400 * 1000) {
            echo $error = 'File is too large';
        } else if(in_array($type, $allowedtypes)) {
            echo $error = 'Only JPG, JPEG, PNG, SVG or WEBP files are allowed.';
        } else {
            $query = mysqli_query($link, "INSERT INTO `blogs`(`blogstypes`,`meta_title`, `meta_desc`, `meta_key`,`heading`, `slugurl`, `byteam`, `content`,`image`, `bl_link`, `date`,`created`) VALUES('$blogstypes','$meta_title','$meta_desc','$meta_key','$blogs_name','$slugURL','$blogs_by','$blogs_content','$newfilename', '$bl_link', '$ddate','$date')") or die('Unable to run query');
            if($query && move_uploaded_file($tmpfile, "../uploads/blog-images/".$newfilename)) {
                echo "<script>alert('Blog Add Successfully');</script>";
                echo "<script>window.location.href='blogs.php';</script>";
            } else {
                echo '<script> alert("Sorry Oops Problem is occured in Project");</script>';
            }
        }
    }
}



if(isset($_POST["updateblogs"]) == "yes") {

    $meta_title = get_safe_value($link, $_POST["meta_title"]);
    $meta_key = get_safe_value($link, $_POST["meta_key"]);
    $meta_desc = get_safe_value($link, $_POST["meta_desc"]);
    $b_id = get_safe_value($link, $_POST["b_id"]);
    $blogs_name = get_safe_value($link, $_POST["blogs_name"]);
    $blogs_by = get_safe_value($link, $_POST["blogs_by"]);
    $blogs_content = get_safe_value($link, $_POST["blogcontent"]);
    $bl_link = get_safe_value($link, $_POST["bl_link"]);
    $blogstypes = get_safe_value($link, $_POST["blogstypes"]);
    $slugURL = clean($blogs_name);
    $ddate = get_safe_value($link, $_POST["bgdata"]);


    $nam = "/^[a-zA-Z ]*$/";

    $mob = "/^[6-9][0-9]{9}$/";

    if(empty($blogs_name)) {
        echo $errors = "Please Enter Blog Name";
        echo "<script>$('#blogs_name').focus(); $('#blogs_name').addClass('text-color--secondary'); </script>";
    } else if(empty($blogstypes)) {
        echo $errors = "Please Select Blogs Type";
        echo "<script>$('#blogstypes').focus(); $('#blogstypes').addClass('is-invalid'); </script>";
    } else if(empty($blogs_by)) {
        echo $errors = "Please Enter Blog By";
        echo "<script>$('#blogs_by').focus(); $('#blogs_by').addClass('text-color--secondary'); </script>";
    } elseif(empty($blogs_content)) {
        echo $errors = "Please Enter Blog Content";
        echo "<script>$('#blogcontent').focus(); $('#blogcontent').addClass('text-color--secondary'); </script>";
    } else {
        $blogs_image = $_FILES['blogs_image']['name'];
        $allowedtypes = array('svg', 'jpg', 'jpeg'.'png', 'webp');

        if(!empty($blogs_image)) {
            list($txt, $ext) = explode(".", $blogs_image); // $txt=file name, $ext=extension
            $file = substr(str_replace(" ", "_", $txt), 0).time();
            $newfilename = $file.".".$ext;
            $size = $_FILES['blogs_image']['size'];
            $tmpfile = $_FILES['blogs_image']['tmp_name'];
            $type = $_FILES['blogs_image']['type'];

            if($size > 400 * 1000) {
                echo $error = 'File is too large';
            } else if(in_array($type, $allowedtypes)) {
                echo $error = 'Only JPG, JPEG, PNG, SVG or WEBP files are allowed.';
            } else {
                $query = mysqli_query($link, "UPDATE `blogs` SET `blogstypes`='$blogstypes',`meta_title`='$meta_title',`meta_desc`='$meta_desc',`meta_key`='$meta_key',`heading`='$blogs_name',`slugurl`='$slugURL',`byteam`='$blogs_by',`content`='$blogs_content',`image`='$newfilename',`date`='$ddate' WHERE `id`='$b_id'");
                if($query && move_uploaded_file($tmpfile, "../uploads/blog-images/".$newfilename)) {
                    echo "<script>window.location.href='blogs.php';</script>";
                } else {
                    echo '<script> alert("Sorry Oops Problem is occured in Project");</script>';
                }
            }
        } else {

            $query = mysqli_query($link, "UPDATE `blogs` SET `blogstypes`='$blogstypes',`meta_title`='$meta_title',`meta_desc`='$meta_desc',`meta_key`='$meta_key',`heading`='$blogs_name',`slugurl`='$slugURL',`byteam`='$blogs_by',`content`='$blogs_content',`bl_type`='$datatype' ,`date`='$ddate',`bl_link`='$bl_link' WHERE `id`='$b_id'");

            if($query) {
                echo "<script>alert('Blog Update Successfully');</script>";
                echo "<script>window.location.href='blogs.php';</script>";
            } else {
                echo '<script> alert("Sorry Oops Problem is occured in Project");</script>';
            }
        }
    }
}

// Events

if (isset($_POST["addevents"]) == "yes") {

    $meta_title = get_safe_value($link, $_POST["meta_title"]);
    $meta_key = get_safe_value($link, $_POST["meta_key"]);
    $meta_desc = get_safe_value($link, $_POST["meta_desc"]);

    $name = get_safe_value($link, $_POST["name"]);
    $evdate = get_safe_value($link, $_POST["evdate"]);
    $events_id = get_safe_value($link, $_POST["events_id"]);
    $evgroup = clean($name);

    $image = $_FILES['image']['name'];

    $allowedtypes = array('svg', 'jpg', 'jpeg', 'png', 'webp');

    if (!empty($image)) {

        list($txt, $ext) = explode(".", $image); // $txt=file name, $ext=extension
        $file = substr(str_replace(" ", "_", $txt), 0) . time();
        $newfilename = $file . "." . $ext;
        $size = $_FILES['image']['size'];
        $tmpfile = $_FILES['image']['tmp_name'];
        $type = $_FILES['image']['type'];
    } else {

        $newfilename = "";
    }

    if (empty($name)) {
        echo $errors = "Please Enter Events Heading";
        echo "<script>$('#name').focus(); $('#name').addClass('is-invalid'); </script>";
    } else {
        $query = '';

        if (!empty($events_id)) {
            if (empty($newfilename)) {
                $query = mysqli_query($link, "UPDATE `events` SET `ev_meta_title`='$meta_title',`ev_meta_desc`='$meta_desc',`ev_meta_key`='$meta_key',`ev_title`='$name',`ev_group`='$evgroup',`ev_date`='$evdate' WHERE `ev_id`='$events_id'") or die('Unable to run query');

                if ($query) {
                    echo "<script>alert('Events Updated Successfully');</script>";
                    echo "<script>window.location.href='events.php';</script>";
                } else {
                    echo '<script> alert("Sorry Oops Problem is occured in Project");</script>';
                }
            } else if ($size > 400 * 1000) {
                echo $error = 'File is too large';
            } else if (in_array($type, $allowedtypes)) {
                echo $error = 'Only JPG, JPEG, PNG, SVG or WEBP files are allowed.';
            } else {
                $query = mysqli_query($link, "UPDATE `events` SET `ev_meta_title`='$meta_title',`ev_meta_desc`='$meta_desc',`ev_meta_key`='$meta_key',`ev_title`='$name',`ev_group`='$evgroup',`ev_image`='$newfilename',`ev_date`='$evdate' WHERE `ev_id`='$events_id'") or die('Unable to run query img');
                if ($query && move_uploaded_file($tmpfile, "../uploads/events/" . $newfilename)) {
                        echo "<script>alert('Events Updated Successfully');</script>";
                    echo "<script>window.location.href='events.php';</script>";
                } else {
                    echo '<script> alert("Sorry Oops Problem is occured in Project");</script>';
                }
            }
        } else {

            if (empty($newfilename)) {
                echo $error = 'Please upload image';
            } else if ($size > 400 * 1000) {
                echo $error = 'File is too large';
            } else if (in_array($type, $allowedtypes)) {
                echo $error = 'Only JPG, JPEG, PNG, SVG or WEBP files are allowed.';
            } else {
                $query = mysqli_query($link, "INSERT INTO `events`(`ev_meta_title`, `ev_meta_desc`, `ev_meta_key`,`ev_title`, `ev_group`, `ev_image`,`ev_date`, `ev_created`) VALUES ('$meta_title','$meta_desc','$meta_key','$name','$evgroup','$newfilename','$evdate','$date')") or die('Unable to run query');

                if ($query && move_uploaded_file($tmpfile, "../uploads/events/" . $newfilename)) {
                    echo "<script>alert('Events Add Successfully');</script>";
                    echo "<script>window.location.href='events.php';</script>";
                } else {
                    echo '<script> alert("Sorry Oops Problem is occured in Project");</script>';
                }
            }
        }
    }
}

// Events Gallery

if (isset($_POST['multipleimage']) == "active") {
    $event_id = get_safe_value($link, $_POST['event_id']);

    if (empty($_FILES['galleryImages']['name'])) {
        echo "please Select Image";
    } else {

        $extension = array("jpeg", "jpg", "png", "gif", "webp");
        foreach ($_FILES["galleryImages"]["tmp_name"] as $key => $tmp_name) {
            $file_name = $_FILES["galleryImages"]["name"][$key];
            // $file_name = clean($file_name);
            $file_tmp = $_FILES["galleryImages"]["tmp_name"][$key];
            $ext = pathinfo($file_name, PATHINFO_EXTENSION);
 
            if (in_array($ext, $extension)) {
                $filename = basename($file_name, $ext);
                $newFileName = $filename . time() . "." . $ext;
                    if (move_uploaded_file($file_tmp = $_FILES["galleryImages"]["tmp_name"][$key], "../uploads/events/" . $newFileName)) {
                    $query = mysqli_query($link, "INSERT INTO `events_gallery`(`events_id`, `ev_image`) VALUES ('$event_id','$newFileName')") or die('Unable to run query');
                }
            } else {
                echo "Invalid File (Only JPEG, JPG, PNG, WEBP)";
            }
        }

        if ($query) {
            echo "<script>alert('Events Gallery Add Successfully');</script>";
            echo "<script>window.location.href='events-gallery.php?ev_id=$event_id';</script>";
        } else {
            echo '<script> alert("Sorry Oops Problem is occured in Gallery");</script>';
        }
    }
}
