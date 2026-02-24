
<?php
include_once "admin-panel-ecorp/config.php";
$eventid = '';
$eventgroup = '';
$eventname = '';
$eventdate = '';


if (isset($_GET['ev_group']) && !empty($_GET['ev_group'])) {
    $eventgroup = $_GET['ev_group'];
    $data = mysqli_query($link, "SELECT * FROM `events` WHERE `ev_status`='1' AND `ev_group`='$eventgroup'");

    $check = mysqli_num_rows($data);
    $evrow = mysqli_fetch_array($data);
    $eventid = $evrow['ev_id'];
    $eventname = $evrow['ev_title'];
    $eventdate = $evrow['ev_date'];

    // echo $eventname; 
    // exit;
} else {
    header("location:events.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= (!empty($evrow['ev_meta_title']))?$evrow['ev_meta_title']:''?></title>
    <meta name="description" content="<?= (!empty($evrow['ev_meta_desc']))?$evrow['ev_meta_desc']:''?>" />
    <meta name="keywords" content="<?= (!empty($evrow['ev_meta_key']))?$evrow['ev_meta_key']:''?>" />
    <?php include_once('inc-css.php') ?>
</head>

<body>
    <?php include_once('inc-header.php') ?>
    <main>
        <div class="inside-banner w-100">
            <picture class="h-100 w-100">
                <img src="<?php echo $base_url; ?>/images/south-x/saya-south-x-banner.webp" class="h-100 object-cover" alt="...">
            </picture>
            <div class="container-lg position-absolute mx-auto h-100">
                <div class="bannerText" data-aos="fade-in">
                    <div class="project-title-container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="events">Events</a></li>
                            <li class="breadcrumb-item active"><?= $eventname ?></li>
                        </ol>
                        <p class="h1 title">Events</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 position-relative overflow-hidden padding section-events">
            <div class="container-lg">
                <div class="heading mx-auto text-center">
                    <h1 class="h2 mb-0 text-primary"><?= $eventname ?></h1>
                </div>
                <div class="row gap-row justify-content-center">
                <?php
                        $data = mysqli_query($link, "SELECT * FROM `events_gallery` WHERE `events_id`='$eventid' AND `status` = '1'  ORDER BY `id` DESC");
                        $check = mysqli_num_rows($data);
                        $i = 1;
                        if ($check > 0) {
                            while ($rows = mysqli_fetch_assoc($data)) {
                        ?>
                    <div class="col-6 col-md-3 blogBox">
                        <div class="img-fluid"><a href="../uploads/events/<?= $rows['ev_image'] ?>" class="inner" data-magnify="gal" data-group="exhib" data-caption="<?= $eventname ?>"><img src="../uploads/events/<?= $rows['ev_image'] ?>"></a></div>
                    </div>
                    <?php
                            }
                        }
                        ?>
                    
                </div>
            </div>
        </div>
    </main>
    <?php include_once('inc-footer.php') ?>
    <?php include_once('inc-script.php') ?>
</body>

</html>