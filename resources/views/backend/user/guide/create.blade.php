@extends('layouts.master')
@section('title') Tambah Guide @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Data User @endslot
@slot('title') Tambah Guide @endslot
@endcomponent

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('user.leader.store') }}" class="needs-validation" novalidate
                    enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="role" value="guide">

                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="name">Nama Lengkap</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                    name="name" placeholder="Nama Lengkap" value="{{ old('name') }}" required>

                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="username">Username</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror"
                                    id="username" name="username" placeholder="Username" value="{{ old('username') }}" required>
                                @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                    name="email" placeholder="Email" value="{{ old('email') }}" required>
                                @error('email')
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
                                <label class="form-label" for="password">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" name="password" placeholder="Password" required>
                                @error('password')
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

                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="avatar" class="form-label">Avatar</label>
                                <input class="form-control @error('avatar') is-invalid @enderror" type="file"
                                    id="avatar-1" name="avatar" onclick="uploadImg(1)" accept="image/*">
                                @error('avatar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <img id="myImg-1" class="d-none border p-1 rounded img-fluid img-thumbnail" src="#"
                                    width="120" height="120">
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a class="btn btn-secondary" href="{{ route('user.index') }}">Kembali</a>
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
    function uploadImg(id) {
        document.querySelector('#avatar-' + id).addEventListener('change', function() {
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
        const url = '/data/kota/' + provinsiValue;

        fetchData(kabupaten, url);
    }
    
    provinsi.addEventListener('change', () => {
        provinsiId = provinsi.options[provinsi.selectedIndex].value;

        const url = '/data/kota/' + provinsiId;

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

        const url = '/data/kecamatan/' + kabupatenId;

        const lastOptKecamatan = kecamatan.children;
        const lastOptDesa = desa.children;

        removeChildren(lastOptKecamatan);
        removeChildren(lastOptDesa);

        fetchData(kecamatan, url);
    });

    kecamatan.addEventListener('change', () => {
        kecamatanId = kecamatan.options[kecamatan.selectedIndex].value;

        const url = '/data/desa/' + kecamatanId;

        const lastOptDesa = desa.children;

        removeChildren(lastOptDesa);

        fetchData(desa, url);
    });
</script>
@endsection