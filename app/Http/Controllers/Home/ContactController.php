<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Footer;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class ContactController extends Controller
{
    public function contactPage() {
        $footer = Footer::firstOrFail();
        return view('frontend.contact_page', compact('footer'));
    }

    public function storeMessage(Request $request) {

        $request->validate([
            'contact_name' => 'required',
            'contact_email' => 'required',
            'contact_subject' => 'required',
            'contact_message' => 'required',        
        ], 
        [   
            'contact_name.required' => 'Name must be provided',
            'contact_email.required' => 'Email must be provided',
            'contact_subject.required' => 'Subject must be provided',
            'contact_message.required' => 'Message must be provided',
        ]);

        Contact::create([
            'contact_name' => $request->contact_name,
            'contact_email' => $request->contact_email,
            'contact_subject' => $request->contact_subject,
            'contact_number' => $request->contact_number,
            'contact_message' => $request->contact_message,            
        ]);

        $not_succ = [
            'message' => 'Your Message Submitted Successfully',
            'alert-type' => 'success',
        ];
        
        return redirect()->back()->with($not_succ);
    }

    public function contactMessage(){
        $contactMessage = Contact::latest()->get();
        return view('admin.contact.contact_meesage', compact('contactMessage'));

    }

    public function deleteContactMessage($id) {
        Contact::findOrFail($id)->delete();

        $not_succ = [
            'message' => 'Contact Message Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->route('contact.message')->with($not_succ);
    }

}
