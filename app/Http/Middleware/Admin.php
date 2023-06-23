<?php

namespace App\Http\Middleware;

use App\Models\UserRoles;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $role = UserRoles::where('role', 'admin')->first();
        if(Auth::user()->role_id == $role->id)  
        {
            return $next($request);
        }else {
            Auth::logout();
            return redirect()->back()->withErrors(['Unauthorized'=> 'Unauthorized User Role']);

        }

    }
}
