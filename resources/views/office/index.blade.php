@extends('office.basic.template')

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
        @include('office.basic.menu')
        {{-- Content --}}
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            {{-- Aqui boxResumen --}}
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    {{-- aqui area chart--}}
                    {{-- barchart --}}

                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    {{-- aqui notification panel --}}
                    {{-- Donut chart --}}
                    {{-- Chat Panel --}}
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->    </div>
@endsection

@section('scripts')
    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('/assets/js/metisMenu.min.js') }}"></script>

    <!-- Time Ago Plugin JavaScript -->
    <script src="{{ asset('/assets/js/jquery.timeago.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('/assets/js/raphael.min.js') }}"></script>
    <script src="{{ asset('/assets/js/morris.min.js') }}"></script>
    <script src="{{ asset('/assets/js/morris-data.js') }}"></script>

    <!-- Custom CMS JavaScript -->
    <script src="{{ asset('/assets/js/app.js') }}"></script>
@endsection