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
<meta charset="utf-8">
<meta name="description" content="ヽ( ﾟ ヮﾟ)ﾉ">
<meta name="keywords" content="ヽ( ﾟ ヮﾟ)ﾉ">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-param" content="_token">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<link rel="shortcut icon" href="{{ asset('/favicon.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('/favicon.png') }}" type="image/x-icon">
<link rel="dns-prefetch" href="https://fonts.gstatic.com">
<link href="//fonts.googleapis.com/css?family=Exo+2:300,300italic,200,200italic,400,400italic,500,500italic,600,600italic,700,700italic,900" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>