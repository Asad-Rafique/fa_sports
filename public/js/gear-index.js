/* =========================================================
   FA SPORTS — THE GEAR INDEX
   COMPLETE INTERACTION SYSTEM
========================================================= */

document.addEventListener('DOMContentLoaded', () => {

    /* =====================================================
       HELPERS
    ===================================================== */

    const readJSON = (id) => {
        const el = document.getElementById(id);

        if (!el) {
            return {};
        }

        try {
            return JSON.parse(el.textContent);
        } catch (error) {
            return {};
        }
    };

    const setText = (id, value) => {
        const el = document.getElementById(id);

        if (el) {
            el.textContent = value || '';
        }
    };


    /* =====================================================
       CATEGORY TICKER
       Mouse Drag / Touch Swipe
    ===================================================== */

    const ticker = document.getElementById('categoryTicker');

    if (ticker) {

        let isDown = false;
        let startX = 0;
        let scrollStart = 0;

        ticker.addEventListener('mousedown', (event) => {

            isDown = true;

            ticker.classList.add('is-dragging');

            startX = event.pageX;

            scrollStart = ticker.scrollLeft;

        });

        window.addEventListener('mouseup', () => {

            isDown = false;

            ticker.classList.remove('is-dragging');

        });

        window.addEventListener('mousemove', (event) => {

            if (!isDown) {
                return;
            }

            ticker.scrollLeft =
                scrollStart - (event.pageX - startX);

        });

        ticker.addEventListener(
            'mouseleave',
            () => {
                isDown = false;
                ticker.classList.remove('is-dragging');
            }
        );

    }


    /* =====================================================
       CATEGORY NAVIGATION
       Supports both older and editorial class systems
    ===================================================== */

    const catList = document.getElementById('catNavList');
    const catVisual = document.getElementById('catNavVisual');

    if (catList && catVisual) {

        const items = catList.querySelectorAll(
            '.fa-gi-catnav__item, .fa-gi-category-editorial__item'
        );

        const panels = catVisual.querySelectorAll(
            '.fa-gi-catnav__panel, .fa-gi-category-editorial__card'
        );

        const activateCategory = (category) => {

            if (!category) {
                return;
            }

            items.forEach((item) => {

                item.classList.toggle(
                    'is-active',
                    item.dataset.cat === category
                );

            });

            panels.forEach((panel) => {

                panel.classList.toggle(
                    'is-active',
                    panel.dataset.cat === category
                );

            });

        };

        items.forEach((item) => {

            item.addEventListener('click', () => {

                activateCategory(item.dataset.cat);

            });

            /*
             * Desktop hover interaction
             */
            item.addEventListener('mouseenter', () => {

                if (window.matchMedia('(pointer: fine)').matches) {

                    activateCategory(item.dataset.cat);

                }

            });

        });

        /*
         * Activate first category if none is active
         */
        const activeItem = catList.querySelector(
            '.is-active'
        );

        if (!activeItem && items.length) {

            activateCategory(items[0].dataset.cat);

        }

    }


    /* =====================================================
       FILTER PANEL TOGGLE
    ===================================================== */

    const filterToggle = document.getElementById('filterToggle');
    const filterPanel = document.getElementById('filterPanel');

    if (filterToggle && filterPanel) {

        filterToggle.addEventListener('click', () => {

            const isOpen =
                filterPanel.classList.toggle('is-open');

            filterToggle.setAttribute(
                'aria-expanded',
                isOpen ? 'true' : 'false'
            );

        });

    }


    /* =====================================================
       TRAINING COLLECTION FILTER
    ===================================================== */

    const trainingFilters =
        document.getElementById('trainingFilters');

    const trainingWall =
        document.getElementById('trainingWall');

    if (trainingFilters && trainingWall) {

        const buttons =
            trainingFilters.querySelectorAll('button');

        const cells =
            trainingWall.querySelectorAll(
                '.fa-gi-training__cell'
            );

        buttons.forEach((button) => {

            button.addEventListener('click', () => {

                buttons.forEach((item) => {

                    item.classList.toggle(
                        'is-active',
                        item === button
                    );

                });

                const filter =
                    button.dataset.filter || 'all';

                cells.forEach((cell) => {

                    const type =
                        cell.dataset.type || '';

                    const hidden =
                        filter !== 'all' &&
                        type !== filter;

                    cell.classList.toggle(
                        'is-hidden',
                        hidden
                    );

                });

            });

        });

    }


    /* =====================================================
       PRODUCT DETAIL MODAL
    ===================================================== */

    const modal =
        document.getElementById('quickViewModal');

    const backdrop =
        document.getElementById('quickViewBackdrop');

    const closeBtn =
        document.getElementById('quickViewClose');


    const categoryIconMap = {

        'Match Kits': 'icon-jersey',

        'Apparel': 'icon-jersey',

        'Footwear': 'icon-boot',

        'Gloves': 'icon-glove',

        'Bags': 'icon-bag',

        'Protection': 'icon-shield',

        'Training Gear': 'icon-dumbbell',

        'Accessories': 'icon-cap'

    };


    const openModal = (card) => {

        if (!modal || !card) {
            return;
        }


        /* -----------------------------------------
           BASIC PRODUCT INFORMATION
        ----------------------------------------- */

        setText(
            'qvCategory',
            card.dataset.category
        );

        setText(
            'qvName',
            card.dataset.name
        );

        setText(
            'qvSpecs',
            card.dataset.specs
        );


        /* -----------------------------------------
           PRICE
        ----------------------------------------- */

        const price =
            card.dataset.price || '';

        setText(
            'qvPrice',
            price ? `$${price}` : ''
        );


        /* -----------------------------------------
           TECHNICAL DETAILS
        ----------------------------------------- */

        setText(
            'qvSport',
            card.dataset.sport
        );

        setText(
            'qvMaterial',
            card.dataset.material
        );

        setText(
            'qvLevel',
            card.dataset.level
        );

        setText(
            'qvColors',
            card.dataset.colors
        );

        setText(
            'qvSizes',
            card.dataset.sizes
        );


        /* -----------------------------------------
           CATEGORY ICON
        ----------------------------------------- */

        const gallery =
            modal.querySelector(
                '.fa-pg-modal__gallery'
            );

        if (gallery) {

            const icon =
                categoryIconMap[
                    card.dataset.category
                ] || 'icon-swatch';


            gallery.innerHTML = `
                <svg
                    class="fa-gi-icon"
                    style="
                        width:35%;
                        max-width:140px;
                        color:rgba(255,255,255,.4);
                    "
                    aria-hidden="true"
                >
                    <use href="#${icon}"></use>
                </svg>
            `;


            gallery.style.display = 'flex';

            gallery.style.alignItems =
                'center';

            gallery.style.justifyContent =
                'center';

        }


        /* -----------------------------------------
           OPEN
        ----------------------------------------- */

        modal.classList.add('is-open');

        modal.setAttribute(
            'aria-hidden',
            'false'
        );

        document.body.style.overflow =
            'hidden';

    };


    const closeModal = () => {

        if (!modal) {
            return;
        }

        modal.classList.remove('is-open');

        modal.setAttribute(
            'aria-hidden',
            'true'
        );

        document.body.style.overflow =
            '';

    };


    /* -----------------------------------------
       VIEW BUTTONS
    ----------------------------------------- */

    document
        .querySelectorAll('.fa-gi-view-btn')
        .forEach((button) => {

            button.addEventListener(
                'click',
                (event) => {

                    event.preventDefault();

                    const card =
                        button.closest('[data-name]');

                    if (card) {
                        openModal(card);
                    }

                }
            );

        });


    /* -----------------------------------------
       MODAL CLOSE
    ----------------------------------------- */

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


    /* -----------------------------------------
       ESCAPE KEY
    ----------------------------------------- */

    document.addEventListener(
        'keydown',
        (event) => {

            if (
                event.key === 'Escape' &&
                modal &&
                modal.classList.contains('is-open')
            ) {

                closeModal();

            }

        }
    );


    /* =====================================================
       COMPARE GEAR
    ===================================================== */

    const compareData =
        readJSON('compareData');

    const compareA =
        document.getElementById('compareA');

    const compareB =
        document.getElementById('compareB');

    const compareMeters =
        document.getElementById('compareMeters');


    const metricKeys = [
        'weight',
        'durability',
        'flexibility',
        'breathability',
        'grip',
        'performance_level'
    ];


    const renderCompare = () => {

        if (
            !compareA ||
            !compareB ||
            !compareMeters
        ) {
            return;
        }


        const productA =
            compareData[compareA.value];

        const productB =
            compareData[compareB.value];


        if (!productA || !productB) {

            compareMeters.innerHTML = '';

            return;

        }


        /* -----------------------------------------
           PRODUCT NAMES
        ----------------------------------------- */

        const namesHtml = `
            <div class="fa-gi-compare__names">
                <span>${productA.name || ''}</span>
                <span>${productB.name || ''}</span>
            </div>
        `;


        /* -----------------------------------------
           METRIC ROWS
        ----------------------------------------- */

        const rowsHtml =
            metricKeys
                .map((key) => {

                    const valueA =
                        Number(
                            productA.metrics?.[key] || 0
                        );

                    const valueB =
                        Number(
                            productB.metrics?.[key] || 0
                        );


                    const safeA =
                        Math.max(
                            0,
                            Math.min(
                                100,
                                valueA
                            )
                        );

                    const safeB =
                        Math.max(
                            0,
                            Math.min(
                                100,
                                valueB
                            )
                        );


                    const label =
                        key
                            .replaceAll(
                                '_',
                                ' '
                            )
                            .toUpperCase();


                    return `
                        <div class="fa-gi-compare__row">

                            <span
                                class="fa-gi-compare__label"
                            >
                                ${label}
                            </span>

                            <span
                                class="fa-gi-compare__bar fa-gi-compare__bar--a"
                            >
                                <span
                                    style="width:${safeA}%"
                                ></span>
                            </span>

                            <span
                                class="fa-gi-compare__value"
                            >
                                ${safeA}
                            </span>

                            <span
                                class="fa-gi-compare__bar fa-gi-compare__bar--b"
                            >
                                <span
                                    style="width:${safeB}%"
                                ></span>
                            </span>

                            <span
                                class="fa-gi-compare__value"
                            >
                                ${safeB}
                            </span>

                        </div>
                    `;

                })
                .join('');


        /* -----------------------------------------
           REMOVE OLD NAMES
        ----------------------------------------- */

        compareMeters
            .parentElement
            ?.querySelector(
                '.fa-gi-compare__names'
            )
            ?.remove();


        /* -----------------------------------------
           INSERT NEW NAMES
        ----------------------------------------- */

        compareMeters.insertAdjacentHTML(
            'beforebegin',
            namesHtml
        );


        /* -----------------------------------------
           INSERT METRICS
        ----------------------------------------- */

        compareMeters.innerHTML =
            rowsHtml;

    };


    if (compareA && compareB) {

        compareA.addEventListener(
            'change',
            renderCompare
        );

        compareB.addEventListener(
            'change',
            renderCompare
        );

        renderCompare();

    }


    /* =====================================================
       PRODUCT FILM / LOOKBOOK PLAY BUTTON
    ===================================================== */

    document
        .querySelectorAll(
            '.fa-pg-lookbook__play'
        )
        .forEach((button) => {

            button.addEventListener(
                'click',
                () => {

                    const isPaused =
                        button.textContent.includes('▶');

                    button.textContent =
                        isPaused
                            ? button.textContent.replace(
                                '▶',
                                '❚❚'
                            )
                            : button.textContent.replace(
                                '❚❚',
                                '▶'
                            );

                }
            );

        });


    /* =====================================================
       THE FIVE — PRODUCT INDEX
    ===================================================== */

    const productIndex =
        document.querySelector(
            '#product-index'
        );


    if (!productIndex) {
        return;
    }


    const products =
        productIndex.querySelectorAll(
            '.fa-gi-product-index__product'
        );


    const header =
        productIndex.querySelector(
            '.fa-gi-product-index__header'
        );


    const statement =
        productIndex.querySelector(
            '.fa-gi-product-index__statement'
        );


    const bottom =
        productIndex.querySelector(
            '.fa-gi-product-index__bottom'
        );


    /* =====================================================
       REDUCED MOTION
    ===================================================== */

    const prefersReducedMotion =
        window.matchMedia(
            '(prefers-reduced-motion: reduce)'
        ).matches;


    if (prefersReducedMotion) {

        productIndex.classList.add(
            'is-visible'
        );


        products.forEach((product) => {

            product.classList.add(
                'is-visible'
            );

        });


        if (header) {

            header.classList.add(
                'is-visible'
            );

        }


        if (statement) {

            statement.classList.add(
                'is-visible'
            );

        }


        if (bottom) {

            bottom.classList.add(
                'is-visible'
            );

        }

    } else {

        /* =================================================
           INTERSECTION OBSERVER
        ================================================= */

        if ('IntersectionObserver' in window) {

            const observer =
                new IntersectionObserver(
                    (entries, obs) => {

                        entries.forEach(
                            (entry) => {

                                if (
                                    !entry.isIntersecting
                                ) {
                                    return;
                                }


                                const section =
                                    entry.target;


                                section.classList.add(
                                    'is-visible'
                                );


                                /* -------------------------
                                   HEADER
                                ------------------------- */

                                if (header) {

                                    setTimeout(
                                        () => {

                                            header.classList.add(
                                                'is-visible'
                                            );

                                        },
                                        100
                                    );

                                }


                                /* -------------------------
                                   PRODUCTS
                                ------------------------- */

                                products.forEach(
                                    (
                                        product,
                                        index
                                    ) => {

                                        setTimeout(
                                            () => {

                                                product.classList.add(
                                                    'is-visible'
                                                );

                                            },
                                            180 +
                                            (
                                                index * 130
                                            )
                                        );

                                    }
                                );


                                /* -------------------------
                                   STATEMENT
                                ------------------------- */

                                if (statement) {

                                    setTimeout(
                                        () => {

                                            statement.classList.add(
                                                'is-visible'
                                            );

                                        },
                                        720
                                    );

                                }


                                /* -------------------------
                                   BOTTOM BAR
                                ------------------------- */

                                if (bottom) {

                                    setTimeout(
                                        () => {

                                            bottom.classList.add(
                                                'is-visible'
                                            );

                                        },
                                        900
                                    );

                                }


                                obs.unobserve(
                                    section
                                );

                            }
                        );

                    },
                    {
                        threshold: 0.12,
                        rootMargin:
                            '0px 0px -80px 0px'
                    }
                );


            observer.observe(
                productIndex
            );

        } else {

            /*
             * Fallback for older browsers
             */

            productIndex.classList.add(
                'is-visible'
            );

            products.forEach(
                (product) => {

                    product.classList.add(
                        'is-visible'
                    );

                }
            );

            if (header) {

                header.classList.add(
                    'is-visible'
                );

            }

            if (statement) {

                statement.classList.add(
                    'is-visible'
                );

            }

            if (bottom) {

                bottom.classList.add(
                    'is-visible'
                );

            }

        }

    }


    /* =====================================================
       PRODUCT HOVER — TEMPLATE DETAIL
    ===================================================== */

    products.forEach((product) => {

        const template =
            product.querySelector(
                '.fa-product-template'
            );


        if (!template) {
            return;
        }


        product.addEventListener(
            'mouseenter',
            () => {

                product.classList.add(
                    'template-active'
                );

            }
        );


        product.addEventListener(
            'mouseleave',
            () => {

                product.classList.remove(
                    'template-active'
                );

            }
        );

    });


    /* =====================================================
       SUBTLE POINTER MOVEMENT
       Desktop / Fine Pointer Only
    ===================================================== */

    if (
        window.matchMedia(
            '(pointer: fine)'
        ).matches
    ) {

        products.forEach((product) => {

            const image =
                product.querySelector(
                    '.fa-gi-product-index__image'
                );


            if (!image) {
                return;
            }


            image.addEventListener(
                'mousemove',
                (event) => {

                    const rect =
                        image.getBoundingClientRect();


                    if (
                        !rect.width ||
                        !rect.height
                    ) {
                        return;
                    }


                    const x =
                        (
                            event.clientX -
                            rect.left
                        ) /
                        rect.width;


                    const y =
                        (
                            event.clientY -
                            rect.top
                        ) /
                        rect.height;


                    const moveX =
                        (x - 0.5) * 5;


                    const moveY =
                        (y - 0.5) * 5;


                    product.style.setProperty(
                        '--product-move-x',
                        `${moveX}px`
                    );


                    product.style.setProperty(
                        '--product-move-y',
                        `${moveY}px`
                    );

                }
            );


            image.addEventListener(
                'mouseleave',
                () => {

                    product.style.setProperty(
                        '--product-move-x',
                        '0px'
                    );


                    product.style.setProperty(
                        '--product-move-y',
                        '0px'
                    );

                }
            );

        });

    }


    /* =====================================================
       PRICE MICRO REVEAL
    ===================================================== */

    products.forEach((product) => {

        const price =
            product.querySelector(
                '.fa-gi-product-index__price'
            );


        if (!price) {
            return;
        }


        price.setAttribute(
            'data-price-ready',
            'true'
        );

    });

});