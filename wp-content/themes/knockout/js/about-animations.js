/**
 * About Section Animations - Mobile Optimized
 * 
 * Handles fade-in animations for about section elements
 * Fixed for mobile device rendering issues
 */

document.addEventListener('DOMContentLoaded', function() {
    // Function to check if element is in viewport
    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Function to force visibility on mobile devices
    function forceMobileVisibility() {
        // Check if we're on a mobile device
        const isMobile = window.innerWidth <= 768;
        
        if (isMobile) {
            // Force all about section elements to be visible
            const aboutElements = document.querySelectorAll('.ko-about-section, .ko-about-wrapper, .ko-about-header, .ko-about-image-container, .ko-about-text, .ko-wavy-separator');
            
            aboutElements.forEach(function(element) {
                if (element) {
                    element.style.opacity = '1';
                    element.style.visibility = 'visible';
                    element.style.display = 'block';
                    element.style.position = 'relative';
                    element.style.zIndex = '10';
                    
                    // Remove any transform that might be hiding elements
                    element.style.transform = 'none';
                    
                    // Force hardware acceleration
                    element.style.webkitTransform = 'translateZ(0)';
                    element.style.transform = 'translateZ(0)';
                }
            });
            
            // Specifically fix video container visibility
            const videoContainers = document.querySelectorAll('.ko-about-image-container');
            videoContainers.forEach(function(container) {
                if (container) {
                    container.style.opacity = '1';
                    container.style.visibility = 'visible';
                    container.style.display = 'block';
                    container.style.position = 'relative';
                    container.style.zIndex = '10';
                }
            });
            
            // Fix video elements
            const videos = document.querySelectorAll('.ko-about-video');
            videos.forEach(function(video) {
                if (video) {
                    video.style.opacity = '1';
                    video.style.visibility = 'visible';
                    video.style.display = 'block';
                    video.style.position = 'relative';
                    video.style.zIndex = '10';
                }
            });
        }
    }

    // Function to add animation class when element is in view
    function handleAnimations() {
        const animatedElements = document.querySelectorAll('.ko-fade-in-up, .fade-in-up');
        
        animatedElements.forEach(function(element) {
            if (isElementInViewport(element)) {
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
                element.style.visibility = 'visible';
            }
        });
    }

    // Run mobile visibility fix immediately
    forceMobileVisibility();
    
    // Run on load
    handleAnimations();

    // Run on scroll with throttling
    let isScrolling = false;
    window.addEventListener('scroll', function() {
        if (!isScrolling) {
            requestAnimationFrame(function() {
                handleAnimations();
                isScrolling = false;
            });
            isScrolling = true;
        }
    });

    // Alternative: Use Intersection Observer for better performance (modern browsers)
    if ('IntersectionObserver' in window) {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    entry.target.style.visibility = 'visible';
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe all animation elements
        const elementsToObserve = document.querySelectorAll('.ko-fade-in-up, .fade-in-up');
        elementsToObserve.forEach(function(element) {
            observer.observe(element);
        });
    }

    // Additional mobile-specific fixes
    window.addEventListener('resize', function() {
        // Re-apply mobile visibility fixes on resize
        setTimeout(forceMobileVisibility, 100);
    });

    // Force visibility after a short delay to ensure DOM is fully rendered
    setTimeout(forceMobileVisibility, 500);
    setTimeout(forceMobileVisibility, 1000);
    setTimeout(forceMobileVisibility, 2000);
});
