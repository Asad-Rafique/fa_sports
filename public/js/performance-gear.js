// =========================================================
// FA SPORTS — PERFORMANCE GEAR
// Page interactions
// =========================================================

document.addEventListener('DOMContentLoaded', () => {

    const prefersReducedMotion =
        window.matchMedia('(prefers-reduced-motion: reduce)').matches;


    // =====================================================
    // FILTER PANEL
    // =====================================================

    const filterToggle = document.getElementById('filterToggle');
    const filterPanel = document.getElementById('filterPanel');

    if (filterToggle && filterPanel) {

        filterToggle.addEventListener('click', () => {

            const isOpen = filterPanel.classList.toggle('is-open');

            filterToggle.setAttribute(
                'aria-expanded',
                isOpen ? 'true' : 'false'
            );

        });

    }


    // =====================================================
    // ENGINEERED FOR MOTION
    // =====================================================

    const motionList = document.getElementById('motionList');
    const motionVisual = document.getElementById('motionVisual');

    if (motionList && motionVisual) {

        const gradients = {

            moisture:
                'linear-gradient(150deg,#132226,#0a0a0b 60%,#0d2a2f)',

            lightweight:
                'linear-gradient(150deg,#1a1a1c,#0a0a0b 60%,#26140a)',

            flex:
                'linear-gradient(150deg,#1c1420,#0a0a0b 60%,#22102c)',

            breathable:
                'linear-gradient(150deg,#1a1c14,#0a0a0b 60%,#1e2408)',

            durability:
                'linear-gradient(150deg,#1a1a1c,#0a0a0b 60%,#2a0d10)',

            fit:
                'linear-gradient(150deg,#1c161a,#0a0a0b 60%,#2a0d1c)'
        };


        const items =
            motionList.querySelectorAll('.fa-pg-motion__item');


        const activate = (spec) => {

            items.forEach((item) => {

                item.classList.toggle(
                    'is-active',
                    item.dataset.spec === spec
                );

            });

            motionVisual.style.background =
                gradients[spec] || gradients.moisture;

        };


        items.forEach((item) => {

            item.addEventListener('mouseenter', () => {

                activate(item.dataset.spec);

            });


            item.addEventListener('click', () => {

                activate(item.dataset.spec);

            });

        });

    }


    // =====================================================
    // QUICK VIEW MODAL
    // =====================================================

    const modal =
        document.getElementById('quickViewModal');

    const backdrop =
        document.getElementById('quickViewBackdrop');

    const closeBtn =
        document.getElementById('quickViewClose');


    const openModal = (card) => {

        if (!modal) return;


        const category =
            document.getElementById('qvCategory');

        const name =
            document.getElementById('qvName');

        const specs =
            document.getElementById('qvSpecs');

        const price =
            document.getElementById('qvPrice');

        const colors =
            document.getElementById('qvColors');

        const sizes =
            document.getElementById('qvSizes');


        if (category) {
            category.textContent =
                card.dataset.category || '';
        }


        if (name) {
            name.textContent =
                card.dataset.name || '';
        }


        if (specs) {
            specs.textContent =
                card.dataset.specs || '';
        }


        if (price) {

            price.textContent =
                card.dataset.price
                    ? `$${card.dataset.price}`
                    : '';

        }


        if (colors) {
            colors.textContent =
                card.dataset.colors || '';
        }


        if (sizes) {
            sizes.textContent =
                card.dataset.sizes || '';
        }


        modal.classList.add('is-open');

        modal.setAttribute(
            'aria-hidden',
            'false'
        );

        document.body.style.overflow = 'hidden';

    };


    const closeModal = () => {

        if (!modal) return;

        modal.classList.remove('is-open');

        modal.setAttribute(
            'aria-hidden',
            'true'
        );

        document.body.style.overflow = '';

    };


    document
        .querySelectorAll('.fa-pg-quickview-btn')
        .forEach((btn) => {

            btn.addEventListener('click', () => {

                const card =
                    btn.closest('.fa-pg-product-card');

                if (card) {
                    openModal(card);
                }

            });

        });


    if (backdrop) {
        backdrop.addEventListener(
            'click',
            closeModal
        );
    }


    if (closeBtn) {
        closeBtn.addEventListener(
            'click',
            closeModal
        );
    }


    document.addEventListener('keydown', (event) => {

        if (event.key === 'Escape') {
            closeModal();
        }

    });


    // =====================================================
    // MAGNETIC BUTTONS
    // =====================================================

    if (!prefersReducedMotion) {

        document
            .querySelectorAll('.fa-magnetic')
            .forEach((button) => {

                button.addEventListener(
                    'mousemove',
                    (event) => {

                        const rect =
                            button.getBoundingClientRect();

                        const x =
                            event.clientX -
                            rect.left -
                            rect.width / 2;

                        const y =
                            event.clientY -
                            rect.top -
                            rect.height / 2;


                        button.style.transform =
                            `translate(${x * 0.15}px, ${y * 0.3}px)`;

                    }
                );


                button.addEventListener(
                    'mouseleave',
                    () => {

                        button.style.transform = '';

                    }
                );

            });

    }


    // =====================================================
    // LOOKBOOK VIDEO
    // =====================================================

    const lookbookVideo =
        document.getElementById('lookbookVideo');

    const lookbookPlay =
        document.getElementById('lookbookPlay');


    if (lookbookVideo && lookbookPlay) {

        lookbookPlay.addEventListener(
            'click',
            async () => {

                try {

                    if (lookbookVideo.paused) {

                        await lookbookVideo.play();

                        lookbookPlay.innerHTML = '&#10074;&#10074;';

                        lookbookPlay.setAttribute(
                            'aria-label',
                            'Pause lookbook film'
                        );

                    } else {

                        lookbookVideo.pause();

                        lookbookPlay.innerHTML = '&#9658;';

                        lookbookPlay.setAttribute(
                            'aria-label',
                            'Play lookbook film'
                        );

                    }

                } catch (error) {

                    console.warn(
                        'Lookbook video could not be played:',
                        error
                    );

                }

            }
        );

    }


    // =====================================================
    // AUTO PAUSE VIDEOS WHEN OUTSIDE VIEWPORT
    // =====================================================

    const videos =
        document.querySelectorAll(
            '.fa-pg-game__video, #lookbookVideo'
        );


    if ('IntersectionObserver' in window) {

        const observer =
            new IntersectionObserver(
                (entries) => {

                    entries.forEach((entry) => {

                        const video =
                            entry.target;


                        if (entry.isIntersecting) {

                            if (
                                video.classList.contains(
                                    'fa-pg-game__video'
                                )
                            ) {

                                video.play().catch(() => {});

                            }

                        } else {

                            if (
                                video.id === 'lookbookVideo' &&
                                !video.paused
                            ) {

                                video.pause();

                            }

                        }

                    });

                },
                {
                    threshold: 0.25
                }
            );


        videos.forEach((video) => {

            observer.observe(video);

        });

    }
        // =====================================================
    // PREMIUM SCROLL REVEAL ANIMATIONS
    // =====================================================

    if (!prefersReducedMotion) {

        /*
         * Add animation classes automatically.
         * No Blade changes required.
         */

        const animationGroups = [

            // Section headings / content
            {
                selector: `
                    .fa-pg-game,
                    .fa-pg-system,
                    .fa-featured-gear,
                    .fa-performance-lab,
                    .fa-collection-white,
                    .fa-performance-notes,
                    .fa-lookbook,
                    .fa-craft
                `,
                animation: 'fa-scroll-section'
            },

            // Performance system cards
            {
                selector: `
                    .fa-pg-system__cell,
                    .fa-pg-system__item,
                    .fa-pg-system article
                `,
                animation: 'fa-scroll-card'
            },

            // Featured gear cards
            {
                selector: `
                    .fa-featured-gear article,
                    .fa-pg-story article,
                    .fa-featured-gear .fa-pg-story__media,
                    .fa-featured-gear .fa-pg-story__content
                `,
                animation: 'fa-scroll-feature'
            },

            // Collection cards
            {
                selector: `
                    .fa-collection-white .fa-pg-product-card,
                    .fa-collection-white article
                `,
                animation: 'fa-scroll-card'
            },

            // Performance notes
            {
                selector: `
                    .fa-performance-notes article,
                    .fa-performance-notes .fa-note-card,
                    .fa-performance-notes .card
                `,
                animation: 'fa-scroll-card'
            },

            // Craft process cards
            {
                selector: `
                    .fa-craft article,
                    .fa-craft .fa-craft__card,
                    .fa-craft .craft-card
                `,
                animation: 'fa-scroll-card'
            },

            // Game panels
            {
                selector: `
                    .fa-pg-game__panel,
                    .fa-pg-game article
                `,
                animation: 'fa-scroll-panel'
            },

            // Metrics
            {
                selector: `
                    .fa-performance-lab__metric,
                    .fa-performance-lab .metric,
                    .fa-performance-lab li
                `,
                animation: 'fa-scroll-metric'
            }
        ];


        /*
         * Apply animation classes
         */

        animationGroups.forEach((group) => {

            document
                .querySelectorAll(group.selector)
                .forEach((element, index) => {

                    element.classList.add(group.animation);

                    /*
                     * Stagger timing
                     */
                    element.style.setProperty(
                        '--scroll-delay',
                        `${Math.min(index * 80, 480)}ms`
                    );

                });

        });


        /*
         * Hero animation
         */

        const hero = document.querySelector('.fa-pg-hero');

        if (hero) {

            hero.classList.add('fa-hero-scroll-ready');

            requestAnimationFrame(() => {

                requestAnimationFrame(() => {

                    hero.classList.add('fa-hero-scroll-visible');

                });

            });

        }


        /*
         * Performance strip animation
         */

        const strip = document.querySelector('.fa-pg-strip');

        if (strip) {

            strip.classList.add('fa-strip-scroll-ready');

            setTimeout(() => {

                strip.classList.add('fa-strip-scroll-visible');

            }, 250);

        }


        /*
         * Intersection Observer
         */

        if ('IntersectionObserver' in window) {

            const scrollObserver =
                new IntersectionObserver(
                    (entries, observer) => {

                        entries.forEach((entry) => {

                            if (!entry.isIntersecting) {
                                return;
                            }


                            const element = entry.target;


                            /*
                             * Reveal
                             */

                            setTimeout(() => {

                                element.classList.add(
                                    'fa-scroll-visible'
                                );

                            }, 30);


                            /*
                             * Stop observing after reveal
                             */

                            observer.unobserve(element);

                        });

                    },
                    {
                        threshold: 0.12,
                        rootMargin: '0px 0px -70px 0px'
                    }
                );


            document
                .querySelectorAll(
                    '.fa-scroll-section, ' +
                    '.fa-scroll-card, ' +
                    '.fa-scroll-feature, ' +
                    '.fa-scroll-panel, ' +
                    '.fa-scroll-metric'
                )
                .forEach((element) => {

                    scrollObserver.observe(element);

                });

        } else {

            /*
             * Browser fallback
             */

            document
                .querySelectorAll(
                    '.fa-scroll-section, ' +
                    '.fa-scroll-card, ' +
                    '.fa-scroll-feature, ' +
                    '.fa-scroll-panel, ' +
                    '.fa-scroll-metric'
                )
                .forEach((element) => {

                    element.classList.add(
                        'fa-scroll-visible'
                    );

                });

        }


        /*
         * Subtle image reveal / zoom
         */

        const animatedImages =
            document.querySelectorAll(
                `
                .fa-pg-system img,
                .fa-featured-gear img,
                .fa-collection-white img,
                .fa-performance-lab img,
                .fa-craft img
                `
            );


        animatedImages.forEach((image) => {

            image.classList.add(
                'fa-scroll-image'
            );

        });


        /*
         * Add visible state to images
         */

        if ('IntersectionObserver' in window) {

            const imageObserver =
                new IntersectionObserver(
                    (entries, observer) => {

                        entries.forEach((entry) => {

                            if (
                                !entry.isIntersecting
                            ) {
                                return;
                            }


                            entry.target.classList.add(
                                'fa-scroll-image-visible'
                            );


                            observer.unobserve(
                                entry.target
                            );

                        });

                    },
                    {
                        threshold: 0.08
                    }
                );


            animatedImages.forEach((image) => {

                imageObserver.observe(image);

            });

        }


        /*
         * Subtle parallax on large editorial images
         */

        const parallaxImages =
            document.querySelectorAll(
                `
                .fa-performance-lab img,
                .fa-featured-gear img,
                .fa-lookbook video
                `
            );


        let parallaxTicking = false;


        const updateParallax = () => {

            parallaxImages.forEach((element) => {

                const rect =
                    element.getBoundingClientRect();

                const viewport =
                    window.innerHeight;


                if (
                    rect.bottom < 0 ||
                    rect.top > viewport
                ) {
                    return;
                }


                const center =
                    rect.top +
                    rect.height / 2;


                const distance =
                    (center - viewport / 2) /
                    viewport;


                const movement =
                    distance * -18;


                element.style.setProperty(
                    '--parallax-y',
                    `${movement}px`
                );

            });


            parallaxTicking = false;

        };


        window.addEventListener(
            'scroll',
            () => {

                if (!parallaxTicking) {

                    window.requestAnimationFrame(
                        updateParallax
                    );

                    parallaxTicking = true;

                }

            },
            {
                passive: true
            }
        );


        updateParallax();

    }

});