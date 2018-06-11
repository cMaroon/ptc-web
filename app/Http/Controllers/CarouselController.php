<?php

namespace App\Http\Controllers;

use App\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarouselController extends Controller
{
    public function store(Request $request)
    {
        $carousel = new Carousel();
        $this->validate($request, [
            'carousel_image' => 'required|mimes:jpeg,jpg,png|dimensions:width=900,height=250',
        ]);

        $fileNameWithExt = $request->file('carousel_image')->getClientOriginalName();
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $fileExt = $request->file('carousel_image')->getClientOriginalExtension();
        $fileNameToStore = md5($fileName.time()).'.'.$fileExt;
        $path = $request->file('carousel_image')->storeAs('public/carousel', $fileNameToStore);

        $carousel->image = $fileNameToStore;
        $carousel->sort_order = Carousel::count();
        $carousel->save();

        return redirect(route('dashboard.carousel'));
    }

    public function update_sortorder(Request $request)
    {
        $arrID = explode(',', $request->input('sort_order'));
        for ($i = 0; $i < count($arrID); $i++) {
            Carousel::where('id', $arrID[$i])->update(['sort_order' => $i]);
        }

        return redirect(route('dashboard.carousel'));
    }

    public function destroy($image_id)
    {
        $carousel = new Carousel();
        $carousel = Carousel::where('id', $image_id)->first();

        if (!empty($carousel->image)) {
            Storage::delete('public/carousel/'.$carousel->image);
        }

        $carousel->delete();

        return redirect(route('dashboard.carousel'));
    }
}
