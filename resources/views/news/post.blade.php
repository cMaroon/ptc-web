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
@extends('master', ['titlePrepend' => 'News', 'currentSection' => 'Post Title'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-header-section rounded-0 mb-4">
                <img class="card-img-top rounded-0" src="{{ url('/images/sample-data/1.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title mb-0 font-italic">First Look: Karakai Jouzu no Takagi-san</h4>
                </div>
            </div>
        </div>
        
        <div class="col-md-8">
            <div class="card rounded-0 mb-2">
                <div class="card-body">
                    <p class="card-subtitle mb-2">
                        <small class="text-muted" data-toggle="tooltip" data-placement="top" data-html="true" title="<strong>June 6, 2018</strong> 5:00 PM">06 Jun</small>
                        <span class="badge badge-primary font-weight-light">News</span>
                        <span class="badge badge-info font-weight-light">Event</span>
                        <span class="badge badge-warning font-weight-light">Guide</span>
                    </p>
                    <p class="card-text">
                        Two middle school students, Nishikata and Takagi, are clearly in love and demonstrate their affection by playing tricks on each other during class. That’s it.
                    </p>
                    <p class="card-text">
                        If it weren’t for the uniforms, I would have assumed this series was about two students in elementary rather than junior high school, and not just because of the character designs. Nishikata and Takagi are cute enough (I guess, if you like that sort of thing?), but the way they tease one another with the sole intention of making the other person blush puts me in mind more of a 5-year old than students who’ve got to be at least 13. Happily, said teasing never involves anything that could actually be considered bullying or abusive – these mutual pranks (or in Nishikata’s case, only attempted pranks) are tiny, and it’s obvious there’s nothing malicious behind them.
                    </p>
                    <p class="card-text">
                        While I’m more than happy to give the anime points for sticking to such clean, family-friendly fare, there’s no escaping the fact that this premiere is about as boring as it sounds. Each prank has a set-up of what’s probably only about 5 minutes but feels like it takes half an episode, and then the payoff is… Nishikata getting frustrated that the prank didn’t pan out the way he envisioned? Nishikata getting somehow pranked by Takagi instead and being yelled at by the teacher for the umpteenth time? It’s basically like watching Tonari no Seki-kun without any of the actual comedy, and having to sit through 20-odd minute episodes of this instead of 5-minute ones. Maybe Karakai Jouzu no Takagi-san will appeal to a much younger crowd, but it unfortunately does nothing for me.
                    </p>
                    <p class="card-text">
                        A lot of people have compared this to Tonari no Seki-kun and that is probably valid. In this case the characters actually talk to each other and act more like normal kids, so to some extent this feels a bit more predictable and mundane. Even so, I loved it. Aside from the fun of watching Nishikata getting constantly dunked on, their middle school flirting makes me feel nostalgic the way recent cute romance Tsukigakirei did before I started hating it. I suppose I am concerned the thin premise might not hold up over the course of a full length season but I’m guessing this was just a setup episode and Takagi will be rolling out much more elaborate schemes in the future. Sign me up.
                    </p>
                    <p class="card-text">
                        Takagi san isn’t the hardest hitting or most novel anime this season, but it’s got a lot of charm and its two protagonists are delightful to watch interact with each other. Nishikata and Takagi make for great foils, even if it’s mostly just Nishikata getting owned for 22 minutes straight. The teasing itself is pretty tame and within the first 10 minutes you can already tell that Takagi is doing it for both her own amusement as well as a genuine affection for Nishikata, which makes the teasing more cute than mean spirited. I don’t know if the premise has enough meat to it to sustain a full length anime, but I’ll gladly keep watching as long as it keeps it up.
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