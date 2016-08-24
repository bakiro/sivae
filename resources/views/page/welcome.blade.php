@extends('page.template')
@section('content')
	{{-- MENU --}}
	@include('page.menu')
	{{-- Contend --}}
	<div class="container-fluid main-container">
		<section id="welcome">
		    <h1>Cuerpo de pagina<i class="fa fa-viadeo" aria-hidden="true"></i></h1>
		</section>
	</div>
@endsection
@section('scripts')
	<script src="{{ asset('/assets/js/page.js') }}"></script>
@endsection