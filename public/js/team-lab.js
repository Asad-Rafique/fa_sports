/* =========================================================
   FA SPORTS — TEAM LAB
   INTERACTIONS / SCROLL REVEALS / MOTION
========================================================= */

document.addEventListener('DOMContentLoaded', () => {

    const teamLab = document.querySelector('.fa-teamlab');

    if (!teamLab) return;


    /* =====================================================
       SCROLL REVEAL
    ===================================================== */

    const revealElements = [
        ...teamLab.querySelectorAll(
            '.tl-identity__intro, ' +
            '.tl-identity__statement, ' +
            '.tl-story__content, ' +
            '.tl-story__markers, ' +
            '.tl-process__heading, ' +
            '.tl-process__item, ' +
            '.tl-manifesto__content, ' +
            '.tl-final__content'
        )
    ];

    revealElements.forEach((element, index) => {

        element.classList.add('tl-reveal');

        element.style.transitionDelay =
            `${Math.min(index * 0.06, 0.35)}s`;

    });


    const revealObserver = new IntersectionObserver(
        (entries, observer) => {

            entries.forEach(entry => {

                if (!entry.isIntersecting) return;

                entry.target.classList.add('is-visible');

                observer.unobserve(entry.target);

            });

        },
        {
            threshold: 0.15,
            rootMargin: '0px 0px -60px 0px'
        }
    );


    revealElements.forEach(element => {
        revealObserver.observe(element);
    });


    /* =====================================================
       PROCESS LINE
    ===================================================== */

    const process = teamLab.querySelector('.tl-process');

    if (process) {

        const processObserver = new IntersectionObserver(
            entries => {

                entries.forEach(entry => {

                    if (entry.isIntersecting) {
                        process.classList.add('is-visible');
                    }

                });

            },
            {
                threshold: 0.25
            }
        );

        processObserver.observe(process);
    }


    /* =====================================================
       MOUSE PARALLAX — HERO IMAGE
    ===================================================== */

    const hero = teamLab.querySelector('.tl-hero');
    const imageFrame = teamLab.querySelector('.tl-image-frame');

    if (
        hero &&
        imageFrame &&
        window.matchMedia('(pointer: fine)').matches
    ) {

        hero.addEventListener('mousemove', event => {

            const rect = hero.getBoundingClientRect();

            const x =
                (event.clientX - rect.left) /
                rect.width - .5;

            const y =
                (event.clientY - rect.top) /
                rect.height - .5;

            const rotateX = y * -3;
            const rotateY = x * 4;

            imageFrame.style.transform =
    `translateY(0) perspective(900px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;

        });


        hero.addEventListener('mouseleave', () => {

            imageFrame.style.transform =
                'translateY(0) rotate(2deg)';

        });

    }


    /* =====================================================
       IDENTITY WORD HOVER
    ===================================================== */

    const words = teamLab.querySelectorAll('.tl-word');

    words.forEach(word => {

        word.addEventListener('mouseenter', () => {

            words.forEach(item => {
                item.classList.remove('is-focused');
            });

            word.classList.add('is-focused');

        });

        word.addEventListener('mouseleave', () => {

            word.classList.remove('is-focused');

        });

    });


    /* =====================================================
       PROCESS ITEMS
    ===================================================== */

    const processItems =
        teamLab.querySelectorAll('.tl-process__item');

    processItems.forEach((item, index) => {

        item.addEventListener('mouseenter', () => {

            processItems.forEach(other => {
                other.style.opacity = '.35';
            });

            item.style.opacity = '1';

        });

        item.addEventListener('mouseleave', () => {

            processItems.forEach(other => {
                other.style.opacity = '1';
            });

        });

    });


    /* =====================================================
       SUBTLE SCROLL PARALLAX
    ===================================================== */

    const storyText =
        teamLab.querySelector('.tl-story__background-text');

    const manifestoOrb =
        teamLab.querySelector('.tl-manifesto__orb');


    const parallax = () => {

        const scrollY = window.scrollY;

        if (storyText) {

            const story =
                storyText.closest('.tl-story');

            if (story) {

                const rect =
                    story.getBoundingClientRect();

                const offset =
                    (window.innerHeight / 2 - rect.top) * .08;

                storyText.style.transform =
                    `translate3d(${-3 + offset}%, ${offset}px, 0)`;

            }

        }


        if (manifestoOrb) {

            const manifesto =
                manifestoOrb.closest('.tl-manifesto');

            if (manifesto) {

                const rect =
                    manifesto.getBoundingClientRect();

                const offset =
                    (window.innerHeight / 2 - rect.top) * .04;

                manifestoOrb.style.marginTop =
                    `${offset}px`;

            }

        }

    };


    let ticking = false;

    window.addEventListener(
        'scroll',
        () => {

            if (!ticking) {

                window.requestAnimationFrame(() => {

                    parallax();

                    ticking = false;

                });

                ticking = true;

            }

        },
        {
            passive: true
        }
    );


    /* =====================================================
       SMOOTH ANCHOR
    ===================================================== */

    teamLab
        .querySelectorAll('a[href^="#"]')
        .forEach(link => {

            link.addEventListener('click', event => {

                const targetId =
                    link.getAttribute('href');

                const target =
                    document.querySelector(targetId);

                if (!target) return;

                event.preventDefault();

                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });

            });

        });


    /* =====================================================
       CURSOR MAGNETIC EFFECT
    ===================================================== */

    const buttons =
        teamLab.querySelectorAll('.tl-button');

    if (window.matchMedia('(pointer: fine)').matches) {

        buttons.forEach(button => {

            button.addEventListener('mousemove', event => {

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
                    `translate(${x * .08}px, ${y * .08}px)`;

            });


            button.addEventListener('mouseleave', () => {

                button.style.transform =
                    'translate(0,0)';

            });

        });

    }


    /* =====================================================
       INITIAL
    ===================================================== */

    parallax();

});
/* =========================================================
   THE MOMENT BEFORE — SCROLL REVEAL
========================================================= */

document.addEventListener('DOMContentLoaded', () => {

    const momentSection = document.querySelector('.tl-moment-before');

    if (!momentSection) return;

    const momentObserver = new IntersectionObserver(
        (entries, observer) => {

            entries.forEach(entry => {

                if (entry.isIntersecting) {

                    entry.target.classList.add('is-visible');

                    observer.unobserve(entry.target);
                }

            });

        },
        {
            threshold: 0.18
        }
    );

    momentObserver.observe(momentSection);

});
/* =========================================================
   FA SPORTS — BRAND STATEMENT REVEAL
========================================================= */

document.addEventListener('DOMContentLoaded', () => {

    const brandSection =
        document.querySelector('.tl-brand-statement');

    if (!brandSection) return;

    const brandObserver = new IntersectionObserver(
        (entries, observer) => {

            entries.forEach(entry => {

                if (entry.isIntersecting) {

                    entry.target.classList.add('is-visible');

                    observer.unobserve(entry.target);

                }

            });

        },
        {
            threshold: 0.15
        }
    );

    brandObserver.observe(brandSection);

});