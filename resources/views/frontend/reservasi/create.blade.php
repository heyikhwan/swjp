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
                            <form method="post" action="{{ route('reservasi.store') }}">
                                @csrf
                                <div class="row mb-3 mx-1">
                                    <div class="col-6"><label for="tgl_mulai">Tanggal Mulai</label>
                                        <input type="date" name="tgl_mulai" class="form-control"/>

                                    </div>
                                    <div class="col-6"><label for="tgl_akhir">Tanggal Akhir</label>
                                        <input type="date" name="tgl_akhir" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group mx-3">
                                    <div class="row">
                                        <div class="col"><label for="Leader">Pilih Leader</label></div>
                                    </div>
                                    <div class="input-group">
                                        <select class="form-select mb-3"
                                        name="leader" id="leader"
                                        placeholder="This is a placeholder" style="height: 50px;">
                                        @foreach ($leader as $data )
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group mx-3">
                                    <div class="row mt-3">
                                        <div class="col"><label for="Kendaraan">Pilih Guide</label></div>
                                    </div>
                                    <div class="input-group">
                                        <select class="form-select mb-3"
                                        name="guide" id=""
                                        placeholder="This is a placeholder" style="height: 50px;">
                                        @foreach ($guide as $data )
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group mx-3">
                                    <div class="row mt-3">
                                        <div class="col"><label for="Kendaraan">Nama Paket</label></div>
                                    </div>
                                    <div class="input-group">
                                       <input type="text" name="name" class="form-control" placeholder="Isi nama paket">
                                    </div>
                                </div>
                                <div class="form-group mx-3">
                                    <div class="row mt-3">
                                        <div class="col"><label for="Kendaraan">Jenis Perjalanan</label></div>
                                    </div>
                                    <div class="input-group">
                                        <select class="form-select mb-3"
                                        name="jenis" id=""
                                        placeholder="This is a placeholder" style="height: 50px;">
                                        <option value="Darat">Darat</option>
                                        <option value="Laut">Laut</option>
                                        <option value="Udara">Udara</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group mx-3">
                                    <div class="row mt-3">
                                        <div class="col"><label for="Kendaraan">Keberangkatan</label></div>
                                    </div>
                                    <div class="input-group">
                                       <input type="text" name="keberangkatan" class="form-control" placeholder="Isi keberangkatan">
                                    </div>
                                </div>
                                <div class="row mt-5 float-end">
                                    <div class="col">
                                        <button type="submit" name="submit" class="btn btn-primary btn-sm me-2" style="background-color: rgb(98, 95, 110);"">Batal</button>
                                        <button type="submit" name="submit" class="btn btn-primary btn-sm">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    {{-- </div> --}}
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
                    var fieldHTML = '<div class="form-group hotel">' + $(".hotelCopy").html() + '</div>';
                    $('body').find('.hotel:last').after(fieldHTML);
                } else {
                    alert('Maximum ' + maxGroup + ' groups are allowed.');
                }
            });

            $(".addMoreKendaraan").click(function() {
                if ($('body').find('.kendaraan').length < maxGroup) {
                    var fieldHTML = '<div class="form-group kendaraan">' + $(".kendaraanCopy").html() +
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
