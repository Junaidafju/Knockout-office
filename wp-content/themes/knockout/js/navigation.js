/**
 * Navigation functionality for KnockOut theme
 */

document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const mobileNavigation = document.querySelector('.mobile-navigation');
    const siteHeader = document.querySelector('.site-header');
    const body = document.body;
    const html = document.documentElement;

    function updateMobileNavPosition() {
        if (!mobileNavigation) return;
        const adminBar = document.getElementById('wpadminbar');
        // Prefer live on-screen position to capture any extra bars above the header
        const headerBottom = siteHeader ? siteHeader.getBoundingClientRect().bottom : 60;
        // If WP admin bar is fixed and visible, ensure we don't overlap
        const adminBarHeight = adminBar ? adminBar.offsetHeight : 0;
        const totalTopOffset = Math.max(headerBottom, adminBarHeight) || 60;
        // Position the mobile nav right below the header (+ admin bar if present)
        mobileNavigation.style.top = totalTopOffset + 'px';
        // Ensure full viewport height below header
        mobileNavigation.style.height = `calc(100vh - ${totalTopOffset}px)`;
        // Expose as CSS variable for consistency in stylesheets
        document.documentElement.style.setProperty('--ko-header-height', totalTopOffset + 'px');
    }
    
    if (mobileMenuToggle && mobileNavigation) {
        // Initialize position on load
        updateMobileNavPosition();
        mobileMenuToggle.addEventListener('click', function() {
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            
            // Toggle aria-expanded
            this.setAttribute('aria-expanded', !isExpanded);
            
            // Toggle active class
            this.classList.toggle('active');
            mobileNavigation.classList.toggle('active');

            // Lock/unlock body scroll when menu is open/closed
            if (mobileNavigation.classList.contains('active')) {
                body.classList.add('mobile-menu-open');
                html.classList.add('mobile-menu-open');
                if (siteHeader) siteHeader.classList.add('header-fixed');
                updateMobileNavPosition();
            } else {
                body.classList.remove('mobile-menu-open');
                html.classList.remove('mobile-menu-open');
                if (siteHeader) siteHeader.classList.remove('header-fixed');
            }
        });
    }
    
    // Close mobile menu when clicking on a link
    const mobileLinks = document.querySelectorAll('.mobile-navigation a');
    mobileLinks.forEach(link => {
        link.addEventListener('click', function() {
            mobileMenuToggle.classList.remove('active');
            mobileNavigation.classList.remove('active');
            mobileMenuToggle.setAttribute('aria-expanded', 'false');
            body.classList.remove('mobile-menu-open');
            html.classList.remove('mobile-menu-open');
            if (siteHeader) siteHeader.classList.remove('header-fixed');
        });
    });
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        if (!mobileMenuToggle.contains(event.target) && !mobileNavigation.contains(event.target)) {
            mobileMenuToggle.classList.remove('active');
            mobileNavigation.classList.remove('active');
            mobileMenuToggle.setAttribute('aria-expanded', 'false');
            body.classList.remove('mobile-menu-open');
            html.classList.remove('mobile-menu-open');
            if (siteHeader) siteHeader.classList.remove('header-fixed');
        }
    });

    // Keep menu positioned correctly on resize/orientation change
    window.addEventListener('resize', updateMobileNavPosition);
    window.addEventListener('orientationchange', updateMobileNavPosition);
});