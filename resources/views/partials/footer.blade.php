
{{-- =========================================================
     FA SPORTS — PREMIUM FINAL CTA + FOOTER
========================================================= --}}

<section class="fa-final-cta" id="final-cta">
    <div class="fa-final-cta__inner">
        <span class="fa-final-cta__eyebrow">BUILT FOR THE NEXT LEVEL</span>

        <h2 class="fa-final-cta__headline">
            READY<br>
            TO<br>
            <span class="fa-red">PERFORM</span>
        </h2>

        <a href="{{ route('partnership') }}"
           class="fa-btn fa-btn--outline fa-final-cta__btn">
            PARTNER WITH US <span>↗</span>
        </a>
    </div>
</section>


{{-- =========================================================
     FOOTER
========================================================= --}}

<footer class="fa-footer">

    <div class="fa-footer__top">

        {{-- BRAND --}}
        <div class="fa-footer__brand">
            <a href="{{ route('home') }}" class="fa-footer__logo">
                <span>FA</span> SPORTS
            </a>

            <p class="fa-footer__description">
                Built for performance. Driven by purpose.
                Creating sportswear that moves with ambition.
            </p>

            {{-- SOCIAL LINKS --}}
            <div class="fa-footer__socials">
                <span class="fa-footer__social-label">FOLLOW FA SPORTS</span>

                <div class="fa-footer__social-links">

                    <a href="https://www.facebook.com/share/1F5nNiRKPe/"
                       target="_blank"
                       rel="noopener noreferrer">
                        FACEBOOK ↗
                    </a>

                    <a href="https://www.instagram.com/fa_sports.pk?srtk=MTdvaXdqMTliOWVpZA=="
                       target="_blank"
                       rel="noopener noreferrer">
                        INSTAGRAM ↗
                    </a>

                    <a href="https://www.linkedin.com/in/faizan-ali-fa-sports-05bbb3370?utm_source=share_via&amp;utm_content=profile&amp;utm_medium=member_android"
                       target="_blank"
                       rel="noopener noreferrer">
                        LINKEDIN ↗
                    </a>

                </div>
            </div>
        </div>


        {{-- EXPLORE --}}
        <div class="fa-footer__col">
            <h3 class="fa-footer__title">EXPLORE</h3>

            <a href="{{ route('home') }}">The Arena</a>
            <a href="{{ route('disciplines') }}">Disciplines</a>
            <a href="{{ route('performance-gear') }}">Performance Gear</a>
            <a href="{{ route('team-lab') }}">Team Lab</a>
            <a href="{{ route('playbook') }}">The Playbook</a>
            <a href="{{ route('about') }}">About Us</a>
        </div>


        {{-- BUSINESS --}}
        <div class="fa-footer__col">
            <h3 class="fa-footer__title">BUSINESS</h3>

            <a href="{{ route('legacy') }}">Our Legacy</a>
            <a href="{{ route('partnership') }}">Partner With Us</a>
            <a href="{{ route('partnership') }}">Distributor</a>
            <a href="{{ route('quote') }}">Request a Quote</a>
        </div>


        {{-- CONTACT --}}
        <div class="fa-footer__col fa-footer__contact">
            <h3 class="fa-footer__title">GET IN TOUCH</h3>

            <span class="fa-footer__contact-label">CALL US</span>

            <a href="tel:+923314033843"
               class="fa-footer__contact-value">
                +92 331 4033843 ↗
            </a>

            <span class="fa-footer__contact-label">EMAIL US</span>

            <a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=faizanexporter335@email.com"
               target="_blank"
               rel="noopener noreferrer"
               class="fa-footer__contact-value fa-footer__email">
                faizanexporter335@email.com ↗
            </a>

            <span class="fa-footer__contact-label">LOCATION</span>

            <a href="https://www.google.com/maps/search/?api=1&amp;query=Sialkot%2C+Pakistan"
               target="_blank"
               rel="noopener noreferrer"
               class="fa-footer__location">
                Sialkot, Pakistan ↗
            </a>
        </div>

    </div>


    {{-- LARGE WORDMARK --}}

    <div class="fa-footer__wordmark" aria-hidden="true">
        <span class="fa-wordmark-f">F</span><span class="fa-wordmark-a">A</span><span class="fa-wordmark-sports"> SPORTS</span>
    </div>


    {{-- LEGAL --}}

    <div class="fa-footer__legal">

        <span>
            &copy; {{ date('Y') }} FA SPORTS. ALL RIGHTS RESERVED.
        </span>

        <span class="fa-footer__tagline">
            PERFORM. FUEL. PERSIST.
        </span>

    </div>

</footer>
