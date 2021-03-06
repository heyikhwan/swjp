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
                <form method="POST" action="{{ route('hotel.update', $hotel->id) }}" class="needs-validation"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="name">Nama Hotel</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                    name="name" placeholder="Nama Hotel" value="{{ old('name') ?? $hotel->name }}" required>
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
                                    name="bintang" value="{{ old('bintang') ?? $hotel->bintang }}" required>
                                @error('bintang')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="mb-3">
                                <label for="provinsi" class="form-label font-size-13 text-muted">Provinsi</label>
                                <select class="form-select @error('provinsi') is-invalid @enderror" name="provinsi" id="provinsi"
                                    placeholder="Provinsi" required>
                                    <option value="">Pilih Provinsi</option>
                                    @foreach ($provinsi as $item)
                                    <option value="{{ $item->id }}" {{ old('provinsi') == $item->id || $provinsiId->id == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
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
                                    @foreach ($kabupaten as $item)
                                    <option value="{{ $item->id }}" {{ old('kabupaten') == $item->id || $kabupatenId->id == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
                                    @endforeach
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
                                    @foreach ($kecamatan as $item)
                                    <option value="{{ $item->id }}" {{ old('kecamatan') == $item->id || $kecamatanId->id == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
                                    @endforeach
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
                                    @foreach ($desa as $item)
                                    <option value="{{ $item->id }}" {{ old('desa') == $item->id || $hotel->wilayah_id == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                                @error('desa')
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
                                            @foreach ($hotel->galleries as $gallery)
                                            <div class="col-lg-2 my-1" id="image-container-{{ $gallery->id }}">
                                                <img class="{{ $gallery->image ? '' : 'd-none' }} border p-1 rounded img-fluid"
                                                    src="{{ $gallery->image ? url('storage/hotel/', $gallery->image) : '#' }}" width="200">

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

<script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js">
</script>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
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
<script>
    function imgDestroy(id, type) {
        if(confirm('Anda yakin ingin menghapus?'))
        {
            $.ajax({
                url: '/admin/hotel/img-delete/' + id,
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
