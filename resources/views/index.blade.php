@extends('member.components.layouts.base')

@section('title', 'Landing Pages')

@section('css')
    <link rel="stylesheet" href="{{ asset('streamfilm/css/index.css') }}">
@endsection

@section('content')
    <div class="content pt-5">
        <div class="container w-50">
            <p>Welcome to STREAM</p>
            <h1 class="text-center">Watch lots of interesting
                films here</h1>
            <p class="text-center">"Lebih dari Sekadar Hiburan: Kami Mempersembahkan Kisah-kisah
                yang Menginspirasi dan Mengubah Hidup!"</p>
            <a href="{{ route('member.register') }}" class="btn mt-5" aria-disabled="true">Get Started</a>
        </div>
    </div>
@endsection
