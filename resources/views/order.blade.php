@extends('layouts.template')

@section('judul')
    Order
@endsection
@section('main')
@include('layouts.main.order')
@yield('breadcrumbs')
@yield('order')
@endsection