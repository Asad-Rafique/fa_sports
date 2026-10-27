@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')

{{-- =========================================================
    ABOUT HERO — NO IMAGE
========================================================= --}}
<section class="about-hero">

    <div class="about-hero__red-block"></div>

    <div class="about-hero__outline"></div>

    <div class="about-hero__top">
        <span>FA SPORTS</span>
        <span>ABOUT / 01</span>
        <span>EST. 2004</span>
    </div>

    <div class="about-hero__main">

        <div class="about-hero__label">
            <span></span>
            COMPANY PROFILE
        </div>

        <h1>
            WHO<br>
            <span>WE</span><br>
            ARE.
        </h1>

        <div class="about-hero__copy">

            <p>
                We build sportswear with purpose —
                combining performance, identity and
                precision into every product.
            </p>

            <a href="#our-team">
                MEET THE PEOPLE
                <span>↓</span>
            </a>

        </div>

    </div>

    <div class="about-hero__bottom">

        <span>TEAMWEAR</span>
        <span>PERFORMANCE GEAR</span>
        <span>CUSTOM DEVELOPMENT</span>
        <span>MANUFACTURING</span>

    </div>

    <div class="about-hero__mark">
        FA
    </div>

</section>

{{-- =========================================================
    COMPANY INTRO
========================================================= --}}
<section class="about-story">

    <div class="about-wrap">

        <div class="about-label">
            <span>01</span>
            <span>OUR STORY</span>
        </div>

        <div class="about-story__content">

            <h2>
                MORE THAN<br>
                <em>SPORTSWEAR.</em>
            </h2>

            <div class="about-story__text">

                <p>
                    At FA SPORTS, we believe performance starts long
                    before the game begins.
                </p>

                <p>
                    It starts with the right idea, the right material,
                    the right construction and the people behind every
                    decision.
                </p>

                <p>
                    Our focus is simple — create sportswear and
                    teamwear that combines performance, identity,
                    comfort and purpose.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    RED STATEMENT
========================================================= --}}
<section class="about-statement">

    <div class="about-statement__number">
        02
    </div>

    <div class="about-statement__content">

        <span>THE FA SPORTS APPROACH</span>

        <h2>
            THE GAME STARTS
            <strong>BEFORE THE GAME.</strong>
        </h2>

        <p>
            Every stitch, every panel and every detail contributes
            to what happens when the athlete steps onto the field.
        </p>

    </div>

</section>
{{-- =========================================================
    TEAM — PREMIUM EDITORIAL REDESIGN
========================================================= --}}
<section class="about-team" id="our-team">

    <div class="about-wrap">

        {{-- SECTION HEADER --}}
        <div class="about-team__heading">

            <div class="about-label">
                <span>03</span>
                <span>THE PEOPLE BEHIND FA SPORTS</span>
            </div>

            <div class="about-team__intro">

                <div class="about-team__title">
                    <span class="about-team__eyebrow">
                        BUILT BY PEOPLE. DRIVEN BY PURPOSE.
                    </span>

                    <h2>
                        MEET THE
                        <em>TEAM.</em>
                    </h2>
                </div>

                <p>
                    Great products begin with great people.
                    Meet the team bringing ideas, craftsmanship
                    and performance together at FA SPORTS.
                </p>

            </div>

            <div class="about-team__rule">
                <span>OUR PEOPLE</span>
                <span>ONE SHARED PURPOSE</span>
            </div>

        </div>

        {{-- TEAM MEMBERS --}}
        <div class="about-members">

            @forelse($members as $index => $member)

                <article
                    class="about-member {{ $index % 2 !== 0 ? 'about-member--reverse' : '' }}"
                >

                    <div class="about-member__visual">

                        <div class="about-member__image-wrap">

                            @if($member->image)

                                <img
                                    src="{{ asset($member->image) }}"
                                    alt="{{ $member->name }}"
                                    loading="lazy"
                                >

                            @else

                                <div class="about-member__placeholder">
                                    FA
                                </div>

                            @endif

                            <span class="about-member__image-label">
                                FA SPORTS / TEAM
                            </span>

                        </div>

                        <div class="about-member__index">
                            {{ str_pad($member->sort_order, 2, '0', STR_PAD_LEFT) }}
                        </div>

                    </div>

                    <div class="about-member__content">

                        <div class="about-member__topline">
                            <span>
                                {{ strtoupper($member->department ?? 'FA SPORTS') }}
                            </span>
                            <i></i>
                        </div>

                        <h3>{{ $member->name }}</h3>

                        <h4>{{ $member->position }}</h4>

                        @if($member->bio)
                            <p>{{ $member->bio }}</p>
                        @endif

                        <div class="about-member__signature">
                            <span>FA</span> SPORTS
                        </div>

                    </div>

                </article>

            @empty

                <div class="about-empty">
                    <p>Our team introduction is coming soon.</p>
                </div>

            @endforelse

        </div>

    </div>

</section>




{{-- =========================================================
    VALUES
========================================================= --}}
<section class="about-values">

    <div class="about-wrap">

        <div class="about-label">
            <span>04</span>
            <span>WHAT DRIVES US</span>
        </div>

        <div class="about-values__heading">

            <h2>
                BUILT WITH<br>
                <em>PURPOSE.</em>
            </h2>

        </div>


        <div class="about-values__grid">

            <div class="about-value">
                <span>01</span>
                <h3>PERFORMANCE</h3>
                <p>
                    Products designed around movement,
                    comfort and the demands of sport.
                </p>
            </div>

            <div class="about-value">
                <span>02</span>
                <h3>PRECISION</h3>
                <p>
                    Attention to construction, materials
                    and details that make a difference.
                </p>
            </div>

            <div class="about-value">
                <span>03</span>
                <h3>IDENTITY</h3>
                <p>
                    Every team deserves products that
                    represent who they are.
                </p>
            </div>

            <div class="about-value">
                <span>04</span>
                <h3>PROGRESS</h3>
                <p>
                    We keep developing, improving and
                    moving the product forward.
                </p>
            </div>

        </div>

    </div>

</section>


{{-- =========================================================
    FINAL CTA
========================================================= --}}
<section class="about-final">

    <div class="about-final__inner">

        <span>
            START SOMETHING
        </span>

        <h2>
            LET'S BUILD<br>
            <em>THE NEXT KIT.</em>
        </h2>

        <p>
            Have a team, brand or product idea?
            Let's turn it into something built to perform.
        </p>

        <a href="{{ route('connect') }}">
            CONNECT WITH FA SPORTS
            <span>→</span>
        </a>

    </div>

</section>


@endsection


@push('scripts')

<script>

document.addEventListener('DOMContentLoaded', function () {

    const members = document.querySelectorAll('.about-member');

    if (!members.length) {
        return;
    }

    const observer = new IntersectionObserver(
        function (entries) {

            entries.forEach(function (entry) {

                if (entry.isIntersecting) {

                    entry.target.classList.add('is-visible');

                    observer.unobserve(entry.target);

                }

            });

        },
        {
            threshold: 0.12
        }
    );

    members.forEach(function (member) {
        observer.observe(member);
    });

});

</script>

@endpush