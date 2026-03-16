<?php include_once('admin-panel-ecorp/config.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Saya Homes | Real Estate Insights & Updates</title>
    <meta name="description" content="Read the latest blogs, insights and updates from Saya Homes - Top real estate developers in Delhi NCR." />
    <?php include_once('new-css.php') ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="<?= $base_url ?>/css/new_blogpage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Inter:wght@300;400;500;600;700&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="new-blog-page new-blog-two-page">
    <?php
    $sidebarSearchTerm = isset($_GET['blog_search']) ? trim((string) $_GET['blog_search']) : '';
    $hasSidebarSearch = ($sidebarSearchTerm !== '');
    ?>
    <?php include_once('new_header.php') ?>
    <a href="<?= $base_url ?>/new_media-page.php?page=contact" class="section-5-enquire-btn">ENQUIRE NOW</a>

    <!-- Blog Banner Section -->
    <section class="blog-banner-section">
        <div class="blog-banner-image" style="background-image: url('<?= $base_url ?>/images/new_theme/blogbanner.jpg');"></div>
        <div class="blog-banner-image blog-banner-image-mobile" style="background-image: url('<?= $base_url ?>/images/new_theme/blog-mobile.jpg');"></div>
        <div class="blog-banner-content">
            <h1 class="blog-banner-title">Blog</h1>
            <nav class="blog-banner-breadcrumb" aria-label="Breadcrumb">
                <a href="<?= $base_url ?>/new_home.php" class="blog-breadcrumb-link">Homepage</a>
                <img src="<?= $base_url ?>/images/svg/blogarrow.svg" alt="" class="blog-breadcrumb-arrow" aria-hidden="true">
                <span class="blog-breadcrumb-current">Blog</span>
            </nav>
        </div>
    </section>

    <main class="blog-main">
        <div class="blog-layout">
            <div class="blog-content">
                <div class="blog-grid">
                    <?php
                    $blogsPerPage = 4;
                    $currentPage = isset($_GET['blog_page']) ? (int) $_GET['blog_page'] : 1;
                    if ($currentPage < 1) {
                        $currentPage = 1;
                    }

                    $totalBlogs = 0;
                    $totalBlogsQuery = mysqli_query($link, "SELECT COUNT(*) AS total FROM `blogs` WHERE `status`='1'");
                    if ($totalBlogsQuery) {
                        $totalBlogsRow = mysqli_fetch_assoc($totalBlogsQuery);
                        $totalBlogs = isset($totalBlogsRow['total']) ? (int) $totalBlogsRow['total'] : 0;
                    }

                    $totalPages = max(1, (int) ceil($totalBlogs / $blogsPerPage));
                    if ($currentPage > $totalPages) {
                        $currentPage = $totalPages;
                    }

                    $offset = ($currentPage - 1) * $blogsPerPage;
                    $blogData = mysqli_query($link, "SELECT * FROM `blogs` WHERE `status`='1' ORDER BY `id` DESC LIMIT $offset, $blogsPerPage");

                    if ($blogData && mysqli_num_rows($blogData) > 0) {
                        while ($blog = mysqli_fetch_assoc($blogData)) {
                            $blogTitle = !empty($blog['heading']) ? $blog['heading'] : '';
                            $blogDate = !empty($blog['date']) ? date('M j, Y', strtotime($blog['date'])) : '';
                            $blogDateAttr = !empty($blog['date']) ? date('Y-m-d', strtotime($blog['date'])) : '';
                            $blogImage = !empty($blog['image']) ? $base_url . '/uploads/blog-images/' . $blog['image'] : $base_url . '/images/new_theme/ocblog.jpg';
                            $blogLink = $base_url . '/blogs/' . $blog['slugurl'];
                            $blogContent = !empty($blog['content']) ? trim(strip_tags($blog['content'])) : '';
                            $blogExcerpt = mb_substr($blogContent, 0, 220);
                            if (!empty($blogContent) && mb_strlen($blogContent) > 220) {
                                $blogExcerpt .= '...';
                            }
                    ?>
                    <article class="blog-card">
                        <a href="<?= $blogLink ?>" class="blog-card-image-link" target="_blank" rel="noopener noreferrer">
                            <img src="<?= $blogImage ?>" alt="<?= htmlspecialchars($blogTitle) ?>" class="blog-card-img">
                        </a>
                        <div class="blog-card-body">
                            <time class="blog-card-date" datetime="<?= $blogDateAttr ?>"><?= $blogDate ?></time>
                            <h2 class="blog-card-title"><?= htmlspecialchars($blogTitle) ?></h2>
                            <p class="blog-card-excerpt"><?= htmlspecialchars($blogExcerpt) ?></p>
                            <a href="<?= $blogLink ?>" class="blog-card-readmore" target="_blank" rel="noopener noreferrer">Read More <img src="<?= $base_url ?>/images/new_theme/readmorearrow.svg" alt="" class="blog-readmore-arrow" aria-hidden="true"></a>
                        </div>
                    </article>
                    <?php
                        }
                    } else {
                    ?>
                    <article class="blog-card">
                        <div class="blog-card-body">
                            <h2 class="blog-card-title">No blogs found.</h2>
                        </div>
                    </article>
                    <?php
                    }
                    ?>
                </div>
                <nav class="blog-pagination" aria-label="Blog pagination">
                    <?php
                    $paginationBase = $base_url . '/new-blog-page.php?blog_page=';
                    $previousPage = $currentPage - 1;
                    $nextPage = $currentPage + 1;
                    ?>
                    <?php if ($currentPage > 1): ?>
                    <a href="<?= $paginationBase . $previousPage ?>" class="blog-pagination-prev" aria-label="Previous">
                        <img src="<?= $base_url ?>/images/svg/leftarrowaldier.svg" alt="">
                    </a>
                    <?php else: ?>
                    <span class="blog-pagination-prev" aria-label="Previous">
                        <img src="<?= $base_url ?>/images/svg/leftarrowaldier.svg" alt="">
                    </span>
                    <?php endif; ?>

                    <?php
                    $startPage = max(1, $currentPage - 1);
                    $endPage = min($totalPages, $currentPage + 1);
                    if ($startPage > 1) {
                        echo '<a href="' . $paginationBase . '1" class="blog-pagination-num">1</a>';
                        if ($startPage > 2) {
                            echo '<span class="blog-pagination-dots">...</span>';
                        }
                    }

                    for ($pageNo = $startPage; $pageNo <= $endPage; $pageNo++) {
                        if ($pageNo === $currentPage) {
                            echo '<span class="blog-pagination-num is-active" aria-current="page">' . $pageNo . '</span>';
                        } else {
                            echo '<a href="' . $paginationBase . $pageNo . '" class="blog-pagination-num">' . $pageNo . '</a>';
                        }
                    }

                    if ($endPage < $totalPages) {
                        if ($endPage < $totalPages - 1) {
                            echo '<span class="blog-pagination-dots">...</span>';
                        }
                        echo '<a href="' . $paginationBase . $totalPages . '" class="blog-pagination-num">' . $totalPages . '</a>';
                    }
                    ?>

                    <?php if ($currentPage < $totalPages): ?>
                    <a href="<?= $paginationBase . $nextPage ?>" class="blog-pagination-next" aria-label="Next">
                        <img src="<?= $base_url ?>/images/svg/rightarrowslider.svg" alt="">
                    </a>
                    <?php else: ?>
                    <span class="blog-pagination-next" aria-label="Next">
                        <img src="<?= $base_url ?>/images/svg/rightarrowslider.svg" alt="">
                    </span>
                    <?php endif; ?>
                </nav>
            </div>

            <aside class="blog-sidebar">
                <div class="blog-sidebar-sticky-wrap">
                <div class="blog-sidebar-widget blog-widget-search">
                    <form role="search" class="blog-search-form" method="get" action="<?= $base_url ?>/new-blog-page.php">
                        <input type="search" name="blog_search" value="<?= htmlspecialchars($sidebarSearchTerm, ENT_QUOTES, 'UTF-8') ?>" placeholder="Search by blog title..." class="blog-search-input" aria-label="Search by blog title">
                        <button type="submit" class="blog-search-btn" aria-label="Search">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
                        </button>
                    </form>
                </div>
                <?php if ($sidebarSearchTerm !== ''): ?>
                <div class="blog-sidebar-widget blog-widget-recent-posts">
                    <h3 class="blog-sidebar-heading">Search Results</h3>
                    <ul class="blog-recent-list">
                        <?php
                        $escapedSearch = mysqli_real_escape_string($link, $sidebarSearchTerm);
                        $searchBlogData = mysqli_query($link, "SELECT * FROM `blogs` WHERE `status`='1' AND `heading` LIKE '%$escapedSearch%' ORDER BY `id` DESC");
                        if ($searchBlogData && mysqli_num_rows($searchBlogData) > 0) {
                            while ($searchBlog = mysqli_fetch_assoc($searchBlogData)) {
                                $searchTitle = !empty($searchBlog['heading']) ? $searchBlog['heading'] : '';
                                $searchDate = !empty($searchBlog['date']) ? date('M j, Y', strtotime($searchBlog['date'])) : '';
                                $searchImage = !empty($searchBlog['image']) ? $base_url . '/uploads/blog-images/' . $searchBlog['image'] : $base_url . '/images/new_theme/homeblog.jpg';
                                $searchLink = $base_url . '/blogs/' . $searchBlog['slugurl'];
                        ?>
                        <li class="blog-recent-item">
                            <a href="<?= $searchLink ?>" class="blog-recent-thumb" target="_blank" rel="noopener noreferrer"><img src="<?= $searchImage ?>" alt="<?= htmlspecialchars($searchTitle) ?>"></a>
                            <div class="blog-recent-info">
                                <a href="<?= $searchLink ?>" class="blog-recent-title" target="_blank" rel="noopener noreferrer"><?= htmlspecialchars($searchTitle) ?></a>
                                <time class="blog-recent-date"><?= $searchDate ?></time>
                            </div>
                        </li>
                        <?php
                            }
                        } else {
                        ?>
                        <li class="blog-recent-item">
                            <div class="blog-recent-info">
                                <span class="blog-recent-title">No blogs found for "<?= htmlspecialchars($sidebarSearchTerm, ENT_QUOTES, 'UTF-8') ?>".</span>
                            </div>
                        </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
                <?php endif; ?>

                <div class="blog-sidebar-widget blog-widget-recent-posts">
                    <h3 class="blog-sidebar-heading">Recent Posts</h3>
                    <ul class="blog-recent-list">
                        <?php
                        $recentBlogData = mysqli_query($link, "SELECT * FROM `blogs` WHERE `status`='1' ORDER BY `date` DESC, `id` DESC LIMIT 3");
                        if ($recentBlogData && mysqli_num_rows($recentBlogData) > 0) {
                            while ($recentBlog = mysqli_fetch_assoc($recentBlogData)) {
                                $recentTitle = !empty($recentBlog['heading']) ? $recentBlog['heading'] : '';
                                $recentDate = !empty($recentBlog['date']) ? date('M j, Y', strtotime($recentBlog['date'])) : '';
                                $recentImage = !empty($recentBlog['image']) ? $base_url . '/uploads/blog-images/' . $recentBlog['image'] : $base_url . '/images/new_theme/homeblog.jpg';
                                $recentLink = $base_url . '/blogs/' . $recentBlog['slugurl'];
                        ?>
                        <li class="blog-recent-item">
                            <a href="<?= $recentLink ?>" class="blog-recent-thumb" target="_blank" rel="noopener noreferrer"><img src="<?= $recentImage ?>" alt="<?= htmlspecialchars($recentTitle) ?>"></a>
                            <div class="blog-recent-info">
                                <a href="<?= $recentLink ?>" class="blog-recent-title" target="_blank" rel="noopener noreferrer"><?= htmlspecialchars($recentTitle) ?></a>
                                <time class="blog-recent-date"><?= $recentDate ?></time>
                            </div>
                        </li>
                        <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
                <!-- <div class="blog-sidebar-widget blog-widget-recent-comments">
                    <h3 class="blog-sidebar-heading">Recent Comments</h3>
                    <ul class="blog-comments-list">
                        <li class="blog-comment-item">
                            <span class="blog-comment-icon" aria-hidden="true">
                                <img src="<?= $base_url ?>/images/svg/message.svg" alt="">
                            </span>
                            <p class="blog-comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor in...</p>
                        </li>
                        <li class="blog-comment-item">
                            <span class="blog-comment-icon" aria-hidden="true">
                                <img src="<?= $base_url ?>/images/svg/message.svg" alt="">
                            </span>
                            <p class="blog-comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor in...</p>
                        </li>
                        <li class="blog-comment-item">
                            <span class="blog-comment-icon" aria-hidden="true">
                                <img src="<?= $base_url ?>/images/svg/message.svg" alt="">
                            </span>
                            <p class="blog-comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor in...</p>
                        </li>
                    </ul>
                </div> -->
                <div class="blog-sidebar-widget blog-widget-latest-property">
                    <h3 class="blog-sidebar-heading">Latest Property</h3>
                    <div class="blog-latest-property-wrap">
                        <div class="blog-latest-property-link">
                            <img src="<?= $base_url ?>/images/new_theme/customerrelationship.jpg" alt="Latest Property - Keys handover" class="blog-latest-property-img">
                            <span class="blog-latest-property-tag">Latest Property</span>
                        </div>
                    </div>
                </div>
                </div>
            </aside>
        </div>
    </main>

    <!-- FAQs Section -->
    <section class="faqs-section">
        <div class="faqs-bg" style="background-image: url('<?= $base_url ?>/images/new_theme/FAQSbg.png');"></div>
        <div class="faqs-girl-wrap">
            <img src="<?= $base_url ?>/images/new_theme/girl.png" alt="" class="faqs-girl">
        </div>
        <div class="faqs-content">
            <h2 class="faqs-title">FAQs</h2>
            <div class="faqs-accordion">
                <div class="faqs-accordion-item">
                    <button type="button" class="faqs-accordion-head" aria-expanded="false" aria-controls="faq-1" id="faq-head-1">
                        <span class="faqs-accordion-num">01</span>
                        <span class="faqs-accordion-q"> What is the latest financial achievement of Saya Group?</span>
                        <span class="faqs-accordion-icon">+</span>
                    </button>
                    <div class="faqs-accordion-body" id="faq-1">
                        <p class="faqs-accordion-answer">Saya Group has achieved the milestone of repaying ₹1,500 crore of debt over the last five years, which is a testament to the company’s financial prowess and its focus on sustainable growth.</p>
                    </div>
                </div>
                <div class="faqs-accordion-item is-open">
                    <button type="button" class="faqs-accordion-head" aria-expanded="true" aria-controls="faq-2" id="faq-head-2">
                        <span class="faqs-accordion-num">02</span>
                        <span class="faqs-accordion-q">How will 2026 homes differ from today’s living spaces?</span>
                        <span class="faqs-accordion-icon">−</span>
                    </button>
                    <div class="faqs-accordion-body" id="faq-2">
                        <p class="faqs-accordion-answer">As homes continue to evolve, smart technology, sustainable living, and wellness-oriented design will become the norm. Discover how 2026 homes will provide greater comfort, efficiency, and flexibility to meet the needs of today’s lifestyle.</p>
                    </div>
                </div>
                <div class="faqs-accordion-item">
                    <button type="button" class="faqs-accordion-head" aria-expanded="false" aria-controls="faq-3" id="faq-head-3">
                        <span class="faqs-accordion-num">03</span>
                        <span class="faqs-accordion-q">What are the characteristics of smarter and more connected homes today?</span>
                        <span class="faqs-accordion-icon">+</span>
                    </button>
                    <div class="faqs-accordion-body" id="faq-3">
                        <p class="faqs-accordion-answer">From smart home technology that enables control over lighting and security to open plans with plenty of natural light, smarter homes today provide seamless integration of technology for a more comfortable lifestyle.</p>
                    </div>
                </div>
                <div class="faqs-accordion-item">
                    <button type="button" class="faqs-accordion-head" aria-expanded="false" aria-controls="faq-4" id="faq-head-4">
                        <span class="faqs-accordion-num">04</span>
                        <span class="faqs-accordion-q">Why is Ghaziabad emerging as a preferred destination for luxury living?</span>
                        <span class="faqs-accordion-icon">+</span>
                    </button>
                    <div class="faqs-accordion-body" id="faq-4">
                        <p class="faqs-accordion-answer">With improved infrastructure such as the Delhi-Meerut Expressway and RRTS connectivity, Ghaziabad is rapidly emerging as the preferred destination for luxury living, with world-class facilities and connectivity to Delhi and Noida.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Get To Know Banner -->
    <div class="get-to-know-banner-wrap">
        <section class="get-to-know-banner" style="background-image: url('<?= $base_url ?>/images/new_theme/contactusbg.jpg');">
            <div class="get-to-know-banner-inner">
                <h2 class="get-to-know-banner-title">Get To Know About Sayahomes Realty</h2>
                <a href="<?= $base_url ?>/contact-us" class="btn1212" style="text-decoration: none;">
                    <span class="btn1212-text">Contact Us</span>
                    <div>
                        <img src="<?= $base_url ?>/images/new_theme/icons/button_hover_icon.svg" alt="Arrow Right">
                    </div>
                </a>
            </div>
        </section>
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
            height: 42px;
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

    <script data-base-url="<?= $base_url ?>/" src="<?= $base_url ?>/js/new-home.js"></script>
    <script>
        // Scroll to Hero button – show when past blog content, click scrolls to blog banner
        (function() {
            var btn = document.getElementById("scroll-to-hero-btn");
            var heroSection = document.querySelector(".blog-banner-section");
            var triggerSection = document.querySelector(".blog-main");
            if (!btn || !heroSection || !triggerSection) return;

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
    <script>
        // Hamburger side menu + OUR PROJECTS dropdown – same as home page
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
    <script src="<?= $base_url ?>/js/new-blog.js"></script>
    <?php if ($hasSidebarSearch): ?>
    <script>
        (function () {
            if (window.history && window.history.replaceState) {
                window.history.replaceState({}, document.title, "<?= $base_url ?>/new-blog-page.php");
            }
        })();
    </script>
    <?php endif; ?>
    <script>
    (function() {
        var section = document.querySelector('.faqs-section');
        if (!section) return;
        var items = section.querySelectorAll('.faqs-accordion-item');
        var openClass = 'is-open';

        items.forEach(function(item) {
            var btn = item.querySelector('.faqs-accordion-head');
            var panel = item.querySelector('.faqs-accordion-body');
            if (!btn || !panel) return;

            // Initial state
            if (item.classList.contains(openClass)) {
                btn.setAttribute('aria-expanded', 'true');
                panel.style.maxHeight = panel.scrollHeight + 'px';
            } else {
                btn.setAttribute('aria-expanded', 'false');
                panel.style.maxHeight = '0';
            }

            btn.addEventListener('click', function() {
                var isOpen = item.classList.contains(openClass);

                // Sabhi items band karo (amenities wali tarah)
                items.forEach(function(other) {
                    var otherBtn = other.querySelector('.faqs-accordion-head');
                    var otherPanel = other.querySelector('.faqs-accordion-body');
                    var otherIcon = other.querySelector('.faqs-accordion-icon');
                    other.classList.remove(openClass);
                    if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
                    if (otherPanel) otherPanel.style.maxHeight = '0';
                    if (otherIcon) otherIcon.textContent = '+';
                });

                // Agar clicked item pehle band tha, toh kolo
                if (!isOpen) {
                    item.classList.add(openClass);
                    btn.setAttribute('aria-expanded', 'true');
                    panel.style.maxHeight = panel.scrollHeight + 'px';
                    var icon = btn.querySelector('.faqs-accordion-icon');
                    if (icon) icon.textContent = '−';
                }
            });
        });
    })();
    </script>
</body>
</html>

