<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (Auth::check() || Auth::user()->role == 'admin' || Auth::user()->role == 'user') {
            return $next($request);
        }



            // $userRole = Auth::user()->role;
            // switch ($role) {
            //     case 'admin':
            //         if ($userRole == 0) {
            //             return $next($request);
            //         }
            //         break;
                
            //     case 'user':
            //         if ($userRole == 1) {
            //             return $next($request);
            //         }
            //         break;
            // }

            // // if ($userRole == 0) {
            // //     return redirect()->route('admin');
            // // } else {
            // //     return redirect()->route('dashboard');
            // // }
            

            // switch ($userRole) {
            //     case 0:
            //         return redirect()->route('admin');
            //         break;
            //     case 1:
            //         return redirect()->route('dashboard');
            //         break;
            // }
        
        abort(403);
        
    }
}
