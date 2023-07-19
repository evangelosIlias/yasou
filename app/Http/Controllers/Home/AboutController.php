<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Intervention\Image\Facades\Image;


class AboutController extends Controller
{
    public function homeAbout($id = null)
    {
        if ($id === null) {
            // If no ID is provided, retrieve the latest record
            $homeabout = About::latest()->first();
        } else {
            // Retrieve the specific record by ID
            $homeabout = About::find($id);
        }

        return view('admin.home_about.home_about_all', compact('homeabout'));
    }

    public function updateAbout(Request $request)
    {
        // dd('Inside updateSlide method');
        $about_id = $request->id;

        if ($request->file('about_image')) {
            $image = $request->file('about_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize(636, 692)->save('upload/home_about/' . $name_gen);

            $save_url = 'upload/home_about/' . $name_gen;

            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
                'about_image' => $save_url,
            ]);

            $not_succ = [
                'message' => 'Home About and Image banner Updated Successfully',
                'alert-type' => 'success',
            ];
            
            return redirect()->back()->with($not_succ);

        } else { 
            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
            ]);

            $not_info = [
                'message' => 'Home Slide without Image Banner Updated Successfully',
                'alert-type' => 'info',
            ];
            
            return redirect()->back()->with($not_info);
        }
    }

    public function about(){
        $about_page = About::latest()->first();
        return view('frontend.about_page', compact('about_page'));
    }

    public function aboutMultiImage() {
        return view('admin.home_about.multi_image');
    }
}
