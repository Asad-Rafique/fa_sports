
@extends('layouts.app')

@section('content')

<section class="fa-essential-detail">

    <div class="fa-essential-detail__top">

        <a href="{{ url('/') }}" class="fa-essential-detail__back">
            <span>←</span> BACK TO HOME
        </a>

        <span class="fa-essential-detail__category">
            {{ $product['category'] }}
        </span>

    </div>


    <div class="fa-essential-detail__content">

        <div class="fa-essential-detail__visual">

            <span class="fa-essential-detail__index">
                ESSENTIAL / {{ $product['number'] ?? '01' }}
            </span>

            <img
                src="{{ asset($product['image']) }}"
                alt="{{ $product['name'] }}"
                class="fa-essential-detail__image"
            >

            <span class="fa-essential-detail__visual-label">
                FA SPORTS — PERFORMANCE SERIES
            </span>

        </div>


        <div class="fa-essential-detail__info">

            <span class="fa-essential-detail__eyebrow">
                THE ESSENTIALS
            </span>

            <h1>
                {{ $product['name'] }}
            </h1>

            <div class="fa-essential-detail__line"></div>

            <p class="fa-essential-detail__description">
                {{ $product['description'] }}
            </p>


            <div class="fa-essential-detail__features">

                <span class="fa-essential-detail__feature-heading">
                    PRODUCT HIGHLIGHTS
                </span>

                @foreach($product['features'] as $feature)

                    <div class="fa-essential-detail__feature">
                        <span>+</span>
                        {{ $feature }}
                    </div>

                @endforeach

            </div>


            <a href="{{ route('quote') }}"
               class="fa-essential-detail__button">
                REQUEST A QUOTE
                <span>↗</span>
            </a>

        </div>

    </div>


    <div class="fa-essential-detail__bottom">

        <span>FA SPORTS</span>
        <span>THE GAME STARTS BEFORE THE GAME.</span>
        <span>{{ '0' . ($product['number'] ?? '1') }} / 03</span>

    </div>

</section>

@endsection
