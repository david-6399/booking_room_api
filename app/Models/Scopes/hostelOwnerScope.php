<?php

namespace App\Models\Scopes;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Auth ;

class hostelOwnerScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     */
    public function apply(Builder $builder, Model $model): void
    {
        // dd(auth()->user()->hostel->id);
        if (!Auth::check()) {
            return;
        }

        $user = auth()->user();
        if ($user->hasRole(['super_admin']))    {
            return;
        }

        if ($user->hasRole('admin') && $model->getTable() !== 'hostels') {
            
            $hostel = $user->hostel->id;
            
            if (!$hostel) {
                // If the admin user does not have an associated hostel, restrict all records
                $builder->whereRaw('1 = 0'); // This will return no results
                return;
            }
            
            $builder->where($model->getTable() . '.hostel_id', $hostel); 
        }

        // for Hostels table itself
        if ($user->hasRole('admin') && $model->getTable() === 'hostels') {
            $builder->where('created_by', $user->id);
        }
    }
}
