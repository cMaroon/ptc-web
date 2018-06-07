@extends('master', ['title' => 'Privacy Policy'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title mb-0 font-italic">Privacy Policy</h4>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card mb-2">
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