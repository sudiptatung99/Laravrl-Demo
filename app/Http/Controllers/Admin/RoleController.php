<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Module;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Gate::authorize('role-list');
        $role = Role::all();
        return view('admin.pages.role.view',compact('role'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Gate::authorize('create-role');
       $module =  Module::all();
       return view('admin.pages.role.create',compact('module'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Gate::authorize('create-role');
        $this->validate($request,[
            'role'=>'required |unique:roles',
        ]);
        Role::create([
            "role"=>$request->role,
            "slug"=>Str::slug($request->role),
        ])->permission()->sync($request->input('permission'),[]);

        return redirect()->back()->with('success', "New role added successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Gate::authorize('update-role');
        $id = decrypt($id);
        $module =  Module::all();
        $role = Role::find($id);
        return view('admin.pages.role.edit',compact('module','role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Gate::authorize('update-role');
        $id = decrypt($id);
        $role = Role::find($id);
        $role->update([
            "role"=>$request->role,
            "slug"=>Str::slug($request->role),
        ]);
        $role->permission()->sync($request->input('permission'));
        return redirect()->back()->with('success', "Role updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
