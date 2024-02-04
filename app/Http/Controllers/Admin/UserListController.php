<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserListController extends Controller
{
    public function index(){
        $user = User::latest()->get();
        return view('admin.pages.user.user-list',compact('user'));
    }
}
