(function () {
    var isTouch = 'ontouchstart' in window || navigator.maxTouchPoints > 0;
    if (isTouch) return; // keep native scrolling on touch devices

    var target = document.scrollingElement || document.documentElement;
    var current = target.scrollTop;
    var ticking = false;
    var speed = 0.18; // lower is smoother/slower
    var maxStep = 140; // clamp wheel delta to prevent big jumps
    var lastWheelTs = 0;
    var rafId = 0;

    function onWheel(e) {
        // ignore if user is holding modifier keys (zoom/OS gestures)
        if (e.ctrlKey || e.metaKey || e.shiftKey) return;

        lastWheelTs = Date.now();
        e.preventDefault();
        var delta = -e.deltaY;
        if (Math.abs(delta) > maxStep) delta = maxStep * Math.sign(delta);
        current -= delta;

        var maxScroll = target.scrollHeight - window.innerHeight;
        if (current < 0) current = 0;
        if (current > maxScroll) current = maxScroll;

        if (!ticking) {
            ticking = true;
            rafId = requestAnimationFrame(update);
        }
    }

    function update() {
        var scrollTop = target.scrollTop;
        var distance = current - scrollTop;
        var step = distance * speed;

        if (Math.abs(distance) < 0.5) {
            target.scrollTop = current;
            ticking = false;
            return;
        }

        target.scrollTop = scrollTop + step;
        rafId = requestAnimationFrame(update);
    }

    function onScroll() {
        // If scroll wasn't caused by a recent wheel event, sync and cancel animation
        var now = Date.now();
        if (now - lastWheelTs > 120) {
            current = target.scrollTop;
            if (ticking) {
                cancelAnimationFrame(rafId);
                ticking = false;
            }
        }
    }

    window.addEventListener('wheel', onWheel, { passive: false });
    window.addEventListener('scroll', onScroll, { passive: true });
})();


