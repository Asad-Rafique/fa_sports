
@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/performance-gear.css') }}">
    <link rel="stylesheet" href="{{ asset('css/disciplines.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gear-index.css') }}">
@endpush

@section('content')

@php
    // Original line-art icon per category/product-type
    $categoryIcon = [
        'Match Kits'    => 'icon-jersey',
        'Apparel'       => 'icon-jersey',
        'Footwear'      => 'icon-boot',
        'Gloves'        => 'icon-glove',
        'Bags'          => 'icon-bag',
        'Protection'    => 'icon-shield',
        'Training Gear' => 'icon-dumbbell',
        'Accessories'   => 'icon-cap',
    ];

    $iconFor = fn ($category) => $categoryIcon[$category] ?? 'icon-swatch';
@endphp


{{-- =========================================================
    FA SPORTS — GEAR INDEX
    FINAL HERO
    WHITE / RED / BLACK EDITORIAL
========================================================= --}}

<section class="fa-gear-final-hero" id="gi-hero">

    <div class="fa-gear-final-wall">

        <div class="fa-gear-final-wall__brand">
            FA
        </div>

        <div class="fa-gear-final-wall__red-line"></div>

        <div class="fa-gear-final-wall__text">
            THE COMPLETE FA SPORTS
            PERFORMANCE SYSTEM.
        </div>

        <div class="fa-gear-final-wall__number">
            01 / 06
        </div>

    </div>


    <div class="fa-gear-final-content">

        <div class="fa-gear-final-eyebrow">
            <span></span>
            FA SPORTS / GEAR INDEX
        </div>

        <h1 class="fa-gear-final-title">
            <span>THE</span>
            <span class="is-red">GEAR</span>
            <span>INDEX</span>
        </h1>

        <p class="fa-gear-final-description">
            The complete performance system — from apparel
            and footwear to gloves, bags and protection.
        </p>

        <div class="fa-gear-final-actions">

            <a href="#category-nav" class="fa-gear-final-button">
                <span>EXPLORE THE INDEX</span>
                <strong>↗</strong>
            </a>

            <span class="fa-gear-final-caption">
                ENGINEERED BEFORE THE GAME
            </span>

        </div>

    </div>


    <div class="fa-gear-final-stage">

        <div class="fa-gear-final-grid"></div>

        <div class="fa-gear-final-ring fa-gear-final-ring--large"></div>
        <div class="fa-gear-final-ring fa-gear-final-ring--small"></div>

        <div class="fa-gear-final-center">
            <span></span>
        </div>

        <div class="fa-gear-final-object fa-gear-final-object--jersey">

            <small>01</small>

            <svg viewBox="0 0 100 100">
                <use href="#icon-jersey"></use>
            </svg>

            <b>APPAREL</b>

        </div>

        <div class="fa-gear-final-object fa-gear-final-object--boot">

            <small>02</small>

            <svg viewBox="0 0 100 100">
                <use href="#icon-boot"></use>
            </svg>

            <b>FOOTWEAR</b>

        </div>

        <div class="fa-gear-final-object fa-gear-final-object--glove">

            <small>03</small>

            <svg viewBox="0 0 100 100">
                <use href="#icon-glove"></use>
            </svg>

            <b>GLOVES</b>

        </div>

        <div class="fa-gear-final-object fa-gear-final-object--bag">

            <small>04</small>

            <svg viewBox="0 0 100 100">
                <use href="#icon-bag"></use>
            </svg>

            <b>BAGS</b>

        </div>

        <div class="fa-gear-final-accent"></div>

    </div>


    <div class="fa-gear-final-meta">
        <span>FA / 2004</span>
        <i></i>
        <span>PERFORMANCE SYSTEM</span>
    </div>


    <div class="fa-gear-final-bottom">

        <span>THE GAME STARTS BEFORE THE GAME.</span>

        <div></div>

        <span>SCROLL TO EXPLORE ↓</span>

    </div>

</section>



{{-- =========================================================
    FA SPORTS — GEAR WALL
========================================================= --}}

<section class="fa-gi-gear-wall" id="category-nav">

    <div class="fa-gi-gear-wall__header">

        <div class="fa-gi-gear-wall__title">

            <span>FA SPORTS / GEAR INDEX</span>

            <h2>
                BUILT FOR
                <em>THE GAME.</em>
            </h2>

        </div>

        <div class="fa-gi-gear-wall__intro">

            <span>01 / PERFORMANCE SYSTEM</span>

            <p>
                Explore the essential equipment that completes
                the FA SPORTS performance system.
            </p>

        </div>

    </div>


    <div class="fa-gi-gear-wall__grid">

        {{-- FEATURE — APPAREL --}}
        <article class="fa-gi-gear-wall__card fa-gi-gear-wall__card--feature">

            <div class="fa-gi-gear-wall__image">

                <img
                    src="{{ asset('images/legacy/uniform5.jpg') }}"
                    alt="FA Sports Performance Apparel"
                    loading="eager"
                >

                <div class="fa-gi-gear-wall__overlay"></div>

                <span class="fa-gi-gear-wall__number">01</span>

                <span class="fa-gi-gear-wall__code">
                    FA / APPAREL
                </span>

                <div class="fa-gi-gear-wall__vertical">
                    PERFORMANCE SYSTEM
                </div>

                <div class="fa-gi-gear-wall__label">

                    <small>PERFORMANCE / 01</small>

                    <h3>
                        READY FOR
                        <em>PERFORM.</em>
                    </h3>

                </div>

                <div class="fa-gi-gear-wall__corner"></div>

            </div>

            <div class="fa-gi-gear-wall__caption">

                <div>
                    <span>APPAREL</span>
                    <strong>01</strong>
                </div>

                <p>
                    Performance apparel designed around
                    movement, identity and match-day demands.
                </p>

                <b>↗</b>

            </div>

        </article>


        {{-- FOOTWEAR --}}
        <article class="fa-gi-gear-wall__card fa-gi-gear-wall__card--small">

            <div class="fa-gi-gear-wall__image">

                <img
                    src="{{ asset('images/legacy/product-049.jpg') }}"
                    alt="FA Sports Footwear"
                    loading="lazy"
                >

                <div class="fa-gi-gear-wall__overlay"></div>

                <span class="fa-gi-gear-wall__number">02</span>

                <span class="fa-gi-gear-wall__code">
                    FA / FOOTWEAR
                </span>

                <div class="fa-gi-gear-wall__label">

                    <small>FOOTWEAR / 02</small>

                    <h3>
                        MOVE
                        <em>FAST.</em>
                    </h3>

                </div>

            </div>

            <div class="fa-gi-gear-wall__caption">

                <span>FOOTWEAR</span>

                <p>
                    Grip, traction and controlled movement.
                </p>

                <b>↗</b>

            </div>

        </article>


        {{-- GLOVES --}}
        <article class="fa-gi-gear-wall__card fa-gi-gear-wall__card--small">

            <div class="fa-gi-gear-wall__image">

                <img
                    src="{{ asset('images/legacy/product-063.jpg') }}"
                    alt="FA Sports Gloves"
                    loading="lazy"
                >

                <div class="fa-gi-gear-wall__overlay"></div>

                <span class="fa-gi-gear-wall__number">03</span>

                <span class="fa-gi-gear-wall__code">
                    FA / GLOVES
                </span>

                <div class="fa-gi-gear-wall__label">

                    <small>GLOVE SYSTEM / 03</small>

                    <h3>
                        HOLD
                        <em>STRONG.</em>
                    </h3>

                </div>

            </div>

            <div class="fa-gi-gear-wall__caption">

                <span>GLOVES</span>

                <p>
                    Grip and protection under pressure.
                </p>

                <b>↗</b>

            </div>

        </article>


        {{-- BAGS --}}
        <article class="fa-gi-gear-wall__card fa-gi-gear-wall__card--small">

            <div class="fa-gi-gear-wall__image">

                <img
                    src="{{ asset('images/legacy/product-077.jpg') }}"
                    alt="FA Sports Equipment Bags"
                    loading="lazy"
                >

                <div class="fa-gi-gear-wall__overlay"></div>

                <span class="fa-gi-gear-wall__number">04</span>

                <span class="fa-gi-gear-wall__code">
                    FA / BAGS
                </span>

                <div class="fa-gi-gear-wall__label">

                    <small>CARRY SYSTEM / 04</small>

                    <h3>
                        CARRY
                        <em>MORE.</em>
                    </h3>

                </div>

            </div>

            <div class="fa-gi-gear-wall__caption">

                <span>BAGS</span>

                <p>
                    Built to carry the team and its essentials.
                </p>

                <b>↗</b>

            </div>

        </article>


        {{-- PROTECTION --}}
        <article class="fa-gi-gear-wall__card fa-gi-gear-wall__card--small">

            <div class="fa-gi-gear-wall__image">

                <img
                    src="{{ asset('images/legacy/product-081.jpg') }}"
                    alt="FA Sports Protection Equipment"
                    loading="lazy"
                >

                <div class="fa-gi-gear-wall__overlay"></div>

                <span class="fa-gi-gear-wall__number">05</span>

                <span class="fa-gi-gear-wall__code">
                    FA / PROTECTION
                </span>

                <div class="fa-gi-gear-wall__label">

                    <small>DEFENSE SYSTEM / 05</small>

                    <h3>
                        PROTECT
                        <em>THE PLAY.</em>
                    </h3>

                </div>

            </div>

            <div class="fa-gi-gear-wall__caption">

                <span>PROTECTION</span>

                <p>
                    Confidence built around impact and control.
                </p>

                <b>↗</b>

            </div>

        </article>

    </div>


    <div class="fa-gi-gear-wall__bottom">

        <div>
            <small>GEAR</small>
            <strong>05</strong>
            <span>SYSTEMS</span>
        </div>

        <div>
            <small>DESIGN</small>
            <strong>FA</strong>
            <span>SPORTS</span>
        </div>

        <div>
            <small>ORIGIN</small>
            <strong>2004</strong>
            <span>EST.</span>
        </div>

        <div class="fa-gi-gear-wall__statement">
            <span>THE GAME STARTS</span>
            <strong>
                BEFORE
                <em>THE GAME.</em>
            </strong>
        </div>

    </div>

</section>



{{-- =========================================================
FA SPORTS — MATCH KIT ARCHIVE
========================================================= --}}

<section class="fa-gi-kit-archive" id="match-kit-archive">

    <div class="fa-gi-kit-archive__head">

        <div>
            <span class="fa-gi-kit-archive__eyebrow">
                FA SPORTS / MATCH ARCHIVE
            </span>

            <h2>
                MATCH<br>
                <span>KIT ARCHIVE.</span>
            </h2>
        </div>

        <div class="fa-gi-kit-archive__intro">

            <strong>BUILT FOR THE MOMENT.</strong>

            <p>
                A visual archive of FA SPORTS matchwear —
                built around identity, movement and the demands
                of competition.
            </p>

            <div class="fa-gi-kit-archive__index">
                <span>ARCHIVE</span>
                <b>01 — 08</b>
            </div>

        </div>

    </div>


    {{-- FEATURED KIT --}}
    <div class="fa-gi-kit-archive__feature">

        <div class="fa-gi-kit-archive__feature-image">

            <img
                src="{{ asset('images/legacy/uniform7.jpg') }}"
                alt="FA Sports Match Kit"
                loading="lazy"
            >

            <div class="fa-gi-kit-archive__feature-overlay"></div>

            <div class="fa-gi-kit-archive__feature-code">
                FA / MK-01
            </div>

            <div class="fa-gi-kit-archive__feature-mark">
                FA
            </div>

            <div class="fa-gi-kit-archive__feature-info">
                <span>MATCH SYSTEM / 01</span>

                <h3>
                    PERFORMANCE<br>
                    MATCHWEAR
                </h3>
            </div>

        </div>


        <div class="fa-gi-kit-archive__feature-side">

            <div class="fa-gi-kit-archive__side-number">
                01
            </div>

            <div class="fa-gi-kit-archive__side-copy">

                <span>THE MATCH SYSTEM</span>

                <p>
                    Engineered matchwear designed to move with
                    the athlete while keeping team identity
                    unmistakable on the field.
                </p>

            </div>

            <div class="fa-gi-kit-archive__specs">

                <div>
                    <small>FABRIC</small>
                    <strong>LIGHTWEIGHT</strong>
                </div>

                <div>
                    <small>MOTION</small>
                    <strong>4-WAY</strong>
                </div>

                <div>
                    <small>FIT</small>
                    <strong>PRO</strong>
                </div>

            </div>

            <div class="fa-gi-kit-archive__price">
                <small>STARTING FROM</small>
                <strong>PKR 5,800</strong>
            </div>

            <a
                href="{{ url('/performance-gear') }}"
                class="fa-gi-kit-archive__link"
            >
                EXPLORE MATCH GEAR
                <span>↗</span>
            </a>

        </div>

    </div>


    {{-- ARCHIVE STRIP --}}
    <div class="fa-gi-kit-archive__rail">

        <article class="fa-gi-kit-archive__item is-highlight">

            <div class="fa-gi-kit-archive__item-image">

                <img
                    src="{{ asset('images/legacy/uniform9.jpg') }}"
                    alt="FA Sports Kit Archive"
                    loading="lazy"
                >

                <span>02</span>

            </div>

            <div class="fa-gi-kit-archive__item-text">

                <small>MATCH / 02</small>
                <strong>TEAM IDENTITY</strong>

                <p>Built around colour, crest and character.</p>

                <div class="fa-gi-kit-archive__item-price">
                    PKR 5,200
                </div>

            </div>

        </article>


        <article class="fa-gi-kit-archive__item">

            <div class="fa-gi-kit-archive__item-image">

                <img
                    src="{{ asset('images/legacy/uniform10.jpg') }}"
                    alt="FA Sports Matchwear"
                    loading="lazy"
                >

                <span>03</span>

            </div>

            <div class="fa-gi-kit-archive__item-text">

                <small>MATCH / 03</small>
                <strong>FIELD READY</strong>

                <p>Performance-first construction for competition.</p>

                <div class="fa-gi-kit-archive__item-price">
                    PKR 5,800
                </div>

            </div>

        </article>


        <article class="fa-gi-kit-archive__item">

            <div class="fa-gi-kit-archive__item-image">

                <img
                    src="{{ asset('images/legacy/uniform13.jpg') }}"
                    alt="FA Sports Team Kit"
                    loading="lazy"
                >

                <span>04</span>

            </div>

            <div class="fa-gi-kit-archive__item-text">

                <small>MATCH / 04</small>
                <strong>THE DETAILS</strong>

                <p>Precision details that complete the uniform.</p>

                <div class="fa-gi-kit-archive__item-price">
                    PKR 6,000
                </div>

            </div>

        </article>


        <article class="fa-gi-kit-archive__item">

            <div class="fa-gi-kit-archive__item-image">

                <img
                    src="{{ asset('images/legacy/uniform12.jpg') }}"
                    alt="FA Sports Match Kit"
                    loading="lazy"
                >

                <span>05</span>

            </div>

            <div class="fa-gi-kit-archive__item-text">

                <small>MATCH / 05</small>
                <strong>GAME FORM</strong>

                <p>Designed for movement from whistle to whistle.</p>

                <div class="fa-gi-kit-archive__item-price">
                    PKR 6,200
                </div>

            </div>

        </article>

    </div>


    <div class="fa-gi-kit-archive__bottom">

        <span>FA SPORTS / KIT ARCHIVE</span>

        <strong>
            BEFORE THE WHISTLE.<br>
            READY FOR THE GAME.
        </strong>

        <span>05 / ARCHIVED SYSTEMS</span>

    </div>

</section>



{{-- =========================================================
FA SPORTS — FOOTWEAR LAB
========================================================= --}}

<section class="fa-gi-footwear-lab" id="footwear-lab">

    <div class="fa-gi-footwear-lab__header">

        <div class="fa-gi-footwear-lab__title">

            <span class="fa-gi-footwear-lab__eyebrow">
                FA SPORTS / PERFORMANCE LAB
            </span>

            <h2>
                FOOTWEAR
                <span>LAB.</span>
            </h2>

        </div>

        <div class="fa-gi-footwear-lab__header-right">

            <div class="fa-gi-footwear-lab__status">
                <i></i>
                PERFORMANCE SYSTEM / ACTIVE
            </div>

            <p>
                Engineered footwear built around traction,
                stability, movement and control.
            </p>

        </div>

    </div>


    <div class="fa-gi-footwear-lab__stage">

        <aside class="fa-gi-footwear-lab__tech">

            <div class="fa-gi-footwear-lab__tech-head">
                <span>01</span>
                FOOTWEAR SYSTEM
            </div>

            <div class="fa-gi-footwear-lab__tech-line"></div>

            <div class="fa-gi-footwear-lab__metric">
                <small>TRACTION</small>
                <strong>MAX</strong>
                <span>FIELD CONTROL</span>
            </div>

            <div class="fa-gi-footwear-lab__metric">
                <small>STABILITY</small>
                <strong>360°</strong>
                <span>MOTION SUPPORT</span>
            </div>

            <div class="fa-gi-footwear-lab__metric">
                <small>WEIGHT</small>
                <strong>LIGHT</strong>
                <span>FAST MOVEMENT</span>
            </div>

            <div class="fa-gi-footwear-lab__tech-bottom">
                <span>FA / FOOTWEAR</span>
                <b>04 — 09</b>
            </div>

        </aside>


        <div class="fa-gi-footwear-lab__hero">

            <img
                src="{{ asset('images/legacy/product-049.jpg') }}"
                alt="FA Sports Performance Footwear"
                loading="lazy"
            >

            <div class="fa-gi-footwear-lab__hero-grid"></div>
            <div class="fa-gi-footwear-lab__hero-gradient"></div>

            <div class="fa-gi-footwear-lab__hero-code">
                FA / FL-049
            </div>

            <div class="fa-gi-footwear-lab__hero-crosshair">
                <span></span>
            </div>

            <div class="fa-gi-footwear-lab__hero-label">

                <span>FOOTWEAR / 01</span>

                <h3>
                    BUILT TO
                    <br>
                    <em>MOVE.</em>
                </h3>

            </div>

            <div class="fa-gi-footwear-lab__hero-side">
                PERFORMANCE
                <br>
                FOOTWEAR
            </div>

        </div>


        <div class="fa-gi-footwear-lab__info">

            <div class="fa-gi-footwear-lab__info-top">
                <span>LAB / 001</span>
                <span>FA SPORTS</span>
            </div>

            <div class="fa-gi-footwear-lab__info-main">

                <small>ENGINEERED FOR</small>

                <h3>
                    SPEED.
                    <br>
                    GRIP.
                    <br>
                    CONTROL.
                </h3>

                <p>
                    Footwear engineered for athletes who need
                    confidence in every step, cut and change
                    of direction.
                </p>

                <div class="fa-gi-footwear-lab__price">
                    <small>PERFORMANCE FOOTWEAR</small>
                    <strong>PKR 7,500</strong>
                </div>

            </div>

            <a
                href="{{ url('/performance-gear') }}"
                class="fa-gi-footwear-lab__explore"
            >
                EXPLORE FOOTWEAR
                <span>↗</span>
            </a>

        </div>

    </div>


    <div class="fa-gi-footwear-lab__archive">

        <div class="fa-gi-footwear-lab__archive-heading">

            <span>
                02 / FOOTWEAR ARCHIVE
            </span>

            <strong>
                SELECTED SYSTEMS
            </strong>

        </div>


        <div class="fa-gi-footwear-lab__cards">

            {{-- CARD 01 --}}
            <article class="fa-gi-footwear-card">

                <div class="fa-gi-footwear-card__image">

                    <img
                        src="{{ asset('images/legacy/product-040.jpg') }}"
                        alt="FA Sports Footwear System"
                        loading="lazy"
                    >

                    <span>FL / 040</span>

                    <div class="fa-gi-footwear-card__corner"></div>

                </div>

                <div class="fa-gi-footwear-card__body">

                    <small>FOOTWEAR / 01</small>

                    <h4>
                        SPEED
                        <span>FORM</span>
                    </h4>

                    <p>
                        Lightweight construction designed
                        around fast movement.
                    </p>

                    <div class="fa-gi-footwear-card__price">
                        PKR 6,900
                    </div>

                    <b>01</b>

                </div>

            </article>


            {{-- CARD 02 --}}
            <article class="fa-gi-footwear-card">

                <div class="fa-gi-footwear-card__image">

                    <img
                        src="{{ asset('images/legacy/product-043.jpg') }}"
                        alt="FA Sports Performance Footwear"
                        loading="lazy"
                    >

                    <span>FL / 043</span>

                    <div class="fa-gi-footwear-card__corner"></div>

                </div>

                <div class="fa-gi-footwear-card__body">

                    <small>FOOTWEAR / 02</small>

                    <h4>
                        GRIP
                        <span>CONTROL</span>
                    </h4>

                    <p>
                        Built for traction, stability and
                        controlled direction changes.
                    </p>

                    <div class="fa-gi-footwear-card__price">
                        PKR 7,200
                    </div>

                    <b>02</b>

                </div>

            </article>


            {{-- CARD 03 --}}
            <article class="fa-gi-footwear-card">

                <div class="fa-gi-footwear-card__image">

                    <img
                        src="{{ asset('images/legacy/product-049.jpg') }}"
                        alt="FA Sports Advanced Footwear"
                        loading="lazy"
                    >

                    <span>FL / 049</span>

                    <div class="fa-gi-footwear-card__corner"></div>

                </div>

                <div class="fa-gi-footwear-card__body">

                    <small>FOOTWEAR / 03</small>

                    <h4>
                        GAME
                        <span>READY</span>
                    </h4>

                    <p>
                        Performance footwear designed to
                        stay locked through the action.
                    </p>

                    <div class="fa-gi-footwear-card__price">
                        PKR 7,500
                    </div>

                    <b>03</b>

                </div>

            </article>

        </div>

    </div>


    <div class="fa-gi-footwear-lab__bottom">

        <span>FA SPORTS / FOOTWEAR LAB</span>

        <strong>
            EVERY STEP
            <em>MATTERS.</em>
        </strong>

        <span>ENGINEERED / 2026</span>

    </div>

</section>



{{-- =========================================================
FA SPORTS — GLOVE ARCHIVE
========================================================= --}}

<section class="fa-gi-glove-archive" id="glove-archive">

    <div class="fa-gi-glove-archive__header">

        <div class="fa-gi-glove-archive__title">

            <span class="fa-gi-glove-archive__eyebrow">
                FA SPORTS / HAND PROTECTION
            </span>

            <h2>
                THE GLOVE
                <span>ARCHIVE.</span>
            </h2>

        </div>

        <div class="fa-gi-glove-archive__intro">

            <div class="fa-gi-glove-archive__archive-mark">
                <span>ARCHIVE</span>
                <strong>05</strong>
            </div>

            <p>
                Selected glove systems engineered for grip,
                protection, control and confidence under pressure.
            </p>

        </div>

    </div>


    <div class="fa-gi-glove-archive__wall">

        {{-- FEATURE 01 --}}
        <article class="fa-gi-glove-card fa-gi-glove-card--large">

            <div class="fa-gi-glove-card__image">

                <img
                    src="{{ asset('images/legacy/product-063.jpg') }}"
                    alt="FA Sports Glove Archive"
                    loading="lazy"
                >

                <div class="fa-gi-glove-card__shade"></div>

                <span class="fa-gi-glove-card__number">
                    01
                </span>

                <span class="fa-gi-glove-card__code">
                    GL / 063
                </span>

                <div class="fa-gi-glove-card__cross"></div>

                <div class="fa-gi-glove-card__label">
                    <small>GLOVE SYSTEM</small>
                    <strong>
                        CONTROL<br>
                        SERIES
                    </strong>
                </div>

            </div>

            <div class="fa-gi-glove-card__price">
                PKR 3,500
            </div>

        </article>


        {{-- 02 --}}
        <article class="fa-gi-glove-card">

            <div class="fa-gi-glove-card__image">

                <img
                    src="{{ asset('images/legacy/product-064.jpg') }}"
                    alt="FA Sports Gloves"
                    loading="lazy"
                >

                <span class="fa-gi-glove-card__number">
                    02
                </span>

                <span class="fa-gi-glove-card__code">
                    GL / 064
                </span>

            </div>

            <div class="fa-gi-glove-card__body">

                <small>ARCHIVE / 02</small>

                <h3>
                    GRIP
                    <span>CORE</span>
                </h3>

                <p>
                    Built around secure handling and
                    confident contact.
                </p>

                <div class="fa-gi-glove-card__price">
                    PKR 3,800
                </div>

            </div>

        </article>


        {{-- 03 --}}
        <article class="fa-gi-glove-card">

            <div class="fa-gi-glove-card__image">

                <img
                    src="{{ asset('images/legacy/product-059.jpg') }}"
                    alt="FA Sports Glove Archive"
                    loading="lazy"
                >

                <span class="fa-gi-glove-card__number">
                    03
                </span>

                <span class="fa-gi-glove-card__code">
                    GL / 059
                </span>

            </div>

            <div class="fa-gi-glove-card__body">

                <small>ARCHIVE / 03</small>

                <h3>
                    FLEX
                    <span>FIT</span>
                </h3>

                <p>
                    Designed for natural hand movement
                    without losing protection.
                </p>

                <div class="fa-gi-glove-card__price">
                    PKR 3,600
                </div>

            </div>

        </article>


        {{-- 04 --}}
        <article class="fa-gi-glove-card">

            <div class="fa-gi-glove-card__image">

                <img
                    src="{{ asset('images/legacy/product-054.jpg') }}"
                    alt="FA Sports Protective Gloves"
                    loading="lazy"
                >

                <span class="fa-gi-glove-card__number">
                    04
                </span>

                <span class="fa-gi-glove-card__code">
                    GL / 054
                </span>

            </div>

            <div class="fa-gi-glove-card__body">

                <small>ARCHIVE / 04</small>

                <h3>
                    IMPACT
                    <span>SHIELD</span>
                </h3>

                <p>
                    Protection designed for demanding
                    moments of play.
                </p>

                <div class="fa-gi-glove-card__price">
                    PKR 4,000
                </div>

            </div>

        </article>


        {{-- 05 --}}
        <article class="fa-gi-glove-card">

            <div class="fa-gi-glove-card__image">

                <img
                    src="{{ asset('images/legacy/product-055.jpg') }}"
                    alt="FA Sports Performance Gloves"
                    loading="lazy"
                >

                <span class="fa-gi-glove-card__number">
                    05
                </span>

                <span class="fa-gi-glove-card__code">
                    GL / 055
                </span>

            </div>

            <div class="fa-gi-glove-card__body">

                <small>ARCHIVE / 05</small>

                <h3>
                    PRO
                    <span>LOCK</span>
                </h3>

                <p>
                    A secure fit engineered around
                    control and performance.
                </p>

                <div class="fa-gi-glove-card__price">
                    PKR 4,200
                </div>

            </div>

        </article>

    </div>


    <div class="fa-gi-glove-archive__data">

        <div>
            <small>ARCHIVE TYPE</small>
            <strong>HAND PROTECTION</strong>
        </div>

        <div>
            <small>SYSTEMS</small>
            <strong>05</strong>
        </div>

        <div>
            <small>FOCUS</small>
            <strong>GRIP / CONTROL</strong>
        </div>

        <div>
            <small>FA SPORTS</small>
            <strong>EST. 2004</strong>
        </div>

    </div>


    <div class="fa-gi-glove-archive__bottom">

        <span>FA SPORTS / GLOVE ARCHIVE</span>

        <strong>
            HOLD THE
            <em>GAME.</em>
        </strong>

        <a href="#">
            EXPLORE GLOVE SYSTEM
            <b>↗</b>
        </a>

    </div>

</section>



{{-- =========================================================
FA SPORTS — THE BAG ROOM
========================================================= --}}

<section class="fa-gi-bag-room" id="bag-room">

    <div class="fa-gi-bag-room__top">

        <div class="fa-gi-bag-room__brand">
            <span>FA SPORTS</span>
            <strong>THE BAG ROOM</strong>
        </div>

        <div class="fa-gi-bag-room__meta">
            <span>FIELD EQUIPMENT</span>
            <b>05 SYSTEMS / 2026</b>
        </div>

    </div>


    <div class="fa-gi-bag-room__intro">

        <div class="fa-gi-bag-room__intro-title">

            <span>03 / EQUIPMENT CARRY SYSTEM</span>

            <h2>
                CARRY THE
                <em>GAME.</em>
            </h2>

        </div>

        <p>
            Performance bags designed to carry the kit,
            equipment and essentials that move with the team.
        </p>

    </div>


    <div class="fa-gi-bag-room__display">

        {{-- FEATURE BAG --}}
        <article class="fa-gi-bag-room__feature">

            <div class="fa-gi-bag-room__feature-image">

                <img
                    src="{{ asset('images/legacy/product-077.jpg') }}"
                    alt="FA Sports Equipment Bag"
                    loading="lazy"
                >

                <div class="fa-gi-bag-room__feature-overlay"></div>

                <span class="fa-gi-bag-room__feature-code">
                    BR / 077
                </span>

                <div class="fa-gi-bag-room__feature-label">

                    <small>FIELD CARRY / 01</small>

                    <h3>
                        TEAM
                        <br>
                        <em>HAULER</em>
                    </h3>

                </div>

                <div class="fa-gi-bag-room__feature-mark">
                    FA
                </div>

            </div>

            <div class="fa-gi-bag-room__feature-info">

                <div>
                    <small>CAPACITY</small>
                    <strong>TEAM</strong>
                </div>

                <div>
                    <small>USE</small>
                    <strong>MATCH</strong>
                </div>

                <div>
                    <small>SYSTEM</small>
                    <strong>FIELD</strong>
                </div>

                <div class="fa-gi-bag-room__price">
                    <small>PRICE</small>
                    <strong>PKR 4,500</strong>
                </div>

            </div>

        </article>


        {{-- SIDE BAGS --}}
        <div class="fa-gi-bag-room__side">

            <article class="fa-gi-bag-item">

                <div class="fa-gi-bag-item__number">02</div>

                <div class="fa-gi-bag-item__image">

                    <img
                        src="{{ asset('images/legacy/product-078.jpg') }}"
                        alt="FA Sports Bag"
                        loading="lazy"
                    >

                </div>

                <div class="fa-gi-bag-item__content">

                    <small>BR / 078</small>

                    <h3>
                        TRAVEL
                        <span>PACK</span>
                    </h3>

                    <p>
                        Built for movement beyond the field.
                    </p>

                    <div class="fa-gi-bag-item__price">
                        PKR 3,900
                    </div>

                    <b>↗</b>

                </div>

            </article>


            <article class="fa-gi-bag-item">

                <div class="fa-gi-bag-item__number">03</div>

                <div class="fa-gi-bag-item__image">

                    <img
                        src="{{ asset('images/legacy/product-075.jpg') }}"
                        alt="FA Sports Team Bag"
                        loading="lazy"
                    >

                </div>

                <div class="fa-gi-bag-item__content">

                    <small>BR / 075</small>

                    <h3>
                        KIT
                        <span>HOLD</span>
                    </h3>

                    <p>
                        Organized storage for match essentials.
                    </p>

                    <div class="fa-gi-bag-item__price">
                        PKR 4,200
                    </div>

                    <b>↗</b>

                </div>

            </article>


            <article class="fa-gi-bag-item">

                <div class="fa-gi-bag-item__number">04</div>

                <div class="fa-gi-bag-item__image">

                    <img
                        src="{{ asset('images/legacy/product-074.jpg') }}"
                        alt="FA Sports Equipment Bag"
                        loading="lazy"
                    >

                </div>

                <div class="fa-gi-bag-item__content">

                    <small>BR / 074</small>

                    <h3>
                        GEAR
                        <span>CASE</span>
                    </h3>

                    <p>
                        Compact carry for everyday equipment.
                    </p>

                    <div class="fa-gi-bag-item__price">
                        PKR 2,800
                    </div>

                    <b>↗</b>

                </div>

            </article>


            <article class="fa-gi-bag-item">

                <div class="fa-gi-bag-item__number">05</div>

                <div class="fa-gi-bag-item__image">

                    <img
                        src="{{ asset('images/legacy/product-069.jpg') }}"
                        alt="FA Sports Sports Bag"
                        loading="lazy"
                    >

                </div>

                <div class="fa-gi-bag-item__content">

                    <small>BR / 069</small>

                    <h3>
                        DAILY
                        <span>CARRY</span>
                    </h3>

                    <p>
                        Designed for training and everyday use.
                    </p>

                    <div class="fa-gi-bag-item__price">
                        PKR 2,500
                    </div>

                    <b>↗</b>

                </div>

            </article>

        </div>

    </div>


    <div class="fa-gi-bag-room__system">

        <div class="fa-gi-bag-room__system-title">
            <span>BAG SYSTEM</span>
            <strong>ONE TEAM. ONE CARRY.</strong>
        </div>

        <div>
            <small>01</small>
            <span>TEAM STORAGE</span>
        </div>

        <div>
            <small>02</small>
            <span>TRAVEL</span>
        </div>

        <div>
            <small>03</small>
            <span>MATCH DAY</span>
        </div>

        <div>
            <small>04</small>
            <span>TRAINING</span>
        </div>

    </div>


    <div class="fa-gi-bag-room__footer">

        <span>FA SPORTS / THE BAG ROOM</span>

        <strong>
            PACKED FOR
            <em>PERFORMANCE.</em>
        </strong>

        <a href="{{ url('/performance-gear') }}">
            EXPLORE EQUIPMENT
            <b>↗</b>
        </a>

    </div>

</section>



{{-- =========================================================
FA SPORTS — PROTECTION SYSTEM
========================================================= --}}

<section class="fa-gi-protection" id="protection-system">

    <div class="fa-gi-protection__top">

        <div class="fa-gi-protection__identity">
            <span>FA SPORTS</span>
            <strong>PROTECTION SYSTEM</strong>
        </div>

        <div class="fa-gi-protection__status">
            <span class="fa-gi-protection__dot"></span>
            <span>DEFENSE / ACTIVE</span>
            <b>06 SYSTEMS</b>
        </div>

    </div>


    <div class="fa-gi-protection__intro">

        <div class="fa-gi-protection__intro-left">

            <span>04 / PROTECTIVE EQUIPMENT</span>

            <h2>
                BUILT TO
                <em>PROTECT.</em>
            </h2>

        </div>

        <div class="fa-gi-protection__intro-right">

            <p>
                Protective equipment engineered for impact,
                movement, stability and confidence across the game.
            </p>

            <div class="fa-gi-protection__coordinates">
                <span>PK / FA / 2004</span>
                <span>DEFENSE DIVISION</span>
            </div>

        </div>

    </div>


    <div class="fa-gi-protection__wall">

        {{-- MAIN HELMET --}}
        <article class="fa-gi-protection__hero-card">

            <div class="fa-gi-protection__image">

                <img
                    src="{{ asset('images/legacy/product-081.jpg') }}"
                    alt="FA Sports Protective Helmet"
                >

                <div class="fa-gi-protection__image-grid"></div>

                <span class="fa-gi-protection__number">01</span>

                <span class="fa-gi-protection__tag">
                    HEAD / IMPACT
                </span>

                <div class="fa-gi-protection__hero-title">

                    <small>PROTECTIVE SYSTEM / 01</small>

                    <h3>
                        HEAD
                        <em>GUARD</em>
                    </h3>

                </div>

            </div>

            <div class="fa-gi-protection__hero-info">

                <span>01</span>

                <div>
                    <small>PROTECTION CLASS</small>
                    <strong>IMPACT</strong>
                </div>

                <div>
                    <small>SYSTEM</small>
                    <strong>HEAD</strong>
                </div>

                <div>
                    <small>STATUS</small>
                    <strong>ACTIVE</strong>
                </div>

                <div class="fa-gi-protection__hero-price">
                    <small>PRICE</small>
                    <strong>PKR 5,500</strong>
                </div>

            </div>

        </article>


        {{-- SECONDARY EQUIPMENT --}}
        <div class="fa-gi-protection__grid">

            {{-- 02 KIT --}}
            <article class="fa-gi-protection__card">

                <div class="fa-gi-protection__card-image">

                    <img
                        src="{{ asset('images/legacy/product-085.jpg') }}"
                        alt="FA Sports Protective Kit"
                    >

                    <span>02</span>

                    <div class="fa-gi-protection__card-code">
                        BODY / KIT
                    </div>

                </div>

                <div class="fa-gi-protection__card-info">

                    <small>PROTECTIVE KIT</small>

                    <h3>BODY <em>SHIELD</em></h3>

                    <p>Coverage built for demanding play.</p>

                    <strong class="fa-gi-protection__price">
                        PKR 6,500
                    </strong>

                </div>

            </article>


            {{-- 03 BOTTLE --}}
            <article class="fa-gi-protection__card">

                <div class="fa-gi-protection__card-image">

                    <img
                        src="{{ asset('images/legacy/product-089.jpg') }}"
                        alt="FA Sports Water Bottle"
                    >

                    <span>03</span>

                    <div class="fa-gi-protection__card-code">
                        HYDRATION
                    </div>

                </div>

                <div class="fa-gi-protection__card-info">

                    <small>FIELD ESSENTIAL</small>

                    <h3>HYDRATE <em>READY</em></h3>

                    <p>Built to stay with the player.</p>

                    <strong class="fa-gi-protection__price">
                        PKR 1,200
                    </strong>

                </div>

            </article>


            {{-- 04 WIRE --}}
            <article class="fa-gi-protection__card">

                <div class="fa-gi-protection__card-image">

                    <img
                        src="{{ asset('images/legacy/product-093.jpg') }}"
                        alt="FA Sports Protective Wire Equipment"
                    >

                    <span>04</span>

                    <div class="fa-gi-protection__card-code">
                        SUPPORT / WIRE
                    </div>

                </div>

                <div class="fa-gi-protection__card-info">

                    <small>STRUCTURAL SUPPORT</small>

                    <h3>SECURE <em>FORM</em></h3>

                    <p>Support where controlled movement matters.</p>

                    <strong class="fa-gi-protection__price">
                        PKR 1,800
                    </strong>

                </div>

            </article>


            {{-- 05 MAT --}}
            <article class="fa-gi-protection__card">

                <div class="fa-gi-protection__card-image">

                    <img
                        src="{{ asset('images/legacy/product-095.jpg') }}"
                        alt="FA Sports Training Protection Mat"
                    >

                    <span>05</span>

                    <div class="fa-gi-protection__card-code">
                        FLOOR / MAT
                    </div>

                </div>

                <div class="fa-gi-protection__card-info">

                    <small>TRAINING PROTECTION</small>

                    <h3>GROUND <em>CONTROL</em></h3>

                    <p>Protection from training room to field.</p>

                    <strong class="fa-gi-protection__price">
                        PKR 3,200
                    </strong>

                </div>

            </article>


            {{-- 06 VIOLET CARRY --}}
            <article class="fa-gi-protection__card fa-gi-protection__card--violet">

                <div class="fa-gi-protection__card-image">

                    <img
                        src="{{ asset('images/legacy/product-097.jpg') }}"
                        alt="FA Sports Violet Carry Protection Equipment"
                    >

                    <span>06</span>

                    <div class="fa-gi-protection__card-code">
                        CARRY / SYSTEM
                    </div>

                </div>

                <div class="fa-gi-protection__card-info">

                    <small>EQUIPMENT CARRY</small>

                    <h3>MOVE <em>SAFE.</em></h3>

                    <p>Protection that travels with the system.</p>

                    <strong class="fa-gi-protection__price">
                        PKR 2,900
                    </strong>

                </div>

            </article>

        </div>

    </div>


    <div class="fa-gi-protection__data">

        <div>
            <small>01</small>
            <strong>IMPACT</strong>
            <span>HEAD PROTECTION</span>
        </div>

        <div>
            <small>02</small>
            <strong>BODY</strong>
            <span>PROTECTIVE KIT</span>
        </div>

        <div>
            <small>03</small>
            <strong>SUPPORT</strong>
            <span>STRUCTURAL CONTROL</span>
        </div>

        <div>
            <small>04</small>
            <strong>TRAINING</strong>
            <span>GROUND SAFETY</span>
        </div>

    </div>


    <div class="fa-gi-protection__footer">

        <div>

            <span>FA SPORTS / PROTECTION SYSTEM</span>

            <strong>
                DEFEND THE
                <em>PLAY.</em>
            </strong>

        </div>

        <a href="{{ url('/performance-gear') }}">
            EXPLORE PERFORMANCE GEAR
            <b>↗</b>
        </a>

    </div>

</section>



{{-- =========================================================
FA SPORTS — PRODUCT INDEX
THE FIVE / SPORTSWEAR SUIT EDIT
========================================================= --}}

<section class="fa-gi-product-index" id="product-index">

    <div class="fa-gi-product-index__header">

        <div>

            <span class="fa-gi-product-index__eyebrow">
                05 / PRODUCT INDEX
            </span>

            <h2>
                THE
                <em>FIVE.</em>
            </h2>

        </div>

        <div class="fa-gi-product-index__intro">

            <span>FA SPORTS / PERFORMANCE APPAREL</span>

            <p>
                Five engineered sportswear silhouettes.
                One performance language.
            </p>

        </div>

    </div>


    <div class="fa-gi-product-index__stage">


        {{-- PRODUCT 01 --}}
        <article class="fa-gi-product-index__product product-one">

            <div class="fa-gi-product-index__image">

                <img
                    src="{{ asset('images/legacy/uniform7.jpg') }}"
                    alt="FA Sports Performance Suit"
                >

                <span class="fa-gi-product-index__number">01</span>

                <span class="fa-gi-product-index__category">
                    PERFORMANCE / 01
                </span>

                <div class="fa-product-template">

                    <span class="fa-product-template__brand">
                        FA SPORTS / PERFORMANCE SYSTEM
                    </span>

                    <span class="fa-product-template__edition">
                        EDITION 01
                    </span>

                    <div class="fa-product-template__dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <span class="fa-product-template__marker"></span>
                    <span class="fa-product-template__line"></span>

                    <div class="fa-product-template__system">
                        <small>ENGINEERED FOR MOVEMENT</small>
                        <strong>PERFORMANCE CORE</strong>
                    </div>

                    <span class="fa-product-template__code">
                        FA / 2004—2026
                    </span>

                </div>

                <div class="fa-gi-product-index__plus">+</div>

            </div>

            <div class="fa-gi-product-index__caption">

                <span>FA / SUIT 01</span>

                <strong>
                    PERFORMANCE <em>CORE</em>
                </strong>

                <div class="fa-gi-product-index__price">
                    PKR 4,500
                </div>

            </div>

        </article>



        {{-- PRODUCT 02 --}}
        <article class="fa-gi-product-index__product product-two">

            <div class="fa-gi-product-index__image">

                <img
                    src="{{ asset('images/legacy/uniform1.jpg') }}"
                    alt="FA Sports Teamwear Suit"
                >

                <span class="fa-gi-product-index__number">02</span>

                <span class="fa-gi-product-index__category">
                    TEAMWEAR
                </span>

                <div class="fa-product-template">

                    <span class="fa-product-template__brand">
                        FA SPORTS / TEAM SYSTEM
                    </span>

                    <span class="fa-product-template__edition">
                        EDITION 02
                    </span>

                    <div class="fa-product-template__dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <span class="fa-product-template__marker"></span>
                    <span class="fa-product-template__line"></span>

                    <div class="fa-product-template__system">
                        <small>BUILT FOR THE SQUAD</small>
                        <strong>TEAM FORM</strong>
                    </div>

                    <span class="fa-product-template__code">
                        FA / 2004—2026
                    </span>

                </div>

                <div class="fa-gi-product-index__plus">+</div>

            </div>

            <div class="fa-gi-product-index__caption">

                <span>FA / SUIT 02</span>

                <strong>
                    TEAM <em>FORM</em>
                </strong>

                <div class="fa-gi-product-index__price">
                    PKR 5,200
                </div>

            </div>

        </article>



        {{-- PRODUCT 03 --}}
        <article class="fa-gi-product-index__product product-three">

            <div class="fa-gi-product-index__image">

                <img
                    src="{{ asset('images/legacy/uniform4.jpg') }}"
                    alt="FA Sports Match Suit"
                >

                <span class="fa-gi-product-index__number">03</span>

                <span class="fa-gi-product-index__category">
                    MATCH SYSTEM
                </span>

                <div class="fa-product-template">

                    <span class="fa-product-template__brand">
                        FA SPORTS / MATCH SYSTEM
                    </span>

                    <span class="fa-product-template__edition">
                        EDITION 03
                    </span>

                    <div class="fa-product-template__dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <span class="fa-product-template__marker"></span>
                    <span class="fa-product-template__line"></span>

                    <div class="fa-product-template__system">
                        <small>ENGINEERED FOR MATCHDAY</small>
                        <strong>MATCH READY</strong>
                    </div>

                    <span class="fa-product-template__code">
                        FA / 2004—2026
                    </span>

                </div>

                <div class="fa-gi-product-index__plus">+</div>

            </div>

            <div class="fa-gi-product-index__caption">

                <span>FA / SUIT 03</span>

                <strong>
                    MATCH <em>READY</em>
                </strong>

                <div class="fa-gi-product-index__price">
                    PKR 5,800
                </div>

            </div>

        </article>



        {{-- PRODUCT 04 --}}
        <article class="fa-gi-product-index__product product-four">

            <div class="fa-gi-product-index__image">

                <img
                    src="{{ asset('images/legacy/uniform5.jpg') }}"
                    alt="FA Sports Training Suit"
                >

                <span class="fa-gi-product-index__number">04</span>

                <span class="fa-gi-product-index__category">
                    TRAINING
                </span>

                <div class="fa-product-template">

                    <span class="fa-product-template__brand">
                        FA SPORTS / TRAINING SYSTEM
                    </span>

                    <span class="fa-product-template__edition">
                        EDITION 04
                    </span>

                    <div class="fa-product-template__dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <span class="fa-product-template__marker"></span>
                    <span class="fa-product-template__line"></span>

                    <div class="fa-product-template__system">
                        <small>BUILT TO TRAIN HARDER</small>
                        <strong>TRAIN MOVE</strong>
                    </div>

                    <span class="fa-product-template__code">
                        FA / 2004—2026
                    </span>

                </div>

                <div class="fa-gi-product-index__plus">+</div>

            </div>

            <div class="fa-gi-product-index__caption">

                <span>FA / SUIT 04</span>

                <strong>
                    TRAIN <em>MOVE</em>
                </strong>

                <div class="fa-gi-product-index__price">
                    PKR 4,900
                </div>

            </div>

        </article>



        {{-- PRODUCT 05 --}}
        <article class="fa-gi-product-index__product product-five">

            <div class="fa-gi-product-index__image">

                <img
                    src="{{ asset('images/legacy/uniform6.jpg') }}"
                    alt="FA Sports Elite Sportswear Suit"
                >

                <span class="fa-gi-product-index__number">05</span>

                <span class="fa-gi-product-index__category">
                    ELITE SYSTEM
                </span>

                <div class="fa-product-template">

                    <span class="fa-product-template__brand">
                        FA SPORTS / ELITE SYSTEM
                    </span>

                    <span class="fa-product-template__edition">
                        EDITION 05
                    </span>

                    <div class="fa-product-template__dots">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <span class="fa-product-template__marker"></span>
                    <span class="fa-product-template__line"></span>

                    <div class="fa-product-template__system">
                        <small>DESIGNED FOR PERFORMANCE</small>
                        <strong>ELITE PERFORM</strong>
                    </div>

                    <span class="fa-product-template__code">
                        FA / 2004—2026
                    </span>

                </div>

                <div class="fa-gi-product-index__plus">+</div>

            </div>

            <div class="fa-gi-product-index__caption">

                <span>FA / SUIT 05</span>

                <strong>
                    ELITE <em>PERFORM</em>
                </strong>

                <div class="fa-gi-product-index__price">
                    PKR 6,500
                </div>

            </div>

        </article>



        <div class="fa-gi-product-index__statement">

            <span>FA SPORTS</span>

            <strong>
                BUILT
                <br>
                TO
                <br>
                <em>MOVE.</em>
            </strong>

            <small>
                PERFORMANCE APPAREL / 2004—2026
            </small>

        </div>

    </div>


    <div class="fa-gi-product-index__bottom">

        <div>
            <small>INDEX</small>
            <strong>05</strong>
            <span>SUITS</span>
        </div>

        <div>
            <small>SYSTEM</small>
            <strong>01</strong>
            <span>APPAREL</span>
        </div>

        <div>
            <small>DESIGN</small>
            <strong>FA</strong>
            <span>SPORTS</span>
        </div>

        <a href="{{ url('/performance-gear') }}">
            EXPLORE PERFORMANCE GEAR
            <b>↗</b>
        </a>

    </div>

</section>



{{-- =========================================================
FA SPORTS — THE PERFORMANCE CODE
========================================================= --}}

<section class="fa-gi-performance-code" id="performance-code">

    <div class="fa-gi-performance-code__top">

        <div class="fa-gi-performance-code__identity">

            <span>FA SPORTS</span>

            <strong>PERFORMANCE CODE</strong>

        </div>

        <div class="fa-gi-performance-code__edition">

            <span>TECHNICAL SYSTEM</span>

            <b>2004 — 2026</b>

        </div>

    </div>


    <div class="fa-gi-performance-code__hero">

        <div class="fa-gi-performance-code__hero-label">

            <span>06 / THE PERFORMANCE CODE</span>

            <i></i>

            <small>ENGINEERED BEFORE THE WHISTLE</small>

        </div>

        <h2>
            PERFORMANCE
            <br>
            IS THE
            <em>SYSTEM.</em>
        </h2>

        <p>
            Every FA SPORTS product is built around the same idea:
            remove distraction, increase freedom and let the athlete
            focus on the game.
        </p>

    </div>


    <div class="fa-gi-performance-code__grid">

        <article class="fa-gi-performance-code__item is-active">

            <div class="fa-gi-performance-code__number">
                01
            </div>

            <div class="fa-gi-performance-code__icon">
                +
            </div>

            <div class="fa-gi-performance-code__content">

                <span>FOUNDATION / 01</span>

                <h3>FIT</h3>

                <strong>PRECISION</strong>

                <p>
                    A controlled fit designed to stay with
                    the body through every movement.
                </p>

            </div>

            <div class="fa-gi-performance-code__index">
                FIT / 001
            </div>

        </article>


        <article class="fa-gi-performance-code__item">

            <div class="fa-gi-performance-code__number">
                02
            </div>

            <div class="fa-gi-performance-code__icon">
                ↗
            </div>

            <div class="fa-gi-performance-code__content">

                <span>MOBILITY / 02</span>

                <h3>MOVE</h3>

                <strong>4-WAY</strong>

                <p>
                    Flexible construction engineered for
                    unrestricted athletic movement.
                </p>

            </div>

            <div class="fa-gi-performance-code__index">
                MOVE / 002
            </div>

        </article>


        <article class="fa-gi-performance-code__item">

            <div class="fa-gi-performance-code__number">
                03
            </div>

            <div class="fa-gi-performance-code__icon">
                ◌
            </div>

            <div class="fa-gi-performance-code__content">

                <span>CLIMATE / 03</span>

                <h3>BREATHE</h3>

                <strong>92%</strong>

                <p>
                    Breathable construction designed to keep
                    the athlete comfortable under pressure.
                </p>

            </div>

            <div class="fa-gi-performance-code__index">
                AIR / 003
            </div>

        </article>


        <article class="fa-gi-performance-code__item">

            <div class="fa-gi-performance-code__number">
                04
            </div>

            <div class="fa-gi-performance-code__icon">
                ↓
            </div>

            <div class="fa-gi-performance-code__content">

                <span>CONTROL / 04</span>

                <h3>DRY</h3>

                <strong>0.3 SEC</strong>

                <p>
                    Moisture control engineered to move
                    sweat away from the playing surface.
                </p>

            </div>

            <div class="fa-gi-performance-code__index">
                DRY / 004
            </div>

        </article>


        <article class="fa-gi-performance-code__item">

            <div class="fa-gi-performance-code__number">
                05
            </div>

            <div class="fa-gi-performance-code__icon">
                ∞
            </div>

            <div class="fa-gi-performance-code__content">

                <span>DURABILITY / 05</span>

                <h3>ENDURE</h3>

                <strong>300+</strong>

                <p>
                    Built to withstand repeated training,
                    washing and match-day demands.
                </p>

            </div>

            <div class="fa-gi-performance-code__index">
                LIFE / 005
            </div>

        </article>


        <article class="fa-gi-performance-code__item">

            <div class="fa-gi-performance-code__number">
                06
            </div>

            <div class="fa-gi-performance-code__icon">
                /
            </div>

            <div class="fa-gi-performance-code__content">

                <span>RESULT / 06</span>

                <h3>PERFORM</h3>

                <strong>MATCH</strong>

                <p>
                    Every element comes together when
                    performance matters most.
                </p>

            </div>

            <div class="fa-gi-performance-code__index">
                PLAY / 006
            </div>

        </article>

    </div>


    <div class="fa-gi-performance-code__equation">

        <div class="fa-gi-performance-code__equation-label">

            <span>FA PERFORMANCE EQUATION</span>

            <small>CORE SYSTEM / 2026</small>

        </div>

        <div class="fa-gi-performance-code__formula">

            <strong>FIT</strong>
            <b>+</b>
            <strong>MOVE</strong>
            <b>+</b>
            <strong>BREATHE</strong>
            <b>+</b>
            <strong>CONTROL</strong>
            <b>+</b>
            <strong>ENDURE</strong>
            <span>=</span>
            <em>PERFORM</em>

        </div>

    </div>


    <div class="fa-gi-performance-code__closing">

        <div class="fa-gi-performance-code__closing-mark">
            FA
        </div>

        <div class="fa-gi-performance-code__closing-copy">

            <span>THE GAME STARTS BEFORE THE GAME.</span>

            <h3>
                BUILT FOR
                <em>WHAT'S NEXT.</em>
            </h3>

        </div>

        <div class="fa-gi-performance-code__closing-meta">

            <span>FA SPORTS</span>
            <span>EST. 2004</span>
            <span>PERFORMANCE SYSTEM</span>

        </div>

    </div>

</section>

@endsection


@section('footer')
    @include('partials.gear-index-footer')
@endsection


@push('scripts')
    <script src="{{ asset('js/gear-index.js') }}" defer></script>
@endpush
