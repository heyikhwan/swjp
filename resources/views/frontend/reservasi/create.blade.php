@extends('frontend.layouts.master')
@section('content')
<section id="reservasi" class="banner">
<div class="container vh-100">
<div class="row">
    <div class="col">
        <div class="card w-75 mx-auto">
            <div class="card-header">
                <h5 class="p-2 ms-1 text-center">Custom Paket</h5>
            </div>
                <div class="card-body">
                <form method="POST" action="#" class="needs-validation p-3">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="" class="">Level</label>
                                <select class="form-control js-example-basic-multiple" multiple="multiple"
                                    placeholder="This is a search placeholder">
                                    <option value="">Pilih Level</option>
                                    <option value="1">Provinsi</option>
                                    <option value="2">Kabupaten/Kota</option>
                                    <option value="3">Kecamatan</option>
                                    <option value="4">Desa</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="harga">Pilih Kendaraan</label>
                                <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" placeholder="Harga Paket" required>
                                @error('harga')
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
                                <label class="form-label" for="body">Fitur</label>
                                <input class="form-control @error('body') is-invalid @enderror" id="body" name="body" type="text" placeholder="Masukkan Fitur" required />
                                @error('body')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a class="btn btn-secondary" href="{{ route('home') }}">Kembali</a>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</section>
@endsection

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>
@endpush
