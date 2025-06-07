@extends('dashboard.layouts.app')
@section('container')
    <div class="container-fluid py-4 px-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 mb-md-0 mb-4">
                <div class="card shadow-lg border">
                    <div class="card-header text-bg-dark border-bottom pb-0">
                        <h6 class="font-weight-semibold text-white text-lg mb-0">Hasil</h6>
                        <p class="text-sm"></p>
                    </div>
                    <div class="card-body">
                        @forelse ($rekomendasi as $namaPupuk => $rating)
                            <p class="mb-2">
                                <strong>{{ $namaPupuk }}</strong>: Rating Prediksi {{ number_format($rating, 2) }}
                            </p>
                        @empty
                            <p class="text-muted">Belum ada rekomendasi tersedia.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
