
@extends('layouts.app')

@section('title', 'Customize Your Gear | FA SPORTS')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/customize.css') }}?v=10">
    <link rel="stylesheet" href="{{ asset('css/customize-layout-overrides.css') }}?v=2">
@endpush

@section('content')

<main class="customizer-page">

    {{-- =========================================================
         HERO
    ========================================================== --}}
    <section class="customizer-hero">

        <div class="customizer-hero__wall">
            <span>CUSTOM</span>
            <span>YOUR</span>
            <span>GAME</span>
        </div>

        <div class="customizer-hero__content">

            <p class="eyebrow">FA SPORTS / CUSTOM LAB</p>

            <h1>
                BUILD IT.<br>
                <span>MAKE IT YOURS.</span>
            </h1>

            <p class="hero-copy">
                Customize the gear that represents your team,
                your identity and the way you play.
            </p>

            <a href="#uniform" class="customizer-hero__button">
                START CUSTOMIZING
            </a>

        </div>

        <div class="customizer-hero__number">
            01
        </div>

    </section>


    {{-- =========================================================
         01 — UNIFORM
    ========================================================== --}}

    <form
        id="uniformForm"
        class="customization-section-form"
        action="{{ route('customize.store') }}"
        method="POST"
        data-section="uniform"
    >

        @csrf

        <input
            type="hidden"
            name="selected_sections[]"
            value="uniform"
        >

        <section
            class="custom-product"
            id="uniform"
        >

            <div class="custom-product__image">

                <img
                    src="{{ asset('images/legacy/customize.jpg') }}"
                    alt="FA SPORTS Custom Uniform"
                >

            </div>


            <div class="custom-product__content">

                <div class="section-heading">

                    <span>01 — UNIFORM</span>

                    <h2>
                        BUILD YOUR<br>
                        <strong>UNIFORM.</strong>
                    </h2>

                </div>


                {{-- CATEGORY --}}
                <div class="custom-field">

                    <label>CATEGORY</label>

                    <div class="option-grid uniform-category">

                        <button type="button" data-value="Child">
                            Child
                        </button>

                        <button type="button" data-value="Male">
                            Male
                        </button>

                        <button type="button" data-value="Female">
                            Female
                        </button>

                        <button type="button" data-value="Above 20">
                            Above 20
                        </button>

                        <button type="button" data-value="Above 30">
                            Above 30
                        </button>

                        <button type="button" data-value="Above 40">
                            Above 40
                        </button>

                    </div>

                    <input
                        type="hidden"
                        name="customizations[uniform][category]"
                        id="uniformCategory"
                    >

                </div>


                {{-- SHIRT + TROUSER COLORS --}}
                <div class="custom-row">

                    <div class="custom-field">

                        <label>SHIRT COLOR</label>

                        <div class="color-grid uniform-shirt-colors">

                            @foreach([
                                'Black',
                                'White',
                                'Red',
                                'Royal Blue',
                                'Navy Blue',
                                'Sky Blue',
                                'Green',
                                'Dark Green',
                                'Yellow',
                                'Orange',
                                'Purple',
                                'Maroon',
                                'Pink',
                                'Grey',
                                'Silver',
                                'Gold',
                                'Brown',
                                'Beige',
                                'Teal',
                                'Turquoise'
                            ] as $color)

                                <button
                                    type="button"
                                    data-value="{{ $color }}"
                                >
                                    {{ $color }}
                                </button>

                            @endforeach

                        </div>

                        <input
                            type="hidden"
                            name="customizations[uniform][shirt_color]"
                            id="uniformShirtColor"
                        >

                    </div>


                    <div class="custom-field">

                        <label>TROUSER COLOR</label>

                        <div class="color-grid uniform-trouser-colors">

                            @foreach([
                                'Black',
                                'White',
                                'Red',
                                'Royal Blue',
                                'Navy Blue',
                                'Sky Blue',
                                'Green',
                                'Dark Green',
                                'Yellow',
                                'Orange',
                                'Purple',
                                'Maroon',
                                'Pink',
                                'Grey',
                                'Silver',
                                'Gold',
                                'Brown',
                                'Beige',
                                'Teal',
                                'Turquoise'
                            ] as $color)

                                <button
                                    type="button"
                                    data-value="{{ $color }}"
                                >
                                    {{ $color }}
                                </button>

                            @endforeach

                        </div>

                        <input
                            type="hidden"
                            name="customizations[uniform][trouser_color]"
                            id="uniformTrouserColor"
                        >

                    </div>

                </div>


                {{-- TEXT + NUMBER --}}
                <div class="custom-row">

                    <div class="custom-field">

                        <label>TEXT ON SHIRT</label>

                        <input
                            type="text"
                            id="uniformShirtText"
                            name="customizations[uniform][shirt_text]"
                            placeholder="Enter text"
                        >

                    </div>


                    <div class="custom-field">

                        <label>NUMBER</label>

                        <input
                            type="text"
                            id="uniformNumber"
                            name="customizations[uniform][number]"
                            placeholder="00"
                        >

                    </div>

                </div>


                {{-- SHIRT SIZE / MEASUREMENTS --}}
                <div class="custom-row">

                    <div class="custom-field">

                        <label>SHIRT SIZE</label>

                        <select
                            id="uniformShirtSize"
                            name="customizations[uniform][shirt_size]"
                        >

                            <option value="">Select size</option>
                            <option value="XS">XS</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                            <option value="2XL">2XL</option>
                            <option value="3XL">3XL</option>
                            <option value="4XL">4XL</option>

                        </select>

                    </div>


                    <div class="custom-field">

                        <label>HEIGHT</label>

                        <input
                            type="text"
                            id="uniformHeight"
                            name="customizations[uniform][height]"
                            placeholder="e.g. 5'8"
                        >

                    </div>


                    <div class="custom-field">

                        <label>WIDTH</label>

                        <input
                            type="text"
                            id="uniformWidth"
                            name="customizations[uniform][width]"
                            placeholder="e.g. 40"
                        >

                    </div>

                </div>


                {{-- SLEEVE / COLLAR / TROUSER SIZE --}}
                <div class="custom-row">

                    <div class="custom-field">

                        <label>SLEEVE</label>

                        <select
                            id="uniformSleeve"
                            name="customizations[uniform][sleeve]"
                        >

                            <option value="">Select</option>
                            <option value="Short Sleeve">Short Sleeve</option>
                            <option value="Long Sleeve">Long Sleeve</option>
                            <option value="Sleeveless">Sleeveless</option>

                        </select>

                    </div>


                    <div class="custom-field">

                        <label>COLLAR</label>

                        <select
                            id="uniformCollar"
                            name="customizations[uniform][collar]"
                        >

                            <option value="">Select</option>
                            <option value="Round Neck">Round Neck</option>
                            <option value="V Neck">V Neck</option>
                            <option value="Classic Collar">Classic Collar</option>
                            <option value="Mandarin Collar">Mandarin Collar</option>

                        </select>

                    </div>


                    <div class="custom-field">

                        <label>TROUSER SIZE</label>

                        <select
                            id="uniformTrouserSize"
                            name="customizations[uniform][trouser_size]"
                        >

                            <option value="">Select size</option>
                            <option value="XS">XS</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                            <option value="2XL">2XL</option>
                            <option value="3XL">3XL</option>
                            <option value="4XL">4XL</option>

                        </select>

                    </div>

                </div>


                {{-- TROUSER MEASUREMENTS --}}
                <div class="custom-row">

                    <div class="custom-field">

                        <label>TROUSER LENGTH</label>

                        <input
                            type="text"
                            id="uniformTrouserLength"
                            name="customizations[uniform][trouser_length]"
                            placeholder="Enter length"
                        >

                    </div>


                    <div class="custom-field">

                        <label>TROUSER WIDTH</label>

                        <input
                            type="text"
                            id="uniformTrouserWidth"
                            name="customizations[uniform][trouser_width]"
                            placeholder="Enter width"
                        >

                    </div>

                </div>


                {{-- SUMMARY --}}
                <div
                    class="selection-summary"
                    id="uniformSummary"
                >

                    <span>LIVE SUMMARY</span>

                    <p>
                        Choose an option to start customizing this section.
                    </p>

                </div>


                {{-- UNIFORM WHATSAPP --}}
                <div class="section-whatsapp-box">

                    <div class="section-whatsapp-heading">

                        <span>UNIFORM COMPLETE?</span>

                        <h3>
                            SEND YOUR
                            <strong>UNIFORM</strong>
                        </h3>

                        <p>
                            Enter your contact details and send your
                            uniform specifications directly to FA SPORTS.
                        </p>

                    </div>


                    <div class="custom-contact__form">

                        <div class="custom-field">

                            <label>NAME</label>

                            <input
                                type="text"
                                name="name"
                                required
                                placeholder="Your name"
                            >

                        </div>


                        <div class="custom-field">

                            <label>EMAIL</label>

                            <input
                                type="email"
                                name="email"
                                required
                                placeholder="your@email.com"
                            >

                        </div>


                        <div class="custom-field">

                            <label>PHONE / WHATSAPP</label>

                            <input
                                type="text"
                                name="phone"
                                required
                                placeholder="03XX XXXXXXX"
                            >

                        </div>


                        <div
                            class="custom-error"
                            id="uniformError"
                            aria-live="polite"
                        ></div>


                        <button
                            type="submit"
                            class="whatsapp-button"
                            data-whatsapp-section="uniform"
                        >
                            SEND UNIFORM ON WHATSAPP
                            <span>↗</span>
                        </button>

                    </div>

                </div>

            </div>

        </section>

    </form>


    {{-- =========================================================
         02 — SHOES
    ========================================================== --}}

    <form
        id="shoesForm"
        class="customization-section-form"
        action="{{ route('customize.store') }}"
        method="POST"
        data-section="shoes"
    >

        @csrf

        <input
            type="hidden"
            name="selected_sections[]"
            value="shoes"
        >

        <section
            class="custom-product custom-product--reverse"
            id="shoes"
        >

            <div class="custom-product__image">

                <img
                    src="{{ asset('images/legacy/product-043.jpg') }}"
                    alt="FA SPORTS Custom Shoes"
                >

            </div>


            <div class="custom-product__content">

                <div class="section-heading">

                    <span>02 — FOOTWEAR</span>

                    <h2>
                        DESIGN YOUR<br>
                        <strong>SHOES.</strong>
                    </h2>

                </div>


                {{-- CATEGORY + SIZE --}}
                <div class="custom-row">

                    <div class="custom-field">

                        <label>CATEGORY</label>

                        <select
                            id="shoeCategory"
                            name="customizations[shoes][category]"
                        >

                            <option value="Child">Child</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Above 20">Above 20</option>
                            <option value="Above 30">Above 30</option>
                            <option value="Above 40">Above 40</option>

                        </select>

                    </div>


                    <div class="custom-field">

                        <label>SIZE</label>

                        <select
                            id="shoeSize"
                            name="customizations[shoes][size]"
                        >

                            <option value="">Select size</option>

                            @for($size = 30; $size <= 46; $size++)

                                <option value="{{ $size }}">
                                    {{ $size }}
                                </option>

                            @endfor

                        </select>

                    </div>

                </div>


                {{-- COLOR --}}
                <div class="custom-field">

                    <label>COLOR</label>

                    <div class="color-grid shoe-colors">

                        @foreach([
                            'Black',
                            'White',
                            'Red',
                            'Royal Blue',
                            'Navy Blue',
                            'Sky Blue',
                            'Green',
                            'Yellow',
                            'Orange',
                            'Purple',
                            'Maroon',
                            'Pink',
                            'Grey',
                            'Silver',
                            'Gold',
                            'Brown',
                            'Beige',
                            'Teal',
                            'Turquoise',
                            'Lime'
                        ] as $color)

                            <button
                                type="button"
                                data-value="{{ $color }}"
                            >
                                {{ $color }}
                            </button>

                        @endforeach

                    </div>

                    <input
                        type="hidden"
                        name="customizations[shoes][color]"
                        id="shoeColor"
                    >

                </div>


                {{-- TEXT + SOLE --}}
                <div class="custom-row">

                    <div class="custom-field">

                        <label>NAME / TEXT</label>

                        <input
                            type="text"
                            id="shoeText"
                            name="customizations[shoes][text]"
                            placeholder="Enter name or text"
                        >

                    </div>


                    <div class="custom-field">

                        <label>SOLE TYPE</label>

                        <select
                            id="shoeSole"
                            name="customizations[shoes][sole]"
                        >

                            <option value="">Select sole</option>
                            <option value="Firm Ground">Firm Ground</option>
                            <option value="Artificial Ground">Artificial Ground</option>
                            <option value="Indoor">Indoor</option>
                            <option value="Training">Training</option>
                            <option value="Multi Surface">Multi Surface</option>

                        </select>

                    </div>

                </div>


                {{-- WIDTH --}}
                <div class="custom-field">

                    <label>WIDTH</label>

                    <select
                        id="shoeWidth"
                        name="customizations[shoes][width]"
                    >

                        <option value="">Select width</option>
                        <option value="Narrow">Narrow</option>
                        <option value="Standard">Standard</option>
                        <option value="Wide">Wide</option>
                        <option value="Extra Wide">Extra Wide</option>

                    </select>

                </div>


                {{-- SUMMARY --}}
                <div
                    class="selection-summary"
                    id="shoesSummary"
                >

                    <span>LIVE SUMMARY</span>

                    <p>
                        Choose an option to start customizing this section.
                    </p>

                </div>


                {{-- SHOES WHATSAPP --}}
                <div class="section-whatsapp-box">

                    <div class="section-whatsapp-heading">

                        <span>FOOTWEAR COMPLETE?</span>

                        <h3>
                            SEND YOUR
                            <strong>SHOES</strong>
                        </h3>

                        <p>
                            Enter your contact details and send your
                            footwear specifications directly to FA SPORTS.
                        </p>

                    </div>


                    <div class="custom-contact__form">

                        <div class="custom-field">

                            <label>NAME</label>

                            <input
                                type="text"
                                name="name"
                                required
                                placeholder="Your name"
                            >

                        </div>


                        <div class="custom-field">

                            <label>EMAIL</label>

                            <input
                                type="email"
                                name="email"
                                required
                                placeholder="your@email.com"
                            >

                        </div>


                        <div class="custom-field">

                            <label>PHONE / WHATSAPP</label>

                            <input
                                type="text"
                                name="phone"
                                required
                                placeholder="03XX XXXXXXX"
                            >

                        </div>


                        <div
                            class="custom-error"
                            id="shoesError"
                            aria-live="polite"
                        ></div>


                        <button
                            type="submit"
                            class="whatsapp-button"
                            data-whatsapp-section="shoes"
                        >
                            SEND SHOES ON WHATSAPP
                            <span>↗</span>
                        </button>

                    </div>

                </div>

            </div>

        </section>

    </form>


    {{-- =========================================================
         03 — BAGS
    ========================================================== --}}

    <form
        id="bagsForm"
        class="customization-section-form"
        action="{{ route('customize.store') }}"
        method="POST"
        data-section="bags"
    >

        @csrf

        <input
            type="hidden"
            name="selected_sections[]"
            value="bags"
        >

        <section
            class="custom-product"
            id="bags"
        >

            <div class="custom-product__image">

                <img
                    src="{{ asset('images/legacy/product-077.jpg') }}"
                    alt="FA SPORTS Custom Bag"
                >

            </div>


            <div class="custom-product__content">

                <div class="section-heading">

                    <span>03 — EQUIPMENT</span>

                    <h2>
                        CARRY YOUR<br>
                        <strong>IDENTITY.</strong>
                    </h2>

                </div>


                {{-- CATEGORY + SIZE --}}
                <div class="custom-row">

                    <div class="custom-field">

                        <label>CATEGORY</label>

                        <select
                            id="bagCategory"
                            name="customizations[bags][category]"
                        >

                            <option value="Team Bag">Team Bag</option>
                            <option value="Backpack">Backpack</option>
                            <option value="Kit Bag">Kit Bag</option>
                            <option value="Travel Bag">Travel Bag</option>
                            <option value="Gym Bag">Gym Bag</option>
                            <option value="Boot Bag">Boot Bag</option>

                        </select>

                    </div>


                    <div class="custom-field">

                        <label>SIZE</label>

                        <select
                            id="bagSize"
                            name="customizations[bags][size]"
                        >

                            <option value="">Select size</option>
                            <option value="Small">Small</option>
                            <option value="Medium">Medium</option>
                            <option value="Large">Large</option>
                            <option value="Extra Large">Extra Large</option>

                        </select>

                    </div>

                </div>


                {{-- COLOR --}}
                <div class="custom-field">

                    <label>COLOR</label>

                    <div class="color-grid bag-colors">

                        @foreach([
                            'Black',
                            'White',
                            'Red',
                            'Royal Blue',
                            'Navy Blue',
                            'Sky Blue',
                            'Green',
                            'Yellow',
                            'Orange',
                            'Purple',
                            'Maroon',
                            'Pink',
                            'Grey',
                            'Silver',
                            'Gold',
                            'Brown',
                            'Beige',
                            'Teal',
                            'Turquoise',
                            'Lime'
                        ] as $color)

                            <button
                                type="button"
                                data-value="{{ $color }}"
                            >
                                {{ $color }}
                            </button>

                        @endforeach

                    </div>

                    <input
                        type="hidden"
                        name="customizations[bags][color]"
                        id="bagColor"
                    >

                </div>


                {{-- TEXT + COMPARTMENTS --}}
                <div class="custom-row">

                    <div class="custom-field">

                        <label>NAME / TEXT</label>

                        <input
                            type="text"
                            id="bagText"
                            name="customizations[bags][text]"
                            placeholder="Enter name or text"
                        >

                    </div>


                    <div class="custom-field">

                        <label>COMPARTMENTS</label>

                        <select
                            id="bagCompartments"
                            name="customizations[bags][compartments]"
                        >

                            <option value="">Select</option>
                            <option value="1 Compartment">1 Compartment</option>
                            <option value="2 Compartments">2 Compartments</option>
                            <option value="3 Compartments">3 Compartments</option>
                            <option value="4+ Compartments">4+ Compartments</option>

                        </select>

                    </div>

                </div>


                {{-- STRAP --}}
                <div class="custom-field">

                    <label>STRAP STYLE</label>

                    <select
                        id="bagStrap"
                        name="customizations[bags][strap]"
                    >

                        <option value="">Select strap</option>
                        <option value="Single Strap">Single Strap</option>
                        <option value="Double Backpack Straps">Double Backpack Straps</option>
                        <option value="Adjustable Shoulder Strap">Adjustable Shoulder Strap</option>
                        <option value="Shoulder + Carry Handles">Shoulder + Carry Handles</option>

                    </select>

                </div>


                {{-- SUMMARY --}}
                <div
                    class="selection-summary"
                    id="bagsSummary"
                >

                    <span>LIVE SUMMARY</span>

                    <p>
                        Choose an option to start customizing this section.
                    </p>

                </div>


                {{-- BAGS WHATSAPP --}}
                <div class="section-whatsapp-box">

                    <div class="section-whatsapp-heading">

                        <span>EQUIPMENT COMPLETE?</span>

                        <h3>
                            SEND YOUR
                            <strong>BAG</strong>
                        </h3>

                        <p>
                            Enter your contact details and send your
                            bag specifications directly to FA SPORTS.
                        </p>

                    </div>


                    <div class="custom-contact__form">

                        <div class="custom-field">

                            <label>NAME</label>

                            <input
                                type="text"
                                name="name"
                                required
                                placeholder="Your name"
                            >

                        </div>


                        <div class="custom-field">

                            <label>EMAIL</label>

                            <input
                                type="email"
                                name="email"
                                required
                                placeholder="your@email.com"
                            >

                        </div>


                        <div class="custom-field">

                            <label>PHONE / WHATSAPP</label>

                            <input
                                type="text"
                                name="phone"
                                required
                                placeholder="03XX XXXXXXX"
                            >

                        </div>


                        <div
                            class="custom-error"
                            id="bagsError"
                            aria-live="polite"
                        ></div>


                        <button
                            type="submit"
                            class="whatsapp-button"
                            data-whatsapp-section="bags"
                        >
                            SEND BAG ON WHATSAPP
                            <span>↗</span>
                        </button>

                    </div>

                </div>

            </div>

        </section>

    </form>


    {{-- =========================================================
         04 — GLOVES
    ========================================================== --}}

    <form
        id="glovesForm"
        class="customization-section-form"
        action="{{ route('customize.store') }}"
        method="POST"
        data-section="gloves"
    >

        @csrf

        <input
            type="hidden"
            name="selected_sections[]"
            value="gloves"
        >

        <section
            class="custom-product custom-product--reverse"
            id="gloves"
        >

            <div class="custom-product__image">

                <img
                    src="{{ asset('images/legacy/fa-grip-glove.jpg') }}"
                    alt="FA SPORTS Custom Gloves"
                >

            </div>


            <div class="custom-product__content">

                <div class="section-heading">

                    <span>04 — HANDWEAR</span>

                    <h2>
                        CONTROL THE<br>
                        <strong>DETAIL.</strong>
                    </h2>

                </div>


                {{-- CATEGORY + HAND --}}
                <div class="custom-row">

                    <div class="custom-field">

                        <label>CATEGORY</label>

                        <select
                            id="gloveCategory"
                            name="customizations[gloves][category]"
                        >

                            <option value="Child">Child</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Above 20">Above 20</option>
                            <option value="Above 30">Above 30</option>
                            <option value="Above 40">Above 40</option>

                        </select>

                    </div>


                    <div class="custom-field">

                        <label>HAND</label>

                        <select
                            id="gloveHand"
                            name="customizations[gloves][hand]"
                        >

                            <option value="">Select</option>
                            <option value="Left Hand">Left Hand</option>
                            <option value="Right Hand">Right Hand</option>
                            <option value="Pair">Pair</option>

                        </select>

                    </div>

                </div>


                {{-- SIZE + WRIST --}}
                <div class="custom-row">

                    <div class="custom-field">

                        <label>SIZE</label>

                        <select
                            id="gloveSize"
                            name="customizations[gloves][size]"
                        >

                            <option value="">Select size</option>
                            <option value="XS">XS</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                            <option value="2XL">2XL</option>

                        </select>

                    </div>


                    <div class="custom-field">

                        <label>WRIST STYLE</label>

                        <select
                            id="gloveWrist"
                            name="customizations[gloves][wrist]"
                        >

                            <option value="">Select</option>
                            <option value="Elastic">Elastic</option>
                            <option value="Velcro">Velcro</option>
                            <option value="Extended Wrist">Extended Wrist</option>
                            <option value="Short Wrist">Short Wrist</option>

                        </select>

                    </div>

                </div>


                {{-- COLOR --}}
                <div class="custom-field">

                    <label>COLOR</label>

                    <div class="color-grid glove-colors">

                        @foreach([
                            'Black',
                            'White',
                            'Red',
                            'Royal Blue',
                            'Navy Blue',
                            'Sky Blue',
                            'Green',
                            'Yellow',
                            'Orange',
                            'Purple',
                            'Maroon',
                            'Pink',
                            'Grey',
                            'Silver',
                            'Gold',
                            'Brown',
                            'Beige',
                            'Teal',
                            'Turquoise',
                            'Lime'
                        ] as $color)

                            <button
                                type="button"
                                data-value="{{ $color }}"
                            >
                                {{ $color }}
                            </button>

                        @endforeach

                    </div>

                    <input
                        type="hidden"
                        name="customizations[gloves][color]"
                        id="gloveColor"
                    >

                </div>


                {{-- TEXT --}}
                <div class="custom-field">

                    <label>NAME / TEXT</label>

                    <input
                        type="text"
                        id="gloveText"
                        name="customizations[gloves][text]"
                        placeholder="Enter name or text"
                    >

                </div>


                {{-- SUMMARY --}}
                <div
                    class="selection-summary"
                    id="glovesSummary"
                >

                    <span>LIVE SUMMARY</span>

                    <p>
                        Choose an option to start customizing this section.
                    </p>

                </div>


                {{-- GLOVES WHATSAPP --}}
                <div class="section-whatsapp-box">

                    <div class="section-whatsapp-heading">

                        <span>HANDWEAR COMPLETE?</span>

                        <h3>
                            SEND YOUR
                            <strong>GLOVES</strong>
                        </h3>

                        <p>
                            Enter your contact details and send your
                            glove specifications directly to FA SPORTS.
                        </p>

                    </div>


                    <div class="custom-contact__form">

                        <div class="custom-field">

                            <label>NAME</label>

                            <input
                                type="text"
                                name="name"
                                required
                                placeholder="Your name"
                            >

                        </div>


                        <div class="custom-field">

                            <label>EMAIL</label>

                            <input
                                type="email"
                                name="email"
                                required
                                placeholder="your@email.com"
                            >

                        </div>


                        <div class="custom-field">

                            <label>PHONE / WHATSAPP</label>

                            <input
                                type="text"
                                name="phone"
                                required
                                placeholder="03XX XXXXXXX"
                            >

                        </div>


                        <div
                            class="custom-error"
                            id="glovesError"
                            aria-live="polite"
                        ></div>


                        <button
                            type="submit"
                            class="whatsapp-button"
                            data-whatsapp-section="gloves"
                        >
                            SEND GLOVES ON WHATSAPP
                            <span>↗</span>
                        </button>

                    </div>

                </div>

            </div>

        </section>

    </form>

</main>

@endsection


@push('scripts')
<script src="{{ asset('js/customize.js?v=22') }}"></script>
@endpush

