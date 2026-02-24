<?php
include_once "admin-panel-ecorp/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">    
<title>Events | Saya Homes | Celebrating Community & Culture</title>	
<meta name="description" content="Stay updated with our latest Events by Saya Homes, here we showcase exciting community gatherings, property launches, and exclusive offers." />	
<meta name="keywords" content="saya event, event" />
<?php include_once('inc-css.php') ?>
<script type="application/ld+json">
       {
        "@context": "https://schema.org/", 
        "@type": "BreadcrumbList", 
        "itemListElement": [{
          "@type": "ListItem", 
          "position": 1, 
          "name": "Saya Homes",
          "item": "https://sayahomes.com/" 
        },{
          "@type": "ListItem", 
          "position": 2, 
          "name": "Events",
          "item": "https://sayahomes.com/events"  
        }]
    }
</script>

</head>

<body>
    <?php include_once('inc-header.php') ?>
    <main>
        <div class="inside-banner w-100">
            <picture class="h-100 w-100">
                <source media="(max-width: 500px)" srcset="./images/saya-south-x-banner-sm.webp">
                <source media="(max-width: 1400px)" srcset="./images/saya-south-x-banner-d.webp">
                <img src="<?php echo $base_url; ?>/images/south-x/saya-south-x-banner.webp" class="h-100 object-cover" alt="View of Saya South X Commercial Mall" title="View of Saya South X Commercial Mall">
            </picture>
            <div class="container-lg position-absolute mx-auto h-100">
                <div class="bannerText" data-aos="fade-in">
                    <div class="project-title-container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Events</li>
                        </ol>
                        <h1 class="h1 title">Events</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 position-relative overflow-hidden padding section-events">
            <div class="container-lg">
                <div class="row g-4">
                    <?php
                        $data = mysqli_query($link, "SELECT * FROM `events` WHERE `ev_status`='1'  ORDER BY `ev_date` DESC");
                        $check = mysqli_num_rows($data);
                        $i = 1;
                        if ($check > 0) {
                            while ($rows = mysqli_fetch_assoc($data)) {
                    ?>
                    <div class="col-md-4 blogBox newsBox">
                        <a class="inner h-100" href="<?php echo $base_url; ?>/events/<?php echo $rows['ev_group']?>">
                            <div class="img-fluid"><img src="uploads/events/<?= $rows['ev_image'] ?>" alt="<?= $rows['ev_title'] ?>" class="h-100 object-cover" title="Shri Laxmi Narayan Yagya at SouthX"></div>
                            <article>
                                <h6 class="blog-title text-primary"><?= $rows['ev_title'] ?></h6>
                                <div class="date"><?= date('j F, Y', strtotime($rows['ev_date'])) ?></div>
                            </article>
                        </a>
                    </div>
                    <?php

                    }
                    } ?>

                </div>
            </div>
        </div>
    </main>
    <?php include_once('inc-footer.php') ?>
    <?php include_once('inc-script.php') ?>
</body>

</html>