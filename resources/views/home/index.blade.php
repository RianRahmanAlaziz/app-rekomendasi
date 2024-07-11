@extends('home.layouts.main')

@section('container')
    <!-- Hero Slider -->
    <section class="hero-wrap text-center relative">
        <div id="owl-hero" class="owl-carousel owl-theme light-arrows slider-animated">
            @foreach ($sliders as $slider)
                <div class="hero-slide overlay img-fluid"
                    style="background-image:url(assets/img/slider/{{ $slider->gambar }})">
                    <div class="container">
                        <div class="hero-holder">
                            <div class="hero-message">
                                <h1 class="hero-title nocaps">{{ $slider->nama_slider }}</h1>
                                <h2 class="hero-subtitle lines">{{ $slider->deskripsi }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section> <!-- end hero slider -->

    <!-- Trendy Products -->
    <section class="section-wrap-sm new-arrivals pb-50 pt-50">
        <div class="container">
            <div class="row heading-row">
                <div class="col-md-12 text-center">
                    <h2 class="heading bottom-line">
                        Pupuk
                    </h2>
                </div>
            </div>
            <div class="row items-grid">
                @foreach ($pupuk as $item)
                    <div class="col-md-3 col-xs-6">
                        <div class="product-item hover-trigger">
                            <div class="product-img">
                                <a href="shop-single.html">
                                    <img src="/assets/img/pupuk/{{ $item->gambar }}" alt="{{ $item->nama }}">
                                </a>
                                <div class="hover-overlay">
                                    <div class="product-details valign">
                                        <span class="category">
                                            <a href="#"></a>
                                        </span>
                                        <h3 class="product-title">
                                            <a href="/shop/{{ $item->slug }}">{{ $item->nama }}</a>
                                        </h3>
                                        <span class="price">
                                            <ins>
                                                <span class="amount">@rupiah($item->harga)</span>
                                            </ins>
                                        </span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div> <!-- end row -->
        </div>
    </section> <!-- end trendy products -->

    <!-- Trendy Products -->
    <section class="section-wrap-sm new-arrivals pb-50">
        <div class="container">

            <div class="row heading-row">
                <div class="col-md-12 text-center">
                    <h2 class="heading bottom-line">
                        Tanaman
                    </h2>
                </div>
            </div>

            <div class="row items-grid">

                @foreach ($tanaman as $item)
                    <div class="col-md-3 col-xs-6">
                        <div class="product-item hover-trigger">
                            <div class="product-img">
                                <a href="shop-single.html">
                                    <img src="/assets/img/tanaman/{{ $item->gambar }}" alt="{{ $item->nama }}">
                                </a>
                                <div class="hover-overlay">
                                    <div class="product-details valign">
                                        <span class="category">
                                            <a href="#"></a>
                                        </span>
                                        <h3 class="product-title">
                                            <a href="/tanaman/{{ $item->slug }}">{{ $item->nama }}</a>
                                        </h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div> <!-- end row -->
        </div>
    </section> <!-- end trendy products -->
    </section> <!-- end testimonials -->
@endsection
