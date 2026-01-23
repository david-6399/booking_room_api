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
    { {
            // Guests: do not filter
            if (!Auth::check()) {
                return;
            }

            $user = Auth::user();

            // Super admin: no filter
            if ($user->hasRole('super_admin')) {
                return;
            }

            // Admin: filter by hostel
            if ($user->hasRole('admin') && $model->getTable() !== 'hostels') {
                $hostelId = $user->hostel?->id;

                if (!$hostelId) {
                    // Admin without a hostel sees nothing
                    $builder->whereRaw('1 = 0');
                    return;
                }

                $builder->where($model->getTable() . '.hostel_id', $hostelId);
            }

            // Admin filtering for hostels themselves
            if ($user->hasRole('admin') && $model->getTable() === 'hostels') {
                $builder->where('created_by', $user->id);
            }
        }
    }
}
