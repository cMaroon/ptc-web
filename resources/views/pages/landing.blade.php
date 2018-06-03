@extends('layouts.applanding')


@section('content')
  <header id="landing">
    <h1>{{$title}}</h1>
      <p>Official Website</p>

        <div class="links">
            <a href="{{ url('') }}" class="btn btn-primary btn-sm" style="background-color: #4078c0; border-color: #3565a3;" target="_blank">{{ __('Twitter') }}</a>
            
            <a href="{{ url('https://www.facebook.com/ptceduph') }}" class="btn btn-primary btn-sm" style="background-color: #3B5998; border-color: #2b4272;" target="_blank">{{ __('Facebook') }}</a>
            
            <a href="{{ url('/index') }}" class="btn btn-primary btn-sm" style="background-color: #059117; border-color: #006b0e;" target="_self">{{ __('Visit Site') }}</a>
                {{-- <a href="#" class="button">Visit Site</a> --}}
        </div>
  </header>
@endsection
