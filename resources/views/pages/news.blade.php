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

        <div class="col-md-8">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-hover rounded-0 mb-2">
                        <img class="card-img-top rounded-0" src="{{ url('/images/sample-data/1.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title mb-1 font-weight-light">
                                <a href="/news/post">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta cumque velit mollitia repellendus at labore iste doloremque numquam modi rerum?</a>
                            </h5>
                            <p class="card-subtitle mb-2 text-muted"><small data-toggle="tooltip" data-placement="top" data-html="true" title="<strong>June 6, 2018</strong> 5:00 PM">06 Jun</small></p>
                            <p class="card-text font-weight-light" style="max-height: 86px; overflow: hidden;">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis officia ullam, id esse rerum eius, eveniet omnis, voluptatem voluptatibus officiis aperiam recusandae aliquam corrupti. Ratione corporis perspiciatis deserunt molestias eligendi fugit delectus voluptas nostrum praesentium veritatis adipisci, eos reiciendis, dolor eveniet temporibus natus distinctio explicabo! Aspernatur consectetur tenetur praesentium at?
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card card-hover rounded-0 mb-2">
                        <img class="card-img-top rounded-0" src="{{ url('/images/sample-data/2.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title mb-1 font-weight-light">
                                <a href="/news/post">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ea nam laboriosam vero eos nisi expedita molestias ducimus numquam totam?</a>
                            </h5>
                            <p class="card-subtitle mb-2 text-muted"><small data-toggle="tooltip" data-placement="top" data-html="true" title="<strong>June 6, 2018</strong> 5:00 PM">06 Jun</small></p>
                            <p class="card-text font-weight-light" style="max-height: 86px; overflow: hidden;">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis officia ullam, id esse rerum eius, eveniet omnis, voluptatem voluptatibus officiis aperiam recusandae aliquam corrupti. Ratione corporis perspiciatis deserunt molestias eligendi fugit delectus voluptas nostrum praesentium veritatis adipisci, eos reiciendis, dolor eveniet temporibus natus distinctio explicabo! Aspernatur consectetur tenetur praesentium at?
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card card-hover rounded-0 mb-2">
                        <img class="card-img-top rounded-0" src="{{ url('/images/sample-data/3.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title mb-1 font-weight-light">
                                <a href="/news/post">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum tenetur autem quo, iste officia in iusto officiis ut quis quas!</a>
                            </h5>
                            <p class="card-subtitle mb-2 text-muted"><small data-toggle="tooltip" data-placement="top" data-html="true" title="<strong>June 6, 2018</strong> 5:00 PM">06 Jun</small></p>
                            <p class="card-text font-weight-light" style="max-height: 86px; overflow: hidden;">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis officia ullam, id esse rerum eius, eveniet omnis, voluptatem voluptatibus officiis aperiam recusandae aliquam corrupti. Ratione corporis perspiciatis deserunt molestias eligendi fugit delectus voluptas nostrum praesentium veritatis adipisci, eos reiciendis, dolor eveniet temporibus natus distinctio explicabo! Aspernatur consectetur tenetur praesentium at?
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card card-hover rounded-0 mb-2">
                        <img class="card-img-top rounded-0" src="{{ url('/images/sample-data/4.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title mb-1 font-weight-light">
                                <a href="/news/post">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus itaque in repellat deserunt ut quia maiores? Debitis cupiditate dignissimos voluptate.</a>
                            </h5>
                            <p class="card-subtitle mb-2 text-muted"><small data-toggle="tooltip" data-placement="top" data-html="true" title="<strong>June 6, 2018</strong> 5:00 PM">06 Jun</small></p>
                            <p class="card-text font-weight-light" style="max-height: 86px; overflow: hidden;">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis officia ullam, id esse rerum eius, eveniet omnis, voluptatem voluptatibus officiis aperiam recusandae aliquam corrupti. Ratione corporis perspiciatis deserunt molestias eligendi fugit delectus voluptas nostrum praesentium veritatis adipisci, eos reiciendis, dolor eveniet temporibus natus distinctio explicabo! Aspernatur consectetur tenetur praesentium at?
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card card-hover rounded-0 mb-2">
                        <img class="card-img-top rounded-0" src="{{ url('/images/sample-data/5.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title mb-1 font-weight-light">
                                <a href="/news/post">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores, temporibus voluptatum vel perspiciatis vitae qui explicabo sequi. Sunt, distinctio cupiditate.</a>
                            </h5>
                            <p class="card-subtitle mb-2 text-muted"><small data-toggle="tooltip" data-placement="top" data-html="true" title="<strong>June 6, 2018</strong> 5:00 PM">06 Jun</small></p>
                            <p class="card-text font-weight-light" style="max-height: 86px; overflow: hidden;">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis officia ullam, id esse rerum eius, eveniet omnis, voluptatem voluptatibus officiis aperiam recusandae aliquam corrupti. Ratione corporis perspiciatis deserunt molestias eligendi fugit delectus voluptas nostrum praesentium veritatis adipisci, eos reiciendis, dolor eveniet temporibus natus distinctio explicabo! Aspernatur consectetur tenetur praesentium at?
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card card-hover rounded-0 mb-2">
                        <img class="card-img-top rounded-0" src="{{ url('/images/sample-data/6.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title mb-1 font-weight-light">
                                <a href="/news/post">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos rem nulla saepe illum aperiam deleniti accusamus quas illo atque sed?</a>
                            </h5>
                            <p class="card-subtitle mb-2 text-muted"><small data-toggle="tooltip" data-placement="top" data-html="true" title="<strong>June 6, 2018</strong> 5:00 PM">06 Jun</small></p>
                            <p class="card-text font-weight-light" style="max-height: 86px; overflow: hidden;">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis officia ullam, id esse rerum eius, eveniet omnis, voluptatem voluptatibus officiis aperiam recusandae aliquam corrupti. Ratione corporis perspiciatis deserunt molestias eligendi fugit delectus voluptas nostrum praesentium veritatis adipisci, eos reiciendis, dolor eveniet temporibus natus distinctio explicabo! Aspernatur consectetur tenetur praesentium at?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            @include('includes.sidepanel')
        </div>
    </div>
</div>
@endsection