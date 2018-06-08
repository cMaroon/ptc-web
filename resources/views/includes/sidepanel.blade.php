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
{{-- Signin will be disabled for public --}}
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
    <div class="card rounded-0 mb-2">
        <div class="card-body">
            <h4 class="card-title mb-0 font-italic">Download</h4>
        </div>
    </div>

    <div class="card rounded-0 mb-2">
        <div class="card-body">
            <p class="card-text">
                Let's get you started! <a href="#">Download at Steam</a>
            </p>
        </div>
    </div>
</div>

<div class="mb-4">
    <div class="card rounded-0 mb-2">
        <div class="card-body">
            <h4 class="card-title mb-0 font-italic">Event Banners</h4>
        </div>
    </div>

    {{-- Sidepanel Image must be 900 x 250 --}}
    <a href="#">
        <img class="tlibr-shadow d-block w-100 rounded-0 mb-2" src="http://img5.fotos-hochladen.net/uploads/tohsakasignatur1pts5xgo8.png">
    </a>

    <a href="#">
        <img class="tlibr-shadow d-block w-100 rounded-0 mb-2" src="https://img00.deviantart.net/ba12/i/2012/003/9/0/vongola_family_chibi_by_romancesakura-d4l7b1d.jpg">
    </a>

    <a href="#">
        <img class="tlibr-shadow d-block w-100 rounded-0 mb-2" src="https://www.vocaloidnews.net/wp-content/uploads/2017/09/mikukorabogacha2017.jpg">
    </a>

    <a href="#">
        <img class="tlibr-shadow d-block w-100 rounded-0 mb-2" src="http://4.bp.blogspot.com/-3RECY55_Of4/VJ4-xgs8BqI/AAAAAAAAA8I/G4PROgyjxWY/s1600/Miku%2BMiku.jpeg">
    </a>

    <a href="#">
        <img class="tlibr-shadow d-block w-100 rounded-0 mb-2" src="https://assets.ppy.sh//beatmaps/687943/covers/cover.jpg">
    </a>
</div>

<div class="mb-4">
    <div class="card rounded-0 mb-2">
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