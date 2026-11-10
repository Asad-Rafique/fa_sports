
document.addEventListener('DOMContentLoaded', function () {

    const menuToggle = document.getElementById('menuToggle');
    const fullMenu = document.getElementById('fullMenu');

    if (!menuToggle || !fullMenu) {
        console.error('FA Navigation elements not found!');
        return;
    }

    function openMenu() {

        fullMenu.classList.add('is-open');
        menuToggle.classList.add('is-active');

        menuToggle.setAttribute('aria-expanded', 'true');
        menuToggle.setAttribute('aria-label', 'Close menu');

        fullMenu.setAttribute('aria-hidden', 'false');
        fullMenu.removeAttribute('inert');

        document.body.classList.add('fa-menu-open');
    }

    function closeMenu() {

        fullMenu.classList.remove('is-open');
        menuToggle.classList.remove('is-active');

        menuToggle.setAttribute('aria-expanded', 'false');
        menuToggle.setAttribute('aria-label', 'Open menu');

        fullMenu.setAttribute('aria-hidden', 'true');
        fullMenu.setAttribute('inert', '');

        document.body.classList.remove('fa-menu-open');
    }

    menuToggle.addEventListener('click', function () {

        const isOpen = fullMenu.classList.contains('is-open');

        if (isOpen) {
            closeMenu();
        } else {
            openMenu();
        }

    });

    fullMenu.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', closeMenu);
    });

    document.addEventListener('keydown', function (event) {

        if (event.key === 'Escape') {
            closeMenu();
        }

    });

});
