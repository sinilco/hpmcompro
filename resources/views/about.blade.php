@extends ('layouts.template')

@section('judul')
    about
@endsection

@section('main')
@include('layouts.main.about')
@yield('breadcrumbs')
@yield('about')
@yield('counter')
@yield('altabout')
@yield('altabout2')
@endsection