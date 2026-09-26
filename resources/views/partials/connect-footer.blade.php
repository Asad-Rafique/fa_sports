
<footer class="fa-footer fa-footer--pg">
    <p class="fa-footer__lead">THE GAME STARTS<br>BEFORE THE GAME.</p>

    <div class="fa-footer__grid">

        {{-- EXPLORE --}}
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


        {{-- SUPPORT --}}
        <div class="fa-footer__col">
            <h3 class="fa-footer__title">SUPPORT</h3>

            <a href="{{ route('connect') }}">Contact</a>

            <a href="https://www.linkedin.com/in/faizan-ali-fa-sports-05bbb3370?utm_source=share_via&utm_content=profile&utm_medium=member_android" target="_blank" rel="noopener noreferrer">
                LinkedIn
            </a>

            <a href="{{ route('partnership') }}">
                Partner With Us
            </a>

            <a href="{{ route('quote') }}">
                Request a Quote
            </a>
        </div>

    </div>


    {{-- LARGE WORDMARK --}}
    <div class="fa-footer__wordmark">
        FA SPORTS
    </div>


    {{-- LEGAL --}}
    <div class="fa-footer__legal">
        <span>
            &copy; {{ date('Y') }} FA SPORTS. All rights reserved.
        </span>

        <span>
            PERFORM. FUEL. PERSIST.
        </span>
    </div>

</footer>

