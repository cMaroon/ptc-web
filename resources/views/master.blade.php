<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('includes.metadata')
    <title>
        @if (isset($title))
            {{ $title . __(' - ') }}
        @endif
        {{ config('app.name', 'The Lost Island : Battle Royale') }}
    </title>
</head>
<body>
    <div id="app">
        @include('includes.navigation')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
    @yield('script')
</body>
</html>
