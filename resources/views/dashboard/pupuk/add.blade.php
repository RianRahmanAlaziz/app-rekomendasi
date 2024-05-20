<div class="modal fade" id="modal-pupuk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <main class="form-signin w-100 m-auto">
                    <h1 class="h3 mb-3 fw-normal text-center">Tambah Data Pupuk</h1>
                    <form action="/dashboard/data-pupuk" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Pupuk</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                name="nama" id="nama" required autofocus value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="kandungan">Kandungan Nutrisi</label>
                            <input type="text" class="form-control @error('kandungan') is-invalid @enderror"
                                name="kandungan" id="kandungan" required autofocus value="{{ old('kandungan') }}">
                            @error('kandungan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" class="form-control @error('harga') is-invalid @enderror"
                                name="harga" id="harga" required autofocus value="{{ old('harga') }}">
                            @error('harga')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" id="" cols="5" rows="5"
                                class="form-control @error('deskripsi') is-invalid @enderror"></textarea>
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

                        <button class="w-100 btn btn-lg btn-primary mt-5 dftr" type="submit">Tambah</button>
                    </form>

                </main>
            </div>
        </div>

    </div>
</div>
</div>
<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })
</script>
