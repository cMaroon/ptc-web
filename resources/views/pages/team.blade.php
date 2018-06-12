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
@extends('master', ['title' => 'Our Team'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-header-section rounded-0 mb-4">
                <div class="card-body">
                    <h4 class="card-title mb-0 font-italic">Our Team</h4>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card rounded-0 mb-2">
                <div class="card-body">
                    <p class="card-text">The people listed below are the core of the team, and are chiefly responsible for helping make the game awesome for everyone.</p>
                    <p class="card-text">Our members of different personalities are characteristic and extraordinary in their own ways.</p>
                    @if (count($employees) > 0)
                    <table class="table-sm table-team">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                                <tr>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->description }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            @include('includes.sidepanel')
        </div>
    </div>
</div>
@endsection