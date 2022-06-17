@extends('layouts.master')
@section('title') Edit Manager @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Data User @endslot
@slot('title') Edit Manager @endslot
@endcomponent

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('user.admin.update', $user->id) }}" class="needs-validation" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label" for="name">Nama Lengkap</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nama Lengkap" value="{{ old('name') ?? $user->name }}" required>
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="username">Username</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Username" value="{{ old('username') ?? $user->username }}" required>
                                @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" value="{{ old('email') ?? $user->email }}" required>
                                @error('email')
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
                                <label class="form-label" for="password">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="avatar" class="form-label">Avatar</label>
                                <input class="form-control @error('avatar') is-invalid @enderror" type="file" id="avatar-1" name="avatar" onclick="uploadImg(1)">
                                @error('avatar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                              </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <img id="myImg-1"
                                    class="{{ $user->avatar ? '' : 'd-none' }} border p-1 rounded img-fluid img-thumbnail" width="120" height="120"
                                    src="{{ $user->avatar ? url('storage/avatar', $user->avatar) : '#' }}">
                            </div>
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-end gap-2">
                        <a class="btn btn-secondary" href="{{ route('user.index') }}">Kembali</a>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>

<script>
    function uploadImg(id) {
        document.querySelector('#avatar-' + id).addEventListener('change', function() {
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
@endsection