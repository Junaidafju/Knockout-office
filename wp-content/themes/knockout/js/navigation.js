/**
 * Navigation functionality for KnockOut theme
 */

document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const mobileNavigation = document.querySelector('.mobile-navigation');
    const body = document.body;
    
    if (mobileMenuToggle && mobileNavigation) {
        mobileMenuToggle.addEventListener('click', function() {
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            
            // Toggle aria-expanded
            this.setAttribute('aria-expanded', !isExpanded);
            
            // Toggle active class
            this.classList.toggle('active');
            mobileNavigation.classList.toggle('active');
            
            // Toggle body class to prevent scrolling when menu is open
            body.classList.toggle('mobile-menu-open');
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
        });
    });
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        if (!mobileMenuToggle.contains(event.target) && !mobileNavigation.contains(event.target)) {
            mobileMenuToggle.classList.remove('active');
            mobileNavigation.classList.remove('active');
            mobileMenuToggle.setAttribute('aria-expanded', 'false');
            body.classList.remove('mobile-menu-open');
        }
    });
    
    // Close mobile menu on escape key press
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && mobileNavigation.classList.contains('active')) {
            mobileMenuToggle.classList.remove('active');
            mobileNavigation.classList.remove('active');
            mobileMenuToggle.setAttribute('aria-expanded', 'false');
            body.classList.remove('mobile-menu-open');
            mobileMenuToggle.focus(); // Return focus to toggle button
        }
    });
    
    // Close mobile menu on window resize (if switching to desktop)
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768) {
            mobileMenuToggle.classList.remove('active');
            mobileNavigation.classList.remove('active');
            mobileMenuToggle.setAttribute('aria-expanded', 'false');
            body.classList.remove('mobile-menu-open');
        }
    });
    
    // Prevent scrolling on mobile menu items container to avoid double scrollbars
    if (mobileNavigation) {
        mobileNavigation.addEventListener('touchmove', function(event) {
            event.stopPropagation();
        });
    }
});
