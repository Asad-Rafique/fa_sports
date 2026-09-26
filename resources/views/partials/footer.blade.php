{{-- =====================================================
     FINAL CTA
===================================================== --}}
<section class="fa-final-cta" id="final-cta">

    <h2 class="fa-final-cta__headline">
        READY<br>
        TO<br>
        <span class="fa-red">PERFORM?</span>
    </h2>

    <a href="{{ route('partnership') }}"
       class="fa-btn fa-btn--outline fa-final-cta__btn">
        PARTNER WITH US
    </a>

</section>


{{-- =====================================================
     FOOTER
===================================================== --}}
<footer class="fa-footer">

    <div class="fa-footer__grid">

        {{-- EXPLORE --}}
        <div class="fa-footer__col">
            <h3 class="fa-footer__title">EXPLORE</h3>

            <a href="{{route('home')}}">The Arena</a>
            <a href="{{route('disciplines')}}">Disciplines</a>
            <a href="{{route('performance-gear')}}">Performance Gear</a>
            <a href="{{route('team-lab')}}">Team Lab</a>
            <a href="{{route('playbook')}}">The Playbook</a>
            <a href="{{route('about')}}">About Us</a>
        </div>


        {{-- BUSINESS --}}
        <div class="fa-footer__col">
            <h3 class="fa-footer__title">BUSINESS</h3>

            <a href="{{route('legacy')}}">Our Legacy</a>

            <a href="{{ route('partnership') }}">
                Partner With Us
            </a>

            <a href="{{ route('quote') }}">
                Request a Quote
            </a>
        </div>


        {{-- SUPPORT --}}
        <div class="fa-footer__col">
            <h3 class="fa-footer__title">SUPPORT</h3>

            <a href="{{ route('partnership') }}">
                Partner With Us
            </a>

            <a href="{{route('partnership')}}">
                Distributor
                
            </a>

            <a href="{{ route('connect') }}">
                Contact
            </a>
        </div>

    </div>


    {{-- LARGE WORDMARK --}}
    <div class="fa-footer__wordmark" aria-hidden="true">
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