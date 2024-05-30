@extends('admin.crud.movies.layouts.base')

@section('title', 'Create Movie')

@section('content')
    <div class="content d-flex justify-content-center align-items-center p-5 mt-5">
        <div class="container">
            <div class="card card-primary w-75" style="margin: 0 auto;">
                <div class="card-header">
                    <h3 class="card-title">Create Movie</h3>
                </div>
                <form enctype="multipart/form-data" method="POST" action="{{ route('admin.movies.edit.update', $movies->id) }}">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Type User</label>
                            <select class="form-select" name="type_film">
                                <option value="free" {{ $movies->type_film == 'free' ? 'selected' : '' }}>free</option>
                                <option value="premium" {{ $movies->type_film == 'premium' ? 'selected' : '' }}>Premium
                                </option>
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="e.g Guardian of The Galaxy" value="{{ $movies->title }}">
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="movie">Movie </label>
                            <input type="text" class="form-control" id="movie" name="movie" placeholder="Movie"
                                value="{{ $movies->movie }}">
                            @error('movie')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="short-about">Casts</label>
                            <input type="text" class="form-control" id="short-about" name="casts"
                                placeholder="Jackie Chan" value="{{ $movies->casts }}">
                            @error('casts')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="short-about">Categories</label>
                            <input type="text" class="form-control" id="short-about" name="categories"
                                placeholder="Action, Fantasy" value="{{ $movies->categories }}">
                            @error('categories')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="thumbnail">Small Thumbnail</label>
                            <input type="file" class="form-control" id="thumbail" name="thumbnail">
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Rantinf</label>
                            <input type="text" class="form-control" id="" name="ranting" value="{{ $movies->ranting }}">
                            @error('ranting')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label>Date</label>
                            <div class="input-group date">
                                <input type="date" class="form-control datetimepicker-input" name="release_date"
                                    value="{{ $movies->release_date }}" />
                            </div>
                            @error('release_date')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="duration">Duration</label>
                            <input type="text" class="form-control" id="duration" name="duration" placeholder="1h 39m"
                                value="{{ $movies->duration }}">
                            @error('duration')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="short-about">About</label>
                            <input type="text" class="form-control" id="about" name="about"
                                placeholder="Awesome Movie" value="{{ $movies->about }}">
                            @error('about')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- <div class="form-group">
                                                                                <label>Featured</label>
                                                                                <select class="custom-select" name="featured">
                                                                                    <option value="0" >No</option>
                                                                                    <option value="1" >Yes</option>
                                                                                </select>
                                                                            </div> -->
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
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
