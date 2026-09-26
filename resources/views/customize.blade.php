@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/customize.css') }}">
@endpush

@section('content')

{{-- =========================================================
     HERO
========================================================= --}}

<section class="custom-hero">

    <div class="custom-hero__wall"></div>

    <div class="custom-hero__content">

        <div class="custom-hero__eyebrow">
            FA SPORTS / CUSTOM LAB
        </div>

        <h1>
            CREATE
            <span>YOUR</span>
            <strong>KIT.</strong>
        </h1>

        <p>
            BUILD YOUR OWN SPORTS IDENTITY.
            SELECT. PERSONALIZE. SEND.
        </p>

        <a href="#uniform-customizer" class="custom-hero__button">
            START CUSTOMIZING
            <span>↓</span>
        </a>

    </div>

    <div class="custom-hero__side">
        <span>01 UNIFORM</span>
        <span>02 SHOES</span>
        <span>03 BAGS</span>
        <span>04 GLOVES</span>
    </div>

    <div class="custom-hero__bottom">
        <span>FA SPORTS</span>
        <span>THE GAME STARTS BEFORE THE GAME</span>
        <span>CUSTOM LAB / 2026</span>
    </div>

</section>


{{-- =========================================================
     UNIFORM
========================================================= --}}

<section
    class="custom-product-section"
    id="uniform-customizer"
>

    <div class="custom-section-heading">

        <div>
            <span>01 / UNIFORM</span>

            <h2>
                CUSTOMIZE
                <strong>YOUR UNIFORM.</strong>
            </h2>
        </div>

        <p>
            Build your uniform step by step.
            Choose your category, colors, measurements
            and personalization.
        </p>

    </div>


    <div class="custom-product-layout">

        {{-- IMAGE --}}

        <div class="custom-product-visual">

            <div class="custom-visual-label">
                <span>LIVE PREVIEW</span>
                <b id="uniformPreviewStatus">READY</b>
            </div>

            <div class="custom-image-frame">

                <div class="frame-line frame-line--top"></div>
                <div class="frame-line frame-line--bottom"></div>

                <img
                    src="{{ asset('images/legacy/uniform2.jpg') }}"
                    alt="FA SPORTS Custom Uniform"
                >

                <div class="preview-tag">
                    CUSTOM
                </div>

            </div>

            <div class="custom-image-caption">
                <span>FA SPORTS / UNIFORM</span>

                <strong id="uniformVisualName">
                    CUSTOM TEAM UNIFORM
                </strong>
            </div>

        </div>


        {{-- CONTROLS --}}

        <div class="custom-product-controls">

            {{-- CATEGORY --}}

            <div class="custom-control-card">

                <div class="control-title">
                    <span>01</span>
                    <strong>SELECT CATEGORY</strong>
                </div>

                <div class="choice-grid choice-grid--category">

                    <button
                        type="button"
                        class="choice-button"
                        data-uniform-category="Child"
                    >
                        <b>01</b>
                        <span>CHILD</span>
                    </button>

                    <button
                        type="button"
                        class="choice-button"
                        data-uniform-category="Male"
                    >
                        <b>02</b>
                        <span>MALE</span>
                    </button>

                    <button
                        type="button"
                        class="choice-button"
                        data-uniform-category="Female"
                    >
                        <b>03</b>
                        <span>FEMALE</span>
                    </button>

                    <button
                        type="button"
                        class="choice-button"
                        data-uniform-category="Above 20"
                    >
                        <b>04</b>
                        <span>20+</span>
                    </button>

                    <button
                        type="button"
                        class="choice-button"
                        data-uniform-category="Above 30"
                    >
                        <b>05</b>
                        <span>30+</span>
                    </button>

                    <button
                        type="button"
                        class="choice-button"
                        data-uniform-category="Above 40"
                    >
                        <b>06</b>
                        <span>40+</span>
                    </button>

                </div>

            </div>


            {{-- SHIRT COLOR --}}

            <div class="custom-control-card">

                <div class="control-title">
                    <span>02</span>
                    <strong>SHIRT COLOR</strong>
                </div>

                <div class="named-color-grid">

                    @foreach([
                        'Red',
                        'Black',
                        'White',
                        'Royal Blue',
                        'Navy Blue',
                        'Sky Blue',
                        'Green',
                        'Dark Green',
                        'Yellow',
                        'Orange',
                        'Purple',
                        'Maroon',
                        'Grey',
                        'Light Grey',
                        'Pink',
                        'Gold',
                        'Silver',
                        'Turquoise',
                        'Brown',
                        'Neon Green'
                    ] as $color)

                        <button
                            type="button"
                            class="named-color"
                            data-shirt-color="{{ $color }}"
                        >
                            {{ $color }}
                        </button>

                    @endforeach

                </div>

            </div>


            {{-- TROUSER COLOR --}}

            <div class="custom-control-card">

                <div class="control-title">
                    <span>03</span>
                    <strong>TROUSER COLOR</strong>
                </div>

                <div class="named-color-grid">

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
                        'Grey',
                        'Light Grey',
                        'Pink',
                        'Gold',
                        'Silver',
                        'Turquoise',
                        'Brown',
                        'Neon Green'
                    ] as $color)

                        <button
                            type="button"
                            class="named-color"
                            data-trouser-color="{{ $color }}"
                        >
                            {{ $color }}
                        </button>

                    @endforeach

                </div>

            </div>


            {{-- SHIRT PERSONALIZATION --}}

            <div class="custom-control-card">

                <div class="control-title">
                    <span>04</span>
                    <strong>SHIRT PERSONALIZATION</strong>
                </div>

                <div class="custom-fields-grid">

                    <div class="custom-field custom-field--full">

                        <label>TEXT ON SHIRT</label>

                        <input
                            type="text"
                            id="uniformShirtText"
                            placeholder="ENTER TEAM NAME / TEXT"
                            maxlength="30"
                        >

                    </div>


                    <div class="custom-field">

                        <label>PLAYER NUMBER</label>

                        <input
                            type="text"
                            id="uniformNumber"
                            placeholder="10"
                            maxlength="3"
                            inputmode="numeric"
                        >

                    </div>


                    <div class="custom-field">

                        <label>SHIRT SIZE</label>

                        <select id="uniformShirtSize">

                            <option value="">SELECT SIZE</option>

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
                            placeholder="e.g. 5'10"
                        >

                    </div>


                    <div class="custom-field">

                        <label>WIDTH</label>

                        <input
                            type="text"
                            id="uniformWidth"
                            placeholder="e.g. 22 inch"
                        >

                    </div>


                    <div class="custom-field">

                        <label>SLEEVE</label>

                        <select id="uniformSleeve">

                            <option value="">SELECT</option>

                            <option value="Short Sleeve">
                                SHORT SLEEVE
                            </option>

                            <option value="Long Sleeve">
                                LONG SLEEVE
                            </option>

                        </select>

                    </div>


                    <div class="custom-field">

                        <label>COLLAR</label>

                        <select id="uniformCollar">

                            <option value="">
                                SELECT COLLAR
                            </option>

                            <option value="Round Neck">
                                ROUND NECK
                            </option>

                            <option value="V Neck">
                                V NECK
                            </option>

                            <option value="Polo Collar">
                                POLO COLLAR
                            </option>

                            <option value="Mandarin Collar">
                                MANDARIN
                            </option>

                        </select>

                    </div>


                    <div class="custom-field">

                        <label>TROUSER SIZE</label>

                        <select id="uniformTrouserSize">

                            <option value="">
                                SELECT SIZE
                            </option>

                            <option value="XS">XS</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                            <option value="2XL">2XL</option>
                            <option value="3XL">3XL</option>

                        </select>

                    </div>


                    <div class="custom-field">

                        <label>TROUSER LENGTH</label>

                        <input
                            type="text"
                            id="uniformTrouserLength"
                            placeholder="e.g. 40 inch"
                        >

                    </div>


                    <div class="custom-field">

                        <label>TROUSER WIDTH</label>

                        <input
                            type="text"
                            id="uniformTrouserWidth"
                            placeholder="e.g. 14 inch"
                        >

                    </div>

                </div>

            </div>


            {{-- UNIFORM SUMMARY --}}

            <div class="custom-summary-card">

                <div class="summary-card-top">
                    <span>LIVE CUSTOMIZATION</span>
                    <b>UNIFORM</b>
                </div>

                <div class="summary-list">

                    <div>
                        <span>CATEGORY</span>
                        <strong id="summaryUniformCategory">
                            NOT SELECTED
                        </strong>
                    </div>

                    <div>
                        <span>SHIRT COLOR</span>
                        <strong id="summaryShirtColor">
                            NOT SELECTED
                        </strong>
                    </div>

                    <div>
                        <span>TROUSER COLOR</span>
                        <strong id="summaryTrouserColor">
                            NOT SELECTED
                        </strong>
                    </div>

                    <div>
                        <span>TEXT</span>
                        <strong id="summaryShirtText">
                            NOT SELECTED
                        </strong>
                    </div>

                    <div>
                        <span>NUMBER</span>
                        <strong id="summaryUniformNumber">
                            NOT SELECTED
                        </strong>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     SHOES
========================================================= --}}

<section class="custom-product-section custom-product-section--dark">

    <div class="custom-section-heading">

        <div>

            <span>02 / FOOTWEAR</span>

            <h2>
                CUSTOMIZE
                <strong>YOUR SHOES.</strong>
            </h2>

        </div>

        <p>
            Select the category, size, color and
            personalization for your footwear.
        </p>

    </div>


    <div class="custom-product-layout">

        {{-- SHOES IMAGE --}}

        <div class="custom-product-visual">

            <div class="custom-visual-label">

                <span>PRODUCT PREVIEW</span>

                <b>SHOES</b>

            </div>


            <div class="custom-image-frame">

                <img
                    src="{{ asset('images/legacy/product-043.jpg') }}"
                    alt="FA SPORTS Shoes"
                >

                <div class="preview-tag">
                    FOOTWEAR
                </div>

            </div>


            <div class="custom-image-caption">

                <span>
                    FA SPORTS / FOOTWEAR
                </span>

                <strong>
                    PERFORMANCE SHOES
                </strong>

            </div>

        </div>


        {{-- SHOES CONTROLS --}}

        <div class="custom-product-controls">

            <div class="custom-control-card">

                <div class="control-title">

                    <span>01</span>

                    <strong>
                        SELECT CATEGORY
                    </strong>

                </div>


                <div class="choice-grid">

                    <button
                        type="button"
                        class="choice-button"
                        data-shoe-category="Child"
                    >
                        CHILD
                    </button>

                    <button
                        type="button"
                        class="choice-button"
                        data-shoe-category="Male"
                    >
                        MALE
                    </button>

                    <button
                        type="button"
                        class="choice-button"
                        data-shoe-category="Female"
                    >
                        FEMALE
                    </button>

                    <button
                        type="button"
                        class="choice-button"
                        data-shoe-category="Adult"
                    >
                        ADULT
                    </button>

                </div>

            </div>


            <div class="custom-control-card">

                <div class="control-title">

                    <span>02</span>

                    <strong>
                        SHOE DETAILS
                    </strong>

                </div>


                <div class="custom-fields-grid">

                    <div class="custom-field">

                        <label>
                            SHOE SIZE
                        </label>

                        <select id="shoeSize">

                            <option value="">
                                SELECT SIZE
                            </option>

                            @for($i = 28; $i <= 48; $i++)

                                <option value="{{ $i }}">
                                    {{ $i }}
                                </option>

                            @endfor

                        </select>

                    </div>


                    <div class="custom-field">

                        <label>
                            COLOR NAME
                        </label>

                        <input
                            type="text"
                            id="shoeColor"
                            placeholder="e.g. BLACK / RED"
                            maxlength="30"
                        >

                    </div>


                    <div class="custom-field custom-field--full">

                        <label>
                            NAME / TEXT ON SHOE
                        </label>

                        <input
                            type="text"
                            id="shoeText"
                            placeholder="ENTER NAME OR TEXT"
                            maxlength="25"
                        >

                    </div>


                    <div class="custom-field">

                        <label>
                            SOLE TYPE
                        </label>

                        <select id="shoeSole">

                            <option value="">
                                SELECT
                            </option>

                            <option value="Indoor">
                                INDOOR
                            </option>

                            <option value="Turf">
                                TURF
                            </option>

                            <option value="Outdoor">
                                OUTDOOR
                            </option>

                            <option value="Running">
                                RUNNING
                            </option>

                        </select>

                    </div>


                    <div class="custom-field">

                        <label>
                            WIDTH
                        </label>

                        <select id="shoeWidth">

                            <option value="">
                                SELECT
                            </option>

                            <option value="Regular">
                                REGULAR
                            </option>

                            <option value="Wide">
                                WIDE
                            </option>

                        </select>

                    </div>

                </div>

            </div>


            <div class="custom-summary-card">

                <div class="summary-card-top">

                    <span>
                        LIVE CUSTOMIZATION
                    </span>

                    <b>
                        SHOES
                    </b>

                </div>


                <div class="summary-list">

                    <div>

                        <span>
                            CATEGORY
                        </span>

                        <strong id="summaryShoeCategory">
                            NOT SELECTED
                        </strong>

                    </div>


                    <div>

                        <span>
                            SIZE
                        </span>

                        <strong id="summaryShoeSize">
                            NOT SELECTED
                        </strong>

                    </div>


                    <div>

                        <span>
                            COLOR
                        </span>

                        <strong id="summaryShoeColor">
                            NOT SELECTED
                        </strong>

                    </div>


                    <div>

                        <span>
                            TEXT
                        </span>

                        <strong id="summaryShoeText">
                            NOT SELECTED
                        </strong>

                    </div>


                    <div>

                        <span>
                            SOLE
                        </span>

                        <strong id="summaryShoeSole">
                            NOT SELECTED
                        </strong>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     BAGS
========================================================= --}}

<section class="custom-product-section">

    <div class="custom-section-heading">

        <div>

            <span>
                03 / TEAM BAGS
            </span>

            <h2>
                CUSTOMIZE
                <strong>YOUR BAG.</strong>
            </h2>

        </div>

        <p>
            Create your team bag with your preferred
            size, color, text and storage requirements.
        </p>

    </div>


    <div class="custom-product-layout">

        {{-- BAG IMAGE --}}

        <div class="custom-product-visual">

            <div class="custom-visual-label">

                <span>
                    PRODUCT PREVIEW
                </span>

                <b>
                    BAGS
                </b>

            </div>


            <div class="custom-image-frame">

                <img
                    src="{{ asset('images/legacy/product-077.jpg') }}"
                    alt="FA SPORTS Team Bag"
                >

                <div class="preview-tag">
                    TEAM GEAR
                </div>

            </div>


            <div class="custom-image-caption">

                <span>
                    FA SPORTS / TEAM GEAR
                </span>

                <strong>
                    CUSTOM TEAM BAG
                </strong>

            </div>

        </div>


        {{-- BAG CONTROLS --}}

        <div class="custom-product-controls">

            <div class="custom-control-card">

                <div class="control-title">

                    <span>
                        01
                    </span>

                    <strong>
                        SELECT CATEGORY
                    </strong>

                </div>


                <div class="choice-grid">

                    <button
                        type="button"
                        class="choice-button"
                        data-bag-category="Team Bag"
                    >
                        TEAM BAG
                    </button>

                    <button
                        type="button"
                        class="choice-button"
                        data-bag-category="Kit Bag"
                    >
                        KIT BAG
                    </button>

                    <button
                        type="button"
                        class="choice-button"
                        data-bag-category="Backpack"
                    >
                        BACKPACK
                    </button>

                    <button
                        type="button"
                        class="choice-button"
                        data-bag-category="Travel Bag"
                    >
                        TRAVEL BAG
                    </button>

                </div>

            </div>


            <div class="custom-control-card">

                <div class="control-title">

                    <span>
                        02
                    </span>

                    <strong>
                        BAG DETAILS
                    </strong>

                </div>


                <div class="custom-fields-grid">

                    <div class="custom-field">

                        <label>
                            BAG SIZE
                        </label>

                        <select id="bagSize">

                            <option value="">
                                SELECT SIZE
                            </option>

                            <option value="Small">
                                SMALL
                            </option>

                            <option value="Medium">
                                MEDIUM
                            </option>

                            <option value="Large">
                                LARGE
                            </option>

                            <option value="Extra Large">
                                EXTRA LARGE
                            </option>

                        </select>

                    </div>


                    <div class="custom-field">

                        <label>
                            COLOR NAME
                        </label>

                        <input
                            type="text"
                            id="bagColor"
                            placeholder="e.g. BLACK / RED"
                            maxlength="30"
                        >

                    </div>


                    <div class="custom-field custom-field--full">

                        <label>
                            NAME / TEXT ON BAG
                        </label>

                        <input
                            type="text"
                            id="bagText"
                            placeholder="ENTER TEAM NAME"
                            maxlength="30"
                        >

                    </div>


                    <div class="custom-field">

                        <label>
                            COMPARTMENTS
                        </label>

                        <select id="bagCompartments">

                            <option value="">
                                SELECT
                            </option>

                            <option value="2 Compartments">
                                2 COMPARTMENTS
                            </option>

                            <option value="3 Compartments">
                                3 COMPARTMENTS
                            </option>

                            <option value="4 Compartments">
                                4 COMPARTMENTS
                            </option>

                            <option value="5+ Compartments">
                                5+ COMPARTMENTS
                            </option>

                        </select>

                    </div>


                    <div class="custom-field">

                        <label>
                            STRAP STYLE
                        </label>

                        <select id="bagStrap">

                            <option value="">
                                SELECT
                            </option>

                            <option value="Shoulder Strap">
                                SHOULDER STRAP
                            </option>

                            <option value="Backpack Straps">
                                BACKPACK STRAPS
                            </option>

                            <option value="Both">
                                BOTH
                            </option>

                        </select>

                    </div>

                </div>

            </div>


            <div class="custom-summary-card">

                <div class="summary-card-top">

                    <span>
                        LIVE CUSTOMIZATION
                    </span>

                    <b>
                        BAGS
                    </b>

                </div>


                <div class="summary-list">

                    <div>

                        <span>
                            CATEGORY
                        </span>

                        <strong id="summaryBagCategory">
                            NOT SELECTED
                        </strong>

                    </div>


                    <div>

                        <span>
                            SIZE
                        </span>

                        <strong id="summaryBagSize">
                            NOT SELECTED
                        </strong>

                    </div>


                    <div>

                        <span>
                            COLOR
                        </span>

                        <strong id="summaryBagColor">
                            NOT SELECTED
                        </strong>

                    </div>


                    <div>

                        <span>
                            TEXT
                        </span>

                        <strong id="summaryBagText">
                            NOT SELECTED
                        </strong>

                    </div>


                    <div>

                        <span>
                            COMPARTMENTS
                        </span>

                        <strong id="summaryBagCompartments">
                            NOT SELECTED
                        </strong>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     GLOVES
========================================================= --}}

<section class="custom-product-section custom-product-section--dark">

    <div class="custom-section-heading">

        <div>

            <span>
                04 / GLOVES
            </span>

            <h2>
                CUSTOMIZE
                <strong>YOUR GLOVES.</strong>
            </h2>

        </div>

        <p>
            Select your glove category, hand,
            size and personalization.
        </p>

    </div>


    <div class="custom-product-layout">

        {{-- GLOVE IMAGE --}}

        <div class="custom-product-visual">

            <div class="custom-visual-label">

                <span>
                    PRODUCT PREVIEW
                </span>

                <b>
                    GLOVES
                </b>

            </div>


            <div class="custom-image-frame">

                <img
                    src="{{ asset('images/legacy/fa-grip-glove.jpg') }}"
                    alt="FA SPORTS Gloves"
                >

                <div class="preview-tag">
                    PERFORMANCE
                </div>

            </div>


            <div class="custom-image-caption">

                <span>
                    FA SPORTS / PERFORMANCE
                </span>

                <strong>
                    FA GRIP GLOVE
                </strong>

            </div>

        </div>


        {{-- GLOVE CONTROLS --}}

        <div class="custom-product-controls">

            <div class="custom-control-card">

                <div class="control-title">

                    <span>
                        01
                    </span>

                    <strong>
                        SELECT CATEGORY
                    </strong>

                </div>


                <div class="choice-grid">

                    <button
                        type="button"
                        class="choice-button"
                        data-glove-category="Child"
                    >
                        CHILD
                    </button>

                    <button
                        type="button"
                        class="choice-button"
                        data-glove-category="Male"
                    >
                        MALE
                    </button>

                    <button
                        type="button"
                        class="choice-button"
                        data-glove-category="Female"
                    >
                        FEMALE
                    </button>

                    <button
                        type="button"
                        class="choice-button"
                        data-glove-category="Adult"
                    >
                        ADULT
                    </button>

                </div>

            </div>


            <div class="custom-control-card">

                <div class="control-title">

                    <span>
                        02
                    </span>

                    <strong>
                        GLOVE DETAILS
                    </strong>

                </div>


                <div class="custom-fields-grid">

                    <div class="custom-field">

                        <label>
                            HAND
                        </label>

                        <select id="gloveHand">

                            <option value="">
                                SELECT
                            </option>

                            <option value="Left Hand">
                                LEFT HAND
                            </option>

                            <option value="Right Hand">
                                RIGHT HAND
                            </option>

                            <option value="Pair">
                                PAIR
                            </option>

                        </select>

                    </div>


                    <div class="custom-field">

                        <label>
                            SIZE
                        </label>

                        <select id="gloveSize">

                            <option value="">
                                SELECT SIZE
                            </option>

                            <option value="XS">XS</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                            <option value="2XL">2XL</option>

                        </select>

                    </div>


                    <div class="custom-field">

                        <label>
                            COLOR NAME
                        </label>

                        <input
                            type="text"
                            id="gloveColor"
                            placeholder="e.g. BLACK / RED"
                            maxlength="30"
                        >

                    </div>


                    <div class="custom-field">

                        <label>
                            WRIST STYLE
                        </label>

                        <select id="gloveWrist">

                            <option value="">
                                SELECT
                            </option>

                            <option value="Short Wrist">
                                SHORT WRIST
                            </option>

                            <option value="Extended Wrist">
                                EXTENDED WRIST
                            </option>

                        </select>

                    </div>


                    <div class="custom-field custom-field--full">

                        <label>
                            NAME / TEXT
                        </label>

                        <input
                            type="text"
                            id="gloveText"
                            placeholder="ENTER NAME / TEXT"
                            maxlength="25"
                        >

                    </div>

                </div>

            </div>


            <div class="custom-summary-card">

                <div class="summary-card-top">

                    <span>
                        LIVE CUSTOMIZATION
                    </span>

                    <b>
                        GLOVES
                    </b>

                </div>


                <div class="summary-list">

                    <div>

                        <span>
                            CATEGORY
                        </span>

                        <strong id="summaryGloveCategory">
                            NOT SELECTED
                        </strong>

                    </div>


                    <div>

                        <span>
                            HAND
                        </span>

                        <strong id="summaryGloveHand">
                            NOT SELECTED
                        </strong>

                    </div>


                    <div>

                        <span>
                            SIZE
                        </span>

                        <strong id="summaryGloveSize">
                            NOT SELECTED
                        </strong>

                    </div>


                    <div>

                        <span>
                            COLOR
                        </span>

                        <strong id="summaryGloveColor">
                            NOT SELECTED
                        </strong>

                    </div>


                    <div>

                        <span>
                            TEXT
                        </span>

                        <strong id="summaryGloveText">
                            NOT SELECTED
                        </strong>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     FINAL WHATSAPP
========================================================= --}}

<section class="custom-contact-section">

    <div class="custom-contact-box">

        <div class="custom-contact-heading">

            <span>
                05 / FINAL STEP
            </span>

            <h2>
                READY TO
                <strong>SEND?</strong>
            </h2>

            <p>
                Your selected customization will be
                prepared inside WhatsApp automatically.
            </p>

        </div>


        <div class="custom-contact-form">

            <div class="custom-contact-field">

                <label>
                    YOUR NAME
                </label>

                <input
                    type="text"
                    id="customContactName"
                    placeholder="FULL NAME"
                    autocomplete="name"
                >

            </div>


            <div class="custom-contact-field">

                <label>
                    EMAIL
                </label>

                <input
                    type="email"
                    id="customContactEmail"
                    placeholder="EMAIL ADDRESS"
                    autocomplete="email"
                >

            </div>


            <div class="custom-contact-field">

                <label>
                    PHONE / WHATSAPP
                </label>

                <input
                    type="tel"
                    id="customContactWhatsapp"
                    placeholder="+92 300 0000000"
                    autocomplete="tel"
                >

            </div>


            <button
                type="button"
                id="sendWhatsapp"
                class="custom-whatsapp-button"
            >

                <span>
                    SEND ON WHATSAPP
                </span>

                <b>
                    →
                </b>

            </button>


            <p class="custom-contact-note">

                Only the products and options you selected
                will appear automatically in WhatsApp.
                Just review the message and press Send.

            </p>

        </div>

    </div>

</section>


{{-- =========================================================
     FINAL CTA
========================================================= --}}

<section class="custom-final-cta">

    <span>
        FA SPORTS / CUSTOM LAB
    </span>

    <h2>
        YOUR TEAM.
        <strong>YOUR IDENTITY.</strong>
    </h2>

    <p>
        THE GAME STARTS BEFORE THE GAME.
    </p>

</section>


{{-- =========================================================
     CUSTOM LAB JAVASCRIPT
========================================================= --}}

<script>
document.addEventListener('DOMContentLoaded', function () {

    'use strict';

    console.log('FA CUSTOM LAB: FINAL SCRIPT RUNNING');


    /*
    |--------------------------------------------------------------------------
    | FRESH STATE
    |--------------------------------------------------------------------------
    | Har page load par state completely empty hoti hai.
    */

    const state = {
        uniform: {},
        shoes: {},
        bags: {},
        gloves: {}
    };


    /*
    |--------------------------------------------------------------------------
    | HELPERS
    |--------------------------------------------------------------------------
    */

    function clean(value) {
        return String(value ?? '').trim();
    }


    function setState(section, key, value) {

        value = clean(value);

        /*
        |--------------------------------------------------------------------------
        | Agar field empty ho gayi hai to purani value DELETE.
        |--------------------------------------------------------------------------
        */

        if (value === '') {

            delete state[section][key];

        } else {

            /*
            |--------------------------------------------------------------------------
            | Same key ki purani value replace hogi.
            |--------------------------------------------------------------------------
            */

            state[section][key] = value;

        }

    }


    function updateSummary(id, value) {

        const element = document.getElementById(id);

        if (!element) return;

        element.textContent =
            clean(value) || 'NOT SELECTED';

    }


    function selectOnly(buttons, currentButton) {

        buttons.forEach(function (button) {

            button.classList.remove('active');

        });

        currentButton.classList.add('active');

    }


    /*
    |--------------------------------------------------------------------------
    | UNIFORM CATEGORY
    |--------------------------------------------------------------------------
    */

    document
        .querySelectorAll('[data-uniform-category]')
        .forEach(function (button) {

            button.addEventListener('click', function () {

                selectOnly(
                    document.querySelectorAll(
                        '[data-uniform-category]'
                    ),
                    this
                );


                setState(
                    'uniform',
                    'category',
                    this.dataset.uniformCategory
                );


                updateSummary(
                    'summaryUniformCategory',
                    state.uniform.category
                );

            });

        });


    /*
    |--------------------------------------------------------------------------
    | UNIFORM SHIRT COLOR
    |--------------------------------------------------------------------------
    */

    document
        .querySelectorAll('[data-shirt-color]')
        .forEach(function (button) {

            button.addEventListener('click', function () {

                selectOnly(
                    document.querySelectorAll(
                        '[data-shirt-color]'
                    ),
                    this
                );


                setState(
                    'uniform',
                    'shirtColor',
                    this.dataset.shirtColor
                );


                updateSummary(
                    'summaryShirtColor',
                    state.uniform.shirtColor
                );

            });

        });


    /*
    |--------------------------------------------------------------------------
    | UNIFORM TROUSER COLOR
    |--------------------------------------------------------------------------
    */

    document
        .querySelectorAll('[data-trouser-color]')
        .forEach(function (button) {

            button.addEventListener('click', function () {

                selectOnly(
                    document.querySelectorAll(
                        '[data-trouser-color]'
                    ),
                    this
                );


                setState(
                    'uniform',
                    'trouserColor',
                    this.dataset.trouserColor
                );


                updateSummary(
                    'summaryTrouserColor',
                    state.uniform.trouserColor
                );

            });

        });


    /*
    |--------------------------------------------------------------------------
    | UNIFORM INPUTS
    |--------------------------------------------------------------------------
    */

    const uniformFields = {

        uniformShirtText: 'shirtText',
        uniformNumber: 'number',
        uniformShirtSize: 'shirtSize',
        uniformHeight: 'height',
        uniformWidth: 'width',
        uniformSleeve: 'sleeve',
        uniformCollar: 'collar',
        uniformTrouserSize: 'trouserSize',
        uniformTrouserLength: 'trouserLength',
        uniformTrouserWidth: 'trouserWidth'

    };


    Object.entries(uniformFields)
        .forEach(function ([id, key]) {

            const field =
                document.getElementById(id);

            if (!field) return;


            function updateUniformField() {

                setState(
                    'uniform',
                    key,
                    this.value
                );


                updateSummary(
                    'summaryShirtText',
                    state.uniform.shirtText
                );


                updateSummary(
                    'summaryUniformNumber',
                    state.uniform.number
                );

            }


            field.addEventListener(
                'input',
                updateUniformField
            );


            field.addEventListener(
                'change',
                updateUniformField
            );

        });


    /*
    |--------------------------------------------------------------------------
    | SHOES CATEGORY
    |--------------------------------------------------------------------------
    */

    document
        .querySelectorAll('[data-shoe-category]')
        .forEach(function (button) {

            button.addEventListener('click', function () {

                selectOnly(
                    document.querySelectorAll(
                        '[data-shoe-category]'
                    ),
                    this
                );


                setState(
                    'shoes',
                    'category',
                    this.dataset.shoeCategory
                );


                updateSummary(
                    'summaryShoeCategory',
                    state.shoes.category
                );

            });

        });


    /*
    |--------------------------------------------------------------------------
    | SHOES INPUTS
    |--------------------------------------------------------------------------
    */

    const shoeFields = {

        shoeSize: 'size',
        shoeColor: 'color',
        shoeText: 'text',
        shoeSole: 'sole',
        shoeWidth: 'width'

    };


    Object.entries(shoeFields)
        .forEach(function ([id, key]) {

            const field =
                document.getElementById(id);

            if (!field) return;


            function updateShoeField() {

                setState(
                    'shoes',
                    key,
                    this.value
                );


                updateSummary(
                    'summaryShoeSize',
                    state.shoes.size
                );


                updateSummary(
                    'summaryShoeColor',
                    state.shoes.color
                );


                updateSummary(
                    'summaryShoeText',
                    state.shoes.text
                );


                updateSummary(
                    'summaryShoeSole',
                    state.shoes.sole
                );

            }


            field.addEventListener(
                'input',
                updateShoeField
            );


            field.addEventListener(
                'change',
                updateShoeField
            );

        });


    /*
    |--------------------------------------------------------------------------
    | BAGS CATEGORY
    |--------------------------------------------------------------------------
    */

    document
        .querySelectorAll('[data-bag-category]')
        .forEach(function (button) {

            button.addEventListener('click', function () {

                selectOnly(
                    document.querySelectorAll(
                        '[data-bag-category]'
                    ),
                    this
                );


                setState(
                    'bags',
                    'category',
                    this.dataset.bagCategory
                );


                updateSummary(
                    'summaryBagCategory',
                    state.bags.category
                );

            });

        });


    /*
    |--------------------------------------------------------------------------
    | BAGS INPUTS
    |--------------------------------------------------------------------------
    */

    const bagFields = {

        bagSize: 'size',
        bagColor: 'color',
        bagText: 'text',
        bagCompartments: 'compartments',
        bagStrap: 'strap'

    };


    Object.entries(bagFields)
        .forEach(function ([id, key]) {

            const field =
                document.getElementById(id);

            if (!field) return;


            function updateBagField() {

                setState(
                    'bags',
                    key,
                    this.value
                );


                updateSummary(
                    'summaryBagSize',
                    state.bags.size
                );


                updateSummary(
                    'summaryBagColor',
                    state.bags.color
                );


                updateSummary(
                    'summaryBagText',
                    state.bags.text
                );


                updateSummary(
                    'summaryBagCompartments',
                    state.bags.compartments
                );

            }


            field.addEventListener(
                'input',
                updateBagField
            );


            field.addEventListener(
                'change',
                updateBagField
            );

        });


    /*
    |--------------------------------------------------------------------------
    | GLOVES CATEGORY
    |--------------------------------------------------------------------------
    */

    document
        .querySelectorAll('[data-glove-category]')
        .forEach(function (button) {

            button.addEventListener('click', function () {

                selectOnly(
                    document.querySelectorAll(
                        '[data-glove-category]'
                    ),
                    this
                );


                setState(
                    'gloves',
                    'category',
                    this.dataset.gloveCategory
                );


                updateSummary(
                    'summaryGloveCategory',
                    state.gloves.category
                );

            });

        });


    /*
    |--------------------------------------------------------------------------
    | GLOVES INPUTS
    |--------------------------------------------------------------------------
    */

    const gloveFields = {

        gloveHand: 'hand',
        gloveSize: 'size',
        gloveColor: 'color',
        gloveWrist: 'wrist',
        gloveText: 'text'

    };


    Object.entries(gloveFields)
        .forEach(function ([id, key]) {

            const field =
                document.getElementById(id);

            if (!field) return;


            function updateGloveField() {

                setState(
                    'gloves',
                    key,
                    this.value
                );


                updateSummary(
                    'summaryGloveHand',
                    state.gloves.hand
                );


                updateSummary(
                    'summaryGloveSize',
                    state.gloves.size
                );


                updateSummary(
                    'summaryGloveColor',
                    state.gloves.color
                );


                updateSummary(
                    'summaryGloveText',
                    state.gloves.text
                );

            }


            field.addEventListener(
                'input',
                updateGloveField
            );


            field.addEventListener(
                'change',
                updateGloveField
            );

        });


    /*
    |--------------------------------------------------------------------------
    | WHATSAPP BUTTON
    |--------------------------------------------------------------------------
    */

    const sendButton =
        document.getElementById('sendWhatsapp');


    if (!sendButton) {

        console.error(
            'FA CUSTOM LAB: SEND WHATSAPP BUTTON NOT FOUND'
        );

        return;
    }


    sendButton.addEventListener(
        'click',
        function () {

            /*
            |--------------------------------------------------------------------------
            | CUSTOMER DETAILS
            |--------------------------------------------------------------------------
            */

            const name =
                clean(
                    document.getElementById(
                        'customContactName'
                    ).value
                );


            const email =
                clean(
                    document.getElementById(
                        'customContactEmail'
                    ).value
                );


            const phone =
                clean(
                    document.getElementById(
                        'customContactWhatsapp'
                    ).value
                );


            if (!name) {

                alert(
                    'Please enter your name.'
                );

                return;
            }


            if (!email) {

                alert(
                    'Please enter your email.'
                );

                return;
            }


            if (!phone) {

                alert(
                    'Please enter your phone / WhatsApp number.'
                );

                return;
            }


            /*
            |--------------------------------------------------------------------------
            | MESSAGE SECTIONS
            |--------------------------------------------------------------------------
            */

            const sections = [];


            /*
            |--------------------------------------------------------------------------
            | UNIFORM
            |--------------------------------------------------------------------------
            */

            const uniformLabels = {

                category: 'CATEGORY',
                shirtColor: 'SHIRT COLOR',
                trouserColor: 'TROUSER COLOR',
                shirtText: 'SHIRT TEXT',
                number: 'PLAYER NUMBER',
                shirtSize: 'SHIRT SIZE',
                height: 'HEIGHT',
                width: 'WIDTH',
                sleeve: 'SLEEVE',
                collar: 'COLLAR',
                trouserSize: 'TROUSER SIZE',
                trouserLength: 'TROUSER LENGTH',
                trouserWidth: 'TROUSER WIDTH'

            };


            const uniformLines = [];


            Object.entries(state.uniform)
                .forEach(function ([key, value]) {

                    value = clean(value);

                    if (!value) return;

                    if (!uniformLabels[key]) return;

                    uniformLines.push(
                        `${uniformLabels[key]}: ${value}`
                    );

                });


            if (uniformLines.length > 0) {

                sections.push(
                    [
                        'UNIFORM CUSTOMIZATION',
                        '--------------------------------',
                        ...uniformLines
                    ].join('\n')
                );

            }


            /*
            |--------------------------------------------------------------------------
            | SHOES
            |--------------------------------------------------------------------------
            */

            const shoeLabels = {

                category: 'CATEGORY',
                size: 'SIZE',
                color: 'COLOR',
                text: 'TEXT',
                sole: 'SOLE',
                width: 'WIDTH'

            };


            const shoeLines = [];


            Object.entries(state.shoes)
                .forEach(function ([key, value]) {

                    value = clean(value);

                    if (!value) return;

                    if (!shoeLabels[key]) return;

                    shoeLines.push(
                        `${shoeLabels[key]}: ${value}`
                    );

                });


            if (shoeLines.length > 0) {

                sections.push(
                    [
                        'SHOES CUSTOMIZATION',
                        '--------------------------------',
                        ...shoeLines
                    ].join('\n')
                );

            }


            /*
            |--------------------------------------------------------------------------
            | BAGS
            |--------------------------------------------------------------------------
            */

            const bagLabels = {

                category: 'CATEGORY',
                size: 'SIZE',
                color: 'COLOR',
                text: 'TEXT',
                compartments: 'COMPARTMENTS',
                strap: 'STRAP'

            };


            const bagLines = [];


            Object.entries(state.bags)
                .forEach(function ([key, value]) {

                    value = clean(value);

                    if (!value) return;

                    if (!bagLabels[key]) return;

                    bagLines.push(
                        `${bagLabels[key]}: ${value}`
                    );

                });


            if (bagLines.length > 0) {

                sections.push(
                    [
                        'BAG CUSTOMIZATION',
                        '--------------------------------',
                        ...bagLines
                    ].join('\n')
                );

            }


            /*
            |--------------------------------------------------------------------------
            | GLOVES
            |--------------------------------------------------------------------------
            */

            const gloveLabels = {

                category: 'CATEGORY',
                hand: 'HAND',
                size: 'SIZE',
                color: 'COLOR',
                wrist: 'WRIST STYLE',
                text: 'TEXT'

            };


            const gloveLines = [];


            Object.entries(state.gloves)
                .forEach(function ([key, value]) {

                    value = clean(value);

                    if (!value) return;

                    if (!gloveLabels[key]) return;

                    gloveLines.push(
                        `${gloveLabels[key]}: ${value}`
                    );

                });


            if (gloveLines.length > 0) {

                sections.push(
                    [
                        'GLOVE CUSTOMIZATION',
                        '--------------------------------',
                        ...gloveLines
                    ].join('\n')
                );

            }


            /*
            |--------------------------------------------------------------------------
            | NOTHING SELECTED
            |--------------------------------------------------------------------------
            */

            if (sections.length === 0) {

                alert(
                    'Please customize at least one product before sending.'
                );

                return;
            }


            /*
            |--------------------------------------------------------------------------
            | FINAL MESSAGE
            |--------------------------------------------------------------------------
            */

            const message =

                'FA SPORTS CUSTOM LAB\n' +
                '================================\n\n' +

                sections.join('\n\n') +

                '\n\nCUSTOMER DETAILS\n' +
                '--------------------------------\n' +

                `NAME: ${name}\n` +
                `EMAIL: ${email}\n` +
                `PHONE / WHATSAPP: ${phone}\n\n` +

                'I would like to discuss my custom FA SPORTS order.';


            /*
            |--------------------------------------------------------------------------
            | FA SPORTS BUSINESS WHATSAPP
            |--------------------------------------------------------------------------
            */

            const businessNumber =
                '';


            const whatsappUrl =
                'https://wa.me/' +
                businessNumber +
                '?text=' +
                encodeURIComponent(message);


            console.log(
                'FA CUSTOM LAB FINAL MESSAGE:',
                message
            );


            /*
            |--------------------------------------------------------------------------
            | OPEN WHATSAPP
            |--------------------------------------------------------------------------
            */

            window.open(
                whatsappUrl,
                '_blank',
                'noopener,noreferrer'
            );

        }
    );

});
</script>

@endsection