@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/team-lab.css') }}">
@endpush

@section('content')

<main class="fa-teamlab">

    {{-- =====================================================
         HERO
    ====================================================== --}}
    <section class="tl-hero">

        <div class="tl-hero__grid"></div>
        <div class="tl-hero__red-line"></div>

        <div class="tl-hero__meta">
            <span>FA SPORTS</span>
            <span>TEAM LAB / 01</span>
        </div>

        <div class="tl-hero__content">

            <div class="tl-hero__eyebrow">
                <span></span>
                TEAM PERFORMANCE SYSTEM
            </div>

            <h1>
                BUILD<br>
                <em>THE</em><br>
                IDENTITY.
            </h1>

            <p>
                A team is more than a uniform.
                It is a visual language built to move,
                perform and belong together.
            </p>

            <a href="#identity" class="tl-button">
                <span>ENTER THE LAB</span>
                <b>↗</b>
            </a>

        </div>

        {{-- ONE IMAGE ONLY --}}
        <div class="tl-hero__visual">

            <div class="tl-image-frame">

                <div class="tl-image-glow"></div>

                <img
                    src="{{ asset('images/legacy/team-lab.jpg') }}"
                    alt="FA SPORTS Teamwear"
                    class="tl-main-image"
                >

                <div class="tl-image-number">01</div>

            </div>

            <div class="tl-visual-label tl-visual-label--top">
                PERFORMANCE / 01
            </div>

            <div class="tl-visual-label tl-visual-label--bottom">
                FA SPORTS / TEAM SYSTEM
            </div>

        </div>

        <div class="tl-hero__scroll">
            <span>SCROLL TO EXPLORE</span>
            <i></i>
        </div>

        <div class="tl-hero__corner">
            <span>PK</span>
            <span>04°N</span>
        </div>

    </section>


    {{-- =====================================================
         MARQUEE
    ====================================================== --}}
    <section class="tl-marquee">

        <div class="tl-marquee__track">

            <span>IDENTITY</span>
            <b>+</b>
            <span>PERFORMANCE</span>
            <b>+</b>
            <span>UNITY</span>
            <b>+</b>
            <span>PRECISION</span>
            <b>+</b>

            <span>IDENTITY</span>
            <b>+</b>
            <span>PERFORMANCE</span>
            <b>+</b>
            <span>UNITY</span>
            <b>+</b>
            <span>PRECISION</span>
            <b>+</b>

        </div>

    </section>


    {{-- =====================================================
         IDENTITY
    ====================================================== --}}
    <section class="tl-identity" id="identity">

        <div class="tl-section-number">
            01 / 04
        </div>

        <div class="tl-identity__intro">

            <span class="tl-small-label">
                THE TEAM EFFECT
            </span>

            <h2>
                NOT A<br>
                <span>UNIFORM.</span>
            </h2>

        </div>

        <div class="tl-identity__statement">

            <p class="tl-big-copy">
                When every player steps onto the field,
                they should look like they belong to
                something bigger than themselves.
            </p>

            <div class="tl-identity__words">

                <div class="tl-word">
                    <span>01</span>
                    <strong>IDENTITY</strong>
                    <small>THE LOOK THAT CONNECTS.</small>
                </div>

                <div class="tl-word">
                    <span>02</span>
                    <strong>ENERGY</strong>
                    <small>THE FEEL BEFORE THE GAME.</small>
                </div>

                <div class="tl-word">
                    <span>03</span>
                    <strong>BELONGING</strong>
                    <small>ONE TEAM. ONE PRESENCE.</small>
                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
         IMAGE STORY
    ====================================================== --}}
    <section class="tl-story">

        <div class="tl-story__background-text">
            SYSTEM
        </div>

        <div class="tl-story__line"></div>

        <div class="tl-story__content">

            <span class="tl-small-label">
                THE SYSTEM
            </span>

            <h2>
                EVERY<br>
                DETAIL<br>
                <span>COUNTS.</span>
            </h2>

            <p>
                From the first idea to the final finish,
                every decision works together to create
                one unmistakable team identity.
            </p>

        </div>

        <div class="tl-story__markers">

            <div>
                <span>01</span>
                <b>FIT</b>
            </div>

            <div>
                <span>02</span>
                <b>FABRIC</b>
            </div>

            <div>
                <span>03</span>
                <b>DETAIL</b>
            </div>

            <div>
                <span>04</span>
                <b>FINISH</b>
            </div>

        </div>

    </section>


    {{-- =====================================================
         PROCESS
    ====================================================== --}}
    <section class="tl-process">

        <div class="tl-section-number">
            02 / 04
        </div>

        <div class="tl-process__heading">

            <span class="tl-small-label">
                FROM IDEA TO FIELD
            </span>

            <h2>
                THE PROCESS<br>
                <span>HAS A PULSE.</span>
            </h2>

        </div>

        <div class="tl-process__rail">

            <div class="tl-process__line">
                <span></span>
            </div>

            <div class="tl-process__item">

                <span class="tl-process__num">01</span>

                <div>
                    <strong>THINK</strong>
                    <p>
                        Understand the team,
                        the sport and the identity.
                    </p>
                </div>

            </div>

            <div class="tl-process__item">

                <span class="tl-process__num">02</span>

                <div>
                    <strong>CREATE</strong>
                    <p>
                        Turn the vision into
                        a distinctive system.
                    </p>
                </div>

            </div>

            <div class="tl-process__item">

                <span class="tl-process__num">03</span>

                <div>
                    <strong>PERFECT</strong>
                    <p>
                        Refine every detail
                        before production.
                    </p>
                </div>

            </div>

            <div class="tl-process__item">

                <span class="tl-process__num">04</span>

                <div>
                    <strong>PERFORM</strong>
                    <p>
                        Take the identity
                        where the game happens.
                    </p>
                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
         MANIFESTO
    ====================================================== --}}
    <section class="tl-manifesto">

        <div class="tl-manifesto__orb"></div>

        <div class="tl-manifesto__content">

            <span class="tl-small-label">
                FA SPORTS / TEAM LAB
            </span>

            <h2>
                MOVE<br>
                AS <span>ONE.</span>
            </h2>

            <p>
                Different players.
                Different positions.
                One unmistakable presence.
            </p>

        </div>

        <div class="tl-manifesto__coordinates">
            <span>TEAM / 001</span>
            <span>PERFORMANCE / 360°</span>
            <span>IDENTITY / 100%</span>
        </div>

    </section>
    {{-- =========================================================
     THE MOMENT BEFORE — BLACK EDITORIAL SECTION
========================================================= --}}
<section class="tl-moment-before" id="momentBefore">

    <div class="tl-moment-grid"></div>

    <div class="tl-moment-top">
        <span class="tl-moment-number">04</span>
        <span class="tl-moment-label">TEAM LAB / IDENTITY SYSTEM</span>
    </div>

    <div class="tl-moment-content">

        <div class="tl-moment-heading-wrap">
            <span class="tl-moment-kicker">THE MOMENT BEFORE</span>

            <h2 class="tl-moment-heading">
                READY
                <span>BEFORE</span>
                <strong>THE GAME.</strong>
            </h2>
        </div>

        <div class="tl-moment-side">

            <div class="tl-moment-line"></div>

            <p class="tl-moment-text">
                Before the first whistle.
                Before the first move.
                Before the pressure begins.
            </p>

            <p class="tl-moment-small">
                Your identity is already speaking.
            </p>

        </div>

    </div>

    <div class="tl-moment-values">

        <div class="tl-moment-value">
            <span>01</span>
            <strong>FOCUS</strong>
            <p>Every detail has a purpose.</p>
        </div>

        <div class="tl-moment-value">
            <span>02</span>
            <strong>UNITY</strong>
            <p>One identity. One direction.</p>
        </div>

        <div class="tl-moment-value">
            <span>03</span>
            <strong>READY</strong>
            <p>Built for the moment that matters.</p>
        </div>

    </div>

    <div class="tl-moment-footer">

        <span>FA SPORTS</span>

        <div class="tl-moment-footer-line"></div>

        <strong>LOOK LIKE ONE. MOVE LIKE ONE.</strong>

    </div>

</section>
{{-- =========================================================
     FA SPORTS — BRAND STATEMENT
========================================================= --}}
<section class="tl-brand-statement" id="brandStatement">

    <div class="tl-brand-top">
        <span>FA SPORTS</span>
        <span>THE STANDARD BEHIND THE GAME</span>
    </div>

    <div class="tl-brand-main">

        <div class="tl-brand-intro">
            <span class="tl-brand-kicker">MORE THAN A KIT</span>

            <h2>
                BUILT
                <span>TO BE</span>
                <strong>REMEMBERED.</strong>
            </h2>
        </div>

        <div class="tl-brand-copy">

            <div class="tl-brand-red-line"></div>

            <p class="tl-brand-lead">
                FA SPORTS is where performance meets identity.
            </p>

            <p>
                Every piece is created with purpose — engineered for
                movement, shaped for confidence, and designed to make
                every team feel unmistakably its own.
            </p>

            <p>
                From the first idea to the final finish, we believe
                sportswear should do more than perform.
                <strong>It should represent.</strong>
            </p>

        </div>

    </div>

    <div class="tl-brand-statement-large">
        <span>WE DON'T JUST MAKE</span>
        <strong>WHAT ATHLETES WEAR.</strong>
        <span>WE BUILD WHAT THEY</span>
        <em>REPRESENT.</em>
    </div>

    <div class="tl-brand-pillars">

        <div class="tl-brand-pillar">
            <span>01</span>
            <strong>PRECISION</strong>
            <p>
                Every cut, stitch and finish exists for a reason.
            </p>
        </div>

        <div class="tl-brand-pillar">
            <span>02</span>
            <strong>PERFORMANCE</strong>
            <p>
                Built around movement, comfort and the demands of the game.
            </p>
        </div>

        <div class="tl-brand-pillar">
            <span>03</span>
            <strong>IDENTITY</strong>
            <p>
                Because a team should never look like everybody else.
            </p>
        </div>

    </div>

    <div class="tl-brand-bottom">
        <div class="tl-brand-bottom-line"></div>

        <span>
            PERFORM. FUEL. PERSIST.
        </span>

        <strong>
            FA SPORTS
        </strong>
    </div>

</section>


    {{-- =====================================================
         FINAL CTA
    ====================================================== --}}
    <section class="tl-final">

        <div class="tl-final__background">
            <span>TEAM</span>
        </div>

        <div class="tl-final__content">

            <span class="tl-small-label">
                READY WHEN YOU ARE
            </span>

            <h2>
                YOUR TEAM.<br>
                YOUR <span>IDENTITY.</span>
            </h2>

            <p>
                Bring the vision.
                We'll build what moves with it.
            </p>

            <a href="{{ route('connect') }}#craft" class="tl-button tl-button--dark">
                <span>START YOUR TEAM PROJECT</span>
                <b>↗</b>
            </a>

        </div>

        <div class="tl-final__red-line"></div>

    </section>

</main>

@endsection


@section('footer')
    @include('partials.team-lab-footer')
@endsection


@push('scripts')
    <script src="{{ asset('js/team-lab.js') }}" defer></script>
@endpush