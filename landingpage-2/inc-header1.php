<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5QWGJ7VV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header class="header">
    <div class="container-lg">
        <nav class="navi" data-aos="fade-right">
            <ul class="list-inline">
                <li><button class="menuBtn">
                        <span></span>
                    </button>
                </li>
                <li class="d-none d-lg-table">
                    <a href="<?= $base_url?>/construction-update">
                        <div class="link-hover-text">Construction Update</div>
                        <div class="link-hover-hover">Construction Update</div>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="logo" data-aos="fade-down"><a href="<?= $base_url?>">
            <img src="<?php echo $base_url; ?>/images/logo.svg" alt="Saya Homes">
        </a></div>
        <div class="topDetails d-none d-lg-block" data-aos="fade-left">
            <div class="m_social_btn"><i class="arrow-down"></i></div>
            <ul class="list-inline">
                <li class="enqBtn"><a href="#formModal" data-bs-toggle="modal" data-bs-source="Common Enquiry">
                        <div class="link-hover-text"><i class="far fa-envelope"></i> <span>Enquiry</span></div>
                        <div class="link-hover-hover text-white"><i class="far fa-envelope"></i> <span>Enquiry</span></div>
                    </a>
                </li>
                <li class="callBtn"><a href="https://api.whatsapp.com/send?phone=+918860763281&text=Hi I am interested in Saya Homes, please share the details." target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                <li class="callBtn"><a href="tel:+919540812345" target="_blank"><i class="fa fa-phone"></i></a></li>
            </ul>
        </div>
    </div>
</header>

<div class="menu-modal-wrapper">
    <div class="menu-modal">
        <div class="modal-top-menu">
            <ul class="list-inline">
                <li><a href="javascript:;" class="menuBtnClose">Close <i class="arrow-down arrow-up"></i></a></li>
                <li><a href="<?php echo $base_url; ?>/">Home</a></li>
            </ul>
        </div>
        <div class="bigMenu">
            <ul class="list-inline">
                <li><a href="<?= $base_url?>/about-us">About Us</a></li>
                <li class="hasChild position-relative"><a href="javascript:;">Projects <i class="fa fa-arrow-down"></i></a>
                    <div class="dropdown">
                        <ul class="list-inline">
                            <li><a href="<?php echo $base_url; ?>/saya-southX"><small>Commercial</small><span>Saya SouthX</span></a></li>
                            <li><a href="<?php echo $base_url; ?>/saya-biztop"><small>Commercial</small><span>Saya Biztop</span></a></li>
                            <li><a href="<?php echo $base_url; ?>/saya-piazza"><small>Commercial</small><span>Saya Piazza</span></a></li>
                            <li><a href="<?php echo $base_url; ?>/saya-gold-avenue"><small>Residential</small><span>Saya Gold Avenue</span></a></li>
                            <li><a href="<?php echo $base_url; ?>/saya-zion"><small>Residential</small><span>Saya Zion</span></a></li>
                            <li><a href="<?php echo $base_url; ?>/saya-zenith"><small>Residential</small><span>Saya Zenith</span></a></li>
                            <li><a href="<?php echo $base_url; ?>/saya-desire-residency"><small>Residential</small><span>Saya Desire Residency</span></a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="<?php echo $base_url; ?>/in-the-media">Media</a></li>
                <li><a href="<?php echo $base_url; ?>/events">Events</a></li>
                <li><a href="<?php echo $base_url; ?>/blogs">Blogs</a></li>
                <li><a href="<?php echo $base_url; ?>/nri-corner">NRI Corner</a></li>
            </ul>
        </div>
        <div class="bottomMenu">
            <div class="row g-4">
                <div class="col-sm-6 smallMenu">
                    <ul class="list-inline">
                        <li><a href="<?php echo $base_url; ?>/csr">CSR</a></li>
                        <li><a href="<?php echo $base_url; ?>/awards-and-recognition">Awards &amp; Recognition</a></li>
                        <li><a href="<?php echo $base_url; ?>/construction-update">Construction Update</a></li>
                        <li><a href="<?php echo $base_url; ?>/careers">Careers</a></li>
                        <li><a href="<?php echo $base_url; ?>/contact-us">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 downloadMenu">
                    <ul class="list-inline">
                        <li>
                            <a href="<?= $base_url?>/customer-supports">
                                <i class="far fa-envelope"></i>
                                <span>Customer Support</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= $base_url?>/channel-partner-registration">
                                <i class="far fa-envelope"></i>
                                <span>Register As A Channel Partner</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="enquiryWrapper shadow-lg d-flex d-lg-none">
    <div class="inner">
        <a href="https://api.whatsapp.com/send?phone=+918860763281&text=Hi I am interested in Saya Homes, please share the details." target="_blank" data-toggle="tooltip" data-bs-placement="left" data-bs-title="Connect on WhatsApp"><i class="fab fa-whatsapp"></i></a>
        <a href="tel:+919540812345" target="_blank" data-toggle="tooltip" data-bs-placement="left" data-bs-title="Call Now"><i class="fa fa-phone"></i></a>
        <a href="#formModal" data-bs-toggle="modal" data-bs-source="Common Enquiry"><i class="fa fa-envelope" data-toggle="tooltip" data-bs-placement="left" data-bs-title="Enquire Now"></i></a>
    </div>
</div>