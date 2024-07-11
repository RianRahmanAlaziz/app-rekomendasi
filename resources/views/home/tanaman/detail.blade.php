@extends('home.layouts.main')

@section('container')
    <!-- Single Product -->
    <section class="section-wrap pb-40 single-product">
        <div class="container-fluid semi-fluid">
            <div class="row">
                <div class="col-md-6 col-xs-12 product-slider mb-60">
                    <div class="flickity flickity-slider-wrap mfp-hover" id="gallery-main">
                        <div class="gallery-cell">
                            <a href="/assets/img/tanaman/{{ $tanaman->gambar }}" class="lightbox-img">
                                <img src="/assets/img/tanaman/{{ $tanaman->gambar }}" alt="" />
                                <i class="ui-zoom zoom-icon"></i>
                            </a>
                        </div>

                    </div> <!-- end gallery main -->

                    <div class="gallery-thumbs">

                        <div class="gallery-cell">
                            <img src="/assets/img/tanaman/{{ $tanaman->gambar }}" alt="" />
                        </div>
                    </div> <!-- end gallery thumbs -->

                </div> <!-- end col img slider -->

                <div class="col-md-6 col-xs-12 product-description-wrap">
                    <ol class="breadcrumb">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="/tanaman">Tanaman</a>
                        </li>
                        <li class="active">
                            Detail
                        </li>
                    </ol>
                    <h1 class="product-title">{{ $tanaman->nama }}</h1>
                    {{-- <span class="price">

                        <ins>
                            <span class="amount">@rupiah($tanaman->harga)</span>
                        </ins>
                    </span> --}}
                    <p class="short-description">{{ $tanaman->deskripsi }}</p>
                    <!-- Accordion -->
                    <div class="panel-group accordion mb-50" id="accordion">
                        <div class="panel">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                                    class="plus">Pilih Rekomendasi Pupuk Berdasarkan Usia Tanam<span>&nbsp;</span>
                                </a>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="reviews">
                                        <ul class="reviews-list">
                                            @foreach ($usias as $usia)
                                                <li>
                                                    <div class="review-body">
                                                        <div class="review-content">
                                                            <a href="/rekomendasi/{{ $usia->slug }}">
                                                                <p class="review-author">
                                                                    <strong>{{ $usia->nama }}</strong>
                                                                </p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div> <!--  end reviews -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col product description -->
            </div> <!-- end row -->

        </div> <!-- end container -->
    </section> <!-- end single product -->
@endsection
