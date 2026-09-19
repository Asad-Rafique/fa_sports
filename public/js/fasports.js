// FA SPORTS — front-end interactions
// Minimal front-end interactions

document.addEventListener('DOMContentLoaded', () => {

    const prefersReducedMotion =
        window.matchMedia('(prefers-reduced-motion: reduce)').matches;


    /* ---------- Floating nav: compact on scroll ---------- */

    const nav = document.getElementById('faNav');

    if (nav) {

        const onScroll = () => {
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


    /* ---------- Fullscreen menu ---------- */

    const menuToggle = document.getElementById('menuToggle');
    const fullMenu = document.getElementById('fullMenu');

    if (menuToggle && fullMenu) {

        menuToggle.addEventListener('click', () => {

            const isOpen =
                fullMenu.classList.toggle('is-open');

            menuToggle.setAttribute(
                'aria-expanded',
                String(isOpen)
            );

            fullMenu.setAttribute(
                'aria-hidden',
                String(!isOpen)
            );

            document.body.style.overflow =
                isOpen ? 'hidden' : '';
        });


        fullMenu.querySelectorAll('a').forEach((link) => {

            link.addEventListener('click', () => {
                menuToggle.click();
            });

        });
    }


    /* ---------- Before The Whistle ---------- */

    const whistleList =
        document.getElementById('whistleList');

    const whistleStage =
        document.querySelector('.fa-whistle__stage');


    if (whistleList) {

        const items =
            whistleList.querySelectorAll('.fa-whistle__item');

        const frames =
            document.querySelectorAll('.fa-whistle__frame');


        const activate = (key) => {

            items.forEach((el) => {

                el.classList.toggle(
                    'is-active',
                    el.dataset.frame === key
                );

            });


            frames.forEach((el) => {

                el.classList.toggle(
                    'is-active',
                    el.dataset.frame === key
                );

            });

        };


        /* ---------- First frame ---------- */

        activate('lace');


        /* ---------- Click + hover ---------- */

        items.forEach((item) => {

            item.addEventListener('mouseenter', () => {

                activate(item.dataset.frame);

            });


            item.addEventListener('click', () => {

                activate(item.dataset.frame);

            });

        });


        /* ---------- Auto sequence ---------- */

        if (!prefersReducedMotion && items.length > 0) {

            let index = 0;

            const order = Array.from(items).map(
                (el) => el.dataset.frame
            );


            let autoplay = setInterval(() => {

                index = (index + 1) % order.length;

                activate(order[index]);

            }, 3200);


            const restartAutoplay = () => {

                clearInterval(autoplay);

                autoplay = setInterval(() => {

                    index = (index + 1) % order.length;

                    activate(order[index]);

                }, 3200);

            };


            /* Pause when mouse is over list */

            whistleList.addEventListener(
                'mouseenter',
                () => clearInterval(autoplay)
            );


            whistleList.addEventListener(
                'mouseleave',
                restartAutoplay
            );


            /* Pause when mouse is over image stage */

            if (whistleStage) {

                whistleStage.addEventListener(
                    'mouseenter',
                    () => clearInterval(autoplay)
                );


                whistleStage.addEventListener(
                    'mouseleave',
                    restartAutoplay
                );

            }

        }

    }

});
/* =========================================================
   FA SPORTS — SCROLL REVEAL
   ========================================================= */

document.addEventListener('DOMContentLoaded', () => {

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

    revealElements.forEach((element, index) => {
        element.classList.add('scroll-reveal');

        /*
         * Cards ko halka stagger effect
         */
        if (
            element.classList.contains('fa-edge__card') ||
            element.classList.contains('fa-standard__card') ||
            element.classList.contains('fa-lab__metric') ||
            element.classList.contains('fa-system__card') ||
            element.classList.contains('fa-playbook__card') ||
            element.classList.contains('fa-editorial__card')
        ) {
            const delay = (index % 6) + 1;
            element.classList.add(`scroll-reveal-delay-${delay}`);
        }
    });

    const observer = new IntersectionObserver(
        (entries, observer) => {

            entries.forEach(entry => {

                if (entry.isIntersecting) {

                    entry.target.classList.add('is-visible');

                    /*
                     * Ek dafa show hone ke baad observer hata do
                     * taake animation dobara repeat na ho.
                     */
                    observer.unobserve(entry.target);
                }

            });

        },
        {
            threshold: 0.12,
            rootMargin: '0px 0px -70px 0px'
        }
    );

    revealElements.forEach(element => {
        observer.observe(element);
    });

});
/* =========================================================
   FA SPORTS — PREMIUM CINEMATIC SCROLL ENGINE
   ========================================================= */

document.addEventListener('DOMContentLoaded', () => {

    /*
     * ---------------------------------------------------------
     * 1. MAIN SECTION REVEALS
     * ---------------------------------------------------------
     */

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

    sections.forEach((section, index) => {

        section.classList.add('fa-scroll-reveal');

        if (index % 2 === 0) {
            section.classList.add('fa-section-enter');
        }
    });


    /*
     * ---------------------------------------------------------
     * 2. SECTION HEADINGS
     * ---------------------------------------------------------
     */

    const headings = document.querySelectorAll(
        '.fa-section-head, ' +
        '.fa-whistle__headline, ' +
        '.fa-edge__headline, ' +
        '.fa-standard__headline, ' +
        '.fa-system__headline, ' +
        '.fa-drive__headline'
    );

    headings.forEach(heading => {
        heading.classList.add('fa-heading-reveal');
    });


    /*
     * ---------------------------------------------------------
     * 3. CARDS — STAGGERED
     * ---------------------------------------------------------
     */

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

    cards.forEach((card, index) => {

        card.classList.add('fa-card-reveal');

        const delay = (index % 6) + 1;

        card.classList.add(`fa-delay-${delay}`);
    });


    /*
     * ---------------------------------------------------------
     * 4. IMPORTANT IMAGES
     * ---------------------------------------------------------
     */

    const images = document.querySelectorAll(
        '.fa-whistle__stage, ' +
        '.fa-gear__image-wrap, ' +
        '.fa-editorial__visual, ' +
        '.fa-system__visual, ' +
        '.fa-playbook__featured-visual, ' +
        '.fa-playbook__card-visual'
    );

    images.forEach(image => {

        image.classList.add('fa-cinematic-image');

    });


    /*
     * ---------------------------------------------------------
     * 5. OBSERVER
     * ---------------------------------------------------------
     */

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

    const revealObserver = new IntersectionObserver(
        (entries, observer) => {

            entries.forEach(entry => {

                if (!entry.isIntersecting) {
                    return;
                }

                entry.target.classList.add('is-visible');

if (entry.target.classList.contains('fa-heading-reveal')) {
    entry.target.classList.add('is-animated');
}

                observer.unobserve(entry.target);

            });

        },
        {
            threshold: 0.14,
            rootMargin: '0px 0px -80px 0px'
        }
    );


    animatedElements.forEach(element => {
        revealObserver.observe(element);
    });


    /*
     * ---------------------------------------------------------
     * 6. PARALLAX IMAGE EFFECT
     * ---------------------------------------------------------
     */

    const parallaxElements = document.querySelectorAll(
        '.fa-gear__image, ' +
        '.fa-editorial__img, ' +
        '.fa-system__image, ' +
        '.fa-playbook__featured-img, ' +
        '.fa-playbook__card-img'
    );

    let ticking = false;

    function updateParallax() {

        const viewportHeight = window.innerHeight;

        parallaxElements.forEach(image => {

            const rect = image.getBoundingClientRect();

            if (
                rect.bottom < 0 ||
                rect.top > viewportHeight
            ) {
                return;
            }

            const center =
                rect.top + (rect.height / 2);

            const distance =
                (center - viewportHeight / 2) / viewportHeight;

            const movement =
                distance * -22;

            image.style.setProperty(
                '--parallax-y',
                `${movement}px`
            );

        });

        ticking = false;
    }


    window.addEventListener(
        'scroll',
        () => {

            if (!ticking) {

                window.requestAnimationFrame(
                    updateParallax
                );

                ticking = true;
            }

        },
        { passive: true }
    );


    updateParallax();


    /*
     * ---------------------------------------------------------
     * 7. RED LINE ANIMATION
     * ---------------------------------------------------------
     */

    const lines = document.querySelectorAll(
        '.fa-edge__line, ' +
        '.fa-standard__line, ' +
        '.fa-hero__line'
    );

    lines.forEach(line => {

        line.classList.add('fa-line-reveal');

    });


    /*
     * ---------------------------------------------------------
     * 8. SMOOTH ANCHOR SCROLL
     * ---------------------------------------------------------
     */

    document.querySelectorAll(
        'a[href^="#"]'
    ).forEach(link => {

        link.addEventListener('click', event => {

            const targetId =
                link.getAttribute('href');

            if (
                !targetId ||
                targetId === '#'
            ) {
                return;
            }

            const target =
                document.querySelector(targetId);

            if (!target) {
                return;
            }

            event.preventDefault();

            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });

        });

    });

});