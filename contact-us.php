<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us | Saya Homes | Get in Touch Today</title>	
<meta name="description" content="Get in touch with Saya Homes for inquiries about our residential and commercial projects." />
<meta name="keywords" content="contact us, get in touch, inquiries" />
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
          "name": "Contact Us",
          "item": "https://sayahomes.com/contact-us"  
        }]
    }
</script>

</head>

<body>
    <?php include_once('inc-header.php') ?>
    <main>
        <div class="inside-banner w-100">
            <picture class="h-100 w-100">
                <source media="(max-width: 500px)" srcset="./images/banner-contact-us-mob.webp">
                <source media="(max-width: 1400px)" srcset="./images/banner-contact-us-desktop.webp">
                <img src="./images/banner-contact-us.webp" class="h-100 object-cover" alt="Contact Us" title="Contact Us">
            </picture>
            <div class="container-lg position-absolute mx-auto h-100">
                <div class="bannerText" data-aos="fade-in">
                    <div class="project-title-container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Contact Us</li>
                        </ol>
                        <h1 class="h1 title">Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 position-relative overflow-hidden section-overview padding bg-secondary">
            <div class="container-lg">
                <div class="heading mx-auto text-center">
                    <h2 class="h2 text-primary mb-0">Get In Touch</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-8 contact-card">
                        <div class="inner h-100">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="card-detail">
                                <h6 class="card-title">Address</h6>
                                <ul class="list-inline">
                                    <li>Plot No. C-01, Sector Ecotech-12, Gr Noida (W) - 201306, Gautam Buddha Nagar (U.P.)</li>
                                    <li><a href="https://maps.app.goo.gl/kCj3iUB2DmCseyEE8" target="_blank" rel="noopener noreferrer">Get Location <i class="fa fa-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 contact-card">
                        <div class="inner h-100">
                            <i class="fa fa-phone"></i>
                            <div class="card-detail">
                                <h6 class="card-title">Contact Us</h6>
                                <ul class="list-inline">
                                    <li><a href="tel:01204491800">0120-4491800</a></li>
                                    <li><a href="mailto:contact@sayahomes.in">contact@sayahomes.in</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 contact-card">
                        <div class="inner h-100">
                            <i class="fa fa-users"></i>
                            <div class="card-detail">
                                <h6 class="card-title">Customer Relationship Management</h6>
                                <ul class="list-inline">
                                    <li><a href="tel:+919899508508">+91 95408 12345</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 contact-card">
                        <div class="inner h-100">
                            <i class="fa fa-building"></i>
                            <div class="card-detail">
                                <h6 class="card-title">Residential Projects</h6>
                                <ul class="list-inline">
                                    <li><a href="tel:+918888718888">+91 8888 71 8888</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 contact-card">
                        <div class="inner h-100">
                            <i class="fa fa-shop"></i>
                            <div class="card-detail">
                                <h6 class="card-title">Commercial Projects</h6>
                                <ul class="list-inline">
                                    <li><a href="tel:+918888328888">+91 8888 32 8888</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 position-relative overflow-hidden section-form">
            <div class="row g-0">
                <div class="col-lg-6 contact-form bg-image" style="background-image: url(./images/random-bg.webp); background-attachment:scroll">
                    <div class="padding px-5">
                        <div class="inner">
                            <div class="heading">
                                <h2 class="h2 text-primary">Have Any Query?</h2>
                                <p class="m-0 text-sans">We would love to hear from you.</p>
                            </div>
                            <div class="alert alert-danger small cstatus d-none"></div>
                            <form id="contactForm">
                                <div class="input-group mb-3">
                                    <div class="form-floating">
                                        <input type="text" name="cname" id="cname" class="form-control" placeholder="Name*">
                                        <label for="cname">Name*</label>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="form-floating">
                                        <input type="email" name="cemail" id="cemail" class="form-control" placeholder="Email*">
                                        <label for="cemail">Email*</label>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="form-floating">
                                        <input type="tel" name="cmobile" id="cmobile" class="form-control" placeholder="Mobile*">
                                        <label for="cmobile">Mobile*</label>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="form-floating">
                                        <textarea class="form-control h-auto" name="cquery" id="cquery" rows="4" placeholder="Query"></textarea>
                                        <label for="cquery">Query</label>
                                    </div>
                                </div>
                                <label for="agree"><small><input type="checkbox" id="agree"> I authorise Saya Group and its representatives to Call, SMS, RCS, Email or WhatsApp me about its projects and offers. This consent overrides any registration for DNC / NDNC.</small></label>
                                <div class="readmore">
                                    <input type="hidden" name="query_nature" value="contact">
                                    <button type="submit" class="button justify-content-center" id="contsubmti">Submit<i class="fa-solid fa-paper-plane"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mapBox">
                    <div class="inner h-100">
                        <iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.910114812492!2d77.44640678745125!3d28.602473222754025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cee63cec82b53%3A0xce8c253846aa1a81!2sSaya%20South%20X!5e0!3m2!1sen!2sin!4v1716028532318!5m2!1sen!2sin" frameborder="0" allowfullscreen="" style="border: 0px; height:100%" data-gtm-yt-inspected-8="true" data-gtm-yt-inspected-201076493_7="true" data-gtm-yt-inspected-17="true"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include_once('inc-footer.php') ?>
    <?php include_once('inc-script.php') ?>
</body>

</html>