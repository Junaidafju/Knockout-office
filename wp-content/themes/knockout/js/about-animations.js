/**
 * About Section Animations
 * 
 * Handles fade-in animations for about section elements
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

    // Function to add animation class when element is in view
    function handleAnimations() {
        const animatedElements = document.querySelectorAll('.ko-fade-in-up, .fade-in-up');
        
        animatedElements.forEach(function(element) {
            if (isElementInViewport(element)) {
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            }
        });
    }

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
});
