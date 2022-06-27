@extends('layouts.master')
@section('title') Edit Paket Wisata @endsection
@section('css')
<link href="{{ URL::asset('assets/libs/choices.js/choices.js.min.css') }}" rel="stylesheet">
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Paket Wisata @endslot
@slot('title') Edit Paket Wisata @endslot
@endcomponent

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('paket-wisata.update', $paket_wisata->id) }}" class="needs-validation">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="nama">Nama Paket</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                                    name="nama" placeholder="Nama Paket" value="{{ old('nama') ?? $paket_wisata->nama }}" required>
                                @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="harga">Harga</label>
                                <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" placeholder="Harga Paket" value="{{ $paket_wisata->harga }}" required>
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
                                <input class="form-control @error('body') is-invalid @enderror" id="body" name="body" type="text" placeholder="Masukkan Fitur" value="{{ old('body') ?? $paket_wisata->body }}" required />
                                @error('body')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    @php
                        if($paket_wisata->is_popular == 1) {
                            $is_popular = 'on';
                        } else {
                            $is_popular = 'off';
                        }
                    @endphp

                    <div class="row">
                        <div class="col">
                            <label>Paket Populer</label><br>
                            <input type="checkbox" id="is_popular" switch="none"  name="is_popular" {{old('is_popular') || $is_popular == 'on' ? 'checked' : ''}} />
                            <label for="is_popular" data-on-label="On" data-off-label="Off"></label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a class="btn btn-secondary" href="{{ route('paket-wisata.index') }}">Kembali</a>
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
<script src="{{ URL::asset('assets/libs/imask/imask.min.js') }}"></script>
<script>
    var textRemove = new Choices(document.getElementById('body'), {
    delimiter: ',',
    editItems: true,
    maxItemCount: 5,
    removeItemButton: true
  });

  var currencyMask = IMask(document.getElementById('harga'), {
    mask: 'Rp num',
    blocks: {
      num: {
        // nested masks are available!
        mask: Number,
        thousandsSeparator: '.'
      }
    }
  });
</script>
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection