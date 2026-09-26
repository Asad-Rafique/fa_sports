<header class="fa-nav" id="faNav">
    <div class="fa-nav__row">
        <a href="{{ route('home') }}" class="fa-nav__logo" aria-label="FA SPORTS home">
    <span class="fa-nav__brand-mark">
    <span class="fa-nav__brand-f">F</span>
    <span class="fa-nav__brand-a">A</span>
</span>

<span class="fa-nav__brand-name">SPORTS</span>
</a>
        
        </a>

        <nav class="fa-nav__links" aria-label="Primary">
            <a href="{{ route('home') }}" class="fa-nav__link">THE ARENA</a>
            <a href="{{ route('performance-gear') }}" class="fa-nav__link">PERFORMANCE GEAR</a>
                        <a href="{{ route('about') }}" class="fa-nav__link">ABOUT US</a>
                         <a href="{{ route('customize') }}" class="fa-nav__link">CUSTOMIZE</a>
            <a href="{{ route('disciplines') }}" class="fa-nav__link">DISCIPLINES</a>
            <a href="{{ route('team-lab') }}" class="fa-nav__link">TEAM LAB</a>
            <a href="{{ route('gear-index') }}" class="fa-nav__link">GEAR INDEX</a>
            <a href="{{ route('legacy') }}" class="fa-nav__link">THE LEGACY</a>
            <a href="{{ route('playbook') }}" class="fa-nav__link">THE PLAYBOOK</a>
            <a href="{{ route('craft') }}" class="fa-nav__link">THE CRAFT</a>
            
        </nav>

        <div class="fa-nav__actions">
            <button class="fa-nav__icon" aria-label="Bag"><span class="fa-icon-bag"></span></button>
            <a href="{{ route('connect') }}" class="fa-btn fa-btn--red fa-nav__cta">CONTACT US</a>
            <button class="fa-nav__menu-toggle" id="menuToggle" aria-label="Open menu" aria-expanded="false">
                <span></span><span></span>
            </button>
        </div>
    </div>
    <!--

    <div class="fa-fullmenu" id="fullMenu" aria-hidden="true">
        <div class="fa-fullmenu__grid">
            <ul class="fa-fullmenu__list">
                <li><a href="#arena">THE ARENA</a></li>
                <li><a href="#gear">PERFORMANCE GEAR</a></li>
                <li><a href="#disciplines">DISCIPLINES</a></li>
                <li><a href="#team-lab">TEAM LAB</a></li>
                <li><a href="#playbook">THE PLAYBOOK</a></li>
                <li><a href="#craft">THE CRAFT</a></li>
            </ul>
            <div class="fa-fullmenu__media">
                <video muted loop autoplay playsinline poster="{{ asset('images/menu/menu-poster.jpg') }}">
                    <source src="{{ asset('videos/menu/menu-loop.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
    </div>-->
</header>
