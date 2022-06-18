@extends('layouts.master')
@section('title') Edit Kendaraan @endsection
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