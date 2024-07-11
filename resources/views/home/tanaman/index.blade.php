@extends('home.layouts.main')

@section('container')
    <!-- Page Title -->
    <section class="page-title text-center bg-light">
        <div class="container relative clearfix">
            <div class="title-holder">
                <div class="title-text">
                    <h1 class="uppercase">Tanaman</h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li class="active">
                            Tanaman
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
                            @foreach ($tanamans as $tanaman)
                                <div class="col-md-4 col-xs-6 product product-grid">
                                    <div class="product-item clearfix">
                                        <div class="product-img hover-trigger">
                                            <a href="/tanaman/{{ $tanaman->slug }}">
                                                <img src="/assets/img/tanaman/{{ $tanaman->gambar }}"
                                                    alt="{{ $tanaman->nama }}">
                                            </a>
                                        </div>
                                        <div class="product-details">
                                            <h3 class="product-title">
                                                <a href="/shop/{{ $tanaman->slug }}">{{ $tanaman->nama }}</a>
                                            </h3>
                                            <span class="category">
                                                <a href="catalogue-grid.html">{{ $tanaman->nama }}</a>
                                            </span>
                                        </div>
                                        <div class="product-description">
                                            <h3 class="product-title">
                                                <a href="/tanaman/{{ $tanaman->slug }}">{{ $tanaman->nama }}</a>
                                            </h3>

                                            <div class="clear"></div>
                                            <p>{{ $tanaman->deskripsi }}</p>

                                        </div>

                                    </div>
                                </div> <!-- end product -->
                            @endforeach
                        </div> <!-- end row -->
                    </div> <!-- end grid mode -->


                    <!-- Pagination -->
                    <div class="pagination-wrap clearfix">
                        <p class="result-count">Showing: {{ $tanamans->count() }} of {{ $tanamans->total() }} results
                        </p>
                        <nav class="pagination right clearfix">
                            {{-- Previous Page Link --}}
                            @if ($tanamans->onFirstPage())
                                <span class="page-numbers disabled"><i class="fa fa-angle-left"></i></span>
                            @else
                                <a href="{{ $tanamans->previousPageUrl() }}"><i class="fa fa-angle-left"></i></a>
                            @endif

                            {{-- Pagination Elements --}}
                            @foreach ($tanamans->links()->elements as $element)
                                {{-- "Three Dots" Separator --}}
                                @if (is_string($element))
                                    <span class="page-numbers disabled">{{ $element }}</span>
                                @endif

                                {{-- Array Of Links --}}
                                @if (is_array($element))
                                    @foreach ($element as $page => $url)
                                        @if ($page == $tanamans->currentPage())
                                            <span class="page-numbers current">{{ $page }}</span>
                                        @else
                                            <a href="{{ $url }}">{{ $page }}</a>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach

                            {{-- Next Page Link --}}
                            @if ($tanamans->hasMorePages())
                                <a href="{{ $tanamans->nextPageUrl() }}"><i class="fa fa-angle-right"></i></a>
                            @else
                                <span class="page-numbers disabled"><i class="fa fa-angle-right"></i></span>
                            @endif
                        </nav>
                    </div>


                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section> <!-- end catalog -->
@endsection
