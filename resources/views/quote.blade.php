@extends('layouts.app')

@section('bodyClass', 'fa-quote-page')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/quote.css') }}">
@endpush

@section('content')

{{-- ============ HERO ============ --}}
<section class="fa-rq-hero">
    <span class="fa-rq-eyebrow">FA SPORTS / REQUEST A QUOTE</span>
    <h1 class="fa-rq-hero__headline">LET'S BUILD YOUR<br>NEXT PERFORMANCE</h1>
    <p class="fa-rq-hero__copy">
        Tell us what you need. Share your requirements with the FA SPORTS team and
        let's create the right performance solution for your game.
    </p>
    <p class="fa-rq-hero__line">CUSTOM TEAMWEAR &middot; PERFORMANCE GEAR &middot; GLOBAL SUPPLY</p>
</section>

{{-- ============ INTRO / STATEMENT ============ --}}
<section class="fa-rq-intro">
    <div class="fa-rq-intro__left">
        <span class="fa-rq-eyebrow">START THE CONVERSATION</span>
        <h2 class="fa-rq-intro__headline">BUILT AROUND<br>YOUR GAME.</h2>
    </div>
    <div class="fa-rq-intro__right">
        <span class="fa-rq-intro__accent"></span>
        <p>
            Whether you are looking for performance apparel, teamwear, training gear
            or custom sportswear, tell us what you have in mind and our team will get
            back to you with the right information.
        </p>
    </div>
</section>

{{-- ============ QUOTE FORM ============ --}}
<section class="fa-rq-form-section" id="quote-form">
    <div class="fa-rq-form-layout">

        {{-- LEFT RED PANEL --}}
        <aside class="fa-rq-panel">
            <span class="fa-rq-panel__label">FA SPORTS</span>
            <h2 class="fa-rq-panel__headline">TELL US WHAT<br>YOU NEED.</h2>
            <p class="fa-rq-panel__copy">
                Every project starts with a conversation. Give us a few details and
                our team will take it from there.
            </p>
            <ol class="fa-rq-panel__points">
                <li><span class="fa-rq-panel__num">01</span><span>PERFORMANCE FIRST</span></li>
                <li><span class="fa-rq-panel__num">02</span><span>BUILT FOR YOUR GAME</span></li>
                <li><span class="fa-rq-panel__num">03</span><span>MADE TO MOVE</span></li>
            </ol>
        </aside>

        {{-- RIGHT FORM --}}
        <div class="fa-rq-form-wrap">

            @if (session('success'))
                <div class="fa-rq-success">
                    <h3>MESSAGE RECEIVED.</h3>
                    <p>Thank you — your request has reached the FA SPORTS team. We'll be in touch shortly.</p>
                </div>
            @else

                @if ($errors->any())
                    <div class="fa-rq-errors">
                        <p>Please check the following:</p>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('quote.store') }}" class="fa-rq-form">
                    @csrf

                    {{-- Honeypot --}}
                    <div class="fa-rq-honeypot" aria-hidden="true">
                        <label for="website">Website</label>
                        <input type="text" name="website" id="website" tabindex="-1" autocomplete="off">
                    </div>

                    {{-- 01 / CONTACT INFORMATION --}}
                    <div class="fa-rq-step">
                        <span class="fa-rq-step__label">01 / CONTACT INFORMATION</span>
                        <div class="fa-rq-field-grid">
                            <div class="fa-rq-field">
                                <label>Full Name</label>
                                <input type="text" name="name" placeholder="Your full name" value="{{ old('name') }}" required>
                            </div>
                            <div class="fa-rq-field">
                                <label>Company / Team Name</label>
                                <input type="text" name="company" placeholder="Company or team name" value="{{ old('company') }}">
                            </div>
                            <div class="fa-rq-field">
                                <label>Email Address</label>
                                <input type="email" name="email" placeholder="you@example.com" value="{{ old('email') }}" required>
                            </div>
                            <div class="fa-rq-field">
                                <label>Phone / WhatsApp</label>
                                <input type="text" name="phone" placeholder="Your phone or WhatsApp number" value="{{ old('phone') }}">
                            </div>
                            <div class="fa-rq-field fa-rq-field--wide">
                                <label>Country</label>
                                <input type="text" name="country" placeholder="Select your country" value="{{ old('country') }}">
                            </div>
                        </div>
                    </div>

                    {{-- 02 / PRODUCT INTEREST --}}
                    <div class="fa-rq-step">
                        <span class="fa-rq-step__label">02 / PRODUCT INTEREST</span>
                        <div class="fa-rq-chips">
                            @foreach (['Performance Apparel','Team Kits','Training Wear','Footwear','Gloves','Accessories','Custom Sportswear'] as $i => $opt)
                                <label class="fa-rq-chip">
                                    <input type="checkbox" name="product_interests[]" value="{{ $opt }}" {{ collect(old('product_interests'))->contains($opt) ? 'checked' : '' }}>
                                    <span>{{ strtoupper($opt) }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    {{-- 03 / YOUR REQUIREMENTS --}}
                    <div class="fa-rq-step">
                        <span class="fa-rq-step__label">03 / YOUR REQUIREMENTS</span>
                        <div class="fa-rq-field fa-rq-field--wide">
                            <label>Tell us about your requirements</label>
                            <textarea name="requirements" rows="6" placeholder="Tell us about the products you're interested in, your requirements, preferred materials, colors, specifications or anything else our team should know..." required>{{ old('requirements') }}</textarea>
                        </div>
                    </div>

                    {{-- 04 / PREFERRED CONTACT --}}
                    <div class="fa-rq-step">
                        <span class="fa-rq-step__label">04 / PREFERRED CONTACT</span>
                        <div class="fa-rq-chips">
                            @foreach (['email' => 'EMAIL', 'whatsapp' => 'WHATSAPP', 'phone' => 'PHONE'] as $value => $label)
                                <label class="fa-rq-chip">
                                    <input type="radio" name="preferred_contact" value="{{ $value }}" {{ old('preferred_contact') === $value ? 'checked' : '' }}>
                                    <span>{{ $label }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    {{-- SUBMIT AREA --}}
                    <div class="fa-rq-submit">
                        <span class="fa-rq-submit__small">READY TO START?</span>
                        <h3 class="fa-rq-submit__headline">LET'S TALK PERFORMANCE.</h3>
                        <p class="fa-rq-submit__copy">Send your request and the FA SPORTS team will get back to you.</p>
                        <button type="submit" class="fa-rq-submit__btn">REQUEST MY QUOTE &rarr;</button>
                    </div>
                </form>
            @endif
        </div>
    </div>
</section>

{{-- ============ FINAL RED CTA ============ --}}
<section class="fa-rq-final">
    <h2 class="fa-rq-final__headline">FROM IDEA<br>TO PERFORMANCE.</h2>
    <p class="fa-rq-final__copy">Your requirements. Our craftsmanship. One team built around your game.</p>
    <span class="fa-rq-final__line">THE GAME STARTS BEFORE THE GAME.</span>
</section>

@endsection

@push('scripts')
    <script src="{{ asset('js/quote.js') }}" defer></script>
@endpush
