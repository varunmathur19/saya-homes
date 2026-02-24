<?php  
    require_once 'admin-panel-ecorp/config.php';

    $slugurl = '';
    if (isset($_GET['slugurl'])) {
        $slugurl = mysqli_real_escape_string($link,$_GET['slugurl']);
    } 

    $query = mysqli_query($link, "SELECT * FROM `blogs` WHERE `status`='1' AND `slugurl`='".$slugurl."'");
    $brow=mysqli_fetch_array($query);

    if($brow['slugurl'] != $slugurl || empty($slugurl)){
        header("Location: blogs");
        exit();
    }
?>  

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= (!empty($brow['meta_title']))?$brow['meta_title']:''?></title>
    <meta name="description" content="<?= (!empty($brow['meta_desc']))?$brow['meta_desc']:''?>" />
    <meta name="keywords" content="<?= (!empty($brow['meta_key']))?$brow['meta_key']:''?>" />

    <?php include_once('inc-css.php') ?>
</head>

<body>
    <?php include_once('inc-header.php') ?>
    <main>
        <div class="inside-banner w-100">
            <picture class="h-100 w-100">
                <source media="(max-width:425px)" srcset="../images/mblogs-banner.jpg">
                <img src="../images/blogs-banner.jpg" class="h-100 object-cover" alt="...">
            </picture>
            <div class="container-lg position-absolute mx-auto h-100">
                <div class="bannerText" data-aos="fade-in">
                    <div class="project-title-container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="https://www.sayahomes.com/blogs.php">Blogs</a></li>
                            <li class="breadcrumb-item active"><?= (!empty($brow['heading']))?$brow['heading']:''?></li>
                        </ol>
                        <h1 class="h1 title">Blogs</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 padding section-blogs">
            <div class="container-lg">
                <div class="row gap-row">
                    <div class="col-lg-8 main-blog-box">
                        <div class="inner">
                            <span class="date mb-3">By <span class="text-dark">Saya Homes</span>, <?= (!empty($brow['date'])) ? date('d-m-Y', strtotime($brow['date'])) : '' ?></span>
                            <div class="heading">
                                <h2 class="h2 text-primary mb-0"><?= (!empty($brow['heading']))?$brow['heading']:''?></h2>
                            </div>
                            <figure class="h-100"><img src="../uploads/blog-images/<?= (!empty($brow['image']))?$brow['image']:''?>" alt="Why is buying property during Navratri considered auspicious?" class="h-100 object-cover"></figure>
                            <article class="main-blog-body">
                                <div>
                                <?= (!empty($brow['content']))?$brow['content']:''?>
                                </div>
                            </article>
                            <div class="form-row form-gap-row mt-4">
                                <div class="col-sm-6 blogsPage-control"><a href="why-leasing-models-are-the-future-of-profitable-real-estate-ventures" class=""><i class="fa fa-long-arrow-left"></i>
                                        <p class="mb-0"><span class="d-block">Previous</span>Why Leasing Models Are the Fut...</p>
                                    </a></div>
                                <div class="col-sm-6 blogsPage-control text-right"></div>
                            </div>
                        </div>
                    </div>
                    <aside class="col-lg-4 inside-blogs-aside">
                        <div class="inner">
                            <div class="blog-asideBox">
                                <div class="form-group d-flex mb-0"><input type="text" name="blog_search" id="blog_search" class="form-control" placeholder="Search" value=""></div>
                            </div>
                            <div class="blog-asideBox">
                                <div class="heading mb-3">
                                    <h4 class="text-serif mb-0">Follow Us</h4>
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

    <div class="modal fade" id="disclaimersaya" tabindex="-1" role="dialog" aria-labelledby="sapnaModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content border-0 shadow rounded-0">
                <div class="modal-header rounded-0">
                    <h5 class="modal-title text-white">DISCLAIMER</h5>
                </div>
                <div class="modal-body p-0 bg-white">
                    <div class="disclaimerbody my-3 px-3">
                        <p><small>This disclaimer (“Disclaimer”) will be applicable to the Website. By using or accessing the Website you agree with the Disclaimer without any qualification or limitation. The Company reserves the right to add, alter or delete material from the Website at any time and may, at any time, revise these Terms without notifying you.</small></p><small></small>
                        <p><small> You are bound by any such amendments, and the Company, therefore, advise that you periodically visit this page to review the current Terms. The Website and all its content are provided with all faults on an “as is” and “as available” basis. No information given under this Website creates a warranty or expands the scope of any warranty that cannot be disclaimed under applicable law. Your use of the Website is solely at your own risk.</small></p>
                        <p><small>This Website is for guidance only. It does not constitute part of an offer or contract. Design &amp; specifications are subject to change without prior notice. Computer generated images are the artist’s impression and are indicative of the actual designs. The particulars contained in the mentioned details of the Projects/developments undertaken by the Company including depicting banners/posters of the Project. The contents are being modified in terms of the stipulations/recommendations under the Real Estate Regulation Act, 2016 and Rules made thereunder (“RERA”) and accordingly may not be fully in line thereof as of date. You are therefore required to verify all the details, including area, amenities, services, terms of sales and payments and other relevant terms independently with the sales team/ company prior to concluding any decision for buying any unit(s) in any of the said projects. </small></p>
                        <p><small>Till such time the details are fully updated, the said information will not be construed as an advertisement. To find out more about a project/development, please telephone our sales centers or visit our sales office during opening hours and speak to one of our sales staff. In no event will the Company be liable for claims made by the users, including seeking any cancellation for any of the inaccuracies in the information provided on this Website, though all efforts have to be made to ensure accuracy.</small></p>
                        <p><small>The Company will under no circumstance be liable for any expense, loss or damage including, without limitation, indirect or consequential loss or damage, or any expense, loss or damage whatsoever arising from use, or loss of use, of data, arising out of or in connection with the use of this Website.</small></p>
                    </div>
                    <button class="modal-close text-serif" id="iagreebtn"><span>I HAVE READ &amp; UNDERSTOOD THE DISCLAIMER</span><strong class="mb-0 h6">I Agree</strong></button>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('inc-script.php') ?>
</body>

</html>