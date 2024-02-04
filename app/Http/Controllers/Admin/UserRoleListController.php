<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class UserRoleListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Gate::authorize('sub-admin-list');
        $admin = Admin::all();
        return view('admin.pages.user-role.index',compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Gate::authorize('create-sub-admin');
        $role = Role::all();
        return view('admin.pages.user-role.create',compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Gate::authorize('create-sub-admin');
        $validationData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role_id' => 'required',
        ]);
        $data =[
            'name' =>$request->name,
            'email' =>$request->email,
            'password' => Hash::make($request->password),
            'role_id' =>$request->role_id,
        ];
        Admin::create($data);

        return back()->with('success', "New user created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Gate::authorize('update-sub-admin');
        $id = decrypt($id);
        $admin = Admin::find($id);
        $role = Role::all();
        return view('admin.pages.user-role.edit',compact('admin','role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Gate::authorize('update-sub-admin');
        $id = decrypt($id);
        $admin = Admin::find($id);
        $data =[
            'name' =>$request->name,
            'email' =>$request->email,
            'role_id' =>$request->role_id,
        ];
        $admin->update($data);
        return back()->with('success', "User role updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Gate::authorize('delete-sub-admin');
        $id = decrypt($id);
        Admin::destroy($id);
        return back()->with('success', "User role deleted successfully.");

    }
}
