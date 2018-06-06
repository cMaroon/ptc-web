<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('includes.metadata')
        <title>
            @if (isset($title))
                {{ $title . __(' | ') }}
            @endif
            {{ config('app.name','PTC-Official') }}
        </title>      
    </head>
    <body>
        <div id="app">
            @include('includes.navbar')
            <main class="py-4">
                @yield('content')
            </main>
        </div>

        @yield('script')
    </body>
</html>
