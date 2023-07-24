<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\MultiImage;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Response;


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

    // Updating the about method and images
    public function updateAbout(Request $request)
    {
        $about_id = $request->id;

        if ($request->file('about_image')) {
            $image = $request->file('about_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize(636, 692)->save('upload/home_about/' . $name_gen);

            $save_url = 'upload/home_about/' . $name_gen;

            // Find or fail the About model
            About::findOrFail($about_id)->update(
                [
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
            // Find or fail the About model
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

    // Returning the view of about page
    public function about(){
        $about_page = About::latest()->first();
        return view('frontend.about_page', compact('about_page'));
    }

    // Returning the view of multi images
    public function aboutMultiImage() {
        return view('admin.home_about.multi_image');
    }

    // Creeating the multi image method
    public function storeMutliImage(Request $request)
    {
        $images = $request->file('mutli_image');

        foreach ($images as $image) {
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

        Image::make($image)->resize(220, 220)->save('upload/multi_images_loc/' . $name_gen);

        $save_url = 'upload/multi_images_loc/' . $name_gen;

        $multiImage = new MultiImage();
        $multiImage->multi_image = $save_url;
        $multiImage->save();
        } // End foreach

        $not_succ = [
            'message' => 'Multi Image Inserted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->route('all.multi.image')->with($not_succ);
    }
    
    public function allMultiImage() {
        $allMutliImage = MultiImage::all();
        return view('admin.home_about.all_multi_image', compact('allMutliImage'));

    }

     // Edit the mutli image
     public function editMultiImage($id){
        $editMultiImage = MultiImage::findOrFail($id);
        return view('admin.home_about.edit_multi_image', compact('editMultiImage'));
        
    }

    // Update the multi images into database
    public function updateMultiImage(Request $request) {

        $updateMultiImage = $request->id;
    
        if ($request->file('multi_image')) {
            $image = $request->file('multi_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
    
            Image::make($image)->resize(220, 220)->save('upload/multi_images_loc/' . $name_gen);
    
            $save_url = 'upload/multi_images_loc/' . $name_gen;
    
            MultiImage::findOrFail($updateMultiImage)->update([
                'multi_image' => $save_url,
                'updated_at' => Carbon::now()
            ]);
    
            $not_succ = [
                'message' => 'Home About and Image banner Updated Successfully',
                'alert-type' => 'success',
            ];
    
            return redirect()->route('all.multi.image')->with($not_succ);
    
        } else { 
            $not_error = [
                'message' => 'Failed to upload image',
                'alert-type' => 'error',
            ];
    
            return redirect()->route('all.multi.image')->with($not_error);
        }
    
    }

    // Delete the uploaded image
    public function deleteMultiImage($id) {

        $multi = MultiImage::findOrFail($id);
        $img = $multi->multi_image;
        unlink($img);

        MultiImage::findOrFail($id)->delete();

        $not_succ = [
            'message' => 'Image Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($not_succ);

    }


    public function homeResume($id = null) {
        if ($id === null) {
            // If no ID is provided, retrieve the latest record
            $homeResume = About::latest()->first();
        } else {
            // Retrieve the specific record by ID
            $homeResume = About::find($id);
        }

        return view('admin.home_about.home_resume', compact('homeResume'));

    }

    // Store the resume into database 
    public function storeResume(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'about_resume' => 'required|mimes:pdf|max:2048', // Adjust the maximum file size (in kilobytes) as needed
        ]);

        // Handle file upload
        $file = $request->file('about_resume');
        $fileName = time() . '_' . $file->getClientOriginalName();

        // Move the file to the public disk (storage/app/public/resume)
        $filePath = $file->storeAs('resume', $fileName, 'public');

        // Update the database with the file name or path
        $downloadResume = About::findOrFail($request->id); // Fetch the specific about record based on the 'id' in the request
        $downloadResume->about_resume = $filePath; // Store the file path in the 'about_resume' column
        $downloadResume->save();

        $not_succ = [
            'message' => 'Home Resume Updated Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($not_succ);
    }


}








 
  

    
    