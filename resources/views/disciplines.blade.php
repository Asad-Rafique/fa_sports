
@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/disciplines.css') }}">
@endpush


@section('content')

@php
    /*
    |--------------------------------------------------------------------------
    | SAFE DISCIPLINE DATA
    |--------------------------------------------------------------------------
    | priorities and gear_categories may be stored as JSON strings.
    | Convert them safely to arrays before using foreach().
    */

    $safeDisciplines = collect($disciplines)->map(function ($discipline) {

        // Priorities
        $priorities = $discipline->priorities ?? [];

        if (is_string($priorities)) {
            $decoded = json_decode($priorities, true);
            $priorities = is_array($decoded) ? $decoded : [];
        }

        if (!is_array($priorities)) {
            $priorities = [];
        }


        // Gear categories
        $gearCategories = $discipline->gear_categories ?? [];

        if (is_string($gearCategories)) {
            $decoded = json_decode($gearCategories, true);
            $gearCategories = is_array($decoded) ? $decoded : [];
        }

        if (!is_array($gearCategories)) {
            $gearCategories = [];
        }


        $discipline->safe_priorities = $priorities;
        $discipline->safe_gear_categories = $gearCategories;

        return $discipline;
    });
@endphp


<main class="fa-disciplines-page">


    {{-- =========================================================
         HERO
    ========================================================== --}}

    <section class="dp-hero">

        <div class="dp-hero__grid"></div>

        <div class="dp-hero__top">

            <span>
                FA SPORTS / DISCIPLINES
            </span>

            <span>
                PERFORMANCE SPORTSWEAR
            </span>

        </div>


        <div class="dp-hero__content">

            <div class="dp-hero__number">
                01
            </div>


            <div class="dp-hero__title">

                <span class="dp-red-label">
                    EVERY GAME. DIFFERENT DEMANDS.
                </span>

                <h1>
                    YOUR SPORT
                    <br>
                    <strong>YOUR STANDARD.</strong>
                </h1>

                <p>
                    FA SPORTS creates performance sportswear,
                    custom teamwear and game-ready gear around
                    the demands of every discipline.
                </p>

            </div>

        </div>


        <div class="dp-hero__bottom">

            <span>
                THE GAME STARTS BEFORE THE GAME.
            </span>

            <span class="dp-scroll-mark">
                SCROLL ↓
            </span>

        </div>

    </section>



    {{-- =========================================================
         MARQUEE
    ========================================================== --}}

    <section class="dp-marquee">

        <div class="dp-marquee__track">

            <span>PERFORMANCE WEAR</span>
            <i>×</i>

            <span>CUSTOM TEAMWEAR</span>
            <i>×</i>

            <span>MATCH KITS</span>
            <i>×</i>

            <span>TRAINING GEAR</span>
            <i>×</i>

            <span>FA SPORTS</span>
            <i>×</i>

            <span>PERFORMANCE WEAR</span>

        </div>

    </section>



    {{-- =========================================================
         INTRO
    ========================================================== --}}

    <section class="dp-intro">

        <div class="dp-intro__number">
            02 / THE APPROACH
        </div>


        <div class="dp-intro__content">

            <span class="dp-red-label">
                BUILT AROUND THE ATHLETE
            </span>

            <h2>
                DIFFERENT SPORTS.
                <br>
                <strong>DIFFERENT NEEDS.</strong>
            </h2>

            <p>
                A footballer needs freedom through every sprint.
                A cricketer needs control through every delivery.
                A boxer needs unrestricted movement.
                FA SPORTS develops sportswear with those
                differences in mind.
            </p>

        </div>

    </section>



    {{-- =========================================================
         CHOOSE YOUR GAME
         FA SPORTSWEAR FOCUSED
    ========================================================== --}}

    <section class="dp-game-selector">

        <div class="dp-game-selector__top">

            <div class="dp-game-selector__label">

                <span>
                    03 / FA SPORTSWEAR
                </span>

                <span>
                    DISCIPLINE × PERFORMANCE
                </span>

            </div>


            <div class="dp-game-selector__heading">

                <h2>
                    CHOOSE
                    <br>
                    <strong>YOUR GAME.</strong>
                </h2>


                <div class="dp-game-selector__intro">

                    <span class="dp-red-line"></span>

                    <p>
                        Every sport demands something different.
                        <strong>FA SPORTS</strong> builds sportswear
                        around the way you actually play — from
                        custom team kits and performance jerseys
                        to training wear, footwear and specialist gear.
                    </p>

                </div>

            </div>

        </div>


        {{-- DISCIPLINE LIST --}}

        <div class="dp-game-list">

            @foreach($safeDisciplines as $index => $discipline)

                @php
                    $number = str_pad(
                        $index + 1,
                        2,
                        '0',
                        STR_PAD_LEFT
                    );

                    $gameDescriptions = [

                        'Football' =>
                            'Match kits, performance jerseys, training wear and teamwear built for speed and movement.',

                        'Cricket' =>
                            'Performance cricket wear, team kits and training apparel designed for control and endurance.',

                        'Basketball' =>
                            'Lightweight jerseys, shorts and performance sportswear made for explosive movement.',

                        'Boxing' =>
                            'Training apparel, fightwear and performance gear built around speed, control and endurance.',

                        'Running' =>
                            'Lightweight running wear engineered for comfort, movement and moisture control.',

                        'Training' =>
                            'Versatile training sportswear designed for everyday performance and demanding sessions.',

                        'Fitness' =>
                            'Performance fitness wear built for flexibility, breathability and repeated movement.',
                    ];

                    $gameDescription =
                        $gameDescriptions[$discipline->name]
                        ?? 'Performance sportswear and custom teamwear built around your game.';
                @endphp


                <a
                    href="#discipline-{{ $discipline->id }}"
                    class="dp-game-row"
                >

                    <div class="dp-game-row__number">
                        {{ $number }}
                    </div>


                    <div class="dp-game-row__name">

                        <span class="dp-game-row__eyebrow">
                            FA SPORTS / PERFORMANCE WEAR
                        </span>

                        <h3>
                            {{ strtoupper($discipline->name) }}
                        </h3>

                    </div>


                    <div class="dp-game-row__description">

                        <p>
                            {{ $gameDescription }}
                        </p>

                        <span class="dp-game-row__gear">
                            JERSEYS · TEAMWEAR · TRAINING · CUSTOM GEAR
                        </span>

                    </div>


                    <div class="dp-game-row__arrow">
                        <span>↗</span>
                    </div>

                </a>

            @endforeach

        </div>


        {{-- SPORTSWEAR STATEMENT --}}

        <div class="dp-game-selector__statement">

            <div class="dp-game-selector__statement-number">
                FA / 04
            </div>


            <div class="dp-game-selector__statement-content">

                <span>
                    MORE THAN SPORTSWEAR
                </span>

                <h3>
                    YOUR GAME.
                    <br>
                    <strong>YOUR KIT.</strong>
                </h3>

                <p>
                    FA SPORTS combines performance-focused materials,
                    functional construction and custom team identity
                    to create sportswear made for the moments before,
                    during and after the game.
                </p>

            </div>


            <div class="dp-game-selector__statement-tags">

                <span>CUSTOM KITS</span>
                <span>TEAMWEAR</span>
                <span>PERFORMANCE WEAR</span>
                <span>TRAINING GEAR</span>

            </div>

        </div>

    </section>



    {{-- =========================================================
         PERFORMANCE PROFILE
    ========================================================== --}}

    <section class="dp-performance">

        <div class="dp-performance__header">

            <div>

                <span class="dp-red-label">
                    04 / PERFORMANCE PROFILE
                </span>

                <h2>
                    BUILT FOR
                    <br>
                    <strong>THE DEMAND.</strong>
                </h2>

            </div>


            <p>
                Sportswear should respond to the athlete —
                not get in their way.
            </p>

        </div>


        <div class="dp-performance__list">

            @foreach($safeDisciplines as $discipline)

                <article
                    class="dp-performance-card"
                    id="discipline-{{ $discipline->id }}"
                >

                    <div class="dp-performance-card__name">

                        <span>
                            FA SPORTS /
                            {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                        </span>

                        <h3>
                            {{ strtoupper($discipline->name) }}
                        </h3>

                    </div>


                    <div class="dp-performance-card__meters">

                        @foreach($indicatorKeys as $indicator)

                            @php
                                $indicatorData =
                                    $disciplineIndicatorData[$discipline->id][$indicator]
                                    ?? 0;

                                $indicatorData = is_numeric($indicatorData)
                                    ? (int) $indicatorData
                                    : 0;

                                $indicatorData = min(
                                    100,
                                    max(0, $indicatorData)
                                );
                            @endphp


                            <div class="dp-meter">

                                <div class="dp-meter__top">

                                    <span>
                                        {{ strtoupper(str_replace('_', ' ', $indicator)) }}
                                    </span>

                                    <strong>
                                        {{ $indicatorData }}%
                                    </strong>

                                </div>


                                <div class="dp-meter__track">

                                    <span
                                        style="width: {{ $indicatorData }}%;"
                                    ></span>

                                </div>

                            </div>

                        @endforeach

                    </div>

                </article>

            @endforeach

        </div>

    </section>


{{-- =========================================================
     THE FIVE MOVEMENTS — NEW RESPONSIVE GALLERY
========================================================= --}}

<section class="fa-movements" id="five-movements">

    <div class="fa-movements__header">

        <div class="fa-movements__heading">

            <span class="fa-movements__eyebrow">
                05 / THE PREPARATION
            </span>

            <h2>
                THE DISCIPLINE
                <br>
                <strong>IN FIVE MOVEMENTS.</strong>
            </h2>

        </div>

        <p class="fa-movements__description">
            Before performance comes preparation.
            Five moments. One mindset. One standard.
        </p>

    </div>


    <div class="fa-movements__grid">

        {{-- 01 LACE --}}
        <article class="fa-movement-card">

            <div class="fa-movement-card__image fa-movement-card__image--lace">

                <img
                    src="{{ asset('images/whistle/lace.jpg') }}"
                    alt="Athlete preparing before performance"
                    loading="lazy"
                >

                <span class="fa-movement-card__index">01</span>

            </div>

            <div class="fa-movement-card__info">
                <div>
                    <span>LACE</span>
                    <h3>PREPARE.</h3>
                </div>

                <span class="fa-movement-card__arrow">↗</span>
            </div>

        </article>


        {{-- 02 LOCK --}}
        <article class="fa-movement-card">

            <div class="fa-movement-card__image fa-movement-card__image--lock">

                <img
                    src="{{ asset('images/whistle/lock.jpg') }}"
                    alt="Athlete getting ready for the game"
                    loading="lazy"
                >

                <span class="fa-movement-card__index">02</span>

            </div>

            <div class="fa-movement-card__info">
                <div>
                    <span>LOCK</span>
                    <h3>COMMIT.</h3>
                </div>

                <span class="fa-movement-card__arrow">↗</span>
            </div>

        </article>


        {{-- 03 FOCUS --}}
        <article class="fa-movement-card">

            <div class="fa-movement-card__image fa-movement-card__image--focus">

                <img
                    src="{{ asset('images/whistle/focus.jpg') }}"
                    alt="Athlete focused before performance"
                    loading="lazy"
                >

                <span class="fa-movement-card__index">03</span>

            </div>

            <div class="fa-movement-card__info">
                <div>
                    <span>FOCUS</span>
                    <h3>BELIEVE.</h3>
                </div>

                <span class="fa-movement-card__arrow">↗</span>
            </div>

        </article>


        {{-- 04 MOVE --}}
        <article class="fa-movement-card">

            <div class="fa-movement-card__image fa-movement-card__image--move">

                <img
                    src="{{ asset('images/whistle/react.png') }}"
                    alt="Athlete in motion"
                    loading="lazy"
                >

                <span class="fa-movement-card__index">04</span>

            </div>

            <div class="fa-movement-card__info">
                <div>
                    <span>MOVE</span>
                    <h3>REACT.</h3>
                </div>

                <span class="fa-movement-card__arrow">↗</span>
            </div>

        </article>


        {{-- 05 PERFORM --}}
        <article class="fa-movement-card fa-movement-card--featured">

            <div class="fa-movement-card__image fa-movement-card__image--perform">

                <img
                    src="{{ asset('images/whistle/perform.jpg') }}"
                    alt="Athlete delivering performance"
                    loading="lazy"
                >

                <span class="fa-movement-card__index">05</span>

            </div>

            <div class="fa-movement-card__info">
                <div>
                    <span>PERFORM</span>
                    <h3>DELIVER.</h3>
                </div>

                <span class="fa-movement-card__arrow">↗</span>
            </div>

        </article>

    </div>


    <div class="fa-movements__footer">

        <span>FA SPORTS</span>

        <div></div>

        <span>THE GAME STARTS BEFORE THE GAME.</span>

    </div>

</section>




    {{-- =========================================================
         BRAND STATEMENT
         NO IMAGE
    ========================================================== --}}

    <section class="dp-statement">

        <div class="dp-statement__number">
            06
        </div>


        <div class="dp-statement__content">

            <span>
                ONE STANDARD
            </span>

            <h2>
                NO TWO ATHLETES
                <br>
                MOVE THE SAME.
            </h2>

            <p>
                So why should their sportswear?
                FA SPORTS creates performance apparel
                around movement, discipline and identity —
                helping athletes feel ready before the game begins.
            </p>

        </div>

    </section>



    {{-- =========================================================
         DISCIPLINE PRIORITIES
    ========================================================== --}}

    <section class="dp-priorities">

        <div class="dp-priorities__header">

            <span class="dp-red-label">
                07 / WHAT MATTERS
            </span>

            <h2>
                EVERY DISCIPLINE.
                <br>
                <strong>ITS OWN PRIORITY.</strong>
            </h2>

        </div>


        <div class="dp-priorities__grid">

            @foreach($safeDisciplines as $discipline)

                <article class="dp-priority-card">

                    <div class="dp-priority-card__number">
                        {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                    </div>


                    <h3>
                        {{ strtoupper($discipline->name) }}
                    </h3>


                    <div class="dp-priority-card__items">

                        @forelse($discipline->safe_priorities as $priority)

                            <span>

                                {{
                                    strtoupper(
                                        is_array($priority)
                                            ? (
                                                $priority['name']
                                                ?? $priority['label']
                                                ?? 'PERFORMANCE'
                                            )
                                            : $priority
                                    )
                                }}

                            </span>

                        @empty

                            <span>
                                PERFORMANCE
                            </span>

                        @endforelse

                    </div>

                </article>

            @endforeach

        </div>

    </section>



    {{-- =========================================================
         FA SPORTS GEAR SYSTEM
    ========================================================== --}}

    <section class="dp-gear-system">

        <div class="dp-gear-system__intro">

            <span class="dp-red-label">
                08 / THE FA SPORTS GEAR SYSTEM
            </span>

            <h2>
                YOUR SPORT.
                <br>
                <strong>YOUR EQUIPMENT.</strong>
            </h2>

            <p>
                From the first training session to match day,
                FA SPORTS brings performance sportswear and
                specialist gear together under one standard.
            </p>

        </div>


        <div class="dp-gear-system__list">

            @foreach($safeDisciplines as $discipline)

                <div class="dp-gear-row">

                    <div class="dp-gear-row__name">

                        <span>
                            {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                        </span>

                        <h3>
                            {{ strtoupper($discipline->name) }}
                        </h3>

                    </div>


                    <div class="dp-gear-row__items">

                        @forelse($discipline->safe_gear_categories as $gear)

                            <span>

                                {{
                                    strtoupper(
                                        is_array($gear)
                                            ? (
                                                $gear['name']
                                                ?? $gear['label']
                                                ?? 'GEAR'
                                            )
                                            : $gear
                                    )
                                }}

                            </span>

                        @empty

                            <span>
                                PERFORMANCE WEAR
                            </span>

                            <span>
                                TEAMWEAR
                            </span>

                        @endforelse

                    </div>

                </div>

            @endforeach

        </div>

    </section>



    {{-- =========================================================
         FINAL BRAND STATEMENT
    ========================================================== --}}

    <section class="dp-final">

        <div class="dp-final__small">
            FA SPORTS / PERFORMANCE SPORTSWEAR
        </div>


        <h2>
            THE GAME CHANGES.
            <br>
            <strong>OUR STANDARD DOESN'T.</strong>
        </h2>


        <p>
            Custom sportswear. Performance teamwear.
            Built around the game.
        </p>


        <div class="dp-final__line"></div>


        <span>
            THE GAME STARTS BEFORE THE GAME.
        </span>

    </section>


</main>

@endsection


@push('scripts')
    <script src="{{ asset('js/disciplines.js') }}"></script>
@endpush
