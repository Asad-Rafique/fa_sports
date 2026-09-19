// FA SPORTS — THE CRAFT
// public/js/craft.js
//
// Subtle, premium entrance animations only:
// - fade-up scroll reveal for every ".fa-craft-reveal" element
// - staggered delay so groups (e.g. the 4 "Making" steps) don't pop in as one block
// - respects prefers-reduced-motion

document.addEventListener('DOMContentLoaded', function () {
    var prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    var revealEls = document.querySelectorAll('.fa-craft-reveal');

    if (prefersReducedMotion) {
        revealEls.forEach(function (el) {
            el.classList.add('is-visible');
        });
        return;
    }

    // Stagger elements that share the same parent row/grid so they reveal in sequence.
    var groups = {};
    revealEls.forEach(function (el) {
        var parent = el.parentElement;
        if (!parent) return;
        if (!groups[parent] ) {
            groups[parent] = [];
        }
    });

    // Assign a small incremental delay based on position within its direct siblings.
    var parentSeen = new Map();
    revealEls.forEach(function (el) {
        var parent = el.parentElement;
        var count = parentSeen.get(parent) || 0;
        el.style.transitionDelay = (count * 90) + 'ms';
        parentSeen.set(parent, count + 1);
    });

    var observer = new IntersectionObserver(
        function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.15, rootMargin: '0px 0px -40px 0px' }
    );

    revealEls.forEach(function (el) {
        observer.observe(el);
    });

    // Hero content should always reveal immediately on load, not wait for scroll.
    var heroEls = document.querySelectorAll('.fa-craft-hero .fa-craft-reveal');
    heroEls.forEach(function (el, i) {
        setTimeout(function () {
            el.classList.add('is-visible');
        }, 150 + i * 120);
        if (observer) {
            observer.unobserve(el);
        }
    });
});
