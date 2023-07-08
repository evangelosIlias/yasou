<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function profile() 
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile_view', compact('adminData'));
    }

    public function editProfile() 
    {
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('admin.admin_profile_edit', compact('editData'));
    }

    public function storeProfile(Request $request): RedirectResponse
    {
        $id = Auth::user()->id;
        $storeData = User::find($id);
        $storeData->name = $request->name;
        $storeData->email = $request->email;
        $storeData->username = $request->username;
        
        if ($request->file('profile_image')) {
            $file = $request->file('profile_image');

            $filename = date('Y-m-d H:i:s') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $storeData['profile_image'] = $filename;
        }
        
        $storeData->save();

        $notification = [
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success',
        ];
        
        return redirect()->route('admin.profile')->with($notification);
    }

    public function changePassword()
    {
        return view ('admin.admin_change_password');
    }

    public function updatePassword(Request $request): RedirectResponse
    {
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'confirmpassword' => 'required|same:newpassword',
        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword, $hashedPassword)) {
            $user = User::find(Auth::id());
            $user->password = bcrypt($request->newpassword);
            $user->save();

            $note_succ = [
                'message' => 'Password Updated Successfully',
                'alert-type' => 'success',
            ];

            return redirect()->back()->with($note_succ);
        } else {
            $note_warn = [
                'message' => 'Old Password does nott much',
                'alert-type' => 'error',
            ];

            return redirect()->back()->with($note_warn);
        }

    }


}
