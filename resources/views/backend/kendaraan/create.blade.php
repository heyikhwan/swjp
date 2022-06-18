@extends('layouts.master')
@section('title') Tambah Kendaraan @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Data Kendaraan @endslot
@slot('title') Tambah Kendaraan @endslot
@endcomponent

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
<<<<<<< HEAD
                <form method="POST" action="{{ route('user.admin.store') }}" class="needs-validation" novalidate
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="name">Nama Kendaraan</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nama Kendaraan"
                                    required>
                            </div>
                            <div class="invalid-feedback">
                                Please choose a username.
=======
                <form method="POST" action="{{ route('kendaraan.store') }}" class="needs-validation">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="nama">Nama Kendaraan</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                                    placeholder="Nama Kendaraan" required>
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
                                    <option value="darat">Darat</option>
                                    <option value="laut">Laut</option>
                                    <option value="udara">Udara</option>
                                </select>
                                @error('jenis_transport')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
>>>>>>> b28d0b9891daf7a59ded67b99c95bdbd75ef0140
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
<<<<<<< HEAD
                                <label class="form-label" for="jenis">Jenis Transportasi</label>
                                <input type="text" class="form-control" id="jenis" name="jenis"
                                    placeholder="Jenis Transportasi" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="pemilik">Pemilik Kendaraan</label>
                                <input type="text" class="form-control" id="pemilik" name="pemilik" placeholder="Pemilik Kendaraan"
                                    required>
=======
                                <label class="form-label" for="pemilik">Nama Pemilik</label>
                                <input type="teks" class="form-control @error('pemilik') is-invalid @enderror" id="pemilik" name="pemilik"
                                    placeholder="Nama Pemilik Kendaraan" required>
                                @error('pemilik')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
>>>>>>> b28d0b9891daf7a59ded67b99c95bdbd75ef0140
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
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> b28d0b9891daf7a59ded67b99c95bdbd75ef0140
