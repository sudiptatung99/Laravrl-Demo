<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile.edit');
    }
    public function update(Request $request)
    {
        $admin = Auth::guard('admin')->user()->id;
        Admin::find($admin)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    public function changePassword(Request $request)
    {
        return view('admin.profile.change_password');
    }
    public function passwordUpdate(Request $request)
    {
        $validated = $request->validate([
            'current_password' => 'required',
            'password' => 'required|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'required',
        ]);
        $id = Auth::guard('admin')->user()->id;
        $admin = Admin::find($id);
        if (Hash::check($request->current_password, $admin->password)) {
            $admin->password = bcrypt($request->password);
            $admin->save();
            return redirect()->back()->with('success', 'Password updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Password does not matched !');
        }

    }
}
