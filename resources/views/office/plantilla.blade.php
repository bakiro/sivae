@extends('office.template')

@section('header')
    <link href="/assets/css/cms.css" rel="stylesheet">
@endsection

@section('content')
<div class="aou">
  {{-- MENU --}}
  @include('office.office-menu')

</div>
@endsection

@section('scripts')
    <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/js/chart.js') }}"></script>
    <script src="{{ asset('/assets/js/tablesorter.min.js') }}"></script>
    <script src="{{ asset('/assets/js/toolkit.js') }}"></script>
    <script src="{{ asset('/assets/js/application.js') }}"></script>
@endsection