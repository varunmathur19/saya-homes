<?php
include_once "admin-panel-ecorp/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $meta_title = (isset($_GET['page']) && $_GET['page'] === 'career')
        ? 'Saya Homes Careers | Why Work With Saya?'
        : ((isset($_GET['page']) && $_GET['page'] === 'contact')
            ? 'Contact Us | Saya Homes | Get in Touch Today'
            : ((isset($_GET['page']) && $_GET['page'] === 'event')
                ? 'Saya Homes Events | Community & Festive Celebrations'
                : 'In the Media | Saya Homes | Featured in Press & News')); ?>
    <?php $meta_description = (isset($_GET['page']) && $_GET['page'] === 'career')
        ? "Join Saya Homes' careers. Openings in sales, marketing, finance, design & more in Greater Noida. Grow with a leading real estate team. Apply today."
        : ((isset($_GET['page']) && $_GET['page'] === 'contact')
            ? 'Contact us at Saya Homes. Get in touch for luxury residential & commercial inquiries in Greater Noida West. Use our form or call today.'
            : ((isset($_GET['page']) && $_GET['page'] === 'event')
                ? 'Explore Saya Homes Events showcasing festive celebrations, community gatherings, and memorable moments across Saya residential communities.'
                : 'Know more about Saya Homes, about our newly launched residential and commercial projects, community initiatives, and achievements.')); ?>
    <?php $meta_keywords = (isset($_GET['page']) && $_GET['page'] === 'career')
        ? 'careers, careers at saya homes'
        : ((isset($_GET['page']) && $_GET['page'] === 'contact')
            ? 'contact us, get in touch, inquiries'
            : ((isset($_GET['page']) && $_GET['page'] === 'event')
                ? 'saya event, event, Saya Homes Event Gallery, Saya Homes Celebrations, Saya Homes Community Events, Saya Homes Festive Celebrations, Saya Group Events, Saya Homes Event Highlights, Saya Homes Cultural Events, Saya Homes Resident Events, Saya Homes Event Updates'
                : 'in the media, print media, digital media')); ?>
    <title><?= $meta_title ?></title>
    <meta name="description" content="<?= $meta_description ?>" />
    <meta name="keywords" content="<?= $meta_keywords ?>" />
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
$is_event_page = isset($_GET['page']) && $_GET['page'] === 'event';
$is_blog_page = isset($_GET['page']) && ($_GET['page'] === 'blog' || $_GET['page'] === 'blogs');
?>
<body class="new-media-page media-two-page<?= $is_contact_page ? ' new-contact-page' : '' ?><?= $is_career_page ? ' new-career-page' : '' ?><?= $is_event_page ? ' new-event-page' : '' ?><?= $is_blog_page ? ' new-blog-page' : '' ?>">
    <?php include_once('new_header.php');
    ?>
    <a href="<?= $base_url ?>/new_media-page.php?page=contact" class="section-5-enquire-btn" data-source="Common Enquiry">ENQUIRE NOW</a>

    <!-- Media Banner Section (mediabg / contact / career / event) -->
    <section class="media-banner-section<?= $is_contact_page ? ' contact-banner-section' : '' ?><?= $is_career_page ? ' career-banner-section' : '' ?><?= $is_event_page ? ' event-banner-section' : '' ?>">
        <div class="media-banner-image" style="background-image: url('<?= $base_url ?>/images/new_theme/<?= $is_contact_page ? 'contactpagebanner.jpg' : ($is_career_page ? 'carrerbanner.jpg' : ($is_event_page ? 'eventbanner.jpg' : 'mediabg.jpg')) ?>');"></div>
        <?php if (!$is_contact_page && !$is_career_page && !$is_event_page): ?>
        <div class="media-banner-image media-banner-image-mobile" style="background-image: url('<?= $base_url ?>/images/new_theme/media-mobile.jpg');"></div>
        <?php elseif ($is_contact_page): ?>
        <div class="media-banner-image media-banner-image-mobile" style="background-image: url('<?= $base_url ?>/images/new_theme/mobile- contact.jpg');"></div>
        <?php elseif ($is_career_page): ?>
        <div class="media-banner-image media-banner-image-mobile" style="background-image: url('<?= $base_url ?>/images/new_theme/carrermobilebanner.jpg');"></div>
        <?php elseif ($is_event_page): ?>
        <div class="media-banner-image media-banner-image-mobile" style="background-image: url('<?= $base_url ?>/images/new_theme/evnetmobilebanner.jpg');"></div>
        <?php endif; ?>
        <?php if (!$is_career_page): ?>
        <div class="media-banner-overlay" aria-hidden="true"></div>
        <?php endif; ?>
        <div class="media-banner-content">
            <h1 class="media-banner-title"><?= $is_contact_page ? 'Contact Us' : ($is_career_page ? 'Careers' : ($is_event_page ? 'Events' : ($is_blog_page ? 'Blogs' : 'In The Media'))) ?></h1>
            <nav class="media-banner-breadcrumb" aria-label="Breadcrumb">
                <a href="https://sayahomes.com/" class="media-breadcrumb-link">Homepage</a>
                <img src="<?= $base_url ?>/images/svg/blogarrow.svg" alt="" class="media-breadcrumb-arrow" aria-hidden="true">
                <?php if ($is_contact_page): ?>
                <span class="media-breadcrumb-link media-breadcrumb-link-blog">Contact Us</span>
                <?php elseif ($is_career_page): ?>
                <span class="media-breadcrumb-link media-breadcrumb-link-blog">Careers</span>
                <?php elseif ($is_event_page): ?>
                <span class="media-breadcrumb-link media-breadcrumb-link-blog">Events</span>
                <?php elseif ($is_blog_page): ?>
                <span class="media-breadcrumb-link media-breadcrumb-link-blog">Blogs</span>
                <?php else: ?>
                <a href="<?= $base_url ?>/new-media-one-page.php" class="media-breadcrumb-link media-breadcrumb-link-blog">media</a>
                <?php endif; ?>
            </nav>
        </div>
    </section>

    <?php if (!$is_contact_page && !$is_career_page && !$is_event_page): ?>
    <!-- News Ticker Bar (orange strip) - marquee -->
    <div class="media-news-ticker">
        <div class="media-news-ticker-track" aria-hidden="true">
            <div class="media-news-ticker-inner">
                <div class="media-news-item">
                    <span class="media-news-badge">News</span>
                    <span class="media-news-headline">Report Real Estate @2026 - Saya Group clears ₹1,500 crore debt</span>
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
                    <span class="media-news-headline">Report Real Estate @2026 - Saya Group clears ₹1,500 crore debt</span>
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

    <?php if ($is_event_page): ?>
    <?php
    $events_query = mysqli_query($link, "SELECT * FROM `events` WHERE `ev_status`='1' ORDER BY `ev_date` DESC");
    ?>
    <!-- Event page section – all events from sayahomes.com/events -->
    <section class="event-page-section">
        <div class="event-page-inner">
            <h2 class="event-page-title">Events</h2>
            <div class="event-page-grid">
                <?php if ($events_query && mysqli_num_rows($events_query) > 0): ?>
                <?php while ($ev = mysqli_fetch_assoc($events_query)): ?>
                <a href="<?= $base_url ?>/events/<?= htmlspecialchars($ev['ev_group']) ?>" class="event-page-card" target="_blank" rel="noopener noreferrer">
                    <div class="event-page-card-image-wrap">
                        <img src="<?= $base_url ?>/uploads/events/<?= htmlspecialchars($ev['ev_image']) ?>" alt="<?= htmlspecialchars($ev['ev_title']) ?>" class="event-page-card-image" loading="lazy">
                    </div>
                    <div class="event-page-card-content">
                        <div class="event-page-card-text">
                            <h3 class="event-page-card-title"><?= htmlspecialchars($ev['ev_title']) ?></h3>
                            <p class="event-page-card-date"><?= date('j F, Y', strtotime($ev['ev_date'])) ?></p>
                        </div>
                        <span class="event-page-card-arrow" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </span>
                    </div>
                </a>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php elseif ($is_contact_page): ?>
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
                                <p class="contact-details-desc">Plot No. C-01, Sector Ecotech-12, Gr Noida (W) - 201306, Gautam Buddha Nagar (U.P.)</p>
                            </div>
                        </div>
                        <div class="contact-details-item">
                            <div class="contact-details-icon-wrap">
                                <svg class="contact-details-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                            </div>
                            <div class="contact-details-text">
                                <h3 class="contact-details-heading">Customer Support</h3>
                                <p class="contact-details-desc">contact@sayahomes.in</p>
                                <p class="contact-details-desc">​​+91 95408 12345</p>
                                 <p class="contact-details-desc">0120-4491800</p>
                            </div>
                        </div>
                        <div class="contact-details-item">
                            <div class="contact-details-icon-wrap">
                                <svg class="contact-details-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                            </div>
                            <div class="contact-details-text">
                                <h3 class="contact-details-heading">Sales Enquiries</h3>
                                <p class="contact-details-desc"><span class="contact-details-desc-label">Residential:</span><br>+91 8888 71 8888</p>
                                <p class="contact-details-desc"><span class="contact-details-desc-label">Commercial:</span><br>+91 8888 32 8888</p>
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
            <p class="career-section-desc">At Saya, we realize that the strength of a company lies in the people who work for it. This is why we are committed to investing in professional development, teamwork, and innovation. We have a work environment that is conducive to learning and development.</p>
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
                    <p class="career-card-desc">At Saya, your career is our top priority. Our training sessions are simple, fun, and engaging, and are designed to help you succeed in your role and achieve your career goals.</p>
                </div>
                <div class="career-card">
                    <div class="career-card-icon-wrap">
                        <img src="<?= $base_url ?>/images/svg/culture.svg" alt="" class="career-card-icon" aria-hidden="true">
                    </div>
                    <h3 class="career-card-title">Collaborative Culture</h3>
                    <p class="career-card-desc">We are committed to a collaborative work culture where the efforts of each team member are valued. At Saya, we have  talented individuals passionate about achieving common goals & innovating.</p>
                </div>
                <div class="career-card">
                    <div class="career-card-icon-wrap">
                        <img src="<?= $base_url ?>/images/svg/rewards.svg" alt="" class="career-card-icon" aria-hidden="true">
                    </div>
                    <h3 class="career-card-title">Competitive Rewards</h3>
                    <p class="career-card-desc">At Saya, we also value recognizing and rewarding employees' efforts.. Our reward scheme will ensure that you are recognized for your efforts and achievements, which will help you to have a good work-life balance.</p>
                </div>
                <div class="career-card">
                    <div class="career-card-icon-wrap">
                        <img src="<?= $base_url ?>/images/svg/Innovative.svg" alt="" class="career-card-icon" aria-hidden="true">
                    </div>
                    <h3 class="career-card-title">Innovative Environment</h3>
                    <p class="career-card-desc">Innovation is at the core of what we do at Saya. With better  technology & resources at your disposal, we encourage our employees to think out of the box and work on innovative projects.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Career page: Current Openings header + job listings (from sayahomes.com/careers) -->
    <section class="career-openings-section">
        <div class="career-openings-inner">
            <div class="contact-details-header">
                <div class="contact-details-header-left">
                    <h2 class="contact-details-header-title">Current Openings</h2>
                    <p class="contact-details-header-subtitle">Discover your next career milestone at Saya.</p>
                </div>
                <div class="contact-details-header-right">
                    <div class="contact-details-header-search-wrap">
                        <svg class="contact-details-header-search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
                        <input type="text" class="contact-details-header-search" placeholder="Search for roles..." aria-label="Search">
                    </div>
                    <!-- <div class="contact-details-header-dropdown-wrap">
                        <select class="contact-details-header-dropdown" aria-label="Filter openings">
                            <option>All Openings</option>
                        </select>
                        <svg class="contact-details-header-dropdown-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                    </div> -->
                </div>
            </div>
            <div class="career-jobs-grid">
                <article class="career-job-card">
                    <div class="career-job-card-top">
                        <span class="career-job-card-new-badge">NEW</span>
                        <!-- <svg class="career-job-card-bookmark" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg> -->
                    </div>
                    <h3 class="career-job-card-title">Manager / Sr. Manager Sales</h3>
                    <p class="career-job-card-dept">Sales Support</p>
                    <div class="career-job-card-details">
                        <!-- <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>Indirapuram, Ghaziabad</span> -->
                        <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>03 - 12 yrs Experience</span>
                        <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>Full-time</span>
                    </div>
                    <div class="career-job-card-actions">
                        <button type="button" class="career-job-card-view-btn">View Details</button>
                        <a href="#apply" class="career-job-card-apply-btn">Apply Now</a>
                    </div>
                </article>
                <article class="career-job-card">
                    <div class="career-job-card-top">
                        <span class="career-job-card-new-badge career-job-card-new-badge--hide"></span>
                        <!-- <svg class="career-job-card-bookmark" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg> -->
                    </div>
                    <h3 class="career-job-card-title">Guest Relation Executive</h3>
                    <p class="career-job-card-dept">Reception/GRE Department</p>
                    <div class="career-job-card-details">
                        <!-- <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>Indirapuram, Ghaziabad</span> -->
                        <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>03 - 06 yrs Experience</span>
                        <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>Full-time</span>
                    </div>
                    <div class="career-job-card-actions">
                        <button type="button" class="career-job-card-view-btn">View Details</button>
                        <a href="#apply" class="career-job-card-apply-btn">Apply Now</a>
                    </div>
                </article>
                <article class="career-job-card">
                    <div class="career-job-card-top">
                        <span class="career-job-card-new-badge career-job-card-new-badge--hide"></span>
                        <!-- <svg class="career-job-card-bookmark" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg> -->
                    </div>
                    <h3 class="career-job-card-title">Pre Sales / Tele Caller</h3>
                    <p class="career-job-card-dept">Sales Support</p>
                    <div class="career-job-card-details">
                        <!-- <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>Indirapuram, Ghaziabad</span> -->
                        <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>03 - 06 yrs Experience</span>
                        <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>Full-time</span>
                    </div>
                    <div class="career-job-card-actions">
                        <button type="button" class="career-job-card-view-btn">View Details</button>
                        <a href="#apply" class="career-job-card-apply-btn">Apply Now</a>
                    </div>
                </article>
                <article class="career-job-card">
                    <div class="career-job-card-top">
                        <span class="career-job-card-new-badge career-job-card-new-badge--hide"></span>
                        <!-- <svg class="career-job-card-bookmark" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg> -->
                    </div>
                    <h3 class="career-job-card-title">Functional Area</h3>
                    <p class="career-job-card-dept">Finance &amp; Accounts</p>
                    <div class="career-job-card-details">
                        <!-- <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>Indirapuram, Ghaziabad</span> -->
                        <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>05 - 12 yrs Experience</span>
                        <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>Full-time</span>
                    </div>
                    <div class="career-job-card-actions">
                        <button type="button" class="career-job-card-view-btn">View Details</button>
                        <a href="#apply" class="career-job-card-apply-btn">Apply Now</a>
                    </div>
                </article>
                <article class="career-job-card">
                    <div class="career-job-card-top">
                        <span class="career-job-card-new-badge career-job-card-new-badge--hide"></span>
                        <!-- <svg class="career-job-card-bookmark" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg> -->
                    </div>
                    <h3 class="career-job-card-title">Functional Area</h3>
                    <p class="career-job-card-dept">Finance &amp; Accounts</p>
                    <div class="career-job-card-details">
                        <!-- <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>Indirapuram, Ghaziabad</span> -->
                        <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>03 - 09 yrs Experience</span>
                        <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>Full-time</span>
                    </div>
                    <div class="career-job-card-actions">
                        <button type="button" class="career-job-card-view-btn">View Details</button>
                        <a href="#apply" class="career-job-card-apply-btn">Apply Now</a>
                    </div>
                </article>
                <article class="career-job-card">
                    <div class="career-job-card-top">
                        <span class="career-job-card-new-badge career-job-card-new-badge--hide"></span>
                        <!-- <svg class="career-job-card-bookmark" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg> -->
                    </div>
                    <h3 class="career-job-card-title">Functional Area</h3>
                    <p class="career-job-card-dept">CRM</p>
                    <div class="career-job-card-details">
                        <!-- <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>Indirapuram, Ghaziabad</span> -->
                        <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>08 - 15 yrs Experience</span>
                        <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>Full-time</span>
                    </div>
                    <div class="career-job-card-actions">
                        <button type="button" class="career-job-card-view-btn">View Details</button>
                        <a href="#apply" class="career-job-card-apply-btn">Apply Now</a>
                    </div>
                </article>
                <article class="career-job-card">
                    <div class="career-job-card-top">
                        <span class="career-job-card-new-badge career-job-card-new-badge--hide"></span>
                        <!-- <svg class="career-job-card-bookmark" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg> -->
                    </div>
                    <h3 class="career-job-card-title">Functional Area</h3>
                    <p class="career-job-card-dept">CRM</p>
                    <div class="career-job-card-details">
                        <!-- <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>Indirapuram, Ghaziabad</span> -->
                        <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>01 - 05 yrs Experience</span>
                        <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>Full-time</span>
                    </div>
                    <div class="career-job-card-actions">
                        <button type="button" class="career-job-card-view-btn">View Details</button>
                        <a href="#apply" class="career-job-card-apply-btn">Apply Now</a>
                    </div>
                </article>
                <article class="career-job-card">
                    <div class="career-job-card-top">
                        <span class="career-job-card-new-badge career-job-card-new-badge--hide"></span>
                        <!-- <svg class="career-job-card-bookmark" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg> -->
                    </div>
                    <h3 class="career-job-card-title">Functional Area</h3>
                    <p class="career-job-card-dept">Legal</p>
                    <div class="career-job-card-details">
                        <!-- <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>Indirapuram, Ghaziabad</span> -->
                        <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>03 - 09 yrs Experience</span>
                        <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>Full-time</span>
                    </div>
                    <div class="career-job-card-actions">
                        <button type="button" class="career-job-card-view-btn">View Details</button>
                        <a href="#apply" class="career-job-card-apply-btn">Apply Now</a>
                    </div>
                </article>
                <article class="career-job-card">
                    <div class="career-job-card-top">
                        <span class="career-job-card-new-badge career-job-card-new-badge--hide"></span>
                        <!-- <svg class="career-job-card-bookmark" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg> -->
                    </div>
                    <h3 class="career-job-card-title">Functional Area</h3>
                    <p class="career-job-card-dept">CRM</p>
                    <div class="career-job-card-details">
                        <!-- <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>Indirapuram, Ghaziabad</span> -->
                        <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>01-03 yrs Experience</span>
                        <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>Full-time</span>
                    </div>
                    <div class="career-job-card-actions">
                        <button type="button" class="career-job-card-view-btn">View Details</button>
                        <a href="#apply" class="career-job-card-apply-btn">Apply Now</a>
                    </div>
                </article>
                <article class="career-job-card">
                    <div class="career-job-card-top">
                        <span class="career-job-card-new-badge career-job-card-new-badge--hide"></span>
                        <!-- <svg class="career-job-card-bookmark" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg> -->
                    </div>
                    <h3 class="career-job-card-title">Functional Area</h3>
                    <p class="career-job-card-dept">Real Estate</p>
                    <div class="career-job-card-details">
                        <!-- <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>Indirapuram, Ghaziabad</span> -->
                        <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>07 - 12 yrs Experience</span>
                        <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>Full-time</span>
                    </div>
                    <div class="career-job-card-actions">
                        <button type="button" class="career-job-card-view-btn">View Details</button>
                        <a href="#apply" class="career-job-card-apply-btn">Apply Now</a>
                    </div>
                </article>
                <article class="career-job-card">
                    <div class="career-job-card-top">
                        <span class="career-job-card-new-badge career-job-card-new-badge--hide"></span>
                        <!-- <svg class="career-job-card-bookmark" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg> -->
                    </div>
                    <h3 class="career-job-card-title">Functional Area</h3>
                    <p class="career-job-card-dept">Real Estate</p>
                    <div class="career-job-card-details">
                        <!-- <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>Indirapuram, Ghaziabad</span> -->
                        <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>04 - 09 yrs Experience</span>
                        <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>Full-time</span>
                    </div>
                    <div class="career-job-card-actions">
                        <button type="button" class="career-job-card-view-btn">View Details</button>
                        <a href="#apply" class="career-job-card-apply-btn">Apply Now</a>
                    </div>
                </article>
                <article class="career-job-card">
                    <div class="career-job-card-top">
                        <span class="career-job-card-new-badge career-job-card-new-badge--hide"></span>
                        <!-- <svg class="career-job-card-bookmark" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg> -->
                    </div>
                    <h3 class="career-job-card-title">Functional Area</h3>
                    <p class="career-job-card-dept">Leasing</p>
                    <div class="career-job-card-details">
                        <!-- <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>Indirapuram, Ghaziabad</span> -->
                        <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>03 - 07 yrs Experience</span>
                        <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>Full-time</span>
                    </div>
                    <div class="career-job-card-actions">
                        <button type="button" class="career-job-card-view-btn">View Details</button>
                        <a href="#apply" class="career-job-card-apply-btn">Apply Now</a>
                    </div>
                </article>
                <article class="career-job-card">
                    <div class="career-job-card-top">
                        <span class="career-job-card-new-badge career-job-card-new-badge--hide"></span>
                        <!-- <svg class="career-job-card-bookmark" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg> -->
                    </div>
                    <h3 class="career-job-card-title">Functional Area</h3>
                    <p class="career-job-card-dept">Commercial/ Luxury Sales</p>
                    <div class="career-job-card-details">
                        <!-- <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>Indirapuram, Ghaziabad</span> -->
                        <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>07 -12 yrs Experience</span>
                        <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>Full-time</span>
                    </div>
                    <div class="career-job-card-actions">
                        <button type="button" class="career-job-card-view-btn">View Details</button>
                        <a href="#apply" class="career-job-card-apply-btn">Apply Now</a>
                    </div>
                </article>
                <article class="career-job-card">
                    <div class="career-job-card-top">
                        <span class="career-job-card-new-badge career-job-card-new-badge--hide"></span>
                        <!-- <svg class="career-job-card-bookmark" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg> -->
                    </div>
                    <h3 class="career-job-card-title">Functional Area</h3>
                    <p class="career-job-card-dept">Sales Support</p>
                    <div class="career-job-card-details">
                        <!-- <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>Indirapuram, Ghaziabad</span> -->
                        <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>01 - 05 yrs Experience</span>
                        <span class="career-job-card-detail-row"><svg class="career-job-card-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>Full-time</span>
                    </div>
                    <div class="career-job-card-actions">
                        <button type="button" class="career-job-card-view-btn">View Details</button>
                        <a href="#apply" class="career-job-card-apply-btn">Apply Now</a>
                    </div>
                </article>
            </div>
            <!-- <p class="career-openings-footer-note">Fill out the form and we'll be in touch soon! The aspirants may send their resumes to <a href="mailto:hr@sayahomes.in">hr@sayahomes.in</a>.</p> -->
        </div>
    </section>
    <?php else: ?>
    <!-- News & Media Section: title, tabs, sort by year (template layout) -->
    <section class="news-media-section">
        <div class="news-media-inner">
            <h2 class="news-media-title">News &amp; Media</h2>
            <div class="news-media-controls">
                <div class="news-media-tabs-wrap">
                    <div class="news-media-tabs" role="tablist" aria-label="Media categories">
                        <button type="button" class="news-media-tab news-media-tab--active" data-tab="digital" role="tab" aria-selected="true">
                            <span class="news-media-tab-text">Digital Media</span>
                        </button>
                        <button type="button" class="news-media-tab" data-tab="pr" role="tab" aria-selected="false">
                            <span class="news-media-tab-text">PR Coverage</span>
                        </button>
                        <button type="button" class="news-media-tab" data-tab="print" role="tab" aria-selected="false">
                            <span class="news-media-tab-text">Print Media</span>
                        </button>
                    </div>
                    <div class="news-media-separator" aria-hidden="true">
                        <span class="news-media-separator-track"></span>
                        <span class="news-media-separator-indicator"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News & Media Template Grid: 3 columns, 2 boxes per column (3x2) -->
    <section class="media-article-section media-template-section">
        <div class="news-media-sort-row">
            <div class="news-media-sort-wrap">
                <span class="news-media-sort-label" id="sort-by-year-label">2025</span>
                <select class="news-media-sort-select" id="sort-by-year-media" aria-label="Sort by year">
                    <option value="2025" selected>2025</option>
                    <option value="2024">2024</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                    <option value="2019">2019</option>
                </select>
                <span class="news-media-sort-arrow" aria-hidden="true">
                    <img src="<?= $base_url ?>/images/svg/mediadownarrow.svg" alt="" class="news-media-sort-arrow-img">
                </span>
            </div>
        </div>
        <div class="media-article-inner">
            <!-- PR Coverage: shown only when PR Coverage tab is active; 4 cards in one row -->
            <div class="media-pr-coverage-wrap" id="media-pr-coverage-wrap" style="display: none;">
                <a href="https://realty.economictimes.indiatimes.com/news/industry/saya-group-successfully-eliminates-1500-crore-debt-amidst-robust-growth/125223685" class="media-template-box media-template-box--link media-template-box--featured media-pr-card" target="_blank" rel="noopener noreferrer">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/et-realty-com.jpg" alt="Saya Group clears ₹1,500 crore debt - ET Realty">
                    </div>
                    <div class="media-template-box-content">
                        <div class="media-template-meta media-template-meta--top">
                            <span class="media-template-source-name">November 10, 2025</span>
                        </div>
                        <h3 class="media-template-title">Saya Group clears ₹1,500 crore debt</h3>
                        <span class="media-template-readmore-pr">Read More</span>
                        <p class="media-template-desc">Saya Group has successfully repaid around ₹1,500 crore in debt over the last five years, including term loans and NCDs from institutions like IIFL Finance and Yes Bank. This significant debt reduction highlights the company's strong financial health and efficient project delivery.</p>
                        <!-- <span class="media-template-read-more">Read full article →</span> -->
                    </div>
                </a>
                <a href="https://www.financeoutlookindia.com/news/saya-group-clears-rs-1500-crore-debt-sets-stage-for-expansion-nwid-6594.html" class="media-template-box media-template-box--link media-template-box--featured media-pr-card" target="_blank" rel="noopener noreferrer">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/finance-outlook.jpg" alt="Saya Group Clears Rs 1,500 Crore Debt, Sets Stage for Expansion - Finance Outlook India">
                    </div>
                    <div class="media-template-box-content">
                        <div class="media-template-meta media-template-meta--top">
                            <span class="media-template-source-name">November 10, 2025</span>
                        </div>
                        <h3 class="media-template-title">Saya Group Clears Rs 1,500 Crore Debt, Sets Stage for Expansion</h3>
                        <span class="media-template-readmore-pr">Read More</span>
                        <p class="media-template-desc">NCR-based real estate developer Saya Group has successfully cleared approximately ₹1,500 crore of debt from multiple financial institutions and investors over the past five years.</p>
                        <!-- <span class="media-template-read-more">Read Full Article</span> -->
                    </div>
                </a>
                <a href="https://economictimes.indiatimes.com/industry/services/property-/-cstruction/saya-group-repays-rs-1500-crore-debt-to-focus-on-growth/articleshow/125221374.cms?from=mdr" class="media-template-box media-template-box--link media-template-box--featured media-pr-card" target="_blank" rel="noopener noreferrer">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/the-economic-times-industry.jpg" alt="Saya Group repays Rs 1,500 crore debt, to focus on growth - The Economic Times">
                    </div>
                    <div class="media-template-box-content">
                        <div class="media-template-meta media-template-meta--top">
                            <span class="media-template-source-name">November 10, 2025</span>
                        </div>
                        <h3 class="media-template-title">Saya Group repays Rs 1,500 crore debt, to focus on growth</h3>
                        <span class="media-template-readmore-pr">Read More</span>
                        <p class="media-template-desc">Real estate developer Saya Group has reduced its debt to Rs 250 crore after repaying Rs 1,500 crore to multiple financial institutions and investors over the past five years.</p>
                        <!-- <span class="media-template-read-more">Read Full Article</span> -->
                    </div>
                </a>
                <a href="https://www.rprealtyplus.com/article/saya-group-clears-rs-1500-cr-debt-signals-debt-free-growth-across-ncr-122622.html" class="media-template-box media-template-box--link media-template-box--featured media-pr-card" target="_blank" rel="noopener noreferrer">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/realty-plus.jpg" alt="Saya Group Clears Rs 1,500 Cr Debt, Signals Debt-Free Growth Across NCR - Realty+">
                    </div>
                    <div class="media-template-box-content">
                        <div class="media-template-meta media-template-meta--top">
                            <span class="media-template-source-name">November 10, 2025</span>
                        </div>
                        <h3 class="media-template-title">Saya Group Clears Rs 1,500 Cr Debt, Signals Debt-Free Growth Across NCR</h3>
                        <span class="media-template-readmore-pr">Read More</span>
                        <p class="media-template-desc">Saya Group has successfully cleared Rs 1,500 crore of debt over five years, marking a major milestone in financial discipline and strategic growth.</p>
                        <!-- <span class="media-template-read-more">Read Full Article</span> -->
                    </div>
                </a>
            </div>
            <!-- Print Media: 4 boxes in one row – shown only when Print Media tab is active -->
            <div class="media-print-coverage-wrap" id="media-print-coverage-wrap" style="display: none;">
                <a href="https://www.hindustantimes.com/real-estate/ghaziabad-real-estate-7-000-sq-ft-penthouse-in-indirapuram-sells-for-10-crore-101753092975854.html" class="media-template-box media-template-box--link media-template-box--featured media-print-card" target="_blank" rel="noopener noreferrer">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/hindustan.jpg" data-lightbox-src="<?= $base_url ?>/images/new_theme/hindustantimegallery.png" alt="Hindustan Times - Ghaziabad real estate: 7,000 sq ft penthouse in Indirapuram sells for ₹10 crore">
                    </div>
                    <div class="media-template-box-content">
                        <div class="media-print-card-meta">
                            <span class="media-print-card-source">Hindustan Times</span>
                            <span class="media-print-card-date">13th August 2025</span>
                        </div>
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" target="_blank" rel="noopener noreferrer">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/navbharat.jpg" data-lightbox-src="<?= $base_url ?>/images/new_theme/navbharatgallery.png" alt="NBT Navbharat Times - Property News Indirapuram">
                    </div>
                    <div class="media-template-box-content">
                        <div class="media-print-card-meta">
                            <span class="media-print-card-source">NBT</span>
                            <span class="media-print-card-date">13th August 2025</span>
                        </div>
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" target="_blank" rel="noopener noreferrer">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/biznews.jpg" data-lightbox-src="<?= $base_url ?>/images/new_theme/biznewsgallery.png" alt="Quick Biz News - Record-Setting Penthouse Saya Gold Avenue">
                    </div>
                    <div class="media-template-box-content">
                        <div class="media-print-card-meta">
                            <span class="media-print-card-source">Quick Biz News</span>
                            <span class="media-print-card-date">13th August 2025</span>
                        </div>
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" target="_blank" rel="noopener noreferrer">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/reality.jpg" data-lightbox-src="<?= $base_url ?>/images/new_theme/realtygallery.png" alt="Realty Plus - Record-Setting Sale Saya Group Penthouse Indirapuram">
                    </div>
                    <div class="media-template-box-content">
                        <div class="media-print-card-meta">
                            <span class="media-print-card-source">Realty Plus</span>
                            <span class="media-print-card-date">13th August 2025</span>
                        </div>
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" target="_blank" rel="noopener noreferrer">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/penthouse.jpg" data-lightbox-src="<?= $base_url ?>/images/new_theme/businessstandardgallery.png" alt="Business Standard - 7,000 sq ft penthouse Indirapuram sells for Rs 10 crore">
                    </div>
                    <div class="media-template-box-content">
                        <div class="media-print-card-meta">
                            <span class="media-print-card-source">Business Standard</span>
                            <span class="media-print-card-date">13th August 2025</span>
                        </div>
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" target="_blank" rel="noopener noreferrer">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/hindustanprintmedia..jpg" data-lightbox-src="<?= $base_url ?>/images/new_theme/gaziabad.png" alt="Hindustan - Ghaziabad ₹10 crore flat">
                    </div>
                    <div class="media-template-box-content">
                        <div class="media-print-card-meta">
                            <span class="media-print-card-source">Hindustan</span>
                            <span class="media-print-card-date">13th August 2025</span>
                        </div>
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" target="_blank" rel="noopener noreferrer">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/zbusiness.jpg" data-lightbox-src="<?= $base_url ?>/images/new_theme/zbusinessgalleryt.png" alt="Zee Business - Saya Gold Avenue Penthouse Indirapuram">
                    </div>
                    <div class="media-template-box-content">
                        <div class="media-print-card-meta">
                            <span class="media-print-card-source">Zee Business</span>
                            <span class="media-print-card-date">13th August 2025</span>
                        </div>
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" target="_blank" rel="noopener noreferrer">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/record.jpg" data-lightbox-src="<?= $base_url ?>/images/new_theme/apngallery.png" alt="APN News - Record-Setting Penthouse Saya Gold Avenue Indirapuram">
                    </div>
                    <div class="media-template-box-content">
                        <div class="media-print-card-meta">
                            <span class="media-print-card-source">APN News</span>
                            <span class="media-print-card-date">13th August 2025</span>
                        </div>
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" target="_blank" rel="noopener noreferrer">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/construction.jpg" data-lightbox-src="<?= $base_url ?>/images/new_theme/constructiongallery.png" alt="CW Construction World - Saya Gold Avenue Penthouse Indirapuram">
                    </div>
                    <div class="media-template-box-content">
                        <div class="media-print-card-meta">
                            <span class="media-print-card-source">CW Construction World</span>
                            <span class="media-print-card-date">13th August 2025</span>
                        </div>
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2024" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/timeofindia.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/leadersgallry.png" alt="Times of India - Leaders of Change">
                    </div>
                    <div class="media-template-box-content">
                        <div class="media-print-card-meta">
                            <span class="media-print-card-source">Times of India</span>
                            <span class="media-print-card-date">15th August 2024</span>
                        </div>
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2024" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/group.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/groupgallery.png" alt="Navbharat Times - Group coverage">
                    </div>
                    <div class="media-template-box-content">
                        <div class="media-print-card-meta">
                            <span class="media-print-card-source">Navbharat Times</span>
                            <span class="media-print-card-date">15th May 2024</span>
                        </div>
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2022" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/abhineta.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/abhineta.png" alt="Dainik Jagran - Abhineta Jeet Kapoor">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2021" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/newstart.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/newstart.png" alt="Print media 2021 - New Start">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2021" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/indrapuram.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/indrapuram.png" alt="Print media 2021 - Indrapuram">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2021" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/handover.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/handover.png" alt="Print media 2021 - Handover">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2021" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/livelarger.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/livelarger.png" alt="Print media 2021 - Live Larger">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2021" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/newspapersayagold.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/newspapersayagold.png" alt="Print media 2021 - Newspaper Saya Gold Avenue">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2021" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/nameplacedate.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/nameplacedate.png" alt="Print media 2021 - Name Place Date">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2021" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/homebuyer.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/homebuyer.png" alt="Print media 2021 - Homebuyer Dream">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2020" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/print20201.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/print20201.png" alt="Print media 2020 - Print 1">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2020" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/print20202.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/print20202.png" alt="Print media 2020 - Print 2">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2020" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/amar3.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/amar3.png" alt="Print media 2020 - Amar Ujala 3">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2020" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/amar4.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/amar4.png" alt="Print media 2020 - Amar Ujala 4">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2020" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/amar5.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/amar5.png" alt="Print media 2020 - Amar Ujala 5">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2020" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/businesstoday.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/businesstoday.png" alt="Print media 2020 - Business Today">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2020" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/architecture.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/architecture.png" alt="Print media 2020 - Architecture">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2020" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/dranik.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/dranik.png" alt="Print media 2020 - Dainik Jagran">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2020" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/corona.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/corona.png" alt="Print media 2020 - Corona">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2020" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/deshbandu.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/deshbandu.png" alt="Print media 2020 - Deshbandhu">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2020" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/ew.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/ew.png" alt="Print media 2020 - EW">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2020" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/financial.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/financial.png" alt="Print media 2020 - Financial Express">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2020" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/hindustanprint.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/hindustanprint.png" alt="Print media 2020 - Hindustan 1">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2020" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/hindustanprint2.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/hindustanprint2.png" alt="Print media 2020 - Hindustan 2">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2020" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/hindustanprint3.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/hindustanprint3.png" alt="Print media 2020 - Hindustan 3">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2020" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/mailtoday.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/mailtoday.png" alt="Print media 2020 - Mail Today 1">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2020" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/mailtoday2.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/mailtoday2.png" alt="Print media 2020 - Mail Today 2">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2020" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/navdev.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/navdev.png" alt="Print media 2020 - Navodaya">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2020" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/nbt.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/nbt.png" alt="Print media 2020 - NBT 1">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2020" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/nbt2.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/nbt2.png" alt="Print media 2020 - NBT 2">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2020" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/nbt3.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/nbt3.png" alt="Print media 2020 - NBT 3">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2020" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/nbt4.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/nbt4.png" alt="Print media 2020 - NBT 4">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2020" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/sahara.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/sahara.png" alt="Print media 2020 - Sahara">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2020" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/timeprint.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/timeprint.png" alt="Print media 2020 - Times of India">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2019" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/amar2019-1.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/amar2019-1.png" alt="Print media 2019 - Amar Ujala">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2019" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/amar2019-2.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/amar2019-2.png" alt="Print media 2019 - Amar Ujala 2">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2019" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/amar2019-3.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/amar2019-3.png" alt="Print media 2019 - Amar Ujala 3">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2019" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/amar2019-4.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/amar2019-4.png" alt="Print media 2019 - Amar Ujala 4">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2019" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/amar2019-5.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/amar2019-5.png" alt="Print media 2019 - Amar Ujala 5">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2019" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/amar2019-6.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/amar2019-6.png" alt="Print media 2019 - Amar Ujala 6">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2019" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/amar2019-7.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/amar2019-7.png" alt="Print media 2019 - Amar Ujala 7">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2019" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/amar2019-8.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/amar2019-8.png" alt="Print media 2019 - Amar Ujala 8">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2019" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/amar2019-9.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/amar2019-9.png" alt="Print media 2019 - Amar Ujala 9">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2019" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/amar2019-10.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/amar2019-10.png" alt="Print media 2019 - Amar Ujala 10">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2019" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/amar2019-11.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/amar2019-11.png" alt="Print media 2019 - Amar Ujala 11">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2019" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/amar2019-12.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/amar2019-12.png" alt="Print media 2019 - Amar Ujala 12">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2019" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/amar2019-13.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/amar2019-13.png" alt="Print media 2019 - Amar Ujala 13">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2019" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/amar2019-14.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/amar2019-14.png" alt="Print media 2019 - Amar Ujala 14">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2019" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/business2019.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/business2019.png" alt="Print media 2019 - Business Today">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2019" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/dranik2019.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/dranik2019.png" alt="Print media 2019 - Dainik Jagran 1">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2019" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/dranik2019-2.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/dranik2019-2.png" alt="Print media 2019 - Dainik Jagran 2">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2019" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/dranik2019-3.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/dranik2019-3.png" alt="Print media 2019 - Dainik Jagran 3">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2019" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/dranik2019-4.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/dranik2019-4.png" alt="Print media 2019 - Dainik Jagran 4">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2019" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/dranik2019-5.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/dranik2019-5.png" alt="Print media 2019 - Dainik Jagran 5">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2019" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/dranik2019-6.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/dranik2019-6.png" alt="Print media 2019 - Dainik Jagran 6">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2019" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/dranik2019-7.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/dranik2019-7.png" alt="Print media 2019 - Dainik Jagran 7">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2019" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/dranik2019-8.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/dranik2019-8.png" alt="Print media 2019 - Dainik Jagran 8">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2019" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/dranik2019-9.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/dranik2019-9.png" alt="Print media 2019 - Dainik Jagran 9">
                    </div>
                </a>
                <a href="#" class="media-template-box media-template-box--link media-template-box--featured media-print-card" data-year="2019" target="_blank" rel="noopener noreferrer" style="display: none;">
                    <div class="media-template-image media-template-image--full">
                        <img src="<?= $base_url ?>/images/new_theme/dranik2019-10.png" data-lightbox-src="<?= $base_url ?>/images/new_theme/dranik2019-10.png" alt="Print media 2019 - Dainik Jagran 10">
                    </div>
                </a>
            </div>
            <div class="media-template-grid">
                <!-- Column 1 - Digital Media (same as sayahomes.com/in-the-media) -->
                <div class="media-template-col">
                    <!-- 2024 boxes: shown when year 2024 selected -->
                    <a href="https://www.financialexpress.com/money/luxury-housing-in-noida-the-transformation-of-urban-living-3582821/" class="media-template-box media-template-box--link media-template-box--featured media-show-when-2024" id="mediaFirstBox2024" data-year="2024" target="_blank" rel="noopener noreferrer" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/financial.jpg" alt="Luxury Housing in Noida: The Transformation of Urban Living">
                        </div>
                        <div class="media-template-box-content">
                            <div class="media-template-meta media-template-meta--top">
                                <span class="media-template-source-name">Financial Express</span>
                            </div>
                            <h3 class="media-template-title">Luxury Housing in Noida: The Transformation of Urban Living.</h3>
                        </div>
                    </a>
                    <a href="https://www.apnnews.com/budget-reaction-quote-from-real-estate-mr-vikas-bhasin-chairman-managing-director-saya-group/" class="media-template-box media-template-box--link media-template-box--featured media-show-when-2024" target="_blank" rel="noopener noreferrer" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/apn.jpg" alt="Budget Reaction Quote from Real Estate- Mr., Vikas Bhasin, Chairman &amp; Managing Director, Saya Group">
                        </div>
                        <div class="media-template-box-content">
                            <div class="media-template-meta media-template-meta--top">
                                <span class="media-template-source-name">APN News</span>
                            </div>
                            <h3 class="media-template-title">Budget Reaction Quote from Real Estate- Mr., Vikas Bhasin, Chairman &amp; Managing Director, Saya Group</h3>
                        </div>
                    </a>
                    <a href="https://www.etnownews.com/budget/union-budget-2024-expectations-live-updates-fm-nirmala-sitharaman-budget-date-time-income-tax-slabs-new-regime-capex-liveblog-111851418" class="media-template-box media-template-box--link media-template-box--featured media-show-when-2024" target="_blank" rel="noopener noreferrer" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/etnow.jpg" alt="Budget 2024 Expectations LIVE Updates">
                        </div>
                        <div class="media-template-box-content">
                            <div class="media-template-meta media-template-meta--top">
                                <span class="media-template-source-name">ET Now</span>
                            </div>
                            <h3 class="media-template-title">Budget 2024 Expectations LIVE Updates: What salaried employees, middle class tax payers expect from FM Nirmala Sitharaman in Union Budget 2024-25</h3>
                        </div>
                    </a>
                    <a href="https://todayindia.news/budget-reaction-quote-real-estate-mr-vikas-bhasin-chairman-managing-director-saya-group/" class="media-template-box media-template-box--link media-template-box--featured media-show-when-2024" target="_blank" rel="noopener noreferrer" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/india-news.jpg" alt="Budget Reaction Quote from Real Estate- Mr., Vikas Bhasin, Chairman &amp; Managing Director, Saya Group">
                        </div>
                        <div class="media-template-box-content">
                            <div class="media-template-meta media-template-meta--top">
                                <span class="media-template-source-name">Today India News</span>
                            </div>
                            <h3 class="media-template-title">Budget Reaction Quote from Real Estate- Mr., Vikas Bhasin, Chairman &amp; Managing Director, Saya Group</h3>
                        </div>
                    </a>
                    <a href="https://www.tv9hindi.com/business/from-cheaper-house-free-electricity-to-income-tax-what-middle-class-got-in-budget-2024-explained-2743101.html" class="media-template-box media-template-box--link media-template-box--featured media-show-when-2024" target="_blank" rel="noopener noreferrer" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/budget.jpg" alt="Budget for Middle class: सस्ता घर, फ्री बिजली से लेकर इनकम टैक्स…बजट में मिडिल क्लास को क्या-क्या मिला?">
                        </div>
                        <div class="media-template-box-content">
                            <div class="media-template-meta media-template-meta--top">
                                <span class="media-template-source-name">TV9</span>
                            </div>
                            <h3 class="media-template-title">Budget for Middle class: सस्ता घर, फ्री बिजली से लेकर इनकम टैक्स…बजट में मिडिल क्लास को क्या-क्या मिला?</h3>
                        </div>
                    </a>
                    <a href="https://cxotoday.com/specials/industry-insights-leading-voices-on-indias-post-budget-2024/" class="media-template-box media-template-box--link media-template-box--featured media-show-when-2024" target="_blank" rel="noopener noreferrer" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/cxotoday.jpg" alt="Industry Insights: Leading Voices on India's Post-Budget 2024">
                        </div>
                        <div class="media-template-box-content">
                            <div class="media-template-meta media-template-meta--top">
                                <span class="media-template-source-name">CXOToday</span>
                            </div>
                            <h3 class="media-template-title">Industry Insights: Leading Voices on India's Post-Budget 2024</h3>
                        </div>
                    </a>
                    <a href="https://www.indiatv.in/paisa/business/how-was-the-budget-for-the-real-estate-sector-2024-07-24-1062423" class="media-template-box media-template-box--link media-template-box--featured media-show-when-2024" target="_blank" rel="noopener noreferrer" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/realestate.jpg" alt="रियल एस्टेट सेक्टर के लिये कैसा रहा बजट? जानिए क्या कह रहे इंडस्ट्री से जुड़े लोग">
                        </div>
                        <div class="media-template-box-content">
                            <div class="media-template-meta media-template-meta--top">
                                <span class="media-template-source-name">India TV</span>
                            </div>
                            <h3 class="media-template-title">रियल एस्टेट सेक्टर के लिये कैसा रहा बजट? जानिए क्या कह रहे इंडस्ट्री से जुड़े लोग</h3>
                        </div>
                    </a>
                    <a href="https://www.deccanchronicle.com/nation/union-budget-2024-reactions-from-experts-1811823" class="media-template-box media-template-box--link media-template-box--featured media-show-when-2024" target="_blank" rel="noopener noreferrer" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/chronical.jpg" alt="Industry Leaders React to FM Nirmala Sitharaman's Budget 2024">
                        </div>
                        <div class="media-template-box-content">
                            <div class="media-template-meta media-template-meta--top">
                                <span class="media-template-source-name">Deccan Chronicle</span>
                            </div>
                            <h3 class="media-template-title">Industry Leaders React to FM Nirmala Sitharaman's Budget 2024</h3>
                        </div>
                    </a>
                    <a href="https://www.jagran.com/business/budget-union-budget-2024-real-estate-sector-welcome-enthusiastically-check-reaction-of-industry-leaders-23764117.html" class="media-template-box media-template-box--link media-template-box--featured media-show-when-2024" target="_blank" rel="noopener noreferrer" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/jagran.jpg" alt="Real Estate Sector ने बजट का उत्साहपूर्वक स्वागत किया, दिग्गजों ने दिया रिएक्शन">
                        </div>
                        <div class="media-template-box-content">
                            <div class="media-template-meta media-template-meta--top">
                                <span class="media-template-source-name">Dainik Jagran</span>
                            </div>
                            <h3 class="media-template-title">Real Estate Sector ने बजट का उत्साहपूर्वक स्वागत किया, दिग्गजों ने दिया रिएक्शन</h3>
                        </div>
                    </a>
                    <a href="https://economictimes.indiatimes.com/wealth/tax/income-tax-budget-2024-expectations-live-updates-standard-deduction-hike-new-income-tax-slab-changes-finance-minister-nirmala-sitharaman-latest-new-july-22-2024/liveblog/111916925.cms?from=mdr" class="media-template-box media-template-box--link media-template-box--featured media-show-when-2024" target="_blank" rel="noopener noreferrer" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/economic.jpg" alt="Union Budget 2024 Income Tax Expectations Highlights">
                        </div>
                        <div class="media-template-box-content">
                            <div class="media-template-meta media-template-meta--top">
                                <span class="media-template-source-name">The Economic Times</span>
                            </div>
                            <h3 class="media-template-title">Union Budget 2024 Income Tax Expectations Highlights: Hike in standard deduction limit, other measures; what to expect from Budget 2024</h3>
                        </div>
                    </a>
                    <a href="https://www.moneycontrol.com/news/business/markets/budget-2024-news-live-fm-sitharaman-takes-part-in-halwa-ceremony-marks-final-stage-of-budget-preparation-liveblog-12770840.html" class="media-template-box media-template-box--link media-template-box--featured media-show-when-2024" target="_blank" rel="noopener noreferrer" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/union.jpg" alt="Union Cabinet to meet on Thursday at 10:30 AM">
                        </div>
                        <div class="media-template-box-content">
                            <div class="media-template-meta media-template-meta--top">
                                <span class="media-template-source-name">Moneycontrol</span>
                            </div>
                            <h3 class="media-template-title">Union Cabinet to meet on Thursday at 10:30 AM</h3>
                        </div>
                    </a>
                    <a href="https://www.jagran.com/business/budget-union-budget-2024-to-be-presented-on-23-july-every-sector-has-high-expectation-from-it-23759554.html" class="media-template-box media-template-box--link media-template-box--featured media-show-when-2024" target="_blank" rel="noopener noreferrer" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/budget2024.jpg" alt="Budget 2024: हर सेक्टर को आम बजट से खास उम्मीदें, 23 जुलाई को होने जा रहा है पेश">
                        </div>
                        <div class="media-template-box-content">
                            <div class="media-template-meta media-template-meta--top">
                                <span class="media-template-source-name">Dainik Jagran</span>
                            </div>
                            <h3 class="media-template-title">Budget 2024: हर सेक्टर को आम बजट से खास उम्मीदें, 23 जुलाई को होने जा रहा है पेश</h3>
                        </div>
                    </a>
                    <a href="https://cxotoday.com/newsletter/industries-voice-their-budget-desires-a-look-at-sectoral-expectations-for-union-budget-2024-25/" class="media-template-box media-template-box--link media-template-box--featured media-show-when-2024" target="_blank" rel="noopener noreferrer" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/cxotoday1.jpg" alt="Industries Voice Their Budget Desires: A Look at Sectoral Expectations for Union Budget 2024-25">
                        </div>
                        <div class="media-template-box-content">
                            <div class="media-template-meta media-template-meta--top">
                                <span class="media-template-source-name">CXOToday</span>
                            </div>
                            <h3 class="media-template-title">Industries Voice Their Budget Desires: A Look at Sectoral Expectations for Union Budget 2024-25</h3>
                        </div>
                    </a>
                    <a href="https://www.business-standard.com/content/specials/saya-homes-goes-greens-over-1500-plants-trees-planted-in-massive-environment-day-initiative-124060500737_1.html" class="media-template-box media-template-box--link media-template-box--featured media-show-when-2024" target="_blank" rel="noopener noreferrer" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/bussinessstandard.jpg" alt="Saya Homes Goes Greens: Over 1500 Plants &amp; Trees planted in Massive Environment Day initiative">
                        </div>
                        <div class="media-template-box-content">
                            <div class="media-template-meta media-template-meta--top">
                                <span class="media-template-source-name">Business Standard</span>
                            </div>
                            <h3 class="media-template-title">Saya Homes Goes Greens: Over 1500 Plants &amp; Trees planted in Massive Environment Day initiative.</h3>
                        </div>
                    </a>
                    <!-- 2023 boxes: shown when year 2023 selected -->
                    <a href="https://www.business-standard.com/content/press-releases-ani/delhi-ncr-emerging-as-the-most-favourable-commercial-real-estate-destination-123032201230_1.html" class="media-template-box media-template-box--link media-template-box--featured media-show-when-2023" target="_blank" rel="noopener noreferrer" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/bussinessstandard1.jpg" alt="Delhi-NCR emerging as the most favourable commercial real estate destination">
                        </div>
                        <div class="media-template-box-content">
                            <div class="media-template-meta media-template-meta--top">
                                <span class="media-template-source-name">Business Standard</span>
                            </div>
                            <h3 class="media-template-title">Delhi-NCR emerging as the most favourable commercial real estate destination</h3>
                        </div>
                    </a>
                    <a href="https://www.aninews.in/news/business/business/delhi-ncr-emerging-as-the-most-favourable-commercial-real-estate-destination20230322184926/" class="media-template-box media-template-box--link media-template-box--featured media-show-when-2023" target="_blank" rel="noopener noreferrer" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/ani.jpg" alt="Delhi-NCR emerging as the most favourable commercial real estate destination">
                        </div>
                        <div class="media-template-box-content">
                            <div class="media-template-meta media-template-meta--top">
                                <span class="media-template-source-name">Aninews</span>
                            </div>
                            <h3 class="media-template-title">Delhi-NCR emerging as the most favourable commercial real estate destination</h3>
                        </div>
                    </a>
                    <a href="https://www.zee5.com/articles/delhi-ncr-emerging-as-the-most-favourable-commercial-real-estate-destination" class="media-template-box media-template-box--link media-template-box--featured media-show-when-2023" target="_blank" rel="noopener noreferrer" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/commericalrealstate.jpg" alt="Delhi-NCR emerging as the most favourable commercial real estate destination">
                        </div>
                        <div class="media-template-box-content">
                            <div class="media-template-meta media-template-meta--top">
                                <span class="media-template-source-name">Zee5</span>
                            </div>
                            <h3 class="media-template-title">Delhi-NCR emerging as the most favourable commercial real estate destination</h3>
                        </div>
                    </a>
                    <a href="https://theprint.in/ani-press-releases/delhi-ncr-emerging-as-the-most-favourable-commercial-real-estate-destination/1464421/" class="media-template-box media-template-box--link media-template-box--featured media-show-when-2023" target="_blank" rel="noopener noreferrer" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/theprint.jpg" alt="Delhi-NCR emerging as the most favourable commercial real estate destination">
                        </div>
                        <div class="media-template-box-content">
                            <div class="media-template-meta media-template-meta--top">
                                <span class="media-template-source-name">The Print</span>
                            </div>
                            <h3 class="media-template-title">Delhi-NCR emerging as the most favourable commercial real estate destination</h3>
                        </div>
                    </a>
                    <a href="https://m.dailyhunt.in/news/india/english/newsvoir-epaper-newsvoir/delhi+ncr+emerging+as+the+most+favourable+commercial+real+estate+destination-newsid-n482818058?listname=newspaperLanding&topic=business&index=3&topicIndex=0&mode=pwa&action=click" class="media-template-box media-template-box--link media-template-box--featured media-show-when-2023" target="_blank" rel="noopener noreferrer" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/dailyhunt.jpg" alt="Delhi-NCR emerging as the most favourable commercial real estate destination">
                        </div>
                        <div class="media-template-box-content">
                            <div class="media-template-meta media-template-meta--top">
                                <span class="media-template-source-name">DailyHunt</span>
                            </div>
                            <h3 class="media-template-title">Delhi-NCR emerging as the most favourable commercial real estate destination</h3>
                        </div>
                    </a>
                    <!-- 2022 boxes: shown when year 2022 selected -->
                    <a href="https://news.easyshiksha.com/saya-homes-unlocks-ncrs-real-estate-market-records-sales-of-rs-150-crores-in-6-months/" class="media-template-box media-template-box--link media-template-box--featured media-show-when-2022" target="_blank" rel="noopener noreferrer" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/sayarealstate.jpg" alt="Saya Homes record sales worth Rs. 150 crores in 6 months">
                        </div>
                        <div class="media-template-box-content">
                            <div class="media-template-meta media-template-meta--top">
                                <span class="media-template-source-name">Easyshiksha</span>
                            </div>
                            <h3 class="media-template-title">Saya Homes record sales worth Rs. 150 crores in 6 months</h3>
                        </div>
                    </a>
                    <a href="https://dailybiz.news/2022/09/02/saya-homes-unlocks-ncrs-real-estate-market-records-sales-of-rs-150-crores-in-6-months/" class="media-template-box media-template-box--link media-template-box--featured media-show-when-2022" target="_blank" rel="noopener noreferrer" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/sayahomeunlock.jpg" alt="Saya brings in new wave of energy to the real estate market; records whopping sales worth Rs. 150 crores">
                        </div>
                        <div class="media-template-box-content">
                            <div class="media-template-meta media-template-meta--top">
                                <span class="media-template-source-name">Dailybiz</span>
                            </div>
                            <h3 class="media-template-title">Saya brings in new wave of energy to the real estate market; records whopping sales worth Rs. 150 crores</h3>
                        </div>
                    </a>
                    <a href="https://orissadiary.com/saya-homes-unlocks-ncrs-real-estate-market-records-sales-of-rs-150-crores-in-6-months/" class="media-template-box media-template-box--link media-template-box--featured media-show-when-2022" target="_blank" rel="noopener noreferrer" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/ressidariy.jpg" alt="Saya setting new benchmarks in the real estate market; records sales worth Rs. 150 crores in Quarter 1 &amp; 2">
                        </div>
                        <div class="media-template-box-content">
                            <div class="media-template-meta media-template-meta--top">
                                <span class="media-template-source-name">Orissadiary</span>
                            </div>
                            <h3 class="media-template-title">Saya setting new benchmarks in the real estate market; records sales worth Rs. 150 crores in Quarter 1 &amp; 2</h3>
                        </div>
                    </a>
                    <!-- 2020 boxes: shown when year 2020 selected; click opens gallery popup, no redirect -->
                    <div class="media-template-box media-template-box--featured media-show-when-2020 media-gallery-card" data-gallery-index="0" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/apnnews.jpg" alt="">
                        </div>
                    </div>
                    <div class="media-template-box media-template-box--featured media-show-when-2020 media-gallery-card" data-gallery-index="1" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/delhincr.jpg" alt="">
                        </div>
                    </div>
                    <div class="media-template-box media-template-box--featured media-show-when-2020 media-gallery-card" data-gallery-index="2" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/outbtreak.jpg" alt="">
                        </div>
                    </div>
                    <div class="media-template-box media-template-box--featured media-show-when-2020 media-gallery-card" data-gallery-index="3" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/livemint.jpg" alt="">
                        </div>
                    </div>
                    <div class="media-template-box media-template-box--featured media-show-when-2020 media-gallery-card" data-gallery-index="4" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/commericalsegment.jpg" alt="">
                        </div>
                    </div>
                    <div class="media-template-box media-template-box--featured media-show-when-2020 media-gallery-card" data-gallery-index="5" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/99acres.jpg" alt="">
                        </div>
                    </div>
                    <div class="media-template-box media-template-box--featured media-show-when-2020 media-gallery-card" data-gallery-index="6" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/NBt.jpg" alt="">
                        </div>
                    </div>
                    <div class="media-template-box media-template-box--featured media-show-when-2020 media-gallery-card" data-gallery-index="7" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/outlook.jpg" alt="">
                        </div>
                    </div>
                    <div class="media-template-box media-template-box--featured media-show-when-2020 media-gallery-card" data-gallery-index="8" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/Realty-Buzz-9-Oct-2020.jpg" alt="">
                        </div>
                    </div>
                    <div class="media-template-box media-template-box--featured media-show-when-2020 media-gallery-card" data-gallery-index="9" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/Realty-n-Feria-1-Feb-2020.jpg" alt="">
                        </div>
                    </div>
                    <div class="media-template-box media-template-box--featured media-show-when-2020 media-gallery-card" data-gallery-index="10" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/realty.jpg" alt="">
                        </div>
                    </div>
                    <div class="media-template-box media-template-box--featured media-show-when-2020 media-gallery-card" data-gallery-index="11" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/Realty-n-ferial-17-April-2020.jpg" alt="">
                        </div>
                    </div>
                    <div class="media-template-box media-template-box--featured media-show-when-2020 media-gallery-card" data-gallery-index="12" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/republic.jpg" alt="">
                        </div>
                    </div>
                    <div class="media-template-box media-template-box--featured media-show-when-2020 media-gallery-card" data-gallery-index="13" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/surface.jpg" alt="">
                        </div>
                    </div>
                    <div class="media-template-box media-template-box--featured media-show-when-2020 media-gallery-card" data-gallery-index="14" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/The-property-times-18-Oct-2020.jpg" alt="">
                        </div>
                    </div>
                    <div class="media-template-box media-template-box--featured media-show-when-2020 media-gallery-card" data-gallery-index="15" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/festival.jpg" alt="">
                        </div>
                    </div>
                    <div class="media-template-box media-template-box--featured media-show-when-2020 media-gallery-card" data-gallery-index="16" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/theweek.jpg" alt="">
                        </div>
                    </div>
                    <div class="media-template-box media-template-box--featured media-show-when-2020 media-gallery-card" data-gallery-index="17" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/The-Property-times-7-August-2020.jpg" alt="">
                        </div>
                    </div>
                    <!-- 2021 boxes: shown when year 2021 selected; click opens gallery popup, no redirect -->
                    <div class="media-template-box media-template-box--featured media-show-when-2021 media-gallery-card" data-gallery-index="0" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/hinhustan.jpg" alt="SAYA GOLD AVENUE - Hindustan Times">
                        </div>
                    </div>
                    <div class="media-template-box media-template-box--featured media-show-when-2021 media-gallery-card" data-gallery-index="1" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/advertise.jpg" alt="Saya Homes Flags off Possession at Saya Gold Avenue">
                        </div>
                    </div>
                    <!-- 2019 boxes: shown when year 2019 selected; click opens gallery popup, no redirect -->
                    <div class="media-template-box media-template-box--featured media-show-when-2019 media-gallery-card" data-gallery-index="0" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/3-Jan-2020.jpg" alt="">
                        </div>
                    </div>
                    <div class="media-template-box media-template-box--featured media-show-when-2019 media-gallery-card" data-gallery-index="1" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/9-Jan-2019.jpg" alt="">
                        </div>
                    </div>
                    <div class="media-template-box media-template-box--featured media-show-when-2019 media-gallery-card" data-gallery-index="2" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/Business-Standard-31-Dec-2019-100.jpg" alt="">
                        </div>
                    </div>
                    <div class="media-template-box media-template-box--featured media-show-when-2019 media-gallery-card" data-gallery-index="3" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/IIFL-100.jpg" alt="">
                        </div>
                    </div>
                    <div class="media-template-box media-template-box--featured media-show-when-2019 media-gallery-card" data-gallery-index="4" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/Business-Standard-7-Feb-2019.jpg" alt="">
                        </div>
                    </div>
                    <div class="media-template-box media-template-box--featured media-show-when-2019 media-gallery-card" data-gallery-index="5" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/IIFL_1-100.jpg" alt="">
                        </div>
                    </div>
                    <div class="media-template-box media-template-box--featured media-show-when-2019 media-gallery-card" data-gallery-index="6" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/IANS-Live-9-Jan-2019-100.jpg" alt="">
                        </div>
                    </div>
                    <div class="media-template-box media-template-box--featured media-show-when-2019 media-gallery-card" data-gallery-index="7" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/National-Business-Mirror-100.jpg" alt="">
                        </div>
                    </div>
                    <div class="media-template-box media-template-box--featured media-show-when-2019 media-gallery-card" data-gallery-index="8" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/National-Business-Mirror_1-100.jpg" alt="">
                        </div>
                    </div>
                    <div class="media-template-box media-template-box--featured media-show-when-2019 media-gallery-card" data-gallery-index="9" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/Quiting-Hindi.jpg" alt="">
                        </div>
                    </div>
                    <div class="media-template-box media-template-box--featured media-show-when-2019 media-gallery-card" data-gallery-index="10" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/National-Real-Estate-Development-Council.-100.jpg" alt="">
                        </div>
                    </div>
                    <div class="media-template-box media-template-box--featured media-show-when-2019 media-gallery-card" data-gallery-index="11" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/Real-Estate-Developers-8-Feb-2019-100.jpg" alt="">
                        </div>
                    </div>
                    <div class="media-template-box media-template-box--featured media-show-when-2019 media-gallery-card" data-gallery-index="12" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/Outlook-The-new-scroll-7-Feb-2019-100.jpg" alt="">
                        </div>
                    </div>
                    <div class="media-template-box media-template-box--featured media-show-when-2019 media-gallery-card" data-gallery-index="13" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/Saya-Homes-to-Invest-10-Jan-2020-100.jpg" alt="">
                        </div>
                    </div>
                    <div class="media-template-box media-template-box--featured media-show-when-2019 media-gallery-card" data-gallery-index="14" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/Realty-Myths-100.jpg" alt="">
                        </div>
                    </div>
                    <div class="media-template-box media-template-box--featured media-show-when-2019 media-gallery-card" data-gallery-index="15" style="display: none;">
                        <div class="media-template-image media-template-image--full">
                            <img src="<?= $base_url ?>/images/new_theme/The-Trinume-100.jpg" alt="">
                        </div>
                    </div>
                    <!-- First card: slider with 4 debt articles (like sayahomes.com/in-the-media) -->
                    <div class="media-first-card-slider media-hide-when-2024 media-hide-when-2023 media-hide-when-2022 media-hide-when-2021 media-hide-when-2020 media-hide-when-2019" id="mediaFirstCardSlider">
                        <div class="media-first-card-slider-track">
                            <a href="https://economictimes.indiatimes.com/industry/services/property-/-cstruction/saya-group-repays-rs-1500-crore-debt-to-focus-on-growth/articleshow/125221374.cms?from=mdr" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="0">
                                <span class="media-first-card-source">ECONOMIC TIMES</span>
                                <p class="media-first-card-headline">Saya Group repays Rs 1,500 crore debt, to focus on growth</p>
                            </a>
                            <a href="https://www.rprealtyplus.com/article/saya-group-clears-rs-1500-cr-debt-signals-debt-free-growth-across-ncr-122622.html" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="1">
                                <span class="media-first-card-source">Rprealty Plus</span>
                                <p class="media-first-card-headline">Saya Group Clears Rs 1,500 Cr Debt, Signals Debt-Free Growth Across NCR</p>
                            </a>
                            <a href="https://www.financeoutlookindia.com/news/saya-group-clears-rs-1500-crore-debt-sets-stage-for-expansion-nwid-6594.html" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="2">
                                <span class="media-first-card-source">Finance Outlook India</span>
                                <p class="media-first-card-headline">Saya Group Clears Rs 1,500 Crore Debt, Sets Stage for Expansion</p>
                            </a>
                            <a href="http://realty.economictimes.indiatimes.com/news/industry/saya-group-successfully-eliminates-1500-crore-debt-amidst-robust-growth/125223685" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="3">
                                <span class="media-first-card-source">Realty Economic Times</span>
                                <p class="media-first-card-headline">Saya Group clears ₹1,500 crore debt</p>
                            </a>
                        </div>
                        <button type="button" class="media-first-card-slider-prev" id="mediaFirstCardSliderPrev" aria-label="Previous slide">
                            <img src="<?= $base_url ?>/images/svg/medialeftarrow.svg" alt="" class="media-first-card-slider-arrow-img" aria-hidden="true">
                        </button>
                        <button type="button" class="media-first-card-slider-next" id="mediaFirstCardSliderNext" aria-label="Next slide">
                            <img src="<?= $base_url ?>/images/svg/mediarightarrow.svg" alt="" class="media-first-card-slider-arrow-img" aria-hidden="true">
                        </button>
                    </div>
                    <!-- Second card: slider with 4 Grand Umbrella Campaign articles (same style as first card) -->
                    <div class="media-first-card-slider media-hide-when-2024 media-hide-when-2023 media-hide-when-2022 media-hide-when-2021 media-hide-when-2020 media-hide-when-2019" id="mediaSecondCardSlider">
                        <div class="media-first-card-slider-track">
                            <a href="https://www.business-standard.com/amp/content/press-releases-ani/saya-group-launches-grand-umbrella-campaign-targets-inr-80-crore-festive-revenue-with-exclusive-offers-125092600998_1.html" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="0">
                                <span class="media-first-card-source">Business Standard</span>
                                <p class="media-first-card-headline">Saya Group Launches Grand Umbrella Campaign; Targets INR 80 Crore Festive Revenue with Exclusive Offers</p>
                            </a>
                            <a href="https://www.aninews.in/news/business/saya-group-launches-grand-umbrella-campaign-targets-inr-80-crore-festive-revenue-with-exclusive-offers20250926171407/" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="1">
                                <span class="media-first-card-source">ANI News</span>
                                <p class="media-first-card-headline">Saya Group Launches Grand Umbrella Campaign; Targets INR 80 Crore Festive Revenue with Exclusive Offers</p>
                            </a>
                            <a href="https://www.ptinews.com/press-release/saya-group-launches-grand-umbrella-campaign;-targets-inr-80-crore-festive-revenue-with-exclusive-offers=/2952077" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="2">
                                <span class="media-first-card-source">PTI News</span>
                                <p class="media-first-card-headline">Saya Group Launches Grand Umbrella Campaign; Targets INR 80 Crore Festive Revenue with Exclusive Offers</p>
                            </a>
                            <a href="https://businessnewsweek.in/newsvoir/?c_article_id=33304&c_author_id=10021&type=crawlscriptpartner&old=old&originurl=https%3a%2f%2fbusinessnewsweek.in%2fnewsvoir%2f" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="3">
                                <span class="media-first-card-source">Business News Week</span>
                                <p class="media-first-card-headline">Saya Group Launches Grand Umbrella Campaign; Targets INR 80 Crore Festive Revenue with Exclusive Offers</p>
                            </a>
                        </div>
                        <button type="button" class="media-first-card-slider-prev" id="mediaSecondCardSliderPrev" aria-label="Previous slide">
                            <img src="<?= $base_url ?>/images/svg/medialeftarrow.svg" alt="" class="media-first-card-slider-arrow-img" aria-hidden="true">
                        </button>
                        <button type="button" class="media-first-card-slider-next" id="mediaSecondCardSliderNext" aria-label="Next slide">
                            <img src="<?= $base_url ?>/images/svg/mediarightarrow.svg" alt="" class="media-first-card-slider-arrow-img" aria-hidden="true">
                        </button>
                    </div>
                </div>
                <!-- Column 2 -->
                <div class="media-template-col media-hide-when-2024 media-hide-when-2023 media-hide-when-2022 media-hide-when-2021 media-hide-when-2020 media-hide-when-2019">
                    <!-- Third card: slider with 2 items (Vikas Bhasin / Industry Experts – same style as first card) -->
                    <div class="media-first-card-slider" id="mediaThirdCardSlider">
                        <div class="media-first-card-slider-track">
                            <a href="https://thepropertytimes.in/views-of-mr-vikas-bhasin-managing-director-saya-group-on-the-festive-season-expectations-of-the-housing-sector/" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="0">
                                <span class="media-first-card-source">The Property Times</span>
                                <p class="media-first-card-headline">Views of Mr. Vikas Bhasin, Managing Director, Saya Group on the festive season expectations of the housing sector.</p>
                            </a>
                            <a href="https://therealtytoday.com/news/expert-opinion/industry-experts-expects-festive-season-to-boost-residential-real-estate-demand-across-india/" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="1">
                                <span class="media-first-card-source">The Realty Today</span>
                                <p class="media-first-card-headline">Industry Experts Expects Festive Season To Boost Residential Real Estate Demand Across India</p>
                            </a>
                        </div>
                        <button type="button" class="media-first-card-slider-prev" id="mediaThirdCardSliderPrev" aria-label="Previous slide">
                            <img src="<?= $base_url ?>/images/svg/medialeftarrow.svg" alt="" class="media-first-card-slider-arrow-img" aria-hidden="true">
                        </button>
                        <button type="button" class="media-first-card-slider-next" id="mediaThirdCardSliderNext" aria-label="Next slide">
                            <img src="<?= $base_url ?>/images/svg/mediarightarrow.svg" alt="" class="media-first-card-slider-arrow-img" aria-hidden="true">
                        </button>
                    </div>
                    <a href="https://constrofacilitator.com/real-estate-industry-postive-about-gst-cuts/" class="media-template-box media-template-box--link" target="_blank" rel="noopener noreferrer">
                        <div class="media-template-meta media-template-meta--top">
                            <span class="media-template-source-name">Constrofacilitator</span>
                            <span class="media-template-meta-sep">•</span>
                            <svg class="media-template-calendar" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
                            <span class="media-template-date">2025</span>
                        </div>
                        <h3 class="media-template-title">Industry Experts See Affordable Housing Push from GST Cuts</h3>
                        <span class="media-first-card-readmore">Read More</span>
                    </a>
                </div>
                <!-- Column 3 -->
                <div class="media-template-col media-hide-when-2024 media-hide-when-2023 media-hide-when-2022 media-hide-when-2021 media-hide-when-2020 media-hide-when-2019">
                    <!-- Fifth card: slider with 9 Saya Piazza OC articles – each slide links to its article -->
                    <div class="media-first-card-slider" id="mediaFifthCardSlider">
                        <div class="media-first-card-slider-track">
                            <a href="https://newindianewsservice.com/saya-groups-premium-high-street-mall-saya-piazza-at-jaypee-wishtown-applies/" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="0">
                                <span class="media-first-card-source">New India News Service</span>
                                <p class="media-first-card-headline">Saya Group's Premium High-Street Mall Saya Piazza at Jaypee Wishtown Applies for OC; Ministry of Beer and LOOKS Salon Onboard, Unlocking Prime Commercial Investment Opportunities</p>
                            </a>
                            <a href="https://www.apnnews.com/saya-groups-premium-high-street-mall-saya-piazza-at-jaypee-wishtown-applies-for-oc-ministry-of-beer-and-looks-salon-onboard-unlocking-prime-commercial-investment-opportunities/" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="1">
                                <span class="media-first-card-source">APN News</span>
                                <p class="media-first-card-headline">Saya Group's Premium High-Street Mall Saya Piazza at Jaypee Wishtown Applies for OC; Ministry of Beer and LOOKS Salon Onboard, Unlocking Prime Commercial Investment Opportunities</p>
                            </a>
                            <a href="https://www.nbmcw.com/news/saya-group-applies-for-oc-for-saya-piazza-on-noida-expressway.html" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="2">
                                <span class="media-first-card-source">NBM &amp; CW</span>
                                <p class="media-first-card-headline">Saya Group Applies for OC for Saya Piazza on Noida Expressway</p>
                            </a>
                            <a href="https://realtyninfra.in/saya-group-applies-for-oc-for-its-high-street-saya-piazza-in-noida/" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="3">
                                <span class="media-first-card-source">Realty N Infra</span>
                                <p class="media-first-card-headline">Saya Group applies for OC for its high-street Saya Piazza in Noida</p>
                            </a>
                            <a href="https://www.homesindiamagazine.com/news/saya-piazza-applies-for-oc-for-its-flagship-high-street-commercial-destination-nwid-5378.html" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="4">
                                <span class="media-first-card-source">Homes</span>
                                <p class="media-first-card-headline">Saya Piazza applies for OC for its flagship high-street commercial destination</p>
                            </a>
                            <a href="https://hospitalitynews.in/news/saya-groups-premium-high-street-mall-saya-piazza-at-jaypee-wishtown-applies-for-oc-ministry-of-beer-and-looks-salon-onboard" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="5">
                                <span class="media-first-card-source">Hospitality News</span>
                                <p class="media-first-card-headline">Saya Group's Premium High-Street Mall Saya Piazza at Jaypee Wishtown Applies for OC; Ministry of Beer and LOOKS Salon Onboard.</p>
                            </a>
                            <a href="https://thehomefashion.in/saya-piazza-noida-applies-for-oc-premium-retail-dining-hub/" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="6">
                                <span class="media-first-card-source">Home Fashion</span>
                                <p class="media-first-card-headline">Saya Piazza Noida Applies for OC | Premium Retail &amp; Dining Hub</p>
                            </a>
                            <a href="https://fashionvaluechain.com/saya-piazza-noida-nears-completion-with-oc-application/" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="7">
                                <span class="media-first-card-source">FVN</span>
                                <p class="media-first-card-headline">Saya Piazza Noida Nears Completion with OC Application</p>
                            </a>
                            <a href="https://propnewstime.com/getdetailsStories/MjA5NDk=/saya-group-seeks-occupancy-certificate-for-premium-retail-hub-in-noida" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="8">
                                <span class="media-first-card-source">Prop News Time</span>
                                <p class="media-first-card-headline">Saya Group seeks occupancy certificate for premium retail hub in Noida</p>
                            </a>
                        </div>
                        <button type="button" class="media-first-card-slider-prev" id="mediaFifthCardSliderPrev" aria-label="Previous slide">
                            <img src="<?= $base_url ?>/images/svg/medialeftarrow.svg" alt="" class="media-first-card-slider-arrow-img" aria-hidden="true">
                        </button>
                        <button type="button" class="media-first-card-slider-next" id="mediaFifthCardSliderNext" aria-label="Next slide">
                            <img src="<?= $base_url ?>/images/svg/mediarightarrow.svg" alt="" class="media-first-card-slider-arrow-img" aria-hidden="true">
                        </button>
                    </div>
                    <a href="https://www.hindustantimes.com/real-estate/uttar-pradesh-approves-gis-based-master-plan-2031-for-ghaziabad-region-with-focus-on-transit-oriented-development-101756041130032.html" class="media-template-box media-template-box--link" target="_blank" rel="noopener noreferrer">
                        <div class="media-template-meta media-template-meta--top">
                            <span class="media-template-source-name">Hindustan Times</span>
                            <span class="media-template-meta-sep">•</span>
                            <svg class="media-template-calendar" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
                            <span class="media-template-date">2025</span>
                        </div>
                        <h3 class="media-template-title">Uttar Pradesh approves GIS-based Master Plan 2031 for Ghaziabad region with focus on transit-oriented development</h3>
                        <span class="media-first-card-readmore">Read More</span>
                    </a>
                </div>
                <!-- Column 4 - extra boxes for Digital Media -->
                <div class="media-template-col media-template-col--digital-only media-hide-when-2024 media-hide-when-2023 media-hide-when-2022 media-hide-when-2021 media-hide-when-2020 media-hide-when-2019">
                    <a href="https://www.hindustantimes.com/real-estate/will-the-governments-proposal-for-two-gst-slabs-5-and-18-under-a-revamped-tax-regime-benefit-homebuyers-101755306573718.html" class="media-template-box media-template-box--link" target="_blank" rel="noopener noreferrer">
                        <div class="media-template-meta media-template-meta--top">
                            <span class="media-template-source-name">Hindustan Times</span>
                            <span class="media-template-meta-sep">•</span>
                            <svg class="media-template-calendar" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
                            <span class="media-template-date">2025</span>
                        </div>
                        <h3 class="media-template-title">Will the government's proposal for two GST slabs—5% and 18%—under a revamped tax regime benefit homebuyers?</h3>
                        <span class="media-first-card-readmore">Read More</span>
                    </a>
                    <!-- Eighth card: slider with 9 Saya SouthX F&B/Entertainment articles – each slide links to its article -->
                    <div class="media-first-card-slider" id="mediaEighthCardSlider">
                        <div class="media-first-card-slider-track">
                            <a href="https://newindianewsservice.com/top-fb-entertainment-giants-sign-up-at-saya-southx-mcdonalds-sunburn-cinepolis-more-to-open-by-christmas/" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="0">
                                <span class="media-first-card-source">New India News Service</span>
                                <p class="media-first-card-headline">Top F&B &amp; Entertainment Giants Sign Up at Saya SouthX — McDonald's, Sunburn, Cinepolis &amp; More to Open by Christmas</p>
                            </a>
                            <a href="https://www.moneyphobia.in/press-release/saya-southx-mcdonalds-sunburn-cinepolis-launch/" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="1">
                                <span class="media-first-card-source">Moneyphobia</span>
                                <p class="media-first-card-headline">Top F&B &amp; Entertainment Giants Sign Up at Saya SouthX — McDonald's, Sunburn, Cinepolis &amp; More to Open by Christmas</p>
                            </a>
                            <a href="https://www.zeebiz.com/hindi/real-estate/top-f-and-b-and-entertainment-giants-sign-up-at-saya-southx-mcdonald-sunburn-more-to-open-by-christmas-228791" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="2">
                                <span class="media-first-card-source">Zee Business</span>
                                <p class="media-first-card-headline">Top F&B &amp; Entertainment Giants Sign Up at Saya SouthX — McDonald's, Sunburn, Cinepolis &amp; More to Open by Christmas</p>
                            </a>
                            <a href="https://newsmantra.in/top-fb-entertainment-giants-sign-up-at-saya-southx-mcdonalds-sunburn-cinepolis-more-to-open-by-christmas/" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="3">
                                <span class="media-first-card-source">News Mantra</span>
                                <p class="media-first-card-headline">Top F&B &amp; Entertainment Giants Sign Up at Saya SouthX — McDonald's, Sunburn, Cinepolis &amp; More to Open by Christmas</p>
                            </a>
                            <a href="https://businessmicro.in/business/saya-southx-to-debut-mcdonalds-sunburn-cafe-and-more-by-christmas/" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="4">
                                <span class="media-first-card-source">Business Micro</span>
                                <p class="media-first-card-headline">Top F&B &amp; Entertainment Giants Sign Up at Saya SouthX — McDonald's, Sunburn, Cinepolis &amp; More to Open by Christmas</p>
                            </a>
                            <a href="https://cinebuzznews.net/uncategorized/saya-southx-to-debut-mcdonalds-sunburn-cafe-and-more-by-christmas/" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="5">
                                <span class="media-first-card-source">Cine Buzz News</span>
                                <p class="media-first-card-headline">Top F&B &amp; Entertainment Giants Sign Up at Saya SouthX — McDonald's, Sunburn, Cinepolis &amp; More to Open by Christmas</p>
                            </a>
                            <a href="https://businesscanner.com/business/saya-southx-to-debut-mcdonalds-sunburn-cafe-and-more-by-christmas" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="6">
                                <span class="media-first-card-source">Business Scanner</span>
                                <p class="media-first-card-headline">Top F&B &amp; Entertainment Giants Sign Up at Saya SouthX — McDonald's, Sunburn, Cinepolis &amp; More to Open by Christmas</p>
                            </a>
                            <a href="https://biznewsdaily.com/business/saya-southx-to-debut-mcdonalds-sunburn-cafe-and-more-by-christmas/" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="7">
                                <span class="media-first-card-source">Biz News Daily</span>
                                <p class="media-first-card-headline">Top F&B &amp; Entertainment Giants Sign Up at Saya SouthX — McDonald's, Sunburn, Cinepolis &amp; More to Open by Christmas</p>
                            </a>
                            <a href="https://bizrapidx.com/business/saya-southx-to-debut-mcdonalds-sunburn-cafe-and-more-by-christmas/" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="8">
                                <span class="media-first-card-source">Biz Rapidx</span>
                                <p class="media-first-card-headline">Top F&B &amp; Entertainment Giants Sign Up at Saya SouthX — McDonald's, Sunburn, Cinepolis &amp; More to Open by Christmas</p>
                            </a>
                        </div>
                        <button type="button" class="media-first-card-slider-prev" id="mediaEighthCardSliderPrev" aria-label="Previous slide">
                            <img src="<?= $base_url ?>/images/svg/medialeftarrow.svg" alt="" class="media-first-card-slider-arrow-img" aria-hidden="true">
                        </button>
                        <button type="button" class="media-first-card-slider-next" id="mediaEighthCardSliderNext" aria-label="Next slide">
                            <img src="<?= $base_url ?>/images/svg/mediarightarrow.svg" alt="" class="media-first-card-slider-arrow-img" aria-hidden="true">
                        </button>
                    </div>
                    <!-- Ninth card: slider with 5 Indirapuram/Ghaziabad real estate articles – each slide links to its article -->
                    <div class="media-first-card-slider" id="mediaNinthCardSlider">
                        <div class="media-first-card-slider-track">
                            <a href="https://www.zeebiz.com/real-estate/news-ghaziabad-realty-hotspot-indirapuram-prices-spike-73-in-4-years-outpaces-neighbourhoods-what-s-driving-the-momentum-375561" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="0">
                                <span class="media-first-card-source">Zee Business</span>
                                <p class="media-first-card-headline">Ghaziabad Realty Hotspot: Indirapuram prices spike 73% in 5 years, outpaces these neighbourhoods—What's driving the momentum?</p>
                            </a>
                            <a href="https://www.hindustantimes.com/real-estate/ghaziabad-real-estate-indirapuram-property-prices-surge-73-in-five-years-driven-by-transport-led-development-101754372695437.html" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="1">
                                <span class="media-first-card-source">Hindustan Times</span>
                                <p class="media-first-card-headline">Ghaziabad's Indirapuram real estate prices surge 73%, fueled by Delhi–Meerut Expressway and RRTS corridor</p>
                            </a>
                            <a href="https://www.rprealtyplus.com/news-views/indirapuram-leads-ghaziabad-in-sales-property-prices-surge-73-121195.html" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="2">
                                <span class="media-first-card-source">Rprealty Plus</span>
                                <p class="media-first-card-headline">Indirapuram Leads Ghaziabad in Sales; Property Prices Surge 73%</p>
                            </a>
                            <a href="https://www.financeoutlookindia.com/news/indirapuram-tops-ghaziabad-residential-transactions-fy21fy25-prices-up-73-nwid-5813.html" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="3">
                                <span class="media-first-card-source">Finance Outlook India</span>
                                <p class="media-first-card-headline">Indirapuram Tops Ghaziabad Residential Transactions FY21-FY25; Prices Up 73%</p>
                            </a>
                            <a href="https://www.msn.com/en-in/news/India/ghaziabad-real-estate-indirapuram-property-prices-surge-73-in-five-years-driven-by-transport-led-development/ar-AA1JVaW4" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="4">
                                <span class="media-first-card-source">MSN</span>
                                <p class="media-first-card-headline">Ghaziabad's Indirapuram real estate prices surge 73%, fueled by Delhi–Meerut Expressway and RRTS corridor</p>
                            </a>
                        </div>
                        <button type="button" class="media-first-card-slider-prev" id="mediaNinthCardSliderPrev" aria-label="Previous slide">
                            <img src="<?= $base_url ?>/images/svg/medialeftarrow.svg" alt="" class="media-first-card-slider-arrow-img" aria-hidden="true">
                        </button>
                        <button type="button" class="media-first-card-slider-next" id="mediaNinthCardSliderNext" aria-label="Next slide">
                            <img src="<?= $base_url ?>/images/svg/mediarightarrow.svg" alt="" class="media-first-card-slider-arrow-img" aria-hidden="true">
                        </button>
                    </div>
                    <!-- Tenth card: Zee Business – Delhi NCR middle class housing -->
                    <a href="https://www.zeebiz.com/hindi/real-estate/delhi-ncr-property-rates-as-well-as-rent-rates-are-increasing-how-middle-class-not-getting-affordable-housing-225596" class="media-template-box media-template-box--link" target="_blank" rel="noopener noreferrer">
                        <div class="media-template-meta media-template-meta--top">
                            <span class="media-template-source-name">Zee Business</span>
                            <span class="media-template-meta-sep">•</span>
                            <svg class="media-template-calendar" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
                            <span class="media-template-date">2025</span>
                        </div>
                        <h3 class="media-template-title">जाएं तो जाएं कहां, किराया भी महंगा, नए घर भी महंगे, Delhi NCR में कैसे पिस रहा है मिडिल क्लास</h3>
                        <span class="media-first-card-readmore">Read More</span>
                    </a>
                    <!-- Eleventh card: slider with 9 Saya Gold Avenue Penthouse / Indirapuram articles -->
                    <div class="media-first-card-slider" id="mediaEleventhCardSlider">
                        <div class="media-first-card-slider-track">
                            <a href="https://www.homesindiamagazine.com/news/phenomenal-sale-saya-gold-avenue-penthouse-attracts-rs-10-crore-nwid-4893.html" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="0">
                                <span class="media-first-card-source">Homes India Magazine</span>
                                <p class="media-first-card-headline">Phenomenal Sale: Saya Gold Avenue Penthouse attracts Rs. 10 Crore</p>
                            </a>
                            <a href="https://www.nbmcw.com/news/saya-gold-avenue-penthouse-sold-for-rs10-cr-setting-luxury-benchmark-in-indirapuram.html" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="1">
                                <span class="media-first-card-source">NBM Media</span>
                                <p class="media-first-card-headline">Saya Gold Avenue Penthouse Sold for ₹10 Cr, Setting Luxury Benchmark in Indirapuram</p>
                            </a>
                            <a href="https://realtyninfra.in/penthouse-in-saya-gold-avenue-indirapuram-sells-for-%E2%82%B910-crore/" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="2">
                                <span class="media-first-card-source">Realty n Infra</span>
                                <p class="media-first-card-headline">Penthouse in Saya Gold Avenue, Indirapuram Sells for ₹10 Crore</p>
                            </a>
                            <a href="https://regnews.in/penthouse-rs-10-crore" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="3">
                                <span class="media-first-card-source">Reg News</span>
                                <p class="media-first-card-headline">Penthouse.. Rs. 10 crore</p>
                            </a>
                            <a href="https://realtynmore.com/indirapuram-records-highest-number-of-registered-residential-transactions-in-fy21-fy25-in-ghaziabad/" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="4">
                                <span class="media-first-card-source">Realty n More</span>
                                <p class="media-first-card-headline">Indirapuram Records Highest Number of Registered Residential Transactions in FY21-FY25 in Ghaziabad</p>
                            </a>
                            <a href="https://navbharattimes.indiatimes.com/business/property/property-news/indirapuram-of-ghaziabad-is-also-hot-in-property-market-saya-gold-avenue-sells-for-rs-10-crore-in-landmark-transaction/articleshow/122814418.cms" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="5">
                                <span class="media-first-card-source">Live Hindustan</span>
                                <p class="media-first-card-headline">गाजियाबाद में ₹10 करोड़ में बिका एक फ्लैट, जानिए क्या है खासियत</p>
                            </a>
                            <a href="https://www.hindustantimes.com/real-estate/ghaziabad-real-estate-7-000-sq-ft-penthouse-in-indirapuram-sells-for-10-crore-101753092975854.html" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="6">
                                <span class="media-first-card-source">Hindustan Times</span>
                                <p class="media-first-card-headline">Ghaziabad real estate: 7,000 sq ft penthouse in Indirapuram sells for ₹10 crore</p>
                            </a>
                            <a href="https://www.business-standard.com/finance/personal-finance/7-000-sq-ft-penthouse-in-delhi-ncr-s-indirapuram-sells-for-rs-10-crore-125072100876_1.html" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="7">
                                <span class="media-first-card-source">Business Standard</span>
                                <p class="media-first-card-headline">7,000 sq ft penthouse in Delhi NCR's Indirapuram sells for Rs 10 crore</p>
                            </a>
                            <a href="https://realtynmore.com/record-setting-7000-sq-ft-penthouse-at-saya-gold-avenue-indirapuram-sells-for-%E2%82%B910-crore/" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="8">
                                <span class="media-first-card-source">Realtyn More</span>
                                <p class="media-first-card-headline">Record-Setting 7,000 sq ft Penthouse at Saya Gold Avenue, Indirapuram, Sells for ₹10 Crore</p>
                            </a>
                        </div>
                        <button type="button" class="media-first-card-slider-prev" id="mediaEleventhCardSliderPrev" aria-label="Previous slide">
                            <img src="<?= $base_url ?>/images/svg/medialeftarrow.svg" alt="" class="media-first-card-slider-arrow-img" aria-hidden="true">
                        </button>
                        <button type="button" class="media-first-card-slider-next" id="mediaEleventhCardSliderNext" aria-label="Next slide">
                            <img src="<?= $base_url ?>/images/svg/mediarightarrow.svg" alt="" class="media-first-card-slider-arrow-img" aria-hidden="true">
                        </button>
                    </div>
                    <!-- Twelfth card: slider with 6 Saya Gold Avenue Ready-to-move-in articles -->
                    <div class="media-first-card-slider" id="mediaTwelfthCardSlider">
                        <div class="media-first-card-slider-track">
                            <a href="https://www.business-standard.com/content/press-releases-ani/don-t-miss-the-last-few-ready-to-move-in-units-at-saya-gold-avenue-indirapuram-offered-at-new-launch-rates-in-the-area-125070901010_1.html" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="0">
                                <span class="media-first-card-source">Business Standard</span>
                                <p class="media-first-card-headline">Don't miss the Last Few Ready-to-move-in Units at Saya Gold Avenue, Indirapuram--offered at New Launch Rates in the Area</p>
                            </a>
                            <a href="https://businessnewsthisweek.com/newsvoir/?c_article_id=32531&amp;c_author_id=10021&amp;type=old&amp;pageid=2&amp;originurl=https%3a%2f%2fbusinessnewsthisweek.com%2fnewsvoir%2f" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="1">
                                <span class="media-first-card-source">Business News This Week</span>
                                <p class="media-first-card-headline">Don't miss the Last Few Ready-to-move-in Units at Saya Gold Avenue, Indirapuram—offered at New Launch Rates in the Area</p>
                            </a>
                            <a href="https://www.thebusinessascent.com/corporate-news?c_article_id=32531&amp;c_author_id=10021&amp;type=old&amp;pageid=2&amp;originurl=https%3a%2f%2fwww.thebusinessascent.com%2fcorporate-news" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="2">
                                <span class="media-first-card-source">The Business Ascent</span>
                                <p class="media-first-card-headline">Don't miss the Last Few Ready-to-move-in Units at Saya Gold Avenue, Indirapuram—offered at New Launch Rates in the Area</p>
                            </a>
                            <a href="https://theprint.in/ani-press-releases/dont-miss-the-last-few-ready-to-move-in-units-at-saya-gold-avenue-indirapuram-offered-at-new-launch-rates-in-the-area/2684849/" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="3">
                                <span class="media-first-card-source">The Print</span>
                                <p class="media-first-card-headline">Don't miss the Last Few Ready-to-move-in Units at Saya Gold Avenue, Indirapuram–offered at New Launch Rates in the Area</p>
                            </a>
                            <a href="https://www.ptinews.com/story/business/Don-t-miss-the-Last-Few-Ready-to-move-in-Units-at-Saya-Gold-Avenue--Indirapuram%E2%80%94offered-at-New-Launch-Rates-in-the-Area/2712949" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="4">
                                <span class="media-first-card-source">Press Trust Of India</span>
                                <p class="media-first-card-headline">Don't miss the Last Few Ready-to-move-in Units at Saya Gold Avenue, Indirapuram—offered at New Launch Rates in the Area</p>
                            </a>
                            <a href="https://www.tribuneindia.com/news/business/dont-miss-the-last-few-ready-to-move-in-units-at-saya-gold-avenue-indirapuram-offered-at-new-launch-rates-in-the-area-2/" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="5">
                                <span class="media-first-card-source">The Tribune</span>
                                <p class="media-first-card-headline">Don't miss the Last Few Ready-to-move-in Units at Saya Gold Avenue, Indirapuram—offered at New Launch Rates in the Area</p>
                            </a>
                        </div>
                        <button type="button" class="media-first-card-slider-prev" id="mediaTwelfthCardSliderPrev" aria-label="Previous slide">
                            <img src="<?= $base_url ?>/images/svg/medialeftarrow.svg" alt="" class="media-first-card-slider-arrow-img" aria-hidden="true">
                        </button>
                        <button type="button" class="media-first-card-slider-next" id="mediaTwelfthCardSliderNext" aria-label="Next slide">
                            <img src="<?= $base_url ?>/images/svg/mediarightarrow.svg" alt="" class="media-first-card-slider-arrow-img" aria-hidden="true">
                        </button>
                    </div>
                    <!-- Thirteenth card: slider with 11 Saya Group + Lemon Tree / BIZTOP articles -->
                    <div class="media-first-card-slider" id="mediaThirteenthCardSlider">
                        <div class="media-first-card-slider-track">
                            <a href="https://economictimes.indiatimes.com/industry/services/property-/-cstruction/realty-developer-saya-group-partners-with-lemon-tree-hotels-to-operate-business-suites-in-greater-noida/articleshow/122020807.cms?from=mdr" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="0">
                                <span class="media-first-card-source">Economic Times</span>
                                <p class="media-first-card-headline">Realty developer Saya Group partners with Lemon Tree Hotels to operate business suites in Greater Noida.</p>
                            </a>
                            <a href="https://www.hindustantimes.com/real-estate/saya-group-ties-up-with-lemon-tree-hotels-to-manage-and-operate-336-business-suites-in-greater-noida-project-101750692648090.html" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="1">
                                <span class="media-first-card-source">Hindustan Times</span>
                                <p class="media-first-card-headline">Saya Group ties up with Lemon Tree Hotels to manage and operate 336 business suites in Greater Noida project</p>
                            </a>
                            <a href="https://www.rprealtyplus.com/news-views/saya-group-partners-with-lemon-tree-hotels-for-saya-southx-g-noida-west-120529.html" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="2">
                                <span class="media-first-card-source">Rprealty Plus</span>
                                <p class="media-first-card-headline">Saya Group Partners with Lemon Tree Hotels for Saya SouthX, G-Noida West</p>
                            </a>
                            <a href="https://cnc-24.in/saya-group-partners-with-lemon-tree-hotels-to-manage-and-operate-336-biztop-business-class-suites-at-saya-southx-g-noida-west/" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="3">
                                <span class="media-first-card-source">CNC 24</span>
                                <p class="media-first-card-headline">Saya Group Partners with Lemon Tree Hotels to Manage and Operate 336 BIZTOP Business Class Suites at Saya SouthX, G-Noida West</p>
                            </a>
                            <a href="https://regnews.in/saya-group-partners-with-lemon-tree-hotels-to-manage-336-biztop-business-class-suites" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="4">
                                <span class="media-first-card-source">Real Estate Guru</span>
                                <p class="media-first-card-headline">Saya Group Partners with Lemon Tree Hotels to Manage 336 BIZTOP Business Class Suites</p>
                            </a>
                            <a href="https://businessnewsthisweek.com/business/saya-group-ties-up-with-lemon-tree-to-operate-336-biztop-suites/" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="5">
                                <span class="media-first-card-source">Business News This Week</span>
                                <p class="media-first-card-headline">Saya Group Ties Up with Lemon Tree to Operate 336 BIZTOP Suites</p>
                            </a>
                            <a href="https://businessnewsforprofit.com/business/saya-group-ties-up-with-lemon-tree-to-operate-336-biztop-suites/" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="6">
                                <span class="media-first-card-source">Business News For Profit</span>
                                <p class="media-first-card-headline">Saya Group Ties Up with Lemon Tree to Operate 336 BIZTOP Suites</p>
                            </a>
                            <a href="https://nationalbiznews.com/business/saya-group-ties-up-with-lemon-tree-to-operate-336-biztop-suites" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="7">
                                <span class="media-first-card-source">National Biz News</span>
                                <p class="media-first-card-headline">Saya Group Ties Up with Lemon Tree to Operate 336 BIZTOP Suites</p>
                            </a>
                            <a href="https://nationalbiznews.com/business/saya-group-ties-up-with-lemon-tree-to-operate-336-biztop-suites" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="8">
                                <span class="media-first-card-source">National Biz News</span>
                                <p class="media-first-card-headline">Saya Group Ties Up with Lemon Tree to Operate 336 BIZTOP Suites</p>
                            </a>
                            <a href="https://businessnewsmatters.com/business/saya-group-ties-up-with-lemon-tree-to-operate-336-biztop-suites/" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="9">
                                <span class="media-first-card-source">Business News Matters</span>
                                <p class="media-first-card-headline">Saya Group Ties Up with Lemon Tree to Operate 336 BIZTOP Suites</p>
                            </a>
                            <a href="https://biznewsdesk.com/business/saya-group-ties-up-with-lemon-tree-to-operate-336-biztop-suites/" class="media-first-card-slide media-first-card-slide--compact" target="_blank" rel="noopener noreferrer" data-slide="10">
                                <span class="media-first-card-source">Biz News Desk</span>
                                <p class="media-first-card-headline">Saya Group Ties Up with Lemon Tree to Operate 336 BIZTOP Suites</p>
                            </a>
                        </div>
                        <button type="button" class="media-first-card-slider-prev" id="mediaThirteenthCardSliderPrev" aria-label="Previous slide">
                            <img src="<?= $base_url ?>/images/svg/medialeftarrow.svg" alt="" class="media-first-card-slider-arrow-img" aria-hidden="true">
                        </button>
                        <button type="button" class="media-first-card-slider-next" id="mediaThirteenthCardSliderNext" aria-label="Next slide">
                            <img src="<?= $base_url ?>/images/svg/mediarightarrow.svg" alt="" class="media-first-card-slider-arrow-img" aria-hidden="true">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 2021 gallery lightbox popup -->
    <div class="media-gallery-lightbox" id="mediaGalleryLightbox" role="dialog" aria-modal="true" aria-label="Image gallery" hidden>
        <div class="media-gallery-lightbox-backdrop"></div>
        <button type="button" class="media-gallery-lightbox-close" id="mediaGalleryLightboxClose" aria-label="Close gallery">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
        <button type="button" class="media-gallery-lightbox-prev" id="mediaGalleryLightboxPrev" aria-label="Previous image">
            <img src="<?= $base_url ?>/images/svg/medialeftarrow.svg" alt="" class="media-gallery-lightbox-arrow-img" aria-hidden="true">
        </button>
        <button type="button" class="media-gallery-lightbox-next" id="mediaGalleryLightboxNext" aria-label="Next image">
            <img src="<?= $base_url ?>/images/svg/mediarightarrow.svg" alt="" class="media-gallery-lightbox-arrow-img" aria-hidden="true">
        </button>
        <div class="media-gallery-lightbox-content">
            <img class="media-gallery-lightbox-img" id="mediaGalleryLightboxImg" src="" alt="">
        </div>
    </div>
    <!-- Print Media: click card opens image lightbox -->
    <div class="media-print-image-lightbox" id="mediaPrintImageLightbox" role="dialog" aria-modal="true" aria-label="Print media image" hidden>
        <div class="media-print-image-lightbox-backdrop"></div>
        <button type="button" class="media-print-image-lightbox-close" id="mediaPrintImageLightboxClose" aria-label="Close">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>
        <button type="button" class="media-print-image-lightbox-prev" id="mediaPrintImageLightboxPrev" aria-label="Previous image">
            <img src="<?= $base_url ?>/images/svg/medialeftarrow.svg" alt="" class="media-print-image-lightbox-arrow-img" aria-hidden="true">
        </button>
        <button type="button" class="media-print-image-lightbox-next" id="mediaPrintImageLightboxNext" aria-label="Next image">
            <img src="<?= $base_url ?>/images/svg/mediarightarrow.svg" alt="" class="media-print-image-lightbox-arrow-img" aria-hidden="true">
        </button>
        <div class="media-print-image-lightbox-content">
            <img class="media-print-image-lightbox-img" id="mediaPrintImageLightboxImg" src="" alt="">
        </div>
    </div>
    <?php endif; ?>

    <!-- Get To Know Banner (Contact + Media + Career page) -->
    <div class="get-to-know-banner-wrap">
        <section class="get-to-know-banner" style="background-image: url('<?= $base_url ?>/images/new_theme/contactusbg.jpg');">
            <div class="get-to-know-banner-inner">
                <h2 class="get-to-know-banner-title">Get To Know About Saya Homes Realty</h2>
                <a href="<?= $base_url ?>/about-us" class="btn1212" style="text-decoration: none;">
                    <span class="btn1212-text">Read More</span>
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
        // Banner title spelling animation (one by one)
        (function() {
            if (typeof gsap === 'undefined') return;

            var title = document.querySelector('.media-banner-title');
            if (!title) return;

            var text = title.textContent || '';
            if (!text.trim()) return;

            var fragment = document.createDocumentFragment();
            var letters = [];
            title.textContent = '';

            text.split('').forEach(function(ch) {
                if (ch === ' ') {
                    fragment.appendChild(document.createTextNode(' '));
                    return;
                }
                var span = document.createElement('span');
                span.textContent = ch;
                span.style.display = 'inline-block';
                span.style.willChange = 'transform, opacity';
                letters.push(span);
                fragment.appendChild(span);
            });

            title.appendChild(fragment);

            gsap.fromTo(letters, {
                y: 22,
                opacity: 0
            }, {
                y: 0,
                opacity: 1,
                duration: 0.48,
                ease: 'power3.out',
                stagger: 0.045
            });
        })();
    </script>

    <script>
        // GSAP ScrollTrigger – Media cards + Career + Contact page
        (function() {
            if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
            gsap.registerPlugin(ScrollTrigger);

            // Media page – cards slide from right, one by one (Digital, PR Coverage, Print Media)
            function animateMediaCards() {
                var containers = [".media-template-grid", "#media-pr-coverage-wrap", "#media-print-coverage-wrap"];
                containers.forEach(function(sel) {
                    var el = document.querySelector(sel);
                    if (!el || el.offsetParent === null) return;
                    var cards = [].filter.call(el.querySelectorAll(".media-template-box"), function(c) { return c.offsetParent !== null; });
                    if (cards.length) {
                        gsap.killTweensOf(cards);
                        gsap.set(cards, { clearProps: "transform,opacity" });
                        gsap.from(cards, {
                            duration: 0.95,
                            x: 70,
                            opacity: 0,
                            stagger: 0.12,
                            ease: "power3.out"
                        });
                    }
                });
            }
            window.runMediaCardAnimation = animateMediaCards;

            if (!document.body.classList.contains('new-event-page') && !document.body.classList.contains('new-contact-page') && !document.body.classList.contains('new-career-page')) {
                ScrollTrigger.create({
                    trigger: ".media-article-section",
                    start: "top 85%",
                    once: true,
                    onEnter: animateMediaCards
                });
            }

            // Career page animations
            gsap.from(".career-section-main .career-section-inner", {
                scrollTrigger: { trigger: ".career-section-main", start: "top 85%", toggleActions: "play none none none" },
                duration: 0.9,
                y: 40,
                opacity: 0,
                ease: "power2.out"
            });
            gsap.from(".career-card", {
                scrollTrigger: { trigger: ".career-cards-section", start: "top 85%", toggleActions: "play none none none" },
                duration: 0.75,
                y: 35,
                opacity: 0,
                stagger: 0.12,
                ease: "power2.out"
            });
            gsap.from(".career-job-card", {
                scrollTrigger: { trigger: ".career-openings-section", start: "top 85%", toggleActions: "play none none none" },
                duration: 0.75,
                y: 35,
                opacity: 0,
                stagger: 0.12,
                ease: "power2.out"
            });

            // Contact page animations
            gsap.from(".contact-details-item", {
                scrollTrigger: { trigger: ".contact-details-section", start: "top 85%", toggleActions: "play none none none" },
                duration: 0.7,
                y: 28,
                opacity: 0,
                stagger: 0.1,
                ease: "power2.out"
            });
            gsap.from(".contact-details-right-container", {
                scrollTrigger: { trigger: ".contact-details-section", start: "top 82%", toggleActions: "play none none none" },
                duration: 0.8,
                x: 24,
                opacity: 0,
                ease: "power2.out",
                delay: 0.1
            });
            gsap.from(".contact-page-map-wrap", {
                scrollTrigger: { trigger: ".contact-page-map-section", start: "top 85%", toggleActions: "play none none none" },
                duration: 0.9,
                y: 30,
                opacity: 0,
                ease: "power2.out"
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
            var track = document.querySelector('.news-media-separator-track');
            var separator = document.querySelector('.news-media-separator');
            var grid = document.querySelector('.media-template-grid');
            var digitalOnlyCol = document.querySelector('.media-template-col--digital-only');
            var featuredBoxes = document.querySelectorAll('.media-template-box--featured');
            var textOnlyBoxes = document.querySelectorAll('.media-template-box:not(.media-template-box--featured)');
            var prCoverageWrap = document.getElementById('media-pr-coverage-wrap');
            var printCoverageWrap = document.getElementById('media-print-coverage-wrap');
            var sortRow = document.querySelector('.news-media-sort-row');
            function updateIndicator() {
                var active = document.querySelector('.news-media-tab--active');
                if (!active || !indicator || !separator) return;
                var textEl = active.querySelector('.news-media-tab-text') || active;
                var sepRect = separator.getBoundingClientRect();
                var textRect = textEl.getBoundingClientRect();

                if (track && tabs.length) {
                    var firstTabText = (tabs[0].querySelector('.news-media-tab-text') || tabs[0]).getBoundingClientRect();
                    var lastTabText = (tabs[tabs.length - 1].querySelector('.news-media-tab-text') || tabs[tabs.length - 1]).getBoundingClientRect();
                    track.style.left = (firstTabText.left - sepRect.left) + 'px';
                    track.style.width = (lastTabText.right - firstTabText.left) + 'px';
                    track.style.right = 'auto';
                }

                var left = textRect.left - sepRect.left;
                indicator.style.left = left + 'px';
                indicator.style.width = textRect.width + 'px';
                indicator.style.transform = 'none';
            }
            function setVisibilityByTab(tabKey) {
                if (tabKey === 'pr') {
                    if (prCoverageWrap) {
                        prCoverageWrap.style.display = 'grid';
                        var prCards = prCoverageWrap.querySelectorAll('.media-template-box');
                        prCards.forEach(function (prCard) { prCard.style.display = ''; });
                    }
                    if (printCoverageWrap) printCoverageWrap.style.display = 'none';
                    if (grid) grid.style.display = 'none';
                    if (sortRow) sortRow.style.display = 'none';
                } else if (tabKey === 'print') {
                    if (prCoverageWrap) prCoverageWrap.style.display = 'none';
                    if (printCoverageWrap) {
                        printCoverageWrap.style.display = 'grid';
                        var printCards = printCoverageWrap.querySelectorAll('.media-template-box');
                        printCards.forEach(function (c) { c.style.display = ''; });
                        if (typeof window.updatePrintCardsByYear === 'function') window.updatePrintCardsByYear();
                    }
                    if (grid) grid.style.display = 'none';
                    if (sortRow) sortRow.style.display = '';
                } else {
                    if (prCoverageWrap) prCoverageWrap.style.display = 'none';
                    if (printCoverageWrap) printCoverageWrap.style.display = 'none';
                    if (grid) grid.style.display = '';
                    if (sortRow) sortRow.style.display = '';
                    if (tabKey === 'digital') {
                        if (grid) grid.classList.add('media-template-grid--digital');
                        if (digitalOnlyCol) digitalOnlyCol.style.display = '';
                        featuredBoxes.forEach(function (el) {
                            if (el.closest('#media-pr-coverage-wrap')) return;
                            if (!el.closest('.media-first-card-slider')) el.style.display = 'none';
                            else el.style.display = '';
                        });
                        textOnlyBoxes.forEach(function (el) { el.style.display = ''; });
                    } else {
                        if (grid) grid.classList.remove('media-template-grid--digital');
                        if (digitalOnlyCol) digitalOnlyCol.style.display = 'none';
                        featuredBoxes.forEach(function (el) {
                            if (el.closest('#media-pr-coverage-wrap')) return;
                            el.style.display = '';
                        });
                        textOnlyBoxes.forEach(function (el) { el.style.display = ''; });
                    }
                }
            }
            tabs.forEach(function (tab) {
                tab.addEventListener('click', function () {
                    var tabKey = tab.getAttribute('data-tab');
                    tabs.forEach(function (t) {
                        t.classList.remove('news-media-tab--active');
                        t.setAttribute('aria-selected', 'false');
                    });
                    tab.classList.add('news-media-tab--active');
                    tab.setAttribute('aria-selected', 'true');
                    updateIndicator();
                    setVisibilityByTab(tabKey);
                    if (typeof window.runMediaCardAnimation === 'function') {
                        setTimeout(function () { window.runMediaCardAnimation(); }, 50);
                    }
                });
            });
            window.addEventListener('resize', updateIndicator);
            updateIndicator();
            var urlTab = (new URLSearchParams(window.location.search)).get('tab');
            var initialTab = (urlTab === 'pr' || urlTab === 'print') ? urlTab : 'digital';
            var targetTab = Array.prototype.find.call(tabs, function (t) { return t.getAttribute('data-tab') === initialTab; });
            if (targetTab) {
                tabs.forEach(function (t) {
                    t.classList.remove('news-media-tab--active');
                    t.setAttribute('aria-selected', 'false');
                });
                targetTab.classList.add('news-media-tab--active');
                targetTab.setAttribute('aria-selected', 'true');
                updateIndicator();
            }
            setVisibilityByTab(initialTab);
        })();
    </script>
    <script>
        // Sort by Year: sync visible label with select; when 2024/2023 selected show year-specific cards
        (function () {
            var select = document.getElementById('sort-by-year-media');
            var label = document.getElementById('sort-by-year-label');
            var showWhen2024 = document.querySelectorAll('.media-show-when-2024');
            var showWhen2023 = document.querySelectorAll('.media-show-when-2023');
            var showWhen2022 = document.querySelectorAll('.media-show-when-2022');
            var showWhen2021 = document.querySelectorAll('.media-show-when-2021');
            var showWhen2020 = document.querySelectorAll('.media-show-when-2020');
            var showWhen2019 = document.querySelectorAll('.media-show-when-2019');
            var hideWhen2024 = document.querySelectorAll('.media-hide-when-2024');
            var hideWhen2023 = document.querySelectorAll('.media-hide-when-2023');
            var hideWhen2022 = document.querySelectorAll('.media-hide-when-2022');
            var hideWhen2021 = document.querySelectorAll('.media-hide-when-2021');
            var hideWhen2020 = document.querySelectorAll('.media-hide-when-2020');
            var hideWhen2019 = document.querySelectorAll('.media-hide-when-2019');
            if (!select || !label) return;
            function updateLabel() {
                var opt = select.options[select.selectedIndex];
                label.textContent = opt ? opt.text : '2025';
            }
            function ensureReadMoreForYearCards() {
                var yearCards = document.querySelectorAll('.media-show-when-2024, .media-show-when-2023, .media-show-when-2022');
                yearCards.forEach(function (card) {
                    var title = card.querySelector('.media-template-title');
                    if (!title) return;
                    if (card.querySelector('.media-template-readmore-pr')) return;
                    var readMore = document.createElement('span');
                    readMore.className = 'media-template-readmore-pr';
                    readMore.textContent = 'Read More';
                    title.insertAdjacentElement('afterend', readMore);
                });
            }
            function updateFirstBoxByYear() {
                var year = select.value;
                var grid = document.querySelector('.media-template-grid');
                if (year === '2024') {
                    showWhen2024.forEach(function (el) { el.style.display = ''; });
                    showWhen2023.forEach(function (el) { el.style.display = 'none'; });
                    showWhen2022.forEach(function (el) { el.style.display = 'none'; });
                    showWhen2021.forEach(function (el) { el.style.display = 'none'; });
                    showWhen2020.forEach(function (el) { el.style.display = 'none'; });
                    showWhen2019.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2024.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2023.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2022.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2021.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2020.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2019.forEach(function (el) { el.style.display = 'none'; });
                    if (grid) { grid.classList.add('media-showing-year-2024'); grid.classList.remove('media-showing-year-2023', 'media-showing-year-2022', 'media-showing-year-2021', 'media-showing-year-2020', 'media-showing-year-2019'); }
                } else if (year === '2023') {
                    showWhen2023.forEach(function (el) { el.style.display = ''; });
                    showWhen2024.forEach(function (el) { el.style.display = 'none'; });
                    showWhen2022.forEach(function (el) { el.style.display = 'none'; });
                    showWhen2021.forEach(function (el) { el.style.display = 'none'; });
                    showWhen2020.forEach(function (el) { el.style.display = 'none'; });
                    showWhen2019.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2024.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2023.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2022.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2021.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2020.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2019.forEach(function (el) { el.style.display = 'none'; });
                    if (grid) { grid.classList.add('media-showing-year-2023'); grid.classList.remove('media-showing-year-2024', 'media-showing-year-2022', 'media-showing-year-2021', 'media-showing-year-2020', 'media-showing-year-2019'); }
                } else if (year === '2022') {
                    showWhen2022.forEach(function (el) { el.style.display = ''; });
                    showWhen2024.forEach(function (el) { el.style.display = 'none'; });
                    showWhen2023.forEach(function (el) { el.style.display = 'none'; });
                    showWhen2021.forEach(function (el) { el.style.display = 'none'; });
                    showWhen2020.forEach(function (el) { el.style.display = 'none'; });
                    showWhen2019.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2024.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2023.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2022.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2021.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2020.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2019.forEach(function (el) { el.style.display = 'none'; });
                    if (grid) { grid.classList.add('media-showing-year-2022'); grid.classList.remove('media-showing-year-2024', 'media-showing-year-2023', 'media-showing-year-2021', 'media-showing-year-2020', 'media-showing-year-2019'); }
                } else if (year === '2021') {
                    showWhen2021.forEach(function (el) { el.style.display = ''; });
                    showWhen2024.forEach(function (el) { el.style.display = 'none'; });
                    showWhen2023.forEach(function (el) { el.style.display = 'none'; });
                    showWhen2022.forEach(function (el) { el.style.display = 'none'; });
                    showWhen2020.forEach(function (el) { el.style.display = 'none'; });
                    showWhen2019.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2024.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2023.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2022.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2021.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2020.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2019.forEach(function (el) { el.style.display = 'none'; });
                    if (grid) { grid.classList.add('media-showing-year-2021'); grid.classList.remove('media-showing-year-2024', 'media-showing-year-2023', 'media-showing-year-2022', 'media-showing-year-2020', 'media-showing-year-2019'); }
                } else if (year === '2020') {
                    showWhen2020.forEach(function (el) { el.style.display = ''; });
                    showWhen2024.forEach(function (el) { el.style.display = 'none'; });
                    showWhen2023.forEach(function (el) { el.style.display = 'none'; });
                    showWhen2022.forEach(function (el) { el.style.display = 'none'; });
                    showWhen2021.forEach(function (el) { el.style.display = 'none'; });
                    showWhen2019.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2024.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2023.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2022.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2021.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2020.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2019.forEach(function (el) { el.style.display = 'none'; });
                    if (grid) { grid.classList.add('media-showing-year-2020'); grid.classList.remove('media-showing-year-2024', 'media-showing-year-2023', 'media-showing-year-2022', 'media-showing-year-2021', 'media-showing-year-2019'); }
                } else if (year === '2019') {
                    showWhen2019.forEach(function (el) { el.style.display = ''; });
                    showWhen2024.forEach(function (el) { el.style.display = 'none'; });
                    showWhen2023.forEach(function (el) { el.style.display = 'none'; });
                    showWhen2022.forEach(function (el) { el.style.display = 'none'; });
                    showWhen2021.forEach(function (el) { el.style.display = 'none'; });
                    showWhen2020.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2024.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2023.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2022.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2021.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2020.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2019.forEach(function (el) { el.style.display = 'none'; });
                    if (grid) { grid.classList.add('media-showing-year-2019'); grid.classList.remove('media-showing-year-2024', 'media-showing-year-2023', 'media-showing-year-2022', 'media-showing-year-2021', 'media-showing-year-2020'); }
                } else {
                    showWhen2024.forEach(function (el) { el.style.display = 'none'; });
                    showWhen2023.forEach(function (el) { el.style.display = 'none'; });
                    showWhen2022.forEach(function (el) { el.style.display = 'none'; });
                    showWhen2021.forEach(function (el) { el.style.display = 'none'; });
                    showWhen2020.forEach(function (el) { el.style.display = 'none'; });
                    showWhen2019.forEach(function (el) { el.style.display = 'none'; });
                    hideWhen2024.forEach(function (el) { el.style.display = ''; });
                    hideWhen2023.forEach(function (el) { el.style.display = ''; });
                    hideWhen2022.forEach(function (el) { el.style.display = ''; });
                    hideWhen2021.forEach(function (el) { el.style.display = ''; });
                    hideWhen2020.forEach(function (el) { el.style.display = ''; });
                    hideWhen2019.forEach(function (el) { el.style.display = ''; });
                    if (grid) { grid.classList.remove('media-showing-year-2024', 'media-showing-year-2023', 'media-showing-year-2022', 'media-showing-year-2021', 'media-showing-year-2020', 'media-showing-year-2019'); }
                }
            }
            function updatePrintCardsByYear() {
                var printWrap = document.getElementById('media-print-coverage-wrap');
                if (!printWrap) return;
                var selectedYear = select.value;
                var printCards = printWrap.querySelectorAll('.media-print-card');
                printCards.forEach(function (card) {
                    var cardYear = card.getAttribute('data-year') || '2025';
                    card.style.display = cardYear === selectedYear ? '' : 'none';
                });
            }
            window.updatePrintCardsByYear = updatePrintCardsByYear;
            select.addEventListener('change', function () {
                updateLabel();
                ensureReadMoreForYearCards();
                updateFirstBoxByYear();
                updatePrintCardsByYear();
                if (typeof window.runMediaCardAnimation === 'function') {
                    requestAnimationFrame(function () { window.runMediaCardAnimation(); });
                }
            });
            updateLabel();
            ensureReadMoreForYearCards();
            updateFirstBoxByYear();
            updatePrintCardsByYear();
        })();
    </script>
    <script>
        // 2021 gallery lightbox: click card opens popup, left/right navigate images
        (function () {
            var lightbox = document.getElementById('mediaGalleryLightbox');
            var lightboxImg = document.getElementById('mediaGalleryLightboxImg');
            var closeBtn = document.getElementById('mediaGalleryLightboxClose');
            var prevBtn = document.getElementById('mediaGalleryLightboxPrev');
            var nextBtn = document.getElementById('mediaGalleryLightboxNext');
            var backdrop = lightbox ? lightbox.querySelector('.media-gallery-lightbox-backdrop') : null;
            var galleryCards = document.querySelectorAll('.media-gallery-card');
            var images = [];
            var currentIndex = 0;
            function isVisible(el) {
                if (!el) return false;
                var s = window.getComputedStyle(el);
                return s.display !== 'none' && s.visibility !== 'hidden';
            }
            function getVisibleCards() {
                var list = [];
                galleryCards.forEach(function (card) {
                    if (isVisible(card)) list.push(card);
                });
                return list;
            }
            function getImages() {
                var list = [];
                getVisibleCards().forEach(function (card) {
                    var img = card.querySelector('.media-template-image img');
                    if (img && img.src) list.push(img.src);
                });
                return list;
            }
            function open(index) {
                images = getImages();
                if (images.length === 0) return;
                currentIndex = index;
                if (currentIndex < 0) currentIndex = images.length - 1;
                if (currentIndex >= images.length) currentIndex = 0;
                if (lightboxImg) lightboxImg.src = images[currentIndex];
                if (lightbox) {
                    lightbox.removeAttribute('hidden');
                    lightbox.classList.add('media-gallery-lightbox--open');
                    document.body.style.overflow = 'hidden';
                    document.body.classList.add('media-gallery-lightbox-open');
                }
            }
            function close() {
                if (lightbox) {
                    lightbox.setAttribute('hidden', '');
                    lightbox.classList.remove('media-gallery-lightbox--open');
                    document.body.style.overflow = '';
                    document.body.classList.remove('media-gallery-lightbox-open');
                }
            }
            function goPrev() {
                currentIndex = currentIndex - 1;
                if (currentIndex < 0) currentIndex = images.length - 1;
                if (lightboxImg && images[currentIndex]) lightboxImg.src = images[currentIndex];
            }
            function goNext() {
                currentIndex = currentIndex + 1;
                if (currentIndex >= images.length) currentIndex = 0;
                if (lightboxImg && images[currentIndex]) lightboxImg.src = images[currentIndex];
            }
            galleryCards.forEach(function (card) {
                card.addEventListener('click', function () {
                    var visible = getVisibleCards();
                    var idx = visible.indexOf(card);
                    if (idx >= 0) open(idx);
                });
            });
            if (closeBtn) closeBtn.addEventListener('click', close);
            if (backdrop) backdrop.addEventListener('click', close);
            if (prevBtn) prevBtn.addEventListener('click', function (e) { e.stopPropagation(); goPrev(); });
            if (nextBtn) nextBtn.addEventListener('click', function (e) { e.stopPropagation(); goNext(); });
            document.addEventListener('keydown', function (e) {
                if (!lightbox || !lightbox.classList.contains('media-gallery-lightbox--open')) return;
                if (e.key === 'Escape') close();
                if (e.key === 'ArrowLeft') goPrev();
                if (e.key === 'ArrowRight') goNext();
            });
        })();
    </script>
    <script>
        // Print Media: click card shows image in lightbox; left/right arrows and cross to close
        (function () {
            var wrap = document.getElementById('media-print-coverage-wrap');
            var lightbox = document.getElementById('mediaPrintImageLightbox');
            var lightboxImg = document.getElementById('mediaPrintImageLightboxImg');
            var closeBtn = document.getElementById('mediaPrintImageLightboxClose');
            var prevBtn = document.getElementById('mediaPrintImageLightboxPrev');
            var nextBtn = document.getElementById('mediaPrintImageLightboxNext');
            var backdrop = lightbox ? lightbox.querySelector('.media-print-image-lightbox-backdrop') : null;
            if (!wrap || !lightbox || !lightboxImg) return;
            var images = [];
            var currentIndex = 0;
            function getImages() {
                var list = [];
                wrap.querySelectorAll('.media-print-card .media-template-image img').forEach(function (img) {
                    var lightboxSrc = img.getAttribute('data-lightbox-src') || img.src;
                    if (lightboxSrc) list.push({ src: lightboxSrc, alt: img.alt || '' });
                });
                return list;
            }
            function open(index) {
                images = getImages();
                if (images.length === 0) return;
                currentIndex = index;
                if (currentIndex < 0) currentIndex = images.length - 1;
                if (currentIndex >= images.length) currentIndex = 0;
                var item = images[currentIndex];
                lightboxImg.src = item.src;
                lightboxImg.alt = item.alt;
                lightbox.removeAttribute('hidden');
                lightbox.classList.add('media-print-image-lightbox--open');
                document.body.style.overflow = 'hidden';
                document.body.classList.add('media-print-image-lightbox-open');
            }
            function close() {
                lightbox.setAttribute('hidden', '');
                lightbox.classList.remove('media-print-image-lightbox--open');
                document.body.style.overflow = '';
                document.body.classList.remove('media-print-image-lightbox-open');
            }
            function goPrev() {
                currentIndex = currentIndex - 1;
                if (currentIndex < 0) currentIndex = images.length - 1;
                if (images[currentIndex]) {
                    lightboxImg.src = images[currentIndex].src;
                    lightboxImg.alt = images[currentIndex].alt;
                }
            }
            function goNext() {
                currentIndex = currentIndex + 1;
                if (currentIndex >= images.length) currentIndex = 0;
                if (images[currentIndex]) {
                    lightboxImg.src = images[currentIndex].src;
                    lightboxImg.alt = images[currentIndex].alt;
                }
            }
            wrap.addEventListener('click', function (e) {
                var card = e.target.closest('.media-print-card');
                if (!card) return;
                e.preventDefault();
                images = getImages();
                var cards = wrap.querySelectorAll('.media-print-card');
                var idx = Array.prototype.indexOf.call(cards, card);
                if (idx >= 0) open(idx);
            });
            if (closeBtn) closeBtn.addEventListener('click', close);
            if (backdrop) backdrop.addEventListener('click', close);
            if (prevBtn) prevBtn.addEventListener('click', function (e) { e.stopPropagation(); goPrev(); });
            if (nextBtn) nextBtn.addEventListener('click', function (e) { e.stopPropagation(); goNext(); });
            document.addEventListener('keydown', function (e) {
                if (!lightbox.classList.contains('media-print-image-lightbox--open')) return;
                if (e.key === 'Escape') close();
                if (e.key === 'ArrowLeft') goPrev();
                if (e.key === 'ArrowRight') goNext();
            });
        })();
    </script>
    <script>
        // Digital media sliders: hide arrows and use bottom dots for all years
        (function () {
            function initSliderWithDots(slider) {
                if (!slider) return;
                var track = slider.querySelector('.media-first-card-slider-track');
                if (!track) return;

                var prevBtn = slider.querySelector('.media-first-card-slider-prev');
                var nextBtn = slider.querySelector('.media-first-card-slider-next');
                if (prevBtn) prevBtn.remove();
                if (nextBtn) nextBtn.remove();

                var existingDots = slider.querySelector('.media-first-card-slider-dots');
                if (existingDots) existingDots.remove();

                var slides = slider.querySelectorAll('.media-first-card-slide');
                var total = slides.length;
                if (total === 0) return;
                for (var si = 0; si < slides.length; si++) {
                    if (!slides[si].querySelector('.media-first-card-readmore')) {
                        var readMore = document.createElement('span');
                        readMore.className = 'media-first-card-readmore';
                        readMore.textContent = 'Read More';
                        slides[si].appendChild(readMore);
                    }
                }

                track.style.width = (total * 100) + '%';
                for (var s = 0; s < total; s++) {
                    slides[s].style.flex = '0 0 ' + (100 / total) + '%';
                    slides[s].style.maxWidth = (100 / total) + '%';
                }

                var dotsWrap = document.createElement('div');
                dotsWrap.className = 'media-first-card-slider-dots';
                dotsWrap.style.display = 'flex';
                dotsWrap.style.justifyContent = 'center';
                dotsWrap.style.gap = '8px';
                dotsWrap.style.marginTop = '12px';

                var dots = [];
                var current = 0;
                function goTo(index) {
                    if (index < 0) index = total - 1;
                    if (index >= total) index = 0;
                    current = index;
                    track.style.transform = 'translateX(-' + (current * (100 / total)) + '%)';
                    for (var i = 0; i < dots.length; i++) {
                        dots[i].style.opacity = i === current ? '1' : '0.35';
                    }
                }

                for (var i = 0; i < total; i++) {
                    (function (index) {
                        var dot = document.createElement('button');
                        dot.type = 'button';
                        dot.setAttribute('aria-label', 'Go to slide ' + (index + 1));
                        dot.style.width = '8px';
                        dot.style.height = '8px';
                        dot.style.borderRadius = '50%';
                        dot.style.border = '0';
                        dot.style.padding = '0';
                        dot.style.background = '#f58220';
                        dot.style.opacity = '0.35';
                        dot.style.cursor = 'pointer';
                        dot.addEventListener('click', function (e) {
                            e.preventDefault();
                            e.stopPropagation();
                            goTo(index);
                        });
                        dots.push(dot);
                        dotsWrap.appendChild(dot);
                    })(i);
                }

                slider.appendChild(dotsWrap);
                goTo(0);
            }

            var sliders = document.querySelectorAll('.media-two-page .media-first-card-slider');
            for (var i = 0; i < sliders.length; i++) {
                initSliderWithDots(sliders[i]);
            }
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
    <script>
        (function () {
            var searchInput = document.querySelector('.contact-details-header-search');
            if (!searchInput || !document.body.classList.contains('new-career-page')) return;

            var jobCards = document.querySelectorAll('.career-jobs-grid .career-job-card');
            if (!jobCards.length) return;

            function filterJobsByTitle() {
                var query = searchInput.value.trim().toLowerCase();
                jobCards.forEach(function (card) {
                    var titleEl = card.querySelector('.career-job-card-title');
                    var deptEl = card.querySelector('.career-job-card-dept');
                    var title = titleEl ? titleEl.textContent.toLowerCase() : '';
                    var dept = deptEl ? deptEl.textContent.toLowerCase() : '';
                    var searchableText = (title + ' ' + dept).trim();
                    card.style.display = searchableText.indexOf(query) !== -1 ? '' : 'none';
                });
            }

            searchInput.addEventListener('input', filterJobsByTitle);
        })();
    </script>
</body>
</html>
