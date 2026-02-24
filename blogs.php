<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Saya Blog | Residential & Commercial Projects in Ghaziabad, Noida</title>	
<meta name="description" content="Stay updated on the latest real estate residential and commercial projects in Delhi NCR with insightful blogs from Saya Homes." />	
<meta name="keywords" content="saya homes blogs, residential projects in ghaziabad, residential projects in noida, residential projects in greater noida west, commercial projects in greater noida west, commercial property in greater noida west" />
<?php include_once('inc-css.php') ?>
<?php include_once('admin-panel-ecorp/config.php') ?>
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
        "name": "Blogs",
        "item": "https://sayahomes.com/blogs"  
    }]
}
</script>

</head>

<body>
    <?php include_once('inc-header.php') ?>
    <main>
        <div class="inside-banner w-100">
            <picture class="h-100 w-100">
                <source media="(max-width:425px)" srcset="../images/mblogs-banner.jpg">
                <img src="../images/blogs-banner.jpg" class="h-100 object-cover" alt="View of Saya South X Commercial Mall" title="View of Saya South X Commercial Mall">
            </picture>
            <div class="container-lg position-absolute mx-auto h-100">
                <div class="bannerText" data-aos="fade-in">
                    <div class="project-title-container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Blogs</li>
                        </ol>
                        <h1 class="h1 title">Blogs</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 position-relative overflow-hidden padding pb-0 section-blogs">
            <div class="container-lg">
                <div class="heading mx-auto text-center">
                    <h2 class="h2 text-primary mb-0">Latest Blogs</h2>
                </div>
                <div class="latest-blogs-container">
                    <?php
                        $data = mysqli_query($link, "SELECT * FROM `blogs` WHERE `status`='1' ORDER BY `id` DESC LIMIT 2");
                        $check = mysqli_num_rows($data);
                    ?>
                    <div class="row g-4"><?php
                        if ($check > 0) {
                            while ($rows = mysqli_fetch_assoc($data)) {
                        ?>
                        <div class="col-md-6 blogBox bigBlogBox">
                            <a href="<?php echo $base_url; ?>/blogs/<?php echo $rows['slugurl']?>" class="inner h-100 position-relative">
                                <div class="img-fluid"><img src="./uploads/blog-images/<?= $rows['image'] ?>" alt="<?= $rows['heading'] ?>" class="h-100 object-cover"></div>
                                <article class="position-absolute">
                                    <h6 class="blog-title text-white text-midsun"><?= $rows['heading'] ?></h6>
                                    <span class="date">By <span class="text-white"><?= $rows['byteam'] ?></span>, <?= date("d-m-Y", strtotime($rows['date'])) ?></span>
                                </article>
                            </a>
                        </div>
                        <?php 
                            }
                        } 
                        ?>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="w-100 padding section-blogs">
            <div class="container-lg">
                <div class="row gap-row">
                    <div class="col-lg-7 inside-blogsArchive">
                        <?php
                        $data = mysqli_query($link, "SELECT * FROM `blogs` WHERE `status`='1' ORDER BY `id` DESC LIMIT 2, 2000");
                            $check = mysqli_num_rows($data);
                        ?>
                        <div class="row gap-row">
                        <?php
                        if ($check > 0) {
                            while ($rows = mysqli_fetch_assoc($data)) {
                        ?>
                            <div class="col-md-12 blogBox">
                                <a href="<?php echo $base_url; ?>/blogs/<?php echo $rows['slugurl']?>" class="inner h-100">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="img-fluid"><img src="./uploads/blog-images/<?= $rows['image'] ?>" alt="Why is buying property during Navratri considered auspicious?" class="h-100 object-cover" title="Real Estate"></div>
                                        </div>
                                        <div class="col-md-8">
                                            <article>
                                                <h6 class="blog-title text-primary"><?= $rows['heading'] ?></h6>
                                                <span class="date">By <span class="text-dark"><?= $rows['byteam'] ?></span>, <?= date("d-m-Y", strtotime($rows['date'])) ?></span>
                                            </article>
                                        </div>
                                    </div>
                                </a>
                            </div>
                           
                        <?php 
                            }
                        } else {
                    ?>
                    <div class="col-12">
                            <p class="text-muted">No results found.</p>
                        </div>
                    <?php } ?>
                    </div>
                        <!-- <div class="pagination-controls d-flex justify-content-center gap-3 mt-4">
                            <div class="readmore mt-0 w-auto"><button type="button" class="button button-sm justify-content-center" disabled=""><i class="fa fa-chevron-left"></i> Previous</button></div>
                            <div>
                                <button class="btn btn-outline-secondary rounded active">1</button>
                                <button class="btn btn-outline-secondary rounded ">2</button>
                                <button class="btn btn-outline-secondary rounded ">3</button>
                                <button class="btn btn-outline-secondary rounded ">4</button>
                            </div>
                            <div class="readmore mt-0 w-auto"><button type="button" class="button button-sm justify-content-center" disabled="">Next <i class="fa fa-chevron-right"></i></button></div>
                        </div> -->
                    </div>
                    <aside class="col-lg-5 inside-blogs-aside">
                        <div class="inner">
                            <div class="blog-asideBox">
                                <div class="form-group d-flex mb-0"><input type="text" name="blog_search" id="blog_search" class="form-control" placeholder="Search" value=""></div>
                            </div>
                            <div class="blog-asideBox">
                                <div class="heading mb-3">
                                    <h4 class="text-primary mb-0">Follow Us</h4>
                                </div>
                                <div class="shareBtns d-flex gap-2">
                                    <a href="https://www.facebook.com/sayahomesofficial" target="_blank"><i class="fab fa-facebook-f icon-circular bg-white"></i></a>
                                    <a href="https://www.instagram.com/sayahomes/" target="_blank"><i class="fab fa-instagram icon-circular bg-white"></i></a>
                                    <a href="https://www.linkedin.com/company/saya-homes target='_blank'"><i class="fab fa-linkedin-in icon-circular bg-white"></i></a>
                                </div>
                            </div>
                            <div class="blog-asideBox">
                                <form method="POST" id="subsforms"><span class="substatus text-danger py-2"></span>
                                    <div class="form-group d-flex mb-0"><input type="text" name="subscribe" id="subscribe" class="form-control" placeholder="Email"><input type="hidden" name="subsactive" value="active"><button id="subscribeBtn" type="submit" class="inlineBtn">Subscribe</button></div>
                                </form>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </main>
    <?php include_once('inc-footer.php') ?>

    <?php include_once('inc-script.php') ?>
</body>

</html>