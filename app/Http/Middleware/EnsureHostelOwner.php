<?php

namespace App\Http\Middleware;

use App\Models\Hostel;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureHostelOwner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $hostel = Hostel::current();

        if(!$hostel){
            return abort(404);
        }

        if(!auth()->check()){
            return abort(401);
        }

        if(auth()->id() !== $hostel->created_by){
            return abort(403, 'You are not the owner of this hostel');
        }

        return $next($request);
    }
}
