@extends('layouts.master')
@section('title') Tambah Hotel @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Data Hotel @endslot
@slot('title') Tambah Hotel @endslot
@endcomponent

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('user.admin.store') }}" class="needs-validation" novalidate
                    enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="role" value="admin">

                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="name">Nama Hotel</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nama Hotel"
                                    required>
                            </div>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>

                        <div class="col-3">
                            <label for="bintang">Bintang</label>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend"><i style ="color:rgba(216, 219, 0, 0.938);"class="bx bxs-star font-size-20"></i></span>
                              </div>
                              <input type="text" class="form-control" id="bintang" placeholder="Bintang" aria-describedby="inputGroupPrepend" required>
                              <div class="invalid-feedback">
                                Masukkan bintang hotel
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="wilayah">Nama Wilayah</label>
                                <input type="text" class="form-control" id="wilayah" name="wilayah"
                                    placeholder="Nama Wilayah" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto</label>
                                <input class="form-control" type="file" id="foto-1" name="foto"
                                    onclick="uploadImg(1)">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <img id="myImg-1" class="d-none border p-1 rounded img-fluid img-thumbnail" src="#"
                                    width="120" height="120">
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a class="btn btn-secondary" href="{{ route('hotel.index') }}">Kembali</a>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ URL::asset('assets/libs/rater-js/rater-js.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/rating.init.js') }}"></script>
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>

<script>
    function uploadImg(id) {
        document.querySelector('#foto-' + id).addEventListener('change', function() {
            if (this.files && this.files[0]) {
                const img = document.querySelector('#myImg-' + id);
                img.onload = () => {
                    URL.revokeObjectURL(img.src);
                }
                img.classList.remove('d-none');
                img.src = URL.createObjectURL(this.files[0]);
                const label = document.querySelector('#label-' + id);
                const fileName = this.files[0].name;
                label.innerText = fileName;
                console.log(this.files[0].name);
            }
        });
    }
</script>

<script>
    function rating() {
        document.querySelector('.star-rating').addEventListener('change', function() {
            const rating = document.querySelector('.star-rating').rate("getValue")
            console.log(rating);
        });
    }
</script>
@endsection
