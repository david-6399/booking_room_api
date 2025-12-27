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
        if (!Auth::check()) {
            return;
        }

        $user = auth()->user();

        if ($user->hasRole('super_admin')) {
            return;
        }

        if ($user->hasRole('admin') && $model->getTable() !== 'hostels') {
            
            $builder->where($model->getTable() . '.hostel_id', $user->hostel->id); 
        }

        // for Hostels table itself
        if ($user->hasRole('admin') && $model->getTable() === 'hostels') {
            $builder->where('created_by', $user->id);
        }
    }
}
