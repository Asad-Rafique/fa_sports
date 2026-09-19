
@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/connect.css') }}">
@endpush

@section('content')

<main class="fa-connect-page">

    {{-- =====================================================
         HERO
    ====================================================== --}}
    <section class="fa-connect-hero">

        <div class="fa-connect-hero__grid"></div>

        <div class="fa-connect-hero__content">

            <span class="fa-connect-hero__eyebrow">
                FA SPORTS / CONNECT
            </span>

            <h1 class="fa-connect-hero__title">
                LET'S
                <span>CONNECT.</span>
            </h1>

            <p class="fa-connect-hero__copy">
                Have a question, project or idea?
                Tell us what you need and let's start the conversation.
            </p>

            <a href="#enquiry" class="fa-connect-hero__scroll">
                <span></span>
                START A CONVERSATION
                <b>↓</b>
            </a>

        </div>

        <div class="fa-connect-hero__number">
            01
        </div>

    </section>


    {{-- =====================================================
         CONTACT FORM
    ====================================================== --}}
    <section class="fa-connect-form-section" id="enquiry">

        <div class="fa-connect-form__intro">

            <span class="fa-connect-section__eyebrow">
                02 / CONTACT FA SPORTS
            </span>

            <h2>
                TELL US
                <span>WHAT YOU NEED.</span>
            </h2>

            <p>
                Whether you are looking for custom teamwear, sportswear,
                manufacturing or simply want to ask a question,
                send us a message.
            </p>

        </div>


        <div class="fa-connect-form__wrapper">

            {{-- =================================================
                 SUCCESS MESSAGE
            ================================================== --}}
            @if (session('success'))

                <div class="fa-connect-success">

                    <div class="fa-connect-success__circle">
                        <span>✓</span>
                    </div>

                    <span class="fa-connect-success__eyebrow">
                        MESSAGE SENT
                    </span>

                    <h2>
                        THANK
                        <span>YOU.</span>
                    </h2>

                    <p>
                        Your message has been received successfully.
                        Our team will review your enquiry and get back
                        to you shortly.
                    </p>

                    <a href="{{ route('connect') }}" class="fa-connect-button">
                        SEND ANOTHER MESSAGE
                        <span>→</span>
                    </a>

                </div>

            @else

                {{-- =================================================
                     VALIDATION ERRORS
                ================================================== --}}
                @if ($errors->any())

                    <div class="fa-connect-errors">

                        <strong>
                            PLEASE CHECK YOUR DETAILS
                        </strong>

                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>

                    </div>

                @endif


                {{-- =================================================
                     CONTACT FORM
                ================================================== --}}
                <form
                    method="POST"
                    action="{{ route('connect.store') }}"
                    class="fa-connect-form"
                    id="enquiryForm"
                >

                    @csrf

                    {{-- Honeypot --}}
                    <div class="fa-connect-honeypot" aria-hidden="true">

                        <label for="website">
                            Website
                        </label>

                        <input
                            type="text"
                            name="website"
                            id="website"
                            tabindex="-1"
                            autocomplete="off"
                        >

                    </div>


                    {{-- Keep backend compatible --}}
                    <input
                        type="hidden"
                        name="organization_type"
                        value="General Contact"
                    >


                    <div class="fa-connect-form__top">

                        <span class="fa-connect-form__label">
                            CONTACT FORM
                        </span>

                        <span class="fa-connect-form__required">
                            * REQUIRED
                        </span>

                    </div>


                    {{-- =================================================
                         NAME
                    ================================================== --}}
                    <div class="fa-connect-field fa-connect-field--full">

                        <label for="name">
                            01 / YOUR NAME <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Enter your full name"
                            required
                        >

                    </div>


                    {{-- =================================================
                         EMAIL
                    ================================================== --}}
                    <div class="fa-connect-field fa-connect-field--full">

                        <label for="email">
                            02 / EMAIL ADDRESS <span>*</span>
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="you@example.com"
                            required
                        >

                    </div>


                    {{-- =================================================
                         MAIN TYPE
                    ================================================== --}}
                    <div class="fa-connect-field fa-connect-field--full">

                        <label for="enquiry_type">
                            03 / WHAT DO YOU NEED? <span>*</span>
                        </label>

                        <div class="fa-connect-select-wrap">

                            <select
                                name="enquiry_type"
                                id="enquiry_type"
                                required
                            >

                                <option value="" disabled selected>
                                    Select an enquiry type
                                </option>

                                <option value="Sportswear"
                                    {{ old('enquiry_type') === 'Sportswear' ? 'selected' : '' }}>
                                    Sportswear
                                </option>

                                <option value="Team Kits"
                                    {{ old('enquiry_type') === 'Team Kits' ? 'selected' : '' }}>
                                    Team Kits
                                </option>

                                <option value="Custom Manufacturing"
                                    {{ old('enquiry_type') === 'Custom Manufacturing' ? 'selected' : '' }}>
                                    Custom Manufacturing
                                </option>

                                <option value="OEM / Private Label"
                                    {{ old('enquiry_type') === 'OEM / Private Label' ? 'selected' : '' }}>
                                    OEM / Private Label
                                </option>

                                <option value="Footwear"
                                    {{ old('enquiry_type') === 'Footwear' ? 'selected' : '' }}>
                                    Footwear
                                </option>

                                <option value="Gloves"
                                    {{ old('enquiry_type') === 'Gloves' ? 'selected' : '' }}>
                                    Gloves
                                </option>

                                <option value="General Enquiry"
                                    {{ old('enquiry_type') === 'General Enquiry' ? 'selected' : '' }}>
                                    General Enquiry
                                </option>

                            </select>

                            <span class="fa-connect-select-arrow">
                                ↓
                            </span>

                        </div>

                    </div>


                    {{-- =================================================
                         FURTHER TYPE / OPTIONS
                    ================================================== --}}
                    <div class="fa-connect-field fa-connect-field--full">

                        <label for="project_type">
                            04 / TELL US MORE
                        </label>

                        <div class="fa-connect-select-wrap">

                            <select
                                name="project_type"
                                id="project_type"
                            >

                                <option value="" selected>
                                    Select a more specific option
                                </option>

                                <option value="Teamwear">
                                    Teamwear / Club Kit
                                </option>

                                <option value="Training Wear">
                                    Training Wear
                                </option>

                                <option value="Match Kit">
                                    Match Kit
                                </option>

                                <option value="Custom Design">
                                    Custom Design
                                </option>

                                <option value="Bulk Order">
                                    Bulk Order
                                </option>

                                <option value="Brand Manufacturing">
                                    Brand Manufacturing
                                </option>

                                <option value="Private Label">
                                    Private Label
                                </option>

                                <option value="Product Development">
                                    Product Development
                                </option>

                                <option value="Other">
                                    Other
                                </option>

                            </select>

                            <span class="fa-connect-select-arrow">
                                ↓
                            </span>

                        </div>

                    </div>


                    {{-- =================================================
                         MESSAGE
                    ================================================== --}}
                    <div class="fa-connect-field fa-connect-field--full">

                        <label for="message">
                            05 / YOUR MESSAGE <span>*</span>
                        </label>

                        <textarea
                            id="message"
                            name="message"
                            rows="7"
                            placeholder="Tell us about your project, requirements or question..."
                            required
                        >{{ old('message') }}</textarea>

                        <div class="fa-connect-message-line">
                            <span></span>
                            <small>
                                Tell us as much as you can.
                            </small>
                        </div>

                    </div>


                    {{-- =================================================
                         SUBMIT
                    ================================================== --}}
                    <div class="fa-connect-submit-area">

                        <div class="fa-connect-submit-note">

                            <span>FA SPORTS</span>

                            <small>
                                We usually respond as soon as possible.
                            </small>

                        </div>

                        <button
                            type="submit"
                            class="fa-connect-submit"
                            id="submitButton"
                        >

                            <span class="fa-connect-submit__text">
                                SEND MESSAGE
                            </span>

                            <span class="fa-connect-submit__arrow">
                                →
                            </span>

                            <span class="fa-connect-submit__loader">
                                Sending...
                            </span>

                        </button>

                    </div>

                </form>

            @endif

        </div>

    </section>


    {{-- =====================================================
         FAQ
    ====================================================== --}}
    <section class="fa-connect-faq" id="faq">

        <div class="fa-connect-faq__container">

            <div class="fa-connect-faq__intro">

                <span class="fa-connect-section__eyebrow">
                    03 / FAQ
                </span>

                <h2>
                    BEFORE
                    <span>YOU SEND.</span>
                </h2>

                <p>
                    A few answers before you start the conversation.
                </p>

            </div>


            <div class="fa-connect-faq__list">

                @forelse ($faqs as $faq)

                    <div class="fa-connect-faq__item">

                        <button
                            type="button"
                            class="fa-connect-faq__question"
                        >

                            <span>
                                {{ $faq->question }}
                            </span>

                            <b>+</b>

                        </button>

                        <div class="fa-connect-faq__answer">

                            <p>
                                {{ $faq->answer }}
                            </p>

                        </div>

                    </div>

                @empty

                    <div class="fa-connect-faq__item">

                        <button
                            type="button"
                            class="fa-connect-faq__question"
                        >

                            <span>
                                What type of orders does FA SPORTS handle?
                            </span>

                            <b>+</b>

                        </button>

                        <div class="fa-connect-faq__answer">

                            <p>
                                FA SPORTS works with teams, clubs, academies,
                                brands, retailers and businesses for custom
                                sportswear and manufacturing projects.
                            </p>

                        </div>

                    </div>


                    <div class="fa-connect-faq__item">

                        <button
                            type="button"
                            class="fa-connect-faq__question"
                        >

                            <span>
                                Can you create custom team kits?
                            </span>

                            <b>+</b>

                        </button>

                        <div class="fa-connect-faq__answer">

                            <p>
                                Yes. Custom teamwear can be developed around
                                your colours, requirements, branding and
                                performance needs.
                            </p>

                        </div>

                    </div>


                    <div class="fa-connect-faq__item">

                        <button
                            type="button"
                            class="fa-connect-faq__question"
                        >

                            <span>
                                Do you offer OEM and private label?
                            </span>

                            <b>+</b>

                        </button>

                        <div class="fa-connect-faq__answer">

                            <p>
                                Yes. FA SPORTS can work with brands and
                                businesses on OEM, private-label and
                                custom manufacturing projects.
                            </p>

                        </div>

                    </div>


                    <div class="fa-connect-faq__item">

                        <button
                            type="button"
                            class="fa-connect-faq__question"
                        >

                            <span>
                                How do I start a project?
                            </span>

                            <b>+</b>

                        </button>

                        <div class="fa-connect-faq__answer">

                            <p>
                                Complete the enquiry form above with your
                                requirements. Our team can then review the
                                enquiry and discuss the next step with you.
                            </p>

                        </div>

                    </div>

                @endforelse

            </div>

        </div>

    </section>

</main>

@endsection


@section('footer')
    @include('partials.connect-footer')
@endsection


@push('scripts')
    <script src="{{ asset('js/connect.js') }}" defer></script>
@endpush

