@extends('layouts.template')

@section('judul')
    projects
@endsection
@section('main')
@include('layouts.main.projects')
@yield('breadcrumbs')
@yield('projects')
@endsection