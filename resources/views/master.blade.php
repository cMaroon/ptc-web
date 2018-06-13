
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('includes.metadata')
    <title>
        @if (isset($title))
            {{ $title }}
        @elseif (isset($titlePrepend))
            {{ $currentSection . __(' · ') . $titlePrepend }}
        @endif
        {{ __(' | ') . config('app.name', 'PTC-Official') }}
    </title>
</head>
<body>
    <div id="app">
        @include('includes.navigation')

        <main class="py-4 p-sm-5 m-sm-4" >
            @yield('content')
        </main>
    </div>
    
    @yield('script')
</body>
</html>
