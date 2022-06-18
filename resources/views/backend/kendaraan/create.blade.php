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
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
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
@endsection
