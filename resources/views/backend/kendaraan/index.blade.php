@extends('layouts.master')
@section('title') Data Kendaraan @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables.net-bs4/datatables.net-bs4.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/libs/datatables.net-responsive-bs4/datatables.net-responsive-bs4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Home @endslot
@slot('title') Data Kendaraan @endslot
@endcomponent

@if ($message = Session::get('success'))
<div class="row">
    <div class="col">
        <div class="alert alert-success alert-border-left alert-dismissible fade show" role="alert">
            <i class="mdi mdi-check-all me-3 align-middle"></i><strong>Success</strong> - {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
</div>
@endif

<div class="row">
    <div class="col-lg-12">
        <div class="card mb-0">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="mb-3">
                            {{-- --}}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                            <a href="{{ route('kendaraan.create') }}" class="btn btn-light shadow-none">
                                <i class="bx bx-plus me-1"></i> Tambah Kendaraan
                            </a>
                        </div>

                    </div>
                </div>
                <!-- end row -->

                <div class="table-responsive mb-4">
                    <table class="table align-middle datatable dt-responsive table-check nowrap"
                        style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Kendaraan</th>
                                <th scope="col">Pemilik</th>
                                <th scope="col">Rating</th>
                                <th style="width: 80px; min-width: 80px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kendaraan as $item)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ Str::ucfirst($item->jenis_transport) }}</td>
                                <td>{{ $item->pemilik }}</td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <i class="mdi mdi-star text-warning"></i>
                                        <span>{{ $item->rating }}</span>
                                    </div>
                                </td>
                                <td class="d-flex gap-2 align-items-center">
                                    <a href="{{ route('kendaraan.edit', $item->id) }}" class="btn btn-soft-warning waves-effect waves-light">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <button type="button" class="btn btn-soft-danger waves-effect waves-light"
                                        id="sa-warning" onclick="swal({{ $item->id }})">
                                        <i class="fas fa-trash"></i>

                                        <form action="{{ route('kendaraan.destroy', $item->id) }}" method="post" id="delete-{{ $item->id }}">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- end table -->
                </div>
                <!-- end table responsive -->
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="{{ URL::asset('assets/libs/datatables.net/datatables.net.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/datatables.net-bs4/datatables.net-bs4.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/datatables.net-responsive/datatables.net-responsive.min.js') }}"></script>

<script src="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<script>
    function swal(id) {
        Swal.fire({
                title: "Yakin ingin menghapus?",
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#1c84ee",
                cancelButtonColor: "#fd625e",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: 'Tidak, Batalkan!',
            }).then(function (result) {
                if (result.value) {
                    $(`#delete-${id}`).submit();

                    Swal.fire("Deleted!", "Your file has been deleted.", "success");
                }
            });
    }
</script>

<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/datatable-pages.init.js') }}"></script>
@endsection
