@extends('dashboard.layouts.main')
@section('container')
    <div class="card shadow">
        <div class="card-header">
            <h4 class="card-title">
                Data Tanaman
            </h4>
        </div>

        <div class="card-body">
            @if (session()->has('success'))
                <div class="row justify-content-start ps-3">
                    <div class="col-md-5 alert alert-success alert-dismissible fade show " role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif

            <div class="d-flex justify-content-end mb-4">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-tanaman">Tambah
                    Data</button>

            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Tanaman</th>
                            <th>Kebutuhan Nutrisi</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tanamans as $tanaman)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $tanaman->nama }}</td>
                                <td>{{ $tanaman->kebutuhan }}</td>
                                <td>{{ $tanaman->deskripsi }}</td>
                                <td><img src="/assets/img/tanaman/{{ $tanaman->gambar }}" width="100" alt="">
                                </td>
                                <td>
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#modal-tanaman-edit-{{ $tanaman->id }}"><i
                                            class="bi bi-pencil-square"></i></button>
                                    <form action="/dashboard/data-tanaman/{{ $tanaman->id }}" method="post"
                                        class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger  border-0" onclick="return confirm('Yakin ?')"><i
                                                class="bi bi-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@include('dashboard.tanaman.add')
@include('dashboard.tanaman.edit')
