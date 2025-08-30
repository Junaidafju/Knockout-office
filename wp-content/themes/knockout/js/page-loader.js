/**
 * Page Loader Manager
 * Shows loader during page refreshes and navigation
 */

class PageLoaderManager {
    constructor() {
        this.loader = null;
        this.isInitialized = false;
        this.init();
    }

    init() {
        // Prevent multiple initializations
        if (this.isInitialized) {
            return;
        }
        
        // Clean up any existing loaders first
        this.cleanupExistingLoaders();
        
        this.createLoader();
        this.setupEventListeners();
        this.showLoaderOnLoad();
        this.forceHideLoader(); // Safety fallback
        
        this.isInitialized = true;
    }

    createLoader() {
        // Create loader element
        this.loader = document.createElement('div');
        this.loader.id = 'page-loader';
        this.loader.className = 'page-loader-overlay';
        this.loader.innerHTML = `
            <div class="text-loader">
                <div class="loader-wrapper">
                    <span class="loader-letter">K</span>
                    <span class="loader-letter">N</span>
                    <span class="loader-letter">O</span>
                    <span class="loader-letter">C</span>
                    <span class="loader-letter">K</span>
                    <span class="loader-letter"></span>
                    <span class="loader-letter">O</span>
                    <span class="loader-letter">U</span>
                    <span class="loader-letter">T</span>
                    <span class="loader-letter"> </span>

                    <div class="loader"></div>
                </div>
            </div>
        `;

        // Add loader to body
        document.body.appendChild(this.loader);
    }

    cleanupExistingLoaders() {
        // Remove any existing loaders to prevent duplicates
        const existingLoaders = document.querySelectorAll('#page-loader, .page-loader-overlay');
        existingLoaders.forEach(loader => {
            if (loader && loader.parentNode) {
                loader.parentNode.removeChild(loader);
            }
        });
    }

    setupEventListeners() {
        // Show loader before page unload (refresh/navigation)
        window.addEventListener('beforeunload', () => {
            this.showLoader();
        });

        // Cleanup on page unload
        window.addEventListener('unload', () => {
            this.destroy();
        });

        // Handle browser back/forward buttons
        window.addEventListener('popstate', () => {
            this.showLoader();
        });

        // Show loader on form submissions
        document.addEventListener('submit', () => {
            this.showLoader();
        });

        // Show loader on link clicks (except internal anchors)
        document.addEventListener('click', (e) => {
            const link = e.target.closest('a');
            if (link && link.href && !link.href.includes('#') && !link.href.includes('javascript:')) {
                this.showLoader();
            }
        });
    }

    showLoaderOnLoad() {
        // Show loader immediately when page starts loading
        this.showLoader();
        
        // Hide loader after page is fully loaded
        window.addEventListener('load', () => {
            setTimeout(() => {
                this.hideLoader();
            }, 1200); // Reduced to 1.2 seconds for snappier feel
        });

        // Alternative: Hide loader when DOM is ready
        document.addEventListener('DOMContentLoaded', () => {
            setTimeout(() => {
                this.hideLoader();
            }, 800); // Reduced to 0.8 seconds
        });
    }

    showLoader() {
        if (this.loader) {
            // Use requestAnimationFrame for smooth transitions
            requestAnimationFrame(() => {
                this.loader.style.display = 'flex';
                this.loader.classList.remove('hidden');
                
                // Force reflow
                this.loader.offsetHeight;
                
                requestAnimationFrame(() => {
                    this.loader.style.opacity = '1';
                    this.loader.style.visibility = 'visible';
                });
            });
        }
    }

    hideLoader() {
        if (this.loader) {
            this.loader.style.opacity = '0';
            this.loader.classList.add('hidden');
            
            // Use shorter timeout for smoother feel
            setTimeout(() => {
                this.loader.style.display = 'none';
                this.loader.style.visibility = 'hidden';
            }, 300);
        }
    }

    // Force hide loader after a maximum time
    forceHideLoader() {
        setTimeout(() => {
            if (this.loader && this.loader.style.opacity !== '0') {
                this.hideLoader();
            }
        }, 5000); // Force hide after 5 seconds
    }

    // Cleanup method
    destroy() {
        if (this.loader && this.loader.parentNode) {
            this.loader.parentNode.removeChild(this.loader);
        }
        this.loader = null;
        this.isInitialized = false;
        pageLoaderInstance = null;
    }
}

// Global instance to prevent multiple loaders
let pageLoaderInstance = null;

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    if (!pageLoaderInstance) {
        pageLoaderInstance = new PageLoaderManager();
    }
});

// Fallback for immediate execution
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
        if (!pageLoaderInstance) {
            pageLoaderInstance = new PageLoaderManager();
        }
    });
} else {
    if (!pageLoaderInstance) {
        pageLoaderInstance = new PageLoaderManager();
    }
}
