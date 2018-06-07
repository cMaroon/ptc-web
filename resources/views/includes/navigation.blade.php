<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand mb-0 h1 font-italic" href="{{ route('home') }}">
            {{ config('app.name', 'The Lost Island : Battle Royale') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link{{ Request::is('/') ? ' active' : '' }}" href="{{ route('home') }}">{{ __('home') }}{!! Request::is('/') ? '<span class="sr-only">(current)</span>' : '' !!}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>