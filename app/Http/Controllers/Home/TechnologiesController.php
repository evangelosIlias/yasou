<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Technologies;
use App\Models\TechMutliImage;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class TechnologiesController extends Controller
{   
    // Return view Home Technologies
    public function homeTechnologies($id = null)
    {
        if ($id === null) {
            // If no ID is provided, retrieve the latest record
            $homeTechnologies = Technologies::latest()->first();
        } else {
            // Retrieve the specific record by ID
            $homeTechnologies = Technologies::find($id);
        }

        return view('admin.home_technologies.home_technologies_all', compact('homeTechnologies'));
    }

    // Update the technologies database
    public function updateTechnologies(Request $request) {

        $updateTechnologies = $request->id;

        if ($request->file('tech_image')) {
            $image = $request->file('tech_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize(850, 430)->save('upload/home_technologies/' . $name_gen);

            $save_url = 'upload/home_technologies/' . $name_gen;

            // Find or fail the About model
            Technologies::findOrFail($updateTechnologies)->update(
                [
                    'tech_title' => $request->tech_title,
                    'tech_short_title' => $request->tech_short_title,
                    'tech_short_description' => $request->tech_short_description,
                    'tech_long_description' => $request->tech_long_description,
                    'tech_image' => $save_url,
                ]);

            $not_succ = [
                'message' => 'Home Technologies and Image banner Updated Successfully',
                'alert-type' => 'success',
            ];
            
            return redirect()->back()->with($not_succ);

        } else { 
            // Find or fail the About model
            Technologies::findOrFail($updateTechnologies)->update(
            [
                'tech_title' => $request->tech_title,
                'tech_short_title' => $request->tech_short_title,
                'tech_short_description' => $request->tech_short_description,
                'tech_long_description' => $request->tech_long_description,
            ]);

            $not_info = [
                'message' => 'Home Technologies without Image Banner Updated Successfully',
                'alert-type' => 'info',
            ];
            
            return redirect()->back()->with($not_info);
        }
    }

    // Return the view of technologiesMultiImage
    public function technologiesMultiImage() {
        return view('admin.home_technologies.tech_multi_image');
    }

    // Store mutli iamges
    public function storeTechMutliImage(Request $request) {

        $images = $request->file('tech_multi_image');

        foreach ($images as $image) {
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

        Image::make($image)->resize(220, 220)->save('upload/tech_multi_images/' . $name_gen);

        $save_url = 'upload/tech_multi_images/' . $name_gen;

        $techMultiImage = new TechMutliImage();
        $techMultiImage->tech_multi_image = $save_url;
        $techMultiImage->save();
        } // End foreach

        $not_succ = [
            'message' => 'Tech Multi Image Inserted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->route('all.tech.multi.image')->with($not_succ);
    }

    // Return all the tech multi images
    public function allTechMultiImage(){
        $allTechMultiImage = TechMutliImage::all();
        return view('admin.home_technologies.all_tech_multi_image', compact('allTechMultiImage'));
    }

    // Edit the tech multi images
    public function editTechMultiImage($id) {
        $editTechMultiImage = TechMutliImage::findOrFail($id);
        return view('admin.home_technologies.edit_tech_multi_image', compact('editTechMultiImage'));
    }

    // Update the tech multi images
    public function updateTechMultiImage(Request $request) {
        $updateTechMultiImage = $request->id;
    
        if ($request->file('tech_multi_image')) {
            $image = $request->file('tech_multi_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
    
            Image::make($image)->resize(220, 220)->save('upload/tech_multi_images/' . $name_gen);
    
            $save_url = 'upload/tech_multi_images/' . $name_gen;
    
            TechMutliImage::findOrFail($updateTechMultiImage)->update([
                'tech_multi_image' => $save_url,
                'updated_at' => Carbon::now()
            ]);
    
            $not_succ = [
                'message' => 'Tech Multi Image Updated Successfully',
                'alert-type' => 'success',
            ];
    
            return redirect()->route('all.tech.multi.image')->with($not_succ);
    
        } else { 
            $not_error = [
                'message' => 'Failed to upload image',
                'alert-type' => 'error',
            ];
    
            return redirect()->route('all.tech.multi.image')->with($not_error);
        }
    }

    // Delete tech mutli image
    public function deleteTechMultiImage($id) {

        $multi = TechMutliImage::findOrFail($id);
        $img = $multi->tech_multi_image;
        unlink($img);

        TechMutliImage::findOrFail($id)->delete();

        $not_succ = [
            'message' => 'Image Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($not_succ);
    }

    // Return the view in frontend for technologies page
    public function technologies() {
        $technologies_page = Technologies::latest()->first();
        $techMultiImage = TechMutliImage::all();
        return view('frontend.technologies_page', compact('technologies_page', 'techMultiImage'));
    }
       
}
