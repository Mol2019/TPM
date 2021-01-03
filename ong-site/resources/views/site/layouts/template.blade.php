@extends('site.layouts.default')

@section('breadcome')
    @include('site.layouts.partials._breadcome')
@endsection


@section('page-content')
    @yield('template-content')
@endsection
