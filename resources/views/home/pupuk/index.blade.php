@extends('home.layouts.main')

@section('container')
    <!-- Page Title -->
    <section class="page-title text-center bg-light">
        <div class="container relative clearfix">
            <div class="title-holder">
                <div class="title-text">
                    <h1 class="uppercase">Pupuk</h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li class="active">
                            Pupuk
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
                    <a class="grid grid-active" id="grid"></a>
                    <a class="list" id="list"></a>
                </div>

            </div>
            <div class="row">
                <div class="col-md-9 catalogue-col right mb-50">
                    <div class="shop-catalogue grid-view">

                        <div class="row items-grid">
                            @foreach ($pupuks as $pupuk)
                                <div class="col-md-4 col-xs-6 product product-grid">
                                    <div class="product-item clearfix">
                                        <div class="product-img hover-trigger">
                                            <a href="/pupuk/{{ $pupuk->slug }}">
                                                <img src="/assets/img/pupuk/{{ $pupuk->gambar }}" alt="{{ $pupuk->nama }}">
                                            </a>
                                        </div>

                                        <div class="product-details">
                                            <h3 class="product-title">
                                                <a href="/shop/{{ $pupuk->slug }}">{{ $pupuk->nama }}</a>
                                            </h3>
                                        </div>

                                        <span class="price">
                                            <ins>
                                                <span class="amount">@rupiah($pupuk->harga)</span>
                                            </ins>
                                        </span>

                                        <div class="product-description">
                                            <h3 class="product-title">
                                                <a href="/pupuk/{{ $pupuk->slug }}">{{ $pupuk->nama }}</a>
                                            </h3>
                                            <div class="clear"></div>
                                            <p>{{ $pupuk->deskripsi }}</p>
                                            <span class="price">
                                                <ins>
                                                    <span class="amount">@rupiah($pupuk->harga)</span>
                                                </ins>
                                            </span>
                                        </div>

                                    </div>
                                </div> <!-- end product -->
                            @endforeach

                        </div> <!-- end row -->
                    </div> <!-- end grid mode -->

                    <!-- Pagination -->
                    <div class="pagination-wrap clearfix">
                        <p class="result-count">Showing: 12 of 80 results</p>
                        <nav class="pagination right clearfix">
                            <a href="#"><i class="fa fa-angle-left"></i></a>
                            <span class="page-numbers current">1</span>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </nav>
                    </div>

                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section> <!-- end catalog -->
@endsection
