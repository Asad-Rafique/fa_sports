@extends('layouts.app')

@section('content')

{{-- ============ HERO ============ --}}
<section class="fa-hero" id="arena">


    {{-- LEFT CONTENT --}}
    <div class="fa-hero__content">

        <div class="fa-hero__eyebrow">
            <span></span>
            FA SPORTS / PERFORMANCE SYSTEM
        </div>


        <h1 class="fa-hero__statement">
            <span class="hero-word hero-word--red">PERFORM.</span>
            <span class="hero-word hero-word--black">FUEL.</span>
            <span class="hero-word hero-word--red">PERSIST.</span>
        </h1>


        <p class="fa-hero__sub">
            THE GAME STARTS BEFORE<br>
            THE GAME.
        </p>


        <div class="fa-hero__line"></div>


        <div class="fa-hero__actions">

            <a href="#disciplines" class="fa-btn fa-btn--red">
                <span>ENTER PERFORMANCE</span>
                <strong>↗</strong>
            </a>

            <a href="{{ route('quote') }}" class="fa-btn fa-btn--outline">
                <span>REQUEST A QUOTE</span>
                <strong>↗</strong>
            </a>

        </div>

    </div>


    {{-- RIGHT VIDEO --}}
    <div class="fa-hero__visual">

        <video
            class="fa-hero__video"
            autoplay
            muted
            loop
            playsinline
            preload="auto"
        >
            <source
                src="{{ asset('videos/hero/hero-loop.mp4') }}"
                type="video/mp4"
            >
        </video>


        {{-- CLEAN VIDEO BORDER --}}
        <div class="fa-hero__visual-border"></div>


        {{-- VIDEO TOP INFO --}}
        <div class="fa-hero__video-top">
            <span class="fa-hero__video-number">01</span>
            <span>THE ARENA</span>
        </div>


        {{-- VIDEO BOTTOM INFO --}}
        <div class="fa-hero__video-bottom">
            <span>ENGINEERED</span>
            <strong>FOR THE MOMENT.</strong>
        </div>

    </div>


    {{-- BOTTOM INFORMATION --}}
    <div class="fa-hero__meta">
        <span class="is-red">FA SPORTS</span>
        <span>EST. 2004</span>
        <span>PERFORMANCE / TEAMWEAR / CRAFT</span>
    </div>


    {{-- SCROLL --}}
    <div class="fa-hero__scroll">
        <span>SCROLL</span>
        <i></i>
    </div>

</section>

{{-- ============ BEFORE THE WHISTLE ============ --}}
<section class="fa-whistle-mobile" id="before-whistle">

    <div class="fa-whistle-mobile__heading">
        <span class="fa-whistle-mobile__eyebrow">
            FA SPORTS / PREPARATION
        </span>

        <h2 class="fa-whistle-mobile__title">
            BEFORE THE<br>
            <span>WHISTLE.</span>
        </h2>
    </div>

    <div class="fa-whistle-mobile__main">

        <div class="fa-whistle-mobile__stage">

            <img class="fa-whistle-mobile__frame is-active"
                 data-frame="lace"
                 src="{{ asset('images/whistle/lace.jpg') }}"
                 alt="Lacing boots before the match">

            <img class="fa-whistle-mobile__frame"
                 data-frame="lock"
                 src="{{ asset('images/whistle/lock.jpg') }}"
                 alt="Preparing sports equipment">

            <img class="fa-whistle-mobile__frame"
                 data-frame="focus"
                 src="{{ asset('images/whistle/focus.jpg') }}"
                 alt="Athlete focused">

            <img class="fa-whistle-mobile__frame"
                 data-frame="move"
                 src="{{ asset('images/whistle/move.jpg') }}"
                 alt="Athlete movement">

            <img class="fa-whistle-mobile__frame"
                 data-frame="perform"
                 src="{{ asset('images/whistle/perform.jpg') }}"
                 alt="Athlete performing">

            <div class="fa-whistle-mobile__overlay">
                <span>FA SPORTS / PERFORMANCE SYSTEM</span>
                <strong>PREPARATION</strong>
            </div>

        </div>

        <ol class="fa-whistle-mobile__list" id="whistleList">

            @foreach ([
                'lace' => 'LACE',
                'lock' => 'LOCK',
                'focus' => 'FOCUS',
                'move' => 'MOVE',
                'perform' => 'PERFORM'
            ] as $key => $label)

                <li class="fa-whistle-mobile__item {{ $loop->first ? 'is-active' : '' }}"
                    data-frame="{{ $key }}">

                    <span class="fa-whistle-mobile__number">
                        0{{ $loop->iteration }}
                    </span>

                    <span class="fa-whistle-mobile__name">
                        {{ $label }}
                    </span>

                    <span class="fa-whistle-mobile__arrow">↗</span>

                </li>

            @endforeach

        </ol>

    </div>

    <div class="fa-whistle-mobile__bottom">
        <span>FA SPORTS / 2004 — PRESENT</span>
        <strong>THE MOMENT STARTS BEFORE THE GAME.</strong>
    </div>

</section>

{{-- ============ SPORTS WE BUILD FOR ============ --}}
<section class="fa-sports-showcase" id="disciplines">

    <div class="fa-sports-showcase__heading">
        <div class="fa-sports-showcase__heading-left">
            <span class="fa-sports-showcase__index">01 / OUR DISCIPLINES</span>
            <h2>SPORTS WE <span>BUILD FOR.</span></h2>
        </div>

        <span class="fa-sports-showcase__count">
            {{ str_pad($disciplines->count(), 2, '0', STR_PAD_LEFT) }} DISCIPLINES
        </span>
    </div>

    <div class="fa-sports-showcase__grid">

        @foreach ($disciplines as $discipline)

            <article class="fa-sports-card">

                <a href="{{ url('/disciplines') }}"
                   class="fa-sports-card__link">

                    <div class="fa-sports-card__image">

                        <img
                            src="{{ asset($discipline->cover_image) }}"
                            alt="{{ $discipline->name }}"
                            loading="lazy"
                        >

                        <span class="fa-sports-card__number">
                            {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                        </span>

                        <span class="fa-sports-card__arrow">↗</span>

                        <div class="fa-sports-card__overlay"></div>

                    </div>

                    <div class="fa-sports-card__content">

                        <div>
                            <h3>{{ $discipline->name }}</h3>

                            <p>{{ $discipline->tagline }}</p>
                        </div>

                        <span class="fa-sports-card__explore">
                            EXPLORE <span>↗</span>
                        </span>

                    </div>

                </a>

            </article>

        @endforeach

    </div>

    <div class="fa-sports-showcase__bottom">
        <span>FA SPORTS / PERFORMANCE SYSTEM</span>
        <strong>ONE STANDARD. EVERY DISCIPLINE.</strong>
    </div>

</section>

{{-- ============ PERFORMANCE GEAR (dark, editorial) ============ --}}
<section class="fa-gear" id="gear">
    <div class="fa-section-head fa-section-head--light">
        <span class="fa-section-head__index">02</span>
        <h2 class="fa-section-head__title">THE GEAR ROOM</h2>
    </div>
    <div class="fa-gear__list">

    @foreach ($featuredGear->take(4) as $i => $product)

        @php
            $gearImages = [
                0 => 'images/legacy/uniform2.jpg',
                1 => 'images/legacy/uniform1.jpg',
                2 => 'images/legacy/product-041.jpg',
                3 => 'images/legacy/product-065.jpg',
            ];

            $gearNames = [
                0 => 'FA PERFORMANCE PRO JERSEY',
                1 => 'FA X-PRO JERSEY',
                2 => 'CARBON FOOTWEAR',
                3 => 'FA PERFORMANCE GLOVES',
            ];
        @endphp

        <article class="fa-gear__item {{ $i % 2 === 1 ? 'is-reversed' : '' }}">

            <div class="fa-gear__image-wrap">

                <span class="fa-gear__image-index">
                    0{{ $i + 1 }}
                </span>

                <span class="fa-gear__image-label">
                    FA PERFORMANCE SYSTEM
                </span>

                <div class="fa-gear__image-frame"></div>

                <div class="fa-gear__image-sweep"></div>

                <img
                    src="{{ asset($gearImages[$i]) }}"
                    alt="{{ $gearNames[$i] }}"
                    class="fa-gear__image"
                >

            </div>

            <div class="fa-gear__info">

                <span class="fa-gear__series">
                    {{ $product->series ?: 'FA PERFORMANCE' }}
                </span>

                <h3 class="fa-gear__name">
                    {{ $gearNames[$i] }}
                </h3>

                <ul class="fa-gear__specs">
                    @foreach ($product->specs as $spec)
                        <li>{{ $spec }}</li>
                    @endforeach
                </ul>

                <a href="{{ route('quote') }}" class="fa-btn fa-btn--red fa-btn--sm">
                    REQUEST A QUOTE
                </a>

            </div>

        </article>

    @endforeach

</div>
</section>

{{-- ============ WHITE EDITORIAL PRODUCT SECTION ============ --}}
<section class="fa-editorial">

    <div class="fa-section-head fa-section-head--dark">
        <span class="fa-section-head__index">03</span>
        <h2 class="fa-section-head__title">THE ESSENTIALS</h2>
    </div>

    @php
        $essentialImages = [
            0 => 'images/legacy/product-091.jpg',
            1 => 'images/legacy/product-074.jpg',
            2 => 'images/legacy/product-063.jpg',
        ];

        $essentialNames = [
            0 => 'FA SPORTS CAP',
            1 => 'FA SPORTS BAG',
            2 => 'BOXING GLOVES',
        ];
    @endphp

    <div class="fa-editorial__grid">

        @foreach ($essentialImages as $i => $image)

            <article class="fa-editorial__card">

                <div class="fa-editorial__visual">

                    <span class="fa-editorial__number">
                        0{{ $i + 1 }}
                    </span>

                    <span class="fa-editorial__category">
                        FA ESSENTIALS
                    </span>

                    <span class="fa-editorial__corner fa-editorial__corner--tl"></span>
                    <span class="fa-editorial__corner fa-editorial__corner--br"></span>

                    <div class="fa-editorial__scan"></div>

                    <img
                        src="{{ asset($image) }}"
                        alt="{{ $essentialNames[$i] }}"
                        class="fa-editorial__img"
                    >

                </div>

                <div class="fa-editorial__meta">

                    <div>
                        <span class="fa-editorial__label">FA SPORTS</span>

                        <p class="fa-editorial__name">
                            {{ $essentialNames[$i] }}
                        </p>
                    </div>

                    <span class="fa-editorial__arrow">↗</span>

                </div>

            </article>

        @endforeach

    </div>

</section>

{{-- ============ THE FA EDGE ============ --}}
<section class="fa-edge" id="fa-edge">

    <div class="fa-edge__intro">

        <div class="fa-edge__headline-wrap">
            <span class="fa-edge__eyebrow">WHY FA SPORTS</span>

            <h2 class="fa-edge__headline">
                MADE FOR
                <span>THE MOMENT.</span>
            </h2>
        </div>

        <p class="fa-edge__copy">
            From the first layer to the final stitch, every FA SPORTS
            product is developed around movement, identity and the
            demands of competition.
        </p>

    </div>


    <div class="fa-edge__grid">

        <article class="fa-edge__card">

            <span class="fa-edge__number">01</span>

            <div class="fa-edge__mark">
                PERFORMANCE
            </div>

            <div class="fa-edge__content">

                <h3>
                    MOVE<br>
                    WITHOUT
                    <span>LIMITS.</span>
                </h3>

                <p>
                    Lightweight construction, breathable fabrics and
                    movement-focused cuts built to keep athletes
                    comfortable when intensity rises.
                </p>

            </div>

            <span class="fa-edge__line"></span>

        </article>


        <article class="fa-edge__card">

            <span class="fa-edge__number">02</span>

            <div class="fa-edge__mark">
                IDENTITY
            </div>

            <div class="fa-edge__content">

                <h3>
                    WEAR
                    <span>YOUR</span><br>
                    IDENTITY.
                </h3>

                <p>
                    Every colour, graphic, name and number becomes part
                    of a visual identity designed to make your team
                    instantly recognisable.
                </p>

            </div>

            <span class="fa-edge__line"></span>

        </article>


        <article class="fa-edge__card">

            <span class="fa-edge__number">03</span>

            <div class="fa-edge__mark">
                DURABILITY
            </div>

            <div class="fa-edge__content">

                <h3>
                    BUILT
                    <span>FOR</span><br>
                    THE GRIND.
                </h3>

                <p>
                    Strong construction and carefully selected materials
                    made to handle training sessions, match days and
                    everything between them.
                </p>

            </div>

            <span class="fa-edge__line"></span>

        </article>

    </div>


    <div class="fa-edge__bottom">

        <span class="fa-edge__bottom-label">
            FA SPORTS / 2004 — PRESENT
        </span>

        <strong>
            PERFORMANCE IS THE STANDARD.
        </strong>

    </div>
</section>{{-- ============ THE FA STANDARD ============ --}}
<section class="fa-standard" id="fa-standard">

    <div class="fa-standard__intro">
        <div class="fa-standard__headline-wrap">
            <span class="fa-standard__eyebrow">ENGINEERED FOR THE GAME</span>

            <h2 class="fa-standard__headline">
                BUILT TO<br>
                <span>PERFORM.</span>
                BUILT TO LAST.
            </h2>
        </div>

        <p class="fa-standard__copy">
            Every FA SPORTS piece starts with purpose — performance fabrics,
            precise construction and finishing engineered for athletes who
            demand more from their gear.
        </p>
    </div>

    <div class="fa-standard__grid">

        <article class="fa-standard__card">
            <span class="fa-standard__number">01</span>
            <div class="fa-standard__icon">FABRIC</div>
            <h3>PERFORMANCE FABRICS</h3>
            <p>
                Lightweight, breathable materials designed to keep athletes
                comfortable through every phase of the game.
            </p>
            <span class="fa-standard__line"></span>
        </article>

        <article class="fa-standard__card">
            <span class="fa-standard__number">02</span>
            <div class="fa-standard__icon">FIT</div>
            <h3>ATHLETIC FIT</h3>
            <p>
                Movement-focused cuts engineered to give athletes freedom,
                balance and confidence without restriction.
            </p>
            <span class="fa-standard__line"></span>
        </article>

        <article class="fa-standard__card">
            <span class="fa-standard__number">03</span>
            <div class="fa-standard__icon">CRAFT</div>
            <h3>PRECISION CRAFT</h3>
            <p>
                Carefully constructed panels, stitching and finishing create
                teamwear made for serious performance.
            </p>
            <span class="fa-standard__line"></span>
        </article>

        <article class="fa-standard__card">
            <span class="fa-standard__number">04</span>
            <div class="fa-standard__icon">PRINT</div>
            <h3>BUILT-IN IDENTITY</h3>
            <p>
                Sharp graphics, colours, names and numbers integrated into
                designs that represent every team with pride.
            </p>
            <span class="fa-standard__line"></span>
        </article>

        <article class="fa-standard__card">
            <span class="fa-standard__number">05</span>
            <div class="fa-standard__icon">DURABILITY</div>
            <h3>MADE TO ENDURE</h3>
            <p>
                Construction and materials selected to handle training,
                competition and repeated washing.
            </p>
            <span class="fa-standard__line"></span>
        </article>

        <article class="fa-standard__card">
            <span class="fa-standard__number">06</span>
            <div class="fa-standard__icon">GLOBAL</div>
            <h3>READY FOR TEAMS</h3>
            <p>
                From individual athletes to complete squads, FA SPORTS
                delivers professional teamwear built around your identity.
            </p>
            <span class="fa-standard__line"></span>
        </article>

    </div>

    <div class="fa-standard__bottom">
        <span>FA SPORTS</span>
        <strong>THE GAME STARTS BEFORE THE GAME.</strong>
    </div>

</section>



{{-- ============ PERFORMANCE LAB (white, technical) ============ --}}
<section class="fa-lab">
    <div class="fa-section-head fa-section-head--dark">
        <span class="fa-section-head__index">05</span>
        <h2 class="fa-section-head__title">PERFORMANCE LAB</h2>
    </div>

    <div class="fa-lab__grid">
        <div class="fa-lab__metric"><span class="fa-lab__value">92%</span><span class="fa-lab__label">BREATHABILITY</span></div>
        <div class="fa-lab__metric"><span class="fa-lab__value">0.3s</span><span class="fa-lab__label">MOISTURE CONTROL</span></div>
        <div class="fa-lab__metric"><span class="fa-lab__value">118g</span><span class="fa-lab__label">LIGHTWEIGHT</span></div>
        <div class="fa-lab__metric"><span class="fa-lab__value">4-WAY</span><span class="fa-lab__label">FLEXIBILITY</span></div>
        <div class="fa-lab__metric"><span class="fa-lab__value">300+</span><span class="fa-lab__label">WASH DURABILITY</span></div>
        <div class="fa-lab__metric"><span class="fa-lab__value">360°</span><span class="fa-lab__label">MOTION &amp; FIT</span></div>
    </div>
</section>

{{-- ============ FA PERFORMANCE SYSTEM ============ --}}

<section class="fa-system" id="performance-system">
<div class="fa-system__intro">

    <div>
        <span class="fa-system__eyebrow">ENGINEERED AROUND THE ATHLETE</span>

        <h2 class="fa-system__headline">
            GEAR FOR
            <span>EVERY MOVE.</span>
        </h2>
    </div>

    <p class="fa-system__copy">
        Performance does not come from one piece of equipment.
        It comes from the system — apparel, footwear and essential
        gear working together around the athlete.
    </p>

</div>


<div class="fa-system__showcase">

    {{-- PRODUCT 01 --}}
    <article class="fa-system__card fa-system__card--large">

        <div class="fa-system__visual">

            <span class="fa-system__number">01</span>

            <span class="fa-system__tag">
                PERFORMANCE APPAREL
            </span>

            <span class="fa-system__frame fa-system__frame--tl"></span>
            <span class="fa-system__frame fa-system__frame--br"></span>

            <div class="fa-system__shine"></div>

            <img
                src="{{ asset('images/legacy/product-008.jpg') }}"
                alt="FA SPORTS Performance Apparel"
                class="fa-system__image"
            >

        </div>

        <div class="fa-system__info">

            <div>
                <span class="fa-system__label">01 / APPAREL</span>

                <h3>PERFORMANCE<br>APPAREL.</h3>
            </div>

            <span class="fa-system__arrow">↗</span>

        </div>

    </article>


    {{-- PRODUCT 02 --}}
    <article class="fa-system__card">

        <div class="fa-system__visual">

            <span class="fa-system__number">02</span>

            <span class="fa-system__tag">
                PERFORMANCE FOOTWEAR
            </span>

            <span class="fa-system__frame fa-system__frame--tl"></span>
            <span class="fa-system__frame fa-system__frame--br"></span>

            <div class="fa-system__shine"></div>

            <img
                src="{{ asset('images/legacy/product-043.jpg') }}"
                alt="FA SPORTS Performance Footwear"
                class="fa-system__image"
            >

        </div>

        <div class="fa-system__info">

            <div>
                <span class="fa-system__label">02 / FOOTWEAR</span>

                <h3>MOVE<br><span>FASTER.</span></h3>
            </div>

            <span class="fa-system__arrow">↗</span>

        </div>

    </article>


    {{-- PRODUCT 03 --}}
    <article class="fa-system__card">

        <div class="fa-system__visual">

            <span class="fa-system__number">03</span>

            <span class="fa-system__tag">
                PERFORMANCE ESSENTIALS
            </span>

            <span class="fa-system__frame fa-system__frame--tl"></span>
            <span class="fa-system__frame fa-system__frame--br"></span>

            <div class="fa-system__shine"></div>

            <img
                src="{{ asset('images/legacy/product-055.jpg') }}"
                alt="FA SPORTS Performance Essentials"
                class="fa-system__image"
            >

        </div>

        <div class="fa-system__info">

            <div>
                <span class="fa-system__label">03 / ESSENTIALS</span>

                <h3>READY<br><span>FOR MORE.</span></h3>
            </div>

            <span class="fa-system__arrow">↗</span>

        </div>

    </article>

</div>


<div class="fa-system__bottom">

    <span>FA SPORTS / PERFORMANCE SYSTEM</span>

    <strong>
        THE GAME STARTS BEFORE THE GAME.
    </strong>

</div>


</section>


{{-- ============ THE PLAYBOOK ============ --}}

<section class="fa-playbook" id="playbook">


<div class="fa-section-head fa-section-head--light">
    <span class="fa-section-head__index">08</span>
    <h2 class="fa-section-head__title">WHAT'S MOVING THE GAME.</h2>
</div>


{{-- FEATURED STORY --}}
@if ($featuredStory)

    <article class="fa-playbook-main">

        {{-- FEATURED IMAGE --}}
        <div class="fa-playbook-main__image">

            <span class="fa-playbook-main__number">01</span>

            <span class="fa-playbook-main__tag">
                FEATURED / THE PLAYBOOK
            </span>

            <span class="fa-playbook-main__corner fa-playbook-main__corner--tl"></span>
            <span class="fa-playbook-main__corner fa-playbook-main__corner--br"></span>

            <div class="fa-playbook-main__scan"></div>

            <img
                src="{{ asset($featuredStory->cover_image) }}"
                alt="{{ $featuredStory->title }}"
                class="fa-playbook-main__photo"
            >

            <div class="fa-playbook-main__overlay"></div>

        </div>

        {{-- FEATURED CONTENT --}}
        <div class="fa-playbook-main__content">

            <span class="fa-playbook-main__category">
                {{ $featuredStory->category }}
            </span>

            <h3 class="fa-playbook-main__title">
                {{ $featuredStory->title }}
            </h3>

            <p class="fa-playbook-main__description">
                {{ $featuredStory->excerpt }}
            </p>

            <span class="fa-playbook-main__read">
                READ STORY <span>↗</span>
            </span>

        </div>

    </article>

@endif


{{-- FOUR VISUAL STORIES --}}
@php
    $playbookImages = [
        0 => 'images/legacy/fa-crest-cap.jpg',
        1 => 'images/legacy/fa-grip-glove.jpg',
        2 => 'images/legacy/fa-run-carbon.jpg',
        3 => 'images/legacy/fa-squad-tracksuit.jpg',
    ];

    $playbookLabels = [
        0 => 'FA ESSENTIAL',
        1 => 'PERFORMANCE',
        2 => 'FOOTWEAR',
        3 => 'TEAMWEAR',
    ];

    $playbookTitles = [
        0 => 'THE DETAILS MATTER.',
        1 => 'GRIP. CONTROL. CONFIDENCE.',
        2 => 'BUILT TO MOVE.',
        3 => 'ONE SQUAD. ONE IDENTITY.',
    ];
@endphp


<div class="fa-playbook__grid">

    @foreach ($playbookImages as $i => $image)

        <article class="fa-playbook__card">

            <div class="fa-playbook__card-visual">

                <span class="fa-playbook__card-number">
                    0{{ $i + 2 }}
                </span>

                <span class="fa-playbook__card-tag">
                    {{ $playbookLabels[$i] }}
                </span>

                <span class="fa-playbook__card-frame fa-playbook__card-frame--tl"></span>
                <span class="fa-playbook__card-frame fa-playbook__card-frame--br"></span>

                <div class="fa-playbook__card-scan"></div>

                <img
                    src="{{ asset($image) }}"
                    alt="{{ $playbookTitles[$i] }}"
                    class="fa-playbook__card-img"
                >

            </div>


            <div class="fa-playbook__card-body">

                <span class="fa-playbook__card-category">
                    {{ $playbookLabels[$i] }}
                </span>

                <h4 class="fa-playbook__card-title">
                    {{ $playbookTitles[$i] }}
                </h4>

                <span class="fa-playbook__card-arrow">
                    ↗
                </span>

            </div>

        </article>

    @endforeach

</div>


{{-- TRENDING TICKER --}}
@if ($trendingStories->count())

    <div class="fa-ticker">

        <span class="fa-ticker__label">
            TRENDING NOW
        </span>

        <div class="fa-ticker__track">

            @foreach ($trendingStories as $t)

                <span class="fa-ticker__item">
                    {{ $t->title }}
                </span>

            @endforeach

        </div>

    </div>

@endif


</section>


{{-- ============ OUR DRIVE (brand story teaser) ============ --}}
<section class="fa-drive">
    <h2 class="fa-drive__headline">
        BUILT BEFORE<br>
        THE BUZZER<br>
        <span class="fa-red">SOUNDS.</span>
    </h2>
    <p class="fa-drive__copy">
        FA SPORTS exists in the hour before competition — the lacing, the focus,
        the fabric against skin. Everything we make is built for that hour.
    </p>
    <a href="{{ route('gear-index') }}" class="fa-btn fa-btn--outline">CHOOSE YOUR GEAR</a>
</section>

@endsection
