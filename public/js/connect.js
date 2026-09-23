
// =========================================================
// FA SPORTS — CONNECT
// PREMIUM CONTACT FORM
// =========================================================

document.addEventListener('DOMContentLoaded', () => {

    // =====================================================
    // CONTACT FORM
    // =====================================================

    const form = document.getElementById('enquiryForm');
    const submitButton = document.getElementById('submitButton');

    if (form) {

        form.addEventListener('submit', (event) => {

            if (!form.checkValidity()) {

                event.preventDefault();

                form.reportValidity();

                return;
            }

            if (submitButton) {

                submitButton.classList.add('is-loading');

                submitButton.disabled = true;
            }

        });


        // =================================================
        // INPUT FOCUS ANIMATION
        // =================================================

        const fields = form.querySelectorAll(
            'input:not([type="hidden"]):not([type="text"][name="website"]), textarea, select'
        );

        fields.forEach((field) => {

            field.addEventListener('focus', () => {

                field.closest('.fa-connect-field')
                    ?.classList.add('is-focused');

            });

            field.addEventListener('blur', () => {

                field.closest('.fa-connect-field')
                    ?.classList.remove('is-focused');

            });

        });


        // =================================================
        // SELECT CHANGE
        // =================================================

        const enquiryType = document.getElementById('enquiry_type');
        const projectType = document.getElementById('project_type');

        if (enquiryType && projectType) {

            enquiryType.addEventListener('change', () => {

                projectType.classList.add('fa-connect-select-changed');

                setTimeout(() => {
                    projectType.classList.remove(
                        'fa-connect-select-changed'
                    );
                }, 450);

            });

        }

    }


    // =====================================================
    // FAQ ACCORDION
    // =====================================================

    const faqItems = document.querySelectorAll(
        '.fa-connect-faq__item'
    );

    faqItems.forEach((item) => {

        const question = item.querySelector(
            '.fa-connect-faq__question'
        );

        const answer = item.querySelector(
            '.fa-connect-faq__answer'
        );

        if (!question || !answer) return;

        question.addEventListener('click', () => {

            const isOpen = item.classList.contains('is-open');

            // Close all
            faqItems.forEach((otherItem) => {

                otherItem.classList.remove('is-open');

                const otherAnswer =
                    otherItem.querySelector(
                        '.fa-connect-faq__answer'
                    );

                if (otherAnswer) {
                    otherAnswer.style.maxHeight = null;
                }

            });


            // Open selected
            if (!isOpen) {

                item.classList.add('is-open');

                answer.style.maxHeight =
                    answer.scrollHeight + 'px';

            }

        });

    });


    // =====================================================
    // SMOOTH ANCHOR SCROLL
    // =====================================================

    document.querySelectorAll(
        'a[href^="#"]'
    ).forEach((link) => {

        link.addEventListener('click', (event) => {

            const targetId =
                link.getAttribute('href');

            if (!targetId || targetId === '#') return;

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


    // =====================================================
    // SCROLL REVEAL
    // =====================================================

    const revealElements = document.querySelectorAll(
        '.fa-connect-form__intro, ' +
        '.fa-connect-form__wrapper, ' +
        '.fa-connect-faq__intro, ' +
        '.fa-connect-faq__list, ' +
        '.fa-connect-final__inner'
    );

    if ('IntersectionObserver' in window) {

        const observer =
            new IntersectionObserver(
                (entries, obs) => {

                    entries.forEach((entry) => {

                        if (!entry.isIntersecting) return;

                        entry.target.style.opacity = '1';
                        entry.target.style.transform =
                            'translateY(0)';

                        obs.unobserve(entry.target);

                    });

                },
                {
                    threshold: 0.12
                }
            );

        revealElements.forEach((element) => {

            element.style.opacity = '0';

            element.style.transform =
                'translateY(25px)';

            element.style.transition =
                'opacity .8s ease, transform .8s cubic-bezier(.2,.8,.2,1)';

            observer.observe(element);

        });

    }


    // =====================================================
    // TEXTAREA AUTO FEEDBACK
    // =====================================================

    const message = document.getElementById('message');

    if (message) {

        message.addEventListener('input', () => {

            const line =
                message
                    .closest('.fa-connect-field')
                    ?.querySelector(
                        '.fa-connect-message-line span'
                    );

            if (!line) return;

            const length = message.value.length;

            const width = Math.min(
                Math.max(length / 2, 15),
                100
            );

            line.style.width = `${width}px`;

        });

    }

});
