@extends('frontend.layouts.master')
@section('content')
    <section id="reservasi" class="banner">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div style="height: 600px; width: 80em; overflow-y: scroll; overflow-x: scroll;" class="card mx-auto">
                        <div class="card-header">
                            <h5 class="p-2 ms-1 text-center">Riwayat Reservasi</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-responsive overflow-auto">
                                <thead>
                                    <tr class="text-center">
                                        <th>#</th>
                                        <th>Tanggal Reservasi</th>
                                        <th>Nama Paket</th>
                                        <th>Jenis Perjalanan</th>
                                        <th>Keberangkatan</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reservasi as $data)
                                        <tr class="text-center">
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $data->created_at }}</td>
                                            <td>{{ $data->judul }}</td>
                                            <td>{{ $data->jenis_perjalanan }}</td>
                                            <td>{{ $data->keberangkatan }}</td>
                                            <td>{{ $data->status }}</td>
                                            <td>
                                                <div class="row justify-content-center">
                                                    <div class="col-6" style="width:75px">
                                                        <button type="button" data-bs-toggle="modal"
                                                            data-bs-target="#lihatBukti{{ $loop->index }}" class="btn p-3"
                                                            style="background-color: #808080;">
                                                            <span><i class="fa fa-eye"></i></span>
                                                        </button>
                                                    </div>
                                                    <div class="col-6">
                                                        @if ($data->status === 'Menunggu Pembayaran')
                                                            <button type="button" data-bs-toggle="modal"
                                                                data-bs-target="#bukti{{ $loop->index }}" class="btn p-1">
                                                                <span>Upload Bukti Pembayaran</span>
                                                            </button>
                                                        @elseif ($data->status === 'Selesai')
                                                            <button type="button" data-bs-toggle="modal"
                                                                data-bs-target="#rating{{ $loop->index }}"
                                                                class="btn p-2">
                                                                <span>Beri Rating</span>
                                                            </button>
                                                            {{-- @elseif ($data->status === 'Menunggu Konfirmasi Pembayaran')
                                                <button type="button" data-bs-toggle="modal"
                                                    data-bs-target="#lihatBukti{{ $loop->index }}" class="btn p-1">
                                                    <span>Lihat Bukti Pembayaran</span>
                                                </button> --}}
                                                        @endif
                                                    </div>
                                                </div>
                        </div>
                        </td>
                        </tr>
                        @endforeach
                        </tbody>
                        </table>
                    </div>
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </section>
@endsection

@foreach ($reservasi as $data)
    <!-- Bukti Modal -->
    <div class="modal fade" id="bukti{{ $loop->index }}" tabindex="-1" aria-labelledby="buktiLabel"
        aria-hidden="true" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="buktiLabel">Upload Bukti Pembayaran
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('reservasi.pembayaran', $data->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Bukti
                                Pembayaran</label>
                            <input class="form-control h-25" type="file" id="formFile" name="bukti">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Lihat Bukti Modal -->
    <div class="modal fade" id="lihatBukti{{ $loop->index }}" tabindex="-1" aria-labelledby="buktiLabel"
        aria-hidden="true" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="buktiLabel">Details Reservasi
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <tr>
                            <th>Tanggal Keberangkatan</th>
                            <td class="px-2">:</td>
                            <td>{{ $data->tgl_mulai }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Pulang</th>
                            <td class="px-2">:</td>
                            <td>{{ $data->tgl_akhir }}</td>
                        </tr>
                        <tr>
                            <th>Leader</th>
                            <td class="px-2">:</td>
                            <td>{{ $data->leader->name }}</td>
                        </tr>
                        <tr>
                            <th>Guide</th>
                            <td class="px-2">:</td>
                            <td>{{ $data->guide->name }}</td>
                        </tr>
                        <tr>
                            <th>Hotel</th>
                            <td class="px-2">:</td>
                            <td>
                                <ol>
                                    @foreach ($destinasi->where('reservasi_id', $data->id) as $item)
                                        <li>{{ $item->hotel->name }}</li>
                                    @endforeach
                                </ol>
                            </td>
                        </tr>
                        <tr>
                            <th>Kendaraan</th>
                            <td class="px-2">:</td>
                            <td>
                                <ol>
                                    @foreach ($destinasi->where('reservasi_id', $data->id) as $item)
                                        <li>{{ $item->kendaraan->nama }}</li>
                                    @endforeach
                                </ol>
                            </td>
                        </tr>

                    </table>
                    <div class="row ">
                        <div class="col">
                            <strong class="text-dark">Bukti Pembayaran :</strong>
                            <img class="mt-2"
                                src="{{ URL::asset('storage/bukti-pembayaran/' . $data->bukti_pembayaran) }}"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Rating Modal -->
    <div class="modal fade" id="rating{{ $loop->index }}" tabindex="-1" aria-labelledby="buktiLabel"
        aria-hidden="true" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="buktiLabel">Rating Perjalanan
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="bintang">Bintang</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend"><i
                                                class="fa fa-star font-size-20 text-warning"></i></span>
                                    </div>
                                    <input type="text" class="form-control h-25 @error('bintang') is-invalid @enderror"
                                        id="bintang" placeholder="Bintang" aria-describedby="inputGroupPrepend"
                                        name="bintang" value="{{ old('bintang') }}" required>
                                    @error('bintang')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="feedback">Ulasan</label>
                                <textarea name="feedback" rows="4" class="form-control field-message @error('feedback') is-invalid @enderror" placeholder="Komentar kamu"></textarea>
                                    @error('feedback')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            </div>
        </div>
    </div>
@endforeach
