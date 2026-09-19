@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/performance-gear.css') }}">
@endpush

@section('content')

{{-- ============ HERO ============ --}}
<section class="fa-pg-hero" id="pg-hero">
    <div class="fa-pg-hero__media" role="img" aria-label="Athlete wearing FA SPORTS performance gear in a stadium at night"></div>
    <div class="fa-pg-hero__scrim"></div>

    <div class="fa-pg-hero__content">
        <span class="fa-pg-eyebrow">FA SPORTS / PERFORMANCE SYSTEM 01</span>
        <h1 class="fa-pg-hero__headline">PERFORMANCE<br>WITHOUT LIMITS.</h1>
        <p class="fa-pg-hero__sub">ENGINEERED FOR THE MOMENT THAT MATTERS.</p>
        <p class="fa-pg-hero__copy">
            Every piece of FA SPORTS performance gear is built for movement, control,
            durability and the confidence that comes from knowing your kit won't hold you back.
        </p>
        <div class="fa-pg-hero__actions">
            <a href="#collection" class="fa-btn fa-btn--red fa-magnetic">EXPLORE GEAR</a>
            <a href="{{ route('connect') }}" class="fa-btn fa-btn--outline fa-magnetic">Contact Us</a>
        </div>
    </div>
</section>

{{-- ============ PERFORMANCE STRIP ============ --}}
<div class="fa-pg-strip">
    <div class="fa-pg-strip__track">
        @foreach (array_fill(0, 2, ['LIGHTWEIGHT','BREATHABLE','FLEXIBLE','DURABLE','ATHLETE TESTED','TEAM READY']) as $set)
            @foreach ($set as $word)
                <span class="fa-pg-strip__item">{{ $word }}</span>
            @endforeach
        @endforeach
    </div>
</div>

{{-- ============ BUILT FOR YOUR GAME ============ --}}

<section class="fa-pg-game" id="disciplines">

    <div class="fa-section-head fa-section-head--light">
        <span class="fa-section-head__index">01</span>

        <h2 class="fa-section-head__title">
            BUILT FOR<br>YOUR GAME.
        </h2>
    </div>

    <p class="fa-pg-game__intro">
        Every sport demands a different kind of preparation — the gear should meet it there.
    </p>

    <div class="fa-pg-game__grid">

        @foreach ($disciplines as $discipline)

            <a href="#collection" class="fa-pg-game__panel">

                <div class="fa-pg-game__img">

                    <video
                        class="fa-pg-game__video"
                        autoplay
                        muted
                        loop
                        playsinline
                        preload="metadata"
                    >
                        <source
                            src="{{ asset('videos/disciplines/' . $discipline->slug . '.mp4') }}"
                            type="video/mp4"
                        >
                    </video>

                </div>

                <div class="fa-pg-game__sweep"></div>

                <div class="fa-pg-game__body">

                    <h3 class="fa-pg-game__name">
                        {{ $discipline->name }}
                    </h3>

                    <p class="fa-pg-game__copy">
                        {{ $discipline->tagline }}
                    </p>

                    <span class="fa-pg-game__arrow">
                        &rarr;
                    </span>

                </div>

            </a>

        @endforeach

    </div>

</section>

{{-- ============ THE PERFORMANCE SYSTEM ============ --}}

<section class="fa-pg-system">

    <div class="fa-section-head fa-section-head--light">
        <span class="fa-section-head__index">02</span>

        <h2 class="fa-section-head__title">
            THE PERFORMANCE<br>SYSTEM.
        </h2>
    </div>

    <div class="fa-pg-system__grid">

        {{-- PERFORMANCE APPAREL --}}
        <a href="#collection"
           class="fa-pg-system__cell fa-pg-system__cell--tall">

            <div class="fa-pg-system__img">
                <img
                    src="{{ asset('images/legacy/product-100.jpg') }}"
                    alt="FA SPORTS Performance Apparel"
                    loading="lazy"
                >
            </div>

            <div class="fa-pg-system__overlay"></div>

            <div class="fa-pg-system__content">
                <span class="fa-pg-system__number">01</span>

                <span class="fa-pg-system__label">
                    PERFORMANCE APPAREL
                </span>

                <span class="fa-pg-system__arrow">
                    &rarr;
                </span>
            </div>

        </a>


        {{-- FOOTWEAR --}}
        <a href="#collection"
           class="fa-pg-system__cell">

            <div class="fa-pg-system__img">
                <img
                    src="{{ asset('images/legacy/product-049.jpg') }}"
                    alt="FA SPORTS Footwear"
                    loading="lazy"
                >
            </div>

            <div class="fa-pg-system__overlay"></div>

            <div class="fa-pg-system__content">
                <span class="fa-pg-system__number">02</span>

                <span class="fa-pg-system__label">
                    FOOTWEAR
                </span>

                <span class="fa-pg-system__arrow">
                    &rarr;
                </span>
            </div>

        </a>


        {{-- GLOVES & PROTECTION --}}
        <a href="#collection"
           class="fa-pg-system__cell">

            <div class="fa-pg-system__img">
                <img
                    src="{{ asset('images/legacy/product-059.jpg') }}"
                    alt="FA SPORTS Gloves and Protection"
                    loading="lazy"
                >
            </div>

            <div class="fa-pg-system__overlay"></div>

            <div class="fa-pg-system__content">
                <span class="fa-pg-system__number">03</span>

                <span class="fa-pg-system__label">
                    GLOVES &amp; PROTECTION
                </span>

                <span class="fa-pg-system__arrow">
                    &rarr;
                </span>
            </div>

        </a>


        {{-- TRAINING GEAR & ACCESSORIES --}}
        <a href="#collection"
           class="fa-pg-system__cell fa-pg-system__cell--wide">

            <div class="fa-pg-system__img">
                <img
                    src="{{ asset('images/legacy/product-069.jpg') }}"
                    alt="FA SPORTS Training Gear and Accessories"
                    loading="lazy"
                >
            </div>

            <div class="fa-pg-system__overlay"></div>

            <div class="fa-pg-system__content">
                <span class="fa-pg-system__number">04</span>

                <span class="fa-pg-system__label">
                    TRAINING GEAR &amp; ACCESSORIES
                </span>

                <span class="fa-pg-system__arrow">
                    &rarr;
                </span>
            </div>

        </a>

    </div>

</section>

{{-- ============ FEATURED GEAR ============ --}}
<section class="fa-pg-story fa-featured-gear">

    <div class="fa-section-head fa-section-head--light">
        <span class="fa-section-head__index">03</span>
        <h2 class="fa-section-head__title">FEATURED GEAR.</h2>
    </div>

    <div class="fa-pg-story__list">

        {{-- FEATURE 01 --}}
        <article class="fa-pg-story__item">

            <div class="fa-pg-story__media">

                <div class="fa-pg-story__img fa-featured-gear__image"
                     style="background-image: url('{{ asset('images/playbook/academies-building-identity.jpg') }}');">

                    <div class="fa-featured-gear__frame">

                        <span class="fa-featured-gear__micro">
                            FA SPORTS / TEAM SYSTEM 01
                        </span>

                        <div class="fa-featured-gear__mark">
                            FA
                        </div>

                        <span class="fa-featured-gear__vertical">
                            PERFORMANCE / IDENTITY / TEAM
                        </span>

                        <div class="fa-featured-gear__corner fa-featured-gear__corner--tl"></div>
                        <div class="fa-featured-gear__corner fa-featured-gear__corner--tr"></div>
                        <div class="fa-featured-gear__corner fa-featured-gear__corner--bl"></div>
                        <div class="fa-featured-gear__corner fa-featured-gear__corner--br"></div>

                        <div class="fa-featured-gear__number">
                            01
                        </div>

                    </div>

                </div>

            </div>

            <div class="fa-pg-story__info">

                <span class="fa-gear__series">
                    TEAM IDENTITY
                </span>

                <h3 class="fa-gear__name">
                    ACADEMIES / BUILDING IDENTITY
                </h3>

                <ul class="fa-gear__specs">
                    <li>TEAM READY SYSTEM</li>
                    <li>CUSTOM IDENTITY</li>
                    <li>PERFORMANCE FOCUSED</li>
                </ul>

                <div class="fa-pg-story__actions">
                    <a href="{{ route('gear-index') }}" class="fa-btn fa-btn--outline fa-btn--sm">
                        EXPLORE GEAR
                    </a>
                </div>

            </div>

        </article>


        {{-- FEATURE 02 --}}
        <article class="fa-pg-story__item is-reversed">

            <div class="fa-pg-story__media">

                <div class="fa-pg-story__img fa-featured-gear__image"
                     style="background-image: url('{{ asset('images/legacy/product-043.jpg') }}');">

                    <div class="fa-featured-gear__frame">

                        <span class="fa-featured-gear__micro">
                            FA SPORTS / FOOTWEAR 02
                        </span>

                        <div class="fa-featured-gear__mark">
                            FA
                        </div>

                        <span class="fa-featured-gear__vertical">
                            SPEED / GRIP / CONTROL
                        </span>

                        <div class="fa-featured-gear__corner fa-featured-gear__corner--tl"></div>
                        <div class="fa-featured-gear__corner fa-featured-gear__corner--tr"></div>
                        <div class="fa-featured-gear__corner fa-featured-gear__corner--bl"></div>
                        <div class="fa-featured-gear__corner fa-featured-gear__corner--br"></div>

                        <div class="fa-featured-gear__number">
                            02
                        </div>

                    </div>

                </div>

            </div>

            <div class="fa-pg-story__info">

                <span class="fa-gear__series">
                    FOOTWEAR
                </span>

                <h3 class="fa-gear__name">
                    FA CARBON RUN
                </h3>

                <ul class="fa-gear__specs">
                    <li>LIGHTWEIGHT CONSTRUCTION</li>
                    <li>RESPONSIVE FOAM</li>
                    <li>ATHLETIC PERFORMANCE</li>
                </ul>

                <div class="fa-pg-story__actions">
                    <a href="#" class="fa-btn fa-btn--outline fa-btn--sm">
                        EXPLORE GEAR
                    </a>
                </div>

            </div>

        </article>


        {{-- FEATURE 03 --}}
        <article class="fa-pg-story__item">

            <div class="fa-pg-story__media">

                <div class="fa-pg-story__img fa-featured-gear__image"
                     style="background-image: url('{{ asset('images/legacy/product-055.jpg') }}');">

                    <div class="fa-featured-gear__frame">

                        <span class="fa-featured-gear__micro">
                            FA SPORTS / PROTECTION 03
                        </span>

                        <div class="fa-featured-gear__mark">
                            FA
                        </div>

                        <span class="fa-featured-gear__vertical">
                            CONTROL / GRIP / CONFIDENCE
                        </span>

                        <div class="fa-featured-gear__corner fa-featured-gear__corner--tl"></div>
                        <div class="fa-featured-gear__corner fa-featured-gear__corner--tr"></div>
                        <div class="fa-featured-gear__corner fa-featured-gear__corner--bl"></div>
                        <div class="fa-featured-gear__corner fa-featured-gear__corner--br"></div>

                        <div class="fa-featured-gear__number">
                            03
                        </div>

                    </div>

                </div>

            </div>

            <div class="fa-pg-story__info">

                <span class="fa-gear__series">
                    GLOVES
                </span>

                <h3 class="fa-gear__name">
                    FA GRIP GLOVE EFFECT
                </h3>

                <ul class="fa-gear__specs">
                    <li>HIGH GRIP PALM</li>
                    <li>SECURE WRIST FIT</li>
                    <li>GAME READY CONTROL</li>
                </ul>

                <div class="fa-pg-story__actions">
                    <a href="#" class="fa-btn fa-btn--outline fa-btn--sm">
                        EXPLORE GEAR
                    </a>
                </div>

            </div>

        </article>


        {{-- FEATURE 04 --}}
        <article class="fa-pg-story__item is-reversed">

            <div class="fa-pg-story__media">

                <div class="fa-pg-story__img fa-featured-gear__image"
                     style="background-image: url('{{ asset('images/legacy/uniform5.jpg') }}');">

                    <div class="fa-featured-gear__frame">

                        <span class="fa-featured-gear__micro">
                            FA SPORTS / TRAINING 04
                        </span>

                        <div class="fa-featured-gear__mark">
                            FA
                        </div>

                        <span class="fa-featured-gear__vertical">
                            TRAIN / MOVE / PERFORM
                        </span>

                        <div class="fa-featured-gear__corner fa-featured-gear__corner--tl"></div>
                        <div class="fa-featured-gear__corner fa-featured-gear__corner--tr"></div>
                        <div class="fa-featured-gear__corner fa-featured-gear__corner--bl"></div>
                        <div class="fa-featured-gear__corner fa-featured-gear__corner--br"></div>

                        <div class="fa-featured-gear__number">
                            04
                        </div>

                    </div>

                </div>

            </div>

            <div class="fa-pg-story__info">

                <span class="fa-gear__series">
                    TRAINING SYSTEM
                </span>

                <h3 class="fa-gear__name">
                    FA SQUAD TRAINING TRACKSUIT
                </h3>

                <ul class="fa-gear__specs">
                    <li>TEAM TRAINING FIT</li>
                    <li>LIGHTWEIGHT LAYERING</li>
                    <li>ALL SESSION COMFORT</li>
                </ul>

                <div class="fa-pg-story__actions">
                    <a href="#" class="fa-btn fa-btn--outline fa-btn--sm">
                        EXPLORE GEAR
                    </a>
                </div>

            </div>

        </article>

    </div>

</section>

{{-- ============ PERFORMANCE LAB — WHITE EDITORIAL ============ --}}
<section class="fa-performance-lab">

    <div class="fa-performance-lab__top">

        <div class="fa-performance-lab__index">
            04 / PERFORMANCE LAB
        </div>

        <div class="fa-performance-lab__intro">
            <span class="fa-performance-lab__eyebrow">
                ENGINEERED AROUND THE ATHLETE
            </span>

            <h2 class="fa-performance-lab__headline">
                PERFORMANCE
                <span>IS IN THE DETAILS.</span>
            </h2>
        </div>

    </div>


    <div class="fa-performance-lab__main">

        {{-- IMAGE PANEL --}}
        <div class="fa-performance-lab__visual">

            <img
                src="{{ asset('images/legacy/product-023.jpg') }}"
                alt="FA SPORTS performance gear"
                loading="lazy"
            >

            <div class="fa-performance-lab__visual-overlay">

                <span>FA SPORTS</span>

                <strong>
                    360°
                </strong>

                <small>
                    ATHLETE<br>
                    MOVEMENT
                </small>

            </div>

            <div class="fa-performance-lab__visual-line"></div>

        </div>


        {{-- CONTENT --}}
        <div class="fa-performance-lab__content">

            <span class="fa-performance-lab__number">
                01
            </span>

            <h3>
                BUILT AROUND
                <em>HOW YOU MOVE.</em>
            </h3>

            <p>
                Every FA SPORTS system is developed around movement,
                balance, breathability and control — because performance
                starts long before the whistle.
            </p>

            <div class="fa-performance-lab__metrics">

                <div class="fa-performance-lab__metric">
                    <strong>92%</strong>
                    <span>BREATHABILITY</span>
                </div>

                <div class="fa-performance-lab__metric">
                    <strong>0.3s</strong>
                    <span>MOISTURE CONTROL</span>
                </div>

                <div class="fa-performance-lab__metric">
                    <strong>118g</strong>
                    <span>LIGHTWEIGHT</span>
                </div>

                <div class="fa-performance-lab__metric">
                    <strong>4-WAY</strong>
                    <span>FLEXIBILITY</span>
                </div>

            </div>

            <a href="#collection" class="fa-performance-lab__link">
                EXPLORE THE PERFORMANCE SYSTEM
                <span>↗</span>
            </a>

        </div>

    </div>


    {{-- BOTTOM STATEMENT --}}
    <div class="fa-performance-lab__bottom">

        <span>
            FA SPORTS / PERFORMANCE SYSTEM
        </span>

        <h4>
            LESS WEIGHT.
            <span>MORE MOVEMENT.</span>
        </h4>

        <span>
            ENGINEERED FOR THE MOMENT THAT MATTERS.
        </span>

    </div>

</section>



{{-- ============ THE COLLECTION — WHITE EDITORIAL ============ --}}
<section class="fa-collection-white" id="collection">

    {{-- HEADER --}}
    <div class="fa-collection-white__header">

        <div class="fa-collection-white__eyebrow">
            FA SPORTS / EQUIPMENT INDEX
        </div>

        <div class="fa-collection-white__heading">

            <span class="fa-collection-white__index">
                05
            </span>

            <h2>
                THE
                <span>COLLECTION.</span>
            </h2>

        </div>

        <p class="fa-collection-white__intro">
            PERFORMANCE EQUIPMENT DESIGNED FOR EVERY SESSION,
            EVERY POSITION AND EVERY MOMENT BEFORE THE GAME.
        </p>

    </div>
{{-- COLLECTION GRID --}}
<div class="fa-collection-white__grid fa-uniform-collection">

    {{-- 01 — MATCH KIT --}}
    <article class="fa-uniform-card fa-uniform-card--large">

        <div class="fa-uniform-card__visual">
            <img
                src="{{ asset('images/legacy/uniform18.jpg') }}"
                alt="FA SPORTS Match Kit"
                loading="lazy"
            >

            <div class="fa-uniform-card__shade"></div>

            <div class="fa-uniform-card__frame">
                <span class="fa-uniform-card__micro">
                    FA SPORTS / MATCH SYSTEM
                </span>

                <strong>01</strong>

                <span class="fa-uniform-card__vertical">
                    MATCH / IDENTITY / PERFORMANCE
                </span>

                <span class="fa-uniform-card__line"></span>
            </div>
        </div>

        <div class="fa-uniform-card__info">
            <span>MATCH KIT / 01</span>

            <h3>
                FA <em>MATCH SYSTEM</em>
            </h3>

            <p>
                Performance-ready team uniforms built around movement,
                identity and match-day presence.
            </p>

            <a href="{{ route('gear-index') }}" class="fa-uniform-card__link">
                EXPLORE KIT <b>↗</b>
            </a>
        </div>

    </article>


    {{-- 02 — TEAM JERSEY --}}
    <article class="fa-uniform-card">

        <div class="fa-uniform-card__visual">
            <img
                src="{{ asset('images/legacy/uniform19.jpg') }}"
                alt="FA SPORTS Team Jersey"
                loading="lazy"
            >

            <div class="fa-uniform-card__frame">
                <span class="fa-uniform-card__micro">
                    TEAMWEAR / 02
                </span>

                <strong>02</strong>

                <span class="fa-uniform-card__vertical">
                    FIT / MOTION / IDENTITY
                </span>
            </div>
        </div>

        <div class="fa-uniform-card__info">
            <span>TEAMWEAR</span>

            <h3>
                FA <em>TEAM JERSEY</em>
            </h3>

            <p>
                Custom jersey construction designed for consistent
                team identity and active movement.
            </p>

            <a href="{{ route('gear-index') }}" class="fa-uniform-card__link">
                EXPLORE KIT <b>↗</b>
            </a>
        </div>

    </article>


    {{-- 03 — FULL UNIFORM --}}
    <article class="fa-uniform-card">

        <div class="fa-uniform-card__visual">
            <img
                src="{{ asset('images/legacy/uniform21.jpg') }}"
                alt="FA SPORTS Full Team Uniform"
                loading="lazy"
            >

            <div class="fa-uniform-card__frame">
                <span class="fa-uniform-card__micro">
                    COMPLETE SYSTEM / 03
                </span>

                <strong>03</strong>

                <span class="fa-uniform-card__vertical">
                    JERSEY / SHORT / SOCK
                </span>
            </div>
        </div>

        <div class="fa-uniform-card__info">
            <span>COMPLETE KIT</span>

            <h3>
                FA <em>FULL UNIFORM</em>
            </h3>

            <p>
                A complete coordinated system for teams that want
                one consistent visual and performance language.
            </p>

            <a href="{{ route('gear-index') }}" class="fa-uniform-card__link">
                EXPLORE KIT <b>↗</b>
            </a>
        </div>

    </article>


    {{-- 04 — TRAINING KIT --}}
    <article class="fa-uniform-card">

        <div class="fa-uniform-card__visual">
            <img
                src="{{ asset('images/legacy/uniform15.jpg') }}"
                alt="FA SPORTS Training Uniform"
                loading="lazy"
            >

            <div class="fa-uniform-card__frame">
                <span class="fa-uniform-card__micro">
                    TRAINING SYSTEM / 04
                </span>

                <strong>04</strong>

                <span class="fa-uniform-card__vertical">
                    TRAIN / MOVE / PERFORM
                </span>
            </div>
        </div>

        <div class="fa-uniform-card__info">
            <span>TRAINING WEAR</span>

            <h3>
                FA <em>TRAINING KIT</em>
            </h3>

            <p>
                Lightweight teamwear designed for training sessions,
                warm-ups and everyday preparation.
            </p>

            <a href="{{ route('gear-index') }}" class="fa-uniform-card__link">
                EXPLORE KIT <b>↗</b>
            </a>
        </div>

    </article>


    {{-- 05 — CRICKET / SPORT KIT --}}
    <article class="fa-uniform-card">

        <div class="fa-uniform-card__visual">
            <img
                src="{{ asset('images/legacy/uniform22.jpg') }}"
                alt="FA SPORTS Performance Uniform"
                loading="lazy"
            >

            <div class="fa-uniform-card__frame">
                <span class="fa-uniform-card__micro">
                    PERFORMANCE / 05
                </span>

                <strong>05</strong>

                <span class="fa-uniform-card__vertical">
                    CONTROL / COMFORT / SPEED
                </span>
            </div>
        </div>

        <div class="fa-uniform-card__info">
            <span>PERFORMANCE KIT</span>

            <h3>
                FA <em>PERFORMANCE SET</em>
            </h3>

            <p>
                Technical uniform construction for demanding
                sessions and competitive environments.
            </p>

            <a href="{{ route('gear-index') }}" class="fa-uniform-card__link">
                EXPLORE KIT <b>↗</b>
            </a>
        </div>

    </article>


    {{-- 06 — CUSTOM TEAM KIT --}}
    <article class="fa-uniform-card fa-uniform-card--wide">

        <div class="fa-uniform-card__visual">
            <img
                src="{{ asset('images/legacy/uniform23.jpg') }}"
                alt="FA SPORTS Custom Team Kit"
                loading="lazy"
            >

            <div class="fa-uniform-card__wide-overlay">

                <div>
                    <span>FA SPORTS / CUSTOM TEAM SYSTEM</span>

                    <strong>
                        BUILT FOR<br>
                        YOUR<br>
                        IDENTITY.
                    </strong>
                </div>

                <b>06</b>

            </div>
        </div>

        <div class="fa-uniform-card__info">
            <span>CUSTOM TEAMWEAR</span>

            <h3>
                FA <em>CUSTOM TEAM KIT</em>
            </h3>

            <p>
                Custom colours, graphics and team identity brought
                together into one complete uniform system.
            </p>

            <a href="{{ route('gear-index') }}" class="fa-uniform-card__link">
                EXPLORE KIT <b>↗</b>
            </a>
        </div>

    </article>


    {{-- 07 — CLUB UNIFORM --}}
    <article class="fa-uniform-card fa-uniform-card--large">

        <div class="fa-uniform-card__visual">
            <img
                src="{{ asset('images/legacy/uniform16.jpg') }}"
                alt="FA SPORTS Club Uniform"
                loading="lazy"
            >

            <div class="fa-uniform-card__frame">
                <span class="fa-uniform-card__micro">
                    CLUB SYSTEM / 07
                </span>

                <strong>07</strong>

                <span class="fa-uniform-card__vertical">
                    CLUB / TEAM / IDENTITY
                </span>

                <span class="fa-uniform-card__line"></span>
            </div>
        </div>

        <div class="fa-uniform-card__info">
            <span>CLUB UNIFORM</span>

            <h3>
                FA <em>CLUB SYSTEM</em>
            </h3>

            <p>
                A complete visual system for clubs, academies and
                teams that want a unified presence on and off the field.
            </p>

            <a href="{{ route('gear-index') }}" class="fa-uniform-card__link">
                EXPLORE KIT <b>↗</b>
            </a>
        </div>

</div>


        </article>

                    


    {{-- COLLECTION FOOTER --}}
    <div class="fa-collection-white__footer">

        <span>
            13 SYSTEMS / FA SPORTS
        </span>

        <strong>
            EQUIPMENT FOR THE
            <em>MOMENT BEFORE.</em>
        </strong>

        <span>
            PERFORMANCE INDEX / 2026
        </span>

    </div>

</section>

{{-- =========================================================
     PERFORMANCE NOTES — WHITE EDITORIAL CARDS
========================================================= --}}
<section class="fa-performance-notes" id="performance-notes">

    <div class="fa-performance-notes__header">

        <div class="fa-performance-notes__index">
            07 / PERFORMANCE NOTES
        </div>

        <div class="fa-performance-notes__intro">
            <span class="fa-performance-notes__eyebrow">
                KNOW THE PERFORMANCE
            </span>

            <h2>
                PERFORMANCE
                <span>NOTES</span>
            </h2>

            <p>
                The details behind better movement, smarter materials
                and equipment engineered for the demands of the game.
            </p>
        </div>

    </div>


    <div class="fa-performance-notes__grid">

        {{-- CARD 01 --}}
        <article class="fa-performance-note-card">

            <div class="fa-performance-note-card__top">
                <span>01</span>
                <span>FABRIC / 001</span>
            </div>

            <div class="fa-performance-note-card__number">
                01
            </div>

            <div class="fa-performance-note-card__content">

                <span class="fa-performance-note-card__label">
                    MATERIAL INTELLIGENCE
                </span>

                <h3>
                    FABRIC
                    <em>INTELLIGENCE</em>
                </h3>

                <p>
                    Moisture management, breathability and lightweight
                    construction designed to keep athletes comfortable
                    when intensity rises.
                </p>

                <a href="{{ route('craft') }}" class="fa-performance-note-card__link">
                    READ NOTE
                    <span>↗</span>
                </a>

            </div>

        </article>


        {{-- CARD 02 --}}
        <article class="fa-performance-note-card">

            <div class="fa-performance-note-card__top">
                <span>02</span>
                <span>MOTION / 002</span>
            </div>

            <div class="fa-performance-note-card__number">
                02
            </div>

            <div class="fa-performance-note-card__content">

                <span class="fa-performance-note-card__label">
                    MOVEMENT SYSTEM
                </span>

                <h3>
                    MOTION
                    <em>ENGINEERING</em>
                </h3>

                <p>
                    Four-way flexibility and athlete-focused construction
                    allow every piece to move naturally with the body.
                </p>

                <a href="{{ route('craft') }}" class="fa-performance-note-card__link">
                    READ NOTE
                    <span>↗</span>
                </a>

            </div>

        </article>


        {{-- CARD 03 --}}
        <article class="fa-performance-note-card">

            <div class="fa-performance-note-card__top">
                <span>03</span>
                <span>WEIGHT / 003</span>
            </div>

            <div class="fa-performance-note-card__number">
                03
            </div>

            <div class="fa-performance-note-card__content">

                <span class="fa-performance-note-card__label">
                    LIGHTWEIGHT SYSTEM
                </span>

                <h3>
                    WEIGHT
                    <em>MATTERS</em>
                </h3>

                <p>
                    Every unnecessary gram is removed to create lighter,
                    faster equipment without compromising durability.
                </p>

                <a href="{{ route('craft') }}" class="fa-performance-note-card__link">
                    READ NOTE
                    <span>↗</span>
                </a>

            </div>

        </article>


        {{-- CARD 04 --}}
        <article class="fa-performance-note-card">

            <div class="fa-performance-note-card__top">
                <span>04</span>
                <span>TEAM / 004</span>
            </div>

            <div class="fa-performance-note-card__number">
                04
            </div>

            <div class="fa-performance-note-card__content">

                <span class="fa-performance-note-card__label">
                    TEAM PERFORMANCE
                </span>

                <h3>
                    TEAM
                    <em>PERFORMANCE</em>
                </h3>

                <p>
                    Consistent fit, function and identity across the
                    entire squad, from training ground to match day.
                </p>

                <a href="{{ route('craft') }}" class="fa-performance-note-card__link">
                    READ NOTE
                    <span>↗</span>
                </a>

            </div>

        </article>

    </div>


    <div class="fa-performance-notes__footer">

        <span>
            FA SPORTS / PERFORMANCE SYSTEM
        </span>

        <strong>
            READ.
            <span>UNDERSTAND.</span>
            PERFORM.
        </strong>

        <span>
            04 NOTES
        </span>

    </div>

</section>

{{-- =========================================================
     VIDEO LOOKBOOK — CINEMATIC EDITORIAL
========================================================= --}}
<section class="fa-lookbook" id="lookbook">

    <div class="fa-lookbook__header">

        <div class="fa-lookbook__index">
            08 / VISUAL ARCHIVE
        </div>

        <div class="fa-lookbook__title-wrap">

            <span class="fa-lookbook__eyebrow">
                FA SPORTS / VISUAL LOOKBOOK
            </span>

            <h2 class="fa-lookbook__title">
                VIDEO
                <span>LOOKBOOK</span>
            </h2>

            <p class="fa-lookbook__intro">
                Before the whistle. Before the first move.
                A visual study of preparation, movement and performance.
            </p>

        </div>

    </div>


    {{-- MAIN VISUAL --}}
    <div class="fa-lookbook__main">

        <div class="fa-lookbook__visual">

            <video
                class="fa-lookbook__video"
                autoplay
                muted
                loop
                playsinline
                poster="{{ asset('images/hero/hero-poster.jpg') }}"
            >
                <source
                    src="{{ asset('videos/hero/hero-loop.mp4') }}"
                    type="video/mp4"
                >
            </video>

            <div class="fa-lookbook__shade"></div>

            <div class="fa-lookbook__frame">

                <div class="fa-lookbook__frame-top">
                    <span>FA SPORTS</span>
                    <span>LOOKBOOK / 001</span>
                </div>

                <div class="fa-lookbook__play">
                    <span>PLAY</span>
                    <i>↗</i>
                </div>

                <div class="fa-lookbook__frame-bottom">
                    <span>THE GAME STARTS BEFORE THE GAME</span>
                    <span>2026 / PERFORMANCE SYSTEM</span>
                </div>

            </div>

            <div class="fa-lookbook__big-number">
                01
            </div>

        </div>


        {{-- SIDE INFO --}}
        <aside class="fa-lookbook__side">

            <div class="fa-lookbook__side-top">
                <span>FILM / 001</span>
                <span>00:48</span>
            </div>

            <div class="fa-lookbook__side-content">

                <span class="fa-lookbook__label">
                    THE PREPARATION
                </span>

                <h3>
                    BEFORE
                    <em>THE WHISTLE</em>
                </h3>

                <p>
                    Every performance begins before the game.
                    Equipment, movement and focus come together
                    long before the first whistle.
                </p>

            </div>

            <div class="fa-lookbook__chapters">

                <div class="fa-lookbook__chapter is-active">
                    <span>01</span>
                    <strong>PREPARE</strong>
                    <small>THE MOMENT BEFORE</small>
                </div>

                <div class="fa-lookbook__chapter">
                    <span>02</span>
                    <strong>MOVE</strong>
                    <small>INTO THE MOTION</small>
                </div>

                <div class="fa-lookbook__chapter">
                    <span>03</span>
                    <strong>PERFORM</strong>
                    <small>READY TO PLAY</small>
                </div>

            </div>

        </aside>

    </div>


    {{-- BOTTOM STATEMENT --}}
    <div class="fa-lookbook__footer">

        <span>
            FA SPORTS / MOVEMENT ARCHIVE
        </span>

        <strong>
            PREPARE.
            <span>MOVE.</span>
            PERFORM.
        </strong>

        <span>
            01 / 03
        </span>

    </div>

</section>

{{-- =========================================================
     THE CRAFT — FA SPORTS MANUFACTURING
========================================================= --}}
<section class="fa-craft" id="craft">

    <div class="fa-craft__header">

        <div class="fa-craft__index">
            09 / THE CRAFT
        </div>

        <div class="fa-craft__intro">

            <span class="fa-craft__eyebrow">
                BUILT BY HAND / ENGINEERED TO PERFORM
            </span>

            <h2>
                THE
                <span>CRAFT</span>
            </h2>

            <p>
                Performance starts with how something is made.
                From material selection to final inspection,
                every FA SPORTS piece passes through a disciplined
                process built around precision.
            </p>

        </div>

    </div>


    {{-- =====================================================
         CRAFT PROCESS CARDS
    ====================================================== --}}
    <div class="fa-craft__process">

        {{-- CARD 01 --}}
        <article class="fa-craft-card">

            <div class="fa-craft-card__top">
                <span>01</span>
                <span>MATERIAL</span>
            </div>

            <div class="fa-craft-card__visual">

                <span class="fa-craft-card__technical">
                    FABRIC
                </span>

                <span class="fa-craft-card__line line-one"></span>
                <span class="fa-craft-card__line line-two"></span>

                <span class="fa-craft-card__symbol">
                    01
                </span>

                <span class="fa-craft-card__spec">
                    WEIGHT / FLEX / BREATHABILITY
                </span>

            </div>

            <div class="fa-craft-card__content">

                <span>FIRST LAYER</span>

                <h3>
                    SELECT
                    <em>THE MATERIAL</em>
                </h3>

                <p>
                    Every performance begins with the right material.
                    We select fabrics for breathability, durability,
                    flexibility and weight.
                </p>

            </div>

        </article>


        {{-- CARD 02 --}}
        <article class="fa-craft-card">

            <div class="fa-craft-card__top">
                <span>02</span>
                <span>CONSTRUCTION</span>
            </div>

            <div class="fa-craft-card__visual">

                <span class="fa-craft-card__technical">
                    BUILD
                </span>

                <span class="fa-craft-card__grid"></span>

                <span class="fa-craft-card__symbol">
                    02
                </span>

                <span class="fa-craft-card__spec">
                    CUT / SEAM / STITCH
                </span>

            </div>

            <div class="fa-craft-card__content">

                <span>SECOND LAYER</span>

                <h3>
                    BUILD
                    <em>THE FORM</em>
                </h3>

                <p>
                    Every panel, seam and stitch has a purpose.
                    Our construction process balances athlete movement,
                    comfort and structural strength.
                </p>

            </div>

        </article>


        {{-- CARD 03 --}}
        <article class="fa-craft-card">

            <div class="fa-craft-card__top">
                <span>03</span>
                <span>FINISHING</span>
            </div>

            <div class="fa-craft-card__visual">

                <span class="fa-craft-card__technical">
                    DETAIL
                </span>

                <span class="fa-craft-card__cross"></span>

                <span class="fa-craft-card__symbol">
                    03
                </span>

                <span class="fa-craft-card__spec">
                    PRECISION / DETAIL / FINISH
                </span>

            </div>

            <div class="fa-craft-card__content">

                <span>FINAL LAYER</span>

                <h3>
                    PERFECT
                    <em>THE DETAIL</em>
                </h3>

                <p>
                    From precise stitching to clean finishing,
                    every detail is checked to deliver a professional
                    product that looks as good as it performs.
                </p>

            </div>

        </article>


        {{-- CARD 04 --}}
        <article class="fa-craft-card">

            <div class="fa-craft-card__top">
                <span>04</span>
                <span>QUALITY CONTROL</span>
            </div>

            <div class="fa-craft-card__visual">

                <span class="fa-craft-card__technical">
                    CONTROL
                </span>

                <span class="fa-craft-card__circle"></span>

                <span class="fa-craft-card__symbol">
                    04
                </span>

                <span class="fa-craft-card__spec">
                    FIT / FUNCTION / PERFORMANCE
                </span>

            </div>

            <div class="fa-craft-card__content">

                <span>FINAL CHECK</span>

                <h3>
                    READY
                    <em>FOR PLAY</em>
                </h3>

                <p>
                    Before it reaches the athlete, every piece goes
                    through a final quality check for consistency,
                    fit, finish and performance.
                </p>

            </div>

        </article>

    </div>


    {{-- =====================================================
         CRAFT STATEMENT
    ====================================================== --}}
    <div class="fa-craft__statement">

        <div class="fa-craft__statement-number">
            2004
        </div>

        <div class="fa-craft__statement-text">

            <span>
                FROM THE WORKSHOP
            </span>

            <h3>
                MADE FOR
                <em>THE MOMENT</em>
            </h3>

            <p>
                We don't build equipment simply to look ready.
                We build it to perform when the game demands more.
            </p>

        </div>

        <div class="fa-craft__statement-mark">
            FA<br>
            <span>SPORTS</span>
        </div>

    </div>


    {{-- =====================================================
         FOOTER
    ====================================================== --}}
    <div class="fa-craft__footer">

        <span>
            FA SPORTS / MANUFACTURING SYSTEM
        </span>

        <strong>
            MADE WITH
            <span>PURPOSE.</span>
        </strong>

        <span>
            THE GAME STARTS BEFORE THE GAME
        </span>

    </div>

</section>

{{-- ============ QUICK VIEW MODAL ============ --}}
<div class="fa-pg-modal" id="quickViewModal" aria-hidden="true">
    <div class="fa-pg-modal__backdrop" id="quickViewBackdrop"></div>
    <div class="fa-pg-modal__panel" role="dialog" aria-modal="true" aria-label="Quick view">
        <button class="fa-pg-modal__close" id="quickViewClose" aria-label="Close quick view">&times;</button>
        <div class="fa-pg-modal__gallery"></div>
        <div class="fa-pg-modal__body">
            <span class="fa-pg-product-card__cat" id="qvCategory"></span>
            <h3 class="fa-pg-modal__name" id="qvName"></h3>
            <p class="fa-pg-modal__specs" id="qvSpecs"></p>
            <div class="fa-pg-modal__row">
                <span id="qvPrice" class="fa-pg-story__price"></span>
            </div>
            <div class="fa-pg-modal__row">
                <label>COLOUR</label>
                <span id="qvColors"></span>
            </div>
            <div class="fa-pg-modal__row">
                <label>SIZE</label>
                <span id="qvSizes"></span>
            </div>
            <div class="fa-pg-modal__row">
                <label>QUANTITY</label>
                <input type="number" min="1" value="1" style="width:60px;">
            </div>
            <div class="fa-pg-modal__actions">
                <a href="#" class="fa-btn fa-btn--outline fa-btn--sm">ADD TO BAG</a>
                <a href="#" class="fa-btn fa-btn--red fa-btn--sm">ADD TO KIT</a>
                <a href="#" class="fa-btn fa-btn--outline fa-btn--sm">VIEW FULL PRODUCT</a>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer')
    @include('partials.performance-gear-footer')
@endsection

@push('scripts')
    <script src="{{ asset('js/performance-gear.js') }}" defer></script>
@endpush
