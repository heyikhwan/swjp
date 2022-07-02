@extends('frontend.layouts.master')
@section('content')
    <section id="reservasi" class="banner">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div style="height: 600px;" class="card w-75 mx-auto">
                        <div class="card-body">
                            <div class="container">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-12 col-lg-8 offset-lg-1 w-50 h-50 me-5 p-5">
                                        <img src="{{ asset('frontend/images/success.svg') }}" alt="" />
                                        <h5 class="text-center title mt-4">Pemesanan Berhasil!</h5>
                                        <p class="text-muted text-center mt-3">Kamu dapat melakukan pembayaran <a href="{{ route('reservasi.index') }}">di sini</a> setelah admin menyetujui pemesananmu yaa!</p>
                                            <a href="{{ route('home') }}"><- Kembali ke Home</a>
                                            <a href="{{ route('reservasi.index') }}" class="ms-5">Riwayat Pemesanan -></a>
                                    </div>
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
    <link rel="stylesheet" href="{{ asset('frontend/css/reservasi.css') }}">
