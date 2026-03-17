<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saya Homes | Construction Updates</title>
    <meta name="description" content="Track the progress of our Saya Southx, Saya Biztop and Saya Piazza. Stay informed with the latest construction updates of Saya Homes real estate projects." />
    <meta name="keywords" content="construction updates, residential projects updates, commercial projects updates" />
    <?php include_once('inc-css.php') ?>
    <link rel="stylesheet" href="<?= $base_url ?>/css/new_layout.css?v=20260305" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <?php include_once('new_header.php') ?>
    <main>
        <div class="inside-banner w-100">
            <picture class="h-100 w-100">
                <source media="(max-width: 500px)" srcset="./images/saya-south-x-banner-sm.webp">
                <source media="(max-width: 1400px)" srcset="./images/saya-south-x-banner-d.webp">
                <img src="./images/south-x/saya-south-x-banner.webp" class="h-100 object-cover" alt="...">
            </picture>
            <div class="container-lg position-absolute mx-auto h-100">
                <div class="bannerText" data-aos="fade-in">
                    <div class="project-title-container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Construction Update</li>
                        </ol>
                        <h1 class="h1 title">Construction Update</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 position-relative overflow-hidden section-support padding bg-secondary">
            <div class="container-lg">
                <div class="heading mx-auto text-center">
                    <h2 class="h2 mb-0 text-primary">Construction Update</h2> 
                    <!-- <h2 class="h2 mb-0 text-primary">As on <?= date('F Y') ?></h2> -->
                </div>
                <div class="row g-4">
                    <div class="col-md-6 blogBox bogBlogBox newsBox">
                        <a href="#video-Modal" class="inner h-100 position-relative" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/LF59AhJwtu4?rel=0&amp;autoplay=1" data-title="Saya Piazza">
                            <div class="img-fluid mt-0 position-relative">
                                <img src="https://sayahomes.com/images/LF59AhJwtu4.webp" alt="Saya Homes" class="h-100 object-cover">
                                <button class="playBtn"><i class="fa fa-play"></i></button>
                            </div>
                            <article class="position-absolute">
                                <h5 class="blog-title text-white text-midsun mb-0">Saya Piazza</h5>
                            </article>
                        </a>
                    </div>
                    <div class="col-md-6 blogBox bogBlogBox newsBox">
                        <a href="#video-Modal" class="inner h-100 position-relative" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/EK6U9D6Au7E?rel=0&amp;autoplay=1" data-title="Saya South X">
                            <div class="img-fluid mt-0 position-relative">
                                <img src="https://sayahomes.com/images/EK6U9D6Au7E.webp" alt="Saya Homes" class="h-100 object-cover">
                                <button class="playBtn"><i class="fa fa-play"></i></button>
                            </div>
                            <article class="position-absolute">
                                <h5 class="blog-title text-white text-midsun mb-0">Saya South X</h5>
                            </article>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </main>
    <?php include_once('new_footer.php') ?>
    <a href="<?= $base_url ?>/new_media-page.php?page=contact" class="section-5-enquire-btn" data-source="Common Enquiry">ENQUIRE NOW</a>
    <button type="button" id="scroll-to-hero-btn" class="scroll-to-hero-btn" aria-label="Scroll to top section" title="Back to top">
        <svg class="scroll-to-hero-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="18 15 12 9 6 15"></polyline>
        </svg>
    </button>

    <div class="modal fade" id="video-Modal" tabindex="-1" role="dialog" aria-labelledby="Videos" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content border-0 shadow rounded-0">
                <div class="modal-header rounded-0">
                    <h5 class="modal-title text-white"></h5>
                    <button type="button" class="close videoClose" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe width="100%" height="315" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <style>
        .project-title-container .title {
            font-family: "Lato", sans-serif !important;
        }

        .project-title-container .breadcrumb .breadcrumb-item,
        .project-title-container .breadcrumb .breadcrumb-item a {
            font-family: Inter, "Open Sans", sans-serif !important;
        }

        .section-support .heading .h2 {
            font-family: Lato, sans-serif !important;
            font-weight: 700 !important;
            font-style: normal !important;
            font-size: 36px !important;
            line-height: 100% !important;
            letter-spacing: 0 !important;
            text-align: center !important;
            color: #111 !important;
        }

        .section-support .blog-title {
            font-family: "Lato", sans-serif !important;
            font-weight: 700 !important;
            line-height: normal !important;
            letter-spacing: 0 !important;
        }

        @media (max-width: 540px) {
            .section-support .heading .h2 {
                font-size: 24px !important;
            }
        }

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
        // Hamburger side menu + OUR PROJECTS dropdown – same as blog/home page
        (function () {
            function initMenuAnimation() {
                if (typeof gsap === 'undefined') {
                    initBasicMenuToggle();
                    return;
                }
                var mobileMenuToggle = document.getElementById('mobileMenuToggle');
                var hoverHeaderContainer = document.querySelector('.hover-header-container');
                var hoverHeaderContent = document.querySelector('.hover-header-content');
                var headerNavItemsMain = document.querySelectorAll('.header-nav-item-main');
                var headerNavItemsSecondary = document.querySelectorAll('.header-nav-item-secondary');
                var headerSocialIcons = document.querySelectorAll('.header-social-icon-bottom');
                var headerSocialLinkLeft = document.querySelector('.header-social-link-left');
                var hoverHeaderClose = document.getElementById('hoverHeaderClose');
                var body = document.body;
                if (!hoverHeaderContainer || !hoverHeaderContent) return;

                var menuTimeline = null;
                var isMenuOpen = false;
                var isMobile = window.innerWidth < 768;
                var isTablet = window.innerWidth >= 768 && window.innerWidth < 992;

                gsap.set(hoverHeaderContainer, { x: '100%', opacity: 0, visibility: 'hidden' });
                gsap.set(hoverHeaderContent, { x: 0, opacity: 1 });
                gsap.set([].slice.call(headerNavItemsMain).concat([].slice.call(headerNavItemsSecondary)), {
                    x: isMobile ? 30 : isTablet ? 40 : 50,
                    opacity: 0
                });
                gsap.set(headerSocialIcons, { y: 30, opacity: 0, scale: 0.8 });
                if (headerSocialLinkLeft) gsap.set(headerSocialLinkLeft, { x: -30 });

                function openMenu() {
                    if (isMenuOpen || menuTimeline) return;
                    isMenuOpen = true;
                    hoverHeaderContainer.classList.add('active');
                    body.classList.add('menu-open');
                    body.style.overflow = 'hidden';
                    menuTimeline = gsap.timeline({ defaults: { ease: 'power2.out' } });
                    gsap.set(hoverHeaderContainer, { visibility: 'visible' });
                    menuTimeline.to(hoverHeaderContainer, { x: 0, opacity: 1, duration: 2, ease: 'power2.out' });
                    menuTimeline.to(headerNavItemsMain, { x: 0, opacity: 1, duration: 0.45, stagger: 0.05, ease: 'power2.out' }, '-=1.4');
                    menuTimeline.to(headerNavItemsSecondary, { x: 0, opacity: 1, duration: 0.4, stagger: 0.04, ease: 'power2.out' }, '-=0.3');
                    if (headerSocialLinkLeft) menuTimeline.to(headerSocialLinkLeft, { x: 0, duration: 0.5, ease: 'back.out(1.2)' }, '-=0.35');
                    menuTimeline.to(headerSocialIcons, { y: 0, opacity: 1, scale: 1, duration: 0.5, stagger: 0.08, ease: 'back.out(1.4)' }, '-=0.3');
                }

                function closeMenu() {
                    if (!isMenuOpen || !menuTimeline) return;
                    if (menuTimeline) menuTimeline.kill();
                    var closeTimeline = gsap.timeline({
                        defaults: { ease: 'power2.in' },
                        onComplete: function () {
                            hoverHeaderContainer.classList.remove('active');
                            body.classList.remove('menu-open');
                            body.style.overflow = '';
                            if (mobileMenuToggle) mobileMenuToggle.classList.remove('active');
                            isMenuOpen = false;
                            menuTimeline = null;
                            var m = window.innerWidth < 768, t = window.innerWidth >= 768 && window.innerWidth < 992;
                            gsap.set(hoverHeaderContainer, { x: '100%', opacity: 0, visibility: 'hidden' });
                            gsap.set(hoverHeaderContent, { x: 0, opacity: 1 });
                            gsap.set([].slice.call(headerNavItemsMain).concat([].slice.call(headerNavItemsSecondary)), { x: m ? 30 : t ? 40 : 50, opacity: 0 });
                            gsap.set(headerSocialIcons, { y: 30, opacity: 0, scale: 0.8 });
                            if (headerSocialLinkLeft) gsap.set(headerSocialLinkLeft, { x: -30 });
                        }
                    });
                    closeTimeline.to(headerSocialIcons, { y: 30, opacity: 0, scale: 0.8, duration: 0.25, stagger: 0.02, ease: 'power2.in' });
                    if (headerSocialLinkLeft) closeTimeline.to(headerSocialLinkLeft, { x: -30, duration: 0.25, ease: 'power2.in' }, '-=0.15');
                    closeTimeline.to([].slice.call(headerNavItemsSecondary).concat([].slice.call(headerNavItemsMain)), { x: (window.innerWidth >= 768 ? 50 : window.innerWidth >= 480 ? 30 : 20), opacity: 0, duration: 0.3, stagger: 0.02, ease: 'power2.in' }, '-=0.1');
                    closeTimeline.to(hoverHeaderContainer, { x: '100%', opacity: 0, visibility: 'hidden', duration: 0.8, ease: 'power3.in' }, '-=0.2');
                }

                if (mobileMenuToggle && hoverHeaderContainer) {
                    mobileMenuToggle.addEventListener('click', function (e) {
                        e.preventDefault();
                        e.stopPropagation();
                        if (isMenuOpen) closeMenu(); else openMenu();
                    });
                }
                if (hoverHeaderClose && hoverHeaderContainer) {
                    hoverHeaderClose.addEventListener('click', function (e) {
                        e.preventDefault();
                        e.stopPropagation();
                        closeMenu();
                    });
                }
                if (hoverHeaderContainer) {
                    hoverHeaderContainer.addEventListener('click', function (e) {
                        if (e.target === hoverHeaderContainer && isMenuOpen) closeMenu();
                    });
                }
                if (hoverHeaderContent) {
                    hoverHeaderContent.addEventListener('click', function (e) { e.stopPropagation(); });
                }
                document.addEventListener('keydown', function (e) {
                    if (e.key === 'Escape' && isMenuOpen) closeMenu();
                });
                var resizeTimer;
                window.addEventListener('resize', function () {
                    clearTimeout(resizeTimer);
                    resizeTimer = setTimeout(function () {
                        if (!isMenuOpen && hoverHeaderContainer && hoverHeaderContent) {
                            var m = window.innerWidth < 768, t = window.innerWidth >= 768 && window.innerWidth < 992;
                            gsap.set(hoverHeaderContainer, { x: '100%', opacity: 0 });
                            gsap.set(hoverHeaderContent, { x: 0, opacity: 1 });
                            gsap.set([].slice.call(headerNavItemsMain).concat([].slice.call(headerNavItemsSecondary)), { x: m ? 30 : t ? 40 : 50, opacity: 0 });
                            gsap.set(headerSocialIcons, { y: 30, opacity: 0, scale: 0.8 });
                            if (headerSocialLinkLeft) gsap.set(headerSocialLinkLeft, { x: -30 });
                        }
                    }, 250);
                });
            }

            function initBasicMenuToggle() {
                var mobileMenuToggle = document.getElementById('mobileMenuToggle');
                var hoverHeaderContainer = document.querySelector('.hover-header-container');
                var hoverHeaderClose = document.getElementById('hoverHeaderClose');
                var body = document.body;
                if (mobileMenuToggle && hoverHeaderContainer) {
                    mobileMenuToggle.addEventListener('click', function (e) {
                        e.preventDefault();
                        hoverHeaderContainer.classList.toggle('active');
                        body.classList.toggle('menu-open');
                        body.style.overflow = hoverHeaderContainer.classList.contains('active') ? 'hidden' : '';
                    });
                }
                if (hoverHeaderClose && hoverHeaderContainer) {
                    hoverHeaderClose.addEventListener('click', function (e) {
                        e.preventDefault();
                        hoverHeaderContainer.classList.remove('active');
                        body.classList.remove('menu-open');
                        body.style.overflow = '';
                        if (mobileMenuToggle) mobileMenuToggle.classList.remove('active');
                    });
                }
            }

            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', function () { setTimeout(initMenuAnimation, 100); });
            } else {
                setTimeout(initMenuAnimation, 100);
            }
        })();

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

        // video modal
        const videoModalEl = document.getElementById('video-Modal');
        let videoModal;

        if (videoModalEl) {
            videoModal = new bootstrap.Modal(videoModalEl, {
                backdrop: 'static'
            });

            // Populate title and iframe src on modal show
            videoModalEl.addEventListener('show.bs.modal', event => {
                const button = event.relatedTarget;
                const title = button.getAttribute("data-title");
                const src = button.getAttribute("data-src");

                const modalTitle = videoModalEl.querySelector('.modal-title');
                const iframe = videoModalEl.querySelector('.modal-body iframe');

                if (modalTitle) modalTitle.innerHTML = title;
                if (iframe) iframe.setAttribute("src", src);
            });

            // Clear iframe src when modal is hidden (e.g. via close button or programmatic hide)
            videoModalEl.addEventListener('hidden.bs.modal', () => {
                const iframe = videoModalEl.querySelector('.modal-body iframe');
                if (iframe) iframe.removeAttribute('src');
            });
        }

        // Clear iframe when .videoClose is clicked (in case you want to manually close too)
        document.querySelectorAll(".videoClose").forEach(btn => {
            btn.addEventListener("click", function() {
                const iframe = videoModalEl?.querySelector('.modal-body iframe');
                if (iframe) iframe.removeAttribute("src");

                // Optionally hide the modal manually if .videoClose is outside the modal structure
                if (videoModal) videoModal.hide();
            });
        });
        // video modal
    </script>
</body>

</html>