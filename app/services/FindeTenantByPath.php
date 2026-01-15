<?php

namespace App\services;

use App\Models\Hostel;
use Illuminate\Http\Request;

class FindeTenantByPath
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        
    }

    public function findForRequest(Request $request){
        $slug = $request->segment(1);

        if(!$slug){
            return null;
        }
        

        return Hostel::withoutGlobalScopes()->where('slug',$slug)->first();
    }
}
