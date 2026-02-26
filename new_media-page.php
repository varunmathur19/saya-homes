<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Media Page</title>
    <meta name="description" content="Saya Group clears ₹1,500 crore debt - Read the full coverage from Realty+, The Economic Times and other leading media outlets." />
    <?php include_once('new-css.php') ?>
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="<?= $base_url ?>/css/new_mediatwopage.css">
    <link rel="stylesheet" href="<?= $base_url ?>/css/new_mediatwopage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Inter:wght@300;400;500;600;700&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<?php
$is_contact_page = isset($_GET['page']) && $_GET['page'] === 'contact';
$is_career_page = isset($_GET['page']) && $_GET['page'] === 'career';
?>
<body class="new-media-page media-two-page<?= $is_contact_page ? ' new-contact-page' : '' ?><?= $is_career_page ? ' new-career-page' : '' ?>">
    <?php include_once('new_header.php');
    ?>
    <a href="#formModal" data-bs-toggle="modal" data-bs-source="Media Enquiry" class="section-5-enquire-btn">ENQUIRE NOW</a>

    <!-- Media Banner Section (mediabg / contact / career) -->
    <section class="media-banner-section<?= $is_contact_page ? ' contact-banner-section' : '' ?><?= $is_career_page ? ' career-banner-section' : '' ?>">
        <div class="media-banner-image" style="background-image: url('<?= $base_url ?>/images/new_theme/<?= $is_contact_page ? 'contactpagebanner.jpg' : ($is_career_page ? 'carrerbanner.jpg' : 'mediabg.jpg') ?>');"></div>
        <div class="media-banner-content">
            <h1 class="media-banner-title"><?= $is_contact_page ? 'Contact Us' : ($is_career_page ? 'Careers' : 'In The Media') ?></h1>
            <nav class="media-banner-breadcrumb" aria-label="Breadcrumb">
                <a href="<?= $base_url ?>/new_home.php" class="media-breadcrumb-link">Homepage</a>
                <img src="<?= $base_url ?>/images/svg/blogarrow.svg" alt="" class="media-breadcrumb-arrow" aria-hidden="true">
                <?php if ($is_contact_page): ?>
                <span class="media-breadcrumb-link media-breadcrumb-link-blog">Contact Us</span>
                <?php elseif ($is_career_page): ?>
                <span class="media-breadcrumb-link media-breadcrumb-link-blog">Careers</span>
                <?php else: ?>
                <a href="<?= $base_url ?>/new-media-one-page.php" class="media-breadcrumb-link media-breadcrumb-link-blog">media</a>
                <?php endif; ?>
            </nav>
        </div>
    </section>

    <?php if (!$is_contact_page && !$is_career_page): ?>
    <!-- News Ticker Bar (orange strip) - marquee -->
    <div class="media-news-ticker">
        <div class="media-news-ticker-track" aria-hidden="true">
            <div class="media-news-ticker-inner">
                <div class="media-news-item">
                    <span class="media-news-badge">News</span>
                    <span class="media-news-headline">ReportReal Estate @2026 - Saya Group clears ₹1,500 crore debt</span>
                </div>
                <div class="media-news-item">
                    <span class="media-news-badge">News</span>
                    <img src="<?= $base_url ?>/images/svg/Star.svg" alt="" class="media-news-star" aria-hidden="true">
                    <span class="media-news-headline">Saya Group Launches Grand Umbrella Campaign; Targets INR</span>
                </div>
            </div>
            <div class="media-news-ticker-inner">
                <div class="media-news-item">
                    <span class="media-news-badge">News</span>
                    <span class="media-news-headline">ReportReal Estate @2026 - Saya Group clears ₹1,500 crore debt</span>
                </div>
                <div class="media-news-item">
                    <span class="media-news-badge">News</span>
                    <img src="<?= $base_url ?>/images/svg/Star.svg" alt="" class="media-news-star" aria-hidden="true">
                    <span class="media-news-headline">Saya Group Launches Grand Umbrella Campaign; Targets INR</span>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php if ($is_contact_page): ?>
    <!-- Contact Details Section (Contact Us page only) -->
    <section class="contact-details-section">
        <div class="contact-details-inner">
            <div class="contact-details-two-col">
                <div class="contact-details-left">
                    <div class="contact-details-left-container">
                        <div class="contact-details-item">
                            <div class="contact-details-icon-wrap">
                                <svg class="contact-details-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            </div>
                            <div class="contact-details-text">
                                <h3 class="contact-details-heading">Registered Office</h3>
                                <p class="contact-details-desc">Saya Homes, Plot No. 10/1, Vaibhav Khand, Indirapuram, Ghaziabad, Uttar Pradesh - 201014</p>
                            </div>
                        </div>
                        <div class="contact-details-item">
                            <div class="contact-details-icon-wrap">
                                <svg class="contact-details-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                            </div>
                            <div class="contact-details-text">
                                <h3 class="contact-details-heading">Customer Support</h3>
                                <p class="contact-details-desc">crm@sayahomes.in</p>
                                <p class="contact-details-desc">+91 120 482 7700</p>
                            </div>
                        </div>
                        <div class="contact-details-item">
                            <div class="contact-details-icon-wrap">
                                <svg class="contact-details-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                            </div>
                            <div class="contact-details-text">
                                <h3 class="contact-details-heading">Sales Enquiries</h3>
                                <p class="contact-details-desc"><span class="contact-details-desc-label">Residential:</span><br>+91 120 482 7700</p>
                                <p class="contact-details-desc"><span class="contact-details-desc-label">Commercial:</span><br>commercial@sayahomes.in</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-details-right">
                    <div class="contact-details-right-container">
                        <h2 class="contact-details-right-title">Contact Details</h2>
                        <div class="section-10-contact-us-form">
                            <form action="" class="callback-form">
                                <h2 class="callback-form-title">Get In Touch</h2>
                                <div class="callback-form-row">
                                    <input type="text" placeholder="Name *" required>
                                    <input type="tel" placeholder="Phone No *" required>
                                    <input type="email" placeholder="Email *" required>
                                </div>
                                <div class="callback-form-row">
                                    <textarea class="contact-details-message-input" placeholder="Message" rows="3"></textarea>
                                </div>
                                <button type="submit" class="callback-form-submit">Get a Call Back</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Page Map Section -->
    <section class="contact-page-map-section">
        <div class="contact-page-map-wrap">
            <iframe class="contact-page-map-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.910114812492!2d77.44640678745125!3d28.602473222754025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cee63cec82b53%3A0xce8c253846aa1a81!2sSaya%20South%20X!5e0!3m2!1sen!2sin!4v1716028532318!5m2!1sen!2sin" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Saya Homes Location Map"></iframe>
        </div>
    </section>

    <?php elseif ($is_career_page): ?>
    <!-- Career page: Why Work With Saya + 4 feature cards -->
    <section class="career-section career-section-main" aria-label="Careers content">
        <div class="career-section-inner">
            <h2 class="career-section-title">Why Work With Saya?</h2>
            <p class="career-section-desc">Of the various assets, services, and, products a company can boast of, its strength is always measured by its employees. Imbibing this ethos, we at Saya invest a great deal to train the human capital we have. The training and education programs we run are designed to be easy, engaging, and interactive. This allows our employees to enhance their skill sets.</p>
        </div>
    </section>
    <section class="career-cards-section" aria-label="Career benefits">
        <div class="career-cards-inner">
            <div class="career-cards-grid">
                <div class="career-card">
                    <div class="career-card-icon-wrap">
                        <img src="<?= $base_url ?>/images/svg/growth.svg" alt="" class="career-card-icon" aria-hidden="true">
                    </div>
                    <h3 class="career-card-title">Professional Growth</h3>
                    <p class="career-card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad...</p>
                </div>
                <div class="career-card">
                    <div class="career-card-icon-wrap">
                        <img src="<?= $base_url ?>/images/svg/culture.svg" alt="" class="career-card-icon" aria-hidden="true">
                    </div>
                    <h3 class="career-card-title">Collaborative Culture</h3>
                    <p class="career-card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad...</p>
                </div>
                <div class="career-card">
                    <div class="career-card-icon-wrap">
                        <img src="<?= $base_url ?>/images/svg/rewards.svg" alt="" class="career-card-icon" aria-hidden="true">
                    </div>
                    <h3 class="career-card-title">Competitive Rewards</h3>
                    <p class="career-card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad...</p>
                </div>
                <div class="career-card">
                    <div class="career-card-icon-wrap">
                        <img src="<?= $base_url ?>/images/svg/Innovative.svg" alt="" class="career-card-icon" aria-hidden="true">
                    </div>
                    <h3 class="career-card-title">Innovative Environment</h3>
                    <p class="career-card-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad...</p>
                </div>
            </div>
        </div>
    </section>
    <?php else: ?>
    <!-- News & Media Section: title, tabs, sort by year (template layout) -->
    <section class="news-media-section media-two-news-section">
        <div class="news-media-inner">
            <h2 class="news-media-title">News & Media</h2>
            <div class="news-media-controls">
                <div class="news-media-tabs-wrap">
                    <nav class="news-media-tabs" role="tablist" aria-label="Media type">
                        <button type="button" class="news-media-tab news-media-tab--active" role="tab" aria-selected="true" data-tab="digital">Digital Media</button>
                        <button type="button" class="news-media-tab" role="tab" aria-selected="false" data-tab="pr">PR Coverage</button>
                        <button type="button" class="news-media-tab" role="tab" aria-selected="false" data-tab="print">Print Media</button>
                        <div class="news-media-separator" aria-hidden="true">
                            <span class="news-media-separator-track"></span>
                            <span class="news-media-separator-indicator"></span>
                        </div>
                    </nav>
                </div>
                
            </div>
        </div>
    </section>
    <section>
         <div class="news-media-sort-row">
                    <div class="news-media-sort-wrap">
                        <select class="news-media-sort-select" id="sort-by-year-media" aria-label="Sort by year">
                            <option value="">Sort by Year</option>
                        </select>
                        <span class="news-media-sort-arrow" aria-hidden="true">
                            <img src="<?= $base_url ?>/images/svg/leftarrowaldier.svg" alt="" class="news-media-sort-arrow-img">
                        </span>
                    </div>
                </div>
         </section>

    <!-- News & Media Template Grid: 3 columns, 2 boxes per column (3x2) -->
    <section class="media-article-section media-template-section">
        <div class="media-article-inner">
            <div class="media-template-grid">
                <!-- Column 1 -->
                <div class="media-template-col">
                    <!-- Box 1 - Featured (image) -->
                    <article class="media-template-box media-template-box--featured">
                        <div class="media-template-featured-image-outer">
                            <div class="media-template-image media-template-image--full">
                                <img src="<?= $base_url ?>/images/new_theme/newsandmedia.jpg" alt="Saya Group launches ultra-luxury project in Ghaziabad's Indirapuram; sales projected at ₹1,600 crore">
                            </div>
                        </div>
                        <div class="media-template-box-content">
                            <div class="media-template-meta">
                                <span class="media-template-source-name">Business Today</span>
                                <span class="media-template-meta-sep">•</span>
                                <svg class="media-template-calendar" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
                                <span class="media-template-date">Sept 20, 2025</span>
                            </div>
                            <p class="media-template-subtitle">Top 10 Real Estate Developers Shaping India's Urban Landscape</p>
                            <a href="<?= $base_url ?>/new-media-two-page.php" class="media-template-readmore">Read More</a>
                        </div>
                    </article>
                    <!-- Box 2 - Text only -->
                    <article class="media-template-box">
                        <div class="media-template-meta media-template-meta--top">
                            <span class="media-template-source-name">The Hindu</span>
                            <span class="media-template-meta-sep">•</span>
                            <svg class="media-template-calendar" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
                            <span class="media-template-date">Sept 15, 2025</span>
                        </div>
                        <h3 class="media-template-title">Saya Group's Commitment to Sustainable Development</h3>
                        <a href="<?= $base_url ?>/new-media-two-page.php" class="media-template-readmore">Read More</a>
                    </article>
                </div>
                <!-- Column 2 -->
                <div class="media-template-col">
                    <!-- Box 4 - Text only (upar) -->
                    <article class="media-template-box">
                        <div class="media-template-meta media-template-meta--top">
                            <span class="media-template-source-name">Forbes India</span>
                            <span class="media-template-meta-sep">•</span>
                            <svg class="media-template-calendar" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
                            <span class="media-template-date">Sept 10, 2025</span>
                        </div>
                        <h3 class="media-template-title">How Indian Real Estate is Adapting to Post-Pandemic Demands</h3>
                        <a href="<?= $base_url ?>/new-media-two-page.php" class="media-template-readmore">Read More</a>
                    </article>
                    <!-- Box 3 - Featured (image) (niche) -->
                    <article class="media-template-box media-template-box--featured">
                        <div class="media-template-featured-image-outer">
                            <div class="media-template-image media-template-image--full">
                                <img src="<?= $base_url ?>/images/new_theme/newsandmedia.jpg" alt="Saya Group launches ultra-luxury project in Ghaziabad's Indirapuram; sales projected at ₹1,600 crore">
                            </div>
                        </div>
                        <div class="media-template-box-content">
                            <div class="media-template-meta">
                                <span class="media-template-source-name">Mint</span>
                                <span class="media-template-meta-sep">•</span>
                                <svg class="media-template-calendar" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
                                <span class="media-template-date">Sept 05, 2025</span>
                            </div>
                            <p class="media-template-subtitle">NCR Property Market Shows Strong Recovery in Q3</p>
                            <a href="<?= $base_url ?>/new-media-two-page.php" class="media-template-readmore">Read More</a>
                        </div>
                    </article>
                </div>
                <!-- Column 3 -->
                <div class="media-template-col">
                    <!-- Box 5 - Text only -->
                    <article class="media-template-box">
                        <div class="media-template-meta media-template-meta--top">
                            <span class="media-template-source-name">Construction Week</span>
                            <span class="media-template-meta-sep">•</span>
                            <svg class="media-template-calendar" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
                            <span class="media-template-date">Aug 20, 2025</span>
                        </div>
                        <h3 class="media-template-title">Innovation in Construction: Smart Building Technologies</h3>
                        <a href="<?= $base_url ?>/new-media-two-page.php" class="media-template-readmore">Read More</a>
                    </article>
                    <!-- Box 6 - Text only -->
                    <article class="media-template-box">
                        <div class="media-template-meta media-template-meta--top">
                            <span class="media-template-source-name">Outlook Business</span>
                            <span class="media-template-meta-sep">•</span>
                            <svg class="media-template-calendar" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
                            <span class="media-template-date">Aug 28, 2025</span>
                        </div>
                        <h3 class="media-template-title">Customer-Centric Approach Driving Saya's Success</h3>
                        <a href="<?= $base_url ?>/new-media-two-page.php" class="media-template-readmore">Read More</a>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Get To Know Banner (Contact + Media + Career page) -->
    <div class="get-to-know-banner-wrap">
        <section class="get-to-know-banner" style="background-image: url('<?= $base_url ?>/images/new_theme/contactusbg.jpg');">
            <div class="get-to-know-banner-inner">
                <h2 class="get-to-know-banner-title">Get To Know About Sayahomes Realty</h2>
                <a href="<?= $base_url ?>/new_media-page.php?page=contact" class="btn1212" style="text-decoration: none;">
                    <span class="btn1212-text">Contact Us</span>
                    <div>
                        <img src="<?= $base_url ?>/images/new_theme/icons/button_hover_icon.svg" alt="Arrow Right">
                    </div>
                </a>
            </div>
        </section>
    </div>

    <div class="section-10">
        <div class="section-10-contact-us">
            <div class="section-10-content">
                <h2>Got a project? <b>Let's talk!</b></h2>
                <p class="text-center">We value your privacy and promise to send you only the most important and interesting
                    information.</p>
            </div>
            <div class="section-10-contact-us-form">
                <form action="" class="callback-form">
                    <h2 class="callback-form-title">Request a Call Back</h2>
                    <div class="callback-form-row">
                        <input type="text" placeholder="Name *" required>
                        <input type="tel" placeholder="Phone No *" required>
                        <input type="email" placeholder="Email *" required>
                    </div>
                    <div class="callback-form-row">
                        <textarea placeholder="Message" rows="3"></textarea>
                    </div>
                    <button type="submit" class="callback-form-submit">Get a Call Back</button>
                </form>
            </div>
        </div>
    </div>

    <?php include_once('new_footer.php') ?>

    <button type="button" id="scroll-to-hero-btn" class="scroll-to-hero-btn" aria-label="Scroll to hero section" title="Back to top">
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
        .scroll-to-hero-btn:focus { outline: 2px solid #F6883E; outline-offset: 2px; }
        .scroll-to-hero-icon { width: 24px; height: 24px; color: #fff; }
        @media (max-width: 1024px) {
            .scroll-to-hero-btn { bottom: 20px; right: 20px; width: 44px; height: 44px; }
            .scroll-to-hero-icon { width: 22px; height: 22px; }
        }
        @media (max-width: 640px) {
            .scroll-to-hero-btn { bottom: 24px; right: 43px; width: 42px; height: 38px; }
            .scroll-to-hero-icon { width: 20px; height: 20px; }
        }
    </style>

    <?php include_once('inc-script.php') ?>

    <script>
        // GSAP ScrollTrigger – section animations (same style as home)
        (function() {
            if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
            gsap.registerPlugin(ScrollTrigger);

            // Banner content – fade up
            gsap.from(".media-banner-content", {
                duration: 1,
                y: 40,
                opacity: 0,
                ease: "power2.out"
            });

            // News ticker – fade up when in view
            gsap.from(".media-news-ticker", {
                scrollTrigger: { trigger: ".media-news-ticker", start: "top 85%", toggleActions: "play none none none" },
                duration: 0.8,
                y: 30,
                opacity: 0,
                ease: "power2.out"
            });

            // News & Media section – fade up
            gsap.from(".news-media-section", {
                scrollTrigger: { trigger: ".news-media-section", start: "top 85%", toggleActions: "play none none none" },
                duration: 1,
                y: 50,
                opacity: 0,
                ease: "power2.out"
            });
            gsap.from(".news-media-title", {
                scrollTrigger: { trigger: ".news-media-section", start: "top 85%", toggleActions: "play none none none" },
                duration: 0.6,
                y: 20,
                opacity: 0,
                ease: "power2.out",
                delay: 0.2
            });

            // Media article section – stagger fade up (like home section cards)
            gsap.from(".media-template-col", {
                scrollTrigger: { trigger: ".media-article-section", start: "top 80%", toggleActions: "play none none none" },
                duration: 0.8,
                y: 50,
                opacity: 0,
                stagger: 0.15,
                ease: "power2.out"
            });

            // Get To Know banner – fade up
            gsap.from(".get-to-know-banner-wrap", {
                scrollTrigger: { trigger: ".get-to-know-banner-wrap", start: "top 85%", toggleActions: "play none none none" },
                duration: 1,
                y: 40,
                opacity: 0,
                ease: "power2.out"
            });

            // Section 10 (Request a Call Back) – same as home: section fade up, content fade down, form zoom-in
            gsap.from(".section-10", {
                scrollTrigger: { trigger: ".section-10", start: "top 85%", toggleActions: "play none none none" },
                duration: 1,
                y: 40,
                opacity: 0,
                ease: "power2.out"
            });
            gsap.from(".section-10-content", {
                scrollTrigger: { trigger: ".section-10", start: "top 85%", toggleActions: "play none none none" },
                duration: 0.6,
                y: 25,
                opacity: 0,
                ease: "power2.out",
                delay: 0.15
            });
            /* Only animate the form inside .section-10 (media page), not the contact page form */
            gsap.from(".section-10 .section-10-contact-us-form", {
                scrollTrigger: { trigger: ".section-10", start: "top 85%", toggleActions: "play none none none" },
                duration: 0.8,
                scale: 0.95,
                opacity: 0,
                ease: "power2.out",
                delay: 0.3
            });
        })();
    </script>

    <script>
        // Scroll to Hero button – show when past article section (media) or contact details (contact page)
        (function() {
            var btn = document.getElementById("scroll-to-hero-btn");
            var heroSection = document.querySelector(".media-banner-section");
            var isContactPage = document.body.classList.contains("new-contact-page");
            var isCareerPage = document.body.classList.contains("new-career-page");
            var triggerSection = isContactPage
                ? document.querySelector(".contact-details-section")
                : isCareerPage
                ? document.querySelector(".career-section")
                : document.querySelector(".media-article-section");
            if (!btn || !heroSection) return;
            if (!triggerSection) return;

            function updateScrollToHeroBtn() {
                var rect = triggerSection.getBoundingClientRect();
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
            updateScrollToHeroBtn();

            btn.addEventListener("click", function() {
                heroSection.scrollIntoView({ behavior: "smooth", block: "start" });
            });
        })();
    </script>

    <script data-base-url="<?= $base_url ?>/" src="<?= $base_url ?>/js/new-home.js"></script>
    <script>
        // News & Media tabs – switch active tab and move orange indicator
        (function () {
            var tabs = document.querySelectorAll('.news-media-tab');
            var indicator = document.querySelector('.news-media-separator-indicator');
            var separator = document.querySelector('.news-media-separator');
            function updateIndicator() {
                var active = document.querySelector('.news-media-tab--active');
                if (!active || !indicator || !separator) return;
                var sepRect = separator.getBoundingClientRect();
                var tabRect = active.getBoundingClientRect();
                var left = tabRect.left - sepRect.left;
                indicator.style.left = left + 'px';
                indicator.style.width = tabRect.width + 'px';
                indicator.style.transform = 'none';
            }
            tabs.forEach(function (tab) {
                tab.addEventListener('click', function () {
                    tabs.forEach(function (t) {
                        t.classList.remove('news-media-tab--active');
                        t.setAttribute('aria-selected', 'false');
                    });
                    tab.classList.add('news-media-tab--active');
                    tab.setAttribute('aria-selected', 'true');
                    updateIndicator();
                });
            });
            window.addEventListener('resize', updateIndicator);
            updateIndicator();
        })();
    </script>
    <script>
        // Hamburger side menu – same as media one page
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
    </script>
</body>
</html>
