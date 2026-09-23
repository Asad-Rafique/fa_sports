<section class="fa-final-cta fa-final-cta--triple" id="final-cta">
    <h2 class="fa-final-cta__headline fa-final-cta__headline--sm">
        START<br>THE<br><span class="fa-red">CONVERSATION.</span>
    </h2>
    <p class="fa-gi-final__sub">YOUR NEXT PROJECT STARTS WITH A MESSAGE.</p>
    <div class="fa-final-cta__row">
        <a href="#enquiry" class="fa-btn fa-btn--red">SEND AN ENQUIRY</a>
        <a href="{{ route('performance-gear') }}" class="fa-btn fa-btn--outline">EXPLORE FA SPORTS</a>
    </div>
</section>

<footer class="fa-footer fa-footer--pg">
    <p class="fa-footer__lead">THE GAME STARTS<br>BEFORE THE GAME.</p>

    <div class="fa-footer__grid">
        <div class="fa-footer__col">
            <h3 class="fa-footer__title">EXPLORE</h3>
            <a href="{{ route('home') }}#arena">The Arena</a>
            <a href="{{ route('performance-gear') }}">Performance Gear</a>
            <a href="{{ route('gear-index') }}">The Gear Index</a>
            <a href="{{ route('disciplines') }}">Disciplines</a>
            <a href="{{ route('team-lab') }}">Team Lab</a>
            <a href="{{ route('home') }}#playbook">The Playbook</a>
            <a href="{{ route('home') }}#craft">The Craft</a>
            <a href="{{ route('legacy') }}">The FA Legacy</a>
        </div>
        <div class="fa-footer__col">
            <h3 class="fa-footer__title">CONNECT</h3>
            <a href="{{ route('connect') }}">Connect With FA</a>
            <a href="{{ config('contact.social.instagram') ?? '#' }}">Instagram</a>
            <a href="{{ config('contact.social.facebook') ?? '#' }}">Facebook</a>
            <a href="{{ config('contact.social.linkedin') ?? '#' }}">LinkedIn</a>
            <a href="{{ config('contact.social.youtube') ?? '#' }}">YouTube</a>
        </div>
    </div>

    <div class="fa-footer__wordmark">FA SPORTS</div>

    <div class="fa-footer__legal">
        <span>&copy; {{ date('Y') }} FA SPORTS. All rights reserved.</span>
        <span>PERFORM. FUEL. PERSIST.</span>
    </div>
</footer>
