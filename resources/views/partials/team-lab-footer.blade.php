
<section class="fa-final-cta fa-final-cta--triple" id="final-cta">
    <h2 class="fa-final-cta__headline fa-final-cta__headline--sm">
        ONE TEAM.<br>
        ONE IDENTITY.<br>
        <span class="fa-red">ONE PERFORMANCE.</span>
    </h2>

    <div class="fa-final-cta__row">
        <a href="{{ route('team-lab') }}" class="fa-btn fa-btn--red">BUILD YOUR TEAM</a>
        <a href="{{ route('gear-index') }}#gear-index" class="fa-btn fa-btn--outline">CUSTOM THE GEAR</a>
        <a href="{{ route('quote') }}" class="fa-btn fa-btn--outline">REQUEST A QUOTE</a>
    </div>
</section>

<footer class="fa-footer fa-footer--pg">
    <p class="fa-footer__lead">YOUR TEAM IS READY.<br>ARE YOU?</p>

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
            <a href="{{ route('team-lab') }}">Team Lab</a>
            <a href="{{ route('performance-gear') }}#performance-gear">Explore Your Gear</a>
            <a href="{{ route('gear-index') }}">Custom Gear</a>
        </div>

        <div class="fa-footer__col">
            <h3 class="fa-footer__title">CONNECT</h3>
            <a href="{{ route('connect') }}">Contact</a>
            <a href="{{ route('quote') }}">Request A Quote</a>
        </div>

    </div>

    {{-- SOCIAL & CONTACT SECTION --}}
    <div class="fa-footer-connect">

        <div class="fa-footer-connect__heading">
            <span>STAY CONNECTED</span>
            <h3>LET'S CONNECT.</h3>
            <p>Follow FA SPORTS. Connect with our team.</p>
        </div>

        <div class="fa-footer-connect__links">

            <a href="https://www.facebook.com/share/1F5nNiRKPe/"
               target="_blank"
               rel="noopener noreferrer"
               class="fa-social-link">

                <span class="fa-social-link__icon">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M13.5 21v-8h2.7l.4-3.1h-3.1V8c0-.9.3-1.5 1.6-1.5h1.6V3.7c-.3 0-1.3-.1-2.5-.1-2.5 0-4.2 1.5-4.2 4.3v2H7.2V13H10v8z"/>
                    </svg>
                </span>
                <span>FACEBOOK</span>
                <span class="fa-social-link__arrow">↗</span>
            </a>

            <a href="https://www.instagram.com/fa_sports.pk?srtk=MTdvaXdqMTliOWVpZA=="
               target="_blank"
               rel="noopener noreferrer"
               class="fa-social-link">

                <span class="fa-social-link__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <rect x="3" y="3" width="18" height="18" rx="5"/>
                        <circle cx="12" cy="12" r="4"/>
                        <circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/>
                    </svg>
                </span>
                <span>INSTAGRAM</span>
                <span class="fa-social-link__arrow">↗</span>
            </a>

            <a href="https://www.linkedin.com/in/faizan-ali-fa-sports-05bbb3370?utm_source=share_via&amp;utm_content=profile&amp;utm_medium=member_android"
               target="_blank"
               rel="noopener noreferrer"
               class="fa-social-link">

                <span class="fa-social-link__icon">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M5.2 3a2.2 2.2 0 1 0 0 4.4 2.2 2.2 0 0 0 0-4.4zM3.3 9h3.8v12H3.3zm6.1 0H13v1.6h.1c.5-.9 1.7-1.9 3.5-1.9 3.8 0 4.5 2.5 4.5 5.7V21h-3.8v-5.8c0-1.4 0-3.2-2-3.2s-2.3 1.5-2.3 3.1V21H9.4z"/>
                    </svg>
                </span>
                <span>LINKEDIN</span>
                <span class="fa-social-link__arrow">↗</span>
            </a>

            
<a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=faizanexporter335@email.com"
   target="_blank"
   rel="noopener noreferrer"
   class="fa-social-link">

    <span class="fa-social-link__icon">
        <svg viewBox="0 0 24 24" fill="none"
             stroke="currentColor" stroke-width="1.8">
            <rect x="2.5" y="4.5" width="19" height="15" rx="2"/>
            <path d="m3 6 9 7 9-7"/>
        </svg>
    </span>

    <span>EMAIL US</span>
    <span class="fa-social-link__arrow">↗</span>
</a>


            <a href="tel:03314033843"
               class="fa-social-link">

                <span class="fa-social-link__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M7 3h3l2 5-2.5 1.5a15 15 0 0 0 5 5L16 12l5 2v3c0 2-1.5 3.5-3.5 3.5C10 20.5 3.5 14 3.5 6.5 3.5 4.5 5 3 7 3z"/>
                    </svg>
                </span>
                <span>03314033843</span>
                <span class="fa-social-link__arrow">↗</span>
            </a>

        </div>
    </div>

    <div class="fa-footer__wordmark">FA SPORTS</div>

    <div class="fa-footer__legal">
        <span>&copy; {{ date('Y') }} FA SPORTS. All rights reserved.</span>
        <span>PERFORM. FUEL. PERSIST.</span>
    </div>
</footer>
