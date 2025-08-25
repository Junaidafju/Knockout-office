/**
 * Front Page JavaScript for KnockOut Theme
 * Handles animations, lazy loading, and interactive elements
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // Intersection Observer for section animations with robust fallbacks
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const revealAllSections = () => {
        try {
            const allWrappers = document.querySelectorAll('.section-wrapper');
            allWrappers.forEach(el => el.classList.add('animate-in'));
        } catch (e) {}
    };

    const sectionWrappers = document.querySelectorAll('.section-wrapper');
    let sectionObserver = null;

    if ('IntersectionObserver' in window) {
        sectionObserver = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                    sectionObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        sectionWrappers.forEach(section => {
            sectionObserver.observe(section);
        });
    } else {
        // Fallback for environments/devices without IntersectionObserver
        revealAllSections();
    }

    // Safety net: if sections are still hidden shortly after load, reveal them
    setTimeout(() => {
        const anyHidden = Array.from(sectionWrappers).some(el => !el.classList.contains('animate-in'));
        if (anyHidden) revealAllSections();
    }, 2500);

    window.addEventListener('load', () => {
        setTimeout(() => {
            const anyHidden = Array.from(sectionWrappers).some(el => !el.classList.contains('animate-in'));
            if (anyHidden) revealAllSections();
        }, 1000);
    });

    // Lazy loading for images
    const imageObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                
                // Add loading class
                img.classList.add('image-placeholder');
                
                // Create new image to preload
                const newImg = new Image();
                newImg.onload = function() {
                    img.src = newImg.src;
                    img.classList.remove('image-placeholder');
                    img.classList.add('loaded');
                };
                newImg.src = img.dataset.src || img.src;
                
                imageObserver.unobserve(img);
            }
        });
    });

    // Observe lazy load images
    const lazyImages = document.querySelectorAll('.gallery-image-lazy, [loading="lazy"]');
    lazyImages.forEach(img => {
        imageObserver.observe(img);
    });

    // Smooth scrolling for anchor links
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                const headerHeight = document.querySelector('.site-header').offsetHeight;
                const targetPosition = targetElement.offsetTop - headerHeight - 20;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Parallax effect for hero background
    let ticking = false;
    
    function updateParallax() {
        const scrolled = window.pageYOffset;
        const heroSection = document.querySelector('.hero-section');
        const heroBackground = document.querySelector('.hero-bg-image');
        
        if (heroSection && heroBackground) {
            const rate = scrolled * -0.5;
            heroBackground.style.transform = `translateY(${rate}px)`;
        }
        
        ticking = false;
    }

    function requestParallaxUpdate() {
        if (!ticking) {
            requestAnimationFrame(updateParallax);
            ticking = true;
        }
    }

    window.addEventListener('scroll', requestParallaxUpdate);

    // Gallery filter functionality
    const filterButtons = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Filter gallery items
            galleryItems.forEach(item => {
                const category = item.getAttribute('data-category');
                
                if (filter === 'all' || category === filter) {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 100);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        });
    });

    // Gallery modal functionality (with error handling)
    const galleryModal = document.getElementById('gallery-modal');
    const modalImage = document.getElementById('modal-image');
    const modalClose = document.querySelector('.modal-close');
    const zoomButtons = document.querySelectorAll('.gallery-zoom');

    zoomButtons.forEach(button => {
        button.addEventListener('click', function() {
            try {
                const imageSrc = this.getAttribute('data-image');
                if (imageSrc && knockout_theme && knockout_theme.template_url) {
                    const fullImageSrc = `${knockout_theme.template_url}/assets/images/gallery/${imageSrc}`;
                    
                    if (modalImage) {
                        modalImage.src = fullImageSrc;
                    }
                    if (galleryModal) {
                        galleryModal.classList.add('active');
                        document.body.style.overflow = 'hidden';
                    }
                }
            } catch (error) {
                console.warn('Gallery modal error:', error);
            }
        });
    });

    // Close modal
    function closeModal() {
        galleryModal.classList.remove('active');
        document.body.style.overflow = '';
    }

    if (modalClose) {
        modalClose.addEventListener('click', closeModal);
    }

    // Close modal on overlay click
    if (galleryModal) {
        galleryModal.addEventListener('click', function(e) {
            if (e.target === this || e.target.classList.contains('modal-overlay')) {
                closeModal();
            }
        });
    }

    // Close modal on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && galleryModal.classList.contains('active')) {
            closeModal();
        }
    });

    // Form submissions with basic validation
    const contactForm = document.getElementById('contact-form');

    function handleFormSubmission(form, successMessage) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Basic validation
            const requiredFields = form.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add('error');
                    isValid = false;
                } else {
                    field.classList.remove('error');
                }
            });
            
            if (isValid) {
                // Show success message (in a real implementation, you'd submit to server)
                alert(successMessage);
                form.reset();
            } else {
                alert('Please fill in all required fields.');
            }
        });
    }

    if (contactForm) {
        handleFormSubmission(contactForm, 'Thank you for your message! We\'ll get back to you soon.');
    }

    // Add loading states to buttons
    const submitButtons = document.querySelectorAll('button[type="submit"]');
    submitButtons.forEach(button => {
        button.addEventListener('click', function() {
            const originalText = this.textContent;
            this.textContent = 'Processing...';
            this.disabled = true;
            
            setTimeout(() => {
                this.textContent = originalText;
                this.disabled = false;
            }, 2000);
        });
    });

    // Events Carousel Functionality - New Scrolling Design
    const eventsCarouselWrapper = document.querySelector('.events-carousel-wrapper');
    const eventsCarouselContainer = document.querySelector('.events-carousel-container');
    const eventsCarouselTrack = document.querySelector('.events-carousel-track');
    const eventCards = document.querySelectorAll('.event-card');
    const prevArrow = document.querySelector('.carousel-nav-prev');
    const nextArrow = document.querySelector('.carousel-nav-next');
    const carouselIndicators = document.querySelectorAll('.carousel-indicator');

    if (eventsCarouselWrapper && eventCards.length > 0) {
        let currentSlide = 0;
        const totalCards = eventCards.length;
        const cardWidth = 320; // Fixed card width + gap
        const cardGap = 20;
        const cardFullWidth = cardWidth + cardGap;
        const isMobile = () => window.innerWidth <= 768;
        
        // Calculate how many cards fit in viewport
        function getVisibleCards() {
            if (isMobile()) return 1;
            const containerWidth = eventsCarouselContainer.offsetWidth;
            return Math.floor((containerWidth - 120) / cardFullWidth); // Account for padding
        }
        
        // Update carousel position
        function updateCarouselPosition() {
            if (isMobile()) {
                // On mobile, use CSS scroll-snap instead of transform
                const scrollLeft = currentSlide * (300 + 20); // Mobile card width + gap
                eventsCarouselContainer.scrollTo({
                    left: scrollLeft,
                    behavior: 'smooth'
                });
            } else {
                // Desktop: use transform for smooth animation
                const offset = -(currentSlide * cardFullWidth);
                eventsCarouselTrack.style.transform = `translateX(${offset}px)`;
            }
            
            // Update navigation button states
            updateNavigationState();
            
            // Update indicators
            updateIndicators();
        }
        
        // Update navigation button states
        function updateNavigationState() {
            const visibleCards = getVisibleCards();
            const maxSlide = Math.max(0, totalCards - visibleCards);
            
            if (prevArrow) {
                prevArrow.disabled = currentSlide <= 0;
                prevArrow.style.opacity = currentSlide <= 0 ? '0.4' : '1';
            }
            
            if (nextArrow) {
                nextArrow.disabled = currentSlide >= maxSlide;
                nextArrow.style.opacity = currentSlide >= maxSlide ? '0.4' : '1';
            }
        }
        
        // Update carousel indicators
        function updateIndicators() {
            carouselIndicators.forEach((indicator, index) => {
                indicator.classList.toggle('active', index === currentSlide);
            });
        }
        
        // Navigation functions
        function goToNext() {
            const visibleCards = getVisibleCards();
            const maxSlide = Math.max(0, totalCards - visibleCards);
            
            if (currentSlide < maxSlide) {
                currentSlide++;
                updateCarouselPosition();
            }
        }
        
        function goToPrevious() {
            if (currentSlide > 0) {
                currentSlide--;
                updateCarouselPosition();
            }
        }
        
        function goToSlide(slideIndex) {
            const visibleCards = getVisibleCards();
            const maxSlide = Math.max(0, totalCards - visibleCards);
            
            currentSlide = Math.max(0, Math.min(slideIndex, maxSlide));
            updateCarouselPosition();
        }
        
        // Event listeners for navigation arrows
        if (nextArrow) {
            nextArrow.addEventListener('click', goToNext);
        }
        
        if (prevArrow) {
            prevArrow.addEventListener('click', goToPrevious);
        }
        
        // Event listeners for indicators
        carouselIndicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => goToSlide(index));
        });
        
        // Card click navigation (optional - for desktop)
        eventCards.forEach((card, index) => {
            card.addEventListener('click', function() {
                if (!isMobile() && index !== currentSlide) {
                    goToSlide(index);
                }
            });
        });
        
        // Auto-rotation (optional - can be enabled/disabled)
        let autoRotate = false;
        let autoRotateInterval;
        
        function startAutoRotate() {
            if (autoRotate && !autoRotateInterval && !isMobile()) {
                autoRotateInterval = setInterval(() => {
                    const visibleCards = getVisibleCards();
                    const maxSlide = Math.max(0, totalCards - visibleCards);
                    
                    if (currentSlide >= maxSlide) {
                        goToSlide(0); // Loop back to start
                    } else {
                        goToNext();
                    }
                }, 5000);
            }
        }
        
        function stopAutoRotate() {
            if (autoRotateInterval) {
                clearInterval(autoRotateInterval);
                autoRotateInterval = null;
            }
        }
        
        // Pause auto-rotation on hover
        if (eventsCarouselWrapper) {
            eventsCarouselWrapper.addEventListener('mouseenter', stopAutoRotate);
            eventsCarouselWrapper.addEventListener('mouseleave', startAutoRotate);
        }
        
        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            if (eventsCarouselWrapper.matches(':hover') || document.activeElement.closest('.events-carousel-wrapper')) {
                if (e.key === 'ArrowRight') {
                    e.preventDefault();
                    goToNext();
                } else if (e.key === 'ArrowLeft') {
                    e.preventDefault();
                    goToPrevious();
                }
            }
        });
        
        // Touch/swipe support for mobile
        let startX = 0;
        let isDragging = false;
        let startScrollLeft = 0;
        
        if (eventsCarouselContainer) {
            eventsCarouselContainer.addEventListener('touchstart', function(e) {
                startX = e.touches[0].clientX;
                startScrollLeft = this.scrollLeft;
                isDragging = true;
                stopAutoRotate();
            }, { passive: true });
            
            eventsCarouselContainer.addEventListener('touchmove', function(e) {
                if (!isDragging) return;
                
                if (isMobile()) {
                    // Let native scroll behavior handle this on mobile
                    return;
                } else {
                    e.preventDefault();
                    const currentX = e.touches[0].clientX;
                    const diffX = startX - currentX;
                    this.scrollLeft = startScrollLeft + diffX;
                }
            }, { passive: false });
            
            eventsCarouselContainer.addEventListener('touchend', function(e) {
                if (!isDragging) return;
                
                if (!isMobile()) {
                    const endX = e.changedTouches[0].clientX;
                    const diff = startX - endX;
                    
                    if (Math.abs(diff) > 50) { // Minimum swipe distance
                        if (diff > 0) {
                            goToNext();
                        } else {
                            goToPrevious();
                        }
                    }
                }
                
                isDragging = false;
                startAutoRotate();
            }, { passive: true });
        }
        
        // Handle scroll events on mobile (for updating indicators)
        if (eventsCarouselContainer && isMobile()) {
            let scrollTimeout;
            eventsCarouselContainer.addEventListener('scroll', function() {
                clearTimeout(scrollTimeout);
                scrollTimeout = setTimeout(() => {
                    const scrollLeft = this.scrollLeft;
                    const cardWidth = 300 + 20; // Mobile card width + gap
                    const newSlide = Math.round(scrollLeft / cardWidth);
                    
                    if (newSlide !== currentSlide) {
                        currentSlide = newSlide;
                        updateIndicators();
                    }
                }, 100);
            });
        }
        
        // Responsive handling
        function handleResize() {
            // Reset current slide if it's out of bounds
            const visibleCards = getVisibleCards();
            const maxSlide = Math.max(0, totalCards - visibleCards);
            
            if (currentSlide > maxSlide) {
                currentSlide = maxSlide;
            }
            
            // Update carousel position and states
            updateCarouselPosition();
            
            // Handle auto-rotation based on screen size
            if (isMobile()) {
                stopAutoRotate();
            } else if (autoRotate) {
                startAutoRotate();
            }
        }
        
        // Initialize carousel
        updateCarouselPosition();
        
        // Start auto-rotation if enabled
        if (autoRotate) {
            startAutoRotate();
        }
        
        // Listen for window resize
        window.addEventListener('resize', handleResize);
        
        // Initial setup
        handleResize();
    }
});
