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
            <div class="card rounded-0 mb-4">
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
                    <table class="table-sm table-team">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mathew Agustin Bella</td>
                                <td>CEO &amp; Project Lead</td>
                            </tr>
                            <tr>
                                <td>Emmanuel See Te</td>
                                <td>COO &amp; Head Web Developer</td>
                            </tr>
                            <tr>
                                <td>Keaton Martin Varlez</td>
                                <td>3D Graphic Artist</td>
                            </tr>
                            <tr>
                                <td>Maven Redillas</td>
                                <td>Developer &amp; Social Media Editor</td>
                            </tr>
                            <tr>
                                <td>Eric John</td>
                                <td>Developer</td>
                            </tr>
                            <tr>
                                <td>Draven Antonio</td>
                                <td>Developer</td>
                            </tr>
                            <tr>
                                <td>Keith Lundberg Salandanan</td>
                                <td>Developer &amp; Social Media Editor</td>
                            </tr>
                            <tr>
                                <td>Teruhide Nillos</td>
                                <td>Developer &amp; Social Media Editor</td>
                            </tr>
                            <tr>
                                <td>Mark Joshua Fulmentera</td>
                                <td>Developer &amp; Social Media Editor</td>
                            </tr>
                            <tr>
                                <td>Kristian See Te</td>
                                <td>Developer &amp; Social Media Editor</td>
                            </tr>
                            <tr>
                                <td>Maverick Fernando</td>
                                <td>Developer</td>
                            </tr>
                            <tr>
                                <td>Gianne Mauricio</td>
                                <td>Head Manager &amp; Social Media Administrator</td>
                            </tr>
                            <tr>
                                <td>Roy Gonowon</td>
                                <td>Business Manager &amp; Social Media Moderator</td>
                            </tr>
                            <tr>
                                <td>Royce Sy</td>
                                <td>Web Partner &amp; Social Media Moderator</td>
                            </tr>
                            <tr>
                                <td>Carlo James Escaño</td>
                                <td>Manager &amp; Quality Assurance &amp; Social Media Editor</td>
                            </tr>
                            <tr>
                                <td>Thennek Broksnaer</td>
                                <td>Manager &amp; Quality Assurance &amp; Social Media Editor</td>
                            </tr>
                            <tr>
                                <td>Christian Baranda</td>
                                <td>Manager &amp; Social Media Editor</td>
                            </tr>
                            <tr>
                                <td>Joef Ares</td>
                                <td>Manager &amp; Social Media Moderator</td>
                            </tr>
                            <tr>
                                <td>Dan Angelo Corporal</td>
                                <td>Manager &amp; Social Media Moderator</td>
                            </tr>
                            <tr>
                                <td>Emmanuel Perea</td>
                                <td>Manager &amp; Social Media Moderator</td>
                            </tr>
                            <tr>
                                <td>Mark Devs</td>
                                <td>Manager</td>
                            </tr>
                            <tr>
                                <td>Elmer Roque Maninang</td>
                                <td>Manager &amp; Social Media Editor</td>
                            </tr>
                            <tr>
                                <td>Justine Jaymes Claudio</td>
                                <td>Manager &amp; Social Media Editor</td>
                            </tr>
                            <tr>
                                <td>John Louie Hernandez</td>
                                <td>Manager &amp; Social Media Moderator</td>
                            </tr>
                            <tr>
                                <td>Charles Darwin Deluao</td>
                                <td>Social Media Editor</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            @include('includes.sidepanel')
        </div>
    </div>
</div>
@endsection