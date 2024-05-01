@extends('admin.crud.users.layouts.base')

@section('title', 'Edit Users')

@section('content')
    <div class="content d-flex justify-content-center align-items-center p-5 mt-5">
        <div class="container">
            <div class="card card-primary w-75" style="margin: 0 auto;">
                <div class="card-header">
                    <h3 class="card-title">Edit User</h3>
                </div>

                @foreach ($users as $user)
                    <form enctype="multipart/form-data" method="POST" action="{{ route('admin.users.edit.update', $user->id) }}">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Yanns" value="{{$user->name}}">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="yn@gmail.com"
                                value="{{$user->email}}">
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label for="start">start subscription</label>
                                <input type="date" class="form-control" id="start" name="start_of_subscription"
                                    value="{{ $user->detailuser == null ? '' : $user->detailuser->start_of_subscription}}">
                            </div>
                            <div class="form-group mt-3">
                                <label for="end">end subscription</label>
                                <input type="date" class="form-control" id="end" name="end_of_subscription"
                                value="{{ $user->detailuser == null ? '' : $user->detailuser->end_of_subscription}}">
                            </div>
                            <div class="form-group mt-3">
                                <label>Status</label>
                                @if ($user->detailuser != null)
                                    <select class="form-select" name="status">
                                        <option value="active" {{ $user->detailuser->status == 'active' ? 'selected' : '' }} >Active</option>
                                        <option value="deactive" {{ $user->detailuser->status == 'deactive' ? 'selected' : '' }}>Deactive</option>
                                    </select>
                                @else
                                    <select class="form-select" name="status">
                                        <option value="active" >Active</option>
                                        <option value="deactive">Deactive</option>
                                        <option selected>Tidak Berlangganan</option>
                                    </select>
                                @endif
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('js')
    {{-- <script>
        $(document).ready(function() {
            $('#datetimepicker').datetimepicker({
                format: 'YYYY-MM-DD HH:mm:ss'
            });
        });
    </script> --}}
@endsection
