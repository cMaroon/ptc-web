<?php

/**
 *    Copyright 2018 The Lost Island : Battle Royale.
 *
 *    This file is part of TLIBR Web. TLIBR Web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of The Lost Island : Battle Royale.
 *
 *    TLIBR Web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    TLIBR Web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with TLIBR Web.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace App\Http\Controllers;

use App\Carousel;
use App\Team;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home')->with('images', Carousel::orderBy('sort_order', 'asc')->get());
    }

    public function news()
    {
        return view('pages.news');
    }

    public function newsPost()
    {
        return view('news.post');
    }

    public function team()
    {
        return view('pages.team')->with('employees', Team::orderBy('sort_order', 'asc')->get());
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function privacy()
    {
        return view('pages.privacy');
    }

    public function career()
    {
        return view('pages.career');
    }
}
