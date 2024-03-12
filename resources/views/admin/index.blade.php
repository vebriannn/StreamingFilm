@extends('admin.layouts.base')

@section('title', 'Dashboard')

@section('content')
    <div class="page-wrapper">
        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7 pt-5">

            <!-- STATISTIC-->
            <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number">{{ $totalusers }}</h2>
                                <span class="desc">Total Pengguna</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="statistic__item statistic__item--orange">
                                <h2 class="number">{{ $totalfree }}</h2>
                                <span class="desc">Pengguna Gratis</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="statistic__item statistic__item--green">
                                <h2 class="number">{{ $totalperm }}</h2>
                                <span class="desc">Pengguna Berbayar</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
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
                            <div class="table-data__tool--lg table-data__flex table-data__flex-lg">
                                <div class="table-data__tool-left">
                                    <form class="au-form-icon--sm" action="" method="post">
                                        <input class="au-input--w300 au-input--style2" type="text"
                                            placeholder="Search Pengguna">
                                        <button class="au-btn--submit2" type="submit">
                                            <i class="zmdi zmdi-search"></i>
                                        </button>
                                    </form>
                                </div>
                                <!-- <div class="table-data__tool-right">
                                                                                                                                                <button class="au-btn au-btn-icon au-btn--green au-btn--small btn-top-small">
                                                                                                                                                    <i class="zmdi zmdi-plus"></i>add item
                                                                                                                                                </button>
                                                                                                                                            </div> -->
                            </div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr class="w-100">
                                            <th>nama</th>
                                            <th>email</th>
                                            <th>start subscription</th>
                                            <th>end subscription</th>
                                            <th>status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr class="tr-shadow">
                                                <td>{{ $user->name }}</td>
                                                <td>
                                                    <span class="block-email">{{ $user->email }}</span>
                                                </td>
                                                @if ($user->detailuser != null)
                                                    <td>{{ $user->detailuser->start_of_subscription }}</td>
                                                    <td>{{ $user->detailuser->end_of_subscription }}</td>
                                                    <td>
                                                        @if ($user->detailuser->status != 'active')
                                                            <span class="text-danger">{{ $user->detailuser->status }}</span>
                                                        @else
                                                            <span
                                                                class="text-success">{{ $user->detailuser->status }}</span>
                                                        @endif
                                                    </td>
                                                @else
                                                    <td class="text-danger">None</td>
                                                    <td class="text-danger">None</td>
                                                    <td class="text-danger">Tidak Berlangganan</td>
                                                @endif

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

    </div>
@endsection

@section('scriptJS')
    <script src="{{ asset('colorlib/admin/assets/js/index.js') }}"></script>
@endsection
