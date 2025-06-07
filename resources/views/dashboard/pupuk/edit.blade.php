@foreach ($pupuks as $pupuk)
    <!-- Modal -->
    <div class="modal fade" id="editpegawai-{{ $pupuk->id }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Data Pupuk</h5>
                </div>
                <form action="/dashboard/data-pupuk/{{ $pupuk->id }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <main class="form-signin w-100 m-auto">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama Pupuk</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    name="nama" id="nama1" required autofocus
                                    value="{{ old('nama', $pupuk->nama) }}">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <input type="text" class="form-control" name="slug" id="slug1" hidden
                                value="{{ old('slug', $pupuk->slug) }}">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gambar">Gambar</label>
                                        <input type="file"
                                            class="form-control  @error('gambar') is-invalid @enderror" name="gambar"
                                            id="gambar">
                                        @error('gambar')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="usia_id">Usia</label>
                                        <select class="form-select" name="usia_id">
                                            <option disabled selected>Pilih Usia</option>
                                            @foreach ($usias as $usia)
                                                @if (old('usia_id', $pupuk->usia_id) == $usia->id)
                                                    <option value="{{ $usia->id }}" selected>{{ $usia->nama }}
                                                    </option>
                                                @else
                                                    <option value="{{ $usia->id }}">{{ $usia->nama }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <input type="number" class="form-control @error('harga') is-invalid @enderror"
                                            name="harga" id="harga" required autofocus
                                            value="{{ old('harga', $pupuk->harga) }}">
                                        @error('harga')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="rating">Rating</label>
                                        <input type="number" class="form-control @error('rating') is-invalid @enderror"
                                            name="rating" id="rating" required autofocus min="1"
                                            max="5" value="{{ old('rating', $pupuk->rating) }}">
                                        @error('rating')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" cols="5" rows="5"
                                    class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi', $pupuk->deskripsi) }}</textarea>
                                @error('deskripsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </main>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-dark">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
<script>
    const nama1 = document.querySelector('#nama1');
    const slug1 = document.querySelector('#slug1');

    nama1.addEventListener('change', function() {
        fetch('/dashboard/data-pupuk/checkSlug?nama=' + nama1.value)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok ' + response.statusText);
                }
                return response.json();
            })
            .then(data => {
                if (data && data.slug) {
                    slug1.value = data.slug;
                } else {
                    throw new Error('Invalid JSON response');
                }
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
            });
    });
</script>
