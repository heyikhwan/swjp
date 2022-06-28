@extends('layouts.master')
@section('title') Tambah Hotel @endsection
@section('css')
<link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Data Hotel @endslot
@slot('title') Tambah Hotel @endslot
@endcomponent

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('hotel.store') }}" class="needs-validation"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="name">Nama Hotel</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                    name="name" placeholder="Nama Hotel" value="{{ old('name') }}" required>
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-3">
                            <label for="bintang">Bintang</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend"><i
                                            class="bx bxs-star font-size-20 text-warning"></i></span>
                                </div>
                                <input type="text" class="form-control @error('bintang') is-invalid @enderror"
                                    id="bintang" placeholder="Bintang" aria-describedby="inputGroupPrepend"
                                    name="bintang" value="{{ old('bintang') }}" required>
                                @error('bintang')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div>
                        <label>Wilayah</label>
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="mb-3">
                                    <label for="provinsi" class="form-label font-size-13 text-muted">Provinsi</label>
                                    <select class="form-select @error('provinsi') is-invalid @enderror" name="provinsi" id="provinsi"
                                        placeholder="Provinsi" required>
                                        <option value="">Pilih Provinsi</option>
                                        @foreach ($provinsi as $item)
                                        <option value="{{ $item->id }}" {{ old('provinsi') == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                    @error('provinsi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="mb-3">
                                    <label for="kabupaten" class="form-label font-size-13 text-muted">Kabupaten/Kota</label>
                                    <select class="form-select @error('kabupaten') is-invalid @enderror" name="kabupaten" id="kabupaten"
                                        placeholder="Kab/Kota" required>
                                        <option value="">Pilih Kabupaten/Kota</option>
                                    </select>
                                    @error('kabupaten')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="mb-3">
                                    <label for="kecamatan" class="form-label font-size-13 text-muted">Kecamatan</label>
                                    <select class="form-select @error('kecamatan') is-invalid @enderror" name="kecamatan" id="kecamatan"
                                        placeholder="Kecamatan" required>
                                        <option value="">Pilih Kecamatan</option>
                                    </select>
                                    @error('kecamatan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="mb-3">
                                    <label for="desa" class="form-label font-size-13 text-muted">Desa</label>
                                    <select class="form-select @error('desa') is-invalid @enderror" name="desa" id="desa"
                                        placeholder="Desa" required>
                                        <option value="">Pilih Desa</option>
                                    </select>
                                    @error('desa')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="image">Gambar</label>
                                    <input type="file" id="image" name="image[]"
                                        accept=".svg, image/png,image/jpg,image/jpeg" multiple />

                                    <small class="form-text text-muted">only allowed
                                        jpg/jpeg/png/svg file and smaller than 2MB</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a class="btn btn-secondary" href="{{ route('hotel.index') }}">Kembali</a>
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

<script>
    const provinsi = document.querySelector('#provinsi');
    const kabupaten = document.querySelector('#kabupaten');
    const kecamatan = document.querySelector('#kecamatan');
    const desa = document.querySelector('#desa');

    let provinsiId;
    let kabupatenId;
    let kecamatanId;

    const provinsiValue = provinsi.options[provinsi.selectedIndex].value;
    const kabupatenValue = kabupaten.options[kabupaten.selectedIndex].value;
    const kecamatanValue = kecamatan.options[kecamatan.selectedIndex].value;

    const fetchData = (level, url) => {
        let fetchRes = fetch(url);
        fetchRes.then(res =>
        res.json()).then(d => {
            d.forEach(e => {
                var option = document.createElement("option");
                option.text = e.nama;
                option.value = e.id;
                level.add(option);
            });
        });
    }

    const removeChildren = (child) => {
        for (let i = child.length - 1; i >= 1; --i) {
            child[i].remove();
        }
    }

    if (provinsiValue) {
        const url = '/admin/data/kota/' + provinsiValue;

        fetchData(kabupaten, url);
    }
    
    provinsi.addEventListener('change', () => {
        provinsiId = provinsi.options[provinsi.selectedIndex].value;

        const url = '/admin/data/kota/' + provinsiId;

        const lastOptKabupaten = kabupaten.children;
        const lastOptKecamatan = kecamatan.children;
        const lastOptDesa = desa.children;

        removeChildren(lastOptKabupaten);
        removeChildren(lastOptKecamatan);
        removeChildren(lastOptDesa);

        fetchData(kabupaten, url);
    });

    kabupaten.addEventListener('change', () => {
        kabupatenId = kabupaten.options[kabupaten.selectedIndex].value;

        const url = '/admin/data/kecamatan/' + kabupatenId;

        const lastOptKecamatan = kecamatan.children;
        const lastOptDesa = desa.children;

        removeChildren(lastOptKecamatan);
        removeChildren(lastOptDesa);

        fetchData(kecamatan, url);
    });

    kecamatan.addEventListener('change', () => {
        kecamatanId = kecamatan.options[kecamatan.selectedIndex].value;

        const url = '/admin/data/desa/' + kecamatanId;

        const lastOptDesa = desa.children;

        removeChildren(lastOptDesa);

        fetchData(desa, url);
    });
</script>

<script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js">
</script>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>

<script>
    function uploadImg(id) {
        document.querySelector('#foto-' + id).addEventListener('change', function() {
            if (this.files && this.files[0]) {
                const img = document.querySelector('#myImg-' + id);
                img.onload = () => {
                    URL.revokeObjectURL(img.src);
                }
                img.classList.remove('d-none');
                img.src = URL.createObjectURL(this.files[0]);
                const label = document.querySelector('#label-' + id);
                const fileName = this.files[0].name;
                label.innerText = fileName;
                console.log(this.files[0].name);
            }
        });
    }
</script>

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
@endsection