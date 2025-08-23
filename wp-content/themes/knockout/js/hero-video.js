/**
 * Hero Video Background Manager
 * Handles single looping video for sports cafe
 */

class HeroVideoManager {
    constructor() {
        this.videoElement = null;
        this.init();
    }

    init() {
        this.videoElement = document.querySelector('.hero-bg-video');
        if (!this.videoElement) return;

        this.setupVideoEvents();
        this.ensureVideoPlays();
    }

    setupVideoEvents() {
        this.videoElement.addEventListener('loadstart', () => {
            console.log('Video loading started...');
        });

        this.videoElement.addEventListener('loadedmetadata', () => {
            console.log('Video metadata loaded');
            this.videoElement.style.opacity = '0.8';
        });

        this.videoElement.addEventListener('loadeddata', () => {
            console.log('KNOCKOUT Sports Cafe video loaded successfully');
            this.videoElement.style.opacity = '0.8';
        });

        this.videoElement.addEventListener('canplay', () => {
            console.log('Video can start playing');
            this.videoElement.style.opacity = '0.8';
            this.videoElement.play().catch(e => {
                console.log('Autoplay prevented:', e);
                this.addPlayButton();
            });
        });

        this.videoElement.addEventListener('error', (e) => {
            console.log('Video loading error:', e);
            console.log('Video error details:', this.videoElement.error);
            this.showFallbackImage();
        });

        this.videoElement.addEventListener('stalled', () => {
            console.log('Video loading stalled');
        });

        this.videoElement.addEventListener('waiting', () => {
            console.log('Video waiting for data');
        });

        // Ensure continuous looping
        this.videoElement.addEventListener('ended', () => {
            this.videoElement.currentTime = 0;
            this.videoElement.play();
        });
    }

    ensureVideoPlays() {
        // Force video to be visible
        this.videoElement.style.display = 'block';
        this.videoElement.style.opacity = '0.8';
        
        // Try to load and play video
        this.videoElement.load();
        
        // Try to play video after a short delay
        setTimeout(() => {
            if (this.videoElement.paused) {
                this.videoElement.play().catch(e => {
                    console.log('Delayed autoplay prevented:', e);
                    this.addPlayButton();
                });
            }
        }, 1000);

        // Additional attempt after 3 seconds
        setTimeout(() => {
            if (this.videoElement.paused) {
                console.log('Video still paused, attempting to play again...');
                this.videoElement.play().catch(e => {
                    console.log('Second attempt failed:', e);
                });
            }
        }, 3000);
    }

    showFallbackImage() {
        const fallbackImg = this.videoElement.nextElementSibling;
        if (fallbackImg && fallbackImg.tagName === 'IMG') {
            fallbackImg.style.display = 'block';
            this.videoElement.style.display = 'none';
        }
    }

    addPlayButton() {
        // Add a play button overlay if autoplay is blocked
        const playButton = document.createElement('button');
        playButton.innerHTML = '▶ Play Video';
        playButton.className = 'video-play-button';
        playButton.style.cssText = `
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
            background: rgba(176, 209, 54, 0.9);
            color: white;
            border: none;
            padding: 1rem 2rem;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        `;

        playButton.addEventListener('click', () => {
            this.videoElement.play();
            playButton.remove();
        });

        this.videoElement.parentElement.appendChild(playButton);
    }
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    const heroVideoManager = new HeroVideoManager();
    
    // Pause video when page is not visible for performance
    document.addEventListener('visibilitychange', () => {
        const video = document.querySelector('.hero-bg-video');
        if (video) {
            if (document.hidden) {
                video.pause();
            } else {
                video.play().catch(e => console.log('Resume play prevented'));
            }
        }
    });
});

// Fallback for older browsers
if (!window.IntersectionObserver) {
    // Simple fallback - just load the first video
    document.addEventListener('DOMContentLoaded', () => {
        const video = document.querySelector('.hero-bg-video');
        if (video) {
            video.play().catch(e => console.log('Autoplay prevented'));
        }
    });
}