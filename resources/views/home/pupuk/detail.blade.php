@extends('home.layouts.main')

@section('container')
    <!-- Single Product -->
    <section class="section-wrap pb-40 single-product">
        <div class="container-fluid semi-fluid">
            <div class="row">

                <div class="col-md-6 col-xs-12 product-slider mb-60">

                    <div class="flickity flickity-slider-wrap mfp-hover" id="gallery-main">

                        <div class="gallery-cell">
                            <a href="/assets/img/pupuk/{{ $pupuk->gambar }}" class="lightbox-img">
                                <img src="/assets/img/pupuk/{{ $pupuk->gambar }}" alt="" />
                                <i class="ui-zoom zoom-icon"></i>
                            </a>
                        </div>

                    </div> <!-- end gallery main -->

                    <div class="gallery-thumbs">

                        <div class="gallery-cell">
                            <img src="/assets/img/pupuk/{{ $pupuk->gambar }}" alt="" />
                        </div>
                    </div> <!-- end gallery thumbs -->

                </div> <!-- end col img slider -->

                <div class="col-md-6 col-xs-12 product-description-wrap">
                    <ol class="breadcrumb">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="/pupuk">Pupuk</a>
                        </li>
                        <li class="active">
                            Detail
                        </li>
                    </ol>
                    <h1 class="product-title">{{ $pupuk->nama }}</h1>
                    <span class="price">
                        <ins>
                            <span class="amount">@rupiah($pupuk->harga)</span>
                        </ins>
                    </span>
                    <p class="short-description">{{ $pupuk->deskripsi }}</p>

                    <!-- Accordion -->
                    {{-- <div class="panel-group accordion mb-50" id="accordion">
                        <div class="panel">
                            <div class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                                    class="plus">Reviews<span>&nbsp;</span>
                                </a>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="reviews">
                                        <ul class="reviews-list">
                                            <li>
                                                <div class="review-body">
                                                    <div class="review-content">
                                                        <p class="review-author"><strong>Alexander Samokhin</strong> - May
                                                            6, 2014 at 12:48 pm</p>
                                                        <div class="rating">
                                                            <a href="#"></a>
                                                        </div>
                                                        <p>This template is so awesome. I didn’t expect so many features
                                                            inside. E-commerce pages are very useful, you can launch your
                                                            online store in few seconds. I will rate 5 stars.</p>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="review-body">
                                                    <div class="review-content">
                                                        <p class="review-author"><strong>Christopher Robins</strong> - May
                                                            6, 2014 at 12:48 pm</p>
                                                        <div class="rating">
                                                            <a href="#"></a>
                                                        </div>
                                                        <p>This template is so awesome. I didn’t expect so many features
                                                            inside. E-commerce pages are very useful, you can launch your
                                                            online store in few seconds. I will rate 5 stars.</p>
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div> <!--  end reviews -->
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div> <!-- end col product description -->
            </div> <!-- end row -->

        </div> <!-- end container -->
    </section> <!-- end single product -->
@endsection
