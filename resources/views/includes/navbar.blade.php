<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
		<a class="navbar-brand" href="{{ route('landing') }}"><img src="{{ asset('images/logo.png') }}" width="30" height="30" alt=""></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsPTC" aria-controls="navbarsPTC" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarsPTC">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="{{ route('home') }}">home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('news') }}">news</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('about') }}">about</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">contact</a>
				</li>
			</ul>
			<span class="navbar-text">
				<ul class="navbar-nav mr-auto">
					@guest
						<li class="nav-item">
							<a href="{{ route('login') }}" class="nav-link">login</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('register') }}" class="nav-link">register</a>
						</li>
					@else
						<li class="nav-item">
							<a class="nav-link" href="{{ route('student.portal') }}">student portal</a>
						</li>
					@endguest             
				</ul>
			</span>
		</div>
	</div>
</nav>