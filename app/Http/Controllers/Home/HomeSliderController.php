<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlide;
use Intervention\Image\Facades\Image;

class HomeSliderController extends Controller
{
    public function homeSlide($slide_id = null)
    {
        if ($slide_id === null) {
            // If no ID is provided, retrieve the latest record
            $homeslide = HomeSlide::latest()->first();
        } else {
            // Retrieve the specific record by ID
            $homeslide = HomeSlide::find($slide_id);
        }

        return view('admin.home_slide.home_slide_all', compact('homeslide'));
    }

    public function updateSlide(Request $request)
    {
        $check_id = $request->slide_id;

        if ($request->file('home_image')) {
            $image = $request->file('home_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize(636, 852)->save('upload/home_slide/' . $name_gen);

            $save_url = 'upload/home_slide/' . $name_gen;

            HomeSlide::findOrFail($check_id)->update([

            ]);

        } else {

        }

    }

}
