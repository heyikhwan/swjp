@extends('layouts.master')
@section('title')
    @lang('translation.Data_Tables')
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/datatables.net-bs4/datatables.net-bs4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/libs/datatables.net-responsive-bs4/datatables.net-responsive-bs4.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1')
            Data Master
@endslot
        @slot('title')
            Data Hotel
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                                <div>
                                    <a href="{{ route('hotel.create') }}" class="btn btn-light"><i
                                            class="bx bx-plus me-1"></i> Tambah Hotel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="table-responsive mb-4">
                        <table class="table datatable align-middle dt-responsive table-check nowrap"
                            style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Hotel</th>
                                    <th>Nama Wilayah</th>
                                    <th>Bintang</th>
                                    <th>Rating</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($hotel as $item)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->wilayah->nama }}</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-1">
                                                <i class="mdi mdi-star text-warning"></i>
                                                <span>{{ $item->bintang }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-1">
                                                <i class="mdi mdi-star text-warning"></i>
                                                <span>{{ $item->rating }}</span>
                                            </div>
                                        </td>
                                        <td class="d-flex gap-2 align-items-center">
                                            <div>
                                                <button type="button"
                                                    class="btn btn-soft-secondary waves-effect waves-light"
                                                    data-bs-toggle="modal" data-bs-target="#detail-{{ $item->id }}">
                                                    <i class="fas fa-image"></i>
                                                </button>

                                                <!-- Modal Galeri -->
                                                <div id="detail-{{ $item->id }}" class="modal fade" tabindex="-1"
                                                    aria-labelledby="detailLabel" aria-hidden="true" data-bs-scroll="true">
                                                    <div class="modal-dialog modal-dialog-scrollable">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="detailLabel">Galeri</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    @foreach ($galleries as $gallery)
                                                                    @if ($gallery->hotel_id === $item->id)
                                                                    <div class="col-6">
                                                                        <img src="{{ asset('storage/hotel/' . $gallery->image) }}"
                                                                        class="img-fluid img-thumbnail m-2">
                                                                    </div>
                                                                    @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary waves-effect"
                                                                    data-bs-dismiss="modal">Tutup</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            </div> <!-- end preview-->

                                            <a href="{{ route('hotel.edit', $item->id) }}"
                                                class="btn btn-soft-warning waves-effect waves-light">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <button type="button" class="btn btn-soft-danger waves-effect waves-light"
                                                id="sa-warning" onclick="swal({{ $item->id }})">
                                                <i class="fas fa-trash"></i>

                                                <form action="{{ route('hotel.destroy', $item->id) }}" method="post"
                                                    id="delete-{{ $item->id }}">
                                                    @csrf
                                                    @method('delete')
                                                </form>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    {{-- <!-- Modal -->
<div class="modal fade" id="rating" tabindex="-1" aria-labelledby="ratingLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ratingLabel">Beri Rating</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> --}}
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
            }).then(function(result) {
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
