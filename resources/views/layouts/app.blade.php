@extends('layouts.main')
@include('components.header')
@include('components.sidebar')
@include('components.footer')

@section('container')

    @yield('content')

@endsection