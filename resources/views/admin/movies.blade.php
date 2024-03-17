@extends('admin.layouts.base')

@section('title', 'Dashboard')

@section('content')
    <!-- PAGE CONTENT-->
    <div class="page-content--bgf7 pt-5">

        <!-- STATISTIC-->
        <section class="statistic statistic2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="statistic__item statistic__item--blue">
                            <h2 class="number">1,000</h2>
                            <span class="desc">Total Film Gratis</span>
                            <div class="icon">
                                <i class="bi bi-film"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="statistic__item statistic__item--green">
                            <h2 class="number">260</h2>
                            <span class="desc">Total Film Premium</span>
                            <div class="icon">
                                <i class="bi bi-film"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END STATISTIC-->

        <!-- DATA TABLE-->
        <section class="p-t-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title-5 m-b-35">data table</h3>
                        <div class="table-data__tool--lg table-data__flex table-data__flex-lg ">
                            <div class="table-data__tool-left">
                                <form class="au-form-icon--sm" action="" method="post">
                                    <input class="au-input--w300 au-input--style2" type="text" placeholder="Search Film">
                                    <button class="au-btn--submit2" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="table-data__tool-right">
                                <a class="au-btn au-btn-icon au-btn--green au-btn--small btn-top-small text-decoration-none"
                                    href="{{ route('admin.movies.create') }}">
                                    <i class="zmdi zmdi-plus"></i>Add Film
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive table-responsive-data2 overflow-xxl-scroll">
                            <table class="table table-data2">
                                <thead>
                                    <tr>
                                        <th>title</th>
                                        <th>trailer</th>
                                        <th>movies</th>
                                        <th>casts</th>
                                        <th>categories</th>
                                        <th>small thumbnail</th>
                                        <th>large thumbnail</th>
                                        <th>release date</th>
                                        <th>about</th>
                                        <th>duration</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($movies as $movie)
                                        <tr class="tr-shadow">
                                            <td>{{ $movie->title }}</td>
                                            <td class="desc">
                                                {{ $movie->trailer }}
                                            </td>
                                            <td class="desc">{{ $movie->movies }}</td>
                                            <td>{{ $movie->casts }}</td>
                                            <td>
                                                {{ $movie->categories }}
                                            </td>
                                            <td>
                                                {{ $movie->small_thumbnail }}
                                            </td>
                                            <td>
                                                {{ $movie->large_thumbnail }}
                                            </td>
                                            <td>
                                                {{ $movie->release_date }} </td>
                                            <td>
                                                {{ $movie->about }}
                                            </td>
                                            <td>
                                                {{ $movie->duration }}
                                            </td>
                                            <td>
                                                <div class="table-data-feature d-flex justify-content-start">
                                                    <a href="#" class="item" data-toggle="tooltip"
                                                        data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </a>
                                                    <a href="#" class="item" data-toggle="tooltip"
                                                        data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END DATA TABLE-->

        <!-- COPYRIGHT-->
        <section class="p-t-60 ">
            <div class="container-fluid bg-black">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright pb-3">
                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by
                                <a href="https://colorlib.com">Colorlib</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END COPYRIGHT-->
    </div>

@endsection

@section('scriptJS')
    <script src="{{ asset('colorlib/admin/assets/js/movies.js') }}"></script>
@endsection
