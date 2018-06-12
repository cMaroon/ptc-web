<?php

namespace App\Http\Controllers;

use App\Carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(['carousel_image' => 'required|mimes:jpeg,jpg,png|dimensions:width=900,height=250']);

        Carousel::create([
            'image'      => Carousel::fileToStore($request->file('carousel_image'), 'carousel'),
            'sort_order' => Carousel::count(),
        ]);

        return redirect(route('dashboard.carousel'));
    }

    public function update_sortorder(Request $request)
    {
        $arrID = explode(',', $request->input('sort_order'));
        for ($i = 0; $i < count($arrID); $i++) {
            Carousel::where(['id' => $arrID[$i]])->firstOrFail()->update(['sort_order' => $i]);
        }

        return redirect(route('dashboard.carousel'));
    }

    public function destroy($id)
    {
        Carousel::fileToDelete(Carousel::where(['id' => $id])->firstOrFail()->image, 'carousel');
        Carousel::where(['id' => $id])->firstOrFail()->delete();

        return redirect(route('dashboard.carousel'));
    }
}
