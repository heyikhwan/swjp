@extends('layouts.master')
@section('title') @lang('translation.Data_Tables')  @endsection
@section('css')
<link href="{{ URL::asset('assets/libs/datatables.net-bs4/datatables.net-bs4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/libs/datatables.net-buttons-bs4/datatables.net-buttons-bs4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/libs/datatables.net-responsive-bs4/datatables.net-responsive-bs4.min.css') }}" rel="stylesheet" type="text/css" />

@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Reservasi @endslot
@slot('title') Daftar Reservasi @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card">
            {{-- <div class="card-header">
                <h4 class="card-title">Default Datatable</h4>
                <p class="card-title-desc">DataTables has most features enabled by
                    default, so all you need to do to use it with your own tables is to call
                    the construction function: <code>$().DataTable();</code>.
                </p>
            </div> --}}
            <div class="card-body">

                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                        <tr>
                            <th>Nama Customer</th>
                            <th>Tanggal Reservasi</th>
                            <th>Jenis Perjalanan</th>
                            <th>Email</th>
                            <th>No.Telp</th>
                            <th>Status Pembayaran</th>
                            <th>Konfirmasi Reservasi</th>
                            <th>Konfirmasi Pembayaran</th>
                            <th>Leader</th>
                            <th>GAED</th>
                            <th>Status Perjalanan</th>
                        </tr>
                    </thead>


                    <tbody>
                    <tr>
                        <td>PADEL</td>
                        <td>17 Juni 2022 15:30</td>
                        <td>Darat</td>
                        <td>fadilmartias26@gmail.com</td>
                        <td>082152127374</td> 
                        <td class="badge badge-pill badge-primary">Sudah Dibayar</td>
                        <td> <a href="#" class="btn btn-success">
                            <span class="">✔</span>
                        </a>
                        <button type="submit" class="btn btn-danger"
                            onclick="#">
                            ✘
                            <form id="form"
                                action="#" method="POST">
                                @csrf
                                @method('delete')
                            </form>
                        </button>
                        </td>
                        <td> <a href="#" class="btn btn-success">
                            <span class="">✔</span>
                        </a>
                        <button type="submit" class="btn btn-danger"
                            onclick="#">
                            ✘
                            <form id="form"
                                action="#" method="POST">
                                @csrf
                                @method('delete')
                            </form>
                        </button>
                        </td>
                        <td><button type ="button" data-toggle="modal" data-target="#leader" class="btn btn-success">
                            Pilih Leader
                        </button></td>
                        <td><button type ="button" data-toggle="modal" data-target="#gaed" class="btn btn-success">
                            Pilih GAED
                        </button></td>
                        <td>Sedang di Perjalanan</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<!-- Modal -->
<div class="modal fade" id="leader" tabindex="-1" role="dialog" aria-labelledby="leaderLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="leaderLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

<!-- Modal -->
<div class="modal fade" id="gaed" tabindex="-1" role="dialog" aria-labelledby="gaedLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="gaedLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

@endsection
@section('script')
<script src="{{ URL::asset('assets/libs/datatables.net/datatables.net.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/datatables.net-bs4/datatables.net-bs4.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/datatables.net-buttons/datatables.net-buttons.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/datatables.net-buttons-bs4/datatables.net-buttons-bs4.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/datatables.net-responsive/datatables.net-responsive.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/datatables.net-responsive-bs4/datatables.net-responsive-bs4.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/datatables.init.js') }}"></script>
<script src="{{ URL::asset('assets/js/app.min.js') }}"></script>
@endsection
