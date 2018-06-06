<!doctype html>
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
    <body class="body-landing">
        @yield('content')
    </body>
</html>
