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
@if (count($images) > 0)
    <div id="carouselMain" class="carousel slide mb-4" data-ride="carousel">
        <div class="carousel-inner rounded-0 carousel-main">
            {{-- Carousel Image Size 900 x 250 --}}
            @php $i = 1; @endphp
            @foreach ($images as $carousel)
                <div class="carousel-item{{ $i==1 ? ' active' : '' }}">
                    <img class="d-block w-100" src="{{ url('/storage/carousel/' . $carousel->image) }}">
                </div>
                @php $i++; @endphp
            @endforeach
        </div>
        @if (count($images) > 1)
            <a class="tlibr-carousel-control carousel-control-prev" href="#carouselMain" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="tlibr-carousel-control carousel-control-next" href="#carouselMain" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        @endif
    </div>
@endif
