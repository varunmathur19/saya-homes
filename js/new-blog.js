/**
 * Robust sticky fallback for sidebar on desktop:
 * sticks to top while scrolling and stops at layout bottom.
 */
(function () {
    var BREAKPOINT = 992;
    var TOP_OFFSET = 90;

    var layout = document.querySelector('.new-blog-page .blog-layout');
    var sidebar = document.querySelector('.new-blog-page .blog-sidebar');
    var stickyWrap = document.querySelector('.new-blog-page .blog-sidebar-sticky-wrap');
    if (!layout || !sidebar || !stickyWrap) return;

    var ticking = false;

    function resetSticky() {
        stickyWrap.style.position = 'relative';
        stickyWrap.style.top = '0';
        stickyWrap.style.left = '0';
        stickyWrap.style.width = 'auto';
    }

    function updateSticky() {
        var width = window.innerWidth || document.documentElement.clientWidth;
        if (width < BREAKPOINT) {
            resetSticky();
            return;
        }

        var layoutRect = layout.getBoundingClientRect();
        var sidebarRect = sidebar.getBoundingClientRect();
        var wrapRect = stickyWrap.getBoundingClientRect();

        var layoutTopAbs = window.scrollY + layoutRect.top;
        var layoutBottomAbs = window.scrollY + layoutRect.bottom;
        var stopY = layoutBottomAbs - wrapRect.height - TOP_OFFSET;

        if (window.scrollY + TOP_OFFSET <= layoutTopAbs) {
            resetSticky();
            return;
        }

        if (window.scrollY < stopY) {
            stickyWrap.style.position = 'fixed';
            stickyWrap.style.top = TOP_OFFSET + 'px';
            stickyWrap.style.left = sidebarRect.left + 'px';
            stickyWrap.style.width = sidebarRect.width + 'px';
            return;
        }

        stickyWrap.style.position = 'absolute';
        stickyWrap.style.top = (layoutBottomAbs - layoutTopAbs - wrapRect.height) + 'px';
        stickyWrap.style.left = '0';
        stickyWrap.style.width = sidebarRect.width + 'px';
    }

    function onScrollOrResize() {
        if (ticking) return;
        ticking = true;
        requestAnimationFrame(function () {
            updateSticky();
            ticking = false;
        });
    }

    window.addEventListener('scroll', onScrollOrResize, { passive: true });
    window.addEventListener('resize', onScrollOrResize);
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', updateSticky);
    } else {
        updateSticky();
    }
})();
