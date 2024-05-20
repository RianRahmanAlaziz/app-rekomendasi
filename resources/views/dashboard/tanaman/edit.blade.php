@foreach ($tanamans as $tanaman)
    <div class="modal fade" id="modal-tanaman-edit-{{ $tanaman->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <main class="form-signin w-100 m-auto">
                        <h1 class="h3 mb-3 fw-normal text-center">Edit Data Tanaman</h1>
                        <form action="/dashboard/data-tanaman/{{ $tanaman->id }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama Tanaman</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    name="nama" id="nama" required autofocus
                                    value="{{ old('nama', $tanaman->nama) }}">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="kebutuhan">Kebutuhan Tanaman</label>
                                <input type="text" class="form-control @error('kebutuhan') is-invalid @enderror"
                                    name="kebutuhan" id="kebutuhan" required autofocus
                                    value="{{ old('kebutuhan', $tanaman->kebutuhan) }}">
                                @error('kebutuhan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="deskripsi" id="" cols="5" rows="5"
                                    class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi', $tanaman->deskripsi) }}</textarea>
                                @error('deskripsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <input type="file" class="form-control  @error('gambar') is-invalid @enderror"
                                    name="gambar" id="gambar">
                                @error('gambar')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button class="w-100 btn btn-lg btn-primary mt-5 dftr" type="submit">Simpan</button>
                        </form>

                    </main>
                </div>
            </div>

        </div>
    </div>
    </div>
@endforeach
