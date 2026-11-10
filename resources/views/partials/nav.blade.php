<header class="fa-header" id="faHeader">

    {{-- HEADER BAR --}}
    <div class="fa-header__bar">

        {{-- BRAND LOGO --}}
        <a href="{{ route('home') }}"
           class="fa-brand"
           aria-label="FA SPORTS Home">

            <span class="fa-brand__mark">
                <span class="fa-brand__f">F</span>
                <span class="fa-brand__a">A</span>
            </span>

            <span class="fa-brand__name">SPORTS</span>

        </a>


        {{-- DESKTOP NAVIGATION --}}
        <nav class="fa-navigation" aria-label="Main navigation">

            <a href="{{ route('home') }}" class="fa-navigation__link">THE ARENA</a>

            <a href="{{ route('performance-gear') }}" class="fa-navigation__link">PERFORMANCE GEAR</a>

            <a href="{{ route('about') }}" class="fa-navigation__link">ABOUT US</a>

            <a href="{{ route('customize') }}" class="fa-navigation__link">CUSTOMIZE</a>

            <a href="{{ route('disciplines') }}" class="fa-navigation__link">DISCIPLINES</a>

            <a href="{{ route('team-lab') }}" class="fa-navigation__link">TEAM LAB</a>

            <a href="{{ route('gear-index') }}" class="fa-navigation__link">GEAR INDEX</a>

            <a href="{{ route('legacy') }}" class="fa-navigation__link">THE LEGACY</a>

            <a href="{{ route('playbook') }}" class="fa-navigation__link">THE PLAYBOOK</a>

            <a href="{{ route('craft') }}" class="fa-navigation__link">THE CRAFT</a>

        </nav>


        {{-- HEADER ACTIONS --}}
        <div class="fa-header__actions">

            <a href="{{ route('connect') }}" class="fa-header__contact">
                CONTACT US
                <span>↗</span>
            </a>


            {{-- PREMIUM HAMBURGER BUTTON --}}
            <button
                type="button"
                class="fa-menu-button"
                id="menuToggle"
                aria-label="Open navigation menu"
                aria-expanded="false"
                aria-controls="fullMenu">

                <span class="fa-menu-button__icon">
                    <span class="fa-menu-button__line fa-menu-button__line--one"></span>
                    <span class="fa-menu-button__line fa-menu-button__line--two"></span>
                    <span class="fa-menu-button__line fa-menu-button__line--three"></span>
                </span>

                <span class="fa-menu-button__text">MENU</span>

            </button>

        </div>

    </div>


    {{-- FULLSCREEN MOBILE MENU --}}
    <div
        class="fa-fullmenu"
        id="fullMenu"
        aria-hidden="true"
        inert>

        <div class="fa-fullmenu__inner">


            {{-- MENU TOP --}}
            <div class="fa-fullmenu__header">

                <div class="fa-fullmenu__brand">
                    <span class="fa-fullmenu__brand-mark">FA</span>
                    <span>SPORTS</span>
                </div>

                <span class="fa-fullmenu__header-label">
                    PERFORMANCE / TEAMWEAR / CRAFT
                </span>

            </div>


            {{-- MENU MAIN CONTENT --}}
            <div class="fa-fullmenu__content">


                {{-- NAVIGATION --}}
                <nav class="fa-fullmenu__navigation"
                     aria-label="Full screen navigation">

                    <span class="fa-fullmenu__eyebrow">
                        EXPLORE FA SPORTS
                    </span>

                    <ul class="fa-fullmenu__list">

                        <li>
                            <a href="{{ route('home') }}">
                                <span class="fa-fullmenu__number">01</span>
                                <span class="fa-fullmenu__link">THE ARENA</span>
                                <span class="fa-fullmenu__arrow">↗</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('performance-gear') }}">
                                <span class="fa-fullmenu__number">02</span>
                                <span class="fa-fullmenu__link">PERFORMANCE GEAR</span>
                                <span class="fa-fullmenu__arrow">↗</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('about') }}">
                                <span class="fa-fullmenu__number">03</span>
                                <span class="fa-fullmenu__link">ABOUT US</span>
                                <span class="fa-fullmenu__arrow">↗</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('customize') }}">
                                <span class="fa-fullmenu__number">04</span>
                                <span class="fa-fullmenu__link">CUSTOMIZE</span>
                                <span class="fa-fullmenu__arrow">↗</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('disciplines') }}">
                                <span class="fa-fullmenu__number">05</span>
                                <span class="fa-fullmenu__link">DISCIPLINES</span>
                                <span class="fa-fullmenu__arrow">↗</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('team-lab') }}">
                                <span class="fa-fullmenu__number">06</span>
                                <span class="fa-fullmenu__link">TEAM LAB</span>
                                <span class="fa-fullmenu__arrow">↗</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('gear-index') }}">
                                <span class="fa-fullmenu__number">07</span>
                                <span class="fa-fullmenu__link">GEAR INDEX</span>
                                <span class="fa-fullmenu__arrow">↗</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('legacy') }}">
                                <span class="fa-fullmenu__number">08</span>
                                <span class="fa-fullmenu__link">THE LEGACY</span>
                                <span class="fa-fullmenu__arrow">↗</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('playbook') }}">
                                <span class="fa-fullmenu__number">09</span>
                                <span class="fa-fullmenu__link">THE PLAYBOOK</span>
                                <span class="fa-fullmenu__arrow">↗</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('craft') }}">
                                <span class="fa-fullmenu__number">10</span>
                                <span class="fa-fullmenu__link">THE CRAFT</span>
                                <span class="fa-fullmenu__arrow">↗</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('connect') }}">
                                <span class="fa-fullmenu__number">11</span>
                                <span class="fa-fullmenu__link">CONTACT US</span>
                                <span class="fa-fullmenu__arrow">↗</span>
                            </a>
                        </li>

                    </ul>

                </nav>


                {{-- MENU VISUAL --}}
                <div class="fa-fullmenu__visual">

                    <video
                        muted
                        loop
                        autoplay
                        playsinline
                        preload="metadata"
                        poster="{{ asset('images/menu/menu-poster.jpg') }}">

                        <source
                            src="{{ asset('videos/menu/menu-loop.mp4') }}"
                            type="video/mp4">

                    </video>

                    <div class="fa-fullmenu__visual-overlay">

                        <span class="fa-fullmenu__visual-label">
                            FA SPORTS / 2004 — PRESENT
                        </span>

                        <h2>
                            BUILT FOR<br>
                            <span>EVERY MOMENT.</span>
                        </h2>

                        <span class="fa-fullmenu__visual-bottom">
                            THE GAME STARTS BEFORE THE GAME.
                        </span>

                    </div>

                </div>

            </div>


            {{-- MENU FOOTER --}}
            <div class="fa-fullmenu__footer">

                <span>FA SPORTS / PERFORMANCE SYSTEM</span>

                <strong>PERFORM. FUEL. PERSIST.</strong>

                <span>EST. 2004</span>

            </div>

        </div>

    </div>
    <link rel="stylesheet" href="{{ asset('css/fa-navigation.css') }}?v={{ time() }}">

</header>