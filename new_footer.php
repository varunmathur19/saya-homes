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
                    <!-- <a href="https://twitter.com/sayahomes" target="_blank" class="new-footer-social-icon" aria-label="Twitter">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                    </a> -->
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

<style>
    .new-enquire-modal-overlay {
        position: fixed;
        inset: 0;
        background: rgba(7, 24, 54, 0.28);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        z-index: 10050;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.25s ease, visibility 0.25s ease;
    }

    .new-enquire-modal-overlay.is-open {
        opacity: 1;
        visibility: visible;
    }

    .new-enquire-modal {
        position: fixed;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%) scale(0.96);
        width: min(920px, calc(100% - 24px));
        background: #ffffff;
        border-radius: 12px;
        border: 0;
        box-shadow: 0 22px 54px rgba(6, 22, 50, 0.26);
        z-index: 10060;
        opacity: 0;
        visibility: hidden;
        transition: transform 0.25s ease, opacity 0.25s ease, visibility 0.25s ease;
        overflow: hidden;
    }

    .new-enquire-modal.is-open {
        opacity: 1;
        visibility: visible;
        transform: translate(-50%, -50%) scale(1);
    }

    .new-enquire-modal-dialog {
        display: flex;
        align-items: stretch;
    }

    .new-enquire-modal-side {
        flex: 0 0 50%;
        background: #111;
        padding: 0;
        position: relative;
        overflow: hidden;
        display: block;
        min-height: 0;
    }

    .new-enquire-modal-side::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, rgba(41, 43, 49, 0.8) 0%, rgba(16, 19, 34, 0) 50%, rgba(16, 19, 34, 0) 100%);
        pointer-events: none;
    }

    .new-enquire-side-image {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .new-enquire-modal-side h6 {
        display: none;
    }

    .new-enquire-promise {
        display: none;
    }

    .new-enquire-promise img {
        width: 22px;
        height: 22px;
    }

    .new-enquire-promise span {
        font-size: 14px;
        line-height: 1.35;
        font-weight: 700;
        color: #f6f8fc;
    }

    .new-enquire-modal-main {
        flex: 0 0 50%;
        position: relative;
        padding: 60px 30px;
        /* min-height: 708px; */
        overflow-y: visible;
        background: #101322;
        border: 0;
        outline: 0;
        box-shadow: none;
        

    }

    .new-enquire-modal-close {
        position: absolute;
        top: 10px;
        right: 12px;
        width: 30px;
        height: 30px;
        border: 0;
        border-radius: 8px;
        background: transparent;
        color: #94A3B8;
        font-size: 32px;
        line-height: 1;
        cursor: pointer;
    }

    .new-enquire-modal-close:hover {
        color: #f18a3d;
    }

    .new-enquire-modal-title {
        margin: 0 40px 8px 0;
        font-family: "Lato", sans-serif;
        font-size: 36px;
        line-height: normal;
        letter-spacing: 0;
        color: #F1F5F9;
        font-weight: 700;
    }

    .new-enquire-modal-sub {
        margin: 0 0 26px;
        font-family: "Inter", sans-serif;
        font-weight: 400;
        font-size: 18px;
        line-height: normal;
        letter-spacing: 0;
        color: #B9B7B7;
    }

    .new-enquire-status {
        display: none;
        margin: 0 0 14px;
        padding: 10px 12px;
        border-radius: 8px;
        font-size: 13px;
        line-height: 1.4;
    }

    .new-enquire-status.show {
        display: block;
    }

    .new-enquire-status.success {
        color: #bbf7d0;
        background: rgba(9, 76, 37, 0.45);
    }

    .new-enquire-status.error {
        color: #fecdd3;
        background: rgba(130, 24, 40, 0.46);
    }

    .new-enquire-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 14px;
    }

    .new-enquire-field {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .new-enquire-field.full {
        grid-column: 1 / -1;
    }

    .new-enquire-field label {
        display: none;
    }

    .new-enquire-field input,
    .new-enquire-field textarea {
        width: 100%;
        border: 0;
        border-radius: 10px;
        padding: 14px 14px;
        outline: 0;
        font-family: "Inter", sans-serif;
        font-weight: 400;
        font-size: 14px;
        line-height: 100%;
        letter-spacing: 0;
        color: #111111;
        background: #F9F9F9;
    }

    .new-enquire-field input::placeholder,
    .new-enquire-field textarea::placeholder {
        color: #00000099;
        opacity: 1;
    }

    .new-enquire-field input:focus,
    .new-enquire-field textarea:focus {
        box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.25);
        background: #ffffff;
    }

    .new-enquire-consent {
        display: none;
    }

    .new-enquire-consent input {
        margin-top: 2px;
        accent-color: #f6883e;
    }

    .new-enquire-actions {
        margin-top: 16px;
    }

    .new-enquire-submit {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0;
        width: 100%;
        border: 0;
        border-radius: 12px;
        padding: 18px 18px;
        background: #f18a3d;
        color: #fff;
        font-family: "Inter", sans-serif;
        font-size: 16px;
        font-weight: 700;
        line-height: 100%;
        letter-spacing: 0;
        cursor: pointer;
        position: relative;
        overflow: hidden;
        transition: background 0.2s ease;
        box-shadow: none;
    }

    .new-enquire-submit-text,
    .new-enquire-submit-arrow {
        position: relative;
        z-index: 1;
    }

    .new-enquire-submit::before {
        display: none;
    }

    .new-enquire-submit:hover::before {
        left: 0;
    }

    .new-enquire-submit:hover {
        background: #ea7c2a;
        animation: none;
        box-shadow: none;
    }

    .new-enquire-submit-arrow {
        display: none;
    }

    .new-enquire-submit-arrow::before {
        content: "";
        position: absolute;
        width: 10px;
        height: 10px;
        background: #ffffff;
        border-radius: 50%;
        transform: scale(1);
        transition: transform 0.5s;
    }

    .new-enquire-submit-arrow img {
        width: 14px;
        height: 20px;
        transform: translate(-100%, 100%);
        transition: transform 0.5s;
        position: relative;
        z-index: 1;
        display: block;
    }

    .new-enquire-submit:hover .new-enquire-submit-arrow::before {
        transform: scale(3);
    }

    .new-enquire-submit:hover .new-enquire-submit-arrow img {
        transform: translate(0%, 0%);
    }

    .new-enquire-submit:disabled {
        opacity: 0.7;
        cursor: not-allowed;
        transform: none;
    }

    .new-enquire-submit:disabled::before,
    .new-enquire-submit:disabled:hover::before {
        left: -100%;
    }

    .new-enquire-submit:disabled:hover .new-enquire-submit-arrow::before {
        transform: scale(1);
    }

    .new-enquire-submit:disabled:hover .new-enquire-submit-arrow img {
        transform: translate(-100%, 100%);
    }

    @media (max-width: 900px) {
        .new-enquire-modal-dialog {
            min-height: 500px;
        }

        .new-enquire-modal-side {
            flex-basis: 44%;
            display: block;
        }

        .new-enquire-modal-main {
            flex-basis: 56%;
            padding: 24px 20px 20px;
        }

        .new-enquire-modal-title {
            font-size: clamp(26px, 3vw, 34px);
            
        }

        .new-enquire-modal-sub {
            font-size: clamp(14px, 1.8vw, 18px);
            margin-bottom: 18px;
        }

        .new-enquire-submit {
            font-size: 18px;
        }
    }

    @media (max-width: 600px) {
        .new-enquire-modal {
            width: calc(100% - 16px);
            max-height: calc(100vh - 16px);
            border-radius: 12px;
        }

        .new-enquire-modal-dialog {
            flex-direction: column;
            min-height: auto;
            max-height: none;
        }

        .new-enquire-modal-side {
            display: none;
        }

        .new-enquire-modal-main {
            padding: 45px 14px ;
        }

        .new-enquire-grid {
            grid-template-columns: 1fr;
        }

        .new-enquire-modal-title { font-size: 24px; line-height: normal; }
        .new-enquire-modal-sub { font-size: 18px; line-height: normal; }
        .new-enquire-submit { font-size: 16px; }
    }
</style>

<style>
    body.new-enquire-open .section-5-enquire-btn {
        display: none !important;
        visibility: hidden !important;
        opacity: 0 !important;
        pointer-events: none !important;
    }
</style>

<div class="new-enquire-modal-overlay" id="newEnquireOverlay" aria-hidden="true"></div>
<div class="new-enquire-modal" id="newEnquireModal" role="dialog" aria-modal="true" aria-labelledby="newEnquireTitle" aria-hidden="true">
    <div class="new-enquire-modal-dialog">
        <aside class="new-enquire-modal-side">
            <img src="<?= $base_url ?>/images/new_theme/enquirepopupform.jpg" alt="Modern interior" class="new-enquire-side-image">
        </aside>
        <div class="new-enquire-modal-main">
            <button type="button" class="new-enquire-modal-close" id="newEnquireClose" aria-label="Close">×</button>
            <h4 class="new-enquire-modal-title" id="newEnquireTitle">Book Your Dream Home Today !</h4>
            <p class="new-enquire-modal-sub">Experience modern living in a location that connects you to everything.</p>
            <div class="new-enquire-status" id="newEnquireStatus"></div>

            <form id="newEnquireForm" novalidate>
                <div class="new-enquire-grid">
                    <div class="new-enquire-field">
                        <label for="newMname">Name*</label>
                        <input type="text" name="mname" id="newMname" placeholder="Name *" required>
                    </div>
                    <div class="new-enquire-field">
                        <label for="newMemail">Email*</label>
                        <input type="email" name="memail" id="newMemail" placeholder="Email *" required>
                    </div>
                    <div class="new-enquire-field full">
                        <label for="newMmobile">Mobile*</label>
                        <input type="tel" name="mmobile" id="newMmobile" placeholder="Mobile *" required>
                    </div>
                    <div class="new-enquire-field full">
                        <label for="newMquery">Query</label>
                        <textarea name="mquery" id="newMquery" rows="4" placeholder="Query *"></textarea>
                    </div>
                </div>

                <label class="new-enquire-consent" for="newAgree">
                    <input type="checkbox" id="newAgree">
                    <span>I authorise Saya Group and its representatives to call, SMS, RCS, email or WhatsApp me about its projects and offers. This consent overrides any registration for DNC / NDNC.</span>
                </label>

                <input type="hidden" name="query_nature" value="modal">
                <input type="hidden" name="mpagename" value="<?= isset($pagename) && $pagename !== '' ? $pagename : preg_replace('/\.php$/i', '', basename((string) parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH))) ?>">
                <input type="hidden" name="msource" id="newMsource" value="Common Enquiry">

                <div class="new-enquire-actions">
                    <button type="submit" class="new-enquire-submit" id="newEnquireSubmit">
                        <span class="new-enquire-submit-text">Get a Call Back</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    (function() {
        var modal = document.getElementById('newEnquireModal');
        var overlay = document.getElementById('newEnquireOverlay');
        var closeBtn = document.getElementById('newEnquireClose');
        var form = document.getElementById('newEnquireForm');
        var statusBox = document.getElementById('newEnquireStatus');
        var submitBtn = document.getElementById('newEnquireSubmit');
        var sourceInput = document.getElementById('newMsource');
        if (!modal || !overlay || !form || !statusBox || !submitBtn || !sourceInput) return;

        function showStatus(message, type) {
            statusBox.className = 'new-enquire-status show ' + type;
            statusBox.textContent = message;
        }

        function toggleEnquireTrigger(isVisible) {
            var triggers = document.querySelectorAll('.section-5-enquire-btn');
            triggers.forEach(function(trigger) {
                trigger.style.display = isVisible ? '' : 'none';
            });
        }

        function openModal(sourceText) {
            sourceInput.value = sourceText || 'Common Enquiry';
            modal.classList.add('is-open');
            overlay.classList.add('is-open');
            modal.setAttribute('aria-hidden', 'false');
            overlay.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
            document.body.classList.add('new-enquire-open');
            toggleEnquireTrigger(false);
        }

        function closeModal() {
            modal.classList.remove('is-open');
            overlay.classList.remove('is-open');
            modal.setAttribute('aria-hidden', 'true');
            overlay.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
            document.body.classList.remove('new-enquire-open');
            toggleEnquireTrigger(true);
        }

        document.addEventListener('click', function(e) {
            var trigger = e.target.closest('.section-5-enquire-btn');
            if (!trigger) return;
            e.preventDefault();
            var src = trigger.getAttribute('data-bs-source') || trigger.getAttribute('data-source') || 'Common Enquiry';
            openModal(src);
        });

        if (closeBtn) {
            closeBtn.addEventListener('click', closeModal);
        }
        overlay.addEventListener('click', closeModal);
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && modal.classList.contains('is-open')) {
                closeModal();
            }
        });

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="new-enquire-submit-text">Please Wait...</span>';
            showStatus('Processing...', 'success');

            var payload = new FormData(form);
            fetch('<?= $base_url ?>/controller/form_integration.php', {
                method: 'POST',
                body: payload
            })
            .then(function(res) {
                return res.json();
            })
            .then(function(response) {
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<span class="new-enquire-submit-text">Get a Call Back</span>';
                if (response && response.status === 'success') {
                    showStatus(response.message || 'Your enquiry has been submitted successfully.', 'success');
                    form.reset();
                    setTimeout(function() {
                        window.location.href = 'thank-you';
                    }, 1400);
                    return;
                }
                showStatus((response && response.message) || 'Something went wrong. Please try again.', 'error');
            })
            .catch(function() {
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<span class="new-enquire-submit-text">Get a Call Back</span>';
                showStatus('Something went wrong. Please try again.', 'error');
            });
        });
    })();
</script>
