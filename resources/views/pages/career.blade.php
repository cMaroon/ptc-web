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
@extends('master', ['title' => 'Career'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-header-section rounded-0 mb-4">
                <div class="card-body">
                    <h4 class="card-title mb-0 font-italic">[Career] The Lost Island : Battle Royale needs you!</h4>
                </div>
            </div>
        </div>
        
        <div class="col-md-8">
            <div class="card rounded-0 mb-2">
                <div class="card-body">
                    <p class="card-text">The Lost Island : Battle Royale is currently looking for <span class="text-warning">contributing writers</span> for our guides and <span class="text-warning">designers</span> for website and also the game.</p>
                    <p class="card-text">Interested parties can send us a few original pieces under the requirements below.</p>
                    <p class="card-text">For Contributing Writers:</p>
                    <ol>
                        <li>The work must be an original piece written by you, and it has not been published on other platforms.</li>
                        <li>The article should be above 300 words and should not exceed 3000 words.</li>
                        <li>The article should be a word file.</li>
                        <li>You should format your article in the way you want it to be seen. We do not suggest making it too fancy.</li>
                        <li>You should insert images at where you want it to be in the article with the source cited beneath them. Watermarked images are not recommended.</li>
                        <li>Please also attach the images in the email. Each file should not exceed 1mb.</li>
                        <li>Please send your articles to this email: <a href="mailto:career@lostislandbattleroyale.com">career@lostislandbattleroyale.com</a></li>
                    </ol>
                    <p class="card-text">For Website Designer:</p>
                    <ol>
                        <li>Knows how to use Laravel, SCSS, GitHub is a <strong>must</strong></li>
                        <li>Basic website designing</li>
                        <li>Content management</li>
                        <li>You should know how to work as a team.</li>
                        <li>Please send your sample website designs or portfolio to this email: <a href="mailto:career@lostislandbattleroyale.com">career@lostislandbattleroyale.com</a></li>
                    </ol>
                    <p class="card-text">For Game Designer: Kindly contact our Game Developers for this.</p>
                    <p class="card-text">
                        We will review your articles, designs and contact you via email if you are qualified for being a contributing writer and designer. Details including payment and the form of cooperation will be further discussed. Should you have any questions, please do not hesitate to email us!
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