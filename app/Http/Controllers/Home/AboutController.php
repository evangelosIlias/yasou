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
            $about = About::latest()->first();
        } else {
            // Retrieve the specific record by ID
            $about = About::find($id);
        }

        return view('admin.home_about.home_about_all', compact('about'));
    }
}
