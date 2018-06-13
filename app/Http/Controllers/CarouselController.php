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
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public function store(Request $request)
    {   
        $request->validate([
            'carousel_image' => 'required|mimes:jpeg,jpg,png|dimensions:width=900,height=250',
        ]);

        if (Carousel::count() === 0) {
            $sort_order = Carousel::count();
        } else {
            $sort_order = Carousel::orderBy('sort_order', 'desc')->firstOrFail()->sort_order + 1;
        }

        Carousel::create([
            'image'      => Carousel::fileToStore($request->file('carousel_image'), 'carousel'),
            'sort_order' => $sort_order,
        ]);

        return redirect(route('dashboard.carousel'));
    }

    public function update_sortorder(Request $request)
    {
        for ($i = 0; $i < count(explode(',', $request->input('sort_order'))); $i++) {
            Carousel::where('id', explode(',', $request->input('sort_order'))[$i])
                ->update(['sort_order' => $i]);
        }

        return redirect(route('dashboard.carousel'));
    }

    public function destroy($id)
    {
        Carousel::fileToDelete(Carousel::where('id', $id)->firstOrFail()->image, 'carousel');

        Carousel::where('id', $id)
            ->firstOrFail()
            ->delete();

        return redirect(route('dashboard.carousel'));
    }
}
