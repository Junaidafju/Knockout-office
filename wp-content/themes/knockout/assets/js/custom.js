/**
 * Custom JavaScript for KnockOut Theme
 * Handles scroll animations and other interactive elements
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize scroll animations
    initScrollAnimations();
    
    // Re-initialize animations when the page is fully loaded (including images)
    window.addEventListener('load', function() {
        initScrollAnimations();
    });
    
    // Re-run animations when the window is resized
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            initScrollAnimations();
        }, 250);
    });
    
    // Re-run animations when navigating with the back/forward buttons
    window.addEventListener('pageshow', function(event) {
        if (event.persisted) {
            initScrollAnimations();
        }
    });
});

/**
 * Initialize scroll animations using Intersection Observer
 */
function initScrollAnimations() {
    // Select all elements with the scroll-animate class
    const animatedElements = document.querySelectorAll('.scroll-animate');
    
    // If there are no elements to animate, return early
    if (animatedElements.length === 0) return;
    
    // Create a new Intersection Observer
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            // If the element is in the viewport
            if (entry.isIntersecting) {
                // Add the 'animate' class to trigger the animation
                entry.target.classList.add('animate');
                
                // If the animation should only happen once, stop observing
                if (!entry.target.hasAttribute('data-repeat')) {
                    observer.unobserve(entry.target);
                }
            } else if (entry.target.hasAttribute('data-repeat')) {
                // If the element has the repeat attribute, remove the animate class when it's not in view
                entry.target.classList.remove('animate');
            }
        });
    }, {
        // Trigger the animation when the element is 20% in the viewport
        threshold: 0.2,
        // Add a small margin to trigger the animation a bit before the element is in view
        rootMargin: '0px 0px -20% 0px'
    });
    
    // Observe each animated element
    animatedElements.forEach(element => {
        // Reset the animation state
        element.classList.remove('animate');
        
        // Start observing the element
        observer.observe(element);
    });
}
