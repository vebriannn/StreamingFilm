@extends('admin.crud.movies.layouts.base')

@section('title', 'Create Movie')

@section('content')
    <div class="content d-flex justify-content-center align-items-center p-5 mt-5">
        <div class="container">
            <div class="card card-primary w-75" style="margin: 0 auto;">
                <div class="card-header">
                    <h3 class="card-title">Create Movie</h3>
                </div>

                <form enctype="multipart/form-data" method="POST" action="{{ route('admin.movies.create.store') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="e.g Guardian of The Galaxy" value="{{ old('title') }}">
                        </div>
                        <div class="form-group">
                            <label for="trailer">Trailer</label>
                            <input type="text" class="form-control" id="trailer" name="trailer" placeholder="Video url"
                                value="{{ old('trailer') }}">
                        </div>
                        <div class="form-group">
                            <label for="movie">Movie </label>
                            <input type="text" class="form-control" id="movie" name="movie" placeholder="Movie"
                                value="{{ old('movie') }}">
                        </div>
                        {{-- <div class="form-group">
                            <label>Date:</label>
                            <div class="input-group date" id="datetimepicker" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input"
                                    data-target="#datetimepicker" name="release_date" />
                                <button class="btn btn-outline-secondary" type="button" data-target="#datetimepicker"
                                    data-toggle="datetimepicker">
                                    <i class="fa fa-calendar"></i>
                                </button>
                            </div>
                        </div> --}}
                        <div class="form-group">
                            <label for="short-about">Casts</label>
                            <input type="text" class="form-control" id="short-about" name="casts"
                                placeholder="Jackie Chan" value="{{ old('casts') }}">
                        </div>
                        <div class="form-group">
                            <label for="short-about">Categories</label>
                            <input type="text" class="form-control" id="short-about" name="categories"
                                placeholder="Action, Fantasy" value="{{ old('categories') }}">
                        </div>
                        <div class="form-group">
                            <label for="small-thumbnail">Small Thumbnail</label>
                            <input type="file" class="form-control" name="small_thumbnail">
                        </div>
                        <div class="form-group">
                            <label for="small-thumbnail">Large Thumbnail</label>
                            <input type="file" class="form-control" name="large_thumbnail">
                        </div>
                        <div class="form-group">
                            <label for="duration">Duration</label>
                            <input type="text" class="form-control" id="duration" name="duration" placeholder="1h 39m"
                                value="{{ old('duration') }}">
                        </div>
                        <!-- <div class="form-group">
                                                                    <label for="large-thumbnail">Large Thumbnail</label>
                                                                    <input type="file" class="form-control" name="large_thumbnail">
                                                                </div> -->
                        <!-- <div class="form-group">
                                                                    <label for="short-about">Short About</label>
                                                                    <input type="text" class="form-control" id="short-about" name="short_about"
                                                                        placeholder="Awesome Movie" value="{{ old('short_about') }}">
                                                                </div> -->
                        <div class="form-group">
                            <label for="short-about">About</label>
                            <input type="text" class="form-control" id="about" name="about"
                                placeholder="Awesome Movie" value="{{ old('about') }}">
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
