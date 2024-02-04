<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use App\Models\Permission;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class AuthGateMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $admin = Auth::guard('admin')->user();
        if ($admin) {
            $permissions = Permission::all();
            foreach ($permissions as $key => $permission) {
                Gate::define($permission->slug, function ($user = null) use($permission) {
                    $adminDetail = Admin::find(Auth::guard('admin')->user()->id);
                    return $adminDetail->hasPermission($permission->slug);
                });
            }

        }
        return $next($request);
    }
}
