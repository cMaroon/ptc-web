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
@extends('master', ['title' => 'News'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-header-section rounded-0 mb-4">
                <div class="card-body">
                    <h4 class="card-title mb-0 font-italic">News and Events</h4>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="row">
                @for ($i = 1; $i <= 6; $i++)
                    @php
                        $image = '/images/sample-data/' . $i . '.jpg';
                    @endphp
                    <div class="col-lg-12">
                        <div class="card card-hover rounded-0 mb-2">
                            <img class="card-img-top rounded-0" src="{{ url($image) }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title mb-1 font-weight-light">
                                    <a href="/news/post">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta cumque velit mollitia repellendus at labore iste doloremque numquam modi rerum?</a>
                                </h5>
                                <p class="card-subtitle mb-2 text-muted">
                                    <small data-toggle="tooltip" data-placement="top" data-html="true" title="<strong>June 6, 2018</strong> 5:00 PM">06 Jun</small>
                                    <span class="badge badge-primary font-weight-light">News</span>
                                    <span class="badge badge-info font-weight-light">Event</span>
                                    <span class="badge badge-warning font-weight-light">Guide</span>
                                </p>
                                <p class="card-text font-weight-light" style="max-height: 86px; overflow: hidden;">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis officia ullam, id esse rerum eius, eveniet omnis, voluptatem voluptatibus officiis aperiam recusandae aliquam corrupti. Ratione corporis perspiciatis deserunt molestias eligendi fugit delectus voluptas nostrum praesentium veritatis adipisci, eos reiciendis, dolor eveniet temporibus natus distinctio explicabo! Aspernatur consectetur tenetur praesentium at?
                                </p>
                            </div>
                        </div>
                    </div>                
                @endfor
            </div>
        </div>

        <div class="col-lg-4">
            @include('includes.sidepanel')
        </div>
    </div>
</div>
@endsection