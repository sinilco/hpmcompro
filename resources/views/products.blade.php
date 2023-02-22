@extends('layouts.template')

@section('judul')
    products
@endsection
@section('main')
@include('layouts.main.products')
@yield('breadcrumbs')
@yield('product')
@endsection