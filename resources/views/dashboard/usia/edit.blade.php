@foreach ($usia as $usia)
    <!-- Modal -->
    <div class="modal fade" id="editpegawai-{{ $usia->id }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Data Usia Tanam</h5>
                </div>
                <form action="/dashboard/data-usia/{{ $usia->id }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <main class="form-signin w-100 m-auto">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama">Usia Tanam</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                            name="nama" id="nama1" required autofocus
                                            value="{{ old('nama', $usia->nama) }}">
                                        @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="slug" id="slug1"
                                    value="{{ old('slug', $usia->slug) }}">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pupuk_id">Pupuk</label>
                                        <select class="form-select" name="pupuk_id">
                                            <option disabled selected>Pilih Pupuk</option>
                                            @foreach ($pupuk as $pupuk)
                                                @if (old('pupuk_id', $usia->pupuk_id) == $pupuk->id)
                                                    <option value="{{ $pupuk->id }}" selected>{{ $pupuk->nama }}
                                                    </option>
                                                @else
                                                    <option value="{{ $pupuk->id }}">{{ $pupuk->nama }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" cols="5" rows="5"
                                    class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi', $usia->deskripsi) }}</textarea>
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
