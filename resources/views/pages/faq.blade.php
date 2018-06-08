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
@extends('master', ['title' => 'Frequently Asked Question'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-header-section rounded-0 mb-4">
                <div class="card-body">
                    <h4 class="card-title mb-0 font-italic">Frequently Asked Question</h4>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card rounded-0 mb-2">
                <div class="card-body">
                    <p class="card-text font-weight-normal text-primary">
                        <strong>Question:</strong> Will "The Lost Island : Battle Royale" free-to-play? If so, why?
                    </p>
                    <p class="card-text font-weight-normal">
                        <strong>Answer:</strong> The game will be released as free-to-play. We understand that the accessibility to a game tends to get more difficult as its playing price gets higher. And since our goal is to promote and share our game to as many players as possible, it being free-to-play would be the best way to reach it. If you really like to support our game, you could promote it to your friends or you could send resources through our <a href="https://www.paypal.me/NCMC" target="_blank">PayPal</a>  
                    </p>
                </div>
            </div>

            <div class="card rounded-0 mb-2">
                <div class="card-body">
                    <p class="card-text font-weight-normal text-primary">
                        <strong>Question:</strong> Will character customization be available in-game? If so, what features would we be able to customize?
                    </p>
                    <p class="card-text font-weight-normal">
                        <strong>Answer:</strong> As we have promised, character customization would be included in the game for free. Initially, you will be able to change your character's gender, body type, skin color, eyes and eye color, as well as clothing. More features will be added upon further development of the game. We will try to include daily and weekly rewards in order to give you resources (clothes, in-game money, and more) so that you could customize your character however you want.
                    </p>
                </div>
            </div>

            <div class="card rounded-0 mb-2">
                <div class="card-body">
                    <p class="card-text font-weight-normal text-primary">
                        <strong>Question:</strong> Will vehicles be available in-game?
                    </p>
                    <p class="card-text font-weight-normal">
                        <strong>Answer:</strong> Yes! Vehicles will be included in the game. Players would be able to use different vehicles in order to quickly move around the Lost Island, ranging from bicycles to small trucks to war tanks! You've heard it right. War Tanks.
                    </p>
                </div>
            </div>

            <div class="card rounded-0 mb-2">
                <div class="card-body">
                    <p class="card-text font-weight-normal text-primary">
                        <strong>Question:</strong> How do i donate and support TLIBR?
                    </p>
                    <p class="card-text font-weight-normal">
                        <strong>Answer:</strong> You can donate by using paymaya and paypal. Instructions on how to donate via <a href="https://paymaya.com/addmoney-channels/" target="_blank">Paymaya</a>
                        <ul>
                            <li><a href="https://www.paypal.me/NCMC" target="_blank">PayPal</a></li>
                            <li>Paymaya Account Number: 09093902913</li>
                        </ul>
                    </p>
                </div>
            </div>
            
            <div class="card rounded-0 mb-2">
                <div class="card-body">
                    <p class="card-text font-weight-normal text-primary">
                        <strong>Suggestion:</strong> Could you include the Philippine Map or add different Philippine Landmarks?
                    </p>
                    <p class="card-text font-weight-normal">
                        <strong>Answer:</strong> Unfortunately, adding aspects of a certain country or nationality in the map would be different from the game's overall theme. Maybe upon further development, we could add them as part of special events.
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