@extends('layouts.master')
@section('title') Tambah Wilayah @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Data Wilayah @endslot
@slot('title') Tambah Wilayah @endslot
@endcomponent

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('wilayah.store') }}" class="needs-validation" novalidate>
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="name">Nama Wilayah</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nama Wilayah"
                                    required>
                            </div>
                            @error('name')
                            <div class="invalid-feedback">
                                Masukkan nama wilayah.
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="level">Level</label>
                                <input type="text" class="form-control" id="level" name="level"
                                    placeholder="Level" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="induk">Induk Wilayah</label>
                                <input type="text" class="form-control" id="induk" name="induk" placeholder="Induk Wilayah"
                                    required>
                            </div>
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
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
