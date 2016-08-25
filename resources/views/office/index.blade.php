@extends('office.template')

@section('head')
    {{-- MetisMenu CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/metisMenu.min.css') }}">
	{{-- Morris Charts CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/morris.css') }}" />
    {{-- Timeline CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/timeline.css') }}">
@endsection

@section('content')
    <div id="wrapper">
    {{-- MENU --}}
    @include('office.office-menu')
    {{-- Content --}}
    @include('office.test')
    </div>
@endsection

@section('scripts')
    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('/assets/js/metisMenu.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('/assets/js/raphael.min.js') }}"></script>
    <script src="{{ asset('/assets/js/morris.min.js') }}"></script>
    <script src="{{ asset('/assets/js/morris-data.js') }}"></script>

    <!-- Custom CMS JavaScript -->
    <script src="{{ asset('/assets/js/app.js') }}"></script>
@endsection