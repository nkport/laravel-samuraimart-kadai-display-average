@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-2">
            @component('components.sidebar', ['categories' => $categories, 'major_categories' => $major_categories])
            @endcomponent
        </div>
        <div class="col-9">
            <h1>おすすめ商品</h1>
            <div class="row">
                @foreach ($recommend_products as $recommend_product)
                    <div class="col-4">
                        <a href="{{ route('products.show', $recommend_product) }}">
                            @if ($recommend_product->image !== '')
                                <img src="{{ asset($recommend_product->image) }}" class="img-thumbnail">
                            @else
                                <img src="{{ asset('img/dummy.png') }}" class="img-thumbnail">
                            @endif
                        </a>
                        <div class="row">
                            <div class="col-12">
                                <p class="samuraimart-product-label mt-2 mb-1">
                                    {{ $recommend_product->name }}
                                </p>
                                @php
                                    $averageScore = round($recommend_product->reviews->avg('score') * 2) / 2;
                                @endphp
                                <x-star-rating :averageScore="$averageScore" />
                                <label class="mt-1 mb-5">￥{{ $recommend_product->price }}</label>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <h1>新着商品</h1>
            <div class="row">
                @foreach ($recently_products as $recently_product)
                    <div class="col-3">
                        <a href="{{ route('products.show', $recently_product) }}">
                            @if ($recently_product->image !== '')
                                <img src="{{ asset($recently_product->image) }}" class="img-thumbnail">
                            @else
                                <img src="{{ asset('img/dummy.png') }}" class="img-thumbnail">
                            @endif
                        </a>
                        <div class="row">
                            <div class="col-12">
                                <p class="samuraimart-product-label mt-2 mb-1">
                                    {{ $recently_product->name }}<br>
                                </p>
                                @php
                                    $averageScore = round($recently_product->reviews->avg('score') * 2) / 2;
                                @endphp
                                <x-star-rating :averageScore="$averageScore" />
                                <label class="mt-1 mb-5">￥{{ $recently_product->price }}</label>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
