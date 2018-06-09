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

@extends('master', ['titlePrepend' => 'Dashboard', 'currentSection' => 'Pages'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            @include('includes.dashboard_sidepanel')
        </div>

        <div class="col-lg-9">
            <div class="card rounded-0">
                <div class="card-body">#pages</div>
            </div>
        </div>
    </div>
</div>
@endsection