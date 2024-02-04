<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserListController;
use App\Http\Controllers\Admin\UserRoleListController;
use Illuminate\Support\Facades\Route;

Route::namespace('Auth')->middleware('guest:admin')->group(function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('admin-login');
});
Route::middleware('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //Profile
    Route::get('/profile',[ProfileController::class,'index'])->name('profile');
    Route::post('/profile/update',[ProfileController::class,'update'])->name('profile.update');
    Route::get('/change-password',[ProfileController::class,'changePassword'])->name('change-password');
    Route::post('/change-password/update',[ProfileController::class,'passwordUpdate'])->name('change-password.update');

    // Route::resource('role', RoleController::class);
    Route::get('/role',[RoleController::class,'index'])->name('role.index');
    Route::get('/role/create',[RoleController::class,'create'])->name('role.create');
    Route::post('/role/create',[RoleController::class,'store'])->name('role.store');
    Route::get('/role/edit/{id}',[RoleController::class,'edit'])->name('role.edit');
    Route::put('/role/edit/{id}',[RoleController::class,'update'])->name('role.update');

    Route::get('/user/role',[UserRoleListController::class,'index'])->name('user.role.index');
    Route::get('/user/role/create',[UserRoleListController::class,'create'])->name('user.role.create');
    Route::post('/user/role/create',[UserRoleListController::class,'store'])->name('user.role.store');
    Route::get('/user/role/edit/{id}',[UserRoleListController::class,'edit'])->name('user.role.edit');
    Route::put('/user/role/edit/{id}',[UserRoleListController::class,'update'])->name('user.role.update');
    Route::delete('/user/role/delete/{id}',[UserRoleListController::class,'destroy'])->name('user.role.delete');

    //user list
    Route::get('/users', [UserListController::class, 'index'])->name('users');
    // Route::get('/users', [UserListController::class, 'index'])->name('users');
    // Route::get('/users/delete/{id}', [UserListController::class, 'destroy'])->name('users.delete');





    //dummy
    Route::get('/dummy',function(){
        return view('admin.pages.project.index');
    })->name('dummy');
    Route::get('/dummy/create',function(){
        return view('admin.pages.project.create');
    })->name('dummy.create');
    Route::get('/dummy/update',function(){
        return view('admin.pages.project.edit');
    });
    Route::get('/dummy/show',function(){
        return view('admin.pages.project.show');
    });





    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');

});

