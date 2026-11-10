
/* =========================================================
   FA SPORTS — COMPLETE FRONT-END JAVASCRIPT
   Responsive Navigation + Existing Website Interactions
========================================================= */

document.addEventListener('DOMContentLoaded', function () {

    /* =====================================================
       00. REDUCED MOTION
    ===================================================== */

    const prefersReducedMotion =
        window.matchMedia('(prefers-reduced-motion: reduce)').matches;


    /* =====================================================
       01. FLOATING NAV — COMPACT ON SCROLL
    ===================================================== */

    const nav = document.getElementById('faNav');

    if (nav) {

        const onScroll = function () {

            nav.classList.toggle(
                'is-scrolled',
                window.scrollY > 60
            );

        };

        window.addEventListener(
            'scroll',
            onScroll,
            { passive: true }
        );

        onScroll();

    }


    /* =====================================================
       02. PREMIUM RESPONSIVE HAMBURGER MENU
    ===================================================== */

    const menuToggle = document.getElementById('menuToggle');
    const fullMenu = document.getElementById('fullMenu');

    if (menuToggle && fullMenu) {

        const menuLinks = fullMenu.querySelectorAll('a');

        /* CLOSE MENU */

        const closeMenu = function (restoreFocus = false) {

            fullMenu.classList.remove('is-open');

            menuToggle.classList.remove('is-active');

            menuToggle.setAttribute(
                'aria-expanded',
                'false'
            );

            menuToggle.setAttribute(
                'aria-label',
                'Open menu'
            );

            fullMenu.setAttribute(
                'aria-hidden',
                'true'
            );

            fullMenu.setAttribute('inert', '');

            document.body.classList.remove('fa-menu-open');

            if (restoreFocus) {
                menuToggle.focus();
            }

        };


        /* OPEN MENU */

        const openMenu = function () {

            fullMenu.removeAttribute('inert');

            fullMenu.setAttribute(
                'aria-hidden',
                'false'
            );

            fullMenu.classList.add('is-open');

            menuToggle.classList.add('is-active');

            menuToggle.setAttribute(
                'aria-expanded',
                'true'
            );

            menuToggle.setAttribute(
                'aria-label',
                'Close menu'
            );

            document.body.classList.add('fa-menu-open');

        };


        /* INITIAL STATE */

        closeMenu();


        /* HAMBURGER CLICK */

        menuToggle.addEventListener('click', function () {

            const isOpen =
                menuToggle.getAttribute('aria-expanded') === 'true';

            if (isOpen) {
                closeMenu();
            } else {
                openMenu();
            }

        });


        /* CLOSE AFTER CLICKING A PAGE LINK */

        menuLinks.forEach(function (link) {

            link.addEventListener('click', function () {

                closeMenu();

            });

        });


        /* CLOSE WITH ESCAPE */

        document.addEventListener('keydown', function (event) {

            const isOpen =
                menuToggle.getAttribute('aria-expanded') === 'true';

            if (event.key === 'Escape' && isOpen) {

                closeMenu(true);

            }

        });


        /* CLOSE OUTSIDE MENU */

        document.addEventListener('click', function (event) {

            const isOpen =
                menuToggle.getAttribute('aria-expanded') === 'true';

            if (
                isOpen &&
                !fullMenu.contains(event.target) &&
                !menuToggle.contains(event.target)
            ) {

                closeMenu();

            }

        });


        /* CLOSE WHEN SCREEN RETURNS TO DESKTOP */

        const desktopQuery =
            window.matchMedia('(min-width: 1101px)');

        const handleResize = function (event) {

            if (event.matches) {
                closeMenu();
            }

        };

        if (desktopQuery.addEventListener) {

            desktopQuery.addEventListener(
                'change',
                handleResize
            );

        } else {

            desktopQuery.addListener(handleResize);

        }

    }


    /* =====================================================
       03. BEFORE THE WHISTLE — MAIN IMAGE SWITCHING
    ===================================================== */

    const whistleList =
        document.getElementById('whistleList');

    const whistleStage =
        document.querySelector('.fa-whistle__stage');

    if (whistleList) {

        const items =
            whistleList.querySelectorAll('.fa-whistle__item');

        const frames =
            document.querySelectorAll('.fa-whistle__frame');

        const activate = function (key) {

            items.forEach(function (item) {

                item.classList.toggle(
                    'is-active',
                    item.dataset.frame === key
                );

            });

            frames.forEach(function (frame) {

                frame.classList.toggle(
                    'is-active',
                    frame.dataset.frame === key
                );

            });

        };


        /* FIRST FRAME */

        activate('lace');


        /* CLICK AND HOVER */

        items.forEach(function (item) {

            item.addEventListener('mouseenter', function () {

                activate(item.dataset.frame);

            });

            item.addEventListener('click', function () {

                activate(item.dataset.frame);

            });

        });


        /* AUTO SEQUENCE */

        if (
            !prefersReducedMotion &&
            items.length > 0
        ) {

            let index = 0;

            const order = Array.from(items).map(function (item) {

                return item.dataset.frame;

            });

            let autoplay = null;

            const startAutoplay = function () {

                clearInterval(autoplay);

                autoplay = setInterval(function () {

                    index = (index + 1) % order.length;

                    activate(order[index]);

                }, 3200);

            };

            const stopAutoplay = function () {

                clearInterval(autoplay);

            };


            startAutoplay();


            /* PAUSE ON LIST HOVER */

            whistleList.addEventListener(
                'mouseenter',
                stopAutoplay
            );

            whistleList.addEventListener(
                'mouseleave',
                startAutoplay
            );


            /* PAUSE ON IMAGE STAGE HOVER */

            if (whistleStage) {

                whistleStage.addEventListener(
                    'mouseenter',
                    stopAutoplay
                );

                whistleStage.addEventListener(
                    'mouseleave',
                    startAutoplay
                );

            }

        }

    }


    /* =====================================================
       04. SCROLL REVEAL — EXISTING SECTIONS
    ===================================================== */

    const revealElements = document.querySelectorAll(
        '.fa-whistle, ' +
        '.fa-disciplines, ' +
        '.fa-gear, ' +
        '.fa-editorial, ' +
        '.fa-edge, ' +
        '.fa-standard, ' +
        '.fa-lab, ' +
        '.fa-system, ' +
        '.fa-playbook, ' +
        '.fa-drive, ' +
        '.fa-section-head, ' +
        '.fa-edge__card, ' +
        '.fa-standard__card, ' +
        '.fa-lab__metric, ' +
        '.fa-system__card, ' +
        '.fa-playbook__card, ' +
        '.fa-gear__item, ' +
        '.fa-editorial__card'
    );


    revealElements.forEach(function (element, index) {

        element.classList.add('scroll-reveal');

        if (
            element.classList.contains('fa-edge__card') ||
            element.classList.contains('fa-standard__card') ||
            element.classList.contains('fa-lab__metric') ||
            element.classList.contains('fa-system__card') ||
            element.classList.contains('fa-playbook__card') ||
            element.classList.contains('fa-editorial__card')
        ) {

            const delay = (index % 6) + 1;

            element.classList.add(
                'scroll-reveal-delay-' + delay
            );

        }

    });


    /* REVEAL FALLBACK */

    if (
        prefersReducedMotion ||
        !('IntersectionObserver' in window)
    ) {

        revealElements.forEach(function (element) {

            element.classList.add('is-visible');

        });

    } else {

        const observer = new IntersectionObserver(
            function (entries, observerInstance) {

                entries.forEach(function (entry) {

                    if (entry.isIntersecting) {

                        entry.target.classList.add('is-visible');

                        observerInstance.unobserve(entry.target);

                    }

                });

            },
            {
                threshold: 0.12,
                rootMargin: '0px 0px -70px 0px'
            }
        );


        revealElements.forEach(function (element) {

            observer.observe(element);

        });

    }


    /* =====================================================
       05. PREMIUM CINEMATIC SCROLL ENGINE
    ===================================================== */


    /* ---------- MAIN SECTIONS ---------- */

    const sections = document.querySelectorAll(
        '.fa-whistle, ' +
        '.fa-disciplines, ' +
        '.fa-gear, ' +
        '.fa-editorial, ' +
        '.fa-edge, ' +
        '.fa-standard, ' +
        '.fa-lab, ' +
        '.fa-system, ' +
        '.fa-playbook, ' +
        '.fa-drive'
    );


    sections.forEach(function (section, index) {

        section.classList.add('fa-scroll-reveal');

        if (index % 2 === 0) {

            section.classList.add('fa-section-enter');

        }

    });


    /* ---------- SECTION HEADINGS ---------- */

    const headings = document.querySelectorAll(
        '.fa-section-head, ' +
        '.fa-whistle__headline, ' +
        '.fa-edge__headline, ' +
        '.fa-standard__headline, ' +
        '.fa-system__headline, ' +
        '.fa-drive__headline'
    );


    headings.forEach(function (heading) {

        heading.classList.add('fa-heading-reveal');

    });


    /* ---------- STAGGERED CARDS ---------- */

    const cards = document.querySelectorAll(
        '.fa-discipline-panel, ' +
        '.fa-gear__item, ' +
        '.fa-editorial__card, ' +
        '.fa-edge__card, ' +
        '.fa-standard__card, ' +
        '.fa-lab__metric, ' +
        '.fa-system__card, ' +
        '.fa-playbook__card'
    );


    cards.forEach(function (card, index) {

        card.classList.add('fa-card-reveal');

        const delay = (index % 6) + 1;

        card.classList.add('fa-delay-' + delay);

    });


    /* ---------- IMPORTANT IMAGES ---------- */

    const images = document.querySelectorAll(
        '.fa-whistle__stage, ' +
        '.fa-gear__image-wrap, ' +
        '.fa-editorial__visual, ' +
        '.fa-system__visual, ' +
        '.fa-playbook__featured-visual, ' +
        '.fa-playbook__card-visual'
    );


    images.forEach(function (image) {

        image.classList.add('fa-cinematic-image');

    });


    /* ---------- OBSERVER ---------- */

    const animatedElements = document.querySelectorAll(
        '.fa-scroll-reveal, ' +
        '.fa-scroll-left, ' +
        '.fa-scroll-right, ' +
        '.fa-image-reveal, ' +
        '.fa-cinematic-image, ' +
        '.fa-heading-reveal, ' +
        '.fa-card-reveal, ' +
        '.fa-section-enter'
    );


    if (
        prefersReducedMotion ||
        !('IntersectionObserver' in window)
    ) {

        animatedElements.forEach(function (element) {

            element.classList.add('is-visible');

            if (element.classList.contains('fa-heading-reveal')) {

                element.classList.add('is-animated');

            }

        });

    } else {

        const revealObserver = new IntersectionObserver(
            function (entries, observerInstance) {

                entries.forEach(function (entry) {

                    if (!entry.isIntersecting) {
                        return;
                    }

                    entry.target.classList.add('is-visible');

                    if (
                        entry.target.classList.contains(
                            'fa-heading-reveal'
                        )
                    ) {

                        entry.target.classList.add('is-animated');

                    }

                    observerInstance.unobserve(entry.target);

                });

            },
            {
                threshold: 0.14,
                rootMargin: '0px 0px -80px 0px'
            }
        );


        animatedElements.forEach(function (element) {

            revealObserver.observe(element);

        });

    }


    /* =====================================================
       06. PARALLAX IMAGE EFFECT
    ===================================================== */

    const parallaxElements = document.querySelectorAll(
        '.fa-gear__image, ' +
        '.fa-editorial__img, ' +
        '.fa-system__image, ' +
        '.fa-playbook__featured-img, ' +
        '.fa-playbook__card-img'
    );


    if (!prefersReducedMotion && parallaxElements.length > 0) {

        let ticking = false;

        function updateParallax() {

            const viewportHeight = window.innerHeight;

            parallaxElements.forEach(function (image) {

                const rect = image.getBoundingClientRect();

                if (
                    rect.bottom < 0 ||
                    rect.top > viewportHeight
                ) {

                    return;

                }

                const center = rect.top + (rect.height / 2);

                const distance =
                    (center - viewportHeight / 2) / viewportHeight;

                const movement = distance * -22;

                image.style.setProperty(
                    '--parallax-y',
                    movement + 'px'
                );

            });

            ticking = false;

        }


        window.addEventListener(
            'scroll',
            function () {

                if (!ticking) {

                    window.requestAnimationFrame(updateParallax);

                    ticking = true;

                }

            },
            { passive: true }
        );


        updateParallax();

    }


    /* =====================================================
       07. RED LINE ANIMATION
    ===================================================== */

    const lines = document.querySelectorAll(
        '.fa-edge__line, ' +
        '.fa-standard__line, ' +
        '.fa-hero__line'
    );


    lines.forEach(function (line) {

        line.classList.add('fa-line-reveal');

    });


    /* =====================================================
       08. SMOOTH ANCHOR SCROLL
    ===================================================== */

    document.querySelectorAll('a[href^="#"]').forEach(
        function (link) {

            link.addEventListener('click', function (event) {

                const targetId = link.getAttribute('href');

                if (!targetId || targetId === '#') {
                    return;
                }

                let target = null;

                try {

                    target = document.querySelector(targetId);

                } catch (error) {

                    return;

                }

                if (!target) {
                    return;
                }

                event.preventDefault();

                target.scrollIntoView({

                    behavior: prefersReducedMotion ? 'auto' : 'smooth',

                    block: 'start'

                });

            });

        }
    );


    /* =====================================================
       09. BEFORE THE WHISTLE — MOBILE IMAGE SWITCHING
    ===================================================== */

    const mobileWhistleSection =
        document.querySelector('.fa-whistle-mobile');

    if (mobileWhistleSection) {

        const mobileItems =
            mobileWhistleSection.querySelectorAll(
                '.fa-whistle-mobile__item'
            );

        const mobileFrames =
            mobileWhistleSection.querySelectorAll(
                '.fa-whistle-mobile__frame'
            );


        mobileItems.forEach(function (item) {

            item.addEventListener('click', function () {

                const target = item.dataset.frame;

                mobileItems.forEach(function (element) {

                    element.classList.remove('is-active');

                });

                mobileFrames.forEach(function (frame) {

                    frame.classList.remove('is-active');

                });

                item.classList.add('is-active');

                const activeFrame =
                    mobileWhistleSection.querySelector(
                        '.fa-whistle-mobile__frame[data-frame="' +
                        target +
                        '"]'
                    );

                if (activeFrame) {

                    activeFrame.classList.add('is-active');

                }

            });

        });

    }


    /* =====================================================
       10. PAGE INITIALIZATION COMPLETE
    ===================================================== */

});

document.addEventListener('DOMContentLoaded', function () {

    const toggle = document.getElementById('menuToggle');
    const menu = document.getElementById('fullMenu');

    if (!toggle || !menu) return;

    function openMenu() {
        menu.classList.add('is-open');
        toggle.classList.add('is-active');

        toggle.setAttribute('aria-expanded', 'true');
        toggle.setAttribute('aria-label', 'Close navigation menu');

        menu.setAttribute('aria-hidden', 'false');
        menu.removeAttribute('inert');

        document.body.classList.add('fa-menu-open');
    }

    function closeMenu() {
        menu.classList.remove('is-open');
        toggle.classList.remove('is-active');

        toggle.setAttribute('aria-expanded', 'false');
        toggle.setAttribute('aria-label', 'Open navigation menu');

        menu.setAttribute('aria-hidden', 'true');
        menu.setAttribute('inert', '');

        document.body.classList.remove('fa-menu-open');
    }

    toggle.addEventListener('click', function () {
        if (menu.classList.contains('is-open')) {
            closeMenu();
        } else {
            openMenu();
        }
    });

    menu.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', closeMenu);
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            closeMenu();
        }
    });

});

