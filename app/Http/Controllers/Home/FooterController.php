<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Footer;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;


class FooterController extends Controller
{
    public function homeFooter($id = null)
    {
        if ($id === null) {
            // If no ID is provided, retrieve the latest record
            $homeFooter = Footer::latest()->first();
        } else {
            // Retrieve the specific record by ID
            $homeFooter = Footer::find($id);
        }

        return view('admin.home_footer.footer', compact('homeFooter'));
    }

    // Update the footer 
    public function updateFooter(Request $request) {

        $updateFooter = $request->id;

        $request->validate([
            'footer_number' => 'required',
            'footer_address' => 'required',
            'footer_email' => 'required',
            'footer_copyright' => 'required',      
        ], 
        [   
            'footer_number.required' => 'Footer number must be provided',
            'footer_address.required' => 'Footer address must be provided',
            'footer_email.required' => 'Footer email must be provided',
            'footer_copyright.required' => 'Footer copyright must be provided',
            
        ]);

        Footer::findOrFail($updateFooter)->update(
            [
            'footer_number' => $request->footer_number,
            'footer_short_description' => $request->footer_short_description,
            'footer_address' => $request->footer_address,
            'footer_email' => $request->footer_email,
            'footer_linkedin' => $request->footer_linkedin,
            'footer_copyright' => $request->footer_copyright,
        ]);

        $not_succ = [
            'message' => 'Home Footer Updated Successfully',
            'alert-type' => 'success',
        ];
        
        return redirect()->back()->with($not_succ);

        }

    }

