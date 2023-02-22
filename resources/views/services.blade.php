@extends('layouts.template')

@section('judul')
    services
@endsection
@section('main')
    @include('layouts.main.services')
    @yield('breadcrumbs')
    @yield('services')
@endsection