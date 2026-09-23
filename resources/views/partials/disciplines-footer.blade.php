<section class="fa-final-cta fa-final-cta--triple" id="final-cta">
    <h2 class="fa-final-cta__headline fa-final-cta__headline--sm">
        FIND YOUR GAME.<br>
        <span class="fa-red">OWN YOUR PERFORMANCE.</span>
    </h2>
    <div class="fa-final-cta__row">
        <a href="{{ route('gear-index') }}#collection" class="fa-btn fa-btn--red">EXPLORE GEAR</a>
        <a href="{{ route('connect') }}#faq" class="fa-btn fa-btn--outline">FAQ</a>
        <a href="{{ route('performance-gear') }}#kit-studio" class="fa-btn fa-btn--outline">ENTER THE PERFORMANCE</a>
    </div>
</section>

<footer class="fa-footer fa-footer--pg">
    <p class="fa-footer__lead">THE GAME IS DIFFERENT.<br>THE STANDARD ISN'T.</p>

    <div class="fa-footer__grid">
        <div class="fa-footer__col">
            <h3 class="fa-footer__title">EXPLORE</h3>
            <a href="{{ route('home') }}#arena">The Arena</a>
            <a href="{{ route('performance-gear') }}">Performance Gear</a>
            <a href="{{ route('disciplines') }}">Disciplines</a>
            <a href="{{ route('playbook') }}#playbook">The Playbook</a>
            <a href="{{ route('craft') }}#craft">The Craft</a>
        </div>
        <div class="fa-footer__col">
            <h3 class="fa-footer__title">BUILD</h3>
            <a href="{{ route('team-lab') }}#team-lab">Team Lab</a>
            <a href="{{ route('performance-gear') }}#kit-studio">Kit Studio</a>
            <a href="{{ route('gear-index') }}">Custom Gear</a>
        </div>
        <div class="fa-footer__col">
            <h3 class="fa-footer__title">CONNECT</h3>
            <a href="{{ route('connect') }}">Contact</a>
            <a href="{{ route('quote') }}">Request A Quote</a>
        </div>
    </div>

    <div class="fa-footer__wordmark">FA SPORTS</div>

    <div class="fa-footer__legal">
        <span>&copy; {{ date('Y') }} FA SPORTS. All rights reserved.</span>
        <span>PERFORM. FUEL. PERSIST.</span>
    </div>
</footer>
