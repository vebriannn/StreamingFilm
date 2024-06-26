@extends('admin.layouts.base')

@section('title', 'Setting')

@section('content')
    <div class="page-wrapper">
        @error('email')
            <div class="alert alert-danger alert-dismissible fade show position-fixed w-100 " role="alert" style="z-index: 999;">
                <p>
                    {{ $message }}
                </p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @enderror
        <header class="header-desktop3 position-fixed w-100 " style="z-index: -999;">
            <div class="container-fluid d-flex justify-content-between">
                <a href="{{ route('admin.dashboard') }}" style="text-decoration: none; color: white; font-size: 28px;"><i
                        class="bi bi-arrow-left-circle"></i></a>
            </div>
        </header>

        <div class="main-content">
            <div class="container-fluid d-flex justify-content-center pt-5 pt-lg-0">
                <div class="col-lg-10">
                    <div class="card">
                        @foreach ($users as $user)
                            <form action="{{ route('admin.setting.updated', $user->id) }}" method="post"
                                enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                                <div class="card-header d-flex justify-content">
                                    <div class="image" style="width: 80px; height: auto;">
                                        <img src="{{ asset('storage/profile/yn.jpeg') }}" alt="Profil"
                                            style="border-radius: 100%;" />
                                    </div>
                                    <div class="content "
                                        style="display: flex; flex-direction: column; justify-content: center; margin-left: 1rem;">
                                        <h1 style="font-size: 20px;">{{ $user->name }}</h1>
                                        <p>{{ $user->email }}</p>
                                    </div>
                                </div>
                                <div class="card-body card-block">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Nama Anda</label>
                                        </div>
                                        <div class="col-12 col-md-9 mb-2">
                                            <input type="text" id="text-input" name="name"
                                                placeholder="yannsfullstack" class="form-control"
                                                value="{{ $user->name }}">
                                            <small class="form-text text-muted">Masukan nama anda ke field di atas
                                                ini</small>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-2">
                                        <div class="col col-md-3">
                                            <label for="email-input" class=" form-control-label">Email Anda</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="email" id="email-input" name="email"
                                                placeholder="yncodes@gmail.com" class="form-control"
                                                value="{{ $user->email }}">
                                            <small class="help-block form-text">Masukan email anda ke field di atas
                                                ini</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="password-input" class=" form-control-label">Ubah Password</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="password" id="password-input" name="password" placeholder=""
                                                class="form-control">
                                            <small class="help-block form-text">Masukan password baru anda ke field di atas
                                                ini</small>
                                        </div>
                                    </div>
                                    {{-- <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="password-input" class=" form-control-label">Upload Foto</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="file" id="file-multiple-input" name="file-multiple-input"
                                                multiple="" class="form-control-file">
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Ubah
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                </div>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scriptJS')
    <script src="{{ asset('colorlib/admin/assets/js/index.js') }}"></script>
@endsection
