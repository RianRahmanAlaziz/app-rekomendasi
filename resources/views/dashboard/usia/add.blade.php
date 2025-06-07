<!-- Modal -->
<div class="modal fade" id="addkaryawan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Data Usia Tanam</h5>
            </div>
            <form action="/dashboard/data-usia" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <main class="form-signin w-100 m-auto">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Usia Tanam</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                name="nama" id="nama" required autofocus value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <input type="text" class="form-control" name="slug" id="slug"
                            value="{{ old('slug') }}" hidden>

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

<script>
    const nama = document.querySelector('#nama');
    const slug = document.querySelector('#slug');

    nama.addEventListener('change', function() {
        fetch('/dashboard/data-pupuk/checkSlug?nama=' + nama.value)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok ' + response.statusText);
                }
                return response.json();
            })
            .then(data => {
                if (data && data.slug) {
                    slug.value = data.slug;
                } else {
                    throw new Error('Invalid JSON response');
                }
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
            });
    });
</script>
