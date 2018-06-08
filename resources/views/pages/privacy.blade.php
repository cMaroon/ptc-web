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
@extends('master', ['title' => 'Privacy Policy'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-header-section rounded-0 mb-4">
                <div class="card-body">
                    <h4 class="card-title mb-0 font-italic">Privacy Policy</h4>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card rounded-0 mb-2">
                <div class="card-body">
                    <p class="card-text font-weight-bold">INTRODUCTION</p>
                    <p class="card-text font-weight-normal">
                        This privacy policy informs you of your choices and our practices regarding any personal information you provide to us. Your use of the mobile game (“Game”) and website for the Game (“Community Website”) distributed by The Lost Island : Battle Royale (“we” or “us”) involves the collection and use of your personal information. It is important for you to understand how this happens and how you may control it.
                    </p>
                    <p class="card-text font-weight-normal">
                        When you contract to use the Game or use the Community Website (the “Game Services” or “Services”), you accept our rules and policies regarding your personal information and you expressly consent to us collecting, processing, using and storing your personal information, as described in this policy.
                    </p>
                    <p class="card-text font-weight-normal">
                        You acknowledge that you have read and understood this privacy policy. If you do not agree with this privacy policy, you must not use the Game Services. If you change your mind in the future, you may withdraw your consent to use of your personal information in accordance with this policy.
                    </p>
                    <p class="card-text font-weight-normal">
                        and so on...
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            @include('includes.sidepanel')
        </div>
    </div>
</div>
@endsection