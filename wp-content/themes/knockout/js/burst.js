(function () {
    function createFallingConfetti() {
        var container = document.createElement('div');
        container.className = 'ko-burst-container';

        var colors = ['#b0d136', '#00d4ff', '#ff006e', '#8b00ff', '#ffd166', '#ffffff'];
        var count = Math.min(140, Math.floor(window.innerWidth / 8));

        for (var i = 0; i < count; i++) {
            var el = document.createElement('div');
            el.className = 'ko-confetti';

            var color = colors[Math.floor(Math.random() * colors.length)];
            el.style.setProperty('--c', color);

            var x = Math.random() * window.innerWidth;
            el.style.left = x + 'px';
            el.style.setProperty('--x', (Math.random() * 20 - 10) + 'px');
            el.style.setProperty('--dx', (Math.random() * 120 - 60) + 'px');

            var w = 6 + Math.random() * 8;
            var h = 8 + Math.random() * 14;
            el.style.setProperty('--w', w + 'px');
            el.style.setProperty('--h', h + 'px');
            el.style.setProperty('--r', (Math.random() > 0.6 ? 50 : 2) + 'px');
            el.style.setProperty('--rot', Math.floor(Math.random() * 360) + 'deg');

            var dur = 2500 + Math.random() * 2500;
            var sway = 900 + Math.random() * 1100;
            var spin = 1200 + Math.random() * 1800;
            var delay = Math.random() * 400;
            el.style.setProperty('--dur', dur + 'ms');
            el.style.setProperty('--sway', sway + 'ms');
            el.style.setProperty('--spin', spin + 'ms');
            el.style.animationDelay = delay + 'ms';

            container.appendChild(el);
        }

        document.body.appendChild(container);

        // Clean up after animation completes
        setTimeout(function () {
            if (container && container.parentNode) {
                container.parentNode.removeChild(container);
            }
        }, 7000);
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', createFallingConfetti, { once: true });
    } else {
        createFallingConfetti();
    }
})();


