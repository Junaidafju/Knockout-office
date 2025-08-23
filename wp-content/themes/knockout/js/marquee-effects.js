/**
 * Optimized Marquee Effects for Sports Activities
 * Provides smooth scrolling with performance optimization
 */

document.addEventListener('DOMContentLoaded', function () {
    const marqueeContainer = document.querySelector('.marquee-container');
    const marquee = document.querySelector('.sports-marquee');

    if (!marqueeContainer || !marquee) return;

    // Enhanced hardware acceleration for better mobile performance
    marqueeContainer.style.transform = 'translateZ(0)';
    marqueeContainer.style.willChange = 'transform';
    marqueeContainer.style.backfaceVisibility = 'hidden';
    marqueeContainer.style.perspective = '1000px';

    // Function to set animation based on viewport width
    function setMarqueeSpeed() {
        const viewportWidth = window.innerWidth;
        
        if (viewportWidth <= 480) {
            // Mobile devices - fast speed
            marqueeContainer.style.animation = 'marqueeScroll 15s linear infinite';
        } else if (viewportWidth <= 768) {
            // Tablet portrait - medium-fast speed
            marqueeContainer.style.animation = 'marqueeScroll 25s linear infinite';
        } else if (viewportWidth <= 1024) {
            // Tablet landscape - medium speed
            marqueeContainer.style.animation = 'marqueeScroll 35s linear infinite';
        } else {
            // Desktop - normal speed
            marqueeContainer.style.animation = 'marqueeScroll 90s linear infinite';
        }
    }

    // Set initial speed
    setMarqueeSpeed();

    // Update on window resize with better debouncing
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(setMarqueeSpeed, 150); // Faster response
    });
    
    // Also handle orientation change for mobile devices
    window.addEventListener('orientationchange', function() {
        setTimeout(setMarqueeSpeed, 300); // Allow time for orientation change
    });

    // Add pause/resume functionality on hover with smooth transition
    marquee.addEventListener('mouseenter', function () {
        marqueeContainer.style.animationPlayState = 'paused';
    });

    marquee.addEventListener('mouseleave', function () {
        marqueeContainer.style.animationPlayState = 'running';
    });

    // Enhanced visibility with intersection observer
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('marquee-visible');
                    marqueeContainer.style.animationPlayState = 'running';
                } else {
                    marqueeContainer.style.animationPlayState = 'running';
                }
            });
        }, { threshold: 0.1 });

        observer.observe(marquee);
    }
});
