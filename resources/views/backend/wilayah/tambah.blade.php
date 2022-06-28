@extends('layouts.master')
@section('title') Tambah Anak Wilayah @endsection
@section('css')
<link href="{{ URL::asset('assets/libs/choices.js/choices.js.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/libs/@simonwep/@simonwep.min.css') }}" rel="stylesheet">
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Data Wilayah @endslot
@slot('title') Tambah Anak Wilayah @endslot
@endcomponent

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="#" class="needs-validation" novalidate>
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="induk">Induk Wilayah</label>
                                <input type="text" class="form-control" id="induk" name="induk" placeholder="Induk Wilayah" value="{{ old('induk') ?? $wilayah->nama }}"
                                    required disabled>
                            </div>
                        </div>
                    </div>

                   
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="mb-3">
                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Level</label>
                                <select class="form-control" data-trigger name="choices-single-default"
                                    id="choices-single-default"
                                    placeholder="This is a search placeholder" disabled>
                                    <option value="2" {{ old('level') == '1' || $wilayah->level == '1' ? 'selected' : '' }}>Kabupaten/Kota</option>
                                    <option value="3" {{ old('level') == '2' || $wilayah->level == '2' ? 'selected' : '' }}>Kecamatan</option>
                                    <option value="4" {{ old('level') == '3' || $wilayah->level == '3' ? 'selected' : '' }}>Desa</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="name">Nama Anak Wilayah</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nama Wilayah" value="{{ old('name')}}"
                                    required>
                            </div>
                            @error('name')
                            <div class="invalid-feedback">
                                Masukkan nama wilayah.
                            </div>
                            @enderror
                        </div>
                    </div>
                   

                    <div class="d-flex justify-content-end gap-2">
                        <a class="btn btn-secondary" href="{{ route('wilayah.index') }}">Kembali</a>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ URL::asset('assets/libs/choices.js/choices.js.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/form-advanced.init.js') }}"></script>
<script src="{{ URL::asset('assets/libs/@simonwep/@simonwep.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
