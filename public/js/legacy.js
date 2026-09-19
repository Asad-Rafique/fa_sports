// =========================================================
// FA SPORTS — THE FA LEGACY
// PAGE INTERACTIONS
// =========================================================

document.addEventListener('DOMContentLoaded', () => {

    // =====================================================
    // FA ARCHIVE — CLICK TO ZOOM
    // =====================================================

    const archiveWall = document.getElementById('archiveWall');
    const archiveZoom = document.getElementById('archiveZoom');
    const archiveZoomClose = document.getElementById('archiveZoomClose');
    const archiveZoomImg = document.getElementById('archiveZoomImg');
    const archiveZoomTitle = document.getElementById('archiveZoomTitle');
    const archiveZoomEra = document.getElementById('archiveZoomEra');
    const archiveZoomDesc = document.getElementById('archiveZoomDesc');

    if (archiveWall && archiveZoom) {

        const archiveItems = archiveWall.querySelectorAll(
            '.fa-lg-archive__item'
        );

        archiveItems.forEach((item) => {

            item.addEventListener('click', () => {

                const image = item.querySelector('img');

                if (image && archiveZoomImg) {
                    archiveZoomImg.src = image.src;
                    archiveZoomImg.alt = image.alt || '';
                }

                if (archiveZoomTitle) {
                    archiveZoomTitle.textContent =
                        item.dataset.title || '';
                }

                if (archiveZoomEra) {
                    archiveZoomEra.textContent =
                        item.dataset.era || '';
                }

                if (archiveZoomDesc) {
                    archiveZoomDesc.textContent =
                        item.dataset.desc || '';
                }

                archiveZoom.classList.add('is-open');

                archiveZoom.setAttribute(
                    'aria-hidden',
                    'false'
                );

                document.body.classList.add(
                    'fa-archive-zoom-open'
                );
            });

        });


        const closeArchiveZoom = () => {

            archiveZoom.classList.remove('is-open');

            archiveZoom.setAttribute(
                'aria-hidden',
                'true'
            );

            document.body.classList.remove(
                'fa-archive-zoom-open'
            );
        };


        if (archiveZoomClose) {

            archiveZoomClose.addEventListener(
                'click',
                closeArchiveZoom
            );

        }


        archiveZoom.addEventListener(
            'click',
            (event) => {

                if (event.target === archiveZoom) {
                    closeArchiveZoom();
                }

            }
        );


        document.addEventListener(
            'keydown',
            (event) => {

                if (
                    event.key === 'Escape' &&
                    archiveZoom.classList.contains('is-open')
                ) {
                    closeArchiveZoom();
                }

            }
        );

    }


    // =====================================================
    // PERFORMANCE NUMBERS
    // =====================================================

    const numberEls =
        document.querySelectorAll(
            '.fa-lg-numbers__value'
        );

    if (
        numberEls.length &&
        'IntersectionObserver' in window
    ) {

        const animateNumber = (element) => {

            if (element.dataset.animated === 'true') {
                return;
            }

            element.dataset.animated = 'true';

            const target =
                Number(element.dataset.count) || 0;

            const suffix =
                element.dataset.suffix || '';

            const duration = 1200;

            const start =
                performance.now();


            const step = (now) => {

                const progress =
                    Math.min(
                        (now - start) / duration,
                        1
                    );


                element.textContent =
                    Math.floor(
                        progress * target
                    ) + suffix;


                if (progress < 1) {

                    window.requestAnimationFrame(
                        step
                    );

                } else {

                    element.textContent =
                        target + suffix;

                }

            };


            window.requestAnimationFrame(step);

        };


        const numberObserver =
            new IntersectionObserver(
                (entries, observer) => {

                    entries.forEach((entry) => {

                        if (entry.isIntersecting) {

                            animateNumber(
                                entry.target
                            );

                            observer.unobserve(
                                entry.target
                            );

                        }

                    });

                },
                {
                    threshold: 0.4
                }
            );


        numberEls.forEach((element) => {

            numberObserver.observe(element);

        });

    } else if (numberEls.length) {

        // Older browser fallback

        numberEls.forEach((element) => {

            const target =
                Number(element.dataset.count) || 0;

            const suffix =
                element.dataset.suffix || '';

            element.textContent =
                target + suffix;

        });

    }


    // =====================================================
    // GLOBAL JOURNEY — MAP PINS
    // =====================================================

    const pins =
        document.querySelectorAll(
            '.fa-lg-global__pin'
        );

    const tooltip =
        document.getElementById(
            'globalTooltip'
        );


    pins.forEach((pin) => {

        // Position from database values

        if (pin.dataset.y !== undefined) {

            pin.style.top =
                `${pin.dataset.y}%`;

        }


        if (pin.dataset.x !== undefined) {

            pin.style.left =
                `${pin.dataset.x}%`;

        }


        const showTooltip = () => {

            if (!tooltip) {
                return;
            }


            const region =
                pin.dataset.region || '';

            const market =
                pin.dataset.market || '';

            const system =
                pin.dataset.system || '';

            const partnership =
                pin.dataset.partnership || '';


            tooltip.innerHTML = `
                <strong>${region}</strong>
                <small>${market}</small>
                <small>${system}</small>
                <small>${partnership}</small>
            `;


            tooltip.classList.add(
                'is-visible'
            );

        };


        const hideTooltip = () => {

            if (!tooltip) {
                return;
            }

            tooltip.classList.remove(
                'is-visible'
            );

        };


        pin.addEventListener(
            'mouseenter',
            showTooltip
        );


        pin.addEventListener(
            'mouseleave',
            hideTooltip
        );


        pin.addEventListener(
            'focus',
            showTooltip
        );


        pin.addEventListener(
            'blur',
            hideTooltip
        );


        pin.addEventListener(
            'click',
            showTooltip
        );

    });


    // =====================================================
    // FA CODE — CLICK WORD
    // =====================================================

    const codeWords =
        document.querySelectorAll(
            '.fa-lg-code__word'
        );

    const codeMeaning =
        document.getElementById(
            'codeMeaning'
        );


    codeWords.forEach((word) => {

        word.addEventListener(
            'click',
            () => {

                codeWords.forEach((item) => {

                    item.classList.toggle(
                        'is-active',
                        item === word
                    );

                });


                if (codeMeaning) {

                    codeMeaning.textContent =
                        word.dataset.meaning || '';

                }

            }
        );

    });


    // =====================================================
    // VISION — ACTIVE ITEM
    // =====================================================

    const visionItems =
        document.querySelectorAll(
            '.fa-lg-vision__track li'
        );


    if (
        visionItems.length &&
        'IntersectionObserver' in window
    ) {

        const visionObserver =
            new IntersectionObserver(
                (entries) => {

                    entries.forEach((entry) => {

                        if (entry.isIntersecting) {

                            visionItems.forEach(
                                (item) => {
                                    item.classList.remove(
                                        'is-active'
                                    );
                                }
                            );


                            entry.target.classList.add(
                                'is-active'
                            );

                        }

                    });

                },
                {
                    threshold: 0.5
                }
            );


        visionItems.forEach((item) => {

            visionObserver.observe(item);

        });

    }


    // =====================================================
    // SAFE SECTION VISIBILITY
    // =====================================================
    //
    // IMPORTANT:
    // CSS now keeps all Legacy sections visible by default.
    // We do NOT hide sections with JavaScript.
    //
    // This prevents the old scroll-reveal issue where a
    // section could remain opacity: 0 if JS failed.
    //

    const legacySections = document.querySelectorAll(
        [
            '.fa-lg-opening',
            '.fa-lg-origin',
            '.fa-lg-timeline',
            '.fa-lg-thennow',
            '.fa-lg-philosophy',
            '.fa-lg-people',
            '.fa-global',
            '.fa-lg-craft',
            '.fa-lg-why',
            '.fa-lg-evolution',
            '.fa-lg-materials',
            '.fa-lg-code',
            '.fa-lg-milestones',
            '.fa-lg-today',
            '.fa-lg-future',
            '.fa-lg-vision',
            '.fa-lg-statement',
            '.fa-lg-legacy-statement'
        ].join(',')
    );


    legacySections.forEach((section) => {

        section.classList.add(
            'fa-lg-ready'
        );

    });


    // =====================================================
    // OPENING CARDS — STAGGER DELAY
    // =====================================================

    document
        .querySelectorAll(
            '.fa-lg-opening__card'
        )
        .forEach((card, index) => {

            card.style.setProperty(
                '--card-delay',
                `${index * 100}ms`
            );

        });


    // =====================================================
    // TIMELINE ITEMS — STAGGER DELAY
    // =====================================================

    document
        .querySelectorAll(
            '.fa-lg-timeline__item'
        )
        .forEach((item, index) => {

            item.style.setProperty(
                '--item-delay',
                `${index * 90}ms`
            );

        });


    // =====================================================
    // THEN / NOW CARDS — STAGGER DELAY
    // =====================================================

    document
        .querySelectorAll(
            '.fa-lg-thennow__card'
        )
        .forEach((card, index) => {

            card.style.setProperty(
                '--card-delay',
                `${index * 90}ms`
            );

        });


    // =====================================================
    // PHILOSOPHY ITEMS — STAGGER DELAY
    // =====================================================

    document
        .querySelectorAll(
            '.fa-lg-philosophy__item'
        )
        .forEach((item, index) => {

            item.style.setProperty(
                '--item-delay',
                `${index * 90}ms`
            );

        });


    // =====================================================
    // PEOPLE ITEMS — STAGGER DELAY
    // =====================================================

    document
        .querySelectorAll(
            '.fa-lg-people__item'
        )
        .forEach((item, index) => {

            item.style.setProperty(
                '--item-delay',
                `${index * 90}ms`
            );

        });


    // =====================================================
    // SMOOTH ANCHOR SCROLL
    // =====================================================

    document
        .querySelectorAll(
            'a[href^="#"]'
        )
        .forEach((link) => {

            link.addEventListener(
                'click',
                (event) => {

                    const targetId =
                        link.getAttribute('href');


                    if (
                        !targetId ||
                        targetId === '#'
                    ) {
                        return;
                    }


                    const target =
                        document.querySelector(
                            targetId
                        );


                    if (!target) {
                        return;
                    }


                    event.preventDefault();


                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });

                }
            );

        });


    // =====================================================
    // HERO — ALWAYS VISIBLE
    // =====================================================

    const hero =
        document.querySelector(
            '.fa-lg-hero'
        );


    if (hero) {

        hero.classList.add(
            'is-visible'
        );

    }


    // =====================================================
    // PAGE READY
    // =====================================================

    document.documentElement.classList.add(
        'fa-legacy-js-ready'
    );

});
/* =========================================================
   FA SPORTS — GLOBAL MAP
   ========================================================= */

document.addEventListener('DOMContentLoaded', function () {

    const mapElement = document.getElementById('faWorldMap');

    if (!mapElement) {
        return;
    }

    // Prevent duplicate initialization
    if (mapElement.dataset.mapInitialized === 'true') {
        return;
    }

    // Make sure Leaflet has loaded
    if (typeof L === 'undefined') {
        console.warn('Leaflet map library has not loaded.');
        return;
    }

    mapElement.dataset.mapInitialized = 'true';

    const loading = mapElement.querySelector('.fa-global__map-loading');

    /*
     * Create world map
     */
    const map = L.map('faWorldMap', {
        center: [25, 20],
        zoom: 2,
        minZoom: 2,
        maxZoom: 5,
        zoomControl: true,
        attributionControl: true,
        scrollWheelZoom: false,
        dragging: true,
        doubleClickZoom: true
    });

    /*
     * OpenStreetMap tiles
     */
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);


    /* =====================================================
       FA SPORTS ORIGIN — SIALKOT
       ===================================================== */

    const sialkot = [32.4945, 74.5229];

    const originIcon = L.divIcon({
        className: 'fa-map-origin-marker',
        html: '<span></span>',
        iconSize: [22, 22],
        iconAnchor: [11, 11]
    });

    const originMarker = L.marker(sialkot, {
        icon: originIcon
    }).addTo(map);

    originMarker.bindPopup(`
        <div class="fa-map-popup">
            <strong>FA SPORTS</strong>
            <span>SIALKOT, PAKISTAN</span>
            <small>ORIGIN / 2004</small>
        </div>
    `);


    /* =====================================================
       GLOBAL REGIONS
       ===================================================== */

    const regions = [
        {
            name: 'Pakistan',
            position: [32.4945, 74.5229]
        },
        {
            name: 'Europe',
            position: [50.8503, 4.3517]
        },
        {
            name: 'Middle East',
            position: [25.2048, 55.2708]
        },
        {
            name: 'North America',
            position: [40.7128, -74.0060]
        },
        {
            name: 'Africa',
            position: [6.5244, 3.3792]
        },
        {
            name: 'Australia',
            position: [-33.8688, 151.2093]
        }
    ];


    /*
     * Region marker
     */
    regions.forEach(function (region) {

        const regionIcon = L.divIcon({
            className: 'fa-map-region-marker',
            html: '<span></span>',
            iconSize: [12, 12],
            iconAnchor: [6, 6]
        });

        const marker = L.marker(region.position, {
            icon: regionIcon
        }).addTo(map);

        marker.bindTooltip(region.name, {
            direction: 'top',
            offset: [0, -8],
            className: 'fa-map-tooltip'
        });

    });


    /*
     * Connecting lines
     */
    regions.forEach(function (region) {

        if (region.name === 'Pakistan') {
            return;
        }

        L.polyline(
            [
                sialkot,
                region.position
            ],
            {
                color: '#d71920',
                weight: 1.2,
                opacity: 0.65,
                dashArray: '5 8',
                interactive: false
            }
        ).addTo(map);

    });


    /*
     * Remove loading screen
     */
    if (loading) {

        setTimeout(function () {

            loading.style.opacity = '0';
            loading.style.pointerEvents = 'none';

            setTimeout(function () {
                loading.remove();
            }, 400);

        }, 500);

    }


    /*
     * Fix Leaflet sizing after page layout is ready
     */
    setTimeout(function () {
        map.invalidateSize();
    }, 300);


    /*
     * Region buttons
     */
    const regionButtons = document.querySelectorAll(
        '.fa-global__regions button'
    );

    regionButtons.forEach(function (button) {

        button.addEventListener('click', function () {

            const regionName = this.dataset.region;

            const selectedRegion = regions.find(function (region) {
                return region.name === regionName;
            });

            if (!selectedRegion) {
                return;
            }

            map.flyTo(
                selectedRegion.position,
                regionName === 'Pakistan' ? 5 : 3.5,
                {
                    duration: 1.2
                }
            );

        });

    });

});