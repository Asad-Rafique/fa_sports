@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/partnership.css') }}">
@endpush

@section('content')

<main class="fa-partnership-page">

    {{-- =====================================================
        HERO
    ====================================================== --}}
    <section class="fa-partnership-hero">

        <div class="fa-partnership-hero__shape fa-shape-one"></div>
        <div class="fa-partnership-hero__shape fa-shape-two"></div>

        <div class="fa-partnership-hero__content">

            <span class="fa-partnership-kicker">
                GROW TOGETHER
            </span>

            <h1>
                BECOME A
                <span>PARTNER</span>
                <br>
                OR
                <span>DISTRIBUTOR</span>
            </h1>

            <p>
                Build your market with FA SPORTS and bring premium
                sportswear, teamwear and performance gear to athletes
                and teams around the world.
            </p>

        </div>

        <div class="fa-partnership-hero__visual">

            <div class="fa-hero-circle"></div>

            <div class="fa-hero-badge">
                <span>FA</span>
                <small>SPORTS</small>
            </div>

            <div class="fa-hero-feature feature-one">
                <span class="feature-icon">✦</span>
                <strong>GLOBAL</strong>
                <small>REACH</small>
            </div>

            <div class="fa-hero-feature feature-two">
                <span class="feature-icon">↗</span>
                <strong>JOINT</strong>
                <small>GROWTH</small>
            </div>

            <div class="fa-hero-feature feature-three">
                <span class="feature-icon">✓</span>
                <strong>PREMIUM</strong>
                <small>QUALITY</small>
            </div>

        </div>

    </section>


    {{-- =====================================================
        SUCCESS MESSAGE
    ====================================================== --}}
    @if(session('success'))

        <div class="fa-form-alert fa-form-alert--success">
            <span class="alert-icon">✓</span>

            <div>
                <strong>REQUEST RECEIVED</strong>
                <p>{{ session('success') }}</p>
            </div>
        </div>

    @endif


    {{-- =====================================================
        VALIDATION ERRORS
    ====================================================== --}}
    @if($errors->any())

        <div class="fa-form-alert fa-form-alert--error">

            <span class="alert-icon">!</span>

            <div>
                <strong>PLEASE CHECK YOUR FORM</strong>

                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>

        </div>

    @endif


    {{-- =====================================================
        APPLICATIONS
    ====================================================== --}}
    <section class="fa-partnership-applications">

        <div class="fa-partnership-intro">

            <span>PARTNERSHIP NETWORK</span>

            <h2>
                LET'S BUILD
                <strong>WHAT'S NEXT.</strong>
            </h2>

            <p>
                Whether you're looking to grow with FA SPORTS or expand
                our products in your market, tell us where you want to go.
            </p>

        </div>


        <div class="fa-partnership-grid">


            {{-- =================================================
                PARTNER
            ================================================== --}}
            <article class="fa-application-card">

                <div class="fa-card-accent"></div>

                <div class="fa-card-top">

                    <div class="fa-card-icon">
                        <svg viewBox="0 0 64 64" aria-hidden="true">
                            <path d="M14 31l9-9 10 10 8-8 9 9"/>
                            <path d="M9 36l8-8 10 10-8 8z"/>
                            <path d="M55 36l-8-8-10 10 8 8z"/>
                        </svg>
                    </div>

                    <div>
                        <span class="fa-card-label">JOIN AS A</span>

                        <h3>PARTNER</h3>
                    </div>

                </div>

                <p class="fa-card-description">
                    Build something bigger with FA SPORTS.
                    Partner with us and bring professional sportswear
                    solutions to your market.
                </p>


                <form
                    action="{{ route('partnership.store') }}"
                    method="POST"
                    class="fa-partnership-form"
                >

                    @csrf

                    <input
                        type="hidden"
                        name="type"
                        value="partner"
                    >

                    <div class="fa-form-field">
                        <label for="partner_full_name">
                            Full Name
                        </label>

                        <input
                            id="partner_full_name"
                            type="text"
                            name="full_name"
                            value="{{ old('full_name') }}"
                            placeholder="Your full name"
                            required
                        >
                    </div>


                    <div class="fa-form-field">
                        <label for="partner_email">
                            Business Email
                        </label>

                        <input
                            id="partner_email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="you@company.com"
                            required
                        >
                    </div>


                    <div class="fa-form-row">

                        <div class="fa-form-field">
                            <label for="partner_phone">
                                Phone Number
                            </label>

                            <input
                                id="partner_phone"
                                type="text"
                                name="phone"
                                value="{{ old('phone') }}"
                                placeholder="+92..."
                                required
                            >
                        </div>

                        <div class="fa-form-field">
                            <label for="partner_company">
                                Company / Organization
                            </label>

                            <input
                                id="partner_company"
                                type="text"
                                name="company_name"
                                value="{{ old('company_name') }}"
                                placeholder="Company name"
                                required
                            >
                        </div>

                    </div>


                    <div class="fa-form-field">
                        <label for="partner_country">
                            Country / Region
                        </label>

                        <input
                            id="partner_country"
                            type="text"
                            name="country_region"
                            value="{{ old('country_region') }}"
                            placeholder="Country or region"
                            required
                        >
                    </div>


                    <div class="fa-form-field">
                        <label for="partner_message">
                            Partnership Goals
                        </label>

                        <textarea
                            id="partner_message"
                            name="message"
                            rows="5"
                            placeholder="Tell us about your partnership goals..."
                            required
                        >{{ old('message') }}</textarea>
                    </div>


                    <button type="submit" class="fa-submit-button">

                        <span>APPLY AS PARTNER</span>

                        <b>→</b>

                    </button>

                </form>


                <div class="fa-card-benefits">

                    <div>
                        <span>01</span>
                        <strong>PRODUCT ACCESS</strong>
                        <small>Premium FA SPORTS range</small>
                    </div>

                    <div>
                        <span>02</span>
                        <strong>MARKETING SUPPORT</strong>
                        <small>Grow your market presence</small>
                    </div>

                    <div>
                        <span>03</span>
                        <strong>JOINT GROWTH</strong>
                        <small>Long-term collaboration</small>
                    </div>

                </div>

            </article>


            {{-- =================================================
                DISTRIBUTOR
            ================================================== --}}
            <article class="fa-application-card fa-application-card--dark-accent">

                <div class="fa-card-accent"></div>

                <div class="fa-card-top">

                    <div class="fa-card-icon">
                        <svg viewBox="0 0 64 64" aria-hidden="true">
                            <rect x="7" y="17" width="34" height="27" rx="2"/>
                            <path d="M41 27h9l7 8v9H41z"/>
                            <circle cx="19" cy="48" r="5"/>
                            <circle cx="48" cy="48" r="5"/>
                            <path d="M12 27h20"/>
                        </svg>
                    </div>

                    <div>
                        <span class="fa-card-label">JOIN AS A</span>

                        <h3>DISTRIBUTOR</h3>
                    </div>

                </div>

                <p class="fa-card-description">
                    Expand your business with FA SPORTS.
                    Become a distributor and access premium products,
                    reliable supply and dedicated support.
                </p>


                <form
                    action="{{ route('partnership.store') }}"
                    method="POST"
                    class="fa-partnership-form"
                >

                    @csrf

                    <input
                        type="hidden"
                        name="type"
                        value="distributor"
                    >


                    <div class="fa-form-field">
                        <label for="distributor_full_name">
                            Full Name
                        </label>

                        <input
                            id="distributor_full_name"
                            type="text"
                            name="full_name"
                            value="{{ old('full_name') }}"
                            placeholder="Your full name"
                            required
                        >
                    </div>


                    <div class="fa-form-field">
                        <label for="distributor_email">
                            Business Email
                        </label>

                        <input
                            id="distributor_email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="you@company.com"
                            required
                        >
                    </div>


                    <div class="fa-form-row">

                        <div class="fa-form-field">
                            <label for="distributor_phone">
                                Phone Number
                            </label>

                            <input
                                id="distributor_phone"
                                type="text"
                                name="phone"
                                value="{{ old('phone') }}"
                                placeholder="+92..."
                                required
                            >
                        </div>

                        <div class="fa-form-field">
                            <label for="distributor_company">
                                Business Name
                            </label>

                            <input
                                id="distributor_company"
                                type="text"
                                name="company_name"
                                value="{{ old('company_name') }}"
                                placeholder="Business name"
                                required
                            >
                        </div>

                    </div>


                    <div class="fa-form-row">

                        <div class="fa-form-field">
                            <label for="distributor_country">
                                Country / Region
                            </label>

                            <input
                                id="distributor_country"
                                type="text"
                                name="country_region"
                                value="{{ old('country_region') }}"
                                placeholder="Country or region"
                                required
                            >
                        </div>

                        <div class="fa-form-field">
                            <label for="business_type">
                                Type of Business
                            </label>

                            <select
                                id="business_type"
                                name="business_type"
                            >
                                <option value="">Select type</option>
                                <option value="Sports Retailer">Sports Retailer</option>
                                <option value="Sports Store">Sports Store</option>
                                <option value="Wholesale">Wholesale</option>
                                <option value="Online Store">Online Store</option>
                                <option value="Academy / Club">Academy / Club</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                    </div>


                    <div class="fa-form-field">
                        <label for="distributor_message">
                            Distribution Plans
                        </label>

                        <textarea
                            id="distributor_message"
                            name="message"
                            rows="5"
                            placeholder="Tell us about your distribution plans..."
                            required
                        >{{ old('message') }}</textarea>
                    </div>


                    <button type="submit" class="fa-submit-button">

                        <span>APPLY AS DISTRIBUTOR</span>

                        <b>→</b>

                    </button>

                </form>


                <div class="fa-card-benefits">

                    <div>
                        <span>01</span>
                        <strong>COMPETITIVE PRICING</strong>
                        <small>Business-focused pricing</small>
                    </div>

                    <div>
                        <span>02</span>
                        <strong>RELIABLE SUPPLY</strong>
                        <small>Consistent production support</small>
                    </div>

                    <div>
                        <span>03</span>
                        <strong>ACCOUNT SUPPORT</strong>
                        <small>Dedicated communication</small>
                    </div>

                </div>

            </article>

        </div>

    </section>


    {{-- =====================================================
        BOTTOM CTA
    ====================================================== --}}
    <section class="fa-partnership-bottom">

        <div class="fa-bottom-line"></div>

        <span>THE GAME STARTS BEFORE THE GAME</span>

        <h2>
            LET'S MOVE
            <strong>FORWARD.</strong>
        </h2>

        <p>
            Your market. Our manufacturing.
            One stronger partnership.
        </p>

    </section>

</main>

@endsection