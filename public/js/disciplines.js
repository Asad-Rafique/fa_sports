
// =========================================================
// FA SPORTS — DISCIPLINES
// PAGE INTERACTIONS
// =========================================================

document.addEventListener('DOMContentLoaded', () => {

    // =====================================================
    // 1. SCROLL REVEAL
    // =====================================================

    const revealItems = document.querySelectorAll(
        '.dp-intro__content, ' +
        '.dp-game-selector__heading, ' +
        '.dp-game-row, ' +
        '.dp-game-selector__statement, ' +
        '.dp-performance__header, ' +
        '.dp-performance-card, ' +
        '.dp-movements__header, ' +
        '.dp-movement, ' +
        '.dp-statement__content, ' +
        '.dp-priorities__header, ' +
        '.dp-priority-card, ' +
        '.dp-gear-system__intro, ' +
        '.dp-gear-row, ' +
        '.dp-final'
    );

    if ('IntersectionObserver' in window) {

        const revealObserver = new IntersectionObserver(
            (entries, observer) => {

                entries.forEach((entry) => {

                    if (!entry.isIntersecting) {
                        return;
                    }

                    entry.target.classList.add('is-visible');

                    observer.unobserve(entry.target);

                });

            },
            {
                threshold: 0.12,
                rootMargin: '0px 0px -50px 0px'
            }
        );


        revealItems.forEach((item, index) => {

            // Small stagger effect
            item.style.setProperty(
                '--reveal-delay',
                `${Math.min(index * 35, 350)}ms`
            );

            revealObserver.observe(item);

        });

    } else {

        revealItems.forEach((item) => {
            item.classList.add('is-visible');
        });

    }



    // =====================================================
    // 2. DISCIPLINE ROW → SCROLL TO PERFORMANCE PROFILE
    // =====================================================

    const gameRows = document.querySelectorAll('.dp-game-row');

    gameRows.forEach((row) => {

        row.addEventListener('click', (event) => {

            const href = row.getAttribute('href');

            if (!href || !href.startsWith('#')) {
                return;
            }

            const target = document.querySelector(href);

            if (!target) {
                return;
            }

            event.preventDefault();

            const offset = 90;

            const targetPosition =
                target.getBoundingClientRect().top +
                window.pageYOffset -
                offset;

            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });

        });

    });
// =====================================================
// 3. PERFORMANCE METERS
// =====================================================

const meterGroups = document.querySelectorAll(
    '.dp-performance-card__meters'
);


const animateMeters = (container) => {

    const meters = container.querySelectorAll(
        '.dp-meter__track span'
    );

    meters.forEach((meter, index) => {

        // Blade se original width already aa rahi hai
        const finalWidth = meter.getAttribute('style');

        if (!finalWidth) {
            return;
        }

        // Current width temporarily zero
        meter.style.width = '0%';

        // Original width ko thori delay ke baad restore karo
        setTimeout(() => {

            const match = finalWidth.match(
                /width\s*:\s*([\d.]+%)/
            );

            if (match) {
                meter.style.width = match[1];
            }

        }, 150 + (index * 100));

    });

};


if ('IntersectionObserver' in window) {

    const meterObserver = new IntersectionObserver(
        (entries, observer) => {

            entries.forEach((entry) => {

                if (!entry.isIntersecting) {
                    return;
                }

                animateMeters(entry.target);

                observer.unobserve(entry.target);

            });

        },
        {
            threshold: 0.2
        }
    );


    meterGroups.forEach((group) => {
        meterObserver.observe(group);
    });

} else {

    // Browser fallback
    meterGroups.forEach((group) => {

        group.querySelectorAll(
            '.dp-meter__track span'
        ).forEach((meter) => {

            const style = meter.getAttribute('style');

            if (style) {

                const match = style.match(
                    /width\s*:\s*([\d.]+%)/
                );

                if (match) {
                    meter.style.width = match[1];
                }

            }

        });

    });

}




    // =====================================================
    // 4. MOVEMENT CARDS
    // =====================================================

    const movementCards = document.querySelectorAll(
        '.dp-movement'
    );


    movementCards.forEach((card) => {

        card.addEventListener('mouseenter', () => {

            movementCards.forEach((otherCard) => {

                if (otherCard !== card) {
                    otherCard.classList.add('is-dimmed');
                }

            });

            card.classList.add('is-active');

        });


        card.addEventListener('mouseleave', () => {

            movementCards.forEach((otherCard) => {
                otherCard.classList.remove('is-dimmed');
            });

            card.classList.remove('is-active');

        });

    });



    // =====================================================
    // 5. GAME ROW HOVER NUMBER EFFECT
    // =====================================================

    gameRows.forEach((row) => {

        const number = row.querySelector(
            '.dp-game-row__number'
        );

        if (!number) {
            return;
        }


        row.addEventListener('mouseenter', () => {

            number.classList.add('is-active');

        });


        row.addEventListener('mouseleave', () => {

            number.classList.remove('is-active');

        });

    });



    // =====================================================
    // 6. PARALLAX GRID — HERO
    // =====================================================

    const heroGrid = document.querySelector(
        '.dp-hero__grid'
    );


    if (heroGrid) {

        let ticking = false;


        const updateHeroGrid = () => {

            const scrollY = window.pageYOffset || 0;

            // Keep movement very subtle
            const movement = Math.min(
                scrollY * 0.08,
                35
            );

            heroGrid.style.transform =
                `translate3d(0, ${movement}px, 0)`;

            ticking = false;

        };


        window.addEventListener(
            'scroll',
            () => {

                if (!ticking) {

                    window.requestAnimationFrame(
                        updateHeroGrid
                    );

                    ticking = true;

                }

            },
            {
                passive: true
            }
        );

    }



    // =====================================================
    // 7. HERO SCROLL MARK
    // =====================================================

    const scrollMark = document.querySelector(
        '.dp-scroll-mark'
    );


    if (scrollMark) {

        scrollMark.addEventListener('click', () => {

            const intro = document.querySelector(
                '.dp-intro'
            );

            if (!intro) {
                return;
            }

            intro.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });

        });


        scrollMark.style.cursor = 'pointer';

    }



    // =====================================================
    // 8. GEAR ROW ACTIVE STATE
    // =====================================================

    const gearRows = document.querySelectorAll(
        '.dp-gear-row'
    );


    gearRows.forEach((row) => {

        row.addEventListener('mouseenter', () => {
            row.classList.add('is-active');
        });


        row.addEventListener('mouseleave', () => {
            row.classList.remove('is-active');
        });

    });



    // =====================================================
    // 9. PRIORITY CARD ACTIVE STATE
    // =====================================================

    const priorityCards = document.querySelectorAll(
        '.dp-priority-card'
    );


    priorityCards.forEach((card) => {

        card.addEventListener('mouseenter', () => {

            priorityCards.forEach((otherCard) => {

                if (otherCard !== card) {
                    otherCard.classList.add('is-dimmed');
                }

            });

            card.classList.add('is-active');

        });


        card.addEventListener('mouseleave', () => {

            priorityCards.forEach((otherCard) => {
                otherCard.classList.remove('is-dimmed');
            });

            card.classList.remove('is-active');

        });

    });



    // =====================================================
    // 10. REDUCED MOTION SUPPORT
    // =====================================================

    const prefersReducedMotion =
        window.matchMedia &&
        window.matchMedia(
            '(prefers-reduced-motion: reduce)'
        ).matches;


    if (prefersReducedMotion) {

        document.documentElement.classList.add(
            'reduce-motion'
        );

    }



    // =====================================================
    // 11. ACTIVE SECTION FEEDBACK
    // =====================================================

    const sections = document.querySelectorAll(
        '.dp-intro, ' +
        '.dp-game-selector, ' +
        '.dp-performance, ' +
        '.dp-movements, ' +
        '.dp-statement, ' +
        '.dp-priorities, ' +
        '.dp-gear-system, ' +
        '.dp-final'
    );


    if ('IntersectionObserver' in window) {

        const sectionObserver =
            new IntersectionObserver(
                (entries) => {

                    entries.forEach((entry) => {

                        if (entry.isIntersecting) {

                            entry.target.classList.add(
                                'section-active'
                            );

                        }

                    });

                },
                {
                    threshold: 0.15
                }
            );


        sections.forEach((section) => {
            sectionObserver.observe(section);
        });

    }



    // =====================================================
    // 12. PAGE READY
    // =====================================================

    document.body.classList.add(
        'disciplines-page-ready'
    );

});