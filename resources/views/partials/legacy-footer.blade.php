<section class="fa-final-cta fa-final-cta--triple" id="final-cta">
    <h2 class="fa-final-cta__headline fa-final-cta__headline--sm">
        THE LEGACY<br>
        <span class="fa-red">CONTINUES.</span>
    </h2>
    <p class="fa-gi-final__sub">EXPLORE THE PRODUCTS, PEOPLE, CRAFT AND IDEAS SHAPING THE NEXT CHAPTER OF FA SPORTS.</p>
    <div class="fa-final-cta__row">
        <a href="{{ route('gear-index') }}" class="fa-btn fa-btn--red">EXPLORE THE GEAR</a>
        <a href="{{ route('craft') }}#craft" class="fa-btn fa-btn--outline">ENTER THE CRAFT</a>
        <a href="{{ route('partnership') }}#partnership" class="fa-btn fa-btn--outline">Collaborate</a>
    </div>
</section>

<footer class="fa-footer fa-footer--pg">
    <p class="fa-footer__lead">PERFORM.<br>FUEL.<br>PERSIST.</p>

    <div class="fa-footer__grid">
        <div class="fa-footer__col">
            <h3 class="fa-footer__title">EXPLORE</h3>
            <a href="{{ route('home') }}#arena">The Arena</a>
            <a href="{{ route('performance-gear') }}">Performance Gear</a>
            <a href="{{ route('gear-index') }}">The Gear Index</a>
            <a href="{{ route('disciplines') }}">Disciplines</a>
            <a href="{{ route('team-lab') }}">Team Lab</a>
        </div>
        <div class="fa-footer__col">
            <h3 class="fa-footer__title">BUILD</h3>
            <a href="{{ route('craft') }}#legacy">The Heritage</a>
            <a href="{{ route('home') }}#playbook">The Playbook</a>
            <a href="{{ route('home') }}#craft">The Craft</a>
        </div>
    </div>

    <div class="fa-footer__wordmark">FA SPORTS</div>

    <div class="fa-footer__legal">
        <span>&copy; {{ date('Y') }} FA SPORTS. All rights reserved.</span>
        <span>PERFORM. FUEL. PERSIST.</span>
    </div>
</footer>
