@extends('layouts.master')
@section('title') Edit Kendaraan @endsection
@section('css')
<link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Data Kendaraan @endslot
@slot('title') Edit Kendaraan @endslot
@endcomponent

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('kendaraan.update', $kendaraan->id) }}" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="nama">Nama Kendaraan</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                                    placeholder="Nama Kendaraan" value="{{ old('nama') ?? $kendaraan->nama }}" required>
                                @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Jenis Transportasi</label>
                                <select class="form-select @error('jenis_transport') is-invalid @enderror" name="jenis_transport" required>
                                    <option value="darat" {{ old('jenis_transport') == 'darat' || $kendaraan->jenis_transport == 'darat' ? 'selected' : '' }}>Darat</option>
                                    <option value="laut" {{ old('jenis_transport') == 'laut' || $kendaraan->jenis_transport == 'laut' ? 'selected' : '' }}>Laut</option>
                                    <option value="udara" {{ old('jenis_transport') == 'udara' || $kendaraan->jenis_transport == 'udara' ? 'selected' : '' }}>Udara</option>
                                </select>
                                @error('jenis_transport')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="pemilik">Nama Pemilik</label>
                                <input type="teks" class="form-control @error('pemilik') is-invalid @enderror" id="pemilik" name="pemilik"
                                    placeholder="Nama Pemilik Kendaraan" value="{{ old('pemilik') ?? $kendaraan->pemilik }}" required>
                                @error('pemilik')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="image">Gambar</label>
            
                                    <div class="mb-3">
                                        <div class="row d-flex align-items-end">
                                            @foreach ($kendaraan->galleries as $gallery)
                                            <div class="col-lg-2 my-1" id="image-container-{{ $gallery->id }}">
                                                <img class="{{ $gallery->image ? '' : 'd-none' }} border p-1 rounded img-fluid"
                                                    src="{{ $gallery->image ? url('storage/kendaraan/', $gallery->image) : '#' }}" width="200">
            
                                                @if ($gallery->image)
                                                <div class="text-center">
                                                    <a href="javascript:void(0)" class="btn btn-link btn-sm text-danger"
                                                        onclick="event.preventDefault();imgDestroy({{ $gallery->id }}, 'image');">[Hapus]</a>
                                                </div>
                                                @endif
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
            
                                    <input type="file" id="image" name="image[]" accept=".svg, image/png,image/jpg,image/jpeg"
                                        multiple />
            
                                    <small class="form-text text-muted">recommended size is 800 x 600px or 800 x 800px. only allowed
                                        jpg/jpeg/png/svg file and smaller than 2MB</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a class="btn btn-secondary" href="{{ route('kendaraan.index') }}">Kembali</a>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>

<script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js">
</script>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
<script>
    FilePond.registerPlugin(
        FilePondPluginFileValidateType,
        FilePondPluginImagePreview,
        FilePondPluginFileValidateSize
    );
    
    FilePond.setOptions({
        server: {
            url: '{{ route("upload") }}',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        },
        allowMultiple: true,
    });
    const inputElement = document.querySelector('input[id="image"]');
    const pond = FilePond.create(inputElement, {
        maxFileSize: '2MB',
    });
</script>
<script>
    function imgDestroy(id, type) {
        if(confirm('Anda yakin ingin menghapus?'))
        {
            $.ajax({
                url: '/kendaraan/img-delete/' + id,
                method: 'put',
                data: {
                    _token: '{{ csrf_token() }}',
                },
                success: function(data) {
                    document.querySelector('#image-container-' + id).remove();
                }
            })
        }
    }
</script>
@endsection