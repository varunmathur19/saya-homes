// Section 2 - Counter Animation (4000+, 100%, 5.37+)
document.addEventListener("DOMContentLoaded", function () {
    function animateCount(element, endVal, suffix, duration) {
        const startVal = 0;
        const startTime = performance.now();
        const isDecimal = endVal % 1 !== 0;
        const decimals = isDecimal
            ? (endVal.toString().split(".")[1] || "").length
            : 0;

        function update(currentTime) {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            let current = startVal + (endVal - startVal) * eased;

            if (isDecimal) {
                current = Number(current.toFixed(decimals));
            } else {
                current = Math.floor(current);
            }

            element.textContent = current + suffix;

            if (progress < 1) {
                requestAnimationFrame(update);
            } else {
                element.textContent = endVal + suffix;
            }
        }
        requestAnimationFrame(update);
    }

    function initCounters() {
        const counters = document.querySelectorAll(
            ".section-2-image-inner-metadata [data-count-end]",
        );
        if (counters.length === 0) return;

        const observer = new IntersectionObserver(
            function (entries) {
                entries.forEach(function (entry) {
                    if (!entry.isIntersecting) return;
                    const el = entry.target;
                    if (el.dataset.countDone) return;
                    el.dataset.countDone = "1";

                    const endVal = parseFloat(
                        el.getAttribute("data-count-end"),
                    );
                    const suffix = el.getAttribute("data-count-suffix") || "";
                    animateCount(el, endVal, suffix, 2000);
                });
            },
            { threshold: 0.3 },
        );

        counters.forEach(function (c) {
            observer.observe(c);
        });
    }
    initCounters();
});

// Testimonial Slider - Swiper
document.addEventListener("DOMContentLoaded", function () {
    var testimonialSwiperEl = document.querySelector(".testimonial-swiper");
    if (!testimonialSwiperEl || typeof Swiper === "undefined") return;

    new Swiper(".testimonial-swiper", {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: false,
        speed: 800,
        grabCursor: true,
        navigation: {
            prevEl: ".testimonial-swiper-prev",
            nextEl: ".testimonial-swiper-next",
        },
        effect: "slide",
        allowTouchMove: true,
        on: {
            init: function () {
                updateTestimonialNavState(this);
            },
            slideChange: function () {
                updateTestimonialNavState(this);
            },
        },
    });

    function updateTestimonialNavState(swiper) {
        var prev = document.querySelector(".testimonial-swiper-prev");
        var next = document.querySelector(".testimonial-swiper-next");
        if (prev) {
            if (swiper.isBeginning) prev.classList.add("testimonial-nav-inactive"); else prev.classList.remove("testimonial-nav-inactive");
        }
        if (next) {
            if (swiper.isEnd) next.classList.add("testimonial-nav-inactive"); else next.classList.remove("testimonial-nav-inactive");
        }
    }
});

// Project Slider Functionality
document.addEventListener("DOMContentLoaded", function () {
    // Get base URL - try to get from script tag or use relative path
    let baseUrl = "";
    const baseUrlScript = document.querySelector("script[data-base-url]");
    if (baseUrlScript) {
        baseUrl = baseUrlScript.getAttribute("data-base-url");
    } else {
        // Try to extract from current page URL
        const path = window.location.pathname;
        const pathParts = path
            .split("/")
            .filter((p) => p && p !== "index.php" && p !== "new_home.php");
        if (pathParts.length > 0) {
            baseUrl = "/" + pathParts.slice(0, -1).join("/") + "/";
        } else {
            baseUrl = "/";
        }
    }

    // All slide data with type (residential/commercial)
    // Residential: Saya Gold Avenue, Saya Zion, Saya Zenith, Saya Desire Residency | Commercial: Saya South X, Saya Biztop, Saya Piazza
    const allSlides = [
        {
            id: "01",
            title: "Saya Gold Avenue",
            location: "Indirapuram, Ghaziabad",
            desc: "A unique address with upstretched 3 & 4 BHK units and luxury penthouses.",
            image: baseUrl + "images/new_theme/goldavenueslider.jpg",
            url: baseUrl + "new-project-page.php?project=gold-avenue",
            type: "residential",
        },
        {
            id: "02",
            title: "Saya Zion",
            location: "Greater Noida West",
            desc: "Contemporary homes designed with a focus on refined comfort and effortless living.",
            image: baseUrl + "images/new_theme/main_slider2.jpg",
            url: baseUrl + "new-project-page.php?project=saya-zion",
            type: "residential",
        },
        {
            id: "03",
            title: "Saya Zenith",
            location: "Indirapuram, Ghaziabad",
            desc: "Beautifully designed ready-to-move residences with a focus on spacious living, elegance, and connectivity.",
            image: baseUrl + "images/new_theme/saya_zenith.jpg",
            url: baseUrl + "new-project-page.php?project=saya-zenith",
            type: "residential",
        },
        {
            id: "04",
            title: "Saya Desire Residency",
            location: "Indirapuram, Ghaziabad",
            desc: "Comfort-oriented residences located in a well-established area, designed for easy living.",
            image: baseUrl + "images/new_theme/sldierdesireimage.jpg",
            url: baseUrl + "new-project-page.php?project=saya-desire-residency",
            type: "residential",
        },
        {
            id: "01",
            title: "Saya South X",
            location: "Greater Noida West",
            desc: "A landmark high-street destination redefining premium retail, dining, and business experiences.",
            image: baseUrl + "images/new_theme/sayasouthx.jpg",
            url: baseUrl + "new-project-page.php",
            type: "commercial",
        },
        {
            id: "02",
            title: "Saya Biztop",
            location: "Greater Noida West",
            desc: "An iconic commercial tower designed for modern enterprises, exceptional visibility, and high-growth potential.",
            image: baseUrl + "images/new_theme/Biztophomeslider.jpg",
            url: baseUrl + "new-project-page.php?project=saya-biztop",
            type: "commercial",
        },
        {
            id: "03",
            title: "Saya Piazza",
            location: "Greater Noida West",
            desc: "A vibrant retail and entertainment hub curated for dynamic experiences and strong investment value.",
            image: baseUrl + "images/new_theme/sayapiazza.jpg",
            url: baseUrl + "new-project-page.php?project=saya-piazza",
            type: "commercial",
        },
    ];

    // Filtered slides based on current type
    let slides = allSlides.filter((slide) => slide.type === "residential");
    let currentType = "residential";

    // State
    let active = 0;

    // DOM elements
    const addressIcon = document.getElementById("address-icon");
    const slideTitle = document.getElementById("slide-title");
    const slideLocation = document.getElementById("slide-location");
    const slideLine = document.getElementById("slide-line");
    const slideDesc = document.getElementById("slide-desc");
    const slideImage = document.getElementById("slide-image");
    const slideLabel = document.getElementById("slide-label");
    const slideLabelId = document.getElementById("slide-label-id");
    const slideLabelTitle = document.getElementById("slide-label-title");
    const mobileNav = document.getElementById("mobile-nav");
    const desktopNav = document.getElementById("desktop-nav");
    const projectLeftContent = document.querySelector(".project-slider-left-content");
    const projectImageWrapper = document.querySelector(".project-slider-image-wrapper");

    // Check if elements exist before proceeding (slideLine optional - may be commented in HTML)
    if (
        !addressIcon ||
        !slideTitle ||
        !slideLocation ||
        !slideDesc ||
        !slideImage ||
        !slideLabel ||
        !slideLabelId ||
        !slideLabelTitle ||
        !mobileNav ||
        !desktopNav
    ) {
        return; // Exit if elements don't exist
    }

    function redirectToActiveProject() {
        const currentSlide = slides[active];
        if (currentSlide && currentSlide.url) {
            window.location.href = currentSlide.url;
        }
    }

    if (projectLeftContent) {
        projectLeftContent.style.cursor = "pointer";
        projectLeftContent.addEventListener("click", redirectToActiveProject);
    }

    if (projectImageWrapper) {
        projectImageWrapper.style.cursor = "pointer";
        projectImageWrapper.addEventListener("click", redirectToActiveProject);
    }

    // Animation helper function - simplified for right-to-left slide only
    function animateElement(element, enterClass, exitClass, updateContent) {
        return new Promise((resolve) => {
            // Start exit animation - slide left and fade out
            element.classList.remove(enterClass);
            element.classList.add("slide-exit"); // Initial exit state

            // Force reflow
            element.offsetHeight;

            // Trigger exit animation
            element.classList.remove("slide-exit");
            element.classList.add(exitClass);

            // Wait for exit animation to complete
            setTimeout(() => {
                // Update content while hidden (off-screen left)
                if (updateContent) updateContent();

                // Immediately set final position (center) without slide-in animation
                element.classList.remove(exitClass);
                element.classList.add(enterClass);

                setTimeout(resolve, 50);
            }, 500); // Match the animation duration
        });
    }

    // Update slide content
    function updateSlide(newActive) {
        if (newActive < 0 || newActive >= slides.length) return;

        active = newActive;
        const slide = slides[active];

        // Animate elements with content updates
        Promise.all([
            // Address icon
            animateElement(
                addressIcon,
                "slide-enter-active",
                "slide-exit-active",
                () => {
                    addressIcon.src =
                        baseUrl +
                        "images/new_theme/icons/project_slider_icon.svg";
                },
            ),

            // Title
            animateElement(
                slideTitle,
                "slide-enter-active",
                "slide-exit-active",
                () => {
                    slideTitle.textContent = slide.title;
                },
            ),

            // Location with delay
            new Promise((resolve) =>
                setTimeout(() => {
                    animateElement(
                        slideLocation,
                        "slide-enter-active",
                        "slide-exit-active",
                        () => {
                            slideLocation.textContent = slide.location;
                        },
                    ).then(resolve);
                }, 100),
            ),

            // Line with delay and custom animation - simplified (optional if slide-line not in DOM)
            new Promise((resolve) =>
                setTimeout(() => {
                    if (!slideLine) {
                        resolve();
                        return;
                    }
                    (() => {
                        return new Promise((lineResolve) => {
                            slideLine.classList.remove("line-enter-active");
                            slideLine.classList.add("line-exit");
                            slideLine.offsetHeight;
                            slideLine.classList.remove("line-exit");
                            slideLine.classList.add("line-exit-active");

                            setTimeout(() => {
                                slideLine.classList.remove("line-exit-active");
                                slideLine.classList.add("line-enter-active");
                                setTimeout(lineResolve, 50);
                            }, 500);
                        });
                    })().then(resolve);
                }, 150),
            ),

            // Description with delay
            new Promise((resolve) =>
                setTimeout(() => {
                    animateElement(
                        slideDesc,
                        "slide-enter-active",
                        "slide-exit-active",
                        () => {
                            slideDesc.textContent = slide.desc;
                        },
                    ).then(resolve);
                }, 200),
            ),

            // Image with custom animation logic - simplified for right-to-left only
            (() => {
                return new Promise((resolve) => {
                    // Start exit animation - slide left
                    slideImage.classList.remove("image-enter-active");
                    slideImage.classList.add("image-exit");
                    slideImage.offsetHeight;
                    slideImage.classList.remove("image-exit");
                    slideImage.classList.add("image-exit-active");

                    setTimeout(() => {
                        // Update content
                        slideImage.src = slide.image;
                        slideImage.alt = slide.title;

                        // Immediately set final position without slide-in animation
                        slideImage.classList.remove("image-exit-active");
                        slideImage.classList.add("image-enter-active");

                        setTimeout(resolve, 50);
                    }, 600);
                });
            })(),

            // Label with delay
            new Promise((resolve) =>
                setTimeout(() => {
                    animateElement(
                        slideLabel,
                        "slide-enter-active",
                        "slide-exit-active",
                        () => {
                            slideLabelId.textContent = slide.id;
                            slideLabelTitle.textContent = slide.title;
                        },
                    ).then(resolve);
                }, 200),
            ),
        ]).then(() => {
            // Update navigation after animations
            updateNavigation();
        });
    }

    // Update navigation
    function updateNavigation() {
        // Create array of inactive slides with their indices
        const inactiveSlidesWithIndices = slides
            .map((slide, index) => ({ slide, index }))
            .filter(({ index }) => index !== active);

        // Mobile navigation
        mobileNav.innerHTML = inactiveSlidesWithIndices
            .map(({ slide, index }) => {
                return `
          <div class="project-slider-nav-item" data-index="${index}">
            <div class="project-slider-nav-id">${slide.id}</div>
            <div class="project-slider-nav-line"></div>
            <div class="project-slider-nav-title">${slide.title}</div>
          </div>
        `;
            })
            .join("");

        // Desktop navigation
        desktopNav.innerHTML = inactiveSlidesWithIndices
            .map(({ slide, index }) => {
                return `
          <div class="project-slider-nav-item-vertical" data-index="${index}">
            <div class="project-slider-nav-arrow"><img src="${baseUrl}images/new_theme/icons/project_slider_arrow.svg" alt="Project Slider Arrow"/></div>
            <div>
            <div class="project-slider-nav-title-vertical">${slide.title}</div>
            <div class="project-slider-nav-id-vertical">${slide.id}</div>
            </div>
          </div>
        `;
            })
            .join("");

        // Add click handlers
        mobileNav
            .querySelectorAll(".project-slider-nav-item")
            .forEach((item) => {
                item.addEventListener("click", function (e) {
                    e.preventDefault();
                    const index = parseInt(this.getAttribute("data-index"));
                    updateSlide(index);
                });
            });

        desktopNav
            .querySelectorAll(".project-slider-nav-item-vertical")
            .forEach((item) => {
                item.addEventListener("click", function (e) {
                    e.preventDefault();
                    const index = parseInt(this.getAttribute("data-index"));
                    updateSlide(index);
                });
            });
    }

    // Initialize navigation
    updateNavigation();

    // Initialize first slide display
    if (slides.length > 0) {
        const slide = slides[active];
        addressIcon.src =
            baseUrl + "images/new_theme/icons/project_slider_icon.svg";
        slideTitle.textContent = slide.title;
        slideLocation.textContent = slide.location;
        slideDesc.textContent = slide.desc;
        slideImage.src = slide.image;
        slideImage.alt = slide.title;
        slideLabelId.textContent = slide.id;
        slideLabelTitle.textContent = slide.title;
    }

    // Filter buttons functionality
    const filterButtons = document.querySelectorAll(".project-filter-btn");
    filterButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const type = this.getAttribute("data-type");

            // Update active button
            filterButtons.forEach((btn) => {
                btn.classList.remove("active");
                btn.style.backgroundColor = "";
                btn.style.color = "";
                btn.style.border = "";
            });
            this.classList.add("active");
            this.style.backgroundColor = "#F6883E";
            this.style.color = "#fff";
            this.style.border = "none";

            // Filter slides by type
            slides = allSlides.filter((slide) => slide.type === type);
            currentType = type;

            // Reset to first slide
            active = 0;

            // Update slide content immediately
            const slide = slides[active];
            if (slide) {
                addressIcon.src =
                    baseUrl + "images/new_theme/icons/project_slider_icon.svg";
                slideTitle.textContent = slide.title;
                slideLocation.textContent = slide.location;
                slideDesc.textContent = slide.desc;
                slideImage.src = slide.image;
                slideImage.alt = slide.title;
                slideLabelId.textContent = slide.id;
                slideLabelTitle.textContent = slide.title;

                // Update navigation
                updateNavigation();
            }
        });
    });

    // Make updateSlide available globally for onclick handlers
    window.updateSlide = updateSlide;
});

// Projects Header Click Handler
document.addEventListener("DOMContentLoaded", function () {
    // Check if GSAP is available
    if (typeof gsap === "undefined") {
        console.warn(
            "GSAP is not loaded. Projects header animation will not work.",
        );
        return;
    }

    const projectsLink = document.querySelector(
        "a.new-header-nav-link.header-our-projects-trigger",
    );
    const hoverProjectHeaderContainer = document.querySelector(
        ".hover-project-header-container",
    );
    const hoverProjectHeaderBg = hoverProjectHeaderContainer
        ? hoverProjectHeaderContainer.querySelector(".hover-project-header-bg")
        : null;
    const hoverProjectHeaderContent = hoverProjectHeaderContainer
        ? hoverProjectHeaderContainer.querySelector(".hover-header-content")
        : null;
    const projectHeaderNavItemsMain = hoverProjectHeaderContainer
        ? hoverProjectHeaderContainer.querySelectorAll(".header-nav-item-main")
        : [];
    const projectHeadings = hoverProjectHeaderContainer
        ? hoverProjectHeaderContainer.querySelectorAll(
              ".projects-popup-heading",
          )
        : [];
    const projectHeaderSocialIcons = hoverProjectHeaderContainer
        ? hoverProjectHeaderContainer.querySelectorAll(
              ".header-social-icon-bottom",
          )
        : [];
    const projectHeaderSocialLinkLeft = hoverProjectHeaderContainer
        ? hoverProjectHeaderContainer.querySelector(".header-social-link-left")
        : null;
    const projectHeaderClose = hoverProjectHeaderContainer
        ? hoverProjectHeaderContainer.querySelector("#hoverProjectHeaderClose")
        : null;
    const body = document.body;

    if (
        !projectsLink ||
        !hoverProjectHeaderContainer ||
        !hoverProjectHeaderContent
    )
        return;

    let projectMenuTimeline = null;
    let isProjectMenuOpen = false;

    // Set initial states
    gsap.set(hoverProjectHeaderContainer, {
        opacity: 0,
        visibility: "hidden",
    });

    // Background image: starts above (upar), will animate down (niche) in 2s
    if (hoverProjectHeaderBg) {
        gsap.set(hoverProjectHeaderBg, { yPercent: -100 });
    }

    gsap.set(hoverProjectHeaderContent, { y: "-100%" });

    // Function to open projects menu
    function openProjectsMenu() {
        if (isProjectMenuOpen || projectMenuTimeline) return;

        isProjectMenuOpen = true;
        hoverProjectHeaderContainer.classList.add("active");
        body.classList.add("menu-open");
        body.style.overflow = "hidden";

        projectMenuTimeline = gsap.timeline({
            defaults: {
                ease: "power2.out",
            },
        });

        gsap.set(hoverProjectHeaderContainer, {
            visibility: "visible",
        });
        projectMenuTimeline.to(hoverProjectHeaderContainer, {
            opacity: 1,
            duration: 0.2,
            ease: "power1.out",
        });

        // Background + content bilkul ek saath, same time (0), same duration (2s)
        if (hoverProjectHeaderBg) {
            projectMenuTimeline.to(
                hoverProjectHeaderBg,
                {
                    yPercent: 0,
                    duration: 2,
                    ease: "power2.out",
                },
                0,
            );
        }
        projectMenuTimeline.to(
            hoverProjectHeaderContent,
            {
                y: 0,
                duration: 2,
                ease: "power2.out",
            },
            0,
        );

        projectMenuTimeline.call(function () {
            if (hoverProjectHeaderBg) {
                gsap.set(hoverProjectHeaderBg, {
                    yPercent: 0,
                    clearProps: "transform",
                });
            }
            gsap.set(hoverProjectHeaderContent, { y: 0, clearProps: "all" });
        });
    }

    // Function to close projects menu
    function closeProjectsMenu() {
        if (!isProjectMenuOpen) return;

        if (projectMenuTimeline) {
            projectMenuTimeline.kill();
        }

        const closeTimeline = gsap.timeline({
            defaults: {
                ease: "power2.in",
            },
            onComplete: function () {
                hoverProjectHeaderContainer.classList.remove("active");
                body.classList.remove("menu-open");
                body.style.overflow = "";
                isProjectMenuOpen = false;
                projectMenuTimeline = null;

                gsap.set(hoverProjectHeaderContainer, {
                    opacity: 0,
                    visibility: "hidden",
                });
                if (hoverProjectHeaderBg) {
                    gsap.set(hoverProjectHeaderBg, { yPercent: -100 });
                }
                gsap.set(hoverProjectHeaderContent, { y: "-100%" });
            },
        });

        if (hoverProjectHeaderBg) {
            closeTimeline.to(
                hoverProjectHeaderBg,
                {
                    yPercent: -100,
                    duration: 1,
                    ease: "power2.in",
                },
                0,
            );
        }
        closeTimeline.to(
            hoverProjectHeaderContent,
            {
                y: "-100%",
                duration: 1,
                ease: "power2.in",
            },
            0,
        );

        closeTimeline.to(
            hoverProjectHeaderContainer,
            {
                opacity: 0,
                visibility: "hidden",
                duration: 0.2,
            },
            "-=0.2",
        );
    }

    // Flag to prevent immediate closing after opening
    let justOpened = false;

    // Click event listener - always open on click (no toggle)
    projectsLink.addEventListener("click", function (e) {
        e.preventDefault();
        e.stopPropagation();
        e.stopImmediatePropagation();

        // Always open the menu when clicking "OUR PROJECTS"
        if (!isProjectMenuOpen) {
            justOpened = true;
            openProjectsMenu();
            // Reset flag after a short delay to allow click events to settle
            setTimeout(function () {
                justOpened = false;
            }, 100);
        }
    });

    // Close button
    if (projectHeaderClose) {
        projectHeaderClose.addEventListener("click", function (e) {
            e.preventDefault();
            e.stopPropagation();
            closeProjectsMenu();
        });
        projectHeaderClose.addEventListener(
            "touchstart",
            function (e) {
                e.preventDefault();
                e.stopPropagation();
                closeProjectsMenu();
            },
            { passive: false },
        );
    }

    // Close when clicking on container backdrop (empty area)
    if (hoverProjectHeaderContainer) {
        hoverProjectHeaderContainer.addEventListener("click", function (e) {
            // Only close if clicking directly on the container (backdrop), not on content
            if (
                e.target === hoverProjectHeaderContainer &&
                isProjectMenuOpen &&
                !justOpened
            ) {
                closeProjectsMenu();
            }
        });
    }

    // Close when clicking outside (but not on the projects link or immediately after opening)
    document.addEventListener("click", function (e) {
        // Don't close if we just opened the menu
        if (justOpened) {
            return;
        }
        // Don't close if clicking on projects link or inside the dropdown content
        if (
            projectsLink &&
            (projectsLink.contains(e.target) || projectsLink === e.target)
        ) {
            return;
        }
        if (
            hoverProjectHeaderContent &&
            hoverProjectHeaderContent.contains(e.target)
        ) {
            return;
        }
        // Only close if clicking outside and menu is open
        if (
            isProjectMenuOpen &&
            hoverProjectHeaderContainer &&
            !hoverProjectHeaderContainer.contains(e.target)
        ) {
            closeProjectsMenu();
        }
    });

    // Prevent clicks inside content from closing
    if (hoverProjectHeaderContent) {
        hoverProjectHeaderContent.addEventListener("click", function (e) {
            e.stopPropagation();
        });
    }

    // Close on ESC key
    document.addEventListener("keydown", function (e) {
        if (e.key === "Escape" && isProjectMenuOpen) {
            closeProjectsMenu();
        }
    });

    // Desktop/tablet: OUR PROJECTS in menu -> close menu, open projects popup
    const ourProjectsLink = document.querySelector(
        ".hover-header-container .header-nav-our-projects-link",
    );
    if (ourProjectsLink) {
        ourProjectsLink.addEventListener("click", function (e) {
            e.preventDefault();
            e.stopPropagation();
            var hoverHeaderContainer = document.querySelector(
                ".hover-header-container",
            );
            var mobileMenuToggle = document.getElementById("mobileMenuToggle");
            if (
                hoverHeaderContainer &&
                hoverHeaderContainer.classList.contains("active")
            ) {
                var hoverHeaderClose =
                    document.getElementById("hoverHeaderClose");
                if (hoverHeaderClose) hoverHeaderClose.click();
                else {
                    hoverHeaderContainer.classList.remove("active");
                    document.body.classList.remove("menu-open");
                    document.body.style.overflow = "";
                    if (mobileMenuToggle)
                        mobileMenuToggle.classList.remove("active");
                }
            }
            setTimeout(function () {
                if (!isProjectMenuOpen) openProjectsMenu();
            }, 300);
        });
    }

    // Mobile ONLY (phone): RESIDENTIAL / COMMERCIAL toggle dropdown below (no popup)
    // Tablet/Desktop: This behavior is disabled
    function isMobileScreen() {
        return window.innerWidth <= 480;
    }

    const hamburgerProjectsTriggers = document.querySelectorAll(
        ".hover-header-container .header-nav-projects-trigger",
    );
    const dropdownResidential = document.getElementById("dropdown-residential");
    const dropdownCommercial = document.getElementById("dropdown-commercial");

    hamburgerProjectsTriggers.forEach(function (trigger) {
        trigger.addEventListener("click", function (e) {
            // Only work on mobile (phone) screens, not tablet/desktop
            if (!isMobileScreen()) {
                return; // Do nothing on tablet/desktop
            }

            e.preventDefault();
            e.stopPropagation();
            var projectType =
                this.getAttribute("data-project-type") || "residential";
            var dropdown =
                projectType === "residential"
                    ? dropdownResidential
                    : dropdownCommercial;
            var otherDropdown =
                projectType === "residential"
                    ? dropdownCommercial
                    : dropdownResidential;
            var otherTrigger =
                projectType === "residential"
                    ? document.querySelector(
                          '.hover-header-container .header-nav-projects-trigger[data-project-type="commercial"]',
                      )
                    : document.querySelector(
                          '.hover-header-container .header-nav-projects-trigger[data-project-type="residential"]',
                      );

            if (!dropdown) return;

            var isOpen = dropdown.classList.contains("open");
            dropdown.classList.toggle("open", !isOpen);
            trigger.classList.toggle("active", !isOpen);

            if (!isOpen) {
                if (otherDropdown) otherDropdown.classList.remove("open");
                if (otherTrigger) otherTrigger.classList.remove("active");
            }
        });
    });

    function closeAllProjectDropdowns() {
        if (dropdownResidential) dropdownResidential.classList.remove("open");
        if (dropdownCommercial) dropdownCommercial.classList.remove("open");
        hamburgerProjectsTriggers.forEach(function (t) {
            t.classList.remove("active");
        });
    }

    var hoverHeaderClose = document.getElementById("hoverHeaderClose");
    if (hoverHeaderClose) {
        hoverHeaderClose.addEventListener("click", closeAllProjectDropdowns);
        hoverHeaderClose.addEventListener("touchstart", closeAllProjectDropdowns, {
            passive: true,
        });
    }

    var mobileMenuToggle = document.getElementById("mobileMenuToggle");
    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener("click", function () {
            setTimeout(closeAllProjectDropdowns, 50);
        });
    }
});

// Section 6 Award Slider Functionality
$(document).ready(function () {
    const sliderContainer = $(".section-6-slider-container");
    if (sliderContainer.length === 0) return;

    const sliderTrack = $(".section-6-slider-track");
    const originalSlides = $(
        ".section-6-slider-track .section-6-content-inner-div",
    );
    const prevBtn = $(".section-6-slider-btn-prev");
    const nextBtn = $(".section-6-slider-btn-next");

    if (originalSlides.length === 0) return;

    let currentIndex = 0;
    let slidesToShow = 3;
    let isAnimating = false;
    let autoPlayInterval = null;
    let isPaused = false;
    let totalSlides = originalSlides.length;

    // Function to clone slides for seamless infinite loop
    function cloneSlides() {
        // Remove existing clones
        $(".cloned-slide").remove();

        // Clone last slidesToShow slides and add to beginning
        for (let i = totalSlides - slidesToShow; i < totalSlides; i++) {
            originalSlides
                .eq(i)
                .clone()
                .addClass("cloned-slide cloned-start")
                .prependTo(sliderTrack);
        }

        // Clone first slidesToShow slides and add to end
        for (let i = 0; i < slidesToShow; i++) {
            originalSlides
                .eq(i)
                .clone()
                .addClass("cloned-slide cloned-end")
                .appendTo(sliderTrack);
        }

        // Update allSlides reference after cloning
        allSlides = $(".section-6-slider-track .section-6-content-inner-div");
    }

    // Get all slides (will be updated after cloning)
    let allSlides = $(".section-6-slider-track .section-6-content-inner-div");

    // Initial clone
    cloneSlides();

    // Set initial position to first real slide (after cloned slides at start)
    currentIndex = slidesToShow;

    // Function to update slides to show based on screen size
    function updateSlidesToShow() {
        const windowWidth = $(window).width();
        const oldSlidesToShow = slidesToShow;

        if (windowWidth <= 640) {
            slidesToShow = 1;
        } else if (windowWidth <= 991) {
            slidesToShow = 2;
        } else {
            slidesToShow = 3;
        }

        // If slidesToShow changed, rebuild clones
        if (oldSlidesToShow !== slidesToShow) {
            cloneSlides();
            // Reset to first real slide
            currentIndex = slidesToShow;
            updateSlider(true);
        }
    }

    // Function to update slider position
    function updateSlider(skipTransition = false) {
        if (allSlides.length === 0) return;

        // Get the first slide's width
        const slideWidth = allSlides.eq(0).outerWidth();

        // If slideWidth is 0 or invalid, the layout isn't ready yet
        if (!slideWidth || slideWidth === 0) {
            // Retry after a short delay
            setTimeout(function () {
                updateSlider(skipTransition);
            }, 50);
            return;
        }

        // Get the gap value from CSS (gap: var(--spacing-3xl) which is 20px)
        const computedStyle = window.getComputedStyle(sliderTrack[0]);
        const gapValue = parseFloat(computedStyle.gap) || 20;

        // Calculate translateX: each slide (except first) has a gap before it in flexbox
        // So to move to index N: -N * (slideWidth + gapValue)
        const translateX = -currentIndex * (slideWidth + gapValue);

        if (skipTransition) {
            sliderTrack.css({
                transform: `translateX(${translateX}px)`,
                transition: "none",
            });
        } else {
            sliderTrack.css({
                transform: `translateX(${translateX}px)`,
                transition: "transform 0.5s ease-in-out",
            });
        }

        // Buttons are never disabled in infinite loop
        prevBtn.prop("disabled", false);
        nextBtn.prop("disabled", false);
    }

    // Check if we need to jump to real slides (seamless loop)
    function checkAndJump() {
        // If we're at cloned slides at the end, jump to real slides at start
        // Total structure: [cloned-start] [real slides] [cloned-end]
        // Index range: 0 to slidesToShow-1 (cloned-start), slidesToShow to slidesToShow+totalSlides-1 (real), slidesToShow+totalSlides to end (cloned-end)
        if (currentIndex >= slidesToShow + totalSlides) {
            currentIndex = slidesToShow;
            updateSlider(true); // Instant jump without transition
        }
        // If we're at cloned slides at the start, jump to real slides at end
        else if (currentIndex < slidesToShow) {
            currentIndex = slidesToShow + totalSlides - 1;
            updateSlider(true); // Instant jump without transition
        }
    }

    // Next slide with seamless infinite loop
    function nextSlide() {
        if (isAnimating) return;
        isAnimating = true;

        currentIndex++;
        updateSlider();

        // Check if we need to jump after animation
        setTimeout(() => {
            checkAndJump();
            isAnimating = false;
        }, 500);

        // Reset auto-play timer
        resetAutoPlay();
    }

    // Previous slide with seamless infinite loop
    function prevSlide() {
        if (isAnimating) return;
        isAnimating = true;

        currentIndex--;
        updateSlider();

        // Check if we need to jump after animation
        setTimeout(() => {
            checkAndJump();
            isAnimating = false;
        }, 500);

        // Reset auto-play timer
        resetAutoPlay();
    }

    // Auto-play functionality
    function startAutoPlay() {
        if (autoPlayInterval) {
            clearInterval(autoPlayInterval);
        }

        autoPlayInterval = setInterval(function () {
            if (!isPaused && !isAnimating) {
                nextSlide();
            }
        }, 2000); // 2 seconds
    }

    function stopAutoPlay() {
        if (autoPlayInterval) {
            clearInterval(autoPlayInterval);
            autoPlayInterval = null;
        }
    }

    function resetAutoPlay() {
        stopAutoPlay();
        if (!isPaused) {
            startAutoPlay();
        }
    }

    // Pause on hover
    sliderContainer.on("mouseenter", function () {
        isPaused = true;
        stopAutoPlay();
    });

    sliderContainer.on("mouseleave", function () {
        isPaused = false;
        startAutoPlay();
    });

    // Event listeners
    nextBtn.on("click", nextSlide);
    prevBtn.on("click", prevSlide);

    // Handle window resize
    let resizeTimer;
    $(window).on("resize", function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function () {
            updateSlidesToShow();
            resetAutoPlay();
        }, 250);
    });

    // Initialize - wait for layout to be ready
    updateSlidesToShow();

    // Force a reflow to ensure DOM is ready, then set initial position
    // Use requestAnimationFrame to ensure layout is complete
    requestAnimationFrame(function () {
        requestAnimationFrame(function () {
            // Update allSlides reference after cloning
            allSlides = $(
                ".section-6-slider-track .section-6-content-inner-div",
            );
            currentIndex = slidesToShow;
            updateSlider(true); // Set initial position without transition

            // Double-check position after a brief delay to ensure it's correct
            setTimeout(function () {
                const slideWidth = allSlides.eq(0).outerWidth();
                if (slideWidth && slideWidth > 0) {
                    const computedStyle = window.getComputedStyle(
                        sliderTrack[0],
                    );
                    const gapValue = parseFloat(computedStyle.gap) || 20;
                    const expectedTranslateX =
                        -currentIndex * (slideWidth + gapValue);
                    const currentTransform = sliderTrack.css("transform");

                    // Verify the position is correct, if not, fix it
                    updateSlider(true);
                }
                startAutoPlay();
            }, 50);
        });
    });

    // Cleanup on page unload
    $(window).on("beforeunload", function () {
        stopAutoPlay();
    });
});

// Section 4 - Play button: sirf background video chale, koi modal nahi
$(document).ready(function () {
    const section4PlayIcon = document.getElementById("section4PlayIcon");
    const section4BgVideo = document.getElementById("section4BgVideo");
    const section4VideoPlayer = document.getElementById("section4VideoPlayer");
    const section4Wrap = section4BgVideo
        ? section4BgVideo.closest(".section-4")
        : null;
    const section4PauseOverlay = document.getElementById(
        "section4PauseOverlay",
    );
    const section4PauseIcon = document.getElementById("section4PauseIcon");

    if (!section4PlayIcon || !section4BgVideo) return;

    function showPlayState() {
        if (section4VideoPlayer) section4VideoPlayer.style.display = "";
        if (section4PauseOverlay) section4PauseOverlay.style.display = "none";
    }

    function showPauseState() {
        if (section4VideoPlayer) section4VideoPlayer.style.display = "none";
        if (section4PauseOverlay) section4PauseOverlay.style.display = "flex";
    }

    function hideControlsWhilePlaying() {
        if (section4VideoPlayer) section4VideoPlayer.style.display = "none";
        if (section4PauseOverlay) section4PauseOverlay.style.display = "none";
    }

    function playSection4Video() {
        section4BgVideo.muted = false;
        section4BgVideo.loop = false;
        hideControlsWhilePlaying();
        section4BgVideo.play().catch(function () {});
    }

    section4PlayIcon.addEventListener("click", function (e) {
        e.preventDefault();
        playSection4Video();
    });

    if (section4VideoPlayer) {
        section4VideoPlayer.addEventListener("click", function (e) {
            e.preventDefault();
            playSection4Video();
        });
    }

    if (section4PauseIcon) {
        section4PauseIcon.addEventListener("click", function (e) {
            e.preventDefault();
            e.stopPropagation();
            section4BgVideo.pause();
            showPlayState();
        });
    }

    if (section4PauseOverlay) {
        section4PauseOverlay.addEventListener("click", function (e) {
            e.preventDefault();
            if (!section4BgVideo.paused) {
                section4BgVideo.pause();
                showPlayState();
            }
        });
    }

    section4BgVideo.addEventListener("click", function (e) {
        e.stopPropagation();
        if (section4BgVideo.paused) {
            section4BgVideo.play().catch(function () {});
            hideControlsWhilePlaying();
        } else {
            section4BgVideo.pause();
            showPlayState();
        }
    });

    if (section4Wrap) {
        section4Wrap.addEventListener("mouseenter", function () {
            if (!section4BgVideo.paused) showPauseState();
        });
        section4Wrap.addEventListener("mouseleave", function () {
            if (!section4BgVideo.paused) hideControlsWhilePlaying();
        });
    }

    section4BgVideo.addEventListener("ended", function () {
        section4BgVideo.muted = true;
        section4BgVideo.loop = true;
        section4BgVideo.currentTime = 0;
        showPlayState();
    });
});
