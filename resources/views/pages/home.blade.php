@extends('master', ['title' => 'Home'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @include('includes.carousel')
        </div>
        <div class="col-md-8">
            <div class="card mb-2">
                <div class="card-body">
                    <h4 class="card-title mb-0 font-italic">News</h4>
                </div>
            </div>

            @for ( $i=0; $i < 7; $i++)
                <div class="card mb-2">
                    <div class="card-body">
                        <h5 class="card-title mb-1 font-weight-light">
                            <a href="#">Post title</a>
                        </h5>
                        <p class="card-subtitle mb-2 text-muted"><small>2018-06-06 19:06</small></p>
                        <p class="card-text font-weight-light" style="max-height: 43px; overflow: hidden;">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis officia ullam, id esse rerum eius, eveniet omnis, voluptatem voluptatibus officiis aperiam recusandae aliquam corrupti. Ratione corporis perspiciatis deserunt molestias eligendi fugit delectus voluptas nostrum praesentium veritatis adipisci, eos reiciendis, dolor eveniet temporibus natus distinctio explicabo! Aspernatur consectetur tenetur praesentium at?
                        </p>
                    </div>
                </div>
            @endfor
        </div>

        <div class="col-md-4">
            @include('includes.sidepanel')
        </div>
    </div>
</div>
@endsection