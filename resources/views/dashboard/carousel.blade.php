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

@extends('master', ['titlePrepend' => 'Dashboard', 'currentSection' => 'Carousel'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            @include('includes.dashboard_sidepanel')
        </div>

        <div class="col-lg-9">
            <div class="card rounded-0">
                <div class="card-body">
                    <div class="alert alert-primary text-white font-italic font-weight-light">Image size must be exactly 900 x 250 px</div>

                    <a href="#" class="btn btn-primary mb-2">Save Sort Order</a>

                    <div id="ui-sortable">
                        <img class="tlibr-shadow d-block w-100 rounded-0 mb-2" src="{{ url('/images/sample-data/1.jpg') }}">
                        <img class="tlibr-shadow d-block w-100 rounded-0 mb-2" src="{{ url('/images/sample-data/2.jpg') }}">
                        <img class="tlibr-shadow d-block w-100 rounded-0 mb-2" src="{{ url('/images/sample-data/3.jpg') }}">
                        <img class="tlibr-shadow d-block w-100 rounded-0 mb-2" src="{{ url('/images/sample-data/4.jpg') }}">
                        <img class="tlibr-shadow d-block w-100 rounded-0 mb-2" src="{{ url('/images/sample-data/5.jpg') }}">
                        <img class="tlibr-shadow d-block w-100 rounded-0 mb-2" src="{{ url('/images/sample-data/6.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
$(window).ready(function() {
    $("#ui-sortable img").css( "max-width", $( "#ui-sortable img" ).width() + "px" );
    $("#ui-sortable").sortable();
    $("#ui-sortable").disableSelection();
});
</script>
@endsection