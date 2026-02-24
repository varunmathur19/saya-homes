<?php
// Include base_url from new-css.php if not already included
if (!isset($base_url)) {
    $pret = $_SERVER['PHP_SELF'];
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
    $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : (isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : 'localhost');
    $script_dir = dirname($_SERVER['SCRIPT_NAME']);
    $base_path = ($script_dir === '/' || $script_dir === '\\') ? '' : rtrim($script_dir, '/');
    $base_url = $protocol . $host . $base_path;
}
?>
<footer class="new-footer">
    <div class="new-footer-container">
        <!-- Top Section -->
        <div class="new-footer-top">
            <div class="new-footer-top-left">
                <div class="new-footer-logo">
                    <img src="<?= $base_url ?>/images/new_theme/icons/footer_logo.svg" alt="Saya logo in footer">
                </div>
            </div>
            <div class="new-footer-top-center">
                <h2 class="new-footer-main-tagline">Say Hello To What's Next</h2>
            </div>
            <div class="new-footer-top-right">
                <button class="new-footer-schedule-btn">
                    <p>Schedule a call</p>
                    <div>
                        <img src="<?= $base_url ?>/images/new_theme/icons/button_hover_icon.svg" alt="Arrow Right">
                    </div>
                </button>
                <a href="mailto:contact@sayahomes.in" class="new-footer-email">contact@sayahomes.in</a>
            </div>
        </div>

        <!-- Middle Section -->
        <div class="new-footer-middle">
            <div class="new-footer-links-container">
                <!-- About Us Column -->
                <div class="new-footer-column">
                    <h6 class="new-footer-column-heading">ABOUT US</h6>
                    <ul class="new-footer-links">
                        <li><a href="<?= $base_url ?>/about-us">Overview</a></li>
                        <li><a href="<?= $base_url ?>/about-us#vision-mission">Vision & Mission</a></li>
                        <li><a href="<?= $base_url ?>/about-us#founder">Meet the Founder</a></li>
                        <li><a href="<?= $base_url ?>/about-us#customer-relationship">Customer Relationship</a></li>
                        <li><a href="<?= $base_url ?>/about-us#partnerships">Partnerships</a></li>
                        <li><a href="<?= $base_url ?>/about-us#appreciation-letter">Appreciation Letter</a></li>
                    </ul>
                </div>

                <!-- Projects Column -->
                <div class="new-footer-column">
                    <h6 class="new-footer-column-heading">PROJECTS</h6>
                    <ul class="new-footer-links">
                        <li><a href="<?= $base_url ?>/residential">Residential</a></li>
                        <li><a href="<?= $base_url ?>/commercial">Commercial</a></li>
                    </ul>
                </div>

                <!-- Media Column -->
                <div class="new-footer-column">
                    <h6 class="new-footer-column-heading">MEDIA</h6>
                    <ul class="new-footer-links">
                        <li><a href="<?= $base_url ?>/in-the-media">In The Media</a></li>
                        <li><a href="<?= $base_url ?>/awards-and-recognition">Awards & Recognition</a></li>
                        <li><a href="<?= $base_url ?>/events">Events</a></li>
                        <li><a href="<?= $base_url ?>/blogs">Blogs</a></li>
                    </ul>
                </div>

                <!-- Quick Links Column -->
                <div class="new-footer-column">
                    <h6 class="new-footer-column-heading">QUICK LINKS</h6>
                    <ul class="new-footer-links">
                        <li><a href="<?= $base_url ?>/nri-corner">NRI Corner</a></li>
                        <li><a href="<?= $base_url ?>/customer-supports">Customer Support</a></li>
                        <li><a href="<?= $base_url ?>/careers">Careers</a></li>
                        <li><a href="<?= $base_url ?>/contact-us">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <!-- Google Reviews and Social Media Section -->
            <div class="new-footer-right-section">
                <div class="new-footer-google-reviews">
                    <div class="new-footer-google-logo">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                        </svg>
                    </div>
                    <div class="new-footer-google-text">
                        <span class="new-footer-google-label">Google reviews</span>
                        <div class="new-footer-rating">
                            <span class="new-footer-rating-number">4.8</span>
                            <div class="new-footer-stars">
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                                <span class="star">★</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="new-footer-social-icons">
                    <a href="https://www.facebook.com/sayahomesofficial/" target="_blank" class="new-footer-social-icon" aria-label="Facebook">
                        <img src="<?= $base_url ?>/images/svg/facebook.svg" alt="Facebook" width="8" height="8">

                    </a>
                    <a href="https://twitter.com/sayahomes" target="_blank" class="new-footer-social-icon" aria-label="Twitter">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/company/saya-group-official/" target="_blank" class="new-footer-social-icon" aria-label="LinkedIn">
                        <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.00004 1.50068C2.99976 2.11141 2.62924 2.661 2.06318 2.89028C1.49713 3.11957 0.84858 2.98277 0.423352 2.54439C-0.00187504 2.10601 -0.11886 1.45359 0.127553 0.894785C0.373973 0.335975 0.934583 -0.017643 1.54504 0.000679464C2.35584 0.025017 3.00041 0.68951 3.00004 1.50068ZM3.04504 4.11068H0.0450374V13.5007H3.04504V4.11068ZM7.78505 4.11068H4.80004V13.5007H7.75505V8.57316C7.75505 5.82816 11.3326 5.57316 11.3326 8.57316V13.5007H14.2951V7.55316C14.2951 2.92568 9.00005 3.09818 7.75505 5.37066L7.78505 4.11068Z" fill="white"/>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/sayahomes/?hl=en" target="_blank" class="new-footer-social-icon" aria-label="Instagram">
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.50002 5.25C6.25697 5.25 5.25 6.25732 5.25 7.5C5.25 8.74297 6.25734 9.75 7.50002 9.75C8.74299 9.75 9.75002 8.74267 9.75002 7.5C9.75002 6.25702 8.74269 5.25 7.50002 5.25ZM7.50002 3.75C9.57032 3.75 11.25 5.42782 11.25 7.5C11.25 9.57037 9.57219 11.25 7.50002 11.25C5.42965 11.25 3.75 9.57217 3.75 7.5C3.75 5.42965 5.42783 3.75 7.50002 3.75ZM12.375 3.56186C12.375 4.07944 11.9544 4.49938 11.4375 4.49938C10.9199 4.49938 10.5 4.0788 10.5 3.56186C10.5 3.04492 10.9205 2.625 11.4375 2.625C11.9537 2.62435 12.375 3.04492 12.375 3.56186ZM7.50002 1.5C5.64414 1.5 5.34165 1.50491 4.47847 1.54335C3.89038 1.57096 3.49616 1.65005 3.12989 1.79225C2.80439 1.91849 2.56958 2.06923 2.31941 2.31941C2.06827 2.57055 1.9178 2.80472 1.79207 3.13037C1.64954 3.49749 1.57046 3.89108 1.54335 4.47836C1.50454 5.3064 1.5 5.59579 1.5 7.5C1.5 9.35587 1.50491 9.65835 1.54334 10.5215C1.57097 11.1093 1.65017 11.5041 1.79202 11.8695C1.91859 12.1954 2.06964 12.4308 2.31861 12.6798C2.57074 12.9316 2.80561 13.0825 3.12817 13.207C3.49891 13.3504 3.89288 13.4296 4.47836 13.4566C5.3064 13.4954 5.59579 13.5 7.50002 13.5C9.35589 13.5 9.65837 13.495 10.5215 13.4566C11.108 13.4291 11.5031 13.3497 11.8695 13.2079C12.1946 13.0817 12.4307 12.9301 12.6798 12.6814C12.932 12.4288 13.0826 12.1945 13.2073 11.8712C13.3502 11.5018 13.4296 11.1073 13.4567 10.5217C13.4954 9.6936 13.5 9.40417 13.5 7.5C13.5 5.64414 13.4951 5.34166 13.4567 4.47853C13.4291 3.89179 13.3496 3.49612 13.2077 3.12988C13.0818 2.80528 12.9305 2.56976 12.6806 2.31941C12.429 2.06786 12.1955 1.9177 11.8696 1.79206C11.5028 1.64965 11.1086 1.57047 10.5216 1.54336C9.6936 1.50454 9.40419 1.5 7.50002 1.5ZM7.50002 0C9.53747 0 9.79187 0.00749996 10.5919 0.045C11.39 0.0818774 11.9344 0.208125 12.4125 0.39375C12.9068 0.584378 13.3244 0.841875 13.7412 1.25875C14.1575 1.67563 14.415 2.09437 14.6063 2.5875C14.7912 3.065 14.9175 3.61 14.955 4.40812C14.9906 5.20813 15 5.4625 15 7.5C15 9.53752 14.9925 9.79185 14.955 10.5919C14.9181 11.39 14.7912 11.9344 14.6063 12.4125C14.4156 12.9069 14.1575 13.3243 13.7412 13.7413C13.3244 14.1575 12.905 14.415 12.4125 14.6062C11.9344 14.7913 11.39 14.9175 10.5919 14.955C9.79187 14.9906 9.53747 15 7.50002 15C5.4625 15 5.20812 14.9925 4.40813 14.955C3.61 14.9181 3.06625 14.7913 2.5875 14.6062C2.09375 14.4156 1.67562 14.1575 1.25875 13.7413C0.841875 13.3243 0.585 12.905 0.39375 12.4125C0.208125 11.9344 0.0825001 11.39 0.0450001 10.5919C0.00937514 9.79185 0 9.53752 0 7.5C0 5.4625 0.00750014 5.20813 0.0450001 4.40812C0.0818701 3.60937 0.208125 3.06562 0.39375 2.5875C0.58437 2.09375 0.841875 1.67563 1.25875 1.25875C1.67562 0.841875 2.09438 0.585 2.5875 0.39375C3.06563 0.208125 3.60938 0.0825 4.40813 0.045C5.20812 0.00937496 5.4625 0 7.50002 0Z" fill="white"/>
                        </svg>
                    </a>
                    <a href="https://www.youtube.com/@sayahomes" target="_blank" class="new-footer-social-icon" aria-label="YouTube">
                        <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.2044 2.24612C13.1473 2.02271 12.9857 1.85416 12.8006 1.80216C12.4717 1.71047 10.875 1.5 7.50002 1.5C4.125 1.5 2.52866 1.71055 2.19845 1.80242C2.01509 1.85342 1.85349 2.02195 1.79559 2.24612C1.71399 2.56442 1.5 3.89696 1.5 6C1.5 8.103 1.71399 9.4356 1.79582 9.7548C1.85271 9.97732 2.01434 10.1459 2.19865 10.1976C2.52866 10.2895 4.125 10.5 7.50002 10.5C10.875 10.5 12.4717 10.2895 12.8015 10.1976C12.9849 10.1466 13.1465 9.97808 13.2044 9.7539C13.286 9.4356 13.5 8.1 13.5 6C13.5 3.9 13.286 2.56442 13.2044 2.24612ZM14.6574 1.87363C15 3.21 15 6 15 6C15 6 15 8.79 14.6574 10.1264C14.4665 10.8655 13.9095 11.4464 13.2035 11.6427C11.9221 12 7.50002 12 7.50002 12C7.50002 12 3.08054 12 1.79654 11.6427C1.08786 11.4436 0.530858 10.8627 0.34257 10.1264C1.3411e-07 8.79 0 6 0 6C0 6 1.3411e-07 3.21 0.34257 1.87363C0.533468 1.13455 1.09048 0.553635 1.79654 0.35727C3.08054 -1.11759e-07 7.50002 0 7.50002 0C7.50002 0 11.9221 -1.11759e-07 13.2035 0.35727C13.9121 0.556365 14.4692 1.13727 14.6574 1.87363ZM6.00002 8.625V3.375L10.5 6L6.00002 8.625Z" fill="white"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Bottom Section -->
        <div class="new-footer-bottom">
            <p class="new-footer-copyright">© 2026 sayahomes. All rights reserved. digital media planned by Ritz Media World.</p>
        </div>
    </div>
</footer>
