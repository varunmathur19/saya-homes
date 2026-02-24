/**
 * Blog: right section sticky. Scroll par right fix rahega;
 * pagination ke paas aate hi right section smoothly scroll ho jayega.
 */
(function () {
    var STICKY_BREAKPOINT = 769;
    var HEADER_OFFSET = 90;
    var STICK_MARGIN = 280;
    var UNSTICK_MARGIN = 220;

    var layout = document.querySelector('.new-blog-page .blog-layout');
    var sidebar = document.querySelector('.new-blog-page .blog-sidebar');
    if (!layout || !sidebar) return;

    var ticking = false;
    var isStuck = false;

    function updateSticky() {
        var w = window.innerWidth || document.documentElement.clientWidth;
        if (w < STICKY_BREAKPOINT) {
            if (isStuck) {
                sidebar.classList.remove('is-stuck');
                sidebar.style.left = '';
                sidebar.style.width = '';
                isStuck = false;
            }
            return;
        }

        var layoutRect = layout.getBoundingClientRect();
        var vh = window.innerHeight || document.documentElement.clientHeight;
        var layoutBottom = layoutRect.bottom;
        var layoutTop = layoutRect.top;

        if (isStuck) {
            /* Neeche pagination ke paas: unstick. Upar scroll karte waqt bhi apni jagah wapas: unstick */
            if (layoutBottom <= vh + UNSTICK_MARGIN || layoutTop > HEADER_OFFSET) {
                sidebar.classList.remove('is-stuck');
                sidebar.style.left = '';
                sidebar.style.width = '';
                isStuck = false;
            }
        } else {
            if (layoutTop <= HEADER_OFFSET && layoutBottom > vh + STICK_MARGIN) {
                var sidebarRect = sidebar.getBoundingClientRect();
                sidebar.style.left = sidebarRect.left + 'px';
                sidebar.style.width = sidebarRect.width + 'px';
                sidebar.classList.add('is-stuck');
                isStuck = true;
            }
        }
    }

    function onScrollOrResize() {
        if (!ticking) {
            requestAnimationFrame(function () {
                updateSticky();
                ticking = false;
            });
            ticking = true;
        }
    }

    window.addEventListener('scroll', onScrollOrResize, { passive: true });
    window.addEventListener('resize', onScrollOrResize);
    updateSticky();
})();
