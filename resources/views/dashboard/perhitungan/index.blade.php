@extends('dashboard.layouts.app')
@section('container')
    <div class="container-fluid py-4 px-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 mb-md-0 mb-4">
                <div class="card shadow-lg border">
                    <div class="card-header text-bg-dark border-bottom pb-0">
                        <h6 class="font-weight-semibold text-white text-lg mb-0">Pilih Usia Tanam </h6>
                        <p class="text-sm"></p>
                    </div>
                    <div class="card-body py-3">
                        <form action="/dashboard/hasil" method="GET">
                            @csrf
                            <div class="form-group">
                                <label for="usia_id">Usia Tanam</label>
                                <select name="usia_id" id="usia_id" class="form-select">
                                    @foreach ($usias as $usia)
                                        @if (old('usia_id') == $usia->id)
                                            <option value="{{ $usia->id }}" selected>{{ $usia->nama }}
                                            </option>
                                        @else
                                            <option value="{{ $usia->id }}">{{ $usia->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" name="cetak" id="cetak" class="btn btn-dark w-100">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
