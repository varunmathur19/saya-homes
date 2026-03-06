<?php
// Include base_url from new-css.php if not already included
if (!isset($base_url)) {
    $pret = $_SERVER['PHP_SELF'];
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
    $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : (isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : 'localhost');
    $script_dir = dirname($_SERVER['SCRIPT_NAME']);
    if (strpos($script_dir, ':') !== false) {
        $request_path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
        $script_dir = dirname($request_path ?: '/');
    }
    $base_path = ($script_dir === '/' || $script_dir === '\\') ? '' : rtrim($script_dir, '/');
    $base_url = $protocol . $host . $base_path;
}
?>
<header class="new-header">
    <div class="new-header-container">
        <!-- Left Section - Logo -->
        <div class="new-header-left">
            <div class="new-header-logo">
                <a href="<?= $base_url ?>/" class="new-header-logo-link">
                    <img src="<?= $base_url ?>/images/logo.svg" alt="Saya Homes Logo" class="new-header-logo-img">
                </a>
            </div>
        </div>

        
        <!-- Right Section - Navigation and Icons -->
        <div class="new-header-right">
            <!-- Navigation Links -->
            <nav class="new-header-nav">
                <a href="<?= $base_url ?>/about-us" class="new-header-nav-link">OUR STORY</a>
                <a href="#" class="new-header-nav-link header-our-projects-trigger">OUR PROJECTS</a>
            </nav>

            <!-- Contact Icons -->
            <div class="new-header-contact-icons">
                <a href="tel:+919540812345" class="new-header-contact-icon" aria-label="Call Us">
                    <img src="<?= $base_url ?>/images/new_theme/icons/phone_icon.svg" alt="Call Icon">
                </a>
                <a href="https://wa.me/919540812345" target="_blank" class="new-header-contact-icon" aria-label="WhatsApp">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                    </svg>
                </a>
            </div>

            <!-- Hamburger Menu -->
            <button class="new-header-menu-toggle" id="mobileMenuToggle" aria-label="Toggle Menu">
                <span class="new-header-menu-line"></span>
                <span class="new-header-menu-line"></span>
                <span class="new-header-menu-line"></span>
            </button>
        </div>
    </div>
    <div class="hover-header-container">
        <div class="hover-header-content">
            <div class="hover-header-content-left">
                <!-- Close Button (Top Right) -->
                <button class="header-close-button" id="hoverHeaderClose" aria-label="Close Menu">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>

                <!-- Navigation Wrapper -->
                <div class="header-nav-wrapper">
                    <!-- Main Navigation Links (Left Column) -->
                    <nav class="header-links">
                        <a href="<?= $base_url ?>/" class="header-nav-item-main">HOME</a>
                        <a href="<?= $base_url ?>/about-us" class="header-nav-item-main">ABOUT US</a>
                        <!-- Desktop/tablet: OUR PROJECTS (opens popup) -->
                        <a href="#" class="header-nav-item-main header-nav-our-projects-link">OUR PROJECTS</a>
                        <!-- Mobile: RESIDENTIAL / COMMERCIAL with inline dropdown -->
                        <div class="header-nav-dropdown-wrap header-nav-mobile-projects">
                            <a href="#" class="header-nav-item-main header-nav-projects-trigger" data-project-type="residential">
                                <span class="header-nav-text">RESIDENTIAL</span>
                                <span class="header-nav-toggle-icon">
                                    <svg class="icon-plus" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    <svg class="icon-minus" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                </span>
                            </a>
                            <div class="header-nav-dropdown" id="dropdown-residential">
                                <div class="header-nav-dropdown-inner">
                                    <a href="<?= $base_url ?>/saya-gold-avenue" class="header-nav-dropdown-item">Saya Gold Avenue</a>
                                    <a href="<?= $base_url ?>/saya-zion" class="header-nav-dropdown-item">Saya Zion</a>
                                    <a href="<?= $base_url ?>/saya-zenith" class="header-nav-dropdown-item">Saya Zenith</a>
                                    <a href="<?= $base_url ?>/saya-desire-residency" class="header-nav-dropdown-item">Saya Desire Residency</a>
                                </div>
                            </div>
                        </div>
                        <div class="header-nav-dropdown-wrap header-nav-mobile-projects">
                            <a href="#" class="header-nav-item-main header-nav-projects-trigger" data-project-type="commercial">
                                <span class="header-nav-text">COMMERCIAL</span>
                                <span class="header-nav-toggle-icon">
                                    <svg class="icon-plus" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    <svg class="icon-minus" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                </span>
                            </a>
                            <div class="header-nav-dropdown" id="dropdown-commercial">
                                <div class="header-nav-dropdown-inner">
                                    <a href="<?= $base_url ?>/saya-southX" class="header-nav-dropdown-item">Saya SouthX</a>
                                    <a href="<?= $base_url ?>/saya-biztop" class="header-nav-dropdown-item">Saya Biztop</a>
                                    <a href="<?= $base_url ?>/saya-piazza" class="header-nav-dropdown-item">Saya Piazza</a>
                                </div>
                            </div>
                        </div>
                        <a href="<?= $base_url ?>/in-the-media" class="header-nav-item-main">MEDIA</a>
                        <a href="<?= $base_url ?>/events" class="header-nav-item-main">EVENTS</a>
                        <a href="<?= $base_url ?>/blogs" class="header-nav-item-main">BLOGS</a>
                        <a href="<?= $base_url ?>/nri-corner" class="header-nav-item-main">NRI CORNER</a>
                    </nav>

                    <!-- Secondary Navigation Links (Right Column) -->
                    <nav class="header-links-text">
                        <a href="<?= $base_url ?>/construction-update" class="header-nav-item-secondary">Construction Update</a>
                        <a href="<?= $base_url ?>/csr" class="header-nav-item-secondary">CSR</a>
                        <a href="<?= $base_url ?>/awards-and-recognition" class="header-nav-item-secondary">Awards & Recognition</a>
                        <a href="<?= $base_url ?>/careers" class="header-nav-item-secondary">Careers</a>
                        <a href="<?= $base_url ?>/contact-us" class="header-nav-item-secondary">Contact Us</a>
                    </nav>
                </div>
            </div>
            <div class="hover-header-content-right">
                <div class="header-image-container">
                    <img src="<?= $base_url ?>/images/new_theme/header-right-image.jpg" alt="Saya Homes Image">
                    <div class="header-secial-icons-container">

                    </div>
                </div>
            </div>
            <div class="header-social-links">
                <div class="header-social-link-left">
                    <div class="header-call-icon-wrapper">
                        <img src="<?= $base_url ?>/images/new_theme/icons/phone.svg" alt="Call Icon">
                    </div>
                    <div class="header-call-content">
                        <span class="header-call-text">Call Us Now</span>
                        <a href="tel:01204491800" class="header-call-number">0120-4491800</a>
                    </div>
                </div>
                <div class="header-social-link-right">
                    <a href="https://www.facebook.com/sayahomesofficial/" target="_blank" class="header-social-icon-bottom" aria-label="Facebook">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>
                    <a href="https://twitter.com/sayahomes" target="_blank" class="header-social-icon-bottom" aria-label="Twitter">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/company/saya-group-official/" target="_blank" class="header-social-icon-bottom" aria-label="LinkedIn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/sayahomes/?hl=en" target="_blank" class="header-social-icon-bottom" aria-label="Instagram">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                    <a href="https://www.youtube.com/@sayahomes" target="_blank" class="header-social-icon-bottom" aria-label="YouTube">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="hover-project-header-container">
        <div class="hover-project-header-bg" aria-hidden="true"></div>
        <div class="hover-header-content">
            <div class="hover-header-content-left">
                <!-- Close Button (Top Right) -->
                <button class="header-close-button" id="hoverProjectHeaderClose" aria-label="Close Projects Menu">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>

                <!-- Navigation Wrapper: RESIDENTIAL | COMMERCIAL side-by-side + Search (like image) -->
                <div class="header-nav-wrapper projects-popup-layout" id="projectsNavWrapper">
                    <div class="projects-popup-col">
                        <p class="projects-popup-heading">RESIDENTIAL</p>
                        <nav class="header-links">
                            <a href="<?= $base_url ?>/saya-gold-avenue" class="header-nav-item-main">Saya Gold Avenue</a>
                            <a href="<?= $base_url ?>/saya-zion" class="header-nav-item-main">Saya Zion</a>
                            <a href="<?= $base_url ?>/saya-zenith" class="header-nav-item-main">Saya Zenith</a>
                            <a href="<?= $base_url ?>/saya-desire-residency" class="header-nav-item-main">Saya Desire Residency</a>
                        </nav>
                    </div>
                    <div class="projects-popup-col">
                        <p class="projects-popup-heading">COMMERCIAL</p>
                        <nav class="header-links-text">
                            <a href="<?= $base_url ?>/saya-southX" class="header-nav-item-main">Saya SouthX</a>
                            <a href="<?= $base_url ?>/saya-biztop" class="header-nav-item-main">Saya Biztop</a>
                            <a href="<?= $base_url ?>/saya-piazza" class="header-nav-item-main">Saya Piazza</a>
                        </nav>
                    </div>
                    <div class="search-container">
                        <input type="text" class="search-input" placeholder="Search a project name or location">
                        <svg class="search-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.35-4.35"></path>
                        </svg>
                    </div>
                </div>
                <!-- Expertise Images Section - Below Navigation Text -->
                <div class="header-expertise-images projects-popup-expertise">
                    <div class="header-expertise-image-item">
                        <img src="<?= $base_url ?>/images/new_theme/expertise.png" alt="25 Years of Expertise">
                    </div>
                    <div class="header-expertise-image-item">
                        <img src="<?= $base_url ?>/images/new_theme/expertise.png" alt="25 Years of Expertise">
                    </div>
                    <div class="header-expertise-image-item">
                        <img src="<?= $base_url ?>/images/new_theme/expertise.png" alt="25 Years of Expertise">
                    </div>
                </div>
            </div>
            <div class="header-social-links">
                <div class="header-social-link-left">
                    <div class="header-call-icon-wrapper">
                        <img src="<?= $base_url ?>/images/new_theme/icons/phone.svg" alt="Call Icon">
                    </div>
                    <div class="header-call-content">
                        <span class="header-call-text">Call Us Now</span>
                        <a href="tel:01204491800" class="header-call-number">0120-4491800</a>
                    </div>
                </div>
                <div class="header-social-link-right">
                    <a href="https://www.facebook.com/sayahomesofficial/" target="_blank" class="header-social-icon-bottom" aria-label="Facebook">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>
                    <a href="https://twitter.com/sayahomes" target="_blank" class="header-social-icon-bottom" aria-label="Twitter">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/company/saya-group-official/" target="_blank" class="header-social-icon-bottom" aria-label="LinkedIn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/sayahomes/?hl=en" target="_blank" class="header-social-icon-bottom" aria-label="Instagram">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                    <a href="https://www.youtube.com/@sayahomes" target="_blank" class="header-social-icon-bottom" aria-label="YouTube">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                        </svg>
                    </a>
                </div>
            </div>
            <!-- Expertise Images Section -->
          
        </div>
    </div>
</header>