{{--
    Copyright 2018 The Lost Island : Battle Royale

    This file is part of TLIBR Web. TLIBR Web is distributed with the hope of
    attracting more community contributions to the core ecosystem of The Lost Island : Battle Royale.

    TLIBR Web is free software: you can redistribute it and/or modify
    it under the terms of the Affero GNU General Public License version 3
    as published by the Free Software Foundation.

    TLIBR Web is distributed WITHOUT ANY WARRANTY; without even the implied
    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
    See the GNU Affero General Public License for more details.
    
    You should have received a copy of the GNU Affero General Public License
    along with TLIBR Web. If not, see <http://www.gnu.org/licenses/>.
--}}
@extends('master', ['title' => 'Home'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @include('includes.carousel')
        </div>
        
        <div class="col-md-8">
            <div class="card rounded-0 mb-2">
                <div class="card-body">
                    <h4 class="card-title mb-0 font-italic">News</h4>
                </div>
            </div>

            @for ( $i=0; $i < 7; $i++)
                <div class="card rounded-0 mb-2 card-hover">
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