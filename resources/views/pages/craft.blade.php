@extends('layouts.app')

@section('title', 'THE CRAFT — FA SPORTS')

@section('bodyClass', 'fa-craft-page')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/craft.css') }}">
@endpush

@section('content')

<div class="fa-craft-page">

    {{-- ============ 1. HERO ============ --}}
    <section class="fa-craft-hero">
        <div class="fa-craft-hero__media">
            {{-- Place at: public/images/craft/hero.jpg — premium sportswear fabric/garment construction shot --}}
            <img src="{{ asset('images/craft/hero.jpg') }}" alt="FA SPORTS craftsmanship" class="fa-craft-hero__img">
            <div class="fa-craft-hero__scrim"></div>
        </div>

        <div class="fa-craft-hero__content">
            <span class="fa-craft-eyebrow fa-craft-reveal">FA SPORTS / PRECISION IN EVERY THREAD</span>
            <h1 class="fa-craft-hero__title fa-craft-reveal">THE CRAFT</h1>
            <p class="fa-craft-hero__statement fa-craft-reveal">BUILT BEFORE THE GAME.</p>
            <p class="fa-craft-hero__copy fa-craft-reveal">
                From the first cut to the final stitch, every FA SPORTS piece is engineered with purpose.
            </p>
        </div>

        <span class="fa-craft-hero__line" aria-hidden="true"></span>
    </section>

    {{-- ============ 2. THE MAKING ============ --}}
    <section class="fa-craft-making">
        <div class="fa-craft-making__head">
            <span class="fa-craft-eyebrow fa-craft-reveal">THE MAKING</span>
            <h2 class="fa-craft-making__title fa-craft-reveal">Performance begins long before the first whistle.</h2>
        </div>

        <div class="fa-craft-making__row">
            @foreach ($making as $step)
                <div class="fa-craft-making__step fa-craft-reveal">
                    <span class="fa-craft-making__num">{{ str_pad($step->number, 2, '0', STR_PAD_LEFT) }}</span>
                    <h3 class="fa-craft-making__name">{{ $step->title }}</h3>
                    <p class="fa-craft-making__desc">{{ $step->description }}</p>
                    <span class="fa-craft-making__underline"></span>
                </div>
            @endforeach
        </div>
    </section>

    {{-- ============ 3. MATERIAL / FABRIC ============ --}}
    <section class="fa-craft-material">
        <div class="fa-craft-material__media">
            {{-- Place at: public/images/craft/fabric.jpg — close-up technical fabric/mesh texture --}}
            <img src="{{ asset('images/legacy/product-086.jpg') }}" alt="FA SPORTS technical fabric" class="fa-craft-material__img fa-craft-reveal">
            <span class="fa-craft-material__scanline" aria-hidden="true"></span>
        </div>

        <div class="fa-craft-material__content">
            <span class="fa-craft-eyebrow fa-craft-reveal">MATERIAL</span>
            <h2 class="fa-craft-material__title fa-craft-reveal">WHAT'S INSIDE MATTERS.</h2>

            <div class="fa-craft-material__list">
                @foreach ($material as $feature)
                    <div class="fa-craft-material__item fa-craft-reveal">
                        <h3>{{ $feature->title }}</h3>
                        <p>{{ $feature->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============ 4. DETAILS MATTER ============ --}}
    <section class="fa-craft-details">
        <div class="fa-craft-details__head fa-craft-reveal">
            <span class="fa-craft-eyebrow">DETAILS MATTER.</span>
            <h2 class="fa-craft-details__statement">Great gear isn't noticed.<br><span class="fa-craft-red">Great gear is felt.</span></h2>
        </div>

        <div class="fa-craft-details__grid">
            @foreach ($details as $i => $item)
                <div class="fa-craft-details__block fa-craft-reveal">
                    @if ($i === 0)
                        {{-- Place at: public/images/craft/detail-01.jpg --}}
                        <img src="{{ asset('images/playbook/pattern-to-pitch.jpg') }}" alt="Precision stitching detail" class="fa-craft-details__img">
                    @elseif ($i === 1)
                        {{-- Place at: public/images/craft/detail-02.jpg --}}
                        <img src="{{ asset('images/legacy/paneling.jpg') }}" alt="Smart paneling detail" class="fa-craft-details__img">
                    @else
                        {{-- Place at: public/images/craft/detail-03.jpg --}}
                        <img src="{{ asset('images/legacy/finishing.jpg') }}" alt="Finishing detail" class="fa-craft-details__img">
                    @endif
                    <h3 class="fa-craft-details__title">{{ $item->title }}</h3>
                    <p class="fa-craft-details__desc">{{ $item->description }}</p>
                </div>
            @endforeach
        </div>
    </section>

    {{-- ============ 5. THE FA STANDARD ============ --}}
    <section class="fa-craft-standard">
        <div class="fa-craft-standard__head fa-craft-reveal">
            <span class="fa-craft-eyebrow">THE FA STANDARD</span>
            <p class="fa-craft-standard__statement">Before it reaches the field, it earns its place.</p>
        </div>

        <div class="fa-craft-standard__grid">
            @foreach ($standard as $indicator)
                <div class="fa-craft-standard__item fa-craft-reveal">
                    <span class="fa-craft-standard__num">{{ str_pad($indicator->number, 2, '0', STR_PAD_LEFT) }}</span>
                    <span class="fa-craft-standard__name">{{ $indicator->title }}</span>
                </div>
            @endforeach
        </div>
    </section>

    {{-- ============ 6. FINAL CTA ============ --}}
    <section class="fa-craft-cta">
        <h2 class="fa-craft-cta__title fa-craft-reveal">CRAFTED FOR<br>THE MOMENT.</h2>
        <p class="fa-craft-cta__copy fa-craft-reveal">Your team has a story. Your kit should carry it.</p>
        <div class="fa-craft-cta__actions fa-craft-reveal">
            <a href="{{ route('legacy') }}#kit-studio" class="fa-craft-cta__btn">Our Origin</a>
            <a href="{{ route('team-lab') }}" class="fa-craft-cta__link">EXPLORE TEAM LAB</a>
        </div>
    </section>

</div>

@endsection

@push('scripts')
    <script src="{{ asset('js/craft.js') }}" defer></script>
@endpush
