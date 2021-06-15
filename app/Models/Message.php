<?php

namespace App\Models;

use App\Scopes\DateScopable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;


class Message extends Model
{
    use HasFactory;
    use DateScopable;
    
    protected $fillable=['nom','email','message'];

/**
 * Query Scope threedaysOld
 * ici désactivé car utilisation d'un scope global
 * @return void
 */
  /*  public function scopethreeDaysOld(Builder $query)
    {
        $query->where('created_at','<=',Carbon::parse('3 days ago'));
    }*/
}
