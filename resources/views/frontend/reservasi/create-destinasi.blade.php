@extends('frontend.layouts.master')
@section('content')
    <section id="reservasi" class="banner">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div style="height: 600px; overflow-y: scroll;" class="card w-75 mx-auto">
                        <div class="card-header">
                            <h5 class="p-2 ms-1 text-center">Custom Paket</h5>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('reservasi.storeDestinasi') }}">
                                @csrf
                                {{-- <div class="form-group destinasi">
                                    <div class="row">
                                        <div class="col"><label for="Hotel">Destinasi</label></div>
                                    </div>
                                    <div class="input-group">
                                        <select class="form-select mb-3 me-3"
                                        name="destinasi[]" id="destinasi"
                                        placeholder="This is a placeholder" style="height: 50px;">
                                        @foreach ($hotel as $data )
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                        <div class="input-group-addon me-3">
                                            <button type="button" class="btn btn-success addMoreDestinasi"  ><i
                                                    class="fas fa-plus"></i></button>
                                        </div>

                                    </div>
                                </div> --}}
                                <div class="form-group hotel mx-3">
                                    <div class="row">
                                        <div class="col"><label for="Hotel">Hotel</label></div>
                                    </div>
                                    <div class="input-group">
                                        <select class="form-select mb-3 me-3 @error('hotel') is-invalid @enderror"
                                        name="hotel[]" id="hotel"
                                        placeholder="This is a placeholder" style="height: 50px;" value="{{ old('hotel') }}">
                                        @foreach ($hotel as $data )
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                        <div class="input-group-addon me-3">
                                            <button type="button" class="btn btn-success addMoreHotel"  ><i
                                                    class="fas fa-plus"></i></button>
                                        </div>
                                        @error('hotel')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                    </div>
                                </div>
                                <div class="form-group kendaraan mx-3">
                                    <div class="row mt-3">
                                        <div class="col"><label for="Kendaraan">Kendaraan</label></div>
                                    </div>
                                    <div class="input-group">
                                        <select class="form-select mb-3 me-3 @error('kendaraan') is-invalid @enderror"
                                        name="kendaraan[]" id=""
                                        placeholder="This is a placeholder" style="height: 50px;" value="{{ old('kendaraan') }}">
                                        @foreach ($kendaraan as $data )
                                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                        @endforeach
                                    </select>
                                        <div class="input-group-addon me-3">
                                            <button type="button" class="btn btn-success addMoreKendaraan"><i
                                                    class="fas fa-plus"></i></button>
                                        </div>
                                        @error('kendaraan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                    </div>
                                </div>
                                <div class="row mt-5 float-end mx-3">
                                    <div class="col">
                                        <button type="submit" name="submit" class="btn btn-primary btn-sm me-2" style="background-color: rgb(98, 95, 110);"">Batal</button>
                                        <button type="submit" name="submit" class="btn btn-primary btn-sm">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <div class="form-group destinasiCopy" style="display: none;">
                                <div class="input-group">
                                    <select class="form-select mb-3 me-3"
                                        name="destinasi[]" id="destinasi"
                                        placeholder="This is a placeholder" style="height: 50px;" value="{{ old('destinasi') }}">
                                        @foreach ($hotel as $data )
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="input-group-addon">
                                        <a href="javascript:void(0)" class="btn remove me-3" style="background-color: rgb(245, 0, 0);"><i
                                                class="fas fa-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group hotelCopy" style="display: none;">
                                <div class="input-group">
                                    <select class="form-select mb-3 me-3 @error('hotel') is-invalid @enderror"
                                        name="hotel[]" id="hotel"
                                        placeholder="This is a placeholder" style="height: 50px;" value="{{ old('hotel') }}">
                                        @foreach ($hotel as $data )
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="input-group-addon">
                                        <a href="javascript:void(0)" class="btn remove me-3" style="background-color: rgb(245, 0, 0);"><i
                                                class="fas fa-trash"></i></a>
                                    </div>
                                    @error('hotel')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group kendaraanCopy" style="display: none;">
                                <div class="input-group">
                                    <select class="form-select mb-3 me-3 @error('kendaraan') is-invalid @enderror"
                                        name="kendaraan[]" id=""
                                        placeholder="This is a placeholder" style="height: 50px;" value="{{ old('kendaraan') }}">
                                        @foreach ($kendaraan as $data )
                                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                        @endforeach
                                    </select>
                                    <div class="input-group-addon">
                                        <a href="javascript:void(0)" class="btn btn-danger remove me-3" style="background-color: rgb(245, 0, 0);"><i
                                                class="fas fa-trash"></i></a>
                                    </div>
                                    @error('kendaraan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@push('styles')
<link rel="stylesheet" href="{{asset('frontend/css/reservasi.css')}}">

@endpush
@push('scripts')
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            // membatasi jumlah inputan
            var maxGroup =  3;

            //melakukan proses multiple input
            $(".addMoreHotel").click(function() {
                if ($('body').find('.hotel').length < maxGroup) {
                    var fieldHTML = '<div class="form-group hotel mx-3">' + $(".hotelCopy").html() + '</div>';
                    $('body').find('.hotel:last').after(fieldHTML);
                } else {
                    alert('Maximum ' + maxGroup + ' groups are allowed.');
                }
            });

            $(".addMoreKendaraan").click(function() {
                if ($('body').find('.kendaraan').length < maxGroup) {
                    var fieldHTML = '<div class="form-group kendaraan mx-3">' + $(".kendaraanCopy").html() +
                        '</div>';
                    $('body').find('.kendaraan:last').after(fieldHTML);
                } else {
                    alert('Maximum ' + maxGroup + ' groups are allowed.');
                }
            });

            //remove fields group
            $("body").on("click", ".remove", function() {
                $(this).parents(".kendaraan").remove();
            });
            //remove fields group
            $("body").on("click", ".remove", function() {
                $(this).parents(".hotel").remove();
            });
        });
    </script>


@endpush
