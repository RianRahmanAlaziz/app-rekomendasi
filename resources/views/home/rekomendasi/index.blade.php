@extends('home.layouts.main')

@section('container')
    <!-- Page Title -->
    <section class="page-title text-center bg-light">
        <div class="container relative clearfix">
            <div class="title-holder">
                <div class="title-text">
                    <h1 class="uppercase">Hasil Rekomendasi</h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li class="active">
                            Hasil Rekomendasi
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Catalogue -->
    <section class="section-wrap pt-80 pb-40 catalogue">
        <div class="container relative">

            <!-- Filter -->
            <div class="shop-filter">
                <div class="view-mode hidden-xs">
                    <span>View:</span>
                    <a class="grid" id="grid"></a>
                    <a class="list list-active" id="list"></a>
                </div>

            </div>
            <div class="row">
                <div class="col-md-9 catalogue-col right mb-50">
                    <div class="shop-catalogue list-view">

                        <div class="row items-grid">
                            <div class="col-md-4 col-xs-6 product product-list">
                                <div class="product-item clearfix">
                                    <div class="product-img hover-trigger">
                                        <a href="/pupuk/{{ $usia->pupuk->slug }}">
                                            <img src="/assets/img/pupuk/{{ $usia->pupuk->gambar }}"
                                                alt="{{ $usia->pupuk->nama }}">
                                        </a>
                                    </div>
                                    <div class="product-details">
                                        <h3 class="product-title">
                                            <a href="/shop/{{ $usia->pupuk->slug }}">{{ $usia->pupuk->nama }}</a>
                                        </h3>
                                        <span class="category">
                                            <a href="catalogue-grid.html">{{ $usia->pupuk->nama }}</a>
                                        </span>
                                    </div>

                                    <span class="price">
                                        <ins>
                                            <span class="amount">@rupiah($usia->pupuk->harga)</span>
                                        </ins>
                                    </span>

                                    <div class="product-description">
                                        <h3 class="product-title">
                                            <a href="/pupuk/{{ $usia->pupuk->slug }}">{{ $usia->pupuk->nama }}</a>
                                        </h3>
                                        <span class="price">

                                            <ins>
                                                <span class="amount">@rupiah($usia->pupuk->harga)</span>
                                            </ins>
                                        </span>
                                        <div class="clear"></div>
                                        <p>{{ $usia->deskripsi }}</p>

                                    </div>
                                </div>
                            </div> <!-- end product -->

                        </div> <!-- end row -->
                    </div> <!-- end grid mode -->
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section> <!-- end catalog -->
@endsection
