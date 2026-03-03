<?php
// Project variant: gold-avenue (Residential), saya-zion (Residential - Gold layout), or default (Commercial - Saya South X)
$project_slug = isset($_GET['project']) ? trim($_GET['project']) : '';
$is_gold_layout = in_array($project_slug, ['gold-avenue', 'saya-zion', 'saya-zenith', 'saya-desire-residency']);
if ($project_slug === 'gold-avenue') {
    $project_hero_category = 'Residential';
    $project_hero_name = 'SAYA GOLD AVENUE';
    $project_overview_location = 'Indirapuram, Ghaziabad';
    $project_hero_breadcrumb_cat = 'RESIDENTIAL';
    $project_hero_breadcrumb_current = 'SAYA GOLD AVENUE';
    $project_page_title = 'Saya Gold Avenue | Residential | Saya Homes';
    $project_hero_desc = 'Discover a perfect blend of <b> modern luxury, comfort, and affordability </b> at Saya Gold Avenue. With carefully designed homes, premium amenities, and a semi-olympic sized swimming pool, this residential paradise offers effortless connectivity and ultimate convenience. Situated next to  <b> North India Mall and NH-9 </b>, Saya Gold Avenue brings to you a truly luxurious living experience.';
    $project_hero_btn_text = 'Book a Site Visit';
    $project_section2_img = 'section-2gold-avenue.png';
    $project_section2_alt = 'Saya Gold Avenue - Ready to Move In';
    $project_section2_heading = 'Saya Gold Avenue';
    $project_section2_tagline = 'READY TO MOVE IN';
    $project_gold_display_name = 'Elevating Every Moment, With Luxury Living';
    $project_gold_logo = 'goldavenuelogo.jpg';
    $project_gold_about_desc = 'Each aspect of Saya Gold Avenue, from the magnificent interiors to the semi-Olympic swimming pool, has been carefully designed to meet the refined sensibilities of our residents. Conveniently situated right next to North India Mall (formerly Shipra Mall) and accessible to NH-9, Gold Avenue provides seamless connectivity for a lifestyle that exudes effortless comfort. With an array of luxurious amenities and facilities, every residence is set to provide a lifestyle experience that inspires and delights you throughout your life.';
} elseif ($project_slug === 'saya-zion') {
    $project_hero_category = 'Residential';
    $project_hero_name = 'SAYA ZION';
    $project_overview_location = 'Sector- 4, Greater Noida (W)';
    $project_hero_breadcrumb_cat = 'RESIDENTIAL';
    $project_hero_breadcrumb_current = 'SAYA ZION';
    $project_page_title = 'Saya Zion | Residential | Saya Homes';
    $project_hero_desc = 'Experience <b> Luxury Living at Saya Zion </b> in <b> Greater Noida West</b>
Saya Zion combines luxurious living with a vast green environment, providing a life of tranquility and ease. Saya Zion, surrounded by <b> lush greenery </b>,combines <b>nature with luxurious living</b>. Unwind in lush green gardens, let your kids play in vast open spaces, and live a healthy and green life every day at Saya Zion.';
    $project_hero_btn_text = 'Book a Site Visit';
    $project_section2_img = 'zionbanner.png';
    $project_section2_alt = 'Saya Zion - Ready to Move In';
    $project_section2_heading = 'Saya Zion';
    $project_section2_tagline = 'Project Delivered';
    $project_gold_display_name = 'Saya Zion';
    $project_gold_logo = 'goldavenuelogo.jpg';
    $project_gold_about_heading = 'Elevating Every Moment, With Luxury Living';
    $project_gold_about_desc = 'Saya Zion reflects the majesty of its vast green environment in Greater Noida West, where nature and eternal luxury come together. Saya Zion provides a serene atmosphere where all the worries of life melt away, and families can live in a world of green spaces designed for relaxation and happy living.' . "\n\n". 'Experience a healthier and greener lifestyle at Saya Zion, where the beauty of home is elevated by the presence of nature and the luxury of modern living. Saya Zion is a creation of Saya Group.';
} elseif ($project_slug === 'saya-zenith') {
    $project_hero_category = 'Residential';
    $project_hero_name = 'SAYA ZENITH';
    $project_overview_location = 'Indirapuram, Ghaziabad';
    $project_hero_breadcrumb_cat = 'RESIDENTIAL';
    $project_hero_breadcrumb_current = 'SAYA ZENITH';
    $project_page_title = 'Saya Zenith | Residential | Saya Homes';
    $project_hero_desc = 'Discover spacious sized <b> 2, 3, & 4 BHK  apartments </b> at Saya Zenith, where each home has been carefully crafted for the discerning buyer. Illuminated with natural light and designed with exceptional craftsmanship, these residemces offer a <b>luxurious lifestyle experience</b> in the heart of <b>Indirapuram</b>.';

    $project_hero_btn_text = 'Book a Site Visit';
    $project_section2_img = 'sayazenithbanner.png';
    $project_section2_alt = 'Saya Zenith - Ready to Move In';
    $project_section2_heading = 'Saya Zenith';
    $project_section2_tagline = 'Project Delivered';
    $project_gold_display_name = 'Saya Zenith';
    $project_gold_logo = 'goldavenuelogo.jpg';
    $project_gold_about_heading = 'Elevating Every Moment, With Luxury Living';
    $project_gold_about_desc = 'Saya Zenith captures the essence of beautifully designed homes in the midst of Indirapuram, where the best of modern luxury and fine craftsmanship meet. Spacious 2, 3 & 4 BHK apartments replete with natural light, Saya Zenith provides a tranquil setting where families can relish comfort, seclusion, and a lifestyle that celebrates happy living.' . "\n\n" . 'Experience the best of living at Saya Zenith, where world-class amenities, natural surroundings, and modern design add to the beauty of home and convenience. Saya Zenith is an offering from Saya Group.';
} elseif ($project_slug === 'saya-desire-residency') {
    $project_hero_category = 'Residential';
    $project_hero_name = 'SAYA DESIRE RESIDENCY';
    $project_overview_location = 'Indirapuram, Ghaziabad';
    $project_hero_breadcrumb_cat = 'RESIDENTIAL';
    $project_hero_breadcrumb_current = 'SAYA DESIRE RESIDENCY';
    $project_page_title = 'Saya Desire Residency | Residential | Saya Homes';
    $project_hero_desc = 'Live Your Dream Life at Saya Desire Residency
, with luxurious  <b>2, 3, and 4 BHK residential apartment </b> with a perfect blend of luxury and comfort. Enjoy stunning views of <b>Indirapuram </b> from your <b> 3-side open plot</b>, unwind in <b> lush landscaped greens</b>, and revitalize yourself in the <b>yoga centers</b>. A vibrant community is waiting for you at Saya Desire Residency.';
    $project_hero_btn_text = 'Book a Site Visit';
    $project_section2_img = 'desire-residency.png';
    $project_section2_alt = 'Saya Desire Residency - Ready to Move In';
    $project_section2_heading = 'Saya Desire Residency';
    $project_section2_tagline = 'Project Delivered';
    $project_gold_display_name = 'Saya Desire Residency';
    $project_gold_logo = 'goldavenuelogo.jpg';
    $project_gold_about_heading = 'Elevating Every Moment, With Luxury Living';
    $project_gold_about_desc = 'Saya Desire Residency captures the essence of beautifully designed homes in the midst of Indirapuram, where the best of modern luxury and fine craftsmanship meet. Spacious 2, 3 & 4 BHK apartments replete with natural light, Saya Desire Residency provides a tranquil setting where families can relish comfort, seclusion, and a lifestyle that celebrates happy living.' . "\n\n" . 'Indulge in luxury and wellness at Saya Desire Residency with landscaped gardens, yoga areas, and contemporary amenities, designed by Saya Group for families.';
} elseif ($project_slug === 'saya-biztop') {
    $project_hero_category = 'Commercial';
    $project_hero_name = 'SAYA BIZTOP';
    $project_overview_location = 'Sector Ecotech-1, Greater Noida (W)';
    $project_hero_breadcrumb_cat = 'COMMERCIAL';
    $project_hero_breadcrumb_current = 'SAYA BIZTOP';
    $project_page_title = 'Saya Biztop | Commercial | Saya Homes';
    $project_hero_desc = 'Live your dream work-life at Saya Biztop – <b> premium fully furnished business suites </b> designed for excellence. With stunning views, dedicated floors, luxurious amenities, and a seamless blend of elegance and innovation, Biztop offers the perfect environment for corporate excellence and personal relaxation.';
    $project_hero_btn_text = 'Read More';
    $project_section2_img = 'biztopsection-2.png';
    $project_section2_alt = 'Saya Biztop - Commercial Development';
    $project_section2_heading = 'Saya Biztop';
    $project_section2_tagline = 'Nearing Possession';
    $project_display_name = 'Saya Biztop';
    $project_gallery_subtitle = 'Saya Biztop Carnival';
} elseif ($project_slug === 'saya-piazza') {
    $project_hero_category = 'Commercial';
    $project_hero_name = 'SAYA PIAZZA';
    $project_overview_location = 'Sector 131';
    $project_hero_breadcrumb_cat = 'COMMERCIAL';
    $project_hero_breadcrumb_current = 'SAYA PIAZZA';
    $project_page_title = 'Saya Piazza | Commercial | Saya Homes';
    $project_hero_desc = 'Experience Saya Piazza, <b>ultimate shopping destination spot </b> in Noida\'s most desirable location. With ready-to-fit-out commercial units, Saya Piazza is crafted to take your business to the next level, with thriving communities and best-in-class amenities all around.';
    $project_hero_btn_text = 'Read More';
    $project_section2_img = 'piazzasec-2.png';
    $project_section2_alt = 'Saya Piazza - Commercial Development';
    $project_section2_heading = 'Saya Piazza';
    $project_section2_tagline = 'OC RECEIVED';
    $project_display_name = 'Saya Piazza';
    $project_gallery_subtitle = 'Saya Piazza Carnival';
} else {
    $project_hero_category = 'Commercial';
    $project_hero_name = 'SAYA SOUTH X';
    $project_overview_location = 'Sector Ecotech-1, Greater Noida (W)';
    $project_hero_breadcrumb_cat = 'COMMERCIAL';
    $project_hero_breadcrumb_current = 'SAYA-SOUTHX';
    $project_page_title = 'Saya South X | Commercial | Saya Homes';
    $project_hero_desc = 'Experience your shopping to the next level at Saya South X – a <b> luxury shopping destination </b> that provides a unique blend of high-end brands, lush landscaping, and contemporary facilities. Spanning over <b> 12,000+ sq.m </b> of retail space with an estimated footfall of <b> 200K+ </b>, Saya South X is set to deliver the ultimate shopping, leisure, and convenience experience for you.';
    $project_hero_btn_text = 'Read More';
    $project_section2_img = 'ppsec-2pg.jpg';
    $project_section2_alt = 'Saya South X - Commercial Development';
    $project_section2_heading = 'Saya South X';
    $project_section2_tagline = 'Nearing Possession';
    $project_display_name = 'Saya South X';
    $project_gallery_subtitle = 'Saya South X Carnival';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($project_page_title) ?></title>
    <?php include_once('new-css.php') ?>
    <link rel="stylesheet" href="css/new_projectpage.css">
    <!-- GSAP - required for Our Projects dropdown (same as home) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body class="new-project-page<?= $is_gold_layout ? ' new-project-page--gold' : '' ?>">
    <?php include_once('new_header.php') ?>
    <main>
        <!-- Project Hero Section -->
         <!--section 1-->
        <section class="project-hero" id="overview">
            <div class="project-hero-container">
                <nav class="project-hero-breadcrumb" aria-label="Breadcrumb">
                    <a href="<?= $base_url ?>/new_home.php">HOME</a>
                    <span class="project-hero-breadcrumb-sep">/</span>
                    <a href="https://sayahomes.com/projects">PROJECTS</a>
                    <span class="project-hero-breadcrumb-sep">/</span>
                    <?php $breadcrumb_category_label = strtoupper(trim((string)$project_hero_breadcrumb_cat)); ?>
                    <?php if ($breadcrumb_category_label === 'RESIDENTIAL') { ?>
                    <a href="https://sayahomes.com/residential"><?= $project_hero_breadcrumb_cat ?></a>
                    <?php } elseif ($breadcrumb_category_label === 'COMMERCIAL') { ?>
                    <a href="https://sayahomes.com/commercial"><?= $project_hero_breadcrumb_cat ?></a>
                    <?php } else { ?>
                    <span><?= $project_hero_breadcrumb_cat ?></span>
                    <?php } ?>
                    <span class="project-hero-breadcrumb-sep">/</span>
                    <span class="project-hero-breadcrumb-current"><?= $project_hero_breadcrumb_current ?></span>
                </nav>
                <div class="project-hero-grid">
                    <div class="project-hero-left">
                        <h1 class="project-hero-title"><?= $project_hero_name ?></h1>
                        <p class="project-hero-category"><?= $project_hero_category ?></p>
                    </div>
                    <div class="project-hero-right">
                        <p class="project-hero-desc"><?= $project_hero_desc ?></p>
                        <a href="<?= $base_url ?>/new_media-page.php?page=contact" class="project-hero-readmore">
                            <span class="project-hero-readmore-text">Book a Site Visit</span>
                            <div>
                                <img src="<?= $base_url ?>/images/new_theme/icons/button_hover_icon.svg" alt="Arrow Right">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="project-hero-bottom-bar"></div>
        </section>

         <!-- section 2 - image with glass-effect text overlay -->
         <section class="project-section-2">
            <div class="project-section-2-wrap">
                <img src="<?= $base_url ?>/images/new_theme/<?= $project_section2_img ?>" alt="<?= htmlspecialchars($project_section2_alt) ?>" class="project-section-2-img" />
                <div class="project-section-2-glass">
                    <h2 class="project-section-2-glass-title"><?= htmlspecialchars($project_section2_heading ?? $project_hero_name ?? '') ?></h2>
                    <p class="project-section-2-glass-tagline"><?= htmlspecialchars($project_section2_tagline ?? '') ?></p>
                </div>
            </div>
         </section>

         <!--section-3 - sticky nav (scroll par upar stick) -->
         <div class="project-detail-nav-wrapper" id="projectDetailNavWrapper">
         <section class="project-detail-nav" id="projectDetailNav">
            <div class="project-detail-nav-container">
                <nav class="project-detail-nav-left" aria-label="Project details">
                    <a href="#overview">Overview</a>
                     <a href="#highlight">highlight</a>
                    <a href="#tour">Tour</a>
                    <a href="#amenities">Amenities</a>
                    <a href="#map">Map Location</a>
                    <a href="#brochure">Download Brochure</a>
                    <!-- <a href="#masterlayout"><?= $is_gold_layout ? 'Flats Layout' : 'Master Layout' ?></a> -->
                    <!-- <a href="#floor-layout"><?= $is_gold_layout ? 'Project Layout' : 'Floor Layout' ?></a> -->
                </nav>
                <div class="project-detail-nav-right">
                    <a href="<?= $base_url ?>/new_media-page.php?page=contact">Contact With Us</a>
                </div>
            </div>
         </section>
         </div>

         <?php if ($is_gold_layout) { ?>
         <!-- Gold layout: breadcrumb left, logo + location right (image jaisa, sticky nav ke niche) -->
         <section class="project-gold-header-bar">
            <div class="project-gold-header-bar-container">
                <nav class="project-gold-header-bar-breadcrumb" aria-label="Breadcrumb">
                    <a href="<?= $base_url ?>/new_home.php">HOME</a>
                    <span class="project-gold-header-bar-sep">/</span>
                    <a href="https://sayahomes.com/projects">PROJECTS</a>
                    <span class="project-gold-header-bar-sep">/</span>
                    <a href="https://sayahomes.com/residential">RESIDENTIAL</a>
                    <span class="project-gold-header-bar-sep">/</span>
                    <span class="project-gold-header-bar-current"><?= htmlspecialchars($project_hero_name) ?></span>
                </nav>
                <div class="project-gold-header-bar-right">
                    <div class="project-gold-header-bar-logo-wrap">
                        <?php
                        $header_bar_logo_src = ($project_slug === 'saya-zion') ? $base_url . '/images/svg/projectzionlogo.svg' : (($project_slug === 'saya-zenith') ? $base_url . '/images/svg/zenithprojectlogo.svg' : (($project_slug === 'saya-desire-residency') ? $base_url . '/images/svg/resireprojectlogo.svg' : $base_url . '/images/new_theme/' . $project_gold_logo));
                        if ($project_slug === 'saya-desire-residency') {
                            $desire_logo_path = __DIR__ . '/images/svg/resireprojectlogo.svg';
                            $desire_logo_inline = is_file($desire_logo_path) ? file_get_contents($desire_logo_path) : '';
                            $desire_logo_inline = preg_replace('/<\?xml[^?]*\?>\s*/', '', $desire_logo_inline);
                            $desire_logo_inline = preg_replace('/<svg/', '<svg width="180" height="60" preserveAspectRatio="xMidYMid meet" style="display:block;max-height:60px" ', $desire_logo_inline, 1);
                        }
                        ?>
                        <?php if ($project_slug === 'saya-desire-residency' && !empty($desire_logo_inline)) { ?>
                        <span class="project-gold-header-bar-logo project-gold-header-bar-logo--desire" style="display:inline-block;width:180px;height:60px;vertical-align:middle"><?= $desire_logo_inline ?></span>
                        <?php } elseif ($project_slug === 'saya-desire-residency') { ?>
                        <img src="<?= $base_url ?>/images/svg/resireprojectlogo.svg" alt="<?= htmlspecialchars($project_gold_display_name) ?>" class="project-gold-header-bar-logo" width="180" height="60" style="object-fit:contain">
                        <?php } else { ?>
                        <img src="<?= $header_bar_logo_src ?>" alt="<?= htmlspecialchars($project_gold_display_name) ?>" class="project-gold-header-bar-logo" width="160" height="55" loading="eager">
                        <?php } ?>
                    </div>
                </div>
            </div>
         </section>

         <!-- Gold layout: About section (dark blue, text left + image right) -->
         <section class="project-gold-about" id="about">
            <div class="project-gold-about-container">
                <div class="project-gold-about-left">
                    <p class="project-gold-about-label">About</p>
                    <h2 class="project-gold-about-title"><?= htmlspecialchars($project_gold_about_heading ?? $project_gold_display_name) ?></h2>
                    <p class="project-gold-about-desc"><?= nl2br(htmlspecialchars($project_gold_about_desc ?? '')) ?></p><?php if (isset($project_gold_about_desc_2) && $project_gold_about_desc_2 !== ''): ?><p class="project-gold-about-desc-2" style="margin-top: 10px;"><?= htmlspecialchars($project_gold_about_desc_2) ?></p><?php endif; ?>
                    <a href="<?= $base_url ?>/new_media-page.php?page=contact" class="project-gold-about-btn">
                        <span class="project-gold-about-btn-text">Book a Site Visit</span>
                        <div class="project-gold-about-btn-arrow">
                            <img src="<?= $base_url ?>/images/new_theme/icons/button_hover_icon.svg" alt="">
                        </div>
                    </a>
                </div>
                <div class="project-gold-about-right">
                    <img src="<?= $base_url ?>/images/new_theme/<?= ($project_slug === 'gold-avenue') ? 'aboutgold.png' : (($project_slug === 'saya-zion') ? 'zionabout.png' : (($project_slug === 'saya-zenith') ? 'zenithabout.png' : (($project_slug === 'saya-desire-residency') ? 'saya-desire-residencyabout.png' : 'residentialabout.jpg'))) ?>" alt="<?= htmlspecialchars($project_gold_display_name) ?> - Envision Your Home" class="project-gold-about-img">
                </div>
            </div>
         </section>
         <?php } ?>

         <?php if (isset($project_biztop_about_heading) && isset($project_biztop_about_desc)) { ?>
         <!-- Saya Biztop: About section (same style as gold about) -->
         <section class="project-gold-about">
            <div class="project-gold-about-container">
                <div class="project-gold-about-left">
                    <p class="project-gold-about-label">About</p>
                    <h2 class="project-gold-about-title"><?= htmlspecialchars($project_biztop_about_heading) ?></h2>
                    <p class="project-gold-about-desc"><?= nl2br(htmlspecialchars($project_biztop_about_desc)) ?></p>
                    <a href="#" class="project-gold-about-btn">
                        <span class="project-gold-about-btn-text">Read More</span>
                        <div class="project-gold-about-btn-arrow">
                            <img src="<?= $base_url ?>/images/new_theme/icons/button_hover_icon.svg" alt="">
                        </div>
                    </a>
                </div>
                <div class="project-gold-about-right">
                    <img src="<?= $base_url ?>/images/new_theme/<?= $project_section2_img ?>" alt="<?= htmlspecialchars($project_section2_alt) ?>" class="project-gold-about-img">
                </div>
            </div>
         </section>
         <?php } ?>

         <!--section 4 - Overview / project info -->
         <section class="project-overview<?= $is_gold_layout ? ' project-overview--gold' : '' ?>" id="highlight">
            
            <div class="project-overview-container">
                <div class="project-overview-left project-overview-left--gold">
                    <?php if ($is_gold_layout) {
                        if ($project_slug === 'gold-avenue') { ?>
                    <p class="project-overview-gold-text">The Exceptionally High Towers Are A True Representation Of Upscale And Trendy Architecture</p>
                    <p class="project-overview-gold-club"><span class="project-overview-gold-club-sq">7432 Sq.M</span> Club Area</p>
                    <div class="project-overview-gold-cards">
                        <div class="project-overview-gold-card">
                            <span class="project-overview-gold-card-num">1400+</span>
                            <span class="project-overview-gold-card-label">Families</span>
                        </div>
                        <div class="project-overview-gold-card">
                            <span class="project-overview-gold-card-num">2, 3, 4 BHK</span>
                            <span class="project-overview-gold-card-label">Residential</span>
                        </div>
                        <div class="project-overview-gold-card">
                            <span class="project-overview-gold-card-num">Registry &amp; Possession</span>
                            <span class="project-overview-gold-card-label">Immediate</span>
                        </div>
                    </div>
                    <?php } elseif ($project_slug === 'saya-zion') { ?>
                    <p class="project-overview-gold-text">Saya Zion, tucked away in verdant surroundings, offers a harmonious fusion of vast green areas, exotic gardens, and vivid seasonal hues for an opulent, healthful way of life.</p>
                    <div class="project-overview-gold-cards">
                        <div class="project-overview-gold-card">
                            <span class="project-overview-gold-card-num">G+20 &amp; G+22</span>
                            <span class="project-overview-gold-card-label">Dedicated Floors</span>
                        </div>
                        <div class="project-overview-gold-card">
                            <span class="project-overview-gold-card-num">5.17 Acres</span>
                            <span class="project-overview-gold-card-label">Project Area</span>
                        </div>
                        <div class="project-overview-gold-card">
                            <span class="project-overview-gold-card-num">2, 3, 4 BHK</span>
                            <span class="project-overview-gold-card-label">Residential</span>
                        </div>
                    </div>
                    <?php } elseif ($project_slug === 'saya-zenith') { ?>
                    <p class="project-overview-gold-text">Enjoy the Luxury of Homes that Blend Superior Craftsmanship, Elegant Design, and Natural Light.</p>
                    <div class="project-overview-gold-cards">
                        <div class="project-overview-gold-card">
                            <span class="project-overview-gold-card-num">2, 3, 4 BHK</span>
                            <span class="project-overview-gold-card-label">Residential</span>
                        </div>
                    </div>
                    <?php } elseif ($project_slug === 'saya-desire-residency') { ?>
                    <p class="project-overview-gold-text">Enjoy Unmatched Luxury Living in Indirapuram's Most Coveted Address, Where Comfort Meets Elegance in Every Corner.</p>
                    <div class="project-overview-gold-cards">
                        <div class="project-overview-gold-card">
                            <span class="project-overview-gold-card-num">13</span>
                            <span class="project-overview-gold-card-label">Dedicated Floors</span>
                        </div>
                        <div class="project-overview-gold-card">
                            <span class="project-overview-gold-card-num">2, 3, 4 BHK</span>
                            <span class="project-overview-gold-card-label">Residential</span>
                        </div>
                    </div>
                    <?php }
                    } else {
                        if ($project_slug === 'saya-biztop') { ?>
                    <div class="project-overview-brand">
                        <img src="<?= $base_url ?>/images/svg/projectbiztoplogo.svg" alt="<?= htmlspecialchars($project_display_name) ?>" class="project-overview-logo">
                    </div>
                    <p class="project-overview-gold-text">Saya Biztop at Saya SouthX is the ultimate location for elite professionals. Offering premium fully furnished suites that symbolize success.</p>
                    <div class="project-overview-gold-cards">
                        <div class="project-overview-gold-card">
                            <span class="project-overview-gold-card-num">7th - 25th</span>
                            <span class="project-overview-gold-card-label">Dedicated Floors</span>
                        </div>
                        <div class="project-overview-gold-card">
                            <span class="project-overview-gold-card-num">500K+</span>
                            <span class="project-overview-gold-card-label">Families</span>
                        </div>
                        <div class="project-overview-gold-card">
                            <span class="project-overview-gold-card-num">3-Side Open</span>
                            <span class="project-overview-gold-card-label">Building Frontage</span>
                        </div>
                    </div>
                    <?php } elseif ($project_slug === 'saya-piazza') { ?>
                    <div class="project-overview-brand">
                        <img src="<?= $base_url ?>/images/svg/projectpiazzalogo.svg" alt="<?= htmlspecialchars($project_display_name) ?>" class="project-overview-logo">
                    </div>
                    <p class="project-overview-gold-text">Saya Piazza is ready to take your shopping experience to the next level, featuring diverse luxury brands and landscaped surroundings.</p>
                    <div class="project-overview-gold-cards">
                        <div class="project-overview-gold-card">
                            <span class="project-overview-gold-card-num">1162+ Acres</span>
                            <span class="project-overview-gold-card-label">Integrated Township</span>
                        </div>
                        <div class="project-overview-gold-card">
                            <span class="project-overview-gold-card-num">50,000+</span>
                            <span class="project-overview-gold-card-label">Families</span>
                        </div>
                        <div class="project-overview-gold-card">
                            <span class="project-overview-gold-card-num">100K+</span>
                            <span class="project-overview-gold-card-label">People Working in MNCs</span>
                        </div>
                        <div class="project-overview-gold-card">
                            <span class="project-overview-gold-card-num">200 Acre</span>
                            <span class="project-overview-gold-card-label">18+9 Hole Golf Course</span>
                        </div>
                    </div>
                    <?php } else { ?>
                    <div class="project-overview-brand">
                        <img src="<?= $base_url ?>/images/svg/logo-south-x.svg" alt="<?= htmlspecialchars($project_display_name) ?>" class="project-overview-logo">
                    </div>
                    <p class="project-overview-gold-text">Saya South X is here to take your retail experience to the next level with a diverse selection of luxury brands amidst tasteful landscaping.</p>
                    <div class="project-overview-gold-cards">
                        <div class="project-overview-gold-card">
                            <span class="project-overview-gold-card-num">12,000+ sq.m</span>
                            <span class="project-overview-gold-card-label">Growth Segment</span>
                        </div>
                        <div class="project-overview-gold-card">
                            <span class="project-overview-gold-card-num">200K+</span>
                            <span class="project-overview-gold-card-label">Estimated Footfall</span>
                        </div>
                        <div class="project-overview-gold-card">
                            <span class="project-overview-gold-card-num">500K+</span>
                            <span class="project-overview-gold-card-label">Families</span>
                        </div>
                    </div>
                    <?php }
                    } ?>
                </div>
                <div class="project-overview-right">
                    <div class="project-overview-card">
                        <div class="project-overview-card-row">
                            <span class="project-overview-card-label">Property Type</span>
                            <span class="project-overview-card-value"><?= $is_gold_layout ? 'Residential' : 'Commercial' ?></span>
                        </div>
                        <div class="project-overview-card-row">
                            <span class="project-overview-card-label">Location</span>
                            <span class="project-overview-card-value"><?= $project_overview_location ?></span>
                        </div>
                        <div class="project-overview-card-row">
                            <span class="project-overview-card-label">Status</span>
                            <span class="project-overview-card-value"><?= $is_gold_layout ? 'Delivered Project' : 'Delivered' ?></span>
                        </div>
                        <?php if ($is_gold_layout) {
                            $gold_rera_phase1 = ($project_slug === 'gold-avenue') ? 'UPRERAPRJ6548' : 'Not Available';
                            $gold_rera_phase2 = ($project_slug === 'gold-avenue') ? 'UPRERAPRJ6678 | www.up-rera.in' : (($project_slug === 'saya-zion') ? 'UPRERAPRJ869 | www.up-rera.in' : 'Not Available');
                        ?>
                        <div class="project-overview-card-row">
                            <span class="project-overview-card-label">RERA Number Phase I :</span>
                            <span class="project-overview-card-value"><?= $gold_rera_phase1 ?></span>
                        </div>
                        <div class="project-overview-card-row project-overview-card-row-last">
                            <span class="project-overview-card-label">RERA Number Phase II:</span>
                            <span class="project-overview-card-value"><?= $gold_rera_phase2 ?></span>
                        </div>
                        <?php } else {
                            $project_rera = ($project_slug === 'saya-piazza') ? 'UPRERAPRJ364061 | www.up-rera.in' : 'UPRERAPRJ17950 | www.up-rera.in';
                        ?>
                        <div class="project-overview-card-row project-overview-card-row-last">
                            <span class="project-overview-card-label">RERA Number :</span>
                            <span class="project-overview-card-value"><?= $project_rera ?></span>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <?php if (!$is_gold_layout) { ?>
            <!-- Section 4 - Three column features (12,000+ Sq.M | cards slider one-by-one) -->
            <div class="project-overview-features">
                <div class="project-overview-features-container">
                    <div class="project-features-left">
                        <h2 class="project-features-title">Unlock Thriving Business Potential with Saya Homes Commercial Properties</h2>
                        <div class="project-features-desc">
                            <p><strong>Prime Location:</strong> Very visible with pedestrian traffic.</p>
                            <p><strong>High ROI:</strong> High returns due to increasing demand.</p>
                            <p><strong>Business Growth:</strong> Versatile space for expansion.</p>
                            <p><strong>Networking:</strong> Network through shared facilities.</p>
                        </div>
                        <!-- <p class="project-features-heading">7th - 25th</p>
                        <p class="project-features-sub">Dedicated Floors</p> -->
                        <div class="project-features-nav" style="display: none;">
                            <!-- <button type="button" class="project-features-nav-btn project-features-prev" aria-label="Previous"><img src="<?= $base_url ?>/images/svg/leftarrowaldier.svg" alt="" width="8" height="13"></button>
                            <button type="button" class="project-features-nav-btn project-features-next" aria-label="Next"><img src="<?= $base_url ?>/images/svg/rightarrowslider.svg" alt="" width="8" height="13"></button> -->
                        </div>
                    </div>
                    <div class="project-features-cards-wrap">
                        <div class="project-features-cards-viewport">
                            <div class="project-features-cards-track">
                                <div class="project-features-card">
                                    <div class="project-features-card-img-wrap">
                                        <img src="<?= $base_url ?>/images/new_theme/family.png" alt="Families" class="project-features-card-img">
                                    </div>
                                    <div class="project-features-card-bar">
                                        <span class="project-features-card-num">500K+</span>
                                        <span class="project-features-card-label">Families</span>
                                    </div>
                                </div>
                                <div class="project-features-card">
                                    <div class="project-features-card-img-wrap">
                                        <img src="<?= $base_url ?>/images/new_theme/section-4one-side.png" alt="Building Frontage" class="project-features-card-img">
                                    </div>
                                    <div class="project-features-card-bar">
                                        <span class="project-features-card-num">3-Side Open</span>
                                        <span class="project-features-card-label">Building Frontage</span>
                                    </div>
                                </div>
                                <div class="project-features-card">
                                    <div class="project-features-card-img-wrap">
                                        <img src="<?= $base_url ?>/images/new_theme/family.png" alt="Premium Retail" class="project-features-card-img">
                                    </div>
                                    <div class="project-features-card-bar">
                                        <span class="project-features-card-num">Premium</span>
                                        <span class="project-features-card-label">Retail Space</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } else { ?>
            <!-- Gold Avenue: Elevate Your Lifestyles section (heading + paragraph + Read More) -->
            <div class="project-gold-elevate">
                <div class="project-gold-elevate-container">
                    <h2 class="project-gold-elevate-title">Elevate Your Lifestyles To Epitome Of Luxury</h2>
                    <?php if ($project_slug === 'saya-zion') { ?>
                    <p class="project-gold-elevate-desc">Zion stands tall amidst the vast expanse of green in Greater Noida West. Set in nature's bounty, the building is a structure of eternal luxury. Relax in the landscaped garden with exotic flowering plants and your children can have the freedom of the vast green carpet. At Saya Zion, adopt an eco-friendly lifestyle and live a healthy life every day. An authentic large-scale home celebration that is further complemented by the seasonal hues of captivating gardens and attractive green belt.</p>
                    <?php } elseif ($project_slug === 'saya-zenith') { ?>
                    <p class="project-gold-elevate-desc">Each residence here is flooded with natural light and designed with elegance and outstanding craftsmanship. Live your dream lifestyle and make way for all the things that you love. Celebrate lavishly at our spacious party lawns and burn all those extra calories at a fully equipped gym. Come home, enjoy your private oasis in the middle of the bustling Indirapuram.</p>
                    <?php } elseif ($project_slug === 'saya-desire-residency') { ?>
                    <p class="project-gold-elevate-desc">Luxurious 2/3/4 BHK apartments are available at Saya Desire Residency; each one is specially designed to combine comfort and style. Each apartment, which is situated on a three-sided open plot, provides breathtaking views of Indirapuram and is a tranquil retreat after a long day. Stress disappears while privacy and a bustling neighborhood coexist thanks to dedicated yoga centers, beautifully landscaped greens, and a lively community. Welcome to a house that provides equal parts peace and connection.</p>
                    <?php } else { ?>
                    <p class="project-gold-elevate-desc">Every small detail, from the spectacular interiors to the relaxing semi-olympic sized swimming pool has been crafted, keeping in mind the discerning taste of our residents. Strategically located adjacent to the North India Mall (erstwhile Shipra Mall), and in close proximity to NH-9, <?= htmlspecialchars($project_gold_display_name) ?> will offer every resident effortless connectivity for a truly comfortable living experience. In fact, with a range of luxurious amenities &amp; recreational facilities, the homes at <?= htmlspecialchars($project_gold_display_name) ?> promise to mesmerize you throughout your life.</p>
                    <?php } ?>
                    <!-- <a href="#" class="project-gold-elevate-btn project-hero-readmore">
                        <span class="project-hero-readmore-text">Read More</span>
                        <div>
                            <img src="<?= $base_url ?>/images/new_theme/icons/button_hover_icon.svg" alt="">
                        </div>
                    </a> -->
                </div>
            </div>
            <?php } ?>
         </section>

         <?php if (!$is_gold_layout) { ?>
         <!-- Section 5 - Uber Luxury High Street Retail (dark blue block + Read More) - Commercial only -->
            <section class="project-section-5">
                <div class="project-section-5-inner">
                    <?php if (isset($project_display_name) && $project_display_name === 'Saya South X') { ?>
                    <h2 class="project-section-5-title">Ultra-Luxury High Street Retail Destination</h2>
                    <p class="project-section-5-desc">Shop, dine, relax, and celebrate life at Saya South X – a vibrant destination that provides the best retail, dining, and entertainment experiences, designed to provide unparalleled energy, style, and excitement in the Greater Noida West region.</p>
                    <?php } elseif (isset($project_display_name) && $project_display_name === 'Saya Biztop') { ?>
                    <h2 class="project-section-5-title">Elevating Every Moment, With Luxury Living</h2>
                    <p class="project-section-5-desc">Saya Biztop represents the ultimate blend of sophistication and innovation, crafted to enhance your work-life experience. Strategically positioned at Saya South X, our luxurious fully furnished business spaces are designed for the elite of the corporate world. Featuring expansive dedicated floors, best-in-class amenities, and a strategic 3-side open building façade, Saya Biztop presents a harmonious blend of luxury and convenience.<br><br>Experience corporate excellence at Saya Biztop, where cutting-edge amenities such as an infinity-edge pool, gym, billiards room, and all-day dining facility combine to satisfy your corporate and personal aspirations. Saya Biztop is a proud product of Saya Group.</p>
                    <?php } elseif (isset($project_display_name) && $project_display_name === 'Saya Piazza') { ?>
                    <h2 class="project-section-5-title">Elevating Every Moment, With Luxury Living</h2>
                    <p class="project-section-5-desc">Saya Piazza – The Ultimate Shopping Destination is finally here, providing ready-to-fitout commercial spaces in Noida's most coveted location. Situated in a sprawling 1162+ acre integrated township, Saya Piazza is abuzz with 50,000+ families and 100K+ working professionals in nearby MNCs.<br><br>With a superior experiential design philosophy, its majestic facade makes a striking statement, inviting entrants into a world of luxury. Its elegant lines, well-designed landscaping, and spectacular lighting make this iconic destination the perfect backdrop for your business success.</p>
                    <?php } else { ?>
                    <h2 class="project-section-5-title">An Uber Luxury High Street Retail Destination</h2>
                    <p class="project-section-5-desc">Catch The Latest Flix, Meet Your Friends For A Cup Of Coffee, Shop For The Latest Trends, Or Take Your Family On A Culinary Journey. Capture Every Beautiful Moment And Rejoice In The Joys Of Retail Therapy. With <?= htmlspecialchars($project_display_name) ?>, You Can Explore A Mix Of Retail, Restaurants And Entertainment Pulsating With Style And Energy. No Limit, No End To Fun & Excitement At <?= htmlspecialchars($project_display_name) ?>.</p>
                    <?php } ?>
                    <a href="<?= $base_url ?>/new_media-page.php?page=contact" class="project-section-5-readmore project-hero-readmore">
                        <span class="project-hero-readmore-text">Book a Site Visit</span>
                        <div>
                            <img src="<?= $base_url ?>/images/new_theme/icons/button_hover_icon.svg" alt="Arrow Right">
                        </div>
                    </a>
                </div>
            </section>
         <?php } ?>


         <!--section 6 - Tour (video section) -->
         <section class="project-video-section" id="tour">
            <div class="project-video-wrap">
                <video class="section-4-bg-video project-video" id="projectVideo" muted loop playsinline preload="metadata">
                    <source src="<?= $base_url ?>/images/new_theme/projectsuccessstory.mp4" type="video/mp4">
                </video>
                <div class="project-video-overlay" aria-hidden="true"></div>
                <button type="button" class="project-video-play-btn" id="projectVideoPlayBtn" aria-label="Play video">
                    <img src="<?= $base_url ?>/images/new_theme/icons/play-icon.svg" alt="">
                </button>
                <button type="button" class="project-video-pause-btn" id="projectVideoPauseBtn" aria-label="Pause video" style="display: none;">
                    <img src="<?= $base_url ?>/images/new_theme/icons/pause-icon.svg" alt="">
                </button>
            </div>
         </section>

       

         <?php if (!$is_gold_layout) { ?>
         <!-- Section 7 - Big Brands, Fresh Launches (marquee) - Commercial only -->
         <section class="project-section-7">
            <div class="project-section-7-inner">
                <div class="project-section-7-heading-row">
                    <h2 class="project-section-7-title">Brands Worth the Wait</h2>
                    <div class="project-section-7-nav-wrap">
                        <button type="button" class="project-section-7-nav-btn" id="projectSection7Prev" aria-label="Previous"><img src="<?= $base_url ?>/images/svg/leftarrowaldier.svg" alt=""></button>
                        <button type="button" class="project-section-7-nav-btn" id="projectSection7Next" aria-label="Next"><img src="<?= $base_url ?>/images/svg/rightarrowslider.svg" alt=""></button>
                    </div>
                </div>
                <div class="project-section-7-marquee">
                    <div class="project-section-7-track" id="projectSection7Track">
                        <div class="project-section-7-card"><img src="<?= $base_url ?>/images/new_theme/cinepolis.png" alt="Cinépolis"></div>
                        <div class="project-section-7-card"><img src="<?= $base_url ?>/images/new_theme/sunburn.png" alt="Sunburn"></div>
                        <div class="project-section-7-card"><img src="<?= $base_url ?>/images/new_theme/badamis.png" alt="Badami's"></div>
                        <div class="project-section-7-card"><img src="<?= $base_url ?>/images/new_theme/mcdonald.png" alt="McDonald's"></div>
                        <div class="project-section-7-card"><img src="<?= $base_url ?>/images/new_theme/MOB.png" alt="Ministry of Beer"></div>
                        <div class="project-section-7-card"><img src="<?= $base_url ?>/images/new_theme/castle.png" alt="Castle's Barbeque"></div>
                        <!-- duplicate for seamless loop -->
                        <div class="project-section-7-card"><img src="<?= $base_url ?>/images/new_theme/cinepolis.png" alt="Cinépolis"></div>
                        <div class="project-section-7-card"><img src="<?= $base_url ?>/images/new_theme/sunburn.png" alt="Sunburn"></div>
                        <div class="project-section-7-card"><img src="<?= $base_url ?>/images/new_theme/badamis.png" alt="Badami's"></div>
                        <div class="project-section-7-card"><img src="<?= $base_url ?>/images/new_theme/mcdonald.png" alt="McDonald's"></div>
                        <div class="project-section-7-card"><img src="<?= $base_url ?>/images/new_theme/MOB.png" alt="Ministry of Beer"></div>
                        <div class="project-section-7-card"><img src="<?= $base_url ?>/images/new_theme/castle.png" alt="Castle's Barbeque"></div>
                    </div>
                </div>
            </div>
         </section>
         <?php } ?>

           <!-- Section 8 - Amenities (header full width, accordion left, image right) -->
           <section class="project-section-8 project-amenities" id="amenities">
            <div class="project-section-8-inner">
                <header class="project-section-8-header">
                    <p class="project-section-8-label">Amenities</p>
                    <?php if ($is_gold_layout) { ?>
                    <?php if ($project_slug === 'gold-avenue') { ?>
                    <h2 class="project-section-8-title">Luxury Amenities, Crafted For You.</h2>
                    <p class="project-section-8-desc">Experience the luxury of a world-class clubhouse, relax with a rejuvenating dip in the semi-Olympic swimming pool, or revitalize at the state-of-the-art fitness center and spa.</p>
                    <p class="project-section-8-subdesc"><i>Saya Gold Avenue offers you elegance, comfort, and modern living in a lifestyle that you truly deserve.</i></p>
                    <?php } elseif ($project_slug === 'saya-zion') { ?>
                    <h2 class="project-section-8-title">Luxury Amenities, Crafted For You.</h2>
                    <p class="project-section-8-desc">Saya Zion provides a luxurious lifestyle with world-class amenities designed to provide a vibrant lifestyle and a serene environment, making it the perfect destination for families seeking comfort, convenience, and luxury.</p>
                    <?php } elseif ($project_slug === 'saya-zenith') { ?>
                    <h2 class="project-section-8-title">Luxury Amenities, Crafted For You.</h2>
                    <p class="project-section-8-desc">Live life to the fullest at Saya Zenith, where thoughtfully designed gardens, play zones for kids, a state-of-the-art clubhouse, well-equipped gym, large party lawns, and round-the-clock security are all designed to provide a safe, lively, and comfortable space for living life to the fullest in Indirapuram.</p>
                    <?php } elseif ($project_slug === 'saya-desire-residency') { ?>
                    <h2 class="project-section-8-title">Luxury Amenities, Crafted For You.</h2>
                    <p class="project-section-8-desc">At Saya Desire Residency, every amenity is designed for comfort and luxury. Enjoy landscaped gardens, children's play areas, yoga and wellness zones, a modern clubhouse, fully equipped gym, spacious party lawns, and 24×7 security — creating a safe, vibrant, and family-friendly environment in Indirapuram.</p>
                    <?php } else { ?>
                    <h2 class="project-section-8-title">Luxury Amenities, Crafted For You.</h2>
                    <p class="project-section-8-desc">Get ready to indulge in the grandeur of a state-of-the-art clubhouse, take a refreshing dip in the semi-Olympic size swimming pool, or rejuvenate at the fully equipped fitness center and spa.</p>
                    <p class="project-section-8-subdesc"><?= htmlspecialchars($project_gold_display_name) ?> reflects elegance, comfort, and modern living at its finest.</p>
                    <?php } ?>
                    <?php } else { ?>
                    <h2 class="project-section-8-title"><?php
                        if (isset($project_display_name) && $project_display_name === 'Saya South X') { echo 'Landmark Commercial Destination in Greater Noida West'; }
                        elseif (isset($project_display_name) && ($project_display_name === 'Saya Biztop' || $project_display_name === 'Saya Piazza')) { echo 'Luxury Amenities, Crafted For You.'; }
                        else { echo 'A landmark commercial hub in Greater Noida West.'; }
                        ?></h2>
                    <?php if (isset($project_display_name) && $project_display_name === 'Saya South X') { ?>
                    <p class="project-section-8-desc">Saya South X is an ultra-luxury commercial hub providing high-end retail spaces, central air conditioning, high-speed elevators, multi-level parking, and 24×7 security – designed for a world-class shopping and lifestyle experience.</p>
                    <?php } elseif (isset($project_display_name) && $project_display_name === 'Saya Biztop') { ?>
                    <p class="project-section-8-desc">At Saya Biztop, every amenity has been created to take your work-life experience to the next level. Enjoy best-in-class amenities such as a state-of-the-art clubhouse, fully equipped gym, infinity-edge pool, dedicated business lounges, and 24×7 security.</p>
                    <?php } elseif (isset($project_display_name) && $project_display_name === 'Saya Piazza') { ?>
                    <p class="project-section-8-desc">Saya Piazza provides state-of-the-art infrastructure, parking, high speed internet connectivity, and 24×7 security to ensure smooth business operations. The luxurious landscaping and lighting provide a luxurious setting, and its prime location ensures that your business flourishes in a thriving community.</p>
                    <?php } else { ?>
                    <p class="project-section-8-desc">An uber-luxury destination in Greater Noida West is designed to offer an elevated shopping and lifestyle experience.</p>
                    <p class="project-section-8-subdesc"><?= htmlspecialchars($project_display_name) ?> offers world-class amenities such as centralized air-conditioning, high-speed elevators, ample multi-level parking, and 24x7 security with CCTV surveillance.</p>
                    <?php } ?>
                    <?php } ?>
                </header>
                <?php if ($is_gold_layout) { ?>
                <div class="project-section-8-gold-grid">
                    <div class="project-section-8-gold-icons">
                        <?php if ($project_slug === 'saya-zion') { ?>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/clubhouse.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Club House</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/track.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Jogging and Strolling Track</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/swim.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Swimming Pool</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/gym.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Lift</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/gym.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Gymnasium</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/badminton.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Indoor Squash & Badminton Courts</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/swim.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Jacuzzi</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/clubhouse.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Large Clubhouse</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/clubhouse.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Multipurpose Hall</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/gazebos.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Event Space & Amphitheatre</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/playarea.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Kids Play Pool with Water Slides</span>
                        </div>
                        <?php } elseif ($project_slug === 'gold-avenue') { ?>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/gazebos.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Gazebos</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/budha.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Yoga & Meditation</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/clubhouse.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Clubhouse</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/playarea.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Kids Play Area & Pool</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/badminton.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Badminton Court, Basketball Court & Cricket Nets</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/swim.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Semi-Olympic Size Swimming Pool</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/gym.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Gymnasium</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/parking.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Open Car Parking</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/rink.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Skating Rink</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/track.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Jogging Track</span>
                        </div>
                        <?php } elseif ($project_slug === 'saya-zenith') { ?>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/clubhouse.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Club House</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/track.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Jogging and Strolling Track</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/swim.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Swimming Pool</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/gym.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Lift</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/gym.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Gymnasium</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/badminton.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Indoor Squash & Badminton Courts</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/swim.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Jacuzzi</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/clubhouse.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Multipurpose Hall</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/gazebos.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Event Space & Amphitheatre</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/playarea.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Kids Play Pool with Water Slides</span>
                        </div>
                        <?php } elseif ($project_slug === 'saya-desire-residency') { ?>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/swim.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Swimming Pool</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/budha.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Vastu Compliant</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/gazebos.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Green Spaces & Landscapes</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/swim.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Water Systems</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/gym.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Gym</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/parking.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Car & Reserved Parking</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/clubhouse.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Multipurpose Room</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/track.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Jogging & Cycling Track</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/clubhouse.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Club House</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/clubhouse.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Security & Intercom</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/playarea.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Recreational Facilities</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/gym.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Lifts & Video Door Security</span>
                        </div>
                        <?php } else { ?>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/gym.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Gymnasium</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/gazebos.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Gazebos</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/swim.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Semi-Olympic Size Swimming Pool</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/budha.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Yoga/ Meditation Lawn</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/playarea.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Kids Play Area</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/clubhouse.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Clubhouse</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/parking.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Open Car Parking</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/phool.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Kids Pool</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/rink.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Skating Rink</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/badminton.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Badminton Court</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/track.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Jogging Track</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/basketball.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Half Basketball Court</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/cricket.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Cricket Net Practice</span>
                        </div>
                        <div class="project-section-8-gold-icon-item">
                            <img src="<?= $base_url ?>/images/svg/gym.svg" alt="" class="project-section-8-gold-icon-img">
                            <span class="project-section-8-gold-icon-label">Gymnasium</span>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="project-section-8-gold-slider-wrap">
                        <div class="project-section-8-gold-slider-track" id="projectSection8GoldSliderTrack">
                            <?php if ($project_slug === 'gold-avenue') { ?>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/Jogging-Track.png" alt="Jogging Track - <?= htmlspecialchars($project_gold_display_name) ?>" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Jogging Track</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/badminta1.png" alt="Badminton Court - <?= htmlspecialchars($project_gold_display_name) ?>" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Badminton Court, Basketball Court & Cricket Nets</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/home.png" alt="Clubhouse - <?= htmlspecialchars($project_gold_display_name) ?>" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Clubhouse</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/yoga.png" alt="Yoga & Meditation - <?= htmlspecialchars($project_gold_display_name) ?>" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Yoga & Meditation</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/spa.png" alt="Spa - <?= htmlspecialchars($project_gold_display_name) ?>" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Spa</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/child.png" alt="Kids Play Area & Pool - <?= htmlspecialchars($project_gold_display_name) ?>" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Kids Play Area & Pool</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/swingold.png" alt="Semi-Olympic Size Swimming Pool - <?= htmlspecialchars($project_gold_display_name) ?>" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Semi-Olympic Size Swimming Pool</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/gymgold.png" alt="Gymnasium - <?= htmlspecialchars($project_gold_display_name) ?>" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Gymnasium</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/parkinggold.png" alt="Open Car Parking - <?= htmlspecialchars($project_gold_display_name) ?>" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Open Car Parking</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/sketinggold.png" alt="Skating Rink - <?= htmlspecialchars($project_gold_display_name) ?>" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Skating Rink</p>
                            </div>
                            <?php } elseif ($project_slug === 'saya-zion') { ?>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/zionswim.png" alt="Swimming Pool - Saya Zion" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Swimming Pool</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/tableballing.png" alt="Games Room - Saya Zion" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Games Room</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/zionrunning.png" alt="Jogging and Strolling Track - Saya Zion" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Jogging and Strolling Track</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/liftzion.png" alt="Lift - Saya Zion" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Lift</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/ziongym.png" alt="Gymnasium - Saya Zion" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Gymnasium</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/ziontenis.png" alt="Indoor Squash & Badminton Courts - Saya Zion" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Indoor Squash & Badminton Courts</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/zionJacuzzi.png" alt="Jacuzzi - Saya Zion" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Jacuzzi</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/zionchair.png" alt="Multipurpose Hall - Saya Zion" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Multipurpose Hall</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/zionboy.png" alt="Kids Play Pool with Water Slides - Saya Zion" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Kids Play Pool with Water Slides</p>
                            </div>
                            <?php } elseif ($project_slug === 'saya-zenith') { ?>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/tenis.png" alt="Indoor Squash & Badminton Courts - Saya Zenith" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Indoor Squash & Badminton Courts</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/Jogging-Track.png" alt="Jogging and Strolling Track - Saya Zenith" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Jogging and Strolling Track</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/swim.png" alt="Swimming Pool - Saya Zenith" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Swimming Pool</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/lift.png" alt="Lift - Saya Zenith" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Lift</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/gym.png" alt="Gymnasium - Saya Zenith" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Gymnasium</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/badmintan.png" alt="Badminton Court - Saya Zenith" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Badminton Court</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/zionchair.png" alt="Multipurpose Hall - Saya Zenith" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Multipurpose Hall</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/EventSpace.png" alt="Event Space & Amphitheatre - Saya Zenith" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Event Space & Amphitheatre</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/zionJacuzzi.png" alt="Jacuzzi - Saya Zenith" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Jacuzzi</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/zionboy.png" alt="Kids Play Pool with Water Slides - Saya Zenith" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Kids Play Pool with Water Slides</p>
                            </div>
                            <?php } elseif ($project_slug === 'saya-desire-residency') { ?>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/desire-swim.png" alt="Swimming Pool - Saya Desire Residency" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Swimming Pool</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/jaadu.png" alt="Smart Home - Saya Desire Residency" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Vastu Compliant</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/jogging-desire.png" alt="Jogging & Cycling Track - Saya Desire Residency" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Jogging & Cycling Track</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/desirepipes.png" alt="Water Systems - Saya Desire Residency" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Water Systems</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/gymdesire.png" alt="Gym - Saya Desire Residency" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Gym</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/parking-desire.png" alt="Car & Reserved Parking - Saya Desire Residency" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Car & Reserved Parking</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/cyclechilddesire.png" alt="Jogging & Cycling Track - Saya Desire Residency" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Jogging & Cycling Track</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/desireballing.png" alt="Games Room - Saya Desire Residency" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Multipurpose Room</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/desiregirlwall.png" alt="Smart Home - Saya Desire Residency" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Security & Intercom</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/desirechild.png" alt="Kids Play Area - Saya Desire Residency" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Recreational Facilities</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/lift.png" alt="Lifts - Saya Desire Residency" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Lifts & Video Door Security</p>
                            </div>
                            <?php } else { ?>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/swimming.jpg" alt="Semi-Olympic Size Swimming Pool - <?= htmlspecialchars($project_gold_display_name) ?>" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Semi-Olympic Size Swimming Pool</p>
                            </div>
                            <div class="project-section-8-gold-slide">
                                <img src="<?= $base_url ?>/images/new_theme/swimming.jpg" alt="Semi-Olympic Size Swimming Pool - <?= htmlspecialchars($project_gold_display_name) ?>" class="project-section-8-gold-img">
                                <p class="project-section-8-gold-slide-caption">Semi-Olympic Size Swimming Pool</p>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="project-section-8-gold-slider-nav">
                            <button type="button" class="project-section-8-gold-slider-btn project-section-8-gold-slider-prev" id="projectSection8GoldSliderPrev" aria-label="Previous"><img src="<?= $base_url ?>/images/svg/leftarrowaldier.svg" alt=""></button>
                            <button type="button" class="project-section-8-gold-slider-btn project-section-8-gold-slider-next" id="projectSection8GoldSliderNext" aria-label="Next"><img src="<?= $base_url ?>/images/svg/rightarrowslider.svg" alt=""></button>
                        </div>
                    </div>
                </div>
                <?php } elseif (!$is_gold_layout) { ?>
                <div class="project-section-8-grid">
                <div class="project-section-8-left">
                    <ul class="project-section-8-list" role="list">
                        <?php if (isset($project_display_name) && $project_display_name === 'Saya South X') { ?>
                        <li class="project-section-8-item" data-amenity-image="<?= $base_url ?>/images/new_theme/southfoodcourt.png">
                            <button type="button" class="project-section-8-item-head" aria-expanded="false">
                                <span>Food Court</span>
                                <span class="project-section-8-arrow" aria-hidden="true"><img src="<?= $base_url ?>/images/svg/projectpgaccodianarrow.svg" alt=""></span>
                            </button>
                            <div class="project-section-8-item-panel"><p>Multiple eating facilities under one roof.</p></div>
                        </li>
                        <li class="project-section-8-item" data-amenity-image="<?= $base_url ?>/images/new_theme/AmpleParkingsouth.png">
                            <button type="button" class="project-section-8-item-head" aria-expanded="false">
                                <span>Ample Parking</span>
                                <span class="project-section-8-arrow" aria-hidden="true"><img src="<?= $base_url ?>/images/svg/projectpgaccodianarrow.svg" alt=""></span>
                            </button>
                            <div class="project-section-8-item-panel"><p>Sufficient parking space for everyone.</p></div>
                        </li>
                        <li class="project-section-8-item" data-amenity-image="<?= $base_url ?>/images/new_theme/Cinemasouth.png">
                            <button type="button" class="project-section-8-item-head" aria-expanded="false">
                                <span>Cinema</span>
                                <span class="project-section-8-arrow" aria-hidden="true"><img src="<?= $base_url ?>/images/svg/projectpgaccodianarrow.svg" alt=""></span>
                            </button>
                            <div class="project-section-8-item-panel"><p>A contemporary movie theater for recreation.</p></div>
                        </li>
                        <li class="project-section-8-item" data-amenity-image="<?= $base_url ?>/images/new_theme/CentralisedAirConditioningsouth.png">
                            <button type="button" class="project-section-8-item-head" aria-expanded="false">
                                <span>Centralised Air Conditioning</span>
                                <span class="project-section-8-arrow" aria-hidden="true"><img src="<?= $base_url ?>/images/svg/projectpgaccodianarrow.svg" alt=""></span>
                            </button>
                            <div class="project-section-8-item-panel"><p>Uniform cooling in the entire building.</p></div>
                        </li>
                        <li class="project-section-8-item" data-amenity-image="<?= $base_url ?>/images/new_theme/iconicsouth.png">
                            <button type="button" class="project-section-8-item-head" aria-expanded="false">
                                <span>Iconic Design</span>
                                <span class="project-section-8-arrow" aria-hidden="true"><img src="<?= $base_url ?>/images/svg/projectpgaccodianarrow.svg" alt=""></span>
                            </button>
                            <div class="project-section-8-item-panel"><p>A distinctive architectural design that is unique.</p></div>
                        </li>
                        <li class="project-section-8-item" data-amenity-image="<?= $base_url ?>/images/new_theme/High-SpeedElevatorssouth.png">
                            <button type="button" class="project-section-8-item-head" aria-expanded="false">
                                <span>High-Speed Elevators</span>
                                <span class="project-section-8-arrow" aria-hidden="true"><img src="<?= $base_url ?>/images/svg/projectpgaccodianarrow.svg" alt=""></span>
                            </button>
                            <div class="project-section-8-item-panel"><p>Rapid transportation to all floors.</p></div>
                        </li>
                        <?php } elseif (isset($project_display_name) && $project_display_name === 'Saya Biztop') { ?>
                        <li class="project-section-8-item" data-amenity-image="<?= $base_url ?>/images/new_theme/biztopbar.png">
                            <button type="button" class="project-section-8-item-head" aria-expanded="false">
                                <span>Bar & Lounge</span>
                                <span class="project-section-8-arrow" aria-hidden="true"><img src="<?= $base_url ?>/images/svg/projectpgaccodianarrow.svg" alt=""></span>
                            </button>
                            <div class="project-section-8-item-panel"><p>A place to relax after work.</p></div>
                        </li>
                        <li class="project-section-8-item" data-amenity-image="<?= $base_url ?>/images/new_theme/biztopswim.png">
                            <button type="button" class="project-section-8-item-head" aria-expanded="false">
                                <span>Swimming Pool</span>
                                <span class="project-section-8-arrow" aria-hidden="true"><img src="<?= $base_url ?>/images/svg/projectpgaccodianarrow.svg" alt=""></span>
                            </button>
                            <div class="project-section-8-item-panel"><p>A place to unwind and stay fit.</p></div>
                        </li>
                        <li class="project-section-8-item" data-amenity-image="<?= $base_url ?>/images/new_theme/gym.png">
                            <button type="button" class="project-section-8-item-head" aria-expanded="false">
                                <span>Gymnasium</span>
                                <span class="project-section-8-arrow" aria-hidden="true"><img src="<?= $base_url ?>/images/svg/projectpgaccodianarrow.svg" alt=""></span>
                            </button>
                            <div class="project-section-8-item-panel"><p>Equipped to meet your fitness requirements.</p></div>
                        </li>
                        <li class="project-section-8-item" data-amenity-image="<?= $base_url ?>/images/new_theme/EventSpace.png">
                            <button type="button" class="project-section-8-item-head" aria-expanded="false">
                                <span>Banquet Hall</span>
                                <span class="project-section-8-arrow" aria-hidden="true"><img src="<?= $base_url ?>/images/svg/projectpgaccodianarrow.svg" alt=""></span>
                            </button>
                            <div class="project-section-8-item-panel"><p>The perfect venue for business meetings, seminars, and celebrations.</p></div>
                        </li>
                        <li class="project-section-8-item" data-amenity-image="<?= $base_url ?>/images/new_theme/diningbiztop.png">
                            <button type="button" class="project-section-8-item-head" aria-expanded="false">
                                <span>Dining Restaurant</span>
                                <span class="project-section-8-arrow" aria-hidden="true"><img src="<?= $base_url ?>/images/svg/projectpgaccodianarrow.svg" alt=""></span>
                            </button>
                            <div class="project-section-8-item-panel"><p>A place to indulge in fine dining.</p></div>
                        </li>
                        <li class="project-section-8-item" data-amenity-image="<?= $base_url ?>/images/new_theme/parking-desire.png">
                            <button type="button" class="project-section-8-item-head" aria-expanded="false">
                                <span>Covered Car Parking</span>
                                <span class="project-section-8-arrow" aria-hidden="true"><img src="<?= $base_url ?>/images/svg/projectpgaccodianarrow.svg" alt=""></span>
                            </button>
                            <div class="project-section-8-item-panel"><p>Secure parking space for your vehicles.</p></div>
                        </li>
                        <?php } elseif (isset($project_display_name) && $project_display_name === 'Saya Piazza') { ?>
                        <li class="project-section-8-item" data-amenity-image="<?= $base_url ?>/images/new_theme/AmpleParkingsouth.png">
                            <button type="button" class="project-section-8-item-head" aria-expanded="false">
                                <span>Ample Parking</span>
                                <span class="project-section-8-arrow" aria-hidden="true"><img src="<?= $base_url ?>/images/svg/projectpgaccodianarrow.svg" alt=""></span>
                            </button>
                            <div class="project-section-8-item-panel"><p>Enough parking space for all visitors.</p></div>
                        </li>
                        <li class="project-section-8-item" data-amenity-image="<?= $base_url ?>/images/new_theme/landscapedpiazza.png">
                            <button type="button" class="project-section-8-item-head" aria-expanded="false">
                                <span>Landscaped Plazas</span>
                                <span class="project-section-8-arrow" aria-hidden="true"><img src="<?= $base_url ?>/images/svg/projectpgaccodianarrow.svg" alt=""></span>
                            </button>
                            <div class="project-section-8-item-panel"><p>Well-designed open spaces for relaxation.</p></div>
                        </li>
                        <li class="project-section-8-item" data-amenity-image="<?= $base_url ?>/images/new_theme/Entertainment-Zonespiazza.png">
                            <button type="button" class="project-section-8-item-head" aria-expanded="false">
                                <span>Entertainment Zones</span>
                                <span class="project-section-8-arrow" aria-hidden="true"><img src="<?= $base_url ?>/images/svg/projectpgaccodianarrow.svg" alt=""></span>
                            </button>
                            <div class="project-section-8-item-panel"><p>Special zones for entertainment and leisure activities.</p></div>
                        </li>
                        <li class="project-section-8-item" data-amenity-image="<?= $base_url ?>/images/new_theme/Dining-Zones.png">
                            <button type="button" class="project-section-8-item-head" aria-expanded="false">
                                <span>Dining Zones</span>
                                <span class="project-section-8-arrow" aria-hidden="true"><img src="<?= $base_url ?>/images/svg/projectpgaccodianarrow.svg" alt=""></span>
                            </button>
                            <div class="project-section-8-item-panel"><p>Variety of dining options for all tastes.</p></div>
                        </li>
                        <li class="project-section-8-item" data-amenity-image="<?= $base_url ?>/images/new_theme/Modern-Washroomspiazza.png">
                            <button type="button" class="project-section-8-item-head" aria-expanded="false">
                                <span>Modern Washrooms</span>
                                <span class="project-section-8-arrow" aria-hidden="true"><img src="<?= $base_url ?>/images/svg/projectpgaccodianarrow.svg" alt=""></span>
                            </button>
                            <div class="project-section-8-item-panel"><p>Conveniently designed facilities for easy access.</p></div>
                        </li>
                        <li class="project-section-8-item" data-amenity-image="<?= $base_url ?>/images/new_theme/Hypermarket.png">
                            <button type="button" class="project-section-8-item-head" aria-expanded="false">
                                <span>Hypermarket</span>
                                <span class="project-section-8-arrow" aria-hidden="true"><img src="<?= $base_url ?>/images/svg/projectpgaccodianarrow.svg" alt=""></span>
                            </button>
                            <div class="project-section-8-item-panel"><p>Your one-stop shopping destination, convenience at its best.</p></div>
                        </li>
                        <?php } else { ?>
                        <li class="project-section-8-item">
                            <button type="button" class="project-section-8-item-head" aria-expanded="false">
                                <span>Food Court</span>
                                <span class="project-section-8-arrow" aria-hidden="true"><img src="<?= $base_url ?>/images/svg/projectpgaccodianarrow.svg" alt=""></span>
                            </button>
                            <div class="project-section-8-item-panel"><p>Food court with diverse cuisines and a vibrant dining experience. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum, voluptates?</p></div>
                        </li>
                        <li class="project-section-8-item">
                            <button type="button" class="project-section-8-item-head" aria-expanded="false">
                                <span>Ample Parking</span>
                                <span class="project-section-8-arrow" aria-hidden="true"><img src="<?= $base_url ?>/images/svg/projectpgaccodianarrow.svg" alt=""></span>
                            </button>
                            <div class="project-section-8-item-panel"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></div>
                        </li>
                        <li class="project-section-8-item">
                            <button type="button" class="project-section-8-item-head" aria-expanded="false">
                                <span>Cinema</span>
                                <span class="project-section-8-arrow" aria-hidden="true"><img src="<?= $base_url ?>/images/svg/projectpgaccodianarrow.svg" alt=""></span>
                            </button>
                            <div class="project-section-8-item-panel"><p>State-of-the-art cinema for entertainment. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam, voluptatibus.</p></div>
                        </li>
                        <li class="project-section-8-item">
                            <button type="button" class="project-section-8-item-head" aria-expanded="false">
                                <span>Centralised Air Conditioning</span>
                                <span class="project-section-8-arrow" aria-hidden="true"><img src="<?= $base_url ?>/images/svg/projectpgaccodianarrow.svg" alt=""></span>
                            </button>
                            <div class="project-section-8-item-panel"><p>Climate-controlled comfort across the premises. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus, ipsa?</p></div>
                        </li>
                        <li class="project-section-8-item">
                            <button type="button" class="project-section-8-item-head" aria-expanded="false">
                                <span>Iconic Design</span>
                                <span class="project-section-8-arrow" aria-hidden="true"><img src="<?= $base_url ?>/images/svg/projectpgaccodianarrow.svg" alt=""></span>
                            </button>
                            <div class="project-section-8-item-panel"><p>Architecturally distinctive spaces. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, ad! Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p></div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="project-section-8-right">
                    <img src="<?= $base_url ?>/images/new_theme/<?= (isset($project_display_name) && $project_display_name === 'Saya South X') ? 'southfoodcourt.png' : ((isset($project_display_name) && $project_display_name === 'Saya Piazza') ? 'AmpleParkingsouth.png' : ((isset($project_display_name) && $project_display_name === 'Saya Biztop') ? 'biztopbar.png' : 'section-8image.png')) ?>" alt="Food Court - <?= htmlspecialchars($project_display_name) ?>">
                </div>
                </div>
                <?php } ?>
            </div>
         </section>
         
         <?php if (!$is_gold_layout) { ?>
          <!-- section-9 -->
          <section><img src="<?= $base_url ?>/images/new_theme/<?= (isset($project_display_name) && $project_display_name === 'Saya South X') ? 'ppsec-2pg.png' : ((isset($project_display_name) && $project_display_name === 'Saya Piazza') ? 'piazzasection-9.png' : ((isset($project_display_name) && $project_display_name === 'Saya Biztop') ? 'biztopsection10.png' : 'ppsec-2pg.jpg')) ?>" alt="<?= htmlspecialchars($project_display_name) ?> - Commercial Development" class="project-section-2-img" /></section>

          <!-- section10 - Explore The Specifications (slider) -->
        <div style="overflow-x:hidden;">
        <section class="project-section-10" id="specifications">
               <div class="project-section-10-inner">
                   <div class="project-section-10-heading-row">
                       <h2 class="project-section-10-title">Floorwise Highlights</h2>
                       <div class="project-section-10-nav" aria-label="Slider navigation">
                           <button type="button" class="project-section-10-nav-btn project-section-10-prev" aria-label="Previous"><img src="<?= $base_url ?>/images/svg/leftarrowaldier.svg" alt=""></button>
                           <button type="button" class="project-section-10-nav-btn project-section-10-next" aria-label="Next"><img src="<?= $base_url ?>/images/svg/rightarrowslider.svg" alt=""></button>
                       </div>
                   </div>
                   <div class="project-section-10-slider-wrap">
                       <div class="project-section-10-track">
                           <?php if (isset($project_display_name) && $project_display_name === 'Saya Biztop') { ?>
                           <article class="project-section-10-card">
                               <p class="project-section-10-card-label">7th – 25th Floor </p>
                               <h3 class="project-section-10-card-title">Business Suites</h3>
                               <p class="project-section-10-card-desc">Contemporary business suites offer luxurious office spaces with comfort, convenience, and breathtaking views.</p>
                           </article>
                           <?php } else { ?>
                           <article class="project-section-10-card">
                               <p class="project-section-10-card-label">Ground Floor</p>
                               <h3 class="project-section-10-card-title"> Premium Retail
                               </h3>
                               <p class="project-section-10-card-desc">High-end flagship retail stores and luxury brands with maximum customer interaction.
                               </p>
                               <!-- <a href="#" class="project-section-10-card-link">Read More..</a> -->
                           </article>
                           <article class="project-section-10-card">
                               <p class="project-section-10-card-label">1st Floor</p>
                               <h3 class="project-section-10-card-title">Retail Shops</h3>
                               <p class="project-section-10-card-desc">Vibrant retail offerings of fashion, lifestyle, and specialty stores for an elevated shopping experience.
                               </p>
                               <!-- <a href="#" class="project-section-10-card-link">Read More..</a> -->
                           </article>
                           <article class="project-section-10-card">
                               <p class="project-section-10-card-label">2nd Floor</p>
                               <h3 class="project-section-10-card-title">Retail Shops</h3>
                               <p class="project-section-10-card-desc">Thoughtfully designed retail spaces offering variety, convenience, and smooth visitor movement.</p>
                               <!-- <a href="#" class="project-section-10-card-link">Read More..</a> -->
                           </article>
                           <article class="project-section-10-card">
                               <p class="project-section-10-card-label">3rd Floor</p>
                               <h3 class="project-section-10-card-title">Shops & Dining</h3>
                               <p class="project-section-10-card-desc">A harmonious combination of retail and dining spaces, creating a dynamic shopping and dining experience</p>
                               <!-- <a href="#" class="project-section-10-card-link">Read More..</a> -->
                           </article>
                           <article class="project-section-10-card">
                               <p class="project-section-10-card-label">4th Floor</p>
                               <h3 class="project-section-10-card-title">Multiplex & Dining
                               </h3>
                               <p class="project-section-10-card-desc">A fusion of entertainment and culinary delights with a luxurious cinema experience and varied dining options.</p>
                               <!-- <a href="#" class="project-section-10-card-link">Read More..</a> -->
                           </article>
                           <article class="project-section-10-card">
                               <p class="project-section-10-card-label">5th Floor </p>
                               <h3 class="project-section-10-card-title">Multiplex & Banquets
                               </h3>
                               <p class="project-section-10-card-desc">A perfect destination for entertainment and merriment, with cinema screens and luxurious banquet spaces.
                               </p>
                               <!-- <a href="#" class="project-section-10-card-link">Read More..</a> -->
                           </article>
                           <article class="project-section-10-card">
                               <p class="project-section-10-card-label">6th Floor </p>
                               <h3 class="project-section-10-card-title"> Banquets
                               </h3>
                               <p class="project-section-10-card-desc">Elegant banquet halls for weddings, functions, and business events.

                               </p>
                               <!-- <a href="#" class="project-section-10-card-link">Read More..</a> -->
                           </article>
                           <article class="project-section-10-card">
                               <p class="project-section-10-card-label">7th – 25th Floor </p>
                               <h3 class="project-section-10-card-title">Business Suites

                               </h3>
                               <p class="project-section-10-card-desc">Contemporary business suites offer luxurious office spaces with comfort, convenience, and breathtaking views.
                               </p>
                               <!-- <a href="#" class="project-section-10-card-link">Read More..</a> -->
                           </article>
                           <?php } ?>
                       </div>
                   </div>
               </div>
           </section>
        </div>
        <?php } ?>
           <?php /* section11 - Master Plan & Floor Plans - commented out, do not show on any project
           <section class="project-section-11" id="masterlayout">
               <div class="project-section-11-inner">
                   <div class="project-section-11-heading">
                       <h2 class="project-section-11-title">Master Plan</h2>
                   </div>
                   <div class="project-section-11-row">
                       <div class="project-section-11-map-wrap">
                           <img src="<?= $base_url ?>/images/new_theme/projectpgmap.png" alt="Master Plan" class="project-section-11-map-img">
                       </div>
                       <div class="project-section-11-floor-wrap" id="floor-layout">
                           <div class="project-section-11-floor-header">
                               <h3 class="project-section-11-floor-title">Floor Plans</h3>
                               <div class="project-section-11-unit-tabs">
                                   <button type="button" class="project-section-11-unit-tab active" data-unit="1">UNIT 1</button>
                                   <button type="button" class="project-section-11-unit-tab" data-unit="2">UNIT 2</button>
                               </div>
                           </div>
                           <div class="project-section-11-floor-panels">
                               <div class="project-section-11-floor-cards project-section-11-unit-panel" data-unit="1">
                                   <div class="project-section-11-floor-card">
                                       <div class="project-section-11-floor-img-wrap">
                                           <img src="<?= $base_url ?>/images/new_theme/projectpgfloor.png" alt="Floor Plan Type A" class="project-section-11-floor-img">
                                       </div>
                                       <div class="project-section-11-floor-specs">
                                           <h4 class="project-section-11-floor-type">TypeA: 2B/R</h4>
                                           <p class="project-section-11-floor-detail">Total Super Area: 1139 SQ FT</p>
                                           <p class="project-section-11-floor-detail">Carpet Area: 752 SQ FT</p>
                                           <p class="project-section-11-floor-detail">Balcony Area: 69 SQ FT</p>
                                       </div>
                                   </div>
                                   <div class="project-section-11-floor-card">
                                       <div class="project-section-11-floor-img-wrap">
                                           <img src="<?= $base_url ?>/images/new_theme/projectpgfloor.png" alt="Floor Plan Type B" class="project-section-11-floor-img">
                                       </div>
                                       <div class="project-section-11-floor-specs">
                                           <h4 class="project-section-11-floor-type">TypeA: 2B/R</h4>
                                           <p class="project-section-11-floor-detail">Total Super Area: 1139 SQ FT</p>
                                           <p class="project-section-11-floor-detail">Carpet Area: 752 SQ FT</p>
                                           <p class="project-section-11-floor-detail">Balcony Area: 69 SQ FT</p>
                                       </div>
                                   </div>
                               </div>
                               <div class="project-section-11-floor-cards project-section-11-unit-panel" data-unit="2" hidden>
                                   <div class="project-section-11-floor-card">
                                       <div class="project-section-11-floor-img-wrap">
                                           <img src="<?= $base_url ?>/images/new_theme/projectpgfloor.png" alt="Floor Plan Unit 2 Type A" class="project-section-11-floor-img">
                                       </div>
                                       <div class="project-section-11-floor-specs">
                                           <h4 class="project-section-11-floor-type">TypeB: 3B/R</h4>
                                           <p class="project-section-11-floor-detail">Total Super Area: 1450 SQ FT</p>
                                           <p class="project-section-11-floor-detail">Carpet Area: 985 SQ FT</p>
                                           <p class="project-section-11-floor-detail">Balcony Area: 95 SQ FT</p>
                                       </div>
                                   </div>
                                   <div class="project-section-11-floor-card">
                                       <div class="project-section-11-floor-img-wrap">
                                           <img src="<?= $base_url ?>/images/new_theme/projectpgfloor.png" alt="Floor Plan Unit 2 Type B" class="project-section-11-floor-img">
                                       </div>
                                       <div class="project-section-11-floor-specs">
                                           <h4 class="project-section-11-floor-type">TypeB: 3B/R</h4>
                                           <p class="project-section-11-floor-detail">Total Super Area: 1450 SQ FT</p>
                                           <p class="project-section-11-floor-detail">Carpet Area: 985 SQ FT</p>
                                           <p class="project-section-11-floor-detail">Balcony Area: 95 SQ FT</p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </section>
           */ ?>

           <?php if ($is_gold_layout) { ?>
            <!-- Gold Avenue - Welcome: text upar, slider niche (ek puri image + dusri adhi) -->
            <section class="project-gold-welcome" id="gallery">
                <div class="project-gold-welcome-inner">
                    <div class="project-gold-welcome-header">
                        <div class="project-gold-welcome-text">
                            <p class="project-gold-welcome-label">Welcome</p>
                            <h2 class="project-gold-welcome-title">From Promises to Possession Welcome Home to <?= htmlspecialchars($project_gold_display_name) ?></h2>
                        </div>
                        <div class="project-gold-welcome-nav">
                            <button type="button" class="project-gold-welcome-nav-btn project-gold-welcome-prev" id="projectGoldWelcomePrev" aria-label="Previous"><img src="<?= $base_url ?>/images/svg/leftarrowaldier.svg" alt=""></button>
                            <button type="button" class="project-gold-welcome-nav-btn project-gold-welcome-next" id="projectGoldWelcomeNext" aria-label="Next"><img src="<?= $base_url ?>/images/svg/rightarrowslider.svg" alt=""></button>
                        </div>
                    </div>
                    <div class="project-gold-welcome-slider-wrap" id="projectGoldWelcomeWrap">
                        <div class="project-gold-welcome-track" id="projectGoldWelcomeTrack">
                            <div class="project-gold-welcome-slide">
                                <img src="<?= $base_url ?>/images/new_theme/sayagold2.jpg" alt="Welcome Home to <?= htmlspecialchars($project_gold_display_name) ?>" class="project-gold-welcome-img">
                            </div>
                            <div class="project-gold-welcome-slide">
                                <img src="<?= $base_url ?>/images/new_theme/sayagold3.jpg" alt="Welcome Home to <?= htmlspecialchars($project_gold_display_name) ?>" class="project-gold-welcome-img">
                            </div>
                            <div class="project-gold-welcome-slide">
                                <img src="<?= $base_url ?>/images/new_theme/sayagold4.jpg" alt="Welcome Home to <?= htmlspecialchars($project_gold_display_name) ?>" class="project-gold-welcome-img">
                            </div>
                            <div class="project-gold-welcome-slide">
                                <img src="<?= $base_url ?>/images/new_theme/sayagold5.jpg" alt="Welcome Home to <?= htmlspecialchars($project_gold_display_name) ?>" class="project-gold-welcome-img">
                            </div>
                            <div class="project-gold-welcome-slide">
                                <img src="<?= $base_url ?>/images/new_theme/sayagold6.jpg" alt="Welcome Home to <?= htmlspecialchars($project_gold_display_name) ?>" class="project-gold-welcome-img">
                            </div>
                            <div class="project-gold-welcome-slide">
                                <img src="<?= $base_url ?>/images/new_theme/sayagold7.jpg" alt="Welcome Home to <?= htmlspecialchars($project_gold_display_name) ?>" class="project-gold-welcome-img">
                            </div>
                            <div class="project-gold-welcome-slide">
                                <img src="<?= $base_url ?>/images/new_theme/sayagold8.jpg" alt="Welcome Home to <?= htmlspecialchars($project_gold_display_name) ?>" class="project-gold-welcome-img">
                            </div>
                            <div class="project-gold-welcome-slide">
                                <img src="<?= $base_url ?>/images/new_theme/sayagold9.jpg" alt="Welcome Home to <?= htmlspecialchars($project_gold_display_name) ?>" class="project-gold-welcome-img">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php } else { ?>
            <!-- section12 - Gallery (grid: upar 2 image, niche left + right upar 2 / niche 1) -->
            <section class="project-section-12-gallery" id="gallery">
                <div class="project-section-12-gallery-inner">
                    <header class="project-section-12-gallery-header">
                        <h2 class="project-section-12-gallery-title">Gallery</h2>
                        <p class="project-section-12-gallery-subtitle"><?= htmlspecialchars($project_gallery_subtitle) ?></p>
                    </header>
                    <div class="project-section-12-gallery-top">
                        <div class="project-section-12-gallery-item">
                            <img src="<?= $base_url ?>/images/new_theme/<?= (isset($project_display_name) && $project_display_name === 'Saya Piazza') ? 'pizzagallery1.png' : ((isset($project_display_name) && $project_display_name === 'Saya Biztop') ? 'biztopgallery1.png' : 'gallery1.png') ?>" alt="<?= htmlspecialchars($project_display_name) ?> - Exterior" class="project-section-12-gallery-img">
                        </div>
                        <div class="project-section-12-gallery-item">
                            <img src="<?= $base_url ?>/images/new_theme/<?= (isset($project_display_name) && $project_display_name === 'Saya Piazza') ? 'gallery2piazza.png' : ((isset($project_display_name) && $project_display_name === 'Saya Biztop') ? 'biztopgallery2.png' : 'gallery2.png') ?>" alt="<?= htmlspecialchars($project_display_name) ?> - Interior" class="project-section-12-gallery-img">
                        </div>
                    </div>
                    <div class="project-section-12-gallery-bottom">
                        <div class="project-section-12-gallery-bottom-left">
                            <div class="project-section-12-gallery-item">
                                <img src="<?= $base_url ?>/images/new_theme/<?= (isset($project_display_name) && $project_display_name === 'Saya Piazza') ? 'gallery3piazza.png' : ((isset($project_display_name) && $project_display_name === 'Saya Biztop') ? 'biztopgallery3.png' : 'gallery3.png') ?>" alt="<?= htmlspecialchars($project_display_name) ?> - Building" class="project-section-12-gallery-img">
                            </div>
                        </div>
                        <div class="project-section-12-gallery-bottom-right">
                            <div class="project-section-12-gallery-right-top">
                                <div class="project-section-12-gallery-item">
                                    <img src="<?= $base_url ?>/images/new_theme/<?= (isset($project_display_name) && $project_display_name === 'Saya Piazza') ? 'gallery4piazza.png' : ((isset($project_display_name) && $project_display_name === 'Saya Biztop') ? 'biztopgallery4.png' : 'southgallery.png') ?>" alt="<?= htmlspecialchars($project_display_name) ?> - Interior" class="project-section-12-gallery-img">
                                </div>
                                <div class="project-section-12-gallery-item">
                                    <img src="<?= $base_url ?>/images/new_theme/<?= (isset($project_display_name) && $project_display_name === 'Saya Piazza') ? 'gallery5piazza.png' : ((isset($project_display_name) && $project_display_name === 'Saya Biztop') ? 'biztopgallery5.png' : 'gallery2.png') ?>" alt="<?= htmlspecialchars($project_display_name) ?> - Interior" class="project-section-12-gallery-img">
                                </div>
                            </div>
                            <div class="project-section-12-gallery-right-bottom">
                                <div class="project-section-12-gallery-item">
                                    <img src="<?= $base_url ?>/images/new_theme/<?= (isset($project_display_name) && $project_display_name === 'Saya Piazza') ? 'gallwery6piazza.png' : ((isset($project_display_name) && $project_display_name === 'Saya Biztop') ? 'biztopgallery6.png' : 'gallery1.png') ?>" alt="<?= htmlspecialchars($project_display_name) ?> - Exterior" class="project-section-12-gallery-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Gallery lightbox popup: click image = open with that image first, then slide through all -->
            <div id="projectGalleryLightbox" class="project-gallery-lightbox" aria-hidden="true">
                <div class="project-gallery-lightbox-backdrop"></div>
                <button type="button" class="project-gallery-lightbox-close" aria-label="Close">&times;</button>
                <button type="button" class="project-gallery-lightbox-prev" aria-label="Previous"><img src="<?= $base_url ?>/images/svg/leftarrowaldier.svg" alt=""></button>
                <button type="button" class="project-gallery-lightbox-next" aria-label="Next"><img src="<?= $base_url ?>/images/svg/rightarrowslider.svg" alt=""></button>
                <div class="project-gallery-lightbox-content">
                    <div class="project-gallery-lightbox-track"></div>
                </div>
                <div class="project-gallery-lightbox-thumbs" id="projectGalleryLightboxThumbs"></div>
            </div>
            <?php } ?>

            <!--section13 - FAQs (title row 1, image + accordion same row 2)-->
            <section class="project-section-13" id="project-faqs">
                <div class="project-section-13-overlay"></div>
                <div class="project-section-13-inner">
                    <h2 class="project-section-13-title">FAQs</h2>
                    <div class="project-section-13-image-wrap">
                        <img src="<?= $base_url ?>/images/new_theme/projectFAQ.png" alt="Family at Saya Homes" class="project-section-13-image">
                    </div>
                    <div class="project-section-13-right">
                        <div class="project-section-13-accordion">
                            <div class="project-section-13-accordion-item" data-accordion-item>
                                <button type="button" class="project-section-13-accordion-trigger" aria-expanded="false" aria-controls="faq-01" id="faq-trigger-01">
                                    <span class="project-section-13-accordion-num">01</span>
                                    <span class="project-section-13-accordion-q"><?= ($project_slug === 'gold-avenue') ? 'Where is Saya Gold Avenue located?' : (($project_slug === 'saya-zion') ? 'Where is Saya Zion situated?' : (($project_slug === 'saya-zenith') ? 'Where is Saya Zenith situated?' : (($project_slug === 'saya-desire-residency') ? 'Where is Saya Desire Residency situated?' : ((isset($project_display_name) && $project_display_name === 'Saya South X') ? 'Is Saya South X a good investment in Noida Extension?' : ((isset($project_display_name) && $project_display_name === 'Saya Piazza') ? 'What is Saya Piazza?' : 'What is the property rate in greater Noida?'))))) ?></span>
                                    <span class="project-section-13-accordion-icon project-section-13-accordion-icon-plus" aria-hidden="true"><img src="<?= $base_url ?>/images/new_theme/projectpgplus.svg" alt=""></span>
                                    <span class="project-section-13-accordion-icon project-section-13-accordion-icon-minus" aria-hidden="true" hidden><img src="<?= $base_url ?>/images/new_theme/minus.svg" alt=""></span>
                                </button>
                                <div class="project-section-13-accordion-panel" id="faq-01" role="region" aria-labelledby="faq-trigger-01" hidden>
                                    <p class="project-section-13-accordion-answer"><?= ($project_slug === 'gold-avenue') ? 'Strategically positioned adjacent to North India Mall and accessible to NH-9.' : (($project_slug === 'saya-zion') ? 'Saya Zion is situated in Greater Noida West (Noida Extension), providing seamless connectivity to Noida, Ghaziabad, and Delhi NCR.' : (($project_slug === 'saya-zenith') ? 'Saya Zenith is situated in Indirapuram, Ghaziabad, and is well connected to Delhi, Noida, and other prominent locations in the NCR.' : (($project_slug === 'saya-desire-residency') ? 'Saya Desire Residency is situated in Indirapuram, Ghaziabad, which is a prime residential location with easy access to Noida, Delhi, and Ghaziabad.' : ((isset($project_display_name) && $project_display_name === 'Saya South X') ? 'Yes, Saya South X is a good commercial investment in Noida Extension because of its prime location, luxury segment, and high population catchment area.' : ((isset($project_display_name) && $project_display_name === 'Saya Biztop') ? 'A luxury business solution providing fully furnished office spaces at Saya SouthX, catering to business professionals with international amenities.' : ((isset($project_display_name) && $project_display_name === 'Saya Piazza') ? 'Saya Piazza is an upscale premium shopping and business hub providing ready-to-fit out commercial spaces in Noida\'s prime location. It is designed for businesses that look for luxury and convenience.' : 'Strategically positioned adjacent to North India Mall and accessible to NH-9.')))))) ?></p>
                                </div>
                            </div>
                            <div class="project-section-13-accordion-item project-section-13-accordion-item-open" data-accordion-item>
                                <button type="button" class="project-section-13-accordion-trigger" aria-expanded="true" aria-controls="faq-02" id="faq-trigger-02">
                                    <span class="project-section-13-accordion-num">02</span>
                                    <span class="project-section-13-accordion-q"><?= ($project_slug === 'gold-avenue') ? 'What kind of residential options are available?' : (($project_slug === 'saya-zion') ? 'What kind of apartments are available in Saya Zion?' : (($project_slug === 'saya-zenith') ? 'What kind of apartments are available in Saya Zenith?' : (($project_slug === 'saya-desire-residency') ? 'What kind of apartments are available in Saya Desire Residency?' : ((isset($project_display_name) && $project_display_name === 'Saya South X') ? 'What kind of shops are available in Saya South X?' : ((isset($project_display_name) && $project_display_name === 'Saya Biztop') ? 'What kind of amenities are provided in Saya Biztop?' : ((isset($project_display_name) && $project_display_name === 'Saya Piazza') ? 'Where is Saya Piazza located?' : 'What is the property rate in Dwarka Expressway?')))))) ?></span>
                                    <span class="project-section-13-accordion-icon project-section-13-accordion-icon-plus" aria-hidden="true" hidden><img src="<?= $base_url ?>/images/new_theme/projectpgplus.svg" alt=""></span>
                                    <span class="project-section-13-accordion-icon project-section-13-accordion-icon-minus" aria-hidden="true"><img src="<?= $base_url ?>/images/new_theme/minus.svg" alt=""></span>
                                </button>
                                <div class="project-section-13-accordion-panel project-section-13-accordion-panel-open" id="faq-02" role="region" aria-labelledby="faq-trigger-02">
                                    <p class="project-section-13-accordion-answer"><?= ($project_slug === 'gold-avenue') ? 'Luxurious apartments and units with high-end designs and interiors.' : (($project_slug === 'saya-zion') ? 'Saya Zion provides spacious 2, 3 and 4 BHK luxury apartments designed for contemporary living.' : (($project_slug === 'saya-zenith') ? 'Saya Zenith provides 2 BHK, 3 BHK, and 4 BHK luxury apartments.' : (($project_slug === 'saya-desire-residency') ? 'Saya Desire Residency provides 2 BHK, 3 BHK, and 4 BHK luxury apartments that are designed in a modern way with ample natural light and enough space to live for families.' : ((isset($project_display_name) && $project_display_name === 'Saya South X') ? 'The project provides retail shops, food court space, restaurant space, and entertainment space in Greater Noida West.' : ((isset($project_display_name) && $project_display_name === 'Saya Biztop') ? 'Saya Biztop provides infinity-edge pool, gym, billiards room, clubhouse, business lounges, landscaped spaces, and 24×7 security.' : ((isset($project_display_name) && $project_display_name === 'Saya Piazza') ? 'Saya Piazza is located in Noida\'s prime location, providing easy accessibility to major roads, transport, and the surrounding residential and commercial areas, making it a prime location for businesses.' : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.')))))) ?></p>
                                </div>
                            </div>
                            <div class="project-section-13-accordion-item" data-accordion-item>
                                <button type="button" class="project-section-13-accordion-trigger" aria-expanded="false" aria-controls="faq-03" id="faq-trigger-03">
                                    <span class="project-section-13-accordion-num">03</span>
                                    <span class="project-section-13-accordion-q"><?= ($project_slug === 'gold-avenue') ? 'What kind of amenities are provided in Saya Gold Avenue?' : (($project_slug === 'saya-zion') ? 'What kind of amenities are available in Saya Zion?' : (($project_slug === 'saya-zenith') ? 'What kind of amenities are available in Saya Zenith?' : (($project_slug === 'saya-desire-residency') ? 'What kind of amenities are available in Saya Desire Residency?' : ((isset($project_display_name) && $project_display_name === 'Saya South X') ? 'What kind of amenities are available in the project?' : ((isset($project_display_name) && $project_display_name === 'Saya Biztop') ? 'Where is Saya Biztop situated?' : ((isset($project_display_name) && $project_display_name === 'Saya Piazza') ? 'What amenities are provided in Saya Piazza?' : 'What is the property rate in Dwarka Expressway?')))))) ?></span>
                                    <span class="project-section-13-accordion-icon project-section-13-accordion-icon-plus" aria-hidden="true"><img src="<?= $base_url ?>/images/new_theme/projectpgplus.svg" alt=""></span>
                                    <span class="project-section-13-accordion-icon project-section-13-accordion-icon-minus" aria-hidden="true" hidden><img src="<?= $base_url ?>/images/new_theme/minus.svg" alt=""></span>
                                </button>
                                <div class="project-section-13-accordion-panel" id="faq-03" role="region" aria-labelledby="faq-trigger-03" hidden>
                                    <p class="project-section-13-accordion-answer"><?= ($project_slug === 'gold-avenue') ? 'Pool, gym, gardens, recreational spaces, and round-the-clock security for a luxurious lifestyle.' : (($project_slug === 'saya-zion') ? 'The project provides amenities such as landscaped gardens, clubhouse, children play areas, security, and lifestyle amenities for comfortable living.' : (($project_slug === 'saya-zenith') ? 'Saya Zenith provides landscaped gardens, kids play zones, clubhouse, gym, party lawns, 24×7 security, and many more.' : (($project_slug === 'saya-desire-residency') ? 'The project provides landscaped gardens, kids play areas, yoga and wellness areas, clubhouse, fully equipped gym, party lawns, and 24×7 security, which is a luxurious lifestyle for all residents.' : ((isset($project_display_name) && $project_display_name === 'Saya South X') ? 'Saya South X provides centralized AC, high-speed elevators, parking space, 24×7 security, and iconic architecture for a world-class shopping experience.' : ((isset($project_display_name) && $project_display_name === 'Saya Biztop') ? 'Saya Biztop is situated at Saya SouthX with excellent accessibility and 3-side open building façade in Noida.' : ((isset($project_display_name) && $project_display_name === 'Saya Piazza') ? 'Saya Piazza provides modern infrastructure, ample parking space, 24×7 security, elegant landscaping, and beautiful lighting, providing a luxurious and secure environment for businesses and their customers.' : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.')))))) ?></p>
                                </div>
                            </div>
                            <div class="project-section-13-accordion-item" data-accordion-item>
                                <button type="button" class="project-section-13-accordion-trigger" aria-expanded="false" aria-controls="faq-04" id="faq-trigger-04">
                                    <span class="project-section-13-accordion-num">04</span>
                                    <span class="project-section-13-accordion-q"><?= ($project_slug === 'gold-avenue') ? 'Is Saya Gold Avenue a good investment opportunity?' : (($project_slug === 'saya-zion') ? 'Is Saya Zion a good investment option in Greater Noida West?' : (($project_slug === 'saya-zenith') ? 'Why should I select Saya Zenith for living with my family?' : (($project_slug === 'saya-desire-residency') ? 'Why is Saya Desire Residency the best place to live for families?' : ((isset($project_display_name) && $project_display_name === 'Saya South X') ? 'Who should invest in Saya South X?' : ((isset($project_display_name) && $project_display_name === 'Saya Biztop') ? 'What are the office space options available?' : ((isset($project_display_name) && $project_display_name === 'Saya Piazza') ? 'What kind of commercial spaces are provided in Saya Piazza?' : 'How can I book a site visit?')))))) ?></span>
                                    <span class="project-section-13-accordion-icon project-section-13-accordion-icon-plus" aria-hidden="true"><img src="<?= $base_url ?>/images/new_theme/projectpgplus.svg" alt=""></span>
                                    <span class="project-section-13-accordion-icon project-section-13-accordion-icon-minus" aria-hidden="true" hidden><img src="<?= $base_url ?>/images/new_theme/minus.svg" alt=""></span>
                                </button>
                                <div class="project-section-13-accordion-panel" id="faq-04" role="region" aria-labelledby="faq-trigger-04" hidden>
                                    <p class="project-section-13-accordion-answer"><?= ($project_slug === 'gold-avenue') ? 'Yes. Saya Group\'s legacy and quality construction make for excellent investment value.' : (($project_slug === 'saya-zion') ? 'Yes, because of its prime location, reputable developer, and developing infrastructure in Noida Extension, Saya Zion is a good investment option.' : (($project_slug === 'saya-zenith') ? 'Saya Zenith provides luxury apartments, green spaces, luxurious amenities, and a safe and vibrant community – making it the perfect destination for families looking for comfort, convenience, and a modern lifestyle.' : (($project_slug === 'saya-desire-residency') ? 'Saya Desire Residency is the best place to live for families because it offers luxury apartments, green spaces, wellness areas, and a secure environment.' : ((isset($project_display_name) && $project_display_name === 'Saya South X') ? 'Retailers, restaurant owners, investors, and entrepreneurs seeking luxury commercial property in Greater Noida West can invest in this project.' : ((isset($project_display_name) && $project_display_name === 'Saya Biztop') ? 'Fully furnished business suites with flexible configurations to accommodate small businesses to large corporations.' : ((isset($project_display_name) && $project_display_name === 'Saya Piazza') ? 'Saya Piazza provides ready-to-fit out commercial spaces, designed to meet the retail, office, and business requirements of the customers, allowing them to design their own space according to their needs.' : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Contact our sales team or visit the website to schedule a visit.')))))) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--section14 - Centralised Location (list left, map right) - Prime Location Advantage -->
            <section class="project-section-14" id="map">
                <div class="project-section-14-inner">
                    <div class="project-section-14-left">
                        <h2 class="project-section-14-title">Prime Location Advantage</h2>
                        <ul class="project-section-14-list<?= ($project_slug === 'gold-avenue') ? ' project-section-14-list--gold-avenue' : '' ?>">
                            <?php if ($project_slug === 'gold-avenue') { ?>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/svg/shopping-cart.svg" alt="Mall" class="project-section-14-icon" width="32" height="32"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">Shipra Mall</span>
                                </span>
                                <span class="project-section-14-distance">100 Mtr</span>
                            </li>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/svg/university.svg" alt="School" class="project-section-14-icon" width="32" height="32"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">Presidium School Indirapuram</span>
                                </span>
                                <span class="project-section-14-distance">800 Mtr</span>
                            </li>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/svg/road.svg" alt="Road" class="project-section-14-icon" width="32" height="32"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">Delhi Meerut Expressway</span>
                                </span>
                                <span class="project-section-14-distance">950 Mtr</span>
                            </li>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/svg/metro1.svg" alt="Metro" class="project-section-14-icon" width="32" height="32"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">Noida Electronic City Metro Station</span>
                                </span>
                                <span class="project-section-14-distance">1.8 KM</span>
                            </li>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/svg/metro1.svg" alt="Railway" class="project-section-14-icon" width="32" height="32"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">Anand Vihar Railway Station</span>
                                </span>
                                <span class="project-section-14-distance">8.8 KM</span>
                            </li>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/svg/plane.svg" alt="Airport" class="project-section-14-icon" width="32" height="32"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">Jewar Airport</span>
                                </span>
                                <span class="project-section-14-distance">29.9 KM</span>
                            </li>
                            <?php } elseif ($project_slug === 'saya-zion') { ?>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/svg/hospital-loc.svg" alt="Hospital" class="project-section-14-icon" width="32" height="32"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">LYF Hospital</span>
                                </span>
                                <span class="project-section-14-distance">5 Min</span>
                            </li>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/svg/university.svg" alt="School" class="project-section-14-icon" width="32" height="32"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">Sheffield School</span>
                                </span>
                                <span class="project-section-14-distance">10 Min</span>
                            </li>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/svg/metro1.svg" alt="Metro" class="project-section-14-icon" width="32" height="32"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">City Centre Metro Station</span>
                                </span>
                                <span class="project-section-14-distance">15 Min</span>
                            </li>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/svg/road.svg" alt="Road" class="project-section-14-icon" width="32" height="32"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">Surajpur Kasna Road</span>
                                </span>
                                <span class="project-section-14-distance">15 Min</span>
                            </li>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/svg/university.svg" alt="School" class="project-section-14-icon" width="32" height="32"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">GD Goenka School</span>
                                </span>
                                <span class="project-section-14-distance">15 Min</span>
                            </li>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/svg/shopping-cart.svg" alt="Mall" class="project-section-14-icon" width="32" height="32"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">Mall of India</span>
                                </span>
                                <span class="project-section-14-distance">20 Min</span>
                            </li>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/svg/hospital-loc.svg" alt="Hospital" class="project-section-14-icon" width="32" height="32"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">Fortis Hospital</span>
                                </span>
                                <span class="project-section-14-distance">20 Min</span>
                            </li>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/svg/metro1.svg" alt="Railway" class="project-section-14-icon" width="32" height="32"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">Anand Vihar Railway Station</span>
                                </span>
                                <span class="project-section-14-distance">30 Min</span>
                            </li>
                            <?php } elseif ($project_slug === 'saya-zenith') { ?>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/svg/road.svg" alt="Highway" class="project-section-14-icon" width="32" height="32"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">NH 24</span>
                                </span>
                                <span class="project-section-14-distance">15 Min</span>
                            </li>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/svg/hospital-loc.svg" alt="Hospital" class="project-section-14-icon" width="32" height="32"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">Shanti Gopal Hospital</span>
                                </span>
                                <span class="project-section-14-distance">20 Min</span>
                            </li>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/svg/shopping-cart.svg" alt="Mall" class="project-section-14-icon" width="32" height="32"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">Shipra Mall</span>
                                </span>
                                <span class="project-section-14-distance">20 Min</span>
                            </li>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/svg/metro1.svg" alt="Railway" class="project-section-14-icon" width="32" height="32"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">Anand Vihar Railway Station</span>
                                </span>
                                <span class="project-section-14-distance">30 Min</span>
                            </li>
                            <?php } elseif ($project_slug === 'saya-piazza') { ?>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/svg/metro1.svg" alt="Metro" class="project-section-14-icon" width="32" height="32"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">137 Metro Station</span>
                                </span>
                                <span class="project-section-14-distance">5 Min</span>
                            </li>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/svg/university.svg" alt="University" class="project-section-14-icon" width="32" height="32"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">Amity University</span>
                                </span>
                                <span class="project-section-14-distance">5 Min</span>
                            </li>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/svg/road.svg" alt="Road" class="project-section-14-icon" width="32" height="32"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">DND & Sector 18, Noida</span>
                                </span>
                                <span class="project-section-14-distance">10 Min</span>
                            </li>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/svg/hospital-loc.svg" alt="Hospital" class="project-section-14-icon" width="32" height="32"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">JP Multispecility Hospital</span>
                                </span>
                                <span class="project-section-14-distance">10 Min</span>
                            </li>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/svg/road.svg" alt="Landmark" class="project-section-14-icon" width="32" height="32"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">Akshardham</span>
                                </span>
                                <span class="project-section-14-distance">15 Min</span>
                            </li>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/svg/plane.svg" alt="Airport" class="project-section-14-icon" width="32" height="32"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">Noida International Airport</span>
                                </span>
                                <span class="project-section-14-distance">30 Min</span>
                            </li>
                            <?php } elseif ($project_slug === 'saya-desire-residency') { ?>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/svg/hospital-loc.svg" alt="Hospital" class="project-section-14-icon" width="32" height="32"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">Shanti Gopal Hospital</span>
                                </span>
                                <span class="project-section-14-distance">10 Min</span>
                            </li>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/svg/road.svg" alt="Highway" class="project-section-14-icon" width="32" height="32"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">NH-24</span>
                                </span>
                                <span class="project-section-14-distance">15 Min</span>
                            </li>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/svg/shopping-cart.svg" alt="Mall" class="project-section-14-icon" width="32" height="32"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">Shipra Mall</span>
                                </span>
                                <span class="project-section-14-distance">15 Min</span>
                            </li>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/svg/metro1.svg" alt="Railway" class="project-section-14-icon" width="32" height="32"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">Anand Vihar Railway Station</span>
                                </span>
                                <span class="project-section-14-distance">20 Min</span>
                            </li>
                            <?php } else { ?>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/new_theme/ppsec-14budha.png" alt="" class="project-section-14-icon"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">Ek Murti Buddha Chowk</span>
                                </span>
                                <span class="project-section-14-distance">100 Mtr</span>
                            </li>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/svg/road.svg" alt="Highway" class="project-section-14-icon" width="32" height="32"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">NH-24, Sec-120</span>
                                </span>
                                <span class="project-section-14-distance">2 KM</span>
                            </li>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/new_theme/pgsec-14crossing.png" alt="" class="project-section-14-icon"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">Crossing Republik</span>
                                </span>
                                <span class="project-section-14-distance">2 KM</span>
                            </li>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/new_theme/ppsec-14charmurthi.png" alt="" class="project-section-14-icon"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">Kisan Chowk Chhar Murti</span>
                                </span>
                                <span class="project-section-14-distance">2.5 KM</span>
                            </li>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/new_theme/ppsec-14jewar.png" alt="" class="project-section-14-icon"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">Jewar Airport</span>
                                </span>
                                <span class="project-section-14-distance">11 KM</span>
                            </li>
                            <li class="project-section-14-list-item">
                                <span class="project-section-14-icon-wrap"><img src="<?= $base_url ?>/images/new_theme/ppsec-14jewar.png" alt="" class="project-section-14-icon"></span>
                                <span class="project-section-14-name-wrap">
                                    <img src="<?= $base_url ?>/images/new_theme/ppscec-14location.svg" alt="" class="project-section-14-pin">
                                    <span class="project-section-14-name">IGI International Airport</span>
                                </span>
                                <span class="project-section-14-distance">40 KM</span>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="project-section-14-right">
                        <div class="project-section-14-map-wrap">
                            <iframe
                                class="project-section-14-map"
                                src="<?php
                                    if ($project_slug === 'gold-avenue') {
                                        echo 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.8020515009453!2d77.36738617616437!3d28.635694233935876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce55208a29989%3A0x34108dce06a6a1cd!2sSaya%20Gold%20Avenue!5e0!3m2!1sen!2sin!4v1758095695258!5m2!1sen!2sin';
                                    } elseif ($project_slug === 'saya-zion') {
                                        echo 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.6205280240047!2d77.42118427549995!3d28.611158775676497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cef8c70b095fb%3A0xccba793af9fef9b8!2sSaya%20Zion!5e0!3m2!1sen!2sin!4v1758096449057!5m2!1sen!2sin';
                                    } elseif ($project_slug === 'saya-zenith') {
                                        echo 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.737482466996!2d77.37931195!3d28.637629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cefff913bff37%3A0xeb98211d861ae375!2sSaya%20Zenith%2C%20Indirapuram%2C%20Ghaziabad%2C%20Uttar%20Pradesh%20201014!5e0!3m2!1sen!2sin!4v1758097700427!5m2!1sen!2sin';
                                    } elseif ($project_slug === 'saya-desire-residency') {
                                        echo 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.4579680263423!2d77.37952597550137!3d28.646003075657315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf006e8f6298f%3A0xb1daeee376071162!2sDesire%20Residency!5e0!3m2!1sen!2sin!4v1758097967005!5m2!1sen!2sin';
                                    } elseif ($project_slug === 'saya-biztop') {
                                        echo 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.9035015745903!2d77.4509729!3d28.6026716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cee63cec82b53%3A0xce8c253846aa1a81!2sSaya%20South%20X!5e0!3m2!1sen!2sin!4v1757322920419!5m2!1sen!2sin';
                                    } elseif ($project_slug === 'saya-piazza') {
                                        echo 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224126.88431518854!2d77.20546152785643!3d28.630284565217824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce7f95ffd4779%3A0xfa4cc6134c0f00c!2sSaya%20Piazza!5e0!3m2!1sen!2sin!4v1758094405660!5m2!1sen!2sin';
                                    } elseif (isset($project_display_name) && $project_display_name === 'Saya South X') {
                                        echo 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.910114812492!2d77.44640678745125!3d28.602473222754025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cee63cec82b53%3A0xce8c253846aa1a81!2sSaya%20South%20X!5e0!3m2!1sen!2sin!4v1716028532318!5m2!1sen!2sin';
                                    } else {
                                        echo 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3505.1324318681337!2d77.375!3d28.535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDMyJz06LjAiTiA3N8KwMjInMzAuMCJF!5e0!3m2!1sen!2sin!4v1700000000000';
                                    }
                                ?>"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                                aria-label="<?= htmlspecialchars($project_display_name) ?> - Location Map"
                            ></iframe>
                        </div>
                    </div>
                </div>
            </section>

            <!--section15 - Download Brochure: centered module, upar-niche padding-->
            <section class="project-section-15" id="brochure">
                <div class="project-section-15-inner">
                    <div class="project-section-15-card">
                        <div class="project-section-15-text-wrap">
                            <div class="project-section-15-accent"></div>
                            <div class="project-section-15-content">
                            <h2 class="project-section-15-title">Download Brochure</h2>
                            <p class="project-section-15-subtitle">Wish To Get A Call Back From Our Team? Fill In Your Details.</p>
                            <form class="project-section-15-form" action="#" method="post">
                                <input type="text" name="name" class="project-section-15-input" placeholder="Name *" required aria-label="Name">
                                <input type="tel" name="mobile" class="project-section-15-input" placeholder="Mobile *" required aria-label="Mobile">
                                <input type="email" name="email" class="project-section-15-input" placeholder="Email *" required aria-label="Email">
                                <button type="submit" class="project-section-15-submit">
                                    <span class="project-section-15-submit-text">Submit</span>
                                    <div class="project-section-15-submit-arrow">
                                        <img src="<?= $base_url ?>/images/new_theme/icons/button_hover_icon.svg" alt="">
                                    </div>
                                </button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--section16 - Contact Us (same as home, styling alag project-section-16)-->
            <section class="project-section-16" id="project-contact">
                <div class="project-section-16-contact">
                    <div class="project-section-16-content">
                        <h2 class="project-section-16-title">Got a project? <b>Let's talk!</b></h2>
                        <p class="project-section-16-desc">We value your privacy and promise to send you only the most important and interesting<br>information.</p>
                    </div>
                    <div class="project-section-16-form-wrap">
                        <form action="" class="project-section-16-form" method="post">
                            <h2 class="project-section-16-form-title">Request a Call Back</h2>
                            <div class="project-section-16-form-row">
                                <input type="text" name="name" placeholder="Name *" required aria-label="Name">
                                <input type="tel" name="phone" placeholder="Phone No *" required aria-label="Phone">
                                <input type="email" name="email" placeholder="Email *" required aria-label="Email">
                            </div>
                            <div class="project-section-16-form-row">
                                <textarea name="message" placeholder="Message" rows="4" aria-label="Message"></textarea>
                            </div>
                            <button type="submit" class="project-section-16-form-submit">Get a Call Back</button>
                        </form>
                    </div>
                </div>
            </section>
    </main>

    <?php include_once('new_footer.php') ?>

    <!-- Enquiry Now - fixed bottom, left of scroll-to-hero -->
    <a href="<?= $base_url ?>/new_media-page.php?page=contact" class="section-5-enquire-btn">ENQUIRE NOW</a>

    <!-- Scroll to Hero Button - shows when section 3 is in view -->
    <button type="button" id="scroll-to-hero-btn" class="scroll-to-hero-btn" aria-label="Scroll to hero section" title="Back to top">
        <svg class="scroll-to-hero-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="18 15 12 9 6 15"></polyline>
        </svg>
    </button>

    <style>
        /* Scroll to Hero Button - orange square, rounded, white chevron */
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
        .scroll-to-hero-btn:hover {
            background: #e57a35;
        }
        .scroll-to-hero-btn:focus {
            outline: 2px solid #F6883E;
            outline-offset: 2px;
        }
        .scroll-to-hero-icon {
            width: 24px;
            height: 24px;
            color: #fff;
        }
        /* Tablet */
        @media (max-width: 1024px) {
            .scroll-to-hero-btn {
                bottom: 20px;
                right: 20px;
                width: 44px;
                height: 44px;
                border-radius: 3px;
            }
            .scroll-to-hero-icon {
                width: 22px;
                height: 22px;
            }
        }
        /* Mobile */
        @media (max-width: 640px) {
            .scroll-to-hero-btn {
                bottom: 24px;
                right: 43px;
                width: 42px;
                height: 38px;
                border-radius: 3px;
            }
            .scroll-to-hero-icon {
                width: 20px;
                height: 20px;
            }
        }
    </style>

    <?php include_once('inc-script.php') ?>
    <script data-base-url="<?= $base_url ?>/" src="js/new-home.js"></script>
    <!-- Same slide menu as home: hamburger opens .hover-header-container -->
    <script>
    /* Project video - play button */
    (function() {
        var video = document.getElementById('projectVideo');
        var playBtn = document.getElementById('projectVideoPlayBtn');
        if (video && playBtn) {
            playBtn.addEventListener('click', function() {
                if (video.paused) {
                    video.play();
                    playBtn.classList.add('is-playing');
                } else {
                    video.pause();
                    playBtn.classList.remove('is-playing');
                }
            });
            video.addEventListener('click', function() {
                if (!video.paused) {
                    video.pause();
                    playBtn.classList.remove('is-playing');
                }
            });
            video.addEventListener('pause', function() { playBtn.classList.remove('is-playing'); });
            video.addEventListener('ended', function() { playBtn.classList.remove('is-playing'); });
        }
    })();

    /* Project video - pause button (show when playing, hide when paused) */
    (function() {
        var video = document.getElementById('projectVideo');
        var playBtn = document.getElementById('projectVideoPlayBtn');
        var pauseBtn = document.getElementById('projectVideoPauseBtn');
        var overlay = document.querySelector('.project-video-overlay');
        if (!video || !playBtn || !pauseBtn) return;
        function showPlayHidePause() {
            playBtn.style.display = '';
            pauseBtn.style.display = 'none';
            if (overlay) overlay.style.display = '';
        }
        function hidePlayShowPause() {
            playBtn.style.display = 'none';
            pauseBtn.style.display = 'flex';
            if (overlay) overlay.style.display = 'none';
        }
        video.addEventListener('play', hidePlayShowPause);
        video.addEventListener('pause', showPlayHidePause);
        video.addEventListener('ended', showPlayHidePause);
        pauseBtn.addEventListener('click', function() { video.pause(); });
    })();

    (function() {
        function initProjectPageSlideMenu() {
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

            if (!mobileMenuToggle || !hoverHeaderContainer) return;

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
                if (!isMenuOpen) return;
                if (menuTimeline) menuTimeline.kill();
                var isM = window.innerWidth < 768;
                var isT = window.innerWidth >= 768 && window.innerWidth < 992;
                var navItemsX = window.innerWidth >= 768 ? 50 : window.innerWidth >= 480 ? 30 : 20;
                var closeTimeline = gsap.timeline({
                    defaults: { ease: 'power2.in' },
                    onComplete: function() {
                        hoverHeaderContainer.classList.remove('active');
                        body.classList.remove('menu-open');
                        body.style.overflow = '';
                        if (mobileMenuToggle) mobileMenuToggle.classList.remove('active');
                        isMenuOpen = false;
                        menuTimeline = null;
                        gsap.set(hoverHeaderContainer, { x: '100%', opacity: 0, visibility: 'hidden' });
                        gsap.set(hoverHeaderContent, { x: 0, opacity: 1 });
                        gsap.set([].slice.call(headerNavItemsMain).concat([].slice.call(headerNavItemsSecondary)), { x: isM ? 30 : isT ? 40 : 50, opacity: 0 });
                        gsap.set(headerSocialIcons, { y: 30, opacity: 0, scale: 0.8 });
                        if (headerSocialLinkLeft) gsap.set(headerSocialLinkLeft, { x: -30 });
                    }
                });
                closeTimeline.to(headerSocialIcons, { y: 30, opacity: 0, scale: 0.8, duration: 0.25, stagger: 0.02, ease: 'power2.in' });
                if (headerSocialLinkLeft) closeTimeline.to(headerSocialLinkLeft, { x: -30, duration: 0.25, ease: 'power2.in' }, '-=0.15');
                closeTimeline.to([].slice.call(headerNavItemsSecondary).concat([].slice.call(headerNavItemsMain)), { x: navItemsX, opacity: 0, duration: 0.3, stagger: 0.02, ease: 'power2.in' }, '-=0.1');
                closeTimeline.to(hoverHeaderContainer, { x: '100%', opacity: 0, visibility: 'hidden', duration: 0.8, ease: 'power3.in' }, '-=0.2');
            }

            mobileMenuToggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                if (isMenuOpen) closeMenu();
                else openMenu();
            });
            if (hoverHeaderClose) {
                hoverHeaderClose.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    closeMenu();
                });
                hoverHeaderClose.addEventListener('touchstart', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    closeMenu();
                }, { passive: false });
            }
            hoverHeaderContainer.addEventListener('click', function(e) {
                if (e.target === hoverHeaderContainer && isMenuOpen) closeMenu();
            });
            if (hoverHeaderContent) {
                hoverHeaderContent.addEventListener('click', function(e) { e.stopPropagation(); });
            }
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && isMenuOpen) closeMenu();
            });
            var resizeTimer;
            window.addEventListener('resize', function() {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(function() {
                    if (!isMenuOpen) {
                        var m = window.innerWidth < 768, t2 = window.innerWidth >= 768 && window.innerWidth < 992;
                        gsap.set(hoverHeaderContainer, { x: '100%', opacity: 0 });
                        gsap.set(hoverHeaderContent, { x: 0, opacity: 1 });
                        gsap.set([].slice.call(headerNavItemsMain).concat([].slice.call(headerNavItemsSecondary)), { x: m ? 30 : t2 ? 40 : 50, opacity: 0 });
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
                mobileMenuToggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    hoverHeaderContainer.classList.toggle('active');
                    body.classList.toggle('menu-open');
                    body.style.overflow = hoverHeaderContainer.classList.contains('active') ? 'hidden' : '';
                });
            }
            if (hoverHeaderClose && hoverHeaderContainer) {
                hoverHeaderClose.addEventListener('click', function(e) {
                    e.preventDefault();
                    hoverHeaderContainer.classList.remove('active');
                    body.classList.remove('menu-open');
                    body.style.overflow = '';
                    if (mobileMenuToggle) mobileMenuToggle.classList.remove('active');
                });
            }
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', function() {
                setTimeout(initProjectPageSlideMenu, 100);
            });
        } else {
            setTimeout(initProjectPageSlideMenu, 100);
        }
    })();

    /* Section 13 - FAQs accordion: behaviour like sample (one open at a time, click open = close) */
    (function() {
        function initSection13Accordion() {
            var items = document.querySelectorAll('#project-faqs [data-accordion-item]');
            if (!items.length) return;

            items.forEach(function(item) {
                var trigger = item.querySelector('.project-section-13-accordion-trigger');
                var panel = item.querySelector('.project-section-13-accordion-panel');
                var iconPlus = item.querySelector('.project-section-13-accordion-icon-plus');
                var iconMinus = item.querySelector('.project-section-13-accordion-icon-minus');
                if (!trigger || !panel || !iconPlus || !iconMinus) return;

                // Ensure initial state respects existing "open" class in markup
                var initiallyOpen = item.classList.contains('project-section-13-accordion-item-open');
                if (initiallyOpen) {
                    panel.hidden = false;
                    panel.classList.add('project-section-13-accordion-panel-open');
                    panel.style.maxHeight = panel.scrollHeight + 'px';
                    trigger.setAttribute('aria-expanded', 'true');
                    iconPlus.hidden = true;
                    iconMinus.hidden = false;
                } else {
                    panel.hidden = true;
                    panel.classList.remove('project-section-13-accordion-panel-open');
                    panel.style.maxHeight = 0;
                    trigger.setAttribute('aria-expanded', 'false');
                    iconPlus.hidden = false;
                    iconMinus.hidden = true;
                }

                trigger.addEventListener('click', function() {
                    var isOpen = item.classList.contains('project-section-13-accordion-item-open');

                    // Close all items (same as sample: $('.container').removeAttr('id'); $('.desc').slideUp(); etc.)
                    items.forEach(function(other) {
                        var p = other.querySelector('.project-section-13-accordion-panel');
                        var t = other.querySelector('.project-section-13-accordion-trigger');
                        var plus = other.querySelector('.project-section-13-accordion-icon-plus');
                        var minus = other.querySelector('.project-section-13-accordion-icon-minus');

                        other.classList.remove('project-section-13-accordion-item-open');
                        if (p) {
                            p.classList.remove('project-section-13-accordion-panel-open');
                            p.style.maxHeight = 0;
                            p.hidden = true;
                        }
                        if (t) t.setAttribute('aria-expanded', 'false');
                        if (plus) plus.hidden = false;
                        if (minus) minus.hidden = true;
                    });

                    // If clicked item was NOT open, open it (else: all stay closed)
                    if (!isOpen) {
                        item.classList.add('project-section-13-accordion-item-open');
                        panel.classList.add('project-section-13-accordion-panel-open');
                        panel.hidden = false;
                        // Auto height like jQuery slideDown (no 300px cut-off)
                        panel.style.maxHeight = panel.scrollHeight + 'px';
                        trigger.setAttribute('aria-expanded', 'true');
                        iconPlus.hidden = true;
                        iconMinus.hidden = false;
                    }
                });
            });
        }
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initSection13Accordion);
        } else {
            initSection13Accordion();
        }
    })();

    /* Sticky nav: scroll par niche wala header upar aa kar main header ke upar dikhe, sirf yahi */
    (function() {
        var nav = document.getElementById('projectDetailNav');
        var wrapper = document.getElementById('projectDetailNavWrapper');
        if (!nav || !wrapper) return;
        function updateStuck() {
            var rect = wrapper.getBoundingClientRect();
            if (rect.top <= 0) {
                nav.classList.add('is-stuck');
                wrapper.style.minHeight = nav.offsetHeight + 'px';
            } else {
                nav.classList.remove('is-stuck');
                wrapper.style.minHeight = '';
            }
        }
        window.addEventListener('scroll', updateStuck, { passive: true });
        window.addEventListener('resize', updateStuck);
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', updateStuck);
        } else {
            updateStuck();
        }
    })();

    /* Section 11 - Unit 1 / Unit 2 tab: right section change */
    (function() {
        var tabs = document.querySelectorAll('.project-section-11-unit-tab');
        var panels = document.querySelectorAll('.project-section-11-unit-panel');
        if (!tabs.length || !panels.length) return;
        tabs.forEach(function(tab) {
            tab.addEventListener('click', function() {
                var unit = tab.getAttribute('data-unit');
                tabs.forEach(function(t) { t.classList.remove('active'); });
                tab.classList.add('active');
                panels.forEach(function(p) {
                    if (p.getAttribute('data-unit') === unit) {
                        p.removeAttribute('hidden');
                    } else {
                        p.setAttribute('hidden', '');
                    }
                });
            });
        });
    })();

    /* Section 7 - Marquee with left/right arrow logic */
    (function() {
        var track = document.getElementById('projectSection7Track');
        var prevBtn = document.getElementById('projectSection7Prev');
        var nextBtn = document.getElementById('projectSection7Next');
        if (!track || !prevBtn || !nextBtn) return;

        var position = 0;
        var speed = 0.8;
        var halfWidth = 0;
        var nudgeStep = 280;
        var rafId = null;
        var isPaused = false;

        function getHalfWidth() {
            return track.scrollWidth / 2;
        }

        function loop() {
            if (!isPaused) {
                position += speed;
                if (halfWidth > 0 && position >= halfWidth) position -= halfWidth;
                if (halfWidth > 0 && position < 0) position += halfWidth;
                track.style.transform = 'translateX(-' + position + 'px)';
            }
            rafId = requestAnimationFrame(loop);
        }

        function init() {
            halfWidth = getHalfWidth();
            if (rafId) cancelAnimationFrame(rafId);
            loop();
        }

        prevBtn.addEventListener('click', function() {
            position -= nudgeStep;
            if (halfWidth > 0 && position < 0) position += halfWidth;
        });
        nextBtn.addEventListener('click', function() {
            position += nudgeStep;
            if (halfWidth > 0 && position >= halfWidth) position -= halfWidth;
        });

        var marquee = track.closest('.project-section-7-marquee');
        if (marquee) {
            marquee.addEventListener('mouseenter', function() { isPaused = true; });
            marquee.addEventListener('mouseleave', function() { isPaused = false; });
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', function() { setTimeout(init, 100); });
        } else {
            setTimeout(init, 100);
        }
        window.addEventListener('resize', function() { halfWidth = getHalfWidth(); });
    })();

    /* Section 8 - Amenities accordion: behaviour like FAQs (one open, click open = close) */
    (function() {
        var list = document.querySelector('.project-section-8-list');
        if (!list) return;
        var items = list.querySelectorAll('.project-section-8-item');
        var openClass = 'project-section-8-item-open';

        items.forEach(function(item) {
            var btn = item.querySelector('.project-section-8-item-head');
            var panel = item.querySelector('.project-section-8-item-panel');
            if (!btn || !panel) return;

            // Initial state: if any item already has open class, respect it
            if (item.classList.contains(openClass)) {
                btn.setAttribute('aria-expanded', 'true');
                panel.style.maxHeight = panel.scrollHeight + 'px';
            } else {
                btn.setAttribute('aria-expanded', 'false');
                panel.style.maxHeight = 0;
            }

            btn.addEventListener('click', function() {
                var isOpen = item.classList.contains(openClass);

                // Close all items (same overall logic as sample accordion)
                items.forEach(function(other) {
                    var otherBtn = other.querySelector('.project-section-8-item-head');
                    var otherPanel = other.querySelector('.project-section-8-item-panel');
                    other.classList.remove(openClass);
                    if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
                    if (otherPanel) otherPanel.style.maxHeight = 0;
                });

                // If clicked item was NOT open, open it (else: all stay closed)
                if (!isOpen) {
                    item.classList.add(openClass);
                    btn.setAttribute('aria-expanded', 'true');
                    panel.style.maxHeight = panel.scrollHeight + 'px';
                    // Saya South X: update right section image when accordion item is opened (with fade transition)
                    var amenityImg = item.getAttribute('data-amenity-image');
                    if (amenityImg) {
                        var rightImg = document.querySelector('.project-section-8-right img');
                        if (rightImg) {
                            rightImg.style.opacity = '0';
                            var duration = 300;
                            setTimeout(function() {
                                rightImg.src = amenityImg;
                                if (rightImg.complete) {
                                    rightImg.style.opacity = '1';
                                } else {
                                    rightImg.onload = function() { rightImg.style.opacity = '1'; };
                                }
                            }, duration);
                        }
                    }
                }
            });
        });
    })();

    /* Section 4 - Features cards: no sliding, no buttons; layout only so design stays same */
    (function() {
        var viewport = document.querySelector('.project-features-cards-viewport');
        var track = document.querySelector('.project-features-cards-track');
        var cards = track ? track.querySelectorAll('.project-features-card') : [];
        if (!viewport || !track || !cards.length) return;

        var currentIndex = 0;

        function getGap() {
            var w = window.innerWidth;
            if (w >= 769) return 32;
            if (w >= 518) return 20;
            return 16;
        }

        function getCardsPerView() {
            var w = window.innerWidth;
            if (w >= 769) return 2;
            return 1;
        }

        function updateLayout() {
            var cardsPerView = getCardsPerView();
            var gap = getGap();
            var viewportWidth = viewport.offsetWidth;
            var cardWidth = (viewportWidth - gap * (cardsPerView - 1)) / cardsPerView;
            for (var i = 0; i < cards.length; i++) cards[i].style.width = cardWidth + 'px';
            var trackWidth = cardWidth * cards.length + gap * (cards.length - 1);
            track.style.width = trackWidth + 'px';
            track.style.gap = gap + 'px';
            track.style.transform = 'translateX(0)';
        }

        var resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(updateLayout, 80);
        });
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', function() { setTimeout(updateLayout, 50); });
        } else {
            setTimeout(updateLayout, 50);
        }
    })();

    /* Section 10 - Explore The Specifications slider (3/2/1 cards, 1 card slide per click) */
    (function() {
        var wrap = document.querySelector('.project-section-10-slider-wrap');
        var track = document.querySelector('.project-section-10-track');
        var cards = track ? track.querySelectorAll('.project-section-10-card') : [];
        var prevBtn = document.querySelector('.project-section-10-prev');
        var nextBtn = document.querySelector('.project-section-10-next');
        if (!wrap || !track || !cards.length || !prevBtn || !nextBtn) return;

        var currentIndex = 0;

        function getCardsPerView() {
            var w = window.innerWidth;
            if (w >= 769) return 3;
            if (w >= 519) return 2;
            return 1;
        }

        function getGap() {
            var w = window.innerWidth;
            if (w >= 769) return 24;
            if (w >= 519) return 16;
            return 12;
        }

        function updateSlider() {
            var cardsPerView = getCardsPerView();
            var gap = getGap();
            var wrapWidth = wrap.offsetWidth;
            var rawCardWidth = (wrapWidth - gap * (cardsPerView - 1)) / cardsPerView;
            var cardWidth = cardsPerView === 3 ? rawCardWidth : Math.min(rawCardWidth, cardsPerView === 1 ? 360 : 400);
            var numCards = cards.length;
            for (var i = 0; i < numCards; i++) cards[i].style.width = cardWidth + 'px';
            var trackWidth = cardWidth * numCards + gap * (numCards - 1);
            track.style.gap = gap + 'px';
            track.style.width = trackWidth + 'px';
            var maxIndex = Math.max(0, numCards - cardsPerView);
            currentIndex = Math.min(currentIndex, maxIndex);
            var offset = currentIndex * (cardWidth + gap);
            track.style.transform = 'translateX(-' + offset + 'px)';
        }

        prevBtn.addEventListener('click', function() {
            currentIndex = Math.max(0, currentIndex - 1);
            updateSlider();
        });
        nextBtn.addEventListener('click', function() {
            var cardsPerView = getCardsPerView();
            var maxIndex = Math.max(0, cards.length - cardsPerView);
            currentIndex = Math.min(currentIndex + 1, maxIndex);
            updateSlider();
        });
        window.addEventListener('resize', updateSlider);

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', function() { setTimeout(updateSlider, 50); });
        } else {
            setTimeout(updateSlider, 50);
        }
    })();

    /* Gold Avenue - Welcome slider: seamless infinite loop */
    (function() {
        var wrap = document.getElementById('projectGoldWelcomeWrap');
        var track = document.getElementById('projectGoldWelcomeTrack');
        var prevBtn = document.getElementById('projectGoldWelcomePrev');
        var nextBtn = document.getElementById('projectGoldWelcomeNext');
        if (!wrap || !track || !prevBtn || !nextBtn) return;

        var originalSlides = Array.prototype.slice.call(track.querySelectorAll('.project-gold-welcome-slide'));
        var totalSlides = originalSlides.length;
        if (totalSlides === 0) return;

        var cloneCount = Math.min(totalSlides, 3);
        for (var i = 0; i < cloneCount; i++) {
            track.appendChild(originalSlides[i].cloneNode(true));
        }
        for (var j = totalSlides - cloneCount; j < totalSlides; j++) {
            track.insertBefore(originalSlides[j].cloneNode(true), track.firstChild);
        }

        var currentIndex = cloneCount;
        var isAnimating = false;

        function getGap() {
            var gapValue = window.getComputedStyle(track).gap || '25px';
            var parsed = parseFloat(gapValue);
            return Number.isFinite(parsed) ? parsed : 25;
        }

        function getSlideWidth() {
            var currentSlides = track.querySelectorAll('.project-gold-welcome-slide');
            return currentSlides[0] ? currentSlides[0].offsetWidth : 0;
        }

        function updateSlide(animate) {
            var slideWidth = getSlideWidth();
            var gap = getGap();
            var offset = currentIndex * (slideWidth + gap);
            track.style.transition = animate ? 'transform 0.5s ease' : 'none';
            track.style.transform = 'translateX(-' + offset + 'px)';
        }

        nextBtn.addEventListener('click', function() {
            if (isAnimating) return;
            isAnimating = true;
            currentIndex += 1;
            updateSlide(true);
        });

        prevBtn.addEventListener('click', function() {
            if (isAnimating) return;
            isAnimating = true;
            currentIndex -= 1;
            updateSlide(true);
        });

        track.addEventListener('transitionend', function() {
            if (currentIndex >= totalSlides + cloneCount) {
                currentIndex = cloneCount + (currentIndex - (totalSlides + cloneCount));
                updateSlide(false);
            } else if (currentIndex < cloneCount) {
                currentIndex = totalSlides + currentIndex;
                updateSlide(false);
            }
            isAnimating = false;
        });

        window.addEventListener('resize', function() {
            updateSlide(false);
        });

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', function() { setTimeout(function() { updateSlide(false); }, 50); });
        } else {
            setTimeout(function() { updateSlide(false); }, 50);
        }
    })();

    /* Section 8 Gold Avenue - Amenities image slider (one slide per click, all images show) */
    (function() {
        var track = document.getElementById('projectSection8GoldSliderTrack');
        var prevBtn = document.getElementById('projectSection8GoldSliderPrev');
        var nextBtn = document.getElementById('projectSection8GoldSliderNext');
        if (!track || !prevBtn || !nextBtn) return;
        var slides = track.querySelectorAll('.project-section-8-gold-slide');
        var total = slides.length;
        if (total === 0) return;
        var currentIndex = 0;
        var slidePct = 100 / total;
        track.style.width = (total * 100) + '%';
        for (var i = 0; i < slides.length; i++) {
            slides[i].style.flex = '0 0 ' + slidePct + '%';
        }
        function update() {
            var offset = currentIndex * slidePct;
            track.style.transform = 'translateX(-' + offset + '%)';
        }
        prevBtn.addEventListener('click', function() {
            currentIndex = Math.max(0, currentIndex - 1);
            update();
        });
        nextBtn.addEventListener('click', function() {
            currentIndex = Math.min(total - 1, currentIndex + 1);
            update();
        });
        update();
    })();

    /* Scroll to Hero button - show from section 3 onwards (same as home); 518px se chhoti screen par bhi third section ke baad hi show */
    (function() {
        var btn = document.getElementById("scroll-to-hero-btn");
        var section3Desktop = document.querySelector(".project-detail-nav-wrapper");
        var section3Mobile = document.querySelector(".project-overview"); /* 518px par: third section ke baad = Overview section in view */
        var heroSection = document.querySelector(".project-hero");
        if (!btn || !heroSection) return;

        function getTriggerSection() {
            return (window.innerWidth <= 518 && section3Mobile) ? section3Mobile : section3Desktop;
        }

        function updateScrollToHeroBtn() {
            var section3 = getTriggerSection();
            if (!section3) return;
            var rect = section3.getBoundingClientRect();
            if (rect.top < window.innerHeight) {
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
            if (typeof lenis !== "undefined" && lenis) {
                lenis.scrollTo(heroSection, {
                    offset: 0,
                    duration: 0.75,
                    easing: function(t) { return 1 - Math.pow(1 - t, 3); }
                });
            } else {
                heroSection.scrollIntoView({ behavior: "smooth", block: "start" });
            }
        });
    })();

    /* GSAP ScrollTrigger animations - Gold Avenue & SouthX sections (no changes to existing code) */
    (function() {
        if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;
        gsap.registerPlugin(ScrollTrigger);

        function initGsapAnimations() {
        var staggerShort = 0.08;
        var staggerMed = 0.1;
        var duration = 0.6;
        var ease = 'power2.out';
        var startVal = 'top 88%';

        /* Hero section */
        gsap.from('.project-hero-title', { y: 40, opacity: 0, duration: 0.9, ease: 'power2.out', delay: 0.2 });
        gsap.from('.project-hero-category', { y: 30, opacity: 0, duration: 0.7, ease: 'power2.out', delay: 0.35 });
        gsap.from('.project-hero-desc', { y: 30, opacity: 0, duration: 0.7, ease: 'power2.out', delay: 0.5 });
        gsap.from('.project-hero-readmore', { y: 20, opacity: 0, duration: 0.6, ease: 'power2.out', delay: 0.7 });
        gsap.from('.project-hero-bottom-bar', { scaleX: 0, transformOrigin: 'left', duration: 1, ease: 'power2.out', delay: 0.9 });

        /* Section 2 - full-width image */
        gsap.from('.project-section-2-img', {
            scrollTrigger: { trigger: '.project-section-2-img', start: startVal },
            y: 50, opacity: 0, duration: duration, ease: ease
        });

        /* Gold Avenue - header bar (if present) */
        gsap.from('.project-gold-header-bar', {
            scrollTrigger: { trigger: '.project-gold-header-bar', start: startVal },
            y: 30, opacity: 0, duration: duration, ease: ease
        });

        /* Gold Avenue - About section */
        gsap.from('.project-gold-about-left .project-gold-about-label', {
            scrollTrigger: { trigger: '.project-gold-about', start: startVal },
            y: 25, opacity: 0, duration: duration, ease: ease
        });
        gsap.from('.project-gold-about-left .project-gold-about-title', {
            scrollTrigger: { trigger: '.project-gold-about', start: startVal },
            y: 30, opacity: 0, duration: duration, ease: ease, delay: 0.1
        });
        gsap.from('.project-gold-about-left .project-gold-about-desc', {
            scrollTrigger: { trigger: '.project-gold-about', start: startVal },
            y: 25, opacity: 0, duration: duration, ease: ease, delay: 0.2
        });
        gsap.from('.project-gold-about-right .project-gold-about-img', {
            scrollTrigger: { trigger: '.project-gold-about', start: startVal },
            x: 40, opacity: 0, duration: 0.8, ease: ease, delay: 0.15
        });

        /* Overview section */
        gsap.from('.project-overview-left > *', {
            scrollTrigger: { trigger: '.project-overview', start: startVal },
            y: 35, opacity: 0, duration: duration, ease: ease, stagger: staggerMed
        });
        gsap.from('.project-overview-right .project-overview-card', {
            scrollTrigger: { trigger: '.project-overview', start: startVal },
            x: 30, opacity: 0, duration: duration, ease: ease, delay: 0.2
        });

        /* Gold Avenue - Elevate section */
        gsap.from('.project-gold-elevate .project-gold-elevate-title', {
            scrollTrigger: { trigger: '.project-gold-elevate', start: startVal },
            y: 35, opacity: 0, duration: duration, ease: ease
        });
        gsap.from('.project-gold-elevate .project-gold-elevate-desc', {
            scrollTrigger: { trigger: '.project-gold-elevate', start: startVal },
            y: 25, opacity: 0, duration: duration, ease: ease, delay: 0.1
        });
        gsap.from('.project-gold-elevate .project-gold-elevate-btn', {
            scrollTrigger: { trigger: '.project-gold-elevate', start: startVal },
            y: 20, opacity: 0, duration: duration, ease: ease, delay: 0.2
        });

        /* SouthX - Features (12,000+ Sq.M cards) */
        gsap.from('.project-features-left', {
            scrollTrigger: { trigger: '.project-overview-features', start: startVal },
            x: -40, opacity: 0, duration: duration, ease: ease
        });
        gsap.from('.project-features-card', {
            scrollTrigger: { trigger: '.project-overview-features', start: startVal },
            y: 40, opacity: 0, duration: duration, ease: ease, stagger: staggerShort, delay: 0.15
        });

        /* SouthX - Section 5 (Uber Luxury) */
        gsap.from('.project-section-5 .project-section-5-inner > *', {
            scrollTrigger: { trigger: '.project-section-5', start: startVal },
            y: 35, opacity: 0, duration: duration, ease: ease, stagger: staggerMed
        });

        /* Video section */
        gsap.from('.project-video-section .project-video-wrap', {
            scrollTrigger: { trigger: '.project-video-section', start: startVal },
            scale: 0.98, opacity: 0, duration: 0.8, ease: ease
        });

        /* SouthX - Section 7 (Big Brands marquee) */
        gsap.from('.project-section-7-title', {
            scrollTrigger: { trigger: '.project-section-7', start: startVal },
            y: 30, opacity: 0, duration: duration, ease: ease
        });
        gsap.from('.project-section-7-card', {
            scrollTrigger: { trigger: '.project-section-7', start: startVal },
            y: 40, opacity: 0, duration: duration, ease: ease, stagger: 0.06, delay: 0.1
        });

        /* Section 8 - Amenities header */
        gsap.from('.project-section-8-header > *', {
            scrollTrigger: { trigger: '.project-section-8-header', start: startVal },
            y: 30, opacity: 0, duration: duration, ease: ease, stagger: staggerShort
        });
        /* Gold Avenue - amenities icons */
        gsap.from('.project-section-8-gold-icon-item', {
            scrollTrigger: { trigger: '.project-section-8-gold-icons', start: startVal },
            y: 35, opacity: 0, duration: duration, ease: ease, stagger: 0.05
        });
        gsap.from('.project-section-8-gold-slider-wrap', {
            scrollTrigger: { trigger: '.project-section-8-gold-slider-wrap', start: startVal },
            x: 50, opacity: 0, duration: 0.8, ease: ease, delay: 0.2
        });
        /* SouthX - accordion + image */
        gsap.from('.project-section-8-item', {
            scrollTrigger: { trigger: '.project-section-8-left', start: startVal },
            x: -30, opacity: 0, duration: duration, ease: ease, stagger: staggerShort
        });
        gsap.from('.project-section-8-right img', {
            scrollTrigger: { trigger: '.project-section-8-right', start: startVal },
            x: 40, opacity: 0, duration: 0.8, ease: ease
        });

        /* SouthX - Section 9 image (second full-width img before section 10) */
        var sec10El = document.querySelector('.project-section-10');
        var sec9 = sec10El && sec10El.parentElement ? sec10El.parentElement.previousElementSibling : null;
        if (sec9 && sec9.querySelector) {
            var sec9Img = sec9.querySelector('img.project-section-2-img');
            if (sec9Img) {
                gsap.from(sec9Img, {
                    scrollTrigger: { trigger: sec9Img, start: startVal },
                    y: 50, duration: duration, ease: ease
                });
            }
        }

        /* SouthX - Section 10 (Specifications) */
        gsap.from('.project-section-10-title', {
            scrollTrigger: { trigger: '.project-section-10', start: startVal },
            y: 30, opacity: 0, duration: duration, ease: ease
        });
        gsap.from('.project-section-10-card', {
            scrollTrigger: { trigger: '.project-section-10-track', start: startVal },
            y: 40, opacity: 0, duration: duration, ease: ease, stagger: staggerShort
        });

        /* Section 11 - Master Plan */
        gsap.from('.project-section-11-title', {
            scrollTrigger: { trigger: '.project-section-11', start: startVal },
            y: 30, opacity: 0, duration: duration, ease: ease
        });
        gsap.from('.project-section-11-map-wrap', {
            scrollTrigger: { trigger: '.project-section-11-map-wrap', start: startVal },
            y: 40, opacity: 0, duration: duration, ease: ease
        });
        gsap.from('.project-section-11-floor-card', {
            scrollTrigger: { trigger: '.project-section-11-floor-cards', start: startVal },
            y: 35, opacity: 0, duration: duration, ease: ease, stagger: staggerMed
        });

        /* Gold Avenue - Welcome section */
        gsap.from('.project-gold-welcome-header .project-gold-welcome-text > *', {
            scrollTrigger: { trigger: '.project-gold-welcome', start: startVal },
            y: 30, opacity: 0, duration: duration, ease: ease, stagger: staggerShort
        });
        gsap.from('.project-gold-welcome-slider-wrap', {
            scrollTrigger: { trigger: '.project-gold-welcome-slider-wrap', start: startVal },
            y: 50, opacity: 0, duration: 0.8, ease: ease, delay: 0.15
        });

        /* SouthX - Gallery */
        gsap.from('.project-section-12-gallery-header > *', {
            scrollTrigger: { trigger: '.project-section-12-gallery', start: startVal },
            y: 30, opacity: 0, duration: duration, ease: ease, stagger: staggerShort
        });
        gsap.from('.project-section-12-gallery-top .project-section-12-gallery-item', {
            scrollTrigger: { trigger: '.project-section-12-gallery-top', start: startVal },
            y: 40, opacity: 0, duration: duration, ease: ease, stagger: 0.1
        });
        gsap.from('.project-section-12-gallery-bottom .project-section-12-gallery-item', {
            scrollTrigger: { trigger: '.project-section-12-gallery-bottom', start: startVal },
            scale: 0.95, opacity: 0, duration: duration, ease: ease, stagger: 0.08, delay: 0.1
        });

        /* FAQs */
        gsap.from('.project-section-13-title', {
            scrollTrigger: { trigger: '.project-section-13', start: startVal },
            y: 30, opacity: 0, duration: duration, ease: ease
        });
        gsap.from('.project-section-13-image-wrap', {
            scrollTrigger: { trigger: '.project-section-13', start: startVal },
            x: -40, opacity: 0, duration: 0.8, ease: ease, delay: 0.1
        });
        gsap.from('.project-section-13-accordion-item', {
            scrollTrigger: { trigger: '.project-section-13-accordion', start: startVal },
            x: 30, opacity: 0, duration: duration, ease: ease, stagger: staggerShort, delay: 0.1
        });

        /* Location */
        gsap.from('.project-section-14-title', {
            scrollTrigger: { trigger: '.project-section-14', start: startVal },
            y: 30, opacity: 0, duration: duration, ease: ease
        });
        gsap.from('.project-section-14-list-item', {
            scrollTrigger: { trigger: '.project-section-14-list', start: startVal },
            x: -25, opacity: 0, duration: duration, ease: ease, stagger: staggerShort
        });
        gsap.from('.project-section-14-map-wrap', {
            scrollTrigger: { trigger: '.project-section-14-map-wrap', start: startVal },
            x: 40, opacity: 0, duration: 0.8, ease: ease
        });

        /* Download Brochure */
        gsap.from('.project-section-15-card', {
            scrollTrigger: { trigger: '.project-section-15', start: startVal },
            y: 50, opacity: 0, duration: 0.8, ease: ease
        });

        /* Contact (section-10 same as home) */
        gsap.from('.section-10-content > *', {
            scrollTrigger: { trigger: '.section-10', start: startVal },
            y: 30, opacity: 0, duration: duration, ease: ease, stagger: staggerShort
        });
        gsap.from('.section-10-contact-us-form', {
            scrollTrigger: { trigger: '.section-10', start: startVal },
            x: 40, opacity: 0, duration: 0.8, ease: ease, delay: 0.2
        });
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initGsapAnimations);
        } else {
            initGsapAnimations();
        }
        window.addEventListener('load', function() {
            if (typeof ScrollTrigger !== 'undefined') ScrollTrigger.refresh();
        });
    })();

    /* Section 12 Gallery - Lightbox: click image opens popup with that image first, all images in slider + thumb strip */
    (function() {
        var gallery = document.querySelector('.project-section-12-gallery');
        var lightbox = document.getElementById('projectGalleryLightbox');
        var track = lightbox ? lightbox.querySelector('.project-gallery-lightbox-track') : null;
        var thumbsWrap = document.getElementById('projectGalleryLightboxThumbs');
        var backdrop = lightbox ? lightbox.querySelector('.project-gallery-lightbox-backdrop') : null;
        var closeBtn = lightbox ? lightbox.querySelector('.project-gallery-lightbox-close') : null;
        var prevBtn = lightbox ? lightbox.querySelector('.project-gallery-lightbox-prev') : null;
        var nextBtn = lightbox ? lightbox.querySelector('.project-gallery-lightbox-next') : null;
        if (!gallery || !lightbox || !track) return;

        var images = gallery.querySelectorAll('.project-section-12-gallery-img');
        var total = images.length;
        var currentIndex = 0;
        var built = false;

        function buildSlides() {
            if (built) return;
            track.innerHTML = '';
            var slidePct = total > 0 ? (100 / total) : 100;
            for (var i = 0; i < images.length; i++) {
                var slide = document.createElement('div');
                slide.className = 'project-gallery-lightbox-slide';
                slide.style.flex = '0 0 ' + slidePct + '%';
                var img = document.createElement('img');
                img.src = images[i].src;
                img.alt = images[i].alt || '';
                img.className = 'project-gallery-lightbox-slide-img';
                slide.appendChild(img);
                track.appendChild(slide);
            }
            track.style.width = (total * 100) + '%';
            if (thumbsWrap) {
                thumbsWrap.innerHTML = '';
                for (var k = 0; k < images.length; k++) {
                    var thumb = document.createElement('button');
                    thumb.type = 'button';
                    thumb.className = 'project-gallery-lightbox-thumb' + (k === 0 ? ' is-active' : '');
                    thumb.setAttribute('data-index', k);
                    var thumbImg = document.createElement('img');
                    thumbImg.src = images[k].src;
                    thumbImg.alt = '';
                    thumb.appendChild(thumbImg);
                    thumbsWrap.appendChild(thumb);
                }
            }
            built = true;
        }

        function updateActiveThumb() {
            if (!thumbsWrap) return;
            var thumbs = thumbsWrap.querySelectorAll('.project-gallery-lightbox-thumb');
            for (var t = 0; t < thumbs.length; t++) {
                thumbs[t].classList.toggle('is-active', t === currentIndex);
            }
        }

        function updateTransform() {
            if (total <= 0) return;
            var offsetPct = (currentIndex / total) * 100;
            track.style.transform = 'translateX(-' + offsetPct + '%)';
            updateActiveThumb();
        }

        var scrollPosition = 0;
        function open(index) {
            buildSlides();
            currentIndex = Math.max(0, Math.min(index, total - 1));
            updateTransform();
            scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
            document.documentElement.classList.add('gallery-lightbox-open');
            document.body.classList.add('gallery-lightbox-open');
            document.body.style.overflow = 'hidden';
            document.body.style.position = 'fixed';
            document.body.style.top = '-' + scrollPosition + 'px';
            document.body.style.left = '0';
            document.body.style.right = '0';
            lightbox.classList.add('is-open');
            lightbox.setAttribute('aria-hidden', 'false');
        }

        function close() {
            lightbox.classList.remove('is-open');
            lightbox.setAttribute('aria-hidden', 'true');
            document.documentElement.classList.remove('gallery-lightbox-open');
            document.body.classList.remove('gallery-lightbox-open');
            document.body.style.overflow = '';
            document.body.style.position = '';
            document.body.style.top = '';
            document.body.style.left = '';
            document.body.style.right = '';
            window.scrollTo(0, scrollPosition);
        }

        gallery.addEventListener('click', function(e) {
            var img = e.target.closest('.project-section-12-gallery-img');
            if (!img) return;
            e.preventDefault();
            var idx = 0;
            for (var j = 0; j < images.length; j++) { if (images[j] === img) { idx = j; break; } }
            open(idx);
        });

        if (thumbsWrap) {
            thumbsWrap.addEventListener('click', function(e) {
                var thumb = e.target.closest('.project-gallery-lightbox-thumb');
                if (!thumb) return;
                var idx = parseInt(thumb.getAttribute('data-index'), 10);
                if (!isNaN(idx) && idx >= 0 && idx < total) {
                    currentIndex = idx;
                    updateTransform();
                }
            });
        }
        if (backdrop) backdrop.addEventListener('click', close);
        if (closeBtn) closeBtn.addEventListener('click', close);
        if (prevBtn) prevBtn.addEventListener('click', function() {
            currentIndex = Math.max(0, currentIndex - 1);
            updateTransform();
        });
        if (nextBtn) nextBtn.addEventListener('click', function() {
            currentIndex = Math.min(total - 1, currentIndex + 1);
            updateTransform();
        });

        document.addEventListener('keydown', function(e) {
            if (!lightbox.classList.contains('is-open')) return;
            if (e.key === 'Escape') close();
            if (e.key === 'ArrowLeft') { currentIndex = Math.max(0, currentIndex - 1); updateTransform(); }
            if (e.key === 'ArrowRight') { currentIndex = Math.min(total - 1, currentIndex + 1); updateTransform(); }
        });
    })();
    </script>
</body>
</html>