
<section class="fa-final-cta fa-final-cta--triple" id="final-cta">
    <h2 class="fa-final-cta__headline fa-final-cta__headline--sm">
        THE LEGACY<br>
        <span class="fa-red">CONTINUES.</span>
    </h2>

    <p class="fa-gi-final__sub">
        EXPLORE THE PRODUCTS, PEOPLE, CRAFT AND IDEAS SHAPING THE NEXT CHAPTER OF FA SPORTS.
    </p>

    <div class="fa-final-cta__row">
        <a href="{{ route('gear-index') }}" class="fa-btn fa-btn--red">EXPLORE THE GEAR</a>
        <a href="{{ route('craft') }}#craft" class="fa-btn fa-btn--outline">ENTER THE CRAFT</a>
        <a href="{{ route('partnership') }}#partnership" class="fa-btn fa-btn--outline">Collaborate</a>
    </div>
</section>


<footer class="fa-footer fa-footer--pg">

    <p class="fa-footer__lead">
        PERFORM.<br>
        FUEL.<br>
        PERSIST.
    </p>

    <div class="fa-footer__grid">

        {{-- EXPLORE --}}
        <div class="fa-footer__col">
            <h3 class="fa-footer__title">EXPLORE</h3>

            <a href="{{ route('home') }}#arena">The Arena</a>
            <a href="{{ route('performance-gear') }}">Performance Gear</a>
            <a href="{{ route('gear-index') }}">The Gear Index</a>
            <a href="{{ route('disciplines') }}">Disciplines</a>
            <a href="{{ route('team-lab') }}">Team Lab</a>
        </div>


        {{-- BUILD --}}
        <div class="fa-footer__col">
            <h3 class="fa-footer__title">BUILD</h3>

            <a href="{{ route('craft') }}#legacy">The Heritage</a>
            <a href="{{ route('home') }}#playbook">The Playbook</a>
            <a href="{{ route('home') }}#craft">The Craft</a>
        </div>


        {{-- CONNECT --}}
        <div class="fa-footer__col">
            <h3 class="fa-footer__title">CONNECT</h3>

            <a href="{{ route('connect') }}">Contact</a>
            <a href="{{ route('partnership') }}">Partner With Us</a>
            <a href="{{ route('quote') }}">Request A Quote</a>

            <a href="tel:+923314033843">
                +92 331 4033843 ↗
            </a>

            <a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=faizanexporter335@email.com"
               target="_blank" rel="noopener noreferrer">
                faizanexporter335@email.com ↗
            </a>
        </div>


        {{-- FOLLOW US --}}
        <div class="fa-footer__col">
            <h3 class="fa-footer__title">FOLLOW US</h3>

            <a href="https://www.facebook.com/share/1F5nNiRKPe/"
               target="_blank" rel="noopener noreferrer">
                Facebook ↗
            </a>

            <a href="https://www.instagram.com/fa_sports.pk?srtk=MTdvaXdqMTliOWVpZA=="
               target="_blank" rel="noopener noreferrer">
                Instagram ↗
            </a>

            <a href="https://www.linkedin.com/in/faizan-ali-fa-sports-05bbb3370?utm_source=share_via&amp;utm_content=profile&amp;utm_medium=member_android"
               target="_blank" rel="noopener noreferrer">
                LinkedIn ↗
            </a>
        </div>

    </div>


    {{-- LARGE WORDMARK --}}
    <div class="fa-footer__wordmark">
        <span style="color:#E2141F;">F</span><span style="color:#F6F5F1;">A</span><span style="color:#E2141F;"> SPORTS</span>
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
