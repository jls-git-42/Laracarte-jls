<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;

trait DateScopable
{
    public function scopethreeDaysOld(Builder $query)
    {
        //date actuelle - 3jours
        $query->where('created_at','<=',Carbon::parse('3 days ago'));
        // on peut aussi ecrire
        //$query->where('created_at','<=',now()->subDay(3));
    }


}

