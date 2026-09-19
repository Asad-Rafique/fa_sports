@extends('layouts.app')

@section('bodyClass', 'fa-playbook-page')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/playbook.css') }}">
@endpush

@section('content')

{{-- ============ HERO ============ --}}
<section class="fa-pb-hero">
    <div class="fa-pb-hero__graphic" aria-hidden="true">
        <span class="fa-pb-hero__line fa-pb-hero__line--h" style="top:20%;"></span>
        <span class="fa-pb-hero__line fa-pb-hero__line--h" style="top:80%;"></span>
        <span class="fa-pb-hero__line fa-pb-hero__line--v" style="left:15%;"></span>
        <span class="fa-pb-hero__line fa-pb-hero__line--v" style="left:85%;"></span>
        <span class="fa-pb-hero__dot" style="top:20%; left:15%;"></span>
        <span class="fa-pb-hero__dot" style="top:80%; left:85%;"></span>
    </div>
    <span class="fa-pb-eyebrow">FA SPORTS / FIELD NOTES</span>
    <h1 class="fa-pb-hero__headline">THE PLAYBOOK</h1>
    <p class="fa-pb-hero__statement">Ideas that shape the way the game is played.</p>
</section>

{{-- ============ PLAYBOOK INDEX ============ --}}
<section class="fa-pb-index">
    <div class="fa-pb-section-head">
        <h2>THE PLAYBOOK INDEX</h2>
    </div>
    <div class="fa-pb-index__grid">
        @foreach ($categories as $cat)
            <a href="#featured" class="fa-pb-index__card">
                <span class="fa-pb-index__num">{{ str_pad($cat->number, 2, '0', STR_PAD_LEFT) }}</span>
                <h3 class="fa-pb-index__name">{{ $cat->name }}</h3>
                <p class="fa-pb-index__desc">{{ $cat->description }}</p>
                <span class="fa-pb-index__line"></span>
            </a>
        @endforeach
    </div>
</section>

{{-- ============ FEATURED STORY ============ --}}
@if ($featuredStory)
<section class="fa-pb-featured" id="featured">
    <div class="fa-pb-featured__media">
        {{-- source: single sportswear/product photo — {{ $featuredStory->cover_image }} --}}
        <img src="{{ asset($featuredStory->cover_image) }}" alt="{{ $featuredStory->title }}">
    </div>
    <div class="fa-pb-featured__body">
        <span class="fa-pb-eyebrow">FEATURED / 01</span>
        <h2 class="fa-pb-featured__title">{{ $featuredStory->title }}</h2>
        <p class="fa-pb-featured__excerpt">{{ $featuredStory->excerpt }}</p>
        <a href="{{route('legacy')}}" class="fa-pb-featured__cta">READ THE STORY &rarr;</a>
    </div>
</section>
@endif

{{-- ============ PLAYBOOK PRINCIPLES ============ --}}
<section class="fa-pb-principles">
    <div class="fa-pb-section-head">
        <h2>PLAYBOOK PRINCIPLES</h2>
    </div>
    <div class="fa-pb-principles__grid">
        @foreach ($principles as $p)
            <div class="fa-pb-principles__item">
                <span class="fa-pb-principles__num">{{ str_pad($p->number, 2, '0', STR_PAD_LEFT) }}</span>
                <h3 class="fa-pb-principles__title">{{ $p->title }}</h3>
                <p class="fa-pb-principles__statement">{{ $p->statement }}</p>
            </div>
        @endforeach
    </div>
</section>

{{-- ============ INSIDE THE GAME ============ --}}
<section class="fa-pb-inside">
    <div class="fa-pb-section-head">
        <h2>INSIDE THE GAME</h2>
    </div>
    <div class="fa-pb-inside__grid">
        @foreach ($insights as $insight)
            <div class="fa-pb-inside__card">
                <span class="fa-pb-inside__label">{{ $insight->label }} / <span class="fa-red">{{ $insight->metric }}</span></span>
                <p class="fa-pb-inside__desc">{{ $insight->description }}</p>
            </div>
        @endforeach
    </div>
</section>

{{-- ============ FINAL CTA ============ --}}
<section class="fa-pb-final">
    <h2 class="fa-pb-final__headline">THE GAME STARTS<br>BEFORE THE GAME.</h2>
    <p class="fa-pb-final__copy">Explore the gear engineered for preparation, movement and performance.</p>
    <a href="{{ route('performance-gear') }}" class="fa-pb-final__cta">EXPLORE PERFORMANCE GEAR &rarr;</a>
</section>

@endsection

@push('scripts')
    <script src="{{ asset('js/playbook.js') }}" defer></script>
@endpush
