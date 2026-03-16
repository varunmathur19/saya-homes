<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Saya Homes | Top Commercial Property in Greater Noida West</title>
<meta name="description" content="Saya Homes offers commercial property in Noida. Buy Luxury commercial properties in Noida. Retail, offices, Shops in Greater Noida West & Noida Expressway." />
<meta name="keywords" content="saya homes, commercial property in greater noida, commercial property in greater noida west, commercial property on noida expressway, top commercial property in greater noida, best commercial property in greater noida, commercial projects in greater noida, commercial projects in greater noida west" />
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
          "name": "Projects",
          "item": "https://sayahomes.com/projects"  
        }
        ,{
        "@type": "ListItem",
        "position": 3, 
        "name": "https://sayahomes.com/commercial",
        "item": "Commercial" 
        }
    ]
    }
</script>

</head>

<body>
    <?php // include_once('inc-header.php'); ?>
    <?php include_once('new_header.php'); ?>
    <main>
        <div class="inside-banner w-100">
            <picture class="h-100 w-100">
                <img src="./images/south-x/saya-south-x-banner.webp" class="h-100 object-cover" alt="Architectural View of Saya South X Commercial Complex" title="Architectural View of Saya South X Commercial Complex">
            </picture>
            <div class="container-lg position-absolute mx-auto h-100">
                <div class="bannerText" data-aos="fade-in">
                    <div class="project-title-container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= $base_url ?>/">Home</a></li>
                            <li class="breadcrumb-item"><a href="projects">Projects</a></li>
                            <li class="breadcrumb-item active">Commercial</li>
                        </ol>
                        <p class="h1 title">Projects</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 position-relative overflow-hidden padding section-projects">
            <div class="container-lg">
                <div class="heading mx-auto text-center">
                    <h1 class="h2 text-primary mb-0">Commercial Projects</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 project-slide">
                        <a href="saya-southX" class="inner">
                            <div class="img-fluid">
                                <picture><img src="./images/saya-south-x-th.webp" class="h-100 object-cover" alt="Saya South X Commercial Complex" title="Saya South X Commercial Complex"></picture>
                            </div>
                            <div class="project-slide-footer">
                                <div class="projectBoxName">
                                    <h6 class="project-slide-title">Saya South X</h6>
                                    <span class="project-slide-location">Gr. Noida (W)</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 project-slide">
                        <a href="saya-biztop" class="inner">
                            <div class="img-fluid">
                                <picture><img src="./images/saya-biztop-th.webp" class="h-100 object-cover" alt="Saya Biztop"></picture>
                            </div>
                            <div class="project-slide-footer">
                                <div class="projectBoxName">
                                    <h6 class="project-slide-title">Saya Biztop</h6>
                                    <span class="project-slide-location">Gr. Noida (W)</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 project-slide">
                        <a href="saya-piazza" class="inner">
                            <div class="img-fluid">
                                <picture><img src="./images/saya-piazza-th.webp" class="h-100 object-cover" alt="Saya Piazza"></picture>
                            </div>
                            <div class="project-slide-footer">
                                <div class="projectBoxName">
                                    <h6 class="project-slide-title">Saya Piazza</h6>
                                    <span class="project-slide-location">Noida Expressway</span>
                                </div>
                            </div>
                        </a>
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