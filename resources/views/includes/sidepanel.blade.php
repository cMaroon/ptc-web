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
{{-- <div class="mb-4">
    <div class="card mb-2">
        <div class="card-body">
            <h4 class="card-title mb-0 font-italic">Sign In To Proceed</h4>
        </div>
    </div>

    <div class="card mb-2">
        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">remember me</label>
                </div>
                <div class="form-group mb-0">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                    <a href="" class="btn btn-secondary">reset password</a>
                </div>
            </form>
        </div>
    </div>
</div> --}}

<div class="mb-4">
    <div class="card card-header-section rounded-0 mb-2">
        <div class="card-body">
            <h4 class="card-title mb-0 font-italic">Download</h4>
        </div>
    </div>

    <div class="card rounded-0 mb-2">
        <div class="card-body">
            <p class="card-text">
                Let's get you started! <a href="#">Download</a>
            </p>
        </div>
    </div>
</div>

<div class="mb-4">
    <div class="card card-header-section rounded-0 mb-2">
        <div class="card-body">
            <h4 class="card-title mb-0 font-italic">Event Banners</h4>
        </div>
    </div>

    {{-- Sidepanel Image must be 900 x 250 --}}
    {{-- Event Banners will be based on Event Tag --}}
    @for ($i = 1; $i <= 3; $i++)
        @php
            $image = '/images/sample-data/' . $i . '.jpg';
        @endphp
        <a href="/news/post">
            <img class="tlibr-shadow d-block w-100 rounded-0 mb-2" src="{{ url($image) }}">
        </a>
    @endfor
</div>

<div class="mb-4">
    <div class="card card-header-section rounded-0 mb-2">
        <div class="card-body">
            <h4 class="card-title mb-0 font-italic">Partners</h4>
        </div>
    </div>

    <div class="card rounded-0 mb-2">
        <div class="card-body">
            {{-- partner lists --}}
        </div>
    </div>
</div>

<div class="mb-4 text-center">
    <a href="{{ route('privacy') }}" class="btn btn-link btn-sm font-weight-light">privacy</a>
    <a href="https://github.com/Twiistrz/tlibr-web/" target="_blank" class="btn btn-link btn-sm font-weight-light">source code</a>
    <a href="{{ route('career') }}" class="btn btn-link btn-sm font-weight-light">career</a>
    <small class="text-muted font-weight-light">
        <p>The Lost Island : Battle Royale &copy; 2018</p>
    </small>
</div>