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
<link rel="stylesheet" href="<?= $base_url ?>/css/new_layout.css?v=20260305" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
    <?php // include_once('inc-header.php'); ?>
    <?php include_once('new_header.php'); ?>
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
                            <li class="breadcrumb-item"><a href="<?= $base_url ?>/">Home</a></li>
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
    <?php // include_once('inc-footer.php'); ?>
    <?php include_once('new_footer.php') ?>
    <a href="<?= $base_url ?>/new_media-page.php?page=contact" class="section-5-enquire-btn" data-source="Common Enquiry">ENQUIRE NOW</a>
    <button type="button" id="scroll-to-hero-btn" class="scroll-to-hero-btn" aria-label="Scroll to top section" title="Back to top">
        <svg class="scroll-to-hero-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="18 15 12 9 6 15"></polyline>
        </svg>
    </button>
    <style>
        .scroll-to-hero-btn {
            position: fixed;
            bottom: 24px;
            right: 24px;
            width: 48px;
            height: 43px;
            background: #F6883E;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: opacity 0.3s ease, visibility 0.3s ease, transform 0.3s ease, background 0.2s ease;
        }
        .scroll-to-hero-btn.is-visible {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        .scroll-to-hero-btn:hover { background: #e57a35; }
        .scroll-to-hero-btn:focus {
            outline: 2px solid #F6883E;
            outline-offset: 2px;
        }
        .scroll-to-hero-icon {
            width: 24px;
            height: 24px;
            color: #fff;
        }
        @media (max-width: 1024px) {
            .scroll-to-hero-btn {
                bottom: 20px;
                right: 20px;
                width: 44px;
                height: 44px;
            }
            .scroll-to-hero-icon {
                width: 22px;
                height: 22px;
            }
        }
        @media (max-width: 640px) {
            .scroll-to-hero-btn {
                bottom: 24px;
                right: 43px;
                width: 42px;
                height: 38px;
            }
            .scroll-to-hero-icon {
                width: 20px;
                height: 20px;
            }
        }
    </style>
    <?php include_once('inc-script.php') ?>
    <script data-base-url="<?= $base_url ?>/" src="<?= $base_url ?>/js/new-home.js?v=20260305"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var mobileMenuToggle = document.getElementById('mobileMenuToggle');
            var hoverHeaderContainer = document.querySelector('.hover-header-container');
            var hoverHeaderClose = document.getElementById('hoverHeaderClose');
            if (!mobileMenuToggle || !hoverHeaderContainer) return;
            if (mobileMenuToggle.dataset.menuBound === '1') return;
            mobileMenuToggle.dataset.menuBound = '1';

            function closeHeaderMenu() {
                hoverHeaderContainer.classList.remove('active');
                document.body.classList.remove('menu-open');
                document.body.style.overflow = '';
                mobileMenuToggle.classList.remove('active');
            }

            mobileMenuToggle.addEventListener('click', function(e) {
                e.preventDefault();
                mobileMenuToggle.classList.toggle('active');
                hoverHeaderContainer.classList.toggle('active');
                document.body.classList.toggle('menu-open');
                document.body.style.overflow = hoverHeaderContainer.classList.contains('active') ? 'hidden' : '';
            });

            if (hoverHeaderClose) {
                hoverHeaderClose.addEventListener('click', function(e) {
                    e.preventDefault();
                    closeHeaderMenu();
                });
            }

            hoverHeaderContainer.addEventListener('click', function(e) {
                if (e.target === hoverHeaderContainer) closeHeaderMenu();
            });
        });
    </script>
    <script>
        (function() {
            var btn = document.getElementById("scroll-to-hero-btn");
            var heroSection = document.querySelector(".inside-banner");
            if (!btn || !heroSection) return;

            function updateScrollToHeroBtn() {
                var rect = heroSection.getBoundingClientRect();
                if (rect.bottom < 0) {
                    btn.classList.add("is-visible");
                    document.body.classList.add("scroll-hero-visible");
                } else {
                    btn.classList.remove("is-visible");
                    document.body.classList.remove("scroll-hero-visible");
                }
            }

            window.addEventListener("scroll", function() {
                requestAnimationFrame(updateScrollToHeroBtn);
            }, { passive: true });
            window.addEventListener("resize", function() {
                requestAnimationFrame(updateScrollToHeroBtn);
            });
            updateScrollToHeroBtn();

            btn.addEventListener("click", function() {
                heroSection.scrollIntoView({ behavior: "smooth", block: "start" });
            });
        })();
    </script>
</body>

</html>