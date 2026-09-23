@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/performance-gear.css') }}">
    <link rel="stylesheet" href="{{ asset('css/disciplines.css') }}">
    <link rel="stylesheet" href="{{ asset('css/legacy.css') }}">

    {{-- Leaflet Map --}}
    <link
        rel="stylesheet"
        href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        crossorigin=""
    >
@endpush

@section('content')

{{-- All <img> sources below point to public/images/legacy/... — drop in your own
     archival / manufacturing / product photography at these exact paths. --}}

{{-- ============ HERO ============ --}}
<section class="fa-lg-hero" id="lg-hero">
    {{-- source: archival stadium/manufacturing hero photo — public/images/legacy/hero/hero-cover.jpg --}}
    <img src="{{ asset('images/legacy/hero/hero-cover.jpg') }}" alt="FA SPORTS heritage imagery" class="fa-lg-hero__media">
    <div class="fa-lg-hero__scrim"></div>
    <div class="fa-lg-hero__line"></div>

    <div class="fa-lg-hero__content">
        <h1 class="fa-lg-hero__headline">THE<br>FA<br>LEGACY</h1>
        <p class="fa-lg-hero__sub">
            BUILT BY EXPERIENCE.<br>
            DRIVEN BY PERFORMANCE.<br>
            DESIGNED FOR WHAT COMES NEXT.
        </p>
        
    </div>
</section>
{{-- ============ OPENING STATEMENT ============ --}}
<section class="fa-lg-opening">

    <div class="fa-lg-opening__inner">

        <div class="fa-lg-opening__intro">
            <span class="fa-lg-opening__eyebrow">
                THE FA SPORTS STANDARD
            </span>

            <h2 class="fa-lg-opening__headline">
                PERFORMANCE<br>
                STARTS <span>BEFORE</span><br>
                THE GAME.
            </h2>

            <p class="fa-lg-opening__copy">
                Every product carries a part of the FA SPORTS story.
                From the first idea to the final stitch, we build with
                purpose, precision and the athlete in mind.
            </p>
        </div>


        {{-- ============ OPENING CARDS ============ --}}
        <div class="fa-lg-opening__cards">

            <article class="fa-lg-opening__card">
                <span class="fa-lg-opening__card-number">01</span>

                <div>
                    <span class="fa-lg-opening__card-label">
                        EXPERIENCE
                    </span>

                    <h3>
                        BUILT<br>
                        THROUGH<br>
                        YEARS.
                    </h3>

                    <p>
                        Experience shapes every decision — from product
                        development to the smallest construction detail.
                    </p>
                </div>
            </article>


            <article class="fa-lg-opening__card">
                <span class="fa-lg-opening__card-number">02</span>

                <div>
                    <span class="fa-lg-opening__card-label">
                        PRECISION
                    </span>

                    <h3>
                        EVERY<br>
                        DETAIL<br>
                        MATTERS.
                    </h3>

                    <p>
                        Materials, fit, construction and finish come together
                        to create equipment made for serious performance.
                    </p>
                </div>
            </article>


            <article class="fa-lg-opening__card">
                <span class="fa-lg-opening__card-number">03</span>

                <div>
                    <span class="fa-lg-opening__card-label">
                        PERFORMANCE
                    </span>

                    <h3>
                        READY<br>
                        FOR WHAT<br>
                        COMES NEXT.
                    </h3>

                    <p>
                        We keep moving forward — developing better systems,
                        stronger products and smarter ways to perform.
                    </p>
                </div>
            </article>

        </div>

    </div>

</section>


{{-- ============ FA ORIGIN ============ --}}
<section class="fa-lg-origin">

    <div class="fa-lg-origin__year">
        <span>2004</span>
        <small>THE ORIGIN</small>
    </div>

    <div class="fa-lg-origin__story">

        <div class="fa-section-head fa-section-head--light" style="padding-top:0;">
            <span class="fa-section-head__index">01</span>

            <h2 class="fa-section-head__title">
                WHERE<br>
                IT BEGAN.
            </h2>
        </div>

        <p class="fa-lg-origin__copy">
            In 2004, FA SPORTS began with one clear ambition:
            to create sportswear that athletes could trust when performance
            mattered most.
        </p>

        <p class="fa-lg-origin__copy">
            What started with focused craftsmanship and a small range of
            products became the foundation for everything that followed —
            better materials, sharper construction, stronger performance
            and a commitment to doing the details right.
        </p>

        <div class="fa-lg-origin__statement">
            <span>2004 — PRESENT</span>
            <strong>
                BUILT FROM EXPERIENCE.<br>
                DRIVEN BY WHAT'S NEXT.
            </strong>
        </div>

        <img
            src="{{ asset('images/legacy/product-016.jpg') }}"
            alt="FA SPORTS early craftsmanship"
            class="fa-lg-origin__img"
        >

    </div>

</section>

    
{{-- =========================================================
    THE FA TIMELINE — EDITORIAL VERTICAL TIMELINE
========================================================= --}}
<section class="fa-lg-timeline" id="timeline">

    {{-- =========================
        TIMELINE HEADER
    ========================== --}}
    <div class="fa-lg-timeline__header">

        <div class="fa-lg-timeline__eyebrow">
            <span>02</span>
            <span>THE LEGACY JOURNEY</span>
        </div>

        <h2 class="fa-lg-timeline__heading">
            BUILT <span>OVER TIME.</span>
        </h2>

        <p class="fa-lg-timeline__intro">
            From the first product to the systems we build today,
            every chapter has shaped the FA SPORTS standard.
        </p>

    </div>
{{-- =========================
    VERTICAL JOURNEY
========================== --}}
<div class="fa-lg-timeline__journey">

    {{-- CENTER VERTICAL LINE --}}
    <div class="fa-lg-timeline__line"></div>

    @for ($i = 73; $i <= 90; $i++)

        @php
            $index = $i - 73;
            $isReverse = $index % 2 !== 0;
        @endphp

        <article
            class="fa-lg-timeline__item {{ $isReverse ? 'is-reverse' : '' }}"
        >

            {{-- =========================
                IMAGE SIDE
            ========================== --}}
            <div class="fa-lg-timeline__side fa-lg-timeline__side--image">

                <div class="fa-lg-timeline__image-wrap">

    @if ($i === 73)

        {{-- FIRST TIMELINE IMAGE --}}
        <img
            src="{{ asset('images/legacy/product-063.jpg') }}"
            alt="FA SPORTS archive product"
            class="fa-lg-timeline__image"
            loading="lazy"
        >

    @elseif ($i === 76)

        {{-- FOURTH TIMELINE IMAGE --}}
        <img
            src="{{ asset('images/legacy/fa-crest-cap.jpg') }}"
            alt="FA SPORTS archive product"
            class="fa-lg-timeline__image"
            loading="lazy"
        >

    @else

        {{-- OTHER TIMELINE IMAGES --}}
        <img
            src="{{ asset('images/legacy/product-' . str_pad($i, 3, '0', STR_PAD_LEFT) . '.jpg') }}"
            alt="FA SPORTS archive product"
            class="fa-lg-timeline__image"
            loading="lazy"
        >

    @endif

    <span class="fa-lg-timeline__image-label">
        FA SPORTS / ARCHIVE
    </span>

</div>

            </div>


            {{-- =========================
                CENTER MARKER
            ========================== --}}
            <div class="fa-lg-timeline__marker">
                <span></span>
            </div>


            {{-- =========================
                TEXT SIDE
            ========================== --}}
            <div class="fa-lg-timeline__side fa-lg-timeline__side--content">

                <div class="fa-lg-timeline__content">

                    {{-- 73–90 YEAR NUMBER REMOVED --}}

                    <span class="fa-lg-timeline__chapter">
                        CHAPTER {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                    </span>

                    <h3 class="fa-lg-timeline__title">
                        FA SPORTS
                    </h3>

                    <p class="fa-lg-timeline__description">
                        A defining chapter in the evolution of FA SPORTS —
                        shaped by craftsmanship, experience and the pursuit
                        of better performance.
                    </p>

                    <div class="fa-lg-timeline__tags">
                        <span>CRAFT</span>
                        <span>PERFORMANCE</span>
                        <span>PROGRESS</span>
                    </div>

                </div>

            </div>

        </article>

    @endfor

</div>



    {{-- =========================
        END STATEMENT
    ========================== --}}
    <div class="fa-lg-timeline__ending">

        <span>2004 — PRESENT</span>

        <h3>
            EVERY CHAPTER<br>
            BUILDS THE NEXT.
        </h3>

        <p>
            Experience became knowledge.
            Knowledge became performance.
            Performance became the FA SPORTS standard.
        </p>

    </div>

</section>


{{-- =========================================================
     THEN / NOW — EVOLUTION TIMELINE
     ========================================================= --}}
<section class="fa-lg-thennow" id="thenNow">

    <div class="fa-lg-thennow__header">

        <div class="fa-lg-thennow__eyebrow">
            <span>03</span>
            <span>THE TRANSFORMATION</span>
        </div>

        <h2 class="fa-lg-thennow__heading">
            THEN <span>/</span> NOW.
        </h2>

        <p class="fa-lg-thennow__intro">
            What started with a clear vision became a system built around
            performance, precision and progress.
        </p>

    </div>


    {{-- ================= TIMELINE ================= --}}
    <div class="fa-lg-thennow__timeline">

        <div class="fa-lg-thennow__line"></div>


        {{-- CARD 01 — LEFT --}}
        <article class="fa-lg-thennow__item fa-lg-thennow__item--left">

            <div class="fa-lg-thennow__card">

                <div class="fa-lg-thennow__card-top">
                    <span class="fa-lg-thennow__number">01</span>
                    <span class="fa-lg-thennow__label">THEN</span>
                </div>

                <h3>DESIGN</h3>

                <div class="fa-lg-thennow__arrow">→</div>

                <p>
                    Product-first thinking shaped the early FA approach,
                    built around strong fundamentals and clean construction.
                </p>

                <div class="fa-lg-thennow__meta">
                    <span>FOUNDATION</span>
                    <span>01 / 06</span>
                </div>

            </div>

            <div class="fa-lg-thennow__dot"></div>

        </article>


        {{-- CARD 02 — RIGHT --}}
        <article class="fa-lg-thennow__item fa-lg-thennow__item--right">

            <div class="fa-lg-thennow__dot"></div>

            <div class="fa-lg-thennow__card">

                <div class="fa-lg-thennow__card-top">
                    <span class="fa-lg-thennow__number">02</span>
                    <span class="fa-lg-thennow__label">NOW</span>
                </div>

                <h3>ENGINEERED DESIGN</h3>

                <div class="fa-lg-thennow__arrow">→</div>

                <p>
                    Every detail is now considered as part of a complete
                    performance system — from fit to movement.
                </p>

                <div class="fa-lg-thennow__meta">
                    <span>EVOLUTION</span>
                    <span>02 / 06</span>
                </div>

            </div>

        </article>


        {{-- CARD 03 — LEFT --}}
        <article class="fa-lg-thennow__item fa-lg-thennow__item--left">

            <div class="fa-lg-thennow__card">

                <div class="fa-lg-thennow__card-top">
                    <span class="fa-lg-thennow__number">03</span>
                    <span class="fa-lg-thennow__label">THEN</span>
                </div>

                <h3>MATERIALS</h3>

                <div class="fa-lg-thennow__arrow">→</div>

                <p>
                    Reliable materials formed the foundation of the early
                    product range and its everyday durability.
                </p>

                <div class="fa-lg-thennow__meta">
                    <span>CRAFT</span>
                    <span>03 / 06</span>
                </div>

            </div>

            <div class="fa-lg-thennow__dot"></div>

        </article>


        {{-- CARD 04 — RIGHT --}}
        <article class="fa-lg-thennow__item fa-lg-thennow__item--right">

            <div class="fa-lg-thennow__dot"></div>

            <div class="fa-lg-thennow__card">

                <div class="fa-lg-thennow__card-top">
                    <span class="fa-lg-thennow__number">04</span>
                    <span class="fa-lg-thennow__label">NOW</span>
                </div>

                <h3>PERFORMANCE TEXTILES</h3>

                <div class="fa-lg-thennow__arrow">→</div>

                <p>
                    Materials are selected around breathability, flexibility,
                    comfort and the demands of modern performance.
                </p>

                <div class="fa-lg-thennow__meta">
                    <span>PERFORMANCE</span>
                    <span>04 / 06</span>
                </div>

            </div>

        </article>


        {{-- CARD 05 — LEFT --}}
        <article class="fa-lg-thennow__item fa-lg-thennow__item--left">

            <div class="fa-lg-thennow__card">

                <div class="fa-lg-thennow__card-top">
                    <span class="fa-lg-thennow__number">05</span>
                    <span class="fa-lg-thennow__label">THEN</span>
                </div>

                <h3>PRODUCTION</h3>

                <div class="fa-lg-thennow__arrow">→</div>

                <p>
                    Focused production created the discipline and
                    craftsmanship that shaped the FA standard.
                </p>

                <div class="fa-lg-thennow__meta">
                    <span>DISCIPLINE</span>
                    <span>05 / 06</span>
                </div>

            </div>

            <div class="fa-lg-thennow__dot"></div>

        </article>


        {{-- CARD 06 — RIGHT --}}
        <article class="fa-lg-thennow__item fa-lg-thennow__item--right">

            <div class="fa-lg-thennow__dot"></div>

            <div class="fa-lg-thennow__card">

                <div class="fa-lg-thennow__card-top">
                    <span class="fa-lg-thennow__number">06</span>
                    <span class="fa-lg-thennow__label">NOW</span>
                </div>

                <h3>BUILT FOR SCALE</h3>

                <div class="fa-lg-thennow__arrow">→</div>

                <p>
                    Today, craftsmanship connects with systems, teamwear,
                    innovation and a wider performance ecosystem.
                </p>

                <div class="fa-lg-thennow__meta">
                    <span>THE STANDARD</span>
                    <span>06 / 06</span>
                </div>

            </div>

        </article>

    </div>


    {{-- ================= BOTTOM STATEMENT ================= --}}
    <div class="fa-lg-thennow__ending">

        <span>THEN → NOW</span>

        <h3>
            EXPERIENCE<br>
            BECAME <em>PERFORMANCE.</em>
        </h3>

        <p>
            The product changed. The purpose never did.
        </p>

    </div>

</section>

{{-- =========================================================
     PERFORMANCE PHILOSOPHY
     ========================================================= --}}
<section class="fa-lg-philosophy" id="performancePhilosophy">

    {{-- HEADER --}}
    <div class="fa-lg-philosophy__header">

        <div class="fa-lg-philosophy__eyebrow">
            <span>04</span>
            <span>PERFORMANCE PHILOSOPHY</span>
        </div>

        <h2 class="fa-lg-philosophy__heading">
            HOW WE <span>BUILD.</span>
        </h2>

        <p class="fa-lg-philosophy__intro">
            Performance is not one decision. It is a discipline built into
            every material, movement, detail and decision.
        </p>

    </div>


    {{-- PHILOSOPHY TIMELINE --}}
    <div class="fa-lg-philosophy__timeline">

        <div class="fa-lg-philosophy__line"></div>


        {{-- 01 --}}
        <article class="fa-lg-philosophy__item fa-lg-philosophy__item--left">

            <div class="fa-lg-philosophy__card">

                <div class="fa-lg-philosophy__top">
                    <span class="fa-lg-philosophy__number">01</span>
                    <span class="fa-lg-philosophy__index">MINDSET</span>
                </div>

                <h3>START WITH<br><em>PURPOSE.</em></h3>

                <p>
                    Every product begins with understanding the athlete,
                    the environment and the demands of the game.
                </p>

                <div class="fa-lg-philosophy__bottom">
                    <span>01</span>
                    <span>INTENT</span>
                </div>

            </div>

            <div class="fa-lg-philosophy__dot"></div>

        </article>


        {{-- 02 --}}
        <article class="fa-lg-philosophy__item fa-lg-philosophy__item--right">

            <div class="fa-lg-philosophy__dot"></div>

            <div class="fa-lg-philosophy__card">

                <div class="fa-lg-philosophy__top">
                    <span class="fa-lg-philosophy__number">02</span>
                    <span class="fa-lg-philosophy__index">MATERIAL</span>
                </div>

                <h3>CHOOSE WHAT<br><em>PERFORMS.</em></h3>

                <p>
                    Materials are selected for what they contribute to
                    movement, comfort, durability and performance.
                </p>

                <div class="fa-lg-philosophy__bottom">
                    <span>02</span>
                    <span>MATERIAL</span>
                </div>

            </div>

        </article>


        {{-- 03 --}}
        <article class="fa-lg-philosophy__item fa-lg-philosophy__item--left">

            <div class="fa-lg-philosophy__card">

                <div class="fa-lg-philosophy__top">
                    <span class="fa-lg-philosophy__number">03</span>
                    <span class="fa-lg-philosophy__index">MOVEMENT</span>
                </div>

                <h3>DESIGN FOR<br><em>MOTION.</em></h3>

                <p>
                    A garment should work with the athlete — never against
                    the movement that defines the sport.
                </p>

                <div class="fa-lg-philosophy__bottom">
                    <span>03</span>
                    <span>MOVEMENT</span>
                </div>

            </div>

            <div class="fa-lg-philosophy__dot"></div>

        </article>


        {{-- 04 --}}
        <article class="fa-lg-philosophy__item fa-lg-philosophy__item--right">

            <div class="fa-lg-philosophy__dot"></div>

            <div class="fa-lg-philosophy__card">

                <div class="fa-lg-philosophy__top">
                    <span class="fa-lg-philosophy__number">04</span>
                    <span class="fa-lg-philosophy__index">PRECISION</span>
                </div>

                <h3>DETAILS<br><em>MATTER.</em></h3>

                <p>
                    Construction, fit, finishing and consistency define
                    the difference between ordinary and considered gear.
                </p>

                <div class="fa-lg-philosophy__bottom">
                    <span>04</span>
                    <span>PRECISION</span>
                </div>

            </div>

        </article>


        {{-- 05 --}}
        <article class="fa-lg-philosophy__item fa-lg-philosophy__item--left">

            <div class="fa-lg-philosophy__card">

                <div class="fa-lg-philosophy__top">
                    <span class="fa-lg-philosophy__number">05</span>
                    <span class="fa-lg-philosophy__index">DURABILITY</span>
                </div>

                <h3>BUILD TO<br><em>ENDURE.</em></h3>

                <p>
                    Performance should continue beyond the first match,
                    first season and first impression.
                </p>

                <div class="fa-lg-philosophy__bottom">
                    <span>05</span>
                    <span>ENDURANCE</span>
                </div>

            </div>

            <div class="fa-lg-philosophy__dot"></div>

        </article>


        {{-- 06 --}}
        <article class="fa-lg-philosophy__item fa-lg-philosophy__item--right">

            <div class="fa-lg-philosophy__dot"></div>

            <div class="fa-lg-philosophy__card">

                <div class="fa-lg-philosophy__top">
                    <span class="fa-lg-philosophy__number">06</span>
                    <span class="fa-lg-philosophy__index">PROGRESS</span>
                </div>

                <h3>ALWAYS<br><em>MOVE FORWARD.</em></h3>

                <p>
                    The standard is never finished. Every season creates
                    another opportunity to improve what comes next.
                </p>

                <div class="fa-lg-philosophy__bottom">
                    <span>06</span>
                    <span>PROGRESS</span>
                </div>

            </div>

        </article>

    </div>


    {{-- FINAL STATEMENT --}}
    <div class="fa-lg-philosophy__statement">

        <div class="fa-lg-philosophy__statement-line"></div>

        <span>THE FA STANDARD</span>

        <h3>
            PERFORMANCE<br>
            IS A <em>DISCIPLINE.</em>
        </h3>

        <p>
            Think better. Build better. Perform better.
        </p>

    </div>

</section>

{{-- ============ WHY FA SPORTS ============ --}}
<section class="fa-lg-why">
    <div class="fa-section-head fa-section-head--dark">
        <h2 class="fa-section-head__title">WHY THE GAME<br>TRUSTS FA.</h2>
    </div>
    <ul class="fa-lg-why__list">
        @foreach (['PERFORMANCE-FIRST DESIGN','CONSISTENT QUALITY','PROFESSIONAL MANUFACTURING','CUSTOM TEAM SOLUTIONS','RESPONSIVE DEVELOPMENT','LONG-TERM PARTNERSHIPS'] as $feature)
            <li>{{ $feature }}</li>
        @endforeach
    </ul>
</section>

{{-- =========================================================
     PEOPLE BEHIND PERFORMANCE
     ========================================================= --}}
<section class="fa-lg-people" id="peopleBehindPerformance">

    {{-- HEADER --}}
    <div class="fa-lg-people__header">

        <div class="fa-lg-people__eyebrow">
            <span>05</span>
            <span>PEOPLE BEHIND PERFORMANCE</span>
        </div>

        <h2 class="fa-lg-people__heading">
            BUILT BY <span>PEOPLE.</span>
        </h2>

        <p class="fa-lg-people__intro">
            Products carry the name. People carry the standard.
            Behind every FA SPORTS system is a team committed to doing
            the work better.
        </p>

    </div>


    {{-- PEOPLE TIMELINE --}}
    <div class="fa-lg-people__timeline">

        <div class="fa-lg-people__line"></div>


        {{-- PERSON 01 --}}
        <article class="fa-lg-people__item fa-lg-people__item--left">

            <div class="fa-lg-people__card">

                <div class="fa-lg-people__top">
                    <span class="fa-lg-people__number">01</span>
                    <span class="fa-lg-people__role">CRAFT</span>
                </div>

                <span class="fa-lg-people__small">
                    THE FOUNDATION
                </span>

                <h3>
                    THE<br>
                    <em>MAKER.</em>
                </h3>

                <p>
                    The hands behind every construction, finish and detail.
                    Craftsmanship turns an idea into something real.
                </p>

                <div class="fa-lg-people__signature">
                    <span>01</span>
                    <span>CRAFTSMANSHIP</span>
                </div>

            </div>

            <div class="fa-lg-people__dot"></div>

        </article>


        {{-- PERSON 02 --}}
        <article class="fa-lg-people__item fa-lg-people__item--right">

            <div class="fa-lg-people__dot"></div>

            <div class="fa-lg-people__card">

                <div class="fa-lg-people__top">
                    <span class="fa-lg-people__number">02</span>
                    <span class="fa-lg-people__role">DESIGN</span>
                </div>

                <span class="fa-lg-people__small">
                    THE VISION
                </span>

                <h3>
                    THE<br>
                    <em>DESIGNER.</em>
                </h3>

                <p>
                    Turning performance requirements into considered form,
                    fit and function without losing the identity of the game.
                </p>

                <div class="fa-lg-people__signature">
                    <span>02</span>
                    <span>DESIGN THINKING</span>
                </div>

            </div>

        </article>


        {{-- PERSON 03 --}}
        <article class="fa-lg-people__item fa-lg-people__item--left">

            <div class="fa-lg-people__card">

                <div class="fa-lg-people__top">
                    <span class="fa-lg-people__number">03</span>
                    <span class="fa-lg-people__role">ENGINEERING</span>
                </div>

                <span class="fa-lg-people__small">
                    THE SYSTEM
                </span>

                <h3>
                    THE<br>
                    <em>ENGINEER.</em>
                </h3>

                <p>
                    Solving the technical questions behind movement,
                    materials, construction and performance.
                </p>

                <div class="fa-lg-people__signature">
                    <span>03</span>
                    <span>ENGINEERING</span>
                </div>

            </div>

            <div class="fa-lg-people__dot"></div>

        </article>


        {{-- PERSON 04 --}}
        <article class="fa-lg-people__item fa-lg-people__item--right">

            <div class="fa-lg-people__dot"></div>

            <div class="fa-lg-people__card">

                <div class="fa-lg-people__top">
                    <span class="fa-lg-people__number">04</span>
                    <span class="fa-lg-people__role">QUALITY</span>
                </div>

                <span class="fa-lg-people__small">
                    THE STANDARD
                </span>

                <h3>
                    THE<br>
                    <em>INSPECTOR.</em>
                </h3>

                <p>
                    Making sure every detail reaches the standard before
                    the product ever reaches the athlete.
                </p>

                <div class="fa-lg-people__signature">
                    <span>04</span>
                    <span>QUALITY CONTROL</span>
                </div>

            </div>

        </article>


        {{-- PERSON 05 --}}
        <article class="fa-lg-people__item fa-lg-people__item--left">

            <div class="fa-lg-people__card">

                <div class="fa-lg-people__top">
                    <span class="fa-lg-people__number">05</span>
                    <span class="fa-lg-people__role">TEAMWEAR</span>
                </div>

                <span class="fa-lg-people__small">
                    THE CONNECTION
                </span>

                <h3>
                    THE<br>
                    <em>PARTNER.</em>
                </h3>

                <p>
                    Working with teams to understand their identity,
                    requirements and the environment they compete in.
                </p>

                <div class="fa-lg-people__signature">
                    <span>05</span>
                    <span>TEAM PARTNERSHIP</span>
                </div>

            </div>

            <div class="fa-lg-people__dot"></div>

        </article>


        {{-- PERSON 06 --}}
        <article class="fa-lg-people__item fa-lg-people__item--right">

            <div class="fa-lg-people__dot"></div>

            <div class="fa-lg-people__card">

                <div class="fa-lg-people__top">
                    <span class="fa-lg-people__number">06</span>
                    <span class="fa-lg-people__role">FUTURE</span>
                </div>

                <span class="fa-lg-people__small">
                    THE NEXT CHAPTER
                </span>

                <h3>
                    THE<br>
                    <em>BUILDER.</em>
                </h3>

                <p>
                    The people pushing FA SPORTS forward — questioning,
                    improving and building what comes next.
                </p>

                <div class="fa-lg-people__signature">
                    <span>06</span>
                    <span>CONTINUOUS PROGRESS</span>
                </div>

            </div>

        </article>

    </div>


    {{-- FINAL STATEMENT --}}
    <div class="fa-lg-people__ending">

        <span>PEOPLE MAKE THE STANDARD</span>

        <h3>
            BEHIND EVERY<br>
            <em>PERFORMANCE.</em>
        </h3>

        <p>
            Different roles. One standard. One direction.
        </p>

    </div>

</section>

{{-- =========================================================
     FROM HERE TO EVERYWHERE
     FA SPORTS GLOBAL REGIONS
     ========================================================= --}}

<section class="fa-global" id="globalReach">

    {{-- ================= HEADER ================= --}}
    <div class="fa-global__header">

        <div class="fa-global__eyebrow">
            <span>06</span>
            <span>FA SPORTS / GLOBAL REGIONS</span>
        </div>

        <div class="fa-global__header-grid">

            <div>
                <h2 class="fa-global__title">
                    FROM <em>HERE</em><br>
                    TO EVERYWHERE.
                </h2>
            </div>

            <div class="fa-global__header-copy">
                <p>
                    Built in Sialkot. Connected to teams, partners and
                    performance markets across the world.
                </p>

                <span>
                    ONE ORIGIN / GLOBAL REACH
                </span>
            </div>

        </div>

    </div>


    {{-- ================= MAP AREA ================= --}}
    <div class="fa-global__layout">

        <div class="fa-global__map-card">

            <div class="fa-global__map-head">
                <span>GLOBAL FOOTPRINT</span>
                <span>FA / 2004 — PRESENT</span>
            </div>


            {{-- REAL COUNTRY MAP IS DRAWN HERE --}}
            <div class="fa-global__map" id="faWorldMap">

                <div class="fa-global__map-loading">
                    <span></span>
                    LOADING GLOBAL MAP
                </div>

            </div>


            <div class="fa-global__map-footer">

                <div>
                    <i class="fa-global__legend-dot"></i>
                    FA SPORTS ORIGIN
                </div>

                <div>
                    <i class="fa-global__legend-line"></i>
                    GLOBAL REACH
                </div>

                <div>
                    <i class="fa-global__legend-region"></i>
                    ACTIVE REGION
                </div>

            </div>

        </div>


        {{-- ================= SIDE PANEL ================= --}}
        <aside class="fa-global__side">

            <div class="fa-global__side-intro">
                <span>01 / ORIGIN</span>

                <h3>
                    SIALKOT,
                    <strong>PAKISTAN.</strong>
                </h3>

                <p>
                    The foundation of FA SPORTS starts here —
                    where sportswear manufacturing, craftsmanship
                    and performance come together.
                </p>
            </div>


            <div class="fa-global__stats">

                <div class="fa-global__stat">
                    <strong>01</strong>
                    <span>ORIGIN</span>
                    <b>PAKISTAN</b>
                </div>

                <div class="fa-global__stat">
                    <strong>40+</strong>
                    <span>MARKETS</span>
                    <b>WORLDWIDE</b>
                </div>

                <div class="fa-global__stat">
                    <strong>06</strong>
                    <span>REGIONS</span>
                    <b>CONNECTED</b>
                </div>

            </div>


            <div class="fa-global__regions">

                <span class="fa-global__regions-title">
                    ACTIVE REGIONS
                </span>

                <button data-region="Pakistan">
                    <span>01</span>
                    Pakistan
                </button>

                <button data-region="Europe">
                    <span>02</span>
                    Europe
                </button>

                <button data-region="Middle East">
                    <span>03</span>
                    Middle East
                </button>

                <button data-region="North America">
                    <span>04</span>
                    North America
                </button>

                <button data-region="Africa">
                    <span>05</span>
                    Africa
                </button>

                <button data-region="Australia">
                    <span>06</span>
                    Australia
                </button>

            </div>

        </aside>

    </div>


    {{-- ================= BOTTOM STATEMENT ================= --}}
    <div class="fa-global__statement">

        <span>BUILT HERE / CONNECTED EVERYWHERE</span>

        <h3>
            ONE ORIGIN.<br>
            <em>GLOBAL REACH.</em>
        </h3>

        <p>
            The journey started in Sialkot.
            The standard continues across the world.
        </p>

    </div>

</section>
{{-- ============ FA PERFORMANCE NUMBERS ============ --}}
<section class="fa-lg-numbers">
    <div class="fa-lg-numbers__grid" id="numbersGrid">
        @foreach ($statistics as $stat)
            <div class="fa-lg-numbers__cell">
                <span class="fa-lg-numbers__value" data-count="{{ $stat->value }}" data-suffix="{{ $stat->suffix }}">0</span>
                <span class="fa-lg-numbers__label">{{ $stat->label }}</span>
            </div>
        @endforeach
    </div>
</section>

{{-- ============ TODAY ============ --}}
<section class="fa-lg-today">
    <div class="fa-section-head fa-section-head--light">
        <h2 class="fa-section-head__title">THIS IS<br>FA SPORTS NOW.</h2>
    </div>
    <div class="fa-lg-today__grid">
        <a href="{{ route('performance-gear') }}" class="fa-lg-today__portal"><span>PERFORMANCE GEAR</span></a>
        <a href="{{ route('team-lab') }}" class="fa-lg-today__portal"><span>TEAM LAB</span></a>
        <a href="{{ route('performance-gear') }}#kit-studio" class="fa-lg-today__portal"><span>KIT STUDIO</span></a>
        <a href="{{ route('gear-index') }}" class="fa-lg-today__portal"><span>THE GEAR INDEX</span></a>
        <a href="{{ route('home') }}#craft" class="fa-lg-today__portal"><span>THE CRAFT</span></a>
        <a href="{{ route('home') }}#playbook" class="fa-lg-today__portal"><span>THE PLAYBOOK</span></a>
    </div>
</section>

{{-- ============ THE FUTURE ============ --}}
<section class="fa-lg-future">
    <div class="fa-section-head fa-section-head--light">
        <h2 class="fa-section-head__title">THE NEXT CHAPTER<br>IS ALREADY MOVING.</h2>
    </div>
    <ul class="fa-lg-future__list">
        @foreach ($futureInitiatives as $item)
            <li><h4>{{ $item->title }}</h4><p>{{ $item->description }}</p></li>
        @endforeach
    </ul>
</section>

{{-- ============ 2030 / FUTURE VISION ============ --}}
<section class="fa-lg-vision">
    <ul class="fa-lg-vision__track">
        <li class="is-active">TODAY</li>
        <li>NEXT GENERATION</li>
        <li>THE FUTURE OF PERFORMANCE</li>
    </ul>
</section>

{{-- ============ LEGACY STATEMENT ============ --}}
<section class="fa-lg-statement">
    <h2 class="fa-lg-statement__text">
        WE DON'T JUST MAKE GEAR.<br>
        <span class="fa-red">WE BUILD WHAT COMES NEXT.</span>
    </h2>
</section>

@endsection

@section('footer')
    @include('partials.legacy-footer')
@endsection

@push('scripts')

    <script
        src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        crossorigin=""
    ></script>

    <script src="{{ asset('js/performance-gear.js') }}" defer></script>
    <script src="{{ asset('js/legacy.js') }}" defer></script>

@endpush
