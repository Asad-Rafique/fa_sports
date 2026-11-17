
<section class="fa-final-cta fa-final-cta--triple" id="final-cta">
    <h2 class="fa-final-cta__headline">
        READY<br>TO<br><span class="fa-red">PERFORM?</span>
    </h2>

    <div class="fa-final-cta__row">
        <a href="#collection" class="fa-btn fa-btn--red">EXPLORE THE GEAR</a>
        <a href="{{ route('connect') }}#faq" class="fa-btn fa-btn--outline">FAQ</a>
        <a href="{{ route('quote') }}" class="fa-btn fa-btn--outline">REQUEST TEAM QUOTE</a>
    </div>
</section>


<footer class="fa-footer fa-footer--pg">

    <div class="fa-footer__grid">

        {{-- EXPLORE --}}
        <div class="fa-footer__col">
            <h3 class="fa-footer__title">EXPLORE</h3>

            <a href="{{ route('home') }}#arena">The Arena</a>
            <a href="{{ route('performance-gear') }}">Performance Gear</a>
            <a href="{{ route('disciplines') }}#disciplines">Disciplines</a>
            <a href="{{ route('playbook') }}#playbook">The Playbook</a>
            <a href="{{ route('craft') }}#craft">The Craft</a>
        </div>


        {{-- BUILD --}}
        <div class="fa-footer__col">
            <h3 class="fa-footer__title">BUILD</h3>

            <a href="{{ route('home') }}#team-lab">Team Lab</a>
            <a href="{{ route('legacy') }}#legacy">The Legacy</a>
            <a href="{{ route('gear-index') }}">Custom Gear</a>
        </div>


        {{-- CONNECT --}}
        <div class="fa-footer__col">
            <h3 class="fa-footer__title">CONNECT</h3>

            <a href="{{ route('connect') }}">Contact</a>
            <a href="{{ route('quote') }}">Request A Quote</a>

            <a href="tel:+923314033843">
                +92 331 4033843
            </a>

            <span class="fa-footer__contact-label">EMAIL US</span>

<a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=faizanexporter335@gmail.com"
   target="_blank"
   rel="noopener noreferrer"
   class="fa-footer__contact-value fa-footer__email">
    faizanexporter335@gmail.com ↗
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

            <a href="https://www.linkedin.com/in/faizan-ali-fa-sports-05bbb3370?utm_source=share_via&utm_content=profile&utm_medium=member_android"
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
