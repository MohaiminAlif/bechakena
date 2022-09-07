<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;


class Permission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    
     public function handle(Request $request, Closure $next)
    {

        $role = auth()->user();

        if($role->role_id == 'Vendor'){
            
            return $next($request);
        }

        if($role->role_id == 'pending'){
            
            return redirect('/pending');
        }
        else{
            return redirect('/vendor_form');
        }

    }
}
