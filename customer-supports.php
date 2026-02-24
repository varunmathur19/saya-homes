<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Customer Support | Saya Homes | We're Here to Help</title>	
<meta name="description" content="Have questions or need help? Our dedicated Saya Homes customer support team is ready to assist with inquiries, service requests, and property guidance." />	
<meta name="keywords" content="customer support, residential projects support, commercial projects support" />
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
          "name": "Customer Support",
          "item": "https://sayahomes.com/customer-supports"  
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
                <img src="./images/south-x/saya-south-x-banner.webp" class="h-100 object-cover" alt="View of Saya South X Commercial Mall" title="View of Saya South X Commercial Mall">
            </picture>
            <div class="container-lg position-absolute mx-auto h-100">
                <div class="bannerText" data-aos="fade-in">
                    <div class="project-title-container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Customer Support</li>
                        </ol>
                        <h1 class="h1 title">Customer Support</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 position-relative overflow-hidden section-support padding bg-secondary">
            <div class="container-lg">
                <div class="heading mx-auto text-center">
                    <h2 class="h2 mb-0 text-primary">Customer Support</h2>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-sm-6 col-md-6 contact-card">
                        <div class="inner h-100">
                            <i class="fa fa-phone"></i>
                            <div class="card-detail">
                                <h6 class="card-title">Phone</h6>
                                <ul class="list-inline">
                                    <li><a href="tel:919540812345">+91 95408 12345</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 contact-card">
                        <div class="inner h-100">
                            <i class="fa fa-envelope"></i>
                            <div class="card-detail">
                                <h6 class="card-title">Email</h6>
                                <ul class="list-inline">
                                    <li><a href="mailto:customercare@sayahomes.in">customercare@sayahomes.in</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 contact-form">
                        <div class="inner bg-white">
                            <div class="alert alert-danger small d-none custstatus"></div>
                            <form id="contactForm">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="custname" id="custname" required="" value="" placeholder="Name*">
                                                <label for="custname">Name*</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" name="custmobile" id="custmobile" required="" value="" placeholder="Mobile*">
                                                <label for="custmobile">Mobile*</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="form-floating">
                                                <input type="email" class="form-control" name="custemail" id="custemail" required="" value="" placeholder="Email*">
                                                <label for="custemail">Email*</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="form-floating">
                                                <select id="project_name" name="custproject_name" class="form-control form-select" required="">
                                                    <option value="">---</option>
                                                    <option value="Saya Gold Avenue">Saya Gold Avenue</option>
                                                    <option value="Saya Zion">Saya Zion</option>
                                                    <option value="Saya Zenith">Saya Zenith</option>
                                                    <option value="Saya Desire Residency">Saya Desire Residency</option>
                                                    <option value="Saya South X">Saya South X</option>
                                                    <option value="Saya Piazza">Saya Piazza</option>
                                                </select>
                                                <label for="custproject_name">Project Name *</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <textarea class="form-control" name="custquery" id="custquery" rows="7" placeholder="Query"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="readmore mt-2">
                                            <input type="hidden" name="query_nature" value="CustomerSupport">
                                            <button type="submit" class="button justify-content-center inverse mx-auto" id="contsubmti">Submit <i class="fa-solid fa-paper-plane"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include_once('inc-footer.php') ?>
    <?php include_once('inc-script.php') ?>
</body>

</html>