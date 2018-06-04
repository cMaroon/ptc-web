@extends('master_landing', ['title' => 'Welcome'])

@section('content')
	<header id="landing">
		<img src="{{ asset('images/logo.png') }}" width="250px" alt="">
		<h1>WELCOME PTC</h1>
		<p>PATEROS TECHNOLOGICAL COLLEGE</p>
		<div class="links">
			<a href="{{ url('https://www.facebook.com/ptceduph') }}" class="btn btn-primary" style="background-color: #3B5998; border-color: #2b4272;" target="_blank">{{ __('facebook') }}</a>
			<a href="{{ route('home') }}" class="btn btn-primary" style="background-color: #059117; border-color: #006b0e;" target="_self">{{ __('visit site') }}</a>
		</div>
	</header>
@endsection
