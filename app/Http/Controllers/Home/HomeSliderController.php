<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlide;
use Intervention\Image\Facades\Image;


class HomeSliderController extends Controller
{
    public function homeSlide($id = null)
    {
        if ($id === null) {
            // If no ID is provided, retrieve the latest record
            $homeslide = HomeSlide::latest()->first();
        } else {
            // Retrieve the specific record by ID
            $homeslide = HomeSlide::find($id);
        }

        return view('admin.home_slide.home_slide_all', compact('homeslide'));
    }


    public function updateSlide(Request $request)
    {
        // dd('Inside updateSlide method');
        $slide_id = $request->id;

        if ($request->file('home_image')) {
            $image = $request->file('home_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize(636, 692)->save('upload/home_slide/' . $name_gen);

            $save_url = 'upload/home_slide/' . $name_gen;

            HomeSlide::firstOrCreate(['id' => $slide_id])->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'video_url' => $request->video_url,
                'home_image' => $save_url,

            ]);

            $not_succ = [
                'message' => 'Home Slide and Image banner Updated Successfully',
                'alert-type' => 'success',
            ];
            
            return redirect()->back()->with($not_succ);

        } else { 

            HomeSlide::firstOrCreate(['id' => $slide_id])->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'video_url' => $request->video_url,
            ]);

            $not_info = [
                'message' => 'Home Slide without Image Banner Updated Successfully',
                'alert-type' => 'info',
            ];
            
            return redirect()->back()->with($not_info);
        }
    }

}
