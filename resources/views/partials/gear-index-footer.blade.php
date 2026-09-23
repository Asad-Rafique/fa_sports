<section class="fa-final-cta" id="final-cta">
    <h2 class="fa-final-cta__headline fa-final-cta__headline--sm">
        GEAR<br>
        BUILT<br>
        <span class="fa-red">TO PERFORM.</span>
    </h2>
    <p class="fa-gi-final__sub">EXPLORE THE COMPLETE FA SPORTS SYSTEM.</p>
    <a href="{{ route('performance-gear') }}" class="fa-btn fa-btn--outline fa-final-cta__btn">EXPLORE PERFORMANCE</a>
</section>

<footer class="fa-footer">
    <div class="fa-footer__grid">
        <div class="fa-footer__col">
            <h3 class="fa-footer__title">EXPLORE</h3>
            <a href="{{ route('home') }}#arena">The Arena</a>
            <a href="{{ route('performance-gear') }}">Performance Gear</a>
            <a href="{{ route('gear-index') }}">The Gear Index</a>
            <a href="{{ route('team-lab') }}">Team Lab</a>
            <a href="{{ route('home') }}#playbook">The Playbook</a>
            <a href="{{ route('home') }}#craft">The Craft</a>
        </div>
        <div class="fa-footer__col">
            <h3 class="fa-footer__title">BUILD</h3>
            <a href="{{ route('partnership') }}#kit-studio">Alliance</a>
            <a href="{{ route('team-lab') }}">Build Your Team</a>
        </div>
    </div>

    <div class="fa-footer__wordmark">FA SPORTS</div>

    <div class="fa-footer__legal">
        <span>&copy; {{ date('Y') }} FA SPORTS. All rights reserved.</span>
        <span>PERFORM. FUEL. PERSIST.</span>
    </div>
</footer>
