/**
 * Share Functionality for KNOCKOUT Sports Café
 * Handles copy to clipboard and share button interactions
 */

class ShareManager {
    constructor() {
        this.init();
    }

    init() {
        this.setupCopyButtons();
        this.setupShareTracking();
    }

    setupCopyButtons() {
        // Copy link button
        const copyLinkBtn = document.querySelector('.copy-link');
        if (copyLinkBtn) {
            copyLinkBtn.addEventListener('click', (e) => {
                e.preventDefault();
                const url = copyLinkBtn.dataset.url;
                this.copyToClipboard(url, copyLinkBtn);
            });
        }

        // Copy URL input button
        const copyUrlBtn = document.querySelector('.copy-url-btn');
        if (copyUrlBtn) {
            copyUrlBtn.addEventListener('click', (e) => {
                e.preventDefault();
                const targetId = copyUrlBtn.dataset.target;
                const input = document.getElementById(targetId);
                if (input) {
                    this.copyToClipboard(input.value, copyUrlBtn);
                    input.select();
                }
            });
        }
    }

    async copyToClipboard(text, button) {
        try {
            // Modern clipboard API
            if (navigator.clipboard && window.isSecureContext) {
                await navigator.clipboard.writeText(text);
                this.showCopySuccess(button);
            } else {
                // Fallback for older browsers
                this.fallbackCopyToClipboard(text, button);
            }
        } catch (err) {
            console.error('Failed to copy: ', err);
            this.showCopyError(button);
        }
    }

    fallbackCopyToClipboard(text, button) {
        // Create temporary textarea
        const textArea = document.createElement('textarea');
        textArea.value = text;
        textArea.style.position = 'fixed';
        textArea.style.left = '-999999px';
        textArea.style.top = '-999999px';
        document.body.appendChild(textArea);

        textArea.focus();
        textArea.select();

        try {
            const successful = document.execCommand('copy');
            if (successful) {
                this.showCopySuccess(button);
            } else {
                this.showCopyError(button);
            }
        } catch (err) {
            console.error('Fallback copy failed: ', err);
            this.showCopyError(button);
        }

        document.body.removeChild(textArea);
    }

    showCopySuccess(button) {
        const originalText = button.innerHTML;
        button.innerHTML = '<i class="fas fa-check"></i><span>Copied!</span>';
        button.style.background = 'rgba(40, 167, 69, 0.3)';
        button.style.borderColor = '#28a745';
        button.style.color = '#28a745';

        setTimeout(() => {
            button.innerHTML = originalText;
            button.style.background = '';
            button.style.borderColor = '';
            button.style.color = '';
        }, 2000);
    }

    showCopyError(button) {
        const originalText = button.innerHTML;
        button.innerHTML = '<i class="fas fa-times"></i><span>Error</span>';
        button.style.background = 'rgba(220, 53, 69, 0.3)';
        button.style.borderColor = '#dc3545';
        button.style.color = '#dc3545';

        setTimeout(() => {
            button.innerHTML = originalText;
            button.style.background = '';
            button.style.borderColor = '';
            button.style.color = '';
        }, 2000);
    }

    setupShareTracking() {
        // Track social media shares
        const shareButtons = document.querySelectorAll('.share-btn[href]');
        shareButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                const platform = this.getPlatformFromButton(button);
                console.log(`Shared on ${platform}`);

                // You can add analytics tracking here
                if (typeof gtag !== 'undefined') {
                    gtag('event', 'share', {
                        method: platform,
                        content_type: 'website',
                        item_id: window.location.href
                    });
                }
            });
        });
    }

    getPlatformFromButton(button) {
        if (button.classList.contains('facebook-share')) return 'Facebook';
        if (button.classList.contains('twitter-share')) return 'Twitter';
        if (button.classList.contains('whatsapp-share')) return 'WhatsApp';
        if (button.classList.contains('linkedin-share')) return 'LinkedIn';
        return 'Unknown';
    }
}

// Initialize share functionality
document.addEventListener('DOMContentLoaded', () => {
    new ShareManager();
});

// Add Font Awesome for icons if not already loaded
if (!document.querySelector('link[href*="font-awesome"]')) {
    const fontAwesome = document.createElement('link');
    fontAwesome.rel = 'stylesheet';
    fontAwesome.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css';
    document.head.appendChild(fontAwesome);
}